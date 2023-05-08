<x-layouts.main>
    <x-slot:title>
        Post ozgartirish #{{ $post->id }}
    </x-slot:title>

    <x-page-header>
        Post ozgartirish #{{ $post->id }}
    </x-page-header>


    <div class="container">
        <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="contact-form">
                <div id="success"></div>
                <form action="{{ route('posts.update' , ['post' => $post->id ]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="control-group">
                        <input type="text" class="form-control p-4" name="title" value="{{ $post->title }}"
                            placeholder="Sarlavha" />
                        @error('title')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <input name="photo" type="file" class="form-control p-4" id="subject"
                            placeholder="photo" />
                        @error('photo')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control p-4" name="short_content"
                            value="{{ $post->short_content }}" placeholder="Qisqacha tasnif" />
                        @error('short_content')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" name="content"
                            value="{{ $post->content }}" placeholder="maqola"></textarea>
                        @error('content')
                            <p class="help-block text-danger">{{ $message }}</p>
                        @enderror
                    </div>
            </div>
            <div>
                <button class="btn btn-success  py-3 px-5" type="submit">
                    Saqlash
                </button>
                <button href="{{ route('posts.show', ['post' => $post->id])}}" class="btn btn-danger  py-3 px-5" >
                    Ortga qaytish
                </button>
            </div>
            </form>
        </div>
    </div>
    </div>
</x-layouts.main>
