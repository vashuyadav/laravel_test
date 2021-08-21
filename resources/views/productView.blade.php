@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">Product List</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table width="100%" border="1">
                            <tr style="background-color: lightblue;">
                                <td><strong>User Name</strong></td>
                                <td><strong>Email</strong></td>
                                <td><strong>Product Title</strong></td>
                            </tr>

                            @foreach($records as $record)
                                <tr>
                                    <td><strong>{{ $record->name }}</strong></td>
                                    <td><strong>{{ $record->email }}</strong></td>
                                    <td>
                                        <strong>
                                            @foreach($record->getProduct as $prod)
                                                <table>
                                                    <tr>
                                                        <td>{{ $prod->title }}</td>
                                                    </tr>
                                                </table>
                                            @endforeach
                                        </strong>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
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
