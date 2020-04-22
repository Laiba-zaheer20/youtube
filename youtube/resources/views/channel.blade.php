<html>
<head>
<meta charset="utf-8">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<style>
.topnav input[type=text] {
  float: right;
  padding: 9.5px;
  border: none;
  margin-top: 8px;
  font-size: 16px;
  width:420px;
  border-bottom-left-radius: 20px;
}

.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #FFE4E1;
  width: 90px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

</style>

<div class="topnav" style="width:100%;height:60px;background-color:	#40E0D0;display:flex">
  <a  href="{{route('video')}}" style="margin-left:40px;margin-top:1px;background-color:	#40E0D0">
  <img src="../img/youtube3.PNG" height="50px" width="69px"/>
  </a>
  <div style="margin-left:330px;"> 
  <input type="text" placeholder="Search.." /></div>
  <div style="margin-left:0px; margin-top: 7.5px;">
  <button type="submit" style="width:45px;height:44px;
  border-bottom-right-radius: 10px;color:red"><i class="fa fa-search"></i></button>
  </div>
  
  <div style="margin-left:120px;margin-top:8px">
  
  <div class="btn-group">
  <button type="button" class="" data-toggle="dropdown" style="border-radius:15px;background-color:	#40E0D0;border:bold;border-color:#DC143C" aria-haspopup="true" aria-expanded="false">
  <img src="../img/upload.PNG" height="35px" width="30px"/>
  </button>
  <div class="dropdown-menu" style="background-color:#F5FFFA;margin-left:20px">
    
    <div class="dropdown-item" type="button"  data-toggle="modal" data-target="#exampleModalCenter" style="margin-left:0px;display:flex">
    <div style="margin-right:9px;">
    <img src="../img/123.PNG" height="30px" width="25px"/>
    </div>
    <div style="width:80% ;font-size:15px;margin-top:2px">
       Upload Video
    </div>
    </div>

    <div class="dropdown-item" href="#" style="margin-left:0px;display:flex">
    <div style="margin-right:9px;">
    <img src="../img/12345.PNG" height="30px" width="25px"/>
    </div>
    <div style="width:80% ;font-size:15px;margin-top:2px">
       Go Live
    </div>
    </div>

  </div>
</div>
</div>

  <div style="margin-left:70px;margin-top:8px">
  @if(auth()->check())
  <div class="btn-group">
  <button type="button" class="" data-toggle="dropdown" style="border-radius:15px;background-color:	#40E0D0;border:bold;border-color:#DC143C" aria-haspopup="true" aria-expanded="false">
  <img src="../img/person.PNG" height="35px" width="30px"/><label style="font-weight:bold">{{ auth()->user()->name}}</label>
  </button>
  
  <div class="dropdown-menu" style="background-color:#F5FFFA;margin-left:15px">
    
    <a class="dropdown-item" href="{{route('channel')}}" style="margin-left:0px;display:flex">
    <div style="margin-right:1px;">
    <img src="../img/tv.PNG" height="30px" width="25px"/>
    </div>
    <div style=" font-family: Arial, Helvetica, sans-serif;width:80% ;font-size:15px;margin-top:3px;margin-left:3px">
       My channel
    </div>
    </a>
    
    <a class="dropdown-item"  href="{{route('logout')}}" style="margin-left:0px;display:flex">
    <div  style="margin-right:9px;">
    <img src="../img/logout.PNG" height="30px" width="25px"/>
    </div>
    <div style="width:80% ;font-size:15px;margin-top:2px; font-family: Arial, Helvetica, sans-serif;">
       Log Out
    </div>
    </a>

  </div>
</div>
@else
<div class="btn-group">
  <button type="button" class="" data-toggle="dropdown" style="border-radius:15px;background-color:	#40E0D0;border:bold;border-color:#DC143C" aria-haspopup="true" aria-expanded="false">
  <img src="../img/person.PNG" height="35px" width="30px"/><label style="font-weight:bold">Account</label>
  </button>
  <div class="dropdown-menu" style="background-color:#F5FFFA;margin-left:15px">
    
    <div class="dropdown-item" type="button"  data-toggle="modal" data-target="#modalLRForm" style="margin-left:0px;display:flex">
    <div style="margin-right:1px;">
    <img src="../img/login.PNG" height="30px" width="25px"/>
    </div>
    <div style=" font-family: Arial, Helvetica, sans-serif;width:80% ;font-size:15px;margin-top:2px">
       Log In
    </div>
    </div>
    
    <div class="dropdown-item"  data-toggle="modal" data-target="#modalLRForm" style="margin-left:0px;display:flex">
    <div  style="margin-right:9px;">
    <img src="../img/sigup.PNG" height="30px" width="25px"/>
    </div>
    <div  style="width:80% ;font-size:15px;margin-top:2px; font-family: Arial, Helvetica, sans-serif;">
       SignUp
    </div>
    </div>

  </div>
