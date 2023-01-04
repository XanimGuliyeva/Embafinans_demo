@extends('admin.index')
@section('admin')
    <div id="category" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kateqoriya əlavə et</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add_category">
                        @csrf
                        <input style="color: #525f7f" type="text" name="category" class="form-control" placeholder="Kateqoriya"><br>
                        <input style="color: #525f7f" type="number" name="percent" class="form-control" placeholder="Faiz"><br>
                        <textarea style="color: #525f7f" type="text" name="about" class="form-control" placeholder="Qısa məzmun"></textarea><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary add_main_category">Əlavə et</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                </div>
            </div>
        </div>
    </div>

    <div id="edit_categories" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kateqoriya düzəliş et</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit_category">
                        @csrf
                        <input style="color: #525f7f" type="text" name="new_category" class="form-control" placeholder="Kateqoriya"><br>
                        <input style="color: #525f7f" type="number" name="new_percent" class="form-control" placeholder="Faiz"><br>
                        <textarea style="color: #525f7f" type="text" name="new_about" class="form-control" placeholder="Qısa məzmun"></textarea><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary edit_main_categories">Düzəliş et</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                </div>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="material-icons fa fa-times"></i>
                    </div>
                    <h4 class="modal-title w-100">Silinsin?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Bu məlumatları silmək istədiyinizə əminsiniz?</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Xeyr</button>&nbsp;
                    <button type="button" class="btn btn-danger delete_main_category">Bəli</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title"> Kateqoriyalar</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <button class="btn btn-lg" data-toggle="modal" data-target="#category">Əlavə et</button>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Kateqoriya
                                    </th>
                                    <th>
                                        Qısa məzmun
                                    </th>
                                    <th>
                                        Faiz
                                    </th>
                                    <th>
                                        Düzəlt / Sil
                                    </th>
                                </tr>
                                </thead>
                                <tbody  class="table_body">
                                @foreach($categories as $key=>$category)
                                    <tr id="{{$category->id}}">
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$category->name}}
                                        </td>
                                        <td>
                                            {{$category->about}}
                                        </td>
                                        <td>
                                            {{$category->percent}}
                                        </td>
                                        <td>
                                            <button name="{{$category->id}}" class="btn btn-info edit_main_category" data-toggle="modal" data-target="#edit_categories"><i class="fa fa-pencil-alt"></i></button>
                                            <button name="{{$category->id}}" class="btn btn-danger delete_main_categories" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
