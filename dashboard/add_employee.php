<?php
	include("../inc/header.php");
										    
	if($usertype != "Admin"){
        header("Location: ../dashboard");
    }

?>
	<section class="side-menu fixed left">
		<div class="top-sec">
			<div class="dash_logo">
			</div>			
			<p>DOLE Record Monitoring System</p>
			
			<img src="../images/Dole2.png" width="250px height="250px>
		</div>
		<ul class="nav">
			<li class="nav-item"><a href="../dashboard"><span class="nav-icon"><i class="fa fa-users"></i></span>All Clients</a></li>
			
			<?php if($usertype == "Admin"){ ?>
				<li class="nav-item current"><a href="../dashboard/add_employee.php"><span class="nav-icon"><i class="fa fa-user-plus"></i></span>Add Client</a></li>
				<li class="nav-item"><a href="../dashboard/add_user.php"><span class="nav-icon"><i class="fa fa-user"></i></span>Add User</a></li>
			<?php		} ?>
			<li class="nav-item"><a href="../dashboard/settings.php"><span class="nav-icon"><i class="fa fa-cog"></i></span>Settings</a></li>
			<li class="nav-item"><a href="../dashboard/logout.php"><span class="nav-icon"><i class="fa fa-sign-out"></i></span>Sign out</a></li>
			<p>Project by: Niño Michael p. Magamano</p>
		</ul>
	</section>
	<section class="contentSection right clearfix">
		<div class="displaySuccess"></div>
		<div class="container">
			<div class="wrapper add_employee clearfix">
				<div class="section_title">Add Client</div>
				<form id="addemployee" class="clearfix" method="" action="">
					<div class="section_subtitle">Personal Data</div>
					<div class="input-box input-small left">
						<label for="employee_id">Client ID</label><br>
						<input type="text" class="inputField emp_id" placeholder="Optional" name="employee_id">
						<div class="error empiderror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="firstname">First Name</label><br>
						<input type="text" class="inputField firstname" name="firstname">
						<div class="error firstnameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="middlename">Middle Name</label><br>
						<input type="text" class="inputField middlename" placeholder="Optional" name="middlename">
						<div class="error middlenameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="lastname">Last Name</label><br>
						<input type="text" class="inputField lastname" name="lastname">
						<div class="error lastnameerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="phone">Phone number</label><br>
						<input type="text" class="inputField phone" name="phone">
						<div class="error phoneerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="jobtype">Type of beneficiares</label><br>
						<input type="text" class="inputField jobtype" name="jobtype">
						<div class="error jobtypeerror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="dateemployed">Birthday</label><br>
						<input type="text" id="datepicker" class="inputField dateemployed" name="dateemployed">
						<div class="error dateemployederror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="empstatus">Civil status</label><br>
						<select class="inputField empstatus" name="empstatus">
							<option value="">-- Select status --</option>
							<option value="Single">Single</option>
							<option value="Married">Married</option>
						</select>
						<div class="error empstatuserror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="resaddress">Barangay</label><br>
						<input type="text" class="inputField resaddress" name="resaddress">
						<div class="error resaddresserror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="reslocation">Municipality</label><br>
						<input type="text" class="inputField reslocation" name="reslocation">
						<div class="error reslocationerror"></div>
					</div>
					<div class="input-box input-small left">
					
					
				
					
					
						<label for="gpsreslocation">Province</label><br>                   
						<input type="text" class="inputField gpsreslocation" name="gpsreslocation">
						<div class="error gpsreslocationerror"></div>
					</div>
					<div class="input-box input-small left">
					<label for="resdirection">District</label><br>                   
						<input type="text" class="inputField resdirection" name="resdirection">
						<div class="error resdirectionerror"></div>
					</div>
					<div class="section_subtitle left">Upload Client Photo</div>
					<div class="input-box input-upload-box left">
						<div class="upload-wrapper">
							<div class="upload-box">
								<input type="file" name="passport_photo" class="uploadField passport_photo">
								<div class="uploadfile passportPhoto_file">Upload Client Photo</div>
								<div class="filebtn passport-btn">Upload</div>
								<div class="filebtn passport-disbtn">Upload</div>
							</div>
						</div>
						<div class="error photoerror"></div>
						<div class="passport_file"></div>
					</div>
					<div class="section_subtitle left">Upload Client ID</div>
					<div class="input-box input-small left">
						<label for="idnumber">ID Number</label><br>
						<input type="text" class="inputField idnumber" name="idnumber">
						<div class="error IDnumbererror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="idtype">ID type</label><br>
						<select class="inputField idtype" name="idtype">
							<option value="">-- Select ID type --</option>
							<option value="Voter's">Voter's</option>
							<option value="Passport">Passport</option>
							<option value="NHIS">NHIS</option>
							<option value="Driving License">Driving License</option>
							<option value="Driving License">e-Card / UMID</option>
							<option value="Driving License">Employee’s ID / Office Id</option>
							<option value="Driving License">Professional Regulation Commission (PRC) ID</option>
							<option value="Driving License">Senior Citizen ID</option>
							<option value="Driving License">SSS ID</option>
							<option value="Driving License">COMELEC / Voter’s ID / COMELEC Registration Form</option>
							<option value="Driving License">Philippine Identification (PhilID / ePhilID)</option>
							<option value="Driving License">NBI Clearance</option>
							<option value="Driving License">Integrated Bar of the Philippines (IBP) ID</option>
							<option value="Driving License">BIR (TIN)</option>
							<option value="Driving License">Pag-ibig ID</option>
							<option value="Driving License">Person’s With Disability (PWD) ID</option>
							<option value="Driving License">Pantawid Pamilya Pilipino Program (4Ps) ID</option>
							<option value="Driving License">Barangay ID</option>
							<option value="Driving License">Phil-health ID</option>
							<option value="Driving License">Philippine Postal ID</option>
							<option value="Driving License">School ID </option>
							<option value="Driving License">Documents with picture and signature</option>
							<option value="Driving License">Other valid government-issued IDs</option>
							
						</select>
						<div class="error idtypeerror"></div>
					</div>
					<div class="input-box input-upload-box left">
						<div class="upload-wrapper">
							<div class="upload-box">
								<input type="file" name="nationalID" class="uploadField nationalID">
								<div class="uploadfile nationalID_file">Upload Selected ID type</div>
								<div class="filebtn nationID-btn">Upload</div>
								<div class="filebtn nationID-disbtn">Upload</div>
							</div>
						</div>
						<div class="error nationalIDerror"></div>
						<div class="selected_nationalID_file"></div>
					</div>
					<div class="section_subtitle left">Next of Kin Data</div>
					<div class="input-box input-small left">
						<label for="fullname">Full Name</label><br>
						<input type="text" class="inputField fullname" name="fullname">
						<div class="error fullnameerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="relationship">Relationship to Client</label><br>
						<input type="text" class="inputField relationship" name="relationship">
						<div class="error relationshiperror"></div>
					</div>
					<div class="input-box input-small left">
						<label for="kinphone">Phone number</label><br>
						<input type="text" class="inputField kinphone" name="kinphone">
						<div class="error kinphoneerror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="kinresaddress">Address</label><br>
						<input type="text" class="inputField kinresaddress" name="kinresaddress">   
						<div class="error kinresaddresserror"></div>
					</div>
					<div class="input-box input-small right">
						<label for="kinresdirection">District</label><br>
						<input type="text" class="inputField kinresdirection" name="kinresdirection">
						<div class="error kinresdirectionerror"></div>
					</div>
					<div class="input-box">
						<button type="submit" class="submitField">Add record</button>
					</div>
				</form>
			</div>
		</div>
	</section>
<script type="text/javascript" src="../js/global.js"></script>
</body>
</html>