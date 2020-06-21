
@include('partial._head')
@include('partial._nav')
  <!-- /.navbar -->
@include('partial._side')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="row">
        
        <div class="col-sm-12">
            <section class="content">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title"></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <th>Vendor</th>
                              @foreach ($companies as $item)

                                    <th>{{$item->name}}</th>
                                    @endforeach
                                    <th>Customer Priority</th>
                             
                              
                             
                            </tr>
                            </thead>
                            <tbody>
                           @foreach ($requirements as $item)
                           <tr>
                           <td>{{$item->name}}</td>               
                             
                             <td><div class="form-group">
                             <input type="number" class="form-control prc">     
                            </div></td>
                              <td><div class="form-group">
                                <input type="number" class="form-control prc1">     
                                </div></td>
                                <td><div class="form-group">
                                    <input type="number" class="form-control prc2">     
                                    </div></td>
<td><div class="form-group">
                                    <input type="number" class="form-control prc3">     
                                    </div></td>
<td><div class="form-group">
                                    <input type="number" class="form-control prc4">     
                                    </div></td>
                                    <td id="result3"></td>

                              
                             
                            
                        </tr>
                           @endforeach
                           
                            
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Total</th>
                                <th id="result"></th>
                                <th id="result1"></th>
                                <td id="result2"></td>

<td id="result4"></td>
<td id="result5"></td>



                                <th></th>
                                
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
  </div>
    <script>
        $('.form-group').on('input','.prc',function(){
            var totalsum = 0;
            $('.form-group .prc').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalsum += parseFloat(inputVal);
                }
            });
            $('#result').text(totalsum);
        })

        $('.form-group').on('input','.prc1',function(){
            var totalsum = 0;
            $('.form-group .prc1').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalsum += parseFloat(inputVal);
                }
            });
            $('#result1').text(totalsum);
        })
        $('.form-group').on('input','.prc2',function(){
            var totalsum = 0;
            $('.form-group .prc2').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalsum += parseFloat(inputVal);
                }
            });
            $('#result2').text(totalsum);
        })
        $('.form-group').on('input','.prc3',function(){
            var totalsum = 0;
            $('.form-group .prc3').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalsum += parseFloat(inputVal);
                }
            });
            $('#result4').text(totalsum);
        })
        $('.form-group').on('input','.prc4',function(){
            var totalsum = 0;
            $('.form-group .prc4').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalsum += parseFloat(inputVal);
                }
            });
            $('#result5').text(totalsum);
        })
        $('.form-group').on('input','.prc5',function(){
            var totalsum = 0;
            $('.form-group .prc5').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalsum += parseFloat(inputVal);
                }
            });
            $('#result5').text(totalsum);
        })
        $('.form-group').on('input','.prc6',function(){
            var totalsum = 0;
            $('.form-group .prc6').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalsum += parseFloat(inputVal);
                }
            });
            $('#result6').text(totalsum);
        })
        $('.form-group').on('input','.prc7',function(){
            var totalsum = 0;
            $('.form-group .prc7').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalsum += parseFloat(inputVal);
                }
            });
            $('#result7').text(totalsum);
        })
        $('.form-group').on('input','.prc8',function(){
            var totalsum = 0;
            $('.form-group .prc8').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalsum += parseFloat(inputVal);
                }
            });
            $('#result8').text(totalsum);
        })
        $('.form-group').on('input','.prc9',function(){
            var totalsum = 0;
            $('.form-group .prc9').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalsum += parseFloat(inputVal);
                }
            });
            $('#result9').text(totalsum);
        })
        $('.form-group').on('input','.prc10',function(){
            var totalsum = 0;
            $('.form-group .prc10').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalsum += parseFloat(inputVal);
                }
            });
            $('#result10').text(totalsum);
        })
        $('.form-group').on('input','.prc10',function(){
            var totalsum = 0;
            $('.form-group .prc10').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalsum += parseFloat(inputVal);
                }
            });
            $('#result11').text(totalsum);
        })
    </script>

  </div>
@include('partial._foot')