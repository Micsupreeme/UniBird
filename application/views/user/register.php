<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css')?>"/>
    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="logo"><a href="<?php echo base_url('user/profile/' . $this->session->userdata('id'));?>">
            <b class="logo">UniBird</b></a></div>
    <br><p class="intro">Your Academic Meeting and Messaging Network</p>
<form method="post" action = "">
    <label>Email Address:</label>
    <input type="email" placeholder="Enter your Email" name="userEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br>
    <label>First Name:</label>
    <input type="text" placeholder="Enter your first name" name="firstName"><br>
    <label>Surname:</label>
    <input type="text" placeholder="Enter your surname" name="surname"><br>
    <label>Password:</label>
    <input type="password" name="userPassword" placeholder="Enter your Password"><br>
    <label>I am a:</label><br>
    <input type="radio" name="role" value=0 checked="checked"> Student<br>
    <input type="radio" name="role" value=1> Lecturer<br>
    <input name="submit" type="submit" id="Submit" value="Submit">
    <input name="clear" type="submit" id="clear" value="Clear Form">
</form>
<?php echo validation_errors(); ?>
</body>