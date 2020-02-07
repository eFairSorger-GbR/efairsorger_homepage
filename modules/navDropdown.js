const dropBtn = document.getElementById('nav-dropdown-btn');
const dropMenu = document.getElementById('nav-dropdown-menu');

function openNavDrop() {
  dropMenu.classList.toggle('d-none');
}


const navDropdown = () => {
  dropBtn.addEventListener('click', openNavDrop);
}

export { navDropdown };
