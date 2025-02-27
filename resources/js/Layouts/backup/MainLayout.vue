<script setup>
    import NavbarLayout from './NavbarLayout.vue';
    import SidebarLayout from './SidebarLayout.vue';
</script>

<template>
    <div>
        <div class="flex flex-col border border-gray-200 rounded-lg" data-hs-layout-splitter-vertical-group="">
            <!-- <NavbarLayout class="overflow-hidden" data-hs-layout-splitter-item="30.0" style="flex: 5 1 0px">
            </NavbarLayout> -->
            <div class="overflow-hidden" data-hs-layout-splitter-item="50.0" style="flex: 50 1 0px;">
            <div class="flex h-full" data-hs-layout-splitter-horizontal-group="">
                <SidebarLayout>
                </SidebarLayout>
                <div class="overflow-hidden h-full bg-slate-500" data-hs-layout-splitter-item="30.0" style="flex: 30 1 0px;">
                <div class="flex items-center justify-center h-full p-3 text-gray-800">Center</div>
                </div>
                <div class="hs-layout-splitter-control relative flex border-s border-gray-200">
                <span class="absolute top-1/2 start-1/2 -translate-x-1/2 -translate-y-1/2 w-4 h-6 flex justify-center items-center bg-white border border-gray-200 text-gray-400 rounded-md cursor-col-resize hover:bg-gray-100">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="9" cy="12" r="1"></circle>
                    <circle cx="9" cy="5" r="1"></circle>
                    <circle cx="9" cy="19" r="1"></circle>
                    <circle cx="15" cy="12" r="1"></circle>
                    <circle cx="15" cy="5" r="1"></circle>
                    <circle cx="15" cy="19" r="1"></circle>
                    </svg>
                </span>
                </div>
                    <!-- <div class="overflow-hidden h-full" data-hs-layout-splitter-item="21.8" style="flex: 21.8 1 0px;">
                    <div class="flex items-center justify-center h-full p-3 text-gray-800">Right</div>
                    </div> -->
            </div>
            </div>
            <div class="hs-layout-splitter-control relative flex border-t border-gray-200">
            <span class="absolute top-1/2 start-1/2 -translate-x-1/2 -translate-y-1/2 w-6 h-4 flex justify-center items-center bg-white border border-gray-200 text-gray-400 rounded-md cursor-row-resize hover:bg-gray-100">
                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="9" r="1"></circle>
                <circle cx="19" cy="9" r="1"></circle>
                <circle cx="5" cy="9" r="1"></circle>
                <circle cx="12" cy="15" r="1"></circle>
                <circle cx="19" cy="15" r="1"></circle>
                <circle cx="5" cy="15" r="1"></circle>
                </svg>
            </span>
            </div>
        </div>
    </div>
</template>