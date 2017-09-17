function menu_links(header){
    $(".ipf-preloader").fadeIn(0);
    var link = "";
     if(header == 'katiba77'){
        link="api/katiba77";
    }else if(header == 'katiba_pendekezwa'){
        link="api/katiba_pendekezwa";
    }else if(header == 'machapisho'){
        link="api/machapisho";
    }else if(header == 'midahalo'){
        link="api/midahalo";
    }else if(header == 'habari'){
        link="api/habari";
    }else if(header == 'yaliyomo'){
        link="api/yaliyomo";
    }else if(header == 'history'){
        link="api/history";
    }else if(header == 'change_password'){
         link="api/change_password_form";
    }
    $.ajax({
        url: link,
        dataType:'html',
        success:function(result){
            $(".ipf-preloader").fadeOut(1000);
            $("#main_content").html(result);
        }
    });
}

function form_save(form_name){
    link = "api/save_data/"+form_name;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    if(form_name == "katiba77"){
        $(".ipf-preloader").fadeIn(0);
        tinyMCE.triggerSave();
        var datas = new FormData($('#add_form')[0]);

        datas.append("type",$('#type').val());
        datas.append("katiba",$('#katiba').val());
        datas.append("ibara",$('#ibara').val());
        datas.append("description",$('#myTextarea').val());

        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  link,
            data: datas,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                $(".ipf-preloader").fadeOut(1000);
                $("#main_content").html(result);
            }

        });
    }else if(form_name == "machapisho"){
        $(".ipf-preloader").fadeIn(0);
        var datas = new FormData($('#add_form')[0]);

        datas.append("file",$('#file').val());
        datas.append("title",$('#title').val());
        datas.append("author",$('#author').val());
        datas.append("type",$('#type').val());
        datas.append("date",$('#date').val());

        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  link,
            data: datas,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                $(".ipf-preloader").fadeOut(1000);
                $("#main_content").html(result);
            }

        });
    }else if(form_name == "news"){
        $(".ipf-preloader").fadeIn(0);
        var datas = new FormData($('#add_form')[0]);

            datas.append("title",$('#title').val());
            datas.append("type",$('#type').val());
            datas.append("link",$('#link').val());
            datas.append("description",$('#description').val());
            datas.append("file",$('#file').val());

            $.ajax({
                type: 'post',
                dataType: 'html',
                url:  link,
                data: datas,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (result) {
                    $(".ipf-preloader").fadeOut(1000);
                    $("#main_content").html(result);
                }

            });
    }else if(form_name == "midahalo"){
        $(".ipf-preloader").fadeIn(0);
        var datas = new FormData($('#add_form')[0]);

        datas.append("date",$('#date').val());
        datas.append("link",$('#link').val());
        datas.append("type",$('#type').val());
        datas.append("description",$('#resultText').html());

        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  link,
            data: datas,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                $(".ipf-preloader").fadeOut(1000);
                $("#main_content").html(result);
            }

        });
    }else if(form_name == "yaliyomo"){
        $(".ipf-preloader").fadeIn(0);
        var datas = new FormData($('#add_form')[0]);

        tinymce.triggerSave();
        datas.append("type",$('#type').val());
        datas.append("katiba",$('#katiba').val());
        datas.append("context",$('#context').val());
        datas.append("description",$('#myTextarea').val());

        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  link,
            data: datas,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                $(".ipf-preloader").fadeOut(1000);
                $("#main_content").html(result);
            }

        });
    }else if(form_name == "history"){
        $(".ipf-preloader").fadeIn(0);
        var datas = new FormData($('#add_form')[0]);

        tinymce.triggerSave();
        datas.append("date",$('#date').val());
        datas.append("title",$('#title').val());
        datas.append("description",$('#myTextarea').val());

        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  link,
            data: datas,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                $(".ipf-preloader").fadeOut(1000);
                $("#main_content").html(result);
            }

        });
    }
}

