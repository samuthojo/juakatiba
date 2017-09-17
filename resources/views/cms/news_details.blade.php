<div class="row">
    <div class="col-lg-8 col-xs-8" style="margin:auto 20%;">
        @php
            $image = explode(".",$news['image']);
            $name = $image[0];
            $extension = $image[1];
            $thumb_name = $name . "_thumb." . $extension;
        @endphp
        <div class="image_container" id="{{ $news['id'] }}" onmouseover="show_news_image_closer()" style="width:100%; height: 300px; background-image: url('{{ url('uploads/thumb/' . $thumb_name )}}'); background-size: contain; background-position:center; background-repeat: no-repeat;">
            <i class="fa fa-times-circle fa-2x closer" style="color: darkred; padding-left: 50%; padding-top: 140px; cursor: pointer;" onclick="close_news_image({{ $news['id'] }})"></i>
        </div>
        <div style="margin-top: 10px; width: 100%; text-align: left; height: auto;">
            {{ strtoupper("TITLE : " . $news['title']) }}<br>
            {{ strtoupper("LINK : " . $news['link']) }}<br>
            {{ strtoupper("LANGUAGE : " . $news['type']) }}<br>
        </div>
        <div style="position: relative; text-align:left; width: 100%; height: 400px; overflow-y: scroll; margin-top: 5px; padding: 20px; border: solid 3px rgba(169, 169, 169, 0.33); border-radius: 2px;">
            {{ $news['description'] }}
        </div><br>
        <div style="width: 40%; height: 60px; position: absolute;bottom: 5px; left: 50px;">
            <button type="button" class="btn btn-yellow" onclick="form_edit('news',{{ $news['id'] }})" style="border: none; background-color: #ffffff;"><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-yellow" onclick="form_delete('news',{{ $news['id'] }})" style="border: none; background-color: #ffffff;"><i class="fa fa-trash"></i></button>
            <button type="button" class="btn btn-green" onclick="menu_links('habari')" style="border: none; background-color: #ffffff;"><i class="fa fa-close"></i></button>
        </div>
    </div>

</div>
