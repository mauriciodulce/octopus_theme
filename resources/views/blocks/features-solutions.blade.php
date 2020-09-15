<section class="section section--padding {{ $block->classes }}">
  <div class="container mx-auto">
    <div class="flex flex-wrap">
      <div class="pb-12 w-full xl:mr-8 xl:pb-0 xl:w-1/4">
        <header class="lg:pb-10 pb-6 sm:max-w-sm xl:max-w-sm">
          <h2 class="font-bold leading-tight lg:leading-10 lg:text-3xl md:text-3xl pr-24 relative sm:text-2xl text-2xl text-octagray-900 xl:pr-0">
            {{ get_field('text_field') }}
            <hr class="block border-b-4 border-octagray-900 border-t-0 w-2/12 xl:w-3/12 xl:pt-3">
          </h2>
        </header>
        <p class="leading-relaxed text-lg md:text-2xl">
          {{ get_field('presentation') }}
        </p>
      </div>
      <div class="w-full xl:w-4/6 flex flex-wrap">
        @foreach ($items as $solution)
          @if ($solution['link'])
            <a href="{{ $solution['link']['url'] }}" class="card-a block mb-10 md:mb-0">
          @else
            <div class="card-a mb-10 md:mb-0">
          @endif
          <div class="card-a__inner">
            <div class="card-a__content p-10 text-white">
              <div class="card-a__heading">
                <h5 class="font-semibold text-lg md:text-xl">
                  {{ $solution['title'] }}
                </h5>
              </div>
              <div class="card-a__body py-5">
                <p class="text-base md:text-lg">
                  {{ $solution['summary'] }}
                </p>
              </div>
              @if ($solution['link'])
              <div class="card-a__link">
                <i class="fontello icon-right" aria-hidden="true"></i>
              </div>
          @endif
            </div>
          </div>
          @if ($solution['link'])
            </a>
          @else
            </div>
          @endif
        @endforeach
      </div>
    </div>
  </div>
</section>
<InnerBlocks />