function add_form(form_name){
    link = "api/add_form/"+form_name;
    $.ajax({
        url: link,
        dataType:'html',
        success:function(result){
            $("#main_content").html(result);
        }
    });
}

function form_edit(form_name,id){
    var id = id;
    var form_name = form_name;
    var link = "api/form_edit/"+form_name+"/"+id;
        $.ajax({
            url: link,
            dataType:'html',
            success:function(result){
                $("#main_content").html(result);
            }
        });
}

function form_delete(form_name,id){
    if(confirm('Are You sure you want to delete this item?')){
        var id = id;
        var form_name = form_name;
        var link = "api/form_delete/"+form_name+"/"+id;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'delete',
                url: link,
                dataType:'html',
                success:function(result){
                    $("#main_content").html(result);
                }
            });
    }
}

function save_changes(form_name){
    link = "api/save_form_changes/"+form_name;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    if(form_name == "katiba77"){
        $(".ipf-preloader").fadeIn(0);
        tinymce.triggerSave();
        var datas = new FormData($('#edit_form')[0]);

        datas.append("edit_id",$('#edit_id').val());
        datas.append("type",$('#type').val());
        datas.append("katiba",$('#katiba').val());
        datas.append("ibara",$('#ibara').val());
        datas.append("description",$('#myTextarea').val());

        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  link,
            data: datas,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                $(".ipf-preloader").fadeOut(1000);
                $("#main_content").html(result);
            }

        });
    }else if(form_name == "machapisho"){
        $(".ipf-preloader").fadeIn(0);
        var datas = new FormData($('#edit_form')[0]);

        datas.append("edit_id",$('#edit_id').val());
        datas.append("title",$('#title').val());
        datas.append("author",$('#author').val());
        datas.append("type",$('#type').val());
        datas.append("date",$('#date').val());

        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  link,
            data: datas,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                $(".ipf-preloader").fadeOut(1000);
                $("#main_content").html(result);
            }

        });
    }else if(form_name == "midahalo"){
        $(".ipf-preloader").fadeIn(0);
        var datas = new FormData($('#edit_form')[0]);

        datas.append("edit_id",$('#edit_id').val());
        datas.append("link",$('#link').val());
        datas.append("description",$('#resultText').html());
        datas.append("type",$('#type').val());
        datas.append("date",$('#date').val());

        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  link,
            data: datas,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                $(".ipf-preloader").fadeOut(1000);
                $("#main_content").html(result);
            }

        });
    }else if(form_name == "yaliyomo"){
        $(".ipf-preloader").fadeIn(0);
        var datas = new FormData($('#edit_form')[0]);

        tinymce.triggerSave();
        datas.append("edit_id",$('#edit_id').val());
        datas.append("katiba",$('#katiba').val());
        datas.append("context",$('#context').val());
        datas.append("description",$('#myTextarea').val());
        datas.append("type",$('#type').val());

        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  link,
            data: datas,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                $(".ipf-preloader").fadeOut(1000);
                $("#main_content").html(result);
            }

        });
    }else if(form_name == "history"){
        $(".ipf-preloader").fadeIn(0);
        var datas = new FormData($('#edit_form')[0]);

        tinymce.triggerSave();
        datas.append("edit_id",$('#edit_id').val());
        datas.append("title",$('#title').val());
        datas.append("date",$('#date').val());
        datas.append("description",$('#myTextarea').val());
        datas.append("type",$('#type').val());

        $.ajax({
            type: 'post',
            dataType: 'html',
            url:  link,
            data: datas,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                $(".ipf-preloader").fadeOut(1000);
                $("#main_content").html(result);
            }

        });
    }else{
        $(".ipf-preloader").fadeIn(0);

        $.ajax({
            url: link,
            type:'post',
            dataType:'html',
            data:$('#edit_form').serialize(),
            success:function(result){
                $(".ipf-preloader").fadeOut(1000);
                $("#main_content").html(result);
            }
        });
    }

}

