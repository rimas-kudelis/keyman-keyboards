<?php 
  $pagename = 'Yupik Cyrillic keyboard (Russian layout)';
  $pagetitle = 'Yupik Cyrillic keyboard (Russian layout)';
  require_once('header.php');
?>
<style type="text/css">
    .key { 
        float: left;
        display: block; 
        position: relative;
        overflow: hidden;
        height: 35px;
        margin: 2px 0px 0px 4px;
    }
    
    #K_SPACE {
        width: 234px; 
        background-image: url('key-space.gif'); 
    }

    #K_BKSLASH {
        width: 42px; 
        background-image: url('key-bkslash.gif'); 
    }
    
    #K_oE2 {
        display:none;
    }
    
    #K_SHIFTL {
        width: 80px;
        background-image: url('key-shiftl.gif');
    }
    
    .plain {
        background-image: url('key-plain.gif');
        background-repeat: no-repeat;
        width: 34px;
    }
    
    .special {
        background-repeat: no-repeat;
    }
    
    .keycap {
        font: bold 7pt Arial; 
        position: absolute; 
        left: 4px; 
        top: 3px;
    }
    
    .key .keycap {          
        display: block;
    }
    
    .special .keycap {
        display: block;
    }
    
    .keytext {
        font: 13pt "Times New Roman"; 
        position: absolute; 
        display: block;
        right: 4px;
        bottom: 4px;
        color: blue;
    }
    .keytextwide {
        font: 11pt "Times New Roman"; 
        position: absolute; 
        display: block;
        right: 2px;
        bottom: 4px;
        color: blue;
    }
    .doublepress {
        color: red;
    }
    
    td { padding-right: 25px; 
         padding-bottom: 3px;
    }
    .long_narrow_table { 
        column-count: 2; 
        margin-top: 20px;
        margin-left: 30px;
    }
    
    .t_key { 
        float: left;
        display: block; 
        position: relative;
        overflow: hidden;
        height: 55px;
        margin: 0px 0px 0px 0px;
    }
    .t_longpress {
        background-image: url('touch-longpress.gif');
        background-repeat: no-repeat;
        width: 44px;
    }
    .t_longpressnarrow {
        background-image: url('touch-longpress-narrow.gif');
        background-repeat: no-repeat;
        width: 42px;
    }
    .t_longpressperiod {
        background-image: url('touch-longpress-period.gif');
        background-repeat: no-repeat;
        width: 44px;
    }
    .t_plain {
        background-image: url('touch-plain.gif');
        background-repeat: no-repeat;
        width: 44px;
    }
    .t_plainnarrow {
        background-image: url('touch-plain-narrow.gif');
        background-repeat: no-repeat;
        width: 42px;
    }
    .t_shift {
        background-image: url('touch-shift.gif');
        background-repeat: no-repeat;
        width: 53px;
    }
    .t_erase {
        background-image: url('touch-erase.gif');
        background-repeat: no-repeat;
        width: 61px;
    }
    .t_numlock {
        background-image: url('touch-numlock.gif');
        background-repeat: no-repeat;
        width: 61px;
    }
    .t_menu {
        background-image: url('touch-menu.gif');
        background-repeat: no-repeat;
        width: 54px;
    }
    .t_space {
        background-image: url('touch-space.gif');
        background-repeat: no-repeat;
        width: 220px;
    }
    .t_enter {
        background-image: url('touch-enter.gif');
        background-repeat: no-repeat;
        width: 61px;
    }
    .t_comment {
        background-image: url('touch-comment.gif');
        background-repeat: no-repeat;
        width: 220px;
    }

    .t_keytext {
        font: 16pt "Times New Roman"; 
        position: absolute; 
        display: block;
        bottom: 5px;
        width: 44px;
        text-align: center;
        color: blue;
    }
    .t_keytextlp {
        font: 8pt Arial; 
        position: absolute; 
        left: 6px; 
        top: 5px;
    }
    .t_keytextlpperiod {
        font: 8pt Arial; 
        position: absolute; 
        left: 4px; 
        top: 1px;
    }
    .t_textcommenttop {
        font: 11pt Arial; 
        position: absolute; 
        left: 4px; 
        top: 3px;
    }
    .t_textcommentbottom {
        font: 11pt Arial; 
        position: absolute; 
        left: 4px; 
        bottom: 6px;
    }
    .t_numlocktext {
        font: 14pt "Arial"; 
        position: absolute; 
        display: block;
        bottom: 5px;
        width: 61px;
        text-align: center;
    }


