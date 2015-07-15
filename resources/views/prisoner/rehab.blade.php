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
                   <div class="col-md-6 col-sm-6">
                       <div class="card">
                           <div class="card-head">
                               <header>Prisoners in Solitary Confinement
                               </header>
                           </div>
                           <div class="card-body">
                               <form action="{{ url('activities/rehab?solitary=true') }}" method="post"
                                     class="form floating-label form-validation form-inline"
                                     role="form" novalidate="novalidate">
                                   <div class="row">
                                       <div class="col-sm-5">
                                           <div class="form-group">
                                               <select name="prisoner_id" id="prisoner" class="form-control form-inline" required>
                                                   @foreach($prisoners as $prisoner)
                                                       <option value="{{ $prisoner->id }}">{{ $prisoner->last_name .' '. $prisoner->first_name }}</option>
                                                   @endforeach
                                               </select>
                                               <label for="occupation" class="control-label">Prisoner</label>
                                           </div>
                                       </div>
                                       <div class="col-sm-5">
                                           <div class="form-group">
                                               <input type="text" class="form-control form-inline" name="offence">
                                               <label for="destination" class="control-label">Offence</label>
                                           </div>
                                       </div>
                                       <div class="col-sm-2">
                                           <input class="btn btn-primary ink-reaction" type="submit" value="Add" />
                                       </div>
                                   </div>
                               </form>
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
                                       <th>Offence</th>
                                       <th class="text-right">Actions</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   @forelse($solitaryPrisoners as $solitary)
                                       <tr>
                                           <td>
                                               <input type="checkbox">
                                           </td>
                                           <td>{{ $solitary->prisoner->id }}</td>
                                           <td>{{ $solitary->prisoner->last_name }}</td>
                                           <td>{{ $solitary->prisoner->first_name }}</td>
                                           <td>{{ $solitary->offence }}</td>
                                           <td class="text-right">
                                               <a href="{{ route('prisoner.show',$solitary->prisoner) }}" class="btn btn-icon-toggle"
                                                  data-toggle="tooltip" data-placement="top" data-original-title="View">
                                                   <i class="fa fa-eye"></i>
                                               </a>
                                               <a data-delete href="{{ url('activities/rehab/'.$solitary->id.'?solitary=true') }}"
                                                  class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top"
                                                  data-original-title="Remove From Solitary"><i class="fa fa-trash-o"></i></a>
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

                               {!! $solitaryPrisoners->render() !!}
                           </div>
                       </div>
                   </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-head">
                                <header>Prisoners in Hard Labour
                                </header>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('activities/rehab?hard-labour=true') }}" method="post"
                                      class="form floating-label form-validation form-inline"
                                      role="form" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <select name="prisoner_id" id="prisoner" class="form-control form-inline" required>
                                                    @foreach($prisoners as $prisoner)
                                                        <option value="{{ $prisoner->id }}">{{ $prisoner->last_name .' '. $prisoner->first_name }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="occupation" class="control-label">Prisoner</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-inline" name="offence">
                                                <label for="destination" class="control-label">Offence</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <input class="btn btn-primary ink-reaction" type="submit" value="Add" />
                                        </div>
                                    </div>
                                </form>
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
                                        <th>Offence</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($hardLabourPrisoners as $hardLabour)
                                        <tr>
                                            <td>
                                                <input type="checkbox" ng-model="invoice.selected">
                                            </td>
                                            <td>{{ $hardLabour->prisoner->id }}</td>
                                            <td>{{ $hardLabour->prisoner->last_name }}</td>
                                            <td>{{ $hardLabour->prisoner->first_name }}</td>
                                            <td>{{ $hardLabour->offence }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('prisoner.show',$hardLabour->prisoner) }}" class="btn btn-icon-toggle"
                                                   data-toggle="tooltip" data-placement="top" data-original-title="View">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a data-delete href="{{ url('activities/rehab/'.$hardLabour->id.'?hard-labour=true') }}"
                                                   class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Remove From Hard Labour"><i class="fa fa-trash-o"></i></a>
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

                                {!! $hardLabourPrisoners->render() !!}
                            </div>
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