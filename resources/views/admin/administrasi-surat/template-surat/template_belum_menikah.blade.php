<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surat Pernyataan Belum Menikah</title>
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      margin: 2cm;
      font-size: 12pt;
      line-height: 1.5;
    }

    h1 {
      text-align: center;
      font-size: 16pt;
      font-weight: bold;
      margin-bottom: 20px;
      text-decoration: underline;
    }

    .header {
      text-align: center;
      margin-bottom: 30px;
    }

    .content {
      text-align: justify;
    }

    .signature {
      margin-top: 50px;
      text-align: right;
    }

    .signature-name {
      margin-top: 50px;
    }

    table.data {
      width: 100%;
      margin-bottom: 20px;
    }

    table.data td {
      padding: 3px 0;
    }

    table.data td:first-child {
      width: 150px;
    }

    table.data td:nth-child(2) {
      width: 20px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="header">
    <h1>SURAT PERNYATAAN BELUM PERNAH MENIKAH</h1>
  </div>

  <div class="content">
    <p>Yang bertanda tangan di bawah ini:</p>

    <table class="data">
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $data['nama'] ?? '_____________' }}</td>
      </tr>
      <tr>
        <td>Umur</td>
        <td>:</td>
        <td>{{ $data['umur'] ?? '_______' }} tahun</td>
      </tr>
      <tr>
        <td>Agama</td>
        <td>:</td>
        <td>{{ $data['agama'] ?? '________' }}</td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>{{ $data['jenis_kelamin'] ?? '____________' }}</td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td>{{ $data['pekerjaan'] ?? '__________' }}</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{ $data['alamat'] ?? '___________________' }}</td>
      </tr>
    </table>

    <p>Dengan ini menyatakan dengan sebenar-benarnya bahwa saya belum pernah menikah/kawin dengan siapapun baik secara agama ataupun catatan sipil.</p>

    <p>Demikian surat pernyataan ini saya buat dengan sebenarnya tanpa ada paksaan dari pihak manapun dan dapat dipertanggungjawabkan secara hukum.</p>

    <div class="signature">
      <p>Balikpapan, {{ date('d F Y') }}</p>
      <p>Yang membuat pernyataan,</p>
      <div class="signature-name">
        <p>( {{ $data['nama'] ?? '_______________' }} )</p>
      </div>
    </div>
  </div>
</body>

</html>