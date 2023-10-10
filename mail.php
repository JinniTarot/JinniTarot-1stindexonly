/*-----------------------------------------------------------------------------------

    Template Name: Hurst -eCommerce Responsive Bootstrap Furniture Template
    Template URI: http://www.codecarnival.net/
    Description: This is html5 template
    Author: BootExperts
    Author URI: http://www.codecarnival.net/
    Version: 1.0

-----------------------------------------------------------------------------------

    CSS INDEX
    ===================

    1. Theme Default CSS (body, link color, section etc)
  	2. Header-area
  	3. Slider-section
  	4. Product-Area
  	5. Discount-Product-Area
  	6. Purchase-online-area
  	7. Blog-area
  	8. Subscribe-area
  	9. Footer-area
  	10. Home page 2
  	11. Shop-page
  	12. Shop-Sidebar
  	13. Single-Product
  	14. Shopping-cart
  	15. My Account
  	16. Single-Blog
  	17. 404
  	18. Contact

-----------------------------------------------------------------------------------*/

/*----------------------------------------*/
/*  1.  Theme default CSS
/*----------------------------------------*/
html, body {height: 100%;}
.floatleft {float:left}
.floatright {float:right}
.alignleft {float:left;margin-right:15px;margin-bottom: 15px}
.alignright {float:right;margin-left:15px;margin-bottom: 15px}
.aligncenter {display:block;margin:0 auto 15px}
a:focus {outline:0px solid}
img {max-width:100%;height:auto}
.fix {overflow:hidden}
.table, .table-cell {
  height: 100%;
  display: table;
}
.table-cell {
  display: table-cell;
  vertical-align: middle;
}
p {
  margin:0 0 15px;
}
h1, h2, h3, h4, h5, h6 {
  color: #434343;
  font-family: 'Lato', sans-serif;
  margin: 0 0 10px;
}
a{
  text-decoration:none;
  color: #434343;
}
a, *::before {
  transition: all 0.3s ease 0s;
  }
