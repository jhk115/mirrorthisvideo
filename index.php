<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mirror this video</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="shortcut icon" href="http://faviconist.com/icons/5b6778006b8fd15899c4c77b58309c37/favicon.ico" />
  </head>
  <body>

	<div class="container">

      <div class="jumbotron" style="margin-top:100px">
        <h1 style="text-align:center">mirror this video <i class="fa fa-magic"></i></h1>
		<!-- <p class="lead">“We really need the Internet to be that thing that we all dreamed of it being. We need it to connect us all together. We need it to introduce us to new ideas and new people and different perspectives. And it’s not going to do that if it leaves us all isolated in a Web of one.” — Eli Pariser</p>-->
		
		<div class="alert alert-danger" style="display:none" role="alert"></div>
		
		<p class="success-block" style="display:none">
		<button id="link-button" type="button" class="btn btn-default btn-lg">http://test.com/test <i class="fa fa-external-link"></i></button>
		</p>
		<p class="success-block" style="display:none">
			<a class="btn btn-lg btn-success redo-button" href="#" role="button">make another</a>
		</p>
		
		<p class="preload-block">
			<div class="input-group preload-block">
			  <div class="input-group-addon input-lg"><i class="status-icon fa fa-lock"></i></div>
			  <input id="url" class="form-control input-lg" type="link" placeholder="paste link to video">
			</div>
		</p>
		<p class="preload-block">
			<a class="btn btn-lg btn-info mirror-button" href="#" role="button">make mirror</a>
		</p>
      </div>
      
      <div class="footer">
        <p><i class="fa fa-github"></i> <a href="https://github.com/jhk115/mirrorthisvideo" target="_blank">source at github</a></p>
      </div>

    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- Logic JS -->
    <script src="/main.js"></script>
    
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-56429146-1', 'auto');
	  ga('send', 'pageview');

	</script>
  </body>
</html>