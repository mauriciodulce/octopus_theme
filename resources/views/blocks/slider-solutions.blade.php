<section class="section section--padding  relative overflow-hidden {{ $block->classes }}">
  <div class="absolute bg-gray-200 bottom-0 left-0 top-0 w-3/4 z-10 md:w-9/12"></div>
  <div class="relative w-full z-10 bg-transparent">
    <div class="container">
      <div class="pb-10 pt-8">
        <div>
          @hasfield('text')
          <div class="font-light text-xs tracking-widest uppercase pt-1 pb-1 sm:text-base md:w-5/12">
            @field('text')
          </div>
          @endfield
          @hasfield('heading')
          <h3 class="italic text-sm p-0 sm:text-lg">
            @field('heading')
          </h3>
          @endfield
        </div>
        <hr class="border-b-0 border-current border-t mt-2 w-10"/>
      </div>
    </div>
  </div>
  <div class="container mx-auto z-10 bg-transparent relative">
    <div class="c-swiper">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          @foreach (get_field('slider') as $slide)
            <div class="swiper-slide swiper-slide--sl">
              <div class="shadow-md sl-content">
                <a href="@permalink(get_post($slide))" class="block sm:flex">
                  <div class="sl-content--image sm:w-3/6 md:w-2/5">
                    <figure>
                      @thumbnail(get_post($slide), 'slider-thumbnail')
                    </figure>
                  </div>
                  <div class="sl-content--body bg-octagray-900 font- p-8 text-white sm:w-3/6 md:w-3/5">
                    <h3 class="font-semibold leading-tight text-xl md:text-2xl">
                      {{ $slide->post_title }}
                    </h3>
                    {{-- @if ($slide->post_excerpt)
                    <p class="pt-6">
                      {{ $slide->post_excerpt }}
                    </p>
                    @endif --}}
                  </div>
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="c-navigation hidden sm:block lg:relative">
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>

</section>

<InnerBlocks />
