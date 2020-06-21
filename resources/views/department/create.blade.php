
@include('partial._head')
@include('partial._nav')
  <!-- /.navbar -->
@include('partial._side')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-sm-6">

{!! Form::open(array('route' => 'department.store', 'data-parsley-validate' => '', 'files' => true)) !!}
      {{ Form::label('title', 'Name:') }}

                {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('Requirement', 'Requirements:') }}
				<select class="form-control select2-multi" name="requirement[]" multiple="multiple">
					@foreach($requirements as $requirement)
						<option value='{{ $requirement->id }}'>{{ $requirement->name }}</option>
					@endforeach
                </select>
                {{ Form::label('title', 'Confidentially:') }}
                {{ Form::text('confidentially', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('title', 'Availability:') }}
                {{ Form::text('availability', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('title', 'Integrity:') }}
                {{ Form::text('integrity', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}


				{{ Form::submit('Create Department', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
            </div>
            <div class="col-sm-6">
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
                                <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Name</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($departments as $department)
                                <tr>
                                <td>{{$department->id}}</td>
                                <td><a href='{{route('department.show',$department->id)}}'>{{$department->name}}</a></td>
                              </tr>
                                @endforeach
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
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