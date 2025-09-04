<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="./save_add_student.php" method="GET">
            <label for="Id">
                <input type="text" name ="addId" placeholder="123..." require> ID 
            </label>
            <br>
            <br>
            <br>
            <label for="Id">
                <input type="text" name ="addName" placeholder="Name" require> Name
            </label>
            <br>
            <br>
            <br>
            <label for="Id">
                <input type="text" name ="addGender" placeholder="F,M" require> gender
            </label>
            <br>
            <br>
            <input type="submit" value="SUBMIT">
        </form>
    </div>
</body>
</html>