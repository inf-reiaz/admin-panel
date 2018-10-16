@extends('admin.layouts.app')


@section('css')

<style>
    .profile-details-heading {
        margin-right: 20%;
        display: block;
        margin-bottom: 5px;
    }
</style>

@endsection

@section('content')
            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel profile-wrap">
                                    <header class="panel-heading clearfix">
                                        <h3 class="profile-title pull-left">{{ $user->firstname }} {{ $user->firstname }}</h3>
                                       <div class="pull-right"><a href="{{ route('alluser') }}" class="btn btn-sm btn-info">back</a></div>
                                    </header>
                                    <div class="panel-body row">
                                        <div class="col-md-3">
                                            <div class="profile-thumb">
                                                <img src="{{ $user->user_photo }}" alt="{{ $user->firstname }}">
                                            </div>

                                            
                                            <div class="profile-info">
                                                <h5>About Me</h5>

                                                <p>
                                                    {!! $user->about_me !!}
                                                </p>
                                            </div>

                                        </div>
                                        <div class="col-md-9">
                                            <div class="panel panel-default">
                                                <div class="panel-body list-group border-bottom">
                                                    <li class="list-group-item active"><center><strong>My Profile</strong></center></li>
                                                    
                                                    <li class="list-group-item">
                                                        <span class="profile-details-heading">
                                                            <strong>First Name:</strong>
                                                        </span>
                                                        <span class="profile">{{ $user->firstname }}</span>
                                                    </li>
                                                    
                                                    <li class="list-group-item">
                                                        <span class="profile-details-heading">
                                                            <strong>Last Name:</strong>
                                                        </span>
                                                        <span class="profile">{{ $user->lastname }}</span>
                                                    </li>
                                                    
                                                    <li class="list-group-item">
                                                        <span class="profile-details-heading">
                                                            <strong>User Name:</strong>
                                                        </span>
                                                        <span class="profile">{{ $user->username }}</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="profile-details-heading">
                                                            <strong>User Email:</strong>
                                                        </span>
                                                        <span class="profile">{{ $user->email }}</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="profile-details-heading">
                                                            <strong>User Contact Number:</strong>
                                                        </span>
                                                        <span class="profile">{{ $user->contact }}</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="profile-details-heading">
                                                            <strong>User Role:</strong>
                                                        </span>
                                                        <span class="profile">@if($user->roles){{$user->roles->name}} @endif</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="profile-details-heading">
                                                            <strong>User Country Name:</strong>
                                                        </span>
                                                        <span class="profile">@if($user->roles){{$user->contry->name}} @endif</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="profile-details-heading">
                                                            <strong>User City Name:</strong>
                                                        </span>
                                                        <span class="profile">@if($user->roles){{$user->city->name}} @endif</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="profile-details-heading">
                                                            <strong>User Address :</strong>
                                                        </span>
                                                        <span class="profile">{{ $user->address }}</span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <span class="profile-details-heading">
                                                            <strong>User Parmanent Address :</strong>
                                                        </span>
                                                        <span class="profile">{{ $user->parmanent_address }}</span>
                                                    </li>
                                                    
                                                    <li class="list-group-item">
                                                        <center>
                                                            <strong>
                                                                <a href="{{ route('myprofileedit',$user->id) }}" class="btn btn-success btn-sm">Edit</a> 
                                                                <a href="{{ route('alluser') }}" class="btn btn-info btn-sm">Back</a>
                                                            </strong>
                                                        </center>
                                                    </li>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!--right side widget start-->
                    <div class="ui-aside-right " ui-aside-right="">

                        <!--customer start-->
                        <div class="aside-widget">
                            <h5>Online Customer</h5>
                            <ul class="contact-list">
                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a0.jpg" class="media-object">
                                            <span class="online"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>John Doe</strong>
                                            <small>General Manager at TB</small>
                                        </div>
                                    </div><!-- media -->
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a1.jpg" class="media-object">
                                            <span class="offline"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>Jonathan Smith</strong>
                                            <small>Lead Designer</small>
                                        </div>
                                    </div><!-- media -->
                                </li>

                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a2.jpg" class="media-object">
                                            <span class="busy"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>Margarita Rose</strong>
                                            <small>Human Resource Manager</small>
                                        </div>
                                    </div><!-- media -->
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a0.jpg" class="media-object">
                                            <span class="away"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>Mr. Kameron De</strong>
                                            <small>Marketing Officer</small>
                                        </div>
                                    </div><!-- media -->
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a href="#" class="pull-left media-thumb">
                                            <img alt="" src="imgs/a2.jpg" class="media-object">
                                            <span class="offline"></span>
                                        </a>
                                        <div class="media-body">
                                            <strong>Mr. Mosa</strong>
                                            <small>Development Manager</small>
                                        </div>
                                    </div><!-- media -->
                                </li>
                            </ul>
                        </div>
                        <!--customer end-->

                        <!--stock start-->
                        <div class="aside-widget">
                            <h5>Recent Stocks</h5>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>DOWJ</td>
                                    <td>19,764.00</td>
                                    <td><small class="label label-success">+ 0.08%</small></td>
                                </tr>
                                <tr>
                                    <td>AAPL</td>
                                    <td>116.90</td>
                                    <td><small class="label label-danger">- 0.29%</small></td>
                                </tr>
                                <tr>
                                    <td>SBUX</td>
                                    <td>50.33</td>
                                    <td><small class="label label-warning">+ 0.23%</small></td>
                                </tr>
                                <tr>
                                    <td>NKE</td>
                                    <td>164.00</td>
                                    <td><small class="label label-success">+ 0.08%</small></td>
                                </tr>
                                <tr>
                                    <td>YHOO</td>
                                    <td>764.00</td>
                                    <td><small class="label label-danger">- 0.91%</small></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--stock end-->

                        <!--task start-->
                        <div class="aside-widget">
                            <h5>Task Pending</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            Wp Development (66%)
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-warning">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            Dashboard Design (80%)
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-success ">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            Marketing (40%)
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            Mobile App Development (33%)
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger">
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="#" class="btn btn-sm btn-info btn-block">See All Pending Tasks</a>
                                </li>
                            </ul>
                        </div>
                        <!--task end-->

                    </div>
                    <!--right side widget end-->

                </div>
            </div>
@endsection

