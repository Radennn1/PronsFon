// tailwind.config.js

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php', // Ini sangat penting untuk semua file Blade
    './resources/js/**/*.js',        // Untuk file JavaScript yang mungkin berisi kelas Tailwind
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}