@extends('warga.layouts.vertical', ['title' => 'Pengajuan Surat'])

@section('css')

@endsection

@section('content')

@include("warga.layouts.shared/page-title", ["subtitle" => "Administrasi Surat", "title" => "Ajukan Surat"])

<div class="grid xl:grid-cols-3 md:grid-cols-2 gap-5 mb-5">
    
    <!-- Form -->
    <div class="bg-white border rounded-xl shadow-sm sm:flex">
        <div class="p-4 flex flex-col h-full sm:p-7">
            <h3 class="text-lg font-bold text-default-800">
                Ingin mengajukan surat?
            </h3>
            <p class="mt-2 text-default-500">
                Silahkan pilih jenis surat dibawah ini!
            </p>

            <div class="mt-4">
                <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-one">
                    Surat Pernyataan Belum Menikah
                </button>
                <div id="modal-one" class="hs-overlay w-full h-full fixed top-0 left-0 z-70 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
                    <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-2xl sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded">
                        <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
                            <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                                <h3 class="text-lg font-medium text-default-900">
                                    Form Pengajuan Surat Pernyataan Belum Menikah
                                </h3>
                                <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-one">
                                    <i class="i-tabler-x text-lg"></i>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto">
                                <form class="" action="{{ route('warga.ajukan-surat.store') }}">
                                    <input type="hidden" name="jenis_surat_id" value="1">
                                    <div class="mb-3 space-y-1">
                                        <label for="data_pengajuan[nama]" class="text-default-800 font-medium">Nama</label>
                                        <input type="text" class="block w-full rounded py-1.5 px-3 bg-transparent border-default-200 text-default-900 focus:ring-transparent focus:border-default-200" id="nama" name="data_pengajuan[nama]" aria-describedby="emailHelp" placeholder="Masukkan nama">
                                    </div>
                                    <div class="mb-3 space-y-1">
                                        <label for="data_pengajuan[umur]" class="text-default-800 font-medium">Umur</label>
                                        <input type="text" class="block w-full rounded py-1.5 px-3 bg-transparent border-default-200 text-default-900 focus:ring-transparent focus:border-default-200" id="umur" name="data_pengajuan[umur]" aria-describedby="emailHelp" placeholder="Masukkan umur">
                                    </div>
                                    <div class="mb-3 space-y-1">
                                        <label for="data_pengajuan[agama]" class="text-default-800 text-sm font-medium inline-block mb-2">Agama</label>
                                        <select class="form-select" id="agama" name="data_pengajuan[agama]">
                                            <option>Pilih--Agama</option>
                                            <option>Islam</option>
                                            <option>Katolik</option>
                                            <option>Protestan</option>
                                            <option>Hindu</option>
                                            <option>Buddha</option>
                                            <option>Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 space-y-1">
                                        <label for="data_pengajuan[jenis_kelamin]" class="text-default-800 text-sm font-medium inline-block mb-2">Jenis Kelamin</label>
                                        <select class="form-select" id="jenis_kelamin" name="data_pengajuan[jenis_kelamin]">
                                            <option>Pilih--Jenis Kelamin</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 space-y-1">
                                        <label for="data_pengajuan[pekerjaan]" class="text-default-800 font-medium">Pekerjaan</label>
                                        <input class="block w-full rounded py-1.5 px-3 bg-transparent border-default-200 text-default-900 focus:ring-transparent focus:border-default-200" id="pekerjaan" name="data_pengajuan[pekerjaan]" aria-describedby="emailHelp" placeholder="Masukkan pekerjaan">
                                    </div>
                                    <div class="mb-3 space-y-1">
                                        <label for="data_pengajuan[alamat]" class="text-default-800 font-medium">Alamat</label>
                                        <textarea class="block w-full rounded py-1.5 px-3 bg-transparent border-default-200 text-default-900 focus:ring-transparent focus:border-default-200" id="alamat" name="data_pengajuan[alamat]" aria-describedby="emailHelp" placeholder="Masukkan Alamat"></textarea>
                                    </div>
                                    <div class="mb-3 space-y-1">
                                        <label class="text-default-800 font-medium">Upload Dokumen Pendukung</label>
                                        <input type="file" class="block w-full rounded py-1.5 px-3 bg-transparent border-default-200 text-default-900 focus:ring-transparent focus:border-default-200" id="umur" name="dokumen" aria-describedby="emailHelp" placeholder="Masukkan umur">
                                    </div>
                                    <div class="flex items-center gap-2 mb-3">
                                        <input type="checkbox" class="h-4 w-4 rounded border-default-200 bg-default-50 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary/60 focus:ring-offset-0" id="checkmeout0">
                                        <label class="text-default-800 text-sm font-medium inline-block" for="checkmeout0">Check me out !</label>
                                    </div>
                                    <button type="submit" class="inline-block py-2 px-4 text-sm text-center bg-primary hover:bg-primary-700 text-white rounded transition-all duration-500">Submit</button>
                                </form>
                            </div>
                            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                                <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-one">
                                    <i class="i-tabler-x me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-two">
                    Surat Pernyataan Penghasilan
                </button>
                <div id="modal-two" class="hs-overlay w-full h-full fixed top-0 left-0 z-70 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
                    <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-2xl sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded">
                        <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
                            <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                                <h3 class="text-lg font-medium text-default-900">
                                    Modal title TEST
                                </h3>
                                <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-two">
                                    <i class="i-tabler-x text-lg"></i>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto">
                                <form class="">
                                    <div class="mb-3 space-y-1">
                                        <label for="nama" class="text-default-800 font-medium">Nama</label>
                                        <input type="text" class="block w-full rounded py-1.5 px-3 bg-transparent border-default-200 text-default-900 focus:ring-transparent focus:border-default-200" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Masukkan nama">
                                    </div>
                                    <div class="mb-3 space-y-1">
                                        <label for="umur" class="text-default-800 font-medium">Umur</label>
                                        <input type="text" class="block w-full rounded py-1.5 px-3 bg-transparent border-default-200 text-default-900 focus:ring-transparent focus:border-default-200" id="umur" name="umur" aria-describedby="emailHelp" placeholder="Masukkan umur">
                                    </div>
                                    <div class="mb-3 space-y-1">
                                        <label for="agama" class="text-default-800 text-sm font-medium inline-block mb-2">Agama</label>
                                        <select class="form-select" id="agama" name="agama">
                                            <option>Islam</option>
                                            <option>Katolik</option>
                                            <option>Protestan</option>
                                            <option>Hindu</option>
                                            <option>Buddha</option>
                                            <option>Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 space-y-1">
                                        <label for="jenis_kelamin" class="text-default-800 text-sm font-medium inline-block mb-2">Jenis Kelamin</label>
                                        <select class="form-select" id="jenis_kelamin">
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 space-y-1">
                                        <label for="pekerjaan" class="text-default-800 font-medium">Pekerjaan</label>
                                        <input type="text" class="block w-full rounded py-1.5 px-3 bg-transparent border-default-200 text-default-900 focus:ring-transparent focus:border-default-200" id="pekerjaan" name="pekerjaan" aria-describedby="emailHelp" placeholder="Masukkan pekerjaan">
                                    </div>
                                    <div class="mb-3 space-y-1">
                                        <label for="pekerjaan" class="text-default-800 font-medium">Pekerjaan</label>
                                        <textarea class="block w-full rounded py-1.5 px-3 bg-transparent border-default-200 text-default-900 focus:ring-transparent focus:border-default-200" id="pekerjaan" name="pekerjaan" aria-describedby="emailHelp" placeholder="Masukkan pekerjaan"></textarea>
                                    </div>
                                    <div class="flex items-center gap-2 mb-3">
                                        <input type="checkbox" class="h-4 w-4 rounded border-default-200 bg-default-50 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary/60 focus:ring-offset-0" id="checkmeout0">
                                        <label class="text-default-800 text-sm font-medium inline-block" for="checkmeout0">Check me out !</label>
                                    </div>
                                    <button type="submit" class="inline-block py-2 px-4 text-sm text-center bg-primary hover:bg-primary-700 text-white rounded transition-all duration-500">Submit</button>
                                </form>
                            </div>
                            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                                <button type="button" class="btn bg-primary text-white" data-hs-overlay="#modal-two">
                                    <i class="i-tabler-x me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel -->
    <div class="lg:col-span-2">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h4 class="card-title">List Pengajuan Surat</h4>
            </div>
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Jenis Surat</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Status</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Tanggal Pengajuan</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-default-200">
                                @foreach ($pengajuans as $pengajuan)
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        {{ $pengajuan->jenisSurat->nama_surat ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        {{ $pengajuan->status }}

                                        @if ($pengajuan->status == 'Selesai' && $pengajuan->file_surat)
                                            <br>
                                            <a href="{{ route('warga.ajukan-surat.download', $pengajuan->id) }}" class="text-blue-600 underline text-sm">
                                                Download Surat
                                            </a>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        {{ $pengajuan->created_at->format('d M Y')  }}
                                    </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->
    </div>
</div>
@endsection

@section('script')

@endsection