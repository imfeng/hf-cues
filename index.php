<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <script name="jquery-2.2.1-js" src="./dist/jquery.min.js"></script>
    <!-- Mustache template library -->
    <script src="./dist/mustache.min.js"></script>
    <!-- scrollreveal template library -->
    <script src="./dist/scrollreveal.min.js"></script>.
    <!-- Semantic-UI Framework -->
    <script name="semantic-2.1.8-js" src="./dist/semantic.min.js"></script>
    <link name="semantic-2.1.8-custom-css" rel="stylesheet" href="./dist/semantic.custom.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <header class="nav">
        <div class="centered ui five column grid container">
            
            <div class="row">
                <a class="item nav-item five wide column" name="cues">
                    <h1 class="ui centered aligned header">
                      <!-- <i class="circular users icon"></i> -->
                        <img src="./business/cues-ball-f.png" alt="" class="ui five wide column small image">
                        <div>CUES</div>
                    </h1>
                </a>
            </div>
            <div class="ui inline simple nav-holder">
        	    <div class="text" onClick="ga('send', 'event', 'mobile', 'onclick');">
			    	<i class="circular users icon"></i>
                    <span><b>團隊資訊</b></span>
			    </div>
            	<i class="dropdown icon"></i>
                <div class="ui secondary pointing menu blue">
                	<a class="item column nav-item only-mobile" name="cues">
                        <i class="ui mini circular users icon"></i>
                        <span><b>團隊資訊</b></span>
                        <div class="content">
                            <div class="ui sub header">團隊資訊</div>
                            
                        </div>
                    </a>
                    <a class="item column nav-item" name="chou">
                        <img class="ui mini circular image" src="./profile/profile-chou.jpg">
                        <span><b>周延</b></span>
                        <div class="content">
                            <div class="ui sub header">周  延</div>
                            中正大學經濟學系
                        </div>
                    </a>
                    <a class="item column nav-item" name="zack">
                        <img class="ui mini circular image" src="./profile/profile-zack.jpg">
                        <span><b>王旭東</b></span>
                        <div class="content">
                            <div class="ui sub header">王旭東</div>
                            中正大學經濟系
                        </div>
                    </a>
                    <a class="item column nav-item" name="ki">
                        <img src="./profile/profile-ki.jpg" class="ui mini circular image">
                        <span><b>陳詠琪</b></span>
                        <div class="content">
                            <div class="ui sub header">陳詠琪</div>
                            中正大學財金系
                        </div>
                    </a>
                    <a class="item column nav-item" name="wei">
                        <img src="./profile/profile-wei.jpg" class="ui mini circular image">
                        <span><b>許為傑</b></span>
                        <div class="content">
                            <div class="ui sub header">許為傑</div>
                            中正大學資管系
                        </div>
                    </a>
                    <a class="item column nav-item" name="fang">
                        <img src="./profile/profile-fang.jpg" class="ui mini circular image">
                        <span><b>黃昱峯</b></span>
                        <div class="content">
                            <div class="ui sub header">黃昱峯</div>
                            中正大學資管系
                        </div>
                    </a>
                </div>

            </div>
        </div>
        </div>
    </header>

    <div id="main" class="centered ui grid container piled segment">
        <div class="column" style="height:250px;"><div class="ui">
          <div class="ui active inverted dimmer">
            <div class="ui text loader">Loading</div>
          </div>
          <p></p>
        </div>
    </div>
        
        
    </div>
    <template id="atcc_cues">
        <div class="row">
            <div class="main-content column">
                <div id="intro-cues" class="ui one column grid">

                    <div class="centered column">
                    	<!--
                    	<h2 class="ui centered aligned icon header"></h2>
                    	-->
                        
                        <img src="./business/cues-logo.png" alt="" class="centering ui small image">
                        
                    </div>
                    
                    <div class="column">
                        <div class="indent content">
                            <h3 class="ui horizontal divider header">
                                <i class="users icon"></i>
                                團隊簡介（隊名由來、團隊簡介）
                            </h3>
                            {{{intro}}}
                        </div>
                    </div>
                    <div class="column">
                        <div class="indent content">
                            <h3 class="ui horizontal divider header">
                                <i class="puzzle icon"></i>
                                團隊分工
                            </h3>
                            {{{division}}}

                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="indent content">
                            <h3 class="ui horizontal divider header">
                                <i class="puzzle icon"></i>
                                企業志願序
                            </h3>
                            {{{business}}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
    <template id="atcc_members">
        <div class="row">
            <div class="main-content column">
                <div id="intro" class="ui one column grid">
                    <div class="ui horizontal list column">
                        <div class="dividing item mob-centering">
                            <!-- json.id.profile -->
                            <img src="{{profile}}" alt="{{name}}" class="ui small circular image">
                            <!-- json.id.profile END-->
                            
                            <div class="content">
                                <h2 class="extend header">
                                  <!-- json.id.sex -->
                                  <i class="blue {{sex}} icon"></i>
                                  <!-- json.id.sex END-->
                                  <!-- json.id.name -->
                                  {{name}}
                                <!-- json.id.name END-->
                                </h2>
                                <div class="extend content">
                                    <a href="" class="ui image label" style=>
                                        <img src="./profile/ccu_logo_c.png" alt="國立中正大學">
                                        
                                        <!-- json.id.department -->
                                        {{department}}
                                        <!-- json.id.department END-->
                                    </a>

                                </div>
                                <div class="close ui horizontal list">
                                    <div class="item">
                                        <a href="" class="ui label">
                                            <i class="mail icon"></i>
                                            <!-- json.id.email -->
                                            {{email}}
                                            <!-- json.id.email END-->
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="" class="ui label">
                                            <i class="phone icon"></i>
                                            <!-- json.id.phone -->
                                            {{phone}}
                                            <!-- json.id.phone END-->
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="" class="ui label">
                                            <i class="birthday icon"></i>
                                            <!-- json.id.birth -->
                                            {{birth}}
                                            <!-- json.id.birth END-->
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="indent content">
                            <h3 class="ui horizontal divider header">
                                <i class="rocket icon"></i>
                                參賽動機
                            </h3>
                            <!-- json.id.motivation -->
                            {{{motivation}}}
                            <!-- json.id.motivation END-->
                        </div>
                    </div>
                    <div class="column">
                        <div class="indent content">
                            <h3 class="ui horizontal divider header">
                                <i class="trophy icon"></i>
                                課內外活動/實習經驗/專長
                            </h3>
                            <!-- json.id.info -->
                            {{{info}}}
                            <!-- json.id.info END-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>
    <footer>
        <div class="footer_inner">
            <div class="footer_top_holder">
                <div class="footer_top"></div>
            </div>
            <div class="footer_bottom_holder">
                <div class="footer_bottom centering">
                    <span>All The Creative People you need！</span>
                </div>
            </div>
        </div>
    </footer>

    <script>

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-74781565-1', 'atcc.ccumis.net');
    ga('create', 'UA-74781565-1', 'auto');
    ga('require', 'linkid', 'linkid.js');
    ga('send', 'pageview');

 

    </script>
</body>

</html>
