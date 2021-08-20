@extends('layouts.app')

@section('content')
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
                                    Hello name
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
                                    <a href="#" style="padding: 10px; background-color: forestgreen; color: white; border-radius: 5px;">Login to Your Account</a>
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

                <br>
                <div class="panel panel-default">
                    <div class="panel-heading">Product List</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                            {{--<table width="100%" border="1">
                                <tr style="background-color: lightblue;">
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

                            </table>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>

    table tr td{
        padding: 5px;
    }
</style>
