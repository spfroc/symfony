<template>
    <div>
        <p>This is an example of a new {{ test }} components in VueJs {{ message }}</p>
    </div>
</template>

<script>
    export default {
        name: "example",
        data: function() {
            return {
                message: 'ddt;',
                test: 'mmp'
            };
        }
    }
</script>

<style scoped>

</style>