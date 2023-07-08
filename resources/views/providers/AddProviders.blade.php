@extends('mainlayout')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="page-wrapper" style="min-height: 508px;">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Providers add</h4>
                <h6>Create new Providers</h6>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Code Providers</label>
                                <input type="text" class="" id="code" name="code" placeholder="Enter the Code" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="" id="name" name="name" placeholder="Enter the name" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="" id="email" name="email" placeholder="Enter the Email" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="tel" class="" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Enter the Phone number" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Adress</label>
                                <input type="text" class="" id="adress" name="adress" placeholder="Enter the Adress" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="productlist.html" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
