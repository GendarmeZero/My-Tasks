// Task 5
function checkListApi(checkList) {

    const checkListContainer = document.getElementById('checkListContainer');
    checkListContainer.innerHTML = '';

    fetch('https://jsonplaceholder.typicode.com/todos')
        .then(response => response.json())
        .then(koko => {
            koko.forEach(koko => {
                const kokoDiv = document.createElement('div')
                kokoDiv.className = 'checkListIsDone'

                const kokoTitle = document.createElement('h4')
                kokoTitle.textContent = koko.title

                const kokoCompleted = document.createElement('input')
                kokoCompleted.type = 'checkbox'
                kokoCompleted.checked = koko.completed;
                


                kokoDiv.appendChild(kokoTitle)
                kokoDiv.appendChild(kokoCompleted)

                checkListContainer.appendChild(kokoDiv)

            })
            .catch (error =>
            { console.error('Error fetching checklists:', error); })
})

}
checkListApi();
/////koko