function read_description(id){
    link = "api/soma_ibara/"+id;
    $.ajax({
        url: link,
        dataType:'html',
        success:function(result){
            $("#main_content").html(result);
        }
    });
}

function download_chapisho(id,pdf){
    link = "api/download_chapisho_pdf/"+id+"/"+pdf;
    $.ajax({
        url: link,
        dataType:'pdf',
        success:function(result){
            $("#main_content").html(result);
        }
    });
}

function view_news_details(id){
    link = "api/news_details/"+id;
    $.ajax({
        url: link,
        dataType:'html',
        success:function(result){
            $("#main_content").html(result);
        }
    });
}

function view_midahalo_details(id){
    link = "api/midahalo_details/"+id;
    $.ajax({
        url: link,
        dataType:'html',
        success:function(result){
            $("#main_content").html(result);
        }
    });
}

function view_yaliyomo_details(id){
    link = "api/yaliyomo_details/"+id;
    $.ajax({
        url: link,
        dataType:'html',
        success:function(result){
            $("#main_content").html(result);
        }
    });
}

function show_news_image_closer(){
    $('.closer').css({
        'display': 'block'
    });

    $('.closer').parent().mouseout(function(){
        $('.closer').css('display','none');
    });
}

function close_news_image(id){
    if(confirm('Are You sure you want to replace this image?')){
        $('#'+id).css({
            backgroundImage:"none"
        });
        $('#'+id).html("<form id='replace_news_form' style='color: black;' name='replace_news_form'><div><input type='file' id='file' name='file' /> <button type='button' class='btn btn-small btn-success' style='float: left; margin-top: 5px;' onclick='replace_news_image("+id+")'>upload</button></div></form>");

    }
}

function replace_news_image(id){
    form_name = "news";
    link = "api/replace_image/"+form_name+"/"+id;
    var datas = new FormData($('#replace_news_form')[0]);
    var file = $('#file').val();

    datas.append("file",file);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'html',
        url:  link,
        data: datas,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (result) {
            $("#main_content").html(result);
        }

    });
}

function show_team_image_closer(id){
    $('.closer').each(function(){
        $(this).css("display","none");
    });
    $('#image_closer'+id).css({
        "display": "block"
    });
    $('#image_closer'+id).parent().mouseout(function(){
        $('.closer').css('display','none');
    });

}

function close_team_image(id){
    if(confirm('Are You sure you want to replace this image?')){
        $('#'+id).css({
            backgroundImage:"none"
        });
        $('#'+id).html("<form id='replace_team_form' style='color: black;' name='replace_team_form'><div><input type='file' id='file' name='file' /> <button type='button' class='btn btn-small btn-success' style='float: left; margin-top: 5px;' onclick='replace_team_image("+id+")'>upload</button></div></form>");

    }
}

function replace_team_image(id){
    form_name = "team";
    link = "api/replace_image/"+form_name+"/"+id;
    var datas = new FormData($('#replace_team_form')[0]);
    var file = $('#file').val();

    datas.append("file",file);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'html',
        url:  link,
        data: datas,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (result) {
            $("#main_content").html(result);
        }

    });
}

function refresh_page(number){
    if(number == 1){
        menu_links("video_en");
    }else if(number == 2){
        menu_links("video_sw");
    }else if(number == 3){
        menu_links("podcast_en");
    }else if(number == 4){
        menu_links("podcast_sw");
    }
}

