@extends('admin.index')
@section('admin')
    <div id="leader" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Rəhbər əlavə et</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add_leader">
                        @csrf
                        <input style="color: #525f7f" type="text" name="full_name" class="form-control" placeholder="Rəhbər adı, soyadı, atasının adı"><br>
                        <input style="color: #525f7f" type="text" name="position" class="form-control" placeholder="Vəzifə"><br>
                        <input style="color: #525f7f" type="text" name="email_link" class="form-control" placeholder="Email"><br>
                        <input style="color: #525f7f" type="text" name="linkedin_link" class="form-control" placeholder="Linkedin linki"><br>
                        <select style="color: #525f7f" name="category" class="form-control">
                            <option hidden selected value="catg">Kateqoriya</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category}}</option>
                            @endforeach
                        </select><br>
                        <input type="file" name="profile" class="form-control"><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary add_leader">Əlavə et</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
                </div>
            </div>
        </div>
    </div>

    <div id="edit_leaders" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Rəhbər düzəliş et</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit_leader">
                        @csrf
                        @csrf
                        <input style="color: #525f7f" type="text" name="new_full_name" class="form-control" placeholder="Rəhbər adı, soyadı, atasının adı"><br>
                        <input style="color: #525f7f" type="text" name="new_position" class="form-control" placeholder="Vəzifə"><br>
                        <input style="color: #525f7f" type="text" name="new_email_link" class="form-control" placeholder="Email"><br>
                        <input style="color: #525f7f" type="text" name="new_linkedin_link" class="form-control" placeholder="Linkedin linki"><br>
                        <select style="color: #525f7f" name="new_category" class="form-control">
                            <option hidden selected value="catg">Kateqoriya</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category}}</option>
                            @endforeach
                        </select><br>
                        <input type="file" name="new_profile" class="form-control"><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary edit_leaders">Düzəliş et</button>
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
                    <button type="button" class="btn btn-danger delete_leader">Bəli</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title"> Rəhbərlər</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <button class="btn btn-lg" data-toggle="modal" data-target="#leader">Əlavə et</button>
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
                                        Rəhbər adı, soyadı, ata adı
                                    </th>
                                    <th>
                                        Vəzifə
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
                                @foreach($leaders as $key=>$leaders)
                                    <tr id="{{$leaders->id}}">
                                        <td>
                                            {{$key+1}}
                                        </td>
                                        <td>
                                            {{$leaders->full_name}}
                                        </td>
                                        <td>
                                            {{$leaders->position}}
                                        </td>
                                        <td style="display: none;">
                                            {{$leaders->email_link}}
                                        </td>
                                        <td style="display: none;">
                                            {{$leaders->linkedin_link}}
                                        </td>
                                        <td style="display: none;">
                                            {{$leaders->category}}
                                        </td>

                                        <td>
                                            <img src="../profile_pics/{{$leaders->profile}}" style="width: 125px;height: 125px;">
                                        </td>
                                        <td>
                                            <button name="{{$leaders->id}}" class="btn btn-info edit_leader" data-toggle="modal" data-target="#edit_leaders"><i class="fa fa-pencil-alt"></i></button>
                                            <button name="{{$leaders->id}}" class="btn btn-danger delete_leaders" href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-trash"></i></button>
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
