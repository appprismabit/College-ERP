<?php
class countModel extends Model
{
    public function getCountNum($table, $column = '*')
    {
        $query = "SELECT COUNT($column) as total FROM $table";
        return $this->db->query($query)->fetch_assoc()['total'];
    }

    public function getCountAmount($table, $column = '*')
    {
        $query = "SELECT sum(amount) as total FROM $table";
        return $this->db->query($query)->fetch_assoc()['total'];
    }

    public function getWorkCount()
    {
        return $this->getCountNum('works');
    }

    public function getCustomerCount()
    {
        return $this->getCountNum('customer');
    }

    public function getVendorCount()
    {
        return $this->getCountNum('vendor');
    }

    public function getEmployeeCount()
    {
        return $this->getCountNum('employee');
    }

    public function getOfficeExpCount()
    {
        return $this->getCountNum('expenses');
    }

    public function getAdvanceCount()
    {
        return $this->getCountNum('advance');
    }

    public function getAppointmentCount()
    {
        return $this->getCountNum('appointment');
    }

   
}
?>