</style>

<h2><a href="sil_yupik_cyrillic_ru_russian.php">русский</a></h2>

<p>
    The <b>Yupik Cyrillic keyboard (Russian layout)</b> enables the user to type the Yupik language in the Cyrillic script using a layout based on a standard Russian keyboard. The Russian layout has been modified to give access to the additional characters required for the Yupik language. The keyboard is now available in both desktop and touch screen layouts.
</p>

<h2>Font requirements</h2>

<p>
    The keyboard can be used with any font that supports:
</p>
<ul>
    <li>the Unicode block of the Cyrillic script (U+0400..U+04FF), and</li>
    <li>the use of combining diacritic marks. (Yupik writing uses a macron over some vowels.)</li>
</ul>
<p>
    No fonts are included with this keyboard package. 
</p>

<h1>Desktop keyboard layout</h1>

<p style="margin-bottom: 0.5em;">
    In the following keyboard charts, any key shown with a blue character followed by a red character can be pressed once to produce the blue character, or twice to produce the red character. For example, pressing
</p>

<div style="width: 30px; display: block; float: left;"> </div>
<div class="key plain" id="K_Q">
<div class="keytext">я <span class=doublepress>я̄</span></div>
</div>

<p style="margin-top: 3.5em;">
    once will output “я”, pressing it a second time will replace the “я” with “я̄”.
</p>


<h3 style="clear:left">Unshift</h3>

<div class="key plain" id="K_BKQUOTE">
    <div class="keytext">ё</div>
</div>
<div class="key plain" id="K_1">
    <div class="keytext">1</div>
</div>
<div class="key plain" id="K_2">
    <div class="keytext">2</div>
</div>
<div class="key plain" id="K_3">
    <div class="keytext">3</div>
</div>
<div class="key plain" id="K_4">
    <div class="keytext">4</div>
</div>
<div class="key plain" id="K_5">
    <div class="keytext">5</div>
</div>
<div class="key plain" id="K_6">
    <div class="keytext">6</div>
</div>
<div class="key plain" id="K_7">
    <div class="keytext">7</div>
</div>
<div class="key plain" id="K_8">
    <div class="keytext">8</div>
</div>
<div class="key plain" id="K_9">
    <div class="keytext">9</div>
</div>
<div class="key plain" id="K_0">
    <div class="keytext">0</div>
</div>
<div class="key plain" id="K_HYPHEN">
    <div class="keytext">-</div>
</div>
<div class="key plain" id="K_EQUAL">
    <div class="keytext">=</div>
</div>
<div class="key special" id="" style="
    width: 60px;
    background-image: url('key-backspace.gif');
    ">
    <div class="keycap">Backspace</div>
</div>
<br style="clear: left">

<div class="key special" id="" style="
    width: 52px;
    background-image: url('key-tab.gif');
    ">
    <div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
    <div class="keytext">й</div>                        
</div>
<div class="key plain" id="K_W">
    <div class="keytext">ц</div>
</div>
<div class="key plain" id="K_E">
    <div class="keytext">у <span class=doublepress>ӯ</span></div>
</div>
<div class="key plain" id="K_R">
    <div class="keytext">к <span class=doublepress>қ</span></div>
</div>
<div class="key plain" id="K_T">
    <div class="keytext">е</div>                         
</div>
<div class="key plain" id="K_Y">
    <div class="keytext">н <span class=doublepress>ң</span></div>
</div>
<div class="key plain" id="K_U">
    <div class="keytext">г <span class=doublepress>ӷ</span></div>
</div>
<div class="key plain" id="K_I">
    <div class="keytext">ш</div>
</div>
<div class="key plain" id="K_O">
    <div class="keytext">щ</div>
</div>
<div class="key plain" id="K_P">
    <div class="keytext">з</div>
</div>
<div class="key plain" id="K_LBRKT">
    <div class="keytext">х <span class=doublepress>ҳ</span></div>
</div>
<div class="key plain" id="K_RBRKT">
    <div class="keytext">ъ</div>
