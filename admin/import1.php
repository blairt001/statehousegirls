<?php
include 'db.php';
if(isset($_POST['Import'])){
		

		echo $filename=$_FILES["file"]["tmp_name"];
		

		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	    
	          //It wiil insert a row to our subject table from our csv file`
	           $sql = "INSERT INTO term1(Class, AdmnNo, StudentName, EntryMark, MATH, KISW, ENG, HIST, IRE, CRE, GEO, AGRIC, ART, COMP, HSE, GER, FRE, BUS, MUS, PHY, BIO, CHEM, TOTAL, Average, Grade, Mscore, StreamPstn, FormPst, TargetedGrade, TargetedMScore) VALUES  
	            ('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]','$emapData[16]','$emapData[17]','$emapData[18]','$emapData[19]','$emapData[20]','$emapData[21]','$emapData[22]','$emapData[23]','$emapData[24]','$emapData[25]','$emapData[26]','$emapData[27]','$emapData[28]','$emapData[29]')";
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));;
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File Type:Please Upload CSV File.\");
							window.location = \"login.php\"
						</script>";
				
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"login.php\"
					</script>";
	        
			 

			 //close of connection
			mysqli_close($conn); 
				
		 	
			
		 }
		 else
		 {
			echo "<script type=\"text/javascript\">
						alert(\"Select a file to upload.\");
						window.location = \"login.php\"
					</script>"; 
		 }
	}	 
?>		 