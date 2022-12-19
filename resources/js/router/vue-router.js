

/*=======  import vue router =======*/
import { createRouter, createWebHistory } from 'vue-router'
import  routes  from './routes'

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 }   // at click router link vuejs go top page "vue router scroll behavior"
    }
});

export default router;
