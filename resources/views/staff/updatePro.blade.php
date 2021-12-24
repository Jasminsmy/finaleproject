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
            <a class="navbar-brand" href="{{url('projects')}}">
              <i class="fa fa-line-chart"></i>
              UNITEN Research $ Development
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                    <x-app-layout>
                    </x-app-layout>
                    <a href="{{url('projects')}}" class="nav-link smoothScroll">Projects</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="card">
                    <form class="forms-sample" action="/updateres" method="post">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input type="hidden" class="form-control" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            
                            
                            <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}"><br/>
                            <input type="text" class="form-control" id="leader" name="leader" value="{{$data->leader}}"><br/>
                            <input type="text" class="form-control" id="type" name="type" value="{{$data->type}}"><br/>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter number of staff"><br/>
                            <input type="date" class="form-control" id="startdate" name="startdate" placeholder="Select a date"><br/>
                            <input type="date" class="form-control" id="enddate" name="enddate" placeholder="Select a date"><br/>
                            <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter duration in month"><br/>
                            <input type='text' class='form-control' id='cost' name='cost' placeholder='Enter cost of project'><br/>
                            <input type='text' class='form-control' id='client' name='client' placeholder='Enter client's name'><br/>
                            <select class='form-control' name='stage'>
                                <option value="">Select project stage</option>
                                <option value="Inception">Inception</option>
                                <option value="Milestone1">Milestione1</option>
                                <option value="Milestone2">Milestone2</option>
                                <option value="FinalReport">Final Report</option>
                                <option value="Closisng">Closing</option>
                            </select>
                            <br/>
                            <select class='form-control' name="status">
                                <option value="">Select project status</option>
                                <option value="OnTrack">On Track</option>
                                <option value="Delayed">Delayed</option>
                                <option value="Extended">Extended</option>
                                <option value="Completed">Completed</option>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="images/working-girl.png" class="img-fluid" alt="working girl">
                          </div>
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
