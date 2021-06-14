<div class="modal fade" id="modalCreateUser">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-form">
            <div class="modal-header">
                <h5 class="modal-title">Thêm tài khoản</h5>
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
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="name" placeholder="Bennie Hamill">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="email" name="email" placeholder="admin@mail.com">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" type="password" name="password" placeholder="••••••••">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input class="form-control" type="text" name="phone" placeholder="0123456789">
                                                </div>
                                                <div class="form-group">
                                                    <label>Role</label>
                                                    <select class="form-control" name="role">
                                                        @foreach ($listRole as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <input class="form-control image" type="file"  name="image">
                                                </div>
                                                <div class="form-group">
                                                    <img class="previewImg" src="{{ asset('assets/images/user.jpg') }}" style="width: 200px;height: 200px;margin-bottom: 10px">
                                                    <div>
                                                        <button type="button" class="btn btn-danger deleteImg">Delete Image</button>
                                                    </div>
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
    $(document).ready(function () {
        $('.image').change(function (e) {
            $('.previewImg').attr('src', URL.createObjectURL(event.target.files[0]));
        });
        $('.deleteImg').click(function (e) {
            removeImg();
        });
        $('button[data-dismiss="modal"]').click(function (e) {
            removeImg();
        });
        function removeImg() {
            $('.previewImg').attr('src', window.location.origin + '/assets/images/user.jpg');
        }
    });
</script>