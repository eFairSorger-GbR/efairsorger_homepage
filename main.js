import { includeHTML } from './modules/includeHTML.js'
includeHTML();

import { navDropdown } from './modules/navDropdown.js'

if(document.getElementById('nav-dropdown-btn')) {
  navDropdown();
}
