<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exchanger</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <h3>Exchange</h3>
    </div>w
    <div class="row">
        <form METHOD="post" action="src/save.php">
            <div class="form-group">
                <label for="user_name">Your name</label>
                <input type="text" class="form-control" id="user_name" name="name"
                       placeholder="Enter name" required="required">
            </div>
            <div class="form-group">
                <label for="dollars">$ you want to exchange</label>
                <input type="number" class="form-control" id="dollars" placeholder="Dollars" min="0" name="dollars"
                       required="required">
            </div>
            <div class="form-group">
                <label for="uah">₴ equivalent</label>
                <input type="number" class="form-control" id="uah" placeholder="UAH" min="0" name="uah"
                       disabled="disabled">
                <input type="hidden" name="uah-equivalent" id="uah-equivalent">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<script src="src/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="src/ajax.js"></script>
</body>
</html>
