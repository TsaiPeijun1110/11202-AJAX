<?php include_once './api/db.php';?>
<?php include_once 'marquee.php';?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  body {
    justify-content: center;
    align-items: center;
    height: 100vh
  }
  .card-container {
    display: flex;
  }
  .box {
    margin-top: 200px;
  }
  .image {
    width: 400px;
    display: flex;
    justify-content: space-between;
    margin-right: 10px;
  }

  .login-main {
    width: 400px;
  }
  .card-name {
    margin-top: 218px;
  }
</style>

<div style="height:32px; display:block;"></div>
<!--正中央-->

<div style=" height:400px;">
  <div id="mwww" loop="true" style="width:100%; height:155%; padding:4px "></div>
  <!-- <div style="width:100%; height:150%; position:relative; " class="cent">沒有資料</div> -->
</div>


<div class="card-name" style="display: flex; justify-content:center;margin-left: auto; margin-right:auto;">
  <div class="card-container">
    <div class="card" style="width:400px;">
     <a href="https://www.npm.gov.tw/Exhibition-Content.aspx?sno=04013505&l=1">
     <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04013505/34055811.jpg&w=880&h=540" class="card-img-top" alt="...">
     </a>
      <div class="card-body">
        <h5 class="card-title">無界之涯——從海出發探索十六世紀東西文化交流</h5>
        <p class="card-text">
        十六世紀葡萄牙人卡蒙斯(Luís Vaz de Camões,-1580)筆下的兩句話，訴說著陸地的盡頭，卻正是大海的起點。
        話中語境見證當時歐洲人嚮往海外探險的風氣，更為世界不同端點人們的相遇，立下一個絕佳的註腳
        </p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
          更多內容...
        </button>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel1">無界之涯</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                十六世紀葡萄牙人卡蒙斯(Luís Vaz de Camões,-1580)筆下的兩句話，訴說著陸地的盡頭，卻正是大海的起點。
                話中語境見證當時歐洲人嚮往海外探險的風氣，更為世界不同端點人們的相遇，立下一個絕佳的註腳
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">閱讀完畢</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="card" style="width:400px;">
  <a href="https://www.npm.gov.tw/Exhibition-Content.aspx?sno=04012959&l=1">
  <img src="https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04012959/34054431.jpg&w=880&h=530" class="card-img-top" alt="...">
  </a>
    <div class="card-body">
      <h5 class="card-title">風格故事—琺瑯彩瓷特展</h5>
      <p class="card-text">
      當我們看文物時，首先映入眼簾的是它的造型和裝飾紋樣；再進一步思考時，就又想要瞭解相關的時代背景和製作技術。那麼，綜整這些因素所形塑出來的整體特色就是風格
      從這個角度看清朝康熙、雍正和乾隆三個時期(1662-1795)的琺瑯彩瓷
      </p>
      <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
        更多內容...
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel2">琺瑯彩瓷特展</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ，除了推薦這是十八世紀最具代表性的瓷器之外，也想透過展覽說明因應彩料的研發與使用，以及主政者三位皇帝對官窯的不同訴求，而形成的三個階段的風格樣式。
             依照時間序列，展覽分成三個敘事脈絡。第一單元「皇帝實驗室的新創品」，藉由試作和成品的對比，展示康熙皇帝(1662-1722)邀集西洋傳教士和民間高手，共同推動畫琺瑯工藝及至燒出本土樣式的經過。第二單元「皇家專屬式樣」
            ，呈現雍正皇帝(1723-1735)以皇家專屬式樣為前提，將琺瑯彩瓷包裝成一種宮廷限量版的瓷器。
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">閱讀完畢</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="card" style="width:400px;">
    <a href="https://www.npm.gov.tw/Exhibition-Content.aspx?sno=04012832&l=1">
    <img src="https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04012832/34054063.jpg&w=880&h=550" class="card-img-top" alt="...">
    </a>
    <div class="card-body">
      <h5 class="card-title">華麗魔法屋─故宮的洛可可珍藏</h5>
      <p class="card-text">歡迎來到華麗魔法屋! 你即將穿越時空來到二百多年前的歐洲。在這裡，「裝飾」是一種魔法，為看似平凡的生活場景與物品注入靈魂
      這種魔法被稱為「洛可可」(Rococo)，從大自然擷取靈感，輕快又奇幻的裝飾風格正在流行
      </p>
      <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
        更多內容...
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel3">華麗魔法屋</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            獨特的色彩，搭配金色，深受皇室喜愛，創造了美妙愉悅的洛可可裝飾時代。
            從房間的牆壁、客廳的桌子、壁爐上的時鐘、餐桌上的杯盤，到口袋裡的懷錶、香水瓶和小盒子，都充滿了自由、華麗、浪漫的裝飾，深深吸引著十八世紀的歐洲人。    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">閱讀完畢</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="card" style="width: 400px;">
    <a href="https://www.npm.gov.tw/Exhibition-Content.aspx?sno=04013504&l=1">
    <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04013504/34055809.jpg&w=880&h=550" class="card-img-top" alt="...">
    </a>
    <div class="card-body">
      <h5 class="card-title">院藏清代歷史文書珍品：皇家建築圖檔文獻</h5>
      <p class="card-text">展覽概述
              傳統帝后的起居空間，都是在詳細慎密的規劃中營建而成。
              參與規劃的機關衙門，分工精細，從勘丈測量、繪圖設計、物料估價、到執行建造與完工驗收。涉及單位眾多，動用的人力物資更是規模龐大</p>
      <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
        更多內容...
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel4" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel4">院藏清代歷史文書珍品：皇家建築圖檔文獻</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            有清一代，沿襲漢族帝后起居營建成例，並揉合滿洲固有風俗習慣，呈現著皇家獨特的建築特色。
            無論在臨朝理政的宮室規劃、休憩空間的園林經營、祭祀祈福的寺廟修建以及身後萬年吉地的陵寢建造等，無不用心經營。
            每當重要工程，皇帝即委派重臣親信如親王、尚書、內務府大臣等，組織「工程處」（又名欽派工程處）監督工程的承造。
            透過他們奏報的施工說明、物料的估價清單、建造丈尺數量等紀錄，提供我們了解清代皇家建築的珍貴素材。
            大批投入皇家建築工程的團隊中，「工程處」轄下一個單位稱為「樣式房」，負責整個工程規劃設計，屬於工程的核心部門，負責人稱為「掌案」。
            其中，雷氏家族成員數代供職，甚至出任最高「掌案」之職。雷家曾參與皇家許多工程營建，留下豐富建築圖稿、建築模型與文獻資料。
            這些珍貴的建築紀錄，被世人譽為「樣式雷」,在2007年更列入聯合國教科文組織(UNESCO)「世界記憶名錄」之上。
            本展為增益內容的豐富性，特地向國立台灣大學圖書館洽借晚清雷思起(1826-1876)的樣式雷圖檔共同展出，特此誌謝。
            展覽分成「皇家建築圖樣」、「皇家建築師─樣式雷」以及「現代臺灣的古典建築」三個單元。
            第一單元精選院藏清代皇家建築圖樣檔案，第二單元介紹樣式雷家族的重要成員與建築設計案例，最後單元將以傳統古典建築在臺灣的延續，了解國民政府遷臺初期重要文化建設中的代表作品
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">閱讀完畢</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>

