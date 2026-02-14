<script setup>
import { computed } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});

const classes = computed(() =>
    props.active
        ? "block py-4px px-50px bg-white rounded-12px shadow-custom"
        : "block py-4px px-50px"
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
