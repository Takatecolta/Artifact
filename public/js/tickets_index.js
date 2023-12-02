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
                const draggedProgress =  draggedItem.getAttribute('data-progress');
                const targetProgress = this.getAttribute('data-progress');
                console.log(draggedProgress)
                console.log(targetProgress)
                console.log(this)
                console.log(draggedItem)
                //↑進捗状態を変更するためのコード
                
                if (draggedProgress !== targetProgress){
                    //進捗状態を変更
                    updateTicketProgress(draggedItem, targetProgress);
                }
                
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
    
    function updateTicketProgress(ticketElement, newProgress){
        const ticketId = ticketElement.getAttribute('ticketId');
        console.log("ticketId", ticketId)
        const requestData  = {
            ticketId: ticketId,
            newProgress: newProgress
        };
        console.log(newProgress)
        var token = $("meta[name='csrf-token']").attr("content");
        
        $.ajax({
            type: 'POST',
            url:'/update_progress/' + ticketId,
            data: {
                 _token: $('meta[name="csrf-token"]').attr('content'),
                 newProgress: newProgress
        },
            success: function (data){
                console.log('進捗状態が変更されました。');
            },
            error: function(error){
                console.log('error', error);
            }
        });
    }
        
    
//     function updateTicketProgress(ticketId, newProgress) {
//     const xhr = new XMLHttpRequest();
//     xhr.open('POST', '/update_progress/' + ticketId, true);
//     // xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken); // CSRFトークンが必要な場合は設定

//     // リクエストヘッダーを設定
//     xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');

//     // リクエストのデータを設定
//     const requestData = JSON.stringify({ newProgress: newProgress });

//     xhr.onreadystatechange = function () {
//         if (xhr.readyState === XMLHttpRequest.DONE) {
//             if (xhr.status === 200) {
//                 console.log('進捗状態が更新されました');
//             } else {
//                 console.error('エラー:', xhr.status);
//             }
//         }
//     };

//     xhr.send(requestData);
// }
