import Vue from "vue"
import VueRouter from "vue-router"
import Dashboard from "./components/Dashboard"
import StudentRegistrationForm from "./components/StudentRegistrationForm"
import StudentInformation from "./components/StudentInformation"
import StudentFee from "./components/StudentFee"

Vue.use(VueRouter);

const routes = [
    {
        path: "/dashboard",
        name: "dashboard",
        component: Dashboard
    },

    {
        path: "/register-form",
        name: "StudentRegistrationForm",
        component:StudentRegistrationForm
    },
  
    {
        path: "/student-information",
        name: "StudentInformation",
        component:StudentInformation
    },

    {
        path: "/student-fee",
        name: "StudentFee",
        component:StudentFee
    }
    
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes
});

export default router;
