<template>
    <div class="loading" :class="{ 'loading-active': $store.state.loading.visible }">
        <div class="loading-content">
            Loading...
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Loading',
    };
</script>
