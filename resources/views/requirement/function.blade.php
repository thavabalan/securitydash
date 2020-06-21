
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
            <div class="col-sm-6">

{!! Form::open(array('route' => 'function.store', 'data-parsley-validate' => '', 'files' => true)) !!}
      {{ Form::label('title', 'Name:') }}
       {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
       {{ Form::label('title', 'Start Date:') }}
       {{ Form::text('start_time', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
       {{ Form::label('title', 'End Date:') }}
       {{ Form::text('end_time', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
       {{ Form::label('title', 'Latest Start Date:') }}
       {{ Form::text('latest_start_time', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
       {{ Form::label('title', 'Latest End Date:') }}
       {{ Form::text('latest_end_time', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
      
       {{ Form::label('title', 'Requirement:') }}<br>

        <select name='req_id' class="form-control">
        @foreach($requirements as $requirement)
        <option value="{{$requirement -> id}}">{{$requirement -> name}}</option>
        @endforeach
        </select>
			{{ Form::submit('Create Function', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
            </div>
            <div class="col-sm-6">
                <section class="content">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Functions</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <th>ID</th>
                                  <th>Requirement</th>
                                  <th>Function</th>
                                  <th>Option</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($functions as $function)
                                <tr>
                                <td>{{$function->id}}</td>
                                <td>{{$function->requirement->name}}</td>
                                <td><a href="{{route('function.show',$function->id)}}">{{$function->name}}</a></td>
                                <td>{!! Form::open(['route' => ['function.destroy', $function->id], 'method' => 'DELETE']) !!}
                                  {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}

                                  {!! Form::close() !!}</td>
                                
                              </tr>
                                @endforeach
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                  <th>Requirement</th>
                                  <th>Function</th>
                                  <th>Option</th>
                                    
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