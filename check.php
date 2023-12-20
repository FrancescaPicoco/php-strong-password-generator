<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="password.php" method="GET">
       <p>Please select:</p>
        <input type="radio" id="lett" name="lettere" value="letter">
        <label for="lett">Lettere</label>
        <input type="radio" id="numb" name="numeri" value="number">
        <label for="numb">Numeri</label>
        <input type="radio" id="spec" name="speciali" value="special">
        <label for="spec" class="mb-3">Caratteri</label>
    </form>
</body>
</html>