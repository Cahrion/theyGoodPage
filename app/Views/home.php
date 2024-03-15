<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <base href="<?= base_url(); ?>">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="<?= base_url("js/jquery-3.6.0.min.js") ?>"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css">

    <!-- IK REQUIRED-->
    <link rel="stylesheet" href="<?= base_url("css/minRequire.css") ?>">
    <script src="<?= base_url("js/minRequire.js") ?>"></script>

</head>

<body>

    <?php include 'includes/modal.php' ?>

    <?php
    // leftMainContexts
    // myContexts
    ?>


    <div class="mainArea d-flex justify-content-center  mt-5">
        <div class="leftBar" style="width: 20%;">
            <?php include 'includes/leftBar.php' ?>
        </div>
        <div class="mainBar" style="width:50%">
            <div class="textHeader " style="font-size:30px;font-weight: bold;margin-top: 10px;margin-bottom: 10px;padding-bottom: 10px;border-bottom: 1px dashed grey;">
                <?= $main["tableName"] ?>
            </div>
            <div class="row">
                <?= $main["tableText"]; ?>
                <div class="inContextValue row mt-3">
                    <?php
                        if ($active) {
                            foreach ($myContexts as $myContext) {
                                $myName = $myContext["tableName"];
                                $myLink = $myContext["tableLink"];
                    ?>
                                <div class="col-6">
                                    <a href="<?= base_url("Sayfalar/$myLink"); ?>" style="color:#882d5e;text-decoration: none;font-size: 20px;font-weight: bold;">>> <?= $myName; ?></a>
                                </div>


                    <?php
                            }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>