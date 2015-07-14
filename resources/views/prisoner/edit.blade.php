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
                            <header><strong>Edit {{  $prisoner->last_name.", ".$prisoner->first_name  }}</strong>
                            </header>

                            <div class="tools">
                                <div class="btn-group">
                                    <a data-delete href="{{ route('prisoner.destroy',['id'=> $prisoner->id]) }}" class="btn ink-reaction btn-danger mr-10" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                        <span class="hide-on-mobile">Delete</span>
                                    </a>

                                    <a href="{{ route('prisoner.show',['id'=> $prisoner->id]) }}" class="btn ink-reaction btn-info mr-10" title="Delete">
                                        <i class="fa fa-eye"></i>
                                        <span class="hide-on-mobile">View</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('prisoner.update',$prisoner) }}" method="post" class="form floating-label form-validation" role="form" novalidate="novalidate">
                                <input type="hidden" name="_method" value="PUT">

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <img id="left-mugshot"
                                             class="img-responsive img-preview-image" src="{{  url('prisoner-pic/'.$prisoner->left_mug_shot)  }}"
                                             alt=""/>
                                        <div class="input-group">
                                                                <span class="input-group-btn">
                                                                    <span class="btn btn-primary btn-file">
                                                                        Browse&hellip; <input data-preview="#left-mugshot" name="left_mug_shot" class="img-preview-file" type="file">
                                                                    </span>
                                                                </span>
                                            <div class="input-group-content">
                                                <input  type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <img id="center-mugshot" class="img-responsive img-preview-image" src="{{  url('prisoner-pic/'.$prisoner->center_mug_shot)  }}"
                                             alt=""/>
                                        <div class="input-group">
                                                                <span class="input-group-btn">
                                                                    <span class="btn btn-primary btn-file">
                                                                        Browse&hellip; <input data-preview="#center-mugshot" name="center_mug_shot" class="img-preview-file" type="file">
                                                                    </span>
                                                                </span>
                                            <div class="input-group-content">
                                                <input  type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <img id="right-mugshot" class="img-responsive img-preview-image" src="{{  url('prisoner-pic/'.$prisoner->right_mug_shot)  }}"
                                             alt=""/>
                                        <div class="input-group">
                                                                        <span class="input-group-btn">
                                                                            <span class="btn btn-primary btn-file">
                                                                                Browse&hellip; <input name="right_mug_shot" data-preview="#right-mugshot" class="img-preview-file" type="file">
                                                                            </span>
                                                                        </span>
                                            <div class="input-group-content">
                                                <input  type="text" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="panel panel-default">
                                        <table class="table">
                                            <tr>
                                                <td>First Name: 
                                                    <strong class="text-bold pull-right">
                                                        <input type="text" name="first_name" 
                                                               value="{{  $prisoner->first_name  }}"
                                                               class="form-control"></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Last Name: <strong class="text-bold pull-right">
                                                        <input type="text" name="last_name" 
                                                               value="{{  $prisoner->last_name  }}"
                                                               class="form-control"></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Sex: <strong class="text-bold pull-right">
                                                        <input type="text" name="sex"
                                                               value="{{  $prisoner->sex  }}"
                                                               class="form-control">
                                                    </strong></td>
                                            </tr>
                                            <tr>
                                                <td>Birth Date: <strong class="text-bold pull-right">
                                                        <input type="date" name="birth_date"
                                                               value="{{  $prisoner->birth_date  }}"
                                                               class="form-control">
                                                    </strong></td>
                                            </tr>
                                            <tr>
                                                <td>Blood Group: <strong class="text-bold pull-right">
                                                        <input type="text" name="blood_group"
                                                               value="{{  $prisoner->blood_group  }}"
                                                               class="form-control">
                                                    </strong></td>
                                            </tr>

                                            <tr>
                                                <td>Genotype: <strong class="text-bold pull-right">
                                                        <input type="text" name="genotype"
                                                               value="{{  $prisoner->genotype  }}"
                                                               class="form-control"></strong></td>
                                            </tr>

                                            <tr>
                                                <td>Address: <strong class="text-bold pull-right">
                                                        <input type="text" name="address"
                                                               value="{{  $prisoner->address  }}"
                                                               class="form-control">
                                                    </strong></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="panel panel-default">
                                        <table class="table">
                                            <tr>
                                                <td>Next Of Kin: <strong class="text-bold pull-right">
                                                        <input type="text"
                                                               name="next_of_kin"
                                                               value="{{   $prisoner->next_of_kin  }}"
                                                               class="form-control"></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Next Of Kin Phone: <strong class="text-bold pull-right">
                                                        <input type="text"
                                                               name="next_of_kin_phone"
                                                               value="{{   $prisoner->next_of_kin_phone  }}"
                                                               class="form-control"></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Crime: <strong class="text-bold pull-right">
                                                        <input type="text"
                                                               name="crime"
                                                               value="{{   $prisoner->crime  }}"
                                                               class="form-control"></strong></td>
                                            </tr>
                                            <tr>
                                                <td>Crime Code: <strong class="text-bold pull-right">
                                                        <input type="text"
                                                               name="crime_code"
                                                               value="{{   $prisoner->crime_code  }}"
                                                               class="form-control"></strong></td>
                                            </tr>

                                            <tr>
                                                <td>Sentence: <strong class="text-bold pull-right">
                                                        <input type="text"
                                                               name="sentence"
                                                               value="{{   $prisoner->sentence  }}"
                                                               class="form-control"></strong></td>
                                            </tr>

                                            <tr>
                                                <td>Sentence Start: <strong class="text-bold pull-right">
                                                        <input type="date"
                                                               name="sentence_start"
                                                               value="{{   $prisoner->sentence_start  }}"
                                                               class="form-control"></strong></td>
                                            </tr>

                                            <tr>
                                                <td>Sentence End: <strong class="text-bold pull-right">
                                                        <input type="date"
                                                               name="sentence_end"
                                                               value="{{   $prisoner->sentence_end  }}"
                                                               class="form-control"></strong></td>
                                            </tr>

                                            <tr>
                                                <td>Court: <strong class="text-bold pull-right">
                                                        <input type="text"
                                                               name="court"
                                                               value="{{   $prisoner->court  }}"
                                                               class="form-control"></strong></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                    <input class="btn btn-primary ink-reaction" type="submit" value="Update" />
                                </div>
                            </form>
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