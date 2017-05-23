<!DOCTYPE html>
<html>
<head>
    <title>Egypt Shrine Concert Signup Page</title>
    <script type="text/JavaScript">
        function showMessage(){
            var name = document.getElementById("name").value;
            display_name.innerHTML= name;
        }
    </script>
</head>
<body>
<table width="50%" align="center">
<tr>
<td align="center">
<h2>Please fill in you name below and click the submit button to add your name to the list to work the concert. Thank you for your help in raising money ofr our Shriners Hospitals.</h2>
<form method="post" action="">
Enter name: <input type="text" id = "name" name="name">
<input type="submit"  value="submit" />
</form>
<p> Signed up so far: <br />
<span id = "display_name"></span> </p>
<?php 

		include("sql.class.php");
		$show = new Sql();
		
		
		
		
		$show->insertSql();

		
		$show->select();
		

	?> 
</td></tr>
</table>
<div class="center">

	<p></p>
</div>
</body>
</html>