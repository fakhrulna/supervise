<template>
    <div class="w-full">
    <!-- Status Card -->
    <div class="bg-white border rounded-lg shadow-sm">
      <!-- Header -->
      <div class="flex items-center border-b p-4">
        <h3 class="text-lg font-semibold">
          Create team
        </h3>
      </div>
      <!-- End Header -->
  
      <div class="p-4">
        <div>
          <label for="hs-pro-dactmt" class="block text-sm font-medium">
            Title
          </label>
          <input id="hs-pro-dactmt" type="text" class="block w-full rounded-md border p-2 focus:ring-2 focus:ring-blue-500" placeholder="Team title">
        </div>
  
        <div class="mt-4">
          <label for="dactmi" class="block text-sm font-medium">
            Industry
          </label>
          <input id="dactmi" type="text" class="block w-full rounded-md border p-2 focus:ring-2 focus:ring-blue-500" placeholder="Enter name">
        </div>
  
        <div class="mt-4">
          <label for="dactmd" class="block text-sm font-medium">
            Description
          </label>
          <textarea id="dactmd" class="block w-full rounded-md border p-2 focus:ring-2 focus:ring-blue-500" rows="3" placeholder="Tell us a little bit about team"></textarea>
        </div>
  
        <div class="mt-4">
          <label for="dactmm" class="block text-sm font-medium">
            Members
          </label>
          <div class="flex items-center space-x-2">
            <input id="dactmm" type="text" class="block w-full rounded-md border p-2 focus:ring-2 focus:ring-blue-500" placeholder="Enter name">
            <button type="button" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
              Add
            </button>
          </div>
        </div>
  
        <div class="mt-4">
          <label class="block text-sm font-medium">
            Suggested members
          </label>
          <div class="flex space-x-2 mt-2">
            <!-- User 1 -->
            <label for="hs-pro-dactcach1" class="relative cursor-pointer">
              <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?auto=format&fit=facearea&facepad=2.5&w=320&h=320&q=80" alt="Avatar">
              <input type="checkbox" id="hs-pro-dactcach1" class="absolute inset-0 opacity-0 cursor-pointer">
            </label>
            <!-- User 2 -->
            <label for="hs-pro-dactcach2" class="relative cursor-pointer">
              <span class="w-10 h-10 flex items-center justify-center rounded-full bg-gray-300 text-lg font-medium text-white">L</span>
              <input type="checkbox" id="hs-pro-dactcach2" class="absolute inset-0 opacity-0 cursor-pointer">
            </label>
            <!-- User 3 -->
            <label for="hs-pro-dactcach3" class="relative cursor-pointer">
              <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1679412330254-90cb240038c5?auto=format&fit=facearea&facepad=2.5&w=320&h=320&q=80" alt="Avatar">
              <input type="checkbox" id="hs-pro-dactcach3" class="absolute inset-0 opacity-0 cursor-pointer">
            </label>
          </div>
        </div>
  
        <div class="mt-4">
          <label class="block text-sm font-medium">
            Cover
          </label>
          <div class="border-2 border-dashed rounded-lg p-4 text-center">
            <p class="text-gray-500">Drag and drop or click to upload</p>
          </div>
        </div>
  
        <div class="mt-6 flex justify-end">
          <button @click="closeModal" type="button" class="px-4 py-2 bg-gray-300 text-black rounded-md hover:bg-gray-400">
            Cancel
          </button>
          <button @click="submitData" type="button" class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
            Create team
          </button>
        </div>
      </div>
    </div>
  </div>
</template>