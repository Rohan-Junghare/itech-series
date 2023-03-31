<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $work_phone = $_POST['work_phone'];
    $company = $_POST['company'];
    $job = $_POST['job'];
    $companysize = $_POST['companysize'];
    $industry = $_POST['industry'];
    $department = $_POST['department'];
    $state = $_POST['state'];
    $postalcode = $_POST['postalcode'];
    $country = $_POST['country'];
    
    $conn = new mysqli('localhost','root','','itechseries');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
        $stmt =$conn->prepare("insert into registration(firstname, lastname, email, work_phone,company,job,companysize,industry,department,state,postalcode,country) 
        values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")

        $stmt->bind_param("sssssi, $firstname, $lastname, $email, $work_phone, $company, $job, $companysize, $industry, $department, $state, $postalcode, $country");
        echo-> "registration successfully";
        $stmt-> close();
        $conn->close();
    }
?>