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
                class="description-input resize-none rounded border flex-1 text-sm pl-3 pt-2"
                placeholder="Type here ..."
              ></textarea>
            </li>
          </ul>
          <div class="rounded flex justify-center bg-teal-500 mx-6 mb-10 mt-5" style="height:40px">
            <button class="py-2 font-semibold text-white tracking-wide">Create New</button>
          </div>
        </div>
      </div>
    </div>
    <!-- CREATE NEW PROJECT MODEL ENDING -->

    <!-- CREATE NEW TESTCASE BOX MODEL START -->
    <!-- DARK BACKGROUND -->
    <div class="absolute w-full h-full bg-gray-900 z-50 opacity-75 hidden">
      <div class="create-testcase-modal rounded absolute border bg-white">
        <div class="w-full h-full flex flex-col">
          <ul class="pt-1 flex justify-between items-center border-b">
            <li class="pl-5 font-semibold flex items-center">
              <box-icon name="right-arrow-alt" rotate="180" color="black" class="mr-2 icon24"></box-icon>
              <span>Create New Test Box</span>
            </li>
            <li class="p-1 pr-4 mt-2">
              <box-icon type="solid" name="x-circle" color="#CBD5E0" class="icon24"></box-icon>
            </li>
          </ul>
          <ul class="flex-1 px-8 pt-6 flex flex-col">
            <li class="flex flex-col mb-5">
              <label for="project-title" class="text-xs tracking-tight mb-1">Test Box Name</label>
              <input
                type="text"
                name="project-title"
                class="rounded py-3 px-3 border text-sm"
                placeholder="Type here ..."
              />
            </li>
            <li class="flex flex-col mb-3 flex-1 flex">
              <label for="project-description" class="text-xs tracking-tight mb-1">Description</label>
              <textarea
                name="project-description"
                rows="4"
                class="description-input rounded resize-none border flex-1 text-sm pl-3 pt-3"
                placeholder="Type here ..."
              ></textarea>
            </li>
            <li class="flex flex-col flex mb-3">
              <label class="text-xs tracking-tight mb-1">Features</label>
              <!-- <button class="flex items-center justify-between border rounded pl-3" style="height:40px">
								<span class="text-sm">Select One</span>
								<box-icon name='chevron-right' rotate='90' class="icon24 m-2" color="gray"></box-icon>
              </button>-->

              <!-- DROPDOWN MENU LIST STARTING -->

              <!-- <div class="border border-gray-400 rounded-sm shadow-all-sides-light flex flex-col">
								<input type="text" placeholder="Search .." class="border border-gray-300 m-2 pl-4 text-xs rounded-sm" style="height:30px">
								<div class="p-2 pl-3 flex tracking-wide flex-col">
									<span class="text-xs text-gray-600 py-1 mb-1">Items not found</span>
								</div>
              </div>-->

              <div class="relative">
                <select
                  name="product-description"
                  class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-600 py-1 px-4 pr-8 rounded-sm text-sm leading-tight focus:outline-none focus:bg-white focus:border-gray-300"
                  style="height: 40px"
                >
                  <option>Module 1</option>
                  <option>Module 2</option>
                  <option>Module 3</option>
                </select>
                <div
                  class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                >
                  <svg
                    class="fill-current h-4 w-4"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                    />
                  </svg>
                </div>
              </div>

              <!-- DROPDOWN MENU LIST ENDING -->
            </li>
            <li class="flex flex-col flex">
              <label class="text-xs tracking-tight mb-1">Assign Module</label>
              <!-- <button class="flex items-center justify-between border rounded pl-3" style="height:40px">
								<span class="text-sm">Select One</span>
								<box-icon name='chevron-right' rotate='90' class="icon24 m-2" color="gray"></box-icon>
              </button>-->

              <!-- DROPDOWN MENU LIST STARTING -->

              <!-- <div class="border border-gray-400 rounded-sm shadow-all-sides-light flex flex-col">
								<input type="text" placeholder="Search .." class="border border-gray-300 m-2 pl-4 text-xs rounded-sm" style="height:30px">
								<div class="p-2 pl-3 flex tracking-wide flex-col">
									<span class="text-xs text-gray-600 py-1 mb-1">Items not found</span>
								</div>
              </div>-->

              <div class="relative">
                <select
                  name="product-description"
                  class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-600 py-1 px-4 pr-8 rounded-sm text-sm leading-tight focus:outline-none focus:bg-white focus:border-gray-300"
                  style="height: 40px"
                >
                  <option>Module 1</option>
                  <option>Module 2</option>
                  <option>Module 3</option>
                </select>
                <div
                  class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                >
                  <svg
                    class="fill-current h-4 w-4"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                    />
                  </svg>
                </div>
              </div>

              <!-- DROPDOWN MENU LIST ENDING -->
            </li>
          </ul>
          <button
            class="py-2 font-semibold text-white tracking-wide rounded bg-teal-500 mx-6 mb-10 mt-5"
            style="height:40px"
          >Save & Create</button>
        </div>
      </div>
    </div>
    <!-- CREATE NEW TESTCASE BOX MODEL ENDING -->

    <!-- CREATE NEW TESTCASE BOX MODEL START -->
    <!-- DARK BACKGROUND -->
    <div class="absolute w-full h-full bg-gray-900 z-50 opacity-75 hidden">
      <div class="select-testcase-modal rounded absolute border bg-white">
        <div class="w-full h-full flex flex-col">
          <ul class="flex justify-between items-center border-b" style="height:49px">
            <li class="pl-5 pt-1 font-semibold flex items-center">
              <span>Select To Create New</span>
            </li>
            <li class="p-2 pr-4 mt-2">
              <box-icon type="solid" name="x-circle" color="#CBD5E0" class="icon24 mr-2"></box-icon>
            </li>
          </ul>
          <div class="flex-1 px-6 pt-6 flex flex-col">
            <button class="mb-2 flex items-center rounded-sm bg-gray-100" style="height: 40px">
              <box-icon name="box" type="solid" color="#718096" class="mx-2 ml-3"></box-icon>
              <span class="flex-1 text-left text-sm">New Test Box</span>
              <box-icon name="chevron-right" class="mx-3" color="#718096"></box-icon>
            </button>
            <button class="mb-2 flex items-center rounded-sm bg-gray-100" style="height: 40px">
              <box-icon name="data" type="solid" color="#718096" class="mx-2 ml-3"></box-icon>
              <span class="flex-1 text-left text-sm">New Version</span>
              <box-icon name="chevron-right" class="mx-3" color="#718096"></box-icon>
            </button>
            <button class="mb-2 flex items-center rounded-sm bg-gray-100" style="height: 40px">
              <box-icon name="customize" type="solid" color="#718096" class="mx-2 ml-3"></box-icon>
              <span class="flex-1 text-left text-sm">New Modules</span>
              <box-icon name="chevron-right" class="mx-3" color="#718096"></box-icon>
            </button>
            <button class="mb-2 flex items-center rounded-sm bg-gray-100" style="height: 40px">
              <box-icon type="solid" name="bug-alt" color="#718096" class="mx-2 ml-3"></box-icon>
              <span class="flex-1 text-left text-sm">New Bugs</span>
              <box-icon name="chevron-right" class="mx-3" color="#718096"></box-icon>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- CREATE NEW TESTCASE BOX MODEL ENDING -->

    <!-- NAVBAR STARTING -->
    <Navbar />
    <!-- NAVBAR ENDING -->

    <!-- HEADER STARTING -->
    <div class="header bg-gray-100">
      <div class="container mx-auto">
        <div class="flex items-center justify-between" style="height:101px">
          <div
            class="back-to-projects-button border border-gray-400 rounded flex items-center pt-1"
          >
            <box-icon name="left-arrow-alt" class="ml-5 mr-2"></box-icon>
            <div class="text-sm tracking-wide">Back To Projects</div>
          </div>
          <div class="flex-1 pl-12">
            <div>Agentcis App</div>
            <div
              class="text-gray-700 tracking-wide"
              style="font-size:12px"
            >This project is the Saas application where it runs the product over service basis .</div>
          </div>
          <div>
            <ul class="flex items-center">
              <!-- <li><box-icon name='grid-alt' class="square-40 p-2 border border-gray-400 mr-2 rounded" ></box-icon></li> -->
              <!-- <li><box-icon name='list-ul' class="square-40 p-2 border border-gray-400 mr-2 rounded" color=#CBD5E0 ></box-icon></li> -->
              <li>
                <button class="new-project-button font-bold rounded text-white text-sm">Create New</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- HEADER ENDING -->

    <!-- BODY STARTING -->
    <div class="body flex container mx-auto h-full">
      <!-- SIDEBAR STARTING -->
      <div class="border-r" style="width:215px">
        <ul>
          <li class="my-8">
            <span class="filter-text uppercase font-semibold">controls</span>
          </li>
          <li>
            <ul>
              <li>
                <button
                  class="filter-button rounded-sm justify-start flex py-1 mb-1 px-3 bg-teal-100 items-center"
                >
                  <div>
                    <box-icon name="box" type="solid" color="#38B2AC" class="mr-3 pt-1"></box-icon>
                  </div>
                  <span class="text-sm text-teal-500 tracking-normal">Test Box</span>
                </button>
              </li>
              <li>
                <button
                  class="filter-button rounded-sm justify-start flex py-1 mb-1 px-3 items-center"
                >
                  <div>
                    <box-icon name="data" type="solid" color="#718096" class="mr-3 pt-1"></box-icon>
                  </div>
                  <span class="text-sm text-gray-600 tracking-normal">Versions</span>
                </button>
              </li>
              <li>
                <button
                  class="filter-button rounded-sm justify-start flex py-1 mb-1 px-3 items-center"
                >
                  <div>
                    <box-icon name="customize" type="solid" color="#718096" class="mr-3 pt-1"></box-icon>
                  </div>
                  <span class="text-sm text-gray-600 tracking-normal">Modules</span>
                </button>
              </li>
              <li>
                <button
                  class="filter-button rounded-sm justify-start flex py-1 mb-1 px-3 items-center"
                >
                  <div>
                    <box-icon type="solid" name="bug-alt" color="#718096" class="mr-3 pt-1"></box-icon>
                  </div>
                  <span class="text-sm text-gray-600 tracking-normal">Bugs</span>
                </button>
              </li>
              <hr class="mr-8 mt-4 mb-3 border-1 border-gray-400" />
              <li>
                <button
                  class="filter-button rounded-sm justify-start flex py-1 mb-1 px-3 items-center"
                >
                  <div>
                    <box-icon name="cog" type="solid" color="#718096" class="mr-3 pt-1"></box-icon>
                  </div>
                  <span class="text-sm text-gray-600 tracking-normal">Settings</span>
                </button>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- SIDEBAR ENDING -->

      <!-- PROJECT AREA STARTING -->
      <div class="flex-1 relative pl-5">
        <!-- PROJECT LISTING START -->
        <div class="listing flex flex-col relative">
          <!-- TEST BOX TITLE -->
          <div class="listing-title py-6 flex justify-between items-center">
            <span class="font-extrabold tracking-wider pb-5">Test Box</span>
            <div class="bg-gray-200 pt-2 px-2 rounded cursor-pointer">
              <box-icon name="filter-alt" type="solid" class="icon24" color="black"></box-icon>
            </div>
          </div>

          <!-- PROJECTS LISTING AREA START -->
          <div class="listing-area flex flex-wrap"></div>
          <!-- PROJECTS LISTING AREA ENDING -->
        </div>
        <!-- PROJECT LISTING ENDING -->

        <!-- EMPTY PROJECT ICON START -->
        <div class="mt-32 mr-20 hidden">
          <div class="flex flex-col items-center">
            <div class="mr-20 flex">
              <div class="mb-5">
                <box-icon name="box" type="solid" color="#CBD5E0" class="icon94"></box-icon>
              </div>
              <div class="mt-5 relative">
                <box-icon
                  name="box"
                  type="solid"
                  color="#CBD5E0"
                  class="icon94 absolute"
                  style="left:-6px"
                ></box-icon>
              </div>
            </div>

            <div class="flex flex-col items-center leading-none tracking-normal">
              <div>
                <span class="project-empty-text">No Test Box have been crated yet</span>
              </div>
              <div>
                <span class="project-empty-text">Make New Box To Test</span>
              </div>
            </div>
          </div>
        </div>
        <!-- EMPTY PROJECT ICON ENDING -->
      </div>
      <!-- PROJECT AREA ENDING -->
    </div>
    <!-- BODY ENDING -->
  </div>
