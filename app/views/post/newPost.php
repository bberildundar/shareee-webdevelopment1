<?php include __DIR__ . "/../header.php"; ?>
<div class="min-h-screen px-48 py-16">
    <div class="bg-white p-6  shadow-lg max-w-96 rounded-lg">
        <p class="text-3xl font-semibold mb-6">Create a New Text Post</p>
        <form id="postForm" method="post" action="/post/createPost">
            <div class="mb-4">
                <label for="postText" class="pl-4 mb-1 block text-gray-800 font-semibold">Post Content</label>
                <textarea id="postText" name="postText" placeholder="Share your thoughts..."
                    class="w-full p-2 px-4 border border-gray-300 rounded" required></textarea>
            </div>
            <button type="button" onclick="submitForm()"
                class="bg-indigo-900 text-white hover:bg-indigo-950 px-4 py-2">Post</button>
        </form>
    </div>
</div>

<?php include __DIR__ . "/../footer.php"; ?>

<script>
function submitForm() {
    let postText = document.getElementById('postText').value;

    if (postText.trim() == '') {
        window.alert('Please enter a text before posting.');
    } else {
        const postData = {
            postText: postText.trim()
        }
        console.log(postData); //debug purposes

        fetch('http://localhost/api/post', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(postData),
            })
            .then(response => {
                goBack()
            })
            .catch((err) => {
                console.error('Error: ', err);
            });
    }
}

function goBack() {
    window.location.href = "/";
}
</script>