@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Create</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('cronJob.store')}}" method="POST">
                        @csrf
                        @method('POST')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{Form::label('client_id', 'Cliente')}}
                                        {{Form::select('client_id', $clients)}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{Form::label('link', 'Link hppt/https')}}
                                        {{Form::text('link', NULL, ['class' => 'form-control', 'id' => 'link', 'placeholder' => 'http://'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{Form::label('description', 'Description')}}
                                        {{Form::text('description', NULL, ['class' => 'form-control', 'id' => 'description', 'placeholder' => 'description...'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{Form::label('limit', 'Limit')}}
                                        {{Form::text('limit', NULL, ['class' => 'form-control', 'id' => 'limit', 'placeholder' => '0'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{Form::label('date', 'Date')}}
                                        {{Form::text('date', NULL, ['class' => 'form-control', 'id' => 'date', 'placeholder' => '0000-00-00'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{Form::label('time', 'Time')}}
                                        {{Form::text('time', NULL, ['class' => 'form-control', 'id' => 'time', 'placeholder' => '00:00:00'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{Form::label('executed', 'Executed')}}
                                        {{Form::text('executed', NULL, ['class' => 'form-control', 'id' => 'executed', 'placeholder' => '0'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{Form::label('every_day', 'Every Day')}}
                                        {{Form::checkbox('every_day', true, NULL)}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        {{Form::label('every_time', 'Every Time')}}
                                        {{Form::checkbox('every_time', true, NULL)}}
                                    </div>
                                </div>
                            </div>
                            {{Form::submit('Save', ['class' => 'btn btn-info btn-fill pull-right'])}}
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        //$('#description').summernote();
    });
</script>
@endsection
