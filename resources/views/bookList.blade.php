<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
        <a class="navbar-brand" href="/">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/userLogin">User Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/BookList">BookList</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/adminLogin">Admin Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/checkOut">Check Out</a>
            </li>
            </ul>
        </div>
    </nav>

    <body>
    <div class="event-schedule-area-two bg-color pad100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <div class="title-text">
                                <h2>Book List</h2>
                            </div>
                            <p>
                                In ludus latine mea, eos paulo quaestio an. Meis possit ea sit. Vidisse molestie<br />
                                cum te, sea lorem instructior at.
                            </p>
                        </div>
                    </div>
                    <!-- /.col end-->
                </div>
                <!-- row end-->
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav custom-tab" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="home-taThursday" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">1-5</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">6-10</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">11-15</a>
                            </li>
                            <li class="nav-item d-none d-lg-block">
                                <a class="nav-link" id="sunday-tab" data-toggle="tab" href="#sunday" role="tab" aria-controls="sunday" aria-selected="false">16-20</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="home" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col">Author</th>
                                                <th scope="col">Book Name</th>
                                                <th scope="col">Publisher</th>
                                                <th scope="col">Price</th>
                                                <th class="text-center" scope="col">Book In Stock</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="inner-box">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>16</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Harman Kardon</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room B3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Add to Cart</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inner-box">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>20</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Toni Duggan</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room D3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Read More</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inner-box border-bottom-0">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>18</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Billal Hossain</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room A3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Read More</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Speakers</th>
                                                <th scope="col">Session</th>
                                                <th scope="col">Venue</th>
                                                <th scope="col">Venue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="inner-box">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>16</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Toni Duggan</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room B3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Read More</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inner-box">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>16</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Harman Kardon</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room B3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Read More</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inner-box border-bottom-0">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>16</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Billal Hossain</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room B3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Read More</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Speakers</th>
                                                <th scope="col">Session</th>
                                                <th scope="col">Venue</th>
                                                <th scope="col">Venue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="inner-box">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>16</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Harman Kardon</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room B3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Read More</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inner-box">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>16</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Billal Hossain</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room B3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Read More</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inner-box border-bottom-0">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>16</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Toni Duggan</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room B3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Read More</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sunday" role="tabpanel" aria-labelledby="sunday-tab">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Speakers</th>
                                                <th scope="col">Session</th>
                                                <th scope="col">Venue</th>
                                                <th scope="col">Venue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="inner-box">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>16</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Toni Duggan</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room B3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Read More</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inner-box">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>16</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Harman Kardon</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room B3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Read More</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inner-box border-bottom-0">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>16</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Billal Hossain</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room B3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Read More</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="monday" role="tabpanel" aria-labelledby="monday-tab">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Speakers</th>
                                                <th scope="col">Session</th>
                                                <th scope="col">Venue</th>
                                                <th scope="col">Venue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="inner-box">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>16</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Harman Kardon</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room B3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Read More</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inner-box">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>18</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Toni Duggan</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room B3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Read More</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="inner-box border-bottom-0">
                                                <th scope="row">
                                                    <div class="event-date">
                                                        <span>20</span>
                                                        <p>Novembar</p>
                                                    </div>
                                                </th>
                                                <td>
                                                    <div class="event-img">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="event-wrap">
                                                        <h3><a href="#">Billal Hossain</a></h3>
                                                        <div class="meta">
                                                            <div class="organizers">
                                                                <a href="#">Aslan Lingker</a>
                                                            </div>
                                                            <div class="categories">
                                                                <a href="#">Inspire</a>
                                                            </div>
                                                            <div class="time">
                                                                <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="r-no">
                                                        <span>Room B3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="primary-btn">
                                                        <a class="btn btn-primary" href="#">Read More</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="primary-btn text-center">
                            <a href="#" class="btn btn-primary">Download Schedule</a>
                        </div>
                    </div>
                    <!-- /col end-->
                </div>
                <!-- /row end-->
            </div>
        </div>
    </body>
</html>