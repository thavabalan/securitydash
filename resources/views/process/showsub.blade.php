
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
                              <h3 class="card-title">{{$subprocess->name}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Add Update
                                  </button>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                                    Add Event
                                  </button>
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Add Update</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            {!! Form::open(array('route' => 'update.store', 'data-parsley-validate' => '', 'files' => true)) !!}
                                            {{ Form::text('update', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            <input type="hidden" name="s_id" value="{{$subprocess->id}}">                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          {{ Form::submit('Submit', array('class' => 'btn btn-primary', 'style' => 'margin-top: 20px;')) }}
                                            {!! Form::close() !!}   
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            {!! Form::open(array('route' => 'event.store', 'data-parsley-validate' => '', 'files' => true)) !!}
                                            {{ Form::text('event', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                            <input type="hidden" name="s_id" value="{{$subprocess->id}}">

                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          {{ Form::submit('Submit', array('class' => 'btn btn-primary', 'style' => 'margin-top: 20px;')) }}
                                          {!! Form::close() !!}                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class='row'>
                                    <div class='col-sm-6'>

                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                  <th>Event</th>
                                  <th>Options</th>
                                                              
                                </tr>
                                </thead>
                                <tbody>
                               
                                <tr>@foreach($subprocess->events as $item)
                                    <td>{{$item->event}}</td>
                                    @endforeach
                                   
                                  
                                
                              </tr>
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                  <th>Event</th>
                                  <th>Options</th>
                                    
                                </tr>
                                </tfoot>
                              </table></div>
                              <div class='col-sm-6'>
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                  <th>Update</th>
                                  <th>Options</th>
                                                              
                                </tr>
                                </thead>
                                <tbody>
                               
                                @foreach($subprocess->updates as $item)
                                <tr> <td>{{$item->update}}</td></tr>
                                    @endforeach
                                   
                                  
                                
                              
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                  <th>Update</th>
                                  <th>Options</th>
                                    
                                </tr>
                                </tfoot>
                              </table></div></div>
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