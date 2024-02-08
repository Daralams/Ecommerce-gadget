<footer class="bg-black bg-gradient">
  <div class="container">
  <div class="row text-center p-4">
    
    <div class="col-md-4 col-6 mt-2">
      <div class="w-100">
        <p class="text-light">Address</p>
        <small class="fs-6 text-secondary">123 Neon StreetCyber City, Digital District Codeville, CV 12345 Country X</small>
      </div>
    </div>
    <div class="col-md-4 col-6 mt-2">
      <div class="w-100">
        <p class="text-light">Product</p>
        <ul class="list-unstyled">
          @foreach($kategoriMerk as $kategori)
          <li><a href="/product/{{$kategori->slug}}" class="text-decoration-none text-secondary">{{$kategori->merk}}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="col-md-4 col-6 mt-2">
      <div class="w-100">
        <p class="text-light">Social media</p>
        <ul class="list-unstyled d-flex gap-2 justify-content-center">
          <li><a href="" class="btn btn-outline-info"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="/products/lenovo" class="btn btn-outline-info"><i class="fa-brands fa-x-twitter"></i></a></li>
          <li><a href="/products/acer" class="btn btn-outline-info"><i class="fa-brands fa-whatsapp"></i></a></li>
          <li><a href="/products/acer" class="btn btn-outline-info"><i class="fa-solid fa-envelope"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container pt-3 pb-3">
    <hr class="text-secondary">
    <p class="text-center text-secondary">Made with ❤️<a href="https://github.com/Daralams" class="text-decoration-none text-info"> Mangandaralam Sakti </a>©2024</p>
  </div>
</div>
</footer>