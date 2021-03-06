<!DOCTYPE html>
<html lang="en" class="<meta name="viewport" content="width=device-width">

<head>
  <meta charset="UTF-8">
  <title>Upload crop & save</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <main class="page">
	<h2>Upload ,Crop and save.</h2>
	<!-- input file -->
	<div class="box">
		<input type="file" id="file-input" />
		<a href="index.php" class="btn">Back</a>
	</div>
	<!-- leftbox -->
	<div class="box-2">
		<div class="result"></div>

	</div>
  
	<!--rightbox-->
	<div class="box-2 img-result hide" id="rotate1">
		<!-- result of crop -->
		<img class="cropped" src="" alt="">
		<div id="rotate"></div> 
  </div>
  
  <div id="transbox"></div>
  
  
  <!-- input file -->
	<div class="box">
		<div class="options hide">
			<label> Width</label>
			<input type="number" class="img-w" value="300" min="100" max="1200" />
		</div>
		<!-- save btn -->
		<button class="btn save hide">Save</button>
		<!-- download btn -->
		<a href="" class="btn download hide">Download</a>
	</div>
</main>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/cropperjs/0.8.1/cropper.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
