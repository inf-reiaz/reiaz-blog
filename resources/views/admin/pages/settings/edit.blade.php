@extends('admin.layouts.app')

@section('css')
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
    
    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

<style type="text/css">
    #footer{
        display: none;
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
                                <h1 class="page-title"> Settings</h1>
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
                                        Edit Site settings
                                            <span class="tools pull-right">
                                                <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                                <a class="close-box fa fa-times" href="javascript:;"></a>
                                            </span>
                                    </header>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">

                                                  {!! Form::model($setting, [
                                                      'method' => 'PUT',
                                                      'action'  => ['SettingsController@update',$setting->id],
                                                      'files'  => TRUE
                                                  ]) !!}
                                                  
                                                  
                                                  <!--comment section-->
                                                    
                                                  
                                                  <div class="col-sm-12">
                                                    <div class="box">
                                                        <div class="box-header with-border">
                                                            <h3 class="box-title">Website Logo</h3>
                                                        </div>
                                                        <div class="box-body text-center">
                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                    <img src="/public/front/img/{{$setting->website_logo}}" alt="...">
                                                                  </div>
                                                                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                                  <div>
                                                                    <span class="btn btn-default btn-file">
                                                                        <span class="fileinput-new">Select image</span>
                                                                        <span class="fileinput-exists">Change</span>
                                                                        {!! Form::file('website_logo') !!}
                                                                    </span>
                                                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                                  </div>
                                                                </div>
                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {!! Form::label('Website Name') !!}
				                                            {{ Form::text('website_name', null, array('class' => 'form-control', 'required' => '','style'=>'margin-bottom: 0') ) }}
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {!! Form::label('Author Name') !!}
				                                            {{ Form::text('website_author', null, array('class' => 'form-control', 'required' => '','style'=>'margin-bottom: 0') ) }}
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {!! Form::label('Website Logo') !!}
				                                            {{ Form::text('website_logo', null, array('class' => 'form-control', 'required' => '','style'=>'margin-bottom: 0') ) }}
                                                        </div>
                                                    </div>
                                                    
                               
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {!! Form::label('Website Description') !!}
				                                            {{ Form::text('website_description', null, array('class' => 'form-control', 'required' => '','style'=>'margin-bottom: 0') ) }}
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {!! Form::label('Website Keywords') !!}
				                                            {{ Form::text('website_keywords', null, array('class' => 'form-control', 'required' => '','style'=>'margin-bottom: 0') ) }}
                                                        </div>
                                                    </div>
                                                    </div>
                                                    

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {!! Form::label('Facebook') !!}
				                                            {{ Form::text('facebook', null, array('class' => 'form-control', 'required' => '','style'=>'margin-bottom: 0') ) }}
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {!! Form::label('Twitter') !!}
				                                            {{ Form::text('twitter', null, array('class' => 'form-control', 'required' => '','style'=>'margin-bottom: 0') ) }}
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {!! Form::label('Google Plus') !!}
				                                            {{ Form::text('google_plus', null, array('class' => 'form-control', 'required' => '','style'=>'margin-bottom: 0') ) }}
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {!! Form::label('Linkedin') !!}
				                                            {{ Form::text('linkedin', null, array('class' => 'form-control', 'required' => '','style'=>'margin-bottom: 0') ) }}
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {!! Form::label('Github') !!}
				                                            {{ Form::text('github', null, array('class' => 'form-control', 'required' => '','style'=>'margin-bottom: 0') ) }}
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {!! Form::label('Instagram') !!}
				                                            {{ Form::text('instagram', null, array('class' => 'form-control', 'required' => '','style'=>'margin-bottom: 0') ) }}
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {!! Form::label('Youtube') !!}
				                                            {{ Form::text('youtube', null, array('class' => 'form-control', 'required' => '','style'=>'margin-bottom: 0') ) }}
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