</div>
@endif
</div>
</div>
<style>
.card {
  box-shadow:   5px 10px #888888 ;
  padding: 5px;
  margin:auto;
  width:270px;
  height:340px;
  background-color:	#40E0D0;
}


.card1 {
  box-shadow:   5px 10px #888888 ;
  padding: 2px;
  width:750px;
  height:190px;
  background-color:	#D4D8D8;
  margin-top:10px;
}

</style>

<div style="width:100%;display:flex;">
<div style="width:30%;">
<div class="card" style="margin-top:20px;">
 <center>
  <img src="../img/tv.PNG" alt="John" style="margin-top:25px;margin-bottom:20px;width:200px;height:200px">
  <h2 style="font-weight:bold">My Channel</h2>
</center>
</div>
</div>

<div style="width:70%">
<h2 style="margin-top:19px;font-weight:bold">Private Videos :</h2>
@foreach($k as $any)
@if($any->status == 0)
<div  class="card1 l_{{$any->id}}" style="justify-content: flex-start;margin-top:20px;display:flex">
<a href="{{$any->video_url}}">
<video style="margin-left:10px" class="polystar" id="{{$any->id}}" src="{{$any->video_url}}" height="200px" width="300px" allow="autoplay" muted="muted" data-play="Hover" preload></video>
</a>
<div style="margin-left:30px;margin-top:30px">
<label style="font-weight:bold;color:red;font-size:20px">{{$any->name}}</label>    

<div class="ui toggle checkbox" style="margin-top:10px" >
  <input type="checkbox" name="public" id="public" style="height:20px">
  <label style="font-weight:bold">Public</label>
</div>
<button type="submit" class="goaway" id="{{$any->id}}" style="border-radius:7px;width:100px;height:40px;background-color:#40E0D0;">Public It !</button>
</div>
</div>
@endif
@endforeach
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upload Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"style="width:100%;height:290px">
      <center>
      <div class=" print-error-msg" style="display:none">
                        <ul></ul>
       </div>
        <div ><img src="../img/go.PNG" height="100px" width="90px"/> </div>
        <div style="font-size:17px">Drag and drop a file you want to upload</div>
        <div style="font-size:12px">Your video will be private until you publish it</div>
        
        <form action="{{route('save')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="display:flex;margin-left:80px;margin-top:5px;margin-bottom:5px">
        <label style="font-weight:bold">File Title : </label>
        <input type="text" id="name" name="name" style="margin-left:5px;height:25px;border-radius:12px;font:6px"></input>
        </div>
        <input style="margin-bottom:5px;" id="selectfile" type="file" name='selectfile' accept="video/*"/>
        <label for="cars" style="margin-top:20px;margin-right:25px;font-size: 17px;">You want to make it Public OR Private </label>
            <select class="k" id="cars" name="cars" >
                  <option class="k" value="select">select</option>
                  <option class="k" value="1">public</option>
                  <option class="k" value="0">private</option>
            </select><br>
      </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="send1" style="background-color:#40E0D0" class="btn btn-primary send1">Save Video</button>
      </form>
      </div>
    </div>
  </div>
</div>


<script>

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

$(document).ready(function(){
  $('.goaway').click(function(){
  p=$(this).attr('id');
  $.ajax({
     type: "POST",
     data: {"_token": $('meta[name="csrf-token"]').attr('content'),
     'id':p,
     },
     url: "{{route('up')}}",
     success: function(msg){
        $('.l_'+p).css('display','none');
     }
    });
  });
});


document.addEventListener('mouseover',hoverVideo,false);

var vid=document.getElementsByTagName('video');
[].forEach.call(vid,function(item){
    item.addEventListener('mouseover',hoverVideo,false);
    item.addEventListener('mouseout',hideVideo,false);
});
function hoverVideo(e){
    this.play();
}

function hideVideo(e){
    $(this).get(0).currentTime = 0;
    this.pause();
}


</script>
</body>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>