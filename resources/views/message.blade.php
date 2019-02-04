@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Message to Control Tower</div>

                <div class="card-body">
                        <div class="form-group">
                            {{Form::label('subject','Subject')}}
                            
                            {{Form::text('subject', '' , ['class' => 'form-control', 'placeholder' => 'Subject here..'])}}
                        </div>
                        
                        <div class="form-group" >
                            {{Form::label('message','Message')}}
                            
                            {{Form::textarea('message', '' , ['id'=>'article-ckeditor','class'=>'form-control', 'placeholder' => 'Your brief message..'])}}
                        </div>
                        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
