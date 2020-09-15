<footer class="relative py-6 mt-20 c-footer">
  <div class="max-w-screen-xl mx-auto px-6">
    <div class="border-octagray-200 border-solid border-t">
      <div class="flex flex-wrap">
        <div class="c-footer_top pt8 flex flex-wrap w-full">
          <div class="mt-8 text-center w-full hidden md:block md:w-1/12 md:text-left">
            @svg('images.oc', 'h-6 w-auto inline-block', ['aria-label' => 'Logo'])
          </div>
          <nav class="flex flex-wrap justify-between w-full md:w-11/12 md:mt-8">
            @php(dynamic_sidebar('sidebar-footer'))
            @php(dynamic_sidebar('sidebar-newsletter'))
          </nav>
        </div>
        <div>

        </div>
      </div>
    </div>
    <div class="c-footer__bottom text-sm">
      <p class="copyright">Copyright &copy; {{ date("Y") }} Octopus Digital Group. <span class="rights">All Rights Reserved.</span></p>
    </div>
  </div>
</footer>

</div>

