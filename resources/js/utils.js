export function closeNavBar() {
    const navBar = document.getElementById('navbar');
    navBar.style.display = 'none';

    const homeSection = document.getElementById('home');
    homeSection.classList.remove('h-[90vh]');
    homeSection.classList.add('h-svh');
}
