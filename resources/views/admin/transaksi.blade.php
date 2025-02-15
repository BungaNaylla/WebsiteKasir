<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transaksi</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    @include('admin.components.sidebar')

    <!-- Konten Utama -->
    <div class="flex-1 ml-64 p-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <h1 class="text-lg font-bold">Transaksi</h1>
            <hr class="my-4">

            <!-- Input Form -->
            <div class="grid grid-cols-3 gap-4 mb-6 items-end">
                <div class="col-span-2">
                    <div class="flex items-center gap-4 mb-4">
                        <label for="jumlah" class="text-sm font-medium w-32">Jumlah</label>
                        <input type="number" id="jumlah"
                            class="w-[200px] px-3 py-1 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#7887C6]">

                        <label for="satuan" class="text-sm font-medium">Satuan</label>
                        <select id="satuan"
                            class="w-[200px] px-3 py-1 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#7887C6]">
                            <option value="pcs">Pcs</option>
                            <option value="kg">Kg</option>
                            <option value="liter">Liter</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-4 mb-4">
                        <label for="cari-barang" class="text-sm font-medium w-32">Cari Barang</label>
                        <input type="text" id="cari-barang"
                            class="w-[200px] px-3 py-1 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#7887C6]">
                        <button
                            class="bg-[#7887C6] text-white px-3 py-1 rounded hover:bg-[#5c6ba5] transition">Tambah</button>
                    </div>
                </div>

                <div class="flex flex-col justify-center items-start border-l-2 h-[100px] border-gray-400 pl-4">
                    <label class="block text-sm font-medium">TOTAL:</label>
                    <p class="text-xl font-bold text-[#7887C6]">Rp 0</p>
                </div>
            </div>

            <hr class="mb-6">

            <!-- Tabel Data -->
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Kode</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Nama Barang</th>
                            <th class="border border-gray-300 px-4 py-2 text-right">Harga</th>
                            <th class="border border-gray-300 px-4 py-2 text-right">Qty</th>
                            <th class="border border-gray-300 px-4 py-2 text-right">Satuan</th>
                            <th class="border border-gray-300 px-4 py-2 text-right">Subtotal</th>
                            <th class="border border-gray-300 px-4 py-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1</td>
                            <td class="border border-gray-300 px-4 py-2">12345</td>
                            <td class="border border-gray-300 px-4 py-2">Nama Barang</td>
                            <td class="border border-gray-300 px-4 py-2 text-right">Rp 0</td>
                            <td class="border border-gray-300 px-4 py-2 text-right">0</td>
                            <td class="border border-gray-300 px-4 py-2 text-right">Pcs</td>
                            <td class="border border-gray-300 px-4 py-2 text-right">Rp 0</td>
                            <td class="border border-gray-300 px-1 py-2 text-center">
                                <button class="text-blue-600 hover:underline">Edit</button>
                                <button class="text-red-500 hover:underline">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" class="border border-gray-300 px-4 py-2 text-right font-bold">Total</td>
                            <td class="border border-gray-300 px-4 py-2 text-right font-bold">Rp 0</td>
                            <td class="border border-gray-300 px-4 py-2"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <hr class="my-6">
            <!-- Form Tambahan -->
            <div class="grid grid-cols-1 gap-4 mb-6">
                <div class="flex items-center gap-4">
                    <label for="nominal" class="text-sm font-medium w-32">Nominal</label>
                    <input type="number" id="nominal"
                        class="w-[250px] px-3 py-1 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#7887C6]">
                </div>
                <div class="flex items-center gap-4">
                    <label for="id-member" class="text-sm font-medium w-32">ID Member</label>
                    <input type="text" id="id-member"
                        class="w-[250px] px-3 py-1 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#7887C6]">
                </div>
            </div>

            <!-- Tombol -->
            <div class="text-left">
                <button class="bg-[#7887C6] text-white px-4 py-2 rounded hover:bg-[#5c6ba5] transition">
                    Proses Transaksi
                </button>
            </div>
        </div>
    </div>

</body>

</html>