<div class="card-name2" style="display: flex; justify-content:center;">
  <div class="card-container">
    <div class="card" style="width:400px;">
      <a href="https://www.npm.gov.tw/Exhibition-Content.aspx?sno=04013392&l=1">
      <img src="https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04013392/34055516.jpg&w=880&h=550" class="card-img-top" alt="...">
      </a>
      <div class="card-body">
        <h5 class="card-title">院藏善本古籍選粹─彩繪圖籍</h5>
        <p class="card-text">在文字發明以前，語言與圖畫是為人與人之間溝通與傳遞訊息的主要途徑。隨著文字的出現、使用，圖與文的結合，不但完備訊息傳遞體系，更豐富典籍的藝術性格，
          所謂「文不足以圖補之，圖不足以文敘之」。本展覽的彩繪圖籍，指的便是既書有文字，同時也配有彩色圖畫的古代典籍</p>
        <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
        更多內容...
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel5" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel5">院藏善本古籍選粹─彩繪圖籍</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            與今日的繪本、圖文書相同，圖畫也應用在各類古籍之中，其中又以輔助說明文字的佔比最高，舉凡農業、軍事、宗教、醫藥、地理、占卜、占候、琴棋書畫、金石考古各類書籍都可見到彩繪圖畫的蹤跡，然而或許因為顏料昂貴，以及寫、繪分工，耗時費力等種種原因，相較於雕版印刷產出的版畫圖籍，彩繪圖籍可說少之又少，而流傳至今日者更屬鳳毛麟角。
            本院典藏古代彩繪圖籍主要來自明、清宮廷寫繪或地方進呈,產製時代大約集中在15至19世紀之間。就數量來說,以地理圖冊與占卜、占候類書籍最多，但佛教寫經則相對精妙。此外，乾隆、嘉慶兩父子詩文集裡的肖像畫也別具風格，很可能借用了部分來自西方的肖像畫與書籍裝飾的概念與彩繪技法。
            本展覽依院藏彩繪圖籍的內容特性概分四單元：一、占之術─易占、占卜、占候圖籍；二、彩繪大地─古代地理圖籍；三、法相殊勝─佛教經典圖籍；四、清帝詩文─乾隆、嘉慶詩文圖籍。透過這些精美的彩繪圖籍與研究說明，與觀眾分享「知」與「美」的饗宴
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">閱讀完畢</button>
            </div>
          </div>
        </div>
      </div>

      </div>
    </div>

    <div class="card" style="width:400px;">
      <a href="https://www.npm.gov.tw/Exhibition-Content.aspx?sno=04013438&l=1">
      <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04013438/34055622.jpg&w=880&h=550" class="card-img-top" alt="...">
      </a>
      <div class="card-body">
        <h5 class="card-title">愛硯成痴特展</h5>
        <p class="card-text">硯痴，是指對硯極度迷戀的性情中人，宋代文人蘇軾、米芾還有清代揚州畫派的高鳳翰都是歷史上有名的愛硯人士，
          究竟硯石有什麼媚力，令人愛不釋手呢？讓我們一起來欣賞硯石之美，說說硯石饒富趣味的故事吧</p>
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
        更多內容...
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel6" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel6">愛硯成痴特展</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            硯一直是人們的好朋友。電腦鍵盤還沒普遍以前，自來水筆尚未出現的時代，寫字、畫畫都少不了筆、墨、紙和硯，而其中又以硯，最能傳之久遠。大約有二千年、七萬多個日子，硯從出現、不斷變化、定型到再變化，就像流行風潮，在不同時代展現出百態千姿。
            此次展覽除了展出院藏硯石100餘件,並特別向國立歷史博物館借展典藏品15件,以豐富早期硯式的風格面貌
            展覽將以硯式的發展為陳列主軸，穿插與硯相關的點點滴滴，期望大家能感受到硯石與眾不同的特色，流連於古今用硯人的真情至性之間。
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">閱讀完畢</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="card" style="width:400px;">
      <a href="https://www.npm.gov.tw/Exhibition-Content.aspx?sno=04013558&l=1&type=&cat=">
        <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04013558/34056002.jpg&w=720&h=500" class="card-img-top" alt="...">
      </a>
      <div class="card-body">
        <h5 class="card-title">明 唐寅等 明五家書寒山寺募緣疏</h5>
        <p class="card-text">
              蘇州寒山寺舊稱普明禪院，因張繼(?-779)〈楓橋夜泊〉詩而著名。然屢遭火災,遂有明代諸家為該寺重修佛殿及大鐘作募款文。
              研究指出其中以唐寅(1470-1524) 約1522-1523年作〈化鐘疏〉最早,雄健又瀟灑的書法風格,可與李邕(678-747)、趙孟頫(1254-1322)比肩。
        </p>
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
        更多內容...
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel7" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel7">明 唐寅等 明五家書寒山寺募緣疏</h1>
              <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            後續為陳鎏(1506-1575)疏文、趙宧光(1559-1625)引首。趙氏以行草入篆聞名，這件引首卻刻意運用勻整而嚴密的風格，展現募款的誠意。
            佚名〈不住布施〉及1618年范允臨(1558-1641)、毛堪(16-17世紀)疏文最晚,正值董其昌(1555- 1636)擅名之際,書法受其影響。
            以上作品經畢瀧(1733-1797)收集並裝裱，遂成今日之長卷
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">閱讀完畢</button>
            </div>
          </div>
        </div>
      </div>
       
      </div>
    </div>

    <div class="card" style="width: 400px;">
      <a href="https://www.npm.gov.tw/Exhibition-Content.aspx?sno=04013529&l=1&type=&cat=">
      <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=exbitBig/04013529/34055852.jpg&w=720&h=500" class="card-img-top" alt="...">
      </a>
      <div class="card-body">
        <h5 class="card-title">祀與戎：古代兵器攻略</h5>
        <p class="card-text">
        工欲善其事，必先利其器。」從生產與狩獵的工具到殺伐兵器，從滿足溫飽到決定戰爭勝負，刃的鋒利與否是關鍵所在，也是人類製器的亙古追求。
        最初人類利用石材製刃，自快速砸擊到精細拋磨，漸次精進製刃技術。隨後人類掌握飛躍性的合金技術，冶煉出青銅，由此重新定義了鋒刃，
        也因青銅優於石材的延展性及在短時間大量鑄造的特性，深層改變了兵器型態。緊接著，在一次次鑄銅的烈焰中，鐵刃淬鍊而生，影響至今未曾稍息
        </p>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
        更多內容...
      </button>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel8" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel8">祀與戎：古代兵器攻略</h1>
              <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            青銅兵器的誕生是上述歷程的轉折點，因為自此戰爭規模與勝負影響全面升級，體現「國之大事，在祀與戎。」
            在古代中國,青銅兵器約出現於公元前1800年,也就是新石器時期最末期到早期國家形成的節點之上,並於商周時期發展至興盛,共延續一千六百年左右。
            兵器不只在戰場上大展身手，也融入貴族禮制，成為象徵身份地位的禮器。雖然青銅兵器後來被鐵兵器取代，但兵器具有實戰、權力象徵或祭祀用器之多重功能仍傳承至今。
            本展以青銅兵器為核心，將展覽分四個單元。第一單元「開刃─有刃器的發展」將青銅兵器的源頭追溯至新石器時期磨製的玉石有刃器。
            第二單元「展現鋒芒」和第三單元「淬鍊純青」將青銅兵器區分「商至西周」(約公元前1600- 前771)、「春秋戰國」(公元前770-前221)兩個時期。
            第四單元「歷久彌堅」呈現秦漢時期(公元前221-公元220)鐵兵器逐步興起之時,對青銅兵器的繼承與發展
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">閱讀完畢</button>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>


