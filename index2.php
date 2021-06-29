
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
    
     <form action="" class="form-inline" method="POST" >
     <div style="margin-top:100px; margin-left:25%" >
         <textarea type="text" name="data" placeholder="Enter The  Contents " required style="width:400px; height:150"  class="form-control ">
</textarea>

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
	
$data=$_POST['data'];
$myFile ="original_text.txt";
$fh = fopen($myFile,'w') or die("can't open file");
fwrite($fh,$data);
fclose($fh);


$python=`python codeB.py`;
//echo"$python";
//header("location:index1.php");
$original_text = file_get_contents('original_text.txt', true);
$file = file_get_contents('output.txt', true);
echo"<h3>Original Text</h3>";
echo $original_text;
echo"<h3>Summary</h3>";
echo $file;


	}
	?>
	</div>
   </div>
   </div>


</body>
</html>