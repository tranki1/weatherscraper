

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="cocoKim, web developer, web designer, front-end developer">
    <meta name="author" content="Coco Kim">

    <title>Weather Scraper</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
    <!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
	html, body{
		height:100%;
		
	}
	
	.container {
		background-image:url("https://c2.staticflickr.com/8/7292/9947797174_ed9cf8e91e_b.jpg");
		width:100%;
		height:100%;
		background-size:cover;
		background-position:center;
		padding-top:100px;	
	}
	
	.center{
		text-align:center;
	}
	
	.white{
		color:white;
	}
	
	.btn{
		margin-top:30px;
		
	}
	
	p {
		padding-top:15px;
		padding-bottom:15px;
		
	}
	
	.alert{
		margin-top:20px;
		display:none;
	}
	footer{
		padding: 50px 0;
		text-align: center;
		text-transform: uppercase;
		text-transform: none;
		font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		line-height: 40px;
		color: white;
		}
	
	</style>

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
			 <h1 class="center white">Weather Predictor</h1>
			 <p class="lead center white">Enter your city below to get the forcast weather</p>
			 <form>
				 <div class="formgroup">
					<input type="text" class="form-control" name="city" id="city" placeholder="E.g: London, Paris, Helsinki..." />
				 </div>
				 <button id="findmyweather" class="btn btn-success btn-lg ">Find my weather</button>
			 </form>
			 <div id ="success" class="alert alert-success">alaert!</div>	
			 <div id="fail" class="alert alert-danger">Can not find weather data for that city.Please try again.</div>
			 <div id="nocity" class="alert alert-danger">Please enter a city!</div>
			</div>
			
		
		</div>
		<footer>
		<div class="row">
		
		Copyright &copy; cocokim.me 2015
		</div>
		</div>
		</footer>
	</div>

   
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    
    <!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	

	<script>
		$("#findmyweather").click(function(event){
			event.preventDefault();
			if ($("#city").val()!="") {
			$.get("scraper.php?city="+$("#city").val(), function( data) {
			
			if (data==""){
			$(".alert").hide();
			$("#fail").fadeIn();}
			else
			{
			$(".alert").hide();
			$("#success").html(data).fadeIn();}
			
			});
			}
			
			else {
				$(".alert").hide();
				$("#nocity").fadeIn();
				
			}
			});
		
	
	</script>

</body>

</html>
