<!DOCTYPE html>
<html>
	<head>
        <style>
            form{
                margin-left: 30%;
            }
            
            textarea{
                height: 80px;
                width: 32%;
            }

            body{
               background-image: url("stripline.jpg");
            }
            
            
        </style>
		<title>Project Encode</title>
		<meta charset="utf-8"/>
	</head>
	<body>
	<div class="panel-body">
	<form id="encode" method="get" action="encodedecode.php">
       <p style="font-family:Georgia;">Encrypt</p>
	<input type="text" name="texto" size="30">
	<input type="submit" value="Encrypt"/>
        <br>
        <br>
	
	<textarea>
		<?php
			$t = isset($_GET["texto"])?$_GET["texto"]:"";
			if ($t == "") {
				echo "";
			} else {
				echo base64_encode($t);
			}
		?>
	</textarea>
        </form>
        </div>

	<br/>
	<br/>
	<br/>

	
	<form id="decode" method="get" action="encodedecode.php">
        <p>Decrypt</p>
	<input type="text" name="texto2" size="30">
	<input type="submit" value="Decrypt"/>
        <br>
        <br>
	
	<textarea>
		<?php
			$t2 = isset($_GET["texto2"])?$_GET["texto2"]:"";
			if ($t2 == "") {
				echo "";
			} else {
				echo base64_decode($t2);
			}
		?>
	</textarea>
        </form>
	</body>
</html>