<?php

class User extends Model
{

    public function getAllUsers()
    {
        $query = "SELECT * FROM users";
        $result = $this->db->query($query);
        $users = [];
        while ($row = $result->fetch_assoc()) {
            if ($row['user_id'] == 1) continue;
            $row['role'] = $this->getAllUserRole($row['role']);
            $users[] = $row;
        }

        return $users;
    }

    public function getAreaById()
    {
        $query = $this->db->prepare("SELECT * FROM technician_area WHERE technician_id = ?");
        $query->bind_param("s", $_SESSION['user_id']);
        $query->execute();
        $result = $query->get_result();

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $row['area_id'] = $this->getAreaName($row['area_id']);
            $data[] = $row;
        }

        return $data;
    }



    public function findUserByEmail($username)
    {
        $query = "SELECT * FROM users WHERE user_name = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    public function checkEmailExistence($email)
    {
        $query = $this->db->prepare("SELECT * FROM users WHERE user_email = ?");
        $query->bind_param("s", $email);
        if ($query->execute()) {
            return  $query->get_result();
        }
    }
    public function createUser($data)
    {
        $maxId = $this->db->query("SELECT MAX(user_id) as max_id FROM users")->fetch_assoc()['max_id'];
        $maxId = $maxId + 1;

        $user_reg_no = date('Ymd') . $maxId;

        $query = "INSERT INTO users (user_reg_no , user_name, user_title, user_email, password, role, phone_number) VALUES (?,?,?, ?, ?, ?,?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ssssssi', $user_reg_no, $data['email'], $data['user_title'], $data['email'], $data['password'], $data['role'], $data['phone']);

        if ($stmt->execute()) {
            return true;
        } else {
            error_log("Create User Error: " . $stmt->error);
            return false;
        }
    }
    public function fetchAllRoles()
    {
        $query = "SELECT * FROM allroles";
        $result = $this->db->query($query);

        $fetchAllRoles = [];
        while ($row = $result->fetch_assoc()) {
            if ($row['role_id'] == 1) continue;
            $fetchAllRoles[] = $row;
        }

        return $fetchAllRoles;
    }

    public function getAllUsersSingle()
    {
        $query = $this->db->prepare("SELECT * FROM users where user_id = ? ");
        $query->bind_param("s", $_SESSION['user_id']);
        if ($query->execute()) {


            $result = $query->get_result();

            // $users_single = [];
            $row = $result->fetch_assoc();


            return $row;
        }
    }





    public function userComplaints()
    {
        $query = $this->db->prepare("SELECT c.*, ct.technician_id
        FROM complaints c
        INNER JOIN complaint_technician ct ON c.complaint_id = ct.complaint_id
        WHERE ct.status = 1 AND ct.technician_id = ? 
        ");
        $query->bind_param("s", $_SESSION["user_id"]);
        if ($query->execute()) {
            $result = $query->get_result();
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $row['description'] = $this->getDescriptionTitle($row['description']);
                $data[] = $row;
            }
            return $data;
        }
    }
    public function fetchArea()
    {
        $query = "SELECT * FROM area where area_id not in (select area_id from technician_area where technician_id = '$_SESSION[user_id]')";
        $result = $this->db->query($query);

        $technician = [];
        while ($row = $result->fetch_assoc()) {

            $technician[] = $row;
        }

        return $technician;
    }

    public function insertArea($data)
    {
        $query = $this->db->prepare("INSERT INTO technician_area (technician_id, area_id, stamp) values(?,?,?)");
        $query->bind_param("sss", $_SESSION["user_id"], $data["area_id"], $data['date']);
        if ($query->execute()) {
            return true;
        } else {
            error_log("Create User Error: " . $query->error);
            return false;
        }
    }

    public function updateStatus($data)
    {
        $update = $this->db->prepare("UPDATE users SET user_status = ? where user_id = ?");

        $update->bind_param("ss", $data['userStatus'], $_SESSION['user_id']);
        if ($update->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
