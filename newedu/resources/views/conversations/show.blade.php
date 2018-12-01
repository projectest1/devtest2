@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Conversation</div>

                    <div class="panel-body">
                        <form method="POST" action="/conversations">
                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
                        
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="description">Message:</label>
                                <textarea class="form-control" id="message" name="message"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>

                            @if (count($errors))
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
