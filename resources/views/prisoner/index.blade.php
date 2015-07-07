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
                                <header>All Invoices
                                </header>

                                <div class="tools">
                                    <div class="btn-group">
                                        <button class="btn ink-reaction btn-danger mr-10" title="Delete">
                                            <i class="fa fa-trash-o"></i>
                                            <span class="hide-on-mobile">Delete</span>
                                        </button>
                                    </div>
                                </div>
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
                                            <h5> No Invoice yet, please make a sale first.</h5>
                                        </td>
                                    </tr>
                                    @endforelse
                                    </tbody>
                                </table>

                                {!! $prisoners->render() !!}
                            </div>
                    </div>
                </div><!--end .section-body -->
                </div>
            </section>
        </div><!--end #content-->
        <!-- END CONTENT -->

        <!-- BEGIN MENUBAR-->
        @include('partials.sidebar')
        <!-- END MENUBAR -->

    </div><!--end #base-->
    <!-- END BASE -->
@endsection