<?php
$_SESSION['loggedin'] = false;
session_start();
echo '<nav class="navbar navbar-expand-lg bg-dark navbar-dark" style="max-height: 100px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/forums" 
      style="font-size: 40px; color: #ffc107;">
      <img src="img/Brand-logo.png" alt="Logo" class="img-fluid w-100" 
        style="max-height: 90px; display: block; padding: 0; margin: 0; object-fit: contain; line-height: 1;"
        onmouseover="this.style.transform=\'scale(1.1)\'; this.style.boxShadow=\'0px 0px 0px rgba(255, 193, 7, 0.5)\'"
        onmouseout="this.style.transform=\'scale(1)\'; this.style.boxShadow=\'none\'"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/forums" 
            style="font-size: 23px; color: #ffc107; display: inline-block; transition: all 0.3s ease-in-out;"
            onmouseover="this.style.transform=\'scale(1.1)\'; this.style.boxShadow=\'0px 0px 0px rgba(255, 193, 7, 0.5)\'"
            onmouseout="this.style.transform=\'scale(1)\'; this.style.boxShadow=\'none\'">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php" 
            style="font-size: 23px; color: #ffc107; display: inline-block; transition: all 0.3s ease-in-out;"
            onmouseover="this.style.transform=\'scale(1.1)\'; this.style.boxShadow=\'0px 0px 0px rgba(255, 193, 7, 0.5)\'"
            onmouseout="this.style.transform=\'scale(1)\'; this.style.boxShadow=\'none\'">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
            style="font-size: 23px; color: #ffc107; display: inline-block; transition: all 0.3s ease-in-out;"
            onmouseover="this.style.transform=\'scale(1.1)\'; this.style.boxShadow=\'0px 0px 0px rgba(255, 193, 7, 0.5)\'"
            onmouseout="this.style.transform=\'scale(1)\'; this.style.boxShadow=\'none\'">
            Top Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
$sql = "SELECT `category_id`,`category_name` FROM `category` LIMIT 8";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  echo '<a class="dropdown-item" href="threadlist.php?cateid=' . $row['category_id'] . '">' . $row['category_name'] . '</a>';
}
echo '<li class="nav-item">
          <a class="nav-link" href="contact.php" 
            style="font-size: 23px; color: #ffc107; display: inline-block; transition: all 0.3s ease-in-out;"
            onmouseover="this.style.transform=\'scale(1.1)\'; this.style.boxShadow=\'0px 0px 0px rgba(255, 193, 7, 0.5)\'"
            onmouseout="this.style.transform=\'scale(1)\'; this.style.boxShadow=\'none\'">Contact</a>
        </li>
      </ul>
 <div class="search-container" style="display: flex; justify-content: flex-end; width: 100%; margin-right: 210px;">
    <form method="GET" action="search.php" name="search" style="display: flex; align-items: center;">
        <input type="text" name="search" id="search" placeholder="Search language" 
            style="height: 38px; width: 400px; font-size: 18px; padding: 10px; 
                  background-color: rgb(200,200,210); border-radius: 5px 0 0 5px; border: 1px solid #ffc107;">
        <button class="Button" type="submit" 
            style="border-radius: 0 5px 5px 0; border-left: none; height: 38px; 
                   background-color: #212529; border: 1px solid #ffc107; color: #ffc107;">
            Submit
        </button>
    </form>
</div>
<style>
    .Button:hover {
        background-color: #ffc107 !important;
        color: black !important; 
    }
</style>';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  echo '<div class="d-flex align-items-center" style="white-space: nowrap;">
  <span class="text-light mb-0">Welcome <b>' . $_SESSION['userfname'] . '</b></span>
  <a href="child/_logout.php" class="btn btn-outline-warning ms-2">Logout</a>
</div>';
} else {
  echo '<button type="button" class="btn btn-outline-warning mx-2" data-bs-toggle="modal" data-bs-target="#loggingModal">Login</button>
        <button type ="button" class="btn btn-outline-warning mx-2" data-bs-toggle="modal" data-bs-target="#signupModal">signup</button> ';
}
echo ' </div>
  </div>
</nav>';
include 'child/_signup.php';
include 'child/_logging.php';
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success!</strong> You can login now.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
