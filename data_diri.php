
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>MY BIOGRAFI</title>
	<style type="text/css">
	</style>
	<link rel="stylesheet" type="text/css" href="960.css">
</head>
<body>
	<div class="container_12" style="border: 1px solid #000; margin-top: -9px; background: gray;"> 
		<div class="grid_12" style="background: yellow; "> 
			<h1>MY BIOGRAFI</h1>
		</div>
		<div class="grid_12" style="background: orange;" >
			<nav>
		    <li><a href="guru">personal info</a><li>
	</nav>

	<div class="clearfix"></div>
		</div>
	</div>
	<div class="container_12" style="border: 1px solid #000; background: gray;">
		<div class="grid_8 " style="border: 1px solid #000; background: beige">
			<h1>PROFILE</h1>
	<img src=<?php echo $_GET['foto']; ?>
	<p>
	
		</div>
		
		<div class="grid_4 alpha" style="border: 1px solid #000; padding-right: 6px; background: coral">
			<h1>Profil BIO</h1>

	<table border="1"
	
	<tr>
		<th>BIO</th>
		<th>ADDRESS</th>
	</tr>
	<tr>
		<td>NAME</td>
		<td>
		<?php
		 echo $_GET['nama'];
		 ?></td>
	</tr>
	<tr>
		<td>Place and Date Of Birth</td>
		<td><?php
		 echo $_GET['pd'];
		 ?></td>
	</tr>
	<tr>
		<td>jenis kelamin</td>
		<td><?php
		 echo $_GET['jenkel'];
		 ?></td>
	</tr>
	<tr>
		<td>Religion</td>
		<td><?php
		 echo $_GET['religion'];
		 ?></td>
	</tr>
	<tr>
		<td>Height</td>
		<td><?php
		 echo $_GET['heigth'];
		 ?></td>
	</tr>
	<tr>
		<td>wheight</td>
		<td><?php
		 echo $_GET['weigth'];
		 ?></td>
	</tr>
	<tr>
		<td>Nationality</td>
		<td><?php
		 echo $_GET['national'];
		 ?></td>
	</tr>
	<tr>
		<td>Marital Status</td>
		<td>.<?php
		 echo $_GET['status'];
		 ?></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><?php
		 echo $_GET['location'];
		 ?></td>
	</tr>
	<tr>
		<td>Phone</td>
		<td><?php
		 echo $_GET['phone'];
		 ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php
		 echo $_GET['email'];
		 ?></td>
	</tr>
</table>
<p>
	<h1>Education</h1>
	<table border="1"
	<tr>
		<th>School</th>
		<th>Place</th>
		<th>Year</th>
	</tr>
	<tr>
		<td>Primary School</td>
		<td><?php
		 echo $_GET['sdlock'];
		 ?></td>
		<td><?php
		 echo $_GET['sdwtu'];
		 ?></td>
	</tr>
	<tr>
		<td>Junior High School</td>
		<td><?php
		 echo $_GET['splock'];
		 ?></td>
		<td><?php
		 echo $_GET['spwtu'];
		 ?></td>
	</tr>
	<tr>
		<td>Senior High School</td>
		<td><?php
		 echo $_GET['salock'];
		 ?></td>
		<td><?php
		 echo $_GET['sawtu'];
		 ?></td>
	</tr>
	<tr>
		<td>UNIVERSITY</td>
		<td><?php
		 echo $_GET['unlock'];
		 ?></td>
		<td><?php
		 echo $_GET['unwtu'];
		 ?></td>
	</tr>	
</table>
</p>
		</div>
	</div>
	<div class="container_12" style="border: 1px solid #000; background: darkgrey">
		<div class="grid_12">
			footer
		</div>
	</div>

</body>

</html>