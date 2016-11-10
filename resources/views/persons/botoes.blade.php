<?php
/**
 * User: Leonardo
 * Date: 09/11/2016
 * Time: 09:28
 */
?>

<div class="col-lg-12">
    @foreach($letras as $letra)
            <a href="{{ route('agenda.letra', ['letra' => $letra]) }}" class="btn btn-primary btn-xs">{{ $letra }}</a>
    @endforeach
</div>
