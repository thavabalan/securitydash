
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
                      
                            <div class="card-header">
                              <h3 class="card-title">{{$requirement->name}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>FUnction</th>
                                  <th>Start Time</th>
                                  <th>End Time</th>
                                  <th>Latest Start Time</th>
                                  <th>Latest End Time</th>
                                 
                                </tr>
                                </thead>
                                <tbody>
                               
                               
                                 @foreach($requirement->subrequirement as $item)
                                 <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->start_time}}</td>
                                <td>{{$item->end_time}}</td>
                                <td>{{$item->latest_start_time}}</td>
                                <td>{{$item->latest_end_time}}</td>
                            </tr>   
                                @endforeach
                              
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    
                                </tr>
                                </tfoot>
                              </table>
                              
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <div class="row">
                            @foreach($requirement->subrequirement as $item)

                            <div class="col-sm-1">
                              <table border="1">
                                <tbody>
                                <tr>
                                  <td>{{$item->start_time}}</td>
                                  <td rowspan="3">{{$item->name}}</td>
                                  <td>{{$item->end_time}}</td>
                                </tr>
                                <tr>
                                  <td>{{$item->latest_start_time}}</td>
                                  <td>{{$item->latest_end_time}}</td>
                                </tr>
                                
                              </tbody>
                              </table>
                            </div>@endforeach
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