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
                                <header>All Guards
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
                                        <th>Email</th>
                                        <th>Sex</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($guards as $guard)
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <td>{{ $guard->id }}</td>
                                            <td>{{ $guard->last_name }}</td>
                                            <td>{{ $guard->first_name }}</td>
                                            <td>{{ $guard->email }}</td>
                                            <td>{{ $guard->sex }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('guard.edit',$guard) }}" class="btn btn-icon-toggle"
                                                   data-toggle="tooltip" data-placement="top" data-original-title="View">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="{{ route('guard.show',$guard) }}" class="btn btn-icon-toggle"
                                                   data-toggle="tooltip" data-placement="top" data-original-title="View">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a data-delete href="{{ route('guard.destroy',['id'=> $guard->id]) }}"
                                                   class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Delete row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>

                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center text-muted">
                                                <h5> No Guard yet</h5>
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>

                                {!! $guards->render() !!}
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