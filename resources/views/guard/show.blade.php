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
                            <header><strong>{{  $guard->last_name.", ".$guard->first_name  }}</strong>
                            </header>

                            <div class="tools">
                                <div class="btn-group">
                                    <a data-delete href="{{ route('guard.destroy',['id'=> $guard->id]) }}" class="btn ink-reaction btn-danger mr-10" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <span class="hide-on-mobile">Delete</span>
                                    </a>

                                    <a href="{{ route('guard.edit',['id'=> $guard->id]) }}" class="btn ink-reaction btn-info mr-10" title="Delete">
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
                                                <td>First Name: <strong class="text-bold pull-right">{{  $guard->first_name  }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Last Name: <strong class="text-bold pull-right">{{  $guard->last_name  }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Sex: <strong class="text-bold pull-right">{{  $guard->sex  }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Email: <strong class="text-bold pull-right">{{  $guard->email  }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Address: <strong class="text-bold pull-right">{{  $guard->address  }}</strong></td>
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