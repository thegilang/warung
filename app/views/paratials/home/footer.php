<!--footer-->
<footer>
  <div class="container">
  <small>&copy; Copyright 2022-BukaWarung</small>
  </div>
</footer>
<script src="<?=BASE_URL;?>/js/sweetalert2.all.min.js"></script>
<script src="<?=BASE_URL;?>/ckeditor/ckeditor.js"></script>
<script>
     CKEDITOR.replace( 'deskripsi' );
</script>
<script src="//cdn.jsdelivr.net/npm/eruda"></script>
<script>eruda.init();</script>
<?Flasher::flash();?>
</body>
</html>