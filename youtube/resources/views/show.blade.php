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
  <a href="{{route('video')}}" style="margin-left:40px;margin-top:1px;background-color:	#40E0D0">
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
    @if(auth()->check())
    <div class="dropdown-item" type="button"  data-toggle="modal" data-target="#exampleModalCenter" style="margin-left:0px;display:flex">
    <div style="margin-right:9px;">
    <img src="../img/123.PNG" height="30px" width="25px"/>
    </div>
    <div style="width:80% ;font-size:15px;margin-top:2px">
       Upload Video
    </div>
    </div>
    @else
   <div class="dropdown-item" type="button"  data-toggle="modal" data-target="#modalLRForm" style="margin-left:0px;display:flex">
    <div style="margin-right:9px;">
    <img src="../img/123.PNG" height="30px" width="25px"/>
    </div>
    <div style="width:80% ;font-size:15px;margin-top:2px">
       Upload Video
    </div>
    </div>
   @endif

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
  box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.1);
  padding: 16px;
  background-color: #F5F5F5;
}
.column {
  float: left;
  width: 25%;
  padding: 0 1px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;
margin-left:60px;
margin-right:60px;
margin-top:18px;
margin-bottom:5px;
background-color:#F5F5F5;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.modal-open{
  opacity:1;
  visibility:visible;

}
</style>

<div width="100%" style="background-color:#F5F5F5;">
<div class="row">
@foreach ($video as $row)
@if($row->status == 1)
<div class="column">
    <div class="card">
    <a class="lol" href="{{$row->video_url}}" >
    <video class="polystar" id="{{$row->id}}" src="{{$row->video_url}}" height="200px" width="100%" allow="autoplay" muted="muted" data-play="Hover" preload></video>
    <div style="font-size:19px;font-weight:bold;color:red;">{{$row->name}}</div> 
    <div style="display:flex;">
    <div style="margin-right:3px;margin-left:2px;">Views : </div>
    <div>{{$row->count_clicks}}</div>
    </div>
    </a>
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


<div class="modal fade" id="modalLRForm" style="margin-top:30px" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content" >

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs" >

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 " style="color: white;background-color:#40E0D0" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab">
            <img src="../img/sign.PNG" height="30px" width="25px"/>
            <label style="font-weight:bold">Login</label></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><img src="../img/logs.PNG" height="30px" width="25px"/>
            <label style="font-weight:bold">Sign Up</label></a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
              
            <div id='key' style="margin-bottom:5px;color:red;margin-left:30px"class="key"></div>
            <div id="errors"></div>                  
                     <div class=" print-error-msg" style="color:red;display:none">
                        <ul style="color:red;"></ul>
            </div>

              <div class="md-form form-sm mb-5">
              <div style="display:flex;margin-top:10px">
              <img src="../img/email.PNG" height="34px" width="29px"/>  
              <label style="font-weight:bold;font-size:19px;margin-left:6px"> Email </label>
             </div>
                <input type="email" id="user1" class="form-control form-control-sm validate">
              </div>
              <div class="md-form form-sm mb-4">
              <div style="display:flex">
              <img src="../img/password.PNG" height="35px" width="31px"/>
              <label style="font-weight:bold;font-size:19px;margin-left:6px"> Password </label>
             
              </div>  
                <input type="password" id="pass1" class="form-control form-control-sm validate">
              </div>
              <div class="text-center mt-2" >
              <button class="btn btn-info" type="submit" id="send12" style="background-color:#40E0D0" ><img src="../img/password.PNG" height="34px" width="29px"/>
              <label style="font-size:13px;font-weight:bold;color:red">Log In</label> </button>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer" style="height:60px;background-color:#40E0D0">
              <div style="display:flex;"class="options text-center text-md-right mt-1">
                <p style="margin-top:5px;"><label style="font-weight:bold">Not a member?</label> <a href="#" style="color:red;">Sign Up</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" style="margin-left:0;width:70px;color:red"data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
                             
            <div class=" print-error-msg1" style="color:red;display:none">
                        <ul style="color:red;"></ul>
            </div>

              <div style="display:flex;margin-top:20px;margin-bottom:10px">
              <img src="../img/account.PNG" height="30px" width="29px"/>  
              <label style="font-weight:bold;font-size:19px;margin-left:6px;margin-bottom:3px"> UserName </label>
             </div>
                <input type="text" id="fname13" class="form-control form-control-sm validate">

              <div style="display:flex;margin-top:10px;margin-bottom:5px">
              <img src="../img/email.PNG" height="34px" width="29px"/>  
              <label style="font-weight:bold;font-size:19px;margin-left:6px;margin-bottom:3px"> Email </label>
             </div>
                <input type="email" id="email13" class="form-control form-control-sm validate">


             <div style="display:flex;margin-top:10px;margin-bottom:5px">
              <img src="../img/password.PNG" height="34px" width="29px"/>  
              <label style="font-weight:bold;font-size:19px;margin-left:6px"> Password </label>
              </div>
                <input type="password" id="password13" class="form-control form-control-sm validate">


              <div style="display:flex;margin-top:10px;margin-bottom:5px">
              <img src="../img/password.PNG" height="34px" width="29px"/>  
              <label style="font-weight:bold;font-size:19px;margin-left:6px">Confirm Password </label>
              </div>
                <input type="password" id="password_confirmation13" class="form-control form-control-sm validate">

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info" type="submit" id="send13"> <img src="../img/sigup.PNG" height="34px" width="29px"/>  
              <label style="font-weight:bold;color:red;font-size:16px">Sign Up</label></button>
              </div>

            </div>
            <!--Footer-->
            <div class="modal-footer" style="height:60px;background-color:#40E0D0">
              <div style="display:flex;"class="options text-center text-md-right mt-1">
                <p style="margin-top:5px;"><label style="font-weight:bold">Not a member?</label> <a href="#" style="color:red;">Sign Up</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" style="margin-left:0;width:70px;color:red"data-dismiss="modal">Close</button>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