</div>
<div class="key plain" id="K_BKSLASH">
    <div class="keytext">\</div>
</div>
<br style="clear: left">

<div class="key special" id="" style="
    width: 62px;
    background-image: url('key-capslock.gif');
    ">
    <div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
    <div class="keytext">ф</div>
</div>
<div class="key plain" id="K_S">
    <div class="keytext">ы</div>
</div>
<div class="key plain" id="K_D">
    <div class="keytext">в <span class=doublepress>ў</span></div>
</div>
<div class="key plain" id="K_F">
    <div class="keytext">а <span class=doublepress>а̄</span></div>
</div>
<div class="key plain" id="K_G">
    <div class="keytext">п</div>
</div>
<div class="key plain" id="K_H">
    <div class="keytext">р</div>
</div>
<div class="key plain" id="K_J">
    <div class="keytext">о</div>
</div>
<div class="key plain" id="K_K">
    <div class="keytext">л</div>
</div>
<div class="key plain" id="K_L">
    <div class="keytext">д</div>
</div>
<div class="key plain" id="K_COLON">
    <div class="keytext">ж</div>
</div>
<div class="key plain" id="K_QUOTE">
    <div class="keytext">э</div>
</div>
<div class="key special" id="" style="
    width: 70px;
    background-image: url('key-enter.gif');
    ">
    <div class="keycap">Enter</div>
</div>
<br style="clear: left">

<div class="key special" id="K_SHIFTL" style="
    width: 80px;
    ">
    <div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_Z">
    <div class="keytext">я <span class=doublepress>я̄</span></div>
</div>
<div class="key plain" id="K_X">
    <div class="keytext">ч</div>
</div>
<div class="key plain" id="K_C">
    <div class="keytext">с</div>
</div>
<div class="key plain" id="K_V">
    <div class="keytext">м</div>
</div>
<div class="key plain" id="K_B">
    <div class="keytext">и <span class=doublepress>ӣ</span></div>
</div>
<div class="key plain" id="K_N">
    <div class="keytext">т</div>                   
</div>
<div class="key plain" id="K_M">
    <div class="keytext">ь</div>
</div>
<div class="key plain" id="K_COMMA">
    <div class="keytext">б</div>
</div>
<div class="key plain" id="K_PERIOD">
    <div class="keytext">ю<span class=doublepress>ю̄</span></div>
</div>
<div class="key plain" id="K_SLASH">
    <div class="keytext">.</div>
</div>
<div class="key special" id="" style="
    width: 90px;
    background-image: url('key-shiftr.gif');
    ">
    <div class="keycap">Shift</div>
</div>
<br style="clear: left">

<div class="key special" id="" style="
    width: 60px;
    background-image: url('key-ctrll.gif');
    ">
    <div class="keycap">Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="
    width: 50px;
    background-image: url('key-altl.gif');
    ">
    <div class="keycap">Alt</div>
</div>
<div class="key plain" id="K_SPACE">
    <div class="keycap"> </div>
</div>
<div class="key special" id="" style="
    width: 50px;
    background-image: url('key-altr.gif');
    ">
    <div class="keycap">Alt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="
    width: 60px;
    background-image: url('key-ctrlr.gif');
    ">
    <div class="keycap">Ctrl</div>
</div>
<br style="clear: left">


<h3 style="clear:left">Shift</h3>

<div class="key plain" id="K_BKQUOTE">
    <div class="keytext">Ё</div>
</div>
<div class="key plain" id="K_1">
    <div class="keytext">!</div>
</div>
<div class="key plain" id="K_2">
    <div class="keytext">"</div>
</div>
<div class="key plain" id="K_3">
    <div class="keytext">№</div>
</div>
<div class="key plain" id="K_4">
    <div class="keytext">;</div>
</div>
<div class="key plain" id="K_5">
    <div class="keytext">%</div>
</div>
<div class="key plain" id="K_6">
    <div class="keytext">:</div>
</div>
<div class="key plain" id="K_7">
    <div class="keytext">?</div>
</div>
<div class="key plain" id="K_8">
    <div class="keytext">*</div>
</div>
<div class="key plain" id="K_9">
    <div class="keytext">(</div>
</div>
<div class="key plain" id="K_0">
    <div class="keytext">)</div>
