// import external dependencies
import 'jquery';
import 'video.js';
// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import about from './routes/about';
import implantScience from './routes/implant-science';
import expanderImplantOptions from './routes/expander-implant-options';
import patientSafety from './routes/patient-safety';
import breastImplants from './routes/breast-implants';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  about,
  // implant science
  implantScience,
  expanderImplantOptions,
  patientSafety,
  breastImplants,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
