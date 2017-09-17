@extends('layouts.app2')
@section('content')
<style>
.faq{
    width: 100%;
    display: table;
    height: auto;
    margin-bottom: 50px;
}
.ipf-faq{
    width: 100%;
    height: auto;
    display: table;
    background: white;
    top: 150px;
    padding: 20px 5%;
}

.question{
    width: 100%;
    display: block;
    color: purple;
    font-size: 1.2em;
    margin-bottom: 10px;
    font-family: "Lato regular", serif;
}

.answer{
    width: 100%;
    display: block;
    color: #000;
    font-size: 1.1em;
    margin-bottom: 15px;
    line-height: 1.2;

    text-align: justify;
}

</style>


<section class="ipf-faq">

    <div class="faq">
        <span class="question">1. &nbsp;&nbsp;Katiba ni nini?
        </span>
        <span class="answer">Katiba ni waraka wa kisiasa unaowawezesha wananchi kujitambua kama Taifa. Pia katiba ni waraka wa kiutawala unaelezea mgawanyo wa madaraka na majukumu ya vyombo mbalimbali vya dola. Ni waraka wa kisheria unaongoza shughuli zote kisheria ambao ndio chimbuko la sharia zote nchini na pia ni muafaka wa kitaifa juu ya namna ya kuendesha mambo katika nchi.
        </span>

        <span class="question">2. &nbsp;&nbsp;Lengo la Katiba ni lipi?
        </span>
        <span class="answer">Ibara 9 inasema kuwa lengo la katiba ni kuwezesha ujenzi wa Jamhuri ya Muungano na Serikali ya Mapinduzi ya Zanzibar au wa chochote kati ya vyombo vyake na udugu na amani kutokana na kufuata siasa ya Ujamaa na Kujitegemea, ambayo inasisitiza utekelezaji wa misingi ya kijamaa kwa kuzingatia mazingira yaliyomo katika Jamhuri ya Muungano.
        </span>

        <span class="question">3. &nbsp;&nbsp;Misingi ya Katiba ni ipi?
        </span>
        <span class="answer">Kwanza katiba ni lazima iwezeshe wananchi kuridhiana kitaifa. Katiba lazima iwe ya kipekee kutokana na historia ya nchi husika. Katiba lazima isiruhusu ubaguzi wa aina yeyote miongoni mwa raia wake na katiba ni sheria mama katika nchi kwaiyo hakuna sharia inayotungwa itaruhusiwa kukinzana nayo.
        </span>

         <span class="question">4. &nbsp;&nbsp;Haki na wajibu wa binadamu umeanishwa katika sura gani?
        </span>
        <span class="answer">Imeanishwa katika sura ya kwanza, sehemu ya tatu katika katiba ya Jamhuri ya muungano wa Tanzania. Ibara ya 12 hadi 24 inaelezea haki za muhimu kwa binadamu na ibara ya 25 hadi 28 inazungumzia wajibu wa muhimu kwa wananchi wa Tanzania.
        </span>

         <span class="question">5. &nbsp;&nbsp;Katiba inanisaidia vipi katika shughuli zangu za kila siku?
         </span>
        <span class="answer">Katiba inanipa haki ya kuishi, uhuru wa kuongea na kutoa maoni yangu, uhuru wa kufanya kazi, uhuru wa kupiga kura ili nimchague kiongonzi bora na anayenifaa na inanipa haki ya kuelimishwa.
        </span>

         <span class="question">6. &nbsp;&nbsp;Kwa mujibu wa katiba, nchi ina mihimili mingapi?
        </span>
        <span class="answer">Serikali ina mihimili mitatu. Ambayo ni mahakama, bunge na serikali.
        </span>

         <span class="question">7. &nbsp;&nbsp;Sifa za mtu kuwa mbunge ni zipi?
        </span>
        <span class="answer">Ibara ya 67 (1) inaelezea kuwa mtu anaweza kuwa mbunge endapo ni raia wa Jamhuri ya Muungano na ambaye ametimiza umri wa miaka ishirini na moja, na ambaye anajua kusoma na kuandika katika Kiswahili au Kiingereza.
        </span>

         <span class="question">8. &nbsp;&nbsp;Sifa za mtu kuchaguliwa kuwa Rais ni zipi?
        </span>
        <span class="answer">Ibara 39 inasema kuwa mtu atachaguliwa kuwa raisi kama ni raia wa kuzaliwa wa Jamhuri ya Muungano kwa mujibu wa Sheria ya Uraia. Pia awe ametimiza umri wa miaka arobaini. Awe ni mwanachama, na mgombea aliyependekezwa na chama cha siasa. Awe na  sifa za kumwezesha kuwa Mbunge au Mjumbe wa Baraza la Wawakilishi. Na katika kipindi cha miaka mitano kabla ya tarehe ya Uchaguzi Mkuu hajawahi kutiwa hatiani katika Mahakama yoyote kwa kosa lolote la kukwepa kulipa kodi yoyote ya Serikali.
        </span>

         <span class="question">9. &nbsp;&nbsp;Sifa za mtu kuchaguliwa kuwa makamu wa raisin ni zipi?
        </span>
        <span class="answer">Ibara ya 47(4) inasema Mtu hatateuliwa kugombea au kushika kiti cha Makamu wa Rais wa Jamhuri ya Muungano endapo  ni raia wa kuzaliwa wa Jamhuri ya Muungano kwa mujibu wa sheria ya Uraia, awe ametimiza umri wa miaka arobaini, awe ni mwanachama na mgombea aliyependekezwa na chama cha siasa, awe na  sifa za kumwezesha kuwa Mbunge au Mjumbe wa Baraza la Wawakilishi. Na katika kipindi cha miaka mitano kabla ya tarehe ya uchaguzi hajawahi kutiwa hatiani katika Mahakama yoyote kwa kosa lolote la kukwepa kulipa kodi yoyote ya Serikali.
        </span>

         <span class="question">10. &nbsp;&nbsp;Ni kivipi bunge linaweza mshitaki raisi?
        </span>
        <span class="answer">Ibara 46A (2) inaipa madaraka bunge kumshtaki raisi endapo ametenda vitendo ambavyo kwa jumla vinaivunja Katiba au Sheria ya Maadili ya Viongozi wa Umma, ametenda vitendo ambavyo vinakiuka maadili yanayohusu uandikishwaji wa vyama vya siasa yaliyotajwa katika ibara ya 20(2) ya Katiba, au amekuwa na mwenendo unaodhalilisha kiti cha Rais wa Jamhuri ya Muungano, na haitatolewa hoja ya namna hiyo ndani ya miezi kumi na miwili tangu hoja kama hiyo ilipotolewa na ikakataliwa na Bunge.
        </span>

         <span class="question">11. &nbsp;&nbsp;Zipi ni kazi na mamlaka ya makamu wa raisi?
        </span>
        <span class="answer">Kwanza katiba ni lazima iwezeshe wananchi kuridhiana kitaifa. Katiba lazima iwe ya kipekee kutokana na historia ya nchi husika. Katiba lazima isiruhusu ubaguzi wa aina yeyote miongoni mwa raia wake na katiba ni sheria mama katika nchi kwaiyo hakuna sharia inayotungwa itaruhusiwa kukinzana nayo.
        </span>

         <span class="question">12. &nbsp;&nbsp;Misingi ya Katiba ni ipi?
        </span>
        <span class="answer">Ibara 47 inatoa kazi za makamu wa raisi kwamba ni atamsaidia Rais katika kufuatilia utekelezaji wa siku hata siku za Mambo ya Muungano, pia atafanya kazi zote atakazoagizwa na Rais na atafanya kazi zote za Rais kama Rais hayuko kazini au yuko nje ya nchi.

        </span>

         <span class="question">13. &nbsp;&nbsp;Kazi na madaraka ya waziri mkuu ni yapi?
        </span>
        <span class="answer">Ibara 52 inasema kuwa Waziri Mkuu ndie atakae kuwa na madaraka juu ya udhibiti, usimamiaji, utekelezaji wa siku hata siku wa kazi na shughuli za Serikali ya Jamhuri ya Muungano. Pia Waziri Mkuu ndie Kiongozi wa Shughuli za Serikali bungeni.
        </span>

         <span class="question">14. &nbsp;&nbsp;Uteuzi wa mawaziri hufanywa na nani?
        </span>
        <span class="answer">Ibara 55 inasema kuwa Mawaziri wote ambao ni wajumbe wa Baraza la Mawaziri watateuliwa na Rais baada ya kushauriana na Waziri Mkuu.
        </span>

        <span class="question">15. &nbsp;&nbsp;Mwisho wa muda wa wabunge kushika madaraka ni upi?
        </span>
        <span class="answer">Ibara 71 imeeleza kuwa mbunge atakoma kuwa Mbunge na ataacha kiti chake katika Bunge ikiwa Mbunge huyo atachaguliwa kuwa Rais, ikiwa Mbunge atakosa kuhudhuria vikao vya Mikutano ya Bunge Mitatu mfululizo bila ya ruhusa ya Spika, ikiwa itathibitishwa kwamba amevunja masharti ya Sheria ya Maadili ya Viongozi wa Umma, au ikiwa Mbunge ataacha kuwa mwanachama wa chama alichokuwamo wakati alipochaguliwa au alipoteuliwa kuwa Mbunge na iwapo Mbunge anachaguliwa au anateuliwa kuwa Makamu wa Rais.
        </span>

        <span class="question">16. &nbsp;&nbsp;Raisi ananguvu zipi na madaraka yake?
        </span>
        <span class="answer">Ibara ya 44 (1) inasema rais aweza kutangaza kuwapo kwa hali ya vita kati ya Jamhuri ya Muungano na nchi yoyote. Ibara 45 inampa raisi malaka ya kutoa  msamaha kwa mtu yeyote aliyepatikana na hatia mbele ya mahakama kwa kosa lolote, na aweza kutoa msamaha huo ama bila ya masharti au kwa masharti, kwa mujibu wa sharia na Ibara 46 (1) Wakati wote Rais atakapokuwa bado ameshika madaraka yake kwa mujibu wa Katiba hii, itakuwa ni marufuku kumshitaki au kuendesha mashataka ya aina yoyote juu yake mahakamani kwa ajili ya kosa lolote la jinai.
        </span>

        <span class="question">17. &nbsp;&nbsp;Je, nani ni kiongonzi wa Serikali ya Mapindunzi ya Zanzibar?
        </span>
        <span class="answer">Kiongozi wa Serikali ya Mapinduzi Zanzibar ndiye Rais wa Zanzibar na Mkuu wa Serikali ya Mapinduzi ya Zanzibar na vile vile ndiye Mwenyekiti wa Baraza la Mapinduzi la Zanzibar.
        </span>

        <span class="question">18. &nbsp;&nbsp;Je, ni nani mwenye mamlaka ya kutunga sheria Zanzibar kwenye mambo yasiyohusu muungano.
        </span>
        <span class="answer">Baraza la wawakilishi  la Zanzibar ndio wenye mamlaka. Ibara ya 106 (3) Madaraka yote ya kutunga sheria katika Zanzibar juu ya mambo yote yasiyo Mambo ya Muungano yatakuwa mikononi mwa Baraza la Wawakilishi la Zanzibar.
        </span>

        <span class="question">19. &nbsp;&nbsp;Je, mambo gani yakiwepo basi kiti cha kiongonzi wa serikali ya Mapinduzi ya Zanzibar kitakuwa ki wazi?
        </span>
        <span class="answer">Ibara ya 104 (2) inasema kuwa kiti kitakuwa wazi baada ya Baraza la Wawakilishi kuvunjwa, baada ya Kiongozi wa Serikali ya Mapinduzi ya Zanzibar kujiuzulu bila ya kulivunjwa Baraza la wawakilishi kwanza, baada ya kiongozi wa Serikali ya Mapinduzi ya Zanzibar kupoteza sifa za kushika nafasi ya madaraka ya kuchaguliwa, baada ya Kiongozi wa Serikali ya Mapinduzi ya Zanzibar kushtakiwa katika Baraza la Wawakilishi kwa mujibu wa Katiba ya Zanzibar 1984 na kuondolewa katika madaraka.Baada ya kuthibitishwa kwa mujibu wa Katiba ya Zanzibar 1984 kwamba Kiongozi wa Serikali ya Mapinduzi ya Zanzibar hawezi kumudu kazi na shughuli zake na baada ya Kiongozi wa Serikali ya Mapinduzi ya Zanzibar kufariki.
        </span>

        <span class="question">20. &nbsp;&nbsp;Ni namna gani bunge linaweza kutunga sheria?
        </span>
        <span class="answer">Ibara ya 97 inaipa bunge madaraka ya kutunga sheria bila kuathiri masharti mengine kwenye katiba.katiba inasema kuwa Bunge litatumia madaraka yake ya kutunga sheria kwa kufuata utaratibu wa kujadili na kupitisha Miswada ya Sheria ambayo hatimaye itabidi ipate kibali cha Rais, na Muswada hautakuwa Sheria mpaka uwe umepitishwa na Bunge na kukubaliwa na Rais.

        </span>

        <span class="question">21. &nbsp;&nbsp;Kazi za Katibu wa Bunge ni zipi?
        </span>
        <span class="answer">Ibara ya 87 (2) inasema kuwa katibu wa Bunge atakuwa ndiye mtendaji mkuu katika Ofisi ya Bunge na atawajibika kwa utendaji bora wa shughuli za Bunge kwa kuzingatia masharti ya Katiba  na ya sheria inayohusika.
        </span>
    </div>

</section>
@endsection
