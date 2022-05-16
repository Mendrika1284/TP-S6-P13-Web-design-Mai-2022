<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title>Back Office</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
<?php
    if(isset($error)){ ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
        </div>
    <?php }
?>
	<div class="container h-100">
            <div class="col-md-12">
                <center><h3>Choisir table</h3></center>
                <form action="traitementChoix" method="post">
                    <select name="table" class="form-control">
                    <?php foreach($table as $key){ ?>
                        <option value="<?php echo $key ?>"><?php echo $key ?></option>
                    <?php } ?>
                    </select><br>
                    <center><input type="submit" class="btn btn-primary" value="Suivant"></center>
                </form>
        </div>
	</div>
</body>
</html>
