<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_4_2</title>
    <style>
        /* Add any desired styling for the footer */
        footer {
            background-color: #1606f4;
            padding: 20px;
            text-align: center;
        }

        /* Additional styling for text color */
        footer p {
            color: white;
        }
    </style>
</head>

<body>
    <h1>4.2 คำนวณเลข และจัดรูปแบบการแสดงผล</h1>
    <?php
    $x = 0;
    $y = 0;
    ?>
    <h3>
        <?php
        $x = 2;
        $y = 2;
        echo "1." . $x . "+" . $y . "=" . ($y + $x);
        ?>
    </h3>
    <h3>
        <?php
        $x = 15;
        $y = 5;
        echo "2." . $x . "-" . $y . "=" . ($y + $x);
        ?>
    </h3>
    <h3>
        <?php
        $x = 5000;
        $y = 10;
        echo "3." . $x . "*" . $y . "=" . number_format($y + $x);
        ?>
    </h3>
    <h3>
        <?php
        $x = 9;
        $y = 2;
        echo "4." . $x . "/" . $y . "=" . ($y + $x);
        ?>
    </h3>
    <h3>
        <?php
        $x = 25;
        $y = 3;
        echo "5." . $x . "/" . $y . "=" . number_format($y + $x, 2);
        ?>
    </h3>
    <h3><a href="index.html">Home</a></h3>
</body>
<footer>
    <p>Copy Right &copy;by Thonburi University </p>
</footer>

</html>