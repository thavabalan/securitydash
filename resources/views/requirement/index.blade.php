
@include('partial._head')
@include('partial._nav')
  <!-- /.navbar -->
@include('partial._side')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-sm-12">
                <section class="content">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Requirements</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped" >
                                <thead>
                                <tr>
                                  <th>Objective</th>
                                  <th>Concept</th>
                                  <th>Governance</th>
                                  <th>Itil</th>

                                  <th>Name</th>
                                  <th>Level of Maturity 1-5</th>
                                  <th>Asset Description</th>
                                  <th>Target State</th>
                                  <th style="white-space: nowrap">Process Depedencies</th>
                                  <th>Process Dependent upon</th>
                                  <th>Business Risk</th>
                                  <th>Current Risk</th>
                                  <th>Current Vendor Service</th>
                                  <th>Linux Covered</th>
                                  <th>Windows OS Covered </th>
                                  <th>Clients Covered</th>
                                  <th>Servers Covered</th>
                                  <th>Terminal Services C Drive Covered</th>
                                  <th>Populate Threat information (central/auto)</th>
                                  <th>Response Time (current)</th>
                                  <th>Response Time (Improvement)</th>
                                  <th>Performance Issue</th>
                                  <th>Mean-Time to Response (current)</th>
                                  <th>Mean-Time to Response (Improvement)</th>
                                  <th>Cost</th>
                                  <th>Licences Required</th>
                                  <th>Confidential</th>
                                  <th>Integrity</th>
                                  <th>Availability</th>
                                  <th>Hyperlink Documentation</th>
                                    <th>Comments</th>

                                 
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($requirements as $requirement)
                                <tr>
                                <td><a href='{{route('objective.show',$requirement->category->id)}}'>{{$requirement->category->name}}</a></td>
                                <td>@foreach($requirement->concepts as $item)<a href='{{route('concept.show',$item->id)}}'><span class="btn btn-info">{{$item->name}}</span></a>@endforeach</td>
                                <td>@foreach($requirement->governance as $item)<a href='{{route('concept.show',$item->id)}}'><span class="btn btn-info">{{$item->name}}</span></a>@endforeach</td>
                                <td>@foreach($requirement->itils as $item)<a href='{{route('itil.show',$item->id)}}'><span class="btn btn-info">{{$item->name}}</span></a>@endforeach</td>

                                <td>{{$requirement->name}}</td>
                                <td>{{$requirement->maturity_level}}
                                <td></td>
                                <td></td>
                                <td><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo{{$requirement->id}}">Show Depedencies</button>
                                <div id="demo{{$requirement->id}}" class="collapse">
                                    @foreach($requirement->dependency as $item) <li>{{$item->name}} </li>@endforeach </div>
                                 
                                </td>
                                <td></td>
                                <td>{{$requirement->business_priority}}</td>
                                <td>{{$requirement->current_risk}}</td>
                                <td> @foreach($requirement->companies as $item)
                                {{$item->pivot->linux_covered}}@endforeach</td>
                                <td>@foreach($requirement->companies as $item)
                                {{$item->pivot->windows_covered}}@endforeach</td>
                                <td> @foreach($requirement->companies as $item)
                                {{$item->pivot->clients_covered}}@endforeach</td>
                                <td> @foreach($requirement->companies as $item)
                                {{$item->pivot->servers_covered}}@endforeach</td>
                                <td>@foreach($requirement->companies as $item)
                                {{$item->pivot->terminal_c_drive_covered}}@endforeach</td>
                                <td>@foreach($requirement->companies as $item)
                                {{$item->pivot->pti}}@endforeach</td>
                                <td>@foreach($requirement->companies as $item)
                                {{$item->pivot->response_time_c}}@endforeach</td>
                                <td>@foreach($requirement->companies as $item)
                                {{$item->pivot->response_time_i}}@endforeach</td>
                                <td> @foreach($requirement->companies as $item)
                                {{$item->pivot->performance_issue}}@endforeach</td>
                                <td>@foreach($requirement->companies as $item)
                                {{$item->pivot->mean_time_to_response_c}}@endforeach</td>
                                <td>@foreach($requirement->companies as $item)
                                {{$item->pivot->mean_time_to_response_i}}@endforeach</td>
                                <td>@foreach($requirement->companies as $item)
                                {{$item->pivot->cost}}@endforeach</td>
                                <td>@foreach($requirement->companies as $item)
                                {{$item->pivot->license_required}}@endforeach</td>
                                    
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>@foreach($requirement->companies as $item)
                                {{$item->pivot->hyperlink_documentation}}@endforeach</td>
                                <td> @foreach($requirement->companies as $item)
                                {{$item->pivot->comments}}@endforeach</td>
                                 
                                
                              </tr>
                              
                              
                                @endforeach
                                
                                </tbody>
                                
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card-body -->
                        </div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@include('partial._foot')