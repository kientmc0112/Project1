@extends('admin.layouts.main')
@section('title', 'List Course')
@section('content')
    <!-- content -->
    <div id="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-user"></i>
            <span>List User</span>
            <div class="card-body">
              <div>
                <!--/.row-->
                          <div class="col-sm-12 col-sm-offset-3 col-lg-12 col-lg-offset-2 main">
                            <!--/.row-->
                            <div class="row">
                              <div class="col-md-12">
                                <div class="panel panel-default">
                                  <div class="panel-body">
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="">Category:</label>
                                          <select class="form-control" name="" id="">
                                            <option>----ROOT----</option>
                                            <option>Nam</option>
                                            <option>---|Áo khoác nam</option>
                                            <option>---|---|Áo khoác nam</option>
                                            <option>Nữ</option>
                                            <option>---|Áo khoác nữ</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                          <label for="">Name</label>
                                          <input type="text" class="form-control" name="name" id="">
                                        </div>
                                        <div class="form-group">
                                          <label for="">Status</label>
                                          <select class="form-control" name="" id="">
                                            <option>----ROOT----</option>
                                            <option>Start</option>
                                            <option>Finish</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Subject</label>
                                            <select class="form-control" name="" id="">
                                              <option>----ROOT----</option>
                                              <option>Start</option>
                                              <option>Finish</option>
                                            </select>
                                          </div>
                                        <div class="form-group">
                                          <label for="">Description</label>
                                          <textarea class="form-control" name="description" id="" cols="30"
                                            rows="10"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Thêm danh mục</button>
                                      </div>
                                      <div class="col-md-6">
                                        <h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
                                        <div class="vertical-menu">
                                          <div class="item-menu active">Danh mục </div>
                                          <div class="item-menu"><span>Nam</span>
                                            <div class="category-fix">
                                              <a class="btn-category btn-primary" href="editcategory.html"><i
                                                  class="fa fa-edit"></i></a>
                                              <a class="btn-category btn-danger" href="#"><i
                                                  class="fas fa-times"></i></i></a>
                                            </div>
                                          </div>
                                          <div class="item-menu"><span>---|Áo khoác Nam</span>
                                            <div class="category-fix">
                                              <a class="btn-category btn-primary" href="editcategory.html"><i
                                                  class="fa fa-edit"></i></a>
                                              <a class="btn-category btn-danger" href="#"><i
                                                  class="fas fa-times"></i></i></a>
                                            </div>
                                          </div>
                                          <div class="item-menu"><span>---|---|Áo khoác Nam (Dành cho việc mở
                                              rộng)</span>
                                            <div class="category-fix">
                                              <a class="btn-category btn-primary" href="editcategory.html"><i
                                                  class="fa fa-edit"></i></a>
                                              <a class="btn-category btn-danger" href="#"><i
                                                  class="fas fa-times"></i></i></a>
                                            </div>
                                          </div>
                                          <div class="item-menu"><span>Nữ</span>
                                            <div class="category-fix">
                                              <a class="btn-category btn-primary" href="editcategory.html"><i
                                                  class="fa fa-edit"></i></a>
                                              <a class="btn-category btn-danger" href="#"><i
                                                  class="fas fa-times"></i></i></a>
                                            </div>
                                          </div>
                                          <div class="item-menu"><span>---|Áo khoác Nữ</span>
                                            <div class="category-fix">
                                              <a class="btn-category btn-primary" href="editcategory.html"><i
                                                  class="fa fa-edit"></i></a>
                                              <a class="btn-category btn-danger" href="#"><i
                                                  class="fas fa-times"></i></i></a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--/.row-->
                          </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2019</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- end content -->
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection
