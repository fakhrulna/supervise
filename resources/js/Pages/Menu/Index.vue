<template>
    <MainLayout>
        <!-- Table Section -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-4 lg:px-5 lg:py-5 mx-auto">
            <div class="flex items-center justify-between mb-6">
                <span class="align-top top-0 pb-4 text-xl font-semibold">Menu List</span>
            </div>
            <!-- Card -->
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full align-middle flex justify-between">
                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-visible w-1/2 mr-2">
                        <!-- Header -->
                            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                            <!-- Input -->
                            <div class="sm:col-span-1">
                                <label for="hs-as-table-product-review-search" class="sr-only">Search</label>
                                <div class="relative">
                                <input type="text" id="hs-as-table-product-review-search" name="hs-as-table-product-review-search" class="py-2 px-3 ps-11 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Search">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                    <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                                </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <div class="sm:col-span-2 md:grow">
                                <div class="flex justify-end gap-x-2">
                                    <div class="hs-dropdown [--placement:bottom-right] relative inline-block" data-hs-dropdown-auto-close="inside">
                                        <button id="hs-as-table-table-filter-dropdown" type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M7 12h10"/><path d="M10 18h4"/></svg>
                                        Filter
                                        <span class="ps-2 text-xs font-semibold text-blue-600 border-s border-gray-200">
                                            1
                                        </span>
                                        </button>
                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-48 z-10 bg-white shadow-md rounded-lg mt-2" role="menu" aria-orientation="vertical" aria-labelledby="hs-as-table-table-filter-dropdown">
                                        <div class="divide-y divide-gray-200">
                                            <label for="hs-as-filters-dropdown-all" class="flex py-2.5 px-3">
                                            <input type="checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" id="hs-as-filters-dropdown-all" checked>
                                            <span class="ms-3 text-sm text-gray-800">All</span>
                                            </label>
                                            <label for="hs-as-filters-dropdown-published" class="flex py-2.5 px-3">
                                            <input type="checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" id="hs-as-filters-dropdown-published">
                                            <span class="ms-3 text-sm text-gray-800">Published</span>
                                            </label>
                                            <label for="hs-as-filters-dropdown-pending" class="flex py-2.5 px-3">
                                            <input type="checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" id="hs-as-filters-dropdown-pending">
                                            <span class="ms-3 text-sm text-gray-800">Pending</span>
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="hs-dropdown [--placement:bottom-right] relative inline-block" data-hs-dropdown-auto-close="inside">
                                        <button @click="openModal" id="hs-as-table-table-filter-dropdown" type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M7 12h10"/><path d="M10 18h4"/></svg>
                                        Add Item
                                        </button>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                    No.
                                    </span>
                                </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                    Name
                                    </span>
                                </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                    Price
                                    </span>
                                </div>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                            <tr v-for="item in menuList" :key="item.id" class="bg-white hover:bg-gray-50">
                                <td class="size-px whitespace-nowrap align-top">
                                <a class="block p-6" href="#">
                                    <span class="text-sm text-gray-600">1</span>
                                </a>
                                </td>
                                <td class="size-px whitespace-nowrap align-top">
                                <a class="block p-6" href="#">
                                    <div class="flex items-center gap-x-4">
                                    <!-- <img class="shrink-0 size-[38px] rounded-lg" src="https://images.unsplash.com/photo-1572307480813-ceb0e59d8325?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=320&q=80" alt="Product Image"> -->
                                    <div>
                                        <span class="block text-sm font-semibold text-gray-800">Kek Batik</span>
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td class="size-px whitespace-nowrap align-top">
                                <a class="block p-6" href="#">
                                    <span class="text-sm text-gray-600">{{ item.status }}</span>
                                </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                            <div class="max-w-sm space-y-3">
                            <select class="py-2 px-3 pe-9 block border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option selected>5</option>
                                <option>6</option>
                            </select>
                            </div>

                            <div>
                            <div class="inline-flex gap-x-2">
                                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                                Prev
                                </button>

                                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                Next
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                                </button>
                            </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                        </div>
                        <Details :orders="menuList" class="w-1/2 ml-2 h-fit" />
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Table Section -->
      <AddForm :isOpen="isModalOpen" @close="closeModal" @save="handleSave" ref="addForm" />
    </MainLayout>
</template>

<script>
import { useForm } from '@inertiajs/vue3';
import AddForm from './AddForm.vue';
import Details from './Details.vue';
import { format } from 'date-fns';

export default {
  components: {
    AddForm,
    Details,
  },
  props: {
    menus: {
      type: Array,
    },
  },
  data() {
    return {
      isModalOpen: false,
      menu: [],
      menuList: this.menus,
    };
  },
  mounted() {
    console.log("Order from Laravel:", this.menus);
  },
  methods: {
    formatDate(date) {
      return date ? format(new Date(date), "dd MMM yyyy") : "No date";
    },
    openModal() {
        this.isModalOpen = true;
    },
    closeModal(form) {
        form.clearErrors();
        form.reset();
        this.isModalOpen = false;
    },
    handleSave(newData) {
      console.log("New Data Submitted:", newData);
      newData.post(route('api-order.store'), {
        onSuccess: () => {
            newData.reset(),
            this.closeModal();
        },
        onError: (errors) => {
            // Log the errors to the console
            console.error('Errors:', errors);

            // Pass the errors back to the modal component
            this.$refs.addForm.setErrors(errors);

            // Optionally, throw an error or handle it
            // if (errors.message) {
            // throw new Error(errors.message); // Throw a custom error
            // }

            // Display a generic error message to the user
            // alert('An error occurred. Please check the form and try again.');
        },
        });
    },
  },
};
</script>