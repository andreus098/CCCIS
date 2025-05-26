<!DOCTYPE html>
<html>
<head>
	<title>Update Tution Info</title>
	<link rel="stylesheet" type="text/css" href="css/setting.css">	
	<link rel="stylesheet" type="text/css" href="css/Navbar.css">	
</head>
<?php
 include ( "inc/connection.inc.php" );
 error_reporting(0);
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	header("Location: index.php");
	$user = "";
	$utype_db = "";
}
else {
	$user = $_SESSION['user_login'];
	$result = $con->query("SELECT * FROM user WHERE id='$user'");
		$get_user_name = $result->fetch_assoc();
			$uname_db = $get_user_name['fullname'];
			$utype_db = $get_user_name['type'];
}
if (isset($_REQUEST['uid'])) {
	$pstid = mysqli_real_escape_string($con, $_REQUEST['uid']);
	$result1 = $con->query("SELECT * FROM tutor WHERE t_id='$user' ORDER BY id DESC");
	$get_tutor_name = $result1->fetch_assoc();
	$tid_db = $get_tutor_name['t_id'];
	$id_db = $get_tutor_name['id'];
	$uinst_db = $get_tutor_name['inst_name'];
	$medium = $get_tutor_name['medium'];
	$cls = $get_tutor_name['class'];
	$sub = $get_tutor_name['prefer_sub'];
	$f_sal = $get_tutor_name['salary'];
	$plocation_db = $get_tutor_name['prefer_location'];
	if($user != $_REQUEST['uid']){
		header('location: index.php');
	}else{
	}
}else {
	header('location: index.php');
}
//posting
if (isset($_POST['updatetutioninfo'])) {
	$f_loca = $_POST['location'];
	$f_sal = $_POST['sal_range'];
	try {
				if(($user == $_REQUEST['uid']) && ($utype_db == "teacher"))
				{

					$sublist = implode(',', $_POST['sub_list']);
					$classlist = implode(',', $_POST['class_list']);
					$mediumlist = implode(',', $_POST['medium_list']);
					if($result4 = $con->query("INSERT INTO tutor (t_id,prefer_sub,class,medium,inst_name,salary,prefer_location) VALUES ('$user','$sublist','$classlist','$mediumlist','$uinst_db','$_POST[sal_range]','$_POST[location]')")){
						$result = $con->query("DELETE FROM tutor WHERE id='$id_db'");
					}
				//success message
				$success_message = '
				<div class="signupform_content"><h2><font face="bookman">Post successfull!</font></h2>
				<div class="signupform_text" style="font-size: 18px; text-align: center;"></div></div>';
				header("Location: aboutme.php?uid=".$user."");
				}
			}
			catch(Exception $e) {
				$error_message = $e->getMessage();
		}
}
?>
<header>
<nav>
		  <div class="logo">
            <img src="./Image/logo3.png" alt="Logo Image">
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="index.php" >Students</a></li>
            <li><a href="search.php">Search Tutor</a></li>
			<?php 
			if($utype_db == "teacher")
				{
				}else {
					echo '<li><a class=" navlink" href="postform.php">Post</a></li>';
				}
			 ?>
						<?php
							if($user != ""){
								$resultnoti = $con->query("SELECT * FROM applied_post WHERE post_by='$user' AND student_ck='no'");
								$resultnoti_cnt = $resultnoti->num_rows;
								if($resultnoti_cnt == 0){
									$resultnoti_cnt = "";
								}else{
									$resultnoti_cnt = '('.$resultnoti_cnt.')';
								}
								echo '<div class="btn"><li><a href="notification.php"><button class="join-button">Notification'.$resultnoti_cnt.'</button></a>
								<a  href="profile.php?uid='.$user.'"><button class="join-button">'.$uname_db.'</button></a>
								<a  href="logout.php"><button class="join-button" >Logout</button></a>';
							}else{
								echo '<a href="login.php"><button class="join-button">Login</button></a>
								<a href="registration.php"><button class="join-button">Register</button></a><d/iv></li>';
							}
						?>
			</div>
			</ul>
