<!-- Menghubungkan dengan view template master -->
@extends('master')
 
@section('konten')

    <section class="section">
        <h2 class="section-header">Portofolio</h2>
        <div class="gallery">
          <figure class="images">
            <img src="../assets/img/portofolio1.png" class="gallery-img" />
            <figcaption>
              <h5 class="name">Project 1
              <span>
                  <a href="detail.html">Tiket Konser</a>
                </span>
              </h5>
            </figcaption>
          </figure>
          <figure class="images">
            <img src="../assets/img/portofolio2.png" class="gallery-img" />
            <figcaption>
              <h5 class="name">Project 2
              <span>
                  <a href="detail.html">Kasir</a>
                </span>
              </h5>
            </figcaption>
          </figure>
          <figure class="images">
            <img src="../assets/img/portofolio3.png" class="gallery-img" />
            <figcaption>
              <h5 class="name">Project 3
                <span>
                  <a href="detail.html">Rental Motor</a>
                </span>
              </h5>
            </figcaption>
          </figure>
        </div>
    </section>
 
@endsection