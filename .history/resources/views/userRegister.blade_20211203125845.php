<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                    <form>

                    <div class="row">
                        <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text" id="firstName" class="form-control form-control-lg" />
                            <label class="form-label" for="firstName">First Name</label>
                        </div>

                        </div>
                        <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text" id="lastName" class="form-control form-control-lg" />
                            <label class="form-label" for="lastName">Last Name</label>
                        </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 d-flex align-items-center">

                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example8" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example8">Address</label>
                        </div>

                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <div class="col-md-10 mb-2"> 
                                    <select>
                                        <option value="1">State</option>
                                        <option value="2">Alberta</option>
                                        <option value="3">British Columbia</option>
                                        <option value="4">Manitoba</option>
                                        <option value="5">New Brunswick</option>
                                        <option value="6">Newfoundland and Labrador</option>
                                        <option value="7">Northwest Territories</option>
                                        <option value="8">Nova Scotia</option>
                                        <option value="9">Nunavut</option>
                                        <option value="10">Ontario</option>
                                        <option value="11">Prince Edward Island</option>
                                        <option value="12">Quebec</option>
                                        <option value="13">Saskatchewan</option>
                                        <option value="14">Yukon</option>
                                    </select>
                                </div>
                        
                                <div class="col-md-6 mb-4">

                                    <select class="select">
                                        <option value="1">City</option>
                                        <option value="2">Option 1</option>
                                        <option value="3">Option 2</option>
                                        <option value="4">Option 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <input type="email" id="emailAddress" class="form-control form-control-lg" />
                            <label class="form-label" for="emailAddress">Email</label>
                        </div>

                        </div>
                        <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                        </div>

                        </div>
                    </div>

                    <div class="mt-4 pt-2">
                        <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                    </div>

                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    
</html>