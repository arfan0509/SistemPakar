@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="list-header">
            <h1>Daftar Gejala</h1>
        </div>
        <div class="list-table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kode Gejala</th>
                        <th scope="col">Nama Gejala</th>
                        <th scope="col" class="text-center">Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>G001</td>
                        <td>Bercak coklat hingga hitam yang muncul di ujung dan sisi daun</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>G002</td>
                        <td>Bercak meluas ke seluruh daun hingga tangkai daun</td>
                        <td class="text-center">3</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>G003</td>
                        <td>Bercak basah berwarna hitam pada ujung daun</td>
                        <td class="text-center">2</td>
                    </tr>
                    <!-- Tambahkan data lainnya sesuai dengan daftar yang diberikan -->
                    <!-- G004, G005, ..., G031 -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
