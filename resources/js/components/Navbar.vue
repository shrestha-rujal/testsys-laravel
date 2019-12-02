<template>
    <div class="navbar container mx-auto">
        <div class="flex justify-between items-center h-full">

            <img class="w-8 h-8" src="../assets/logo-no-name.svg">

            <div class="bg-gray-100 search-bar flex items-center rounded-sm">
                <box-icon name="search" class="absolute icon24 ml-4 bg-transparent" color="#CBD5E0"></box-icon>
                <input 
                    type="text"
                    name="search-input"
                    class="pl-12 bg-transparent placeholder-gray-400 flex-1 h-full text-sm focus:bg-white"
                    placeholder="Search / Jump To Section"
                >
            </div>

            <div class="flex pt-2 items-center justify-between w-20">
                <a href="#" class="standard-icon bg-red-300 rounded-full bg-cover" style="background-image: url(https://scontent.fktm1-1.fna.fbcdn.net/v/t1.0-1/p112x112/76713937_103405037799742_2125605724544303104_o.jpg?_nc_cat=105&_nc_ohc=MSkPRde5eyoAQkhHOInf_2XwBHFpq8aYil4mhKUyj-oAGhgQhktEgQ8kg&_nc_ht=scontent.fktm1-1.fna&oh=e7172ab24072a5754775eda5e4de01f0&oe=5E7DA690)">
                    
                </a>
                <a href="#">
                    <box-icon name='dots-horizontal-rounded' class=""></box-icon>
                </a>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: 'Navbar',
    data() {
        return {

        };
    }
}
</script>

<style lang="stylus" scoped>

</style>