</div>
<div class="key plain" id="K_HYPHEN">
    <div class="keytext">_</div>
</div>
<div class="key plain" id="K_EQUAL">
    <div class="keytext">+</div>
</div>
<div class="key special" id="" style="
    width: 60px;
    background-image: url('key-backspace.gif');
    ">
    <div class="keycap">Backspace</div>
</div>
<br style="clear: left">

<div class="key special" id="" style="
    width: 52px;
    background-image: url('key-tab.gif');
    ">
    <div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
    <div class="keytext">Й</div>
</div>
<div class="key plain" id="K_W">
    <div class="keytext">Ц</div>
</div>
<div class="key plain" id="K_E">
    <div class="keytext">У <span class=doublepress>Ӯ</span></div>
</div>
<div class="key plain" id="K_R">
    <div class="keytext">К <span class=doublepress>Қ</span></div>
</div>
<div class="key plain" id="K_T">
    <div class="keytext">Е</div>
</div>
<div class="key plain" id="K_Y">
    <div class="keytext">Н <span class=doublepress>Ң</span></div>
</div>
<div class="key plain" id="K_U">
    <div class="keytext">Г <span class=doublepress>Ӷ</span></div>
</div>
<div class="key plain" id="K_I">
    <div class="keytext">Ш</div>
</div>
<div class="key plain" id="K_O">
    <div class="keytext">Щ</div>
</div>
<div class="key plain" id="K_P">
    <div class="keytext">З</div>
</div>
<div class="key plain" id="K_LBRKT">
    <div class="keytext">̄Х <span class=doublepress>Ҳ</span></div>
</div>
<div class="key plain" id="K_RBRKT">
    <div class="keytext">Ъ</div>
</div>
<div class="key plain" id="K_BKSLASH">
    <div class="keytext">/</div>
</div>
<br style="clear: left">

<div class="key special" id="" style="
    width: 62px;
    background-image: url('key-capslock.gif');
    ">
<div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
    <div class="keytext">Ф</div>
</div>
<div class="key plain" id="K_S">
    <div class="keytext">Ы</div>
</div>
<div class="key plain" id="K_D">
    <div class="keytext">В <span class=doublepress>Ў</span></div>
</div>
<div class="key plain" id="K_F">
    <div class="keytext">А <span class=doublepress>А̄</span></div>
</div>
<div class="key plain" id="K_G">
    <div class="keytext">П</div>
</div>
<div class="key plain" id="K_H">
    <div class="keytext">Р</div>
</div>
<div class="key plain" id="K_J">
    <div class="keytext">О</div>
</div>
<div class="key plain" id="K_K">
    <div class="keytext">Л</div>
</div>
<div class="key plain" id="K_L">
    <div class="keytext">Д</div>
</div>
<div class="key plain" id="K_COLON">
    <div class="keytext">Ж</div>
</div>
<div class="key plain" id="K_QUOTE">
    <div class="keytext">Э</div>
</div>
<div class="key special" id="" style="
    width: 70px;
    background-image: url('key-enter.gif');
    ">
    <div class="keycap">Enter</div>
</div>
<br style="clear: left">

<div class="key special" id="K_SHIFTL" style="
    width: 80px;
    ">
    <div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_Z">
    <div class="keytext">Я <span class=doublepress>Я̄</span></div>
</div>
<div class="key plain" id="K_X">
    <div class="keytext">Ч</div>
</div>
<div class="key plain" id="K_C">
    <div class="keytext">С</div>
</div>
<div class="key plain" id="K_V">
    <div class="keytext">М</div>
</div>
<div class="key plain" id="K_B">
    <div class="keytext">И <span class=doublepress>Ӣ</span></div>
</div>
<div class="key plain" id="K_N">
    <div class="keytext">Т</div>
</div>
<div class="key plain" id="K_M">
    <div class="keytext">Ь</div>
</div>
<div class="key plain" id="K_COMMA">
    <div class="keytext">Б</div>
</div>
<div class="key plain" id="K_PERIOD">
    <div class="keytextwide">Ю<span class=doublepress>Ю̄</span></div>
</div>
<div class="key plain" id="K_SLASH">
    <div class="keytext">,</div>
</div>
<div class="key special" id="" style="
    width: 90px;
    background-image: url('key-shiftr.gif');
    ">
    <div class="keycap">Shift</div>
