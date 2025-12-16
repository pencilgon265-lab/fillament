<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Inventory Apps</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

   <style>
       body {
           background-color: #f8f9fa;
           font-family: 'Poppins', sans-serif;
       }

       .hero {
           background: linear-gradient(135deg,rgb(27, 225, 143),rgb(0, 121, 121));
           color: white;
           padding: 80px 0;
           text-align: center;
           border-bottom-left-radius: 50px;
           border-bottom-right-radius: 50px;
       }

       .card {
           border: none;
           border-radius: 20px;
           box-shadow: 0 4px 12px rgba(0,0,0,0.1);
           transition: all 0.3s ease-in-out;
       }

       .card:hover {
           transform: translateY(-5px);
           box-shadow: 0 8px 18px rgba(0,0,0,0.2);
       }

       .card img {
           border-top-left-radius: 20px;
           border-top-right-radius: 20px;
           object-fit: cover;
           height: 200px;
       }

       footer {
           background: #343a40;
           color: #ddd;
           padding: 20px 0;
           text-align: center;
           margin-top: 50px;
       }

       .price {
           font-weight: 600;
           color: #007bff;
       }
   </style>
</head>
<body>

   <!-- Hero Section -->
   <section class="hero">
       <div class="container">
           <h1 class="display-5 fw-bold">Majoo Inventory App</h1>
           <p class="lead mb-4">Kelola stok barang dengan mudah, cepat, dan elegan.</p>
           <a href="#produk" class="btn btn-light btn-lg rounded-pill">Lihat Produk</a>
       </div>
   </section>

   <!-- Produk Section -->
   <section id="produk" class="py-5">
       <div class="container">
           <h2 class="text-center mb-5 fw-bold">Daftar Barang</h2>
           <div class="row g-4">
               @foreach($barangs as $barang)
                   <div class="col-md-4 col-lg-3">
                       <div class="card h-100">
                           <img src="{{ $barang->gambar_url }}" class="card-img-top" alt="{{ $barang->nama_barang }}">
                           <div class="card-body text-center">
                               <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                               <p class="text-muted mb-1">Kode: {{ $barang->kode_barang }}</p>
                               <p class="price mb-3">Rp {{ number_format($barang->harga_barang, 0, ',', '.') }}</p>
                               <a href="#" class="btn btn-outline-primary btn-sm rounded-pill">Lihat Detail</a>
                           </div>
                       </div>
                   </div>
               @endforeach
           </div>
       </div>
   </section>

   <!-- Footer -->
   <footer>
       <p>© {{ date('Y') }} Majoo Inventory. Semua hak cipta dilindungi.</p>
   </footer>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


