</div>
</div>
</div>
</div>
<hidden>
<script src="<?php echo BASE_URL . 'Assets/plugins/jquery/jquery-3.5.1.min.js'; ?>"> </script>
<script src="<?php echo BASE_URL . 'Assets/plugins/bootstrap/js/popper.min.js'; ?>"> </script>
<script src="<?php echo BASE_URL . 'Assets/plugins/bootstrap/js/bootstrap.min.js'; ?>"> </script>
<script src="<?php echo BASE_URL . 'Assets/plugins/perfectscroll/perfect-scrollbar.min.js'; ?>"> </script>
<script src="<?php echo BASE_URL . 'Assets/plugins/pace/pace.min.js'; ?>"> </script>
<script src="<?php echo BASE_URL . 'Assets/plugins/apexcharts/apexcharts.min.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'Assets/js/main.min.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'Assets/js/sweetalert2@11.js'; ?>"></script>
<script src="<?php echo BASE_URL . 'Assets/js/select2.min.js'; ?>"></script>


<link href="<?php echo BASE_URL . 'Views/components/formulario2.jpg'; ?>" rel="stylesheet" type="font/ttf">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="<?php echo BASE_URL . 'Assets/js/functapi.js'; ?>"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pdfjs-dist/build/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL . 'Assets/plugins/DataTables/datatables.min.js'; ?>"></script>

<script src="<?php echo BASE_URL . 'Assets/js/custom.js'; ?>"></script>
<script>
    const base_url = '<?php echo BASE_URL ?>';
</script>
<?php if (!empty($data['script'])) { ?>
    <script src="<?php echo BASE_URL . 'Assets/js/pages/' . $data['script']; ?>"></script>
<?php } ?>

</hidden>
</body>

</html>