</div>
<br style="clear: left">

<div class="key special" id="" style="
    width: 60px;
    background-image: url('key-ctrll.gif');
    ">
    <div class="keycap">Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="
    width: 50px;
    background-image: url('key-altl.gif');
    ">
    <div class="keycap">Alt</div>
</div>
<div class="key plain" id="K_SPACE">
    <div class="keycap"> </div>
</div>
<div class="key special" id="" style="
    width: 50px;
    background-image: url('key-altr.gif');
    ">
    <div class="keycap">Alt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="
    width: 60px;
    background-image: url('key-ctrlr.gif');
    ">
    <div class="keycap">Ctrl</div>
</div>
<br style="clear: left">


<h3 style="clear:left">Right ALT</h3>

<div class="key plain" id="K_BKQUOTE">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_1">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_2">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_3">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_4">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_5">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_6">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_7">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_8">
    <div class="keytext">₽</div>
</div>
<div class="key plain" id="K_9">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_0">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_HYPHEN">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_EQUAL">
    <div class="keytext"></div>
</div>
<div class="key special" id="" style="
    width: 60px;
    background-image: url('key-backspace.gif');
    ">
    <div class="keycap">Backspace</div>
</div>
<br style="clear: left">

<div class="key special" id="" style="
    width: 52px;
    background-image: url('key-tab.gif');
    ">
    <div class="keycap">Tab</div>
</div>
<div class="key plain" id="K_Q">
    <div class="keytext"></div>                        
</div>
<div class="key plain" id="K_W">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_E">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_R">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_T">
    <div class="keytext"></div>                         
</div>
<div class="key plain" id="K_Y">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_U">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_I">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_O">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_P">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_LBRKT">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_RBRKT">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_BKSLASH">
    <div class="keytext"></div>
</div>
<br style="clear: left">

<div class="key special" id="" style="
    width: 62px;
    background-image: url('key-capslock.gif');
    ">
    <div class="keycap">Caps Lock</div>
</div>
<div class="key plain" id="K_A">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_S">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_D">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_F">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_G">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_H">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_J">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_K">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_L">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_COLON">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_QUOTE">
    <div class="keytext"></div>
</div>
<div class="key special" id="" style="
    width: 70px;
    background-image: url('key-enter.gif');
    ">
    <div class="keycap">Enter</div>
</div>
<br style="clear: left">

<div class="key special" id="K_SHIFTL" style="
    width: 80px;
    ">
    <div class="keycap">Shift</div>
</div>
<div class="key plain" id="K_Z">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_X">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_C">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_V">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_B">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_N">
    <div class="keytext"></div>                   
</div>
<div class="key plain" id="K_M">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_COMMA">
    <div class="keytext"></div>
</div>
<div class="key plain" id="K_PERIOD">
    <div class="keytextwide"></div>
</div>
<div class="key plain" id="K_SLASH">
    <div class="keytext"></div>
</div>
<div class="key special" id="" style="
    width: 90px;
    background-image: url('key-shiftr.gif');
    ">
    <div class="keycap">Shift</div>
</div>
<br style="clear: left">

<div class="key special" id="" style="
    width: 60px;
    background-image: url('key-ctrll.gif');
    ">
    <div class="keycap">Ctrl</div>
</div>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="key special" id="" style="
    width: 50px;
    background-image: url('key-altl.gif');
    ">
    <div class="keycap">Alt</div>
</div>
<div class="key plain" id="K_SPACE">
    <div class="keycap"> </div>
</div>
<div class="key special" id="" style="
    width: 50px;
    background-image: url('key-altr.gif');
    ">
    <div class="keycap">Alt</div>
</div>
<div style="width: 54px; display: block; float: left;"> </div>
<div class="key special" id="" style="
    width: 60px;
    background-image: url('key-ctrlr.gif');
    ">
    <div class="keycap">Ctrl</div>
</div>
<br style="clear: left">


<h1>Touch Screen Layout</h1>
<p>
    The touch screen layout is very similar to the desktop layout. Several characters ( ё Ё = + ъ Ъ \ / . , ) at the corners of the desktop layout had to be relocated. Yupik characters can be accessed using either a double key press or a long key press.
