<nav class="bg-white text-gray-500 py-4 px-6 flex items-center justify-between rounded-xl shadow">
    <!-- Logo -->
    <div class="flex items-center space-x-1">
        <img src="{{ asset('storage/logo.png') }}" alt="Logo" class="h-10 w-auto"> 
        <span class="text-xl font-bold tracking-wide">TOSERBA</span>
    </div>

    <!-- Menu Navigasi -->
    <ul class="flex items-center space-x-10 text-lg font-medium">
        <li>
            <a href="{{ url('/transaksiP') }}" 
                class="{{ request()->is('transaksiP') ? 'text-[#7887C6] font-bold' : 'hover:text-[#7887C6] transition' }}">
                Transaksi
            </a>
        </li>
        <li>
            <a href="{{ url('/databarangP') }}" 
                class="{{ request()->is('databarangP') ? 'text-[#7887C6] font-bold' : 'hover:text-[#7887C6] transition' }}">
                Data Barang
            </a>
        </li>
        <li>
            <a href="{{ url('/datamasterP') }}" 
                class="{{ request()->is('datamasterP') ? 'text-[#7887C6] font-bold' : 'hover:text-[#7887C6] transition' }}">
                Data Master
            </a>
        </li>
        <li>
            <a href="{{ url('/laporanP') }}" 
                class="{{ request()->is('laporanP') ? 'text-[#7887C6] font-bold' : 'hover:text-[#7887C6] transition' }}">
                laporan
            </a>
        </li>
        <li>
            <a href="#" onclick="return confirmLogout()" class="hover:text-[#7887C6] transition">Keluar</a>
        </li>
        
        <script>
            function confirmLogout() {
                return confirm("Apakah Anda yakin ingin keluar?");
            }
        </script>
    </ul>

    <!-- Search Bar -->
    {{-- <div>
        <input type="text" placeholder="Cari Barang"
            class="px-4 py-2 rounded-lg border border-gray-200 text-black focus:outline-none focus:ring-2 focus:ring-[#7887C6] focus:border-[#7887C6]">
    </div> --}}
</nav>
