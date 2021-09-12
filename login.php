<?php include_once "header.php"; ?>

<?php
 
?>
<div class="container">
    <div class="row">
        <h1 class="display-4  text-dark mx-auto my-5" style="font-weight:bold;text-align:center;"><span style="text-transform:uppercase;" class="text-warning">Helopolis </span>Hospital <i class="fa fa-h-square" aria-hidden="true"></i></h1>
        <div class="col-8 offset-2 my-5 mx-auto">
            <form method="POST" action="hospital.php">
                <div class="form-group">
                    <input type="text" name="number" placeholder="Enter your phone number" class="form-control" id="exampleInputnumber" aria-describedby="numberHelp">
                    <small id="numberHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                </div>
                <button type="submit" name="enter" class="btn btn-warning btn-block"> Enter <i class='fas fa-sign-in-alt' style='font-size:19px'></i></button>
            </form>
        </div>
    </div>
</div>
<?php include_once "footer.php"; ?>