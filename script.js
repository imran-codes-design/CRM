document.addEventListener("DOMContentLoaded", function () {
    fetch("fetch_customers.php")
        .then(response => response.json())
        .then(data => {
            let tableBody = document.getElementById("customerTable");
            tableBody.innerHTML = "";
            data.forEach(customer => {
                let row = `<tr>
                    <td>${customer.id}</td>
                    <td>${customer.name}</td>
                    <td>${customer.email}</td>
                    <td>${customer.phone}</td>
                    <td>${customer.company}</td>
                </tr>`;
                tableBody.innerHTML += row;
            });
        });
});