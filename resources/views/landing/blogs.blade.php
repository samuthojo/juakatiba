<style>
    #ourBlogs{
        
    }

    #ourBlogsContainer{
        max-width: 1000px;
        margin: auto;
    }

    #ourBlogs h2{
        font-family: "Lato bold", sans-serif;
        font-size: 1.4em;
        line-height: 1.7em;
        text-transform: uppercase;
        padding-bottom: 24px;
        color: #000;
        margin: auto;
    }

    #ourBlogsList{
        
    }

    .blog-item{
        display: inline-block;
        width:calc(33.333% - 10px);
        min-width:calc(33.333% - 10px);
        margin-right: 10px;
        background: #fff;
    }

    .blog-item .image{
        display: block;
        max-height: 220px;
        overflow: hidden;
        margin-bottom: 8px;
    }

    .blog-item .image img{
        width: 100%;
    }

    .blog-item .date{
        color: orange;
        font-size: 14px;
    }

    .blog-item h3{
        font-family: "Lato regular", sans-serif;
        font-size: 1.4em;
        line-height: 1.7em;
        color: #000;
    }

    .blog-item .body{

    }

    .blog-item .writer{
        margin-bottom: 11px;
    }

    .blog-item .writer em{
        font-style: italic;
    }

    .blog-item .writer .name{
        font-family: "Lato regular", sans-serif;
        color: #000;
        padding-left: 4px;
    }

    .blog-item .description{
        margin-bottom: 12px;
    }

    .blog-item .link{
        color: orange;
    }
</style>

<div id="ourBlogs">

    <div id="ourBlogsContainer">
        <h2>
            BLOGU ZETU
        </h2>

        <div id="ourBlogsList" class="layout">
            @for($i = 0; $i < 3; $i++)
                <a href="{{$socials[$i]}}" target="_blank" class="blog-item layout vertical">
                    <div class="image">
                        <img src="{{asset('assets/images/socials/' . ($i+1) . '.jpg')}}" alt="#JuaKatiba">
                    </div>

                    <div style="padding: 20px;">
                        <div>
                            <span class="date">14 JANUARY 2017</span>
                            <h3>
                                This is  the blog post title
                            </h3>
                        </div>

                        <div class="body">
                            <div class="writer">
                                <em>written by</em> <span class="name">Mujuni Baitan</span>
                            </div>

                            <div class="description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi, atque consequuntur cupiditate deleniti eaque...
                            </div>

                            <span href="#" class="link">
                                read more...
                            </span>
                        </div>
                    </div>
                </a>
            @endfor
        </div>
    </div>
</div>
