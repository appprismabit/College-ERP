<?php 
class change_passwordModel extends Model{
    public function fetchOldPass($user_id){

        $query = $this->db->prepare("select * from users where user_id = ?");
        $query->bind_param("s",$user_id);
        if($query->execute()){
            $user = $query->get_result()->fetch_assoc();
        }
        return $user;
    }

    public function updatePass($user_id,$hashedPassword){
        $update = $this->db->prepare("UPDATE users SET password = ? where user_id = ?");
        $update->bind_param("ss",$hashedPassword, $user_id);
        if($update->execute()){
            return true;
        }
        else{
            return false;
        }
    } 
}
?>