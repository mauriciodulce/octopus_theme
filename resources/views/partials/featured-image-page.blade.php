<section class="hero @if(is_front_page()) hero__frontpage @endif pt-10 sm:pt-12 md:pt-32 lg:pt-40 xl:pt-48 section  flex section--padding section--padding--bottom--extra section--header bg-transparent">
  <div class="max-w-screen-xl mx-auto">
    <div class="hero__inner px-6 ">
      <h1 class="font-bold leading-tight text-olg sm:text-o2xl md:text-6xl lg:text-o8xl text-octagray900">
        Somos el hub de la <span class="text-deepred-900">publicidad</span> digital en América Latina.
      </h1>
    </div>
  </div>
</section>
{{-- @if(has_post_thumbnail())
  @if( is_front_page() )
    @php
      $size = 'thumb';
    @endphp
  @else
    @php
      $size = 'hero';
    @endphp
  @endif
  <div class="hero @if(!is_front_page()) clip-path-effect @endif" data-clip-value="40">
    <div class="image-wrapper">
      @php
        the_post_thumbnail($size, array('class' => 'rellax lazy'))
      @endphp
    </div>
  </div>
  <div class="hero-background rellax" data-rellax-speed="-3"></div>
@endif --}}
