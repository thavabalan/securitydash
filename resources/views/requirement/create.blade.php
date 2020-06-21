
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

{!! Form::open(array('route' => 'requirement.store', 'data-parsley-validate' => '', 'files' => true)) !!}
      {{ Form::label('title', 'Name:') }}

        {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        {{ Form::label('title', 'Business Priority:') }}

        {{ Form::text('business_priority', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        {{ Form::label('title', 'Current risk:') }}

        {{ Form::text('current_risk', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        {{ Form::label('title', 'Maturity level:') }}
        {{ Form::text('maturity_level', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        {{ Form::label('title', 'Category:') }}<br>

        <select name='category' class="form-control select2-multi" multiple="multiple">
        @foreach($categories as $category)
        <option value="{{$category -> id}}">{{$category -> name}}</option>
        @endforeach
        </select>
        <br>
        {{ Form::label('title', 'Concept:') }}
        <select name='concept[]'  class="form-control select2-multi" multiple="multiple">
          @foreach($concepts as $concept)
          <option value="{{$concept -> id}}">{{$concept -> name}}</option>
          @endforeach
          </select>
          <br>
          {{ Form::label('title', 'Governance:') }}
          <select name='governance[]' class="form-control select2-multi" multiple="multiple">
            @foreach($governances as $governance)
            <option value="{{$governance -> id}}">{{$governance -> name}}</option>
            @endforeach
            </select>
<br>

{{ Form::label('title', 'Dependency:') }}

        <select name='dependency[]' class="form-control select2-multi" multiple="multiple">
          @foreach($requirements as $requirement)
          <option value="{{$requirement -> id}}">{{$requirement -> name}}</option>
          @endforeach
          </select>
          {{ Form::label('title', 'Itils:') }}
          <select name='itils[]' class="form-control select2-multi" multiple="multiple">
            @foreach($itils as $itil)
            <option value="{{$itil -> id}}">{{$itil -> name}}</option>
            @endforeach
            </select>
				{{ Form::submit('Create Requirement', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
            </div>
            <div class="col-sm-6">
                <section class="content">
                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Requirement</h3>
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
                                @foreach ($requirements as $requirement)
                                <tr>
                                <td><a href="{{route('requirement.show',$requirement->id)}}">{{$requirement->name}}</a></td>
                                <td>{!! Form::open(['route' => ['requirement.destroy', $requirement->id], 'method' => 'DELETE']) !!}
                                  {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}

                                  {!! Form::close() !!}</td>
                                  <td><a href="{{ route('requirement.edit', $requirement->id) }}" class="btn btn-primary btn-xs" >Edit</a></td>
                                
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