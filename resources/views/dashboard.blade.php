@include('header')
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row header-align-center">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="logo-pro">
                            <a href="{{url('/')}}"><img class="main-logo" src="{{url('public/assets/img/logo/light-logo.png')}}" alt=""/></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                        <p class="top-all">Partner Portal</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" >
                                                    <i class="fas fa-tachometer-alt"></i>
                                                </a>
                                            </li>
                                                
                                            <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-bars"></i></a>

                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="Help.html"><span class="edu-icon edu-home-admin author-log-ic"></span>Help</a>
                                                        <hr/>
                                                    </li>
                                                    <li><a href="Reach_audience.html"><span class="edu-icon edu-user-rounded author-log-ic"></span>Reach audience</a>
                                                    </li>
                                                    <hr/>
                                                    <li><a href="Payment.html"><span class="edu-icon edu-home-admin author-log-ic"></span>Payment</a>
                                                        <hr/>
                                                    </li>
                                                    <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>Terms of use</a>
                                                    </li>
                                                    <hr/>
                                                </ul>
                                            </li>

                                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-bell"></i><span class="indicator-nt">!</span></a>
                                                <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1 class="text-left">Notifications</h1>
                                                        <span class="close-icon">
                                                            <a href="#"><i class="fas fa-times"></i></a>
                                                        </span>
                                                    </div>
                                                    <ul class="notification-menu">
                                                        <li class="list-item">
                                                            <div class="notification-item">
                                                                <div class="notification-icon">
                                                                    <img src="{{url('public/assets/img/icons/idea.png')}}">
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                                            <path fill="currentColor" d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                    <div class="notification-footer">
                                                                        <a href="#">View</a>
                                                                        <a href="#">Dismiss</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-item">
                                                            <div class="notification-item">
                                                                <div class="notification-icon">
                                                                    <img src="{{url('public/assets/img/icons/exclamation-mark.png')}}">
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                                        <path fill="currentColor" d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                    <div class="notification-footer">
                                                                        <a href="#">View</a>
                                                                        <a href="#">Dismiss</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-item">
                                                            <div class="notification-item">
                                                                <div class="notification-icon">
                                                                    <img src="{{url('public/assets/img/icons/exclamation-mark.png')}}">
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                                            <path fill="currentColor" d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                    <div class="notification-footer">
                                                                        <a href="#">View</a>
                                                                        <a href="#">Dismiss</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-item">
                                                            <div class="notification-item">
                                                                <div class="notification-icon">
                                                                    <img src="{{url('public/assets/img/icons/exclamation-mark.png')}}">
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                                        <path fill="currentColor" d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                    <div class="notification-footer">
                                                                        <a href="#">View</a>
                                                                        <a href="#">Dismiss</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="notification-view">
                                                        <a href="#">View All Notification</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <span class="admin-name">Prof.Anderson</span>
                                                    <img src="{{url('public/assets/img/product/pro4.jpg')}}" alt="" />
                                                </a>
                                                <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                    <ul class="message-menu">
                                                        <li class="list-item">
                                                            <div class="notification-item">
                                                                <div class="message-img">
                                                                    <img src="{{url('public/assets/img/contact/1.jpg')}}" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <h2>Advanda Cro</h2>
                                                                    <div><span class="emai-add">abc@gmail.com</span></div>
                                                                    <a class="m-0" href="#">Manage your google account</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="message-view">
                                                                <a class="btn-blue" href="{{url('signout')}}">Sign out</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="product-sales-area mg-tb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h4>Business</h4>
                    <div class="inside-card responsive-mg-b-30">
                        <div class=""> 
                            <div class="p-0">
                                <img src="{{url('public/assets/img/blog-details/Building.png')}}" width="100%" alt="img1">
                            </div>
                            <div class="tinymce-single">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td colspan="1"></td>
                                            <td>
                                                @if(!empty($data['restroInfo']->restro_name))
                                                    {{$data['restroInfo']->restro_name}}
                                                @else
                                                    {{__("msg.Business Name")}}
                                                @endif

                                            </td>
                                            <td colspan="2" class="text-right"><span><a data-toggle="modal" data-target="#businessModal" href="#"><i class="fas fa-pencil-alt"></i></a></span></td>
                                        </tr>

                                        <tr>
                                            <td><span><i class="fas fa-map-marker-alt"></i></span></td>
                                            <td>
                                                @if(!empty($data['restroInfo']->address))
                                                    {{$data['restroInfo']->address}}
                                                @else
                                                    {{__("msg.What is the address")}}
                                                @endif

                                            </td>
                                            <td colspan="2" class="text-right"><span><a data-toggle="modal" data-target="#addLocation" href="#"><i class="fas fa-pencil-alt"></i></a></span></td>
                                        </tr>
                                        <tr>
                                            <td><span><i class="far fa-compass"></i></span></td>
                                            <td>
                                                @if(empty($data['restroInfo']->service_type))
                                                {{__("msg.Service Type")}} <br/>
                                                @endif 
                                                <span class="clr">
                                                @if(!empty($data['restroInfo']->service_type))
                                                    @if($data['restroInfo']->service_type == '1') {{'Restaurant'}}
                                                    @elseif($data['restroInfo']->service_type == '2') {{'Bar'}}
                                                    @elseif($data['restroInfo']->service_type == '3') {{'Restaurant & Bar'}}
                                                    @endif
                                                @endif
                                                </span></td>
                                            <td colspan="2" class="text-right"><span><a data-toggle="modal" data-target="#restroService"  href="#"><i class="fas fa-pencil-alt"></i></a></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="t-oh">
                                    <table>
                                        <tbody>
                                            @if(empty($data["sunday_record"]) && empty($data["monday_record"]) && empty($data["tuesday_record"]) && empty($data["wednesday_record"]) && empty($data["thursday_record"]) && empty($data["friday_record"]) && empty($data["saturday_record"]))
                                            <tr>
                                                <td><span><i class="far fa-clock"></i></span></td>
                                                <td>{{__('msg.Add hours')}}</td>
                                                <td></td>
                                                <td><span class="icon-right"><a data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-pencil-alt"></i></a></span></td>
                                            </tr>
                                            @else
                                            <tr>
                                                <td><span><i class="far fa-clock"></i></span></td>
                                                <td>Sunday</td>
                                                @if(count($data["sunday_record"]) <= 0)
                                                <td>
                                                    Closed
                                                </td>
                                                @elseif(count($data["sunday_record"]) > 0 && !$data["sunday_record"][0]['open_close'])
                                                <td>
                                                    Closed
                                                </td>
                                                @else
                                                <td>
                                                    @foreach($data["sunday_record"] as $sundayVal)
                                                    <p>@php echo $sundayVal['starttime']; @endphp - @php echo $sundayVal['endtime']; @endphp</p>
                                                    @endforeach
                                                </td>
                                                @endif
                                                <td><span class="icon-right"><a data-toggle="modal" data-target=".bd-example-modal-lg" href="#"><i class="fas fa-pencil-alt"></i></a></span></td>
                                            </tr>
                                            <tr>
                                                <td colspan="1"></td>
                                                <td>Monday</td>
                                                @if(count($data["monday_record"]) <= 0)
                                                <td>
                                                    Closed
                                                </td>
                                                @elseif(count($data["monday_record"]) > 0 && !$data["monday_record"][0]['open_close'])
                                                <td>
                                                    Closed
                                                </td>
                                                @else
                                                <td>
                                                    @foreach($data["monday_record"] as $mondayVal)
                                                    <p>@php echo $mondayVal['starttime']; @endphp - @php echo $mondayVal['endtime']; @endphp</p>
                                                    @endforeach
                                                </td>
                                                @endif
                                                <td colspan="2"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="1"></td>
                                                <td>Tuesday</td>
                                                @if(count($data["tuesday_record"]) <= 0)
                                                <td>
                                                    Closed
                                                </td>
                                                @elseif(count($data["tuesday_record"]) > 0 && !$data["tuesday_record"][0]['open_close'])
                                                <td>
                                                    Closed
                                                </td>
                                                @else
                                                <td>
                                                    @foreach($data["tuesday_record"] as $tuesdayVal)
                                                    <p>@php echo $tuesdayVal['starttime']; @endphp - @php echo $tuesdayVal['endtime']; @endphp</p>
                                                    @endforeach
                                                </td>
                                                @endif
                                                <td colspan="2"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="1"></td>
                                                <td>Wednesday</td>
                                                @if(count($data["wednesday_record"]) <= 0)
                                                <td>
                                                    Closed
                                                </td>
                                                @elseif(count($data["wednesday_record"]) > 0 && !$data["wednesday_record"][0]['open_close'])
                                                <td>
                                                    Closed
                                                </td>
                                                @else
                                                <td>
                                                    @foreach($data["wednesday_record"] as $wednesdayVal)
                                                    <p>@php echo $wednesdayVal['starttime']; @endphp - @php echo $wednesdayVal['endtime']; @endphp</p>
                                                    @endforeach
                                                </td>
                                                @endif
                                                <td colspan="1"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="1"></td>
                                                <td>Thursday</td>
                                                @if(count($data["thursday_record"]) <= 0)
                                                <td>
                                                    Closed
                                                </td>
                                                @elseif(count($data["thursday_record"]) > 0 && !$data["thursday_record"][0]['open_close'])
                                                <td>
                                                    Closed
                                                </td>
                                                @else
                                                <td>
                                                    @foreach($data["thursday_record"] as $thursdayVal)
                                                    <p>@php echo $thursdayVal['starttime']; @endphp - @php echo $thursdayVal['endtime']; @endphp</p>
                                                    @endforeach
                                                </td>
                                                @endif
                                                <td colspan="1"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="1"></td>
                                                <td>Friday</td>
                                                @if(count($data["friday_record"]) <= 0)
                                                <td>
                                                    Closed
                                                </td>
                                                @elseif(count($data["friday_record"]) > 0 && !$data["friday_record"][0]['open_close'])
                                                <td>
                                                    Closed
                                                </td>
                                                @else
                                                <td>
                                                    @foreach($data["friday_record"] as $fridayVal)
                                                    <p>@php echo $fridayVal['starttime']; @endphp - @php echo $fridayVal['endtime']; @endphp</p>
                                                    @endforeach
                                                </td>
                                                @endif
                                                <td colspan="1"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="1"></td>
                                                <td>Saturday</td>
                                                @if(count($data["saturday_record"]) <= 0)
                                                <td>
                                                    Closed
                                                </td>
                                                @elseif(count($data["saturday_record"]) > 0 && !$data["saturday_record"][0]['open_close'])
                                                <td>
                                                    Closed
                                                </td>
                                                @else
                                                <td>
                                                    @foreach($data["saturday_record"] as $saturdayVal)
                                                    <p>@php echo $saturdayVal['starttime']; @endphp - @php echo $saturdayVal['endtime']; @endphp</p>
                                                    @endforeach
                                                </td>
                                                @endif
                                                <td colspan="1"></td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <div class="Z1hOCe">
                                    <div class="zloOqf PZPZlf">  
                                        <div class="GDRHkb">
                                            <span><i class="fas fa-phone"></i></span>
                                            @if(!empty($data['myContacts']))
                                                @foreach($data["myContacts"] as $contactVal)
                                                <div>@php echo '+'.$contactVal['country_code']; @endphp - @php echo $contactVal['contact_number']; @endphp</div>
                                                @endforeach
                                            @else
                                                <span>{{__('msg.Add phone number (optional)')}}</span>
                                            @endif
                                            <span class="icon-right"><a data-toggle="modal" data-target="#addNumber" href="#"><i class="fas fa-pencil-alt"></i></a></span>
                                        </div>
                                        <div class="GDRHkb">
                                            <span><i class="fas fa-globe-europe"></i></span>
                                            <?php if(!empty($data['restroInfo']->website)){ ?>
                                            <span>
                                                <a href="<?php echo $data['restroInfo']->website;?>"><?php echo $data['restroInfo']->website;?></a>
                                            </span>
                                            <?php }else{?>
                                                <span>{{__("msg.Add website (optional)")}}</span>
                                            <?php }?>
                                            <span class="icon-right"><a data-toggle="modal" data-target="#addURL" href="#"><i class="fas fa-pencil-alt"></i></a></span>
                                        </div>
                                        <div class="GDRHkb">
                                            <span><i class="fas fa-shopping-basket"></i></span>
                                            <span>Free drink or cocktail <br/><i>Add or edit</i></span>
                                            <span class="icon-right"><a data-toggle="modal" data-target="#addProduct" href="#"><i class="fas fa-pencil-alt"></i></a></span>
                                        </div>
                                        <div class="GDRHkb">
                                            <span><i class="fas fa-grip-lines"></i></span>
                                            <span><i>{{__('msg.Add Business decription')}}</i></span>
                                            <span class="icon-right"><a data-toggle="modal" data-target="#addBusiness" href="#"><i class="fas fa-pencil-alt"></i></a></span>
                                        </div>
                                        <div class="GDRHkb">
                                            <span><i class="fas fa-camera"></i></span>
                                            <span>{{__('msg.Add photos')}}</span>
                                            <span class="icon-right"><a data-toggle="modal" data-target="#addPhoto" href="#"><i class="fas fa-pencil-alt"></i></a></span>
                                        </div>
                                        <div class="GDRHkb">
                                            <span><i class="fas fa-camera"></i></span>
                                            <span>Group promotion</span>
                                            <span class="icon-right"><a data-toggle="modal" data-target="#groupPromotion" href="#"><i class="fas fa-pencil-alt"></i></a></span>
                                        </div>
                                        <div class="GDRHkb">
                                            <span><i class="fas fa-camera"></i></span>
                                            <?php if(!empty($data['restroInfo']->cashback_allow)){ ?>
                                            <span>{{__('msg.Cash back')}}<br/>
                                            <?php if($data['restroInfo']->cashback_allow === '1'){ 
                                                echo 'Yes ';
                                                if(!empty($data['restroInfo']->cashback_val)) echo  $data['restroInfo']->cashback_val;
                                            }else echo 'No';?> 
                                            </span>
                                            <?php } ?>
                                            <span class="icon-right"><a href="#" data-toggle="modal" data-target="#cashBack"><i class="fas fa-pencil-alt"></i></a></span>
                                        </div>
                                        <div class="GDRHkb">
                                            <span><i class="fas fa-camera"></i></span>
                                            <span>{{__('msg.Accept COOL rewards')}} <br/>
                                                @if($data['restroInfo']->accept_rewards === '1')
                                                    Yes
                                                @else No
                                                @endif
                                            </span>
                                            <span class="icon-right"><a href="#" data-toggle="modal" data-target="#acceptReward"><i class="fas fa-pencil-alt"></i></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h4><b>Insights</b></h4>
                    <div class="top-sec">
                        <div class="pagination-text">
                            <p><b>latest</b></p>
                        </div>
                        <div class="custom-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><span> 17 items</span></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                    <li class="page-item"><span>1 of 2</span></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    <div class="tinymce-single responsive-mg-b-30 p-0">
                        <div class="user-comment mg-b-15">
                            <div class="comment-details">
                                <i>customer insight - Jan 1, 2021</i>
                                <div class="comment-replay">
                                    <span>was this useful? </span>
                                    <span><i class="far fa-thumbs-down"></i></span>
                                    <span><i class="far fa-thumbs-up"></i></span>
                                </div>
                                <h4 class="pt-15"><b>In December, 71% of similar merchants had more new customers than you</b></h4>
                                <p>Create a "Buy1, Get1" offer to attract new customers. Merchants offering this to new customers have on average 10% higher convi </p>
                                <div class="bottom-btn text-right py-2">
                                    <a class="btn-style-one" href="#">View Analytics</a>
                                    <a class="btn-style-default" href="#">Create effer</a>
                                </div>
                            </div>
                        </div>
                        <div class="user-comment mg-b-15">
                            <div class="comment-details">
                                <i>customer insight - Jan 1, 2021</i>
                                <div class="comment-replay">
                                    <span>was this useful? </span>
                                    <span><i class="far fa-thumbs-down"></i></span>
                                    <span><i class="far fa-thumbs-up"></i></span>
                                </div>
                                <h4 class="pt-15"><b>In December, 71% of similar merchants had more new customers than you</b></h4>
                                <p>Create a "Buy1, Get1" offer to attract new customers. Merchants offering this to new customers have on average 10% higher convi </p>
                                <div class="bottom-btn text-right py-2">
                                    <a class="btn-style-default" href="#">Create effer</a>
                                </div>
                            </div>
                        </div>
                        <div class="user-comment mg-b-15">
                            <div class="comment-details">
                                <div class="social-media-in">
                                    <img class="border-0" src="{{url('public/assets/img/icons/1.png')}}" alt="comment-img">
                                </div>
                                <h4 class="pt-15"><b>Add manager to your business</b></h4>
                                <p>Invite more users to manage your Business Profile</p>
                                <div class="py-2">
                                    <a class="btn-style-border" href="#">Send invite</a>
                                </div>
                            </div>
                        </div>
                        <div class="user-comment mg-b-15">
                            <div class="comment-details">
                                <h4 class="pt-15"><b>Reach 100000 of customer easily in minute</b></h4>
                                <p>Getting started is simple - we walk you though every step. 
                                Send Happy hour information, group promotions and special events
                                happening in your place to the customers in minute.
                            </p>
                                <div class="py-2">
                                    <a class="btn btn-primary waves-effect waves-light" href="#">Start now</a>
                                </div>
                            </div>
                        </div>
                        <div class="user-comment mg-b-15 clearfix">
                            <div class="comment-details">
                                <div class="social-media-in"><i class="fas fa-print"></i></div>
                                <p>Scan  QR  to get paid</p>
                                <div>
                                    <img class="border-0" src="{{url('public/assets/img/icons/QR.png')}}" alt="QR" width="90">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright © <script>document.write(new Date().getFullYear())</script>. All rights reserved. <a href="#">COOL Rewards</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Calender Modal -->
