@extends('layouts.panel.master')

@section('content')
<div id="app" style="width: 100%;">
    <Residentvacancies 
        residentsdata="{{ json_encode($residentsdata) }}" 
    />
</div>
@endsection