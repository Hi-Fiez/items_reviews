@extends('app')

@section('header')

<title>Laravel &raquo; Home</title>
<style type="text/css">
.www {
  height: 50%;
  }
  </style>
  @endsection

  @section('beranda')
  <form action={{ url('search') }} method="GET" class="navbar-form navbar-left">
    <div class="input-group">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">Loremmm</a></li>
          <li><a href="#">ipsuccsm</a></li>
          <li><a href="#">dolor</a></li>
          <li><a href="#">Lorem</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">amet</a></li>
        </ul>
      </div>
      <input type="text" name="q" class="form-control" value="" required placeholder="Search">
    </div>
  </form>
  @endsection

  @section('content')

  <script type="text/javascript">(function(d, t, e, m){

    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){

      RW.init({
        huid: "352418",
        uid: "d76e769917f42f96dfbd229c445137a5",
        source: "website",
        options: {
          "advanced": {
            "layout": {
              "align": {
                "hor": "right",
              }
            }
            },
            "style": "flat_yellow",
            "isDummy": false
          }
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


        <div class="container">
        <div class="row">
        @foreach($barang as $data)
        <div class="col-md-3">
        <div class="thumbnail">
        <div align="center">
        <h5><font color="red"> {{ $data->asal }}</h5></font>
        <h6>Posted by {{\App\User::find($data->id_user)['name']}}</h6>
        <hr>
        </div>
        <img class="www" style="height: 150px;" src="{{url('images/'.$data->photo_header)}}">
        <div class="caption">
        <div class="rw-ui-container" align="right"></div>
        <h6><b>{{ $data->nama_barang }}</h6></b>
        <h5>Rp.{{ $data->harga }} </h5>
        <br>
        <div align="center">
        <p><a href="{{url('/'.$data->slug)}}" class="btn btn-primary" role="button">Read More</a></p>
        </div>
        </div>
        </div>
        </div>
        @endforeach
        </div>
        </div>
        <div align="center">
        {!! $barang->render() !!}
        </div>
        @endsection
