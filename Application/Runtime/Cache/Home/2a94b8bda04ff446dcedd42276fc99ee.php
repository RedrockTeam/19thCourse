<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
    <head>
        <title>团团微课学报告</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="stylesheet" href="./Public/js/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
        <script src = './Public/js/jquery-2.1.4.min.js'></script>
        <script src = './Public/js/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js'></script>
        <script src = './Public/js/pageChange.js?v=<?php echo time();?>'></script>
        <script src = './Public/js/main.js?v=<?php echo time();?>'></script>
        <script src = "./Public/js/styleSet.js?v=<?php echo time();?>"></script>
        <link rel="stylesheet" href="./Public/css/stlye.css?v=<?php echo time();?>">
        <link rel="stylesheet" href="./Public/css/animate.min.css?v=<?php echo time();?>">
    </head>
    <body>
        <div data-role="page" id="mask">

        </div>
        <div class="mask">

        </div>
        <div class="overwarning">
            <div class="position_box">
                <img src="./Public/images/warning_title.png?v=1" alt="" class="developer_title">
                <span class="closeP">&nbsp;X&nbsp;</span>
                <img src="./Public/images/warning_img.png?v=1" alt="" class="warning_img">
                <p class="select_wrong">
                    第 <span class="right_num"></span> 课还未完成，请完成学习后再选择其他课程哦
                </p>
                <p class="over_learnt">
                    为了保证学习效果,每天只能学习两节课程,认真复习哦
                </p>
                <p class="learn_completed">
                    太棒了! 本课程已完成,可继续复习
                </p>
            </div>
        </div>
        <div data-role="page" id="beginPage">
            <img src="./Public/images/VoiceofYoung.png?v=1" alt="" class="logo">
            <img src="./Public/images/beginXi.png?v=1" alt="" class="animated pulse beginImg">
            <div id="btnContainer">
                <div class="o_btn startBtn btn">
                    开始游戏
                </div>
                <div class="y_btn listBtn btn">
                    查看榜单
                </div>
            </div>
            <p class="copyright">©️红岩网校工作站</p>
        </div>
        <div data-role="page" id="backPage">
            <img src="./Public/images/VoiceofYoung.png?v=1" alt="" class="logo">
            <div class="programerHolder">
                    <div class="position_box">
                        <img src="./Public/images/developer_title.png?v=1" alt="" class="developer_title">
                        <span class="closeP">&nbsp;X&nbsp;</span>
                        <ul class="programer">
                            <li>产品设计：杨奇凡</li>
                            <li>
                                视觉设计：田梅琳 李相玲
                            </li>
                            <li>
                                程序开发：周政
                            </li>
                            <li>
                                指导教师：杨奇凡
                            </li>
                            <li>
                                出品：红岩网校工作站
                            </li>
                        </ul>
                    </div>
            </div>
            <span class="Qc">

            </span>
            <div class="title_container">
                    <img src="./Public/images/background_title.png" alt="" class="background_title">
            </div>
            <div class="background_content">
                <div class="touchBar">
                    <ul class="courseList">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li style="margin-right: 0">6</li>

                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                        <li>10</li>
                        <li>11</li>
                        <li style="margin-right: 0">12</li>

                        <li>13</li>
                        <li>14</li>
                        <li>15</li>
                        <li>16</li>
                        <li>17</li>
                        <li style="margin-right: 0">18</li>

                        <li>19</li>
                        <li>20</li>
                        <li>21</li>
                        <li>22</li>
                        <li>23</li>
                        <li style="margin-right: 0">24</li>

                        <li>25</li>
                        <li>26</li>
                        <li>27</li>
                        <li>28</li>
                        <li>29</li>
                        <li style="margin-right: 0">30</li>

                        <li>31</li>
                        <li>32</li>
                        <li>33</li>
                        <li>34</li>
                        <li>35</li>
                        <li style="margin-right: 0">36</li>

                        <li>37</li>
                        <li>38</li>
                        <li>39</li>
                        <li>40</li>
                        <li>41</li>
                        <li style="margin-right: 0">42</li>

                        <li>43</li>
                        <li>44</li>
                        <li>45</li>
                        <li>46</li>
                        <li>47</li>
                        <li style="margin-right: 0">48</li>

                        <li>49</li>
                        <li>50</li>
                        <li>51</li>
                        <li>52</li>
                        <li>53</li>
                        <li style="margin-right: 0">54</li>

                        <li>55</li>
                        <li>56</li>
                        <li>57</li>
                        <li>58</li>
                        <li>59</li>
                        <li style="margin-right: 0">60</li>

                        <li>61</li>
                        <li>62</li>
                        <li>63</li>
                        <li>64</li>
                        <li>65</li>
                        <li style="margin-right: 0">66</li>

                        <li>67</li>
                        <li>68</li>
                        <li>69</li>
                        <li>70</li>
                        <li>71</li>
                        <li style="margin-right: 0">72</li>

                        <li>73</li>
                        <li>74</li>
                        <li>75</li>
                        <li>76</li>
                        <li>77</li>

                    </ul>
                </div>
                <p class="swipe_tips">提示:滑动显示更多课程</p>
            </div>
            <div class="btnContainer">
                <div class="o_btn studyBtn btn">我的学习</div>
                <div class="y_btn return btn">返 回</div>
            </div>
        </div>
        <div data-role="page" id="gamePage">
            <img src="./Public/images/VoiceofYoung.png?v=1" alt="" class="logo">
            <div class="courseNum">1</div>
            <div class="questionContainer" data-role="none">
                <div class="conversation">
                    <p class="Qtitle">
                        中国共产党人的初心和使命就是为
                        中国人民谋幸福为中华民族谋复兴
                    </p>
                    <div class="sentenceBox">
                        <div class="sentences">
                            中国共产党第十九次全国代表大会，是在全面建成小康社会决胜阶段、中国特色社会主义进入新时代的关键时期召开的一次十分重要的大会。大会的主题是不忘初心，牢记使命，高举中国特色社会主义伟大旗帜，决胜全面建成小康社会，夺取新时代中国特色社会主义伟大胜利，为实现中华民族伟大复兴的中国梦不懈奋斗。中国共产党第十九次全国代表大会，是在全面建成小康社会决胜阶段、中国特色社会主义进入新时代的关键时期召开的一次十分重要的大会。大会的主题是不忘初心，牢记使命，高举中国特色社会主义伟大旗帜，决胜全面建成小康社会，夺取新时代中国特色社会主义伟大胜利，为实现中华民族伟大复兴的中国梦不懈奋斗。中国共产党第十九次全国代表大会，是在全面建成小康社会决胜阶段、中国特色社会主义进入新时代的关键时期召开的一次十分重要的大会。大会的主题是不忘初心，牢记使命，高举中国特色社会主义伟大旗帜，决胜全面建成小康社会，夺取新时代中国特色社会主义伟大胜利，为实现中华民族伟大复兴的中国梦不懈奋斗。中国共产党第十九次全国代表大会，是在全面建成小康社会决胜阶段、中国特色社会主义进入新时代的关键时期召开的一次十分重要的大会。大会的主题是不忘初心，牢记使命，高举中国特色社会主义伟大旗帜，决胜全面建成小康社会，夺取新时代中国特色社会主义伟大胜利，为实现中华民族伟大复兴的中国梦不懈奋斗。中国共产党第十九次全国代表大会，是在全面建成小康社会决胜阶段、中国特色社会主义进入新时代的关键时期召开的一次十分重要的大会。大会的主题是不忘初心，牢记使命，高举中国特色社会主义伟大旗帜，决胜全面建成小康社会，夺取新时代中国特色社会主义伟大胜利，为实现中华民族伟大复兴的中国梦不懈奋斗。中国共产党第十九次全国代表大会，是在全面建成小康社会决胜阶段、中国特色社会主义进入新时代的关键时期召开的一次十分重要的大会。大会的主题是不忘初心，牢记使命，高举中国特色社会主义伟大旗帜，决胜全面建成小康社会，夺取新时代中国特色社会主义伟大胜利，为实现中华民族伟大复兴的中国梦不懈奋斗。中国共产党第十九次全国代表大会，是在全面建成小康社会决胜阶段、中国特色社会主义进入新时代的关键时期召开的一次十分重要的大会。大会的主题是不忘初心，牢记使命，高举中国特色社会主义伟大旗帜，决胜全面建成小康社会，夺取新时代中国特色社会主义伟大胜利，为实现中华民族伟大复兴的中国梦不懈奋斗。中国共产党第十九次全国代表大会，是在全面建成小康社会决胜阶段、中国特色社会主义进入新时代的关键时期召开的一次十分重要的大会。大会的主题是不忘初心，牢记使命，高举中国特色社会主义伟大旗帜，决胜全面建成小康社会，夺取新时代中国特色社会主义伟大胜利，为实现中华民族伟大复兴的中国梦不懈奋斗。中国共产党第十九次全国代表大会，是在全面建成小康社会决胜阶段、中国特色社会主义进入新时代的关键时期召开的一次十分重要的大会。大会的主题是不忘初心，牢记使命，高举中国特色社会主义伟大旗帜，决胜全面建成小康社会，夺取新时代中国特色社会主义伟大胜利，为实现中华民族伟大复兴的中国梦不懈奋斗。中国共产党第十九次全国代表大会，是在全面建成小康社会决胜阶段、中国特色社会主义进入新时代的关键时期召开的一次十分重要的大会。大会的主题是不忘初心，牢记使命，高举中国特色社会主义伟大旗帜，决胜全面建成小康社会，夺取新时代中国特色社会主义伟大胜利，为实现中华民族伟大复兴的中国梦不懈奋斗。
                        </div>
                    </div>
                    <p class="swipe_tips">提示:如有内容超出可滑动显示</p>
                </div>
            </div>
            <div class="nextBtn y_btn btn">
                <span class="time">7 s</span>
            </div>
            <p class="copyright">©️红岩网校工作站</p>
        </div>
        <div data-role="page" id="overPage">
            <img src="./Public/images/VoiceofYoung.png?v=1" alt="" class="logo">
            <img src="./Public/images/card_title.png?v=1" alt="" class="card_title">
            <div class="rank_container">
                <img src="./Public/images/cup.png?v=1" alt="" class="cup_img">
                <p class="nickname"></p>
                <p>
                    你已经完成课时 <span class="daynum"></span> 节<br>
                    排名 <span class="ranknum"></span> 名
                </p>
            </div>
            <div class="btn_container">
                <div class="o_btn listBtn btn">
                    确&nbsp;&nbsp;定
                </div>
                <div class="y_btn replayBtn btn">
                    继续学习
                </div>
            </div>
            <p class="copyright">©️红岩网校工作站</p>
        </div>
        <div data-role="page" id="listPage">
            <img src="./Public/images/VoiceofYoung.png" alt="" class="logo">
            <div class="list_container">
                <img src="./Public/images/list_title.png" alt="" class="list_title">
                <div class="rank_list">
                    <img src="./Public/images/boy.png" alt="" class="user_avatar">
                    <p class="nickname"></p>
                    <p class="rank">我的排名：第 <span class="ranknum"></span> 名</p>
                    <img src="./Public/images/studyBtn.png" alt="" class="studyBtn">
                     <img src="./Public/images/classRankBtn.png" alt="" class="classRankBtn">
                    <ul class="list_rank">
                        <li style="background: #feebcb">
                            <img src="./Public/images/boy.png" alt="" class="list_avatar">
                            <span class="list_nickname">Lich</span>
                            <img src="./Public/images/gold.png" alt="" class="medal">
                        </li>
                        <li>
                            <img src="./Public/images/boy.png" alt="" class="list_avatar">
                            <span class="list_nickname">Lich</span>
                            <img src="./Public/images/silver.png" alt="" class="medal">
                        </li>
                        <li style="background: #feebcb">
                            <img src="./Public/images/boy.png" alt="" class="list_avatar">
                            <span class="list_nickname">Lich</span>
                            <img src="./Public/images/copper.png" alt="" class="medal">
                        </li>
                    </ul>
                </div>
            </div>
            <div id="warning">
                <div id="warningbox">
                    <img class="closeBtn" src="./Public/images/closeBtn.png">
                    <img class="warning_img" src="./Public/images/warning_img.png">
                    <p class="warningWords">@重邮学生：关注重邮小帮手微信（cyxbswx），并绑定学号后才能查看哦～</p>
                </div>
            </div>
            <p class="copyright">©️红岩网校工作站</p>
        </div>
        <div data-role="page" id="classListPage">
            <img src="./Public/images/VoiceofYoung.png" alt="" class="logo">
            <div class="list_container">
                <img src="./Public/images/partLog.png" alt="" class="partLog">
                <div class="rank_list">
                    <img src="./Public/images/boy.png" alt="" class="user_avatar">
                    <p class="nickname"></p>
                    <p class="rank">班级排名：第 <span class="stunumber"></span> 名</p>
                    <img src="./Public/images/returnBtn.png" alt="" class="returnBtn">
                    <div class="listNav" style="background: #feebcb">
                        <p class="colleges">学院</p>
                        <p class="classes_1">班级</p>
                        <p class="classRankss">排名</p>
                    </div>
                    <ul class="list_ranks">
                        <li>
                            <p class="college">软件学院</p>
                            <p class="classes">13901602</p>
                            <img src="./Public/images/gold.png" alt="" class="medal">
                        </li>
                        <li style="background: #feebcb">
                            <p class="college">计算机学院</p>
                            <p class="classes">04011506</p>
                            <img src="./Public/images/silver.png" alt="" class="medal">
                        </li>
                        <li>
                            <p class="college">国际学院</p>
                            <p class="classes">ZM1604</p>
                            <img src="./Public/images/copper.png" alt="" class="medal">
                        </li>
                        <li style="background: #feebcb">
                            <p class="college"></p>
                            <p class="classes"></p>
                            <p class="classRank"></p>
                        </li>
                        <li>
                            <p class="college"></p>
                            <p class="classes"></p>
                            <p class="classRank"></p>
                        </li>
                        <li style="background: #feebcb">
                            <p class="college"></p>
                            <p class="classes"></p>
                            <p class="classRank"></p>
                        </li>
                        <li>
                            <p class="college"></p>
                            <p class="classes"></p>
                            <p class="classRank"></p>
                        </li>
                        <li style="background: #feebcb">
                            <p class="college"></p>
                            <p class="classes"></p>
                            <p class="classRank"></p>
                        </li>
                        <li>
                            <p class="college"></p>
                            <p class="classes"></p>
                            <p class="classRank"></p>
                        </li>
                        <li style="background: #feebcb">
                            <p class="college"></p>
                            <p class="classes"></p>
                            <p class="classRank"></p>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="copyright">©️红岩网校工作站</p>
        </div>
        <script src="//res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
        <script>
            var shareTitle = '团团打卡 学讲话';
            var shareDesc = "<?php echo ($share); ?>";
            var shareURL = "https://redrock.cqupt.edu.cn/praise_xi_shanbei/";
            var shareImg = "https://redrock.cqupt.edu.cn/praise_xi_shanbei/Public/images/tuanshare.png";
            wx.config({
                debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
                appId: 'wx81a4a4b77ec98ff4', // 必填，公众号的唯一标识
                timestamp: "<?php echo ($signature['timestamp']); ?>", // 必填，生成签名的时间戳
                nonceStr: "<?php echo ($signature['noncestr']); ?>", // 必填，生成签名的随机串
                signature: "<?php echo ($signature['signature']); ?>",// 必填，签名，见附录1
                jsApiList: [
                    'onMenuShareTimeline',
                    'onMenuShareAppMessage',
                    'onMenuShareQQ',
                    'onMenuShareQZone',
                    'hideAllNonBaseMenuItem'
                ] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
            });
            function initShare(shareTitle, shareDesc, shareURL, shareImg) {
                wx.ready(function(){
                    wx.onMenuShareTimeline({
                        title: shareDesc, // 分享标题
                        link: shareURL,
                        imgUrl: shareImg,
                        success: function () {
//                        alert('分享成功!');// 用户确认分享后执行的回调函数
                        },
                        cancel: function () {
                            // 用户取消分享后执行的回调函数
                        }
                    });
                    wx.onMenuShareAppMessage({
                        title: shareTitle, // 分享标题
                        desc: shareDesc, // 分享描述
                        link: shareURL,
                        imgUrl: shareImg,
                        type: '', // 分享类型,music、video或link，不填默认为link
                        dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                        success: function () {
//                        alert('分享成功!');// 用户确认分享后执行的回调函数
                        },
                        cancel: function () {
                            // 用户取消分享后执行的回调函数
                        }
                    });
                    wx.onMenuShareQQ({
                        title: shareTitle, // 分享标题
                        desc: shareDesc, // 分享描述
                        link: shareURL,
                        imgUrl: shareImg,
                        success: function () {
//                        alert('分享成功!');// 用户确认分享后执行的回调函数
                        },
                        cancel: function () {
                            // 用户取消分享后执行的回调函数
                        }
                    });
                    wx.onMenuShareQZone({
                        title: shareTitle, // 分享标题
                        desc: shareDesc, // 分享描述
                        link: shareURL,
                        imgUrl: shareImg,
                        success: function () {
//                        alert('分享成功!');// 用户确认分享后执行的回调函数
                        },
                        cancel: function () {
                            // 用户取消分享后执行的回调函数
                        }
                    });
                });
            }
            initShare(shareTitle, shareDesc, shareURL, shareImg);
        </script>

    </body>
</html>