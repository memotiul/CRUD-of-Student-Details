<?php
require_once "connection.php";
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE teach set  name='" . $_POST['name'] . "', class='" . $_POST['class'] . "' ,contact='" . $_POST['contact'] . "' ,email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
echo "<script type='text/javascript'>alert('Details Updated Successfully');location='index.php';</script>";
}
$query="SELECT * FROM teach WHERE id='" . $_GET['id'] . "'";
$result = mysqli_query($conn,$query);
$row= mysqli_fetch_array($result);
?>
<html>
<head>
	<style>
		body{
  background-image: url("https://st4.depositphotos.com/13324256/19806/i/1600/depositphotos_198063898-stock-photo-green-wet-leaf-isolated-black.jpg");
}
div{
  margin: 2em 5em 3em 5em;

  padding: 2em 6em 2em 6em;
  background: rgb(2,0,36);
background: linear-gradient(117deg, rgba(2,0,36,1) 0%, rgba(125,129,150,0.9757503221014968) 96%, rgba(222,199,45,1) 98%, rgba(222,199,45,1) 98%, rgba(142,49,242,0.5859143339953169) 98%);
  color: #ffff;
  font-family: cursive;
  border-radius: 1.25rem;
}
#container_1{
  text-align:center;
}
#container_2{
 display: block;

  
}
.form{
  width: 100%;
  margin-bottom: 1em;
}

#submit{
  display: block;
  width: 100%;
  padding: 0.75rem;
  background: rgb(2,0,36);
  color: inherit;
  border-radius: 15px;
  cursor: pointer;
}

textarea{
  width: 100%;
}
	</style>
	</head>
<body>

<div id="container_1">
  
  <h1 id="title">
  Student Details Update
</h1>
<p id="description">
  Edit Details & click on Upate
</p>
  
</div>
<div id="container_2">
  
 <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
    <label id="name-label">Name</label>
      <input type="text" id="name" name="name" class="form" value="<?php echo $row["name"]; ?>"><br><!--name--->
      <label id="name-label">Class</label>
      <input type="text" id="class" name="class" class="form" value="<?php echo $row["class"]; ?>"><br><!--name--->
      <label id="name-label">Contact</label>
      <input type="text" id="contact" name="contact" class="form" value="<?php echo $row["contact"]; ?>"><br><!--name--->
    <label id="email-label">Email</label>
      <input type="email" id="email" name="email" class="form" value="<?php echo $row["email"]; ?>"><br><!---email-->
   <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
    <input type="submit" id="submit" name="submit" value="Update">
  </form>
</div>


</body>
</html>