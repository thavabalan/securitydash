
@include('partial._head')
@include('partial._nav')
  <!-- /.navbar -->
@include('partial._side')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
  
        
            <div class="col-sm-12">
                <section class="content">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">{{$department->name}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                  <th>Requirement</th>
                                  <th>confidentially</th>
                                  <th>integrity</th>
                                  <th>availability</th>
                                  
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($department->requirements as $item)

                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->pivot->confidentially}}</td>
                                    <td>{{$item->pivot->integrity}}</td>
                                    <td>{{$item->pivot->availability}}</td>
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
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@include('partial._foot')