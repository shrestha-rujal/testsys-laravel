<template>
  <a href="#" class="project-element">
    <div class="relative w-8 h-8 ml-4 mr-3">
      <div class="dark-circle absolute"></div>
      <box-icon name="folder" class="absolute dark-circle-folder" color="#CBD5E0"></box-icon>
    </div>
    <div class="mr-10">Agentics App</div>
    <div class="px-4 pt-2 relative">
      <a href>
        <box-icon name="dots-horizontal-rounded" class></box-icon>
      </a>

      <!-- DROPDOWN MENU LIST START -->
      <div
        class="hidden project-dropdown-list absolute bg-white rounded flex flex-col shadow-all-sides tracking-normal justify-center py-3"
      >
        <div class="absolute" style="top:-5px; left:55px">
          <div class="arrow-up"></div>
        </div>

        <ul class="h-full flex flex-col pl-1">
          <li class="flex justiy-around items-center flex-1 cursor-pointer">
            <box-icon name="edit-alt" type="solid" class="icon18 mx-3" color="#718096"></box-icon>
            <span class="text-gray-600 text-sm">Edit</span>
          </li>
          <li class="flex justiy-around items-center flex-1 cursor-pointer">
            <box-icon name="trash" type="solid" class="icon18 mx-3" color="#718096"></box-icon>
            <span class="text-gray-600 text-sm">Delete</span>
          </li>
          <li class="flex justiy-around items-center flex-1 cursor-pointer">
            <box-icon name="user-plus" type="solid" class="icon18 mx-3" color="#718096"></box-icon>
            <span class="text-gray-600 text-sm">Invite</span>
          </li>
        </ul>
      </div>
      <!-- DROPDOWN MENU LIST ENDING -->
    </div>
  </a>
</template>


<script>
export default {
  name: "project-element",
  data() {
    return {};
  }
};
</script>

<style lang="stylus" scoped></style>