@extends('layouts.master')
@section('css')

<head>
    <style>
    div.dataTables_wrapper div.dataTables_filter {

        display: none;
    }
    </style>
</head>
@endsection
@section('content')
@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show w-75 m-auto mt-1" role="alert">
    <strong>Error:</strong>
    <ul>

        <li>{{session()->get('error')}}</li>

    </ul>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<section class="">

    <div class="row">

        <div class="col-md-12 p-3">

            <div class="tab-content mt-3">
                <div class="active tab-pane" id="personalinformation">
                    <div class="card-body_dash p-3">
                        <div class=" pr-3 pl-3 row d-flex justify-content-between" style="align-items:center;">

                            <div class="col-md-6">
                                <p class=""></p>

                            </div>



                            <!-- Button trigger modal -->
                            <div class="col-md-6 d-flex justify-content-end">
                                <button type="button" class="btn tall_btn btn-rana btn-cat mb-3" data-toggle="modal"
                                    data-target="#exampleModal">
                                    أنشا توصية</button>

                            </div> <!-- Modal -->

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="{{route('recommends.store')}}" method="post"
                                            enctype='multipart/form-data'>
                                            {{csrf_field()}}
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    أنشا توصية

                                                </h5>
                                                <!-- <button type="button" class="close"
                                                    data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button> -->
                                            </div>
                                            <div class="modal-body">

                                                <div class="form-group">

                                                    <label for="exampleInputEmail1"> العنوان
                                                    </label>
                                                    <input type="text" name="title" value="" class="form-control"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                                        placeholder="ادخل العنوان ">
                                                    <br>

                                                </div>

                                                <div class="form-group">

                                                    <label for="exampleInputEmail1"> المقالة
                                                    </label>
                                                    <textarea type="text" name="text" value="" class="form-control"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                                        placeholder="ادخل المقالة "></textarea>
                                                    <br>

                                                </div>




                                                <div class="form-group">
                                                    <label class="col-form-label text-md-right"
                                                        for="image">الصورة</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="image"
                                                                name="image">
                                                            <label class="custom-file-label" for="image"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="submit" class="btn btn-rana">حفظ</button>
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">الغاء</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="card-body ">

                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="example1"
                                                        class="table table-bordered table-striped dataTable text-center dtr-inline"
                                                        role="grid" aria-describedby="example1_info">
                                                        <thead>
                                                            <tr role="row" class="card-header_dash">

                                                                <th>الصورة </th>
                                                                <th>العنوان </th>
                                                                <th>المقالة </th>
                                                                <th>التاريخ </th>
                                                                <th>التحكم </th>




                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach($recommends as $data)
                                                            <tr>
                                                                <td>
                                                                    @if($data!=null)
                                                                    <img src="{{asset('public/assets/images/recommends/'.$data->image)}}"
                                                                        class="img-circle">
                                                                    @endif
                                                                </td>
                                                                <td>{{$data->title}}</td>
                                                                <td>{{$data->text}}</td>
                                                                <td>{{$data->date}}</td>



                                                                <td class="noExl">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-sm "
                                                                        data-toggle="modal"
                                                                        data-target="#edit_post{{$data->id}}">
                                                                        <span class="fas fa-edit"></span> </button>

                                                                    <div class="modal fade" id="edit_post{{$data->id}}"
                                                                        tabindex="-1" role="dialog"
                                                                        aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <form
                                                                                    action="{{route('posts.update',$data->id)}}"
                                                                                    method="post"
                                                                                    enctype='multipart/form-data'>
                                                                                    {{csrf_field()}}
                                                                                    @method('PUT')
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="exampleModalLabel">
                                                                                            أنشا توصية

                                                                                        </h5>
                                                                                        <!-- <button type="button" class="close"
                                                    data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button> -->
                                                                                    </div>
                                                                                    <div class="modal-body">

                                                                                        <div class="form-group">

                                                                                            <label
                                                                                                for="exampleInputEmail1">
                                                                                                العنوان
                                                                                            </label>
                                                                                            <input type="text"
                                                                                                name="title"
                                                                                                value="{{$data->title}}"
                                                                                                class="form-control"
                                                                                                id="exampleInputEmail1"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="ادخل العنوان ">
                                                                                            <br>

                                                                                        </div>

                                                                                        <div class="form-group">

                                                                                            <label
                                                                                                for="exampleInputEmail1">
                                                                                                المقالة
                                                                                            </label>
                                                                                            <textarea type="text"
                                                                                                name="text" value=""
                                                                                                class="form-control"
                                                                                                id="exampleInputEmail1"
                                                                                                aria-describedby="emailHelp"
                                                                                                placeholder="ادخل المقالة ">{{$data->text}}</textarea>
                                                                                            <br>

                                                                                        </div>




                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="col-form-label text-md-right"
                                                                                                for="image">الصورة</label>
                                                                                            <div class="input-group">
                                                                                                <div
                                                                                                    class="custom-file">
                                                                                                    <input type="file"
                                                                                                        class="custom-file-input"
                                                                                                        id="image"
                                                                                                        name="image">
                                                                                                    <label
                                                                                                        class="custom-file-label"
                                                                                                        for="image">{{$data->image}}</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">

                                                                                        <button type="submit"
                                                                                            class="btn btn-rana">حفظ</button>
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-dismiss="modal">الغاء</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!----delete model---->
                                                                    <button type="button" class="btn btn-danger btn-sm"
                                                                        ; data-toggle="modal"
                                                                        data-target="#del_post{{$data->id}}"><span
                                                                            class="fas fa-trash"></span></button>

                                                                    <!-- Modal -->
                                                                    <div id="del_post{{$data->id}}" class="modal fade"
                                                                        role="dialog">
                                                                        <div class="modal-dialog">

                                                                            <!-- Modal content-->
                                                                            <div class="modal-content">
                                                                                <form
                                                                                    action="{{ route('posts.destroy',$data->id) }}"
                                                                                    method="post">

                                                                                    {{ csrf_field() }}
                                                                                    {{ method_field('delete') }}

                                                                                    <div class="modal-body">
                                                                                        <h4>هل متاكد من الحذف
                                                                                            ?
                                                                                        </h4>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <input type="submit" value="نعم"
                                                                                            class="btn btn-primary">
                                                                                        <button type="button"
                                                                                            class="btn btn-info"
                                                                                            data-dismiss="modal">لا</button>

                                                                                    </div>
                                                                                </form>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <!--end Modal -->
                                                                </td>

                                                            </tr>
                                                            @endforeach

                                                        </tbody>
                                                        <tfoot></tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center mt-3">
                                        <div class="col-12 d-flex justify-content-center ">
                                            {!!$recommends->links();!!}
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection