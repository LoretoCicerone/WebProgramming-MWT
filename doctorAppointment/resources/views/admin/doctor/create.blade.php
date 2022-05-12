@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-edit bg-blue"></i>
                    <div class="d-inline">
                        <h5>Doctors</h5>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h3>Add Doctor</h3>
                </div>
                <div class="card-body">
                    <form action="" class="forms-sample">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="name"> Full name</label>
                                <input type="text" name="name" class="form-control" placeholder="Doctor name">
                            </div>
                            <div class="col-lg-6">
                                <label for="email"> Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="password"> Password </label>
                                <input type="password" name="password" class="form-control" placeholder="Doctor password">
                            </div>
                            <div class="col-lg-6">
                                <label for=""> Gender</label>
                                <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                    <option value="">Please, select gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                {{-- @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="education"> Education </label>
                                <input type="text" name="education" class="form-control" placeholder="Education">
                            </div>
                            <div class="col-lg-6">
                                <label for=""> Address </label>
                                <input type="text" name="address" class="form-control" placeholder="doctor address">
                                {{-- @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Specialist</label>
                                    <input type="text" name="department" class="form-control">

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone number</label>
                                    <input type="text" name="phone_number" class="form-control">

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control file-upload-info" placeholder="Upload Image"
                                        name="image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Browse
                                            Photo</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">About</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="4" name="description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
