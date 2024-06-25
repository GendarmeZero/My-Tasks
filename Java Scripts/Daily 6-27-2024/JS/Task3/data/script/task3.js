// Task 3
function apiForAlbums(albumid) {
    const albumContainer = document.getElementById('albums');
    albumContainer.innerHTML = '';

    fetch(`https://jsonplaceholder.typicode.com/albums?userId=${albumid}`)
        .then(response => response.json())
        .then(album => {
            album.forEach(koko => {
                const kokoDiv = document.createElement('div');
                kokoDiv.className = 'koko';
                const kokoTitle = document.createElement('p');
                kokoTitle.textContent = koko.title;

                kokoDiv.appendChild(kokoTitle);
                albumContainer.appendChild(kokoDiv);
            });
        })
        .catch(error => {
            console.error('Error fetching albums:', error);
        });
}

apiForAlbums(1);

