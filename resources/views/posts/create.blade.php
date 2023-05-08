<x-layouts.main>
    <x-slot:title>
        Post yaratish
    </x-slot:title>

    <x-page-header>
        Yangi post yaratish
    </x-page-header>

    <div class="container">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
                <div id="success"></div>
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control p-4" name="title" value="{{ old('title') }}" placeholder="Sarlavha"  />
                        @error('title')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <input name="photo" type="file" class="form-control p-4" id="subject" placeholder="photo" />
                        @error('photo')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control p-4" name="short_content" value="{{ old('short_content') }}" placeholder="Qisqacha tasnif" />
                            @error('short_content')
                            <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" name="content"  value="{{ old('content') }}"placeholder="maqola" ></textarea>
                        @error('content')
                        <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                </div>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block py-3 px-5" type="submit">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.main>
