@extends('dashboard.theme')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sales Overview</h5>
                <img src="https://i.imgur.com/6ZqbYV4.png" class="img-fluid" alt="Sales Overview">
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Our Visitors</h5>
                <img src="https://i.imgur.com/B9e1AYa.png" class="img-fluid" alt="Our Visitors">
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <img src="https://i.imgur.com/3sH2s4L.png" alt="user" class="rounded-circle" width="100">
                <h5 class="card-title mt-3">Angela Dominic</h5>
                <p class="card-text">Web Designer & Developer</p>
                <a href="#" class="btn btn-primary">Follow</a>
                <div class="row text-center mt-4">
                    <div class="col-4">
                        <h6>1099</h6>
                        <small>Articles</small>
                    </div>
                    <div class="col-4">
                        <h6>23,469</h6>
                        <small>Followers</small>
                    </div>
                    <div class="col-4">
                        <h6>6035</h6>
                        <small>Following</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Profile Activity</h5>
                <div class="d-flex align-items-start mb-3">
                    <img src="https://i.imgur.com/3sH2s4L.png" alt="user" class="rounded-circle" width="40">
                    <div class="ms-3">
                        <p class="mb-0"><strong>John Doe</strong> 5 minutes ago</p>
                        <p>assign a new task <a href="#">Design weblayout</a></p>
                        <div class="d-flex">
                            <img src="https://i.imgur.com/bC1zY8k.jpg" class="img-fluid rounded me-2" width="100">
                            <img src="https://i.imgur.com/sC0ctVh.jpg" class="img-fluid rounded me-2" width="100">
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <img src="https://i.imgur.com/3sH2s4L.png" alt="user" class="rounded-circle" width="40">
                    <div class="ms-3">
                        <p class="mb-0"><strong>James Smith</strong> 5 minutes ago</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

