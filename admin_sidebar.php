<?php
include 'search.php';
?>
<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,
                   initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link rel="stylesheet" href="dashboard.css">
  <style>
    .control {
      border: none;
      outline: none;
      box-shadow: none;
      background: transparent;
      color: blue;
    }

    a {
      text-decoration: none;
      font-size: 17px;
      margin-right: 5px;
    }
  </style>
</head>

<body>

  <!-- for header part -->
  <header>

    <div class="logosec">
      <div class="logo">JOBITECH</div>
      <img src="img/menu-icon.png" class="icn menuicn" id="menuicn" alt="menu-icon">
    </div>


    <div class="searchbar">
      <input type="text" placeholder="Search" name="search" id="search">
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
            <h5><a href="adminhome.php" style="color: white;">Dashboard</a></h5>
          </div>



          <div class="nav-option option4">
            <img src="img/plus.png" class="nav-img" alt="institution">
            <h5> <a href="add_student.php">Add Student</a></h5>
          </div>

          <div class="nav-option option3">

            <img src="img/home.png" class="nav-img" alt="report">
            <!-- <h5> <a href="view_student.php">View Student</a></h5> -->
            <select onchange="window.location.href = this.value;" class="control">
              <option value="">View Students</option>
              <option value="firstyear.php">100 Level</option>
              <option value="secondyear.php">200 Level</option>
              <option value="paststudents.php">Past Students</option>
            </select>
          </div>

          <div class="nav-option option4">
            <img src="img/plus.png" class="nav-img" alt="institution">
            <h5> <a href="showcomplaint.php">Student Complaint</a></h5>
          </div>
          <div class="nav-option logout">
            <img src="img/logout.png" class="nav-img" alt="signout">
            <?php echo "<a href='logout.php' class='text-blue' style='background-none: blue; border: none;'>Logout</a>"; ?>
          </div>

        </div>
      </nav>
    </div>
    <div class="main">

      <div class="searchbar2">
        <input type="text" name="search" id="search" placeholder="Search">
        <div class="searchbtn">
          <img src="img/search.png" class="icn srchicn" alt="search-button">
        </div>
      </div>
      <script>
        // Function to fetch new complaint notifications
        function fetchComplaintNotifications(lastCheckTime) {
          var xhr = new XMLHttpRequest();
          xhr.open('GET', 'fetch_complaints.php?lastCheckTime=' + lastCheckTime, true);
          xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
              var response = JSON.parse(xhr.responseText);
              var newComplaintsCount = response.newComplaintsCount;

              if (newComplaintsCount > 0) {
                var circleElement = document.querySelector('.circle');
                circleElement.style.backgroundColor = 'blue';
              }
            }
          };
          xhr.send();
        }

        // Periodically check for new complaint notifications
        setInterval(function() {
          var lastCheckTime = new Date().toISOString(); // Get the current time
          fetchComplaintNotifications(lastCheckTime);
        }, 5000); // Check every 5 seconds (you can adjust the interval as needed)
      </script>
      <script src="./dashboard.js"></script>
</body>

</html>