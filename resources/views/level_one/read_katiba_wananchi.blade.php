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
    overflow-y: scroll;
    padding-bottom: 200px;
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
    <a class="pakua-btn"  href="{{url('assets/images/katiba.pdf')}}" target="_blank">PAKUA PDF &nbsp;&nbsp;<i class="fa fa-cloud-download"></i></a>
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
                        <li class='has-sub'><a href='#'><span>Jina,Mipaka,alama,lugha na tunu za taifa</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','1')"><a href='#'><span>Ibara ya 1</span></a></li>
                                <li onclick="ibara_clicked('katibampya','2')"><a href='#'><span>Ibara ya 2</span></a></li>
                                <li onclick="ibara_clicked('katibampya','3')"><a href='#'><span>Ibara ya 3</span></a></li>
                                <li onclick="ibara_clicked('katibampya','4')"><a href='#'><span>Ibara ya 4</span></a></li>
                                <li onclick="ibara_clicked('katibampya','5')"><a href='#'><span>Ibara ya 5</span></a></li>
                                <li onclick="ibara_clicked('katibampya','6')"><a href='#'><span>Ibara ya 6</span></a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Mamlaka ya wananchi,utii na hifadi ya katiba </span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','7')"><a href='#'><span>Ibara ya 7</span></a></li>
                                <li onclick="ibara_clicked('katibampya','8')"><a href='#'><span>Ibara ya 8</span></a></li>
                                <li onclick="ibara_clicked('katibampya','9')"><a href='#'><span>Ibara ya 9</span></a></li>
                                <li onclick="ibara_clicked('katibampya','10')"><a href='#'><span>Ibara ya 10</span></a></li>
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
                        <li class='has-sub'><a href='#'><span>Malengo makuu</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','11')"><a href='#'><span>Ibara ya 11</span></a></li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Malengo ya kisiasa</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','12')"><a href='#'><span>Ibara ya 12</span></a></li>


                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya tatu</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Malengo ya kiuchumi kijamii na kiutamaduni</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','13')"><a href='#'><span>Ibara ya 13</span></a></li>
                                <li onclick="ibara_clicked('katibampya','14')"><a href='#'><span>Ibara ya 14</span></a></li>
                                <li onclick="ibara_clicked('katibampya','15')"><a href='#'><span>Ibara ya 15</span></a></li>


                            </ul>
                        </li>

                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya nne</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Utafiti, dira ya maendeleo, mipango na utekelezaji wa malengo ya taifa </span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','16')"><a href='#'><span>Ibara ya 16</span></a></li>
                                <li onclick="ibara_clicked('katibampya','17')"><a href='#'><span>Ibara ya 17</span></a></li>
                                <li onclick="ibara_clicked('katibampya','18')"><a href='#'><span>Ibara ya 18</span></a></li>
                                <li onclick="ibara_clicked('katibampya','19')"><a href='#'><span>Ibara ya 19</span></a></li>
                                <li onclick="ibara_clicked('katibampya','20')"><a href='#'><span>Ibara ya 20</span></a></li>
                                <li onclick="ibara_clicked('katibampya','21')"><a href='#'><span>Ibara ya 21</span></a></li>


                            </ul>
                        </li>

                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya tano</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Sera ya mambo ya nje </span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','22')"><a href='#'><span>Ibara ya 22</span></a></li>



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
                        <li class='has-sub'><a href='#'><span>Ardhi, maliasili na mazingira</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','23')"><a href='#'><span>Ibara ya 23</span></a></li>
                                <li onclick="ibara_clicked('katibampya','24')"><a href='#'><span>Ibara ya 24</span></a></li>
                                <li onclick="ibara_clicked('katibampya','25')"><a href='#'><span>Ibara ya 25</span></a></li>
                                <li onclick="ibara_clicked('katibampya','26')"><a href='#'><span>Ibara ya 26</span></a></li>
                                <li onclick="ibara_clicked('katibampya','27')"><a href='#'><span>Ibara ya 27</span></a></li>


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
                        <li class='has-sub'><a href='#'><span>Maadili ya uongozi na utumishi wa umma</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','28')"><a href='#'><span>Ibara ya 28</span></a></li>
                                <li onclick="ibara_clicked('katibampya','29')"><a href='#'><span>Ibara ya 29</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Miiko ya uongozi wa umma</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','30')"><a href='#'><span>Ibara ya 30</span></a></li>
                                <li onclick="ibara_clicked('katibampya','31')"><a href='#'><span>Ibara ya 31</span></a></li>

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
                        <li class='has-sub'><a href='#'><span>Haki za binadamu </span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','32')"><a href='#'><span>Ibara ya 32</span></a></li>
                                <li onclick="ibara_clicked('katibampya','33')"><a href='#'><span>Ibara ya 33</span></a></li>
                                <li onclick="ibara_clicked('katibampya','34')"><a href='#'><span>Ibara ya 34</span></a></li>
                                <li onclick="ibara_clicked('katibampya','35')"><a href='#'><span>Ibara ya 35</span></a></li>
                                <li onclick="ibara_clicked('katibampya','36')"><a href='#'><span>Ibara ya 36</span></a></li>
                                <li onclick="ibara_clicked('katibampya','37')"><a href='#'><span>Ibara ya 37</span></a></li>
                                <li onclick="ibara_clicked('katibampya','38')"><a href='#'><span>Ibara ya 38</span></a></li>
                                <li onclick="ibara_clicked('katibampya','39')"><a href='#'><span>Ibara ya 39</span></a></li>
                                <li onclick="ibara_clicked('katibampya','40')"><a href='#'><span>Ibara ya 40</span></a></li>
                                <li onclick="ibara_clicked('katibampya','41')"><a href='#'><span>Ibara ya 41</span></a></li>
                                <li onclick="ibara_clicked('katibampya','42')"><a href='#'><span>Ibara ya 42</span></a></li>
                                <li onclick="ibara_clicked('katibampya','43')"><a href='#'><span>Ibara ya 43</span></a></li>
                                <li onclick="ibara_clicked('katibampya','44')"><a href='#'><span>Ibara ya 44</span></a></li>
                                <li onclick="ibara_clicked('katibampya','45')"><a href='#'><span>Ibara ya 45</span></a></li>
                                <li onclick="ibara_clicked('katibampya','46')"><a href='#'><span>Ibara ya 46</span></a></li>
                                <li onclick="ibara_clicked('katibampya','47')"><a href='#'><span>Ibara ya 47</span></a></li>
                                <li onclick="ibara_clicked('katibampya','48')"><a href='#'><span>Ibara ya 48</span></a></li>
                                <li onclick="ibara_clicked('katibampya','49')"><a href='#'><span>Ibara ya 49</span></a></li>
                                <li onclick="ibara_clicked('katibampya','50')"><a href='#'><span>Ibara ya 50</span></a></li>
                                <li onclick="ibara_clicked('katibampya','51')"><a href='#'><span>Ibara ya 51</span></a></li>
                                <li onclick="ibara_clicked('katibampya','52')"><a href='#'><span>Ibara ya 52</span></a></li>
                                <li onclick="ibara_clicked('katibampya','53')"><a href='#'><span>Ibara ya 53</span></a></li>
                                <li onclick="ibara_clicked('katibampya','54')"><a href='#'><span>Ibara ya 54</span></a></li>
                                <li onclick="ibara_clicked('katibampya','55')"><a href='#'><span>Ibara ya 55</span></a></li>
                                <li onclick="ibara_clicked('katibampya','56')"><a href='#'><span>Ibara ya 56</span></a></li>
                                <li onclick="ibara_clicked('katibampya','57')"><a href='#'><span>Ibara ya 57</span></a></li>
                                <li onclick="ibara_clicked('katibampya','58')"><a href='#'><span>Ibara ya 58</span></a></li>
                                <li onclick="ibara_clicked('katibampya','59')"><a href='#'><span>Ibara ya 59</span></a></li>


                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>(a) Wajibu wa Raia na Jamii kwa Taifa</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','60')"><a href='#'><span>Ibara ya 60</span></a></li>
                                <li onclick="ibara_clicked('katibampya','61')"><a href='#'><span>Ibara ya 61</span></a></li>
                                <li onclick="ibara_clicked('katibampya','62')"><a href='#'><span>Ibara ya 62</span></a></li>
                                <li onclick="ibara_clicked('katibampya','63')"><a href='#'><span>Ibara ya 63</span></a></li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(b) Wajibu wa Mamlaka ya Nchi</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','64')"><a href='#'><span>Ibara ya 64</span></a></li>
                                <li onclick="ibara_clicked('katibampya','65')"><a href='#'><span>Ibara ya 65</span></a></li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(c) Mipaka ya Haki za Binadamu</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','66')"><a href='#'><span>Ibara ya 66</span></a></li>
                                <li onclick="ibara_clicked('katibampya','67')"><a href='#'><span>Ibara ya 67</span></a></li>


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
                        <li class='has-sub'><a href='#'><span>Uraia katika jamhuri ya muungano</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','68')"><a href='#'><span>Ibara ya 68</span></a></li>
                                <li onclick="ibara_clicked('katibampya','69')"><a href='#'><span>Ibara ya 69</span></a></li>
                                <li onclick="ibara_clicked('katibampya','70')"><a href='#'><span>Ibara ya 70</span></a></li>
                                <li onclick="ibara_clicked('katibampya','71')"><a href='#'><span>Ibara ya 71</span></a></li>
                                <li onclick="ibara_clicked('katibampya','72')"><a href='#'><span>Ibara ya 72</span></a></li>
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
                        <li class='has-sub'><a href='#'><span>.	Muundo wa jamhuri ya muungano</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','73')"><a href='#'><span>Ibara ya 73</span></a></li>
                                <li onclick="ibara_clicked('katibampya','74')"><a href='#'><span>Ibara ya 74</span></a></li>
                                <li onclick="ibara_clicked('katibampya','75')"><a href='#'><span>Ibara ya 75</span></a></li>
                                <li onclick="ibara_clicked('katibampya','76')"><a href='#'><span>Ibara ya 76</span></a></li>
                                <li onclick="ibara_clicked('katibampya','77')"><a href='#'><span>Ibara ya 77</span></a></li>
                                <li onclick="ibara_clicked('katibampya','78')"><a href='#'><span>Ibara ya 78</span></a></li>


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
                        <li class='has-sub'><a href='#'><span>(a) Serikali</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','79')"><a href='#'><span>Ibara ya 79</span></a></li>


                            </ul>
                        </li>

                        <li class='has-sub'><a href='#'><span>(b) Raisi</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','80')"><a href='#'><span>Ibara ya 80</span></a></li>
                                <li onclick="ibara_clicked('katibampya','81')"><a href='#'><span>Ibara ya 81</span></a></li>
                                <li onclick="ibara_clicked('katibampya','82')"><a href='#'><span>Ibara ya 82</span></a></li>
                                <li onclick="ibara_clicked('katibampya','83')"><a href='#'><span>Ibara ya 83</span></a></li>
                                <li onclick="ibara_clicked('katibampya','84')"><a href='#'><span>Ibara ya 84</span></a></li>
                                <li onclick="ibara_clicked('katibampya','85')"><a href='#'><span>Ibara ya 85</span></a></li>
                                <li onclick="ibara_clicked('katibampya','86')"><a href='#'><span>Ibara ya 86</span></a></li>


                            </ul>
                        </li>

                        <li class='has-sub'><a href='#'><span>(c) Uchaguzi wa Rais</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','87')"><a href='#'><span>Ibara ya 87</span></a></li>
                                <li onclick="ibara_clicked('katibampya','88')"><a href='#'><span>Ibara ya 88</span></a></li>
                                <li onclick="ibara_clicked('katibampya','89')"><a href='#'><span>Ibara ya 89</span></a></li>
                                <li onclick="ibara_clicked('katibampya','90')"><a href='#'><span>Ibara ya 90</span></a></li>
                                <li onclick="ibara_clicked('katibampya','91')"><a href='#'><span>Ibara ya 91</span></a></li>
                                <li onclick="ibara_clicked('katibampya','92')"><a href='#'><span>Ibara ya 92</span></a></li>



                            </ul>
                        </li>

                        <li class='has-sub'><a href='#'><span>(d) Masharti Mahsusi kuhusu Mamlaka ya Rais</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','93')"><a href='#'><span>Ibara ya 93</span></a></li>
                                <li onclick="ibara_clicked('katibampya','94')"><a href='#'><span>Ibara ya 94</span></a></li>
                                <li onclick="ibara_clicked('katibampya','95')"><a href='#'><span>Ibara ya 95</span></a></li>
                                <li onclick="ibara_clicked('katibampya','96')"><a href='#'><span>Ibara ya 96</span></a></li>
                                <li onclick="ibara_clicked('katibampya','97')"><a href='#'><span>Ibara ya 97</span></a></li>
                                <li onclick="ibara_clicked('katibampya','98')"><a href='#'><span>Ibara ya 98</span></a></li>





                            </ul>
                        </li>

                        <li class='has-sub'><a href='#'><span>(e) Makamu wa Raisi</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','99')"><a href='#'><span>Ibara ya 99</span></a></li>
                                <li onclick="ibara_clicked('katibampya','100')"><a href='#'><span>Ibara ya 100</span></a></li>
                                <li onclick="ibara_clicked('katibampya','101')"><a href='#'><span>Ibara ya 101</span></a></li>
                                <li onclick="ibara_clicked('katibampya','102')"><a href='#'><span>Ibara ya 102</span></a></li>
                                <li onclick="ibara_clicked('katibampya','103')"><a href='#'><span>Ibara ya 103</span></a></li>
                                <li onclick="ibara_clicked('katibampya','104')"><a href='#'><span>Ibara ya 104</span></a></li>
                                <li onclick="ibara_clicked('katibampya','105')"><a href='#'><span>Ibara ya 105</span></a></li>
                                <li onclick="ibara_clicked('katibampya','106')"><a href='#'><span>Ibara ya 106</span></a></li>
                                <li onclick="ibara_clicked('katibampya','107')"><a href='#'><span>Ibara ya 107</span></a></li>
                                <li onclick="ibara_clicked('katibampya','108')"><a href='#'><span>Ibara ya 108</span></a></li>
                                <li onclick="ibara_clicked('katibampya','109')"><a href='#'><span>Ibara ya 109</span></a></li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>(a) Waziri Mkuu</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','110')"><a href='#'><span>Ibara ya 110</span></a></li>
                                <li onclick="ibara_clicked('katibampya','111')"><a href='#'><span>Ibara ya 111</span></a></li>
                                <li onclick="ibara_clicked('katibampya','112')"><a href='#'><span>Ibara ya 112</span></a></li>
                                <li onclick="ibara_clicked('katibampya','113')"><a href='#'><span>Ibara ya 113</span></a></li>


                            </ul>
                        </li>

                        <li class='has-sub'><a href='#'><span>(b) Baraza la Mawaziri</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','114')"><a href='#'><span>Ibara ya 114</span></a></li>
                                <li onclick="ibara_clicked('katibampya','115')"><a href='#'><span>Ibara ya 115</span></a></li>
                                <li onclick="ibara_clicked('katibampya','116')"><a href='#'><span>Ibara ya 116</span></a></li>
                                <li onclick="ibara_clicked('katibampya','117')"><a href='#'><span>Ibara ya 117</span></a></li>



                            </ul>
                        </li>

                        <li class='has-sub'><a href='#'><span>(c) Mwanasheria Mkuu wa Serikali</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','118')"><a href='#'><span>Ibara ya 118</span></a></li>
                                <li onclick="ibara_clicked('katibampya','119')"><a href='#'><span>Ibara ya 119</span></a></li>




                            </ul>
                        </li>

                        <li class='has-sub'><a href='#'><span>(d) Mkurugenzi wa Mashtaka</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','120')"><a href='#'><span>Ibara ya 120</span></a></li>





                            </ul>
                        </li>

                        <li class='has-sub'><a href='#'><span>(e) Katibu Mkuu Kiongozi</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','121')"><a href='#'><span>Ibara ya 121</span></a></li>


                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(f) Utekelezaji wa Shughuli za Baraza la Mawaziri</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','122')"><a href='#'><span>Ibara ya 122</span></a></li>


                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(g) Wakuu wa Mikoa</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','123')"><a href='#'><span>Ibara ya 123</span></a></li>


                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya tatu</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Mdaraka ya umma</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','124')"><a href='#'><span>Ibara ya 124</span></a></li>
                                <li onclick="ibara_clicked('katibampya','125')"><a href='#'><span>Ibara ya 125</span></a></li>
                                <li onclick="ibara_clicked('katibampya','126')"><a href='#'><span>Ibara ya 126</span></a></li>
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
                        <li class='has-sub'><a href='#'><span>Uhusiano na uratibu wa mambo ya muungano </span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','127')"><a href='#'><span>Ibara ya 127</span></a></li>
                                <li onclick="ibara_clicked('katibampya','128')"><a href='#'><span>Ibara ya 128</span></a></li>

                            </ul>
                        </li>
                    </ul>
                </li>


            </ul>
        </li>
        <li class=' has-sub'><a href='#'><span>Sura ya kumi na moja</span></a>
            <ul>
                <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Muundo na madaraka ya bunge</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','129')"><a href='#'><span>Ibara ya 129</span></a></li>
                                <li onclick="ibara_clicked('katibampya','130')"><a href='#'><span>Ibara ya 130</span></a></li>
                                <li onclick="ibara_clicked('katibampya','131')"><a href='#'><span>Ibara ya 131</span></a></li>
                                <li onclick="ibara_clicked('katibampya','132')"><a href='#'><span>Ibara ya 132</span></a></li>
                                <li onclick="ibara_clicked('katibampya','133')"><a href='#'><span>Ibara ya 133</span></a></li>
                                <li onclick="ibara_clicked('katibampya','134')"><a href='#'><span>Ibara ya 134</span></a></li>
                                <li onclick="ibara_clicked('katibampya','135')"><a href='#'><span>Ibara ya 135</span></a></li>
                                <li onclick="ibara_clicked('katibampya','136')"><a href='#'><span>Ibara ya 136</span></a></li>
                                <li onclick="ibara_clicked('katibampya','137')"><a href='#'><span>Ibara ya 137</span></a></li>
                                <li onclick="ibara_clicked('katibampya','138')"><a href='#'><span>Ibara ya 138</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Wabunge</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','139')"><a href='#'><span>Ibara ya 139</span></a></li>
                                <li onclick="ibara_clicked('katibampya','140')"><a href='#'><span>Ibara ya 140</span></a></li>
                                <li onclick="ibara_clicked('katibampya','141')"><a href='#'><span>Ibara ya 141</span></a></li>
                                <li onclick="ibara_clicked('katibampya','142')"><a href='#'><span>Ibara ya 142</span></a></li>
                                <li onclick="ibara_clicked('katibampya','143')"><a href='#'><span>Ibara ya 143</span></a></li>
                                <li onclick="ibara_clicked('katibampya','144')"><a href='#'><span>Ibara ya 144</span></a></li>
                                <li onclick="ibara_clicked('katibampya','145')"><a href='#'><span>Ibara ya 145</span></a></li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya tatu</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Uongozi wa bunge</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','146')"><a href='#'><span>Ibara ya 146</span></a></li>
                                <li onclick="ibara_clicked('katibampya','147')"><a href='#'><span>Ibara ya 147</span></a></li>
                                <li onclick="ibara_clicked('katibampya','148')"><a href='#'><span>Ibara ya 148</span></a></li>
                                <li onclick="ibara_clicked('katibampya','149')"><a href='#'><span>Ibara ya 149</span></a></li>
                                <li onclick="ibara_clicked('katibampya','150')"><a href='#'><span>Ibara ya 150</span></a></li>
                                <li onclick="ibara_clicked('katibampya','151')"><a href='#'><span>Ibara ya 151</span></a></li>
                                <li onclick="ibara_clicked('katibampya','152')"><a href='#'><span>Ibara ya 152</span></a></li>


                            </ul>
                        </li>

                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya tatu</span></a>
                                    <ul>
                                        <li class='has-sub'><a href='#'><span>Utaratibu wa shughuli za bunge</span></a>
                                            <ul>
                                                <li onclick="ibara_clicked('katibampya','153')"><a href='#'><span>Ibara ya 153</span></a></li>
                                                <li onclick="ibara_clicked('katibampya','154')"><a href='#'><span>Ibara ya 154</span></a></li>
                                                <li onclick="ibara_clicked('katibampya','155')"><a href='#'><span>Ibara ya 155</span></a></li>
                                                <li onclick="ibara_clicked('katibampya','156')"><a href='#'><span>Ibara ya 156</span></a></li>
                                                <li onclick="ibara_clicked('katibampya','157')"><a href='#'><span>Ibara ya 157</span></a></li>
                                                <li onclick="ibara_clicked('katibampya','158')"><a href='#'><span>Ibara ya 158</span></a></li>



                                            </ul>
                                        </li>

                                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya tano</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Madaraka na haki za bunge</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','159')"><a href='#'><span>Ibara ya 159</span></a></li>




                            </ul>
                        </li>

                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya sita</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>(a) Tume ya Utumishi wa Bunge</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','160')"><a href='#'><span>Ibara ya 160</span></a></li>
                                <li onclick="ibara_clicked('katibampya','161')"><a href='#'><span>Ibara ya 161</span></a></li>
                            </ul>
                        </li>

                        <li class='has-sub'><a href='#'><span>(b) Mfuko wa Bunge</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','162')"><a href='#'><span>Ibara ya 162</span></a></li>

                            </ul>
                        </li>

                    </ul>
                </li>


            </ul>
        </li>


        <li class=' has-sub'><a href='#'><span>Sura ya kumi na moja</span></a>
            <ul>
                <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>(a) Serikali ya Mapinduzi ya Zanzibar</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','163')"><a href='#'><span>Ibara ya 163</span></a></li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(b)Rais wa Zanzibar</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','164')"><a href='#'><span>Ibara ya 164</span></a></li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(c) Baraza la Mapinduzi la Zanzibar</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','165')"><a href='#'><span>Ibara ya 165</span></a></li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Baraza la wawakilishi la zanzibar </span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','166')"><a href='#'><span>Ibara ya 166</span></a></li>


                            </ul>
                        </li>
                    </ul>
                </li>



            </ul>
        </li>

        <li class=' has-sub'><a href='#'><span>Sura ya kumi na mbili</span></a>
            <ul>
                <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Misingi ya utoaji haki na uhuru wa mahakama</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','167')"><a href='#'><span>Ibara ya 167</span></a></li>
                                <li onclick="ibara_clicked('katibampya','168')"><a href='#'><span>Ibara ya 168</span></a></li>
                                <li onclick="ibara_clicked('katibampya','169')"><a href='#'><span>Ibara ya 169</span></a></li>

                            </ul>
                        </li>

                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>(a) Mahakama ya Jamhuri ya Muungano </span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','170')"><a href='#'><span>Ibara ya 170</span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(b) Mahakama ya Juu ya Jamhuri ya Muungano</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','171')"><a href='#'><span>Ibara ya 171</span></a></li>
                                <li onclick="ibara_clicked('katibampya','172')"><a href='#'><span>Ibara ya 172</span></a></li>
                                <li onclick="ibara_clicked('katibampya','173')"><a href='#'><span>Ibara ya 173</span></a></li>
                                <li onclick="ibara_clicked('katibampya','174')"><a href='#'><span>Ibara ya 174</span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(c) Uteuzi wa Jaji wa Mahakama ya Juu</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','175')"><a href='#'><span>Ibara ya 175</span></a></li>
                                <li onclick="ibara_clicked('katibampya','176')"><a href='#'><span>Ibara ya 176</span></a></li>
                                <li onclick="ibara_clicked('katibampya','177')"><a href='#'><span>Ibara ya 177</span></a></li>
                                <li onclick="ibara_clicked('katibampya','178')"><a href='#'><span>Ibara ya 178</span></a></li>
                                <li onclick="ibara_clicked('katibampya','179')"><a href='#'><span>Ibara ya 179</span></a></li>
                                <li onclick="ibara_clicked('katibampya','180')"><a href='#'><span>Ibara ya 180</span></a></li>
                                <li onclick="ibara_clicked('katibampya','181')"><a href='#'><span>Ibara ya 181</span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(d) Mahakama ya Rufani ya Jamhuri ya Muungano</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','182')"><a href='#'><span>Ibara ya 182</span></a></li>
                                <li onclick="ibara_clicked('katibampya','183')"><a href='#'><span>Ibara ya 183</span></a></li>
                                <li onclick="ibara_clicked('katibampya','184')"><a href='#'><span>Ibara ya 184</span></a></li>
                                <li onclick="ibara_clicked('katibampya','185')"><a href='#'><span>Ibara ya 185</span></a></li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(e) Uteuzi wa Jaji wa Mahakama ya Rufani</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','186')"><a href='#'><span>Ibara ya 186</span></a></li>
                                <li onclick="ibara_clicked('katibampya','187')"><a href='#'><span>Ibara ya 187</span></a></li>
                                <li onclick="ibara_clicked('katibampya','188')"><a href='#'><span>Ibara ya 188</span></a></li>
                                <li onclick="ibara_clicked('katibampya','189')"><a href='#'><span>Ibara ya 189</span></a></li>
                                <li onclick="ibara_clicked('katibampya','190')"><a href='#'><span>Ibara ya 190</span></a></li>
                                <li onclick="ibara_clicked('katibampya','191')"><a href='#'><span>Ibara ya 191</span></a></li>
                                <li onclick="ibara_clicked('katibampya','192')"><a href='#'><span>Ibara ya 192</span></a></li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(f) Mahakama Kuu ya Jamhuri ya Muungano</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','193')"><a href='#'><span>Ibara ya 193</span></a></li>
                                <li onclick="ibara_clicked('katibampya','194')"><a href='#'><span>Ibara ya 194</span></a></li>
                                <li onclick="ibara_clicked('katibampya','195')"><a href='#'><span>Ibara ya 195</span></a></li>
                                <li onclick="ibara_clicked('katibampya','196')"><a href='#'><span>Ibara ya 196</span></a></li>
                                <li onclick="ibara_clicked('katibampya','197')"><a href='#'><span>Ibara ya 197</span></a></li>


                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(g) Mahakama Kuu ya Zanzibar</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','198')"><a href='#'><span>Ibara ya 198</span></a></li>
                                <li onclick="ibara_clicked('katibampya','199')"><a href='#'><span>Ibara ya 199</span></a></li>



                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(h) Usimamizi wa Shughuli za Mahakama</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','200')"><a href='#'><span>Ibara ya 200</span></a></li>
                                <li onclick="ibara_clicked('katibampya','201')"><a href='#'><span>Ibara ya 201</span></a></li>
                                <li onclick="ibara_clicked('katibampya','202')"><a href='#'><span>Ibara ya 202</span></a></li>
                                <li onclick="ibara_clicked('katibampya','203')"><a href='#'><span>Ibara ya 203</span></a></li>



                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya tatu</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>(a) Tume ya Utumishi wa Mahakama </span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','204')"><a href='#'><span>Ibara ya 204</span></a></li>
                                <li onclick="ibara_clicked('katibampya','205')"><a href='#'><span>Ibara ya 205</span></a></li>
                                <li onclick="ibara_clicked('katibampya','206')"><a href='#'><span>Ibara ya 206</span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(b) Mfuko wa Mahakama</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','207')"><a href='#'><span>Ibara ya 207</span></a></li>

                            </ul>
                        </li>

                    </ul>
                </li>



            </ul>
        </li>
        <li class=' has-sub'><a href='#'><span>Sura ya kumi na tatu</span></a>
            <ul>
                <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Utumishi wa umma katika jamhuri ya muungano </span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','208')"><a href='#'><span>Ibara ya 208</span></a></li>
                                <li onclick="ibara_clicked('katibampya','209')"><a href='#'><span>Ibara ya 209</span></a></li>
                                <li onclick="ibara_clicked('katibampya','210')"><a href='#'><span>Ibara ya 210</span></a></li>
                                <li onclick="ibara_clicked('katibampya','211')"><a href='#'><span>Ibara ya 211</span></a></li>
                                <li onclick="ibara_clicked('katibampya','212')"><a href='#'><span>Ibara ya 212</span></a></li>
                                <li onclick="ibara_clicked('katibampya','213')"><a href='#'><span>Ibara ya 213</span></a></li>
                                <li onclick="ibara_clicked('katibampya','214')"><a href='#'><span>Ibara ya 214</span></a></li>


                            </ul>
                        </li>

                    </ul>
                </li>




            </ul>
        </li>
        <li class=' has-sub'><a href='#'><span>Sura ya kumi na nne</span></a>
            <ul>
                <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Uwakilishi wa wananchi</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','215')"><a href='#'><span>Ibara ya 215</span></a></li>
                                <li onclick="ibara_clicked('katibampya','216')"><a href='#'><span>Ibara ya 216</span></a></li>



                            </ul>
                        </li>

                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>(a) Tume Huru ya Uchaguzi</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','217')"><a href='#'><span>Ibara ya 217</span></a></li>
                                <li onclick="ibara_clicked('katibampya','218')"><a href='#'><span>Ibara ya 218</span></a></li>
                                <li onclick="ibara_clicked('katibampya','219')"><a href='#'><span>Ibara ya 219</span></a></li>
                                <li onclick="ibara_clicked('katibampya','220')"><a href='#'><span>Ibara ya 220</span></a></li>
                                <li onclick="ibara_clicked('katibampya','221')"><a href='#'><span>Ibara ya 221</span></a></li>




                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(b) Mkurugenzi wa Uchaguzi</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','222')"><a href='#'><span>Ibara ya 222</span></a></li>
                                <li onclick="ibara_clicked('katibampya','223')"><a href='#'><span>Ibara ya 223</span></a></li>





                            </ul>
                        </li>

                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya tatu</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>(a) Vyama vya Siasa</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','224')"><a href='#'><span>Ibara ya 224</span></a></li>





                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(b) Msajili wa Vyama vya Siasa</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','225')"><a href='#'><span>Ibara ya 225</span></a></li>
                                <li onclick="ibara_clicked('katibampya','226')"><a href='#'><span>Ibara ya 226</span></a></li>
                                <li onclick="ibara_clicked('katibampya','227')"><a href='#'><span>Ibara ya 227</span></a></li>





                            </ul>
                        </li>

                    </ul>
                </li>




            </ul>
        </li>

        <li class=' has-sub'><a href='#'><span>Sura ya kumi na tano</span></a>
            <ul>
                <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Tume ya maadili ya viongozi wa umma</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','228')"><a href='#'><span>Ibara ya 228</span></a></li>
                                <li onclick="ibara_clicked('katibampya','229')"><a href='#'><span>Ibara ya 229</span></a></li>
                                <li onclick="ibara_clicked('katibampya','230')"><a href='#'><span>Ibara ya 230</span></a></li>
                                <li onclick="ibara_clicked('katibampya','231')"><a href='#'><span>Ibara ya 231</span></a></li>
                                <li onclick="ibara_clicked('katibampya','232')"><a href='#'><span>Ibara ya 232</span></a></li>
                                <li onclick="ibara_clicked('katibampya','233')"><a href='#'><span>Ibara ya 233</span></a></li>
                                <li onclick="ibara_clicked('katibampya','234')"><a href='#'><span>Ibara ya 234</span></a></li>



                            </ul>
                        </li>

                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Tume ya haki za binadamu na utawala bora </span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','235')"><a href='#'><span>Ibara ya 235</span></a></li>
                                <li onclick="ibara_clicked('katibampya','236')"><a href='#'><span>Ibara ya 236</span></a></li>
                                <li onclick="ibara_clicked('katibampya','237')"><a href='#'><span>Ibara ya 237</span></a></li>
                                <li onclick="ibara_clicked('katibampya','238')"><a href='#'><span>Ibara ya 238</span></a></li>
                                <li onclick="ibara_clicked('katibampya','239')"><a href='#'><span>Ibara ya 239</span></a></li>
                                <li onclick="ibara_clicked('katibampya','240')"><a href='#'><span>Ibara ya 240</span></a></li>
                                <li onclick="ibara_clicked('katibampya','241')"><a href='#'><span>Ibara ya 241</span></a></li>
                                <li onclick="ibara_clicked('katibampya','242')"><a href='#'><span>Ibara ya 242</span></a></li>





                            </ul>
                        </li>


                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya tatu</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Mdhibiti na mkaguzi mkuu wa hesabu za serikali </span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','243')"><a href='#'><span>Ibara ya 243</span></a></li>
                                <li onclick="ibara_clicked('katibampya','244')"><a href='#'><span>Ibara ya 244</span></a></li>
                                <li onclick="ibara_clicked('katibampya','245')"><a href='#'><span>Ibara ya 245</span></a></li>
                                <li onclick="ibara_clicked('katibampya','246')"><a href='#'><span>Ibara ya 246</span></a></li>
                                <li onclick="ibara_clicked('katibampya','247')"><a href='#'><span>Ibara ya 247</span></a></li>
                                <li onclick="ibara_clicked('katibampya','248')"><a href='#'><span>Ibara ya 248</span></a></li>





                            </ul>
                        </li>

                    </ul>
                </li>
                <li class='has-sub'><a href='#'><span>Sehemu ya nne</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Chombo cha kuzuia na kupambana na rushwa</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','249')"><a href='#'><span>Ibara ya 249</span></a></li>

                            </ul>
                        </li>

                    </ul>
                </li>




            </ul>
        </li>
        <li class=' has-sub'><a href='#'><span>Sura ya kumi na sita</span></a>
            <ul>
                <li class='has-sub'><a href='#'><span>Masharti kuhusu fedha za jamhuri ya muungano</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>(a) Mfuko Mkuu wa Hazina na Fedha za Jamhuri ya Muungano</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','250')"><a href='#'><span>Ibara ya 250</span></a></li>
                                <li onclick="ibara_clicked('katibampya','251')"><a href='#'><span>Ibara ya 251</span></a></li>
                                <li onclick="ibara_clicked('katibampya','252')"><a href='#'><span>Ibara ya 252</span></a></li>
                                <li onclick="ibara_clicked('katibampya','253')"><a href='#'><span>Ibara ya 253</span></a></li>
                                <li onclick="ibara_clicked('katibampya','254')"><a href='#'><span>Ibara ya 254</span></a></li>
                                <li onclick="ibara_clicked('katibampya','255')"><a href='#'><span>Ibara ya 255</span></a></li>
                                <li onclick="ibara_clicked('katibampya','256')"><a href='#'><span>Ibara ya 256</span></a></li>
                                <li onclick="ibara_clicked('katibampya','257')"><a href='#'><span>Ibara ya 257</span></a></li>
                                <li onclick="ibara_clicked('katibampya','258')"><a href='#'><span>Ibara ya 258</span></a></li>




                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(b) Deni la Taifa na Mikopo ya Serikali ya Jamhuri ya Muungano</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','259')"><a href='#'><span>Ibara ya 259</span></a></li>
                                <li onclick="ibara_clicked('katibampya','260')"><a href='#'><span>Ibara ya 260</span></a></li>
                                <li onclick="ibara_clicked('katibampya','261')"><a href='#'><span>Ibara ya 261</span></a></li>
                                <li onclick="ibara_clicked('katibampya','262')"><a href='#'><span>Ibara ya 262</span></a></li>
                                <li onclick="ibara_clicked('katibampya','263')"><a href='#'><span>Ibara ya 263</span></a></li>
                                <li onclick="ibara_clicked('katibampya','264')"><a href='#'><span>Ibara ya 264</span></a></li>


                            </ul>
                        </li>

                    </ul>
                </li>
            </ul>
        </li>
        <li class=' has-sub'><a href='#'><span>Sura ya kumi na saba</span></a>
            <ul>
                <li class='has-sub'><a href='#'><span>Ulinzi na usalama wa jamhuri ya muungano</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>(a) Ulinzi na Usalama wa Taifa</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','265')"><a href='#'><span>Ibara ya 265</span></a></li>
                                <li onclick="ibara_clicked('katibampya','266')"><a href='#'><span>Ibara ya 266</span></a></li>
                                <li onclick="ibara_clicked('katibampya','267')"><a href='#'><span>Ibara ya 267</span></a></li>
                                <li onclick="ibara_clicked('katibampya','268')"><a href='#'><span>Ibara ya 268</span></a></li>





                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(b) Jeshi la Ulinzi la Wananchi wa Tanzania</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','269')"><a href='#'><span>Ibara ya 269</span></a></li>
                                <li onclick="ibara_clicked('katibampya','270')"><a href='#'><span>Ibara ya 270</span></a></li>
                                <li onclick="ibara_clicked('katibampya','271')"><a href='#'><span>Ibara ya 271</span></a></li>



                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(c) Jeshi la Polisi</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','272')"><a href='#'><span>Ibara ya 272</span></a></li>
                                <li onclick="ibara_clicked('katibampya','273')"><a href='#'><span>Ibara ya 273</span></a></li>
                                <li onclick="ibara_clicked('katibampya','274')"><a href='#'><span>Ibara ya 274</span></a></li>



                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>(d) Idara ya Usalama wa Taifa ya Jamhuri ya Muungano</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','275')"><a href='#'><span>Ibara ya 275</span></a></li>
                                <li onclick="ibara_clicked('katibampya','276')"><a href='#'><span>Ibara ya 276</span></a></li>

                            </ul>
                        </li>

                    </ul>
                </li>





            </ul>
        </li>
        <li class=' has-sub'><a href='#'><span>Sura ya kumi na nane</span></a>
            <ul>
                <li class='has-sub'><a href='#'><span>Mengineyo</span></a>
                    <ul>
                                <li onclick="ibara_clicked('katibampya','277')"><a href='#'><span>Ibara ya 277</span></a></li>
                                <li onclick="ibara_clicked('katibampya','278')"><a href='#'><span>Ibara ya 278</span></a></li>
                                <li onclick="ibara_clicked('katibampya','279')"><a href='#'><span>Ibara ya 279</span></a></li>
                                <li onclick="ibara_clicked('katibampya','280')"><a href='#'><span>Ibara ya 280</span></a></li>
                                <li onclick="ibara_clicked('katibampya','281')"><a href='#'><span>Ibara ya 281</span></a></li>

                    </ul>
                </li>





            </ul>
        </li>
        <li class=' has-sub'><a href='#'><span>Sura ya kumi na tisa</span></a>
            <ul>
                <li class='has-sub'><a href='#'><span>Sehemu ya kwanza</span></a>
                    <ul>
                        <li class='has-sub'><a href='#'><span>Masharti yatokanayo </span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','282')"><a href='#'><span>Ibara ya 282</span></a></li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya pili</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','283')"><a href='#'><span>Ibara ya 283</span></a></li>
                                <li onclick="ibara_clicked('katibampya','284')"><a href='#'><span>Ibara ya 284</span></a></li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya tatu</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','285')"><a href='#'><span>Ibara ya 285</span></a></li>
                                <li onclick="ibara_clicked('katibampya','286')"><a href='#'><span>Ibara ya 286</span></a></li>
                                <li onclick="ibara_clicked('katibampya','287')"><a href='#'><span>Ibara ya 287</span></a></li>
                                <li onclick="ibara_clicked('katibampya','288')"><a href='#'><span>Ibara ya 288</span></a></li>


                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya nne</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','289')"><a href='#'><span>Ibara ya 289</span></a></li>
                                <li onclick="ibara_clicked('katibampya','290')"><a href='#'><span>Ibara ya 290</span></a></li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya tano</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','291')"><a href='#'><span>Ibara ya 291</span></a></li>
                                <li onclick="ibara_clicked('katibampya','292')"><a href='#'><span>Ibara ya 292</span></a></li>

                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'><span>Sehemu ya sita</span></a>
                            <ul>
                                <li onclick="ibara_clicked('katibampya','293')"><a href='#'><span>Ibara ya 293</span></a></li>
                                <li onclick="ibara_clicked('katibampya','294')"><a href='#'><span>Ibara ya 294</span></a></li>
                                <li onclick="ibara_clicked('katibampya','295')"><a href='#'><span>Ibara ya 295</span></a></li>
                                <li onclick="ibara_clicked('katibampya','296')"><a href='#'><span>Ibara ya 296</span></a></li>

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
                    <li ><a <a href="{{url('read_katiba')}}">Katiba ya 1977</a></li>
                    <li class="active"><a href="{{url('read_wananchi')}}">Katiba inayo pendekezwa</a></li>

                </ul>
            </div>
            <div class="feed-container">

                    <div class="katiba-feed" id="clicked_ibara">{{$utangulizi['description']}}</div>

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
