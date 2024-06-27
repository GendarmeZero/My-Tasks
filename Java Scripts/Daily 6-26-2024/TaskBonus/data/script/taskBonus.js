// Task Bonus
/////koko
document.addEventListener('DOMContentLoaded', () => {
    fetchUsers();
    fetchPosts();
});

const usersContainer = document.getElementById('usersContainer');
const postsContainer = document.getElementById('postsContainer');

function fetchUsers() {
    fetch('https://jsonplaceholder.typicode.com/users')
        .then(response => response.json())
        .then(users => {
            usersContainer.innerHTML = ''; 
            users.forEach(user => {
                const userDiv = document.createElement('div');
                userDiv.className = 'user';
                userDiv.id = `user-${user.id}`;

                const userName = document.createElement('h3');
                userName.innerText = `${user.name} (${user.email})`;

                userDiv.appendChild(userName);
                usersContainer.appendChild(userDiv);
            });
        })
        .catch(error => console.error('Error fetching users:', error));
}

function fetchPosts() {
    fetch('https://jsonplaceholder.typicode.com/posts')
        .then(response => response.json())
        .then(posts => {
            postsContainer.innerHTML = ''; 
            posts.forEach(post => {
                const postDiv = document.createElement('div');
                postDiv.className = 'post';
                postDiv.id = `post-${post.id}`;

                const postTitle = document.createElement('h3');
                postTitle.innerText = post.title;

                const postBody = document.createElement('p');
                postBody.innerText = post.body;

                const userName = document.createElement('p');
                userName.innerText = `Author: ${getUserName(post.userId)}`;

                const showCommentsButton = document.createElement('button');
                showCommentsButton.innerText = 'Show Comments';
                showCommentsButton.addEventListener('click', () => fetchComments(post.id));

                postDiv.appendChild(postTitle);
                postDiv.appendChild(userName);
                postDiv.appendChild(postBody);
                postDiv.appendChild(showCommentsButton);

                postsContainer.appendChild(postDiv);
            });
        })
        .catch(error => console.error('Error fetching posts:', error));
}

function fetchComments(postId) {
    fetch(`https://jsonplaceholder.typicode.com/comments?postId=${postId}`)
        .then(response => response.json())
        .then(comments => {
            const postDiv = document.getElementById(`post-${postId}`);
            let commentsDiv = postDiv.querySelector('.comments');
            if (!commentsDiv) {
                commentsDiv = document.createElement('div');
                commentsDiv.className = 'comments';
                postDiv.appendChild(commentsDiv);
            }
            commentsDiv.innerHTML = ''; 
            comments.forEach(comment => {
                const commentDiv = document.createElement('div');
                commentDiv.className = 'comment';

                const commentName = document.createElement('h4');
                commentName.innerText = comment.name;

                const commentBody = document.createElement('p');
                commentBody.innerText = comment.body;

                commentDiv.appendChild(commentName);
                commentDiv.appendChild(commentBody);
                commentsDiv.appendChild(commentDiv);
            });
        })
        .catch(error => console.error('Error fetching comments:', error));
}

function getUserName(userId) {
    const userDiv = document.getElementById(`user-${userId}`);
    if (userDiv) {
        return userDiv.querySelector('h3').innerText;
    } else {
        return 'Unknown User';
    }
}

