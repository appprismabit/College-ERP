<?php
class area extends Model{

    public function createArea($data)
    {
        $query = "INSERT INTO area (title, area_lat, area_lon) VALUES (?,?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('sss', $data['title'], $data['lat'], $data['lon']);

        if ($stmt->execute()) {
            return true;
        } else {
            error_log("Create Area Error: " . $stmt->error);
            return false;
        }
    }
    public function getAllArea()
    {
        $query = "SELECT * FROM area";
        $result = $this->db->query($query);

        $area = [];
        while ($row = $result->fetch_assoc()) {
            
            $area[] = $row;
        }
        return $area;
    }

    
    }
    
   

