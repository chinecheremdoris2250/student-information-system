<?php
error_reporting(0);
session_start();

if (!isset($_SESSION['email'])) {
  header("location:index.php");
} elseif ($_SESSION['usertype'] == 'admin') {
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,
                   initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="dashboard.css">
<style>
        a {
            text-decoration: none;
            font-size: 17px;
            font-weight: 700;
        }

        button a {
            color: white;

        }
    </style>
</head>

<body>
  <header>

    <div class="logosec">
      <div class="logo">JOBITECH</div>
      <img src="img/menu-icon.png" class="icn menuicn" id="menuicn" alt="menu-icon">
    </div>


    <div class="searchbar">
      <input type="text" placeholder="Search" name="search">
      <div class="searchbtn">
        <img src="img/search.png" class="icn srchicn" alt="search-icon">
      </div>
    </div>


    <div class="message">
      <div class="circle"></div>
      <img src="img/notification.png" class="icn" alt="">
      <div class="dp">
        <img src="img/avatar.png" class="dpicn" alt="dp">
      </div>
    </div>

  </header>

  <div class="main-container">
    <div class="navcontainer">
      <nav class="nav">
        <div class="nav-upper-options">

          <div class="nav-option option1">
            <img src="img/article.png" class="nav-img" alt="dashboard">
            <h5><a href="studenthome.php" style="color: white;">Dashboard</a></h5>
          </div>



          <div class="nav-option option2">
            <img src="img/plus.png" class="nav-img" alt="institution">
      <a href="view_student.php">My Profile</a>
          </div>

          <div class="nav-option option2">
                        <img src="img/plus.png" class="nav-img" alt="institution">
                         <a href="complain.php">Students Complaints</a>
                    </div>
          <div class="nav-option logout">
            <img src="img/logout.png" class="nav-img" alt="signout">
            <?php echo "<a href='logout.php' class='text-blue' style='background-none: blue; border: none;'>Logout</a>"; ?>
          </div>
      </nav>
    </div>
    <div class="main">

      <div class="searchbar2">
        <input type="text" name="" id="" placeholder="Search">
        <div class="searchbtn">
          <img src="img/search.png" class="icn srchicn" alt="search-button">
        </div>
      </div>
      <script src="./dashboard.js"></script>
</body>

</html>