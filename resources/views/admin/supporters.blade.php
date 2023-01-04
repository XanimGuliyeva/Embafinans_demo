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
                    <button type="button" class="btn btn-danger delete_supporter">Bəli</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title"> Tərəfdaşlar</h4>
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
                                        Şirkətin adı
                                    </th>
                                    <th>
                                        Kateqoriya
                                    </th>
                                    <th>
                                        E-poçt ünvanı
                                    </th>
                                    <th>
                                        Veb-sayt
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
                                @foreach($supporters as $key=>$supporter)
                                    <tr id="{{$supporter->id}}">
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$supporter->name}}
                                        </td>
                                        <td>
                                            {{$supporter->category}}
                                        </td>
                                        <td>
                                            {{$supporter->email}}
                                        </td>
                                        <td>
                                            <a href="{{$supporter->website}}" class="btn btn-primary"><i class="fa fa-link"></i></a>
                                        </td>
                                        <td>
                                            <img src="../images/{{$supporter->image}}" style="width: 125px;height: 125px;">
                                        </td>
                                        <td>
                                            <div id="status">
                                                @if($supporter->status == 0)
                                                    <button name="{{$supporter->id}}" class="btn btn-success active_supporter"><i class="fa fa-check"></i></button>
                                                @else
                                                    <button name="{{$supporter->id}}" class="btn btn-warning deactive_supporter"><i class="fa fa-ban"></i></button>
                                                @endif
                                            </div>
                                            <br>
                                            <a href="edit_supporter/{{$supporter->id}}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a><br><br>
                                            <button name="{{$supporter->id}}" class="btn btn-danger delete_supporters" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>
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
