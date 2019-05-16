<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-4529508631166774",
                enable_page_level_ads: true
              });
            </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/chatting.css') }}">
        <!--<link href="carousel.css" rel="stylesheet">-->
        <title>{{config('app.name','RentRaction')}}</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">
      <!-- <script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.js"></script>-->
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.js" integrity="sha256-o//WVAsBZ6OsY7/STKK59tFZZ4G67iHBoNAo6baTJNA=" crossorigin="anonymous"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <style>
            .btn{
                font-weight: bolder;
            }
            .navbar-logo{
                margin-left:50px;
            }
            .navbar-right {
                float: right!important;
                margin-right: 50px;
            }
            .btn-round {
                  font-size: 12px;
                line-height: 1.50;
                border-radius: 25px;
            }
            .navbar-nav{
                height: 80px;
                width: 50%;
                padding-top: 1.2%;
            }
            .display-4{
                font-size: 1.5rem;
            }
            .display-3, .display-4 {
                font-weight: bolders;
                line-height: 3.2;
            }
            .navbar-caption-wrap{
                margin-top: 1px;
            }
            </style>
    </head>
    <body>
      
            <nav class="nav navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header" style="margin-top: 5px;">
                        <div class="navbar-brand">
                                <span class="navbar-logo">
                                    <a href="/">
                                         <img src="{{asset('assets/images/rentraction-logo-122x129.png')}}" alt="RentRaction" title="" style="height: 3.8rem;">
                                    </a>
                                </span>
                                <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-5" href="/">{{config('app.name','RentRaction')}}</a></span>
                            </div>
                  </div>
                  <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                            <a class="nav-link link text-white display-4" href="/tenant">
                                <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-white display-4" href="/availablePropertioes">Properties</a></li>
                        <li class="nav-item"><a class="nav-link link text-white display-4" href="/terms&docs">Terms & Docs</a></li>
                        <li class="nav-item"><a class="nav-link link text-white display-4" href="/requestMaintenance">Maintenance</a></li>
                        <li class="nav-item"><a class="nav-link link text-white display-4" href="/payRent">Pay Rent</a></li>
                        <li class="nav-item"><a class="nav-link link text-white display-4" href="/chatting">Chat</a></li>
                        @if (session()->has('userName')&& session('userName')==0 )
                            <li class="nav-item"><label class="link text-white display-4" href="">Hello,{{session('userName')}}</label></li>
                            @else
                        @endif
                        @if (session()->has('userName') && session('userName')==0)
                        
                        <li class="nav-item"> <a class="btn btn-sm btn-primary display-4 btn-round" href="/logoutM">Logout
                            <span class="mbr-iconfont mbr-iconfont-btn "></span></a></li>  
                        
                            
                            @else
                            <li class="nav-item">
                                <a class="btn btn-sm btn-primary display-4 btn-round" href="/customerLogin">Login
                                    <span class="mbr-iconfont mbr-iconfont-btn "></span></a></li>
                        @endif
                    </ul>
                    <div class="navbar-buttons mbr-section-btn">
                        
                    {{-- <li ><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li ><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
              <li><button type="submit" class="btn btn-primary navbar-btn btn-round">Logout</button></li> --}}
                  </ul>
                  
                </div>
              </nav>
        
       
        <div class="container">
        <section class="chattingSection" id="chattingSection">
            <br />
            
            <h3 align="center">Chatting system</a></h3><br />
            <br />
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="hiddenValue1" value="{{session('userId')}}" >
            <input type="hidden" name="hiddenValue2" value="{{session('userName')}}">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <h4>Online User</h4>
                </div>
                {{-- <div class="col-md-2 col-sm-3">
                    <input type="hidden" id="is_active_group_chat_window" value="no" />
                    <button type="button" name="group_chat" id="group_chat" class="btn btn-warning btn-xs">Group Chat</button>
                </div> --}}
                {{-- <div class="col-md-2 col-sm-3">
                <p align="right">Hi -{{session('userName')}}
                    <button type="button" class="btn btn-warning logout">Logout</button>
                
                </div> --}}
            </div>
            <div class="table-responsive">
                
                <div id="user_details"></div>
                <div id="user_model_details"></div>
            </div>
            <br />
            <br />
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- webslesson_mainblogsec_Blog1_1x1_as -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-4529508631166774"
                    data-ad-host="ca-host-pub-1556223355139109"
                    data-ad-host-channel="L0007"
                    data-ad-slot="6573078845"
                    data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            <br />
            <br />
        </div>
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-87739877-1', 'auto');
        ga('send', 'pageview');
        </script>

        <div id="group_chat_dialog" title="Group Chat Window">
            <div id="group_chat_history" style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;">

            </div>
            <div class="form-group">
                <!--<textarea name="group_chat_message" id="group_chat_message" class="form-control"></textarea>!-->
                <div class="chat_message_area">
                    <div id="group_chat_message" contenteditable class="form-control">

                    </div>
                <!--	<div class="image_upload">
                        <form id="uploadImage" method="post" action="upload.php">
                            <label for="uploadFile"><img src="upload.png" /></label>
                            <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" />
                        </form>
                    </div>-->
                </div>
            </div>
            <div class="form-group" align="right">
                <button type="button" name="send_group_chat" id="send_group_chat" class="btn btn-info">Send</button>
            </div>
        </div>
        </section>
        </body>
<script src="{{asset('js/messaging.js')}}"></script>
    
</html>
