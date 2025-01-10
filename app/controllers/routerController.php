<?php
class routerController extends Controller
{
    public function router()
    {

        if (isset($_POST['route_user'])) {
            $_SESSION["user_id"] = filter_var($_POST['route_user'], FILTER_SANITIZE_NUMBER_INT);
            header('Location: ' . BASE_URL . '/user/usersingle');
        }
    }

    public function complaints()
    {
        if (isset($_POST['route_complaints'])) {
            $_SESSION['from'] = "complaints/index";
            $_SESSION["complaint_id"] = filter_var($_POST['route_complaints'], FILTER_SANITIZE_NUMBER_INT);
            header('Location: ' . BASE_URL . '/complaints/complaintSingle');
        }
    }

    public function dashboard_complaints()
    {
        if (isset($_POST['route_complaints'])) {
            $_SESSION['from'] = "../dashboard/index";
            $_SESSION["complaint_id"] = filter_var($_POST['route_complaints'], FILTER_SANITIZE_NUMBER_INT);
            header('Location: ' . BASE_URL . '/complaints/complaintSingle');
        }
    }

    public function technicianWiseReport()
    {
        if (isset($_POST['route_complaints'])) {
            $_SESSION['from'] = "../master/index";
            header('Location: ' . BASE_URL . '/complaints/complaintSingle');
        }
    }

    public function complaintTypeWise()
    {
        if (isset($_POST['route_complaints'])) {
            $_SESSION['from'] = "../master/index";
            header('Location: ' . BASE_URL . '/complaints/complaintSingle');
        }
    }

    // public function master()
    // {
    //     if (isset($_POST['TechnicianWiseReport']) && isset($_POST['complaintId'])) {
    //         $technicianId = filter_var($_POST['TechnicianWiseReport'], FILTER_SANITIZE_NUMBER_INT);
    //         $complaintId = filter_var($_POST['complaintId'], FILTER_SANITIZE_STRING);

    //         if ($technicianId && $complaintId) {
    //             $_SESSION['technicianId'] = $technicianId;
    //             $_SESSION['complaintId'] = $complaintId;

    //             header('Location: ' . BASE_URL . '/master/TechnicianWiseReportSingle');
    //             exit();
    //         } else {
    //             die("Invalid input provided.");
    //         }
    //     }
    // }
}
