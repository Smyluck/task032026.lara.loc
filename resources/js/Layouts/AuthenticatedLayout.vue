<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
import NavigationLayout from "@/Components/NavigationLayout.vue";
import Flash from "@/Components/Flash.vue";
const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="flex h-screen">
        <!-- Боковая панель -->
        <div class="w-96 bg-custom-gray-F6F8FA shadow-md p-10 pl-16px pr-15px">
            <ApplicationLogo class="pl-[1.16rem] mb-[1.16rem]" />

            <Link
                :href="route('profile.edit')"
                class="block leading-20px text-16px text-custom-gray-6C757D font-bold tracking-[2px] mb-[28px]"
            >
                {{ $page.props.auth.user.name }}
            </Link>

            <NavigationLayout />
        </div>

        <!-- Основной контент -->
        <div class="flex-1 overflow-auto">
            <div class="h-75px border-b pl-35px pr-48px flex justify-end">
                <Link :href="route('logout')" method="post">
                    <svg
                        width="44"
                        height="44"
                        viewBox="0 0 44 44"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect width="44" height="44" fill="white" />
                        <path
                            d="M15.2 29.7778H24V32H15.2C13.99 32 13 31 13 29.7778V14.2222C13 13 13.99 12 15.2 12H24V14.2222H15.2V29.7778Z"
                            fill="#909AB4"
                        />
                        <path
                            d="M26.1 17L25.113 18.0071L28.319 21.2857H21V22.7143H28.319L25.106 25.9929L26.1 27L31 22L26.1 17Z"
                            fill="#909AB4"
                            stroke="#909AB4"
                        />
                    </svg>
                </Link>
            </div>
            <div class="pl-35px pr-48px pt-16px pb-16px">
                <Flash />
                <slot />
            </div>
        </div>
    </div>
</template>