a:hover {
  color: #C8A165;
  text-decoration: none;
}
a:active, a:hover {
  outline: 0 none;
}
a:focus {
  text-decoration:none;
}
ul{
list-style: outside none none;
margin: 0;
padding: 0
}
.clear{clear:both}
body {
  color: #666;
  font-family: "Lato",sans-serif;
  font-size: 13px;
  font-weight: 400;
  line-height: 20px;
}
::-moz-selection {
    background: #b3d4fc;
    text-shadow: none;
}
::selection {
    background: #b3d4fc;
    text-shadow: none;
}
.browserupgrade {
    margin: 0.2em 0;
    background: #ccc;
    color: #000;
    padding: 0.2em 0;
}
/* =========================================
	2. Header-area
========================================= */
.header {
  background: #fff none repeat scroll 0 0;
	transition: all 0.5s ease 0s;
}
.header-area .container-fluid {
  padding: 0 40px;
}
.logo {
  padding: 38px 0;
}
.cart-icon {
  padding: 50px 0;
}
.logo, .cart-icon {
  transition: all 0.5s ease 0s;
}
.header-2 .logo {
  padding: 22px 0;
}
.header-2 .cart-icon {
  padding: 36px 0;
}
/* Mini-Cart */
.mini-cart ul li {
  display: inline-block;
  position: relative;
}
.cart-icon {
  display: inline-block;
  padding-left: 30px;
  position: relative;
  right: 0;
}
.cart-icon i {
  font-size: 25px;
  line-height: 25px;
}
.cart-icon > span {
  background: #C87065 none repeat scroll 0 0;
  border: 2px solid #fff;
  border-radius: 50%;
  color: #fff;
  display: inline-block;
  font-size: 10px;
  font-weight: 700;
  height: 18px;
  left: -8px;
  line-height: 16px;
  position: relative;
  text-align: center;
  top: -15px;
  width: 18px;
  z-index: 999;
}
.mini-cart-brief {
  background: #fff none repeat scroll 0 0;
  border: 1px solid #ddd;
  opacity: 0;
  position: absolute;
  right: 0;
  top: 150%;
  transition: all 0.5s ease 0s;
  visibility: hidden;
  width: 350px;
  z-index: -9;
}
.cart-items {
  border: 1px solid #f6f6f6;
  padding: 20px;
}
.cart-items p span {
  color: #c87065;
}
.all-cart-product {
  padding: 10px 0;
}
.single-cart {
  padding: 10px 30px 10px 20px;
  position: relative;
}
.cart-photo {
  float: left;
  width: 90px;
}
.cart-info {
  float: left;
  padding-left: 20px;
}
.cart-info h5 {
  font-family: "Bree Serif",serif;
  font-size: 14px;
  text-transform: uppercase;
}
.cart-delete {
  position: absolute;
  right: 30px;
  top: 50px;
}
.cart-delete a i {
  font-size: 16px;
  line-height: 19px;
}
.cart-totals {
  border-bottom: 1px solid #f6f6f6;
  border-top: 1px solid #f6f6f6;
  padding: 20px 50px 20px 20px;
}
.cart-totals h5 {
  font-size: 14px;
  font-weight: 900;
  line-height: 14px;
  text-transform: uppercase;
}
.cart-bottom {
  padding: 20px 60px 30px;
}
.mini-cart ul li:hover .mini-cart-brief {
  opacity: 1;
  top: 100%;
  transition: all 0.5s ease 0s;
  visibility: visible;
  z-index: 99999999;
}
.mini-cart ul li:hover  .cart-icon {
  color: #c8a165;
}
/* Main-Menu */
.menu-toggle {
  left: 25px;
  position: fixed;
  top: 42px;
  z-index: 99999999;
  transition: all 0.5s ease 0s;
}
.menu-toggle-2 {
  top: 27px;
}
.main-menu {
  background: #fff none repeat scroll 0 0;
  height: 100%;
  left: -225px;
  padding-top: 162px;
  position: fixed;
  top: 0;
  width: 225px;
  z-index: 9999999;
}
.main-menu > nav {}
.main-menu > nav > ul {}
.main-menu > nav > ul > li {}
.main-menu > nav > ul > li > a {
  background: transparent none repeat scroll 0 0;
  color: #666;
  display: block;
  font-size: 14px;
  font-weight: 700;
  line-height: 45px;
  padding: 0 0 0 70px;
  position:relative;
  text-transform: uppercase;
  z-index: 1;
}
.main-menu > nav > ul > li > a::before {
  background: #c8a165 none repeat scroll 0 0;
  content: "";
  height: 100%;
  left: -100%;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -1;
}
.main-menu > nav > ul > li:hover > a {
  color: #fff;
}
.main-menu > nav > ul > li:hover > a::before {
  left: 0;
}
/* Sub-menu */
.main-menu ul li .sub-menu {
  background: #fff none repeat scroll 0 0;
  border-left: 1px solid #c8a165;
  height: 100%;
  left: 300px;
  padding-top: 172px;
  padding-left: 70px;
  position: absolute;
  opacity:0;
  top: 0;
  transition: all 0.3s ease 0s;
  visibility: hidden;
  width: 250px;
}
.main-menu ul li:hover .sub-menu {
  left: 100%;
  opacity: 1;
  visibility: visible;
}
.main-menu ul li .sub-menu > ul > li a {
  color: #999;
  display: block;
  font-size: 12px;
  font-weight: 700;
  line-height: 28px;
  text-transform: uppercase;
}
.main-menu ul li .sub-menu > ul > li:hover  a {
  color: #c8a165;
}
.sub-menu ul li:last-child {
  padding-bottom: 100px;
}
/* Mega-menu */
.main-menu ul li .mega-menu {
  background: #fff none repeat scroll 0 0;
  border-left: 1px solid #c8a165;
  height: 100%;
  left: 300px;
  padding-top: 172px;
  position: absolute;
  opacity:0;
  top: 0;
  transition: all 0.3s ease 0s;
  visibility: hidden;
  width: 500px;
}
.main-menu ul li:hover .mega-menu {
  left: 100%;
  opacity: 1;
  visibility: visible;
}
.half-width {
  float: left;
  padding-bottom: 35px;
  padding-left: 70px;
  width: 50%;
}
.menu-title {
  color: #666666;
  font-size: 13px;
  font-weight: 700;
  line-height: 25px;
  margin-bottom: 10px;
  text-transform: uppercase;
}
.half-width > ul > li a {
  color: #999;
  display: block;
  font-size: 12px;
  font-weight: 700;
  line-height: 28px;
  text-transform: uppercase;
}
.half-width > ul > li:hover  a {
  color: #c8a165;
}
.mega-menu-img a {
  display: block;
}
/* NiceScroll */
.boxscroll {
  overflow: auto;
}
.main-menu #ascrail2000 {
  display: none !important;
}
.main-menu .nicescroll-rails.nicescroll-rails-vr {
  display: none !important;
}
/* Header Sticky */
.header.sticky {
  background: #eeeeee none repeat scroll 0 0;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  position: fixed;
  width: 100%;
  z-index: 9999999;
}
.sticky .logo {
  margin: auto;
  padding: 10px 0;
  width: 90px;
}
.sticky .cart-icon {
  padding: 20px 0;
}
.sticky .menu-toggle {
  top: 12px;
  transition: all 0.5s ease 0s;
}
.sticky .menu-toggle, .sticky .logo, .sticky .cart-icon {
    transition: all 0.5s ease 0s;
}
.header-2.sticky {
    background: #fff none repeat scroll 0 0;
}
/* -----------------------------------------
	3. Slider-section
----------------------------------------- */
/* Banner-area */
.slider-banner-area {
  padding: 0 100px;
  position: relative;
}
.banner-2 { margin-top: 50px;}
.single-banner {
  position: relative;
  transition: all 0.5s ease 0s;
}
.single-banner:hover {
  box-shadow: 1px 8px 15px rgba(0, 0, 0, 0.12);
}
.price {
  color: #434343;
  font-size: 20px;
  line-height: 30px;
  position: absolute;
  right: 30px;
  top: 20px;
}
.banner-title {
  font-size: 16px;
  font-weight: 700;
  line-height: 15px;
  margin-bottom: 5px;
  text-transform: capitalize;
}
.banner-brief {
  bottom: 20px;
  left: 30px;
  position: absolute;
}
/* banner-1 */
.banner-1 .banner-brief p {line-height: 15px;}
.banner-1 .button-one {
  bottom: 20px;
  position: absolute;
  right: 30px;
}
/* banner-2 */
.banner-2 .banner-brief {
  bottom: auto;
  left: auto;
  padding-right: 30px;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  width: 70%;
}
.banner-2 .banner-title {
  font-size: 20px;
  margin-bottom: 15px;
}
.banner-2 .banner-brief p { margin: 0 0 30px;}
/* Slider-area */
.slider-right { width: 70.5%;}
.slider-title2,
.slider-title3 {
  font-weight: 400;
}
.slider-title3 {
  font-size: 25px;
  line-height: 30px;
}
.slider-title1 {
  font-size: 60px;
  font-weight: 900;
  line-height: 66px;
}
.slider-title2 {
  font-size: 30px;
  line-height: 33px;
}
.slider-pro-brief { color: #878686;}
.layer-1 {
  float: right;
  margin-right: 5%;
  width: 44%;
}
/* banner-left */
.banner-left {
  width: 29.5%;
  padding-right: 50px;
}
.single-banner img { width: 100%;}
.sidebar-social {
  bottom: 0;
  position: absolute;
  left: 0;
  top: 0;
  width: 100px;
}
.sidebar-social  ul > li {
  position: relative;
  text-align: center;
  margin-bottom: 13px;
}
.sidebar-social  ul > li:last-child { margin-bottom: 0;}
.sidebar-social ul > li > a {
  color: #666666;
  display: inline-block;
  font-size: 14px;
  line-height: 30px;
  margin: 0;
  padding: 0 10px;
  text-align: center;
}
.sidebar-account {
  bottom: 0;
  position: absolute;
  right: 0;
  top: 0;
  width: 100px;
}
.sidebar-account  ul > li {
  position: relative;
  text-align: center;
  margin-bottom: 13px;
}
.sidebar-account  ul > li:last-child { margin-bottom: 0;}
.sidebar-account ul > li > a {
  color: #666666;
  display: block;
  font-size: 14px;
  line-height: 30px;
  margin: 0;
  text-align: center;
}
.sidebar-account ul > li > a i{}
/* customer-login */
.customer-login {
  background: #fff none repeat scroll 0 0;
  padding: 40px;
}
.sidebar-account .customer-login {
  border: 1px solid #f6f6f6;
  margin-top: -150px;
  opacity: 0;
  position: absolute;
  right: 120%;
  top: 50%;
  transition: all 0.3s ease 0s;
  visibility: hidden;
  width: 570px;
  z-index: -999;
}
.sidebar-account ul > li:hover .customer-login{
  opacity: 1;
  right: 100%;
  visibility: visible;
  z-index: 99999;
}
/* sidebar-search */
.sidebar-search {
  background: rgba(255, 255, 255, 0.9) none repeat scroll 0 0;
  bottom: 0;
  left: 0;
  position: fixed;
  right: 0;
  text-align: center;
  top: 0;
  z-index: 9999999;
}
.search-form-wrap form {
  position: relative;
}
.sidebar-search input {
  background: transparent none repeat scroll 0 0;
  border-bottom: 1px solid #c87065;
  font-size: 16px;
  margin-top: 230px;
}
.search-button {
  bottom: 25px;
  font-size: 30px;
  line-height: 28px;
  position: absolute;
  right: 0;
}
.close-search {
  color: #999999;
  font-size: 30px;
  line-height: 28px;
}
.close-search:hover, .search-button:hover {
  color: #C8A165;
}
/* -----------------------------------------
	4. Product-Area
----------------------------------------- */
.product-area {}
.product-slider .slick-list { padding: 10px 15px 20px;}
.single-product {
  padding-top: 15px;
  transition: all 0.5s ease 0s;
}
.product-img {
  overflow: hidden;
  position: relative;
}
.product-img img { width: 100%;}
.product-action {
  background: #fff none repeat scroll 0 0;
  bottom: -40px;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  text-align: center;
  visibility:hidden;
  opacity: 0;
  transition: all 0.5s ease 0s;
  width: calc(100% - 40px);
}
.product-action a {
  color: #666666;
  float: left;
  font-size: 16px;
  height: 40px;
  line-height: 40px;
  position: relative;
  width: 25%;
}
.product-action a::before {
  background: #999 none repeat scroll 0 0;
  content: "";
  height: 16px;
  margin-top: -8px;
  position: absolute;
  right: 0;
  top: 50%;
  width: 2px;
}
.product-action a:last-child::before {
  display:none;
}
.product-action a:hover {
  color: #C8A165;
}
.product-info {
  padding: 20px 0;
}
.post-title {
  font-size: 16px;
  line-height: 18px;
  text-transform: uppercase;
  font-family: bree serif;
  margin-bottom: 5px;
}
.product-info p {
  font-weight: 700;
  margin-bottom: 5px;
}
.pro-price {
  color: #c87065;
  font-size: 18px;
  font-weight: bold;
  line-height: 28px;
}
.pro-rating a {
  color: #c87065;
  font-size: 15px;
  line-height: 28px;
}
.single-product:hover .product-action {
  bottom: 15px;
  visibility:visible;
  opacity: 1;
}
.single-product:hover {
  box-shadow: 1px 25px 54px rgba(0, 0, 0, 0.12);
}
.product-slider .single-product:hover {
  box-shadow: 1px 8px 15px rgba(0, 0, 0, 0.12);
}
/* -----------------------------------------
	5. Discount-Product-Area
----------------------------------------- */
.discount-product {position: relative;}
.discount-img-brief {
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
  width: 100%;
}
.onsale {
  background: #c87065 none repeat scroll 0 0;
  border-radius: 50%;
  float: left;
  height: 112px;
  margin: 5% 15% 0 25%;
  padding-top: 30px;
  text-align: center;
  width: 112px;
}
.discount-info {
  float: left;
  margin-top: 45px;
  padding: 0;
  width: 40%;
}
.onsale span {
  color: #fff;
  display: block;
  font-size: 20px;
  line-height: 14px;
}
.onsale-text {
  font-style: italic;
  padding-bottom: 12px;
  position: relative;
}
.onsale-text::before {
    background: #fff none repeat scroll 0 0;
    bottom: 0;
    content: "";
    height: 2px;
    left: 0;
    margin: auto;
    position: absolute;
    right: 0;
    width: 20px;
}
.onsale-price {
    padding-top: 10px;
	font-weight: 700;
}
.discount-info h1 {
  font-size: 45px;
  font-weight: 900;
  line-height: 35px;
  margin-bottom: 15px;
}
/* -----------------------------------------
	6. Purchase-online-area
----------------------------------------- */
.tab-menu { margin-bottom: 23px;display: inline-block;}
.tab-menu li {
  display: block;
  margin: 0 15px;
  position: relative;
  float: left;
}
.tab-menu li a {
  color: #666;
  display: inline-block;
  font-size: 14px;
  font-weight: 700;
  line-height: 10px;
  padding-bottom: 12px;
}
.tab-menu li.active a { color: #D3B484;}
.tab-menu li.active::before {
  background: #D3B484 none repeat scroll 0 0;
  bottom: 0;
  content: "";
  height: 2px;
  position: absolute;
  width: 30px;
}
/* -----------------------------------------
	7. Blog-area
----------------------------------------- */
.blog-area {}
.single-blog { transition: all 0.5s ease 0s;}
.post-date {
  border: 1px solid #d6948c;
  height: 40px;
  line-height: 38px;
  text-align: center;
  width: 40px;
}
.post-date span {
  font-size: 20px;
  font-weight: 700;
}
.post-year { padding-left: 10px;}
.post-year p {font-weight: 700;}
.like-share {padding: 12px 0;}
.like-share a {
  color: #999;
  float: left;
  font-size: 12px;
  line-height: 14px;
  margin-right: 20px;
}
.like-share a:hover { color: #c87065;}
.like-share a:last-child { margin-right: 0;}
.like-share a i { padding: 0 8px 0 2px;}
.blog-photo { overflow: hidden;}
.single-blog:hover .blog-photo img { transform: scale(1.1);}
.blog-photo img {
  width: 100%;
  transition: all 0.5s ease 0s;
}
.blog-photo a { display: block;}
/* -----------------------------------------
	8. Subscribe-area
----------------------------------------- */
.subscribe-area { margin-bottom: -40px;}
.subscribe {
  background: #fff none repeat scroll 0 0;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px 0;
}
.subscribe form {
  margin: auto;
  width: calc(100% - 300px);
}
.subscribe input {
  background: transparent none repeat scroll 0 0;
  border-bottom: 1px solid #c87065;
  margin: 0;
  position: relative;
  top: -4px;
  width: 70%;
}
/* -----------------------------------------
	9. Footer-area
----------------------------------------- */
.footer-area {
  background: #f6f6f6 none repeat scroll 0 0;
  padding: 120px 0 75px;
}
.footer-title {
  font-size: 20px;
  font-weight: 900;
  line-height: 15px;
  margin-bottom: 25px;
  padding-bottom: 10px;
  text-transform: uppercase;
}
.footer-title.title-border::before {
  background: #c87065 none repeat scroll 0 0;
}
.footer-contact li {
  display: block;
  overflow: hidden;
  padding-bottom: 15px;
}
.footer-contact li:last-child { padding-bottom: 0;}
.footer-contact li span {
  float: left;
  font-size: 14px;
  font-weight: 700;
  line-height: 24px;
  width: 95px;
}
.footer-menu li a {
  color: #666666;
  line-height: 27px;
}
.footer-menu li a i { margin-right: 10px;}
.footer-menu li a:hover { color: #C8A165;}
.footer-thumb {
  overflow: hidden;
  position: relative;
}
.footer-thumb > a {
  display: block;
  position: relative;
}
.footer-thumb > a::before {
  background: #c8a165 none repeat scroll 0 0;
  content: "";
  height: 100%;
  opacity: 0.5;
  position: absolute;
  top: 100%;
  width: 100%;
}
.footer-thumb:hover a::before { top: 0;  }
.footer-thumb-info {
  height: 100%;
  left: 0;
  padding: 10px 15px;
  position: absolute;
  top: 100%;
  transition: all 0.5s ease 0s;
  visibility: hidden;
  width: 100%;
  z-index: 2;
}
.footer-thumb-info p {
  line-height: 15px;
  text-transform: capitalize;
}
.price-3 {
  font-size: 16px;
  line-height: 15px;
}
.footer-thumb-info p a, .price-3 { color: #fff;}
.footer-thumb:hover .footer-thumb-info {
  top: 0;
  visibility: visible;
}
.copyright, .payment { line-height: 60px;}
.payment a {
  display: inline-block;
  margin-left: 10px;
}
.payment a:first-child { margin-left: 0;}
.copyright-area { background: #eeeeee none repeat scroll 0 0;}
/* ====================================
	10. Home page 2
====================================== */
.body-bg {
  background: #f6f6f6 none repeat scroll 0 0;
}
.slider-style-2 .layer-1 {
  width: 50%;
}
.banner-3 .banner-title {
  font-size: 30px;
  font-weight: 900;
  line-height: 40px;
}
.banner-3 .banner-brief {
  bottom: auto;
  left: 55%;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.product-style-2 .single-product {
  background: #fff none repeat scroll 0 0;
  margin-bottom: 30px;
  padding: 15px 15px 25px;
}
.product-style-2 .product-action {
  background: #f6f6f6 none repeat scroll 0 0;
  margin-top: 15px;
  opacity: 1;
  position: inherit;
  visibility: visible;
  width: calc(100% - 0px);
}
.pro-price-2 {
  color: #c87065;
  font-size: 18px;
  font-weight: 700;
  line-height: 1;
  position: absolute;
  right: 15px;
  top: 15px;
}
.product-style-2 .product-info { padding: 15px 0 0;}
/* Discount-2 */
.discount-2 .discount-product {
  background: #fff none repeat scroll 0 0;
  padding: 72px 20px;
  position: inherit;
}
.discount-2 .discount-info {
  float: none;
  width: 100%;
}
/* up-comming-product */
.up-comming-product {
  background: #fff none repeat scroll 0 0;
  padding: 20px;
}
.up-comming-img img { width: 100%;}
.up-comming-brief { padding: 20px 0 25px;}
.comming-pro-price {
  font-size: 16px;
  font-weight: 700;
  line-height: 15px;
  margin: 0;
}
.cdown {
    display: inline-block;
    margin: auto 15px;
}
.time-count {
  border: 1px solid #dfaba4;
  border-radius: 50%;
  color: #999999;
  display: inline-block;
  font-size: 20px;
  font-weight: 700;
  height: 40px;
  line-height: 40px;
  width: 40px;
}
.cdown p {
  color: #8a8888;
  font-size: 13px;
  font-weight: 400;
  line-height: 18px;
  margin: 10px 0 0;
  text-transform: capitalize;
}
/* blog-2 */
.blog-2 .single-blog {
  background: #fff none repeat scroll 0 0;
  padding: 25px;
}
.blog-2 .blog-photo { position: relative;}
.blog-2 .like-share {
  background: rgba(255, 255, 255, 0.8) none repeat scroll 0 0;
  bottom: -40px;
  position: absolute;
  transition: all 0.3s ease 0s;
  visibility: hidden;
  width: 100%;
}
.blog-2 .like-share a {
  color: #444;
  display: inline-block;
  float: none;
}
.blog-2 .like-share a:hover { color: #c87065;}
.blog-2 .post-meta { padding: 30px 0 10px;}
.blog-2 .single-blog:hover { box-shadow: 1px 25px 54px rgba(0, 0, 0, 0.12);}
.blog-2 .single-blog:hover .blog-photo img { transform: none;}
.blog-2 .single-blog:hover .like-share {
  bottom: 0;
  visibility: visible;
}
/* brand */
.brand-logo-area { margin-bottom: -50px;}
.brand {
  background: #fff none repeat scroll 0 0;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
}
.single-brand {
  height: 100px;
  line-height: 100px;
}
.single-brand a { display: inline-block;}
.single-brand a img { display: inline-block;}
/* footer-2 */
.footer-2 {
  background: #eeeeee none repeat scroll 0 0;
  padding-top: 130px;
}
.footer-subscribe button {
  background: #f7f7f7 none repeat scroll 0 0;
  color: #666;
  font-weight: 700;
  height: 35px;
  line-height: 35px;
  padding: 0 25px;
  text-transform: uppercase;
}
.footer-subscribe button:hover {
  background: #F6F6F6 none repeat scroll 0 0;
  color: #C8A165;
}
.copyright-2 {
  background: #f2f2f2 none repeat scroll 0 0;
}
.footer-area.footer-3 {
  background: #eeeeee none repeat scroll 0 0;
  padding: 80px 0;
}
/* ---------------------------------
	11. Shop-page
----------------------------------- */
.heading-banner-area {
  background: rgba(0, 0, 0, 0) url("img/bg/1.jpg") no-repeat scroll center center / cover ;
}
.heading-banner-title h2 {
  color: #fff;
  font-size: 45px;
  font-weight: 900;
  line-height: 33px;
  margin-bottom: 0;
  padding: 134px 0 101px;
  text-align: center;
  text-transform: uppercase;
}
.breadcumbs ul { overflow: hidden;}
.breadcumbs li {
  color: #eee;
  display: inline-block;
  float: left;
  font-size: 14px;
  font-weight: 700;
  margin-left: 38px;
  position: relative;
  text-transform: uppercase;
}
.breadcumbs li:first-child { margin-left: 0px;}
.breadcumbs ul li a {
  color: #fff;
  display: block;
}
.breadcumbs ul li:hover a { color: #C87065;}
.breadcumbs li::after {
  color: #fff;
  content: "/";
  left: -22px;
  position: absolute;
  top: 0;
}
.breadcumbs li:first-child::after { content: "";}
.overlay-bg { position: relative;}
.overlay-bg::before {
  background: rgba(0, 0, 0, 0.3) none repeat scroll 0 0;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
/* Product-option */
.option-btn {
  margin-right: 20px;
  padding: 0;
  color: #999;
}
.option-btn.active, .option-btn:hover { color: #c8a165;}
.dropdown-menu { border-radius: 0;}
.dropdown-width { width: 290px;}
/* ---------------------------------
	12. Shop-Sidebar
----------------------------------- */
/* Widget Search */
.widget-search .widget-info { padding: 20px;}
.widget-search { position: relative;}
.widget-search input {
  background: #fff none repeat scroll 0 0;
  height: 50px;
  margin-bottom: 0;
  padding: 0 35px 0 20px;
}
.widget-search button {
  color: #999;
  font-size: 20px;
  line-height: 50px;
  position: absolute;
  right: 20px;
  top: 0;
}
.widget-search button:hover { color: #C8A165;}
/* widget-categories */
.widget {
  background: #fff none repeat scroll 0 0;
  width: 100%;
}
.widget-categories {
  background: #fff none repeat scroll 0 0;
  width: 100%;
}
.widget-title h4 {
  border-bottom: 2px solid #f6f6f6;
  color: #666;
  font-size: 16px;
  font-weight: 700;
  height: 50px;
  line-height: 50px;
  margin-bottom: 0;
  padding: 0 30px;
  text-transform: uppercase;
}
.widget-info { padding: 20px 30px;}
.widget-info.product-cat {
  background: #fff none repeat scroll 0 0;
  height: 290px;
  padding: 15px 20px 20px 10px;
}
.product-cat .treeview { padding-left: 20px;}
.product-cat .treeview li span {
  color: #666;
  display: block;
  font-size: 14px;
  line-height: 25px;
  text-transform: capitalize;
  cursor: pointer;
  transition: all 0.3s ease 0s;
}
.product-cat .treeview li.collapsable span, .product-cat .treeview li span:hover {
  color: #c8a165;
}
.product-cat .treeview li > ul > li > a {
  color: #999;
  display: block;
  font-size: 13px;
  line-height: 25px;
  text-transform: capitalize;
}
.product-cat .treeview li > ul > li > a {
  color: #999;
}
.product-cat .treeview li > a:hover,
.product-cat .treeview li > ul > li > a:hover {
  color: #c8a165;
}
/* Widget Shop Filter */
.price_slider_amount { margin-bottom: 10px;}
.price_slider_amount > input {
  background: #fff none repeat scroll 0 0;
  border: medium none;
  margin: 0 5px 0 0;
  padding: 0;
  width: auto;
}
.price_slider_amount > input#amount {
  margin-right: 0;
  width: 90px;
}
.ui-slider.ui-slider-horizontal.ui-widget.ui-widget-content.ui-corner-all {
  background: #dcdcdc none repeat scroll 0 0;
  border: medium none;
  height: 3px;
}
.ui-slider-range.ui-widget-header.ui-corner-all {
  background: #c87065 none repeat scroll 0 0;
}
.ui-slider-handle.ui-state-default.ui-corner-all {
  background: #fff none repeat scroll 0 0;
  border: 2px solid #c87065;
  height: 12px;
  width: 12px;
}
/* Widget Color Filter */
.color-filter ul li  {
  color: #666;
  float: left;
  font-size: 14px;
  line-height: 28px;
  width: 100%;
}
.color-filter ul li span.count { float: right;}
span.color {
  background: #ddd none repeat scroll 0 0;
  display: inline-block;
  height: 13px;
  margin-right: 20px;
  width: 13px;
}
.color-filter ul li.active  span.color,
.color-filter ul li:hover span.color {
  outline: 1px solid #D6B98C;
  outline-offset: 1px;
}
.color-filter ul li.active a,
.color-filter ul li.active span.count  { color: #C8A165;}
span.color.color-1 { background: #ffa07a; }
span.color.color-2 { background: #E9967A; }
span.color.color-3 { background: #FE5858; }
span.color.color-4 { background: #00B2EE; }
span.color.color-5 { background: #00EEB3; }
span.color.color-6 { background: #8DC63F; }
span.color.color-7 { background: #C38B4B; }
/* Widget Size Filter */
.size-filter li {
  float: left;
  margin: 8px 8px 0 0;
}
.size-filter ul li a {
  background: #f6f6f6 none repeat scroll 0 0;
  display: block;
  font-weight: 700;
  height: 34px;
  line-height: 34px;
  text-align: center;
  width: 34px;
}
.size-filter ul li:last-child { margin-right: 0;}
.size-filter ul li.active a, .size-filter ul li a:hover {
  background: #C8A165;
  color: #fff;
}
/* Widget-Banner */
.widget-banner .widget-info {
  padding: 15px;
}
.widget-banner-img a { display: block;}
/* widget-product */
.widget-product .widget-info {
  padding: 10px 15px;
}
.sidebar-product .product-img {
  float: left;
  width: 35%;
}
.sidebar-product .product-info {
  float: left;
  padding: 0 0 0 20px;
  width: 65%;
}
.sidebar-product .post-title, .sidebar-product .pro-price {
  font-size: 14px;
  line-height: 16px;
}
.sidebar-product .pro-price {
  color: #999;
}
.sidebar-product .single-product {
  margin-bottom: 5px;
  padding: 10px 15px;
}
/* product-option */
.product-option {
  background: #fff none repeat scroll 0 0;
  height: 50px;
  line-height: 50px;
  padding: 0 30px;
}
.shop-tab > li {
  float: left;
  margin-right: 20px;
}
.shop-tab li a {
  color: #999;
  display: block;
  font-size: 20px;
}
.shop-tab li.active a { color: #C8A165;}
/* ==== */
.shop-list .single-product {
  background: #fff none repeat scroll 0 0;
  margin-bottom: 30px;
  padding: 15px;
}
.shop-list .product-img {
  float: left;
  width: 29.333%;
}
.shop-list .product-info {
  float: left;
  padding: 0 15px 0 30px;
  width: 69.667%;
}
.shop-list .product-action {
  float: left;
  margin: 0 0 0 20px;
  /* width: 230px; */
  width: 45%;
}
.shop-list .product-description  p {
  font-weight: 400;
  margin-bottom: 44px;
}
/* cart-plus-minus */
.cart-plus-minus {
    background: #F6F6F6 none repeat scroll 0 0;
    float: left;
    height: 40px;
    line-height: 40px;
    overflow: hidden;
    text-align: center;
    width: 33%;
}
input.cart-plus-minus-box {
  background: #f6f6f6 none repeat scroll 0 0;
  float: left;
  font-size: 16px;
  margin: 0;
  padding: 0;
  text-align: center;
  width: 33.33%;
}
.qtybutton {
  cursor: pointer;
  float: left;
  font-size: 20px;
  position: relative;
  width: 33.3333%;
}
.qtybutton:hover { color: #C8A165;}
.dec.qtybutton::before, .inc.qtybutton::before {
    background: #999;
    content: "";
    height: 14px;
    position: absolute;
    right: 0;
    top: 15px;
    width: 1px;
}
.dec.qtybutton::before { right: 0;}
.inc.qtybutton::before { left: 0;}
/* Shop Pagination */
.pagination {
  background: #fff none repeat scroll 0 0;
  display: block;
  height: 50px;
  margin: 0;
  border-radius: 0;
}
.pagination ul { display: inline-block;}
.pagination ul li {
  display: block;
  float: left;
  padding: 10px 0;
}
.pagination ul li a {
  color: #666;
  display: block;
  line-height: 30px;
  padding: 0 6px;
}
.pagination ul li a i {
  display: block;
  font-size: 20px;
  line-height: 30px;
}
.pagination ul li.active a, .pagination ul li:hover a {
  color: #c8a165;
}
/* ---------------------------------
	13. Single-Product
----------------------------------- */
.single-pro-area .single-product:hover {
  box-shadow: none;
}
.single-pro-color ul li {
  line-height: inherit;
  width: auto;
}
.single-pro-color span.color {
  margin-right: 10px;
}
.color-title {
  color: #434343;
  display: block;
  font-weight: 700;
  width: 55px;
}
.single-pro-size ul li a,
.single-pro-size ul li.active a,
.single-pro-size ul li a:hover {
  background: transparent none repeat scroll 0 0;
}
.single-pro-size ul li.active a, .single-pro-size ul li a:hover {
  color: #c8a165;
}
.single-pro-size ul li { margin-right: 0;}
.single-pro-size ul li a {
  height: auto;
  line-height: inherit;
  margin-right: 15px;
  width: auto;
}
.single-pro-info .single-product {
  padding: 30px 15px 30px 30px;
}
.single-pro-info .single-big-photo {
  float: left;
  width: 45%;
}
.single-big-photo img { width: 100%;}
.single-pro-info .product-info {
  width: 55%;
}
.single-pro-info .product-description p {
  font-weight: 400;
  margin-bottom: 30px;
}
.single-sml-photo {
  margin-top: 38px;
}
.single-sml-photo .slick-list {
  margin: auto;
  width: calc(100% - 50px);
}
.single-sml-photo .slick-slide {
  padding: 0 10px;
  width: 70px;
}
.single-sml-photo img {
  cursor: pointer;
  width: 100%;
  margin:0 auto;
}
.single-sml-photo .slick-current img {
  border: 1px solid #D6B98C;
}
.single-pro-info .slick-arrow {
  background: #f6f6f6 none repeat scroll 0 0;
  color: #999;
  cursor: pointer;
  display: block;
  font-size: 25px;
  height: 100%;
  position: absolute;
  text-align: center;
  top: 0;
  width: 25px;
  z-index: 999;
  transition: all 0.3s ease 0s;
}
.single-pro-info .slick-arrow:hover {
  background: #C8A165 none repeat scroll 0 0;
  color: #fff;
}
.single-pro-info .slick-arrow.arrow-left {
  left: 0;
  right: auto;
}
.single-pro-info .slick-arrow.arrow-right {
  left: auto;
  right: 0;
}
.single-pro-info .slick-arrow i {
  left: 0;
  margin-top: -12px;
  position: absolute;
  right: 0;
  top: 50%;
}
/* lightbox */
.view-lightbox {position: relative;}
.view-full-screen {
  bottom: 0;
  color: #999;
  display: block;
  font-size: 20px;
  height: 25px;
  line-height: 25px;
  position: absolute;
  right: 0;
  text-align: center;
  width: 25px;
  z-index: 9;
}
.view-full-screen::before {
  border-right: 50px solid #FCFBFB;
  border-top: 50px solid transparent;
  bottom: 0;
  content: "";
  position: absolute;
  right: 0;
  z-index: -1;
}
/* single-product no-sidebar */
.single-pro-info.no-sidebar .single-big-photo {
  width: 38%;
}
.single-pro-info.no-sidebar .product-info {
  width: 62%;
}
/* single-product-tab review */
.pro-tab-info {
  background: #fff none repeat scroll 0 0;
  padding: 40px 30px;
}
.single-pro-tab-menu ul li {
  margin-bottom: 5px;
}
.single-pro-tab-menu ul li a {
  background: #fff none repeat scroll 0 0;
  color: #666;
  display: block;
  font-size: 16px;
  font-weight: 700;
  height: 45px;
  line-height: 45px;
  padding: 0 30px;
}
.single-pro-tab-menu ul li.active a {
  background: #C8A165 none repeat scroll 0 0;
  color: #fff;
}
.tab-title {
  font-size: 16px;
  font-weight: 700;
  padding-bottom: 10px;
  text-transform: uppercase;
}
.product-comments li {
  float: left;
}
.pro-reviewer {
  float: left;
  width: 90px;
}
.pro-reviewer-comment {
  margin-left: 90px;
  padding-left: 30px;
}
.comment-reply a {
  background: #f6f6f6 none repeat scroll 0 0;
  color: #999;
  display: inline-block;
  font-size: 16px;
  height: 30px;
  line-height: 30px;
  margin-left: 2px;
  text-align: center;
  width: 50px;
}
.comment-reply a:hover {
  background: #C8A165 none repeat scroll 0 0;
  color: #fff;
}
.reply-date {
  color: #999;
  margin-bottom: 10px;
}
.tab-title.title-border::before {
  height: 3px;
}
.threaded-comments {
  padding-left: 20px;
}
.your-rating span a {
  color: #c87065;
  font-size: 16px;
}
.separator {
  color: #ccc;
  margin: 0 15px;
}
/* ---------------------------------
	14. Shopping-cart
----------------------------------- */
.shop-cart-table {
  background: #fff none repeat scroll 0 0;
  padding: 40px;
}
.table-content table {
  background: #fff none repeat scroll 0 0;
  border: medium none;
  text-align: center;
  width: 100%;
}
.table-content table th {
  background: #f6f6f6 none repeat scroll 0 0;
  font-weight: 700;
  padding: 10px 10px;
  text-align: center;
  text-transform: uppercase;
  vertical-align: middle;
  white-space: nowrap;
}
.table-content table td {
  border-top: medium none;
  padding: 20px 10px 0;
  vertical-align: middle;
}
/* product-thumbnail */
.table-content table td.product-thumbnail {
  padding-left: 0;
  width: 330px;
}
.product-thumbnail .product-img {
  float: left;
  position: inherit;
  width: 110px;
}
.product-thumbnail .product-info {
  float: left;
  padding: 24px 0 0 20px;
}
.product-thumbnail .post-title {
  font-size: 14px;
}
.product-thumbnail .product-info p {
  font-weight: 400;
  margin-bottom: 0;
}
.product-thumbnail .single-product {
  padding-top: 0;
}
.table-content table td.product-price {
  color: #999;
  font-size: 16px;
  font-weight: 900;
}
/* product-quantity */
.product-quantity .cart-plus-minus {
  float: none;
  height: 30px;
  line-height: 30px;
  margin: auto;
  width: 120px;
}
.product-quantity .dec.qtybutton {
  border-right: 5px solid #fff;
}
.product-quantity .inc.qtybutton {
  border-left: 5px solid #fff;
}
.product-quantity .cart-plus-minus-box {
  color: #666;
  font-size: 13px;
  font-weight: 700;
  height: 30px;
  line-height: 30px;
}
.product-quantity .dec.qtybutton::before, .product-quantity .inc.qtybutton::before {
  display: none;
}
/* product-subtotal */
.table-content table td.product-subtotal {
  font-size: 16px;
  font-weight: 900;
}
/* product-remove */
.product-remove i {
  background: #f6f6f6 none repeat scroll 0 0;
  font-size: 16px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  width: 30px;
  transition: all 0.3s ease 0s;
}
.product-remove i:hover {
  background: #C8A165 none repeat scroll 0 0;
  color: #fff;
}
/* product-stock */
.table-content table td.product-stock {
  color: #999;
  font-weight: 900;
  text-transform: uppercase;
}
/* product-add-cart */
.table-content table td.product-add-cart a {
  font-size: 25px;
}
/* payment-details */
.payment-details table { width: 100%;}
.payment-details table th {
  background: #f5f5f5 none repeat scroll 0 0;
  color: #666;
  font-weight: 900;
  padding: 10px 30px;
  text-transform: uppercase;
}
.payment-details table td{
  color: #999;
  font-weight: 700;
  padding: 7px 30px;
}
.payment-details table tr {
  border-bottom: 1px solid #E5E5E5;
}
.payment-details table tr:last-child {
  border-bottom: 0;
}
.payment-details table tr:last-child td {
  color: #c87065;
  padding: 15px 30px 0;
}
/* cart-page-menu */
.cart-page-menu li {
  float: left;
  padding: 0 15px;
  width: 25%;
}
.cart-page-menu li a {
  background: #fff none repeat scroll 0 0;
  color: #999;
  display: block;
  font-weight: 700;
  height: 60px;
  line-height: 60px;
  text-align: center;
  text-transform: uppercase;
}
.cart-page-menu li.active a {
  background: #C8A165 none repeat scroll 0 0;
  color: #fff;
}
/* custom-select */
.custom-select {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  background: rgba(246, 246, 246, 1) url("img/bg/angel-down.png") no-repeat scroll 97% center;
  border: medium none;
  color: #999;
  height: 40px;
  padding: 0 20px;
  text-transform: capitalize;
  width: 100%;
  outline: none;
}
.custom-select option { padding: 5px 20px;}
/* payment-method */
.payment-accordion h3 {
  background: #f6f6f6 none repeat scroll 0 0;
  color: #666;
  cursor: pointer;
  font-size: 13px;
  font-weight: 900;
  height: 40px;
  line-height: 40px;
  margin-bottom: 15px;
  padding: 0 20px;
  position: relative;
  text-transform: uppercase;
}
.payment-accordion-toggle::before {
  color: #ccc;
  content: "\f2f2";
  font-family: material-design-iconic-font;
  font-size: 25px;
  position: absolute;
  right: 30px;
  text-align: center;
}
.payment-accordion-toggle.active::before{
  content: "\f2f8";
}
.payment-content {
  display: none;
  padding: 0 30px;
}
.payment-content.default { display: block;}
.payment-content p { color: #999;}
.payment-content a img {
  border: 1px solid #e5e5e5;
  margin: 0 10px 10px 0;
  padding: 5px;
}
/* order-compleate */
.thank-recieve p {
  font-size: 16px;
  font-weight: 700;
  margin: 0;
  padding: 20px 0;
  text-align: center;
}
.order-info { padding: 20px 0;}
.single-order-info {
  float: left;
  width: 25%;
}
/* ---------------------------------
	15. My Account
----------------------------------- */
.my-account .panel {
  border: medium none;
  border-radius: 0;
  box-shadow: none;
}
.my-account-menu a {
  background: #C8A165;
  color: #fff;
  display: block;
  font-style: normal;
  font-weight: 700;
  height: 40px;
  line-height: 40px;
  padding: 0 30px;
  text-transform: uppercase;
}
.my-account-menu a.collapsed { background: #C87065;}
.my-account-menu-2 a { background: #C87065;}
.my-account .panel-body { padding: 0;}
/* ---------------------------------
	16. Single-Blog
----------------------------------- */
.blog-details-area .single-blog {
  padding: 40px;
}
.blog-details-area .like-share {
  background: rgba(255, 255, 255, 0.2) none repeat scroll 0 0;
  bottom: 0;
  padding-left: 20px;
  visibility: visible;
}
.post-date-2 {
  background: #fff none repeat scroll 0 0;
  height: 70px;
  left: 20px;
  line-height: inherit;
  padding: 12px 0 10px;
  position: absolute;
  top: 20px;
  width: 70px;
}
.post-date-2 span { display: block;}
.post-date-2 span:first-child {
  font-size: 30px;
  padding-bottom: 8px;
}
.post-title-2 {
  font-size: 22px;
  margin-bottom: 0;
  padding: 38px 0 25px;
}
.post-share-tag {
  background: #f6f6f6 none repeat scroll 0 0;
  padding: 15px 20px;
}
.post-share span { margin-right: 20px;}
.post-share a {
  color: #999;
  margin-right: 15px;
}
.post-share a:hover { color: #C8A165;}
.post-share a:last-child { margin-right: 0;}
.author-comments {
  background: #f6f6f6 none repeat scroll 0 0;
  padding: 25px 20px;
}
.author-photo { width: 100px;}
.author-photo img { border-radius: 50%;}
.author-brief {
  margin-left: 100px;
  padding-left: 25px;
}
/* Widget-comments */
.single-recent-comments h5 {
  font-size: 14px;
  font-weight: 700;
  margin-bottom: 5px;
}
/* ---------------------------------
	17. 404
----------------------------------- */
.error-content {
  border: 30px solid #fff;
  padding: 100px 0;
}
.error-content h4 {
  font-size: 20px;
  font-weight: 700;
  line-height: 27px;
}
.error-form {
  margin-left: auto;
  margin-right: auto;
  position: relative;
  width: 450px;
}
.error-form input {
  background: #fff none repeat scroll 0 0;
  padding-right: 50px;
}
.error-form button {
  color: #999;
  font-size: 20px;
  font-weight: 700;
  height: 40px;
  padding: 0;
  position: absolute;
  right: 0;
  top: 0;
  transition: all 0.3s ease 0s;
  width: 50px;
}
.error-form button:hover { color: #C8A165;}
.go-to-home {
  background: #fff none repeat scroll 0 0;
  color: #666;
  display: inline-block;
  font-weight: 700;
  height: 40px;
  line-height: 40px;
  padding: 0 35px;
  text-transform: uppercase;
}
/*about-us*/
.about-us { padding: 40px;}
.about-brief {
  margin-left: -200px;
  margin-top: 40px;
  min-height: 350px;
  padding: 40px 30px 30px 40px;
}
.single-member {
  padding: 30px 15px;
  transition: all 0.3s ease 0s;
}
.single-member:hover {
  box-shadow: 1px 25px 54px rgba(0, 0, 0, 0.12);
}
.single-member img { border-radius: 50%;}
.single-member h3 {
  color: #666;
  font-family: bree serif;
  font-size: 20px;
}
.single-member h4 {
  color: #999;
  font-size: 13px;
}
.team-social li {
  display: inline-block;
  margin: 0 1px;
}
.team-social ul li a {
  color: #999;
  display: block;
  font-size: 16px;
  height: 30px;
  line-height: 30px;
  width: 30px;
}
.team-social ul li a:hover { color: #C8A165;}
/* ---------------------------------
	18. Contact
----------------------------------- */
.contact-details ul li {
  clear: both;
  margin-bottom: 20px;
  overflow: hidden;
}
.contact-details ul li i {
  background: #ddd none repeat scroll 0 0;
  color: #999;
  float: left;
  font-size: 20px;
  height: 35px;
  line-height: 35px;
  margin-right: 20px;
  text-align: center;
  width: 35px;
}
.contact-details ul li span {
  display: block;
}
#bodyContent > p {
  margin-bottom: 0;
}
.thankyou  h2 {
  color: #666;
  font-size: 20px;
  line-height: 14px;
  padding: 30px 0;
}








