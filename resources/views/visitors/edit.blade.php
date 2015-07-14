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
                    <!-- BEGIN VALIDATION FORM WIZARD -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-head">
                                    <header>
                                       Edit Visitor, <strong>{{  $visitor->last_name.", ".$visitor->first_name  }}</strong>
                                    </header>
                                </div>
                                <div class="card-body ">
                                    <form action="{{ route('visitor.update',$visitor) }}" method="post" class="form floating-label form-validation" role="form" novalidate="novalidate">
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" value="{{  $visitor->first_name }}" name="first_name" id="firstname" class="form-control" required>
                                                    <label for="firstname" class="control-label">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" value="{{  $visitor->last_name }}" name="last_name" id="lastname" class="form-control" required>
                                                    <label for="lastname" class="control-label">Last name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <select name="sex" id="occupation" class="form-control" required>
                                                        <option {{ $visitor->sex == 'male' ? 'selected' : ''  }} value="male">Male</option>
                                                        <option {{ $visitor->sex == 'female' ? 'selected' : ''  }} value="female">Female</option>
                                                    </select>
                                                    <label for="occupation" class="control-label">Sex</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  value="{{  $visitor->address }}" name="address" id="address" class="form-control" required>
                                                    <label for="address" class="control-label">Address</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  value="{{  $visitor->prisoner_visited }}" name="prisoner_visited" id="address" class="form-control" required>
                                                    <label for="address" class="control-label">Inmate Visited</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" value="{{  $visitor->purpose }}" name="purpose" id="address" class="form-control" required>
                                                    <label for="address" class="control-label">Purpose of Visit</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  value="{{  $visitor->time_in }}" name="time_in" id="timein" class="form-control" required>
                                                    <label for="timein" class="control-label">Time In</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text"  value="{{  $visitor->time_out }}" name="time_out" id="timeout" class="form-control" required>
                                                    <label for="timeout" class="control-label">Time Out</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input class="btn btn-primary ink-reaction" type="submit" value="Update" />
                                        </div>
                                    </form>
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