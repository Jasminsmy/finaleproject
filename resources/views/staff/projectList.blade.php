<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Digital Trend HTML Template</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{url('staffhome')}}">
              <i class="fa fa-line-chart"></i>
              UNITEN Research & Development
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                    <a href="{{url('/projectsstaff')}}" class="nav-link smoothScroll">Projects</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thread>
                                  <tr>
                                    <th>id</th>
                                    <th>Title</th>
                                    <th>Leader's Name</th>
                                    <th>Members</th>
                                    <th>Type</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Duration</th>
                                    <th>Cost</th>
                                    <th>Client</th>
                                    <th>Project Stage(Progress)</th>
                                    <th>Project Status</th>
                                    <th>Actions</th>
                                  </tr>
                                </thread>

                                <tbody>
                                    @foreach($data as $data)
                                    @if(Auth::user()->name== $data->leader)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->title}}</td>
                                        <td>{{$data->leader}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->type}}</td>
                                        <td>{{$data->startdate}}</td>
                                        <td>{{$data->enddate}}</td>
                                        <td>{{$data->duration}}</td>
                                        <td>{{$data->cost}}</td>
                                        <td>{{$data->client}}</td>
                                        <td>{{$data->stage}}</td>
                                        <td>{{$data->status}}</td>
                                        <td><a href="proDetails/{{$data->id}}">Edit</a></td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                        </div>
                        </div>
               </div>
     </section>



     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
