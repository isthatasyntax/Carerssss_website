<?php

    include('connection.php');

    $stmt = $conn->prepare("SELECT Date,Day,Start_Time,End_Time,Location,Patient,Carer FROM appointment_details LIMIT 1, 1");
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0) {
        $row = $stmt_result->fetch_assoc();
        $date = $row['Date'];
        $day = $row['Day'];
        $start_time = $row['Start_Time'];
        $end_time = $row ['End_Time'];
        $Location = $row['Location'];
        $Patient = $row['Patient'];
        $carer = $row['Carer'];
    }

?>