<div class="modal fade" id="modalGenre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update Genre</h4>
            </div>
            <div class="modal-body">

                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                <input type="hidden" id="id">
                @include('forms.genreForm')
            </div>
            <div class="modal-footer">
                {!! link_to('#', $title = 'Update', $attributes = ['id' => 'update', 'class' => 'btn btn-primary'], $secure = null) !!}
            </div>
        </div>
    </div>
</div>
