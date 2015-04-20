
    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?=base_url();?>/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url();?>/assets/js/bootstrap.min.js"></script>
    <script>
    var token_csrf="<?=$this->security->get_csrf_hash();?>";
    console.log(token_csrf);

    </script>
    <script src="<?=base_url();?>assets/js/chat.js"></script>
</body>

</html>