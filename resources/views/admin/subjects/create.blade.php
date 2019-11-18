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
                                                        <table id="input-courses" class="table table-boderred">
                                                            <tr>
                                                                <td><select class="form-control" name="course_id[]" id="course_id">
                                                                        @foreach ($subjects as $subject)
                                                                            <option value="{{ $subject->id }}">---- {{ $subject->name }} ----</option>    
                                                                        @endforeach
                                                                    </select></td>
                                                                <td><button class="btn btn-success"
                                                                        id="add" type="button" name="add"><i class="fas fa-plus"></i></button>
                                                                </td>
                                                            </tr>
                                                        </table>
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
                                                        <textarea class="form-control" name="description" id=""
                                                            cols="30" rows="10"></textarea>
                                                    </div>
                                                    <button type="button" class="btn btn-primary">Thêm danh mục</button>
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
