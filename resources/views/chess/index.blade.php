
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
                    <div id="board2" style="width: 400px"></div>
                    <button id="startBtn">Start Position</button>
                    <button id="clearBtn">Clear Board</button>
                    <script>
                        // --- Begin Example JS --------------------------------------------------------
                            
                            

                        var board2 = Chessboard('board2', {
  draggable: true,
  dropOffBoard: 'trash',
  sparePieces: true
})

$('#startBtn').on('click', board2.start)
$('#clearBtn').on('click', board2.clear)
              
                            // --- End Example JS ----------------------------------------------------------
                        </script>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@include('partial._foot')