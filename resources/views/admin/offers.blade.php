@extends('admin.index')
@section('admin')
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
                    <button type="button" class="btn btn-danger delete_offer">Bəli</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title">Məhsullar</h4>
                    </div>
                    <div class="card-body">
                        <br>
                        <div class="table-responsive">
                            <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Ad
                                    </th>
                                    <th>
                                        Qısa məzmun
                                    </th>
                                    <th>
                                        Şəkil
                                    </th>
                                    <th>
                                        Düzəlt / Sil
                                    </th>
                                </tr>
                                </thead>
                                <tbody  class="table_body">
                                @foreach($offers as $key=>$offer)
                                    <tr id="{{$offer->id}}">
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$offer->name}}
                                        </td>
                                        <td>
                                            {{$offer->about}}
                                        </td>
                                        <td>
                                            <img src="../images/{{$offer->image}}" style="width: 125px;height: 125px;">
                                        </td>
                                        <td>
                                            <a href="edit_offers/{{$offer->id}}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a>
                                            <button name="{{$offer->id}}" class="btn btn-danger delete_offers" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>
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
