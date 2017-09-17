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
    border-right: 1px solid #e8e8e8;
    overflow-y: scroll;
    padding-bottom: 200px;
    transition: all 0.6s ease-in;
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
    line-height: 1.35;
    text-align: justify;
    color: #000;
}

.katiba-container .katiba-feed strong{
    font-family: "Lato bold", serif;
}
.katiba-container .katiba-feed p{
    margin-bottom: 10px;
    display: block;
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
.yaliyomo-menu{
    position: absolute;
    left: 10px;
    font-size: 0.7em;
    font-family: "Lato bold", serif;
    color: purple;
    display: none;
}
.yaliyomo-menu:before{
    content: "\2261";
    color: purple;
    font-size: 3em;
}
.katiba-container .right-nav.show{
    transform: translateX(0%);
    z-index: 2;
    width: 100%;
    transition: all 0.3s ease-in;
}
.loader{
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: -50px;
    z-index: 10;
    display: none;
}

@media screen and (max-width: 800px) {
    .katiba-container .right-nav{
        transform: translateX(-100%);
        position: absolute;
        left: 0;
        top: 0;
        display: block;
    }
    #cssmenu{
        position: absolute;
    }
    .katiba-container .mid-nav{
        width: 100%;
    }
    .katiba-container .katiba-feed{
        width: 97%;
    }
    .yaliyomo-menu{
        display: block;
    }

}
</style>

<section class="read-katiba" >
<div class="top-nav">
    <span class="yaliyomo-menu" onclick="yaliyomo()">&nbsp;&nbsp;&nbsp;YALIYOMO</span>
    <div class="loader">Loading...</div>
    <a class="pakua-btn"  href="{{url('assets/images/katiba.pdf')}} " target="_blank">PAKUA PDF &nbsp;&nbsp;<i class="fa fa-cloud-download"></i></a>

