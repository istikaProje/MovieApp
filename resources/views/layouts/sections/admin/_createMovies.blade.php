<!-- ====== Movie Section Start -->
<section class="flex w-full mt-4 items-start">
    <div class="w-full px-4">
        <div class="flex flex-wrap px- items-end justify-between sm:flex-nowrap sm:space-x-4">
            <h2 class="mb-4 text-2xl font-semibold text-white">
                Add Movie
            </h2>
        </div>
        <form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="flex w-full md:space-x-4 flex-col md:flex-row">
                <div class="mb-8 rounded-lg border border-stroke bg-white w-full">
                    <h3 class="border-b border-stroke py-4 px-7 text-base font-medium text-black">
                        Information
                    </h3>
                    <div class="p-7">
                        <div class="flex flex-wrap">
                            <div class="w-full px-3 md:w-1/2">
                                <div class="mb-[30px]">
                                    <label for="title" class="mb-[10px] block text-base font-medium text-black">
                                        Title
                                    </label>
                                    <div class="relative">
                                        <input type="text" name="title" id="title" value="{{ old('title') }}"  placeholder="Title"
                                            class="h-[46px] w-full rounded-md border @error('title') border-red-500 @else border-[#E0E0E0] @enderror pl-12 pr-5 text-base text-black outline-none focus:border-primary" />
                                     
                                        <span class="absolute left-[18px] top-1/2 transform -translate-y-1/2">
                                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path fill="#637381"
                                                    d="M19,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM16.09,4l-4,4H7.91l4-4ZM4,5A1,1,0,0,1,5,4H9.09l-4,4H4ZM20,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V10H20ZM20,8H14.91l4-4H19a1,1,0,0,1,1,1Z">
                                                </path>
                                            </svg>
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
                                        Vote Average
                                    </label>
                                    <div class="relative">
                                        <input type="number" name="vote_average" id="vote_average" min="1" max="10" step="0.1"
                                            class="h-[46px] w-full rounded-md border @error('vote_average') border-red-500 @else border-[#E0E0E0] @enderror pl-12 pr-5 text-base text-black outline-none focus:border-primary" />
                                        <span class="absolute left-[18px] top-1/2 transform -translate-y-1/2">
                                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                                xml:space="preserve" id="star" x="0" y="0" version="1.1"
                                                viewBox="0 0 29 29">
                                                <path fill="#637381"
                                                    d="m15.397 4.687 2.579 5.225a1 1 0 0 0 .753.547l5.766.838a1 1 0 0 1 .554 1.706l-4.173 4.067c-.236.23-.343.561-.288.885l.985 5.743a1 1 0 0 1-1.451 1.054l-5.158-2.712a1.002 1.002 0 0 0-.931 0l-5.158 2.712a1 1 0 0 1-1.451-1.054l.985-5.743a.999.999 0 0 0-.288-.885l-4.173-4.067a1 1 0 0 1 .554-1.706l5.766-.838a1 1 0 0 0 .753-.547L13.6 4.687c.37-.743 1.43-.743 1.797 0z">
                                                </path>
                                            </svg>
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
                                        Categories
                                    </label>
                                    <div class="relative">
                                        <button type="button" @click="open = !open" class="h-[46px] w-full rounded-md border border-[#E0E0E0] pl-3 pr-5 text-base text-black outline-none focus:border-primary flex justify-between items-center">
                                            <span>Select Categories</span>
                                            <svg :class="{'rotate-180': open}" class="transform transition-transform duration-200" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path fill="#637381" d="M12 15.5l-8-8h16z"></path>
                                            </svg>
                                        </button>
                                        <div x-show="open" @click.away="open = false" class="absolute z-10 mt-2 w-full rounded-md border border-[#E0E0E0] bg-white shadow-lg">
                                            <div class="p-3 max-h-60 overflow-y-auto space-y-3">
                                                @foreach($categories as $category)
                                                    <div x-data="{ checked: false }">
                                                        <input type="checkbox" id="category_{{ $category->id }}" name="categories[]" value="{{ $category->id }}" class="select-list sr-only" @change="checked = !checked">
                                                        <label for="category_{{ $category->id }}" :class="checked ? 'border-green-500 text-green-500' : 'border-[#E0E0E0] text-body-color'" class="select-list flex cursor-pointer items-center rounded-md border py-3 px-5">
                                                            <span :class="checked ? 'bg-green-500' : 'bg-[#B2B3B4]'" class="icon flex h-5 w-5 items-center justify-center rounded-full">
                                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3536 2.64645C10.5488 2.84171 10.5488 3.15829 10.3536 3.35355L4.85355 8.85355C4.65829 9.04882 4.34171 9.04882 4.14645 8.85355L1.64645 6.35355C1.45118 6.15829 1.45118 5.84171 1.64645 5.64645C1.84171 5.45118 2.15829 5.45118 2.35355 5.64645L4.5 7.79289L9.64645 2.64645C9.84171 2.45118 10.1583 2.45118 10.3536 2.64645Z" fill="white"></path>
                                                                </svg>
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
                                        Description
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
                                        YouTube Trailer Link
                                    </label>
                                    <div class="relative">
                                        <input type="url" name="youtube_link" id="youtube_link" placeholder="https://www.youtube.com/watch?v=example"
                                            class="h-[46px] w-full rounded-md border @error('youtube_link') border-red-500 @else border-[#E0E0E0] @enderror pl-12 pr-5 text-base text-black outline-none focus:border-primary" />
                                        <span class="absolute left-[18px] top-1/2 transform -translate-y-1/2">
                                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path fill="#637381"
                                                    d="M19.615,3.184c-0.203-0.76-0.797-1.354-1.557-1.557C16.5,1.25,12,1.25,12,1.25s-4.5,0-6.058,0.377c-0.76,0.203-1.354,0.797-1.557,1.557C4,4.742,4,8.5,4,8.5s0,3.758,0.385,5.316c0.203,0.76,0.797,1.354,1.557,1.557C7.5,15.75,12,15.75,12,15.75s4.5,0,6.058-0.377c0.76-0.203,1.354-0.797,1.557-1.557C20,12.258,20,8.5,20,8.5S20,4.742,19.615,3.184z M9.75,11.5V5.5l5.25,3L9.75,11.5z">
                                                </path>
                                            </svg>
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
                                        Image
                                    </label>
                                    <input type="file" name="image" id="image" accept="image/jpeg,image/png,image/jpg,image/gif,image/svg,image/webp"
                                        class="w-full rounded-md border @error('image') border-red-500 @else border-[#E0E0E0] @enderror p-3 text-base text-black outline-none focus:border-primary" />
                                    @if(old('image'))
                                        <p class="text-green-500 text-xs mt-1">Image selected: {{ old('image') }}</p>
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
                                        <p class="text-green-500 text-xs mt-1">Video selected: {{ old('video') }}</p>
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
                                        <p class="text-green-500 text-xs mt-1">Poster selected: {{ old('poster') }}</p>
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
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Add</button>
        </form>
    </div>
</section>



