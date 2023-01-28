<style>
    .navbar  {
        background-color: #14141F;
    }
</style>
@include('publicUser.navbar')


<br>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="main-body">
    <h3>User profile</h3>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{asset("storage/image/".auth()->user()->image)}}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{auth()->user()->name}}</h4>
                      {{-- <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth()->user()->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth()->user()->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{auth()->user()->phone}}
                    </div>
                  </div>
                  <hr>


                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info "  href="{{route('user.profile.edit',auth()->user()->id)}}" style="border-radius: 10px">Edit</a>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>

        </div>
    </div>







    <!-- My Trips -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3"></h6>
            <h1 class="mb-5">My Trips</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($data as $value)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        {{-- {{dd($value['trip_image']);}} --}}
                        <img class="img-fluid" src="{{asset("storage/image/".$value['trip_image'])}}" alt="">
                        {{-- <img class="img-fluid" src="/users/img/bali1.png" alt=""> --}}
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$value['trip']}}</small>
                        {{-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small> --}}
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">{{$value['price']}} Jd</h3>

                        <p>Date : {{$value['res_date']}}</p>
                        <p>number_of_guest : {{$value['number_of_guest']}}</p>
                        <p>status : {{$value['status']}}</p>
                        {{-- <p>Welcome to the Candi Resort to escape from the hustle and bustle, and embrace the tranquility</p> --}}
                        <div class="d-flex justify-content-center mb-2" style="max-height: 31px">
                            <a href="{{route('user.trip.details',$value['id'])}}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Edit</a>
                            <form action="{{Route('user.profile.destroy',$value['id'])}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-primary px-3"  style="border-radius: 0 30px 30px 0; background-color:rgb(226, 42, 42); border-color:rgb(226, 42, 42);">Delete</button>
                            </form>
                            {{-- <a href="{{route('user.profile.destroy',$value['id'])}}" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0; background-color:rgb(226, 42, 42); border-color:rgb(226, 42, 42);">Delete</a> --}}
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/users/img/bali2.png" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Bali</small>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">$139.00</h3>

                        <p>The award-winning AYANA Resort and Spa, BALI is a world-class destination resort </p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Edit</a>
                            <a href="/book" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0; background-color:rgb(226, 42, 42); border-color:rgb(226, 42, 42);">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/users/img/bali3.png" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Bali</small>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">$189.00</h3>

                        <p>Discover a new type of mountain . Immersed in the middle of the jungle</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Edit</a>
                            <a href="/book" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0; background-color:rgb(226, 42, 42); border-color:rgb(226, 42, 42);">Delete</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<!-- Package End -->
@include('publicUser.footer')




