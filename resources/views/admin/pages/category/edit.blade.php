@extends('admin.layouts.app')

@section('css')

<style>
    .sign-in-wrapper{
        padding-top: 1% !important;
    
    }
    .singn-admin-container{
        background: #fff;
        border-radius: 5px;
    
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
                                <h1 class="page-title"> Create New  User</h1>
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
                                
                            <div class="sign-in-wrapper">
                                <div class="singn-admin-container">
                                    <div class="sign-container">
                                    
                                    <div class="text-center">
                                        @include('admin.partials.message')
                                    </div>
                                
                                {!! Form::model($ctg, [
                                    'method' => 'PUT',
                                    'route'  => ['category.update',$ctg->id]
                                ]) !!}
                                
                                        <div class="form-group">
                                            <p class="help-block">Category Name</p>
                                            {!! Form::text('name', old('name'), ['class'=>'form-control','placeholder'=>'category name','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            <p class="help-block">Category Slug</p>
                                            <input class="form-control" id="disabledInput" type="text" name="slug" value="{{ $ctg->slug }}" disabled>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-info btn-block">Update Category </button>
                                    {!! Form::close() !!}
                                  
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
