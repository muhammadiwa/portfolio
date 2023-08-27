@extends('backend.layouts.app')
@section('menu', 'Home')
@section('title', 'Tambah Home')
@section('content')
    <!-- Start content here -->
        <div class="header__page d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 mb-4 mt-5">
            <div>
                <h2 class="fw-bold">Layout Default Page</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb sm-text-rg">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item">Form</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <!-- Form basic -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="fw-bold">HTML5 Form Basic</h6>
                    </div>
                    <div class="card-body">
                        <div class="alert text-bg-light">
                            <b>Note!</b> Not all browsers support HTML5 type input.
                        </div>
                        <div class="form-group mb-3">
                            <label>Text</label>
                            <input type="text" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleDataList">Datalist example</label>
                            <input class="form-control form-control-sm" list="datalistOptions" id="exampleDataList"
                                placeholder="Type to search...">
                            <datalist id="datalistOptions">
                                <option value="San Francisco">
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                        </div>
                        <div class="form-group mb-3">
                            <label for="select">Select</label>
                            <select class="form-select form-select-sm" aria-label="Default select example" id="select">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Select Multiple</label>
                            <select class="form-select" multiple aria-label="multiple select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1">Textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Checkbox</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Default checkbox
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Color Picker</label>
                            <label for="exampleColorInput" class="form-label">Color picker</label>
                            <input type="color" class="form-control form-control-sm" id="exampleColorInput"
                                value="#563d7c" title="Choose your color">
                        </div>
                        <div class="form-group mb-3">
                            <label>Date</label>
                            <input type="date" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Datetime Local</label>
                            <input type="datetime-local" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>File</label>
                            <input type="file" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Month</label>
                            <input type="month" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input type="password" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Radio</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Range</label>
                            <input type="range" class="form-range">
                        </div>
                        <div class="form-group mb-3">
                            <label>Search</label>
                            <input type="search" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Number</label>
                            <input type="number" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Time</label>
                            <input type="time" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Url</label>
                            <input type="url" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Week</label>
                            <input type="week" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-end">
                            <button class="btn btn-primary me-1 btn-md" type="submit">Submit</button>
                            <button class="btn btn-secondary btn-md" type="reset">Reset</button>
                        </div>
                    </div>
                </div>
                <!-- Inline form -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h6>Inline Forms</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" placeholder="First name"
                                        aria-label="First name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control form-control-sm" placeholder="Last name"
                                        aria-label="Last name">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Help form -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h6>Help Forms</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="inputPassword5" class="form-label">Password</label>
                            <input type="password" id="inputPassword5" class="form-control form-control-sm"
                                aria-describedby="passwordHelpBlock">
                            <div id="passwordHelpBlock" class="form-text sm-text-rg text-secondary-500">
                                Your password must be 8-20 characters long, contain letters and numbers, and must not
                                contain spaces, special characters, or emoji.
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label class="col-form-label">Password</label>
                                </div>
                                <div class="col-auto">
                                    <input type="password" id="inputPassword6" class="form-control form-control-sm"
                                        aria-describedby="passwordHelpInline">
                                </div>
                                <div class="col-auto">
                                    <span id="passwordHelpInline" class="form-text">
                                        Must be 8-20 characters long.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="fw-bold">Sizing</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Text <code>.form-control-sm</code></label>
                            <input type="text" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Text <code>.form-control-md</code></label>
                            <input type="text" class="form-control form-control-md">
                        </div>
                        <div class="form-group mb-3">
                            <label>Text <code>.form-control-lg</code></label>
                            <input type="text" class="form-control form-control-lg">
                        </div>
                        <div class="form-group mb-3">
                            <label for="select">Select<code>.form-select-sm</code></label>
                            <select class="form-select form-select-sm" aria-label="Default select example" id="select">
                                <option selected="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="select">Select<code>.form-select-md</code></label>
                            <select class="form-select form-select-md" aria-label="Default select example" id="select">
                                <option selected="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="select">Select<code>.form-select-lg</code></label>
                            <select class="form-select form-select-lg" aria-label="Default select example" id="select">
                                <option selected="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6 class="fw-bold">Learn More</h6>
                    </div>
                    <div class="card-body">
                        <div class="jumbotron text-center bg-light p-4 rounded-2">
                            <h4>Learn More</h4>
                            <p class="md-text-rg">All the above form elements are the default of bootstrap and
                                you can learn them on the official documentation provided by Bootstrap.</p>
                            <a class="btn btn-primary btn-md mt-3"
                                href="https://getbootstrap.com/docs/5.2/forms/overview/" target="_blank"
                                role="button">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection