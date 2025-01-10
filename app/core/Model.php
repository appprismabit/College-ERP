<?php
class Model
{
    protected $db;
    public function __construct()
    {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }
    public function getAllUserRole($id)
    {
        return $this->db->query("SELECT * FROM allroles where role_id = '$id'")->fetch_assoc()['title'];
    }

    public function userDetails($id)
    {
        return $this->db->query("SELECT * FROM users where user_id = '$id'")->fetch_assoc();
    }
    public function getMaterial($id)
    {
        return $this->db->query("SELECT * FROM materials where id = '$id'")->fetch_assoc()['title'];
    }
    public function getStorage_location($id)
    {
        return $this->db->query("SELECT * FROM storage_locations where id = '$id'")->fetch_assoc()['title'];
    }
    public function getAreaName($id)
    {
        return $this->db->query("SELECT * FROM area where area_id = '$id'")->fetch_assoc()['title'];
    }

    public function getArea($id)
    {
        return $this->db->query("SELECT title from area where area_id = '$id'")->fetch_assoc()['title'];
    }

    public function getCount($flag)
    {
        $return = 0;
        switch ($flag) {
            case 'TECH':
                $return = $this->db->query("SELECT count(user_id) as total_tech FROM users where role = 2")->fetch_assoc()['total_tech'];
                break;
        }
        return $return;
    }
    public function getTechnicianTask($id)
    {
        $query = "
        SELECT 
        SUM(CASE WHEN c.status = 2 THEN 1 ELSE 0 END) AS resolved_count,
        SUM(CASE WHEN c.status = 1 THEN 1 ELSE 0 END) AS process_count,
        SUM(CASE WHEN c.status = 0 THEN 1 ELSE 0 END) AS pending_count,
        (SELECT COUNT(*) 
         FROM technician_area ta 
         WHERE ta.technician_id = ct.technician_id) AS total_area_count
          FROM 
        complaints c
         INNER JOIN 
        complaint_technician ct ON c.complaint_id = ct.complain_id AND ct.status != 0
         WHERE 
        ct.technician_id = ?";

        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $counts = $result->fetch_assoc();

        return [
            'resolved_count' => $counts['resolved_count'],
            'process_count' => $counts['process_count'],
            'pending_count' => $counts['pending_count'],
            'total_area' => (string)$counts['total_area_count']
        ];
    }


    public function getComplaintTypeFromDescription($id)
    {
        $query = $this->db->prepare("SELECT complaint_type from complaint_description_type where id = ?");
        $query->bind_param("s", $id);
        $query->execute();
        return $query->get_result()->fetch_assoc()['complaint_type'];
    }


    public function getDescriptionTitle($id)
    {
        return $this->db->query("SELECT title from complaint_description_type where id = '$id'")->fetch_assoc()['title'];
    }

    public function gettechnicianNameByid($id)
    {
        return $this->db->query("SELECT user_title from users where user_id = '$id'")->fetch_assoc()['user_title'];
    }

    public function getRandomColor()
    {

        $arrayOfColors = ['#5d2e46', '#f72585', '#ffd500', '#00a6fb', '#22223b', '#eff2c0', '#2667ff', '#d90429', '#bbeae5', '#45251e'];
        return $arrayOfColors;
    }
}
