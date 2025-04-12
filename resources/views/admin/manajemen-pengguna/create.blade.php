<div class="card">
    <div class="card-header">
        <h4 class="card-title">Tambah Pengguna</h4>
    </div>
    <div class="p-6">
        <form method="POST" action="{{ route('manajemen-pengguna.store') }}">
        @csrf
            <div class="mb-3">
                <label for="nik" class="text-default-800 text-sm font-medium inline-block mb-2">NIK</label>
                <input type="text" class="form-input" name="nik" id="nik" placeholder="Masukkan NIK">
            </div>
            <div class="mb-3">
                <label for="name" class="text-default-800 text-sm font-medium inline-block mb-2">Nama</label>
                <input type="text" class="form-input" name="name" id="name" placeholder="Masukkan Nama">
            </div>
            <div class="mb-3">
                <label for="nomor_telepon" class="text-default-800 text-sm font-medium inline-block mb-2">Nomor Telepon</label>
                <input type="text" class="form-input" name="nomor_telepon" id="nomor_telepon" placeholder="Masukkan Nomor Telepon">
            </div>
            <div class="mb-3">
                <label for="email" class="text-default-800 text-sm font-medium inline-block mb-2">Email address</label>
                <input type="email" class="form-input" name="email" id="email" placeholder="Masukkan Email">
            </div>
            <div class="mb-3">
                <label for="password" class="text-default-800 text-sm font-medium inline-block mb-2">Password</label>
                <input type="password" class="form-input" name="password" id="password" placeholder="Masukkan Password">
            </div>
            <button type="submit" class="btn bg-primary text-white">Submit</button>
        </form>
    </div>
</div>