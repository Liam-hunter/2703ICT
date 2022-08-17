<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/greeting.css">
    <title>Greeting example</title>
</head>
<body>
    <h2 class="headings">Greeting example</h2>
    <h3 class="headings">Enter your details</h3>
    <form method="post" action="greeting">
        {{csrf_field()}}
        <label for="name" class="name">Enter your name:</label><br>
        <input type="text" name="name" id="name" class="name"><br>
        <label for="age" class="age">Enter your age:</label><br>
        <input type="number" name="age" id="age" class="age"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>