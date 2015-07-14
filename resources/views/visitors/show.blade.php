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
                                <header><strong>{{  $visitor->last_name.", ".$visitor->first_name  }}</strong>
                                </header>

                                <div class="tools">
                                    <div class="btn-group">
                                        <a data-delete href="{{ route('visitor.destroy',['id'=> $visitor->id]) }}" class="btn ink-reaction btn-danger mr-10" title="Delete">
                                            <i class="fa fa-trash-o"></i>
                                            <span class="hide-on-mobile">Delete</span>
                                        </a>

                                        <a href="{{ route('visitor.edit',['id'=> $visitor->id]) }}" class="btn ink-reaction btn-info mr-10" title="Delete">
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
                                                    <td>First Name: <strong class="text-bold pull-right">{{  $visitor->first_name  }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Last Name: <strong class="text-bold pull-right">{{  $visitor->last_name  }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Sex: <strong class="text-bold pull-right">{{  $visitor->sex  }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Address: <strong class="text-bold pull-right">{{  $visitor->address  }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Purpose Of Visit: <strong class="text-bold pull-right">{{  $visitor->purpose  }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Prisoner Visited: <strong class="text-bold pull-right">{{  $visitor->prisoner_visited  }}</strong></td>
                                                </tr>

                                                <tr>
                                                    <td>Time In: <strong class="text-bold pull-right">{{  $visitor->time_in  }}</strong></td>
                                                </tr>

                                                <tr>
                                                    <td>Time Out: <strong class="text-bold pull-right">{{  $visitor->time_out  }}</strong></td>
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