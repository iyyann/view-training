import CarListing from './components/CarListing.vue';
import CarForm from './components/CarForm.vue';

const routes = [
    { path: '/', component: CarListing },
    { path: '/cars/create', component: CarForm },
    { path: '/cars/edit/:id', component: CarForm },
];

export default routes;
