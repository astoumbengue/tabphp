<?php
	$variables= array("NOM"=>"MBENGUGE",
	                      "PRENOM"=>"Astou",
	                      "TEL"=>"78 383 91 87",
	                      "EMAIL"=>"mbenguastou76@gmail.com",
	                      );
 ?>
	<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="tableau.css"/>
		<title>TABLEAU </title>
	</head>
  <body>
	<div align="center">
     <table>
    <thead>
    		<tr>
    				<td colspan="2">

    				  <img src="astou1.png" height="250" width="300" style="border: 5px solid ; border-radius: 10px">
    			    </td>
    		</tr>
    </thead>
    <?php
    			foreach($variables as $key=>$value)
                    	{
    ?>
    		<tr>
    			<td><?=$key ?> </td>
                <td><?=$value ?></td>
    		</tr>
    <?php
    		}
    ?>
    </table>
   </div>
 </body>
</html>