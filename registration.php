<!DOCTYPE html>
<html>
<head>
  <title>Student Registration Form</title>
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
        .textbox label, .textbox input[type="radio"] {
            display: inline-block;
            vertical-align: middle;
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
		input[type="text"],
		select,
		input[type="number"],
        input[type="date"] {
			padding: 10px;
			border-radius: 5px;
			border: none;
			margin-bottom: 15px;
			width: 100%;
			box-sizing: border-box;
		}
		input[type="submit"],
		input[type="reset"] {
			background-color: #00b300;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			cursor: pointer;
			transition: background-color 0.3s;
			margin-bottom: 20px;
		}
		input[type="submit"]:hover,
		input[type="reset"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<form method="post" action="registration_script.php">
        <h1> FEU Institute of Technology <br> </h1>
        <h5> COLLEGE OF ENGINEERING - COLLEGE OF COMPUTER STUDIES <br> </h5>
        <div class="box">
            <h3> Student Registration Form </h3>
        </div> <br>
        <div class="textbox">
            <p> Is the student currently expelled from any school or school board?
                <input type="radio" id="y" name="expulsion" value="Yes">
                <label for="y"> Yes </label>
                <input type="radio" id="n" name="expulsion" value="No">
                <label for="n"> No </label>
            </p>
        </div> <br>
        <div class="textbox">
            <p> School Year: 2023-2024&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please check one trimester: 
                <input type="radio" id="1" name="trimester" value="1st">
                <label for="1"> 1st </label>
                <input type="radio" id="2" name="trimester" value="2nd">
                <label for="2"> 2nd </label>
                <input type="radio" id="3" name="trimester" value="3rd">
                <label for="3"> 3rd </label>
            </p>
        </div> <br>
        <label for="student_no">Student Number:</label>
		<input type="text" id="student_no" name="student_no" placeholder="Enter your student number (e.g. 2021-10356). Type N/A if you are a new student." required>
		<br>
		<label for="course">Course:</label>
		<select id="course" name="course" required>
			<option value="">Select course</option>
			<option value="BSCSSE">BSCS Software Engineering</option>
            <option value="BSCSDS">BSCS Data Science</option>
            <option value="BSITDA">BSIT Digital Arts</option>
            <option value="BSITWMA">BSIT Web and Mobile Applications</option>
			<option value="BSITAGD">BSIT Animation and Game Development</option>
			<option value="BSCPE">BS Computer Engineering</option>
			<option value="BSCE">BS Civil Engineering</option>
			<option value="BSME">BS Mechanical Engineering</option>
		</select>
		<br>
		<label for="year_level">Year Level:</label>
		<select id="year_level" name="year_level" required>
			<option value="">Select year level</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>
        <br>
        <div class="textbox">
        <p> Documents Submitted:
            <input type="checkbox" id="doc1" name="documents[]" value="Form 137">
                <label for="doc1"> Form 137 </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" id="doc2" name="documents[]" value="Good Moral">
                <label for="doc2"> Good Moral </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" id="doc3" name="documents[]" value="Birth Certificate">
                <label for="doc3"> Birth Certificate </label> <br>
        </p>
        </div> <br>
        <label for="mode"> Mode of Learning: </label>
            <select id="mode" name="mode">
                <option value="">Select mode of learning</option>
                <option value="Face-To-Face"> Face-To-Face </option>
                <option value="Online"> Online </option>
                <option value="Blended"> Blended </option>
                <option value="Hybrid"> Hybrid </option>
            </select> <br>
        <div class="box">
            <h3> Student Information </h3>
        </div> <br>
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" placeholder="Surname, Given Name <space> Middle Initial" required>
		<br>
        <label for="birthdate">Date of Birth:</label>
		<input type="date" id="start" name="birthdate"
            value="0000-00-00"
            min="0000-00-00" max="0000-00-00" required> <br>
        <label for="birthplace">Place of Birth:</label>
		<input type="text" id="birthplace" name="birthplace" placeholder="City/Town, Province, Country, Zip Code" required>
		<br>
        <label for="citizenship">Citizenship:</label>
		<input type="text" id="citizenship" name="citizenship" placeholder="Enter your country of citizenship" required>
		<br>
        <label for="gender">Gender:</label>
		<select id="gender" name="gender" required>
			<option value="">Select your gender</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			<option value="Non-Binary">Non-Binary</option>
			<option value="Transgender">Transgender</option>
		</select>
        <br>
        <label for="civil_status">Civil Status:</label>
		<select id="civil_status" name="civil_status" required>
			<option value="">Select your civil staus</option>
			<option value="Single">Single</option>
			<option value="Married">Married</option>
			<option value="Annulled">Annulled</option>
			<option value="Separated">Separated</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed">Widowed</option>
		</select>
        <br>
        <label for="religion">Religion:</label>
		<select id="religion" name="religion" required>
			<option value="">Select your religion</option>
			<option value="Roman Catholicism">Roman Catholicism</option>
			<option value="Protestantism">Protestantism</option>
			<option value="Islam">Islam</option>
			<option value="Buddhism">Buddhism</option>
            <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
			<option value="Seventh-Day Adventist">Seventh-Day Adventist</option>
			<option value="None">None</option>
		</select>
        <br>
        <div class="box">
            <h3> Contact Information </h3>
        </div> <br>
        <label for="home_address">Home Address:</label>
		<input type="text" id="home_address" name="home_address" placeholder="House/Bldg Number, St. Name, Barangay, City/Town, Province, Country, Zip Code" required>
		<br>
        <label for="mobile_number">Mobile Number:</label>
		<input type="text" id="mobile_number" name="mobile_number" placeholder="Enter an active phone number" required>
		<br>
        <label for="email">Email:</label>
		<input type="text" id="email" name="email" placeholder="Enter your email address" required>
		<br>
        <div class="textbox">
        <p> Residence: 
            <input type="checkbox" id="with_parents" name="residence[]" value="With Parents">
                <label for="with_parents"> With Parents </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" id="with_relatives" name="residence[]" value="With Relatives">
                <label for="with_relatives"> With Relatives </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" id="boarding" name="residence[]" value="Boarding">
                <label for="boarding"> Boarding </label> <br>
        </p> 
        </div> <br>
        <div class="box">
            <h3> Previous School Information </h3>
        </div> <br>
        <label for="prev_school">Name of Previous School:</label>
		<input type="text" id="prev_school" name="prev_school" placeholder="Name of last school attended" required>
		<br>
        <label for="last_date_attended">Last Date Attended:</label>
		<input type="date" id="start" name="last_date_attended"
            value="0000-00-00"
            min="0000-00-00" max="0000-00-00" required> <br>
        <div class="textbox">
        <p> Language of Instruction:
            <input type="checkbox" id="english" name="language[]" value="English">
                <label for="english"> English </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" id="filipino" name="language[]" value="Filipino">
                <label for="filipino"> Filipino </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" id="cebuano" name="language[]" value="Cebuano">
                <label for="cebuano"> Cebuano </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" id="other" name="language[]" value="Other">
                <label for="other"> Other </label> <br>
        </p>
        </div> <br>
		<label for="prev_grade">General Weighted Average (GWA) at Previous School:</label>
		<input type="number" id="prev_grade" name="prev_grade" placeholder="Enter your latest General Weighted Average (GWA) from your previous school." min="0" max="100" required>
		<br>
        <div class="textbox">
            <p> Were you an honor student?
                <input type="radio" id="y" name="honor" value="Yes">
                <label for="y"> Yes </label>
                <input type="radio" id="n" name="honor" value="No">
                <label for="n"> No </label>
            </p>
        </div> <br>
        <label for="transfer">Reason of Transfer:</label>
		<input type="text" id="transfer" name="transfer" placeholder="State your reason of transfer" required>
		<br>
        <div class="box">
            <h3> Health Information </h3>
        </div> <br>
        <label for="medical_condition">Medical Condition (include information on special equipment or medication, if required):</label>
		<input type="text" id="medical_condition" name="medical_condition" placeholder="State your medical condition (type Normal if there isn't any)." required>
		<br>
        <div class="textbox">
            <p> Does the student require an epi-pen?
                <input type="radio" id="y" name="epi_pen" value="Yes">
                <label for="y"> Yes </label>
                <input type="radio" id="n" name="epi_pen" value="No">
                <label for="n"> No </label>
            </p>
        </div> <br>

		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
	</form>
</body>
</html>
