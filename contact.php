<?php include 'db_connect.php' ?>
<?php include 'nav.php' ?>
<style>
  body{
  background-image:  url(./assets/img/Home.png);
	background-size: 100%;
	background-repeat: no-repeat;
	background-size: cover;
	min-height: 100vh;
	width: 100%;
  }
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <label for="lname">Country</label>
    <input type="text" id="lname" name="lastname" placeholder="Your Country name..">
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
	<!--  Contact Us Section End -->
<?php include 'footer.php' ?>
