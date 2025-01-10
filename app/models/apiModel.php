<?php
class apiModel extends Model
{
    public function findUserByEmail($username)
    {
        $query = "SELECT * FROM users WHERE user_name = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    public function updateSubcriberId($username, $subscriberId)
    {

        $query = $this->db->prepare("UPDATE users SET subscriberId = ? WHERE user_email = ? ");
        $query->bind_param("ss", $subscriberId, $username);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function userComplaints($technicianId, $flag)
    {

        $query = $this->db->prepare("SELECT * FROM complaints WHERE status= ? and complaint_id IN ( SELECT complaint_id FROM complaint_technician WHERE technician_id = ? AND status = 1) ");
        $query->bind_param("ss", $flag, $technicianId);
        if ($query->execute()) {
            $result = $query->get_result();
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $row['area'] = $this->getArea($row['area_id']);
                $row['description'] = $this->getDescriptionTitle($row['description']);
                $data[] = $row;
            }
            return $data;
        }
    }
    public function saveComplaint($data)
    {

        $date = date('Ymd');

        $maxtotal = $this->db->query("select max(complaint_id) as total_id from complaints")->fetch_assoc()['total_id'];

        $complainNumber = $date . $maxtotal;
        $complainNumber = $complainNumber + 1;


        $query = "INSERT INTO complaints (description, image, area_id,created,complaintnumber, lon, lat, address, complaint_type, sourcewardcode, phoneNumber) VALUES (?,?,?, ?, ?,?,?,?,?,?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sssssssssss', $data['description'], $data['image'], $data['area_id'], $data['created'], $complainNumber, $data['lon'], $data['lat'], $data['address'], $data['complaint_type'], $data['sourcewardcode'], $data['phoneNumber']);

        if ($stmt->execute()) {

            return json_encode(
                $complainNumber
            );
        } else {
            error_log("Create Complaint Error: " . $stmt->error);
            return false;
        }
    }

    public function getMaxId()
    {
        return $this->db->query("SELECT MAX(complaint_id) as max_id from complaints")->fetch_assoc()['max_id'];
    }
    //SAVE RESOLUTION

    public function saveResolution($data)
    {
        $status = $data['resolStatus'];
        $complaintId = $data['complaint_id'];
        $userId = $this->db->query("SELECT technician_id FROM complaint_technician WHERE complaint_id = '$complaintId' AND status = 1 ")->fetch_assoc()['technician_id'];

        if ($status == '0') { // FOR HANDLING THE REJECTION
            $rejectDate = date('Y-m-d H:i:s');
            $this->updateTechnicianStatus($status, $complaintId);
            $rejectMsg = "The technician has rejected the task";
            $this->insertResolution($rejectMsg, null, $rejectDate, $complaintId, $status, $userId);
        }

        if ($status == '1') { // FOR HANDLING ACCEPTANCE
            $this->updateComplaintStatus($status, $complaintId);

            $technicianTitle = $this->userDetails($userId)['user_title'];
            if ($data['resolution'] != "" && $data['image'] != "") {
                $acceptMsg = $data['resolution'];
                $acceptImage = $data['image'];
            } else {
                $acceptMsg = "Technician " . $technicianTitle . " has accepted the task";
                $acceptImage = null;
            }
            $acceptDate = date('Y-m-d H:i:s');
            $this->insertResolution($acceptMsg, $acceptImage, $acceptDate, $complaintId, $status, $userId);
            return true;
        }

        if ($status == '2') { // FOR COMPLETION
            $completedDate = date('Y-m-d H:i:s');

            $this->updateComplaint($completedDate, $complaintId, $status);
            $this->insertResolution($data['resolution'], $data['image'], $completedDate, $complaintId, $status, $userId);
            return true;
        }

        return false;
    }
    public function getImageName($complaint_id)
    {
        $query = $this->db->prepare("SELECT complaintnumber,complaint_id FROM complaints WHERE complaint_id in (SELECT complaint_id FROM resolution WHERE complaint_id = ?)  ");
        $query->bind_param("i", $complaint_id);
        if ($query->execute()) {
            $result = $query->get_result();
            return $result->fetch_assoc();
        }
    }

    private function updateComplaint($completedDate, $complaintId, $status)
    {
        $update = $this->db->prepare("UPDATE complaints SET completed = ? , status = ? WHERE complaint_id = ?");
        $update->bind_param("sss", $completedDate, $status, $complaintId);
        $update->execute();
    }

    private function updateTechnicianStatus($status, $complaintId)
    {
        $update = $this->db->prepare("UPDATE complaint_technician SET status = ? WHERE complaint_id = ?");
        $update->bind_param("ss", $status, $complaintId);
        $update->execute();
    }

    private function updateComplaintStatus($status, $complaintId)
    {
        $update = $this->db->prepare("UPDATE complaints SET status = ? WHERE complaint_id = ?");
        $update->bind_param("ss", $status, $complaintId);
        $update->execute();
    }

    private function insertResolution($message, $image, $date, $complaintId, $status, $userId)
    {
        $query = $this->db->prepare("INSERT INTO resolution (resolution_msg, image, resolution_date, complaint_id, status, technicianId) VALUES (?, ?, ?, ?, ?, ?)");
        $query->bind_param("ssssss", $message, $image, $date, $complaintId, $status, $userId);
        $query->execute();
    }
    //ENDS HERE 

    public function getAreaById($technician_id)
    {
        $query = $this->db->prepare("SELECT * FROM technician_area WHERE technician_id = ?");
        $query->bind_param("s", $technician_id);
        $query->execute();
        $result = $query->get_result();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $row['area_id'] = $this->getAreaName($row['area_id']);
            $data[] = $row;
        }

        return $data;
    }
    public function getTechnicianStatus($id)
    {

        $data = $this->getTechnicianTask($id);
        return $data;
    }

