
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
                            <h3>Total Expected Time for complete:<span id="result4"></span></h3>
                            <div id="container"></div>

                          <table id="example1 prod" class="table table-bordered table-striped">
                            <thead>
                              <th>Requirement</th>
                              <th>O</th>
                              <th>M</th>
                              <th>P</th>
                              <th>Expected Duration</th>
                              <th>Variance</th>
                              <th>Standard Deviance</th>
                             
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($requirements as $requirement)<tr>
                                <td>{{$requirement->name}}
                                <td>
                                    <input type="number" id="{{$requirement->id}}1">
                                    </div>
                                  </td>
                                  <td>

                                    <input type="number" id="{{$requirement->id}}2">
                    
                                  </td>
                                  <td>
                                    <input type="number" id="{{$requirement->id}}3"  onblur="calculate{{$requirement->id}}()" >
                    
                                  </td>
                                  <td>
                                    <div class="form-group">

                                    <input type="number" class="form-control prc" id="{{$requirement->id}}4" onclick="bellcurve()">

                                    </div>

                                    
                                </td>
                                <td>
                                    <div class="form-group">

                                    <input type="number" class="form-control " id="{{$requirement->id}}5">

                                    </div>

                                    
                                </td>
                                <td>
                                    <div class="form-group">

                                    <input type="number" class="form-control " id="{{$requirement->id}}6">

                                    </div>

                                    
                                </td>
                            </tr>@endforeach                    
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>Total</th>
                                <th id="result"></th>
                                <th id="result1"></th>
                                <td id="result3"></td>
                                <td id="result4"></td>




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
  <script type="text/javascript">
  
   calculate1 = function()
{
    var o = document.getElementById('11').value;
  var m = document.getElementById('12').value; 
  var p = document.getElementById('13').value; 
  document.getElementById('14').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
  let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('15').value = variance;
  document.getElementById('16').value = Math.sqrt(variance);
  

     
   }
   calculate2 = function()
{
    var o = document.getElementById('21').value;
  var m = document.getElementById('22').value; 
  var p = document.getElementById('23').value; 
    document.getElementById('24').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('25').value = variance;
  document.getElementById('26').value = Math.sqrt(variance);
   }
   calculate3 = function()
{
    var o = document.getElementById('31').value;
  var m = document.getElementById('32').value; 
  var p = document.getElementById('33').value; 
    document.getElementById('34').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('35').value = variance;
  document.getElementById('36').value = Math.sqrt(variance);
   }
   calculate4 = function()
{
    var o = document.getElementById('41').value;
  var m = document.getElementById('42').value; 
  var p = document.getElementById('43').value; 
    document.getElementById('44').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('45').value = variance;
  document.getElementById('46').value = Math.sqrt(variance);
   }
   calculate5 = function()
{
    var o = document.getElementById('51').value;
  var m = document.getElementById('52').value; 
  var p = document.getElementById('53').value; 
    document.getElementById('54').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('55').value = variance;
  document.getElementById('56').value = Math.sqrt(variance);
   }
   
   calculate6 = function()
{
    var o = document.getElementById('61').value;
  var m = document.getElementById('62').value; 
  var p = document.getElementById('63').value; 
    document.getElementById('64').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('65').value = variance;
  document.getElementById('66').value = Math.sqrt(variance);
   }
   calculate7 = function()
{
    var o = document.getElementById('71').value;
  var m = document.getElementById('72').value; 
  var p = document.getElementById('73').value; 
    document.getElementById('74').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('75').value = variance;
  document.getElementById('76').value = Math.sqrt(variance);
   }
   calculate8 = function()
{
    var o = document.getElementById('81').value;
  var m = document.getElementById('82').value; 
  var p = document.getElementById('83').value; 
    document.getElementById('84').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('85').value = variance;
  document.getElementById('86').value = Math.sqrt(variance);
   }
   calculate9 = function()
{
    var o = document.getElementById('91').value;
  var m = document.getElementById('92').value; 
  var p = document.getElementById('93').value; 
    document.getElementById('94').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('95').value = variance;
  document.getElementById('96').value = Math.sqrt(variance);
   }
   calculate10 = function()
{
    var o = document.getElementById('101').value;
  var m = document.getElementById('102').value; 
  var p = document.getElementById('103').value; 
    document.getElementById('104').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('105').value = variance;
  document.getElementById('106').value = Math.sqrt(variance);
   }

   calculate11 = function()
{
    var o = document.getElementById('111').value;
  var m = document.getElementById('112').value; 
  var p = document.getElementById('113').value; 
    document.getElementById('114').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('115').value = variance;
  document.getElementById('116').value = Math.sqrt(variance);
   }
   calculate12 = function()
{
    var o = document.getElementById('121').value;
  var m = document.getElementById('122').value; 
  var p = document.getElementById('123').value; 
    document.getElementById('124').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('125').value = variance;
  document.getElementById('126').value = Math.sqrt(variance);
   }
   calculate13 = function()
{
    var o = document.getElementById('131').value;
  var m = document.getElementById('132').value; 
  var p = document.getElementById('133').value; 
    document.getElementById('134').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('135').value = variance;
  document.getElementById('136').value = Math.sqrt(variance);
   }
   calculate14 = function()
{
    var o = document.getElementById('141').value;
  var m = document.getElementById('142').value; 
  var p = document.getElementById('143').value; 
    document.getElementById('144').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('145').value = variance;
  document.getElementById('146').value = Math.sqrt(variance);
   }
   calculate15 = function()
{
    var o = document.getElementById('151').value;
  var m = document.getElementById('152').value; 
  var p = document.getElementById('153').value; 
    document.getElementById('154').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('155').value = variance;
  document.getElementById('156').value = Math.sqrt(variance);
   }
   calculate16 = function()
{
    var o = document.getElementById('161').value;
  var m = document.getElementById('162').value; 
  var p = document.getElementById('163').value; 
    document.getElementById('164').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('165').value = variance;
  document.getElementById('166').value = Math.sqrt(variance);
   }
   calculate17 = function()
{
    var o = document.getElementById('171').value;
  var m = document.getElementById('172').value; 
  var p = document.getElementById('173').value; 
    document.getElementById('174').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('175').value = variance;
  document.getElementById('176').value = Math.sqrt(variance);
   }
   calculate18 = function()
{
    var o = document.getElementById('181').value;
  var m = document.getElementById('182').value; 
  var p = document.getElementById('183').value; 
    document.getElementById('184').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('185').value = variance;
  document.getElementById('186').value = Math.sqrt(variance);
   }
   calculate19 = function()
{
    var o = document.getElementById('191').value;
  var m = document.getElementById('192').value; 
  var p = document.getElementById('193').value; 
    document.getElementById('194').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('195').value = variance;
  document.getElementById('196').value = Math.sqrt(variance);
   }
   calculate20 = function()
{
    var o = document.getElementById('201').value;
  var m = document.getElementById('202').value; 
  var p = document.getElementById('203').value; 
    document.getElementById('204').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('205').value = variance;
  document.getElementById('206').value = Math.sqrt(variance);
   }
   calculate21 = function()
{
    var o = document.getElementById('211').value;
  var m = document.getElementById('212').value; 
  var p = document.getElementById('213').value; 
    document.getElementById('214').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('215').value = variance;
  document.getElementById('216').value = Math.sqrt(variance);
   }
   calculate22 = function()
{
    var o = document.getElementById('221').value;
  var m = document.getElementById('222').value; 
  var p = document.getElementById('223').value; 
    document.getElementById('224').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('225').value = variance;
  document.getElementById('226').value = Math.sqrt(variance);
   }
   calculate23 = function()
{
    var o = document.getElementById('231').value;
  var m = document.getElementById('232').value; 
  var p = document.getElementById('233').value; 
    document.getElementById('234').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('235').value = variance;
  document.getElementById('236').value = Math.sqrt(variance);
   }
   calculate24 = function()
{
    var o = document.getElementById('241').value;
  var m = document.getElementById('242').value; 
  var p = document.getElementById('243').value; 
    document.getElementById('244').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('245').value = variance;
  document.getElementById('246').value = Math.sqrt(variance);
   }
   calculate25 = function()
{
    var o = document.getElementById('251').value;
  var m = document.getElementById('252').value; 
  var p = document.getElementById('253').value; 
    document.getElementById('254').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('255').value = variance;
  document.getElementById('256').value = Math.sqrt(variance);
   }
   calculate26 = function()
{
    var o = document.getElementById('261').value;
  var m = document.getElementById('262').value; 
  var p = document.getElementById('263').value; 
    document.getElementById('264').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('265').value = variance;
  document.getElementById('266').value = Math.sqrt(variance);
   }
   calculate27 = function()
{
    var o = document.getElementById('271').value;
  var m = document.getElementById('272').value; 
  var p = document.getElementById('273').value; 
    document.getElementById('274').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('275').value = variance;
  document.getElementById('276').value = Math.sqrt(variance);
   }
   calculate28 = function()
{
    var o = document.getElementById('281').value;
  var m = document.getElementById('282').value; 
  var p = document.getElementById('283').value; 
    document.getElementById('284').value = parseInt(parseInt(o)+parseInt(4*m)+parseInt(p))/6;
    let variance = ((parseInt(p)-parseInt(o))/6)**2; 
  document.getElementById('285').value = variance;
  document.getElementById('286').value = Math.sqrt(variance);
   }
   $('.prc').focus('input',function(){
            var totalsum = 0;
            $('.form-group .prc').each(function(){
                var inputVal = $(this).val();
                if($.isNumeric(inputVal)){
                    totalsum += parseFloat(inputVal);
                }
            });
            $('#result4').text(totalsum);
        })

