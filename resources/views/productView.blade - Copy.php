<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 24px;
                font-weight: bold;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            table tr td {
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <div class="">
            <div class="content">
                <div class="title m-b-md">
                    Laravel Test
                </div>

                <div class="links" align="center">
                    <table width="80%" border="1" cellpadding="0" cellspacing="0">
                        <tr>
                            <td><strong>User Name</strong></td>
                            <td><strong>Email</strong></td>
                            <td><strong>Product Title</strong></td>
                        </tr>

                        @foreach($records as $record)
                            <tr>
                                <td><strong>{{ $record->name }}</strong></td>
                                <td><strong>{{ $record->email }}</strong></td>
                                <td><strong>
                            @foreach($record->getProduct as $prod)
                                <table>
                                <tr>
                                    <td>{{ $prod->title }}</td>
                                </tr>
                                </table>
                            @endforeach
                                </strong></td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
