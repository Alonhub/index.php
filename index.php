<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Гра "Хрестики-нулики"</title>
</head>
 
<body bgcolor="#FFFFFF">
 
<p>&nbsp;</p>
 
<p> 
<?php
$variables = new Func ("variables", function() use (&$t, &$change, &$empty1, &$empty2, &$empty3, &$empty4, &$empty5, &$empty6, &$empty7, &$empty8, &$empty9, &$whogoesnow) {
  $t = 1.0;
  $change = 1.0;
  $empty1 = -1.0;
  $empty2 = -1.0;
  $empty3 = -1.0;
  $empty4 = -1.0;
  $empty5 = -1.0;
  $empty6 = -1.0;
  $empty7 = -1.0;
  $empty8 = -1.0;
  $empty9 = -1.0;
  return ;
  $whogoesnow = "\xD0\x93\xD1\x80\xD0\xB0\xD0\xB2\xD0\xB5\xD1\x86\xD1\x8C 1";
});
$win = new Func("win", function() use (&$empty1, &$empty2, &$empty3, &$empty4, &$empty5, &$empty6, &$empty7, &$empty8, &$empty9, &$alert, &$history) {
  if (eq($empty1, $empty2) && eq($empty2, $empty3) && eq($empty3, 0.0) || eq($empty4, $empty5) && eq($empty5, $empty6) && eq($empty6, 0.0) || eq($empty7, $empty8) && eq($empty8, $empty9) && eq($empty9, 0.0) || eq($empty1, $empty4) && eq($empty4, $empty7) && eq($empty7, 0.0) || eq($empty2, $empty5) && eq($empty5, $empty8) && eq($empty8, 0.0) || eq($empty3, $empty6) && eq($empty6, $empty9) && eq($empty9, 0.0) || eq($empty1, $empty5) && eq($empty5, $empty9) && eq($empty9, 0.0) || eq($empty3, $empty5) && eq($empty5, $empty7) && eq($empty7, 0.0)) {
    call($alert, "\xD0\x93\xD1\x80\xD0\xB0\xD0\xB2\xD0\xB5\xD1\x86\xD1\x8C 1: \xD0\x9F\xD0\x95\xD0\xA0\xD0\x95\xD0\x9C\xD0\x86\xD0\x93 !!!");
    call_method($history, "go", 0.0);
  }
  if (eq($empty1, $empty2) && eq($empty2, $empty3) && eq($empty3, 1.0) || eq($empty4, $empty5) && eq($empty5, $empty6) && eq($empty6, 1.0) || eq($empty7, $empty8) && eq($empty8, $empty9) && eq($empty9, 1.0) || eq($empty1, $empty4) && eq($empty4, $empty7) && eq($empty7, 1.0) || eq($empty2, $empty5) && eq($empty5, $empty8) && eq($empty8, 1.0) || eq($empty3, $empty6) && eq($empty6, $empty9) && eq($empty9, 1.0) || eq($empty1, $empty5) && eq($empty5, $empty9) && eq($empty9, 1.0) || eq($empty3, $empty5) && eq($empty5, $empty7) && eq($empty7, 1.0)) {
    call($alert, "\xD0\x93\xD1\x80\xD0\xB0\xD0\xB2\xD0\xB5\xD1\x86\xD1\x8C 2: \xD0\x9F\xD0\x95\xD0\xA0\xD0\x95\xD0\x9C\xD0\x86\xD0\x93 !!!");
    call_method($history, "go", 0.0);
  }
});
$turnchange = new Func("turnchange", function($t = null) use (&$change, &$whogoesnow) {
  if (eq($change, 1.0)) {
    if (eq($t, 0.0)) {
      $t = 1.0;
      $whogoesnow = _concat("\xD0\x93\xD1\x80\xD0\xB0\xD0\xB2\xD0\xB5\xD1\x86\xD1\x8C ", 1.0);
    } else {
      $t = 0.0;
      $whogoesnow = _concat("\xD0\x93\xD1\x80\xD0\xB0\xD0\xB2\xD0\xB5\xD1\x86\xD1\x8C ", 2.0);
    }

  } else {
    $t = $t;
  }

  $change = 1.0;
  return $t;
});
$changing = new Func("changing", function($clicked = null) use (&$spot, &$empty1, &$empty2, &$empty3, &$empty4, &$empty5, &$empty6, &$empty7, &$empty8, &$empty9, &$t, &$xo, &$change) {
  if (eq($clicked, 1.0)) {
    $spot = $empty1;
  }
  if (eq($clicked, 2.0)) {
    $spot = $empty2;
  }
  if (eq($clicked, 3.0)) {
    $spot = $empty3;
  }
  if (eq($clicked, 4.0)) {
    $spot = $empty4;
  }
  if (eq($clicked, 5.0)) {
    $spot = $empty5;
  }
  if (eq($clicked, 6.0)) {
    $spot = $empty6;
  }
  if (eq($clicked, 7.0)) {
    $spot = $empty7;
  }
  if (eq($clicked, 8.0)) {
    $spot = $empty8;
  }
  if (eq($clicked, 9.0)) {
    $spot = $empty9;
  }
  if (eq($spot, -1.0)) {
    if (eq($t, 0.0)) {
      $xo = " O ";
      $spot = 0.0;
    } else {
      $xo = " X ";
      $spot = 1.0;
    }

    if (eq($clicked, 1.0)) {
      $empty1 = $spot;
    }
    if (eq($clicked, 2.0)) {
      $empty2 = $spot;
    }
    if (eq($clicked, 3.0)) {
      $empty3 = $spot;
    }
    if (eq($clicked, 4.0)) {
      $empty4 = $spot;
    }
    if (eq($clicked, 5.0)) {
      $empty5 = $spot;
    }
    if (eq($clicked, 6.0)) {
      $empty6 = $spot;
    }
    if (eq($clicked, 7.0)) {
      $empty7 = $spot;
    }
    if (eq($clicked, 8.0)) {
      $empty8 = $spot;
    }
    if (eq($clicked, 9.0)) {
      $empty9 = $spot;
    }
  } else {
    if (eq($spot, 0.0)) {
      $xo = " O ";
    }
    if (eq($spot, 1.0)) {
      $xo = " X ";
    }
    $change = 0.0;
  }

  return $xo;
});
$change_b1 = new Func("change_b1", function($form = null) use (&$clicked, &$changing, &$t, &$turnchange, &$xo, &$whogoesnow, &$win) {
  $clicked = 1.0;
  call($changing, $clicked);
  $t = call($turnchange, $t);
  set(get($form, "b1"), "value", $xo);
  set(get($form, "whoseturn"), "value", $whogoesnow);
  call($win);
  return ;
});
$change_b2 = new Func("change_b2", function($form = null) use (&$clicked, &$changing, &$xo, &$t, &$turnchange, &$whogoesnow, &$win) {
  $clicked = 2.0;
  call($changing, $clicked);
  set(get($form, "b2"), "value", $xo);
  $t = call($turnchange, $t);
  set(get($form, "whoseturn"), "value", $whogoesnow);
  call($win);
  return ;
});
$change_b3 = new Func("change_b3", function($form = null) use (&$clicked, &$changing, &$xo, &$t, &$turnchange, &$whogoesnow, &$win) {
  $clicked = 3.0;
  call($changing, $clicked);
  set(get($form, "b3"), "value", $xo);
  $t = call($turnchange, $t);
  set(get($form, "whoseturn"), "value", $whogoesnow);
  call($win);
  return ;
});
$change_b4 = new Func("change_b4", function($form = null) use (&$clicked, &$changing, &$xo, &$t, &$turnchange, &$whogoesnow, &$win) {
  $clicked = 4.0;
  call($changing, $clicked);
  set(get($form, "b4"), "value", $xo);
  $t = call($turnchange, $t);
  set(get($form, "whoseturn"), "value", $whogoesnow);
  call($win);
  return ;
});
$change_b5 = new Func("change_b5", function($form = null) use (&$clicked, &$changing, &$xo, &$t, &$turnchange, &$whogoesnow, &$win) {
  $clicked = 5.0;
  call($changing, $clicked);
  set(get($form, "b5"), "value", $xo);
  $t = call($turnchange, $t);
  set(get($form, "whoseturn"), "value", $whogoesnow);
  call($win);
  return ;
});
$change_b6 = new Func("change_b6", function($form = null) use (&$clicked, &$changing, &$xo, &$t, &$turnchange, &$whogoesnow, &$win) {
  $clicked = 6.0;
  call($changing, $clicked);
  set(get($form, "b6"), "value", $xo);
  $t = call($turnchange, $t);
  set(get($form, "whoseturn"), "value", $whogoesnow);
  call($win);
  return ;
});
$change_b7 = new Func("change_b7", function($form = null) use (&$clicked, &$changing, &$xo, &$t, &$turnchange, &$whogoesnow, &$win) {
  $clicked = 7.0;
  call($changing, $clicked);
  set(get($form, "b7"), "value", $xo);
  $t = call($turnchange, $t);
  set(get($form, "whoseturn"), "value", $whogoesnow);
  call($win);
  return ;
});
$change_b8 = new Func("change_b8", function($form = null) use (&$clicked, &$changing, &$xo, &$t, &$turnchange, &$whogoesnow, &$win) {
  $clicked = 8.0;
  call($changing, $clicked);
  set(get($form, "b8"), "value", $xo);
  $t = call($turnchange, $t);
  set(get($form, "whoseturn"), "value", $whogoesnow);
  call($win);
  return ;
});
$change_b9 = new Func("change_b9", function($form = null) use (&$clicked, &$changing, &$xo, &$t, &$turnchange, &$whogoesnow, &$win) {
  $clicked = 9.0;
  call($changing, $clicked);
  set(get($form, "b9"), "value", $xo);
  $t = call($turnchange, $t);
  set(get($form, "whoseturn"), "value", $whogoesnow);
  call($win);
  return ;
});

