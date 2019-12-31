<?php    
// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'register');
	$result = mysqli_query($db, "SELECT * FROM users ORDER BY id DESC");
?>
<html>
<head>
   <title>SMART WATER SUPPLY MANAGEMENT</title>
   <link rel="stylesheet" type="text/css" href="css/stylee.css">
</head>
<body>
   <header>
         <div class="main">
		 
		    <div class="logo">
			   
		<h1>ADMIN PAGE</h1>
			</div>
				</div>
		<div class="title">

		<h1>ADMIN PAGE</h1>

		</div>
		     <ul>
			
			      <li class="active"><a href="#">HOME</a></li>
				  <li><a href="#">ABOUT</a></li>
				  <li><a href="#">CONTACT</a></li>
			
			</ul>	  
		
		<div class="button">
			<table width='100%' border=0 align=center >
        <tr bgcolor='skyblue'>
   
            <td>User Name</td>
            <td>Email</td>
            <td>Category</td>
        </tr>
        <?php 
       
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['username']."</td>";
            echo "<td>".$res['email']."</td>";
			echo "<td>".$res['category']."</td>";
               
            echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
		</div>
	</header>
	
	
</body>
</html>