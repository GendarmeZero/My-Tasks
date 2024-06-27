// Task 6
/////koko
const usersContainerKoko = document.getElementById('usersContainerKoko');
usersContainerKoko.innerHTML = '';

function userApi() {
    fetch('https://jsonplaceholder.typicode.com/users')
        .then(response => response.json())
        .then(users => {
            users.forEach(user => {
                const kokoUsersDiv = document.createElement('div');
                kokoUsersDiv.className = 'kokoUsersDiv';

                const kokoTitle = document.createElement('h4');
                kokoTitle.textContent = user.name;

                const kokoUsernames = document.createElement('p');
                kokoUsernames.textContent = `Username: ${user.username}`;

                const kokoEmails = document.createElement('p');
                kokoEmails.textContent = `Email: ${user.email}`;

                const kokoAddress = document.createElement('p');
                kokoAddress.textContent = `Address: ${user.address.street}, ${user.address.suite}, ${user.address.city}, ${user.address.zipcode}`;

                kokoUsersDiv.appendChild(kokoTitle);
                kokoUsersDiv.appendChild(kokoUsernames);
                kokoUsersDiv.appendChild(kokoEmails);
                kokoUsersDiv.appendChild(kokoAddress);

                usersContainerKoko.appendChild(kokoUsersDiv);
            });
        })
        .catch(error => {
            console.error('Error fetching user details of koko:', error);
        });
}

userApi();
