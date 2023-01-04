@extends('admin.index')
@section('admin')
    <div id="offer_cat" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kateqoriya əlavə et</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add_offer_cat">
                        @csrf
                        <input style="color: #525f7f" type="text" name="offer_cat" class="form-control" placeholder="Kateqoriya"><br>
                        <input style="color: #525f7f" type="number" name="percent" class="form-control" placeholder="Faiz"><br>
                        <textarea style="color: #525f7f" type="text" name="about" class="form-control" placeholder="Qısa məzmun"></textarea><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary add_offer_cat">Əlavə et</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                </div>
            </div>
        </div>
    </div>

    <div id="edit_offer_cats" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Kateqoriya düzəliş et</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit_offer_cat">
                        @csrf
                        <input style="color: #525f7f" type="text" name="new_offer_cat" class="form-control" placeholder="Kateqoriya"><br>
                        <input style="color: #525f7f" type="number" name="new_percent" class="form-control" placeholder="Faiz"><br>
                        <textarea style="color: #525f7f" type="text" name="new_about" class="form-control" placeholder="Qısa məzmun"></textarea><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary edit_offer_cats">Düzəliş et</button>
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
                    <button type="button" class="btn btn-danger delete_offer_cat">Bəli</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title">Kompaniya kateqoriyaları</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <button class="btn btn-lg" data-toggle="modal" data-target="#offer_cat">Əlavə et</button>
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
                                @foreach($offer_cats as $key=>$offer_cat)
                                    <tr id="{{$offer_cat->id}}">
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$offer_cat->name}}
                                        </td>
                                        <td>
                                            {{$offer_cat->about}}
                                        </td>
                                        <td>
                                            {{$offer_cat->percent}}
                                        </td>
                                        <td>
                                            <button name="{{$offer_cat->id}}" class="btn btn-info edit_offer_cat" data-toggle="modal" data-target="#edit_offer_cats"><i class="fa fa-pencil-alt"></i></button>
                                            <button name="{{$offer_cat->id}}" class="btn btn-danger delete_offer_cats" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>
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
