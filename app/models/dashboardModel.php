<?php
class dashboardModel extends Model
{
    public function getLatestComplaints()
    {

        $status0Complaints = $this->db->query("
        SELECT * 
        FROM complaints 
        WHERE status = 0 
        ORDER BY complaint_id DESC 
        LIMIT 5
    ")->fetch_all(MYSQLI_ASSOC);


        $status2Complaints = $this->db->query("
        SELECT * 
        FROM complaints 
        WHERE status = 2 
        ORDER BY complaint_id DESC 
        LIMIT 5
    ")->fetch_all(MYSQLI_ASSOC);


        $complaints = [
            'status_0' => $status0Complaints,
            'status_2' => $status2Complaints
        ];

        return $complaints;
    }


    public function complaintsCount()
    {

        $query = $this->db->query("SELECT COUNT(*) AS total FROM complaints")->fetch_assoc();
        return $query;
    }

    public function areaCount()
    {
        $query = $this->db->query("SELECT COUNT(*) AS total_area FROM area")->fetch_assoc();
        return $query;
    }

    public function technicianCount()
    {
        $query = $this->db->query("SELECT COUNT(*) AS total_technician FROM users where role = 2")->fetch_assoc();
        return $query;
    }

    public function getActiveTechnician()
    {
        $query = $this->db->query("SELECT * FROM users WHERE user_id IN(SELECT technician_id FROM complaint_technician where user_status = 'active')");
        $data = [];
        while ($row = $query->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    // public function getchTechnicianWorkCount(){
    //     $query = $this->db->query("SELECT technician_id, COUNT(*) as complaint_count  FROM complaint_technician  GROUP BY technician_id");   
    //     $data = [];
    //     while($row = $query->fetch_assoc()){
    //         $row['technician_id'] = $this->gettechnicianNameByid($row['technician_id']);
    //         $data[] = $row;
    //     }
    //     return $data;

    // }
    public function getchTechnicianWorkCount()
    {
        // Combined query to get both assigned and resolved works
        $query = $this->db->query("
            SELECT 
                technician_id,
                SUM(CASE WHEN c.status = 0 OR c.status = 1 THEN 1 ELSE 0 END) AS assigned_count,
                SUM(CASE WHEN c.status = 2 THEN 1 ELSE 0 END) AS resolved_count
            FROM 
                complaint_technician ct
            JOIN 
                complaints c ON ct.complain_id = c.complaint_id
            GROUP BY 
                technician_id;
        ");

        $technicianData = [];
        while ($row = $query->fetch_assoc()) {
            $row['technician_id'] = $this->gettechnicianNameByid($row['technician_id']);
            $technicianData[] = [
                'technician_id' => $row['technician_id'],
                'assigned_count' => $row['assigned_count'],
                'resolved_count' => $row['resolved_count']
            ];
        }

        return $technicianData;
    }
}
