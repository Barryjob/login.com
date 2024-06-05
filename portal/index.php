<?php include '../config/config.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'meta.php';?>

</head>



<body>
<setion class="background">
     <div class="background-dashboard">
        <div class="dash-main-content">
            <div class="con1">
                <div class="header1">
                    <div class="red"></div>
                    <div class="yellow"></div>
                    <div class="green"></div>
                </div>
                <div class="signal">
                    <p>USING ONESIGNAL</p>
                    <ul>
                        <li><span><i class="bi bi-grid"></i> Dashboard</span></li>
                        <li><span><i class="bi bi-sliders"></i> Setting</span></li>
                        <li><span><i class="bi bi-person-circle"></i> User</span></li>
                        <li><span><i class="bi bi-credit-card-2-front"></i> Delivery</span></li>
                        <li><span><i class="bi bi-broadcast"></i> OneSignal API</span></li>
                    </ul>
                   
                </div>
                <div class="signal">
                    <p>CONCEPTS</p>
                    <ul>
                        <li><span><i class="bi bi-terminal-split"></i> Prompting</span></li>
                        <li><span><i class="bi bi-bell"></i> Notification Appearance</span></li>
                        <li><span><i class="bi bi-chat-left-text"></i> Message Personalization</span></li>
                        <li><span><i class="bi bi-sign-intersection-side"></i> Player ID</span></li>
                        <li><span><i class="bi bi-disc"></i> Notification Behaviour</span></li>
                    </ul>
                   
                </div>
            </div>
            <div class="con2">
                <div class="header2">
                    <div class="search-con">
                        <button class="icon"><i class="bi bi-search"></i></button>
                        <input type="text" class="search-input" placeholder="Type in to search">
                    </div>
                    <div class="cloud">
                        <p>CLOUD FOUR - PRODUCTION</p>
                    </div>
                    <div class="profile-pic">
                        <img src="all-image/body-image/mecopy.jpg" alt="">
                    </div>
                    <i class="bi bi-chevron-down"></i>
                </div>

                <div class="main-dashboard">
                    <div class="dashboard-option">
                        <div class="text-div">
                            <h2>Realtime Message Data</h2>
                        </div>
                        <button>Option<i class="bi bi-chevron-down"></i> </button>
                    </div>
                    <div class="box">
                        <div class="sending-box">
                            <div class="first">
                                <div class="icon-text">
                                    <span><i class="bi bi-play-circle"></i> Started sending at</span>
                                </div>
                            </div>
                            <div class="second">
                                <div class="content">
                                    <p>March 27th 2019</p>
                                    <p class="one">12:26:06 am UTC-o7:00</p>
                                </div>
                            </div>
                        </div>

                        <div class="sending-box completed">
                            <div class="first">
                                <div class="icon-text">
                                    <span><i class="bi bi-arrow-clockwise"></i> Completed</span>
                                </div>
                            </div>
                            <div class="second">
                                <div class="content">
                                    <p>In 31.28</p>
                                    <p class="one">seconds</p>
                                </div>
                            </div>
                        </div>

                        <div class="sending-box total">
                            <div class="first">
                                <div class="icon-text">
                                    <span><i class="bi bi-chat-left-dots"></i> Total Messages</span>
                                </div>
                            </div>
                            <div class="second">
                                <div class="content">
                                    <p>3522725</p>
                                </div>
                            </div>
                        </div>

                        <div class="sending-box status">
                            <div class="first">
                                <div class="icon-text">
                                    <span><i class="bi bi-disc"></i> Status</span>
                                </div>
                            </div>
                            <div class="second">
                                <div class="content">
                                    <p>Delivered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br clear="all"/>

                    <div class="data">
                        <div class="upload">
                            <h2>Upload your Data</h2>
                        </div>
                        <div class="time">
                            <div class="time-section">
                                 <p>Last 120 seconds</p>
                            </div>

                            <div class="time-section">
                                <p>Last 30 minutes</p>
                            </div>
                            <div class="time-section">
                                <p>Last 24 hours</p>
                            </div>
                            <div class="time-section">
                                <p>Last 5 days</p>
                            </div>
                        </div>
                    </div>

                    <div id="chartContainer" style="height: 250px; width: 100%;">
                        <script>
                            window.onload = function () {

                            var chart = new CanvasJS.Chart("chartContainer", {
                                animationEnabled: true,  
                                axisY: {
                                    title: "Revenue in USD",
                                    valueFormatString: "#0,,.",
                                    suffix: "mn",
                                    prefix: "$"
                                },
                                data: [{
                                    type: "splineArea",
                                    color: "rgba(54,158,173,.7)",
                                    markerSize: 5,
                                    xValueFormatString: "YYYY",
                                    yValueFormatString: "$#,##0.##",
                                    dataPoints: [
                                        { x: new Date(2000, 0), y: 3289000 },
                                        { x: new Date(2001, 0), y: 3830000 },
                                        { x: new Date(2002, 0), y: 2009000 },
                                        { x: new Date(2003, 0), y: 2840000 },
                                        { x: new Date(2004, 0), y: 2396000 },
                                        { x: new Date(2005, 0), y: 1613000 },
                                        { x: new Date(2006, 0), y: 2821000 },
                                        { x: new Date(2007, 0), y: 2000000 },
                                        { x: new Date(2008, 0), y: 1397000 },
                                        { x: new Date(2009, 0), y: 2506000 },
                                        { x: new Date(2010, 0), y: 2798000 },
                                        { x: new Date(2011, 0), y: 3386000 },
                                        { x: new Date(2012, 0), y: 6704000},
                                        { x: new Date(2013, 0), y: 6026000 },
                                        { x: new Date(2014, 0), y: 2394000 },
                                        { x: new Date(2015, 0), y: 1872000 },
                                        { x: new Date(2016, 0), y: 2140000 }
                                    ]
                                }]
                                });
                            chart.render();

                            }
                        </script>
                
                    
                    </div>
                    




                </div>
            </div>

        </div>
         
     </div>
</setion>


    
</body>
</html>