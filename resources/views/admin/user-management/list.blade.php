@extends('admin.layouts.master')

@section('header')
<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">پنل</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>نمایش نوشته ها</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>


    <!-- Delete This after download -->
    {{-- <a href="https://github.com/hosseinizadeh/AdminLTE_Persian" class="btn hidden-xs" style="margin:6px 100px;padding:9px 50px;background-color:#d61577;border-color:#ad0b5d;font-weight:bold;color:#FFF">دانلود رایگان قالب</a> --}}
    <!-- End Delete-->



    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        {{-- <li class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
            <span class="label label-success">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">۴ پیام خوانده نشده</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li><!-- start message -->
                  <a href="#">
                    <div class="pull-left">
                      <img src="/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <h4>
                      علیرضا
                      <small><i class="fa fa-clock-o"></i> ۵ دقیقه پیش</small>
                    </h4>
                    <p>متن پیام</p>
                  </a>
                </li>
                <!-- end message -->
                <li>
                  <a href="#">
                    <div class="pull-left">
                      <img src="/admin/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                    </div>
                    <h4>
                      نگین
                      <small><i class="fa fa-clock-o"></i> ۲ ساعت پیش</small>
                    </h4>
                    <p>متن پیام</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="pull-left">
                      <img src="/admin/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                    </div>
                    <h4>
                      نسترن
                      <small><i class="fa fa-clock-o"></i> امروز</small>
                    </h4>
                    <p>متن پیام</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="pull-left">
                      <img src="/admin/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                    </div>
                    <h4>
                      نگین
                      <small><i class="fa fa-clock-o"></i> دیروز</small>
                    </h4>
                    <p>متن پیام</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="pull-left">
                      <img src="/admin/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                    </div>
                    <h4>
                      نسترن
                      <small><i class="fa fa-clock-o"></i> ۲ روز پیش</small>
                    </h4>
                    <p>متن پیام</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">نمایش تمام پیام ها</a></li>
          </ul>
        </li> --}}
        <!-- Notifications: style can be found in dropdown.less -->
        {{-- <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">۱۰</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">۱۰ اعلان جدید</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li>
                  <a href="#">
                    <i class="fa fa-users text-aqua"></i> ۵ کاربر جدید ثبت نام کردند
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-warning text-yellow"></i> اخطار دقت کنید
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-users text-red"></i> ۴ کاربر جدید ثبت نام کردند
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-shopping-cart text-green"></i> ۲۵ سفارش جدید
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-user text-red"></i> نام کاربریتان را تغییر دادید
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">نمایش همه</a></li>
          </ul>
        </li> --}}
        <!-- Tasks: style can be found in dropdown.less -->
        {{-- <li class="dropdown tasks-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-flag-o"></i>
            <span class="label label-danger">۹</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">۹ کار برای انجام دارید</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      ساخت دکمه
                      <small class="pull-right">20%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                           aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">20% تکمیل شده</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      ساخت قالب جدید
                      <small class="pull-right">40%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                           aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">40% تکمیل شده</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      تبلیغات
                      <small class="pull-right">60%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                           aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">60% تکمیل شده</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      ساخت صفحه فرود
                      <small class="pull-right">80%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                           aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">80% تکمیل شده</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
              </ul>
            </li>
            <li class="footer">
              <a href="#">نمایش همه</a>
            </li>
          </ul>
        </li> --}}
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="/admin/img/user2-160x160.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs">پیام کمرزرین</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="/admin/img/user2-160x160.jpg" class="img-circle" alt="User Image">

              <p style="color: black;">
                پیام کمرزرین
                <small>مدیریت کل سایت</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="row">
                <div class="col-xs-4 text-center">
                  <a href="#">صفحه من</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">فروش</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">دوستان</a>
                </div>
              </div>
              <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">پروفایل</a>
              </div>
              <div class="pull-right">
                <a href="#" class="btn btn-default btn-flat">خروج</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
@endsection

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      عنوان صفحه
      <small>توضیحات</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
      <li class="active">صفحه</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">

    <div class="container">
      <p>لیست پست های تایید شده</p>  
      <input class="form-control" id="myInput" type="text" placeholder="Search..">
      <br>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>شماره کاربر</th>
            <th>نام: </th>
            <th>نام خانوادگی: </th>
            <th>نام پدر: </th>
            <th>کد ملی: </th>
            <th>شماره همراه: </th>
            <th>ایمیل: </th>
            <th>کد پستی: </th>
            <th>آدرس: </th>
          </tr>
        </thead>
        <tbody id="myTable">
          @foreach ($user as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->lastname }}</td>
            <td>{{ $user->fathername }}</td>
            <td>{{ $user->nationalcode }}</td>
            <td>{{ $user->phonenumber }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->postalcode }}</td>
            <td>{{ $user->address }}</td>
            <td>
              <form action="/admin/user-management/{{ $user->id }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger">delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
      <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
    </div>

  </section>
</div>
@endsection

@section('footer')
  <footer class="main-footer text-left">
    <strong>&copy;تمامی حقوق مادی و معنوی این پنل متعلق به پیام کمرزرین می باشد</strong>
  </footer>
@endsection