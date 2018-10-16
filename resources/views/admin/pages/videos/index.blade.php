@extends('admin.layouts.app')


@section('content')
            <!--main content start-->
            <div id="content" class="ui-content ui-content-aside-overlay">
                <div class="ui-content-body">
                    <div class="ui-container">
                        
                        <div class="row">
                            
                            
                            <div class="col-md-12">

                                <div class="panel">
                                    <header class="panel-heading">
                                        Videos
                                        <span class="tools pull-right">
                                            <a class="refresh-box fa fa-repeat" href="javascript:;"></a>
                                            <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body">
                                        <div class="col-md-12">
                                            <div class="panel">
                                                <header class="panel-heading panel-border">
                                                        Video
                                                    <span class="tools pull-right">
                                                        <a class="close-box fa fa-times"></a>
                                                        <a class="close-box fa fa-times" href="javascript:;"></a>
                                                    </span>
                                                </header>
                                                
                                                
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table  table-hover general-table">
                                                            <thead>
                                                            <tr>
                                                                <th style="width: 12%;">Serial Number</th>
                                                                <th style="width: 25%;">Title</th>
                                                                <th style="width: 25%;">Videso</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            
                                                            <tbody>
                                                                   <tr>
                                                                        <td>1</td>
                                                                        <td>{{ $video->info }}</td>
                                                                        <td>
                                                                            <a href="{{ $video->link }}" target="_blank">YouTube</a>
                                                                        </td>
                                                                        
                                                                        <td>
                                                                            <a href="{{ action('VideosController@edit',1) }}" class="btn btn-sm btn-success">Edit</a>
                                                    						
                                                                        </td>
                                                                        
                                                                    </tr>
                                                            </tbody>
                                                            
                                                        </table>
                                                            
                                                    </div>
                                                </div>
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


