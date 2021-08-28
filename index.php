<!DOCTYPE html>
<html lang="en">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
            crossorigin="anonymous">
    </head>

    <body>
        <div class="container text-center p-5">

            <div class="card">
                <div class="card-header">
                    <h1>Send Mail Using Php with PHPMailer</h1>
                </div>
                <div class="card-body">
                    <form action="./SendMail.php" method="POST">
                        <div class="form-group py-3 row">
                            <div class="col-4">
                                First Name
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="first" id="first" placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group py-3 row">
                            <div class="col-4">
                                Last Name
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="last" id="last" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group py-3 row">
                            <div class="col-4">
                                Email
                            </div>
                            <div class="col-md-8">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group py-3 row">
                            <div class="col-4">
                                Phone
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group py-3 row">
                            <div class="col-4">
                                Comments / Questions
                            </div>
                            <div class="col-md-8">
                                <textarea type="textarea" name="message" class="form-control" id="message" placeholder="Comments / Questions"></textarea>
                            </div>
                        </div>
                        <div class="form-group py-3 row">
                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>






                    </form>
                </div>
            </div>
        </div>
    </body>

</html>
