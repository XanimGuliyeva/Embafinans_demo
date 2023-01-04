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
                    <button type="button" class="btn btn-danger delete_partner">Bəli</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title"> Partnyorlar</h4>
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
                                        Şirkətin adi
                                    </th>
                                    <th>
                                        Kateqoriya
                                    </th>
                                    <th>
                                        E-poçt ünvani
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
                                @foreach($partners as $key=>$partner)
                                    <tr id="{{$partner->id}}">
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$partner->name}}
                                        </td>
                                        <td>
                                            {{$partner->category}}
                                        </td>
                                        <td>
                                            {{$partner->email}}
                                        </td>
                                        <td>
                                            <a href="{{$partner->website}}" class="btn btn-primary"><i class="fa fa-link"></i></a>
                                        </td>
                                        <td>
                                            <img src="../images/{{$partner->image}}" style="width: 125px;height: 125px;">
                                        </td>
                                        <td>
                                            <div id="status">
                                                @if($partner->status == 0)
                                                    <button name="{{$partner->id}}" class="btn btn-success active_partner"><i class="fa fa-check"></i></button>
                                                @else
                                                    <button name="{{$partner->id}}" class="btn btn-warning deactive_partner"><i class="fa fa-ban"></i></button>
                                                @endif
                                            </div>
                                            <br>
                                            <a href="edit_partner/{{$partner->id}}" class="btn btn-info"><i class="fa fa-pencil-alt"></i></a><br><br>
                                            <button name="{{$partner->id}}" class="btn btn-danger delete_partners trigger-btn" href="#myModal" data-toggle="modal"><i class="fa fa-trash"></i></button>
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
