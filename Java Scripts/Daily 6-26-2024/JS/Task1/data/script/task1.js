// Task 1
function apiData() {
    fetch('https://jsonplaceholder.typicode.com/posts')
    .then(response => response.json())
    .then(posts => {
        const postsContainer = document.getElementById('postsContainer');
        postsContainer.innerHTML = ''; 

        posts.forEach(post => {
            const postsDiv = document.createElement('div');
            postsDiv.className = 'post';

            const postsTitle = document.createElement('h3');
            postsTitle.innerText = post.title;

            const postsBody = document.createElement('p');
            postsBody.innerText = post.body;

            postsDiv.appendChild(postsTitle);
            postsDiv.appendChild(postsBody);
            postsContainer.appendChild(postsDiv);
        });
    })
    .catch(error => console.error('Error fetching posts:', error));
}

apiData();






