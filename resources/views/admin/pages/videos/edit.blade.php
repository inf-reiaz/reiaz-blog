@extends('admin.layouts.app')


@section('content')

            <!--main content start-->
            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> Edit</h1>
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
                                        Edit 
                                            <span class="tools pull-right">
                                                <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                                <a class="close-box fa fa-times" href="javascript:;"></a>
                                            </span>
                                    </header>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1">

                                                  {!! Form::model($video, [
                                                      'method' => 'PUT',
                                                      'action'  => ['VideosController@update',$video->id]
                                                  ]) !!}
                                                  
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {!! Form::label('Vedio Information') !!}
				                                            {{ Form::text('info', null, array('class' => 'form-control', 'required' => '','style'=>'margin-bottom: 0') ) }}
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            {{ Form::label('link', 'YouTube Vedio Link') }}
				                                            {{ Form::text('link', null, array('class' => 'form-control', 'required' => '','placeholder'=>'i-love-bangladesh','style'=>'margin-bottom: 0', 'minlength' => '5', 'maxlength' => '255') ) }}
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
