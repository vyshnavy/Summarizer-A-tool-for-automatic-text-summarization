
<html>
<head>
 <meta name="viewport" content="width=device-width" content="initial-scale=1">
 <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/log.css" rel="stylesheet">
</head>
<body id="p3">
   <h2 style="text-align:center">Summarizer</h2>
   <br><br>
	<p style="text-align:center"> <mark>Upload text/audio file you want to summarize.Summarizer will help you to get the summarary.</mark></p>  
   <div class="container"  >
  
  <div class="col-sm-12 ">
    
     <form action="" class="form-inline" method="POST" enctype="multipart/form-data">
     <div style="margin-top:150px; margin-left:25%" >
     <input type="file" name="uploadedfile"  required id="ip1" accept="audio/wav" style="width:400px;height:50px;"  class="form-control ">

	 <input type="Submit" value="Predict" style="width:100px;" name="Predict" class="btn btn-primary">
     </div>
</div><br>
    
   </form>
    <div class="col-sm-12 " style='background-color:#FFFFFF;'>
	<h6>Please wait, Processed Text will display here... </h6>
	<?php
set_time_limit(0);
	if(isset($_POST['Predict']))
	{
	

$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);  
$myFile ="input.txt";
$fh = fopen($myFile,'w') or die("can't open file");
fwrite($fh,$target_path);
fclose($fh);

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
$python=`python codeA.py`;
//echo"$python";
//header("location:index1.php");
$original_text = file_get_contents('original_text.txt', true);
$file = file_get_contents('output.txt', true);
echo"<h3>Original Text</h3>";
echo $original_text;
echo"<h3>Summary</h3>";
echo $file;
  
} else{
    echo "There was an error uploading the file, please try again!";
}

	}
	?>
	</div>
   </div>
   </div>


</body>
</html>