</p>
<p>
    The chart below shows both the default character for each key, and any long press characters associated with the key. Each key is divided into two boxes. The large character in the lower box is the default character for the key—it is what you get if you just press the key normally. The small characters in the upper box are the long press characters associated with the key. If a key does not have any long press characters, the upper box is grayed in. For example:
</p>
<div style="width: 30px; display: block; float: left;"> </div>
<div class="t_key t_longpress" id="K_R">
    <div class="t_keytextlp">Қ 4</div>
    <div class="t_keytext">к</div>
</div>
<div class="t_key t_comment" id="">
    <div class="t_textcommenttop"> ← long press characters</div>
    <div class="t_textcommentbottom"> ← default character</div>
</div>
<br style="clear: left">
<br style="clear: left">
<div style="width: 30px; display: block; float: left;"> </div>
<div class="t_key t_plain" id="K_A">
    <div class="t_keytext">Ф</div>
</div>
<div class="t_key t_comment" id="">
    <div class="t_textcommenttop"> ← no long press character</div>
    <div class="t_textcommentbottom"> ← default character</div>
</div>

<br style="clear: left">


<h3>Alphabetic keys (lower and upper case are identical)</h3>

<div class="t_key t_longpress">
    <div class="t_keytextlp">1</div>
    <div class="t_keytext">й</div>                        
</div>
<div class="t_key t_longpress" id="K_W">
    <div class="t_keytextlp">2</div>
    <div class="t_keytext">ц</div>
</div>
<div class="t_key t_longpress" id="K_E">
    <div class="t_keytextlp">Ӯ 3</div>
    <div class="t_keytext">у</div>
</div>
<div class="t_key t_longpress" id="K_R">
    <div class="t_keytextlp">Қ 4</div>
    <div class="t_keytext">к</div>
</div>
<div class="t_key t_longpress" id="K_T">
    <div class="t_keytextlp">5</div>
    <div class="t_keytext">е</div>                         
</div>
<div class="t_key t_longpress" id="K_Y">
    <div class="t_keytextlp">Ң 6</div>
    <div class="t_keytext">н</div>
</div>
<div class="t_key t_longpress" id="K_U">
    <div class="t_keytextlp">Ӷ 7</div>
    <div class="t_keytext">г</div>
</div>
<div class="t_key t_longpress" id="K_I">
    <div class="t_keytextlp">8</div>
    <div class="t_keytext">ш</div>
</div>
<div class="t_key t_longpress" id="K_O">
    <div class="t_keytextlp">9</div>
    <div class="t_keytext">щ</div>
</div>
<div class="t_key t_longpress" id="K_P">
    <div class="t_keytextlp">0</div>
    <div class="t_keytext">з</div>
</div>
<div class="t_key t_longpress" id="K_LBRKT">
    <div class="t_keytextlp">Ҳ</div>
    <div class="t_keytext">х</div>
</div>
<br style="clear: left">

<div class="t_key t_plain" id="K_A">
    <div class="t_keytext">Ф</div>
</div>
<div class="t_key t_plain" id="K_S">
    <div class="t_keytext">Ы</div>
</div>
<div class="t_key t_longpress" id="K_D">
    <div class="t_keytextlp">Ў</div>
    <div class="t_keytext">В</div>
</div>
<div class="t_key t_longpress" id="K_F">
    <div class="t_keytextlp">А̄</div>
    <div class="t_keytext">А</div>
</div>
<div class="t_key t_plain" id="K_G">
    <div class="t_keytext">П</div>
</div>
<div class="t_key t_plain" id="K_H">
    <div class="t_keytext">Р</div>
</div>
<div class="t_key t_plain" id="K_J">
    <div class="t_keytext">О</div>
</div>
<div class="t_key t_plain" id="K_K">
    <div class="t_keytext">Л</div>
</div>
<div class="t_key t_plain" id="K_L">
    <div class="t_keytext">Д</div>
</div>
<div class="t_key t_plain" id="K_COLON">
    <div class="t_keytext">Ж</div>
</div>
<div class="t_key t_plain" id="K_QUOTE">
    <div class="t_keytext">Э</div>
</div>
<br style="clear: left">

<div class="t_key t_shift" id="K_LSHIFT"></div>
<div class="t_key t_longpressnarrow" id="K_Z">
    <div class="t_keytextlp">Я̄</div>
    <div class="t_keytext">Я</div>
