<section class="section section--padding {{ $block->classes }}">
  <div class="container mx-auto">
    @include('partials.block-header')
    @fields('items')
      <div class="b-item-two-cols">
        <div class="b-item-two-cols__image">
          @hassub('image')
              <div class="card-image relative">
                {{-- @sub('image', 'url') --}}
                <img src="@sub('image', 'url')" alt="@sub('image', 'alt')" />
                <span>
                  <img src="@sub('icon', 'url')" alt="@sub('image', 'alt')" class="style-svg" />
                </span>
              </div>
            @endsub
        </div>
        <div class="b-item-two-cols__body">
          @sub('title')
          @sub('content')
        </div>
      </div>
      @endfields
  </div>
</section>
