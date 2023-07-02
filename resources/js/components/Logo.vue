<script setup></script>
<template>
    <div class="logokira mx-1  overflow-hidden">
        <a class="flex flex-row items-center" href="/">
            <img
                class="h-20 w-20 fill-current text-gray-500"
                src="/images/logo/logo.png"
                alt=""
            />
            <h1>PHARMA@237</h1>
        </a>
    </div>
</template>
<style>
.logokira {
    font-size: 25px;
    color: #06a749;
    text-decoration: none;
    font-weight: 600;
}

.logokira::before {
    position: relative;
    width: 100%;
    height: 100%;
    animation-direction: normal;
    animation-delay: 0.3s;
    background: #fff;
}
</style>
