<?php
class mapModel extends Model
{

    public function fetchingComplaintsDetailsForMap()
    {
        // Fetch complaint count by sourcewardcode
        $sourceWardQuery = "
            SELECT sourcewardcode, COUNT(*) AS complaint_count 
            FROM complaints 
            GROUP BY sourcewardcode
        ";
        $query = $this->db->query($sourceWardQuery);

        $bySourceWard = [];
        while ($row = $query->fetch_assoc()) {
            $bySourceWard[] = $row;
        }

        // Fetch month-wise complaint count and resolved complaint count
        $monthQuery = "
            SELECT 
                sourcewardcode, 
                DATE_FORMAT(created, '%Y-%m') AS month, 
                COUNT(*) AS complaint_count, -- Total complaints created
                SUM(CASE WHEN completed IS NOT NULL AND status = 2 THEN 1 ELSE 0 END) AS resolve_count -- Resolved complaints
            FROM complaints
            WHERE created >= DATE_SUB(CURDATE(), INTERVAL 3 MONTH) -- Filter last 3 months
            GROUP BY sourcewardcode, month
            ORDER BY month DESC
        ";
        $result = $this->db->query($monthQuery);

        $byMonth = [];
        while ($row = $result->fetch_assoc()) {
            $byMonth[] = $row;
        }

        // Combine sourcewardcode and month information into structured output
        $finalData = [];
        foreach ($byMonth as $monthData) {
            $sourcewardcode = $monthData['sourcewardcode'];
            $month = $monthData['month'];
            $complaint_count = $monthData['complaint_count'];
            $resolve_count = $monthData['resolve_count']; // Include resolved count

            // Initialize the array for the sourcewardcode if not already set
            if (!isset($finalData[$sourcewardcode])) {
                $finalData[$sourcewardcode] = [];
            }

            // Add the data for this sourcewardcode and month
            $finalData[$sourcewardcode][] = [
                'month'           => date("F", strtotime($month)), // Convert "2024-12" to "December"
                'complaint_count' => $complaint_count,
                'resolve_count'   => $resolve_count // Include resolved count in output
            ];
        }

        // Return the final structured data
        return [
            'success' => true,
            'bySourceWard' => $bySourceWard,
            'byMonth' => $finalData
        ];
    }


    public function getResolvedPendingComplaints($ward_code)
    {
        // Fetch pending complaints for the given ward using prepared statement
        $complaintsCreated = $this->db->prepare("
            SELECT sourcewardcode, COUNT(*) AS complaintPending 
            FROM complaints 
            WHERE  sourcewardcode = ? 
            GROUP BY sourcewardcode
        ");
        $complaintsCreated->bind_param("s", $ward_code);

        $pendingData = [];
        if ($complaintsCreated->execute()) {
            $result = $complaintsCreated->get_result();
            while ($penRow = $result->fetch_assoc()) {
                $pendingData[] = $penRow;
            }
        }

        // Fetch resolved complaints for the given ward using prepared statement
        $complaintsResolved = $this->db->prepare("
            SELECT sourcewardcode, COUNT(*) AS complaintResolved 
            FROM complaints 
            WHERE status = 2 AND sourcewardcode = ? 
            GROUP BY sourcewardcode
        ");
        $complaintsResolved->bind_param("s", $ward_code);

        $resolvedData = [];
        if ($complaintsResolved->execute()) {
            $result = $complaintsResolved->get_result();
            while ($resRow = $result->fetch_assoc()) {
                $resolvedData[] = $resRow;
            }
        }
        header('Content-Type: application/json');

        return [
            'createdComplaints' => $pendingData,
            'resolvedComplaints' => $resolvedData
        ];
    }

    public function getComplaintDescriptionChart($wardNo)
    {

        $query = $this->db->prepare("SELECT description, COUNT(*) AS complaint_count FROM complaints WHERE sourcewardcode = ?  GROUP BY description");
        $query->bind_param("s", $wardNo);
        if ($query->execute()) {
            $result = $query->get_result();
            $data = [];
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                $row["description"] = $this->getDescriptionTitle($row['description']);
                $row['color'] = $this->getRandomColor()[$i];
                $data[] = $row;
                $i++;
            }
            return $data;
        }
    }
}
