@extends('layout')

@section('content')

        <!-- BEGIN HEADER-->
@include('partials.header')
        <!-- END HEADER-->

<!-- BEGIN BASE-->
<div id="base">
    <!-- BEGIN CONTENT-->
    <div id="content">
        <section>
            <div class="section-body">
                @include('partials.error')
                <div class="row">
                    <div class="card">
                        <div class="card-head">
                            <header>Profile: <strong>{{  $user->last_name.", ".$user->first_name  }}</strong>
                            </header>

                            <div class="tools">
                                <div class="btn-group">
                                    <a data-delete href="{{ route('guard.destroy',['id'=> $user->id]) }}" class="btn ink-reaction btn-danger mr-10" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <span class="hide-on-mobile">Delete</span>
                                    </a>

                                    <a href="{{ route('guard.edit',['id'=> $user->id]) }}" class="btn ink-reaction btn-info mr-10" title="Delete">
                                        <i class="fa fa-pencil"></i>
                                        <span class="hide-on-mobile">Edit</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <table class="table">
                                            <tr>
                                                <td>First Name: <strong class="text-bold pull-right">{{  $user->first_name  }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Last Name: <strong class="text-bold pull-right">{{  $user->last_name  }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Sex: <strong class="text-bold pull-right">{{  $user->sex  }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Email: <strong class="text-bold pull-right">{{  $user->email  }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Address: <strong class="text-bold pull-right">{{  $user->address  }}</strong></td>
                                            </tr>

                                            <tr>
                                                <td><a href="{{ route('profile.edit',$user) }}" class="btn btn-primary">Change Password</a></td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end .section-body -->
            </div><!--end .section-body -->
        </section>
    </div><!--end #content-->
    <!-- END CONTENT -->

    <!-- BEGIN MENUBAR-->
    @include('partials.sidebar')
            <!-- END MENUBAR -->

</div><!--end #base-->
<!-- END BASE -->
@endsection