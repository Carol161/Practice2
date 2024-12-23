// Add event listener for form submission
document.getElementById('new-task-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get task name and priority
    const taskName = document.getElementById('task-name').value;
    const taskPriority = document.getElementById('task-priority').value;
    
    // Create new task element
    const taskItem = document.createElement('li');
    taskItem.textContent = `${taskName} - ${taskPriority}`;
    
    // Append task to list
    document.getElementById('tasks').appendChild(taskItem);
    
    // Clear form fields
    document.getElementById('new-task-form').reset();
});
