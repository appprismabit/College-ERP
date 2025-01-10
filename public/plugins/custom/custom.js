

function getStatusTask($status) {


    var status;

    switch ($status) {
        case 0: status = '<span class="badge badge-danger">Pending</span>';
            break;
        case 1: status = '<span class="badge badge-warning">Process</span>';
            break;
        case 2: status = '<span class="badge badge-success">Resolved</span>';

    }
    return status;
}







function getStatusTechnician($status) { //This is for the dropDown

    var status;

    switch ($status) {
        case 0: status = '<span class="badge badge-dark">Cancel</span>';
            break;
        case 1: status = '<span class="badge badge-danger">Active</span>';
            break;
        case 2: status = '<span class="badge badge-danger">Completed</span>';
            break;
    }
    return status;
}

function getUserStatus(user_status) {
    var status;
    switch (user_status) {
        case "bloked":
            status = '<span class="badge badge-danger">Blocked</span>';
            break;
        case "active":
            status = '<span class="badge badge-success">Active</span>';
            break;
        default:
            status = '<span class="badge badge-secondary">Unknown</span>';
            break;
    }
    return status;
}






