<?php

	//header('location:sell.php');
	$pname = $_POST['pname'];
	$bprice=$_POST['bprice'];
	$sdatetime=$_POST['sdatetime'];
	$edatetime=$_POST['edatetime'];
	$pdesc=$_POST['pdesc'];

	if(!empty($pname)||!empty($bprice)||!empty($sdatetime)||!empty($edatetime)||!empty($pdesc))
	{
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "aucproduct";
		$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

		if (mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		}

		else
		{
			$SELECT = "SELECT pname From newproduct Where pname =? Limit 1";
			$INSERT = "INSERT Into newproduct (pname,bprice,sdatetime,edatetime,pdesc) values(?,?,?,?,?)";
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s",$pname);
			$stmt->execute();
			$stmt->bind_result($pname);	
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if($rnum == 0)
			{
				$stmt->close();
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sisss" ,$pname,$bprice,$sdatetime,$edatetime,$pdesc);
				$stmt->execute();
				header('location:index4.html');
			}

			else
			{
				echo "Someone already created this product";
				echo "<br><br><a href='index.html'>Back to Website</a>";
			}
			$stmt->close();
			$conn->close();
		}
	}

	else
	{
		echo "All Fields are reqiured";
		die();
	}
?>