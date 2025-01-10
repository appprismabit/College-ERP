<?php
class technician extends Model
{
    public function getAllTechnician()
    {

        $userRole = '2';
        $query = $this->db->prepare("SELECT * FROM users where role = ?");
        $query->bind_param("s", $userRole);
        $query->execute();

        $result =  $query->get_result();
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
