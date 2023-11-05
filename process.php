<!DOCTYPE html>
<html>
<head>
    <title>Image Upload and Display</title>
</head>
<body>
    <h1>Image Upload and Display</h1>
    <?php
        session_start(); 
        // echo '<pre>', print_r(get_defined_vars(), true) ?: 'undefined index', '</pre>';
        include 'logout.php';
        include 'session.php';
        include 'upload.php' ;
    ?>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image">
        <input type="submit" value="Upload Image">
        <input type="submit" name="logout" value="Logout">
    </form>
    
</body>
</html>
