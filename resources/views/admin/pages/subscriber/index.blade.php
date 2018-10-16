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
                                        Set Permission
                                        <span class="tools pull-right">
                                            <a class="refresh-box fa fa-repeat" href="javascript:;"></a>
                                            <a class="collapse-box fa fa-chevron-down" href="javascript:;"></a>
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body">
                                        
                                    
                                    <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal">

                                            <div class="form-group">
                                                <div class="col-lg-6">
                                                    
                                                        <h3>All Subscribers e-mail address</h3>
                                                    
                                                        <div class="checkbox">
                                                            <label class="i-checks">
                                                                <input checked="checked" name="permissions[]" type="checkbox" value="1">
                                                                <i></i> reiazbubt@gmail.com
                                                            </label>
                                                        </div>
                                                </div>
                                                
                                                <div class="col-sm-6 control-label">
                                                    
                                                    <div class="form-group">
                                                        <label class="pull-left" >Email address</label>
                                                        <input class="form-control" placeholder="Enter email" type="email">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="pull-left" >Title</label>
                                                        <input class="form-control" placeholder="mail title" type="name">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="pull-left" >Message</label>
                                                          <textarea class="form-control" rows="20" placeholder="Ttype  your greetings messages."></textarea>
                                                    </div>
                                                    
                                                    
                                                    <button type="submit" class="btn btn-info btn-block">Send Gratting</button>
                                                </div>
                                            </div>
                                            

                                    </form>

                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>


                </div>
            </div>

            <!--main content end-->
@endsection