</div>
<div class="t_key t_plainnarrow" id="K_X">
    <div class="t_keytext">Ч</div>
</div>
<div class="t_key t_plainnarrow" id="K_C">
    <div class="t_keytext">С</div>
</div>
<div class="t_key t_plainnarrow" id="K_V">
    <div class="t_keytext">М</div>
</div>
<div class="t_key t_longpressnarrow" id="K_B">
    <div class="t_keytextlp">Ӣ</div>
    <div class="t_keytext">И</div>
</div>
<div class="t_key t_plainnarrow" id="K_N">
    <div class="t_keytext">Т</div>
</div>
<div class="t_key t_plainnarrow" id="K_M">
    <div class="t_keytext">Ь</div>
</div>
<div class="t_key t_plainnarrow" id="K_COMMA">
    <div class="t_keytext">Б</div>
</div>
<div class="t_key t_longpressnarrow" id="K_PERIOD">
    <div class="t_keytextlp">Ю̄</div>
    <div class="t_keytext">Ю</div>
</div>
<div class="t_key t_erase" id=""></div>
<br style="clear: left">

<div class="t_key t_numlock" id="">
    <div class="t_numlocktext">123</div>
</div>
<div class="t_key t_menu" id=""></div>
<div class="t_key t_plain" id="">
    <div class="t_keytext">,</div>
</div>
<div class="t_key t_space" id=""></div>
<div class="t_key t_longpressperiod" id="K_D">
    <div class="t_keytextlpperiod">, ? ! ; : ' " @ #</div>
    <div class="t_keytext">.</div>
</div>
<div class="t_key t_enter" id=""></div>
<br style="clear: left">



<h3>Numeric keys</h3>

<div class="t_key t_plain">
    <div class="t_keytext">1</div>                        
</div>
<div class="t_key t_plain" id="K_W">
    <div class="t_keytext">2</div>
</div>
<div class="t_key t_plain" id="K_E">
    <div class="t_keytext">3</div>
</div>
<div class="t_key t_plain" id="K_R">
    <div class="t_keytext">4</div>
</div>
<div class="t_key t_plain" id="K_T">
    <div class="t_keytext">5</div>
</div>
<div class="t_key t_plain" id="K_Y">
    <div class="t_keytext">6</div>
</div>
<div class="t_key t_plain" id="K_U">
    <div class="t_keytext">7</div>
</div>
<div class="t_key t_plain" id="K_I">
    <div class="t_keytext">8</div>
</div>
<div class="t_key t_plain" id="K_O">
    <div class="t_keytext">9</div>
</div>
<div class="t_key t_plain" id="K_P">
    <div class="t_keytext">0</div>
</div>
<div class="t_key t_plain" id="K_LBRKT">
    <div class="t_keytext">-</div>
</div>
<br style="clear: left">

<div class="t_key t_plain" id="K_A">
    <div class="t_keytext">!</div>
</div>
<div class="t_key t_plain" id="K_S">
    <div class="t_keytext">"</div>
</div>
<div class="t_key t_longpress" id="K_D">
    <div class="t_keytextlp">&#x2116</div>
    <div class="t_keytext">#</div>
</div>
<div class="t_key t_plain" id="K_F">
    <div class="t_keytext">;</div>
</div>
<div class="t_key t_plain" id="K_G">
    <div class="t_keytext">%</div>
</div>
<div class="t_key t_plain" id="K_H">
    <div class="t_keytext">:</div>
</div>
<div class="t_key t_plain" id="K_J">
    <div class="t_keytext">?</div>
</div>
<div class="t_key t_plain" id="K_K">
    <div class="t_keytext">*</div>
</div>
<div class="t_key t_plain" id="K_L">
    <div class="t_keytext">(</div>
</div>
<div class="t_key t_plain" id="K_COLON">
    <div class="t_keytext">)</div>
</div>
<div class="t_key t_plain" id="K_QUOTE">
    <div class="t_keytext">_</div>
</div>
<br style="clear: left">

<div class="t_key t_shift" id="K_LSHIFT"></div>
<div class="t_key t_plainnarrow" id="K_Z">
    <div class="t_keytext">'</div>
