@extends('layouts.app')

@section('content')
    <main>
      <!--=============== HOME ===============-->
      <section
        class="hero"
        id="hero"
        style="
          background-repeat: no-repeat;
          background-size: cover;
          height: 50vh;
          background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMpAZb25kxHbvJIZh3gXC6h8Ysx3SAQQhBCQ&s');
        "
      >
        <div
          class="hero-content h-100 d-flex justify-content-center align-items-center flex-column"
        >
          <h1 class="text-center text-white display-4">Paket Travel</h1>
          <hr width="40" class="text-center" />
        </div>
      </section>

      <!--=============== Package Travel ===============-->

      
      <section
        class="container package text-center"
        id="package"
        style="margin-top: -60px"
      >
        <div class="row mt-5 justify-content-center">
            @foreach($travelPackages as $travelPackage)
            <div class="col-lg-3" style="margin-bottom: 140px">
                <div class="card package-card">
                <a href="{{ route('detail', $travelPackage) }}" class="package-link">
                    <div class="package-wrapper-img overflow-hidden">
                      <img
                      src="{{ $travelPackage->galleries->first() ? Storage::url($travelPackage->galleries->first()->path) : asset('images/default-image.jpg') }}"
                      class="img-fluid"
                  />
                  
                    </div>
                    <div class="package-price d-flex justify-content-center">
                    <span class="btn btn-light position-absolute package-btn">
                        ${{ $travelPackage->price }}
                    </span>
                    </div>
                    <h5 class="btn position-absolute w-100">
                    {{ $travelPackage->name }}
                    </h5>
                </a>
                </div>
            </div>
            @endforeach
        </div>
      </section>
    </main>
@endsection