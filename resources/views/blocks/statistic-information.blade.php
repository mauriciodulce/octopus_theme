<section class="section--padding section--padding--top--no wp-block-statistic-information {{ $block->classes }}">
  @if(get_field('statisticinformation'))
  <div class="flex flex-row flex-wrap justify-center p-0 w-full">
    @foreach (get_field('statisticinformation') as $information)
    <div class="c-statistic w-3/6 text-center py-8 border border-solid border-gray-300 sm:w-2/6">
      <div class="c-statistic__header font-semibold text-3xl sm:text-4xl">
        {{ $information['value']}}+
      </div>
      <div class="c-statistic__tex px-3 sm:px-5">
        <p class="text-sm leading-4 sm:text-base">
          {{ $information['text']}}
        </p>
      </div>
    </div>
    @endforeach
  </div>
  @else
    <div class="container mx-auto">
      <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
    </div>
  @endif
</section>
