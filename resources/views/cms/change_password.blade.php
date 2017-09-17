<div class="row">
    <div class="col-lg-6 col-xs-6">
    <form name="add_form" id="add_form">
        <div class="form-group has-feedback">
            <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Old password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm new password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="col-xs-4 pull-left">
            <button type="button" class="btn btn-primary btn-block btn-flat bg-olive" onclick="change_password()">Change password</button>
        </div>
    </form>
    <div style="margin-top: 24px; color: green; font-size: 1.5em; min-height: 20px;" id="status">
    </div>
    </div>
</div>