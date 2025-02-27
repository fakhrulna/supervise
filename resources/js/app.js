import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import '../css/app.css';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import 'preline';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {

        const app = createApp({
            render: () => h(App, props),  // Pass `App` and `props` correctly here
          });
      
          // Globally register all components from the `Components` directory
          const components = import.meta.glob('./Components/*.vue', { eager: true });  // Use `eager: true` to load components synchronously
          // Loop through the components and register them globally
          for (const [path, component] of Object.entries(components)) {
            const componentName = path.split('/').pop().replace('.vue', '');  // Extract the name of the component from the file path
            app.component(componentName, component.default);  // Register it globally
          }
        return app.use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
