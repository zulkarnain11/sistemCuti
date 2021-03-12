<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/styleadmin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap"
     rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="welcome">
            <h1>Welcome <?php
            echo $_SESSION['user'];
            ?></h1>
            
        </div>

        <div class="log-out">
            <p><a href="logout.php">Logout</a></p>
        </div>

        <div class="btn">
            
            <button onclick="hide()">Add User</button>
            <form class="adduser" id="addUser" action="" method="POST">
                <table>
                    <tr>
                        <td>No.IC:</td>
                        <td><input type="text" name="ic" autocomplete="off"/></td>
                    </tr>
                    <tr>
                        <td>No.Staff:</td>
                        <td><input type="text" name="staffid" autocomplete="off"/></td>
                    </tr>
                    <tr>
                        <td>Full Name:</td>
                        <td><input type="text" name="name" autocomplete="off"/></td>
                    </tr>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="uid" autocomplete="off"/></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="pwd"/></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email"/></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text" name="uid"/></td>
                    </tr>
                    <tr>
                        <td>Position:</td>
                        <td><select name="position" id="">
                            <option>Ketua Eksekutif</option>
                            <option>Staff Manager</option>
                            <option>Staff</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Department:</td>
                        <td><select name="department" id="">
                            <option>H.E.A.</option>
                            <option>H.E.K.</option>
                            <option></option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Leave entitlement:</td>
                        <td><input type="number" name="cutiTahunan"></td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="Submit">
                <input type="reset"  value="Cancel">
            </form>
            <button onclick="hide1()">Edit User</button>
            <form class="edit" id="edit" action="#" method="POST">
                <input type="text" name="ic" placeholder="NO. IC">
                <input type="submit" name="cari" value="Search">
            </form>

            <button onclick="hide2()">Delete User</button>
            <form class="delete" id="delete" action="#" method="POST">
                <input type="text" name="ic" placeholder="NO. IC">
                <input type="submit" name="cari" value="Search">
            </form>
        </div>
    </div>
<?php
 if(!isset($_SESSION['user'])){
    header("Location: login.php?error=midlefinger!!!");
 }
?>

<script src="js/script.js"></script> 
</body>
</html>