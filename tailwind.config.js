/** @type {import('tailwindcss').Config} */
export default {
  // Bagian ini memberi tahu Tailwind file mana yang harus discan (Blade, JS, Vue)
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      // 1. Konfigurasi Warna Khusus (Sesuai Gambar)
      colors: {
        'retro-bg': '#FFF8E7',      // Warna latar belakang utama (Krem Pucat)
        'retro-orange': '#FFCC80',  // Warna kartu proyek (Oranye Pastel)
        'retro-blue': '#008ECC',    // Warna elemen dekorasi cair/blob (Biru)
        'retro-red': '#FF6B6B',     // Warna teks judul & shadow (Merah Salmon)
        'retro-shadow': '#FFC069',  // Warna bayangan kotak utama (Kuning-Oranye)
        'retro-black': '#1a1a1a',   // Hitam tidak pekat (opsional, lebih lembut dari #000)
      },
      
      // 2. Konfigurasi Font (Sesuai Gaya Retro)
      fontFamily: {
        // Font untuk teks body (mirip mesin ketik)
        'retro': ['"Courier New"', 'Courier', 'monospace'],
        // Font untuk judul besar (tegas dan tebal)
        'display': ['Arial', 'Helvetica', 'sans-serif'],
      },

      // 3. Konfigurasi Bayangan Kasar (Hard Shadow) - Opsional jika ingin pakai class shadow
      boxShadow: {
        'neo': '4px 4px 0px 0px #000000', // Bayangan hitam keras tanpa blur
        'neo-lg': '8px 8px 0px 0px #000000', 
      },

      // 4. Border Radius kustom (Untuk bentuk Blob jika tidak pakai CSS manual)
      borderRadius: {
        'blob': '60% 40% 30% 70% / 60% 30% 70% 40%',
      }
    },
  },
  plugins: [],
}