<div class="modal fade bd-example-modal-lg" id="myLargeModalLabel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <h6>Hours</h6>
                <div class="alert alert-danger" id="timingidmsg" style="display: none"></div>
                <form id="calenderForm" method="post" action="{{url('checking')}}">
                    <table class="table table-borderless">
                    <tbody>
                        <!-- Sunday -->
                        <tr class="after-add-more-sunday">
                            <input type="hidden" name="res_set_sunday_id[]" value="0">
                            <td><b>Sunday</b></td>
                            <td>
                                <input type="hidden" name="sunday_day" value="7">
                                <div class="switch-btn">
                                    <div class="switch-toggle">
                                        <label class="switch">
                                            @if(count($data["sunday_record"]) > 0 && $data["sunday_record"][0]['open_close']== '1')  
                                            <input type="checkbox" name="sunday_open" value="1" class="timeSlotCheck" keyCheck="sunday_open" checked>
                                            @else
                                            <input type="checkbox" name="sunday_open" value="1" class="timeSlotCheck" keyCheck="sunday_open">
                                            @endif

                                            <!-- <input type="checkbox" name="sunday_open" value="1"> -->
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    @if(count($data["sunday_record"]) > 0 && $data["sunday_record"][0]['open_close']== '1')  
                                    <span id="sunday_open">Open</span>
                                    @else
                                    <span id="sunday_open">Closed</span>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="sunday_open_time[]" class="form-control border-btm" style="-webkit-appearance: none;">
                                        @foreach($data['timeSlots'] as $timeVal)
                                            <option value="{{$timeVal}}" @if(count($data["sunday_record"]) > 0 && $data["sunday_record"][0]['starttime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="sunday_close_time[]" class="form-control border-btm"  style="-webkit-appearance: none;">
                                        @foreach($data['timeSlots'] as $timeVal)
                                            <option value="{{$timeVal}}" @if(count($data["sunday_record"]) > 0 && $data["sunday_record"][0]['endtime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td><a href="javascript:void(0);" class="add-more-sunday">{{__('msg.Add hours')}}</a></td>
                        </tr>
                        @if(count($data["sunday_record"])>1)
                            @php for($i=1; $i < count($data["sunday_record"]);$i++) { @endphp
                                <tr class="more-hours@php echo $data['sunday_record'][$i]['id'] @endphp">
                                    <input type="hidden" name="res_set_sunday_id[]" value="{{ $data['sunday_record'][$i]['id'] }} ">
                                    <td></td><td></td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control border-btm" name="sunday_open_time[]" style="-webkit-appearance: none;">
                                                @foreach($data['timeSlots'] as $timeVal)
                                                    <option value="{{$timeVal}}" @if(count($data["sunday_record"]) > 0 && $data["sunday_record"][$i]['starttime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control border-btm" name="sunday_close_time[]" style="-webkit-appearance: none;">
                                                @foreach($data['timeSlots'] as $timeVal)
                                                    <option value="{{$timeVal}}" @if(count($data["sunday_record"]) > 0 && $data["sunday_record"][$i]['endtime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group change">
                                        <a class="remove" onclick="return confirm_daleteresSet('@php echo $data['sunday_record'][$i]['id'] @endphp')">- Supprimer</a></div>
                                    </td>
                                </tr>
                            @php } @endphp
                        @endif

                        <!-- Monday -->
                        <tr class="after-add-more-monday">
                            <input type="hidden" name="res_set_monday_id[]" value="0">
                            <td><b>Monday</b></td>
                            <td>
                                <input type="hidden" name="monday_day" value="1">
                                <div class="switch-btn">
                                    <div class="switch-toggle">
                                        <label class="switch">
                                            @if(count($data["monday_record"]) > 0 && $data["monday_record"][0]['open_close']== '1')  
                                            <input type="checkbox" name="monday_open" value="1" class="timeSlotCheck" keyCheck="monday_open" checked>
                                            @else
                                            <input type="checkbox" name="monday_open" value="1" class="timeSlotCheck" keyCheck="monday_open">
                                            @endif
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    @if(count($data["monday_record"]) > 0 && $data["monday_record"][0]['open_close']== '1')  
                                    <span id="monday_open">Open</span>
                                    @else
                                    <span id="monday_open">Closed</span>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="monday_open_time[]" class="form-control border-btm" style="-webkit-appearance: none;">
                                        @foreach($data['timeSlots'] as $timeVal)
                                            <option value="{{$timeVal}}" @if(count($data["monday_record"]) > 0 && $data["monday_record"][0]['starttime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="monday_close_time[]" class="form-control border-btm"  style="-webkit-appearance: none;">
                                        @foreach($data['timeSlots'] as $timeVal)
                                            <option value="{{$timeVal}}" @if(count($data["monday_record"]) > 0 && $data["monday_record"][0]['endtime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td><a href="javascript:void(0);" class="add-more-monday">{{__('msg.Add hours')}}</a></td>
                        </tr>
                        @if(count($data["monday_record"])>1)
                            @php for($i=1; $i < count($data["monday_record"]);$i++) { @endphp
                                <tr class="more-hours@php echo $data['monday_record'][$i]['id'] @endphp">
                                    <input type="hidden" name="res_set_monday_id[]" value="{{ $data['monday_record'][$i]['id'] }} ">
                                    <td></td><td></td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control border-btm" name="monday_open_time[]" style="-webkit-appearance: none;">
                                                @foreach($data['timeSlots'] as $timeVal)
                                                    <option value="{{$timeVal}}" @if(count($data["monday_record"]) > 0 && $data["monday_record"][$i]['starttime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control border-btm" name="monday_close_time[]" style="-webkit-appearance: none;">
                                                @foreach($data['timeSlots'] as $timeVal)
                                                    <option value="{{$timeVal}}" @if(count($data["monday_record"]) > 0 && $data["monday_record"][$i]['endtime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group change">
                                        <a class="remove" onclick="return confirm_daleteresSet('@php echo $data['monday_record'][$i]['id'] @endphp')">- Supprimer</a></div>
                                    </td>
                                </tr>
                            @php } @endphp
                        @endif

                        <!-- Tuesday -->
                        <tr class="after-add-more-tuesday">
                            <input type="hidden" name="res_set_tuesday_id[]" value="0">
                            <td><b>Tuesday</b></td>
                            <td>
                                <input type="hidden" name="tuesday_day" value="2">
                                <div class="switch-btn">
                                    <div class="switch-toggle">
                                        <label class="switch">
                                            @if(count($data["tuesday_record"]) > 0 && $data["tuesday_record"][0]['open_close']== '1')  
                                            <input type="checkbox" name="tuesday_open" value="1" class="timeSlotCheck" keyCheck="tuesday_open" checked>
                                            @else
                                            <input type="checkbox" name="tuesday_open" value="1" class="timeSlotCheck" keyCheck="tuesday_open">
                                            @endif
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    @if(count($data["tuesday_record"]) > 0 && $data["tuesday_record"][0]['open_close']== '1')  
                                    <span id="tuesday_open">Open</span>
                                    @else
                                    <span id="tuesday_open">Closed</span>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="tuesday_open_time[]" class="form-control border-btm" style="-webkit-appearance: none;">
                                        @foreach($data['timeSlots'] as $timeVal)
                                            <option value="{{$timeVal}}" @if(count($data["tuesday_record"]) > 0 && $data["tuesday_record"][0]['starttime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="tuesday_close_time[]" class="form-control border-btm"  style="-webkit-appearance: none;">
                                        @foreach($data['timeSlots'] as $timeVal)
                                            <option value="{{$timeVal}}" @if(count($data["tuesday_record"]) > 0 && $data["tuesday_record"][0]['endtime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td><a href="javascript:void(0);" class="add-more-tuesday">{{__('msg.Add hours')}}</a></td>
                        </tr>
                        @if(count($data["tuesday_record"])>1)
                            @php for($i=1; $i < count($data["tuesday_record"]);$i++) { @endphp
                                <tr class="more-hours@php echo $data['tuesday_record'][$i]['id'] @endphp">
                                    <input type="hidden" name="res_set_tuesday_id[]" value="{{ $data['tuesday_record'][$i]['id'] }} ">
                                    <td></td><td></td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control border-btm" name="tuesday_open_time[]" style="-webkit-appearance: none;">
                                                @foreach($data['timeSlots'] as $timeVal)
                                                    <option value="{{$timeVal}}" @if(count($data["tuesday_record"]) > 0 && $data["tuesday_record"][$i]['starttime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control border-btm" name="tuesday_close_time[]" style="-webkit-appearance: none;">
                                                @foreach($data['timeSlots'] as $timeVal)
                                                    <option value="{{$timeVal}}" @if(count($data["tuesday_record"]) > 0 && $data["tuesday_record"][$i]['endtime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group change">
                                        <a class="remove" onclick="return confirm_daleteresSet('@php echo $data['tuesday_record'][$i]['id'] @endphp')">- Supprimer</a></div>
                                    </td>
                                </tr>
                            @php } @endphp
                        @endif

                        <!-- Wednesday -->
                        <tr class="after-add-more-wednesday">
                            <input type="hidden" name="res_set_wednesday_id[]" value="0">
                            <td><b>Wednesday</b></td>
                            <td>
                                <input type="hidden" name="wednesday_day" value="3">
                                <div class="switch-btn">
                                    <div class="switch-toggle">
                                        <label class="switch">
                                            @if(count($data["wednesday_record"]) > 0 && $data["wednesday_record"][0]['open_close']== '1')  
                                            <input type="checkbox" name="wednesday_open" value="1" class="timeSlotCheck" keyCheck="wednesday_open" checked>
                                            @else
                                            <input type="checkbox" name="wednesday_open" value="1" class="timeSlotCheck" keyCheck="wednesday_open">
                                            @endif
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    @if(count($data["wednesday_record"]) > 0 && $data["wednesday_record"][0]['open_close']== '1')  
                                    <span id="wednesday_open">Open</span>
                                    @else
                                    <span id="wednesday_open">Closed</span>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="wednesday_open_time[]" class="form-control border-btm" style="-webkit-appearance: none;">
                                        @foreach($data['timeSlots'] as $timeVal)
                                            <option value="{{$timeVal}}" @if(count($data["wednesday_record"]) > 0 && $data["wednesday_record"][0]['starttime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="wednesday_close_time[]" class="form-control border-btm"  style="-webkit-appearance: none;">
                                        @foreach($data['timeSlots'] as $timeVal)
                                            <option value="{{$timeVal}}" @if(count($data["wednesday_record"]) > 0 && $data["wednesday_record"][0]['endtime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td><a href="javascript:void(0);" class="add-more-wednesday">{{__('msg.Add hours')}}</a></td>
                        </tr>
                        @if(count($data["wednesday_record"])>1)
                            @php for($i=1; $i < count($data["wednesday_record"]);$i++) { @endphp
                                <tr class="more-hours@php echo $data['wednesday_record'][$i]['id'] @endphp">
                                    <input type="hidden" name="res_set_wednesday_id[]" value="{{ $data['wednesday_record'][$i]['id'] }} ">
                                    <td></td><td></td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control border-btm" name="wednesday_open_time[]" style="-webkit-appearance: none;">
                                                @foreach($data['timeSlots'] as $timeVal)
                                                    <option value="{{$timeVal}}" @if(count($data["wednesday_record"]) > 0 && $data["wednesday_record"][$i]['starttime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control border-btm" name="wednesday_close_time[]" style="-webkit-appearance: none;">
                                                @foreach($data['timeSlots'] as $timeVal)
                                                    <option value="{{$timeVal}}" @if(count($data["wednesday_record"]) > 0 && $data["wednesday_record"][$i]['endtime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group change">
                                        <a class="remove" onclick="return confirm_daleteresSet('@php echo $data['wednesday_record'][$i]['id'] @endphp')">- Supprimer</a></div>
                                    </td>
                                </tr>
                            @php } @endphp
                        @endif

                        <!-- Thursday -->
                        <tr class="after-add-more-thursday">
                            <input type="hidden" name="res_set_thursday_id[]" value="0">
                            <td><b>Thursday</b></td>
                            <td>
                                <input type="hidden" name="thursday_day" value="4">
                                <div class="switch-btn">
                                    <div class="switch-toggle">
                                        <label class="switch">
                                            @if(count($data["thursday_record"]) > 0 && $data["thursday_record"][0]['open_close']== '1')  
                                            <input type="checkbox" name="thursday_open" value="1" class="timeSlotCheck" keyCheck="thursday_open" checked>
                                            @else
                                            <input type="checkbox" name="thursday_open" value="1" class="timeSlotCheck" keyCheck="thursday_open">
                                            @endif
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    @if(count($data["thursday_record"]) > 0 && $data["thursday_record"][0]['open_close']== '1')  
                                    <span id="thursday_open">Open</span>
                                    @else
                                    <span id="thursday_open">Closed</span>
                                    @endif
                                    
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="thursday_open_time[]" class="form-control border-btm" style="-webkit-appearance: none;">
                                        @foreach($data['timeSlots'] as $timeVal)
                                            <option value="{{$timeVal}}" @if(count($data["thursday_record"]) > 0 && $data["thursday_record"][0]['starttime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="thursday_close_time[]" class="form-control border-btm"  style="-webkit-appearance: none;">
                                        @foreach($data['timeSlots'] as $timeVal)
                                            <option value="{{$timeVal}}" @if(count($data["thursday_record"]) > 0 && $data["thursday_record"][0]['endtime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td><a href="javascript:void(0);" class="add-more-thursday">{{__('msg.Add hours')}}</a></td>
                        </tr>
                        @if(count($data["thursday_record"])>1)
                            @php for($i=1; $i < count($data["thursday_record"]);$i++) { @endphp
                                <tr class="more-hours@php echo $data['thursday_record'][$i]['id'] @endphp">
                                    <input type="hidden" name="res_set_thursday_id[]" value="{{ $data['thursday_record'][$i]['id'] }} ">
                                    <td></td><td></td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control border-btm" name="thursday_open_time[]" style="-webkit-appearance: none;">
                                                @foreach($data['timeSlots'] as $timeVal)
                                                    <option value="{{$timeVal}}" @if(count($data["thursday_record"]) > 0 && $data["thursday_record"][$i]['starttime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control border-btm" name="thursday_close_time[]" style="-webkit-appearance: none;">
                                                @foreach($data['timeSlots'] as $timeVal)
                                                    <option value="{{$timeVal}}" @if(count($data["thursday_record"]) > 0 && $data["thursday_record"][$i]['endtime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group change">
                                        <a class="remove" onclick="return confirm_daleteresSet('@php echo $data['thursday_record'][$i]['id'] @endphp')">- Supprimer</a></div>
                                    </td>
                                </tr>
                            @php } @endphp
                        @endif

                        <!-- Friday -->
                        <tr class="after-add-more-friday">
                            <input type="hidden" name="res_set_friday_id[]" value="0">
                            <td><b>Friday</b></td>
                            <td>
                                <input type="hidden" name="friday_day" value="5">
                                <div class="switch-btn">
                                    <div class="switch-toggle">
                                        <label class="switch">
                                            @if(count($data["friday_record"]) > 0 && $data["friday_record"][0]['open_close']== '1')  
                                            <input type="checkbox" name="friday_open" value="1" class="timeSlotCheck" keyCheck="friday_open" checked>
                                            @else
                                            <input type="checkbox" name="friday_open" value="1" class="timeSlotCheck" keyCheck="friday_open">
                                            @endif
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    @if(count($data["friday_record"]) > 0 && $data["friday_record"][0]['open_close']== '1')  
                                    <span id="friday_open">Open</span>
                                    @else
                                    <span id="friday_open">Closed</span>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="friday_open_time[]" class="form-control border-btm" style="-webkit-appearance: none;">
                                        @foreach($data['timeSlots'] as $timeVal)
                                            <option value="{{$timeVal}}" @if(count($data["friday_record"]) > 0 && $data["friday_record"][0]['starttime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="friday_close_time[]" class="form-control border-btm"  style="-webkit-appearance: none;">
                                        @foreach($data['timeSlots'] as $timeVal)
                                            <option value="{{$timeVal}}" @if(count($data["friday_record"]) > 0 && $data["friday_record"][0]['endtime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td><a href="javascript:void(0);" class="add-more-friday">{{__('msg.Add hours')}}</a></td>
                        </tr>
                        @if(count($data["friday_record"])>1)
                            @php for($i=1; $i < count($data["friday_record"]);$i++) { @endphp
                                <tr class="more-hours@php echo $data['friday_record'][$i]['id'] @endphp">
                                    <input type="hidden" name="res_set_friday_id[]" value="{{ $data['friday_record'][$i]['id'] }} ">
                                    <td></td><td></td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control border-btm" name="friday_open_time[]" style="-webkit-appearance: none;">
                                                @foreach($data['timeSlots'] as $timeVal)
                                                    <option value="{{$timeVal}}" @if(count($data["friday_record"]) > 0 && $data["friday_record"][$i]['starttime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control border-btm" name="friday_close_time[]" style="-webkit-appearance: none;">
                                                @foreach($data['timeSlots'] as $timeVal)
                                                    <option value="{{$timeVal}}" @if(count($data["friday_record"]) > 0 && $data["friday_record"][$i]['endtime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group change">
                                        <a class="remove" onclick="return confirm_daleteresSet('@php echo $data['friday_record'][$i]['id'] @endphp')">- Supprimer</a></div>
                                    </td>
                                </tr>
                            @php } @endphp
                        @endif

                        <!-- Saturday -->
                        <tr class="after-add-more-saturday">
                            <input type="hidden" name="res_set_saturday_id[]" value="0">
                            <td><b>Saturday</b></td>
                            <td>
                                <input type="hidden" name="saturday_day" value="6">
                                <div class="switch-btn">
                                    <div class="switch-toggle">
                                        <label class="switch">
                                            @if(count($data["saturday_record"]) > 0 && $data["saturday_record"][0]['open_close']== '1')  
                                            <input type="checkbox" name="saturday_open" value="1" class="timeSlotCheck" keyCheck="saturday_open" checked>
                                            @else
                                            <input type="checkbox" name="saturday_open" value="1" class="timeSlotCheck" keyCheck="saturday_open">
                                            @endif
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    @if(count($data["saturday_record"]) > 0 && $data["saturday_record"][0]['open_close']== '1')  
                                    <span id="saturday_open">Open</span>
                                    @else
                                    <span id="saturday_open">Closed</span>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="saturday_open_time[]" class="form-control border-btm" style="-webkit-appearance: none;">
                                        @foreach($data['timeSlots'] as $timeVal)
                                            <option value="{{$timeVal}}" @if(count($data["saturday_record"]) > 0 && $data["saturday_record"][0]['starttime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="saturday_close_time[]" class="form-control border-btm"  style="-webkit-appearance: none;">
                                        @foreach($data['timeSlots'] as $timeVal)
                                            <option value="{{$timeVal}}" @if(count($data["saturday_record"]) > 0 && $data["saturday_record"][0]['endtime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td><a href="javascript:void(0);" class="add-more-saturday">{{__('msg.Add hours')}}</a></td>
                        </tr>
                        @if(count($data["saturday_record"])>1)
                            @php for($i=1; $i < count($data["saturday_record"]);$i++) { @endphp
                                <tr class="more-hours@php echo $data['saturday_record'][$i]['id'] @endphp">
                                    <input type="hidden" name="res_set_saturday_id[]" value="{{ $data['saturday_record'][$i]['id'] }} ">
                                    <td></td><td></td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control border-btm" name="saturday_open_time[]" style="-webkit-appearance: none;">
                                                @foreach($data['timeSlots'] as $timeVal)
                                                    <option value="{{$timeVal}}" @if(count($data["saturday_record"]) > 0 && $data["saturday_record"][$i]['starttime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control border-btm" name="saturday_close_time[]" style="-webkit-appearance: none;">
                                                @foreach($data['timeSlots'] as $timeVal)
                                                    <option value="{{$timeVal}}" @if(count($data["saturday_record"]) > 0 && $data["saturday_record"][$i]['endtime'] == $timeVal) selected @endif>{{$timeVal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group change">
                                        <a class="remove" onclick="return confirm_daleteresSet('@php echo $data['saturday_record'][$i]['id'] @endphp')">- Supprimer</a></div>
                                    </td>
                                </tr>
                            @php } @endphp
                        @endif
                    </tbody>
                </table>
                </form>
                <div class="btn-footer text-right py-3">
                    <a href="javascript:void(0);" data-dismiss="modal">Cancel</a>
                    <a href="javascript:void(0);" class="calenderAdd">Apply</a>
                </div>
                
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!-- Add URL -->
<div class="modal fade bd-example-modal-sm" id="addURL" tabindex="-1" role="dialog" aria-labelledby="#addURL" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
          <div class="modal-body">
            <h5>Website</h5>
            <div class="lan-phon py-3">
                <div class="alert alert-danger" id="urlidmsg" style="display: none"></div>
                <div class="">
                    <div class="form-group">
                        <input name="webaddress" type="text" class="form-control w-100" placeholder="" required value="@if(!empty($data['restroInfo']->website)) {{$data['restroInfo']->website}} @endif">
                    </div>
                </div>
            </div>
            <div class="btn-footer text-right py-3">
                <a href="javascript:void(0);" data-dismiss="modal">Cancel</a>
                <a href="javascript:void(0);" class="urlAdd">Apply</a>
            </div>
          </div>
          <div class="modal-footer"></div>
      </div>
    </div>
</div>

<!-- Add Location Modal -->
<style>
.modal { z-index: 1001 !important;} 
.modal-backdrop {z-index: 1000 !important;}
.pac-container {z-index: 1055 !important;}
</style>
<div class="modal fade" id="addLocation" tabindex="-1" role="dialog" aria-labelledby="#addLocation" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="pb-3">Business Location</h5>
                <p>Let customers see your business location on App by adding a street address.</p>
                <div class="row">
                    <div class="alert alert-danger" id="advalidmsg" style="display: none"></div>
                    <div class="col-lg-5">
                        <div class="add-feild">
                            <div class="pb-3">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>street address</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-select-list">
                                            <input type="text" class="form-control input-lg border-btm" placeholder="Route" id="address" value="@if(!empty($data['restroInfo']->address)) {{$data['restroInfo']->address}} @endif">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-3">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>country / Region</label>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-select-list">
                                            <input type="text" class="form-control input-lg border-btm" placeholder="France" id="country" value="@if(!empty($data['restroInfo']->country)) {{$data['restroInfo']->country}} @endif" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <div class="pb-3">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>Postal code</label>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-select-list">
                                                <input type="text" class="form-control input-lg border-btm" placeholder="92100" id="postal_code" value="@if(!empty($data['restroInfo']->postal_code)) {{$data['restroInfo']->postal_code}} @endif" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 iframe_wrapper">
                        @if(!empty($data['restroInfo']->address) && !empty($data['restroInfo']->latitude) && !empty($data['restroInfo']->longitude))
                            <iframe src="https://www.google.com/maps/embed/v1/place?key={{env('GOOGLE_KEY')}}&q={{$data['restroInfo']->address}}&center={{$data['restroInfo']->latitude}},{{$data['restroInfo']->longitude}}" width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        @else
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.748119120482!2d2.367535915024858!3d48.8439430096789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6721c8879ed9d%3A0xfe98d7dfe4de896c!2sQuai%20de%20la%20Rap%C3%A9e%2C%20Paris%2C%20France!5e0!3m2!1sen!2sin!4v1622995889700!5m2!1sen!2sin" width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        @endif
                    </div>
                </div>
                <div class="btn-footer text-right py-3">
                    <input type="hidden" id="cityLat" value="@if(!empty($data['restroInfo']->latitude)) {{$data['restroInfo']->latitude}} @endif">
                    <input type="hidden" id="cityLng" value="@if(!empty($data['restroInfo']->longitude)) {{$data['restroInfo']->longitude}} @endif">
                    <a href="javascript:void(0);" data-dismiss="modal">Close</a>
                    <a href="javascript:void(0);" class="restroAdd">Apply</a>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Add Business decription Modal -->
<div class="modal fade" id="addBusiness" tabindex="-1" role="dialog" aria-labelledby="#addBusiness" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered small-modal" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <h5 class="">{{__('msg.From the business')}}</h5>
            <p>{{__('msg.Write a brief description of your business.')}}</p>

            <div class="row">
                <div class="alert alert-danger" id="descidmsg" style="display: none"></div>
                <form id="aboutForm">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="des-msg res-mg-t-15 py-3">
                        <textarea class="border-btm w-100" placeholder="" name="aboutMe" id="aboutMe">@if(!empty($data['restroInfo']->business_info)) {{$data['restroInfo']->business_info}} @endif</textarea>
                        <span class="msg-length word-type">0 / 100</span>
                    </div>
                </div>
                </form>
                
            </div>
            <div class="btn-footer text-right py-3">
                <a href="javascript:void(0);" data-dismiss="modal">Cancel</a>
                <a href="javascript:void(0);" class="descAdd">Apply</a>
            </div>
        </div>
        <div class="modal-footer"></div>
    </div>
    </div>
</div>

<!-- Service Modal  -->
<div class="modal fade" id="restroService" tabindex="-1" role="dialog" aria-labelledby="#restroService" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered small-modal" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="">{{__('msg.Service')}}</h5>
                <p>{{__('msg.Let customers know your service category')}}</p>

                <div class="row">
                    <div class="alert alert-danger" id="serviceidmsg" style="display: none"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                            <input type="radio" value="1" name="serviceType" @if(!empty($data['restroInfo']->service_type) && $data['restroInfo']->service_type === '1') checked @endif> <i></i> Restaurant </label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                            <input type="radio" value="2" name="serviceType" @if(!empty($data['restroInfo']->service_type) && $data['restroInfo']->service_type === '2') checked @endif> <i></i> Bar </label>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="i-checks pull-left">
                            <label>
                            <input type="radio" value="3" name="serviceType" @if(!empty($data['restroInfo']->service_type) && $data['restroInfo']->service_type === '3') checked @endif> <i></i> Restaurant & Bar </label>
                        </div>
                    </div>
                    
                </div>
                <div class="btn-footer text-right py-3">
                    <a href="javascript:void(0);" data-dismiss="modal">Cancel</a>
                    <a href="javascript:void(0);" class="serviceAdd">Apply</a>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!-- Add Cashback -->
<div class="modal fade bd-example-modal-sm" id="cashBack" tabindex="-1" role="dialog" aria-labelledby="#cashBack" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5>Cashback</h5>
                <form id="cashBackForm">
                <div class="row py-4">
                    <div class="alert alert-danger" id="cashbackidmsg" style="display: none"></div>
                    <div class="col-lg-3">
                        <div class="i-checks pull-left">
                            <label>
                            <input type="radio" name="allowcashback" value="1" @if($data['restroInfo']->cashback_allow == '1') checked @endif> <i></i> Yes </label>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="i-checks pull-left">
                            <label>
                            <input type="radio" name="allowcashback" value="0" @if($data['restroInfo']->cashback_allow == '0') checked @endif> <i></i> No </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 py-2">
                        <div class="form-group">
                            <input class="form-control w-100"  type="text" name="cashbackVal" placeholder="5 %" value="@if(!empty($data['restroInfo']->cashback_val) && $data['restroInfo']->cashback_allow == '1') {{$data['restroInfo']->cashback_val}} @endif" />
                        </div>
                    </div>
                </div>
                </form>
                <div class="btn-footer text-right py-3">
                    <a href="javascript:void(0);" data-dismiss="modal">Cancel</a>
                    <a href="javascript:void(0);" class="cashbackAdd">Apply</a>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!-- Accept rewards Modal  -->
<div class="modal fade" id="acceptReward" tabindex="-1" role="dialog" aria-labelledby="#acceptReward" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="">
                <div class="alert alert-danger" id="rewardidmsg" style="display: none"></div>
                <form id="rewardForm">
                    <div class="py-5 text-center">
                        <div class="col-lg-3">
                            <div class="i-checks pull-left">
                                <label>
                                <input type="radio" value="1" name="acceptReward" @if($data['restroInfo']->accept_rewards == '1') checked @endif> <i></i> Yes </label>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="i-checks pull-left">
                                <label>
                                <input type="radio" value="0" name="acceptReward" @if($data['restroInfo']->accept_rewards == '0') checked @endif> <i></i> No </label>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="btn-footer text-right py-3">
                    <a href="javascript:void(0);" data-dismiss="modal">Cancel</a>
                    <a href="javascript:void(0);" class="allowrewardAdd">Apply</a>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!--  business name Modal -->
<div class="modal fade" id="businessModal" tabindex="-1" role="dialog" aria-labelledby="#businessModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered small-modal" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h6 class="pb-3">{{__('msg.Business Name')}}</h6>
                <p>{{__('msg.Enter your business name as it appears to customers in the real world.')}}</p>
                <div class="alert alert-danger" id="myinfoidmsg" style="display: none"></div>
                <form id="businessForm">
                    <div class="form-group">
                        <input name="myname" type="text" class="form-control" placeholder="" value="@if(!empty($data['restroInfo']->restro_name)) {{$data['restroInfo']->restro_name}} @endif">
                    </div>
                </form>
                <div class="btn-footer text-right py-3">
                    <a href="javascript:void(0);" data-dismiss="modal">Close</a>
                    <a href="javascript:void(0);" class="myInfoadd">Apply</a>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!-- Add Telephone Number -->
<div class="modal fade bd-example-modal-sm" id="addNumber" tabindex="-1" role="dialog" aria-labelledby="#addNumber" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
          <div class="modal-body">
            <h5>Phone Number</h5>
            <div class="lan-phon py-3">
                <div class="alert alert-danger" id="contactidmsg" style="display: none"></div>
                <form id="contactForm">
                    <input type="hidden" class="remainContact" value="100000">
                    <div class="align-items-center">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Primary phone</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group after-add-more-contact">
                                        <input name="myContact[]" type="text" class="form-control border-btm" id="mycontact" placeholder="12345678" onkeypress="return isIntKey(event);">
                                        <input type="hidden" id="contactCountry" name="contactCountry[]" value="1"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="add-more-contact">Add phone number</a>
                </form>
           </div>
            <div class="btn-footer text-right py-3">
                <a href="javascript:void(0);" data-dismiss="modal">Cancel</a>
                <a href="javascript:void(0);" class="contactAdd">Apply</a>
            </div>
          </div>
          <div class="modal-footer"></div>
      </div>
    </div>
</div>

<!-- *******Start Free cocktail Add Edit Modal & Sub Modal****** -->
    <!-- Add or Edit Free cocktail -->
<div class="modal fade bd1-example-modal-lg in" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="#addProduct" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <div class="product-payment-inner-st">
                <div class="alert alert-danger" id="allProdidmsg" style="display: none"></div>
                <ul id="myTabedu1" class="tab-review-design">
                    <li class="active"><a href="#allproduct">{{__('msg.All Products')}}</a>
                    </li>
                    @if(!empty($data['restroInfo']->service_type) && ($data['restroInfo']->service_type === '1' || $data['restroInfo']->service_type === '3'))
                    <li><a href="#drinks">{{__('msg.Drinks')}}</a>
                    </li>
                    @endif
                    @if(!empty($data['restroInfo']->service_type) && ($data['restroInfo']->service_type === '2' || $data['restroInfo']->service_type === '3'))
                    <li><a href="#cocktail">{{__('msg.Cocktail')}}</a>
                    </li>
                    @endif
                    <li><a  href="#TabRedeem">{{__('msg.Redeem history')}}</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content custom-product-edit">
                    <div class="product-tab-list tab-pane fade active in" id="allproduct">
                    <div class="slide-6 theme-arrow product-m">
                            <div class="product-box hover">
                                <div class="product border-theme br-0">
                                   <div class="student-inner-std res-mg-b-30">
                                    <div class="student-img">
                                        <img src="{{url('public/assets/img/product/laptop.png')}}" alt="" />
                                    </div>
                                    <div class="student-dtl">
                                        <p class="m-0">Harvey Wallbanger</p>
                                        <div class="btm-filter">
                                            <div class="switch-btn">
                                                <div class="switch-toggle">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="icon-popup">
                                                <span><a data-toggle="modal" data-target=".delete-modal-sm" href="#"><i class="far fa-trash-alt"></i></a></span>
                                                <span><a href="#"><i class="far fa-eye"></i></a></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="product-box hover">
                                <div class="product border-theme br-0">
                                	<div class="student-inner-std res-mg-b-30">
                                    <div class="student-img">
                                        <img src="{{url('public/assets/img/product/laptop.png')}}" alt="" />
                                    </div>
                                    <div class="student-dtl">
                                        <p class="m-0">Harvey Wallbanger</p>
                                        <div class="btm-filter">
                                            <div class="switch-btn">
                                                <div class="switch-toggle">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="icon-popup">
                                                <span><a data-toggle="modal" data-target=".delete-modal-sm" href="#"><i class="far fa-trash-alt"></i></a></span>
                                                <span><a href="#"><i class="far fa-eye"></i></a></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="product-box hover">
                                <div class="product border-theme br-0">
                                    <div class="student-inner-std res-mg-b-30">
                                    <div class="student-img">
                                        <img src="{{url('public/assets/img/product/laptop.png')}}" alt="" />
                                    </div>
                                    <div class="student-dtl">
                                        <p class="m-0">Harvey Wallbanger</p>
                                        <div class="btm-filter">
                                            <div class="switch-btn">
                                                <div class="switch-toggle">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="icon-popup">
                                                <span><a data-toggle="modal" data-target=".delete-modal-sm" href="#"><i class="far fa-trash-alt"></i></a></span>
                                                <span><a href="#"><i class="far fa-eye"></i></a></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="product-box hover">
                                <div class="product border-theme br-0">
                                    <div class="student-inner-std res-mg-b-30">
                                    <div class="student-img">
                                        <img src="{{url('public/assets/img/product/laptop.png')}}" alt="" />
                                    </div>
                                    <div class="student-dtl">
                                        <p class="m-0">Harvey Wallbanger</p>
                                        <div class="btm-filter">
                                            <div class="switch-btn">
                                                <div class="switch-toggle">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="icon-popup">
                                                <span><a data-toggle="modal" data-target=".delete-modal-sm" href="#"><i class="far fa-trash-alt"></i></a></span>
                                                <span><a href="#"><i class="far fa-eye"></i></a></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="product-box hover">
                                <div class="product border-theme br-0">
                                    <div class="student-inner-std res-mg-b-30">
                                    <div class="student-img">
                                        <img src="{{url('public/assets/img/product/laptop.png')}}" alt="" />
                                    </div>
                                    <div class="student-dtl">
                                        <p class="m-0">Harvey Wallbanger</p>
                                        <div class="btm-filter">
                                            <div class="switch-btn">
                                                <div class="switch-toggle">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="icon-popup">
                                                <span><a data-toggle="modal" data-target=".delete-modal-sm" href="#"><i class="far fa-trash-alt"></i></a></span>
                                                <span><a href="#"><i class="far fa-eye"></i></a></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="product-box hover">
                                <div class="product border-theme br-0">
                                    <div class="student-inner-std res-mg-b-30">
                                    <div class="student-img">
                                        <img src="{{url('public/assets/img/product/laptop.png')}}" alt="" />
                                    </div>
                                    <div class="student-dtl">
                                        <p class="m-0">Harvey Wallbanger</p>
                                        <div class="btm-filter">
                                            <div class="switch-btn">
                                                <div class="switch-toggle">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="icon-popup">
                                                <span><a data-toggle="modal" data-target=".delete-modal-sm" href="#"><i class="far fa-trash-alt"></i></a></span>
                                                <span><a href="#"><i class="far fa-eye"></i></a></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="product-box hover">
                                <div class="product border-theme br-0">
                                    <div class="student-inner-std res-mg-b-30">
                                    <div class="student-img">
                                        <img src="{{url('public/assets/img/product/laptop.png')}}" alt="" />
                                    </div>
                                    <div class="student-dtl">
                                        <p class="m-0">Harvey Wallbanger</p>
                                        <div class="btm-filter">
                                            <div class="switch-btn">
                                                <div class="switch-toggle">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="icon-popup">
                                                <span><a data-toggle="modal" data-target=".delete-modal-sm" href="#"><i class="far fa-trash-alt"></i></a></span>
                                                <span><a href="#"><i class="far fa-eye"></i></a></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab-list tab-pane fade" id="drinks">
                        <div class="row">
                            <div class="py-3 pb-30">
                                <button data-toggle="modal" data-target="#addDrink" type="submit" class="btn btn-primary waves-effect waves-light">{{__('msg.Add Drinks')}}</button>
                            </div>
                            @if(!empty($data['myProducts']))
                            @foreach($data['myProducts'] as $prodVal)
                                @php $id = Crypt::encryptString($prodVal['id']);  @endphp
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="student-inner-std res-mg-b-30">
                                        <div class="student-img">
                                            <img src="{{url($prodVal['prod_img'])}}" alt="ProductImg" />
                                        </div>
                                        <div class="student-dtl">
                                            <p class="m-0">{{$prodVal['prod_name']}}</p>
                                            <div class="btm-filter">
                                                <div class="switch-btn">
                                                    <div class="switch-toggle">
                                                        <label class="switch">
                                                            <input type="checkbox" value="1" @if($prodVal['prod_status'] === '1') checked @endif class="drink-prod-status" keyD="{{$id}}">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="icon-popup">
                                                    <span><a onclick="deleteProd('{{$id}}')" href="javascript:void(0);"><i class="far fa-trash-alt"></i></a></span>
                                                    <span><a href="#"><i class="far fa-eye"></i></a></span>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="product-tab-list tab-pane fade" id="cocktail">
                        <div class="row">
                            <div class="py-3 pb-30">
                                <button data-toggle="modal" data-target="#addCocktail" type="submit" class="btn btn-primary waves-effect waves-light">{{__('msg.Add Cocktail')}}</button>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="student-inner-std res-mg-b-30">
                                    <div class="student-img">
                                        <img src="{{url('public/assets/img/product/cocktail.jpg')}}" alt="" />
                                    </div>
                                    <div class="student-dtl">
                                        <p class="m-0">Harvey Wallbanger</p>
                                        <div class="btm-filter">
                                            <div class="switch-btn">
                                                <div class="switch-toggle">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="icon-popup">
                                                <span><a data-toggle="modal" data-target=".delete-modal-sm" href="#"><i class="far fa-trash-alt"></i></a></span>
                                                <span><a href="#"><i class="far fa-eye"></i></a></span>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="student-inner-std res-mg-b-30 brd-one"> </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="student-inner-std res-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30 brd-one"></div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="student-inner-std res-tablet-mg-t-30 dk-res-t-pro-30 brd-one"></div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tab-list tab-pane fade" id="TabRedeem">
                        <div class="top-sec pb-3">
                            <div class="pagination-text"></div>
                            <form action="">
                                <div class="justify-content-center d-flex">
                                    <div class="col-lg-3 col-md-6 p-0">
                                        <label for="">This month</label>
                                    </div>
                                    <div class="col-lg-7 col-mg-10 pl-0">
                                        <input type="date" class="form-control datepicker border-btm" id="date1" placeholder="Select date" autocomplete="off" autofill="off">
                                    </div>
                                    <div class="col-lg-2 col-md-2">
                                        <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Download"><i class="fas fa-download"></i></button>
                                        <!-- <span class="dwn-icon"></span> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            <div class="product-status-wrap drp-lst">
                                
                                <div class="top-sec">
                                    <div class="pagination-text"></div>
                                    <div class="custom-pagination">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><span> 17 items</span></li>
                                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                                <li class="page-item"><span>1 of 2</span></li>
                                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="asset-inner bord-1">
                                    <table class="table-striped">
                                        <tr>
                                            <th>Username</th>
                                            <th>Redeem on</th>
                                            <th>menu</th>
                                            <th>Type</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>group_643224</td>
                                            <td>November 12,2019 12:00 am</td>
                                            <td>
                                                <b>Gin with fruit</b>
                                            </td>
                                            <td>Cocktail</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>group_232553</td>
                                            <td>November 4,2019 12:00 am</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>group_85759</td>
                                            <td>November 4,2019 12:00 am</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>group_4583</td>
                                            <td>November 4,2019 12:00 am</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>group_57593</td>
                                            <td>November 4,2019 12:00 am</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>group_65759</td>
                                            <td>November 4,2019 12:00 am</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <th>Redeem on</th>
                                            <th>menu</th>
                                            <th>Type</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="top-sec">
                                    <div class="pagination-text"></div>
                                    <div class="custom-pagination">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><span> 17 items</span></li>
                                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                                <li class="page-item"><span>1 of 2</span></li>
                                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-footer text-right py-3">
                <a href="javascript:void(0);" data-dismiss="modal">Cancel</a>
                <!--<a href="#">Apply</a>-->
            </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
    </div>
</div>
<!-- Add Drink -->
<div class="modal fade bd-example-modal-sm" id="addDrink" tabindex="-1" role="dialog" aria-labelledby="#addDrink" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex">
            <h5 class="modal-title fg" id="exampleModalLabel">Add drink</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="h-400">
                <div class="alert alert-danger" id="prodDirnkidmsg" style="display: none"></div>
                <form id="drinkAdd">
                    <div>
                        <div class="Wa_product_image_content_box upimg-1">
                            <input type="file" class="file-upload-input"  name="drinkImg" id="drinkImg" accept="image/jpeg">
                            <input type="hidden" id="dx" name="dx" />
                            <input type="hidden" id="dy" name="dy" />
                            <input type="hidden" id="dw" name="dw" />
                            <input type="hidden" id="dh" name="dh" />
                            <div class="add_new text-center" id="drink-img-preview">
                                <!--<div class="upl">-->
                                <!--    <span>{{__('msg.Drag a photo here')}}</span>-->
                                <!--    <br/>-->
                                       
                                <!--</div>-->
                                <!--<span class="text-center" py-3> or</span>-->
                            </div>
                            
                            <div class="image_coount_number py-3 mg-b-30">
                                <div class="product-buttons">
                                    <button type="button" class="button-default cart-btn">{{__('msg.Select a photo')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-section">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input name="drinkName" type="text" class="form-control" placeholder="{{__('msg.Drink name')}}" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input name="drintGredient" type="text" class="form-control" placeholder="{{__('msg.What\'s in it')}}">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group res-mg-t-15">
                                    <textarea name="description" placeholder="{{__('msg.Description')}}"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="btn-footer text-right py-3">
                <button type="button" class="btn btn-primary waves-effect waves-light drinkAdd">{{__('msg.Save')}}</button>
            </div>
          </div>
          <div class="modal-footer"></div>
      </div>
    </div>
</div>
<!-- *******End Free cocktail Add Edit Modal & Sub Modal****** -->




<!-- *******Start Add Photos Modal****** -->
<!-- Add Photos -->
<div class="modal fade bd1-example-modal-lg in" id="addPhoto" tabindex="-1" role="dialog" aria-labelledby="#addPhoto" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <div class="product-payment-inner-st">
                <ul id="myTabedu1" class="tab-review-design">
                    <li class="active"><a href="#INTERIOR">Interior</a>
                    </li>
                    <li><a href="#EXTERIOR">Exterior</a>
                    </li>
                    <li><a href="#IDENTITY">Identity</a>
                    </li>
                </ul>
                <!-- <form id="interiorForm"> -->
                <form id="showcaseForm">
                <div id="myTabContent" class="tab-content custom-product-edit">
                    <div class="alert alert-danger" id="showcaseidmsg" style="display: none"></div>
                        <div class="product-tab-list tab-pane fade active in" id="INTERIOR">
                            <div class="row invoice row-printable d-flex justify-content-center">
                                @if(!empty($data['restroInfo']->interior_img))
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="student-inner-std res-mg-b-30">
                                        <div class="student-img">
                                            <img src="{{url($data['restroInfo']->interior_img)}}" alt="" />
                                        </div>
                                        <div class="student-dtl">
                                            <h2>Interior</h2>
                                            <p class="dp">{{__('msg.Showcase the look and feel of your business with interior photos.')}}</p>
                                            <div class="product-buttons py-2">
                                                <button type="button" class="button-default cart-btn">Choose Photos</button>
                                            </div>
                                            <div class="py-4">
                                                <input type="file" class="file-upload-input" name="image_loader" id="image_loader" accept="image/jpeg">
                                                <input type="hidden" name="oldi" value="{{$data['restroInfo']->interior_img}}" />
                                                <input type="hidden" id="x" name="x" />
                                                <input type="hidden" id="y" name="y" />
                                                <input type="hidden" id="w" name="w" />
                                                <input type="hidden" id="h" name="h" />
                                            </div>
                                            <div id="image_input"></div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="interior-img text-center">
                                        <img class="d-block no-interior" src="{{url('public/assets/img/icons/Camera.png')}}" alt="interior1">
                                        <div class="student-dtl">
                                            <div class="d-block no-interior">
                                                <h2>{{__('msg.No photo yet')}}</h2>
                                                <p class="dp">{{__('msg.Showcase the look and feel of your business with interior photos.')}}</p>
                                            </div>
                                            
                                            <div class="py-4">
                                                <input type="file" class="file-upload-input" name="image_loader" id="image_loader" accept="image/jpeg">
                                                <input type="hidden" id="x" name="x" />
                                                <input type="hidden" id="y" name="y" />
                                                <input type="hidden" id="w" name="w" />
                                                <input type="hidden" id="h" name="h" />
                                                <div class="image_coount_number py-3 mg-b-30">
                                                    <div class="product-buttons">
                                                        <a href="javascript:void(0);"><span><i class="fas fa-plus-square pl-2"></i></span> {{ __('msg.Post photos')}}</a>
                                                    </div>
                                                </div>
                                                
                                                <!-- <a data-toggle="modal" data-target="#uploadPicture" href="#"><span><i class="fas fa-plus-square pl-2"></i></span> {{ __('msg.Post photos')}}</a> -->
                                            </div>
                                            <div id="image_input"></div>
                                        </div>
                                        <!-- <button type="button" class="interiorAdd">CropImage</button> -->
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="EXTERIOR">
                            <div class="row invoice row-printable d-flex justify-content-center">
                                @if(!empty($data['restroInfo']->exterior_img))
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="student-inner-std res-mg-b-30">
                                            <div class="student-img">
                                                <img src="{{url($data['restroInfo']->exterior_img)}}" alt="" />
                                            </div>
                                            <div class="student-dtl">
                                                <h2>Exterior</h2>
                                                <p class="dp">{{__('msg.Showcase the look and feel of your business with exterior photos.')}}</p>
                                                <div class="product-buttons py-2">
                                                    <button type="button" class="button-default cart-btn">Choose Photos</button>
                                                </div>
                                                <div class="py-4">
                                                    <input type="file" class="file-upload-input" name="image_exterior" id="image_exterior" accept="image/jpeg">
                                                    <input type="hidden" name="olde" value="{{$data['restroInfo']->exterior_img}}" />
                                                    <input type="hidden" id="ex" name="ex" />
                                                    <input type="hidden" id="ey" name="ey" />
                                                    <input type="hidden" id="ew" name="ew" />
                                                    <input type="hidden" id="eh" name="eh" />
                                                </div>
                                                <div id="image_input_exterior"></div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="interior-img text-center">
                                            <img class="no-exterior" src="{{url('public/assets/img/icons/Camera.png')}}" alt="exterior1">
                                            <div class="student-dtl">
                                                <div class="d-block no-exterior">
                                                    <h2>{{__('msg.No photo yet')}}</h2>
                                                    <p class="dp">{{__('msg.Showcase the look and feel of your business with exterior photos.')}}</p>
                                                </div>
                                                <div class="py-4">
                                                    <input type="file" class="file-upload-input" name="image_exterior" id="image_exterior" accept="image/jpeg">
                                                    <input type="hidden" id="ex" name="ex" />
                                                    <input type="hidden" id="ey" name="ey" />
                                                    <input type="hidden" id="ew" name="ew" />
                                                    <input type="hidden" id="eh" name="eh" />
                                                    <div class="image_coount_number py-3 mg-b-30">
                                                        <div class="product-buttons">
                                                            <a href="javascript:void(0);"><span><i class="fas fa-plus-square pl-2"></i></span> {{ __('msg.Post photos')}}</a>
                                                        </div>
                                                    </div>
                                                    <!--<a data-toggle="modal" data-target="#uploadPicture" href="#"><span><i class="fas fa-plus-square pl-2"></i></span> {{ __('msg.Post photos')}}</a>-->
                                                </div>
                                                <div id="image_input_exterior"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="IDENTITY">
                            <div class="row invoice row-printable d-flex justify-content-center">
                                @if(!empty($data['restroInfo']->logo_img))
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="student-inner-std res-mg-b-30">
                                            <div class="student-img">
                                                <img src="{{url($data['restroInfo']->logo_img)}}" alt="" />
                                            </div>
                                            <div class="student-dtl">
                                                <h2>Logo</h2>
                                                <p class="dp">{{ __('msg.Your logo is used to show your identity on the user invoice, when the user buy group promotion that published by you.')}}</p>
                                                <div class="product-buttons py-2">
                                                    <button type="button" class="button-default cart-btn">Choose Photos</button>
                                                </div>
                                                <div class="py-4">
                                                    <input type="file" class="file-upload-input" name="image_logo" id="image_logo" accept="image/jpeg">
                                                    <input type="hidden" name="oldl" value="{{$data['restroInfo']->logo_img}}" />
                                                    <input type="hidden" id="lx" name="lx" />
                                                    <input type="hidden" id="ly" name="ly" />
                                                    <input type="hidden" id="lw" name="lw" />
                                                    <input type="hidden" id="lh" name="lh" />
                                                </div>
                                                <div id="image_input_logo"></div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="interior-img text-center">
                                            <img class="no-logo" src="{{url('public/assets/img/icons/Camera.png')}}" alt="identity">
                                            <div class="student-dtl">
                                                <div class="d-block no-logo">
                                                    <h2>{{__('msg.No photo yet')}}</h2>
                                                    <p class="dp">{{ __('msg.Your logo is used to show your identity on the user invoice, when the user buy group promotion that published by you.')}}</p>
                                                </div>
                                                <div class="py-4">
                                                    <input type="file" class="file-upload-input" name="image_logo" id="image_logo" accept="image/jpeg">
                                                    <input type="hidden" id="lx" name="lx" />
                                                    <input type="hidden" id="ly" name="ly" />
                                                    <input type="hidden" id="lw" name="lw" />
                                                    <input type="hidden" id="lh" name="lh" />
                                                    <div class="image_coount_number py-3 mg-b-30">
                                                        <div class="product-buttons">
                                                            <a href="javascript:void(0);"><span><i class="fas fa-plus-square pl-2"></i></span> {{ __('msg.Post photos')}}</a>
                                                        </div>
                                                    </div>
                                                    <div id="image_input_logo"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="btn-footer text-right py-3">
                        <a href="javascript:void(0);" data-dismiss="modal">Cancel</a>
                        <a href="javascript:void(0);" class="interiorAdd">Apply</a>
                    </div>
                </div>
            </form>
            <div class="modal-footer"></div>
        </div>
    </div>
    </div>
</div>


<!-- Group Promotion -->
<div class="modal fade bd2-example-modal-lg in" id="groupPromotion" tabindex="-1" role="dialog" aria-labelledby="#groupPromotion" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-ex-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#PROMOTION">All promotions</a>
                        </li>
                        <li><a href="#COMPAIGN">Campaign Performance</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="PROMOTION">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="student-inner-std res-mg-b-30">
                                        <div class="student-img">
                                            <span class="expire-sym"></span>
                                            <img src="{{url('public/assets/img/product/laptop.png')}}" alt="" />
                                        </div>
                                        <div class="student-dtl p-0">
                                            <p class="m-0">Weekend cocktail gather</p>
                                            <div class="btm-filter">
                                                <div class="switch-btn">
                                                    <div class="switch-toggle">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="icon-popup">
                                                    <span><a data-toggle="modal" data-target=".delete-modal-sm" href="#"><i class="far fa-trash-alt"></i></a></span>
                                                    <span><a href="#"><i class="far fa-eye"></i></a></span>
                                                    <span><a href="#"><i class="fas fa-pencil-alt"></i></a></span>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="student-inner-std res-mg-b-30 brd-one"> </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="student-inner-std res-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30 brd-one"></div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="student-inner-std res-tablet-mg-t-30 dk-res-t-pro-30 brd-one"></div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="COMPAIGN">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="sparkline13-list">
                                        <div class="sparkline13-hd">
                                            <div class="top-sec pb-3">
                                                <div class="pagination-text d-block">
                                                    <button data-toggle="modal" data-target="#addPromotion"  class="pd-setting mr-4">Add Promotions</button>
                                                    <button class="btn-brd">Status</button>
                                                </div>
                                                <form action="">
                                                    <div class="justify-content-center d-flex">
                                                        <div class="col-lg-3 col-md-6 p-0">
                                                            <label for="">This month</label>
                                                        </div>
                                                        <div class="col-lg-7 col-mg-10 pl-0">
                                                            <input type="date" class="form-control datepicker border-btm" id="date" placeholder="Select date" autocomplete="off" autofill="off">
                                                        </div>
                                                        <div class="col-lg-2 col-md-2">
                                                            <button data-toggle="tooltip" title="" class="pd-setting-ed" data-original-title="Download"><i class="fas fa-download"></i></button>
                                                            <!-- <span class="dwn-icon"></span> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="sparkline13-graph">
                                            <div class="datatable-dashv1-list">
                                                <div class="product-status-wrap drp-lst p-0">
                                                    <table class="table-striped table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <div class="th-inner ">
                                                                        <input name="btSelectAll" type="checkbox">
                                                                    </div>
                                                                </th>
                                                                <th>Group/Promotion</th>
                                                                <th>Created On</th>
                                                                <th>End On</th>
                                                                <th></th>
                                                                <th>Group Size</th>
                                                                <th>Joined</th>
                                                                <th>Status</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>
                                                                    <div class="th-inner ">
                                                                        <input name="btSelectAll" type="checkbox">
                                                                    </div>
                                                                </th>
                                                                <td>Group_23049 <a href="#" data-toggle="modal" data-target="#groupMember"><span><i class="far fa-eye"></i></span></a> <br/>Weekend Cocktail</td>
                                                                <td>November 4,2019 12:00 am</td>
                                                                <td>October 27,2021 12:00 am</td>
                                                                <td></td>
                                                                <td>10</td>
                                                                <td class="datatable-ct"><span class="pie">1</span>
                                                                </td>
                                                                <td><button class="pd-setting">Processing</button></td>
                                                                <td>
                                                                    <a data-toggle="modal" data-target="#linkGraph" href="">
                                                                        <span class="i-link"><i class="fas fa-level-up-alt"></i></span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <div class="th-inner ">
                                                                        <input name="btSelectAll" type="checkbox">
                                                                    </div>
                                                                </th>
                                                                <td>Group_23049</td>
                                                                <td>November 4,2019 12:00 am</td>
                                                                <td>October 27,2021 12:00 am</td>
                                                                <td></td>
                                                                <td>10</td>
                                                                <td class="datatable-ct"><span class="pie">1</span>
                                                                </td>
                                                                <td><button class="pd-setting">Processing</button></td>
                                                                <td>
                                                                    <a data-toggle="modal" data-target="#linkGraph" href="">
                                                                        <span class="i-link"><i class="fas fa-level-up-alt"></i></span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <div class="th-inner ">
                                                                        <input name="btSelectAll" type="checkbox">
                                                                    </div>
                                                                </th>
                                                                <td>Group_23049</td>
                                                                <td>November 4,2019 12:00 am</td>
                                                                <td>October 27,2021 12:00 am</td>
                                                                <td></td>
                                                                <td>10</td>
                                                                <td class="datatable-ct"><span class="pie">1</span>
                                                                </td>
                                                                <td><button class="pd-setting">Processing</button></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <div class="th-inner ">
                                                                        <input name="btSelectAll" type="checkbox">
                                                                    </div>
                                                                </th>
                                                                <td>Group_23049</td>
                                                                <td>November 4,2019 12:00 am</td>
                                                                <td>October 27,2021 12:00 am</td>
                                                                <td></td>
                                                                <td>10</td>
                                                                <td class="datatable-ct"><span class="pie">1</span>
                                                                </td>
                                                                <td><button class="pd-setting">Processing</button></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <div class="th-inner ">
                                                                        <input name="btSelectAll" type="checkbox">
                                                                    </div>
                                                                </th>
                                                                <td>Group_23049</td>
                                                                <td>November 4,2019 12:00 am</td>
                                                                <td>October 27,2021 12:00 am</td>
                                                                <td></td>
                                                                <td>10</td>
                                                                <td class="datatable-ct"><span class="pie">1</span>
                                                                </td>
                                                                <td><button class="pd-setting">Processing</button></td>
                                                                <td></td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <div class="th-inner ">
                                                                        <input name="btSelectAll" type="checkbox">
                                                                    </div>
                                                                </th>
                                                                <td>Group_23049</td>
                                                                <td>November 4,2019 12:00 am</td>
                                                                <td>October 27,2021 12:00 am</td>
                                                                <td></td>
                                                                <td>10</td>
                                                                <td class="datatable-ct"><span class="pie">1</span>
                                                                </td>
                                                                <td><button class="ps-setting">QUALIFIED</button></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <div class="th-inner ">
                                                                        <input name="btSelectAll" type="checkbox">
                                                                    </div>
                                                                </th>
                                                                <td>Group_23049</td>
                                                                <td>November 4,2019 12:00 am</td>
                                                                <td>October 27,2021 12:00 am</td>
                                                                <td></td>
                                                                <td>10</td>
                                                                <td class="datatable-ct"><span class="pie">1</span>
                                                                </td>
                                                                <td><button class="pdq-setting">DISQUALIFIED</button></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <div class="th-inner ">
                                                                        <input name="btSelectAll" type="checkbox">
                                                                    </div>
                                                                </th>
                                                                <td>Group_23049</td>
                                                                <td>November 4,2019 12:00 am</td>
                                                                <td>October 27,2021 12:00 am</td>
                                                                <td></td>
                                                                <td>10</td>
                                                                <td class="datatable-ct"><span class="pie">1</span>
                                                                </td>
                                                                <td><button class="pd-setting">Processing</button></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    <div class="th-inner ">
                                                                        <input name="btSelectAll" type="checkbox">
                                                                    </div>
                                                                </th>
                                                                <td>Group_23049</td>
                                                                <td>November 4,2019 12:00 am</td>
                                                                <td>October 27,2021 12:00 am</td>
                                                                <td></td>
                                                                <td>10</td>
                                                                <td class="datatable-ct"><span class="pie">1</span>
                                                                </td>
                                                                <td><button class="pd-setting">Processing</button></td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>
                                                                    <div class="th-inner ">
                                                                        <input name="btSelectAll" type="checkbox">
                                                                    </div>
                                                                </th>
                                                                <th>Group/Promotion</th>
                                                                <th>Created On</th>
                                                                <th>End On</th>
                                                                <th></th>
                                                                <th>Group Size</th>
                                                                <th>Joined</th>
                                                                <th>Status</th>
                                                                <th></th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="top-sec">
                                                <div class="pagination-text"></div>
                                                <div class="custom-pagination">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination">
                                                            <li class="page-item"><span> 17 items</span></li>
                                                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                                            <li class="page-item"><span>1 of 2</span></li>
                                                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                                                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
</div>

<!-- Group Member -->
<div class="modal fade bd1-groupMember-modal-lg in" id="groupMember" tabindex="-1" role="dialog" aria-labelledby="#groupMember" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-ex-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row product-status-wrap pb-3">
                    <div class="grp-heading"><h4>Group</h4></div>
                    <div class="col-lg-9 col-md-12 pl-0">
                        <div class="bg-white">
                            <p>Weekend dinner</p>
                        </div>
                        <div class="bg-white">
                            <div class="row m-0">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Group Detail</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="product-status-wrap d-flex p-0 pt-15 mt-10">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-title">
                                                            <strong class="card-title">Group</strong>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Group By ID</td>
                                                                        <td>3637</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Group Name</td>
                                                                        <td>Group_2020</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Group Author</td>
                                                                        <td>Webkit</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Group Created</td>
                                                                        <td>November 4,2019,0:40 AM</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Share your group with friends</td>
                                                                        <td><a href="#">Share group</a></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-title">
                                                            <strong class="card-title">Group Meta</strong>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Group Expire</td>
                                                                        <td>August 31,2021 12:00 Am</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Group Size</td>
                                                                        <td>3</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Joined Member</td>
                                                                        <td>2 (1 Member Needed)</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Status</td>
                                                                        <td><button class="pdq-setting">DISQUALIFIED</button></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="1"></td>
                                                                        <td>Ends In <br/>
                                                                            <a class="danger" href="#">+92 Days: +11 Hours: +41 Minutes</a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-sectiom">
                                            <div class="grp-heading"><h4>Group Members</h4></div>
                                            <table class="table table-borderless custom-table-brd">
                                                <tbody>
                                                    <tr class="border-btm">
                                                        <th>Name</th>
                                                        <th>Joined on</th>
                                                        <th colspan="1"></th>
                                                        <th>Join Type</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Webkit</td>
                                                        <td>November 4, 2019 8:38 am</td>
                                                        <td colspan="1"></td>
                                                        <td><button class="ps-setting">STARTED</button></td>
                                                        <td>
                                                            <button class="btn btn-primary ft-compse">Refund</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Webkit</td>
                                                        <td>November 4, 2019 8:38 am</td>
                                                        <td colspan="1"></td>
                                                        <td><button class="btn btn-info">Joined</button></td>
                                                        <td>
                                                            <button class="btn btn-primary ft-compse">Refund</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 pr-0">
                        <div class="card mb-20">
                            <div class="card-header">
                                <strong class="card-title">Group actions</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-group d-flex justify-content-center  py-4">
                                    <select class="form-control">
                                        <option selected="">Choose an action... </option>
                                        <option>Processing</option>
                                        <option>Qualified</option>
                                        <option>Disqualified</option>
                                        <option>Refundes</option>
                                    </select>
                                    <div class="modal-area-button">
                                        <a class="Select-btn Primary-bg" href="#">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Order notes</strong>
                            </div>
                            <div class="card-body">
                                <div class="pt-3">
                                    <div class="alert alert-danger alert-mg-b" role="alert">
                                        You need three more members to join. Invite your friend.
                                        See you soon
                                    </div>
                                    <span class="with-arrow"></span>
                                        <a class="clr-grey pb-2" href="#"><u>july 6,2021 at 5:41 am</u><span class="danger">decede</span></a>
                                        <p class="mb-0">Group message</p>
                                </div>
                                <hr/>
                                <div class="form-group">
                                    <label for="">Add note</label>
                                    <textarea name="description" rows="3" placeholder="" style="height: calc(3.5rem + 2px);"></textarea>
                                </div>
                                <div class="form-group d-flex justify-content-center  pb-4">
                                    <select class="form-control">
                                        <option selected="">Choose an action... </option>
                                        <option>Processing</option>
                                        <option>Qualified</option>
                                        <option>Disqualified</option>
                                        <option>Refundes</option>
                                    </select>
                                    <div class="modal-area-button">
                                        <a class="Select-btn Primary-border" href="#">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Reach audience -->
<div class="modal fade bd3-example-modal-lg in" id="reachAudience" tabindex="-1" role="dialog" aria-labelledby="#reachAudience" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-body">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#INAPPMESSAGE">In-app messaging</a>
                        </li>
                        <li><a href="#SUMMARY">Summary</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="INAPPMESSAGE">
                            <div class="product-status-wrap py-2">
                                <div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div><span class="count">1</span> Your message</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex align-flex">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="top-card mb-15">
                                                        <div class="">
                                                            <span>Title</span>
                                                            <div class="form-floating mb-3"> 
                                                                <input type="text" class="form-control" id="tb-fname1" placeholder="Leave empty to display this project name">
                                                                <label class="text-label" for="tb-fname1">
                                                                <i class="feather-sm text-info fill-white me-2 fas fa-quote-right"></i>
                                                                <span class="border-start border-info ps-3"></span></label>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <span>Text*</span>
                                                            <div class="form-floating mb-3"> 
                                                                <textarea class="form-control"  id="tb-fname3" name="description" rows="3" placeholder="welcome! You subscribed to push notification." style="height: calc(3.5rem + 2px);"></textarea>
                                                                <label class="text-label" for="tb-fname3">
                                                                <i class="feather-sm text-info fill-white me-2 fas fa-quote-right"></i>
                                                                <span class="border-start border-info ps-3"></span></label>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <span>Image <i></i></span>
                                                            <div class="form-floating mb-3"> 
                                                                <div class="form-group-inner mb-0">
                                                                    <div class="file-upload-inner file-upload-inner-right ts-forms">
                                                                        <div class="input append-small-btn">
                                                                            <div class="file-button">
                                                                                Browse
                                                                                <input  type="file" onchange="document.getElementById('append-small-btn').value = this.value;">
                                                                            </div>
                                                                            <input class="upl" type="text" id="append-small-btn" placeholder="Select a file or enter a URL">
                                                                        </div>
                                                                    </div>
                                                                    <div id="dropzone1" class="pro-ad addcoursepro">
                                                                        <form action="/upload" class="dropzone dropzone-custom needsclick addcourse" id="demo1-upload">     
                                                                            <div class="form-group alert-up-pd">
                                                                                <div class="dz-message needsclick download-custom">
                                                                                    <h2 class="edudropnone">Drop image here</h2>
                                                                                    
                                                                                    <input name="imageico" class="hd-pro-img" type="text" />
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <label class="text-label" for="tb-fname">
                                                                <i class="feather-sm text-info fill-white me-2 far fa-image"></i>
                                                                <span class="border-start border-info ps-3"></span></label>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <span>ON CLICK</span>
                                                            <div class="product-status-wrap py-3">
                                                                <span class="text-grey f-13">Open URL or deeplink</span>
                                                                <div class="form-floating mb-3"> 
                                                                    <input type="text" class="form-control" id="tb-fname2" placeholder="Leave empty to open your app or website">
                                                                    <label class="text-label" for="tb-fname2">
                                                                    <i class="feather-sm text-info fill-white me-2 fas fa-external-link-alt"></i>
                                                                    <span class="border-start border-info ps-3"></span></label>
                                                                </div>
                                                                <div class="input-group mt-10">
                                                                    <div class="input-group-btn dropdown-segmented">
                                                                        <button tabindex="-1" class="btn btn-white" type="button">Trigger Action</button>
                                                                        <button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button" aria-expanded="false"><span class="caret"></span>
                                                                            </button>
                                                                        <ul class="dropdown-menu">
                                                                            <li><a href="#">Action</a>
                                                                            </li>
                                                                            <li><a href="#">Another action</a>
                                                                            </li>
                                                                            <li><a href="#">Something else here</a>
                                                                            </li>
                                                                            <li class="divider"></li>
                                                                            <li><a href="#">Separated link</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-card mb-30">
                                                        <span>OPTIONAL BUTTONS</span>
                                                        <div class="product-status-wrap d-flex py-3 pl-15 pr-15">
                                                            <div class="row m-0">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <strong>BUTTON #1</strong>
                                                                        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                          </button>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <form action="">
                                                                            <div class="form-group-inner">
                                                                                <label>Text</label>
                                                                                <input type="email" class="form-control" placeholder="text">
                                                                            </div>
                                                                            <span>On click button #1</span>
                                                                            <hr>
                                                                            <div class="">
                                                                                <div class="">
                                                                                    <span class="text-grey f-13">Open URL or deeplink</span>
                                                                                    <div class="form-floating mb-3"> 
                                                                                        <input type="text" class="form-control" id="tb-fname" placeholder="Leave empty to open your app or website">
                                                                                        <label class="text-label" for="tb-fname">
                                                                                        <i class="feather-sm text-info fill-white me-2 fas fa-external-link-alt"></i>
                                                                                        <span class="border-start border-info ps-3"></span></label>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-6 col-md-12">
                                                                                    <div class="colorpicker-inner ts-forms mg-b-23">
                                                                                        <div class="tsbox">
                                                                                            <label class="label text-grey f-13">Background color</label>
                                                                                            <label class="color-group" for="hex">
                                                                                                <input type="text" placeholder="#ff0000" id="hex">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-12">
                                                                                    <div class="colorpicker-inner ts-forms mg-b-23">
                                                                                        <div class="tsbox">
                                                                                            <label class="label text-grey f-13">Text color</label>
                                                                                            <label class="color-group" for="rgb">
                                                                                                <input type="text" placeholder="rgb(219, 199, 94)" id="rgb">
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Add button</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="right-app">
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="colorpicker-inner ts-forms mg-b-23">
                                                                <div class="tsbox">
                                                                    <label class="label text-grey f-13">Background color</label>
                                                                    <label class="color-group" for="palette1">
                                                                        <input type="text" placeholder="#9257b4" id="palette1">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <div class="colorpicker-inner ts-forms mg-b-23">
                                                                <div class="tsbox">
                                                                    <label class="label text-grey f-13">Text color</label>
                                                                    <label class="color-group" for="a-hsl">
                                                                        <input type="text" placeholder="hsl(104, 37%, 61%)" id="a-hsl">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="app-img">
                                                            <div class="justify-content-center">
                                                                <div class="row">
                                                                    <p>Preview</p>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <img class="w-100"  src="{{url('public/assets/img/cropper/mobile.png-1.png')}}" alt="mobile-1"/>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12">
                                                                        <img class="w-100" src="{{url('public/assets/img/cropper/mobile.png-2.png')}}" alt="mobile-2">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="SUMMARY">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Promotion -->
<div class="modal fade in" id="addPromotion" tabindex="-1" role="dialog" aria-labelledby="#addPromotion" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="inside-card responsive-mg-b-30">
                            <div class=""> 
                                <div class="p-0">
                                    <img src="{{url('public/assets/img/blog-details/Building.png')}}" width="100%" alt="img1">
                                </div>
                                <table class="table table-borderless border-btm">
                                    <tbody>
                                        <tr>
                                            <td colspan="1"></td>
                                            <td class="text-grey p-3">Weekend cocktail gather</td>
                                            <td colspan="2" class="text-center"><span><a href="#"><i class="fas fa-pencil-alt"></i></a></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="tinymce-single">
                                    <div class="t-oh">
                                        <table>
                                            <tbody>
                                                <tr class="text-grey">
                                                    <th colspan="1"></th>
                                                    <th>Start 12.04.2021</th>
                                                    <th>End 31.05.2021</th>
                                                    <th colspan="1"></th>
                                                </tr>
                                                <tr>
                                                    <td><span><i class="far fa-clock"></i></span></td>
                                                    <td>Sunday</td>
                                                    <td>Closed</td>
                                                    <td><span class="icon-right"><a href="#"><i class="fas fa-pencil-alt"></i></a></span></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1"></td>
                                                    <td>Monday</td>
                                                    <td>9:30 AM-5:30 PM</td>
                                                    <td colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1"></td>
                                                    <td>Tuesday</td>
                                                    <td>9:30 AM-5:30 PM</td>
                                                    <td colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1"></td>
                                                    <td>Wednesday</td>
                                                    <td>9:30 AM-5:30 PM</td>
                                                    <td colspan="1"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1"></td>
                                                    <td>Thursday</td>
                                                    <td>9:30 AM-5:30 PM</td>
                                                    <td colspan="1"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1"></td>
                                                    <td>Friday</td>
                                                    <td>9:30 AM-5:30 PM</td>
                                                    <td colspan="1"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1"></td>
                                                    <td>Saturday</td>
                                                    <td>9:30 AM-5:30 PM</td>
                                                    <td colspan="1"></td>
                                                </tr>
    
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="Z1hOCe">
                                        <div class="zloOqf PZPZlf">
                                            <div class="GDRHkb">
                                                <span><i class="fas fa-shopping-basket"></i></span>
                                                <span>what's in it</span>
                                                <span class="icon-right"><a href="#"><i class="fas fa-pencil-alt"></i></a></span>
                                            </div>
                                            <div class="GDRHkb">
                                                <span><i class="fas fa-grip-lines"></i></span>
                                                <span><i>Add decription</i></span>
                                                <span class="icon-right"><a  href="#"><i class="fas fa-pencil-alt"></i></a></span>
                                            </div>
                                            <div class="GDRHkb">
                                                <span><i class="fas fa-globe-europe"></i></span>
                                                <span>Number of pax to be sold 35</span>
                                                <span class="icon-right"><a href="#"><i class="fas fa-pencil-alt"></i></a></span>
                                            </div>
                                            <div class="GDRHkb">
                                                <span><i class="fas fa-phone"></i></span>
                                                <span>Per pax costs 25 euros <br/>
                                                    Regular costs 45 euros <br/>
                                                    Discount 20 euros
                                                </span>
                                                <span class="icon-right"><a href="#"><i class="fas fa-pencil-alt"></i></a></span>
                                            </div>
                                            <div class="GDRHkb">
                                                <span><i class="fas fa-grip-lines"></i></span>
                                                <span>Free one voucher to the organizer (yes)</span>
                                                <span class="icon-right"><a href="#"><i class="fas fa-pencil-alt"></i></a></span>
                                            </div>
                                            <div class="GDRHkb">
                                                <span><i class="fas fa-camera"></i></span>
                                                <span>Add photo</span>
                                                <span class="icon-right"><a href="#"><i class="fas fa-pencil-alt"></i></a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- linkGraph -->
<div class="modal fade in" id="linkGraph" tabindex="-1" role="dialog" aria-labelledby="#linkGraph" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="charts-single-pro responsive-mg-b-30">
                            <div class="alert-title">
                                <h2>Customer actions</h2>
                                <p>The most common actions that cutomers take</p>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <select name="country" class="form-control border-btm">
                                        <option value="none" selected="" disabled="">1 quater</option>
                                        <option value="0">1 week</option>
                                        <option value="1">1 month</option>
                                        <option value="2">All time</option>
                                    </select>
                                </div>
                                <span>Total actions 124</span>
                            </div>
                            <div id="bar1-chart">
                                <canvas id="barchart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  -->

<!-- Delete product Confirmation  -->
<div class="modal fade" tabindex="-1" role="dialog" id="deleteProduct" aria-labelledby="#deleteProduct" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="">
                <div class="py-5 text-center">
                    <div class="col-lg-6">
                        <div class="i-checks pull-left">
                            <label>
                            <input type="radio" value="1" name="prodStatus"> <i></i> Yes </label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="i-checks pull-left">
                            <label>
                            <input type="radio" value="0" name="prodStatus"> <i></i> No </label>
                        </div>
                    </div>
                </div>
                <div class="btn-footer text-right py-3">
                    <span class="productD"></span>
                    <a href="javascript:void(0);" data-dismiss="modal">Cancel</a>
                    <a href="javascript:void(0);" class="submitProdStatus">Apply</a>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
@include('footer')