<template>
  <div class="tracking-wider h-screen">
    <!-- CREATE NEW PROJECT MODEL START -->
    <!-- DARK BACKGROUND -->
    <div class="absolute w-full h-full bg-gray-900 z-50 opacity-75 hidden">
      <div class="create-project-modal rounded absolute border bg-white">
        <div class="w-full h-full flex flex-col">
          <ul class="flex justify-between items-center border-b" style="height:49px">
            <li class="pl-5 font-semibold">New Project</li>
            <li class="p-2 pr-4 mt-2">
              <box-icon type="solid" name="x-circle" color="#CBD5E0" class="icon24"></box-icon>
            </li>
          </ul>
          <ul class="flex-1 px-8 pt-6 flex flex-col">
            <li class="flex flex-col mb-5">
              <label for="project-title" class="text-sm tracking-tight mb-1">Project Title</label>
              <input
                type="text"
                name="project-title"
                class="rounded py-3 px-3 border text-sm"
                placeholder="Type here ..."
              />
            </li>
            <li class="flex flex-col mb-1 flex-1 flex">
              <label for="project-description" class="text-sm tracking-tight mb-1">Description</label>
              <textarea
                name="project-description"
                class="description-input rounded border flex-1 text-sm px-3 py-3 text-gray-500"
                placeholder="Type here ..."
              ></textarea>
            </li>
          </ul>
          <button
            class="rounded bg-teal-500 hover:bg-teal-600 mx-6 mb-10 mt-5 py-2 font-semibold text-white tracking-wide"
            style="height:40px"
          >Create New</button>
        </div>
      </div>
    </div>
    <!-- CREATE NEW PROJECT MODEL ENDING -->

    <!-- CREATE NEW TESTCASE BOX MODEL START -->
    <!-- DARK BACKGROUND -->
    <div class="absolute w-full h-full bg-gray-900 z-50 opacity-75 hidden">
      <div class="create-testcase-modal rounded absolute border bg-white">
        <div class="w-full h-full flex flex-col">
          <ul class="flex justify-between items-center border-b" style="height:49px">
            <li class="pl-5 font-semibold flex items-center">
              <box-icon name="right-arrow-alt" rotate="180" color="black" class="mr-2 icon24"></box-icon>Create New Test Box
            </li>
            <li class="p-2 pr-4 mt-2">
              <box-icon type="solid" name="x-circle" color="#CBD5E0" class="icon24"></box-icon>
            </li>
          </ul>
          <ul class="flex-1 px-8 pt-6 flex flex-col">
            <li class="flex flex-col mb-5">
              <label for="project-title" class="text-sm tracking-tight mb-1">Test Box Name</label>
              <input
                type="text"
                name="project-title"
                class="rounded py-3 px-3 border text-sm"
                placeholder="Type here ..."
              />
            </li>
            <li class="flex flex-col mb-3 flex-1 flex">
              <label for="project-description" class="text-sm tracking-tight mb-1">Description</label>
              <textarea
                name="project-description"
                class="description-input rounded border flex-1 text-sm pl-3 pt-3"
                placeholder="Type here ..."
              ></textarea>
            </li>
            <li class="flex flex-col flex">
              <label for="project-description" class="text-sm tracking-tight mb-1">Assign Module</label>
              <!-- <input type="text" name="project-description" class="description-input rounded border flex-1 text-sm pl-3 " placeholder="Select One"> -->
              <button
                class="flex items-center justify-between border rounded pl-3"
                style="height:40px"
              >
                <span class="text-sm">Select One</span>
                <box-icon name="chevron-right" rotate="90" class="icon24 m-2" color="gray"></box-icon>
              </button>

              <!-- DROPDOWN MENU LIST STARTING -->
              <!-- <div class="absolute">
								<input type="text" placeholder="Search" style="height:30px">
								<div class="">Items not found</div>
              </div>-->
              <!-- DROPDOWN MENU LIST ENDING -->
            </li>
          </ul>
          <div class="rounded flex justify-center bg-teal-500 mx-6 mb-10 mt-5" style="height:40px">
            <button class="py-2 font-semibold text-white tracking-wide">Save & Create</button>
          </div>
        </div>
      </div>
    </div>
    <!-- CREATE NEW TESTCASE BOX MODEL ENDING -->

    <!-- INVITE MEMBERS BOX MODEL START -->
    <!-- DARK BACKGROUND -->
    <div class="absolute w-full h-full bg-gray-900 z-50 opacity-75 hidden">
      <div class="invite-members-modal pb-8 rounded absolute bg-white flex flex-col">
        <!-- <div class="w-full h-full flex flex-col"> -->

        <!-- MODAL HEADER START -->
        <div class="flex justify-between items-center border-b px-1" style="height:49px">
          <div class="pl-5 font-semibold flex items-center">Invite Members</div>
          <div class="p-2 pr-4 mt-2">
            <box-icon type="solid" name="x-circle" color="#CBD5E0" class="icon24"></box-icon>
          </div>
        </div>
        <!-- MODAL HEADER ENDING -->

        <!-- MODAL BODY START -->
        <ul class="flex-1 px-8 pt-6 flex flex-col">
          <li class="flex flex-col mb-5">
            <label for="project-title" class="text-xs tracking-tight mb-1">Email Address</label>
            <div class="flex" style="height:40px">
              <input
                type="text"
                name="project-title"
                class="flex-1 rounded-sm py-3 px-3 focus:border focus:bg-white text-sm font-medium bg-gray-200"
                placeholder="Type here ..."
              />
              <!-- <span class="ml-3 focus:bg-teal-600 bg-gray-400 flex justify-center items-center rounded" style="width:40px"> -->
              <span
                class="ml-3 bg-teal-600 flex justify-center items-center rounded"
                style="width:40px"
              >
                <box-icon type="solid" name="user-plus" color="white" class="icon24"></box-icon>
                <!-- <box-icon type='solid' name='user-plus' color="#718096" class="icon24"></box-icon> -->
              </span>
            </div>
          </li>

          <li class="flex flex-col flex">
            <label
              for="project-description"
              class="text-xs tracking-widest font-semibold uppercase mb-1"
            >members</label>

            <!-- MEMBERS LIST BEGINNING -->
            <div>
              <!-- MEMBERS START -->
              <div class="flex py-2">
                <div
                  class="square-32 bg-cover rounded-full mx-1"
                  style="background-image: url(https://scontent.fktm1-1.fna.fbcdn.net/v/t1.0-1/p112x112/76713937_103405037799742_2125605724544303104_o.jpg?_nc_cat=105&_nc_ohc=MSkPRde5eyoAQkhHOInf_2XwBHFpq8aYil4mhKUyj-oAGhgQhktEgQ8kg&_nc_ht=scontent.fktm1-1.fna&oh=e7172ab24072a5754775eda5e4de01f0&oe=5E7DA690)"
                ></div>
                <div class="pl-1 flex-1 leading-tight flex flex-col justify-center">
                  <div class="tracking-normal text-xs font-medium">Rujal Shrestha</div>
                  <div class="tracking-normal text-xs text-gray-600">rujal.shrestha@introcept.co</div>
                </div>
                <div class="flex items-center">
                  <span class="text-xs tracking-wide">Owner</span>
                  <box-icon name="chevron-down" class="icon24" color="#738297"></box-icon>

                  <!-- DROPDOWN MENU LIST START -->
                  <div class="relative hidden">
                    <div
                      class="members-dropdown-list absolute bg-white rounded flex flex-col shadow-all-sides tracking-normal justify-center py-3 px-3"
                    >
                      <div class="absolute" style="top:-5px; left:55px">
                        <div class="arrow-up"></div>
                      </div>

                      <ul class="h-full flex flex-col pl-1">
                        <li class="flex items-center flex-1 cursor-pointer py-2">
                          <span class="text-teal-600 flex-1 font-semibold text-sm">Read</span>
                          <span>
                            <box-icon name="check" class="icon24" color="#38B2AC"></box-icon>
                          </span>
                        </li>
                        <li class="flex justiy-around items-center flex-1 cursor-pointer py-2">
                          <span class="text-gray-700 text-sm">Admin</span>
                        </li>
                        <hr class="border-t border-gray-500" />
                        <li class="flex justiy-around items-center flex-1 cursor-pointer py-2">
                          <span class="text-gray-700 text-sm">Cancel</span>
                        </li>
                        <li class="flex justiy-around items-center flex-1 cursor-pointer py-2">
                          <span class="text-gray-700 text-sm">Resend</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- DROPDOWN MENU LIST ENDING -->
                </div>
              </div>
              <!-- MEMBERS START -->

              <!-- MEMBERS START -->
              <div class="flex py-2">
                <div
                  class="bg-red-300 square-32 bg-cover rounded-full mx-1"
                  style="background-image:url(http://pmcgla.com/wp-content/uploads/2018/08/Professional-Headshots-Photography-Fort-Lauderdale-124.jpg)"
                ></div>
                <div class="pl-1 flex-1 leading-tight flex flex-col justify-center">
                  <div class="tracking-normal text-xs font-medium">Jane Walkova</div>
                  <div class="tracking-normal text-xs text-gray-600">jane.walkova@introcept.co</div>
                </div>
                <div class="flex items-center">
                  <span class="text-xs tracking-wide">Read</span>
                  <box-icon name="chevron-down" class="icon24" color="#738297"></box-icon>
                </div>
              </div>
              <!-- MEMBERS START -->
            </div>
            <!-- MEMBERS LIST ENDING -->
          </li>
        </ul>
        <!-- MODAL BODY ENDING -->

        <!-- </div> -->
      </div>
    </div>
    <!-- INVITE MEMBERS BOX MODEL ENDING -->

    <!-- NAVBAR STARTING -->
    <Navbar />
    <!-- NAVBAR ENDING -->

    <!-- HEADER STARTING -->
    <Header />
    <!-- HEADER ENDING -->

    <!-- BODY STARTING -->
    <div class="flex container mx-auto h-full">
      <!-- SIDEBAR STARTING -->
      <Sidebar />
      <!-- SIDEBAR ENDING -->

      <!-- PROJECT AREA STARTING -->
      <div class="flex-1 relative pl-5">
        <!-- EMPTY PROJECT ICON START -->
        <div class="flex flex-col items-center mt-48 hidden">
          <img
            src="../assets/no-item.svg"
            class="folder-icon mb-3"
            style="width:121px; height:94px"
          />
          <div class="flex flex-col items-center leading-none">
            <div>
              <span class="project-empty-text">No projects have been added yet</span>
            </div>
            <div>
              <span class="project-empty-text">Create project by clicking new project</span>
            </div>
          </div>
        </div>
        <!-- EMPTY PROJECT ICON ENDING -->

        <!-- PROJECT LISTING START -->
        <div class="listing h-screen flex flex-col relative">
          <div class="listing-title py-6">
            <span class="font-extrabold tracking-wider pb-5">All Projects</span>
          </div>

          <!-- PROJECTS LISTING AREA START -->
          <div class="listing-area flex flex-wrap text-gray-800 leading-tight">
            <!-- PROJECT ELEMENT -->
            <Projectelement />
            <Projectelement />
            <Projectelement />
            <Projectelement />
            <Projectelement />
            <Projectelement />
            <Projectelement />
            <Projectelement />
          </div>
          <!-- PROJECTS LISTING AREA ENDING -->
        </div>
        <!-- PROJECT LISTING ENDING -->
      </div>
      <!-- PROJECT AREA ENDING -->
    </div>
    <!-- BODY ENDING -->
  </div>
</template>

<script>
import Navbar from "./Navbar";
import Header from "./Header";
import Sidebar from "./Sidebar";
import Projectelement from "./project-element.vue";

export default {
  name: "Dashboard",
  components: {
    Navbar,
    Header,
    Sidebar,
    Projectelement
  },
  data() {
    return {};
  }
};
</script>

<style scoped>
</style>