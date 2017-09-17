
<div class="row">
    <div class="col-lg-6 col-xs-6">
        <div class="register-box-body" style="color: #000000;">
            <p style="font-size: large;" class="login-box-msg">ONGEZA CHAPISHO JIPYA</p>
            <form name="add_form" id="add_form">
                <div class="form-group has-feedback">
                    <select id="type" name="type">
                        <option value="swahili">Swahili</option>
                        <option value="english">English</option>
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <input style="color: #000000;" type="text" class="form-control" name="title" id="title" placeholder="Kichwa">
                    <span class="glyphicon glyphicon-header form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input style="color: #000000;" type="text" class="form-control" name="author" id="author" placeholder="Mchapishaji">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input style="color: #000000;" type="text" class="form-control" name="date" id="date" placeholder="23 march 2010">
                    <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label for="file">Choose pdf</label><br>
                    <input type="file" name="file" id="file">
                </div>
                <div class="row">
                    <div class="col-xs-4 pull-right">
                        <button type="button" class="btn btn-success btn-block btn-flat" onclick="form_save('machapisho')">save</button>
                    </div>
                    <div class="col-xs-4 pull-left">
                        <button type="button" class="btn btn-danger btn-block btn-flat" onclick="menu_links('machapisho')">cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
