<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPage_4_1</title>
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
    <h1>4.1 แสดงชื่อ-สกุล ชื่อเล่น ด้วยตัวแปร</h1>
    <h2><?php
        echo "Hello PHP";
        ?></h2>
    <?php
    echo "Mr.Woratai Khnanarat";
    echo "<br>";
    $nickname = "Tik";
    $age = 40;
    echo "Nickname :" . $nickname;
    echo "<br>";
    echo "Age :" . $age . "ปี";
    ?>
    <h3><a href="index.html">Home</a></h3>
    <!-- <a href="index.html"><input type="button" value="Home"></a> -->
</body>
<footer>
    <p>Copy Right &copy;by Thonburi University </p>
</footer>

</html>