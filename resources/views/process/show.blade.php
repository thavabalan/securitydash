
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
                              <h3 class="card-title">{{$process->name}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                  <th>Department</th>
                                <th>ID</th>
                                  <th>Name</th>
                                  
                                  <th>Options</th>
                                  
                                 
                                </tr>
                                </thead>
                                <tbody>
                               
                                <tr>
                                  <td>{{$process->department->name}}
                                    
                                  </td>
                                    @foreach($process->subprocesses as  $item)
                                <td>{{$process->id}}.{{$item->id}}</td>
                                <td><a href="{{route('subprocess.show',$item->id)}}">{{$item->name}}</a></td>
                                <td>{!! Form::open(['route' => ['process.destroy', $process->id], 'method' => 'DELETE']) !!}
                                  {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}

                                  {!! Form::close() !!}</td>@endforeach
                                  
                                  
                                
                              </tr>
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                  <th>Department</th>
                                  <th>ID</th>
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