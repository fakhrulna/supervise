<template>
    <Modal :show="isOpen" @close="close" :maxWidth="'sm'">
        <div class="flex items-center border-b p-4">
            <h3 class="text-lg font-semibold">
                Add Inventory
            </h3>
        </div>
        <div class="p-6">
            <div>
                <InputLabel
                    for="name"
                    value="Name"
                />

                <TextInput
                    id="name"
                    ref="nameInput"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                    placeholder="Name"
                />

                <InputError :message="form.errors.name" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-between">
                <div class="w-1/2 pr-2">
                    <InputLabel
                        for="price"
                        value="Price"
                    />

                    <TextInput
                        id="price"
                        ref="priceInput"
                        v-model="form.price"
                        type="number"
                        class="mt-1 block w-full"
                        placeholder="Price"
                    />

                    <InputError :message="form.errors.price" class="mt-2" />
                </div>
                
                <div class="w-1/2 pl-2">
                <!-- <div class="mt-6"> -->
                    <InputLabel
                        for="expiry"
                        value="Expiry"
                    />

                    <TextInput
                        id="expiry"
                        ref="expiryInput"
                        v-model="form.expiry_date"
                        type="date"
                        class="mt-1 block w-full"
                        placeholder="Expiry"
                    />

                    <InputError :message="form.errors.expiry_date" class="mt-2" />
                </div>
            </div>

            <div class="mt-6 flex justify-between">
                <div class="w-1/2 pr-2">
                    <InputLabel
                        for="quantity"
                        value="Quantity"
                    />

                    <TextInput
                        id="quantity"
                        ref="quantityInput"
                        v-model="form.quantity"
                        type="number"
                        class="mt-1 block w-full"
                        placeholder="Quantity"
                    />

                    <InputError :message="form.errors.quantity" class="mt-2" />
                </div>
                
                <div class="w-1/2 pl-2">
                    <InputLabel
                        for="unit"
                        value="Unit"
                    />

                    <TextInput
                        id="unit"
                        ref="unitInput"
                        v-model="form.unit"
                        type="text"
                        class="mt-1 block w-full"
                        placeholder="Unit"
                    />

                    <InputError :message="form.errors.unit" class="mt-2" />
                </div>
            </div>

            <!-- <div class="mt-6">
                <InputLabel
                    for="expiry"
                    value="Expiry"
                />

                <TextInput
                    id="expiry"
                    ref="expiryInput"
                    v-model="form.expiry_date"
                    type="date"
                    class="mt-1 block w-full"
                    placeholder="Expiry"
                />

                <InputError :message="form.errors.expiry_date" class="mt-2" />
            </div> -->

            <div class="mt-6">
                <InputLabel
                    for="store"
                    value="Store Name"
                />

                <TextInput
                    id="store"
                    ref="storeInput"
                    v-model="form.store_name"
                    type="text"
                    class="mt-1 block w-full"
                    placeholder="Store"
                />

                <InputError :message="form.errors.store_name" class="mt-2" />
            </div>

            <div class="mt-6">
                <InputLabel
                    for="date"
                    value="Stock in Date"
                />

                <TextInput
                    id="date"
                    ref="dateInput"
                    v-model="form.created_by"
                    type="date"
                    class="mt-1 block w-full"
                    placeholder="Date"
                />

                <InputError :message="form.errors.created_by" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <SecondaryButton @click="close">Cancel</SecondaryButton>
                <PrimaryButton @click="submit" class="ml-2">Save</PrimaryButton>
            </div>
        </div>
    </Modal>
</template>

<script>
import { useForm } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

export default {
    props: {
        isOpen: Boolean,
    },
    emits: ['close', 'save'],
    data() {
        return {
            form: useForm({
                name: '',
                quantity: '',
                created_by: '',
                expiry_date: '',
                price: '',
                store_name: '',
                unit: '',
            }),
        };
    },
    methods: {
        close() {
            this.$emit('close', this.form);
        },
        submit() {
            this.$emit('save', this.form);
        },
        setErrors(errors) {
            this.form.errors = errors;
        },
    },
};
</script>