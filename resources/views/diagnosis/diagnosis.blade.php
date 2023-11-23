@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="code">
            <h1>Gejala dan Code</h1>
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
        <div class="container"></div>
        <div class="checkbox">
            <form action="diagnosis">
                <div class="
                ">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      G001
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      G002
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      G003
                    </label>
                    <button type="button" class="btn btn-info">Info</button>
            </form>
              </div>
        </div>
    </div>
@endsection