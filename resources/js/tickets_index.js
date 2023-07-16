                document.addEventListener('DOMContentLoaded', () => {
                const posts = document.querySelectorAll('.post');

                let draggedItem = null;

                function handleDragStart(event) {
                    draggedItem = this;
                    this.classList.add('dragging');
                    event.dataTransfer.effectAllowed = 'move';
                    event.dataTransfer.setData('text/html', this.innerHTML);
                }

                function handleDragOver(event) {
                    event.preventDefault();
                    event.dataTransfer.dropEffect = 'move';
                }

                function handleDrop(event) {
                    event.preventDefault();
                    if (draggedItem !== this) {
                        this.parentNode.removeChild(draggedItem);
                        this.insertAdjacentHTML('beforebegin', draggedItem.outerHTML);
                        const newDraggedItem = this.previousSibling;
                        newDraggedItem.classList.remove('dragging');
                        newDraggedItem.addEventListener('dragstart', handleDragStart);
                        draggedItem = null;
                    }
                }

                posts.forEach((post) => {
                    post.addEventListener('dragstart', handleDragStart);
                    post.addEventListener('dragover', handleDragOver);
                    post.addEventListener('drop', handleDrop);
                });
            });