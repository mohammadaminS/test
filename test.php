<html>

<head>
    <TItle>
        تبیدل تاریخ
    </TItle>
</head>
<link rel="stylesheet" href="test.php">

<body style="background-color: aquamarine;">
    <h1 style="text-align: center;">
        تبدیل تاریخ میلادی به شمسی
    </h1>
    <form method="post">
        <input value="Date" type="date">
        <input type="submit">
    </form>
</body>

</html>
<?php
$date = $_POST['Date'];
echo $date;
?>