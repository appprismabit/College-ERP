<?php

class masterModel extends Model
{
    public function getTechnicianDetailsByDate($fromDate, $toDate, $technicianId)
    {
        if ($technicianId == "all") {
            $query = $this->db->prepare("SELECT c.*, ct.technician_id
            FROM complaints c
            INNER JOIN complaint_technician ct ON c.complaint_id = ct.complaint_id
            WHERE c.created BETWEEN ? AND ? AND ct.status = 1;
            ");

            $query->bind_param("ss", $fromDate, $toDate);
        } else {
            $query = $this->db->prepare(
                "SELECT c.*, ct.technician_id
                FROM complaints c
                INNER JOIN complaint_technician ct ON c.complaint_id = ct.complaint_id
                WHERE c.created BETWEEN ? AND ? AND ct.status = 1 AND ct.technician_id = ? "
            );


            $query->bind_param("sss", $fromDate, $toDate, $technicianId);
        }



        if ($query->execute()) {
            $data = [];
            $result = $query->get_result();


            while ($row = $result->fetch_assoc()) {
                $row['technicianTitle'] =  $this->gettechnicianNameByid($row['technician_id']);
                $row['area'] = $this->getArea($row['area_id']);
                $row['description'] = $this->getDescriptionTitle($row['description']);
                $data[] = $row;
            }
            return $data;
        }

        // Return empty array if query fails
        return [];
    }
    //QUERY FOR COMPAINT DESCRIPTON DROPDOWN
    public function getAllComplaintDescription()
    {
        $query = $this->db->query("SELECT * FROM complaint_description_type");
        $data = [];
        while ($row = $query->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    //QUERY FOR DROPDOWN WARNO
    public function getAllWardNo()
    {
        $query = $this->db->query("SELECT * FROM guwahati_ward");
        $data = [];
        while ($row = $query->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    //FETCHING ALL COMPLAINT BY ITS DESCRIPTION TYPE    
    public function getReportByComplaintDescriptionType($fromDate, $toDate, $complaintDescriptionId)
    {


        $query = $this->db->prepare("SELECT * FROM complaints WHERE created BETWEEN ? AND ? AND 	description =?");

        $query->bind_param("sss", $fromDate, $toDate, $complaintDescriptionId);

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

    //FETCHING COMPLAINTS BY ITS WARDNO 
    public function getReportByWardNo($fromDate, $toDate, $wardNo)
    {

        $query = $this->db->prepare("SELECT * FROM complaints WHERE created BETWEEN ? AND ? AND 	sourcewardcode =?");

        $query->bind_param("sss", $fromDate, $toDate, $wardNo);

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


    // public function getReportForTechnician($technicianId, $complaintId)
    // {
    //     $query = $this->db->prepare("SELECT * FROM resolution WHERE technicianId = ? AND complaint_id = ?");
    //     $query->bind_param("ii", $technicianId, $complaintId);
    //     if ($query->execute()) {
    //         $data = [];
    //         $result = $query->get_result();
    //         while ($row = $result->fetch_assoc()) {
    //             $data[] = $row;
    //         }
    //         return $data;
    //     }
    // }
}
