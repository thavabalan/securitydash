
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

{!! Form::open(array('route' => 'process.store', 'data-parsley-validate' => '', 'files' => true)) !!}
      {{ Form::label('title', 'Name:') }}

        {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        {{ Form::label('title', 'Department Belongs To:') }}

        <select name='department' class="form-control">
          @foreach($departments as $department)
          <option value="{{$department -> id}}">{{$department -> name}}</option>
          @endforeach
          </select>

				{{ Form::submit('Create Process', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
            </div>
            <div class="col-sm-6">
                <section class="content">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Processes</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Name</th>
                                  <th>Options</th>
                                 
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($processes as $process)
                                <tr>
                                <td><a href='{{route('process.show',$process->id)}}'>{{$process->name}}</a></td>
                                <td>{!! Form::open(['route' => ['process.destroy', $process->id], 'method' => 'DELETE']) !!}
                                  {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}

                                  {!! Form::close() !!}</td>
                                
                              </tr>
                                @endforeach
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Options</th>
                                    
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