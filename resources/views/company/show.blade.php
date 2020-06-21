
@include('partial._head')
@include('partial._nav')
  <!-- /.navbar -->
@include('partial._side')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
  
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-sm-12">
                <section class="content">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <tbody>
                                  <tr>
                                    <td>Name</td>
                                    <Td>Status</Td>
                                    <td>                                   {{Form::label('title','Tool Used')}}</td>
                                    <td>{{Form::label('title','Level of Maturity')}}</td>
                                    <td>                                   {{Form::label('title','Linux Covered')}}</td>
                                    <td>{{Form::label('title','Windows Covered')}}</td>
                                    <td>{{Form::label('title','Clients Covered')}}</td>
                                    <td>                                   {{Form::label('title','Severs Covered')}}</td>
                                    <td>{{Form::label('title','Terminal C Drived Covered')}}</td>
                                    <td>{{Form::label('title','Populate Threat Information')}}</td>
                                    <td>{{Form::label('title','Response Time Current')}}</td>
                                    <td>{{Form::label('title','Response Time Improvement')}}</td>
                                    <td>{{Form::label('title','Performance Issue')}}</td>
                                    <td>
                                      {{Form::label('title','Mean-Time to Response (current)')}}</td>
                                      <Td>{{Form::label('title','Mean-Time to Response (Improvement)')}}
                                      </Td>
                                      <td>{{Form::label('title','Contract Expiry Date')}}</td>
                                      <td>{{Form::label('title','License Required')}}</td>
                                      <td>{{Form::label('title','Cost')}}</td>
                                      <td>{{Form::label('title','Hyperlink Documentaion')}}</td>
                                      <td>{{Form::label('title','Comments')}}</td>
                                      
                                  </tr>
                                  <tr>
                                    @foreach ($requirements as $requirement)
                                        
                                    
                                    {!! Form::model($company, ['route' => ['company.update', $company->id], 'method' => 'PUT']) !!}                                <tr>
                                
                                <td>
                                    {{$requirement->name}}
                                    <input type="hidden"  name="r_id" value="{{$requirement->id}}">


                                </td>
                                <td>
                                   {{ Form::select('status', ['Yes' => 'Yes', 'No' => 'No'])}}</td>
                                   <td>{{ Form::text('tool_used', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   
                                   <td>{{ Form::text('level_of_maturity', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   <td>{{ Form::text('linux_covered', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   
                                   <td>{{ Form::text('windows_covered', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   
                                   <td>{{ Form::text('clients_covered', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   <Td>{{ Form::text('servers_covered', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</Td>
                                   
                                   <td>{{ Form::text('terminal_c_drive_covered', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   
                                   <td>{{ Form::text('pti', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   
                                  <Td> {{ Form::text('response_time_c', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</Td>
                                   
                                   <td>{{ Form::text('response_time_i', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   
                                   <td>{{ Form::text('performance_issue', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   <td>{{ Form::text('mean_time_to_response_c', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   <td>{{ Form::text('mean_time_to_response_i', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   <td>{{ Form::text('cost', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   
                                   <td>{{ Form::text('contract_expiry_date', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   
                                   <Td>{{ Form::text('license_required', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</Td>
                                   
                                  <td> {{ Form::text('hyperlink_documentation', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   
                                  <td> {{ Form::text('comments', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}</td>
                                   
                                   
                                    <td>
                                        {{ Form::submit('submit', array('class' => 'btn btn-success btn-sm btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
                                    </td>
                                </tr>@endforeach
                                </tbody>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card-body -->
                        </div>
            </div>
        </div>
        <!-- /.row (main row) -->
    



				
            </div>
            <div class="col-sm-6">
                <section class="content">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">{{$company->name}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Requirement</th>
                                  <th>Status</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($company->requirements as $item)
                                <tr>
                                <td>{{$item->name}}</td>
                                    <td @if ($item->pivot->status == 'Yes')
                                        bgcolor="#00FF00"
                                        
                                    @else
                                    bgcolor="#FF0000"
                                    @endif>{{$item->pivot->status}}</td>
                                    </tr>
                                @endforeach   
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  
                                </tr>
                                </tfoot>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card-body -->
                        </div>
            </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@include('partial._foot')