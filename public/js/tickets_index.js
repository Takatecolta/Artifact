 document.addEventListener('DOMContentLoaded', () => {
        const posts = document.querySelectorAll('.post');
        const notInProgressContainer = document.getElementById('not-in-progress');
        const inProgressContainer = document.getElementById('in-progress');
        const completedContainer = document.getElementById('completed');
        console.log(notInProgressContainer,inProgressContainer,completedContainer )

        let draggedItem = null;

        function handleDragStart(event) {
            draggedItem = this;
            this.classList.add('dragging');
            event.dataTransfer.effectAllowed = 'move';
            event.dataTransfer.setData('text/html', this.outerHTML);
        }

        function handleDragOver(event) {
            event.preventDefault();
            event.dataTransfer.dropEffect = 'move';
        }

        function handleDrop(event) {
            event.preventDefault();
            if (draggedItem !== this) {
                this.appendChild(draggedItem);
                draggedItem.classList.remove('dragging');
                draggedItem.addEventListener('dragstart', handleDragStart);
                draggedItem = null;
            }
        }

        posts.forEach((post) => {
            post.addEventListener('dragstart', handleDragStart);
        });
        
        notInProgressContainer.addEventListener('dragover', handleDragOver);
        notInProgressContainer.addEventListener('drop', handleDrop);

        inProgressContainer.addEventListener('dragover', handleDragOver);
        inProgressContainer.addEventListener('drop', handleDrop);

        completedContainer.addEventListener('dragover', handleDragOver);
        completedContainer.addEventListener('drop', handleDrop);
    });