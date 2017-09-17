
<div class="row">
    <div class="col-lg-6 col-xs-6">
        <div class="register-box-body" style="color: #000000;">
            <p style="font-size: large;" class="login-box-msg"> REKEBISHA HABARI</p>
            <form name="edit_form" id="edit_form">
                <input type="hidden" name="edit_id" id="edit_id" value=" {{ $news['id'] }}" />
                <div class="form-group has-feedback">
                    <select id="type" name="type">
                        <option value="swahili"  {{ $news['type']=='swahili'?'selected="selected"':'' }} >Swahili</option>
                        <option value="english"  {{ $news['type']=='english'?'selected="selected"':'' }} >English</option>
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <input style="color: #000000;" type="text" class="form-control" name="title" id="title" placeholder="Kichwa" value=" {{ $news['title'] }}">
                    <span class="glyphicon glyphicon-header form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input style="color: #000000;" type="text" class="form-control" name="link" id="link" placeholder="Chanzo" value=" {{ $news['link'] }}">
                    <span class="glyphicon glyphicon-link form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <textarea id="description" name="description" rows="5" cols="40" placeholder="Muhtasari"> {{ $news['description'] }}</textarea>
                </div>
                <div class="row">
                    <div class="col-xs-4 pull-right">
                        <button type="button" class="btn btn-success btn-block btn-flat" onclick="save_changes('news')">save</button>
                    </div>
                    <div class="col-xs-4 pull-left">
                        <button type="button" class="btn btn-danger btn-block btn-flat" onclick="menu_links('habari')">cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
