<script setup>
import { onMounted, ref, defineProps, defineExpose } from 'vue';


const props = defineProps({
    modelValue: {
        type: String,
        required: true,
    },
    placeholder: {
        type: String,
        default: '',
    },
    autofocus: {
        type: Boolean,
        default: false,
    },
});

const emit = defineEmits(['update:modelValue']);
const input = ref(null);

const updateValue = (event) => {
    emit('update:modelValue', event.target.value);
};

onMounted(() => {
    if (props.autofocus) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        class="rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
        :value="modelValue"
        @input="updateValue"
        :placeholder="placeholder"
        ref="input"
    />
</template>