function toggleTheme() {
    const body = document.body;
    body.classList.toggle('dark-mode');

    const btn = document.getElementById("btn-theme");
    if (body.classList.contains("dark-mode")) {
        btn.innerHTML = "☀️ Light mode";
    } else {
        btn.innerHTML = "🌙 Dark mode";
    }
}