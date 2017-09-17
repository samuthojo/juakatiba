
<div class="row">
    <div class="col-lg-6 col-xs-6">
        <div class="register-box-body" style="color: #000000;">
            <p style="font-size: large;" class="login-box-msg">ONGEZA MDAHALO MPYA</p>
            <form name="add_form" id="add_form">
                <div class="form-group has-feedback">
                    <select id="type" name="type">
                        <option value="swahili">Swahili</option>
                        <option value="english">English</option>
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <input style="color: #000000;" type="text" class="form-control" name="date" id="date" placeholder="Tarehe">
                    <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                </div>
                <div id="resultText" contenteditable="true" style="min-height: 100px; min-width: 100px; border: 1px solid;"></div>
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
                </div>
                <div class="row">
                    <div class="col-xs-4 pull-right">
                        <button type="button" class="btn btn-success btn-block btn-flat" onclick="form_save('midahalo')">save</button>
                    </div>
                    <div class="col-xs-4 pull-left">
                        <button type="button" class="btn btn-danger btn-block btn-flat" onclick="menu_links('midahalo')">cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#resultText").keypress(function(e) {
        if (e.which == 13 && !e.shiftKey) {
            document.execCommand('insertBrOnReturn',false,null)
        }
    });
</script>
