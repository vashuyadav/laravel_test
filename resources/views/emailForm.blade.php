<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Product List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 24px;
                font-weight: bold;
            }

            .form {
                padding: 10px;
            }

        </style>
    </head>
    <body>
        <div class="">
            <div class="content">
                <div class="title m-b-md">
                    Laravel Email
                </div>

                <div class="card" align="center">
                    <div style="border: solid 1px black; width: 40%">
                        <form action="{{ route('sendEmail') }}" method="post" enctype="multipart/form-data">

                            <div class="col-md-8 form">
                                <span>Name</span>
                                <input type="text" name="name" value="" class="form-control">
                            </div>
                            <div class="col-md-8 form">
                                <span>Email</span>
                                <input type="email" name="email" value="" class="form-control">
                            </div>
                            <div class="col-md-8 form">
                                <span>Subject</span>
                                <input type="text" name="subject" value="" class="form-control">
                            </div>
                            <div class="col-md-8 form">
                                <span>Message</span>
                                <textarea name="message"></textarea>
                            </div>
                            <div class="col-md-8 form">
                                <input type="submit" name="submit" value="Send E-mail">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
