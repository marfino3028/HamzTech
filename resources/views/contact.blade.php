@extends('layouts.app')

@section('content')
<div class="bg-gray-900 text-white min-h-screen py-10 px-6 font-mono animate-fade-in">
  <div class="max-w-4xl mx-auto">
    <div class="flex flex-col md:flex-row items-center md:items-start md:space-x-6 mb-8">
      <img src="{{ asset('images/fino.png') }}" alt="Foto Marfino" class="w-32 h-32 rounded-full border-4 border-green-400 shadow-lg animate-pulse">
      <div class="mt-4 md:mt-0">
        <h1 class="text-4xl font-bold text-cyan-300">Marfino Hamzah</h1>
        <p class="text-green-400">Backend Developer @ Kemendag</p>
        <p class="text-sm text-gray-400 mt-1">Laravel | Flutter | Vue | Svelte | Golang</p>
        <p class="text-sm text-gray-400">📍 Jawa Tengah, Indonesia | 📱 0896-2631-2680</p>
      </div>
    </div>

    <!-- WhatsApp Contact Form -->
    <div class="bg-gray-800 rounded-lg p-6 mb-10 border-l-4 border-green-500 shadow-lg">
      <h2 class="text-2xl font-semibold text-green-400 mb-4">📱 Hubungi Saya via WhatsApp</h2>
      <form id="whatsappForm" class="space-y-4">
        <div>
          <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Nama Anda</label>
          <input type="text" id="name" name="name" required 
                 class="w-full bg-gray-700 border border-gray-600 rounded-md py-2 px-3 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
        </div>
        <div>
          <label for="message" class="block text-sm font-medium text-gray-300 mb-1">Pesan</label>
          <textarea id="message" name="message" rows="3" required
                    class="w-full bg-gray-700 border border-gray-600 rounded-md py-2 px-3 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"></textarea>
        </div>
        <button type="submit" 
                class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-md transition duration-300 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
          </svg>
          Kirim via WhatsApp
        </button>
      </form>
    </div>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold text-pink-400 border-b border-pink-600 pb-1 mb-4">💬 Tentang Saya</h2>
      <p class="text-gray-300 leading-relaxed">
        Saya adalah seorang Fullstack Developer dengan keahlian di Laravel, Flutter, dan Nuxt.js, serta Next.js. Memiliki pengalaman dalam membangun aplikasi web dan mobile untuk berbagai instansi, kementerian, dan perusahaan.<br><br>

        🔧 Keahlian lainnya:<br>
        • Backend: CI3, CI4,Phalcon,Golang<br>
        • Frontend: Vue.js,Quasar,svelte<br>
        • CSS: Tailwind,bootstrap,materialize<br>
        • Task Management: Trello, Jira<br>
        • DevOps: aws,gcp,kubernetes,docker<br>
        • UI/UX: Figma, Whimsical<br>
        • CMS: WordPress plugin & theme<br>
        • IT Support & jaringan<br>
        • Videografi & Pengolahan Gambar<br><br>

        🚀 Portofolio di GitHub, GitLab, dan LinkedIn.<br>
        🔓 Terbuka untuk freelance & kolaborasi.
      </p>
    </section>

    <!-- Bagian lainnya tetap sama -->
    <section class="mb-10">
      <h2 class="text-2xl font-semibold text-blue-400 border-b border-blue-600 pb-1 mb-4">💼 Pengalaman Singkat</h2>
      <ul class="list-disc pl-5 text-gray-300 text-sm">
        <li><strong>Kemendag RI</strong>: Backend & Mobile Developer untuk sistem internal dan aplikasi publik.</li>
        <li><strong>UNESA</strong>: Fullstack Developer sistem e-Procurement.</li>
        <li><strong>Ritgrow</strong>: Developer sistem retail dan POS.</li>
        <li><strong>Kemenkes RI & Liburania</strong>: Proyek berbasis Laravel, Flutter, Svelte, dan Golang.</li>
      </ul>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold text-purple-400 border-b border-purple-600 pb-1 mb-4">🎓 Pendidikan</h2>
      <ul class="list-disc pl-5">
        <li><strong>Sekolah Programmer</strong><br><span class="text-sm text-gray-400">📍 Junior Web Development | 🗓️ Dec 2019 – Feb 2020</span><br>Fokus pada pengembangan web (Laravel, HTML, CSS, JS)</li>
        <li class="mt-4"><strong>BLK Surakarta</strong><br><span class="text-sm text-gray-400">📍 Drafter CAD Mechanical | 🗓️ Tahun 2019</span><br>Belajar dasar AutoCAD, teknik gambar, dan perancangan mesin.</li>
      </ul>
    </section>

    <section class="mb-10">
      <h2 class="text-2xl font-semibold text-green-400 border-b border-green-600 pb-1 mb-4">🛠️ Skill Unggulan</h2>
      <ul class="grid grid-cols-2 gap-2 text-sm">
       <li> Backend: CI3, CI4,Phalcon, Golang<li>
        <li> Frontend: Vue.js,Quasar,svelte<li>
        <li> CSS: Tailwind,bootstrap,materialize<li>
        <li> Task Management: Trello, Jira<li>
        <li> DevOps: aws,gcp,kubernetes,docker<li>
        <li> UI/UX: Figma, Whimsical<li>
        <li> CMS: WordPress plugin & theme<li>
        <li> IT Support & jaringan<li>
      </ul>
    </section>
  </div>
</div>

<script>
document.getElementById('whatsappForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const name = document.getElementById('name').value;
  const message = document.getElementById('message').value;
  const phoneNumber = '089626312680'; // Nomor WhatsApp Anda
  
  // Encode message untuk URL
  const encodedMessage = encodeURIComponent(`Halo Marfino, saya ${name}.\n${message}`);
  
  // Buka WhatsApp
  window.open(`https://wa.me/${phoneNumber}?text=${encodedMessage}`, '_blank');
});
</script>
@endsection