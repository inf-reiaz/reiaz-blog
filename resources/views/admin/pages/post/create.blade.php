@extends('admin.layouts.app')

@section('css')
    
    <link rel="stylesheet" href="/public/admin/bower_components/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
    
    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

<style>

    .select2-container--default .select2-selection--multiple .select2-selection__rendered {
        height: 30px;
    }
</style>


@endsection

@section('content')

            <!--main content start-->
            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> Add New Post</h1>
                            </div>
                            <div class="col-md-4">
                                <ul class="breadcrumb pull-right">
                                    <li>Home</li>
                                    <li><a href="#" class="active">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="panel">
                                    <header class="panel-heading">
                                        Add New Post
                                            <span class="tools pull-right">
                                                <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                                <a class="close-box fa fa-times" href="javascript:;"></a>
                                            </span>
                                    </header>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">

                                                  {!! Form::open([
                                                      'method' => 'POST',
                                                      'action'  => 'PostsController@store',
                                                      'files'  => TRUE,
                                                  ]) !!}
                                                  
                                                    <div class="box">
                                                        <div class="box-header with-border">
                                                            <h3 class="box-title">Thumbnail Image</h3>
                                                        </div>
                                                        <div class="box-body text-center">
                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                  <div class="fileinput-new thumbnail" style="width: 300px; height: 300px;">
                                                                    <img src="http://placehold.it/300x300&text=Thumbnail+Image" alt="...">
                                                                  </div>
                                                                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 300px; max-height: 300px;"></div>
                                                                  <div>
                                                                    <span class="btn btn-default btn-file">
                                                                        <span class="fileinput-new">Select image</span>
                                                                        <span class="fileinput-exists">Change</span>
                                                                        {!! Form::file('image') !!}
                                                                    </span>
                                                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                                  </div>
                                                                </div>
                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {!! Form::label('Blog Title') !!}
				                                            {{ Form::text('title', null, array('class' => 'form-control', 'required' => '','style'=>'margin-bottom: 0') ) }}
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {{ Form::label('slug', 'www.rei-az.com/') }}
				                                            {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '','placeholder'=>'i-love-bangladesh','style'=>'margin-bottom: 0', 'minlength' => '5', 'maxlength' => '255') ) }}
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                            {!! Form::label('Select Categories') !!}
                                                            {!! Form::select('category_id[]', \App\Category::pluck('name','id'),null, ['class'=>'form-control test','required','multiple'=>'multiple']) !!}
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                            {!! Form::label('Select Tsgs') !!}
                                                            {!! Form::select('tag_id[]', \App\Tag::pluck('name','id'),null, ['class'=>'form-control test','required','multiple'=>'multiple']) !!}
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group  {{ $errors->has('body') ? 'has-error' : '' }}">
                                                            {!! Form::label('Blog Content') !!}
                                                            {!! Form::textarea('body', null, ['id'=>'summernote','placeholder'=>'Enter Blog content']) !!}
                                                            
                                                            @if($errors->has('body'))
                                                                <span class="help-block">{{ $errors->first('body') }}</span>
                                                            @endif
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group {{ $errors->has('is_home') ? 'has-error' : '' }}">
                                                            {!! Form::label('publish on home page') !!}
                                                            {!! Form::select('is_home', ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-control', 'placeholder' => '  ']) !!}
                                                
                                                            @if($errors->has('is_home'))
                                                                <span class="help-block">{{ $errors->first('is_home') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                                                    </div>
                                    
                                                {!! Form::close() !!}
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        

                    </div>

                </div>
            </div>
            <!--main content end-->
@endsection



@section('js')
        
        <script src="/public/admin/bower_components/select2/dist/js/select2.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

<script>
    
    $(document).ready(function() {
        $('.test').select2();

      $('#summernote').summernote({
        placeholder: 'Wright Your Blog ',
        tabsize: 2,
        height: 500
      });

    });
    
    
</script>
@endsection
