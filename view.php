<!doctype html>
<html lang="en">
  <head>
      <title>View Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link  rel="stylesheet" type="text/css" href="css/style_form.css">
  </head>
  
<body>
    <div class="main-div-view">
        <div class="container">
        <h2>View Data</h2>
    
        <?php
        include "dbconnection.php";
        $sql = "SELECT * FROM contact_form";
        $result = mysqli_query($conn, $sql);
        if ($result) {
                $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            } else {
                $rows = [];
        }
        ?>
            
        <table border= 1px solid black>
        <tr>    
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>contact</th>
            <th>Address</th>
            <th>Image</th>
            <th>Edit/Delet</th>
        </tr>
            
        <?php 
            foreach ($rows as $row) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone_number"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>"; 
                $images .= $profile_image.", ";
                $images1 = explode(", ", $row['profile_image']);
                foreach($images1 as $imagepf){
                    echo "<img src='uploadimages/". $imagepf ."' width='20' height='20' >&nbsp";
                    }             
                echo "</td>";
                echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a> | <a href='update.php?id=" . $row['id'] . "'>Edit</a></td>";
                echo "</tr>";
            }
    
        ?>
        </table>
            <div class="done-btn">
                <input onclick="window.location.href='index.php';" type="button" name="done" value="Done">
            </div>
        </div>
    </div>
</body>
</html>
  