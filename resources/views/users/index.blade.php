<?php $page = 'adduser'; ?>
@extends('mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            @component('components.pageheader')
                @slot('title')
                    User Management
                @endslot
                @slot('title_1')
                    Add/Update User
                @endslot
            @endcomponent
            <!-- /add -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input type="password" class=" pass-input">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Role</label>
                                <select class="select">
                                    <option>Select</option>
                                    <option>Owner</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> User Image</label>
                                <div class="image-upload">
                                    <input type="file">
                                    <div class="image-uploads">
                                        <img src="{{ URL::asset('/assets/img/icons/upload.svg') }}" alt="img">
                                        <h4>Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                            <a href="{{ url('userlist') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /add -->
        </div>
    </div>
@endsection
