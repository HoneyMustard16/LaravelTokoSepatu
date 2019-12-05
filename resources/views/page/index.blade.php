@extends('layouts.frontend.master')
@section('content')
  <!-- Product -->
  <section id="product">
<div class="product-card">
      <h1>Original Shoes</h1>
      <p>Click the colors to choose your shoes</p>
      <div class="product-pic"></div>
      <div class="product-colors">
        <span class="blue active" data-color="#7ed6df" data-pic="url(1.png"></span>
        <span class="green" data-color="#badc58" data-pic="url(2.png)"></span>
        <span class="yellow" data-color="#f9ca24" data-pic="url(3.png)"></span>
        <span class="rose" data-color="#ff7979" data-pic="url(4.png)"></span>
      </div>
      <div class="product-info">
        @foreach($price as $p)
        <div class="product-price">
          {{ $p->priceTag }}
          @endforeach
        </div>
        <a href="#" class="product-button">Add to Cart</a>
      </div>
    </div>
    <script>
      $(".product-colors span").click(function(){
        $(".product-colors span").removeClass("active");
        $(this).addClass("active");
        $("body").css("background",$(this).attr("data-color"));
        $(".product-price").css("color",$(this).attr("data-color"));
        $(".product-button").css("color",$(this).attr("data-color"));
        $(".product-pic").css("background-image",$(this).attr("data-pic"));
        $(".progress-bar").css("background",$(this).attr("data-color"));
        $(".border").css("background",$(this).attr("data-color"));
        $(".about a").css("color",$(this).attr("data-color"));
        $(".card-icon").css("background",$(this).attr("data-color"));
      });
    </script>
  </section>

    <!-- About -->
    <section id="about">
    <div class="about-section">
        <div class="inner-width">
          <h1>About Us</h1>
          <div class="border"></div>
          <div class="about-section-row">
            <div class="about-section-col">
              <div class="about">
                <p>
                  For more information about our shoes, click the button below
                </p>
                <a href="#">Read More</a>
              </div>
            </div>
            <div class="about-section-col">
              <div class="skills">
                <div class="skill">
                  <div class="title">Comfy</div>
                  <div class="progress">
                    <div class="progress-bar p1"><span>100%</span></div>
                  </div>
                </div>

                <div class="skill">
                  <div class="title">Stylish</div>
                  <div class="progress">
                    <div class="progress-bar p2"><span>100%</span></div>
                  </div>
                </div>

                <div class="skill">
                  <div class="title">Cheap</div>
                  <div class="progress">
                    <div class="progress-bar p3"><span>90%</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@stop