function getBoldText(tag){
    var textA = $('#description');
    //textA.focus();
    var text = "";
    if (window.getSelection) {
        text = window.getSelection().toString();
    } else if (document.selection && document.selection.type != "Control") {
        text = document.selection.createRange().text;
    }
    if(tag == "b"){
        document.execCommand('bold',false,null)
    }else if(tag == "u"){
        document.execCommand('underline',false,null)
    }else if(tag == "i"){
        document.execCommand('italic',false,null)
    }else if(tag == "br"){
        document.execCommand('bold',false,null)
    }else if(tag == "font"){
        document.execCommand('fontSize',false,$('#fontSize').val())
    }else if(tag == "fontName"){
        document.execCommand('fontName',false,$('#fontName').val())
    }else if(tag == "foreColor"){
        document.execCommand('foreColor',false,$('#foreColor').val())
    }else if(tag == "backColor"){
        document.execCommand('backColor',false,$('#backColor').val())
    }else if(tag == "justify"){
        if($('#justify').val() == 'justifyLeft'){
            document.execCommand('justifyLeft',false,$('#justify').val())
        }else if($('#justify').val() == 'justifyRight'){
            document.execCommand('justifyRight',false,$('#justify').val())
        }else if($('#justify').val() == 'justifyCenter'){
            document.execCommand('justifyCenter',false,$('#justify').val())
        }else if($('#justify').val() == 'justifyFull'){
            document.execCommand('justifyFull',false,$('#justify').val())
        }
    }

    //alert($('#resultText').html());
}

function save_article(){
    $(".ipf-preloader").fadeIn(0);
    var link = "api/article_submission";
    var datas = new FormData($('#article_form')[0]);
    var description = "";

    datas.append("description",$('#resultText').html());
    datas.append("date",$('#date').val());
    datas.append("file",$('#file').val());
    datas.append("title",$('#title').val());
    datas.append("author",$('#author').val());
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'html',
        url:  link,
        data: datas,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (result) {
            $(".ipf-preloader").fadeOut(1000);
            $("#main_content").html(result);
        }

    });
}

function save_edited_article(){
    $(".ipf-preloader").fadeIn(0);
    link = "api/save_article_changes"
    var datas = new FormData($('#edit_article')[0]);

    var title = $("#title").val();
    var date = $("#date").val();
    var author = $("#author").val();
    var desc = $("#resultText").html();

    datas.append("title",  title);
    datas.append("date",date);
    datas.append("author",author);
    datas.append("description",desc);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'html',
        url:  link,
        data: datas,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (result) {
            $(".ipf-preloader").fadeOut(1000);
            $("#main_content").html(result);
        }

    });
}

function article_details(article_id){
    link = "api/article_details/"+article_id;
    $.ajax({
        url: link,
        dataType:'html',
        success:function(result){
            $("#main_content").html(result);
        }
    });
}

function show_article_en_image_closer(id) {
    $('.closer').css({
        'display': 'block'
    });

    $('.closer').parent().mouseout(function(){
        $('.closer').css('display','none');
    });
}

function close_article_en_image(id){
    if(confirm('Are You sure you want to replace this image?')){
        $('.image_container').css({
            backgroundImage:"none"
        });
        $('.image_container').html("<form id='replace_form' style='color: #000000;' name='replace_form'><div><input type='file' id='file' name='file' /> <button type='button' class='btn btn-small btn-success' style='float: left; margin-top: 5px;' onclick='replace_article_en_image("+id+")'>upload</button> </div></form>");

    }
}

function replace_article_en_image(id){
    form_name = "article_en";
    link = "admin/replace_image/"+form_name+"/"+id;
    var datas = new FormData($('#replace_form')[0]);
    var file = $('#file').val();

    datas.append("file",file);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'html',
        url:  link,
        data: datas,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (result) {
            $("#main_content").html(result);
        }

    });
}

function append_paragraph(){
    $("#new_paragraphs").append("<div style='margin-bottom: 10px;'>"
    +"<textarea name='description' id='description' rows='7' cols='50' class='form-control desc' placeholder='Description'></textarea>"
    +"</div>");
}


function change_password(){
    link = "api/change_password";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: link,
        type:'post',
        dataType:'html',
        data:$('#add_form').serialize(),
        success:function(result){
            var obj = jQuery.parseJSON(result);
            var status = obj['status'];
            $("#old_password").val("");
            $("#new_password").val("");
            $("#confirm_password").val("");
            $("#status").html(status).fadeOut(1000, function() {
                $("#status").html("").fadeIn(0);
            });
      }
    });
}
