<?php
  error_reporting(E_ALL & ~E_NOTICE);
  ini_set('display_errors', 1);


   $buychoise = $_POST['buychoice'];
   $Type = $_POST['Type'];
   $Tsize= $_POST['Tsize'];
   $Cupsize = $_POST['Cupsize'];
            $conn = new mysqli('localhost', 'root', '', 'customersinfo');
            if (isset($_POST["Submit"])) 
            {
                $stmt = $conn->prepare("INSERT INTO orderinfo (Product,TypeOf,Size,Cup) VALUES (?,?,?,?)");
                $stmt->bind_param("ssss", $buychoise, $Type , $Tsize, $Cupsize);
                $stmt->execute();

                echo "Saved successfully";

                //going to the other form
                header('Location: PlaceOrder.html');
            }

            if (isset($_POST["formsubmit"])) 
             {
               $firstname =$_POST['firstname'];
               $lastname = $_POST['lastname'];
               $city = $_POST['city'];
               $district =$_POST['district'];
               $email = $_POST['Email'];
               $phone = $_POST['phone'];

               $stmt = $conn->prepare("INSERT INTO customerinfo (firstName,lastName,city,district,email,Cnumber) VALUES (?,?,?,?,?,?)");
               $stmt->bind_param("ssssss", $firstname, $lastname, $city, $district, $email, $phone);
               $stmt->execute();
         
               echo "Saved successfully";
               header('Location: Thank.html');
               
             }

      
?>
