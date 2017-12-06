


<!DOCTYPE html>
<html>
<head>
	<title>Assignment 2  Travis Chester</title>
	<style type="text/css">@import url('css/styles.css');</style>
</head>
<body>
	<div id="border">
		<div id="content">
			<form method="post" action="form_preview.php">
				<fieldset>
					<legend>Data Entry</legend>
					<ul>
						<li>
							<input type="text" name="firstname" id="firstname" value="<? if(isset($_COOKIE['firstname'])) {
                			print $_COOKIE['firstname'];
            				}
            				?>"/>
							<label for="firstname">First Name</label>
						</li>
						<li>
							<input type="text" name="lastname" id="lastname" value="<?
            				if(isset($_COOKIE['lastname'])) {
                			print $_COOKIE['lastname'];
            				}
            				?>"/>
							<label for="lastname">Last Name</label>
						</li>
						<li>
							<input type="text" name="email" id="email" value="<?
            				if(isset($_COOKIE['email'])) {
                			print $_COOKIE['email'];
            				}
            				?>"/>
							<label for="email">Email</label>
						</li>
						<li>
							<input type="text" name="phone" id="phone" value="<?
            				if(isset($_COOKIE['phone'])) {
                			print $_COOKIE['phone'];
            				}
            				?>"/>
							<label for="phone">Phone</label>
						</li>
						<li>
							<input type="text" name="sulley" id="sulley" value="<?
            				if(isset($_COOKIE['sulley'])) {
                			print $_COOKIE['sulley'];
            				}
            				?>"/>
							<label for="sulley">Sulley</label>
						</li>
						<li>
							<input type="text" name="q1" id="q1" value="<?
            				if(isset($_COOKIE['q1'])) {
                			print $_COOKIE['q1'];
            				}
            				?>"/>
							<label for="q1">How often do you brush your teeth?</label>
						</li>
						<li>
							<input type="text" name="q2" id="q2" value="<?
            				if(isset($_COOKIE['q2'])) {
                			print $_COOKIE['q2'];
            				}
            				?>"/>
							<label for="q2">How often do you bath yourself?</label>
						</li>
						<li>
							<input type="text" name="q3" id="q3" value="<?
            				if(isset($_COOKIE['q3'])) {
                			print $_COOKIE['q3'];
            				}
            				?>"/>
							<label for="q3">How often do you clip your toenails?</label>
						</li>
						<li>
							<input type="text" name="q4" id="q4" value="<?
            				if(isset($_COOKIE['q4'])) {
                			print $_COOKIE['q4'];
            				}
            				?>"/>
							<label for="q4">How often do you exercise?</label>
						</li>
						<li>
							<input type="text" name="q5" id="q5" value="<?
            				if(isset($_COOKIE['q5'])) {
                			print $_COOKIE['q5'];
            				}
            				?>"/>
							<label for="q5">How often do you answer "how often" questions?</label>
						</li>
						<li>
							<input type="submit" name="submit" id="submit" value="Preview Answer">
						</li>
					</ul>
				</fieldset>
			</form>
		</div>
	</div>
</body>
</html>