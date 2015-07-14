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
                                <header>All Prisoner Transfers
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
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox">
                                        </th>
                                        <th>S/N</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Destination</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($transfers as $transfer)
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>{{ $transfer->id }}</td>
                                            <td>{{ $transfer->prisoner->last_name }}</td>
                                            <td>{{ $transfer->prisoner->first_name }}</td>
                                            <td>{{ $transfer->destination }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('transfer.edit',$transfer) }}" class="btn btn-icon-toggle"
                                                   data-toggle="tooltip" data-placement="top" data-original-title="View">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="{{ route('transfer.show',$transfer) }}" class="btn btn-icon-toggle"
                                                   data-toggle="tooltip" data-placement="top" data-original-title="View">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a data-delete href="{{ route('transfer.destroy',['id'=> $transfer->id]) }}"
                                                   class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Delete row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>

                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center text-muted">
                                                <h5> No transfers yet</h5>
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>

                                {!! $transfers->render() !!}
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