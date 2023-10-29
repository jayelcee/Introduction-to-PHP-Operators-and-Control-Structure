<html>
<head>
    <title>Student Registration Report</title>
    <style>
        body {
			margin: 0;
			padding: 0;
			display: flex;
			flex-direction: column;
			align-items: center;
			font-family: Arial, sans-serif;
			font-size: 16px;
		}
        form {
			display: flex;
			flex-direction: column;
			align-items: left;
			background-color: #f2f2f2;
			border-radius: 5px;
			padding: 20px;
			box-shadow: 0 0 10px #ccc;
			max-width: 800px;
			width: 100%;
		}
        label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
        .box {
            display: inline-block;
            padding: 0px;
            background-color: grey;
            color: white;
            border-radius: 0px;
            box-sizing: border-box;
            margin: 0;
            line-height: 0;
        }
        .textbox {
            display: inline-block;
            padding: 0px;
            background-color: white;
            color: black;
            border-radius: 5px;
            box-sizing: border-box;
            margin: 0;
            line-height: 1;
        }
        h1 {
			text-align: left;
			margin-top: 30px;
			margin-bottom: 10px;
            color: #008000
		}
		h2 {
			text-align: center;
		}
        h3 {
			text-align: center;
		}
        h4 {
			text-align: left;
		}
        h5 {
			text-align: left;
            margin-top: 0px;
			margin-bottom: 20px;
            color: #008000
		}
        p {
			text-align: left;
            margin-left: 10px
		}

    </style>
</head>
    <body>
        <form>
        <h1> FEU Institute of Technology <br> </h1>
        <h5> COLLEGE OF ENGINEERING - COLLEGE OF COMPUTER STUDIES <br> </h5>

        <div class="box">
            <h3> Student Registration Form Overview </h3>
        </div> <br>

        <div class="textbox">
            <p> Is the student currently expelled from any school or school board?
            <?php
                $expulsion = $_POST["expulsion"];
                echo "<b> $expulsion </b>";
            ?> </p>
        </div> <br>
        
        <div class="textbox">
            <p> School Year: <b>2023-2024</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registering for:  
            <?php
                $trimester = $_POST["trimester"];
                echo "<b> $trimester Trimester </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $student_no = $_POST["student_no"];
                echo "Student Number: <b> $student_no </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $course = $_POST["course"];
                echo "Course: <b> $course </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $year_level = $_POST["year_level"];
                echo "Year Level: <b> $year_level </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $documents = $_POST["documents"];
                echo "Documents Submitted: ";
                foreach($_POST["documents"] as $document){
                    echo "<b>$document, </b>";}
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $mode = $_POST["mode"];
                echo "Mode of Learning: <b> $mode </b>";
            ?> </p>
        </div> <br>

        <div class="box">
            <h3> Student Information </h3>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $name = $_POST["name"];
                echo "Student Name: <b> $name </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $birthdate = $_POST["birthdate"];
                echo "Date of Birth: <b> $birthdate </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $birthplace = $_POST["birthplace"];
                echo "Place of Birth: <b> $birthplace </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $citizenship = $_POST["citizenship"];
                echo "Citizenship: <b> $citizenship </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $gender = $_POST["gender"];
                echo "Gender: <b> $gender </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $civil_status = $_POST["civil_status"];
                echo "Civil Status: <b> $civil_status </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $religion = $_POST["religion"];
                echo "Religion: <b> $religion </b>";
            ?> </p>
        </div> <br>

        <div class="box">
            <h3> Contact Information </h3>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $home_address = $_POST["home_address"];
                echo "Home Address: <b> $home_address </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $mobile_number = $_POST["mobile_number"];
                echo "Mobile Number: <b> $mobile_number </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $email = $_POST["email"];
                echo "Email: <b> $email </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $residence = $_POST["residence"];
                echo "Residence: ";
                foreach($_POST["residence"] as $residence){
                    echo "<b>$residence, </b>";}
            ?> </p>
        </div> <br>
        
        <div class="box">
            <h3> Previous School Information </h3>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $prev_school = $_POST["prev_school"];
                echo "Name of Previous School: <b> $prev_school </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $last_date_attended = $_POST["last_date_attended"];
                echo "Last Date Attended: <b> $last_date_attended </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $language = $_POST["language"];
                echo "Language of Instruction: ";
                foreach($_POST["language"] as $language){
                    echo "<b>$language, </b>";}
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $prev_grade = $_POST["prev_grade"];
                echo "General Weighted Average (GWA) at Previous School: <b> $prev_grade </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $honor = $_POST["honor"];
                echo "Were you an honor student? <b> $honor </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $transfer = $_POST["transfer"];
                echo "Reason of Transfer: <b> $transfer </b>";
            ?> </p>
        </div> <br>

        <div class="box">
            <h3> Health Information </h3>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $medical_condition = $_POST["medical_condition"];
                echo "Medical Condition: <b> $medical_condition </b>";
            ?> </p>
        </div> <br>

        <div class="textbox"> <p>
            <?php
                $epi_pen = $_POST["epi_pen"];
                echo "Does the student require an epi-pen? <b> $epi_pen </b>";
            ?> </p>
        </div> <br>

        </form>
    </body>
</html>