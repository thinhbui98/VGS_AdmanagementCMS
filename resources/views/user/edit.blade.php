<div class="modal fade" id="modalEditUser">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-form">
            <div class="modal-header">
                <h5 class="modal-title">Chỉnh sửa tài khoản</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                            </div>
                            <div class="card-body">
                                <div class="basic-elements">
                                    <form enctype="multipart/form-data" action="" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" id="name" name="name" placeholder="Bennie Hamill">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="email" id="email" name="email" placeholder="admin@mail.com">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" type="password" value="" placeholder="••••••••">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input class="form-control" id="phone" type="text" name="phone" placeholder="0123456789">
                                                </div>
                                                <div class="form-group">
                                                    <label>Role</label>
                                                    <select class="form-control" id="role" name="role">
                                                        @foreach ($listRole as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <input class="form-control" type="file" name="image">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success">Save</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.edit-user').click(function (e) {
            var dataUser = JSON.parse($(this).attr('data'));
            var action = window.location.pathname + '/' + dataUser.id;
            $('input#name').attr('value', dataUser.name);
            $('input#email').attr('value', dataUser.email);
            $('input#phone').attr('value', dataUser.phone);
            $('form').attr('action', action);
            $('#role option[value='+ dataUser.role_id +']').attr('selected','selected');
        });
        $('button[data-dismiss="modal"]').click(function (e) { 
            $('#role option').removeAttr('selected');
        });
    });
</script>