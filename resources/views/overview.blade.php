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
                              <th>Requirement No</th>
                            <th>Functional Category</th>
                              <th>Total</th>
                              <th>Asset Discovery</th>
                              <th>Security Packaging</th>
                              <th>Test</th>
                              <th>Sucessfully tested on FAT client</th>
                              <th>Sucessfully tested on TS client</th>
                              <th>Sucessfully tested on Backend Windows</th>
                              <th>Sucessfully tested on Backend Linux</th>
                              <th>Vendor McAfee</th>
                              <th>Vendor Other</th>
                              <th>In Operation</th>
                              <th>Harmonized</th>
                              
                             
                            </tr>
                            </thead>
                            <tbody>
                           @foreach ($requirements as $item)
                           <tr>
                           <td>{{$item->name}}</td>               
                             <td>  {{$item->subrequirement_count}}                          
                            </td>
                             <td><select id="cars" name="cars">
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="fiat">3</option>
                                <option value="audi">4</option>
                                <option value="audi">5</option>
                                <option value="audi">5</option>
                                <option value="audi">7</option>
                                <option value="audi">8</option>
                                <option value="audi">9</option>
                                <option value="audi">10</option>
                              </select></td>
                              <td><select id="cars" name="cars">
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="fiat">3</option>
                                <option value="audi">4</option>
                                <option value="audi">5</option>
                                <option value="audi">5</option>
                                <option value="audi">7</option>
                                <option value="audi">8</option>
                                <option value="audi">9</option>
                                <option value="audi">10</option>
                              </select></td>
                              <td><select id="cars" name="cars">
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="fiat">3</option>
                                <option value="audi">4</option>
                                <option value="audi">5</option>
                                <option value="audi">5</option>
                                <option value="audi">7</option>
                                <option value="audi">8</option>
                                <option value="audi">9</option>
                                <option value="audi">10</option>
                              </select></td>
                              <td><select id="cars" name="cars">
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="fiat">3</option>
                                <option value="audi">4</option>
                                <option value="audi">5</option>
                                <option value="audi">5</option>
                                <option value="audi">7</option>
                                <option value="audi">8</option>
                                <option value="audi">9</option>
                                <option value="audi">10</option>
                              </select></td>
                              <td><select id="cars" name="cars">
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="fiat">3</option>
                                <option value="audi">4</option>
                                <option value="audi">5</option>
                                <option value="audi">5</option>
                                <option value="audi">7</option>
                                <option value="audi">8</option>
                                <option value="audi">9</option>
                                <option value="audi">10</option>
                              </select></td>
                              <td><select id="cars" name="cars">
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="fiat">3</option>
                                <option value="audi">4</option>
                                <option value="audi">5</option>
                                <option value="audi">5</option>
                                <option value="audi">7</option>
                                <option value="audi">8</option>
                                <option value="audi">9</option>
                                <option value="audi">10</option>
                              </select></td>
                              <td><select id="cars" name="cars">
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="fiat">3</option>
                                <option value="audi">4</option>
                                <option value="audi">5</option>
                                <option value="audi">5</option>
                                <option value="audi">7</option>
                                <option value="audi">8</option>
                                <option value="audi">9</option>
                                <option value="audi">10</option>
                              </select></td>
                              <td><select id="cars" name="cars">
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="fiat">3</option>
                                <option value="audi">4</option>
                                <option value="audi">5</option>
                                <option value="audi">5</option>
                                <option value="audi">7</option>
                                <option value="audi">8</option>
                                <option value="audi">9</option>
                                <option value="audi">10</option>
                              </select></td>
                              <td><select id="cars" name="cars">
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="fiat">3</option>
                                <option value="audi">4</option>
                                <option value="audi">5</option>
                                <option value="audi">5</option>
                                <option value="audi">7</option>
                                <option value="audi">8</option>
                                <option value="audi">9</option>
                                <option value="audi">10</option>
                              </select></td>
                              <td><select id="cars" name="cars">
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="fiat">3</option>
                                <option value="audi">4</option>
                                <option value="audi">5</option>
                                <option value="audi">5</option>
                                <option value="audi">7</option>
                                <option value="audi">8</option>
                                <option value="audi">9</option>
                                <option value="audi">10</option>
                              </select></td>
                              <td><select id="cars" name="cars">
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="fiat">3</option>
                                <option value="audi">4</option>
                                <option value="audi">5</option>
                                <option value="audi">5</option>
                                <option value="audi">7</option>
                                <option value="audi">8</option>
                                <option value="audi">9</option>
                                <option value="audi">10</option>
                              </select></td>
                              <td><select id="cars" name="cars">
                                <option value="volvo">1</option>
                                <option value="saab">2</option>
                                <option value="fiat">3</option>
                                <option value="audi">4</option>
                                <option value="audi">5</option>
                                <option value="audi">5</option>
                                <option value="audi">7</option>
                                <option value="audi">8</option>
                                <option value="audi">9</option>
                                <option value="audi">10</option>
                              </select></td>
                            
                        </tr>
                           @endforeach
                           
                            
                            </tbody>
                            <tfoot>
                            <tr>
                              <th></th>
                              <th>Total</th>
                                <th></th>
                                
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
    

  </div>
@include('partial._foot')