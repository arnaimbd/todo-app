<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dasboard</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <div class="btn-compose pull-left">
                <a type="button" class="btn btn-danger navbar-btn" href="#compose" role="tab" data-toggle="tab"> 
                    <span class="glyphicon glyphicon-pencil"></span> 
                    New Task
                </a>
                <a type="button" class="btn btn-default navbar-btn" href="#compose" role="tab" data-toggle="tab">Projects</a>
            </div>

            <ul class="nav navbar-nav">
                <li>
                    <a href="#inbox" role="tab" data-toggle="tab">
                        Todo Today <span class="label label-success">10</span>
                    </a>
                </li>
                <li><a href="#done" role="tab" data-toggle="tab">Done</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Username</a>

                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="tab-content">
                    <div class="tab-pane active" id="inbox">

                        <div class="content-container clearfix">
                            <h1 class="content-title">Todo Today</h1>

                            <input type="search" placeholder="Search Task" class="form-control mail-search" />

                            <ul class="mail-list">
                                <li>
                                   <a href="">
                                       <input type="checkbox" name="test" />
                                       <span class="mail-sender">Project Test</span>
                                       <span class="mail-subject">Task Name</span>
                                       <span class="mail-message-preview">You have ten more subscriptions click her...</span>
                                   </a>
                               </li>
                            </ul>
                       </div> <!-- .content-container -->
                    </div> <!--.tab-pane -->
                    <div class="tab-pane" id="done">

                        <div class="content-container clearfix">
                            <h1 class="content-title">Done</h1>

                            <input type="search" placeholder="Search Task" class="form-control mail-search" />

                            <ul class="mail-list">
                                <li>
                                   <a href="">
                                       <span class="mail-sender">Done Project Test</span>
                                       <span class="mail-subject">Task Name</span>
                                       <span class="mail-message-preview">You have ten more subscriptions click her...</span>
                                   </a>
                               </li>
                            </ul>
                       </div> <!-- .content-container -->
                    </div> <!--.tab-pane -->
                </div> <!-- .tab-content -->

            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
     <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/vendors/floatLabels.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
</body>
</html>