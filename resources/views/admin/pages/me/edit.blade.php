@extends('admin.layouts.app')

@section('css')
    
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
                                <h1 class="page-title"> Edit Post</h1>
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
                                        Edit Post
                                            <span class="tools pull-right">
                                                <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                                <a class="close-box fa fa-times" href="javascript:;"></a>
                                            </span>
                                    </header>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">

                                                  {!! Form::model($me, [
                                                      'method' => 'PUT',
                                                      'action'  => ['AboutController@update',$me->id],
                                                      'files'  => TRUE
                                                  ]) !!}
                                                  
                                                  
                                                    <div class="box">
                                                        <div class="box-header with-border">
                                                            <h3 class="box-title">My Image</h3>
                                                        </div>
                                                        <div class="box-body text-center">
                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                  <div class="fileinput-new thumbnail" style="width: 300px; height: 300px;">
                                                                    <img src="/public/front/img/{{ $me->image }}" alt="...">
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
                                                            {!! Form::label('About My Self') !!}
                                                            {!! Form::textarea('about', null, ['id'=>'summernote','placeholder'=>'Enter Blog content']) !!}
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
        
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

<script>
    
    $(document).ready(function() {
      $('#summernote').summernote({
        placeholder: 'Wright Your Blog ',
        tabsize: 2,
        height: 350
      });

    });
    
    
</script>
@endsection
