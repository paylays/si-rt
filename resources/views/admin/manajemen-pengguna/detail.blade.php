@foreach($users as $user)
<div id="modalDetail-{{ $user->id }}" class="hs-overlay w-full h-full fixed top-0 left-0 z-70 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
    <div class="translate-y-10 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-lg sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded">
        <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
            <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                <h3 class="text-lg font-medium text-default-900">
                    Detail Pengguna
                </h3>
                <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modalDetail-{{ $user->id }}">
                    <i class="i-tabler-x text-lg"></i>
                </button>
            </div>
            <div class="p-4 overflow-y-auto">
                <ul class="space-y-2 text-sm text-default-700">
                    <li><strong>NIK :</strong> {{ $user->nik }}</li>
                    <li><strong>Nama :</strong> {{ $user->name }}</li>
                    <li><strong>Nomor Telepon :</strong> {{ $user->nomor_telepon }}</li>
                    <li><strong>Email :</strong> {{ $user->email }}</li>
                    <li><strong>Role :</strong> {{ $user->role }}</li>
                    <li><strong>Dibuat Pada :</strong> {{ $user->created_at->format('d M Y H:i') }}</li>
                    <li><strong>Diupdate Terakhir :</strong> {{ $user->updated_at->format('d M Y H:i') }}</li>
                </ul>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modalDetail-{{ $user->id }}">
                    <i class="i-tabler-x me-1"></i>
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach