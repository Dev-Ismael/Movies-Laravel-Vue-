

// Import Pages
import Category from '../Pages/Category.vue';
import Movie from '../Pages/Movie.vue';

// Routes
const routes = [
    { path: '/category' , component: Category },
    { path: '/movie' , component: Movie },
    // { path: "/:catchAll(.*)" , component: notFoundPage },
];

export default routes;
