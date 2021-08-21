<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Test Mail</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div style="border-top: solid 6px black; margin: 0px 40px;">
                    <div style="border: solid 1px black;">
                        <table border="0" width="100%">
                            <tr>
                                <td align="center">
                                    <h2 style="font-size: 60px;"><strong>D</strong></h2>
                                    <h2>Welcome to Product</h2><br><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Hello {{ Auth::user()->name }}
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 30px 5px;">
                                    Thank you for signing up for product. We`re really happy to have you!
                                    <br>Click the link below to login to your account:
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="padding: 30px 5px;">
                                    <a href="127.0.0.1:8000/" style="padding: 10px; background-color: forestgreen; color: white; border-radius: 5px;">Login to Your Account</a>
                                </td>
                            </tr>

                            <tr><td style="padding: 30px 5px;">Best regards,</td></tr>
                            <tr>
                                <td>
                                    Casaba Kissi<br>
                                    Elerion ltd., CEO and fouder
                                    <br><br><br>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

<style>

    table tr td{
        padding: 5px;
    }
</style>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

