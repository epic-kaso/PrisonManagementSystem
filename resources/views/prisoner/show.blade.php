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
                                <header><strong>{{  $prisoner->last_name.", ".$prisoner->first_name  }}</strong>
                                </header>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <img id="left-mugshot"
                                                 class="img-responsive img-preview-image" src="{{  url('prisoner-pic/'.$prisoner->left_mug_shot)  }}"
                                                 alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <img id="center-mugshot" class="img-responsive img-preview-image" src="{{  url('prisoner-pic/'.$prisoner->center_mug_shot)  }}"
                                                 alt=""/>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <img id="right-mugshot" class="img-responsive img-preview-image" src="{{  url('prisoner-pic/'.$prisoner->right_mug_shot)  }}"
                                                 alt=""/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <table class="table">
                                        <tr>
                                            <td>First Name</td>
                                            <td><strong>{{  $prisoner->first_name  }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td><strong>{{  $prisoner->last_name  }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Birth Date</td>
                                            <td><strong>{{  $prisoner->birth_date  }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Blood Group</td>
                                            <td><strong>{{  $prisoner->blood_group  }}</strong></td>
                                        </tr>

                                        <tr>
                                            <td>Genotype</td>
                                            <td><strong>{{  $prisoner->genotype  }}</strong></td>
                                        </tr>

                                        <tr>
                                            <td>Address</td>
                                            <td><strong>{{  $prisoner->address  }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Next Of Kin</td>
                                            <td><strong>{{  $prisoner->next_of_kin  }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Next Of Kin Phone</td>
                                            <td><strong>{{  $prisoner->next_of_kin_phone  }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Crime</td>
                                            <td><strong>{{  $prisoner->crime  }}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Sentence</td>
                                            <td><strong>{{  $prisoner->sentence  }}</strong></td>
                                        </tr>

                                        <tr>
                                            <td>Sentence Start</td>
                                            <td><strong>{{  $prisoner->sentence_start  }}</strong></td>
                                        </tr>

                                        <tr>
                                            <td>Sentence End</td>
                                            <td><strong>{{  $prisoner->sentence_end  }}</strong></td>
                                        </tr>

                                        <tr>
                                            <td>Crime</td>
                                            <td><strong>{{  $prisoner->crime  }}</strong></td>
                                        </tr>
                                    </table>
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