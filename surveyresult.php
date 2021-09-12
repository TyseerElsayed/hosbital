<?php include_once "header.php"; ?>
<div class="container">
    <div class="row">
        <h1 class="display-4  text-dark mx-auto my-5" style=" font-weight:bold;text-align:center;"> <span style="text-transform:uppercase;" class="text-warning">Helopolis</span> Hospital <i class="fa fa-h-square" aria-hidden="true"></i></h1>
        <div class="col-10 offset-1">
            <table class="table table-bordered text-center">
                <thead class="bg-warning font-wight-bold text-dark">
                    <tr>
                        <th scope="col">QUESTION <i class="fa fa-question-circle" aria-hidden="true"></i></th>
                        <th scope="col">REVIEWS <i class='far fa-file-pdf'></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $questions = [
                        'Are you satisfied with the level of hygiene?',
                        'Are you satisfied with the prices of services?',
                        'Are you satisfied with the nursing service',
                        'Are you satisfied with the level og doctors?',
                        'Are you satisfied with the calm in the hospital?'
                    ];
                    $t = 1;
                    $sum = 0;
                    foreach ($questions as $KEY => $value) {
                    ?>
                        <tr>
                            <td><?php echo $value ?></td>
                            <td><?php if ($_POST['q' . $t . 'radio'] == "0") {
                                    $x = 0;
                                    echo "bad";
                                }
                                if ($_POST['q' . $t . 'radio'] == "3") {
                                    $y = 3;
                                    echo "good";
                                }
                                if ($_POST['q' . $t . 'radio'] == "5") {
                                    $vg = 5;
                                    echo "very good";
                                }
                                if ($_POST['q' . $t . 'radio'] == "10") {
                                    $exl = 10;
                                    echo "excellent";
                                } ?></td>
                        </tr>
                    <?php
                        $sum += $_POST['q' . $t . 'radio'];
                        $t++;
                    }
                    ?>
                </tbody>
                <thead class="bg-warning font-weight-bold text-dark">
                    <tr>
                        <th scope="col">TOTAL REVIEW</th>
                        <th scope="col">
                            <?php
                            
                            if ($sum <= 25) {
                                $callback = '<div class="alert alert-danger text-center" style="font-size:20px;font-weight:bold;">Please contact the patient to find out the reason for the bad evalution ' . $_POST['number'] . '</div>';
                                echo 'Bad';
                            } else {
                                $callback = '<div class="alert alert-success text-center" style="font-size:20px;font-weight:bold;"> Thank You. </div>';
                                echo 'Good';
                            }
                            ?>
                        </th>
                    </tr>
                </thead>
            </table>
            <?php
            echo $callback;
            ?>
        </div>
    </div>
</div>

<?php include_once "footer.php"; ?>