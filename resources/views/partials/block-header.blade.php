<header>

@hasfield('heading_content')
<div class="flex-wrap flex md:items-center">
@endfield
	<h2 class="font-bold leading-tight lg:leading-10 lg:text-3xl md:text-3xl pr-24 relative sm:text-2xl text-2xl text-octagray-900 xl:pr-0">
		@field('title_field')
	</h2>
  @hasfield('heading_content')
  <div class="w-full text-sm leading-none md:w-4/12 md:items-center md:ml-12 font-light pt-2 text-gray-600 text-xs tracking-wide md:pt-0">
      @field('heading_content')
  </div>
@endfield
@hasfield('heading_content')
</div>
<hr class="block border-b-2 border-octagray-900 border-t-0 w-2/12 xl:w-12 xl:pt-2">
@endfield
</header>

