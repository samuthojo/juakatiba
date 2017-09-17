
<div class="row">
    <div class="col-lg-10 col-xs-10">
        <div class="register-box-body" style="color: #000000;">
            <p style="font-size: large;" class="login-box-msg">BADILI YALIYOMO NA UTANGULIZI</p>
            <form name="edit_form" id="edit_form">
                <input type="hidden" name="edit_id" id="edit_id" value="{{ $yaliyomo['id'] }}" />
                <div class="form-group has-feedback">
                    <select id="type" name="type">
                        <option value="swahili" {{ $yaliyomo['type']=="swahili"?"selected='selected'":""  }} >Swahili</option>
                        <option value="english" {{ $yaliyomo['type']=="english"?"selected='selected'":""  }} >English</option>
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <select id="context" name="context">
                        <option value="yaliyomo" {{ $yaliyomo['context']=="yaliyomo"?"selected='selected'":""  }} >Yaliyomo</option>
                        <option value="utangulizi" {{ $yaliyomo['context']=="utangulizi"?"selected='selected'":""  }} >Utangulizi</option>
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <select id="katiba" name="katiba">
                        <option value="katiba77" {{ $yaliyomo['katiba']=="katiba77"?"selected='selected'":""  }} >Katiba 1977</option>
                        <option value="katibaMpya" {{ $yaliyomo['katiba']=="katibaMpya"?"selected='selected'":""  }} >Katiba Mpya</option>
                    </select>
                </div>
                <!--<div id="resultText" contenteditable="true" style="min-height: 100px; min-width: 100px; border: 1px solid;">{{ $yaliyomo['description'] }}</div>
                <div class="btn-group">
                    <button type="button" class="btn btn-small btn-primary btn-facebook" onclick="getBoldText('b')">bold</button>
                    <button type="button" class="btn btn-small btn-default btn-flat" onclick="getBoldText('i')">italic</button>
                    <button type="button" class="btn btn-small btn-danger btn-flat" onclick="getBoldText('u')">underline</button>
                    <select id="fontSize" name="fontSize" onchange="getBoldText('font')">
                        <option>font size</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                    <select id="fontName" name="fontName" onchange="getBoldText('fontName')">
                        <option>font names</option>
                        <option selected="selected" value="Roboto">Roboto</option>
                        <option value="Arial black">Arial black</option>
                        <option value="Arial MT">Arial MT</option>
                        <option value="Helvetica">Helvetica</option>
                        <option value="Bodoni">Bodoni</option>
                        <option value="Times new roman">Times new roman</option>
                        <option value="Book antiqua">Book antiqua</option>
                        <option value="Calisto MT">Calisto MT</option>
                        <option value="Courier">Courier</option>
                        <option value="Courier">Coronel</option>
                        <option value="Courier">Dauphin</option>
                    </select>
                    <select id="foreColor" name="foreColor" onchange="getBoldText('foreColor')">
                        <option>font color</option>
                        <option value="#000000">black</option>
                        <option value="#333333">black too?</option>
                        <option value="#87CEEB">blue</option>
                    </select>
                    <select  id="backColor" name="backColor" onchange="getBoldText('backColor')">
                        <option>back color</option>
                        <option value="#ffffff">white</option>
                        <option value="#87CEEB">blue</option>
                    </select>
                    <select id="justify" name="justify" onchange="getBoldText('justify')">
                        <option>Justify</option>
                        <option value="justifyLeft">Left</option>
                        <option value="justifyCenter">Center</option>
                        <option value="justifyRight">Right</option>
                        <option value="justifyFull">Full</option>
                    </select>
                </div>-->
                <textarea id="myTextarea">{{ $yaliyomo['description'] }}</textarea>
                <div class="row">
                    <div class="col-xs-4 pull-right">
                        <button type="button" class="btn btn-success btn-block btn-flat" onclick="save_changes('yaliyomo')">save</button>
                    </div>
                    <div class="col-xs-4 pull-left">
                        <button type="button" class="btn btn-danger btn-block btn-flat" onclick="menu_links('yaliyomo')">cancel</button>
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
