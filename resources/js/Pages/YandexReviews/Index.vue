<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { ref, onMounted } from "vue";

const props = defineProps({
    url: String,
    urlComments: String,
});
</script>

<template>
    <AuthenticatedLayout>
        <div
            style="
                width: 1049px;
                height: 1000px;
                overflow: hidden;
                position: relative;
            "
        >
            <iframe
                style="
                    width: 100%;
                    height: 100%;
                    border: 1px solid #e6e6e6;
                    border-radius: 8px;
                    box-sizing: border-box;
                "
                :src="$props.urlComments"
            ></iframe
            ><a
                :href="$props.url"
                target="_blank"
                style="
                    box-sizing: border-box;
                    text-decoration: none;
                    color: #b3b3b3;
                    font-size: 10px;
                    font-family:
                        YS Text,
                        sans-serif;
                    padding: 0 20px;
                    position: absolute;
                    bottom: 8px;
                    width: 100%;
                    text-align: center;
                    left: 0;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: block;
                    max-height: 14px;
                    white-space: nowrap;
                    padding: 0 16px;
                    box-sizing: border-box;
                "
                >Яндекс Карты</a
            >
        </div>
    </AuthenticatedLayout>
</template>
