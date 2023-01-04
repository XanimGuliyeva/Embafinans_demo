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
                    <input style="color: #525f7f" type="text" name="category" class="form-control" placeholder="Kateqoriya"><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary add_category">Əlavə et</button>
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary edit_categories">Düzəliş et</button>
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
                    <button type="button" class="btn btn-danger delete_category">Bəli</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title"> Rəhbər Kateqoriyaları</h4>
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
                                        Düzəlt / Sil
                                    </th>
                                </tr>
                                </thead>
                                <tbody  class="table_body">
                                @foreach($pos_cats as $key=>$pos_cat)
                                    <tr id="{{$pos_cat->id}}">
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$pos_cat->category}}
                                        </td>
                                        <td>
                                            <button name="{{$pos_cat->id}}" class="btn btn-info edit_category" data-toggle="modal" data-target="#edit_categories"><i class="fa fa-pencil-alt"></i></button>
                                            <button name="{{$pos_cat->id}}" class="btn btn-danger delete_categories" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>
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
