import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import Default from './layout/wrapper/Admin/index.vue'
import Toaster from "@meforma/vue-toaster";
const app = createApp(App)

app.use(router)
app.use(Toaster, {
    position: "top-right",
    max: 5,
  });
app.component("default-layout", Default);

app.mount("#app")