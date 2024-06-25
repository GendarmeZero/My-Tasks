// Task 4
function apiForAlbums(albumId) {
    const photoContainer = document.getElementById('photos');
    photoContainer.innerHTML = '';

    fetch(`https://jsonplaceholder.typicode.com/photos?albumId=${albumId}`)
        .then(response => response.json())
        .then(photos => {
            photos.forEach(photo => {
                const photoDiv = document.createElement('div');
                photoDiv.className = 'photo';

                const photoTitle = document.createElement('p');
                photoTitle.textContent = photo.title;

                const photoUrl = document.createElement('img');
                photoUrl.src = photo.url;
                photoUrl.alt = photo.title; 

                photoDiv.appendChild(photoTitle);
                photoDiv.appendChild(photoUrl);
                photoContainer.appendChild(photoDiv);
            });
        })
        .catch(error => {
            console.error('Error fetching photos:', error);
        });
}

apiForAlbums(1);
