<?php?>
<html>
  <head>
    <!-- <link rel="stylesheet" href="css/loader.css"> -->
    <style>
      div.loader{
        position: absolute;
        width: 100vw;
        height: 100vh;
        justify-content: center;
        align-items: center;
        z-index: 100;
        background: #11101d;
      }
      .dynamic-logo{
        height:100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      div.dynamic-logo span{
        position: absolute;
        width:500px;
        height:500px;
        border-radius:50%;
        border-left: 4px rgb(19, 106, 16) solid;
        border-top: 4px rgb(19, 106, 16) solid;
        border-right: 4px rgb(19, 106, 16) solid;
        /* border-top: 10px transparent solid; */
        /* border-right: 5px rgb(14, 119, 10) solid; */
      }
      div.dynamic-logo span:nth-last-of-type(1){
        animation: ani-1 1.5s linear infinite;
      }
      div.dynamic-logo span:nth-last-of-type(2){
        animation: ani-2 1.5s linear infinite;
      }
      div.dynamic-logo span:nth-last-of-type(3){
        animation: ani-3 1.5s linear infinite;
      }
      @keyframes ani-1 {
        from{
          transform:
          rotateZ(120deg)
          rotateX(55deg)
          rotateZ(0deg)
        }
        to{
          transform:
          rotateZ(120deg)
          rotateX(55deg)
          rotateZ(360deg)
        }
      }
      @keyframes ani-2 {
        from{
          transform:
          rotateZ(240deg)
          rotateX(55deg)
          rotateZ(0deg)
        }
        to{
          transform:
          rotateZ(240deg)
          rotateX(55deg)
          rotateZ(360deg)
        }
      }
      @keyframes ani-3 {
        from{
          transform:
          rotateZ(360deg)
          rotateX(55deg)
          rotateZ(0deg)
        }
        to{
          transform:
          rotateZ(360deg)
          rotateX(55deg)
          rotateZ(360deg)
        }
      }


      .fondu-out{
        opacity: 0;
        transition: opacity 0.2s ease-out;
      }
      div.loader.fondu-out{
        z-index: -100;
      }
    </style>



  </head>
  <body>
    <div class="loader">
      <div class="dynamic-logo">
        <span></span>
        <span></span>
        <span></span>
        <svg
          class="logo-brain"
          width="4cm"
          height="4cm"
          viewBox="0 0 13.834354 12.905601"
          xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
          xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:svg="http://www.w3.org/2000/svg">

          <defs id="defs1">
            <linearGradient
              id="linearGradient38"
              inkscape:collect="always">
                <stop
                style="stop-color:#ecc3f0;stop-opacity:1;"
                offset="0"
                id="stop39" />
                <stop
                style="stop-color:#c253ff;stop-opacity:1;"
                offset="0.83704734"
                id="stop38" />
            </linearGradient>
            <radialGradient
              inkscape:collect="always"
              xlink:href="#linearGradient38"
              id="radialGradient39"
              cx="116.38701"
              cy="174.28369"
              fx="116.38701"
              fy="174.28369"
              r="6.9171772"
              gradientTransform="matrix(1,0,0,0.93286623,-96.404232,-141.92551)"
              gradientUnits="userSpaceOnUse" />
          </defs>
          <g
            inkscape:label="logo"
            inkscape:groupmode="layer"
            id="layer1"
            transform="translate(-13.065601,-14.205064)">
            <path
              d="m 17.544498,27.06394 c -0.47169,-0.11076 -0.94589,-0.45901 -1.10477,-0.81134 -0.0796,-0.17653 -0.0936,-0.18564 -0.23145,-0.15019 -0.0807,0.0207 -0.36112,0.0367 -0.62316,0.0353 -0.42657,-0.002 -0.50528,-0.0167 -0.75173,-0.1394 -0.32877,-0.16363 -0.66726,-0.51032 -0.80313,-0.8226 -0.0951,-0.2186 -0.14582,-0.68549 -0.0815,-0.75018 0.0172,-0.0173 0.11368,-0.009 0.2144,0.0194 0.28781,0.0799 0.85274,0.0658 0.94206,-0.0235 0.0412,-0.0412 0.0749,-0.0932 0.0749,-0.11571 0,-0.12145 -0.1636,-0.19058 -0.45102,-0.19058 -0.6396,0 -1.26798,-0.32894 -1.4933,-0.7817 -0.13529,-0.27186 -0.15434,-0.69698 -0.0449,-1.00232 0.0857,-0.23924 0.14413,-0.25655 0.26985,-0.08 0.28084,0.3944 1.11771,0.89991 1.90997,1.1537 0.46261,0.1482 0.66057,0.28076 0.7904,0.52927 0.19483,0.37295 -0.0568,0.76716 -0.62364,0.97679 -0.19606,0.0725 -0.24087,0.1108 -0.25314,0.21626 -0.012,0.10309 0.008,0.13403 0.10491,0.15822 0.14966,0.0376 0.52113,-0.0829 0.76347,-0.24757 0.16322,-0.11091 0.21459,-0.1217 0.45805,-0.0963 0.64678,0.0676 1.11106,0.37344 1.30669,0.86078 0.13026,0.32448 0.22031,0.39692 0.39468,0.31746 0.10694,-0.0487 0.11715,-0.0756 0.0941,-0.24767 -0.0238,-0.17776 -0.19036,-0.46566 -0.47395,-0.81944 -0.0893,-0.11141 -0.11069,-0.2054 -0.1246,-0.54792 -0.0185,-0.45628 -0.0531,-0.53255 -0.24156,-0.53255 -0.19644,0 -0.24192,0.0824 -0.24192,0.43834 0,0.17819 -0.008,0.32399 -0.0167,0.32399 -0.009,0 -0.0789,-0.0204 -0.15485,-0.0453 -0.076,-0.0249 -0.22389,-0.0672 -0.32871,-0.0939 l -0.19058,-0.0486 v -0.3468 c 0,-0.3125 -0.0151,-0.36847 -0.15215,-0.56586 -0.16903,-0.24337 -0.44181,-0.40028 -0.98138,-0.56452 -0.46293,-0.14091 -0.95743,-0.3967 -1.35585,-0.70136 -0.94572,-0.72316 -1.30386,-1.72461 -0.93663,-2.61905 0.0921,-0.22429 0.34969,-0.63671 0.39769,-0.63671 0.0192,0 0.0695,0.12438 0.11171,0.2764 0.17551,0.63126 0.82118,1.06703 1.69694,1.14527 l 0.35262,0.0315 0.0902,0.30969 c 0.0496,0.17033 0.10198,0.34542 0.11643,0.38908 0.0217,0.0656 -0.0209,0.0853 -0.24406,0.11317 -0.33754,0.0422 -0.63067,0.004 -1.01255,-0.1327 l -0.29712,-0.10617 -0.0978,0.0978 c -0.14166,0.14166 -0.0777,0.23966 0.23193,0.35554 0.53163,0.19894 1.15174,0.23533 1.5636,0.0917 0.12094,-0.0422 0.1818,-0.0308 0.38653,0.072 0.13365,0.0671 0.36263,0.14608 0.50885,0.17544 0.20797,0.0418 0.27079,0.0753 0.28853,0.15386 0.0125,0.0553 0.0455,0.20767 0.0734,0.33869 0.11285,0.53029 0.51243,0.95158 1.22856,1.29528 0.86253,0.41398 1.24004,0.92924 1.25175,1.70852 0.006,0.41802 -0.12716,0.75542 -0.42779,1.08156 -0.438,0.47517 -1.22865,0.70821 -1.88216,0.55477 z m 3.55525,-0.48378 -0.67924,-0.39237 0.0122,-1.33407 0.0122,-1.33407 0.77424,-0.445 0.77423,-0.44501 v -0.75479 -0.75479 l 0.13102,-0.0916 c 0.0721,-0.0504 0.43655,-0.26843 0.80997,-0.48456 l 0.67895,-0.39295 v -1.326 c 0,-1.29888 0.002,-1.32663 0.0986,-1.35727 0.14825,-0.0471 0.2822,-0.30306 0.28241,-0.53973 1.4e-4,-0.17159 -0.0272,-0.23466 -0.15901,-0.36645 -0.18467,-0.18467 -0.3434,-0.23602 -0.58778,-0.19018 -0.50312,0.0944 -0.63391,0.7647 -0.21032,1.07787 l 0.14731,0.10892 v 1.20044 1.20044 l -0.55414,0.31525 c -0.30478,0.17338 -0.57278,0.31524 -0.59557,0.31524 -0.0228,0 -0.0406,-0.87202 -0.0396,-1.94154 l 0.002,-1.94155 0.15302,-0.0962 c 0.29533,-0.18574 0.33015,-0.6722 0.0659,-0.92047 -0.26822,-0.25198 -0.63047,-0.22406 -0.88722,0.0684 -0.23765,0.27066 -0.16785,0.71093 0.14169,0.89379 l 0.14254,0.0842 -0.0123,2.8372 -0.0123,2.8372 -0.4288,0.24718 c -0.23585,0.13595 -0.55209,0.31742 -0.70277,0.40326 l -0.27396,0.15607 v -0.56928 -0.56929 l 0.1474,-0.0295 c 0.0811,-0.0162 0.22044,-0.10251 0.3097,-0.19177 0.14344,-0.14344 0.16229,-0.19136 0.16229,-0.41266 0,-0.23011 -0.0154,-0.26503 -0.19058,-0.43166 l -0.19058,-0.1813 V 17.9788 15.12603 l 0.65942,-0.38901 c 0.36268,-0.21397 0.68401,-0.38902 0.71408,-0.38902 0.0301,0 0.51053,0.26508 1.06771,0.58906 0.55719,0.32399 1.23819,0.71827 1.51334,0.87619 l 0.50027,0.28711 0.0123,2.66419 0.0123,2.66419 -0.58072,0.3308 c -0.3194,0.18194 -0.59911,0.33822 -0.62158,0.34729 -0.0225,0.009 -0.11718,-0.0197 -0.21045,-0.064 -0.49793,-0.23628 -1.01075,0.30576 -0.779,0.82339 0.24188,0.54026 1.06039,0.40098 1.13979,-0.19394 l 0.0268,-0.20078 0.70277,-0.40375 0.70277,-0.40374 v -1.48734 c 0,-1.03368 -0.016,-1.49726 -0.0526,-1.51986 -0.09,-0.0556 -0.23117,-0.41754 -0.23117,-0.5925 0,-0.36526 0.31854,-0.78307 0.69063,-0.90587 0.24005,-0.0792 0.57338,-0.0264 0.79272,0.12558 0.21196,0.14688 0.42082,0.53428 0.41932,0.77774 -10e-4,0.19205 -0.1354,0.51817 -0.25345,0.61586 -0.071,0.0588 -0.0792,0.24937 -0.0806,1.88199 l -0.002,1.8166 -2.1207,1.20747 -2.12069,1.20748 -0.17093,-0.0811 c -0.24392,-0.11575 -0.47789,-0.0673 -0.66769,0.13823 -0.28012,0.30334 -0.23889,0.73311 0.0895,0.93335 0.40955,0.2497 0.93841,-0.0486 0.94544,-0.53326 0.001,-0.0898 0.12571,-0.17926 0.71435,-0.51371 0.61738,-0.35079 0.71975,-0.42587 0.76484,-0.56105 0.20788,-0.62308 1.02989,-0.82828 1.51296,-0.37767 0.32506,0.30321 0.38642,0.84117 0.13865,1.21559 -0.18126,0.2739 -0.57543,0.46061 -0.88554,0.41947 -0.22804,-0.0302 -0.23436,-0.0273 -1.55951,0.73772 -0.7318,0.42245 -1.35198,0.77614 -1.37818,0.78598 -0.0262,0.01 -0.35331,-0.15868 -0.72689,-0.37449 z m 3.96513,-1.6274 c 0.1676,-0.07 0.31133,-0.28072 0.31133,-0.45638 0,-0.24078 -0.27045,-0.5241 -0.50028,-0.5241 -0.23428,0 -0.5005,0.28408 -0.50009,0.53364 2.9e-4,0.1813 0.17169,0.41125 0.34343,0.46078 0.0862,0.0248 0.16271,0.0471 0.1701,0.0495 0.007,0.002 0.0864,-0.0262 0.17551,-0.0634 z m 1.09237,-6.43663 c 0.33125,-0.15719 0.39554,-0.52704 0.13828,-0.79556 -0.104,-0.10855 -0.16821,-0.13275 -0.35226,-0.13275 -0.19284,0 -0.24274,0.021 -0.34842,0.14659 -0.17563,0.20872 -0.17225,0.5047 0.008,0.67234 0.21065,0.19628 0.32436,0.2187 0.55473,0.10938 z m -4.46164,7.11957 c -0.0459,-0.0267 -0.11664,-0.11289 -0.1573,-0.19152 -0.17481,-0.33805 0.19246,-0.68306 0.57207,-0.53739 0.0942,0.0361 0.21653,0.26244 0.21653,0.40051 0,0.2524 -0.40239,0.46173 -0.6313,0.3284 z m -2.82444,-2.20728 c -0.70348,-0.33253 -0.9698,-0.63729 -1.07153,-1.2262 -0.0691,-0.40031 -0.20259,-0.54298 -0.57268,-0.61231 -0.65821,-0.12331 -0.92717,-0.42744 -0.92717,-1.04843 0,-0.29619 0.0232,-0.40454 0.13543,-0.63313 0.1663,-0.33867 0.14488,-0.42625 -0.0993,-0.40606 -0.16485,0.0136 -0.18928,0.0356 -0.30793,0.27686 -0.0709,0.14413 -0.14107,0.30263 -0.15596,0.35222 -0.0242,0.0806 -0.0602,0.0871 -0.34033,0.0609 -0.53878,-0.0503 -1.06052,-0.36185 -1.25963,-0.75215 -0.10971,-0.21505 -0.12092,-0.58208 -0.0235,-0.76888 0.0614,-0.11767 0.0587,-0.15311 -0.0258,-0.34416 -0.22089,-0.49936 -0.15425,-1.06798 0.18147,-1.54852 0.16207,-0.23198 0.53599,-0.57281 0.62843,-0.57281 0.0197,0 0.0612,0.11011 0.0922,0.2447 0.0963,0.41727 0.32946,0.83707 0.65872,1.1861 0.33531,0.35545 0.43646,0.41296 0.58579,0.33304 0.16203,-0.0867 0.11126,-0.21765 -0.2007,-0.51751 -0.7851,-0.75464 -0.94513,-1.64912 -0.38552,-2.15482 0.29942,-0.27058 0.71219,-0.4328 0.99546,-0.39123 0.1223,0.018 0.16036,-0.007 0.2902,-0.19134 0.42324,-0.60046 1.54454,-0.68829 2.13636,-0.16735 0.54829,0.48262 0.6097,1.24124 0.14503,1.79172 l -0.13264,0.15713 0.0985,0.10492 c 0.16613,0.17696 0.29282,0.51547 0.29394,0.78539 0.001,0.30494 -0.0959,0.55341 -0.29799,0.76224 -0.12719,0.13142 -0.1421,0.16934 -0.0936,0.23823 0.32295,0.45903 0.40618,0.72832 0.33844,1.09506 -0.10933,0.59193 -0.64216,0.82212 -1.22177,0.52781 -0.33993,-0.17261 -0.43933,-0.40252 -0.43885,-1.01503 2.1e-4,-0.26305 0.0324,-0.73474 0.0715,-1.0482 0.0391,-0.31346 0.0711,-0.72538 0.0711,-0.91538 0,-0.6661 -0.28982,-1.11923 -0.81577,-1.27542 -0.32252,-0.0958 -0.3889,-0.0935 -0.52492,0.0181 -0.16241,0.13328 -0.073,0.25552 0.21727,0.29724 0.29862,0.0429 0.42431,0.13348 0.55235,0.39798 0.12959,0.2677 0.13468,0.64479 0.0216,1.59921 -0.11647,0.98288 -0.11168,1.40377 0.019,1.67378 0.22531,0.46543 0.65595,0.70977 1.30868,0.74255 l 0.42087,0.0211 -0.0326,0.28125 c -0.0312,0.26852 -0.0249,0.29251 0.13765,0.52999 0.34693,0.50675 0.42679,0.97902 0.2739,1.61972 -0.0994,0.41647 -0.21527,0.70456 -0.28089,0.69828 -0.019,-0.002 -0.22813,-0.0948 -0.46478,-0.20669 z m 4.09668,-0.53546 c -0.24937,-0.26908 -0.0745,-0.6839 0.28826,-0.6839 0.20157,0 0.40487,0.1845 0.40487,0.36743 0,0.39154 -0.43815,0.59159 -0.69313,0.31647 z m -2.78497,-1.44622 c 0,-0.34195 0.009,-0.38117 0.09,-0.38117 0.17767,0 0.31281,0.16467 0.31281,0.38117 0,0.21649 -0.13514,0.38116 -0.31281,0.38116 -0.0807,0 -0.09,-0.0392 -0.09,-0.38116 z m 2.90982,-4.22303 c -0.33011,-0.41967 0.19599,-0.92112 0.57195,-0.54516 0.1552,0.15521 0.17294,0.27678 0.0696,0.47671 -0.0797,0.1542 -0.15837,0.19399 -0.38337,0.19399 -0.11545,0 -0.18662,-0.0346 -0.25815,-0.12554 z m -1.59534,-0.83102 c -0.0678,-0.0806 -0.12335,-0.18682 -0.12335,-0.23599 0,-0.3627 0.41816,-0.55493 0.69296,-0.31855 0.27962,0.24052 0.0915,0.70113 -0.2864,0.70113 -0.12002,0 -0.1906,-0.0365 -0.28321,-0.14659 z"
              style="fill:url(#radialGradient39)"
              id="path1-26"
              inkscape:label="brain" />
          </g>
        </svg>
      </div>
    </div>

    <!-- <script src='js\loader.js'></script> -->
    <script>
      const loader = document.querySelector('.loader');

      window.addEventListener('load', () => {

        loader.classList.add('fondu-out');

      })
    </script>
  </body>
</html>

