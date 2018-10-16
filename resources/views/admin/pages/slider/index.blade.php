@extends('admin.layouts.app')

@section('content')

            <!--main content start-->
            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> All Sliders</h1>
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
                                    <header class="panel-heading panel-border">
                                        Tag List
                                        <span class="tools pull-right">
                                            <a href="{{ action('SliderController@create') }}" class="btn btn-sm btn-success" style="color:#fff;">Add New Slider </a>
                                            <a class="close-box fa fa-times"></a>
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    
                                    
                                    <div class="text-center">
                                        @include('admin.partials.message')
                                    </div>
                                    
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table  table-hover general-table">
                                                <thead>
                                                <tr>
                                                    <th style="width: 12%;">Serial Number</th>
                                                    <th style="width: 25%;">Title</th>
                                                    <th style="width: 30%;">Image</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($sliders as $s)
                                                        <tr>
                                                            <td>{{ $s->id }}</td>
                                                            <td>{{ $s->title }}</td>
                                                            <td> <img style="width: 20%;" src="/public/front/img/{{ $s->image }}"></td>
                                                            <td>
                                        						{!! Form::open(['action' => ['SliderController@destroy',$s->id], 'method' => 'DELETE']) !!}
                                                                <a href="{{ action('SliderController@edit',$s->id) }}" class="btn btn-sm btn-success">Edit</a>
                                        						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm','onclick'=>'return confirm("You are  delete a Slide permanently. Are you sure?")']) !!}
                                        						{!! Form::close() !!}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                                {{ $sliders->links() }}
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
