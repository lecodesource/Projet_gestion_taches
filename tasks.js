document.addEventListener('DOMContentLoaded', () => {
    fetchTasks();
    setupAddTaskForm();
});

function fetchTasks() {
    fetch('get_tasks.php')
        .then(response => response.json())
        .then(data => {
            const tasksList = document.getElementById('tasks-list');
            tasksList.innerHTML = data.map(task => `
                <div class="task">
                    <h3>${task.title}</h3>
                    <p>Description: ${task.description}</p>
                    <p>Date d'échéance: ${task.due_date}</p>
                    <p>Status: ${task.status ? 'Complété' : 'Non complété'}</p>
                    <button onclick="deleteTask(${task.id})">Supprimer</button>
                </div>
            `).join('');
        })
        .catch(error => console.error('Erreur lors de la récupération des tâches:', error));
}

function setupAddTaskForm() {
    const form = document.getElementById('add-task-form');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        const formData = new FormData(form);
        fetch('add_task.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            console.log(result);
            fetchTasks(); // Recharger les tâches après l'ajout
        })
        .catch(error => console.error('Erreur lors de l\'ajout de la tâche:', error));
    });
}

function deleteTask(taskId) {
    fetch('delete_task.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id: taskId })
    })
    .then(response => response.text())
    .then(result => {
        console.log(result);
        fetchTasks(); // Recharger les tâches après la suppression
    })
    .catch(error => console.error('Erreur lors de la suppression de la tâche:', error));
}
