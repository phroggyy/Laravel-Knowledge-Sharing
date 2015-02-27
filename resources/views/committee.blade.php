@extends('app')

@section('content')
    <div class="container committee-view links-view">
        <section class="committee-head row clearfix">
            <div class="col-xs-4"><a href="{{ route('welcome.index') }}" style="float: left;">Return</a></div>
            <div class="col-xs-4"><h1 class="text-center">{{ $committeeData['name'] }}</h1></div>
            <div class="col-xs-4">
                <button type="button" class="circular-div-50 pure-red pull-right" style="color: white; font-size: 7rem;"
                        data-toggle="modal" data-target="#addNewLink">
                    +
                </button>
            </div>
        </section>
        <div class="modal fade" id="addNewLink">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Add a new link</h4>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(array('route' => ['knowledge.committee.create', 'committee' => $committeeData['id']])) !!}
                            <fieldset>
                                {!! Form::hidden('committee', $committeeData['id']) !!}
                                {!! Form::label('title','Title') !!}
                                {!! Form::text('title', null, array('class' => 'form-control')) !!}
                                {!! Form::label('url','What is the address to the resource?') !!}
                                {!! Form::text('url', null, array('class' => 'form-control')) !!}
                                {!! Form::label('description', 'Give a short description of the resource') !!}
                                {!! Form::textarea('description') !!}
                                {!! Form::label('auth','Please enter your authentication code') !!}
                                {!! Form::text('auth', null, array('class' => 'form-control')) !!}
                            </fieldset>
                            {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        @foreach ($links as $link)
            <div class="col-md-3 uploaded-resource">
                <div class="col-xs-12">
                    <h2>{{ $link['title'] }}</h2>
                    <p><em>{{ ($link['description'] != "") ? $link['description'] : 'No description available' }}</em></p>
                    <a href="{{ $link['url'] }}">{{ $link['url'] }}</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
