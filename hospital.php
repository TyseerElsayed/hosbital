<?php include_once "header.php"; ?>

<?php
  $num = $_POST['number'];
?>

<div class="container">
    <div class="row">
        <h1 class="display-4  text-dark mx-auto my-5" style=" font-weight:bold;text-align:center;"> <span style="text-transform:uppercase;" class="text-warning">Helopolis</span> Hospital <i class="fa fa-h-square" aria-hidden="true"></i></h1>
        <div class="col-12">
            <form method="POST" action="surveyresult.php">
                <input type="hidden" value="<?php echo $num ?>" name="number">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">QUESTION <i class="fa fa-question-circle" aria-hidden="true"></i></th>
                            <th scope="col">Bad <i class='far fa-frown'></i></th>
                            <th scope="col">Good <i class='far fa-grin-beam'></i></th>
                            <th scope="col">Very Good <i class="far fa-grin-beam"></i></th>
                            <th scope="col">Excellent <i class="far fa-grin-hearts"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                            <!--         q1         -->
                        <tr>
                            <td>Are you satisfied with the level of hygiene?</td>
                            <td>
                                <input type="radio" name="q1radio" value="0" <?php if (isset($_POST['q1radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q1radio" value="3" <?php if (isset($_POST['q1radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q1radio" value="5" <?php if (isset($_POST['q1radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q1radio" value="10" <?php if (isset($_POST['q1radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                        </tr>
                        <!--    q2       -->
                        <tr>
                            <td>Are you satisfied with the prices of services?</td>
                            <td>
                                <input type="radio" name="q2radio" value="0" <?php if (isset($_POST['q2radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q2radio" value="3" <?php if (isset($_POST['q2radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q2radio" value="5" <?php if (isset($_POST['q2radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q2radio" value="10" <?php if (isset($_POST['q2radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                        </tr>
                        <!--     q3      -->
                        <tr>
                            <td>Are you satisfied with the nursing service?</td>
                            <td>
                                <input type="radio" name="q3radio" value="0" <?php if (isset($_POST['q3radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q3radio" value="3" <?php if (isset($_POST['q3radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q3radio" value="5" <?php if (isset($_POST['q3radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q3radio" value="10" <?php if (isset($_POST['q3radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                        </tr>
                        <!--       q4      -->
                        <tr>
                            <td>Are you satisfied with the level og doctors?</td>
                            <td>
                                <input type="radio" name="q4radio" value="0" <?php if (isset($_POST['q4radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q4radio" value="3" <?php if (isset($_POST['q4radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q4radio" value="5" <?php if (isset($_POST['q4radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q4radio" value="10" <?php if (isset($_POST['q4radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                        </tr>
                        <!--     q5     -->
                        <tr>
                            <td>Are you satisfied with the calm in the hospital?</td>
                            <td>
                                <input type="radio" name="q5radio" value="0" <?php if (isset($_POST['q5radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q5radio" value="3" <?php if (isset($_POST['q5radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q5radio" value="5" <?php if (isset($_POST['q5radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                            <td>
                                <input type="radio" name="q5radio" value="10" <?php if (isset($_POST['q5radio'])) { ?> checked="checked" <?php } ?>>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-warning" type="submit" name="review"> Review <i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
</div>
<?php include_once "footer.php"; ?>