<div class="myCarousel-name">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel-fade">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="		https://www.npm.gov.tw/NewFileAtt.ashx?name=banner/00000684.jpg" class="d-block w-100" alt="..."> <!--700寬/410高 -->
      </div>

      <div class="carousel-item">
        <img src="		https://www.npm.gov.tw/NewFileAtt.ashx?name=banner/00000683.jpg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=banner/00000674.jpg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=banner/00000677.jpg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="	https://www.npm.gov.tw/NewFileAtt.ashx?name=banner/00000672.jpg" class="d-block w-100" alt="...">
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


<div>
  <div class="image margin-top:405px;">
    <div class="login-main" style="height: 0px;">
      <?php
      if (isset($_SESSION['login'])) {
        to("back.php");
      }


      if (isset($_GET['error'])) {
        echo "<script>alert('{$_GET['error']}')</script>";
      }

      ?>
      <div>
        <div class="di" style="height:488px; border:#999 1px solid; width:180%;  float:left; position:relative; left:20px; margin-left: 383px; ">
          <div style="height:32px; display:block;"></div>
          <!--正中央-->
          <form method="post" action="./api/check.php">
            <p class="t botli text-center">登入</p>
            <p class="cent">帳號 : <input name="acc" autofocus="" type="text"></p>
            <p class="cent">密碼 : <input name="pw" type="password"></p>
            <p class="cent"><input value="送出" type="submit"><input type="reset" value="清除"></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<div>
  <div style="width:400px; height:487px; margin:0px;border: #EE7728 double 3px;" class="dbor">
    <span class="t ">故宮博物院映像區</span>
    <div class="cent" onclick="pp(1)"><img src="./icon/up.jpg" alt=""></div>
    <?php
    $imgs = $Image->all(['sh' => 1]);

    foreach ($imgs as $idx => $img) {
    ?>
      <div id="ssaa<?= $idx; ?>" class='im cent'>
        <img src="./img/<?= $img['img']; ?>" style="width:150px;height:103px;border:3px solid orange;margin:3px">
      </div>
    <?php
    }
    ?>
    <div class="cent" onclick="pp(2)"><img src="./icon/dn.jpg" alt=""></div>
    <script>
      var nowpage = 1,
        num = <?= $Image->count(['sh' => 1]); ?>;

      function pp(x) {
        var s, t;
        if (x == 1 && nowpage - 1 >= 0) {
          nowpage--;
        }
        if (x == 2 && (nowpage + 1) <= num * 1 - 3) {
          nowpage++;
        }

        $(".im").hide()
        for (s = 0; s <= 2; s++) {
          t = s * 1 + nowpage * 1;
          $("#ssaa" + t).show()

        }
      }


      pp(2)
    </script>
  </div>
