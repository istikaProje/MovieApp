@if (session('success'))
   <div class="bg-green-500 text-white p-4 mt-4 rounded mb-4">
      {{ session('success') }}
   </div>
@endif

<div class="flex flex-col md:flex-row mx-3 justify-between items-center mt-3">
   <div class="text-white mb-4">
      <h2 class="font-bold text-xl">Filmler</h2>
      <p>Koleksiyonunuzdaki tüm filmlerin, başlıkları, açıklamaları, görselleri ve puanları dahil olmak üzere listesi.</p>
   </div>

   <a href="{{ route('admin.movies.create') }}"
      class="px-4 py-2 rounded-md md:w-auto w-full flex-shrink-0 mb-2 text-white bg-secondary">Film Ekle</a>
</div>

<div class="overflow-hidden  rounded-lg mt-10 hidden md:flex md:flex-col">
   <table class="min-w-full divide-y overflow-hidden rounded-lg   divide-gray-300">
      <thead class="bg-gray-50">
         <tr>
            <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Resim</th>
            <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Başlık</th>
            <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Açıklama</th>
            <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Oy Ortalaması</th>
            <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">YouTube Linki</th>


            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Eylemler</th>
         </tr>
      </thead>
      <tbody>
         @forelse($movies as $movie)
            <tr class="odd:bg-white even:bg-slate-50">
               <td
                  class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                  @if ($movie->image)
                     <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}"
                        class="w-16 h-16 object-cover"  loading="lazy">
                  @endif
               </td>
               <td
                  class="whitespace-nowrap w-full truncate sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                  {{ $movie->title }}
               </td>
               <td
                  class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 truncate py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                  {{ $movie->description }}
               </td>
               <td
                  class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                  <span class="inline-block flex-shrink-0 rounded-full px-2 py-0.5 text-xs font-medium {{ $movie->vote_average > 5 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $movie->vote_average }}</span>
               </td>
               <td
                  class="whitespace-nowrap w-full sm:w-auto sm:w-none truncate max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                  <a href="{{ $movie->youtube_link }}" target="_blank"
                     class="text-blue-600 hover:text-blue-900">{{ $movie->youtube_link }}</a>
               </td>



               <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-500 sm:pl-6">
                  <a href="{{ route('admin.movies.edit', $movie->id) }}"
                     class="text-indigo-600 mr-2 hover:text-indigo-900">Güncelle</a>
                  <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" class="inline-block">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="text-red-600 hover:text-red-900">Sil</button>
                  </form>
               </td>
            </tr>
         @empty
            <tr>
               <td colspan="8" class="py-4 pl-4 pr-3 text-sm font-medium text-gray-500 text-center">Film bulunamadı.
               </td>
            </tr>
         @endforelse
      </tbody>
   </table>

   <div class="mt-4">
      {{ $movies->links() }}
   </div>

</div>




  {{-- Responsive Table Card --}}
  <div class="mt-10 grid grid-cols-1  gap-4 mx-3 sm:grid-cols-w md:hidden">
    @foreach($movies as $movie)
    <div class="relative flex items-center space-x-3 rounded-lg bg-white px-6 py-5 shadow ring-1 ring-black ring-opacity-5">
      <div class="min-w-0 flex-1">
        <div class="flex items-center space-x-3">
            @if ($movie->image)
            <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}"
               class="w-16 h-16 object-cover truncate"  loading="lazy">
         @endif
          <span class="inline-block flex-shrink-0 rounded-full px-2 py-0.5 text-xs font-medium {{ $movie->vote_average >= 5 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $movie->vote_average }}</span>
        </div>
        <p class="mt-1 truncate text-sm text-900 "> {{ $movie->description }}</p>
        <p class="mt-1 truncate text-sm text-900">
            <a href="{{ $movie->youtube_link }}" target="_blank"
            class="text-blue-600 hover:text-blue-900">{{ $movie->youtube_link }}</a>
        </p>
      </div>
      <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-500 sm:pl-6">
        <a href="{{ route('admin.movies.edit', $movie->id) }}"
           class="text-indigo-600 mr-2 hover:text-indigo-900">Güncelle</a>
        <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" class="inline-block">
           @csrf
           @method('DELETE')
           <button type="submit" class="text-red-600 hover:text-red-900">Sil</button>
        </form>
     </td>    </div>
    @endforeach
    <div class="px-6 py-4">
        {{ $movies->links() }}
    </div>
  </div>

