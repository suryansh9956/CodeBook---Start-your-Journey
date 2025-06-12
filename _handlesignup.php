<?php
$showError = "false";
include '_dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userfname = $_POST['firstname'];
    $user_num = $_POST['number'];
    $username = $_POST['signupEmail'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $existsql = "SELECT * FROM `users` WHERE user_email = '$username'";
    $result = mysqli_query($conn, $existsql);
    $numRows = mysqli_num_rows($result);
    if ($numRows > 0) {
        $showError = "Email already in use";
    } else {
        if ($pass == $cpass) {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $hash1 = password_hash($cpass, PASSWORD_DEFAULT);
            $sql = " INSERT INTO `users` ( `user_name`,  `user_mob_no`, `user_email`, `user_pass`,`user_cpass`) VALUES ('$userfname', '$user_num', '$username', '$hash','$hash1')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
                header("Location: /forums/index.php?signupsuccess=true");
                exit();
            }
        } else {
            $showError = "Passwords do not match";
        }
    }
    header("Location: /forums/index.php?signupsuccess=false&error=$showError");
    echo '<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
    < strong>Error!</strong>' . $showError . '
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
// INSERT INTO `users` (`user_id`, `user_name1`, `user_name2`, `user_mob_no`, `user_email`, `user_pass`, `user_cpass`, `user_time`) VALUES ('1', 'Vikas', 'Kumar', '8577946127', 'vikas79058@gmail.com', 'Vikas@1', 'Vikas@1', current_timestamp());
