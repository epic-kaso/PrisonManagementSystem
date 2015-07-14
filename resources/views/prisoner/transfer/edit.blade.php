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
                                        Edit Transfer
                                    </header>
                                </div>
                                <div class="card-body ">
                                    <form action="{{ route('transfer.update',$transfer) }}" method="post" class="form floating-label form-validation" role="form" novalidate="novalidate">
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <select name="prisoner_id" id="prisoner" class="form-control" required>
                                                        @foreach($prisoners as $prisoner)
                                                            <option {{ $transfer->prisoner_id == $prisoner->id ? 'selected' : '' }} value="{{ $prisoner->id }}">{{ $prisoner->last_name .' '. $prisoner->first_name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label for="occupation" class="control-label">Prisoner</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">

                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                        <textarea name="destination" id="destination" class="form-control"
                                                                  rows="3">{{ $transfer->destination }}</textarea>
                                                    <label for="destination" class="control-label">Destination Prison</label>
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