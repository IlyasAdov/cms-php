window.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.data-table-btn').addEventListener('click', () => {
        let delrow = document.querySelector("#delete-datatable tr.selected > td:nth-child(1)").innerText;

        var data = {
            id: delrow
        };

        $.ajax({
            url: "../vendors/delRow.php",
            type: "POST",
            data: JSON.stringify(data),
            contentType: "application/json",
            dataType: "json"
        });
    });

    const interval = setInterval(function() {
        if (document.querySelector("#delete-datatable > thead > tr > th.sorting.sorting_asc")) {
            document.querySelector("#delete-datatable > thead > tr > th.sorting.sorting_asc").click();
            clearInterval(interval);
        }
    }, 500);
});