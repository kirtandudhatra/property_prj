<?php

echo "<div class='container-fluid' style='background-color: black;margin-top: 0px'>";
	
echo "<div class='row'>";

if($_SESSION['role'] == "0"){

echo "<div class='col-sm-3'></div>";

echo "<div class='col-sm-1'>
				<a href = 'index.php'><button type='button' class='btn btn-default btn-sm'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </button></a>
			</div>";
echo "<div class='col-sm-1'>
				<a href = 'add.php'><button type='button' class='btn btn-default btn-sm'> &nbsp;&nbsp;Add Item&nbsp;&nbsp;&nbsp; </button></a>
			</div>";
echo "<div class='col-sm-1'>
				<a href = 'edit.php'><button type='button' class='btn btn-default btn-sm'>&nbsp;&nbsp;Edit Item&nbsp;&nbsp;&nbsp;</button></a>
			</div>";

echo "<div class='col-sm-1'>
				<a href = 'search.php'><button type='button' class='btn btn-default btn-sm'>Search Item</button></a>
			</div>";
echo "<div class='col-sm-1'>
				<a href = 'create_user.php'><button type='button' class='btn btn-default btn-sm'>Create User</button></a>
			</div>";

echo "<div class='col-sm-1'>
				<a href = 'backup.php'><button type='button' class='btn btn-default btn-sm'>Backup</button></a>
			</div>";
echo "<br>";

echo "<div class='col-sm-3' align=RIGHT style='margin-top: -60px; '>";

		//echo "<p style='font-size: 15px; color: #f9f9f9'>Developed by - Kirtan Dudhatra(15ITUOS014)</p>";
		//echo "<p style='font-size: 15px; color: #f9f9f9'>Copyright © 2018 by I.T. Department, DDU</p>";

echo "</div>";
 
 	echo "<br>";
 }
	echo "</div>";

	echo "</div>";

?>