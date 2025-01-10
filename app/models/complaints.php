<?php
class complaints extends Model
{



    public function saveResolution($data)
    {

        if ($data['resolStatus'] == '2') {
            $completedDate = date('Y-m-d H-m-s');

            $update = $this->db->prepare("UPDATE complaints SET completed = ? where complaint_id = ?");
            $update->bind_param("ss", $completedDate, $_SESSION['complaint_id']);
            $update->execute();
        }

        $update = $this->db->prepare("UPDATE complaints SET status = ? where complaint_id = ?");
        $update->bind_param("ss", $data['resolStatus'], $_SESSION['complaint_id']);
        $update->execute();

        $query = $this->db->prepare("INSERT INTO resolution (resolution_msg, image, resolution_date, complaint_id) values (?,?,?,?)");
        $query->bind_param("ssss", $data['resolution'], $data['image'], $data['resolutionDate'], $_SESSION['complaint_id']);
        if ($query->execute()) {
            return true;
        } else {
            error_log("create resolution Errro: " . $query->error);
            return false;
        }
    }

    public function fetchComplaints()
    {
        $rows = [];
        $query = $this->db->query("SELECT * FROM complaints  ORDER BY complaint_id DESC")->fetch_all(MYSQLI_ASSOC);

        foreach ($query as $qry) {
            $qry['area'] = $this->getArea($qry['area_id']);
            $qry['description'] = $this->getDescriptionTitle($qry['description']);
            $rows[] = $qry;
        }

        return $rows;
    }
    public function getAllComplaintsSingle()
    {
        $query = $this->db->prepare("SELECT * FROM complaints WHERE complaint_id = ? ORDER BY complaint_id DESC");
        $query->bind_param("s", $_SESSION['complaint_id']);
        $query->execute();
        $data = $query->get_result()->fetch_assoc();
        $data['area'] = $this->getArea($data['area_id']);
        $data['description'] = $this->getDescriptionTitle($data['description']);
        $data['created'] = date('d-m-Y h:i:s A', strtotime($data['created']));
        return $data;
    }
    public function fetchArea()
    {
        $query = "SELECT * FROM area";
        $result = $this->db->query($query);

        $fetchArea = [];
        while ($row = $result->fetch_assoc()) {
            $fetchArea[] = $row;
        }

        return $fetchArea;
    }

    public function getResolution()
    {
        $query = $this->db->prepare("SELECT * FROM resolution WHERE complaint_id = ?");
        $query->bind_param("s", $_SESSION['complaint_id']);
        $query->execute();
        $result = $query->get_result();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            // if ($row['resolution_msg'] == null || $row['resolution_msg'] == '') continue;

            $data[] = $row;
        }
        return $data;
    }

    public function getAllTechnician()
    {
        $role = 2;
        $status = "active";
        $query = $this->db->prepare("select * from users where role = ? AND user_status = ?");
        $query->bind_param("ss", $role, $status);
        $query->execute();
        $result = $query->get_result();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            if ($row['user_title'] == "") continue;
            $data[] = $row;
        }
        return $data;
    }
    public function getAssignTechnician()
    {
        $query = $this->db->prepare("SELECT * FROM complaint_technician WHERE complaint_id = ? ORDER BY comptech_id DESC");
        $query->bind_param("s", $_SESSION['complaint_id']);
        $query->execute();
        $result = $query->get_result();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $row['technician_title'] = $this->userDetails($row['technician_id'])['user_title'];
            $data[] = $row;
        }
        return $data;
    }
    public function saveTechnician($subscriberId, $userId) //ASSIGNING TECHNICIAN
    {

        $query = $this->db->prepare("INSERT INTO complaint_technician(complaint_id, technician_id, subscriberId) VALUES (?, ?, ?)");
        $query->bind_param("sss", $_SESSION['complaint_id'], $userId, $subscriberId);

        if ($query->execute()) {

            $technicianName = $this->userDetails($userId)['user_title'];
            $new_date = date('Y-m-d H:i:s');
            $resolmsg = "The task assigned to  " . $technicianName;
            $status = 3; //FOR ASSIGN THE TECHNICIAN WE HAVE TAKEN THIS;
            $resqry = $this->db->prepare("INSERT INTO resolution(resolution_msg, resolution_date, complaint_id, technicianId, status) values(?,?,?,?,?)");
            $resqry->bind_param("ssisi", $resolmsg, $new_date, $_SESSION['complaint_id'], $userId, $status);
            $resqry->execute();



            return true;
        } else {
            return false;
        }
    }
    public function getComplaintDetails($data)
    {
        $query = $this->db->prepare("SELECT * FROM complaints WHERE complaintnumber = ?");

        $query->bind_param("s", $data['complaintnumber']);

        $query->execute();
        $result = $query->get_result();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $row['description'] = $this->getDescriptionTitle($row['description']);
            $data[] = $row;
        }
        return $data;
    }
    public function getUserNameForNotification($userId)
    {
        return $this->db->query("SELECT user_title from users WHERE user_id = '$userId'")->fetch_assoc()['user_title'];
    }
    public function getComplaintsByDate($fromDate, $toDate)
    {
        $query = $this->db->prepare("SELECT * FROM complaints WHERE created BETWEEN ? AND ?");

        $query->bind_param("ss", $fromDate, $toDate);

        if ($query->execute()) {
            $data = [];
            $result = $query->get_result();

            while ($row = $result->fetch_assoc()) {
                $row['area'] = $this->getArea($row['area_id']);
                $row['description'] = $this->getDescriptionTitle($row['description']);
                $data[] = $row;
            }
            return $data;
        } else {
            die('Execute failed: ' . $query->error);
        }
    }

    public function getIdFromRegistrationNo($registrationNO)
    {
        $query = $this->db->prepare("SELECT complaint_id from complaints WHERE complaintnumber = ?");
        $query->bind_param("s", $registrationNO);
        if ($query->execute()) {
            $result = $query->get_result()->fetch_assoc();
            return $result;
        } else {
            return false;
        }
    }

    public function getCreatedAndCompletedDate($complaint_id)
    {
        return $this->db->query("SELECT created, completed FROM complaints WHERE complaint_id =$complaint_id")->fetch_assoc();
    }
}
