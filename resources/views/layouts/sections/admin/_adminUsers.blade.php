<div class="flex flex-col md:flex-row mx-3 justify-between items-center mt-3">
    <div class="text-white mb-4">
      <h2 class="font-bold text-xl">Kullanıcılar</h2>
      <p>Hesabınızdaki tüm kullanıcıların adları, e-postaları ve rolleri dahil olmak üzere bir listesi</p>
    </div>

    <a href="{{ route('admin.users.create') }}" class="px-4 py-2 rounded-md md:w-auto w-full text-white bg-secondary">Kullanıcı Ekle</a>
  </div>

  <div class="mt-10 hidden md:flex md:flex-col">
    <div class="  overflow-y-auto">
      <div class="inline-block min-w-full py-2 align-middle ">
        <div class="overflow-hidden shadow md:rounded-lg">
          <table class="min-w-full divide-y divide-gray-300">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Ad</th>
                <th scope="col" class="px-3 py-3.5 hidden lg:table-cell text-left text-sm font-semibold text-gray-900">E-posta</th>
                <th scope="col" class="px-3 hidden sm:table-cell py-3.5 text-left text-sm font-semibold text-gray-900">Durum</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Rol</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Eylemler</th>
              </tr>
            </thead>

            <tbody>
              @foreach($users as $user)
                <tr class="odd:bg-white even:bg-slate-50">
                  <td class="whitespace-nowrap w-full sm:w-auto sm:w-none max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                    {{ $user->name }}
                    <dl class="lg:hidden font-normal">
                      <dt class="sr-only sm:hidden">Title</dt>
                      <dd class="sm:hidden text-gray-700 mt-1">aktif</dd>
                      <dt class="sr-only">Email</dt>
                      <dd class="text-gray-500 mt-1 sm:text-gray-700 truncate">{{ $user->email }}</dd>
                    </dl>
                  </td>
                  <td class="whitespace-nowrap hidden lg:table-cell py-4 pl-4 pr-3 text-sm font-medium text-gray-500 truncate sm:pl-6">
                    {{ $user->email }}
                  </td>
                  <td class="whitespace-nowrap hidden sm:table-cell py-4 pl-4 pr-3 text-sm font-medium text-gray-500 sm:pl-6">
                    Aktif
                  </td>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-500 sm:pl-6">{{ $user->role }}</td>

                  <td class="px-3 py-4 text-sm text-gray-500">
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="text-indigo-600 hover:text-indigo-900">Güncelle</a>
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="text-red-600 hover:text-red-900">Sil</button>
                    </form>
                  </td>


                </tr>
              @endforeach


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  {{-- Responsive Table Card --}}
  <div class="mt-10 grid grid-cols-1 gap-4 mx-3 sm:grid-cols-w md:hidden">
    @foreach($users as $user)
    <div class="relative flex items-center space-x-3 rounded-lg bg-white px-6 py-5 shadow ring-1 ring-black ring-opacity-5">
      <div class="min-w-0 flex-1">
        <div class="flex items-center space-x-3">
          <p class="truncate text-sm font-medium text-gray-900">{{ $user->name }}</p>
          <span class="inline-block flex-shirink-0 rounded-full bg-green-100 px-2 py-0.5 text-xs font-medium text-green-800">{{ $user->role }}</span>
        </div>
        <p class="mt-1 truncate text-sm text-900">aktif</p>
        <p class="mt-1 truncate text-sm text-900">{{ $user->email }}</p>
      </div>
      <td class="px-3 py-4 text-sm text-gray-500">
        <a href="{{ route('admin.users.edit', $user->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
        </form>
      </td>    </div>
    @endforeach
  </div>



