<template>
    <Modal :show="isOpen" @close="close" :maxWidth="'lg'">
        <div>
            <div class="flex items-center border-b p-4">
                <h3 class="text-lg font-semibold">
                    {{ step == 1 ? 'Add Menu' : 'Add Ingredients' }}
                </h3>
            </div>
            <div v-if="step === 1" class="p-4">
                <div class="mt-4 flex justify-between">
                    <div class="w-2/3 pr-2">
                        <InputLabel
                            for="name"
                            value="Menu Name"
                        />

                        <TextInput
                            id="name"
                            ref="nameInput"
                            v-model="menuForm.name"
                            type="text"
                            class="mt-1 block w-full"
                            placeholder="Name"
                        />

                        <InputError :message="menuForm.errors.name?.[0]" class="mt-2" />
                    </div>

                    <div class="w-1/3 pl-2">
                        <InputLabel
                            for="price"
                            value="Price"
                        />

                        <TextInput
                            id="price"
                            ref="priceInput"
                            v-model="menuForm.price"
                            type="text"
                            class="mt-1 block w-full"
                            placeholder="Price"
                        />

                        <InputError :message="menuForm.errors.price?.[0]" class="mt-2" />
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="close">Cancel</SecondaryButton>
                    <PrimaryButton @click="addMenu" :disabled="menuForm.processing" class="ml-2">Save</PrimaryButton>
                </div>
            </div>
            <div v-if="step === 2" class="p-4">
                <div class="mt-4 flex justify-between">
                    <div class="w-3/5 pr-2">
                        <InputLabel
                            for="name"
                            value="Ingredient Name"
                        />

                        <TextInput
                            id="name"
                            ref="nameInput"
                            v-model="ingredientsForm.name"
                            type="text"
                            class="mt-1 block w-full"
                            placeholder="Name"
                        />

                        <InputError :message="ingredientsForm.errors.name?.[0]" class="mt-2" />
                    </div>

                    <div class="w-1/5 pl-2">
                        <InputLabel
                            for="quantity"
                            value="Quantity"
                        />

                        <TextInput
                            id="quantity"
                            ref="priceInput"
                            v-model="ingredientsForm.quantity"
                            type="text"
                            class="mt-1 block w-full"
                            placeholder="Quantity"
                        />

                        <InputError :message="ingredientsForm.errors.quantity?.[0]" class="mt-2" />
                    </div>

                    <div class="w-1/6">
                        <InputLabel
                            for="unit"
                            value="Unit"
                        />

                        <TextInput
                            id="unit"
                            ref="priceInput"
                            v-model="ingredientsForm.unit"
                            type="text"
                            class="mt-1 block w-full"
                            placeholder="Unit"
                        />

                        <InputError :message="ingredientsForm.errors.unit?.[0]" class="mt-2" />
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="back">Back</SecondaryButton>
                    <PrimaryButton @click="addIngredients" :disabled="ingredientsForm.processing" class="ml-2">Save</PrimaryButton>
                </div>
            </div>
        </div>
    </Modal>
</template>

<script>
import { useForm } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import axios from 'axios';

export default {
    props: {
        isOpen: Boolean,
    },
    emits: ['close', 'save'],
    data() {
        return {
            step: 1,
            menuForm: useForm({
                'name': '',
                'price': '',
            }),
            ingredientsForm: useForm({
                'name': '',
                'unit': '',
                'quantity': '',
                'menu_id': '',
                'menu_id2': '',
            }),
            menuID: null,
        };
    },
    methods: {
        close() {
            this.$emit('close', this.menuForm);
        },
        submit() {
            this.$emit('save', this.menuForm);
        },
        setErrors(errors) {
            this.menuForm.errors = errors;
        },
        async addMenu() {
            try {
                const response = await axios.post(route('api-menu.store'), this.menuForm); // Adjust the route
                this.menuResponse = response.data.menus;
                this.menuID = this.menuResponse.id;
                this.step = 2;
            }  catch (error) {
                this.menuForm.errors = error.response.data.errors || {};
            }
        },
        async addIngredients() {
            this.ingredientsForm.menu_id = 101;
                this.ingredientsForm.menu_id2 = 100;
            try {
                const response = await axios.post(route('api-ingredient.store'), this.ingredientsForm); // Adjust the route
                this.ingredientResponse = response.data.menus;
                console.log(this.ingredientResponse);
            }  catch (error) {
                this.ingredientsForm.errors = error.response.data.errors || {};
                if (this.ingredientsForm.errors.menu_id){
                    alert(this.ingredientsForm.errors.menu_id?.[0]);
                }
            }
            // try{
            //     this.ingredientsForm.menu_id = 101;
            //     this.ingredientsForm.menu_id2 = 100;
            //     const response = await this.ingredientsForm.post(route('api-ingredient.store'), {
            //         preserveScroll: true,
            //         onSuccess: () => {
            //             alert('Form submitted successfully!');
            //             // this.$emit('close'); // Close the modal
            //             // successMessage.value = "Ingredient added successfully!";
            //             // form.reset();
            //             // errors.value = {}; // Clear errors
            //         },
            //     });
            // } catch (error) {
            //     console.log(error.response.data.errors);
            //     this.ingredientsForm.errors = error.response.data.errors || {};
            // }
        },
        back() {
            this.step = 1;
        },
    },
};
</script>