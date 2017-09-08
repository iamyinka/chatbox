<?php 

include('database.php');

$query = "SELECT * FROM shouts ORDER BY id DESC";
$results = mysqli_query($connection, $query);

?>


<!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Chat Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="[ENTER SITE DESCRIPTION HERE]">
    <meta name="author" content="[ENTER AUTHOR INFO HERE]">

    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

    <! -- WE ASSUME YOU ARE USING A main.css FOR CSS CUSTOMIZATION -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <div class="container">
    	<div class="row">
    		<div class="col-sm-8 col-sm-offset-2">
    		
    			<div class="chat">
    				<h1>Chat Box</h1>
					<div class="chatbox">
						<ul>
							<?php while($row = mysqli_fetch_assoc($results)) { ?>
							<li><span><?php echo $row['time']; ?> - </span><strong><?php echo $row['username']; ?></strong>: <?php echo $row['message']; ?></li>
							<?php } ?>
						</ul>
					</div>

					<div class="inputs">
						<form action="process.php" method="POST" role="form">
							
							<?php if(isset($_GET['error'])) { ?>
								<div class="alert alert-danger"><?php echo $_GET['error']; ?></div>
							<?php }; ?>

							<div class="form-group">
								<input type="text" class="form-control" id="username" name="username" placeholder="Enter Name">
							</div>

							<div class="form-group">
								<input type="text" class="form-control" id="message" name="message" placeholder="Enter Message">
							</div>



							<button type="submit" class="btn btn-primary btn-block" name="submit">Send Message</button>
						</form>

					</div>
    			</div>
    			
    		</div>
    	</div>
    </div>

	

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