<script>


$(document).ready(function(){
  $('.lol').click(function(){
  k=$(this).attr('href');
  $.ajax({
     type: "POST",
     data: {"_token": $('meta[name="csrf-token"]').attr('content'),
     'href':k,
     },
     url: "{{route('count')}}",
     success: function(msg){
     }
  });
  });
});


$(document).ready(function(){
  $('#send12').click(function(){
    username1=$('#user1').val();
    password1=$('#pass1').val();
   
    $.ajax({
     type: "POST",
     data: {"_token": $('meta[name="csrf-token"]').attr('content'),
     "username":username1,
     "password":password1,
     },
     url: "{{route('check')}}",
     
     success: function(msg){
      if($.isEmptyObject(msg.error)){
       if(msg.key!='YOU HAVE TO SIGN UP FIRST !!'){

        var targetUrl = "{{route('video')}}";
        window.location = targetUrl;
      }
       else{
        $(".key").css('display','block');
       document.getElementById("key").innerHTML=msg.key;
        document.getElementById("errors").style.display = "none";
        $(".print-error-msg").css('display','none');
      }
      }
      else{
        $(".key").css('display','none');
        printErrorMsg(msg.error);
     }
     }
  });
   });
   function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
 
});




  $(document).ready(function(){
  $('#kkkk').click(function(){
    $('')
    $('.nav-tabs a[href="#panel7"]').tab('show');
  });});

$(document).ready(function(){
  $('#send13').click(function(){
   $.ajax({
     type: "POST",
     data: {"_token": $('meta[name="csrf-token"]').attr('content'),
     "fname":$('#fname13').val(),
     'email':$('#email13').val(),
     "password":$('#password13').val(),
     'password_confirmation':$('#password_confirmation13').val(),
     
     },
     url: "{{route('checkSignIn')}}",
     
     success: function(msg){
      if($.isEmptyObject(msg.error)){
       if(msg.key=='done!'){

        $('.nav-tabs a[href="#panel7"]').tab('show');
      }
      }
      else{
        $(".key").css('display','none');
        printErrorMsg(msg.error);
     }
     }
  });
});

 function printErrorMsg (msg) {
            $(".print-error-msg1").find("ul").html('');
            $(".print-error-msg1").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg1").find("ul").append('<li>'+value+'</li>');
            });
        }
});


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


// $(document).ready(function(){
//   $('.send1').click(function(){
//     var name=document.getElementById('name').value;
//    // var video_url=document.getElementById('input-file').value;
//     video_url = $('#input-file').prop('files')[0];
   
//     $.ajax({
//      type: "POST",
//      data: {"_token": $('meta[name="csrf-token"]').attr('content'),
//          'name':name,
//          'selectfile':video_url,
//      },
//      url: "{{route('save')}}",
//      success: function(msg){
//         if($.isEmptyObject(msg.error)){
//         alert('done');    
//         }
//         else{
//          printErrorMsg(msg.error);
//         }
//      }
//     });
// });

// function printErrorMsg (msg) {
//             $(".print-error-msg").find("ul").html('');
//             $(".print-error-msg").css('display','block');
//             $.each( msg, function( key, value ) {
//                 $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
//             });
//         }

// });


</script>
</body>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>