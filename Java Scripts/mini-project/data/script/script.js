//////Mini project for OCA (Orange Coing academy)
//////koko is a satatic name for all my projects,changing it or remove it will couz the code to break!!
///////fetching and waiting for the data promise from the server (Json-server === data.json)
function getPosts(){
    fetch('http://localhost:3000/post')
    .then(response => response.json())
    .then(data => {
        const postContainer = document.getElementById('postContainer');
        postContainer.innerHTML = '';

        data.forEach(post => {
            const postDiv = document.createElement('div');
            postDiv.className = 'post';
            postDiv.innerHTML = `
                <h3>${post.title}</h3>
                <p>${post.content}</p>
                <button onclick="deletePost(${post.id}, this)">Delete</button>
            `;
            postContainer.appendChild(postDiv);
        });
    })
    .catch(error => console.error('Error fetching posts:', error));
}
document.getElementById('kokoButt').addEventListener('click', function () {
  getPosts();
});
/////koko: deleting the elements
function deletePost(id, buttonElement) {
    fetch(`http://localhost:3000/post/${id}`, {
        method: 'DELETE'
    })
        .then(response => {
            if (response.ok) {
                const postDiv = buttonElement.parentElement;
                postDiv.remove();
                getPosts();
            } else {
                console.error('Failed to delete post please call KOKO');
            }
        })
        .catch(error => console.error('KOKO ! Error deleting post:', error));
}

document.getElementById('updateButton').addEventListener('click', function () {
    const postId = document.getElementById('postId').value;
    const postName = document.getElementById('postName').value;
    const postEmail = document.getElementById('postEmail').value;

    fetch(`http://localhost:3000/post`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json' 
        },
        body: JSON.stringify({ title: postName, content: postEmail })
    })
        .then(response => {
            if (response.ok) {
                console.log('Post updated successfully');

                document.getElementById('kokoButt').click();
            } else {
                console.error('Failed to update post');
            }
        })
        .catch(error => console.error('Error updating post:', error));
});

