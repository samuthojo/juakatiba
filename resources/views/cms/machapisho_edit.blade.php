
<div class="row">
    <div class="col-lg-6 col-xs-6">
        <div class="register-box-body" style="color: #000000;">
            <p style="font-size: large;" class="login-box-msg">ONGEZA CHAPISHO JIPYA</p>
            <form name="edit_form" id="edit_form">
                <div class="form-group has-feedback">
                    <input type="hidden" name="edit_id" id="edit_id" value="{{ $machapisho['id'] }}">
                    <select id="type" name="type">
                        <option value="swahili" {{ $machapisho['type']=="swahili"?'selected="selected"':'' }} >Swahili</option>
                        <option value="english" {{ $machapisho['type']=="english"?'selected="selected"':'' }} >English</option>
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <input style="color: #000000;" type="text" class="form-control" name="title" id="title" placeholder="Kichwa" value="{{ $machapisho['title'] }}">
                    <span class="glyphicon glyphicon-header form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input style="color: #000000;" type="text" class="form-control" name="author" id="author" placeholder="Mchapishaji" value="{{ $machapisho['author'] }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input style="color: #000000;" type="text" class="form-control" name="date" id="date" placeholder="23 march 2010" value="{{ $machapisho['date'] }}">
                    <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4 pull-right">
                        <button type="button" class="btn btn-success btn-block btn-flat" onclick="save_changes('machapisho')">save</button>
                    </div>
                    <div class="col-xs-4 pull-left">
                        <button type="button" class="btn btn-danger btn-block btn-flat" onclick="menu_links('machapisho')">cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