?>
variables();
</p>
 
<h1 align="center"><font color="#0000FF">Гра "Хрестики-нулики"</font></h1>
 
<form>
  <p align="center"><input type="button" name="whoseturn"
  value="Гравець 1"> <br>
  <br>
  </p>
  <div align="center"><center><table width="247" height="159" border="0">
    <tr>
      <td width="77" bgcolor="#CCCCCC">   <input type="button" name="b1" value=" "
      onclick="change_b1(this.form)"> </td>
      <td width="77" bgcolor="#CCCCCC"><input type="button" name="b2" value=" "
      onclick="change_b2(this.form)"> </td>
      <td width="79" bgcolor="#CCCCCC"><input type="button" name="b3" value=" "
      onclick="change_b3(this.form)"> </td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><input type="button" name="b4" value=" "
      onclick="change_b4(this.form)"> </td>
      <td bgcolor="#CCCCCC"><input type="button" name="b5" value=" "
      onclick="change_b5(this.form)"> </td>
      <td bgcolor="#CCCCCC"><input type="button" name="b6" value=" "
      onclick="change_b6(this.form)"> </td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><input type="button" name="b7" value=" "
      onclick="change_b7(this.form)"> </td>
      <td bgcolor="#CCCCCC"><input type="button" name="b8" value=" "
      onclick="change_b8(this.form)"> </td>
      <td bgcolor="#CCCCCC"><input type="button" name="b9" value=" "
      onclick="change_b9(this.form)"> </td>
    </tr>
  </table>
  </center></div><p align="center"><br>
  <input type="button" value="Нова гра"
  onclick="history.go(0)"> </p>
</form>
 
 
</p>
</body>
</html>