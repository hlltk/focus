@include('layouts.app')
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gutim Template">
    <meta name="keywords" content="Gutim, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Time Table</title>

    <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
              rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../timetable/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../timetable/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../timetable/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../timetable/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../timetable/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../timetable/css/style.css" type="text/css">
</head>

<body>
<div>

</div>

<br/><br/><br/><br/>
<section class="classes-timetable spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="nav-controls">
                    <ul>
                        <li class="active" data-tsfilter="all">All Class</li>
                        <li data-tsfilter="gym">Gym</li>
                        <li data-tsfilter="crossfit">Crossfit</li>
                        <li data-tsfilter="cardio">Cardio</li>
                        <li data-tsfilter="body">Body</li>
                        <li data-tsfilter="yoga">Yoga</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="schedule-table">
                    <table>
                        <thead>
                        <tr>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="workout-time">10.00</td>
                            <td class="hover-bg ts-item" data-tsmeta="gym">
                                <h6>Gym</h6>
                                <span>10.00 - 11.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="yoga">
                                <h6>Yoga</h6>
                                <span>10.00 - 12.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="body">
                                <h6>Body</h6>
                                <span>10.00 - 12.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="cardio">
                                <h6>Cardio</h6>
                                <span>10.00 - 11.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="workout-time">14.00</td>
                            <td></td>
                            <td class="hover-bg ts-item">
                                <h6>Running</h6>
                                <span>14.00 - 16.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item">
                                <h6>Box</h6>
                                <span>14.00 - 15.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="gym">
                                <h6>Gym</h6>
                                <span>14.00 - 16.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">16.00</td>
                            <td class="hover-bg ts-item" data-tsmeta="cardio">
                                <h6>Cardio</h6>
                                <span>16.00 - 18.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="gym">
                                <h6>Gym</h6>
                                <span>16.00 - 19.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="yoga">
                                <h6>Yoga</h6>
                                <span>16.00 - 18.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="gym">
                                <h6>Gym</h6>
                                <span>16.00 - 20.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="workout-time">18.00</td>
                            <td class="hover-bg ts-item">
                                <h6>Box</h6>
                                <span>18.00 - 22.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="body">
                                <h6>Body</h6>
                                <span>18.00 - 20.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <h6>Crossfit</h6>
                                <span>18.00 - 21.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="cardio">
                                <h6>Cardio</h6>
                                <span>18.00 - 22.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">20.00</td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="gym">
                                <h6>Gym</h6>
                                <span>20.00 - 12.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="body">
                                <h6>Body</h6>
                                <span>20.00 - 21.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="cardio">
                                <h6>Cardio</h6>
                                <span>20.00 - 22.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <h6>Crossfit</h6>
                                <span>20.00 - 21.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</footer>

<!-- Js Plugins -->
<script src="../timetable/js/jquery-3.3.1.min.js"></script>
<script src="../timetable/js/bootstrap.min.js"></script>
<script src="../timetable/js/jquery.magnific-popup.min.js"></script>
<script src="../timetable/js/mixitup.min.js"></script>
<script src="../timetable/js/jquery.slicknav.js"></script>
<script src="../timetable/js/owl.carousel.min.js"></script>
<script src="../timetable/js/main.js"></script>
</body>

</html>
@include('layouts.footer')
