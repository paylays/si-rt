@foreach($users as $user)
<div id="modalEdit-{{ $user->id }}" class="hs-overlay w-full h-full fixed top-0 left-0 z-70 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
    <div class="translate-y-10 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-lg sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded">
        <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
            <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                <h3 class="text-lg font-medium text-default-900">
                    Edit Pengguna
                </h3>
                <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modalEdit-{{ $user->id }}">
                    <i class="i-tabler-x text-lg"></i>
                </button>
            </div>
            <div class="p-4 overflow-y-auto">
                <form method="POST" action="{{ route('manajemen-pengguna.update', $user->id) }}">
                  @csrf
                  @method('PUT')
                  <div class="modal-body">
                    <div class="mb-3">
                        <label for="nik{{ $user->id }}" class="text-default-800 text-sm font-medium inline-block mb-2">NIK</label>
                        <input type="text" class="form-input" name="nik" id="nik{{ $user->id }}" value="{{ old('nik', $user->nik) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="name{{ $user->id }}" class="text-default-800 text-sm font-medium inline-block mb-2">Nama</label>
                        <input type="text" class="form-input" name="name" id="name{{ $user->id }}" value="{{ old('name', $user->name) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="nomor_telepon{{ $user->id }}" class="text-default-800 text-sm font-medium inline-block mb-2">Nomor Telepon</label>
                        <input type="text" class="form-input" name="nomor_telepon" id="nomor_telepon{{ $user->id }}" value="{{ old('nomor_telepon', $user->nomor_telepon) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email{{ $user->id }}" class="text-default-800 text-sm font-medium inline-block mb-2">Email</label>
                        <input type="email" class="form-input" name="email" id="email{{ $user->id }}" value="{{ old('email', $user->email) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="password{{ $user->id }}" class="text-default-800 text-sm font-medium inline-block mb-2">Password Baru (Opsional)</label>
                        <input type="password" class="form-input" name="password" id="password{{ $user->id }}" placeholder="Kosongkan jika tidak ingin mengubah">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn bg-success text-white ">Simpan Perubahan</button>
                  </div>
                </form>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                <button type="button" class="btn bg-danger text-white" data-hs-overlay="#modalEdit-{{ $user->id }}">
                    <i class="i-tabler-x me-1"></i>
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach