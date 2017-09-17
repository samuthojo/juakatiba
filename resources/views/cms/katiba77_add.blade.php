
<div class="row">
    <div class="col-lg-10 col-xs-10">
        <div class="register-box-body" style="color: #000000;">
            <p style="font-size: large;" class="login-box-msg">ONGEZA IBARA MPYA</p>
            <form name="add_form" id="add_form">
                <div class="form-group has-feedback">
                   <select id="type" name="type">
                       <option value="swahili">Swahili</option>
                       <option value="english">English</option>
                   </select>
                </div>
                <div class="form-group has-feedback">
                   <select id="katiba" name="katiba">
                       <option value="katiba77">katiba 77</option>
                       <option value="katibampya">katiba mpya</option>
                   </select>
                </div>
                    <select id="ibara" name="ibara">

                        @for($i = 1;$i<=296;$i++)
                                @if($i == '46')
                                    <option value="46">Ibara ya 46</option>
                                    <option value="46A">Ibara ya 46A</option>
                                    <option value="46B">Ibara ya 46B</option>
                                @elseif($i == '53')
                                    <option value="53">Ibara ya 53</option>
                                    <option value="53A">Ibara ya 53A</option>
                                @elseif($i == '107')
                                    <option value="107">Ibara ya 107</option>
                                    <option value="107A">Ibara ya 107A</option>
                                    <option value="107B">Ibara ya 107B</option>
                                @elseif($i == '113')
                                    <option value="113">Ibara ya 113</option>
                                    <option value="113A">Ibara ya 113A</option>
                                @else
                                    <option value="{{ $i }}" >{{ "Ibara ya " . $i }}</option>
                                @endif
                        @endfor
                        <option value="nyongeza ya 1">Nyongeza ya kwanza</option>
                        <option value="nyongeza ya 2">Nyongeza ya pili</option>
                    </select>
                </div>

                <textarea id="myTextarea"></textarea>
                <div class="row">
                    <div class="col-xs-4 pull-right">
                        <button type="button" class="btn btn-success btn-block btn-flat" onclick="form_save('katiba77')">save</button>
                    </div>
                    <div class="col-xs-4 pull-left">
                        <button type="button" class="btn btn-danger btn-block btn-flat" onclick="menu_links('katiba77')">cancel</button>
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