</div>
<div class="t_key t_plainnarrow" id="K_X">
    <div class="t_keytext">@</div>
</div>
<div class="t_key t_longpressnarrow" id="K_C">
    <div class="t_keytextlp">£ € $</div>
    <div class="t_keytext">₽</div>
</div>
<div class="t_key t_plainnarrow" id="K_V">
    <div class="t_keytext">/</div>
</div>
<div class="t_key t_plainnarrow" id="K_B">
    <div class="t_keytext">\</div>
</div>
<div class="t_key t_plainnarrow" id="K_N">
    <div class="t_keytext">=</div>
</div>
<div class="t_key t_plainnarrow" id="K_M">
    <div class="t_keytext">+</div>
</div>
<div class="t_key t_longpressnarrow" id="K_COMMA">
    <div class="t_keytextlp">{ < «</div>
    <div class="t_keytext">[</div>
</div>
<div class="t_key t_longpressnarrow" id="K_PERIOD">
    <div class="t_keytextlp">} > »</div>
    <div class="t_keytext">]</div>
</div>
<div class="t_key t_erase" id=""></div>
<br style="clear: left">

<div class="t_key t_numlock" id="">
    <div class="t_numlocktext">abc</div>
</div>


<div class="t_key t_menu" id=""></div>
<div class="t_key t_plain" id="">
    <div class="t_keytext">,</div>
</div>
<div class="t_key t_space" id=""></div>
<div class="t_key t_plain" id="K_D">
    <div class="t_keytext">.</div>
</div>
<div class="t_key t_enter" id=""></div>
<br style="clear: left">



<h3>List of characters available on long press keys</h3>

<div class="long_narrow_table">
    <table>
        <tr>
            <td><b>key</b></td>
            <td><b>long press characters</b></td>
        </tr>
        <tr>
            <td>Й</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Ц</td>
            <td>2</td>
        </tr>
        <tr>
            <td>У</td>
            <td>Ӯ Ў 3</td>
        </tr>
        <tr>
            <td>К</td>
            <td>Қ 4</td>
        </tr>
        <tr>
            <td>Е</td>
            <td>Ё 5</td>
        </tr>
        <tr>
            <td>Н</td>
            <td>Ң 6</td>
        </tr>
        <tr>
            <td>Г</td>
            <td>Ӷ 7</td>
        </tr>
        <tr>
            <td>Ш</td>
            <td>8</td>
        </tr>
        <tr>
            <td>Щ</td>
            <td>9</td>
        </tr>
        <tr>
            <td>З</td>
            <td>0</td>
        </tr>
        <tr>
            <td>Х</td>
            <td>Ҳ</td>
        </tr>
    </table>

    <table>
        <tr>
            <td><b>key</b></td>
            <td><b>long press characters</b></td>
        </tr>
        <tr>
            <td>В</td>
            <td>Ў</td>
        </tr>
        <tr>
            <td>А</td>
            <td>А&#x0304</td>
        </tr>
        <tr>
            <td>Я</td>
            <td>Я&#x0304</td>
        </tr>
        <tr>
            <td>И</td>
            <td>Ӣ</td>
        </tr>
        <tr>
            <td>Ь</td>
            <td>Ъ</td>
        </tr>
        <tr>
            <td>Ю</td>
            <td>Ю&#x0304</td>
        </tr>
        <tr>
            <td>(period) .</td>
            <td>? ! ; : ' " @ #</td>
        </tr>
        <tr>
            <td>#</td>
            <td>&#x2116</td>
        </tr>
        <tr>
            <td>&#x20BD</td>
            <td>&#x00A3  &#x20AC  &#x0024</td>
        </tr>
        <tr>
            <td>[</td>
            <td>&#x007B  &#x003C  &#x00AB</td>
        </tr>
        <tr>
            <td>]</td>
            <td>&#x007D  &#x003E  &#x00BB</td>
        </tr>
    </table>
</div>

<h1>See also</h1>
<p>
    SIL International has also published a Yupik Cyrillic keyboard that is based on an English QWERTY keyboard layout. It assigns each Cyrillic character to the key of its nearest phonetically equivalent English character. See the <a href="https://keyman.com/keyboards/sil_yupik_cyrillic">sil_yupik_cyrillic</a> layout.
</p>
