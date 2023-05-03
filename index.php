<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center py-5">
        <div class="row">
            <div class="col">
                <form action="script.php" method="get">
                    <div class="field py-2 my-2 d-flex justify-content-center">
                        <label for="paragraph" class="mx-2">Type a paragraph</label>
                        <input type="text" name="paragraph" id="paragraph">
                    </div>
                    <div class="field py-2 my-2 d-flex justify-content-center">
                        <label for="badwords" class="mx-2">Type a badwords</label>
                        <input type="text" name="badwords" id="badwords">
                    </div>
                    <div class="actions d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                        <button type="reset" class="btn btn-reset">RESET</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>