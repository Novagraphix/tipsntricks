<form action="/cookie-consent/reset"
      method="post"
      data-cookie-action="reset">
    @csrf
    <button type="submit"
            class="group fixed bottom-4 left-4 flex h-12 w-12 items-center justify-center rounded-full bg-white p-3 shadow-lg transition-colors duration-500 hover:bg-black hover:text-white">
        @svg('fas-fingerprint', 'w-8 h-8')
    </button>
</form>
