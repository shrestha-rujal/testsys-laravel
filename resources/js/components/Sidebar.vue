<template>
    <div class="border-r pr-8">
        <div>
            <div class="my-8"><span class="filter-text uppercase font-semibold">filter by</span></div>
            <div>
                <ul>
                    <li>
                        <button class="filter-button rounded-sm justify-start flex py-1 mb-1 px-3 bg-teal-100 items-center">
                            <div><box-icon name='layer' type='solid' color="#38B2AC" class="mr-3 pt-1" ></box-icon></div>
                            <span class="text-sm text-teal-500 tracking-wide">All Projects</span>
                        </button>
                    </li>
                    <li>
                        <button class="filter-button rounded-sm justify-start flex py-1 mb-1 px-3 items-center hover:bg-gray-100">
                            <div><box-icon name='group' type='solid' color="#718096" class="mr-3 pt-1" ></box-icon></div>
                            <span class="text-sm text-gray-600 tracking-wide">Shared Projects</span>
                        </button>
                    </li>
                    <li>
                        <button class="filter-button rounded-sm justify-start flex py-1 mb-1 px-3 items-center hover:bg-gray-100">
                            <div><box-icon name='trash' type='solid' color="#718096" class="mr-3 pt-1" ></box-icon></div>
                            <span class="text-sm text-gray-600 tracking-wide">Deleted Projects	</span>
                        </button>
                    </li>
                </ul>
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