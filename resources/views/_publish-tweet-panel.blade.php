<div class="thinborder-lightgray rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" style="outline: none" class="w-full" placeholder="What's up doc?" required>
        </textarea>
        <hr class="my-4" style="color: rgb(136, 153, 166)">
        <footer class="flex justify-between items-center">
            <img src="{{ auth()->user()->avatar }}" alt="your avatar" class="avatar w-h-50">

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 text-sm text-white h-10">
                Publish
            </button>
        </footer>
    </form>
    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
