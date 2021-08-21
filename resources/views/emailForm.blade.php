@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">Send Email</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form action="{{ route('send-mail') }}" method="post" enctype="multipart/form-data">
                                <div class="col-md-8 form">
                                    <span>Name</span>
                                    <input type="text" name="name" value="" required class="form-control">
                                </div>
                                <div class="col-md-8 form">
                                    <span>Email</span>
                                    <input type="email" name="email" value="" required class="form-control">
                                </div>
                                <div class="col-md-8 form">
                                    <span>Subject</span>
                                    <input type="text" name="subject" value="" required class="form-control">
                                </div>
                                <div class="col-md-8 form">
                                    <span>Message</span>
                                    <textarea class="form-control" name="message" required></textarea>
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="col-md-8 form">
                                    <br>
                                    <input type="submit" name="submit" class="btn btn-success form-control" value="Send E-mail">
                                </div>
                            </form>
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
