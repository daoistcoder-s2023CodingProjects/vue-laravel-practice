import { createApp, h } from 'vue'
import { Link, createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import Layout from './Shared/Layout.vue';


createInertiaApp({
  resolve: async name => {
    let page = (await import(`./Pages/${name}`)).default;

    page.layout ??= Layout;

    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component('Link', Link)
      .mount(el)
  },
});

InertiaProgress.init({
    color: 'red',
    showSpinner: 'true',
});
