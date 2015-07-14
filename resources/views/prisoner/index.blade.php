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
                                <header>All Prisoners
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
                                        <th>Acquited</th>
                                        <th>Sentence End</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($prisoners as $prisoner)
                                    <tr>
                                        <td>
                                            <input type="checkbox" ng-model="invoice.selected">
                                        </td>
                                        <td>{{ $prisoner->id }}</td>
                                        <td>{{ $prisoner->last_name }}</td>
                                        <td>{{ $prisoner->first_name }}</td>
                                        <td><span class="label label-{{ $prisoner->bailed ? 'success' : 'danger' }}">{{ $prisoner->bailed ? 'YES' : 'NO' }}</span></td>
                                        <td>{{ \Carbon\Carbon::parse($prisoner->sentence_end)->toFormattedDateString() }}</td>
                                        <td class="text-right">
                                            <a href="{{ url('activities/acquit/'.$prisoner->id.'?acquit=1') }}" class="btn btn-icon-toggle"
                                               data-toggle="tooltip" data-placement="top" data-original-title="Acquit">
                                                <i class="fa fa-sign-out"></i>
                                            </a>
                                            <a href="{{ route('prisoner.edit',$prisoner) }}" class="btn btn-icon-toggle"
                                               data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="{{ route('prisoner.show',$prisoner) }}" class="btn btn-icon-toggle"
                                               data-toggle="tooltip" data-placement="top" data-original-title="View">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a data-delete href="{{ route('prisoner.destroy',['id'=> $prisoner->id]) }}"
                                               class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top"
                                               data-original-title="Delete row"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>

                                    @empty
                                    <tr>
                                        <td colspan="9" class="text-center text-muted">
                                            <h5> No Prisoner yet.</h5>
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