<template>
    <div class="bg-gray-100">
        <div class="container mx-auto">
            <div class="flex items-center justify-between" style="height:101px">
                <div><h1 class="text-2xl" style="font-weight:500">My Projects</h1></div>
                <div>
                    <ul class="flex items-center">
                        <li><box-icon name='grid-alt' class="square-40 p-2 border border-gray-400 mr-2 rounded" ></box-icon></li>
                        <li><box-icon name='list-ul' class="square-40 p-2 border border-gray-400 mr-2 rounded" color=#CBD5E0 ></box-icon></li>
                        <li><button class="new-project-button font-bold rounded text-white text-sm">New Project</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Sidebar',
    data() {
        return {

        };
    }
}
</script>

<style lang="stylus" scoped>

</style>