
<div class="row">
    <div class="col-lg-10 col-xs-10">
        <div class="register-box-body" style="color: #000000;">
            <p style="font-size: large;" class="login-box-msg">ONGEZA HISTORIA</p>
            <form name="add_form" id="add_form">
                <div class="form-group has-feedback">
                    <input style="color: #000000;" type="text" class="form-control" name="title" id="title" placeholder="Title">
                    <span class="glyphicon glyphicon-header form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input style="color: #000000;" type="text" class="form-control" name="date" id="date" placeholder="Year">
                    <span class="glyphicon glyphicon-calender form-control-feedback"></span>
                </div>
        </div>

        <textarea id="myTextarea"></textarea>
        <div class="row">
            <div class="col-xs-4 pull-right">
                <button type="button" class="btn btn-success btn-block btn-flat" onclick="form_save('history')">save</button>
            </div>
            <div class="col-xs-4 pull-left">
                <button type="button" class="btn btn-danger btn-block btn-flat" onclick="menu_links('history')">cancel</button>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: '#myTextarea',
        height: 300,
        theme: 'modern',
        fontsize_formats: "8pt 9pt 10pt 11pt 12pt 26pt 36pt",
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons| sizeselect | fontselect |  fontsizeselect ',
        content_css: [
            'api_assets/css/ipfstyle.css'
        ]
    });
</script>

