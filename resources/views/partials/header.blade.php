<header class="duration-300 ease-in-out transition-all fixed w-full z-50 top-0 left-0 right-0"
    x-data="{ open: false, atTop: true, }"
    :class="{ 'shadow-xs bg-white nav--no-top' :  !atTop, 'bg-transparent nav--top' : atTop}"
    @scroll.window="atTop = (window.pageYOffset > 100) ? false : true;"

>
  <div class="max-w-screen-xl mx-auto">
    <div class="relative  lg:w-full">
      <div class="relative py-3 px-6 duration-300 ease-in-out transition-all"
      :class="{ 'xl:py-3' :  !atTop, 'xl:py-6' : atTop}">
        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
          <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
            <div class="flex items-center justify-between w-full lg:w-auto">
              <a class="block mr-3" href="{{ home_url('/') }}">
                @svg('images.log-oc', 'w-40 lg:w-48 xl:w-56 brand--top duration-300 ease-in-out transition-all', ['aria-label' => 'Logo'])
                @svg('images.oc', 'h-6 w-auto brand duration-300 ease-in-out transition-all', ['aria-label' => 'Logo'])
              </a>
              <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = true" type="button" class="duration-150 ease-in-out focus:bg-gray-100 focus:outline-none focus:text-gray-500 hover:bg-gray-100 hover:text-gray-500 inline-flex items-center justify-center p-2 rounded-md text-octagray-900 transition" id="main-menu" aria-label="Main menu" aria-haspopup="true" x-bind:aria-expanded="open">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="hidden lg:block md:pr-4">
            {{--Menu Desktop--}}
            @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main-nav', 'echo' => false,  ]) !!}
              {{-- 'walker' => new \App\wp_bootstrap4_navwalker() --}}
            @endif
          </div>
        </nav>
      </div>
      {{--
        Mobile menu, show/hide based on menu open state.

        Entering: "duration-150 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
          --}}
      <div x-show="open" x-description="Mobile menu" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right lg:hidden">
        <div class="rounded-lg shadow-md">
          <div class="rounded-lg bg-white shadow-xs overflow-hidden" role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
            <div class="px-5 pt-4 flex items-center justify-between">
              <div>
                @svg('images.oc', 'h-5 w-auto', ['aria-label' => 'Logo'])
              </div>
              <div class="-mr-2">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-octagray900 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" aria-label="Close menu" @click="open = false">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="pt-2 pb-3">
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main-nav main-nav__mobile', 'echo' => false, 'walker' => new \App\wp_bootstrap4_navwalker()  ]) !!}
            </div>
            <div>
              <a href="#" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700 focus:outline-none focus:bg-gray-100 focus:text-indigo-700 transition duration-150 ease-in-out" role="menuitem">
                Log in
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
{{--
<header class="duration-300 ease-in-out transition-all fixed w-full z-50 shadow-xs bg-white nav--no-top" x-data="{ open: false, atTop: true, }" :class="{ 'shadow-xs bg-white nav--no-top' :  !atTop, 'bg-transparent nav--top' : atTop}" @scroll.window="atTop = (window.pageYOffset > 200) ? false : true;">
  <div class="max-w-screen-xl mx-auto">
    <div class="relative  lg:w-full">
      <div class="relative py-3 px-6 duration-300 ease-in-out transition-all xl:py-3" :class="{ 'xl:py-3' :  !atTop, 'xl:py-6' : atTop}">
        <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
          <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
            <div class="flex items-center justify-between w-full lg:w-auto">
              <a class="block mr-3" href="http://octopusdigitalgroup.test/">
                <svg aria-label="Logo" class="w-40 lg:w-48 xl:w-56 brand--top duration-300 ease-in-out transition-all" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 379 60"><defs><path d="M.727.664h6.997V14.15H.727z"></path><path d="M.625.933h24.832v49.13H.625z"></path></defs><g transform="translate(0 -1)" fill="none" fill-rule="evenodd"><path d="M263.38 24.185c2.37.037 4.78.467 6.37-1.9 1.02-1.5 1-4.142-.064-5.62-1.615-2.263-3.98-1.817-6.306-1.783v9.294zm-2-4.7l.002-4.97c.007-1.2.286-1.506 1.445-1.5 1.545.02 3.108-.03 4.63.188 3.04.43 5.18 3.265 5.036 6.45-.16 3.502-2.313 6-5.518 6.245-1.468.118-2.95.05-4.426.073-.822.013-1.172-.408-1.17-1.2v-5.295zm45.965 1.618c-1.26 0-2.17.082-3.052-.04-.383-.05-.925-.467-1.012-.814-.168-.667.403-.94.998-.954l3.673.001c.725.02 1.113.452 1.12 1.187l-.02 2.808a1.99 1.99 0 0 1-.495 1.13c-1.707 1.786-5.4 2.34-7.883 1.23-2.45-1.094-3.822-3.63-3.66-6.77.14-2.683 1.885-5 4.467-5.754 2.18-.645 4.274-.454 6.126 1 .507.4.985.978.395 1.515-.27.246-1.144.2-1.494-.07-1.975-1.46-4.658-1.03-5.917.113-1.56 1.42-2.083 3.904-1.205 6.068 1.103 2.72 5.164 3.808 7.354 1.838.488-.44.392-1.53.605-2.498m47.595-.153h4.44l-2.2-5.167-2.23 5.167m8.326 4.466c-.187.206-.416.655-.625.646-.402-.018-.948-.187-1.157-.487-.423-.6-.602-1.383-1-2.016-.203-.323-.65-.674-1.003-.7a48.13 48.13 0 0 0-4.637 0c-.347.017-.786.37-1 .7-.384.6-.63 1.286-.927 1.94-.27.598-.796.863-1.295.533-.285-.188-.5-.907-.377-1.22l5.03-11.308c.128-.28.628-.6.906-.55a1.44 1.44 0 0 1 .927.7l4.898 10.895c.1.225.14.477.25.857M338.228 14.47c-1.173 0-2.2-.025-3.244.01-.6.02-.82-.2-.817-.815.003-.57.232-.762.77-.76l8.414.04c.255.005.7.5.694.757.003.253-.434.7-.707.733-1.063.086-2.138.036-3.3.036v11.456c-1.5.6-1.82.398-1.82-1.04V14.47" fill="#c3c4c7"></path><g transform="translate(371 12.067)"><mask fill="#fff"><use xlink:href="#A"></use></mask><path d="M2.582 12.574l4.21-.008c.6-.013.94.106.932.82-.01.666-.346.763-.887.758-1.7-.014-3.38-.03-5.07.005-.813.017-1.046-.334-1.04-1.103V1.612C.724.918.94.662 1.653.664s.942.266.938.954l-.01 10.956z" fill="#c3c4c7" mask="url(#C)"></path></g><path d="M285.944 19.554l.003 5.293c.003.67-.1 1.27-.936 1.286-.902.016-.995-.6-.992-1.328V14.22c-.002-.678.1-1.273.93-1.288.893-.015 1.008.607 1 1.33l-.005 5.293m36.104-.001l.001 5.293c.001.66-.098 1.27-.938 1.287-.916.02-1-.615-.987-1.328l-.001-10.585c-.003-.68.1-1.274.92-1.3.9-.016 1.014.6 1 1.33l-.005 5.293" fill="#c3c4c7"></path><path d="M71.318 37.256h-7.1a.4.4 0 0 0-.378.287c-.38 1.527-1.077 2.78-2.13 3.812-1.335 1.24-3.367 2.197-6.706 1.9-4.192-.386-6.028-2.806-8.208-5.686-2.108-2.785-4.732-5.684-9.857-5.684s-7.787 3.477-9.923 6.272c-2.204 2.883-4.063 5.65-9.676 5.6-6.24-.064-9.68-3.762-9.68-10.544v-5.348c0-6.782 3.44-10.48 9.68-10.545 5.613-.058 7.472 2.708 9.676 5.6 2.136 2.794 4.794 6.27 9.923 6.27s7.75-2.898 9.857-5.682c2.18-2.88 4.016-5.3 8.208-5.687 3.34-.308 5.37.65 6.706 1.9 1.053 1.032 1.75 2.284 2.12 3.8.06.176.207.298.388.298h7.1a.4.4 0 0 0 .403-.401c0-.018-.007-.034-.01-.05a14.32 14.32 0 0 0-4.408-8.418c-2.854-2.714-6.584-4.297-12.155-4-7.598.372-10.986 4.82-13.48 8.115-2.036 2.7-2.972 3.707-4.738 3.707-1.787 0-2.742-1.03-4.822-3.75-2.615-3.422-6.197-8.108-14.395-8.108l-.475.003C6.786 10.96.033 18.566 0 30.322v.392C.033 42.47 6.786 50.077 17.237 50.15l.475.003c8.198 0 11.78-4.686 14.395-8.1 2.08-2.722 3.035-3.75 4.822-3.75 1.766 0 2.702 1.017 4.738 3.707 2.494 3.294 5.882 7.743 13.48 8.114 5.57.3 9.3-1.275 12.155-4 2.435-2.312 3.908-5.138 4.413-8.403-.002-.03.005-.046.005-.064 0-.222-.18-.402-.402-.402m27.745-6.7c0 12.124 6.706 19.657 17.5 19.657s17.5-7.533 17.5-19.657-6.706-19.657-17.5-19.657-17.5 7.53-17.5 19.657zm27.295 2.58c0 6.847-3.48 10.617-9.795 10.617s-9.796-3.77-9.796-10.617v-5.16c0-6.847 3.48-10.617 9.796-10.617s9.795 3.77 9.795 10.617v5.16zm82.368-21.842c0-.224-.183-.406-.406-.406l-6.534.001c-.227-.001-.4.18-.4.405l.001 26.238c0 4.202-4.17 6.082-8.3 6.082-5.297 0-7.872-2.926-7.872-8.943l-.001-23.377c0-.224-.18-.406-.405-.406l-6.54.001c-.222.003-.4.18-.402.403v24.355c0 8.985 5.204 14.565 13.58 14.565 6.184 0 9.473-3.745 11.793-6.575l-1.918 6.198c-.01.03-.02.06-.02.094 0 .16.13.3.3.292l6.736.001c.222 0 .404-.18.405-.404l-.002-38.518" fill="#383c45"></path><g transform="translate(72 .067)"><mask fill="#fff"><use xlink:href="#B"></use></mask><path d="M25.457 11.242c0-.224-.182-.405-.405-.405h-9.76V1.36c-.004-.008 0-.015 0-.02 0-.223-.18-.404-.402-.405V.933H8.564c-.223.003-.402.182-.403.403V8.3c0 2.007-.52 2.527-2.527 2.527h-4.62c-.214.013-.383.183-.387.397H.626v5.684c-.001.23.18.41.4.41h.001 6.917v23.5c0 5.867 3.262 9.232 8.95 9.232l8.157-.001c.223 0 .404-.18.404-.403l.002-.002-.003-5.692c-.005-.22-.183-.396-.403-.396l-6.982.002-5.46 3.025 2.646-5.618.04-23.647h9.76c.223 0 .405-.18.405-.405v-5.68" fill="#383c45" mask="url(#D)"></path></g><path d="M157.448 10.888c-5.84 0-9.86 3.383-12.837 6.62l2.125-6.234a.29.29 0 0 0-.27-.384l-.002-.002h-6.75c-.225-.001-.406.18-.407.404l-.002.001.001 48.37c0 .224.18.406.405.406h6.537c.223 0 .403-.18.405-.403h.001v-12.08l-2.096-5.66c2.578 2.944 6.637 8.274 12.9 8.274 9.53 0 15.22-7.35 15.22-19.657s-5.7-19.657-15.22-19.657zm7.444 22.727c0 6.16-3.698 9.987-9.652 9.987-4.274 0-8.585-2.03-8.585-6.57V24.057c0-4.54 4.3-6.57 8.585-6.57 5.954 0 9.652 3.828 9.652 10v6.14zM236.7 27.83l-2.153-.336-7.116-1.075c-3.185-.427-5.087-2-5.087-4.2 0-2.03 1.092-3.436 3.343-4.292 1.675-.655 3.346-.655 4.82-.655 2.26 0 4.256.677 5.773 1.963 1.1.888 1.835 2.406 1.896 3.87l.016.403h.003c.01.215.185.387.4.387h7.265c.223-.001.403-.182.403-.406l.001-.006v-.4c0-2.808-.903-5.1-2.92-7.422-2.608-3.1-7.166-4.8-12.837-4.8-5.005 0-9.764 1.592-12.414 4.15-1.87 1.753-2.988 4.608-2.988 7.636 0 5.578 4.102 9.314 11.242 10.245l8 1.262c3.866.487 5.588 1.824 5.588 4.336 0 1.42-.5 2.636-1.348 3.263-2 1.576-5.536 1.8-7.475 1.8-2.72 0-5.064-.542-6.426-1.485-1.768-1.242-2.697-2.912-2.758-4.964l-.013-.393c0-.223-.18-.405-.404-.405h-7.267c-.227 0-.408.182-.408.405v.418c0 3.28 1.5 6.588 3.983 8.85 3.093 2.83 7.464 4.265 13 4.265 5.715 0 10.444-1.52 13.32-4.285 2.022-1.972 3.048-4.632 3.048-7.907 0-5.378-3.917-9.2-10.477-10.223" fill="#383c45"></path><g fill="#c3c4c7"><path d="M286.624 42.947l4.922-.018c1.034-.044 1.772-.937 1.783-1.945.01-.978-.7-1.92-1.634-1.96l-5.07-.02v3.94zm-.057 1.77l.002 3.995c.005.713.007 1.488-.936 1.52s-1-.717-1-1.448l-.007-10.27c-.008-1 .4-1.437 1.417-1.413l5.08.025c3.117.112 4.936 2.43 3.887 5.1-.37.945-1.315 1.666-2.152 2.676l1.782 3.688c.396.848.157 1.608-.545 1.597-.393-.006-.942-.358-1.14-.7l-2.03-4.042c-.2-.345-.723-.658-1.126-.697-1.026-.098-2.068-.032-3.223-.032zm30.168-1.087c.01-2.868-1.907-4.948-4.577-4.964-2.705-.015-4.604 1.995-4.62 4.9-.017 2.93 1.817 4.973 4.5 5 2.758.03 4.697-2 4.707-4.927m-4.604 6.7c-3.787.014-6.666-2.92-6.63-6.752.037-3.807 2.863-6.67 6.595-6.68 3.808-.01 6.597 2.852 6.584 6.758-.01 3.85-2.77 6.66-6.55 6.673"></path><path d="M271.433 45.148c-.94 0-1.843.077-2.722-.036-.4-.05-.96-.428-1.045-.76-.163-.646.37-.952 1-.96l3.672.001c.73.013 1.12.397 1.1 1.16l-.03 2.914a2.02 2.02 0 0 1-.594 1.176c-2.246 2.12-6.565 2.26-9 .33-2.52-2.003-3.2-5.967-1.53-8.926 1.53-2.713 5.1-3.912 8.192-2.704.62.243 1.244.618 1.7 1.1.266.277.2.87.285 1.32-.45.032-.944.194-1.346.066-.808-.257-1.537-.86-2.35-.986-3.07-.472-5.383 1.613-5.432 4.767-.054 3.446 2.646 5.647 6.022 4.9 2.056-.45 2.304-.827 2.068-3.363m82.883-6.142v3.97l4.673-.018c1.015-.044 1.633-.844 1.645-1.905.015-1.114-.62-1.985-1.643-2.03l-4.675-.018m-.07 5.86l-.002 4.058c-.003.705-.155 1.358-1.034 1.326-.816-.03-.9-.652-.908-1.318l-.007-10.468c-.007-.976.4-1.38 1.355-1.343l5.912.222c2.03.257 3.023 1.65 3.018 3.685-.004 2.043-1.007 3.26-3.067 3.657a11.16 11.16 0 0 1-1.817.175l-3.45.006"></path><path d="M329.673 41.746l-.002-3.024c-.003-.757-.135-1.688.943-1.722 1.12-.036.98.905.98 1.658l.001 6.155c.013 2.872 2.13 4.412 4.866 3.55 1.437-.452 2.194-1.56 2.2-3.316l.004-6.588c-.002-.72.03-1.496.978-1.47.876.023 1.03.726 1.01 1.486l-.23 7.753c-.362 2.986-2.746 4.37-6.295 4.038-2.574-.24-4.402-2.26-4.458-4.957l-.004-3.563"></path></g></g></svg>                <!--?xml version="1.0" encoding="utf-8"?--><svg aria-label="Logo" class="h-6 w-auto brand duration-300 ease-in-out transition-all" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 40" xmlns:v="https://vecta.io/nano"><path d="M71.318 26.256h-7.1a.4.4 0 0 0-.378.287c-.38 1.527-1.077 2.78-2.13 3.812-1.335 1.24-3.367 2.197-6.706 1.9-4.192-.386-6.028-2.806-8.208-5.686-2.108-2.785-4.732-5.684-9.857-5.684s-7.787 3.477-9.923 6.272c-2.204 2.883-4.063 5.65-9.676 5.6-6.24-.064-9.68-3.762-9.68-10.544v-5.348c0-6.782 3.44-10.48 9.68-10.545 5.613-.058 7.472 2.708 9.676 5.6 2.136 2.794 4.794 6.27 9.923 6.27s7.75-2.898 9.857-5.682c2.18-2.88 4.016-5.3 8.208-5.687 3.34-.308 5.37.65 6.706 1.9 1.053 1.032 1.75 2.284 2.12 3.8.06.176.207.298.388.298h7.1a.4.4 0 0 0 .403-.401c0-.018-.007-.034-.01-.05a14.32 14.32 0 0 0-4.408-8.418c-2.854-2.714-6.584-4.297-12.155-4-7.598.372-10.986 4.82-13.48 8.115-2.036 2.7-2.972 3.707-4.738 3.707-1.787 0-2.742-1.03-4.822-3.75C29.493 4.6 25.91-.086 17.713-.086l-.475.003C6.786-.04.033 7.566 0 19.322v.392C.033 31.47 6.786 39.077 17.237 39.15l.475.003c8.198 0 11.78-4.686 14.395-8.1 2.08-2.722 3.035-3.75 4.822-3.75 1.766 0 2.702 1.017 4.738 3.707 2.494 3.294 5.882 7.743 13.48 8.114 5.57.3 9.3-1.275 12.155-4 2.435-2.312 3.908-5.138 4.413-8.403-.002-.03.005-.046.005-.064 0-.222-.18-.402-.402-.402m27.745-6.7c0 12.124 6.706 19.657 17.5 19.657s17.5-7.533 17.5-19.657-6.706-19.657-17.5-19.657-17.5 7.53-17.5 19.657h0zm27.295 2.58c0 6.847-3.48 10.617-9.795 10.617s-9.796-3.77-9.796-10.617v-5.16c0-6.847 3.48-10.617 9.796-10.617s9.795 3.77 9.795 10.617v5.16zM208.726.293c0-.224-.183-.406-.406-.406l-6.534.001c-.227-.001-.4.18-.4.405l.001 26.238c0 4.202-4.17 6.082-8.3 6.082-5.297 0-7.872-2.926-7.872-8.943L185.214.293c0-.224-.18-.406-.405-.406l-6.54.001c-.222.003-.4.18-.402.403v24.355c0 8.985 5.204 14.565 13.58 14.565 6.184 0 9.473-3.745 11.793-6.575l-1.918 6.198c-.01.03-.02.06-.02.094a.29.29 0 0 0 .3.292h6.736c.222 0 .404-.18.405-.404L208.74.3" fill="#383c45"></path></svg>              </a>
              <div class="-mr-2 flex items-center lg:hidden">
                <button @click="open = true" type="button" class="duration-150 ease-in-out focus:bg-gray-100 focus:outline-none focus:text-gray-500 hover:bg-gray-100 hover:text-gray-500 inline-flex items-center justify-center p-2 rounded-md text-octagray-900 transition" id="main-menu" aria-label="Main menu" aria-haspopup="true" x-bind:aria-expanded="open">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="hidden lg:block md:pr-4">

                          <ul id="menu-main-nav" class="main-nav"><li class="menu-item menu-item-has-children menu-our-solutions"><a href="#">Our solutions</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-has-children menu-brand-awareness-solutions"><a href="/industries/brand-awareness-solutions/"><span class="font-hairline text-lg">Brand awareness solutions</span></a>
	<ul class="sub-menu">
		<li class="menu-item menu-rich-media"><a href="http://octopusdigitalgroup.test/solutions/brand-awareness-solutions/rich-media/"><i class="fontello icon-marquee"></i>Rich media</a></li>
		<li class="menu-item menu-display"><a href="http://octopusdigitalgroup.test/solutions/brand-awareness-solutions/display/"><i class="fontello icon-marquee"></i>Display</a></li>
		<li class="menu-item menu-video"><a href="http://octopusdigitalgroup.test/solutions/brand-awareness-solutions/video/"><i class="fontello icon-marquee"></i>Video</a></li>
		<li class="menu-item menu-audio"><a href="http://octopusdigitalgroup.test/solutions/brand-awareness-solutions/audio/"><i class="fontello icon-marquee"></i>Audio</a></li>
		<li class="menu-item menu-direct-publishers"><a href="http://octopusdigitalgroup.test/solutions/brand-awareness-solutions/direct-publishers/"><i class="fontello icon-marquee"></i>Direct Publishers</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-has-children menu-user-engagement"><a href="/industries/user-engagement/"><span class="font-hairline text-lg">User Engagement</span></a>
	<ul class="sub-menu">
		<li class="menu-item menu-audience-by-octopus"><a href="http://octopusdigitalgroup.test/solutions/user-engagement/audience-by-octopus/"><i class="fontello icon-marquee"></i> Audience by Octopus</a></li>
		<li class="menu-item menu-geodiferentiation"><a href="http://octopusdigitalgroup.test/solutions/user-engagement/geodiferentiation/"><i class="fontello icon-marquee"></i> Geodiferentiation</a></li>
		<li class="menu-item menu-click-to-action"><a href="http://octopusdigitalgroup.test/solutions/user-engagement/click-to-action/"><i class="fontello icon-marquee"></i> Click to Action</a></li>
		<li class="menu-item menu-push-notifications"><a href="http://octopusdigitalgroup.test/solutions/user-engagement/push-notifications/"><i class="fontello icon-marquee"></i> Push Notifications</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-has-children menu-dive-the-funnel"><a href="#"><span class="font-hairline text-lg">Dive the funnel</span></a>
	<ul class="sub-menu">
		<li class="menu-item menu-attracts"><a href="http://octopusdigitalgroup.test/solutions/dive-the-funnel/attracts/"><i class="fontello icon-marquee"></i> Attracts</a></li>
		<li class="menu-item menu-grow"><a href="http://octopusdigitalgroup.test/solutions/dive-the-funnel/grow/"><i class="fontello icon-marquee"></i> Grow</a></li>
		<li class="menu-item menu-convert"><a href="http://octopusdigitalgroup.test/solutions/dive-the-funnel/convert/"><i class="fontello icon-marquee"></i> Convert</a></li>
	</ul>
</li>
	<li class="menu-item menu-item-has-children menu-our-adtech"><a href="#"><span class="font-hairline text-lg">Our Adtech</span></a>
	<ul class="sub-menu">
		<li class="menu-item menu-imonomy"><a href="http://octopusdigitalgroup.test/solutions/our-adtech/imonomy/"><i class="fontello icon-marquee"></i> Imonomy</a></li>
		<li class="menu-item menu-eskimi"><a href="http://octopusdigitalgroup.test/solutions/our-adtech/eskimi/"><i class="fontello icon-marquee"></i> Eskimi</a></li>
	</ul>
</li>
</ul>
</li>
<li class="menu-item menu-partnership"><a href="#">Partnership</a></li>
<li class="menu-item menu-about-octopus"><a href="#">About Octopus</a></li>
<li class="menu-item menu-news"><a href="#">News</a></li>
<li class="menu-item menu-contact"><a href="#">Contact</a></li>
</ul>

                      </div>
        </nav>
      </div>

      <div x-show="open" x-description="Mobile menu" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right lg:hidden" style="display: none;">
        <div class="rounded-lg shadow-md">
          <div class="rounded-lg bg-white shadow-xs overflow-hidden" role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
            <div class="px-5 pt-4 flex items-center justify-between">
              <div>
                <!--?xml version="1.0" encoding="utf-8"?--><svg aria-label="Logo" class="h-5 w-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 40" xmlns:v="https://vecta.io/nano"><path d="M71.318 26.256h-7.1a.4.4 0 0 0-.378.287c-.38 1.527-1.077 2.78-2.13 3.812-1.335 1.24-3.367 2.197-6.706 1.9-4.192-.386-6.028-2.806-8.208-5.686-2.108-2.785-4.732-5.684-9.857-5.684s-7.787 3.477-9.923 6.272c-2.204 2.883-4.063 5.65-9.676 5.6-6.24-.064-9.68-3.762-9.68-10.544v-5.348c0-6.782 3.44-10.48 9.68-10.545 5.613-.058 7.472 2.708 9.676 5.6 2.136 2.794 4.794 6.27 9.923 6.27s7.75-2.898 9.857-5.682c2.18-2.88 4.016-5.3 8.208-5.687 3.34-.308 5.37.65 6.706 1.9 1.053 1.032 1.75 2.284 2.12 3.8.06.176.207.298.388.298h7.1a.4.4 0 0 0 .403-.401c0-.018-.007-.034-.01-.05a14.32 14.32 0 0 0-4.408-8.418c-2.854-2.714-6.584-4.297-12.155-4-7.598.372-10.986 4.82-13.48 8.115-2.036 2.7-2.972 3.707-4.738 3.707-1.787 0-2.742-1.03-4.822-3.75C29.493 4.6 25.91-.086 17.713-.086l-.475.003C6.786-.04.033 7.566 0 19.322v.392C.033 31.47 6.786 39.077 17.237 39.15l.475.003c8.198 0 11.78-4.686 14.395-8.1 2.08-2.722 3.035-3.75 4.822-3.75 1.766 0 2.702 1.017 4.738 3.707 2.494 3.294 5.882 7.743 13.48 8.114 5.57.3 9.3-1.275 12.155-4 2.435-2.312 3.908-5.138 4.413-8.403-.002-.03.005-.046.005-.064 0-.222-.18-.402-.402-.402m27.745-6.7c0 12.124 6.706 19.657 17.5 19.657s17.5-7.533 17.5-19.657-6.706-19.657-17.5-19.657-17.5 7.53-17.5 19.657h0zm27.295 2.58c0 6.847-3.48 10.617-9.795 10.617s-9.796-3.77-9.796-10.617v-5.16c0-6.847 3.48-10.617 9.796-10.617s9.795 3.77 9.795 10.617v5.16zM208.726.293c0-.224-.183-.406-.406-.406l-6.534.001c-.227-.001-.4.18-.4.405l.001 26.238c0 4.202-4.17 6.082-8.3 6.082-5.297 0-7.872-2.926-7.872-8.943L185.214.293c0-.224-.18-.406-.405-.406l-6.54.001c-.222.003-.4.18-.402.403v24.355c0 8.985 5.204 14.565 13.58 14.565 6.184 0 9.473-3.745 11.793-6.575l-1.918 6.198c-.01.03-.02.06-.02.094a.29.29 0 0 0 .3.292h6.736c.222 0 .404-.18.405-.404L208.74.3" fill="#383c45"></path></svg>              </div>
              <div class="-mr-2">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-octagray900 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" aria-label="Close menu" @click="open = false">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div class="pt-2 pb-3">
              <ul id="menu-main-nav-1" class="main-nav main-nav__mobile"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-11"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>Our solutions</span> <b class="caret"></b></a>
<ul class="dropdown-menu depth_0">
	<li class="menu-item menu-item-type-taxonomy menu-item-object-industry menu-item-has-children dropdown menu-item-62 dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span><span class="font-hairline text-lg">Brand awareness solutions</span></span> <b class="caret"></b></a>
	<ul class="dropdown-menu sub-menu depth_1">
		<li class="menu-item menu-item-type-post_type menu-item-object-solutions menu-item-69"><a href="http://octopusdigitalgroup.test/solutions/brand-awareness-solutions/rich-media/"><span><i class="fontello icon-marquee"></i>Rich media</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-solutions menu-item-68"><a href="http://octopusdigitalgroup.test/solutions/brand-awareness-solutions/display/"><span><i class="fontello icon-marquee"></i>Display</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-solutions menu-item-70"><a href="http://octopusdigitalgroup.test/solutions/brand-awareness-solutions/video/"><span><i class="fontello icon-marquee"></i>Video</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-solutions menu-item-66"><a href="http://octopusdigitalgroup.test/solutions/brand-awareness-solutions/audio/"><span><i class="fontello icon-marquee"></i>Audio</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-solutions menu-item-67"><a href="http://octopusdigitalgroup.test/solutions/brand-awareness-solutions/direct-publishers/"><span><i class="fontello icon-marquee"></i>Direct Publishers</span></a></li>
</ul></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-industry menu-item-has-children dropdown menu-item-63 dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span><span class="font-hairline text-lg">User Engagement</span></span> <b class="caret"></b></a>
	<ul class="dropdown-menu sub-menu depth_1">
		<li class="menu-item menu-item-type-post_type menu-item-object-solutions menu-item-74"><a href="http://octopusdigitalgroup.test/solutions/user-engagement/audience-by-octopus/"><span><i class="fontello icon-marquee"></i> Audience by Octopus</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-solutions menu-item-73"><a href="http://octopusdigitalgroup.test/solutions/user-engagement/geodiferentiation/"><span><i class="fontello icon-marquee"></i> Geodiferentiation</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-solutions menu-item-72"><a href="http://octopusdigitalgroup.test/solutions/user-engagement/click-to-action/"><span><i class="fontello icon-marquee"></i> Click to Action</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-solutions menu-item-71"><a href="http://octopusdigitalgroup.test/solutions/user-engagement/push-notifications/"><span><i class="fontello icon-marquee"></i> Push Notifications</span></a></li>
</ul></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-88 dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span><span class="font-hairline text-lg">Dive the funnel</span></span> <b class="caret"></b></a>
	<ul class="dropdown-menu sub-menu depth_1">
		<li class="menu-item menu-item-type-post_type menu-item-object-solutions menu-item-92"><a href="http://octopusdigitalgroup.test/solutions/dive-the-funnel/attracts/"><span><i class="fontello icon-marquee"></i> Attracts</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-solutions menu-item-91"><a href="http://octopusdigitalgroup.test/solutions/dive-the-funnel/grow/"><span><i class="fontello icon-marquee"></i> Grow</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-solutions menu-item-90"><a href="http://octopusdigitalgroup.test/solutions/dive-the-funnel/convert/"><span><i class="fontello icon-marquee"></i> Convert</span></a></li>
</ul></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-89 dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span><span class="font-hairline text-lg">Our Adtech</span></span> <b class="caret"></b></a>
	<ul class="dropdown-menu sub-menu depth_1">
		<li class="menu-item menu-item-type-post_type menu-item-object-solutions menu-item-94"><a href="http://octopusdigitalgroup.test/solutions/our-adtech/imonomy/"><span><i class="fontello icon-marquee"></i> Imonomy</span></a></li>
		<li class="menu-item menu-item-type-post_type menu-item-object-solutions menu-item-93"><a href="http://octopusdigitalgroup.test/solutions/our-adtech/eskimi/"><span><i class="fontello icon-marquee"></i> Eskimi</span></a></li>
</ul></li>
</ul></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a href="#"><span>Partnership</span></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23"><a href="#"><span>About Octopus</span></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27"><a href="#"><span>News</span></a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28"><a href="#"><span>Contact</span></a></li>
</ul>
            </div>
            <div>
              <a href="#" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700 focus:outline-none focus:bg-gray-100 focus:text-indigo-700 transition duration-150 ease-in-out" role="menuitem">
                Log in
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
--}}
