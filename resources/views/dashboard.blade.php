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
                        <!-- BEGIN ALERT - REVENUE -->
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-success no-margin">
                                        <h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
                                        <strong class="text-xl">{{ $prisoner_count }}</strong><br/>
                                        <span class="opacity-50">Prisoners</span>
                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END ALERT - REVENUE -->

                        <!-- BEGIN ALERT - VISITS -->
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-success no-margin">
                                        <h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
                                        <strong class="text-xl">0</strong><br/>
                                        <span class="opacity-50">Cells</span>
                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END ALERT - VISITS -->

                        <!-- BEGIN ALERT - BOUNCE RATES -->
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-success no-margin">
                                        <h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
                                        <strong class="text-xl">0</strong><br/>
                                        <span class="opacity-50">Guards</span>
                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END ALERT - BOUNCE RATES -->

                        <!-- BEGIN ALERT - TIME ON SITE -->
                        <div class="col-md-3 col-sm-6">
                            <div class="card">
                                <div class="card-body no-padding">
                                    <div class="alert alert-callout alert-success no-margin">
                                        <h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
                                        <strong class="text-xl">0</strong><br/>
                                        <span class="opacity-50">Bails</span>
                                    </div>
                                </div><!--end .card-body -->
                            </div><!--end .card -->
                        </div><!--end .col -->
                        <!-- END ALERT - TIME ON SITE -->

                    </div><!--end .row -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-head">
                                    <header>Recent Prisoners
                                    </header>
                                </div>
                                <div id="data-table-selection-header" class="bootgrid-header container-fluid">
                                    <div class="row">
                                        <div class="col-sm-6 actionBar">
                                            <div class="search form-group">
                                                <div class="input-group">
                        <span class="input-group-addon">
                            <span class="md md-search"></span>
                        </span>
                                                    <input type="text" ng-model="search_invoice" class="search-field form-control"
                                                           placeholder="Search">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div class="checkbox checkbox-inline checkbox-styled">
                                                    <label>
                                                        <input type="checkbox" ng-model="ui.selectAll"><span></span>
                                                    </label>
                                                </div>
                                            </th>
                                            <th>S/N</th>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Sentence End</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($prisoners as $prisoner)
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-inline checkbox-styled">
                                                        <label>
                                                            <input type="checkbox" ng-model="invoice.selected"><span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>{{ $prisoner->id }}</td>
                                                <td>{{ $prisoner->last_name }}</td>
                                                <td>{{ $prisoner->first_name }}</td>
                                                <td>{{ \Carbon\Carbon::parse($prisoner->sentence_end)->toFormattedDateString() }}</td>
                                                <td class="text-right">
                                                    <a href="{{ route('prisoner.show',$prisoner) }}" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="View">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <button type="button" ng-click="deleteInvoice(invoice,$index,$event)" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>

                                        @empty
                                            <tr>
                                                <td colspan="9" class="text-center text-muted">
                                                    <h5> No Prisoners yet.</h5>
                                                </td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-head">
                                    <header>Recently Bailed
                                    </header>
                                </div>
                                <div id="data-table-selection-header" class="bootgrid-header container-fluid">
                                    <div class="row">
                                        <div class="col-sm-6 actionBar">
                                            <div class="search form-group">
                                                <div class="input-group">
                        <span class="input-group-addon">
                            <span class="md md-search"></span>
                        </span>
                                                    <input type="text" ng-model="search_invoice" class="search-field form-control"
                                                           placeholder="Search">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div class="checkbox checkbox-inline checkbox-styled">
                                                    <label>
                                                        <input type="checkbox" ng-model="ui.selectAll"><span></span>
                                                    </label>
                                                </div>
                                            </th>
                                            <th>S/N</th>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Sentence End</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($prisoners as $prisoner)
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-inline checkbox-styled">
                                                        <label>
                                                            <input type="checkbox" ng-model="invoice.selected"><span></span>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>{{ $prisoner->id }}</td>
                                                <td>{{ $prisoner->last_name }}</td>
                                                <td>{{ $prisoner->first_name }}</td>
                                                <td>{{ \Carbon\Carbon::parse($prisoner->sentence_end)->toFormattedDateString() }}</td>
                                                <td class="text-right">
                                                    <a href="{{ route('prisoner.show',$prisoner) }}" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="View">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <button type="button" ng-click="deleteInvoice(invoice,$index,$event)" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>

                                        @empty
                                            <tr>
                                                <td colspan="9" class="text-center text-muted">
                                                    <h5> No Bailed Prisoner yet.</h5>
                                                </td>
                                            </tr>
                                        @endforelse
                                        </tbody>
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

@section('js')
    <script src="/js/core/demo/DemoDashboard.js"></script>
@endsection