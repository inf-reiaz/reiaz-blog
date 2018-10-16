@extends('admin.layouts.app')

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
                                    <header class="panel-heading panel-border">
                                        Full Web website Information
                                        <span class="tools pull-right">
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    
                                    
                                    <div class="text-center">
                                        @include('admin.partials.message')
                                    </div>
                                    
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table  table-hover general-table">

                                                <tbody>
                                                    
                                                    <tr>
                                                        <td>Website Name</td>
                                                        <td>{{ $setting->website_name }}</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Author Name</td>
                                                        <td>{{ $setting->website_author }}</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Website Logo</td>
                                                        <td> <img src="/public/front/img/{{ $setting->website_logo }}" alt=""></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Website Description</td>
                                                        <td>{{ $setting->website_description }}</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Website Keywords</td>
                                                        <td>{{ $setting->website_keywords }}</td>
                                                    </tr>
                               
                                                    
                                                    <tr>
                                                        <td>Facebook</td>
                                                        <td>{{ $setting->facebook }}</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Twitter</td>
                                                        <td>{{ $setting->twitter }}</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Google Plus</td>
                                                        <td>{{ $setting->google_plus }}</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Linkedin</td>
                                                        <td>{{ $setting->linkedin }}</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Github</td>
                                                        <td>{{ $setting->github }}</td>
                                                    </tr>
                                                    
                                                    
                                                    <tr>
                                                        <td>Instagram</td>
                                                        <td>{{ $setting->instagram }}</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Youtube</td>
                                                        <td>{{ $setting->youtube }}</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Edit</td>
                                                        <td><a href="{{ action('SettingsController@edit',$setting->id) }}" class="btn btn-info btn-sm"> Edit </a> </td>
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
            <!--main content end-->
@endsection
