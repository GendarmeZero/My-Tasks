// Task 2
function fetchDataForComments(postId) {
    const commentsDiv = document.getElementById('comments');
    fetch(`https://jsonplaceholder.typicode.com/comments?postId=${postId}`)
        .then(response => response.json())
        .then(comments => {
            comments.forEach(comment => {
                const commentDiv = document.createElement('div');
                commentDiv.className = "comment";

                const commentName = document.createElement('h3');
                commentName.textContent = comment.name;

                const commentEmail = document.createElement('p');
                commentEmail.textContent = comment.email;

                const commentBody = document.createElement('p');
                commentBody.textContent = comment.body;

                commentDiv.appendChild(commentName);
                commentDiv.appendChild(commentEmail);
                commentDiv.appendChild(commentBody);

                commentsDiv.appendChild(commentDiv);
            });

        })

}
fetchDataForComments(1);