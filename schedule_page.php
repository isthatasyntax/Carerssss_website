<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Made By Nishka -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="schedule_page_stylesheet.css">
    <title>Schedule</title>
</head>

<body>

    <script src="schedule_page.js"></script>

    <div class="topnav">
        <a>*website name*</a>
        <a href="home_page.php">Home</a>
        <a href="schedule_page.php">Schedule</a>

        <div class="dropdown">
            <button class="dropbtn"><?php
                include("appointmentdetail1.php");
                echo $carer;
                ?></button>
            <div class="dropdown_content">
                <a href="my_profile_page.html">My Profile</a>
                <a href="help_policies_page.html">Help</a>
                <a href="time_off_page.html">Time Off</a>
                <a href="logout.php">Sign Out</a>
            </div>
        </div>
    </div>

    <h1>Your Schedule</h1>

    <h2>Week Monday - Sunday</h2>

    <h3 style="background-color: #ff5454;">Monday <?php
        include("appointmentdetail2.php");   
        echo $date;
        ?> March</h3>

    <div class="appointment">
        <div class="time" style="background-color: #ff5454;">
                <?php
                    include("appointmentdetail1.php");
                    echo $start_time;
                    echo "<br>";
                    echo " - ";
                    echo $end_time;
                    ?>
                </p>
        </div>

        <div class="details">
        <p id="text1" class="text">
                <?php
                    include("Tablerow1.php"); 
                    echo "Patient Name: ";
                    echo $name;
                    echo "<br>";
                    echo "Patient Address: ";
                    echo $address;
                    echo "<br>";
                ?>

                <span id="moreText1" class="more-text">
                    <?php
                        include ('Tablerow1.php');
                        echo "Medication Details: ";
                        echo $medication_details;
                        echo "<br>";
                        echo "Patient ID: ";
                        echo $patient_id;
                        echo "<br>";
                        echo "Date Of Birth: ";
                        echo $dob;
                        echo "<br>";
                        echo "Gender: ";
                        echo $gender;
                        echo"<br>";
                        echo "Phone Number: ";
                        echo $phonenumber; 
                        echo"<br>";
                        echo "Doctor's Name: ";
                        echo $doctor_name;
                        echo "<br>";
                        echo "Doctor's Address: ";
                        echo $doctor_address;
                        echo "<br>";
                        echo "Next of Kin: ";
                        echo $nok_name; 
                        echo"<br>";
                        echo "Next Of Kin PhNo: ";
                        echo $nok_phno;
                        echo "<br>";
                    ?>
                </span>
            </p>

            <button onclick="openMoreDetails(this.id)" id="readMoreButton1" class="appointment-btn">More
                Details</button>
            <button onclick="callPatient()" id="callPatientButton1" class="appointment-btn">Call Patient</button>
            <button id="absentButton1" class="appointment-btn">Can't make it?</button>
        </div>
    </div>

    <h3 style="background-color: #00d7b3;">Tuesday <?php
        include("appointmentdetail1.php");   
        echo $date;
        ?> March</h3>
    <div class="appointment">
        <div class="time" style="background-color: #00d7b3;">
            <p> 
                <?php
                    include("appointmentdetail2.php");
                    echo $start_time;
                    echo "<br>";
                    echo " - ";
                    echo $end_time;
                    ?>
                </p>
        </div>

        <div class="details">
        <p id="text2" class="text">
                <?php
                    include("Tablerow2.php"); 
                    echo "Patient Name: ";
                    echo $name;
                    echo "<br>";
                    echo "Patient Address: ";
                    echo $address;
                    echo "<br>";
                ?>

                <span id="moreText2" class="more-text">
                    <?php
                        include ('Tablerow2.php');
                        echo "Medication Details: ";
                        echo $medication_details;
                        echo "<br>";
                        echo "Patient ID: ";
                        echo $patient_id;
                        echo "<br>";
                        echo "Date Of Birth: ";
                        echo $dob;
                        echo "<br>";
                        echo "Gender: ";
                        echo $gender;
                        echo"<br>";
                        echo "Phone Number: ";
                        echo $phonenumber; 
                        echo"<br>";
                        echo "Doctor's Name: ";
                        echo $doctor_name;
                        echo "<br>";
                        echo "Doctor's Address: ";
                        echo $doctor_address;
                        echo "<br>";
                        echo "Next of Kin: ";
                        echo $nok_name; 
                        echo"<br>";
                        echo "Next Of Kin PhNo: ";
                        echo $nok_phno;
                        echo "<br>";
                    ?>
                </span>
            </p>
            <button onclick="openMoreDetails(this.id)" id="readMoreButton2" class="appointment-btn">More
                Details</button>
            <button onclick="callPatient()" id="callPatientButton2" class="appointment-btn">Call Patient</button>
            <button id="absentButton2" class="appointment-btn">Can't make it?</button>
        </div>
    </div>

    <h3 style="background-color: orange;">Wednesday <?php 
        include("appointmentdetail1.php");   
        echo $date;
        ?> March</h3>

    <div class="appointment">
        <div class="time" style="background-color: orange;">
                <?php
                    include("appointmentdetail1.php");
                    echo $start_time;
                    echo "<br>";
                    echo " - ";
                    echo $end_time;
                    ?>
                </p>
        </div>

        <div class="details">
        <p id="text3" class="text">
                <?php
                    include("Tablerow3.php"); 
                    echo "Patient Name: ";
                    echo $name;
                    echo "<br>";
                    echo "Patient Address: ";
                    echo $address;
                    echo "<br>";
                ?>

                <span id="moreText3" class="more-text">
                    <?php
                        include ('Tablerow3.php');
                        echo "Medication Details: ";
                        echo $medication_details;
                        echo "<br>";
                        echo "Patient ID: ";
                        echo $patient_id;
                        echo "<br>";
                        echo "Date Of Birth: ";
                        echo $dob;
                        echo "<br>";
                        echo "Gender: ";
                        echo $gender;
                        echo"<br>";
                        echo "Phone Number: ";
                        echo $phonenumber; 
                        echo"<br>";
                        echo "Doctor's Name: ";
                        echo $doctor_name;
                        echo "<br>";
                        echo "Doctor's Address: ";
                        echo $doctor_address;
                        echo "<br>";
                        echo "Next of Kin: ";
                        echo $nok_name; 
                        echo"<br>";
                        echo "Next Of Kin PhNo: ";
                        echo $nok_phno;
                        echo "<br>";
                    ?>
                </span>
            </p>

            <button onclick="openMoreDetails(this.id)" id="readMoreButton3" class="appointment-btn">More
                Details</button>
            <button onclick="callPatient()" id="callPatientButton3" class="appointment-btn">Call Patient</button>
            <button id="absentButton3" class="appointment-btn">Can't make it?</button>
        </div>
    </div>

    <div class="appointment">
        <div class="time" style="background-color: orange;">
                <?php
                    include("appointmentdetail2.php");
                    echo $start_time;
                    echo "<br>";
                    echo " - ";
                    echo $end_time;
                    ?>
                </p>
        </div>

        <div class="details">
        <p id="text4" class="text">
                <?php
                    include("Tablerow4.php"); 
                    echo "Patient Name: ";
                    echo $name;
                    echo "<br>";
                    echo "Patient Address: ";
                    echo $address;
                    echo "<br>";
                ?>

                <span id="moreText4" class="more-text">
                    <?php
                        include ('Tablerow4.php');
                        echo "Medication Details: ";
                        echo $medication_details;
                        echo "<br>";
                        echo "Patient ID: ";
                        echo $patient_id;
                        echo "<br>";
                        echo "Date Of Birth: ";
                        echo $dob;
                        echo "<br>";
                        echo "Gender: ";
                        echo $gender;
                        echo"<br>";
                        echo "Phone Number: ";
                        echo $phonenumber; 
                        echo"<br>";
                        echo "Doctor's Name: ";
                        echo $doctor_name;
                        echo "<br>";
                        echo "Doctor's Address: ";
                        echo $doctor_address;
                        echo "<br>";
                        echo "Next of Kin: ";
                        echo $nok_name; 
                        echo"<br>";
                        echo "Next Of Kin PhNo: ";
                        echo $nok_phno;
                        echo "<br>";
                    ?>
                </span>
            </p>

            <button onclick="openMoreDetails(this.id)" id="readMoreButton4" class="appointment-btn">More
                Details</button>
            <button onclick="callPatient()" id="callPatientButton4" class="appointment-btn">Call Patient</button>
            <button id="absentButton4" class="appointment-btn">Can't make it?</button>
        </div>
    </div>

    <h3 style="background-color: #00d7b3;">Thursday *date* *month*</h3>

    <div class="no-appointment">
        <p>No appointments</p>
    </div>

    <h3 style="background-color: #b554ff;">Friday *date* *month*</h3>

    <div class="appointment">
        <div class="time" style="background-color: #b554ff;">
            <p>*start time* - <br> *end time*</p>
        </div>

        <div class="details">
            <p id="text5" class="text">
                *patient name* <br>
                *patient address*, *postcode*<br>
                <span id="moreText5" class="more-text">
                    *patient ID* <br>
                    *patient phone number* <br>
                    *patient date of birth* <br>
                    *patient gender* <br>
                    *next of kin name* <br>
                    *next of kin phone number* <br>
                    *doctor name* <br>
                    *doctor address* <br>
                </span>
            </p>

            <button onclick="openMoreDetails(this.id)" id="readMoreButton5" class="appointment-btn">More
                Details</button>
            <button onclick="callPatient()" id="callPatientButton5" class="appointment-btn">Call Patient</button>
            <button id="absentButton5" class="appointment-btn">Can't make it?</button>
        </div>
    </div>

    <div class="appointment">
        <div class="time" style="background-color: #b554ff;">
            <p>*start time* - <br> *end time*</p>
        </div>

        <div class="details">
            <p id="text6" class="text">
                *patient name* <br>
                *patient address*, *postcode*<br>
                <span id="moreText6" class="more-text">
                    *patient ID* <br>
                    *patient phone number* <br>
                    *patient date of birth* <br>
                    *patient gender* <br>
                    *next of kin name* <br>
                    *next of kin phone number* <br>
                    *doctor name* <br>
                    *doctor address* <br>
                </span>
            </p>

            <button onclick="openMoreDetails(this.id)" id="readMoreButton6" class="appointment-btn">More
                Details</button>
            <button onclick="callPatient()" id="callPatientButton6" class="appointment-btn">Call Patient</button>
            <button id="absentButton6" class="appointment-btn">Can't make it?</button>
        </div>
    </div>

    <h3 style="background-color: orange;">Saturday *date* *month*</h3>

    <div class="no-appointment">
        <p>No appointments</p>
    </div>

    <h3 style="background-color: #ff5454;">Sunday *date* *month*</h3>

    <div class="no-appointment">
        <p>No appointments</p>
    </div>

    <div class="empty"></div>

    <footer>
        <div class="footer-content"><center>
            <p>*website name* <br> </p>
            <a href="home_page.php">Home</a>
            <a href="schedule_page.php">Schedule</a>
            <a href="help_policies_page.html">Help</a>
            <a href="help_policies_page.html">Policies</a>
            <a href="time_off_page.html">Time Off</a>
            <p>&copy; 2024. All rights reserved.</p></center>
        </div>
    </footer>

</body>

</html>