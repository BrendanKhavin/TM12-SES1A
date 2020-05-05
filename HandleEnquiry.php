<!DOCTYPE html>
<html>
    <body>
        <?php
        //this is for a local set up of the mysql database and thus the login credentials will differ per configuration
            $servername = "localHost";
            $username ="root";
            $password = "okmate";
            $dbname ="ses1a-tm12";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            if($conn->connect_error){
                die("Connection failed: " .$conn->connect_error);
            }

            //currently facing some issues with passing radio button data to the database as there is no suitable data type to support it
            //$radioOption = $_POST["radioOption"];
            $firstname = $_POST["FirstName"];
            $lastname = $_POST["LastName"];
            $email = $_POST["Email"];
            $phoneNumber = $_POST["PhoneNumber"];
            $apptID = $_POST["ApptID"];
            $message = $_POST["Message"];
            
            //currently facing an issue where on submit, it inserts two rows of data into the database, one with the fields from the form and another that is empty
            $sql ="INSERT INTO enquiry_form_data (firstname, lastname, email, phoneNumber, apptID, message) VALUES ('$firstname','$lastname','$email','$phoneNumber','$apptID','$message')";
            
            if(mysqli_query($conn, $sql)) {
                //if the data entry is successful then the user is taken to another page with a thank you message
                include("MAIN-postEnquiryForm.htm");
            } else {
                echo "Error: " . $sql . "<br>" .mysqli_error($conn);
            }
            
            mysqli_close($conn);
        ?>
    </body>
</html>