    public function getAllUsersSingle($technician_id)
    {
        $query = $this->db->prepare("SELECT * FROM users where user_id = ? ");
        $query->bind_param("s", $technician_id);
        if ($query->execute()) {
            $result = $query->get_result();
            $row = $result->fetch_assoc();
            return $row;
        }
    }
    public function getNearestArea($lat, $lon)
    {

        $area = $this->db->query("SELECT * FROM area")->fetch_all(MYSQLI_ASSOC);

        function euclideanDistance($lat1, $lon1, $lat2, $lon2)
        {
            $latDiff = $lat2 - $lat1;
            $lonDiff = $lon2 - $lon1;
            return sqrt(($latDiff * $latDiff) + ($lonDiff * $lonDiff));
        }


        $nearestArea = null;
        $shortestDistance = PHP_INT_MAX;

        foreach ($area as $area) {

            $distance = euclideanDistance($lat, $lon, $area['area_lat'], $area['area_lon']);

            if ($distance < $shortestDistance) {
                $shortestDistance = $distance;
                $nearestArea = $area;
            }
        }

        return $nearestArea['area_id'];
    }

    public function fetchComplaintDescriptionType()
    { // FOR THE DROPDOWN IN THE COMPLAINTS SECTION
        return $this->db->query("SELECT * FROM complaint_description_type")->fetch_all(MYSQLI_ASSOC);
    }

    public function getComplaintType($id)
    {
        // fetching complaint_type from id 
        $data = $this->getComplaintTypeFromDescription($id);
        return $data;
    }

    public function updatePhoneNumber($technician_id, $newPhoneNumber)
    {

        $query = $this->db->prepare("UPDATE users SET phone_number = ? WHERE user_id = ?");

        // Bind the parameters
        $query->bind_param("ss", $newPhoneNumber, $technician_id);


        if ($query->execute()) {

            return true;
        } else {

            return false;
        }
    }

    //STARTING OF GETTING THE WARDNO 
    function isPointInPolygon($point, $polygon)
    {
        $x = $point[0];
        $y = $point[1];
        $inside = false;
        $n = count($polygon);
        for ($i = 0, $j = $n - 1; $i < $n; $j = $i++) {
            $xi = $polygon[$i][0];
            $yi = $polygon[$i][1];
            $xj = $polygon[$j][0];
            $yj = $polygon[$j][1];
            $intersect = (($yi > $y) != ($yj > $y)) &&
                ($x < ($xj - $xi) * ($y - $yi) / ($yj - $yi) + $xi);
            if ($intersect) $inside = !$inside;
        }
        return $inside;
    }

    // Function to handle MultiPolygon
    function isPointInMultiPolygon($point, $multipolygon)
    {
        foreach ($multipolygon as $polygon) {
            if ($this->isPointInPolygon($point, $polygon[0])) {
                return true;
            }
        }
        return false;
    }

    // Function to find the ward based on lat/long
    function findWardByLatLon($latitude, $longitude, $wards)
    {

        foreach ($wards['features'] as $ward) {
            $geometry = $ward['geometry']['coordinates'];
            if ($ward['geometry']['type'] === 'Polygon') {
                if ($this->isPointInPolygon([$longitude, $latitude], $geometry[0])) {
                    return $ward['properties'];
                }
            } elseif ($ward['geometry']['type'] === 'MultiPolygon') {
                if ($this->isPointInMultiPolygon([$longitude, $latitude], $geometry)) {
                    return $ward['properties'];
                }
            }
        }
        return null;
    }

    public function getMyWardNo($latitude, $longitude)
    {



        $geojson = file_get_contents('./plugins/custom/guwahati_ward_boundaries.geojson');
        $wards = json_decode($geojson, true);


        $ward = $this->findWardByLatLon($latitude, $longitude, $wards);

        return $ward;
    }

    //ENDING OF GETTING THE WARNNO WITH THE LAT LON
    public function fetchComplaintLatLon($complaint_id)
    {
        return $this->db->query("SELECT lat, lon FROM complaints WHERE complaint_id = '$complaint_id'")->fetch_assoc();
    }

    function calculateDistance($checkTechnicianLoc, $resolutionlat, $resolutionlon)
    {
        // Earth radius in meters
        $earthRadius = 6371000;


        // Convert latitude and longitude from degrees to radians
        $lat1 = deg2rad($checkTechnicianLoc['lat']);
        $lon1 = deg2rad($checkTechnicianLoc['lon']);
        $lat2 = deg2rad($resolutionlat);
        $lon2 = deg2rad($resolutionlon);

        // Haversine formula to calculate the distance
        $deltaLat = $lat2 - $lat1;
        $deltaLon = $lon2 - $lon1;

        $a = sin($deltaLat / 2) * sin($deltaLat / 2) +
            cos($lat1) * cos($lat2) *
            sin($deltaLon / 2) * sin($deltaLon / 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        // Distance in meters
        $distance = $earthRadius * $c;

        return $distance;
    }
}
