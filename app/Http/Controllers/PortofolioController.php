<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortofolioController extends Controller
{
    private function getPortfolios()
    {
        return [
            'exim-ci3' => [
                'title' => 'Exim',
                'slug' => 'exim-ci3',
                'image' => 'exim1.png',
                'desc' => 'Aplikasi yang disingkat Ekspor Impor adalah sistem yang membantu dalam menentukan negara tujuan ekspor berdasarkan skema Free Trade Agreement (FTA) / Preferential Trade Agreement (PTA) / Comprehensive Economic.',
                'images' => ['exim1.png', 'exim2.png', 'exim3.png'],
            ],
            'ritgrow-flutter' => [
                'title' => 'Ritgrow',
                'slug' => 'ritgrow-flutter',
                'image' => 'ritgrow1.png',
                'desc' => 'Ritgrow adalah perusahaan Solusi dan Pengembang Aplikasi yang dibangun atas dedikasi, berisi tim yang berpengalaman di masing - masing bidangnya. Perjalanan panjang telah melahirkan Ritgrow yang akan Fokus pada solusi retail, bukan hanya aplikasi POS tapi keseluruhan solusi yang dapat mendukung perkembangan bisnis ritel di Indonesia. Inovasi adalah sasaran utama kami, menghubungkan semua kebutuhan menjadikan solusi untuk Partner dan Klien.',
                'images' => ['ritgrow1.png', 'ritgrow2.png', 'ritgrow3.png'],
            ],
            'e-kemendag-flutter' => [
                'title' => 'E Kemendag',
                'slug' => 'e-kemendag-flutter',
                'image' => 'ekemendag1.png',
                'desc' => 'E-Kemendag merupakan Integrated Internal Services yang memberikan akses layanan internal dengan memperhatikan kemudahan penggunaan, mobilitas tinggi, akses kapan saja, aman, dan terintegrasi melalui 1 (satu) pintu yang hanya dapat digunakan oleh pegawai di lingkungan Kementerian Perdagangan.

                        E-Kemendag dapat diakses dengan menggunakan Single Sign On (SSO) Intra Kemendag. Aplikasi ini memberikan kemudahan penggunaan untuk fitur-fitur antara lain:
                        - presensi melalui face recognition dan akurasi jarak
                        - tata naskah dinas elektronik dan disposisi yang terintegrasi dengan mytask
                        - pusat bantuan terintegrasi / Help and Resolve (Hero)
                        - jadwal yang terintegrasi dengan TNDE, Sistem E-SPPD, HRIS, dan lainnya
                        - absen digital untuk rapat dan kegiatan lainnya
                        - informasi kepegawaian, termasuk berita ASN terkini, cuti, dan lainnya
                        - berita perdagangan
                        - daftar pejabat
                        - verify dokumen yang menggunakan TTE
                        - kamera dengan geotagging
                        - pengingat presensi
                        - lokasi WFO/WFH
                        - profil ASN, termasuk bagikan kontak, lihat kartu nama virtual, dan ubah kata sandi
                        - dan lainnya.',
                'images' => ['ekemendag1.png', 'ekemendag2.png', 'ekemendag3.png'],
            ],
            'catatan-akuntabilitas-ci4' => [
                'title' => 'Catatan Akuntabilitas',
                'slug' => 'catatan-akuntabilitas-ci4',
                'image' => 'catatan akuntabilitas1.png',
                'desc' => 'CMS untuk pencatatan akuntabilitas di kementrian perdagangan pada biro advokasi perdagangan.',
                'images' => ['catatan akuntabilitas1.png', 'catatan akuntabilitas2.png', 'catatan akuntabilitas3.png'],
            ],
            'hambatan-perdangangan-ci4' => [
                'title' => 'Hambatan Perdagangan',
                'slug' => 'hambatan-perdangangan-ci4',
                'image' => 'dpp1.png',
                'desc' => 'CMS Hambatan Perdagangan dari ditjen daglu.',
                'images' => ['dpp1.png'],
            ],
            'e-sppd-laravel' => [
                'title' => 'E Sppd',
                'slug' => 'e-sppd-laravel',
                'image' => 'esppd1.png',
                'desc' => 'Aplikasi eSPPD adalah program aplikasi berbasis web yang diinstal pada server web. Untuk membuat laporan perjalanan dinas.',
                'images' => ['esppd1.png', 'esppd2.png'],
            ],
            'gdi-laravel' => [
                'title' => 'Good Design Indonesia',
                'slug' => 'gdi-laravel',
                'image' => 'gdi1.png',
                'desc' => 'Web untuk program penghargaan nasional untuk karya desain terbaik di Indonesia sejak 2017. Pemenang menerima sertifikat pengakuan. GDI memberikan penghargaan kepada desainer Indonesia dengan trofi dan sertifikat, serta kesempatan untuk berpartisipasi dalam Good Design Award di Tokyo, Jepang.',
                'images' => ['gdi1.png'],
            ],
            'hero-flutter' => [
                'title' => 'Hero Mobile',
                'slug' => 'hero-flutter',
                'image' => 'hero1.png',
                'desc' => 'Aplikasi HERO Mobile. Nikmati kemudahan mengakses layanan langsung dari smartphone Anda dengan Aplikasi HERO Mobile. Tersedia untuk perangkat iOS dan Android, dan dapat digunakan oleh semua pengguna.',
                'images' => ['hero1.png', 'hero2.png', 'hero3.png'],
            ],
            'invesnow-laravel-vue' => [
                'title' => 'Invesnow',
                'slug' => 'invesnow-laravel-vue',
                'image' => 'invesnow1.png',
                'desc' => 'Invesnow adalah agen reksa dana, berlisensi dan berwenang oleh Otoritas Jasa Keuangan (OJK) dari Indonesia. Dilengkapi dengan pasar modal dan informasi keuangan, Invesnow menyediakan banyak pilihan produk reksa dana dari manajer investasi terkemuka di Indonesia.',
                'images' => ['invesnow1.png', 'invesnow2.png', 'invesnow3.png'],
            ],
            'sengguh-phalcon' => [
                'title' => 'Sengguh',
                'slug' => 'sengguh-phalcon',
                'image' => 'sengguh1.png',
                'desc' => 'Sistem Evaluasi Pertanggungjawaban Pembangunan Daerah (Sengguh) dibangun oleh Badan Perencanaan Pembangunan Daerah Daerah Istimewa Yogyakarta (BAPPEDA DIY) sebagai pembaruan dari aplikasi monev Jogja Kendali. Sengguh telah diakses lebih dari 4 juta hits (2022) dan dimanfaatkan lebih dari 81 pengguna anggaran/kuasa pengguna anggaran, 5 kabupaten/kota, dapat diakses lebih dari 9896 ASN, 55 anggota legislatif DRPD DIY, serta masyarakat luas. Sengguh dapat diakses melalui http://sengguh.jogjaprov.go.id dan terbuka bagi masyarakat.',
                'images' => ['sengguh1.png', 'sengguh2.png', 'sengguh3.png'],
            ],
            'simbajanesa-laravel' => [
                'title' => 'Simbajanesa',
                'slug' => 'simbajanesa-laravel',
                'image' => 'simbajanesa1.png',
                'desc' => 'Pelaksanaan proses pengadaan barang dan jasa dengan metode quotation dan tender dilaksanakan secara elektronik mengunakan aplikasi SIMBAJANESA.',
                'images' => ['simbajanesa1.png', 'simbajanesa2.png', 'simbajanesa3.png'],
            ],
            'sisp-flutter' => [
                'title' => 'SISP',
                'slug' => 'sisp-flutter',
                'image' => 'sisp1.png',
                'desc' => 'Tercipta dari upaya kolaboratif Kementerian Perdagangan Republik Indonesia, Platform Sistem Informasi Perdagangan (SISP) menonjol sebagai tonggak penting dalam memfasilitasi transisi pasar konvensional ke ranah digital di seluruh Indonesia.',
                'images' => ['sisp1.png', 'sisp2.png', 'sisp3.png'],
            ],
        ];
    }

    // Display all portfolios
    public function index()
    {
        $data = array_values($this->getPortfolios());
        return view('portofolio.index', compact('data'));
    }

    // Show create form
    public function create()
    {
        return view('portofolio.create');
    }

    // Store new portfolio
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'string',
        ]);

        $portfolios = $this->getPortfolios();
        $slug = Str::slug($validated['title']);

        if (isset($portfolios[$slug])) {
            return redirect()->back()->withErrors(['title' => 'Portfolio with this title already exists']);
        }

        $portfolios[$slug] = [
            'title' => $validated['title'],
            'slug' => $slug,
            'image' => $validated['image'],
            'desc' => $validated['desc'],
            'images' => $validated['images'],
        ];

        return redirect()->route('portofolio.index')->with('success', 'Portfolio created successfully');
    }

    // Show single portfolio
    public function show($slug)
    {
        $portfolios = $this->getPortfolios();
        
        if (!isset($portfolios[$slug])) {
            abort(404, 'Portfolio not found');
        }

        return view('portofolio.show', ['item' => $portfolios[$slug]]);
    }

    // Show edit form
    public function edit($slug)
    {
        $portfolios = $this->getPortfolios();
        
        if (!isset($portfolios[$slug])) {
            abort(404, 'Portfolio not found');
        }

        return view('portofolio.edit', ['item' => $portfolios[$slug]]);
    }

    // Update portfolio
    public function update(Request $request, $slug)
    {
        $portfolios = $this->getPortfolios();
        
        if (!isset($portfolios[$slug])) {
            abort(404, 'Portfolio not found');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'string',
        ]);

        $newSlug = Str::slug($validated['title']);
        
        if ($newSlug !== $slug && isset($portfolios[$newSlug])) {
            return redirect()->back()->withErrors(['title' => 'Portfolio with this title already exists']);
        }

        $portfolios[$newSlug] = [
            'title' => $validated['title'],
            'slug' => $newSlug,
            'image' => $validated['image'],
            'desc' => $validated['desc'],
            'images' => $validated['images'],
        ];

        if ($newSlug !== $slug) {
            unset($portfolios[$slug]);
        }

        return redirect()->route('portofolio.index')->with('success', 'Portfolio updated successfully');
    }

    // Delete portfolio
    public function destroy($slug)
    {
        $portfolios = $this->getPortfolios();
        
        if (!isset($portfolios[$slug])) {
            abort(404, 'Portfolio not found');
        }

        unset($portfolios[$slug]);

        return redirect()->route('portofolio.index')->with('success', 'Portfolio deleted successfully');
    }
}