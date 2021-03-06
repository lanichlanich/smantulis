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
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h2>
                            VISI, INDIKATOR VISI & MISI (SMAN 1 HAURGEULIS)
                        </h2>
                    </div>
                    <div class="card-body table-responsive">
                        <h2 class="bg-warning p-2">A. VISI</h2>

                        <h3 class="bg-info p-4 text-center rounded hover:bg-warning" >Mewujudkan Sekolah yang berprestasi, berbudaya dan
                            berdaya saing
                            tahun 2021.
                        </h3>
                        <p class="bg-secondary p-2">Untuk merealisasikan keinginan harapan, cita-cita serta tujuan yang
                            tertuang dalam visi yang telah ditetapkan, maka SMA Negeri 1 Haurgeulis beserta stakeholder
                            harus memahami makna dari visi tersebut yang tertuang dalam beberapa indikator sebagai berikut :
                        </p>

                        <h2 class="bg-warning p-2">B. INDIKATOR VISI</h2>
                        <div class="list-group px-4 mb-4">
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">1.
                                Mampu
                                memenuhi SNP
                                dengan maksimal</button>
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">2.
                                Mampu mewujudkan budaya
                                karakter bangsa melalui keteladanan dan
                                pembiasaan di sekolah.</button>
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">3.
                                Mampu memelihara budaya,
                                komitmen dan komunikasi yang efektif
                            </button>
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">4.
                                Mampu berkompetisi
                                akademik dan non akademik baik lokal maupun
                                global.</button>
                        </div>
                        <h2 class="bg-warning p-2">C. MISI</h2>
                        <p class="bg-secondary p-2">Untuk mencapai VISI tersebut, SMA Negeri 1 Haurgeulis mengembangkan misi
                            sebagai berikut :</p>
                        <div class="list-group px-4 mb-2">
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">1.
                                Memberdayakan tenaga
                                pendidik dan kependidikan yang memenuhi
                                standar yang ditetapkan.</button>
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">2.
                                Menanamkan kedisiplinan
                                melalui budaya bersih, budaya tertib, dan
                                budaya kerja.</button>
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">3.
                                Menumbuhkan penghayatan
                                terhadap budaya dan seni daerah sehingga
                                menjadi salah satu sumber kearifan berperilaku dan bermasyarakat.</button>
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">4.
                                Menumbuhkan penghayatan
                                dan pengamalan terhadap ajaran agama yang
                                dianutnya, sehingga terbentuk siswa yang berakhlakul karimah sebagai sumber
                                kearifan dan
                                nilai-nilai budi pekerti</button>
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">5.
                                Melaksanakan pembelajaran
                                dan bimbingan secara efektif, inovatif,
                                kreatif, menyenangkan sehingga setiap siswa dapat berkembang secara optimal
                                sesuai dengan
                                potensi yang dimiliki. </button>
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">6.
                                Menumbuhkan inovasi dalam
                                kehidupan sehari hari yang dapat
                                menunjang pengembangan profesionalisme</button>
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">7.
                                Melaksanakan pembelajaran
                                dan bimbingan secara efektif, inovatif,
                                kreatif, menyenangkan sehingga setiap siswa dapat berkembang secara
                                optimal sesuai dengan
                                potensi yang dimiliki.</button>
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">8.
                                Melakukan upaya
                                pengembangan sarana dan prasarana untuk mendukung
                                tercapainya hasil proses belajar mengajar.</button>
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">9.
                                Meningkatkan
                                intelektualitas dan kreativitas melalui penelitian
                                dan pengembangan ilmu pengetahuan.</button>
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">10.
                                Mengembangkan suasana
                                dan sikap kekeluargaan yang harmonis
                                dengan membiasakan warga sekolah mengucapkan salam,
                                senyum dan sapa sehingga terwujud
                                suasana yang kondusif.</button>
                            <button type="button"
                                class="list-group-item list-group-item-action list-group-item-light rounded">11.
                                Kelembagaan yang kuat
                                dan berkelanjutan untuk mewujudkan
                                ekosistem sekolah yang teratur dan mencapai tujuan
                                Visi Misi SMA N 1 Haurgeulis</button>

                        </div>

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
