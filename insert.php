<?php  

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    include "dbconnection.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    $profile_image1 =
    $uploaded_images = array();
    if (isset($_FILES['profile_image']['name']) && is_array($_FILES['profile_image']['name'])) {
        foreach ($_FILES['profile_image']['name'] as $key => $image_name) {
            $target_directory = "uploadimages/";
            $unique_filename = uniqid() . '_' . rand(1000, 9999);
            $file_extension = pathinfo($image_name, PATHINFO_EXTENSION);
            $new_image_name = $unique_filename . '.' . $file_extension;
        
            $target_file = $target_directory . $new_image_name;

            if (move_uploaded_file($_FILES['profile_image']['tmp_name'][$key], $target_file)) {
                $uploaded_images[] = $new_image_name;
            } else {
                echo "File upload failed for " . $image_name . ". Please check the upload directory";
            }
        }
    }
    $imagelist = implode(", ",$uploaded_images); ;

    
    if ($name && $email && $phone_number && $address) {       
    
        $sql = "INSERT INTO contact_form (name, email, phone_number, address, profile_image) 
            VALUES ('$name', '$email', '$phone_number', '$address', '$imagelist')";
            
            if ($conn->query($sql) === TRUE) {
               header ('Location: view.php');             
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            mysqli_close($conn); 
    } else {
        echo "Please fill in all required fields correctly."; 
    }
}    
?>  
