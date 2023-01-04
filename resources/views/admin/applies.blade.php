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
                    <button type="button" class="btn btn-danger delete_apply">Bəli</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title"> İş müraciətləri</h4>
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
                                        Ad
                                    </th>
                                    <th>
                                        Soyad
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Telefon
                                    </th>
                                    <th>
                                        CV
                                    </th>
                                    <th>
                                        Sil
                                    </th>
                                </tr>
                                </thead>
                                <tbody  class="table_body">
                                @foreach($applies as $key=>$apply)
                                    <tr id="{{$apply->id}}">
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$apply->name}}
                                        </td>
                                        <td>
                                            {{$apply->surname}}
                                        </td>
                                        <td>
                                            {{$apply->email}}
                                        </td>
                                        <td>
                                            {{$apply->phone}}
                                        </td>
                                        <td>
                                            <a href="../files/{{$apply->cv}}" class="btn btn-warning btn-lg" download><i class="fa fa-file"></i></a>
                                        </td>
                                        <td>
                                            <button name="{{$apply->id}}" class="btn btn-danger delete_applies" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>
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
