<!-- Menghubungkan dengan view template master -->
@extends('master')
 
@section('konten')
 
      <div id="content-img">
        <div class="content1">
          <img src="assets/img/profile.jpg">
          <h2 class="content-header">Nur malika Adelia</h2>
          <p class="content-text">
            <b>SMK Wikrama Vocational High School</b>
          </p>
        </div>
      </div>
      <!-- Short Description -->
      <section class="section section-small">
        <h2 class="section-header">About</h2>
        <p>Hello, I am a student at SMK Wikrama Bogor, currently I am in class 10. I am Rombel PPLG X-1.</p>
      </section>
      <hr>
      <!-- Skill Table -->
      <section class="section">
        <h2 class="section-header">Skill</h2>
          <div class="responsive-table">
            <table>
              <tr class="tr-header">
                <th>&nbsp;</th>
                <th>Percent</th>
              </tr>
              <tr>
                <td class="text-left">HTML</td>
                <td>80%</td>
              </tr>
              <tr>
                <td class="text-left">CSS</td>
                <td>80%</td>
              </tr>
              <tr>
                <td class="text-left">PHP</td>
                <td>80%</td>
              </tr>
              <tr>
                <td class="text-left">OOP</td>
                <td>80%</td>
              </tr>
            </table>
          </div>
      </section>
      <hr>
      <!-- Education List -->
      <section class="section section-small">
        <h2 class="section-header">Education</h2>
        <h5>Elementary school:</h5>
        <p>SDN Muarasari 1</p>
        <h5>Junior high school:</h5>
        <p>SMPN 17 Bogor</p>
      </section>
 
@endsection