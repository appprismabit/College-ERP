<?php
class change_passwordController extends Controller{
    public function index(){
        $this->view('change_password/index');
    }

    public function updatePass(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $inputOldPassword = trim($_POST['inputOldPassword1']);
            $inputNewPassword =  trim($_POST['inputNewPassword']);
            $user_id = $_SESSION['user_id'];

            $hashedPassword = password_hash($inputNewPassword, PASSWORD_DEFAULT);

            $changepassModel = $this->model('change_passwordModel');

            $user = $changepassModel->fetchOldPass($user_id);

            if($user && password_verify($inputOldPassword, $user['password'])){

                $changepassModel->updatePass($user_id,$hashedPassword);
                echo json_encode([
                    'success' => true,
                    'message' => 'Password changed successfully',

                ]);

            }else{
                echo json_encode([
                    'success' => false,
                    'message' => 'Invalid old password',
                ]);
            }

        }
    }
}
?>