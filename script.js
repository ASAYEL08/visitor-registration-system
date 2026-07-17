document.addEventListener('DOMContentLoaded', () => {
    const visitorForm = document.getElementById('visitorForm');
    const tableBody = document.getElementById('visitorsTableBody');

    const loadVisitors = () => {
        fetch('fetch.php')
            .then(response => response.json())
            .then(data => {
                tableBody.innerHTML = '';
                data.forEach(visitor => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${visitor.id}</td>
                        <td>${visitor.name}</td>
                        <td>${visitor.age}</td>
                        <td><span class="status-badge status-${visitor.status}">${visitor.status}</span></td>
                        <td><button class="btn-toggle" data-id="${visitor.id}">Toggle</button></td>
                    `;
                    tableBody.appendChild(row);
                });
            });
    };

    visitorForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(visitorForm);

        fetch('insert.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                visitorForm.reset();
                loadVisitors();
            }
        });
    });

    tableBody.addEventListener('click', (e) => {
        if (e.target.classList.contains('btn-toggle')) {
            const id = e.target.getAttribute('data-id');
            const formData = new FormData();
            formData.append('id', id);

            fetch('toggle.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    loadVisitors();
                }
            });
        }
    });

    loadVisitors();
});