</template>

<script>
import Navbar from "./Navbar";

export default {
  name: "Testcasescreen",
  components: {
    Navbar
  },
  data() {
    return {};
  }
};
</script>

<style scoped>
html,
body {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}

.navbar {
  height: 70px;
}

.shadow-all-sides {
  box-shadow: 0 0 40px rgba(186, 186, 186, 0.5);
}

.shadow-all-sides-light {
  box-shadow: 0 0 20px rgba(186, 186, 186, 0.5);
}

.standard-icon {
  width: 36px;
  height: 36px;
}

.search-bar {
  height: 42px;
  width: 380px;
}

.icon18 {
  width: 18px;
  height: 18px;
}

.icon24 {
  height: 24px;
  width: 24px;
}

.icon94 {
  width: 94px;
  height: 94px;
}

.gray-text-color {
  color: #cbd5e0;
}

.square-40 {
  height: 40px;
  width: 40px;
}

.back-to-projects-button {
  width: 187px;
  height: 40px;
}

.new-project-button {
  width: 130px;
  height: 40px;
  background: #38b2ac;
}

.filter-text {
  letter-spacing: 0.3em;
  font-size: 0.7em;
}

.filter-button {
  width: 184px;
  height: 35px;
}

.project-empty-text {
  color: #a0aec0;
  font-size: 0.7em;
  letter-spacing: 0.3;
}

.project-element {
  height: 66px;
  display: flex;
  align-items: center;
  width: 268px;
  margin: 0.5rem;
  border-radius: 3px;
  border: 1px solid #e2e8f0;
}

.dark-circle {
  border-radius: 50%;
  background: #718096;
  width: 30px;
  height: 30px;
}

.dark-circle-folder {
  top: 2.5px;
  left: 3px;
  padding: 2px;
}

.project-dropdown-list {
  width: 127px;
  height: 116.63px;
  left: -35px;
}

.create-project-modal {
  height: 394px;
  width: 340px;
  top: 25rem;
  left: 50rem;
}

.create-testcase-modal {
  width: 380px;
  top: 15rem;
  left: 40rem;
}

.select-testcase-modal {
  height: 294px;
  width: 380px;
  top: 23rem;
  left: 40rem;
}

.arrow-up {
  width: 0;
  height: 0;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-bottom: 5px solid white;
}
</style>