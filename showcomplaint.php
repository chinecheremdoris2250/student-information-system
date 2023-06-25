<?php
include 'db.php';

// Check if the database connection was successful
if (!$data) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Prepare the statement to fetch the complaints
$query = "SELECT email, complaint FROM complaints";
$statement = mysqli_prepare($data, $query);

// Execute the statement and fetch the result
mysqli_stmt_execute($statement);
mysqli_stmt_bind_result($statement, $email, $complaints);

// Store the fetched complaints in an array
$complaintsArray = [];
while (mysqli_stmt_fetch($statement)) {
    $complaintsArray[] = [
        
        'email' => $email,
        'complaint' => $complaints
    ];
}

// Close the statement
mysqli_stmt_close($statement);

// Close the database connection
mysqli_close($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Complaints</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            background-color: #fff;
            border-radius: 4px;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <?php include "admin_sidebar.php"?>
    <div class="container">
        <h1>Student Complaints</h1>
        <table class="table">
            <thead>
                <tr>
                   
                    <th>Email</th>
                    <th>Complaint</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($complaintsArray as $complaint) : ?>
                    <tr>
                    
                        <td><?php echo $complaint['email']; ?></td>
                        <td><?php echo $complaint['complaint']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
