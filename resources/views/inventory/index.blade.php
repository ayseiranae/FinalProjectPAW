@extends('layouts.app')

@section('title', 'Inventory - GOODANG')

@section('content')
<div class="space-y-4">
    <!-- Search & Add Button -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
        <div class="flex-1 relative">
            <i data-lucide="search" class="absolute left-3 top-3 w-5 h-5 text-gray-600 dark:text-gray-400"></i>
            <input 
                type="text" 
                id="search-inventory"
                placeholder="Cari barang..."
                class="w-full pl-10 pr-4 py-2 rounded-lg border bg-white dark:bg-slate-800 border-gray-200 dark:border-slate-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-red-800"
            />
        </div>
        <a href="{{ route('inventory.create') }}" 
           class="bg-red-800 hover:bg-red-900 text-white px-4 py-2 rounded-lg flex items-center space-x-2 transition-colors">
            <i data-lucide="plus" class="w-5 h-5"></i>
            <span>Tambah Barang</span>
        </a>
    </div>
    
    <!-- Inventory Table -->
    <div class="bg-white dark:bg-slate-800 rounded-xl shadow-sm border border-gray-100 dark:border-slate-700 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 dark:bg-slate-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                            Nama Barang
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                            Jumlah
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                            Supplier
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                            Penanggung Jawab
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                            Update Terakhir
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-slate-700">
                    @forelse($inventoryItems ?? [] as $item)
                    <tr class="hover:bg-gray-50 dark:hover:bg-slate-700 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                            {{ $item->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-semibold">
                                {{ $item->quantity }} unit
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">
                            {{ $item->supplier }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">
                            {{ $item->pic_name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-400">
                            {{ $item->updated_at->format('d/m/Y H:i') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <div class="flex space-x-2">
                                <a href="{{ route('inventory.edit', $item->id) }}" 
                                   class="text-blue-600 hover:text-blue-800 transition-colors">
                                    <i data-lucide="edit" class="w-4 h-4"></i>
                                </a>
                                <form action="{{ route('inventory.destroy', $item->id) }}" 
                                      method="POST" 
                                      class="inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="text-red-600 hover:text-red-800 transition-colors">
                                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-8 text-center text-gray-600 dark:text-gray-400">
                            Belum ada data inventory
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Pagination -->
    @if(isset($inventoryItems) && $inventoryItems->hasPages())
    <div class="mt-4">
        {{ $inventoryItems->links() }}
    </div>
    @endif
</div>
@endsection

@push('scripts')
<script>
    // Delete confirmation
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!confirm('Apakah Anda yakin ingin menghapus barang ini?')) {
                e.preventDefault();
            }
        });
    });
    
    // Search functionality (client-side filtering)
    document.getElementById('search-inventory')?.addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');
        
        rows.forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(searchTerm) ? '' : 'none';
        });
    });
</script>
@endpush