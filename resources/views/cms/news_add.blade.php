
<div class="row">
    <div class="col-lg-6 col-xs-6">
        <div class="register-box-body" style="color: #000000;">
            <p style="font-size: large;" class="login-box-msg">ONGEZA HABARI MPYA</p>
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
                    <input style="color: #000000;" type="text" class="form-control" name="link" id="link" placeholder="Chanzo">
                    <span class="glyphicon glyphicon-link form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <textarea id="description" name="description" rows="5" cols="40" placeholder="Muhtasari"></textarea>
                </div>
                <div class="form-group has-feedback">
                    <label for="file">Choose image</label><br>
                    <input type="file" name="file" id="file">
                </div>
                <div class="row">
                    <div class="col-xs-4 pull-right">
                        <button type="button" class="btn btn-success btn-block btn-flat" onclick="form_save('news')">save</button>
                    </div>
                    <div class="col-xs-4 pull-left">
                        <button type="button" class="btn btn-danger btn-block btn-flat" onclick="menu_links('habari')">cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
