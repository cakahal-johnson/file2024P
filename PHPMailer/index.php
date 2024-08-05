<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Email</title>
</head>
<body>

<form method="POST" action="emailer.php" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Name" id="">
    <input type="text" name="email" placeholder="email" id="">
    <input type="text" name="subject" placeholder="subject" id="">
    <input type="number" name="phone" id="">
    <textarea name="message" id="" cols="30" rows="10"></textarea>
    
    <button name="send" type="submit">Send</button>

</form>
    
</body>
</html>