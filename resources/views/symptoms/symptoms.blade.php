@extends('layouts.base')
@section('content')
<div class="container">
    <div class="list-header">
        <H1>Daftar Gejala</H1>
    </div>
    <div class="list-table">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Gejala</th>
                <th scope="col">Gejala</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>G001</td>
                <td>Bercak coklat hingga hitam yang muncul di ujung dan sisi daun</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>G002</td>
                <td>Bercak Meluas ke Seluruh daun hingga tangkai daun</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>G003</td>
                <td>Bercak basah berwarna hitam pada ujung daun</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
@endsection