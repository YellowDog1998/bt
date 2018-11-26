@extends('admin.widget.index')
@section('content')
<style type="text/css">
</style>
<div class="be-content">
  <div class="main-content container-fluid">
    <div class="row">   
      <div class="page-title">
        <div class="title_left">
          <h2 class="fa fa-1 fa-home">Trang chủ/Admin</h2>
          <h3>Danh sách Admin</h3>
          <a style="margin-bottom: 30px;" class="btn btn-primary"  href=''>Thêm quản trị viên</a><br>
        </div>
      </div>
      <div class="form-group" class="col-md-2">
        <label for="email">Tìm kiếm </label>
        <input class="form-control" id="tk">
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <table class="table12 table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 5%;">ID</th>
                        <th style="width: 15%;">Tên</th>
                        <th style="width: 20%;">Avatar</th>
                        <th style="width: 15%;">Số điện thoại</th>
                        <th style="width: 10%;">Chức vụ</th>
                        <th style="width: 20%;">Thao tác</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center"><span class="badge badge-success">1</span></td>
                        <td>Trần Đăng Sỹ </td>
                        <td><img src="admin_asset/img/icon3.png" class="rounded" alt="..."></td>
                        <td>01642512868</td>
                        <td>Nhân viên</td>
                        <td>
                          <a href="" class="btn btn-danger" title="Khoá">Tắt</a>
                          <a href="" class="btn btn-success" title="Khoá">Bật</a>
                          <a class="btn btn-warning" href="">Sửa</a>
                          <a class="btn btn-danger"  href="{{'public/admin/chitietad'}}">Xem</a>
                        </td>
                      </td>
                      </tr>
                      <tr>
                        <td class="text-center"><span class="badge badge-success">2</span></td>
                        <td>Đinh Thành An </td>
                        <td><img src="admin_asset/img/icon3.png" class="rounded" alt="..."></td>
                        <td>01642512868</td>
                        <td>Quản lý</td>
                        <td>
                          <a href="" class="btn btn-danger" title="Khoá">Tắt</a>
                          <a href="" class="btn btn-success" title="Khoá">Bật</a>
                          <a class="btn btn-warning" href="">Sửa</a>
                          <a class="btn btn-danger"  href="{{'public/admin/chitietad'}}">Xem</a>
                        </td>
                      </td>
                      </tr>
                     <tr>
                        <td class="text-center"><span class="badge badge-success">3</span></td>
                        <td>Nguyễn Văn Thuần</td>
                        <td><img src="admin_asset/img/icon3.png" class="rounded" alt="..."></td>
                        <td>01642512868</td>
                        <td>Nhân viên</td>
                        <td>
                          <a href="" class="btn btn-danger" title="Khoá">Tắt</a>
                          <a href="" class="btn btn-success" title="Khoá">Bật</a>
                          <a class="btn btn-warning" href="">Sửa</a>
                          <a class="btn btn-danger"  href="{{'public/admin/chitietad'}}">Xem</a>
                        </td>
                      </td>
                      </tr>
                        <tr>
                        <td class="text-center"><span class="badge badge-success">4</span></td>
                        <td>Nguyễn Tuấn Anh</td>
                        <td><img src="admin_asset/img/icon3.png" class="rounded" alt="..."></td>
                        <td>016429999</td>
                        <td>Quản lý</td>
                        <td>
                          <a href="" class="btn btn-danger" title="Khoá">Tắt</a>
                          <a href="" class="btn btn-success" title="Khoá">Bật</a>
                          <a class="btn btn-warning" href="">Sửa</a>
                          <a class="btn btn-danger"  href="{{'public/admin/chitiet'}}">Xem</a>
                        </td>
                      </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection
</html>


