<template>
    <Modal :show="isOpen" @close="close" :maxWidth="'lg'">
        <div class="flex items-center border-b p-4">
            <h3 class="text-lg font-semibold">
                Add Order
            </h3>
        </div>
        <div class="p-4">
            <div class="mt-4">
                <InputLabel
                    for="menu"
                    value="Order Menu"
                />

                <TextInput
                    id="menu"
                    ref="menuInput"
                    v-model="form.menu_id"
                    type="number"
                    class="mt-1 block w-full"
                    placeholder="Order Menu"
                />

                <InputError :message="form.errors.menu_id" class="mt-2" />
            </div>

            <div class="mt-4 flex justify-between">
                <div class="w-1/2 pr-2">
                    <InputLabel
                        for="name"
                        value="Customer Name"
                    />

                    <TextInput
                        id="name"
                        ref="nameInput"
                        v-model="form.customer_name"
                        type="text"
                        class="mt-1 block w-full"
                        placeholder="Name"
                    />

                    <InputError :message="form.errors.customer_name" class="mt-2" />
                </div>

                <div class="w-1/2 pl-2">
                    <InputLabel
                        for="phone"
                        value="Customer Phone"
                    />

                    <TextInput
                        id="phone"
                        ref="phoneInput"
                        v-model="form.customer_phone"
                        type="text"
                        class="mt-1 block w-full"
                        placeholder="Phone"
                    />

                    <InputError :message="form.errors.customer_phone" class="mt-2" />
                </div>
            </div>

            <div class="mt-4">
                <InputLabel
                    for="address"
                    value="Customer Address"
                />

                <TextInput
                    id="address"
                    ref="addressInput"
                    v-model="form.customer_address"
                    type="text"
                    class="mt-1 block w-full"
                    placeholder="Address"
                />

                <InputError :message="form.errors.customer_address" class="mt-2" />
            </div>

            <div class="mt-4 flex justify-between">
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
                <!-- <div class="mt-6"> -->
                    <InputLabel
                        for="status"
                        value="Status"
                    />

                    <TextInput
                        id="status"
                        ref="statusInput"
                        v-model="form.status"
                        type="date"
                        class="mt-1 block w-full"
                        placeholder="Status"
                    />

                    <InputError :message="form.errors.status" class="mt-2" />
                </div>
            </div>

            <div class="mt-6 p-4 border-t border-b">
                <h3 class="text-lg font-semibold pb-2">
                    Payment Details
                </h3>

                <div class="mt-2 flex justify-between">
                    <div class="w-1/2 pr-2">
                        <InputLabel
                            for="price"
                            value="Total price"
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
                        <InputLabel
                            for="status"
                            value="Status"
                        />

                        <TextInput
                            id="status"
                            ref="statusInput"
                            v-model="form.payment_status"
                            type="text"
                            class="mt-1 block w-full"
                            placeholder="Status"
                        />

                        <InputError :message="form.errors.payment_status" class="mt-2" />
                    </div>
                </div>
                <div class="mt-4 w-1/2 pr-2">
                    <InputLabel
                        for="paymentMethod"
                        value="Paid By"
                    />

                    <TextInput
                        id="paymentMethod"
                        ref="paymentMethodInput"
                        v-model="form.payment_method"
                        type="text"
                        class="mt-1 block w-full"
                        placeholder="Payment Method"
                    />

                    <InputError :message="form.errors.payment_method" class="mt-2" />
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
                    for="notes"
                    value="Notes"
                />

                <TextBox
                    id="notes"
                    ref="notesInput"
                    v-model="form.notes"
                    type="text"
                    class="mt-1 block w-full"
                    placeholder="Notes"
                />

                <InputError :message="form.errors.notes" class="mt-2" />
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
                menu_id: '',
                customer_name: '',
                customer_address: '',
                customer_phone: '',
                quantity: '',
                status: '',
                payment_method: '',
                price: '',
                payment_status: '',
                notes: '',
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