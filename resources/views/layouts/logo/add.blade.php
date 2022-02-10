<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                    <div class="mb-30">
                        <h6>EXPERTISE</h6>
                        <h2>Modal title</h2>
                        <p>We are an innovative agency. We develop and design customers around the world. Our clients are some of the most forward-looking companies in the world.</p>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="post" action="{{route('file_upload.add')}}" enctype="multipart/form-data">

                    @csrf


                <div class="custom-file">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