</div>


<div>
  <div style="width: 400px;
              padding: 2px;
              height: 486px;
              margin-top: 10px;
              padding: 5px 10px 5px 10px;
              border: #0C3 dashed 3px;
              position: relative;
              margin-left: 1122px;
              margin-top: -486px; ">

    <span class="t botli">最新消息區
      <?php
      if ($News->count(['sh' => 1]) > 5) {
        echo "<a href='?do=news' style='float:right'>More...</a>";
      }
      ?>
    </span>
    <ul class="ssaa" style="list-style-type:decimal;">
      <?php
      $news = $News->all(['sh' => 1], ' limit 5');
      foreach ($news as $n) {
        echo "<li>";
        echo mb_substr($n['text'], 0, 20);
        echo "<div class='all' style='display:none'>";
        echo $n['text'];
        echo "</div>";
        echo "...</li>";
      }
      ?>
    </ul>
    <div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: 
        rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; 
        border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
    </div>
    <script>
      $(".ssaa li").hover(
        function() {

          $("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
          $("#altt").show()
        }
      )
      $(".ssaa li").mouseout(
        function() {
          $("#altt").hide()
        }
      )
    </script>
  </div>
</div>


<footer class="container-fluid flex-shrink-0 py-4 bg-dark text-white-50">
  <div class="container text-center">
    <small style="font-size:20px;margin-left: 300px;"><?= $Bottom->find(1)['bottom']; ?></small>
    <span class="t" style="margin-top:-39px; font-size:19px;">進站總人數:<?= $Total->find(1)['total']; ?></span>
    <a href="https://www.npm.gov.tw/index.aspx?l=1">
    <img src="../icon/images.png" style="margin-right:1500px;">
    </a>
  </div>
</footer>


<script>
  var lin = new Array();
  <?php
  $lins = $Mvim->all(['sh' => 1]);
  foreach ($lins as $lin) {
    echo "lin.push('{$lin['img']}');";
  }
  ?>

  var now = 0;
  ww();
  if (lin.length > 1) {
    setInterval("ww()", 3000);
    now = 1;
  }

  function ww() {
    $("#mwww").html("<embed loop=true src='./img/" + lin[now] + "' style='width:99%; height:100%;'></embed>")
    //$("#mwww").attr("src",lin[now])
    now++;
    if (now >= lin.length)
      now = 0;
  }
</script>