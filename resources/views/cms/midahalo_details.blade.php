<div class="row">
    <div class="col-lg-8 col-xs-8" style="margin:auto 20%;">
        <div style="margin-top: 10px; width: 100%; text-align: left; height: auto;">
            {{ strtoupper("DATE : " . $midahalo['date']) }}<br>
            {{ strtoupper("LANGUAGE : " . $midahalo['type']) }}<br>
        </div>
        <div style="position: relative; text-align:left; width: 100%; height: 400px; overflow-y: scroll; margin-top: 5px; padding: 20px; border: solid 3px rgba(169, 169, 169, 0.33); border-radius: 2px;">
            {{ $midahalo['description'] }}
        </div><br>
        <div style="width: 40%; height: 60px; position: absolute;bottom: 5px; left: 50px;">
            <button type="button" class="btn btn-yellow" onclick="form_edit('midahalo',{{ $midahalo['id'] }})" style="border: none; background-color: #ffffff;"><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-yellow" onclick="form_delete('midahalo',{{ $midahalo['id'] }})" style="border: none; background-color: #ffffff;"><i class="fa fa-trash"></i></button>
            <button type="button" class="btn btn-green" onclick="menu_links('midahalo')" style="border: none; background-color: #ffffff;"><i class="fa fa-close"></i></button>
        </div>
    </div>

</div>
