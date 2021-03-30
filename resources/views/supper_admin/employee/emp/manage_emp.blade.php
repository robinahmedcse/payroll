@extends('supper_admin.master')
@section('x')
<div class="right_col" role="main">
   <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Employee<small>Management</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <!-- <p class="text-muted font-13 m-b-30">
                            KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.
                          </p> -->
                          <div>
                              @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ session::get('success') }} 
                                    </div>
                                @endif 
                                
                           
                              </div> 

                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>name</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                                <!-- <tr>
                                    <td>1</td>
                                    <td>ab10</td>
                                    <td>photo</td>
                                    <td>Designation</td>
                                    <td>Department</td>
                                    <td></td>
                                </tr> -->
                            <tbody>
                     
                            </tbody>
                          </table>


                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>





</div>   



             
@endsection