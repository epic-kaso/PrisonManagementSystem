@extends('layout')


@section('css')
    <link type="text/css" rel="stylesheet" href="/css/libs/wizard/wizard.css" />
@endsection


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
                        <!-- BEGIN VALIDATION FORM WIZARD -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-head">
                                        <header>
                                            Add New Prisoner
                                        </header>
                                    </div>
                                    <div class="card-body ">
                                        <div id="rootwizard2" class="form-wizard form-wizard-horizontal">
                                            <form enctype="multipart/form-data" action="{{ route('prisoner.store') }}" method="post" class="form floating-label form-validation" role="form" novalidate="novalidate">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                                <div class="form-wizard-nav">
                                                    <div class="progress"><div class="progress-bar progress-bar-primary"></div></div>
                                                    <ul class="nav nav-justified">
                                                        <li class="active"><a href="#step1" data-toggle="tab">
                                                                <span class="step">1</span>
                                                                <span class="title">PERSONAL</span></a></li>
                                                        <li><a href="#step2" data-toggle="tab">
                                                                <span class="step">2</span>
                                                                <span class="title">CRIME</span></a></li>
                                                        <li><a href="#step3" data-toggle="tab">
                                                                <span class="step">3</span>
                                                                <span class="title">SENTENCE</span></a></li>
                                                    </ul>
                                                </div><!--end .form-wizard-nav -->
                                                <div class="tab-content clearfix">
                                                    <div class="tab-pane active" id="step1">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="text" value="{{ Session::get('first_name') }}" name="first_name" id="firstname" class="form-control" required>
                                                                    <label for="firstname" class="control-label">First name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="text" value="{{ Session::get('last_name') }}" name="last_name" id="lastname" class="form-control" required>
                                                                    <label for="lastname" class="control-label">Last name</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="text" value="{{ Session::get('genotype') }}" name="genotype" id="genotype" class="form-control" required>
                                                                    <label for="genotype" class="control-label">Genotype</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="text" value="{{ Session::get('blood_group') }}" name="blood_group" id="blood_group" class="form-control" required>
                                                                    <label for="blood_group" class="control-label">Blood Group</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="date" value="{{ Session::get('birth_date') }}" name="birth_date" id="birthdate" class="form-control" required>
                                                                    <label for="birthdate" class="control-label">Birth Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <select name="sex" id="occupation" class="form-control" required>
                                                                        <option value="male">Male</option>
                                                                        <option value="female">Female</option>
                                                                    </select>
                                                                    <label for="occupation" class="control-label">Sex</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="text" value="{{ Session::get('next_of_kin') }}" name="next_of_kin" id="next_of_kin" class="form-control" required>
                                                                    <label for="next_of_kin" class="control-label">Next of Kin</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="text" value="{{ Session::get('next_of_kin_phone') }}" name="next_of_kin_phone" id="phone" class="form-control" required>
                                                                    <label for="phone" class="control-label">Next of Kin Phone Number</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <input type="text" value="{{ Session::get('address') }}" name="address" id="occupation" class="form-control" required>
                                                                    <label for="occupation" class="control-label">Address</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <input type="text" value="{{ Session::get('medical_status') }}" name="medical_status" id="occupation" class="form-control" required>
                                                                    <label for="occupation" class="control-label">Medical Status/Disabilities</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--end #step1 -->
                                                    <div class="tab-pane" id="step2">
                                                        <br/><br/>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <img id="left-mugshot"
                                                                            class="img-responsive img-preview-image" src="/img/r-mugshot.jpg"
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
                                                                    <img id="center-mugshot" class="img-responsive img-preview-image" src="/img/c-mugshot.jpg"
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
                                                                    <img id="right-mugshot" class="img-responsive img-preview-image" src="/img/l-mugshot.jpg"
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
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <input type="text" value="{{ Session::get('crime') }}" name="crime" id="crime" class="form-control" required>
                                                                    <label for="crime" class="control-label">Crime</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="text" value="{{ Session::get('crime_code') }}" name="crime_code" id="crime_code" class="form-control">
                                                                    <label for="crime_code" class="control-label">Crime Code</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="text" value="{{ Session::get('arresting_officer') }}" name="arresting_officer" id="arresting_officer" class="form-control">
                                                                    <label for="arresting_officer" class="control-label">Arresting Officer</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--end #step2 -->
                                                    <div class="tab-pane" id="step3">
                                                        <br/><br/>
                                                        <div class="form-group">
                                                            <textarea name="sentence" required id="sentence" class="form-control" rows="3">{{ Session::get('sentence') }}</textarea>
                                                            <label>Sentence</label>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="date" value="{{ Session::get('sentence_start') }}" name="sentence_start" id="start_date" class="form-control" required>
                                                                    <label for="start_date" class="control-label">Sentence Start Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="date" value="{{ Session::get('sentence_end') }}" name="sentence_end" id="end_date" class="form-control" required>
                                                                    <label for="end_date" class="control-label">Sentence End Date</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="text" value="{{ Session::get('court') }}" name="court" required id="court" class="form-control">
                                                                    <label>Court</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <input type="text" value="{{ Session::get('cell_roommate') }}" name="cell_roommate" required id="cell_roommate" class="form-control">
                                                                    <label>Cell Roommate</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <input class="btn btn-primary ink-reaction" type="submit" value="Save" />
                                                        </div>
                                                    </div><!--end #step3 -->
                                                </div><!--end .tab-content -->
                                                <ul class="pager wizard">
                                                    <li class="previous"><a class="btn-raised" href="javascript:void(0);">Previous</a></li>
                                                    <li class="next"><a class="btn-raised" href="javascript:void(0);">Next</a></li>
                                                </ul>
                                            </form>
                                        </div><!--end #rootwizard -->
                                    </div><!--end .card-body -->
                                </div><!--end .card -->
                            </div><!--end .col -->
                        </div><!--end .row -->
                        <!-- END VALIDATION FORM WIZARD -->
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

@section('js')
    <script src="/js/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/js/libs/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="/js/libs/wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="/js/core/demo/DemoFormWizard.js"></script>
@endsection