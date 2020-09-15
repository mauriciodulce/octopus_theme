<section class="section section--padding {{ $block->classes }}">
  <div class="container">
    <div class="sm:flex sm:items-center">
      @hasfield('subheading')
      <span class="block font-light pb-2 text-gray-600 text-xs tracking-broad uppercase sm:text-sm sm:pb-0 sm:w-56">
        @field('subheading')
      </span>
      @endfield
      @hasfield('heading')
        <h2 class="font-semibold inline-block leading-snug text-2xl sm:text-3xl">
          @field('heading')
        </h2>
      @endfield
    </div>

    @hasfield('heading')
      <p class="leading-normal pt-5 sm:text-xl">
        @field('summary')
      </p>
    @endfield
  </div>
  <div class="mt-8 c-clients">
    @if(get_field('client'))
    <div class="c-clients__img-wrapper flex">
      @foreach(get_field('client') as $item)
        <img src="{{ $item[logo][sizes][client_logo] }}" alt="{{ $item[logo][alt] }}"
          class="c-clients__img">
      @endforeach
    </div>
    @endif
    @if(get_field('client2'))
    <div class="c-clients__img-wrapper flex">
      @foreach(get_field('client2') as $item)
        <img src="{{ $item[logo][sizes][client_logo] }}" alt="{{ $item[logo][alt] }}"
          class="c-clients__img">
      @endforeach
    </div>
    @endif
  </div>
  <!-- <div>
    <InnerBlocks />
  </div> -->
</section>
