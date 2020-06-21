
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
                        <div id="gantt_here" style='width:100%; height:1000px;'></div>
                        <script type="text/javascript">
                            gantt.config.date_format = "%Y-%m-%d %H:%i:%s";
 
 gantt.init("gantt_here");
  
 gantt.load("/api/data");
  
 var dp = new gantt.dataProcessor("/api");
 dp.init(gantt);
 dp.setTransactionMode("REST");
                        </script>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
  </div>
@include('partial._foot')