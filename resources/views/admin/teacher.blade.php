@extends('admin.layouts.app')
@section('admin.active.teacher','active')
@section('title-name','老師介紹')
@section('content')
@inject('TeacherPresenter','App\Presenters\Admin\TeacherPresenter')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>老師介紹</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">首頁</a></li>
                    <li class="breadcrumb-item active">老師介紹</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-warning">
                <h5>注意!!</h5>

                <p>若要修改老師照片及老師基本資訊須至原始碼當中修改，請詳閱使用說明書後方能修改，本處僅修改具有表格之內容!!!</p>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{ asset('assets/img/teacher.jpg') }}"
                            alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">楊文祿</h3>

                    <p class="text-muted text-center">Wen-Luh Yang</p>

                    <a href="#" class="btn btn-primary btn-block"><b>照片上傳</b></a>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">基本資訊</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong><i class="fas fa-phone mr-1"></i> 校內分機</strong>

                    <br>
                    <div class="row" style="margin-top: 0.5em;">
                        <div class="col-md-9">
                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text">#</span>
                                </div>
                                <input class="form-control" type="text" placeholder="" id="teacher_phone"
                                    value="{{ $basic_info->where('type','=','phone')->first()->value }}">
                            </div>

                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-outline-primary " id="teacher_phone_btn">更新</button>
                        </div>
                    </div>
                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> 辦公室</strong>

                    <div class="row" style="margin-top: 0.5em;">
                        <div class="col-md-9">
                            <div class="input-group">

                                <input class="form-control" type="text" placeholder=""
                                    value="{{ $basic_info->where('type','=','office')->first()->value }}"
                                    id="teacher_office">
                            </div>

                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-outline-primary " id="teacher_office_btn">更新</button>
                        </div>
                    </div>

                    <hr>

                    <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                    <div class="row" style="margin-top: 0.5em;">
                        <div class="col-md-9">
                            <div class="input-group">

                                <input class="form-control" type="text" placeholder=""
                                    value="{{ $basic_info->where('type','=','email')->first()->value }}"
                                    id="teacher_email">
                            </div>

                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-outline-primary " id="teacher_email_btn">更新</button>
                        </div>
                    </div>

                    <hr>

                    <strong><i class="fas fa-pencil-alt mr-1"></i> 專長</strong> &nbsp;&nbsp;
                    <button class="btn btn-outline-primary btn-sm" id="add_teacher_skill_item_btn">新增專長</button>
                    <button class="btn btn-outline-success btn-sm" id="update_teacher_skill_btn">更新</button>

                    <div class="row" style="margin-top: 0.5em;">
                        <div class="col-md-10">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>專長內容</th>
                                        <th width="10%">操作</th>
                                    </tr>
                                </thead>
                                <tbody id="table_teacher_skill">
                                    {!! $TeacherPresenter->setSkill($skill) !!}
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <hr>
                    <strong><i class="fas fa-book mr-1"></i> 學歷</strong> &nbsp;&nbsp;
                    <button class="btn btn-outline-primary btn-sm" id="add_teacher_education_item_btn">新增學歷</button>
                    <button class="btn btn-outline-success btn-sm" id="update_teacher_education_btn">更新</button>

                    <div class="row" style="margin-top: 0.5em;">
                        <div class="col-md-10">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>學校</th>
                                        <th>系所</th>
                                        <th>學位</th>
                                        <th>刪除</th>
                                    </tr>
                                </thead>
                                <tbody id="table_teacher_education">
                                    {!! $TeacherPresenter->setEducation($educations) !!}
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">計數器 <span
                            class="badge badge-pill badge-warning">{{ $counter->count() }}</span></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-plus"></i>

                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modal-counter">新增計數器</button><br>
                    <table class="table table-bordered" style="margin-top: 0.7em;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>名稱</th>
                                <th>數量</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            {!! $TeacherPresenter->setCounter($counter) !!}
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- 經歷 -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">經歷 <span
                            class="badge badge-pill badge-warning">{{ $experiences->count() }}</span></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-plus"></i>

                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modal-experience-create">新增經歷</button><br>
                    <table class="table table-bordered" style="margin-top: 0.7em;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>服務系所 Department</th>
                                <th>職稱 Job</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            {!! $TeacherPresenter->setExperience($experiences) !!}
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- 期刊論文 -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">期刊論文</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-plus"></i>

                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modal-article-create">新增期刊論文</button><br>
                    <table class="table table-bordered" style="margin-top: 0.7em;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>作者 Authors</th>
                                <th>標題 Title</th>
                                <th>出處 Journal</th>
                                <th width="8%">發表時間 Time</th>
                                <th width="8%">索引 Citation Index</th>
                                <th width="12%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            {!! $TeacherPresenter->setArticle($articles) !!}
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- 科技部計畫 -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">科技部計畫</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modal-most-create">新增科技部計畫</button><br>
                    <table class="table table-bordered" style="margin-top: 0.7em;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>計畫名稱 Name</th>
                                <th>計畫日期(起) Start Date</th>
                                <th>計畫日期(迄) End Date</th>
                                <th>計畫編號 Project Number</th>
                                <th>擔任工作 Job</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            {!! $TeacherPresenter->setMostProject($most_projects) !!}
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>


    <!-- 會議論文 -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">會議論文</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-plus"></i>

                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modal-proceeding-create">新增期刊論文</button><br>
                    <table class="table table-bordered" style="margin-top: 0.7em;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>作者 Authors</th>
                                <th>標題 Title</th>
                                <th>出處 Journal</th>
                                <th>發表時間 Time</th>
                                <th>索引 Citation Index</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- 核准專利 -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">核准專利</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                            <i class="fas fa-plus"></i>

                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#modal-experience-create">新增期刊論文</button><br>
                    <table class="table table-bordered" style="margin-top: 0.7em;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>作者 Authors</th>
                                <th>標題 Title</th>
                                <th>出處 Journal</th>
                                <th>發表時間 Time</th>
                                <th>索引 Citation Index</th>
                            </tr>
                        </thead>
                        <tbody>
                            {!! $TeacherPresenter->setArticle($proceedings) !!}
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>


    <div class="modal fade" id="modal-counter">
        <div class="modal-dialog">
            <form action="/admin/teacher/createcounter" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">新增計數器</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="name" placeholder="計數名稱">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" name="count" placeholder="計數數量">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal fade" id="modal-experience-create">
        <div class="modal-dialog">
            <form action="/admin/teacher/createexperience" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">新增經驗</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="department" placeholder="服務系所">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="job" placeholder="職稱">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- create Article -->
    <!-- 作者 Authors
         標題 Title
         出處 Journal
         發表時間 Time
         索引 Citation Index -->
    <div class="modal fade" id="modal-article-create">
        <div class="modal-dialog">
            <form action="/admin/teacher/createarticle" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">新增期刊論文</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="author" placeholder="作者(們)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="title" placeholder="標題">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="journal" placeholder="出處">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="time" placeholder="發表時間">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="citation_index" placeholder="索引">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- create Article -->
    <!-- 作者 Authors
         標題 Title
         出處 Journal
         發表時間 Time
         索引 Citation Index -->
    <div class="modal fade" id="modal-most-create">
        <div class="modal-dialog">
            <form action="/admin/teacher/createmost" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">新增科技部計畫</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="name" placeholder="計畫名稱">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="start_date" placeholder="計畫日期(起)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="end_date" placeholder="計畫日期(止)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="project_number" placeholder="計畫編號">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="job" placeholder="擔任工作">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- create Proceeding -->
    <!-- 作者 Authors
         標題 Title
         出處 Journal
         發表時間 Time
         索引 Citation Index -->
    <div class="modal fade" id="modal-proceeding-create">
        <div class="modal-dialog">
            <form action="/admin/teacher/createproceeding" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">新增期刊論文</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="author" placeholder="作者(們)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="title" placeholder="標題">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="journal" placeholder="會議名稱">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="time" placeholder="發表時間">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="citation_index" placeholder="索引">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-experience-modify">
        <div class="modal-dialog">
            <form action="">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">修改經驗</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="mobile" placeholder="服務系所">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="mobile" placeholder="職稱">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="">
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</section>
<!-- /.content -->
@endsection

@section('custom_js')
<script src="{{ asset('dist/js/admin/teacher.js') }}"></script>
@if(session('success'))
<script>
    alert('成功');


</script>
@endif

@if(session('error'))
<script>
    alert('{{ session('error') }}');
</script>
@endif
@endsection