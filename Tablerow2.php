<?php

    include('connection.php');

    $stmt = $conn->prepare("SELECT name, address, postcode, Medication_Details, Patient_ID, DOB, Gender, PhoneNumber, Doctor_Name, Doctor_address, NOK_name, NOK_PhNo FROM patient_details LIMIT 1, 1");
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0) {
        $row = $stmt_result->fetch_assoc();
        $name = $row['name'];
        $address = $row['address'];
        $postcode = $row['postcode'];
        $medication_details = $row ['Medication_Details'];
        $patient_id = $row['Patient_ID'];
        $dob = $row['DOB'];
        $gender = $row['Gender'];
        $phonenumber = $row['PhoneNumber'];
        $doctor_name = $row['Doctor_Name'];
        $doctor_address = $row['Doctor_address'];
        $nok_name = $row['NOK_name'];
        $nok_phno = $row['NOK_PhNo'];
    }

?>