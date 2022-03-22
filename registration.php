<html>
<head>
	<style>
		body{
  background-image: url("https://st4.depositphotos.com/13324256/22198/i/1600/depositphotos_221987080-stock-photo-close-beautiful-tropical-leaf-red.jpg");
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
  Student Registration
</h1>
<p id="description">
  Enter the required data in the boxes.
</p>
    <h2 id="title">
  Same Contact & E-Mail are not allowed to submit
</h2>
</div>
<div id="container_2">
  
  <form id="survey-form" action="insert.php" method="post">
    <label id="name-label">Name</label>
      <input type="text" id="name" name="name" class="form" required placeholder="Insert your Name"><br><!--name--->
      <label id="name-label">Class</label>
      <input type="text" id="class" name="class" class="form" required placeholder="Insert your Class"><br><!--name--->
      <label id="name-label">Contact</label>
      <input type="text" id="contact" name="contact" class="form" required placeholder="Insert your Contact"><br><!--name--->
    <label id="email-label">Email</label>
      <input type="email" id="email" name="email" class="form" required placeholder="Insert your Email"><br><!---email-->
    <input type="submit" id="submit" name="submit" value="Submit">
  </form>
</div>


</body>
</html>