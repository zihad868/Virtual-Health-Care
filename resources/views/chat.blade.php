
@extends('layouts.app')
@section('content')
<div class="col-lg-10 col-lg-offset-1">
    <div id="otEmbedContainer" style="width:800px; height:640px"></div> <script src="https://tokbox.com/embed/embed/ot-embed.js?embedId=445f853e-8eb5-4752-acda-ef6b81b8d895&room=<?php echo $id ?>"></script>
</div>
@endsection
