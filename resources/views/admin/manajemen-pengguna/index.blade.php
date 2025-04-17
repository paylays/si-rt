@extends('admin.layouts.vertical', ['title' => 'Manajemen Pengguna'])

@section('css')

@endsection

@section('content')

@include("admin.layouts.shared/page-title", ["subtitle" => "Lainnya", "title" => "Manajemen Pengguna"])

<div class="grid xl:grid-cols-3 md:grid-cols-2 gap-5 mb-5">
    <div class="lg:col-span-2">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h4 class="card-title">List Akun Pengguna</h4>
            </div>
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        No</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        NIK</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Nomor Telepon
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Role
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Tanggal Registrasi
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Tanggal Perubahan
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center text-sm text-default-500">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-default-200">
                                @foreach($users as $index => $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        {{ $index+1 }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        {{ $user->nik }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        {{ $user->nomor_telepon }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800 font-medium">
                                        <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-green-100 text-green-800">
                                            {{ $user->role }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        {{ $user->created_at }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        {{ $user->updated_at }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        <button type="button" class="btn bg-info text-white" data-hs-overlay="#modalDetail-{{ $user->id }}">Detail</button>
                                        <button type="button" class="btn bg-warning text-white" data-hs-overlay="#modalEdit-{{ $user->id }}">Ubah</button>
                                        <button type="button" class="btn bg-danger text-white" data-hs-overlay="#modalDelete-{{ $user->id }}">Hapus</button>
                                    </td>
                                </tr>

                                @include('admin.manajemen-pengguna.delete', ['user' => $user])
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->
    </div>

    <div class="lg:col-span-10">
    
        @include('admin.manajemen-pengguna.create')

    </div>

</div>

@include('admin.manajemen-pengguna.detail')

@include('admin.manajemen-pengguna.edit', ['user' => $user])

@include('admin.manajemen-pengguna.delete', ['user' => $user])

@endsection

@section('script')

@endsection