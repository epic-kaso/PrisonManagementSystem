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
                            <header><strong>Transfer Record of {{  $transfer->prisoner->last_name.", ".$transfer->prisoner->first_name  }}</strong>
                            </header>

                            <div class="tools">
                                <div class="btn-group">
                                    <a data-delete href="{{ route('transfer.destroy',['id'=> $transfer->id]) }}" class="btn ink-reaction btn-danger mr-10" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <span class="hide-on-mobile">Delete</span>
                                    </a>

                                    <a href="{{ route('transfer.edit',['id'=> $transfer->id]) }}" class="btn ink-reaction btn-info mr-10" title="Delete">
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
                                                <td>Prisoner:
                                                    <strong class="text-bold pull-right">{{  $transfer->prisoner->first_name  }} {{  $transfer->prisoner->last_name  }}</strong>
                                                    <a class="btn btn-xs btn-link" href="{{ route('prisoner.show',$transfer->prisoner) }}">View Prisoner</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Destination: <strong class="text-bold pull-right">{{  $transfer->destination  }}</strong></td>
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