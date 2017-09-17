@extends('layouts.app4')
@section('content')
<div id="sign-in">
    <script language="javascript" type="text/javascript">


        function loginpopup()
        {
            win=document.getElementById("sign-in");
            win.style.display="block";


        }
        function closepopup()
        {
            win=document.getElementById("sign-in");
            win.style.display="none";
            $( "#alerts" ).html( "" );
            $("#password").val("");
            $("#username").val("");

        }
        function closewizard()
        {
            $('.wizard-popup').hide();

        }

        function login(){
            var password = $("#password").val();
            var username = $("#username").val();

            var user_data = {
                'username': username,
                'password': password
            };

            if(username == ''){
                var str="Please enter your Username";
                $( "#alerts" ).html( str );

            }else if(password == ''){
                var str="Please enter your password";
                $( "#alerts" ).html( str );
            }else {
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'post',
                    dataType: 'html',
                    url: "api/login",
                    cache: false,
                    data: user_data,
                    success: function (result) {
                        var obj = jQuery.parseJSON(result);
                        var status = obj['success'];
                        if(status == 'success'){
                            window.location.href = "{{ url('adminstart') }}";
                        }else{
                            var str="Please enter correct username and password";
                            $( "#alerts" ).html( str );
                        }

                    }

                });
            }
        }

    </script>
    <section>
        <div id="close-div" style="float: left;display: none" onclick="return closepopup()"><center><i class="fa fa-times-circle-o fa-2x"></i></center></div>
        <div>
            <div style="float:none;background: #e2e6eb;padding-top:25px;border-top-left-radius: 5px;border-top-right-radius:5px;height: 60px;border-bottom-right-radius: 0;border-bottom-left-radius: 0;border-bottom: solid 1px #d3d3d3"><center><p class="text-maroon " style="margin: 0 auto; color:RGB(32,32,32) !important; letter-spacing: 0.02em;font-weight: lighter">Jua katiba login</p></center></div>
            <center><div style="padding: 10px; color: #a52a2a; font-size: 12px; font-weight: normal" id="alerts"></div></center>
            <div>
                <form style="width: 70%;margin: 0 auto">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa-1x"></i></span>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    </div></br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-1x"></i></span>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    </br>
                    <input type="button" style="background-color: #2E7D32 !important;" value="Login" class="btn btn-default" onclick="login()">
                </form><br/>
            </div>
        </div>
    </section>

</div>
@endsection
