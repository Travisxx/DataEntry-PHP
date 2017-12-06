<?
    if(isset($_POST['firstname'])) {
        setcookie("firstname", $_POST['firstname'], time()+30); 
    }
    if(isset($_POST['lastname'])) {
        setcookie("lastname", $_POST['lastname'], time()+30);
    }
    if(isset($_POST['email'])) {
        setcookie("email", $_POST['email'], time()+30); 
    }
    if(isset($_POST['phone'])) {
        setcookie("phone", $_POST['phone'], time()+30);
    }
    if(isset($_POST['sulley'])) {
        setcookie("sulley", $_POST['sulley'], time()+30); 
    }
    if(isset($_POST['q1'])) {
        setcookie("q1", $_POST['q1'], time()+30);
    }
    if(isset($_POST['q2'])) {
        setcookie("q2", $_POST['q2'], time()+30); 
    }
    if(isset($_POST['q3'])) {
        setcookie("q3", $_POST['q3'], time()+30);
    }
    if(isset($_POST['q4'])) {
        setcookie("q4", $_POST['q4'], time()+30); 
    }
    if(isset($_POST['q5'])) {
        setcookie("q5", $_POST['q5'], time()+30);
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Assignment 2 Travis Chester</title>
	<style type="text/css">@import url('css/styles.css');</style>
</head>
<body>
	<div id="border">
		<div id="content">
			<p>Personal Info</p>
			<p>First Name: <?php echo $_POST["firstname"]; ?></p>
			<p>Last Name: <?php echo $_POST["lastname"]; ?></p>
			<p>E-mail: <?php echo $_POST["email"]; ?></p>
			<p>Phone Number: <?php echo $_POST["phone"]; ?></p>
			<p>Sulley Address: <?php echo $_POST["sulley"]; ?> </p>
			<p>How often do you brush your teeth?: <?php echo $_POST["q1"]; ?></p>
			<p>How often do you bath yourself?: <?php echo $_POST["q2"]; ?></p>
			<p>How often do you clip your toenails?: <?php echo $_POST["q3"]; ?></p>
			<p>How often do you exercise?: <?php echo $_POST["q4"]; ?></p>
			<p>How often do you answer "how often" questions?: <?php echo $_POST["q5"]; ?> </p>

			<form method="post" action="form_entry.php">
		       	<input type="submit" name="edit" value="Edit" />
		    </form>
		    <form method="post" action="form_confirmed.php">
		        <input type="submit" name="confirm" value="Finish" />
		    </form>
		</div>
	</div>
</body>
</html>