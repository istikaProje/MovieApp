<!-- ====== Movie Section Start -->
<section class="flex w-full mt-4 items-start">
    <div class="w-full px-4">
        <div class="flex flex-wrap px- items-end justify-between sm:flex-nowrap sm:space-x-4">
            <h2 class="mb-4 text-2xl font-semibold text-white">
                Film Ekle
            </h2>
        </div>
        <form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="flex w-full md:space-x-4 flex-col md:flex-row">
                <div class="mb-8 rounded-lg border border-stroke bg-white w-full">
                    <h3 class="border-b border-stroke py-4 px-7 text-base font-medium text-black">
                        Bilgi
                    </h3>
                    <div class="p-7">
                        <div class="flex flex-wrap">
                            <div class="w-full px-3 md:w-1/2">
                                <div class="mb-[30px]">
                                    <label for="title" class="mb-[10px] block text-base font-medium text-black">
                                        Başlık
                                    </label>
                                    <div class="relative">
                                        <input type="text" name="title" id="title" value="{{ old('title') }}"  placeholder="Başlık"
                                            class="h-[46px] w-full rounded-md border @error('title') border-red-500 @else border-[#E0E0E0] @enderror pl-12 pr-5 text-base text-black outline-none focus:border-primary" />

                                        <span class="absolute left-[18px] top-1/2 transform -translate-y-1/2">

                                            <i class="icon-Movie text-xl text-[#637381]"> </i> <!-- Movie Icon -->
                                        </span>
                                    </div>
                                    @error('title')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="w-full px-3 md:w-1/2">
                                <div class="mb-[30px]">
                                    <label  for="vote_average" class="mb-[10px] block text-base font-medium text-black">
                                        Oy Ortalaması
                                    </label>
                                    <div class="relative">
                                        <input type="number" name="vote_average" id="vote_average" min="1" max="10" step="0.1"
                                            class="h-[46px] w-full rounded-md border @error('vote_average') border-red-500 @else border-[#E0E0E0] @enderror pl-12 pr-5 text-base text-black outline-none focus:border-primary" />
                                        <span class="absolute left-[18px] top-1/2 transform -translate-y-1/2">

                                            <i class="icon-Star text-xl"> </i>
                                        </span>

                                    </div>
                                    @error('vote_average')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="w-full px-3 ">
                                <div class="mb-[30px]" x-data="{ open: false }">
                                    <label class="mb-[10px] block text-base font-medium text-black">
                                        Kategoriler
                                    </label>
                                    <div class="relative">
                                        <button type="button" @click="open = !open" class="h-[46px] w-full rounded-md border border-[#E0E0E0] pl-3 pr-5 text-base text-black outline-none focus:border-primary flex justify-between items-center">
                                            <span>Kategori Seçiniz</span>
                                            <i :class="{'rotate-180': open}" class="icon-Arrow transform transition-transform duration-200 text-xl"> </i> <!-- Arrow Icon -->
                                        </button>
                                        <div x-show="open" @click.away="open = false" class="absolute z-10 mt-2 w-full rounded-md border border-[#E0E0E0] bg-white shadow-lg">
                                            <div class="p-3 max-h-60 overflow-y-auto space-y-3">
                                                @foreach($categories as $category)
                                                    <div x-data="{ checked: false }">
                                                        <input type="checkbox" id="category_{{ $category->id }}" name="categories[]" value="{{ $category->id }}" class="select-list sr-only" @change="checked = !checked">
                                                        <label for="category_{{ $category->id }}" :class="checked ? 'border-green-500 text-green-500' : 'border-[#E0E0E0] text-body-color'" class="select-list flex cursor-pointer items-center rounded-md border py-3 px-5">
                                                            <span :class="checked ? 'bg-green-500' : 'bg-[#B2B3B4]'" class="icon flex h-5 w-5 items-center justify-center rounded-full">
                                                                <i class="icon-Check text-sm text-white"> </i> <!-- Check Icon -->
                                                            </span>
                                                            <span class="pl-[14px] text-base font-medium">{{ $category->name }}</span>
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    @error('categories')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full px-3 ">
                                <div class="mb-[30px]">
                                    <label for="description" class="mb-[10px] block text-base font-medium text-black">
                                        Açıklama
                                    </label>
                                    <textarea name="description" id="description"  rows="4"
                                        class="w-full rounded-md border @error('description') border-red-500 @else border-[#E0E0E0] @enderror p-3 text-base text-black outline-none focus:border-primary">{{ old('description') }}</textarea>
                                    @error('description')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full px-3 ">
                                <div class="mb-[30px]">
                                    <label for="youtube_link" class="mb-[10px] block text-base font-medium text-black">
                                        YouTube Fragman Linki
                                    </label>
                                    <div class="relative">
                                        <input type="url" name="youtube_link" id="youtube_link" placeholder="https://www.youtube.com/watch?v=example"
                                            class="h-[46px] w-full rounded-md border @error('youtube_link') border-red-500 @else border-[#E0E0E0] @enderror pl-12 pr-5 text-base text-black outline-none focus:border-primary" />
                                        <span class="absolute left-[18px] top-1/2 transform -translate-y-1/2">
                                            <i class="icon-Youtube text-xl text-[#637381]"></i> <!-- Youtube Icon -->
                                        </span>

                                    </div>
                                    @error('youtube_link')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>

                            <div class="w-full px-3 md:w-1/2">
                                <div class="mb-[30px]">
                                    <label for="image" class="mb-[10px] block text-base font-medium text-black">
                                        Resim
                                    </label>
                                    <input type="file" name="image" id="image" accept="image/jpeg,image/png,image/jpg,image/gif,image/svg,image/webp"
                                        class="w-full rounded-md border @error('image') border-red-500 @else border-[#E0E0E0] @enderror p-3 text-base text-black outline-none focus:border-primary" />
                                    @if(old('image'))
                                        <p class="text-green-500 text-xs mt-1">Seçili Resim {{ old('image') }}</p>
                                    @endif
                                    @error('image')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full px-3 md:w-1/2">
                                <div class="mb-[30px]">
                                    <label for="video" class="mb-[10px] block text-base font-medium text-black">
                                        Video
                                    </label>
                                    <input type="file" name="video" id="video" accept="video/mp4,video/mov,video/ogg,video/qt"
                                        class="w-full rounded-md border @error('video') border-red-500 @else border-[#E0E0E0] @enderror p-3 text-base text-black outline-none focus:border-primary" />
                                    @if(old('video'))
                                        <p class="text-green-500 text-xs mt-1">Seçili Video: {{ old('video') }}</p>
                                    @endif
                                    @error('video')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full px-3 md:w-1/2">
                                <div class="mb-[30px]">
                                    <label for="poster" class="mb-[10px] block text-base font-medium text-black">
                                        Poster
                                    </label>
                                    <input type="file" name="poster" id="poster" accept="image/jpeg,image/png,image/jpg,image/gif,image/svg,image/webp"
                                        class="w-full rounded-md border @error('poster') border-red-500 @else border-[#E0E0E0] @enderror p-3 text-base text-black outline-none focus:border-primary" />
                                    @if(old('poster'))
                                        <p class="text-green-500 text-xs mt-1">Seçili Poster: {{ old('poster') }}</p>
                                    @endif
                                    @error('poster')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Ekle</button>
        </form>
    </div>
</section>



