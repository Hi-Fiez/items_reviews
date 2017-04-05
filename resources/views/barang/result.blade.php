@extends('app')

@section('header')

 <title>Laravel &raquo; Home</title>
    @endsection

    @section('content')

    <script type="text/javascript">(function(d, t, e, m){
    
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "352418",
            uid: "d76e769917f42f96dfbd229c445137a5",
            options: { "style": "oxygen" } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>

<div class="row text-center">
<div class="col-md-12">
<input class="form-control" style="width:30%;margin-left:27%" type="text">
<button class="btn btn-md btn-primary" style="margin-top:-4.8%;margin-left:20%">Go !</button>
</div>
</div>
<br>
@if (count($hasil))
<div class="container">
<div class="row">
@foreach($hasil as $data)
  <div class="col-md-3">
    <div class="thumbnail" style="height: 400px;">
        <div align="center">
        <h5><font color="red"> {{ $data->asal }}</h5></font>
        <h6>Posted by {{\App\User::find($data->id_user)['name']}}</h6>
        <hr>
        </div>  
      <img style="height: 150px;" src="{{url('images/'.$data->sampul)}}">
      <div class="caption" style="height: 60px">
        <h6>{{ $data->nama_barang }}</h6>
        <h5>Rp.{{ $data->harga }} </h5>
      </div>
        <hr>
        <div align="center" style="position: relative;">
        <p><a href="{{url('/'.$data->slug)}}" class="btn btn-primary" role="button">Read More</a></p>
      </div>
        <br>
    </div>
  </div>
@endforeach
  </div>
</div> 
@else
	<center>
   <div class="alert alert-danger"> Oops.. Data <b>{{$search}}</b> Tidak Ditemukan</div>
   </center>
@endif
	   @endsection