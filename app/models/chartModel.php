<?php
class chartModel extends Model
{
    public function getBarchart()
    {
        $query = "
        SELECT 
            COALESCE(raised.month, resolved.month) AS month,
            COALESCE(raised.raised_complaints, 0) AS raised_complaints,
            COALESCE(resolved.resolved_complaints, 0) AS resolved_complaints
        FROM (
            SELECT 
                DATE_FORMAT(created, '%Y-%m') AS month, 
                COUNT(*) AS raised_complaints
            FROM complaints
            GROUP BY month
        ) AS raised
        LEFT JOIN (
            SELECT 
                DATE_FORMAT(completed, '%Y-%m') AS month, 
                COUNT(*) AS resolved_complaints
            FROM complaints
            WHERE completed IS NOT NULL AND status = 2
            GROUP BY month
        ) AS resolved
        ON raised.month = resolved.month

        UNION

        SELECT 
            COALESCE(raised.month, resolved.month) AS month,
            COALESCE(raised.raised_complaints, 0) AS raised_complaints,
            COALESCE(resolved.resolved_complaints, 0) AS resolved_complaints
        FROM (
            SELECT 
                DATE_FORMAT(created, '%Y-%m') AS month, 
                COUNT(*) AS raised_complaints
            FROM complaints
            GROUP BY month
        ) AS raised
        RIGHT JOIN (
            SELECT 
                DATE_FORMAT(completed, '%Y-%m') AS month, 
                COUNT(*) AS resolved_complaints
            FROM complaints
            WHERE completed IS NOT NULL AND status = 2
            GROUP BY month
        ) AS resolved
        ON raised.month = resolved.month

        ORDER BY month
    ";

        $result = $this->db->query($query);
        $data = $result->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    public function fetchAreaChart()
    {

        $query = $this->db->query("SELECT description, COUNT(*) AS complaint_count FROM complaints GROUP BY description");
        $data = [];
        $i = 0;
        while ($row = $query->fetch_assoc()) {
            $row["description"] = $this->getDescriptionTitle($row['description']);
            $row['color'] = $this->getRandomColor()[$i];
            $data[] = $row;
            $i++;
        }
        return $data;
    }
}
