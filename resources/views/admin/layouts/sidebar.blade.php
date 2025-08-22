<aside class="w-64 flex-shrink-0 bg-black text-white flex flex-col">
    {{-- Bagian Header Sidebar dengan Logo --}}
    <div class="h-auto flex flex-col items-center justify-center bg-black py-4 px-2 border-b border-gray-700">
        <div class="flex items-center justify-center space-x-3 mb-3">
            <img src="{{ asset('assets/images/lambang.png') }}" alt="Lambang Polri" class="h-14 w-auto">
            <img src="{{ asset('assets/images/poldajatim.png') }}" alt="Polda Jatim" class="h-14 w-auto">
        </div>
        <h1 class="text-xl font-bold tracking-wider text-yellow-400">POLRESTA</h1>
    </div>

    {{-- Menu Navigasi --}}
    <nav class="flex-1 px-4 py-6 space-y-2">
        {{-- Link Dashboard --}}
        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center px-4 py-2.5 text-sm rounded-lg transition duration-200
                  {{ request()->routeIs('admin.dashboard') ? 'font-bold bg-yellow-400 text-gray-900' : 'font-medium text-gray-300 hover:bg-gray-800' }}">
            <span class="material-symbols-outlined mr-3">dashboard</span>
            Dashboard
        </a>

        {{-- Link Berita & Informasi --}}
        <a href="{{ route('admin.beritas.index') }}"
            class="flex items-center px-4 py-2.5 text-sm rounded-lg transition duration-200
                  {{ request()->routeIs('admin.beritas.*') ? 'font-bold bg-yellow-400 text-gray-900' : 'font-medium text-gray-300 hover:bg-gray-800' }}">
            <span class="material-symbols-outlined mr-3">article</span>
            Berita & Informasi
        </a>

        {{-- Link Galeri --}}
        <a href="{{ route('admin.galleries.index') }}"
            class="flex items-center px-4 py-2.5 text-sm rounded-lg transition duration-200
                  {{ request()->routeIs('admin.galleries.*') ? 'font-bold bg-yellow-400 text-gray-900' : 'font-medium text-gray-300 hover:bg-gray-800' }}">
            <span class="material-symbols-outlined mr-3">photo_library</span>
            Galeri
        </a>

        {{-- Link Laporan Aduan --}}
        <a href="{{ route('admin.aduan.index') }}"
            class="flex items-center px-4 py-2.5 text-sm rounded-lg transition duration-200
                  {{ request()->routeIs('admin.aduan.*') ? 'font-bold bg-yellow-400 text-gray-900' : 'font-medium text-gray-300 hover:bg-gray-800' }}">
            <span class="material-symbols-outlined mr-3">report</span>
            Laporan Aduan
        </a>
    </nav>

    {{-- Bagian User Info & Logout --}}
    <div class="p-4 border-t border-gray-800">
        <div class="flex items-center">
            <img class="h-10 w-10 rounded-full object-cover"
                src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=facc15&color=111827"
                alt="User Avatar">
            <div class="ml-3 flex-1">
                <p class="text-sm font-semibold text-white">{{ auth()->user()->name }}</p>
                <p class="text-xs text-gray-400">Administrator</p>
            </div>

            {{-- Logout Form --}}
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" title="Logout"
                    class="ml-2 text-gray-500 hover:text-yellow-400 transition duration-200">
                    <span class="material-symbols-outlined">logout</span>
                </button>
            </form>
        </div>
    </div>
</aside>
