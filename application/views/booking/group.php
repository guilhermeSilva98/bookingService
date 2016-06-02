<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Guests for Restaurant Service</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        <link href="/bookingService/assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="/bookingService/assets/css/restaurantapp.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../dist/js/html5shiv.3.7.0.js"></script>
          <script src="../dist/js/respond.min.1.3.0.js"></script>
        <![endif]-->
    </head>
    <body>
        <a class="sr-only sr-only-focusable" href="#content" tabindex="1"><div class="container"><span class="skiplink-text">Skip to main content</span></div></a>

        <div class="navbar navbar-worldskills navbar-static-top">
            <div class="cube-container">
                <div class="cube-right-bottom-blue">&nbsp;</div>
            </div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Reservations</a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Information</a></li>
                        <li><a href="#">Booking</a></li>
                        <li><a href="#">Management</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- use the following link for login and logoff -->
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">

            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Information</li>
            </ol>

                    <div id="content">

            <!-- for guest only - begin -->
                        <div id="dining_experience_descriptions">
                            <div class="">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h1>Guests in Restaurant Service</h1>
                                        <p class="clearfix">Become part of the competition: be a guest in Restaurant Service competition by requesting a seat and enjoy one of the different dining experiences!</p>
                                    </div>
                                    <div class="col-xs-offset-2 col-xs-4 col-sm-offset-4 col-sm-2">
                                        <h1><img src="/bookingService/assets/img/6215177259.jpg" alt="cook in restaurant service" class="img-thumbnail img-responsive"></h1>
                                    </div>
                                </div>
                                <h3>Dining experience desriptions</h3>
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 25%">
                                        <col style="width: 25%">
                                        <col style="width: 25%">
                                        <col style="width: 25%">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                        <?php 
                                            foreach ($dining_type as $key => $value) {
                                                echo '<th>'.$value->name.'</th>';
                                            }
                                         ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <?php 
                                            foreach ($dining_type as $key => $value) {
                                                echo '<td>'.$value->description.'</td>';
                                            }
                                         ?>
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="#">
                                    <button class="btn btn-primary" type="submit" name="start-booking" data-target="#booking_contact_guest_regulations">Start booking</button>
                                </form>
                            </div>
                        </div>

                        <hr class="hr-extended">

                        <div id="booking_contact_guest_regulations" class="step">
                            <h1 class="page-header">Booking contact details and guest regulations</h1>
                            <form action="#" class="form-horizontal">
                                <fieldset>
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><h3 class="panel-title">Booking Contact</h3></div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="name" class="col-sm-3 control-label">Name *</label>
                                                <div class="col-sm-4">
                                                    <input type="text" id="name" name="name" required="required" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="organization" class="col-sm-3 control-label">Organization °</label>
                                                <div class="col-sm-4">
                                                    <input type="text" id="organization" name="organization" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-3 control-label">Email *</label>
                                                <div class="col-sm-4">
                                                    <input type="text" id="email" name="email" required="required" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="phone" class="col-sm-3 control-label">Phone</label>
                                                <div class="col-sm-4">
                                                    <input type="text" id="phone" name="phone" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="country" class="col-sm-3 control-label">Country *</label>
                                                <div class="col-sm-4">
                                                    <select id="country" name="country" required="required" class="form-control">
                                                        <option value="">choose a country</option>
                                                        <?php 
                                                        foreach ($country as $key => $value) {
                                                            echo '<option value="'.$value->abbrev.'">'.$value->abbrev.' - '.$value->name.'</option>';
                                                        }
                                                         ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <p>
                                                    *) these fields must be filled<br />
                                                    °) if applicable. We might give priority to a sponsor for example, if we get multiple requests.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="panel panel-default">
                                        <div class="panel-heading"><h3 class="panel-title">Guest regulations</h3></div>
                                        <div class="panel-body">
                                            <p>
                                                Welcome to the Restaurant Service booking request system. All bookings will be submitted to WorldSkills International for final confirmation. <br/><br/>

                                                Before proceeding with your booking please read and accept the guest regulations:
                                            </p>
                                            <ul>
                                                <li>Guests must be at the Restaurant Service area _15 minutes prior to scheduled seating time.</li>
                                                <li>If guests are late (_maximum 5 minutes from allocated time_) their table will not be guaranteed (so that Competitors are not disadvantaged, the tables will be given to standby guests).</li>
                                                <li>Once seated – guests must accept all food and beverage that is offered, as Competitors must be marked on all skill areas.</li>
                                                <li>Dietary requests cannot be accepted, as menu items must be the same for all Competitors.</li>
                                                <li>No mobile phones, videos or cameras are permitted to be used.</li>
                                                <li>Guests cannot leave the area until the meal service is completed unless approved by Experts in the area (again this is so that no Competitor is disadvantaged with service).</li>
                                                <li>Guests will _not sit_ at the tables where the Competitor is from the same country as the guests.</li>
                                                <li>Guest are invited as guests of WorldSkills, they are not to judge the Competitor or interfere with the Competitor in their work or cause disruption to their work or make comments to judges about any of the Competitors.</li>
                                                <li>Guest must be legal drinking age according to the Host Country regulations (i.e. 18 in Brazil).</li>
                                            </ul>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="agree" name="agree" required="required"> I agree to the guest regulations and confirm that myself and any guests (group booking) will respect all of the guest regulations
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <button class="btn btn-primary" name="agree-individual" type="submit" data-target="#booking_request" data-subtarget="#individual">Continue booking for<strong> an individual</strong></button>
                                <button class="btn btn-primary" name="agree-group" type="submit" data-target="#booking_request" data-subtarget="#group">Continue booking for<strong> a group</strong></button>
                            </form>
                        </div>

                        <hr class="hr-extended">

                        <div id="booking_request" class="step">
                            <h1 class="page-header">Booking request</h1>

                            <!-- group (depending on selected button on form before) -->
                            <form action="#" id="group" class="step">
                                <fieldset>
                                    <legend>Group</legend>
                                    <p>Booking a group</p>
                                    <!-- message -->
                                    <div class="error-message"></div>
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                    <?php 

                                    $cont = 0;
                                    foreach ($cday as $key => $value) {
                                        if($cont == 0){
                                            echo '<li role="presentation" class="active"><a href="#c'.$value->id.'" aria-controls="c'.$value->id.'" role="tab" data-toggle="tab">'.$value->name.': '.implode('.', array_reverse(explode('-', $value->date))).'</a></li>';
                                            $cont++;
                                        }else{
                                            echo '<li role="presentation"><a href="#c'.$value->id.'" aria-controls="c'.$value->id.'" role="tab" data-toggle="tab">'.$value->name.': '.implode('.', array_reverse(explode('-', $value->date))).'</a></li>';
                                        }
                                    }

                                     ?>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                    <?php 
                                    $cont = 0;
                                        foreach ($cday as $key => $value) {
                                            if($cont == 0){
                                                echo '<div role="tabpanel" class="tab-pane active" id="c'.$value->id.'">
                                                        <input type="hidden" name="day" value="c'.$value->id.'">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                <th>Dining experience</th>
                                                                <th>Number of seats available<br/>Number of guests to be seated</th>
                                                                <th>Guest names (if known)</th>
                                                                <th>Guest country*</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>';





                                                foreach ($seating as $a => $b) {
                                                    echo '<tr>
                                                            <td>'.$b->name.'<br/>'.date('H:i', strtotime($b->start)).' - '.date('H:i', strtotime($b->end)).'</td>
                                                            <td>
                                                                available: 22 <br/><button type="button" class="btn btn-default addguest" id="c'.$value->id.'-d'.$b->id.'" onclick="">+ Add guest</button>
                                                            </td>
                                                            <td id="c'.$value->id.'-d'.$b->id.'-n">
                                                                <p><input type="text" id="c'.$value->id.'-d'.$b->id.'-n1" name="c'.$value->id.'-d'.$b->id.'-n1" class="form-control"></p>
                                                            </td>
                                                            <td id="c'.$value->id.'-d'.$b->id.'-o">
                                                                <p>
                                                                <select id="c'.$value->id.'-d'.$b->id.'-o1" name="c'.$value->id.'-d'.$b->id.'-o1" class="form-control">
                                                                    <option value="">choose a country</option>';



                                                                    foreach ($country as $c => $row) {
                                                                        echo '<option value="'.$row->abbrev.'">'.$row->abbrev.' - '.$row->name.'</option>';
                                                                    }



                                                                
                                                            echo'</select>
                                                                </p>
                                                            </td>
                                                            </tr>';
                                                }
                                                                
                                                echo '
                                                            </tbody>
                                                            </table>
                                                        </div>
                                                    </div>';
                                                $cont++;
                                            }else{
                                                echo '<div role="tabpanel" class="tab-pane" id="c'.$value->id.'">
                                                        <input type="hidden" name="day" value="c'.$value->id.'">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped">
                                                            <thead>
                                                                <tr>
                                                                <th>Dining experience</th>
                                                                <th>Number of seats available<br/>Number of guests to be seated</th>
                                                                <th>Guest names (if known)</th>
                                                                <th>Guest country*</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>';
                                                                foreach ($seating as $a => $b) {
                                                                    echo '<tr>
                                                                            <td>'.$b->name.'<br/>'.date('H:i', strtotime($b->start)).' - '.date('H:i', strtotime($b->end)).'</td>
                                                                            <td>
                                                                                available: 22 <br/><button type="button" class="btn btn-default addguest" id="c'.$value->id.'-d'.$b->id.'" onclick="">+ Add guest</button>
                                                                            </td>
                                                                            <td id="c'.$value->id.'-d'.$b->id.'-n">
                                                                                <p><input type="text" id="c'.$value->id.'-d'.$b->id.'-n1" name="c'.$value->id.'-d'.$b->id.'-n1" class="form-control"></p>
                                                                            </td>
                                                                            <td id="c'.$value->id.'-d'.$b->id.'-o">
                                                                                <p>
                                                                                <select id="c'.$value->id.'-d'.$b->id.'-o1" name="c'.$value->id.'-d'.$b->id.'-o1" class="form-control">
                                                                                    <option value="">choose a country</option>';



                                                                                    foreach ($country as $c => $row) {
                                                                                        echo '<option value="'.$row->abbrev.'">'.$row->abbrev.' - '.$row->name.'</option>';
                                                                                    }



                                                                                
                                                                            echo'</select>
                                                                                </p>
                                                                            </td>
                                                                            </tr>';
                                                                }
                                                            echo '</tbody>
                                                            </table>
                                                        </div>
                                                    </div>';
                                            }
                                        }


                                     ?>
                                        
                                        
                                </fieldset>
                                <button class="btn btn-primary" type="submit" name="book-group">Submit booking request</button>
                            </form>
                        </div>

                        <hr class="hr-extended">

                        <div id="submission_confirmation" class="step">
                            <h1 class="page-header">Submission confirmation</h1>
                            <p>
                            Sarah Rogers,<br/><br/>
                            Thank you for your booking request 201500021.<br/><br/>

                            You have requested booking for the following guests:
                            </p>
                            <ul>
                            <li>C2 - 05.08.2015, Casual Dining 10:50 - 12:30 <br/>for Simon Bartley UK, David Hoey AU, Jane Stokie AU, Brigitte Collins AU</li>
                            <li>C2 - 05.08.2015, Bar Service 13:15 - 14:45 <br/> for WS france sponsor, WS france sponsor, WS france sponsor, WS france sponsor, WS france sponsor, WS france sponsor, WS france sponsor FR,  WS france sponsor FR, WS france sponsor FR, WS france sponsor FR, WS france sponsor FR, WS france sponsor FR, WS france sponsor FR, WS france sponsor FR, WS france sponsor FR, WS france sponsor CA, WS france sponsor BE, WS france sponsor BE, Simon Bartley UK, David Hoey AU, Jane Stokie AU</li>
                            <li>C4 - 07.08.2015, Bar Service 13:15 - 14:45 <br/> for Jane Stokie AU, Brigitte Collins AU, Skills Emirates UAE, Skills Emirates UAE, Skills Emirates UAE, Skills Emirates UAE</li>
                            </ul>
                            <p>
                            Please note that these booking requests will need to be reviewed and confirmed by WSI. <br/>
                            You will receive an email with the confirmation as soon as possible.
                            </p>
                        </div>
            <!-- for guest only - end -->

                        <hr class="hr-extended">

            
                    </div>

            <footer>
                <hr class="hr-extended" />
                <p>© 2015 WorldSkills</p>
            </footer>

        </div>

    <!-- Bootstrap core JS -->
        <script src="/bookingService/assets/js/jquery.min.1.11.1.js"></script>
        <script src="/bookingService/assets/js/bootstrap.min.js"></script>
        <script src="/bookingService/assets/js/restaurantapp.js"></script>
    </body>
</html>