</nav>
</header>
<body class="body1"  style="  background:fixed url(./image/bg0.jpg);background-size: 100%;">
	<center><div class="bars">
            <?php echo '<a href="aboutme.php?uid='.$user.'" ><button class="navbtn p_btn s_btn">Profile</button></a>'; ?>
            <?php echo '<a href="profile.php?uid='.$user.'" ><button class="navbtn">Post</button></a>'; ?>
            <?php echo '<a href="settings.php"><button class="navbtn">Settings</button></a>'; ?>
        </div>
				<div>
								<form action="" method="POST" class="registration">
								<?php 
									echo '
										<div class="holecontainer" style=" margin-top: 100px;">
										<div class="nfbody">
										<div class="p_body">';
													if (isset($error_message)) {
														echo '<div class="signup_error_msg" style="
                                                        color: #A92A2A;">'.$error_message.'</div>';
													}elseif(isset($succs_message)){
														echo '<div class="signup_error_msg" style="
                                                        color: #A92A2A;">'.$succs_message.'</div>';
													}
												echo'<div class="setting-box post-box">
											<h2 style="text-align: center;">Update Tution Informaion</h2>'; ?>

	    <div class="medium">
        <h3>Language</h3>
        <div class="md">
		<div class="divp35"><input <?php $medium1=strstr($medium, "Urdu"); if($medium1 != '') echo 'checked'; ?> type="radio" name="medium_list[]" id="md" value="Tagalog"><span>Tagalog</span></div>
		<div class="divp35"><input <?php $medium1=strstr($medium, "English"); if($medium1 != '') echo 'checked'; ?> type="radio" name="medium_list[]" id="md" value="English"><span>English</span></div>
		<div class="divp35"><input <?php $medium1=strstr($medium, "Any"); if($medium1 != '') echo 'checked'; ?> type="radio" name="medium_list[]" id="md" value="Ilocano"><span>Ilocano</span></div>
</div></div>
		<div class="subject">
		<h3>Subject</h3>
		<div class="sb">
		<div class="divp35"><input type="checkbox" name="sub_list[]" value="Operations Research"><span>Operations Research</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Automata Theory & Languages"><span>Automata Theory & Languages</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Software Engineering"><span>Software Engineering</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Distributed Systems"><span>Distributed Systems</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Information Assurance & Security"><span>Information Assurance & Security</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Operating Systems"><span>Operating Systems</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Computer Networks"><span>Computer Networks</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Artificial Intelligence"><span>Artificial Intelligence</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Systems Analysis & Design"><span>Systems Analysis & Design</span></div>
		</div>
	</div>
<div class="class">
	<h3>Year Level</h3>
	<div class="cls">
	        <div class="divp35"><input type="radio" name="class_list[]" value="First"><span>First</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="Second"><span>Second</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="Third"><span>Third</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="Fourth"><span>Fourth</span></div>
			
	</div>
</div>
<?php	echo '
	<div class="location">
	<h3>Location</h3>
	<div class="lc">
		<input type="text" id="location" name="location" value="'.$plocation_db.'"/>
	</div>
</div>
<div class="salary">
<h3>Time</h3>
<div class="slr">
	<select name="sal_range">';
	if($f_sal!="") echo '<option value="'.$f_sal.'">'.$f_sal.'</option>';
  echo '<option value="None">None</option>
	  <option value="1 hour">1 hour</option>
								  <option value="2 hour">2 hour</option>
								  <option value="3 hour">3 hour</option>
								  <option value="4 hour">4 hour</option>
	</select>
</div>
	<input type="submit" class="sub_button" name="updatetutioninfo" value="Update"/><br></div><br>
	</div></div>'
	?>
</form>
</div>
<script src="./js/script.js"></script>
</body>
</html>