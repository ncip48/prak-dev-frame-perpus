<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: BusinessToday
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>@yield('title')</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="/template2/layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">BusinessToday</a></h1>
      <p><strong>Free Website Template</strong></p>
    </div>
    <div id="newsletter">
      <p>Sign up to our newsletter for the latest news, updates and offers.</p>
      <form action="#" method="post">
        <fieldset>
          <legend>NewsLetter</legend>
          <input type="text" value="Name&hellip;"  onfocus="this.value=(this.value=='Name&hellip;')? '' : this.value ;" />
          <input type="text" value="Email&hellip;"  onfocus="this.value=(this.value=='Email&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="Sign Up" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="pages/style-demo.html">Style Demo</a></li>
        <li><a href="pages/full-width.html">Full Width</a></li>
        <li><a href="#">DropDown</a>
          <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul>
        </li>
        <li class="last"><a href="#">A Long Link Text</a></li>
      </ul>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
  <div id="intro">
    <div class="fl_left">
      <h2>Cursus penati saccum ut curabitur nulla.</h2>
      <p>Cursuspenatisaccum ut curabitur nulla tellus tor ames a in curabitur pede. Idet mollisi eros dis orci congue elis et curabitur consequam intesque. Curabiturpisametur in ante.</p>
      <p class="readmore"><a href="#">Ipsumsenterdum non velit &raquo;</a></p>
    </div>
    <div class="fl_right"><img src="images/demo/380x300.gif" alt="" /></div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col4">
  <div id="services">
    <ul>
      <li>
        <div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>
        <div class="fl_right">
          <h2>Indonectetus facilis</h2>
          <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </div>
      </li>
      <li>
        <div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>
        <div class="fl_right">
          <h2>Indonectetus facilis</h2>
          <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </div>
      </li>
      <li class="last">
        <div class="fl_left"><img src="images/demo/100x180.gif" alt="" /></div>
        <div class="fl_right">
          <h2>Indonectetus facilis</h2>
          <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
          <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
        </div>
      </li>
    </ul>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col5">
  <div id="container">
    @yield('content')
    <br class="clear" />
  </div>
</div>
<div class="wrapper col6">
  <div id="footer">
    <div id="login">
      <h2>Client Login !</h2>
      <p>Clients can Login to their accounts here.</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Client Login</legend>
          <div class="fl_left">
            <input type="text" value="Enter email address&hellip;"  onfocus="this.value=(this.value=='Enter email address&hellip;')? '' : this.value ;" />
            <input type="password" value="Enter password&hellip;"  onfocus="this.value=(this.value=='Enter password&hellip;')? '' : this.value ;" />
          </div>
          <div class="fl_right">
            <input type="submit" name="login_go" id="login_go" value="&raquo;" />
          </div>
        </fieldset>
      </form>
      <p><a href="#">&raquo; Lost Your Password</a> | <a href="#">Create An Account &raquo;</a></p>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col7">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>