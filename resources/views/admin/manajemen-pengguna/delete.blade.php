<div id="modalDelete-{{ $user->id }}" class="hs-overlay w-full h-full fixed top-0 left-0 z-70 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
    <div class="translate-y-10 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-lg sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded">
        <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
            <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                <h3 class="text-lg font-medium text-default-900">
                    Konfirmasi Hapus Pengguna
                </h3>
                <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modalDelete-{{ $user->id }}">
                    <i class="i-tabler-x text-lg"></i>
                </button>
            </div>
            <div class="p-4 overflow-y-auto">
                <p class="mt-1 text-default-600">
                    Apakah kamu yakin ingin menghapus pengguna <strong>{{ $user->name }}</strong>?
                    Aksi ini tidak dapat dibatalkan.
                </p>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modalDelete-{{ $user->id }}">
                    <i class="i-tabler-x me-1"></i>
                    Close
                </button>
                <form method="POST" action="{{ route('manajemen-pengguna.destroy', $user->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn bg-danger text-white">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>