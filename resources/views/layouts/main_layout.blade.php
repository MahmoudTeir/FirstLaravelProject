<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="utf-8" />
@include('includes.style')
<!--[if lt IE 10]>
            <div
                style="
                    background: #212121;
                    padding: 10px 0;
                    box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.3);
                    clear: both;
                    text-align: center;
                    position: relative;
                    z-index: 1;
                "
            >
                <a href="http://windows.microsoft.com/en-US/internet-explorer/"
                    ><img
                        src="images/ie8-panel/warning_bar_0000_us.jpg"
                        border="0"
                        height="42"
                        width="820"
                        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."
                /></a>
            </div>
            <script src="js/html5shiv.min.js"></script>
        <![endif]-->
</head>

<body>
    <div class="preloader">
        <div class="wrapper-triangle">
            <div class="pen">
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
                <div class="line-triangle">
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                    <div class="triangle"></div>
                </div>
            </div>
        </div>
    </div>


    @yield('pageContent')





    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    @include('includes.main')
</body>

</html>
