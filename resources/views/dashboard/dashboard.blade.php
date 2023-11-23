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
                        <th scope="col">#</th>
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
                    <tr>
                        <th scope="row">4</th>
                        <td>G004</td>
                        <td>Bintik-bintik abu-abu berminyak yang besar dan tidak beraturan pada daun</td>
                        <td class="text-center">3</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>G005</td>
                        <td>Noda keriput berwarna abu-abu atau coklat pada buah</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>G006</td>
                        <td>Daging buah mengeras dan mengalami pembusukan buah</td>
                        <td class="text-center">3</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>G007</td>
                        <td>Buah hijau lebih rentan terhadap infeksi dan dapat menjadi coklat kelereng dalam penampilan dan buah menjadi keras</td>
                        <td class="text-center">1</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>G008</td>
                        <td>Bercak kecil berwarna cokelat hingga kehitaman pada daun</td>
                        <td class="text-center">1</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>G009</td>
                        <td>Bercak membentuk lingkaran konsentris pada daun</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>G010</td>
                        <td>Bercak dikelilingi oleh lingkaran cahaya kuning cerah daun</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>G011</td>
                        <td>Bercak pada batang</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>G012</td>
                        <td>Bercak pada buah</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td>G013</td>
                        <td>Busuk pada pangkal buah</td>
                        <td class="text-center">3</td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td>G014</td>
                        <td>Busuk buah</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td>G015</td>
                        <td>Bercak kecil, bulat, cekung, dan berair</td>
                        <td class="text-center">1</td>
                    </tr>
                    <tr>
                        <th scope="row">16</th>
                        <td>G016</td>
                        <td>Bercak berwarna coklat kehitaman, kemudian menjadi lunak</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">17</th>
                        <td>G017</td>
                        <td>Tulang daun pucat</td>
                        <td class="text-center">1</td>
                    </tr>
                    <tr>
                        <th scope="row">18</th>
                        <td>G018</td>
                        <td>Tangkai daun merunduk</td>
                        <td class="text-center">1</td>
                    </tr>
                    <tr>
                        <th scope="row">19</th>
                        <td>G019</td>
                        <td>Daun menguning</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">20</th>
                        <td>G020</td>
                        <td>Tanaman Layu pada siang hari, segar pada pagi dan sore hari</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">21</th>
                        <td>G021</td>
                        <td>Daun yang lebih tua menguning dan mati</td>
                        <td class="text-center">3</td>
                    </tr>
                    <tr>
                        <th scope="row">22</th>
                        <td>G022</td>
                        <td>Tanaman layu terutama pada yang hari cerah dan</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">23</th>
                        <td>G023</td>
                        <td>Jaringan vaskuler berubah warna menjadi cokelat</td>
                        <td class="text-center">3</td>
                    </tr>
                    <tr>
                        <th scope="row">24</th>
                        <td>G024</td>
                        <td>Pertumbuhan Terhambat</td>
                        <td class="text-center">1</td>
                    </tr>
                    <tr>
                        <th scope="row">25</th>
                        <td>G025</td>
                        <td>Serangga</td>
                        <td class="text-center">1</td>
                    </tr>
                    <tr>
                        <th scope="row">26</th>
                        <td>G026</td>
                        <td>Cendawan</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">27</th>
                        <td>G027</td>
                        <td>Kekurangan unsur hara kalsium</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">28</th>
                        <td>G028</td>
                        <td>Bercak coklat hingga hitam pada daun bagian bawah</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">29</th>
                        <td>G029</td>
                        <td>Daun menggulung dan mengering dengan warna abu-abu keputihan</td>
                        <td class="text-center">3</td>
                    </tr>
                    <tr>
                        <th scope="row">30</th>
                        <td>G030</td>
                        <td>Bercak hitam kecoklatan atau keunguan pada batang</td>
                        <td class="text-center">2</td>
                    </tr>
                    <tr>
                        <th scope="row">31</th>
                        <td>G031</td>
                        <td>Batang mengecil atau mengkerut</td>
                        <td class="text-center">2</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
