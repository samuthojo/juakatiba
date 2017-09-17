@extends('layouts.app3')
@section('content')
<style>
.read-katiba{
    width: 100%;
    height: auto;
    display: table;
    background: #f1f1f1;
    top: 80px;
    overflow-y: hidden;
    position: fixed;

}
.katiba-container{
    width: 100%;
    height: auto;
    display: table;
}
.katiba-container >div{
    float: left;
}
.katiba-container .right-nav{
    width: 20%;
    height: 100vh;
    background: #fff;
    border-right: 1px solid #e8e8e8;;
}
.katiba-container .mid-nav{
    width: 80%;
    height:auto;
    display: table;
    background: transparent;
}
.top-nav{
    float: none;
    width: 100%;
    margin: 0 auto;
    height: 50px;
    background: #ffffff;
    border-bottom: 1px solid #e8e8e8;
}
.top-nav ul{
    width: 80%;
    height: 100%;
    margin: 0 auto;
}
.top-nav ul li{
    width: 33.333%;
    height: 100%;
    float: left;
    line-height: 5;
    text-align: center;
    font-family: "Lato regular", serif;
    text-transform: uppercase;
    font-size: 0.8em;
}
.top-nav ul li a{
    padding-bottom: 8px;
    color: #333;
}
.top-nav ul li.active a{
    border-bottom: solid 2px purple;
    color: #000;
}
.feed-container{
    width: 100%;
    height: 600px;

    overflow-y: scroll;
    background: transparent;
}
.katiba-container .katiba-feed{
    width: 90%;
    min-height: 900px;
    height: auto;
    display: table;
    background: #ffffff;
    margin: 0 auto 100px;
    top: 20px;
    border: 1px solid #e8e8e8;
    box-shadow: 0 0 1px rgba(0, 0, 0, 0.04);
    font-size: 1.2em;
    padding: 30px 20px;
}
.top-nav .pakua-btn{
    display: block;
    float: right;
    padding: 10px;
    background-color: #7b2789;
    color: #ffffff;
    top: 5px;
    right: 50px;
    font-family: "Lato regular", serif;
}
</style>


<section class="read-katiba" >
<div class="top-nav">
    <a class="pakua-btn"  href="{{url('assets/images/katiba.pdf')}} " target="_blank">PAKUA PDF &nbsp;&nbsp;<i class="fa fa-cloud-download"></i></a>
</div>
    <div class="katiba-container">
        <div class="right-nav" id='cssmenu'>
            <ul>
                <li><a href='#'><span>Yaliyomo</span></a></li>
                <li class='active has-sub'><a href='#'><span>Utangulizi</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Product 1</span></a>
                            <ul>
                                <li><a href='#'><span>Sub Product</span></a></li>
                                <li class='last'><a href='#'><span>Sub Product</span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Product 2</span></a>
                            <ul>
                                <li><a href='#'><span>Sub Product</span></a></li>
                                <li class='last'><a href='#'><span>Sub Product</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='active has-sub'><a href='#'><span>Products</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Product 1</span></a>
                            <ul>
                                <li><a href='#'><span>Sub Product</span></a></li>
                                <li class='last'><a href='#'><span>Sub Product</span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Product 2</span></a>
                            <ul>
                                <li><a href='#'><span>Sub Product</span></a></li>
                                <li class='last'><a href='#'><span>Sub Product</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>


        </div>
        <div class="mid-nav">
            <div class="top-nav">
                <ul>
                    <li ><a <a href="{{url('read_katiba')}}">Katiba ya 1977</a></li>
                    <li><a <a href="{{url('read_wananchi')}}">Katiba pendekezwa ya wananchi</a></li>

                </ul>
            </div>
            <div class="feed-container">
                <div class="katiba-feed">
                   Warioba perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur


                </div>
            </div>

        </div>
    </div>


</section>
@endsection
