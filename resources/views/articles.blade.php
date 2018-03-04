
@extends('layout.master')

@section('title', $title)

@section('css_link')
    <link href="http://fonts.googleapis.com/css?family=Raleway:700,300" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" href="css/doc.css">
    <link rel="stylesheet" href="css/prettify.css">
@endsection

@section('content')
    <div class="wrapper" style="background-color: ghostwhite;">
        <section>
            <section class="content content-light">
                <div class="container">
                    <ul class="docs-nav">
                        <li><strong>系統簡介</strong></li>
                        <li><a href="#Preface" class="cc-active">前言</a></li>
                        <li><a href="#benefits" class="cc-active">應用價值</a></li>
                        <li class="separator"></li>
                        <li><strong>案例說明</strong></li>
                        <li><a href="#features" class="cc-active">文件</a></li>
                        <li><a href="#license" class="cc-active">BOM表</a></li>
                        <li class="separator"></li>
                        <li><strong>ERP 前置基本資料</strong></li>
                        <li><a href="#view_type" class="cc-active">步驟1 - 共用參數設定</a></li>
                        <li><a href="#animation_style" class="cc-active">步驟2 - 幣別匯率建立</a></li>
                        <li><a href="#bars_text" class="cc-active">步驟3 - 生產線資料建立</a></li>
                        <li><a href="#vote_counter" class="cc-active">步驟4 - 製程代號建立</a></li>
                        <li><a href="#rating_icons" class="cc-active">步驟5 - 品號類別資料建立</a></li>
                        <li><a href="#rating_titles" class="cc-active">步驟6 - 品號資料建立</a></li>
                        <li><a href="#bar_colors" class="cc-active">步驟7 - 產品途程資料建立</a></li>
                        <li class="separator"></li>
                        <li><strong> SFT 操作流程</strong></li>
                        <li><a href="#view_type" class="cc-active">步驟1 - 共用參數設定</a></li>
                        <li><a href="#animation_style" class="cc-active">步驟2 - 幣別匯率建立</a></li>
                        <li><a href="#bars_text" class="cc-active">步驟3 - 生產線資料建立</a></li>
                        <li><a href="#vote_counter" class="cc-active">步驟4 - 製程代號建立</a></li>
                        <li><a href="#rating_icons" class="cc-active">步驟5 - 品號類別資料建立</a></li>
                        <li><a href="#rating_titles" class="cc-active">步驟6 - 品號資料建立</a></li>
                        <li><a href="#bar_colors" class="cc-active">步驟7 - 產品途程資料建立</a></li>
                    </ul>
                    <div class="docs-content">
                        <h2> -- 系統簡介 --</h2>
                        <h3 id="Preface"> # 前言</h3>
                        <p> 你知道SFT這套系統的功用嗎?</p>

                        <p> SFT可以簡單定義為企業的「即時生產資訊追蹤系統」，提供企業自接單、投料、製造、外包、至完工入庫，
                            全程掌握生產資訊，藉以緊密串接現場製程與ERP作業，落實企業管理循環。其簡介如下:</p>
                        <ul>
                            <li>Java技術，提供Web介面，簡化系統資源與使用，管理無距離。</li>
                            <li>與Workflow ERP緊密整合，減少錯誤 及避免重工。</li>
                            <li>生產現場異常監控，問題可即時反應。</li>
                            <li>生產現場資訊即時回饋並追蹤。</li>
                        </ul>
                        <p>企業成功案例中，透過資訊化系統使製造現場即時透明，掌控調度及改善管理事半功倍；
                            SFT系統讓生產進度透明化，可即時掌控良品數量、生產工時及完工比率，目前訂單達交率及入庫準時度更提高到80%、提升訂單達交速度，
                            同時滿足訂單如期達交及降低庫存的高挑戰、使用SFT系統檢視營運細節，即時警示生產異常狀態。更多客戶應用價值。 </p>
                        <h3 id="benefits"> # 應用價值</h3>
                        <ul>
                            <li style="color: brown;">邁向工業 4.0 製造現場管理解決方案。</li>
                            <li style="color: brown;">穩建邁向智慧工廠，提升智造競爭力。</li>
                            <li style="color: brown;">工廠管理第一步 現場透明化。</li>
                        </ul>
