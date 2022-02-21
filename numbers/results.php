<?php
$nums = $_POST['nums'];

$sum = 0;
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/bootstrap/bootstrap.css">
    <script type="application/javascript" src="/assets/bootstrap/popper.js"></script>
    <script type="application/javascript" src="/assets/bootstrap/bootstrap.js"></script>
    <style>
        .border-right {
            border-right: 1px solid #dee2e6;
        }
    </style>
</head>
<body>
<main class="container">
    <section class="row border-bottom bg-light py-3">
        <div class="py-3">
            <h2 class="border-bottom">Numbers list</h2>
        </div>
        <?php foreach ($nums as $key => $value): ?>
        <div
            class="col-1 text-center<?php if ($key !== count($nums) - 1): ?> border-right<?php endif; ?>">
            <?=$key?> => <?=$value?>
        </div>
        <?php endforeach ?>
    </section>
    <section class="row border-bottom bg-light py-3">
        <div class="py-3">
            <h2 class="border-bottom">Sorted</h2>
        </div>
        <div class="col-1 text-center border-right">1</div>
        <div class="col-1 text-center border-right">2</div>
        <div class="col-1 text-center border-right">3</div>
        <div class="col-1 text-center border-right">4</div>
        <div class="col-1 text-center border-right">5</div>
        <div class="col-1 text-center border-right">6</div>
        <div class="col-1 text-center border-right">7</div>
        <div class="col-1 text-center">8</div>
    </section>
    <section class="row border-bottom bg-light py-5">
        <div class="col-3 border-right">
            <div>
                <h3 class="border-bottom">Sum</h3>
            </div>
            <div class="fw-bold py-3">
                <?php
                foreach ($nums as $value) {
                    $sum += $value;
                }
                ?>
            </div>
        </div>
        <div class="col-3 border-right">
            <div>
                <h3 class="border-bottom">Avg</h3>
            </div>
            <div class="fw-bold py-3">
                4.5
            </div>
        </div>
        <div class="col-3 border-right">
            <div>
                <h3 class="border-bottom">Median</h3>
            </div>
            <div class="fw-bold py-3">
                4.5
            </div>
        </div>
        <div class="col-3">
            <div>
                <h3 class="border-bottom">Position of 8</h3>
            </div>
            <div class="fw-bold py-3">
                7
            </div>
        </div>
    </section>
</main>
</body>
</html>
