
<?php
include 'db.php';

// Check if the database connection was successful
if (!$data) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Initialize the variable to hold the search results
$searchResults = [];

// Check if a search query has been submitted
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    
    // Prepare the statement to search for students in the users table
    $query = "SELECT email, name FROM users WHERE name LIKE ?";
    $statement = mysqli_prepare($data, $query);
    
    // Bind the search query to the statement
    $searchParam = "%$search%";
    mysqli_stmt_bind_param($statement, "s", $searchParam);
    
    // Execute the statement and fetch the result
    mysqli_stmt_execute($statement);
    mysqli_stmt_bind_result($statement, $email, $name);
    
    // Store the fetched results in an array
    while (mysqli_stmt_fetch($statement)) {
        $searchResults[] = [
            'email' => $email,
            'name' => $name
        ];
    }
    
    // Close the statement
    mysqli_stmt_close($statement);
}

// Close the database connection
mysqli_close($data);
?>