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
                    <div class="row">
                        <div class="card">
                            <div class="card-head">
                                <header>{{ $prisoner->last_name.", ".$prisoner->first_name }}
                                </header>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <img id="left-mugshot"
                                                 class="img-responsive img-preview-image" src="{{ url('prisoner-pic/'.$prisoner->left_mug_shot) }}"
                                                 alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <img id="center-mugshot" class="img-responsive img-preview-image" src="{{ url('prisoner-pic/'.$prisoner->center_mug_shot) }}"
                                                 alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <img id="right-mugshot" class="img-responsive img-preview-image" src="{{ url('prisoner-pic/'.$prisoner->right_mug_shot) }}"
                                                 alt=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
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