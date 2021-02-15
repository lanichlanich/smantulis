@extends('layouts.app')

@section('content')
    <div id="carouselExampleControls" class="carousel slide mt-4 pt-5" data-ride="carousel">
        {{-- <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../slide-1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../slide-2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../slide-1.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev pt-5" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next pt-5" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> --}}
    </div>
    <div class="container mt-4 bg-white pb-2">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header bg-info">
                        <h2>
                            Daftar Rombongan Belajar
                        </h2>
                    </div>
                    <div class="card-body table-responsive">
                        <table  class="table">
                            <colgroup><col width="40" style="mso-width-source:userset;mso-width-alt:1462;width:30pt">
                            <col width="203" style="mso-width-source:userset;mso-width-alt:7424;width:152pt">
                            <col width="83" style="mso-width-source:userset;mso-width-alt:3035;width:62pt">
                            <col width="63" span="3" style="width:47pt">
                            <col width="199" style="mso-width-source:userset;mso-width-alt:7277;width:149pt">
                            <col width="243" style="mso-width-source:userset;mso-width-alt:8886;width:182pt">
                            <col width="104" style="mso-width-source:userset;mso-width-alt:3803;width:78pt">
                            </colgroup><tbody><tr height="20" style="height:15.0pt">
                             <th rowspan="2" height="40" class="xl66" width="40" style="height:30.0pt;width:30pt">No</th>
                             <th rowspan="2" class="xl66" width="203" style="width:152pt">Nama Rombel</th>
                             <th rowspan="2" class="xl67" width="83" style="width:62pt">Tingkat Kelas</th>
                             <th colspan="3" class="xl66" width="189" style="border-left:none;width:141pt">Jumlah
                             Siswa</th>
                             <th rowspan="2" class="xl66" width="199" style="width:149pt">Wali Kelas</th>
                             <th rowspan="2" class="xl66" width="243" style="width:182pt">Kurikulum</th>
                             <th rowspan="2" class="xl66" width="104" style="width:78pt">Ruangan</th>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <th height="20" class="xl66" style="height:15.0pt;border-top:none;border-left:
                             none">L</th>
                             <th class="xl66" style="border-top:none;border-left:none">P</th>
                             <th class="xl66" style="border-top:none;border-left:none">Total</th>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">1</td>
                             <td>X IPS-1</td>
                             <td class="xl65">10</td>
                             <td align="right">21</td>
                             <td align="right">15</td>
                             <td align="right">36</td>
                             <td>Syarief Muharam</td>
                             <td>Kurikulum SMA 2013 IPS</td>
                             <td>X IPS-1</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">2</td>
                             <td>X IPS-2</td>
                             <td class="xl65">10</td>
                             <td align="right">20</td>
                             <td align="right">16</td>
                             <td align="right">36</td>
                             <td>Tokiin</td>
                             <td>Kurikulum SMA 2013 IPS</td>
                             <td>X IPS-2</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">3</td>
                             <td>X IPS-3</td>
                             <td class="xl65">10</td>
                             <td align="right">18</td>
                             <td align="right">18</td>
                             <td align="right">36</td>
                             <td>Wini Madyani</td>
                             <td>Kurikulum SMA 2013 IPS</td>
                             <td>X IPS-3</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">4</td>
                             <td>X MIPA-1</td>
                             <td class="xl65">10</td>
                             <td align="right">19</td>
                             <td align="right">17</td>
                             <td align="right">36</td>
                             <td>Tiara Rachmawati Syair</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>X MIPA-1</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">5</td>
                             <td>X MIPA-2</td>
                             <td class="xl65">10</td>
                             <td align="right">18</td>
                             <td align="right">18</td>
                             <td align="right">36</td>
                             <td>Handi Handana</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>X MIPA-2</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">6</td>
                             <td>X MIPA-3</td>
                             <td class="xl65">10</td>
                             <td align="right">21</td>
                             <td align="right">15</td>
                             <td align="right">36</td>
                             <td>Siti Umi Nurjanah</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>X MIPA-3</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">7</td>
                             <td>X MIPA-4</td>
                             <td class="xl65">10</td>
                             <td align="right">20</td>
                             <td align="right">16</td>
                             <td align="right">36</td>
                             <td>Din Herdiana</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>X MIPA-4</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">8</td>
                             <td>X MIPA-5</td>
                             <td class="xl65">10</td>
                             <td align="right">20</td>
                             <td align="right">16</td>
                             <td align="right">36</td>
                             <td>Rini Apriani</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>X MIPA-5</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">9</td>
                             <td>XI IPS-1</td>
                             <td class="xl65">11</td>
                             <td align="right">12</td>
                             <td align="right">22</td>
                             <td align="right">34</td>
                             <td>Ami Priyono</td>
                             <td>Kurikulum SMA 2013 IPS</td>
                             <td>XI IPS-1</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">10</td>
                             <td>XI IPS-2</td>
                             <td class="xl65">11</td>
                             <td align="right">15</td>
                             <td align="right">19</td>
                             <td align="right">34</td>
                             <td>Asep Andri Astriyandi</td>
                             <td>Kurikulum SMA 2013 IPS</td>
                             <td>XI IPS-2</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">11</td>
                             <td>XI IPS-3</td>
                             <td class="xl65">11</td>
                             <td align="right">13</td>
                             <td align="right">20</td>
                             <td align="right">33</td>
                             <td>Mardliyyah</td>
                             <td>Kurikulum SMA 2013 IPS</td>
                             <td>XI IPS-3</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">12</td>
                             <td>XI MIPA-1</td>
                             <td class="xl65">11</td>
                             <td align="right">10</td>
                             <td align="right">26</td>
                             <td align="right">36</td>
                             <td>Popi Indriani</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>XI MIPA-1</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">13</td>
                             <td>XI MIPA-2</td>
                             <td class="xl65">11</td>
                             <td align="right">10</td>
                             <td align="right">25</td>
                             <td align="right">35</td>
                             <td>Rukiah</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>XI MIPA-2</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">14</td>
                             <td>XI MIPA-3</td>
                             <td class="xl65">11</td>
                             <td align="right">11</td>
                             <td align="right">25</td>
                             <td align="right">36</td>
                             <td>Farviz Nicola</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>XI MIPA-3</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">15</td>
                             <td>XI MIPA-4</td>
                             <td class="xl65">11</td>
                             <td align="right">11</td>
                             <td align="right">25</td>
                             <td align="right">36</td>
                             <td>Nani Minarni</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>XI MIPA-4</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">16</td>
                             <td>XI MIPA-5</td>
                             <td class="xl65">11</td>
                             <td align="right">11</td>
                             <td align="right">25</td>
                             <td align="right">36</td>
                             <td>Fitriyah</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>XI MIPA-5</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">17</td>
                             <td>XII IPS-1</td>
                             <td class="xl65">12</td>
                             <td align="right">11</td>
                             <td align="right">21</td>
                             <td align="right">32</td>
                             <td>Putik Iqlima</td>
                             <td>Kurikulum SMA 2013 IPS</td>
                             <td>XII IPS-1</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">18</td>
                             <td>XII IPS-2</td>
                             <td class="xl65">12</td>
                             <td align="right">11</td>
                             <td align="right">20</td>
                             <td align="right">31</td>
                             <td>Ayyub Shofry</td>
                             <td>Kurikulum SMA 2013 IPS</td>
                             <td>XII IPS-2</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">19</td>
                             <td>XII IPS-3</td>
                             <td class="xl65">12</td>
                             <td align="right">12</td>
                             <td align="right">18</td>
                             <td align="right">30</td>
                             <td>Ayu Fauziyyah</td>
                             <td>Kurikulum SMA 2013 IPS</td>
                             <td>XII IPS-3</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">20</td>
                             <td>XII MIPA-1</td>
                             <td class="xl65">12</td>
                             <td align="right">10</td>
                             <td align="right">26</td>
                             <td align="right">36</td>
                             <td>Otong Wahyudin</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>XII MIPA-1</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">21</td>
                             <td>XII MIPA-2</td>
                             <td class="xl65">12</td>
                             <td align="right">10</td>
                             <td align="right">25</td>
                             <td align="right">35</td>
                             <td>Rinel</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>XII MIPA-2</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">22</td>
                             <td>XII MIPA-3</td>
                             <td class="xl65">12</td>
                             <td align="right">11</td>
                             <td align="right">24</td>
                             <td align="right">35</td>
                             <td>Sinta Dewi</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>XII MIPA-3</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">23</td>
                             <td>XII MIPA-4</td>
                             <td class="xl65">12</td>
                             <td align="right">11</td>
                             <td align="right">24</td>
                             <td align="right">35</td>
                             <td>Eka Firmansyah</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>XII MIPA-4</td>
                            </tr>
                            <tr height="20" style="height:15.0pt">
                             <td height="20" align="right" style="height:15.0pt">24</td>
                             <td>XII MIPA-5</td>
                             <td class="xl65">12</td>
                             <td align="right">10</td>
                             <td align="right">26</td>
                             <td align="right">36</td>
                             <td>Castono</td>
                             <td>Kurikulum SMA 2013 MIPA</td>
                             <td>XII MIPA-5</td>
                            </tr></tbody></table>
                    </div>
                    <div class="card-footer">
                        
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-3">
                <div class="card card-warning mt-3">
                    <div class="card-header">Info terkini</div>
                    <div class="card-body p-4">
                        <button type="button" class="btn btn-block bg-gradient-info btn-sm">Pendataan Awal PPDB
                            2021</button>
                        <button type="button" class="btn btn-block bg-gradient-info btn-sm">Pendataan
                            KIP 2021</button>
                        <button type="button" class="btn btn-block bg-gradient-info btn-sm">Pendataan Hobi &
                            Cita-cita</button>
                        <button type="button" class="btn btn-block bg-gradient-info btn-sm">Bonrue Culture
                            Festival</button>
                        <button type="button" class="btn btn-block bg-gradient-info btn-sm">Porak 2021</button>
                    </div>

                </div>
                <div class="card card-success">
                    <div class="card-header">Visi</div>
                    <div class="card-body p-4">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore est, maxime numquam
                        magni minus harum la
                    </div>

                </div>
                <div class="card card-info">
                    <div class="card-header">Misi</div>
                    <div class="card-body p-4">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore est, maxime numquam
                        magni minus harum la
                    </div>

                </div>
            </div> --}}


        </div>

    </div>
@endsection
