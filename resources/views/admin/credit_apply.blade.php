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
                    <p>Bu məlumatlari silmək istədiyinizə əminsiniz?</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Xeyr</button>&nbsp;
                    <button type="button" class="btn btn-danger delete_credit_apply">Bəli</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title"> Kredit müraciətləri</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Müştərinin adı, soyadı, atasının adı
                                    </th>
                                    <th>
                                        Kreditin məbləği
                                    </th>
                                    <th>
                                        Kreditin müddəti
                                    </th>
                                    <th>
                                        Ödəniləcək aylıq məbləğ
                                    </th>
                                    <th>
                                        Sil
                                    </th>
                                </tr>
                                </thead>
                                <tbody  class="table_body">
                                @foreach($credit_apply as $key=>$credit_apply)
                                    <tr id="{{$credit_apply->id}}">
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$credit_apply->long_name}}
                                        </td>
                                        <td>
                                            {{$credit_apply->amount}}
                                        </td>
                                        <td>
                                            {{$credit_apply->term}}
                                        </td>
                                        <td>
                                            {{$credit_apply->monthly_payment}}
                                        </td>
                                        <td>
                                            <a class="btn btn-info" href="credit_apply_info/{{$credit_apply->id}}"><i class="fa fa-info"></i></a>
                                            <button name="{{$credit_apply->id}}" class="btn btn-danger delete_credit_applys" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>
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
