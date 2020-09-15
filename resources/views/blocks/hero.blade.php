<section class="hero @if(is_front_page())hero--frontpage @endif pt-10 sm:pt-12 md:pt-32 lg:pt-40 xl:pt-48 section section--padding section--header bg-transparent relative {{ $block->classes }}">
  <div class="max-w-screen-xl mx-auto">
    <div class="hero__inner px-6 ">
      @if(!is_front_page())
      <div class="b-heading">
        <div>
        @endif
        <h1 class="font-bold leading-9 max-w-sm text-3xl relative z-20 md:ml-auto md:text-5xl md:leading-tight md:max-w-2xl lg:max-w-5xl lg:ml-20 lg:text-o2xl lg:w-9/12 lg:max-w-5xl  ">
          {!! get_field('hero_text') !!}
        </h1>
        @if(!is_front_page())
        </div>
        @hasfield('sub_heading')
        <div>
          @field('sub_heading')
        </div>
        @endfield
        @endif
      @if(!is_front_page())
      </div>
      @endif
      @hasfield('hero_image')
      <figure class="mt-8 @if(is_front_page())sm:-mt-9 @endif relative z-10 @if(is_front_page())md:-mt-12 @endif">
          @image('hero_image', 'cat', ['class' => 'max-w-full block'])
      </figure>
       @endfield
    </div>
  </div>
  @hasfield('hero_image')
    <div class="blend-mode logo--symbol text-octagray-100 z-20">
      @svg('images.logo-symbol', 'text-octagray-100', ['aria-label' => 'Logo'])
    </div>
    @endfield
</section>
