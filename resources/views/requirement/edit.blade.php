
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
                      
                          
                        {!! Form::model($requirement, ['route' => ['requirement.update', $requirement->id], 'method' => 'PUT']) !!}

                        {{ Form::label('title', 'Name:') }}
                  
                                  {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                          {{ Form::label('title', 'Business Priority:') }}
                  
                                  {{ Form::text('business_priority', null, array('class' => 'form-control', 'required' => '','maxlength' => '255') ) }}
                          {{ Form::label('title', 'Current Risk:') }}
                  
                          {{ Form::text('current_risk', null, array('class' => 'form-control', 'required' => '','maxlength' => '255') ) }}
                          {{ Form::label('title', 'Matrurity Level:') }}
                  
                          {{ Form::text('maturity_level', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255') ) }}
                                     
                          {{ Form::label('category', 'Category:') }}
                          {{ Form::select('category', $categories, ['class' => 'form-control select2-multi']) }} </br>
                  
                                  {{ Form::label('Concept', 'Concept:') }}
                          {{ Form::select('concept[]', $concepts, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}
                  
                                  </select>
                                  {{ Form::label('Governance', 'Governance:') }}
                                  {{ Form::select('governance[]', $governances, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}
                          
                                          </select>
                                          
                                          {{ Form::label('Itil', 'Itil:') }}
                                  {{ Form::select('itil[]', $itils, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}
                          
                                          </select>
                  
                  
                                  {{ Form::submit('Update Requirement', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
                              {!! Form::close() !!}                        </div>
            </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@include('partial._foot')