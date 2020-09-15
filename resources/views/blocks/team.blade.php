<section class="section section--padding {{ $block->classes }}">
  <div class="container mx-auto">
    @include('partials.block-header')
    <div>
      @fields('team')
      <div>
        <div>
          <img src="@sub('image', 'url')" alt="@sub('image', 'alt')" />
        </div>
        <div>
          <h4>
            @sub('name')
            <a class="inline-block" href="@sub('LinkedIn')" target="_blank">
              @svg('images.linkedin', 'h-4 svg-filter', ['aria-label' => 'Logo'])
            </a>
          </h4>
          <div>
            @sub('cargo')
          </div>
        </div>
      </div>
      @endfields
    </div>
  </div>
</section>
<div>
  <InnerBlocks />
</div>



