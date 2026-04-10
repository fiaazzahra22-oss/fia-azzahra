@extends("master")

@section('content')

<div class="hero-section text-white text-center d-flex align-items-center">
    <div class="container">
        <h1 class="fw-bold">{{ $destinasi['nama'] }}</h1>
        <p class="mb-0">
            <i class="fas fa-location-dot me-2"></i>
            {{ $destinasi['lokasi'] }}
        </p>
    </div>
</div>

<div class="container py-5">
    <div class="mb-4" style="max-width: 760px; width: 100%; margin: 0 auto;">
        <div id="destinasiCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded shadow-sm">
                <div class="carousel-item active">
                    <img src="https://tse2.mm.bing.net/th/id/OIP.yAwL3UQ9AKAmttaeF4x-IwHaEK?rs=1&pid=ImgDetMain&o=7&rm=3" class="d-block w-100 img-fluid" alt="Foto Destinasi 1">
                </div>
                <div class="carousel-item">
                    <img src="https://tse1.mm.bing.net/th/id/OIP.PitKdGuL8ISPBtkXvRvh7wHaEK?rs=1&pid=ImgDetMain&o=7&rm=3" class="d-block w-100 img-fluid" alt="Foto Destinasi 2">
                </div>
                <div class="carousel-item">
                    <img src="https://d22ir9aoo7cbf6.cloudfront.net/wp-content/uploads/sites/4/2019/08/Ulun-Danu-Beratan-in-Bedugul-Bali-Indonesia-.jpg" class="d-block w-100 img-fluid" alt="Foto Destinasi 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#destinasiCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#destinasiCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="card shadow border-0 rounded-4 mx-auto" style="max-width: 700px;">
        <div class="card-body p-4 p-md-5">

            <!-- Harga & Rating -->
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-4">
                <div>
                    <small class="text-muted text-uppercase">Harga</small>
                    <h3 class="fw-bold text-primary mb-0">
                        Rp {{ number_format($destinasi['harga'], 0, ',', '.') }}
                    </h3>
                </div>

                <div class="text-end">
                    <div class="text-warning">
                        @for($i=0; $i < floor($destinasi['rating']); $i++)
                            ⭐
                        @endfor
                    </div>
                    <small class="text-muted">{{ $destinasi['rating'] }}/5</small>
                </div>
            </div>

            <hr>

            <!-- Info Grid -->
            <div class="row g-4">

                <div class="col-md-6">
                    <div class="info-box">
                        <i class="fas fa-clock"></i>
                        <div>
                            <small>Durasi</small>
                            <strong>{{ $destinasi['durasi'] }}</strong>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info-box">
                        <i class="fas fa-plane"></i>
                        <div>
                            <small>Transportasi</small>
                            <strong>{{ $destinasi['transportasi'] }}</strong>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info-box">
                        <i class="fas fa-hotel"></i>
                        <div>
                            <small>Hotel</small>
                            <strong>{{ $destinasi['hotel'] }}</strong>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info-box">
                        <i class="fas fa-check-circle text-success"></i>
                        <div>
                            <small>Status</small>
                            <strong class="text-success">Tersedia</strong>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Fasilitas -->
            <div class="mt-5">
                <h5 class="fw-bold mb-3">Fasilitas</h5>
                <ul class="list-group list-group-flush">
                    @foreach($destinasi['fasilitas'] as $fasilitas)
                        <li class="list-group-item">
                            <i class="fas fa-check text-success me-2"></i>
                            {{ $fasilitas }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Button -->
            <div class="text-end mt-4">
                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
                    Kembali
                </a>
                <button class="btn btn-primary">
                    Booking Sekarang
                </button>
            </div>

        </div>
    </div>
</div>

<style>
.hero-section {
    height: 250px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
    url('https://source.unsplash.com/1200x400/?travel');
    background-size: cover;
    background-position: center;
}

.info-box {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px;
    border: 1px solid #eee;
    border-radius: 12px;
    transition: 0.3s;
}

.info-box:hover {
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.info-box i {
    font-size: 20px;
    color: #0d6efd;
}

.info-box small {
    display: block;
    color: #888;
}
</style>

@endsection