bellcurve = function() {
  let b = Number(document.getElementById(24).value);
  let c = Number(document.getElementById(34).value);
  let d = Number(document.getElementById(44).value);
  let e = Number(document.getElementById(54).value);
  let f = Number(document.getElementById(64).value);
  let g = Number(document.getElementById(74).value);
 let h = Number(document.getElementById(84).value);
 let i = Number(document.getElementById(94).value);
 let j = Number(document.getElementById(104).value);
 let k = Number(document.getElementById(114).value);
 let l = Number(document.getElementById(124).value);
 let n = Number(document.getElementById(144).value);
 let o = Number(document.getElementById(154).value);
 let p = Number(document.getElementById(164).value);
 let q = Number(document.getElementById(174).value);
  let r = Number(document.getElementById(184).value);
  let s = Number(document.getElementById(194).value);
  let t = Number(document.getElementById(204).value);
  let u = Number(document.getElementById(214).value);
  let v = Number(document.getElementById(224).value);
  let w = Number(document.getElementById(234).value);
  let x = Number(document.getElementById(244).value);
  let y = Number(document.getElementById(254).value);
  let z = Number(document.getElementById(264).value);
  let a1 = Number(document.getElementById(274).value);
  let a2 = Number(document.getElementById(284).value);
  var data = [b,c,d,e,f,g,h,i,j,k,l,n,o,p,q,r,s,t,u,v,w,x,y,z,a1,a2];

Highcharts.chart('container', {

    title: {
        text: 'Bell curve'
    },

    xAxis: [{
        title: {
            text: 'Data'
        },
        alignTicks: false
    }, {
        title: {
            text: 'Bell curve'
        },
        alignTicks: false,
        opposite: true
    }],

    yAxis: [{
        title: { text: 'Data' }
    }, {
        title: { text: 'Bell curve' },
        opposite: true
    }],

    series: [{
        name: 'Bell curve',
        type: 'bellcurve',
        xAxis: 1,
        yAxis: 1,
        baseSeries: 1,
        zIndex: -1
    }, {
        name: 'Data',
        type: 'scatter',
        data: data,
        accessibility: {
            exposeAsGroupOnly: true
        },
        marker: {
            radius: 1.5
        }
    }]
});
}

</script>
  </div>
@include('partial._foot')