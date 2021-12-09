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
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Checkout
            </button>
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
                                Explore the heritage, cultures and achievements of First Nations, Inuit and Métis peoples. Browse a wide selection of books in every genre from acclaimed Indigenous authors.
                            </p>
                        </div>
                    </div>
                    <!-- /.col end-->
                </div>
                <!-- row end-->
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-inline my-2 my-lg-0">
                            <div class="custom-select" style="width:200px;" >
                                <select id="searchBy">
                                    <option value="0">Search By</option>
                                    <option value="1">Author</option>
                                    <option value="2">BookName</option>
                                    <option value="3">ISBN</option>
                                    <option value="4">Category</option>
                                </select>
                            </div>
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick='filterBooks()'>Search</button>
                        </form>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="home" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col">Author</th>
                                                <th scope="col">Book Name</th>
                                                <th scope="col">ISBN</th>
                                                <th scope="col">Publisher</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Category</th>
                                                <th class="text-center" scope="col">Book In Stock</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach ($bookList as $book)
                                                    <tr class="inner-box">
                                                        <th scope="row">
                                                            <div class="event-date">
                                                                <p>{{ $book->BookName }}</p>
                                                            </div>
                                                        </th>
                                                        <td>
                                                            <div class="event-date">
                                                                <p id='bookName'>{{ $book->Author }}</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="event-date">
                                                                <p>{{ $book->ISBN }}</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="event-date">
                                                                <p>{{ $book-> Name }}</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="event-date">
                                                                <p id="price">{{ $book-> Price }}</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="event-date">
                                                                <p id="category">{{ $book->Category }}</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="event-date">
                                                                <p>{{ $book->Book_In_Stock }}</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="primary-btn">
                                                            <button type="button" class="btn btn-primary" onclick="addToCart(this.id, '{{ $book->BookName }}', '{{ $book-> Price }}', '{{ $book-> Author }}');" id="{{ $book->ID }}">Add to Cart</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col end-->
                </div>
                <!-- /row end-->
            </div>
        </div>
        <!-- Checkout Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ $currentCart ?? '' }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
            </div>
        </div>
        </div>
    </body>
</html>