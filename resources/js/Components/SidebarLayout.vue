<template>
  <!-- Sidebar -->
  <div
    id="hs-application-sidebar"
    class="hs-overlay [--auto-close:lg] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform w-[260px] h-full hidden fixed inset-y-0 start-0 z-[60] bg-white border-e border-gray-200 dark:bg-gray-900 dark:border-gray-800 lg:block lg:translate-x-0 lg:end-auto lg:bottom-0"
    role="dialog"
    tabindex="-1"
    aria-label="Sidebar"
  >
    <div class="relative flex flex-col h-full max-h-full">
      <!-- Header -->
      <header class="p-4 flex justify-between items-center gap-x-2">
        <a
          class="flex-none font-semibold text-xl text-black dark:text-white focus:outline-none focus:opacity-80"
          href="#"
          aria-label="Brand"
        >
          SuperVise
        </a>

        <div class="lg:hidden -me-2">
          <!-- Close Button -->
          <button
            type="button"
            class="flex justify-center items-center gap-x-3 size-6 bg-white border border-gray-200 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:bg-gray-700"
            data-hs-overlay="#hs-sidebar-footer"
          >
            <svg
              class="shrink-0 size-4"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
            <span class="sr-only">Close</span>
          </button>
          <!-- End Close Button -->
        </div>
      </header>
      <!-- End Header -->

      <!-- Body -->
      <nav
        class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-gray-800 dark:[&::-webkit-scrollbar-thumb]:bg-gray-600"
      >
        <!-- Account Dropdown -->
        <div
          class="hs-dropdown [--strategy:absolute] [--auto-close:inside] relative w-full inline-flex p-2 mb-6 border-y border-gray-200 dark:border-gray-700 justify-between"
        >
          <button
            id="hs-sidebar-footer-example-with-dropdown"
            type="button"
            class="flex-1 inline-flex shrink-0 items-center gap-x-2 p-2 text-start text-sm text-gray-800 dark:text-gray-200 rounded-md hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:hover:bg-gray-700 dark:focus:bg-gray-700"
            aria-haspopup="menu"
            aria-expanded="false"
            aria-label="Dropdown"
          >
            <img
              class="shrink-0 size-5 rounded-full"
              src="https://images.unsplash.com/photo-1734122415415-88cb1d7d5dc0?q=80&w=320&h=320&auto=format&fit=facearea&facepad=3&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="Avatar"
            />
            {{ $page.props.auth.user.name }}
            <svg
              class="shrink-0 size-3.5 ms-auto"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="m7 15 5 5 5-5" />
              <path d="m7 9 5-5 5 5" />
            </svg>
          </button>
          <button
            type="button"
            class="size-[38px] relative inline-flex justify-center items-center float-right gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 dark:text-gray-200 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:hover:bg-gray-700 dark:focus:bg-gray-700"
          >
            <svg
              class="shrink-0 size-4"
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
              <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
            </svg>
            <span class="sr-only">Notifications</span>
          </button>

          <!-- Account Dropdown -->
          <div
            class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-60 transition-[opacity,margin] duration opacity-0 hidden z-20 bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700"
            role="menu"
            aria-orientation="vertical"
            aria-labelledby="hs-sidebar-footer-example-with-dropdown"
          >
            <div class="p-2 px-5 rounded-t-lg">
              <p class="text-sm text-gray-500 dark:text-gray-400">Signed in as</p>
              <p class="text-sm font-medium text-gray-800 dark:text-gray-200">
                {{ $page.props.auth.user.email }}
              </p>
            </div>
            <div class="p-1">
              <ResponsiveNavLink
                class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 dark:focus:bg-gray-700"
                :href="route('profile.edit')"
                as="button"
              >
                My Account
              </ResponsiveNavLink>
              <ResponsiveNavLink
                class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 dark:focus:bg-gray-700"
                :href="route('logout')"
                method="post"
                as="button"
              >
                Log Out
              </ResponsiveNavLink>
            </div>
          </div>
          <!-- End Account Dropdown -->
        </div>
        <!-- End Account Dropdown -->
        <div class="hs-accordion-group pb-0 px-2 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
          <ul class="space-y-1">
            <li>
              <a
                :class="[
                  'flex items-center gap-x-3 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-200 dark:text-gray-200 dark:hover:bg-gray-400',
                  { 'bg-gray-200 dark:text-gray-700': isActive('Order/Index') },
                ]"
                :href="route('order.index')"
              >
                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2" /><line x1="16" x2="16" y1="2" y2="6" /><line x1="8" x2="8" y1="2" y2="6" /><line x1="3" x2="21" y1="10" y2="10" /><path d="M8 14h.01" /><path d="M12 14h.01" /><path d="M16 14h.01" /><path d="M8 18h.01" /><path d="M12 18h.01" /><path d="M16 18h.01" /></svg>
                Order
              </a>
            </li>

            <li>
              <a
                :class="[
                  'flex items-center gap-x-3 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-200 dark:text-gray-200 dark:hover:bg-gray-400',
                  { 'bg-gray-200 dark:text-gray-700': isActive('Inventory/Index') },
                ]"
                :href="route('inventory.index')"
              >
              <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2" /><line x1="16" x2="16" y1="2" y2="6" /><line x1="8" x2="8" y1="2" y2="6" /><line x1="3" x2="21" y1="10" y2="10" /><path d="M8 14h.01" /><path d="M12 14h.01" /><path d="M16 14h.01" /><path d="M8 18h.01" /><path d="M12 18h.01" /><path d="M16 18h.01" /></svg>
              Inventory
              </a>
            </li>
            <li>
              <a
                :class="[
                  'flex items-center gap-x-3 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-200 dark:text-gray-200 dark:hover:bg-gray-400',
                  { 'bg-gray-200 dark:text-gray-700': isActive('Menu/Index') },
                ]"
                :href="route('menu.index')"
              >
              <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2" /><line x1="16" x2="16" y1="2" y2="6" /><line x1="8" x2="8" y1="2" y2="6" /><line x1="3" x2="21" y1="10" y2="10" /><path d="M8 14h.01" /><path d="M12 14h.01" /><path d="M16 14h.01" /><path d="M8 18h.01" /><path d="M12 18h.01" /><path d="M16 18h.01" /></svg>
              Menu
              </a>
            </li>
          </ul>
        </div>
        <div class="fixed top-4 right-4">
          <DarkModeToggle />
        </div>
      </nav>
      <!-- End Body -->

      <!-- Footer -->
      <footer class="mt-auto p-2 border-t border-gray-200 dark:border-gray-700">
        <!-- Footer content -->
      </footer>
      <!-- End Footer -->
    </div>
  </div>
  <!-- End Sidebar -->
</template>

<script setup>
import { usePage } from '@inertiajs/vue3';
import { onMounted } from 'vue';

onMounted(() => {
  window.HSStaticMethods.autoInit();
});

const isActive = (routeName) => {
  return usePage().component === routeName;
};
</script>