</div>
    <div class="katiba-container">
        <div class="right-nav" id='cssmenu'>
            <ul>
                <li><a href='#'><span>Yaliyomo</span></a></li>

                <li class='active '><a href='#'><span>Utangulizi</span></a></li>
                <li class=' has-sub'><a href='#'><span>Sura ya kwanza</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katiba77','1')"><a href='#'><span>Ibara ya 1</span></a></li>
                                <li onclick="ibara_clicked('katiba77','2')"><a href='#'><span>Ibara ya 2</span></a></li>
                                <li onclick="ibara_clicked('katiba77','3')"><a href='#'><span>Ibara ya 3</span></a></li>
                                <li onclick="ibara_clicked('katiba77','4')"><a href='#'><span>Ibara ya 4</span></a></li>
                                <li class='last' onclick="ibara_clicked('katiba77','5')"><a href='#'><span>Ibara ya 5</span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katiba77','6')" ><a href='#'><span>Ibara ya 6</span></a></li>
                                <li onclick="ibara_clicked('katiba77','7')"><a href='#'><span>Ibara ya 7</span></a></li>
                                <li onclick="ibara_clicked('katiba77','8')"><a href='#'><span>Ibara ya 8</span></a></li>
                                <li onclick="ibara_clicked('katiba77','9')"><a href='#'><span>Ibara ya 9</span></a></li>
                                <li onclick="ibara_clicked('katiba77','10')"><a href='#'><span>Ibara ya 10</span></a></li>
                                <li class='last' onclick="ibara_clicked('katiba77','11')"><a href='#'><span>Ibara ya 11</span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya tatu</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Haki ya usawa</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','12')"><a href='#'><span>Ibara ya 12</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','13')"><a href='#'><span>Ibara ya 13</span></a></li>
                                    </ul>
                                </li>
                                <li class='has-sub'><a href='#'><span>Haki ya kuishi</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','14')"><a href='#'><span>Ibara ya 14</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','15')"><a href='#'><span>Ibara ya 15</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','16')"><a href='#'><span>Ibara ya 16</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','17')"><a href='#'><span>Ibara ya 17</span></a></li>
                                    </ul>
                                </li>
                                <li class='has-sub'><a href='#'><span>Haki ya uhuru wa mawazo</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','18')"><a href='#'><span>Ibara ya 18</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','19')"><a href='#'><span>Ibara ya 19</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','20')"><a href='#'><span>Ibara ya 20</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','21')"><a href='#'><span>Ibara ya 21</span></a></li>
                                    </ul>
                                </li>
                                <li class='has-sub'><a href='#'><span>Haki ya Kufanya Kazi</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','22')"><a href='#'><span>Ibara ya 22</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','23')"><a href='#'><span>Ibara ya 23</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','24')"><a href='#'><span>Ibara ya 24</span></a></li>

                                    </ul>
                                </li>
                                <li class='has-sub'><a href='#'><span>Wajibu wa jamii</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','25')"><a href='#'><span>Ibara ya 25</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','26')"><a href='#'><span>Ibara ya 26</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','27')"><a href='#'><span>Ibara ya 27</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','28')"><a href='#'><span>Ibara ya 28</span></a></li>
                                    </ul>
                                </li>
                                <li class='has-sub'><a href='#'><span>Masharti ya jumla</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','29')"><a href='#'><span>Ibara ya 29</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','30')"><a href='#'><span>Ibara ya 30</span></a></li>

                                    </ul>
                                </li>
                                <li class='has-sub last'><a href='#'><span>Madaraka ya Pekee ya Mamlaka ya Nchi</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','31')"><a href='#'><span>Ibara ya 31</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','32')"><a href='#'><span>Ibara ya 32</span></a></li>

                                    </ul>
                                </li>


                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=' has-sub'><a href='#'><span>Sura ya pili</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Raisi</span></a>
                                    <ul>
                                      <li onclick="ibara_clicked('katiba77','33')"><a href='#'><span>Ibara ya 33</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','34')"><a href='#'><span>Ibara ya 34</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','35')"><a href='#'><span>Ibara ya 35</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','36')"><a href='#'><span>Ibara ya 36</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','37')"><a href='#'><span>Ibara ya 37</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','38')"><a href='#'><span>Ibara ya 38</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','39')"><a href='#'><span>Ibara ya 39</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','40')"><a href='#'><span>Ibara ya 40</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','41')"><a href='#'><span>Ibara ya 41</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','42')"><a href='#'><span>Ibara ya 42</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','43')"><a href='#'><span>Ibara ya 43</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','44')"><a href='#'><span>Ibara ya 44</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','45')"><a href='#'><span>Ibara ya 45</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','46')"><a href='#'><span>Ibara ya 46</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','46A')"><a href='#'><span>Ibara ya 46A</span></a></li>
                                      <li onclick="ibara_clicked('katiba77','46B')" class='last'><a href='#'><span>Ibara ya 46B</span></a></li>
                                    </ul>
                                </li>
                         </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Makamu Raisi</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','47')"><a href='#'><span>Ibara ya 47</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','48')"><a href='#'><span>Ibara ya 48</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','49')"><a href='#'><span>Ibara ya 49</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','50')"><a href='#'><span>Ibara ya 50</span></a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya tatu</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Waziri mkuu</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','51')"><a href='#'><span>Ibara ya 51</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','52')"><a href='#'><span>Ibara ya 52</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','53')"><a href='#'><span>Ibara ya 53</span></a></li>


                                    </ul>
                                </li>
                                <li class='has-sub'><a href='#'><span>Baraza la mawaziri na Serikali</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','53A')"><a href='#'><span>Ibara ya 53A</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','54')"><a href='#'><span>Ibara ya 54</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','55')"><a href='#'><span>Ibara ya 55</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','56')"><a href='#'><span>Ibara ya 56</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','57')"><a href='#'><span>Ibara ya 57</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','58')"><a href='#'><span>Ibara ya 58</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','59')"><a href='#'><span>Ibara ya 59</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','60')"><a href='#'><span>Ibara ya 60</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','61')"><a href='#'><span>Ibara ya 61</span></a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </li>
                <li class=' has-sub'><a href='#'><span>Sura ya tatu</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Bunge</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','62')"><a href='#'><span>Ibara ya 62</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','63')"><a href='#'><span>Ibara ya 63</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','64')"><a href='#'><span>Ibara ya 64</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','65')"><a href='#'><span>Ibara ya 65</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Wabunge</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','66')"><a href='#'><span>Ibara ya 66</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','67')"><a href='#'><span>Ibara ya 67</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','68')"><a href='#'><span>Ibara ya 68</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','69')"><a href='#'><span>Ibara ya 69</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','70')"><a href='#'><span>Ibara ya 70</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','71')"><a href='#'><span>Ibara ya 71</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','72')"><a href='#'><span>Ibara ya 72</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','73')"><a href='#'><span>Ibara ya 73</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','74')"><a href='#'><span>Ibara ya 74</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','75')"><a href='#'><span>Ibara ya 75</span></a></li>
                                    </ul>
                                </li>
                                <li class='has-sub'><a href='#'><span>Uchaguzi na Uteuzi wa  wabunge</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','76')"><a href='#'><span>Ibara ya 76</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','77')"><a href='#'><span>Ibara ya 77</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','78')"><a href='#'><span>Ibara ya 78</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','79')"><a href='#'><span>Ibara ya 79</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','80')"><a href='#'><span>Ibara ya 80</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','81')"><a href='#'><span>Ibara ya 81</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','82')"><a href='#'><span>Ibara ya 82</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','83')"><a href='#'><span>Ibara ya 83</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya tatu</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Spika na Naibu wa spika</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','84')"><a href='#'><span>Ibara ya 84</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','85')"><a href='#'><span>Ibara ya 85</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','86')"><a href='#'><span>Ibara ya 86</span></a></li>
                                    </ul>
                                </li>
                                <li class='has-sub'><a href='#'><span>Ofisi ya bunge</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','87')"><a href='#'><span>Ibara ya 87</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','88')"><a href='#'><span>Ibara ya 88</span></a></li>
                                    </ul>
                                </li>
                                <li class='has-sub'><a href='#'><span>Utaratibu washunguli za bunge</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','89')"><a href='#'><span>Ibara ya 89</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','90')"><a href='#'><span>Ibara ya 90</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','91')"><a href='#'><span>Ibara ya 91</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','92')"><a href='#'><span>Ibara ya 92</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','93')"><a href='#'><span>Ibara ya 93</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','94')"><a href='#'><span>Ibara ya 94</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','95')"><a href='#'><span>Ibara ya 95</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','96')"><a href='#'><span>Ibara ya 96</span></a></li>

                                    </ul>
                                </li>
                                <li class='has-sub'><a href='#'><span>Utaratibu wa kutunga sheria</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','97')"><a href='#'><span>Ibara ya 97</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','98')"><a href='#'><span>Ibara ya 98</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','99')"><a href='#'><span>Ibara ya 99</span></a></li>

                                    </ul>
                                </li>
                                <li class='has-sub'><a href='#'><span>Madaraka na Haki za Bunge</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','100')"><a href='#'><span>Ibara ya 100</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','101')"><a href='#'><span>Ibara ya 101</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=' has-sub'><a href='#'><span>Sura ya nne</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Serikali ya mapinduzi ya Zanzibar na Raisi wa Zanzibar</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','102')"><a href='#'><span>Ibara ya 102</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','103')"><a href='#'><span>Ibara ya 103</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','104')"><a href='#'><span>Ibara ya 104</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Baraza la mapinduzi la Zanzibar</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','105')"><a href='#'><span>Ibara ya 105</span></a></li>

                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya tatu</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Baraza la wawakilishi la Zanzibar</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','106')"><a href='#'><span>Ibara ya 106</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','107')"><a href='#'><span>Ibara ya 107</span></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=' has-sub'><a href='#'><span>Sura ya tano</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Utoaji haki katika jamuhuri ya muungano</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','107A')"><a href='#'><span>Ibara ya 107A</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','107B')"><a href='#'><span>Ibara ya 107B</span></a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Mahakama kuu ya jamhuri ya muungano</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','108')"><a href='#'><span>Ibara ya 108</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','109')"><a href='#'><span>Ibara ya 109</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','110')"><a href='#'><span>Ibara ya 110</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','111')"><a href='#'><span>Ibara ya 111</span></a></li>

                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya tatu</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Mamlaka ya kuajiri mahakimu na watumishi wengine wa mahakama za Tanzania Bara na tume ya kuajiri mahakama</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','112')"><a href='#'><span>Ibara ya 112</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','113')"><a href='#'><span>Ibara ya 113</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','113A')"><a href='#'><span>Ibara ya 113A</span></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya nne</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Mahakama kuu ya Zanzibar</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','114')"><a href='#'><span>Ibara ya 114</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','115')"><a href='#'><span>Ibara ya 115</span></a></li>

                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya tano</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Mahakama ya rufani ya jamuhuri ya muungano</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','116')"><a href='#'><span>Ibara ya 116</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','117')"><a href='#'><span>Ibara ya 117</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','118')"><a href='#'><span>Ibara ya 118</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','119')"><a href='#'><span>Ibara ya 119</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','120')"><a href='#'><span>Ibara ya 120</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','121')"><a href='#'><span>Ibara ya 121</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','122')"><a href='#'><span>Ibara ya 122</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','123')"><a href='#'><span>Ibara ya 123</span></a></li>

                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya sita</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Utaratibu wa kupeleka hati za kutekeleza maagizo yaliyomo katika hati zilizotolewa na mahakama</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','124')"><a href='#'><span>Ibara ya 124</span></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya saba</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Mahakama maalumu ya katiba ya jamuhuri ya muungano</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','125')"><a href='#'><span>Ibara ya 125</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','126')"><a href='#'><span>Ibara ya 126</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','127')"><a href='#'><span>Ibara ya 127</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','128')"><a href='#'><span>Ibara ya 128</span></a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=' has-sub'><a href='#'><span>Sura ya sita</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Tume ya haki za binadamu na utawala bora</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','129')"><a href='#'><span>Ibara ya 129</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','130')"><a href='#'><span>Ibara ya 130</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','131')"><a href='#'><span>Ibara ya 131</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Sekretarieti ya maadili ya viongozi wa umma</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','132')"><a href='#'><span>Ibara ya 132</span></a></li>


                                    </ul>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </li>
                <li class=' has-sub'><a href='#'><span>Sura ya saba</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Mchango wa mgawanyo wa mapato ya jamuhuri ya muungano</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','133')"><a href='#'><span>Ibara ya 133</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','134')"><a href='#'><span>Ibara ya 134</span></a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Mfuko mkuu wa hazina na fedha za Jamuhuri ya muungano</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','135')"><a href='#'><span>Ibara ya 135</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','136')"><a href='#'><span>Ibara ya 136</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','137')"><a href='#'><span>Ibara ya 137</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','138')"><a href='#'><span>Ibara ya 138</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','139')"><a href='#'><span>Ibara ya 139</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','140')"><a href='#'><span>Ibara ya 140</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','141')"><a href='#'><span>Ibara ya 141</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','142')"><a href='#'><span>Ibara ya 142</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','143')"><a href='#'><span>Ibara ya 143</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','144')"><a href='#'><span>Ibara ya 144</span></a></li>


                                    </ul>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </li>
                <li class=' has-sub'><a href='#'><span>Sura ya nane</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Madaraka ya Umma</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','145')"><a href='#'><span>Ibara ya 145</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','146')"><a href='#'><span>Ibara ya 146</span></a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </li>
                <li class=' has-sub'><a href='#'><span>Sura ya tisa</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Majeshi ya ulinzi</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','147')"><a href='#'><span>Ibara ya 147</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','148')"><a href='#'><span>Ibara ya 148</span></a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </li>
                <li class=' has-sub'><a href='#'><span>Sura ya kumi</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                            <ul>
                                <li class='has-sub'><a href='#'><span>Mengineyo</span></a>
                                    <ul>
                                        <li onclick="ibara_clicked('katiba77','149')"><a href='#'><span>Ibara ya 149</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','150')"><a href='#'><span>Ibara ya 150</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','151')"><a href='#'><span>Ibara ya 151</span></a></li>
                                        <li onclick="ibara_clicked('katiba77','152')"><a href='#'><span>Ibara ya 152</span></a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </li>







            </ul><!--Closing Ul-->


        </div>
        <div class="mid-nav">
            <div class="top-nav">
                <ul>
                    <li class="active" ><a href="{{url('read_katiba')}}"><a>Katiba ya 1977</a></li>
                    <li><a href="{{url('read_wananchi')}}">Katiba inayo pendekezwa</a></li>

                </ul>
            </div>
            <div class="feed-container">
                <div class="katiba-feed" id="clicked_ibara">{!! $utangulizi['description'] !!}</div>
            </div>

        </div>
    </div>


</section>
<script>
    function ibara_clicked(katiba,ibara){
        $(".loader").show();
        var path = "{{url('fetch_ibara')}}";
        var link = path+"/"+katiba+"/"+ibara;
        $.ajax({
            url: link,
            dataType:'html',
            success:function(result){
                var resultArray = jQuery.parseJSON(result);
                var ibara = resultArray['ibara'];
                $("#clicked_ibara").html(ibara);
                $(".loader").hide();
            }
        });

        if($(".right-nav").hasClass("show")){
            $(".right-nav").removeClass("show");

        }


    }
    function yaliyomo(){
        $(".right-nav").toggleClass("show")
    }
</script>
@endsection
