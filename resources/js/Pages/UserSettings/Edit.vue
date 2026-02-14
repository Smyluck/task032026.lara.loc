<script setup>
import { useForm } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";

const props = defineProps({
    user: Object,
    settings: Array,
});

const form = useForm({
    settings: props.settings.reduce((acc, setting) => {
        acc[setting.id] = setting.pivot.value;
        return acc;
    }, {}),
});

const submit = () => {
    form.put(route("user.settings.update", props.user.id), {
        onSuccess: () => {},
    });
};
</script>

<template>
    <AuthenticatedLayout>
        <div>
            <form @submit.prevent="submit">
                <div v-for="setting in settings" :key="setting.id">
                    <h3
                        class="text-custom-gray-252733 font-semibold text-16px leading-20px tracking-0.2px mb-15px"
                    >
                        {{ setting.name }}
                    </h3>

                    <div>
                        <InputLabel
                            for="setting.id"
                            :value="setting.description"
                            class="text-custom-gray-6C757D font-semibold leading-20px tracking-0.2px mb-9px"
                        />

                        <TextInput
                            id="setting.id"
                            type="text"
                            class="block w-480px h-24px text-custom-gray-788397 border-custom-gray-DCE4EA border py-6px px-14px"
                            v-model="form.settings[setting.id]"
                            required
                        />

                        <InputError
                            class="mt-2"
                            :message="form.errors[`settings.${setting.id}`]"
                        />
                    </div>
                </div>

                <button
                    class="mt-18px bg-custom-blue-339AF0 text-custom-white-ffffff px-16px py-5px rounded-6px font-serif font-semibold"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Сохранить
                </button>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
