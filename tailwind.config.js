module.exports = {
    content: [
        "./resources/views/layouts/app.blade.php",
        "./resources/views/index.blade.php",
        "./resources/views/blog.blade.php",
        "./resources/views/about.blade.php",
        "./resources/views/contact.blade.php",
        "./resources/views/team.blade.php",
    ],
    // enable dark mode via class strategy
    darkMode: 'class',
    theme: {
        extend: {},
    },
    plugins: [
        require('tailwind-scrollbar'),
        require('@themesberg/flowbite/plugin'),
        require('@tailwindcss/forms'),
    ],
}