<p>
                        <h2> -- 案例說明 --</h2>
                        <h3 id="features"> # Features</h3>
                        <ul>
                            <li>Facility to customize to match your website theme</li>
                            <li>Detailed and Compact view options</li>
                            <li>Comprehensive options to customize animation, colors, orientation and style</li>
                            <li>All the power and flexibility of jQuery</li>
                            <li>Easy install; 100% integration</li>
                            <li>Facility to customize rating icons</li>
                        </ul>
                        <h3 id="license"> # License</h3>
                        <p> This Feedback Collection and Polling widget is free for personal and commercial
                            projects as long as you are providing a link back to this page. If you don’t want
                            to provide a link back, simply contribute to the development and improvement of
                            this tool. To contribute to this and many other interesting projects, go to Support
                            Efforts and become a patron.</p>
                        <hr>
                        <h2> Customizing Opineo</h2>
                        <p> Before you make any cusomization or even start using Opineo create a 'div' element
                            and assign it some id. Now add references to necessary Javascrip files e.g.</p>
                        <ul>
                            <li>A reference to latest jQuery library </li>
                            <li>A reference to Opineo script file sudo nano opineo.js</li>
                        </ul>
                        <p> The following customization options are available in Opineo:</p>
                        <h3 id="view_type"> #View Type</h3>
                        <ul>
                            <li>Detailed View</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#DefaultOptions').opineo('results.php', {curvalue:3,
                                view: 'detailed',
                                animation_speed: 'super',
                                show_total_votes_counter: false,
                                show_overall_rating: true});
                            })
                            &lt;/script&gt;
                        </pre>

                        <ul>
                            <li>Compact View</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#CompactView').opineo('results.php',
                                        {curvalue:3, view: 'compact',
                                        animation_speed: 'super'});
                            })
                            &lt;/script&gt;
                        </pre>

                        <ul>
                            <li>Mini View</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#MiniView').opineo('results.php', {curvalue:0, view: 'mini', callback: myCallback});
                            })
                            &lt;/script&gt;
                        </pre>

                        <h3 id="animation_style"> Animation Style</h3>
                        <ul>
                            <li>Slow</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#opineo').opineo('results.php', {curvalue:0, view: 'mini', animation_speed:'slow'});
                            })
                            &lt;/script&gt;
                        </pre>

                        <ul>
                            <li>Medium</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#opineo').opineo('results.php', {curvalue:0, view: 'mini', animation_speed:'mild'});
                            })
                            &lt;/script&gt;
                        </pre>

                        <ul>
                            <li>Fast</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#opineo').opineo('results.php', {curvalue:0, view: 'mini', animation_speed:'fast'});
                            })
                            &lt;/script&gt;
                        </pre>

                        <ul>
                            <li>Super Fast</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#opineo').opineo('results.php', {curvalue:0, view: 'mini', animation_speed:'super'});
                            })
                            &lt;/script&gt;
                        </pre>

                        <ul>
                            <li>Ultra Fast</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#opineo').opineo('results.php', {curvalue:0, view: 'mini', animation_speed:'ultra fast'});
                            })
                            &lt;/script&gt;
                        </pre>

                        <h3 id="bars_text"> Bars Text</h3>
                        <ul>
                            <li>Show</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#opineo').opineo('results.php', {curvalue:0, view: 'mini', votes_label:true});
                            })
                            &lt;/script&gt;
                        </pre>

                        <ul>
                            <li>Hide</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#opineo').opineo('results.php', {curvalue:0, view: 'mini', votes_label:false});
                            })
                            &lt;/script&gt;
                        </pre>

                        <h3 id="vote_counter"> Vote Counter</h3>
                        <ul>
                            <li>Show</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#opineo').opineo('results.php', {curvalue:0, view: 'mini', show_votes_counter:true});
                            })
                            &lt;/script&gt;
                        </pre>

                        <ul>
                            <li>Hide</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#opineo').opineo('results.php', {curvalue:0, view: 'mini', votes_label:false});
                            })
                            &lt;/script&gt;
                        </pre>

                        <h3 id="rating_icons"> Rating Icons</h3>
                        <ul>
                            <li>Colored</li>
                            <li>Grey</li>
                        </ul>

                        <h3 id="rating_titles"> Rating Titles</h3>
                        <ul>
                            <li>Text For First Star</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#opineo').opineo('results.php', {curvalue:0, view: 'mini', star_1_text:'Hate It'});
                            })
                            &lt;/script&gt;
                        </pre>

                        <ul>
                            <li>Text For Second Star</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#opineo').opineo('results.php', {curvalue:0, view: 'mini', star_2_text:'Don't Like It'});
                            })
                            &lt;/script&gt;
                        </pre>

                        <ul>
                            <li>Text For Third Star</li>
                        </ul>

                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#opineo').opineo('results.php', {curvalue:0, view: 'mini', star_1_text:'Its OK'});
                            })
                            &lt;/script&gt;
                        </pre>

                        <ul>
                            <li>Text For Fourth Star</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#opineo').opineo('results.php', {curvalue:0, view: 'mini', star_1_text:'Like It'});
                            })
                            &lt;/script&gt;
                        </pre>

                        <ul>
                            <li>Text For Fifth Star</li>
                        </ul>
                        <pre class="prettyprint">
                            &lt;script&gt;
                            $(document).ready(function (){
                                $('#opineo').opineo('results.php', {curvalue:0, view: 'mini', star_1_text:'Love It'});
                            })
                            &lt;/script&gt;
                        </pre>

                        <h3 id="bar_colors"> Bar Colors</h3>
                        <ul>
                            <li>Colors of Red Bar</li>
                            <li>Colors of Yellow Bar</li>
                            <li>Colors of Green Bar</li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>
    </div>
@endsection