
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
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Objective</th>
                                  <th>Concept</th>
                                  <th>Governance</th>
                                  <th>Name</th>
                                  <th>Asset Description</th>
                                  <th>Target State</th>
                                  <th>Process Depedencies</th>
                                  <th>Process Dependent upon</th>
                                  <th>Business Risk</th>
                                  <th>Current Risk</th>
                                  <th>Current Vendor Service</th>
                                  <th>Level of Maturity 1-5</th>
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
                                @foreach ($concept->requirements as $requirement)
                                <tr>
                                <td>{{$requirement->category->name}}</td>
                                <td>@foreach($requirement->concepts as $item)<ul><li>{{$item->name}}</li></ul>@endforeach</td>
                                <td>@foreach($requirement->governance as $item)<ul><li>{{$item->name}}</li></ul>@endforeach</td>
                                <td>{{$requirement->name}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{$requirement->business_priority}}</td>
                                <td>{{$requirement->current_risk}}</td>
                                @foreach($requirement->companies as $item)
                                <td><ul><li>{{$item->name}}<ul><li></td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->level_of_maturity}}</td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->linux_covered}}</td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->windows_covered}}</td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->clients_covered}}</td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->servers_covered}}</td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->terminal_c_drive_covered}}</td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->pti}}</td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->response_time_c}}</td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->response_time_i}}</td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->performance_issue}}</td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->mean_time_to_response_c}}</td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->mean_time_to_response_i}}</td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->cost}}</td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->license_required}}</td>@endforeach
                                    
                                <td></td>
                                <td></td>
                                <td></td>
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->hyperlink_documentation}}</td>@endforeach
                                @foreach($requirement->companies as $item)
                                <td>{{$item->pivot->comments}}</td>@endforeach
                                 
                                
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