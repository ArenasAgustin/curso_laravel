<?php
$style = isset($dNone) && $dNone ? 'display:none' : '';
$id = isset($id) ? $id : 'alert';
?>

@if ($success)
    <div id={{ $id }} class='alert-success alert alert-dismissible' role="alert" style={{ $style }}>
    @else
        <div id={{ $id }} class='alert-danger alert alert-dismissible' role="alert" style={{ $style }}>
@endif

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>

@if ($success)
    @yield('message-success')
@else
    @yield('message-error')
@endif

</div>
