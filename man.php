<! doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <from action="validation.php" method="post">
                    <div class="form-group">
                        <label>username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <div class="form-control" >
                        <button  class="submit" class="btn btn-primary">Login</button>
                    </div>
            </div>
            <div class="col-lg-6">
                <from action="validation.php" method="post">
                    <div class="form-group">
                        <label>username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-control" >
                        <button  class="submit" class="btn btn-primary">Login</button>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>