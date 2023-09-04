<?php

require_once 'config/bootstrap.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $title = $_POST['title'];
    $body = $_POST['body'];

   $result = Post::create($title, $body);

   if($result == 1){
        header("Location: index.php");
        exit;
   }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <br><br><br>
        <div class="row justify-content-center">
            <div class="col-md-6">
            <form action="" method="post">
                <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="" placeholder="">
                    </div>
                        <div class="mb-3">
                        <label class="form-label">Body</label>
                        <textarea class="form-control" name="body" rows="3"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>