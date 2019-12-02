<template>
	<div id="body" class="h-screen flex flex-col items-center">

		<!-- HEADER LOGO -->
		<img src="../assets/logo.svg" class="testsys-icon mt-12">


		<!-- BACK BUTTON -->
		<div class="height-40 absolute border border-gray-400 rounded flex items-center px-3 hidden" style="top: 3.5%; left: 6%">
			<box-icon name='left-arrow-alt' class="mx-2"></box-icon>
			<div class="text-sm tracking-wide">Back To Sign In</div>
		</div>

		<!-- ***************************** -->
		<!-- USER SIGN IN AND REGISTRATION -->
		<!-- ***************************** -->

		<!-- SIGN IN CARD -->
		<div class="container flex flex-col mt-32 width hidden">
			<div class="text-2xl pb-6 text-center tracking-wide">Sign In To Your Account</div>

			<div class="bg-white border border-gray-300 rounded flex-1 px-6 pt-6 pb-8">
				<div class="flex flex-col">
					<label for="project-title" class="text-xs mb-1 tracking-wide">Email Address</label>
					<input type="text" name="project-title" class="height-40 rounded-sm bg-gray-100 text-gray-800 text-sm px-3">
				</div>
				<div class="flex flex-col my-5">
					<div class="flex justify-between">
						<label for="project-title" class="text-xs mb-1 tracking-wide">Password</label>
						<label for="project-title" class="text-xs mb-1 tracking-normal text-blue-600">Forgot Password ?</label>
					</div>
					<input type="text" name="project-title" class="height-40 rounded-sm bg-gray-100 text-gray-800 text-sm px-3">
				</div>
				<button class="height-40 bg-teal-500 text-xs tracking-wider font-semibold text-white w-full rounded-sm">Sign In</button>
			</div>

			<button class="border border-gray-400 rounded mx-24 my-8 tracking-wide text-sm height-40">Register New Account</button>
		</div>
		<!-- NEW PROJECT CARD ENDING -->


		<!-- FORGOT PASSWORD CARD -->
		<div class="container mt-32 width hidden">
			<div class="text-2xl pb-6 text-center tracking-wide">Forgot Password</div>

			<div class="bg-white border border-gray-300 rounded flex-1 px-6 pt-6 pb-8">
				<div class="flex flex-col">
					<label for="project-title" class="text-xs mb-1 tracking-wide">Email Address</label>
					<input type="text" name="project-title" class="height-40 rounded-sm bg-gray-100 text-gray-800 focus:bg-white text-sm px-3 mb-5">
				</div>				
				<button class="height-40 bg-teal-500 text-xs tracking-wider font-semibold text-white w-full rounded-sm">Confirm My Email</button>
			</div>
		</div>
		<!-- FORGOT PASSWORD CARD ENDING -->

		<!-- REGISTER NEW ACCOUNT CARD -->
		<div class="container mt-32 width hidden">
			<div class="text-2xl pb-6 text-center tracking-wide">Register New Account</div>

			<div class="bg-white border border-gray-300 rounded flex-1 px-6 pt-6 pb-8 mb-8">
				<div class="flex flex-col">
					<label for="project-title" class="text-xs mb-1 tracking-wide">Email Address</label>
					<div class="relative">
						<input type="text" name="project-title" class="height-40 w-full rounded-sm bg-gray-100 text-gray-800 focus:bg-white text-sm px-3 mb-5">
						<!-- <input type="text" name="project-title" class="height-40 w-full rounded-sm bg-gray-100 text-red-600 focus:bg-white text-sm px-3 mb-5"> -->
						<box-icon name='loader-alt' animation='spin' class="hidden absolute square-24" style="top:8px; right:17px" color="#38B2AC"></box-icon>
					</div>
				</div>				
				<button class="height-40 bg-teal-500 text-xs tracking-wider font-semibold text-white w-full rounded-sm">Confirm My Email</button>
			</div>

			<!-- FOR ERROR MESSAGE -->
			<div class="flex items-center px-3 bg-red-200 rounded hidden" style="height: 60px">
				<box-icon type='solid' name='x-circle' class="mx-3" color="#C53030"></box-icon>
				<div>
					<div class="text-sm text-red-700 font-semibold">Try a different Email address</div>
					<div class="text-xs text-red-700">The email you are trying to register already exists</div>
				</div>
			</div>

		</div>
		<!-- REGISTER NEW ACCOUNT CARD ENDING -->

		<!-- EMAIL VERIFICATION CARD -->
		<div class="container mt-32 width flex flex-col hidden">
			<div class="text-2xl pb-6 text-center tracking-wide">Email Verification Sent</div>

			<div class="bg-white border border-gray-300 rounded flex-1 flex flex-col items-center px-6 pt-6 pb-8 mb-6">

				<div class="bg-cover bg-center mb-2" style="width:78px;height:58px; background-image: url(https://www.shareicon.net/data/512x512/2016/09/24/834351_email_512x512.png)"></div>

				<div class="text-gray-900 tracking-wide text-sm py-4">We have sent you the verification code to ash******@introcept.co , Please verify the code sent to this email. This might not take more than minutes</div>
				<div class="flex flex-col w-full">
					<label for="project-title" class="text-xs mb-1 tracking-wide">Enter Verification Code</label>
					<div class="relative">
						<input type="text" name="project-title" class="height-40 w-full rounded-sm bg-gray-100 text-gray-800 focus:bg-white text-sm px-3 mb-5">
						<!-- <input type="text" name="project-title" class="height-40 w-full rounded-sm bg-gray-100 text-red-600 focus:bg-white text-sm px-3 mb-5"> -->
						<box-icon name='loader-alt' animation='spin' class="absolute square-24 hidden" style="top:8px; right:17px" color="#38B2AC"></box-icon>
					</div>
				</div>				
				<button class="height-40 bg-teal-500 text-xs tracking-wider font-semibold text-white w-full rounded-sm">Verify My Account</button>
			</div>

			<button class="border border-gray-400 rounded mx-24 tracking-wide text-sm height-40">Resend Code</button>

		</div>
		<!-- EMAIL VERIFICATION CARD ENDING -->


		<!-- ************************************ -->
		<!-- USER SIGN IN AND REGISTRATION ENDING -->
		<!-- ************************************ -->


		<!-- NEW PROJECT CARD -->
		<div class="container flex flex-col mt-32 width hidden">
			<div class="text-2xl py-4 text-center tracking-wide">Create First Project</div>

			<div class="bg-white border border-gray-400 rounded flex-1 px-6 pt-6 pb-8">
				<div class="flex flex-col">
					<label for="project-title" class="text-xs mb-1 tracking-wide">Project Title</label>
					<input type="text" name="project-title" class="height-40 rounded-sm bg-gray-100 text-sm px-3 focus:bg-white">
				</div>
				<div class="flex flex-col py-6">
					<label class="text-xs mb-1 tracking-wide">Description</label>
					<textarea class="rounded-sm bg-gray-100 resize-none h-32 text-sm p-3 focus:bg-white">
					</textarea>
				</div>
				<button class="height-40 bg-teal-500 text-xs tracking-wider font-semibold text-white w-full rounded-sm">Create New</button>
			</div>

			<button class="border border-gray-400 rounded mx-24 my-8 tracking-wider text-sm height-40">May Be Later</button>
		</div>
		<!-- NEW PROJECT CARD ENDING -->

		<!-- UPDATE PROFILE IMAGE CARD -->
		<div class="container flex flex-col mt-20 width">
			<div class="text-2xl pt-2 pb-8 text-center tracking-wide">Upload Profile Image</div>

			<div class="bg-white border border-gray-300 rounded flex-1 px-6 pt-6 pb-8">
				<div class="mb-5 rounded bg-gray-100" style="width:330px; height: 308px;">

					<!-- NO PICTURE -->
					<div class="text-center border-2 border-dashed border-gray-300 w-full h-full">
						<box-icon type='solid' name='user' class="mt-12" style="width:110px; height:110px" color="#E5E5E5"></box-icon>						
						<div class="px-20 text-gray-400 text-xs">
							<div class="mb-1">Drag & Drop Image File To Upload Your Profile Image</div>
							<div>or</div>
						</div>
						<button class="px-5 mt-3 bg-white text-xs text-gray-700 border hover:shadow border-gray-400 rounded" style="height:25px">Browse File</button>
					</div>
					
					<!-- PICTURE -->
					<div class="hidden">
						<div class="absolute rounded bg-cover bg-center" style="width:330px; height: 308px; background-image: url(https://images.unsplash.com/photo-1525265750372-a6dd70a57a1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80)"></div>
						<!-- <div class="absolute rounded bg-cover bg-center" style="width:330px; height: 308px; background-image: url(https://images.unsplash.com/photo-1492633423870-43d1cd2775eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80)"></div> -->
						<!-- <div class="absolute rounded bg-cover" style="width:330px; height: 308px;background-image: url(https://scontent.fbom26-1.fna.fbcdn.net/v/t1.0-9/47572106_2136321023054931_813521850163265536_o.jpg?_nc_cat=108&_nc_ohc=hL8I1KEJYuYAQmexRvx_pJnkbe3htWWfuq8DSVgZ3RydNW9qh36kFBAFQ&_nc_ht=scontent.fbom26-1.fna&oh=49899e8c86ee0de90343252706aed9bd&oe=5E78C4A4)"></div> -->
						<div class="absolute">
							<div class="overflow-hidden rounded flex justify-center items-center" style="width:330px; height: 308px;">
								<div class="vignette rounded-full w-64 h-64"></div>
							</div>
						</div>
					</div>

				</div>
				<button class="height-40 bg-teal-500 text-sm tracking-wider font-semibold text-white w-full rounded-sm">Upload & Update</button>
			</div>

			<button class="border border-gray-400 rounded mx-24 my-8 tracking-wider text-sm height-40">Skip This Step</button>
		</div>
		<!-- UPDATE PROFILE IMAGE CARD ENDING -->

		<!-- REGISTRATION CARD -->
		<div class="container flex flex-col mt-32 width hidden">
			<div class="text-2xl pb-8 text-center tracking-wide">Let's Complete Registration</div>

			<div class="bg-white border border-gray-400 rounded flex-1 px-6 pt-6 pb-8">

				<div class="flex">
					<div class="flex flex-col pr-2">
						<label for="first-name" class="text-xs mb-1 tracking-wide">First Name</label>
						<input type="text" name="first-name" class="w-full height-40 rounded-sm bg-gray-100 text-sm px-3 focus:bg-white focus:border focus:border-gray-300">
					</div>
					<div class="flex flex-col pl-2">
						<label for="last-name" class="text-xs mb-1 tracking-wide">Last Name</label>
						<input type="text" name="last-name" class="w-full height-40 rounded-sm bg-gray-100 text-sm px-3 focus:bg-white focus:border focus:border-gray-300">
					</div>
				</div>

				<div class="flex flex-col pt-5">
					<label for="project-title" class="text-xs mb-1 tracking-wide">Password ( Min 8 Character )</label>
					<div class="relative">
						<input type="password" name="project-title" class="height-40 w-full rounded-sm bg-gray-100 text-sm pl-3 pr-16 tracking-widest focus:bg-white focus:border focus:border-gray-300">
						<span class="absolute right-0 py-3 px-4 rounded uppercase tracking-wide font-bold text-blue-800 hover:text-teal-500 cursor-pointer" style="font-size: 10px">show</span>
					</div>
				</div>

				<div class="flex flex-col py-5">
					<label for="project-title" class="text-xs mb-1 tracking-wide">Confirm Password</label>
					<input type="password" name="project-title" class="height-40 rounded-sm bg-gray-100 text-sm px-3 tracking-widest focus:bg-white focus:border focus:border-gray-300">
				</div>

				<div class="flex flex-col mb-6 ">
					<div class="mb-2 flex items-center">
						<input type="checkbox" name="updates" value="updates" checked>
						<label for="updates" class="ml-2 text-xs text-gray-800">I would like to recieve updates</label>
					</div>
					<div class="flex items-center">
						<input type="checkbox" name="t-and-c" value="t-and-c">
						<label for="t-and-c" class="ml-2 text-xs text-gray-800">By clicking this I accept all Terms & Conditions applied</label>
					</div>
				</div>
				
				<button class="height-40 bg-teal-500 text-xs tracking-wider font-semibold text-white w-full rounded-sm">Register & Complete</button>
			</div>

		</div>
		<!-- REGISTRATION CARD ENDING -->

	</div>
</template>

<script>

	export default {
		name: 'Formscreen',
		data() {
			return {

			};
		}
	};
	
</script>

<style scoped>

#body {
	background: repeating-linear-gradient(#EDF2F7, #EDF2F7 99px, #F7FAFC 100px, #F7FAFC 100%);
}

.vignette {
	box-shadow: 0 0 0 500px rgba(0,0,0,0.6);
}

.testsys-icon {
	width: 78px;
	height: 105px;
}


.square-24 {
	width: 24px;
	height: 24px;
}

.width {
	width: 380px;
}

.height-40 {
	height: 40px;
}

</style>