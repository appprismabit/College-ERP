<?php
class AuthController extends Controller
{
    public function index()
    {
        $this->view('auth/login');
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $captcha = trim($_POST['captcha']);

            if ($captcha != $_SESSION['captcha']) {
                $data = [
                    'success' => false,
                    'message' => 'Invalid CAPTCHA'

                ];
                echo json_encode($data);
                exit();
            }
            $userModel = $this->model('User');
            $user = $userModel->findUserByEmail($username);
            // if ($user['user_email'] != $username) {

            //     echo json_encode([
            //         'success' => false,
            //         "message" => "Invalid Username"
            //     ]);

            //     exit();
            // }
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['role'] = $user['role'];
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_name'] = $user['user_name'];
                $_SESSION['user_title'] = $user['user_title'];
                echo json_encode([
                    "success" => true,
                    "message" => "Login successful"
                ]);
                exit();
            } else {
                echo json_encode([
                    'success' => false,
                    "message" => " Invalid password "
                ]);
            }
        } else {

            $this->view('auth/login');
        }
    }

    // public function logout()
    // {
    //     session_start();
    //     session_unset();
    //     session_destroy();
    //     header('Location: ' . BASE_URL . '/auth/index');
    //     exit();
    // }
}
