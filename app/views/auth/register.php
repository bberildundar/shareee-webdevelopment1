<?php include __DIR__ . "/../header.php"; ?>

<div class="min-h-screen px-48 py-16">
    <div class="grid grid-cols-7 gap-4">
        <div class="col-span-2">
            <div class="bg-white p-6 shadow-lg h-fit text-center rounded-lg">
                <p class="text-2xl font-semibold">Share your voice, connect with others, and inspire. Join a vibrant
                    community where your ideas matter. Let's create, connect, and make every moment count together!</p>
            </div>
        </div>
        <div class="col-span-5 pl-24">
            <div class="bg-white p-6 shadow-lg rounded-lg">
                <p class="text-3xl font-semibold mb-2">Join SHAREEE! and create your own posts!</p>
                <div id="validationFeedback" class="text-red-500 mb-4"></div>
                <form id="registrationForm" action="/auth/register" method="post">
                    <div class="mb-4">
                        <label for="name" class="pl-4 mb-1 block text-gray-800 font-semibold">Name</label>
                        <input type="text" id="name" name="name" placeholder="Name"
                            class="w-full p-2 px-4 border border-gray-300 rounded-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="pl-4 mb-1 block text-gray-800 font-semibold">Email</label>
                        <input type="email" id="email" name="email" placeholder="example@email.com"
                            class="w-full p-2 px-4 border border-gray-300 rounded-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="username" class="pl-4 mb-1 block text-gray-800 font-semibold">Username</label>
                        <input type="text" id="username" name="username" placeholder="username"
                            class="w-full p-2 px-4 border border-gray-300 rounded-full" required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="pl-4 mb-1 block text-gray-800 font-semibold">Password</label>
                        <input type="password" id="password" name="password" placeholder="*************"
                            class="w-full p-2 px-4 border border-gray-300 rounded-full" required>
                    </div>

                    <div class="mb-6">
                        <label for="confirm-password" class="pl-4 mb-1 block text-gray-800 font-semibold">Confirm
                            Password</label>
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="*************"
                            class="w-full p-2 px-4 border border-gray-300 rounded-full" required>
                    </div>

                    <button type="button" onclick="register()"
                        class="bg-indigo-900 text-white hover:bg-indigo-950 ml-4 px-6 py-2">Register</button>
                </form>
                <p class="mt-4 text-gray-800">
                    Already a member? <a href="/auth/login" class="text-indigo-900 underline">Login</a>
                </p>
            </div>
        </div>
    </div>
</div>
<?php include __DIR__ . "/../footer.php"; ?>
<script>
const nameField = document.getElementById("name");
const emailField = document.getElementById("email");
const usernameField = document.getElementById("username");
const passwordField = document.getElementById("password");

function register() {
    if (nameField.value.trim() == "" || emailField.value.trim() == "" || usernameField.value.trim() == "" ||
        passwordField
        .value.trim() == "") {
        window.alert(
            "Please make sure you entered all the fields correctly and check if your e-mail address is valid.")
        return;
    } else {
        const data = {
            "username": usernameField.value.trim(),
            "password": passwordField.value.trim(),
            "name": nameField.value.trim(),
            "email": emailField.value.trim()
        };
        console.log(data); //debug purposes

        fetch('http://localhost/api/auth', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            })
            .then(response => {
                //go to homepage
                window.location.href = "/";
                console.log("ye")
            })
            .catch((err) => {
                console.error('Error: ', err);
            });
    }

}
</script>