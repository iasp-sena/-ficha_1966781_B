
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
    

    <?php if($data["mensaje"]) { ?>
        <script>M.toast({html: '<?= $data["mensaje"] ?>'});</script>
    <?php } ?>       
</body>
</html>