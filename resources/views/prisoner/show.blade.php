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

                                <div class="tools">
                                    <div class="btn-group">
                                        <a data-delete href="{{ route('prisoner.destroy',['id'=> $prisoner->id]) }}" class="btn ink-reaction btn-danger mr-10" title="Delete">
                                            <i class="fa fa-trash-o"></i>
                                            <span class="hide-on-mobile">Delete</span>
                                        </a>

                                        <a href="{{ route('prisoner.edit',['id'=> $prisoner->id]) }}" class="btn ink-reaction btn-info mr-10" title="Delete">
                                            <i class="fa fa-pencil"></i>
                                            <span class="hide-on-mobile">Edit</span>
                                        </a>
                                    </div>
                                </div>
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

                                    <div class="col-sm-6">
                                        <div class="panel panel-default">
                                            <table class="table">
                                                <tr>
                                                    <td>First Name: <strong class="text-bold pull-right">{{  $prisoner->first_name  }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Last Name: <strong class="text-bold pull-right">{{  $prisoner->last_name  }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Sex: <strong class="text-bold pull-right">{{  $prisoner->sex  }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Birth Date: <strong class="text-bold pull-right">{{  $prisoner->birth_date  }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Blood Group: <strong class="text-bold pull-right">{{  $prisoner->blood_group  }}</strong></td>
                                                </tr>

                                                <tr>
                                                    <td>Genotype: <strong class="text-bold pull-right">{{  $prisoner->genotype  }}</strong></td>
                                                </tr>

                                                <tr>
                                                    <td>Address: <strong class="text-bold pull-right">{{  $prisoner->address  }}</strong></td>
                                                </tr>
                                            </table>
                                    </div>
                                </div>

                                    <div class="col-sm-6">
                                        <div class="panel panel-default">
                                            <table class="table">
                                                <tr>
                                                    <td>Next Of Kin: <strong class="text-bold pull-right">{{  $prisoner->next_of_kin  }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Next Of Kin Phone: <strong class="text-bold pull-right">{{  $prisoner->next_of_kin_phone  }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Crime: <strong class="text-bold pull-right">{{  $prisoner->crime  }}</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Crime Code: <strong class="text-bold pull-right">{{  $prisoner->crime_code  }}</strong></td>
                                                </tr>

                                                <tr>
                                                    <td>Sentence: <strong class="text-bold pull-right">{{  $prisoner->sentence  }}</strong></td>
                                                </tr>

                                                <tr>
                                                    <td>Sentence Start: <strong class="text-bold pull-right">{{  $prisoner->sentence_start  }}</strong></td>
                                                </tr>

                                                <tr>
                                                    <td>Sentence End: <strong class="text-bold pull-right">{{  $prisoner->sentence_end  }}</strong></td>
                                                </tr>

                                                <tr>
                                                    <td>Court: <strong class="text-bold pull-right">{{  $prisoner->court  }}</strong></td>
                                                </tr>
                                            </table>
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