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
                                            <th>Casual Dining</th>
                                            <th>Bar Service</th>
                                            <th>Fine Dining</th>
                                            <th>Banquet Dining</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>This dining is like a bistro/café.</td>
                                            <td>Casual service for sandwiches, cakes, cheese plates, salads, alcoholic and non-alcoholic beverages. Guests can choose from a limited menu. Competitors will prepare international cocktails and serve with light snacks.</td>
                                            <td>This is formal dining with a four course set menu with alcoholic beverages. The service includes the waiter preparing all dishes at the table by flambé, carving or assembling. Appropriate for VIPs.</td>
                                            <td>This is a three course set menu with coffee and alcoholic beverages in a banquet format.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="#">
                                    <button class="btn btn-primary" type="submit" name="start-booking">Start booking</button>
                                </form>
                            </div>
                        </div>

                        <hr class="hr-extended">

                        <div id="booking_contact_guest_regulations">
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
                                                        <option value="AU">AU - Australia</option>
                                                        <option value="BR">BR - Brasil</option>
                                                        <option value="CA">CA - Canada</option>
                                                        <option value="CH">CH - Switzerland</option>
                                                        <option value="CN">CN - China</option>
                                                        <option value="DE">DE - Germany</option>
                                                        <option value="FR">FR - France</option>
                                                        <option value="IN">IN - India</option>
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
                                                    <input type="checkbox" id="agree" name="agree"> I agree to the guest regulations and confirm that myself and any guests (group booking) will respect all of the guest regulations
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <button class="btn btn-primary" name="agree-individual" type="submit">Continue booking for<strong> an individual</strong></button>
                                <button class="btn btn-primary" name="agree-group" type="submit">Continue booking for<strong> a group</strong></button>
                            </form>
                        </div>

                        <hr class="hr-extended">

                        <div id="booking_request">
                            <h1 class="page-header">Booking request</h1>

                            <!-- individual (depending on selected button on form before) -->
                            <form action="#">
                                <fieldset>
                                    <legend>Individual</legend>
                                    <p>Booking an individual guest</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                <th>Dining experience</th>
                                                <th>C1: 01.02.2014</th>
                                                <th>C2: 02.02.2014</th>
                                                <th>C3: 03.02.2014</th>
                                                <th>C4: 04.02.2014</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>Casual Dining<br/>10:50 - 12:30</td>
                                                <td>available: 22 <input type="checkbox" name="c1-d1-n1"></td>
                                                <td>available: 5 <input type="checkbox" name="c2-d1-n1"></td>
                                                <td>available: 12 <input type="checkbox" name="c3-d1-n1"></td>
                                                <td>available: 32 <input type="checkbox" name="c4-d1-n1"></td>
                                                </tr>
                                                <tr>
                                                <td>Casual Dining<br/>13:30 - 14:40</td>
                                                <td>available: 22 <input type="checkbox" name="c1-d2-n1"></td>
                                                <td>available: 5 <input type="checkbox" name="c2-d2-n1"></td>
                                                <td>available: 12 <input type="checkbox" name="c3-d2-n1"></td>
                                                <td>available: 32 <input type="checkbox" name="c4-d2-n1"></td>
                                                </tr>
                                                <tr>
                                                <td>Bar Service<br/>13:15 - 14:45</td>
                                                <td>available: 22 <input type="checkbox" name="c1-d3-n1"></td>
                                                <td>available: 5 <input type="checkbox" name="c2-d3-n1"></td>
                                                <td>available: 12 <input type="checkbox" name="c3-d3-n1"></td>
                                                <td>available: 32 <input type="checkbox" name="c4-d3-n1"></td>
                                                </tr>
                                                <tr>
                                                <td>Fine Dining<br/>13:00 - 15:15</td>
                                                <td>available: 22 <input type="checkbox" name="c1-d4-n1"></td>
                                                <td>available: 5 <input type="checkbox" name="c2-d4-n1"></td>
                                                <td>available: 12 <input type="checkbox" name="c3-d4-n1"></td>
                                                <td>available: 32 <input type="checkbox" name="c4-d4-n1"></td>
                                                </tr>
                                                <tr>
                                                <td>Banquet Dining<br/>12:45 - 15:00</td>
                                                <td>available: 22 <input type="checkbox" name="c1-d5-n1"></td>
                                                <td>available: 5 <input type="checkbox" name="c2-d5-n1"></td>
                                                <td>available: 12 <input type="checkbox" name="c3-d5-n1"></td>
                                                <td>available: 32 <input type="checkbox" name="c4-d5-n1"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p>Please note that most seating take place at the same time and you are not allowed to change once seated.<br />For a seating that is full, you will be waitlisted.</p>
                                </fieldset>
                                <button class="btn btn-primary" type="submit" name="book-individual">Submit booking request</button>
                            </form>

                            <br/>

                            <!-- group (depending on selected button on form before) -->
                            <form action="#">
                                <fieldset>
                                    <legend>Group</legend>
                                    <p>Booking a group</p>
                                    <!-- message -->
                                    <div class="error-message"></div>
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#c1" aria-controls="c1" role="tab" data-toggle="tab">C1: 01.02.2014</a></li>
                                        <li role="presentation"><a href="#c2" aria-controls="c2" role="tab" data-toggle="tab">C2: 02.02.2014</a></li>
                                        <li role="presentation"><a href="#c3" aria-controls="c3" role="tab" data-toggle="tab">C3: 03.02.2014</a></li>
                                        <li role="presentation"><a href="#c4" aria-controls="c4" role="tab" data-toggle="tab">C4: 04.02.2014</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="c1">
                                            <input type="hidden" name="day" value="c1">
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
                                                <tbody>
                                                    <tr>
                                                    <td>Casual Dining<br/>10:50 - 12:30</td>
                                                    <td>
                                                        available: 22 <br/><button type="button" class="btn btn-default addguest" id="c1-d1" onclick="">+ Add guest</button>
                                                    </td>
                                                    <td id="c1-d1-n">
                                                        <p><input type="text" id="c1-d1-n1" name="c1-d1-n1" class="form-control"></p>
                                                        <p><input type="text" id="c1-d1-n2" name="c1-d1-n2" class="form-control"></p>
                                                        <p><input type="text" id="c1-d1-n3" name="c1-d1-n3" class="form-control"></p>
                                                        <p><input type="text" id="c1-d1-n4" name="c1-d1-n4" class="form-control"></p>
                                                    </td>
                                                    <td id="c1-d1-o">
                                                        <p>
                                                        <select id="c1-d1-o1" name="c1-d1-o1" class="form-control">
                                                            <option value="">choose a country</option>
                                                            <option value="AU">AU - Australia</option>
                                                            <option value="BR">BR - Brasil</option>
                                                            <option value="CA">CA - Canada</option>
                                                            <option value="CH">CH - Switzerland</option>
                                                            <option value="CN">CN - China</option>
                                                            <option value="DE">DE - Germany</option>
                                                            <option value="FR">FR - France</option>
                                                            <option value="IN">IN - India</option>
                                                        </select>
                                                        </p>
                                                        <p>
                                                        <select id="c1-d1-o2" name="c1-d1-o2" class="form-control">
                                                            <option value="">choose a country</option>
                                                            <option value="AU">AU - Australia</option>
                                                            <option value="BR">BR - Brasil</option>
                                                            <option value="CA">CA - Canada</option>
                                                            <option value="CH">CH - Switzerland</option>
                                                            <option value="CN">CN - China</option>
                                                            <option value="DE">DE - Germany</option>
                                                            <option value="FR">FR - France</option>
                                                            <option value="IN">IN - India</option>
                                                        </select>
                                                        </p>
                                                        <p>
                                                        <select id="c1-d1-o3" name="c1-d1-o3" class="form-control">
                                                            <option value="">choose a country</option>
                                                            <option value="AU">AU - Australia</option>
                                                            <option value="BR">BR - Brasil</option>
                                                            <option value="CA">CA - Canada</option>
                                                            <option value="CH">CH - Switzerland</option>
                                                            <option value="CN">CN - China</option>
                                                            <option value="DE">DE - Germany</option>
                                                            <option value="FR">FR - France</option>
                                                            <option value="IN">IN - India</option>
                                                        </select>
                                                        </p>
                                                        <p>
                                                        <select id="c1-d1-o4" name="c1-d1-o4" class="form-control">
                                                            <option value="">choose a country</option>
                                                            <option value="AU">AU - Australia</option>
                                                            <option value="BR">BR - Brasil</option>
                                                            <option value="CA">CA - Canada</option>
                                                            <option value="CH">CH - Switzerland</option>
                                                            <option value="CN">CN - China</option>
                                                            <option value="DE">DE - Germany</option>
                                                            <option value="FR">FR - France</option>
                                                            <option value="IN">IN - India</option>
                                                        </select>
                                                        </p>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Casual Dining<br/>13:30 - 14:40</td>
                                                    <td>
                                                        available: 22 <br/><button type="button" class="btn btn-default addguest" id="c1-d2" onclick="">+ Add guest</button>
                                                    </td>
                                                    <td id="c1-d2-n">
                                                        <p><input type="text" id="c1-d2-n1" name="c1-d2-n1" class="form-control"></p>
                                                    </td>
                                                    <td id="c1-d2-o">
                                                        <p>
                                                        <select id="c1-d2-o1" name="c1-d2-o1" class="form-control">
                                                            <option value="">choose a country</option>
                                                            <option value="AU">AU - Australia</option>
                                                            <option value="BR">BR - Brasil</option>
                                                            <option value="CA">CA - Canada</option>
                                                            <option value="CH">CH - Switzerland</option>
                                                            <option value="CN">CN - China</option>
                                                            <option value="DE">DE - Germany</option>
                                                            <option value="FR">FR - France</option>
                                                            <option value="IN">IN - India</option>
                                                        </select>
                                                        </p>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Bar Service<br/>13:15 - 14:45</td>
                                                    <td>
                                                        available: 22 <br/><button type="button" class="btn btn-default addguest" id="c1-d3" onclick="">+ Add guest</button>
                                                    </td>
                                                    <td id="c1-d3-n">

                                                    </td>
                                                    <td id="c1-d3-o">

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Fine Dining<br/>13:00 - 15:15</td>
                                                    <td>
                                                        available: 22 <br/><button type="button" class="btn btn-default addguest" id="c1-d4" onclick="">+ Add guest</button>
                                                    </td>
                                                    <td id="c1-d4-n">

                                                    </td>
                                                    <td id="c1-d4-o">

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Banquet Dining<br/>12:45 - 15:00</td>
                                                    <td>
                                                        available: 22 <br/><button type="button" class="btn btn-default addguest" id="c1-d5" onclick="">+ Add guest</button>
                                                    </td>
                                                    <td id="c1-d5-n">

                                                    </td>
                                                    <td id="c1-d5-o">

                                                    </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="c2">
                                            <input type="hidden" name="day" value="c2">
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
                                                <tbody>
                                                    <tr>
                                                    <td>Casual Dining<br/>10:50 - 12:30</td>
                                                    <td>

                                                    </td>
                                                    <td id="c2-d1-n">

                                                    </td>
                                                    <td id="c2-d1-o">

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Casual Dining<br/>13:30 - 14:40</td>
                                                    <td>

                                                    </td>
                                                    <td id="c2-d2-n">

                                                    </td>
                                                    <td id="c2-d2-o">

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Bar Service<br/>13:15 - 14:45</td>
                                                    <td>

                                                    </td>
                                                    <td id="c2-d3-n">

                                                    </td>
                                                    <td id="c2-d3-o">

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Fine Dining<br/>13:00 - 15:15</td>
                                                    <td>

                                                    </td>
                                                    <td id="c2-d4-n">

                                                    </td>
                                                    <td id="c2-d4-o">

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Banquet Dining<br/>12:45 - 15:00</td>
                                                    <td>

                                                    </td>
                                                    <td id="c2-d5-n">

                                                    </td>
                                                    <td id="c2-d5-o">

                                                    </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="c3">
                                            <input type="hidden" name="day" value="c3">
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
                                                <tbody>
                                                    <tr>
                                                    <td>Casual Dining<br/>10:50 - 12:30</td>
                                                    <td>

                                                    </td>
                                                    <td id="c3-d1-n">

                                                    </td>
                                                    <td id="c3-d1-o">

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Casual Dining<br/>13:30 - 14:40</td>
                                                    <td>

                                                    </td>
                                                    <td id="c3-d2-n">

                                                    </td>
                                                    <td id="c3-d2-o">

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Bar Service<br/>13:15 - 14:45</td>
                                                    <td>

                                                    </td>
                                                    <td id="c3-d3-n">

                                                    </td>
                                                    <td id="c3-d3-o">

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Fine Dining<br/>13:00 - 15:15</td>
                                                    <td>

                                                    </td>
                                                    <td id="c3-d4-n">

                                                    </td>
                                                    <td id="c3-d4-o">

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Banquet Dining<br/>12:45 - 15:00</td>
                                                    <td>

                                                    </td>
                                                    <td id="c3-d5-n">

                                                    </td>
                                                    <td id="c3-d5-o">

                                                    </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="c4">
                                            <input type="hidden" name="day" value="c4">
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
                                                <tbody>
                                                    <tr>
                                                    <td>Casual Dining<br/>10:50 - 12:30</td>
                                                    <td>

                                                    </td>
                                                    <td id="c4-d1-n">

                                                    </td>
                                                    <td id="c4-d1-o">

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Casual Dining<br/>13:30 - 14:40</td>
                                                    <td>

                                                    </td>
                                                    <td id="c4-d2-n">

                                                    </td>
                                                    <td id="c4-d2-o">

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Bar Service<br/>13:15 - 14:45</td>
                                                    <td>

                                                    </td>
                                                    <td id="c4-d3-n">

                                                    </td>
                                                    <td id="c4-d3-o">

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Fine Dining<br/>13:00 - 15:15</td>
                                                    <td>

                                                    </td>
                                                    <td id="c4-d4-n">

                                                    </td>
                                                    <td id="c4-d4-o">

                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Banquet Dining<br/>12:45 - 15:00</td>
                                                    <td>

                                                    </td>
                                                    <td id="c4-d5-n">

                                                    </td>
                                                    <td id="c4-d5-o">

                                                    </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <button class="btn btn-primary" type="submit" name="book-group">Submit booking request</button>
                            </form>
                        </div>

                        <hr class="hr-extended">

                        <div id="submission_confirmation">
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

            <!-- for logged in user only - begin -->
                        <div id="reservation_management">
                                <h1>Reservation management</h1>
                                <form action="#">
                                    <fieldset>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                            <colgroup>
                                                <col style="width: 5%">
                                                <col style="width: 30%">
                                                <col style="width: 10%">
                                                <col style="width: 30%">
                                                <col style="width: 10%">
                                                <col style="width: 5%">
                                                <col style="width: 5%">
                                                <col style="width: 5%">
                                                <col style="width: 5%">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                <th rowspan="2">Day</th>
                                                <th rowspan="2">Seating</th>
                                                <th rowspan="2">Booking No.</th>
                                                <th rowspan="2">Guests</th>
                                                <th rowspan="2">Status</th>
                                                <th colspan="4">Action</th>
                                                </tr>
                                                <tr>
                                                <th>Confirm</th>
                                                <th>Decline</th>
                                                <th>Waitlist</th>
                                                <th>Reschedule</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>C2</td>
                                                <td>Casual Dining 10:50 - 12:30</td>
                                                <td><span title="Sarah Rogers, WSI, +51342319531, sarah.rogers@worldskills.org, US">2015000008</span></td>
                                                <td>1. Jimmy Hendrix US</td>
                                                <td>requested</td>
                                                <td><p class="text-center"><input type="radio" name="2015000008-1" value="confirm"></p></td>
                                                <td><p class="text-center"><input type="radio" name="2015000008-1" value="decline"></p></td>
                                                <td><p class="text-center"><input type="radio" name="2015000008-1" value="waitlist"></p></td>
                                                <td><p class="text-center"><input type="radio" name="2015000008-1" value="reschedule"></p></td>
                                                </tr>
                                                <tr>

                                                <td>C2</td>
                                                <td>Casual Dining 10:50 - 12:30</td>
                                                <td><span title="Sarah Rogers, WSI, +51342319531, sarah.rogers@worldskills.org, US">2015000008</span></td>
                                                <td>2. Joe Cocker US</td>
                                                <td>requested</td>
                                                <td><p class="text-center"><input type="radio" name="2015000008-2" value="confirm"></p></td>
                                                <td><p class="text-center"><input type="radio" name="2015000008-2" value="decline"></p></td>
                                                <td><p class="text-center"><input type="radio" name="2015000008-2" value="waitlist"></p></td>
                                                <td><p class="text-center"><input type="radio" name="2015000008-2" value="reschedule"></p></td>
                                                </tr>

                                                <tr>
                                                <td>C2</td>
                                                <td>Casual Dining 10:50 - 12:30</td>
                                                <td><span title="Sarah Rogers, WSI, +51342319531, sarah.rogers@worldskills.org, US">2015000008</span></td>
                                                <td>3. Jennifer Celebrity US</td>
                                                <td>declined</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                </tr>

                                                <tr>
                                                <td>C2</td>
                                                <td>Casual Dining 10:50 - 12:30</td>
                                                <td><span title="Sarah Rogers, WSI, +51342319531, sarah.rogers@worldskills.org, US">2015000008</span></td>
                                                <td>4. Simon Bartley UK</td>
                                                <td>confirmed</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                </tr>

                                                <tr>
                                                <td>C2</td>
                                                <td>Casual Dining 10:50 - 12:30</td>
                                                <td><span title="Sarah Rogers, WSI, +51342319531, sarah.rogers@worldskills.org, US">2015000008</span></td>
                                                <td>5. Nieman Anders AU</td>
                                                <td>waitlisted</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                    </fieldset>
                                    <button class="btn btn-default" type="submit" name="create-guest-list">Create guest list</button>
                                    <button class="btn btn-default" type="submit" name="send-emails">Send emails</button>
                                    <button class="btn btn-primary" type="submit" name="save-confirmations">Save changes</button>
                                </form>
                        </div>
            <!-- for logged in user only - end -->
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
