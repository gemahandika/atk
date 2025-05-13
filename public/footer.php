<!-- ======= Footer ======= -->



<!-- Vendor JS Files -->
<script src="../../../app/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="../../../app/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../../app/assets/vendor/chart.js/chart.umd.js"></script>
<script src="../../../app/assets/vendor/echarts/echarts.min.js"></script>
<script src="../../../app/assets/vendor/quill/quill.js"></script>
<!-- <script src="../../../app/assets/vendor/simple-datatables/simple-datatables.js"></script> -->
<script src="../../../app/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="../../../app/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../../../app/assets/js/main.js"></script>


<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
<script>
    // Inisialisasi tabel pertama
    if (document.querySelector('#example1')) {
        new DataTable('#example1');
    }

    // Inisialisasi tabel kedua dengan opsi tambahan
    if (document.querySelector('#example')) {
        new DataTable('#example', {
            paging: false,
            scrollCollapse: true,
            scrollY: '335px'
        });
    }
</script>




<script>
    $(document).ready(function() {
        $('#mauexport').DataTable({
            dom: 'Blfrtip',
            buttons: [{
                    extend: 'print',
                    text: '<i class="fa fa-print"></i> Print',
                    className: 'btn btn-outline-secondary mb-3',
                    exportOptions: {
                        columns: ':not(:last-child)' // Exclude the last column
                    }
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="fa fa-file-excel-o"></i> Excel',
                    className: 'btn btn-outline-info mb-3',
                    exportOptions: {
                        columns: ':not(:last-child)' // Exclude the last column
                    }
                }
            ],
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            pageLength: 10
        });
    });

    function exportToExcel(tableID) {
        var exportTable = $('#' + tableID).DataTable();
        exportTable.button('.buttons-excel').trigger();
    }

    function exportToPDF(tableID) {
        var exportTable = $('#' + tableID).DataTable();
        exportTable.button('.buttons-pdf').trigger();
    }

    function exportToPrint(tableID) {
        var exportTable = $('#' + tableID).DataTable();
        exportTable.button('.buttons-print').trigger();
    }
</script>

</body>

</html>