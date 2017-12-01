<?php
// ************************************************************************************//
// * EX 1080 Source
// ************************************************************************************//
// * Author: D@rk-�vil�
// ************************************************************************************//
// * Version: 1.0
// * 
// * Copyright (c) 2017 D@rk-�vil�. All rights reserved.
// ************************************************************************************//
// * License Typ: Creative Commons licenses
// ************************************************************************************//
  ob_start ("ob_gzhandler");
  ob_start("compress");
  header("Content-type: text/css;charset: UTF-8");
  header("Cache-Control: must-revalidate");
  $offset = 60 * 60 ;
  $ExpStr = "Expires: " . gmdate("D, d M Y H:i:s",time() + $offset) . " GMT";
  header($ExpStr);
  function compress($buffer) {
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    $buffer = str_replace(array("\r\n","\r","\n","\t",'  ','    ','    '),'',$buffer);
    $buffer = str_replace('{ ', '{', $buffer);
    $buffer = str_replace(' }', '}', $buffer);
    $buffer = str_replace('; ', ';', $buffer);
    $buffer = str_replace(', ', ',', $buffer);
    $buffer = str_replace(' {', '{', $buffer);
    $buffer = str_replace('} ', '}', $buffer);
    $buffer = str_replace(': ', ':', $buffer);
    $buffer = str_replace(' ,', ',', $buffer);
    $buffer = str_replace(' ;', ';', $buffer);
    $buffer = str_replace(';}', '}', $buffer);
    return $buffer;
  }
?>
@font-face{font-family:'Glyphicons Filetypes';src:url('../fonts/glyphicons-filetypes-regular.eot');src:url('../fonts/glyphicons-filetypes-regular.eot?#iefix') format('embedded-opentype'),url('../fonts/glyphicons-filetypes-regular.woff2') format('woff2'),url('../fonts/glyphicons-filetypes-regular.woff') format('woff'),url('../fonts/glyphicons-filetypes-regular.ttf') format('truetype'),url('../fonts/glyphicons-filetypes-regular.svg#glyphicons_filetypesregular') format('svg')}.filetypes{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Filetypes';font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.filetypes.x05{font-size:12px}.filetypes.x2{font-size:48px}.filetypes.x3{font-size:72px}.filetypes.x4{font-size:96px}.filetypes.x5{font-size:120px}.filetypes.light:before{color:#f2f2f2}.filetypes.drop:before{text-shadow:-1px 1px 3px rgba(0,0,0,0.3)}.filetypes.flip{-moz-transform:scaleX(-1);-o-transform:scaleX(-1);-webkit-transform:scaleX(-1);transform:scaleX(-1);filter:FlipH;-ms-filter:"FlipH"}.filetypes.flipv{-moz-transform:scaleY(-1);-o-transform:scaleY(-1);-webkit-transform:scaleY(-1);transform:scaleY(-1);filter:FlipV;-ms-filter:"FlipV"}.filetypes.rotate90{-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.filetypes.rotate180{-webkit-transform:rotate(180deg);-moz-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.filetypes.rotate270{-webkit-transform:rotate(270deg);-moz-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.filetypes-txt:before{content:"\E001"}.filetypes-doc:before{content:"\E002"}.filetypes-rtf:before{content:"\E003"}.filetypes-log:before{content:"\E004"}.filetypes-tex:before{content:"\E005"}.filetypes-msg:before{content:"\E006"}.filetypes-text:before{content:"\E007"}.filetypes-wpd:before{content:"\E008"}.filetypes-wps:before{content:"\E009"}.filetypes-docx:before{content:"\E010"}.filetypes-page:before{content:"\E011"}.filetypes-csv:before{content:"\E012"}.filetypes-dat:before{content:"\E013"}.filetypes-tar:before{content:"\E014"}.filetypes-xml:before{content:"\E015"}.filetypes-vcf:before{content:"\E016"}.filetypes-pps:before{content:"\E017"}.filetypes-key:before{content:"\E018"}.filetypes-ppt:before{content:"\E019"}.filetypes-pptx:before{content:"\E020"}.filetypes-sdf:before{content:"\E021"}.filetypes-gbr:before{content:"\E022"}.filetypes-ged:before{content:"\E023"}.filetypes-mp3:before{content:"\E024"}.filetypes-m4a:before{content:"\E025"}.filetypes-waw:before{content:"\E026"}.filetypes-wma:before{content:"\E027"}.filetypes-mpa:before{content:"\E028"}.filetypes-iff:before{content:"\E029"}.filetypes-aif:before{content:"\E030"}.filetypes-ra:before{content:"\E031"}.filetypes-mid:before{content:"\E032"}.filetypes-m3v:before{content:"\E033"}.filetypes-e-3gp:before{content:"\E034"}.filetypes-swf:before{content:"\E035"}.filetypes-avi:before{content:"\E036"}.filetypes-asx:before{content:"\E037"}.filetypes-mp4:before{content:"\E038"}.filetypes-e-3g2:before{content:"\E039"}.filetypes-mpg:before{content:"\E040"}.filetypes-asf:before{content:"\E041"}.filetypes-vob:before{content:"\E042"}.filetypes-wmv:before{content:"\E043"}.filetypes-mov:before{content:"\E044"}.filetypes-srt:before{content:"\E045"}.filetypes-m4v:before{content:"\E046"}.filetypes-flv:before{content:"\E047"}.filetypes-rm:before{content:"\E048"}.filetypes-png:before{content:"\E049"}.filetypes-psd:before{content:"\E050"}.filetypes-psp:before{content:"\E051"}.filetypes-jpg:before{content:"\E052"}.filetypes-tif:before{content:"\E053"}.filetypes-tiff:before{content:"\E054"}.filetypes-gif:before{content:"\E055"}.filetypes-bmp:before{content:"\E056"}.filetypes-tga:before{content:"\E057"}.filetypes-thm:before{content:"\E058"}.filetypes-yuv:before{content:"\E059"}.filetypes-dds:before{content:"\E060"}.filetypes-ai:before{content:"\E061"}.filetypes-eps:before{content:"\E062"}.filetypes-ps:before{content:"\E063"}.filetypes-svg:before{content:"\E064"}.filetypes-pdf:before{content:"\E065"}.filetypes-pct:before{content:"\E066"}.filetypes-indd:before{content:"\E067"}.filetypes-xlr:before{content:"\E068"}.filetypes-xls:before{content:"\E069"}.filetypes-xlsx:before{content:"\E070"}.filetypes-db:before{content:"\E071"}.filetypes-dbf:before{content:"\E072"}.filetypes-mdb:before{content:"\E073"}.filetypes-pdb:before{content:"\E074"}.filetypes-sql:before{content:"\E075"}.filetypes-aacd:before{content:"\E076"}.filetypes-app:before{content:"\E077"}.filetypes-exe:before{content:"\E078"}.filetypes-com:before{content:"\E079"}.filetypes-bat:before{content:"\E080"}.filetypes-apk:before{content:"\E081"}.filetypes-jar:before{content:"\E082"}.filetypes-hsf:before{content:"\E083"}.filetypes-pif:before{content:"\E084"}.filetypes-vb:before{content:"\E085"}.filetypes-cgi:before{content:"\E086"}.filetypes-css:before{content:"\E087"}.filetypes-js:before{content:"\E088"}.filetypes-php:before{content:"\E089"}.filetypes-xhtml:before{content:"\E090"}.filetypes-htm:before{content:"\E091"}.filetypes-html:before{content:"\E092"}.filetypes-asp:before{content:"\E093"}.filetypes-cer:before{content:"\E094"}.filetypes-jsp:before{content:"\E095"}.filetypes-cfm:before{content:"\E096"}.filetypes-aspx:before{content:"\E097"}.filetypes-rss:before{content:"\E098"}.filetypes-csr:before{content:"\E099"}.filetypes-less:before{content:"\E100"}.filetypes-otf:before{content:"\E101"}.filetypes-ttf:before{content:"\E102"}.filetypes-font:before{content:"\E103"}.filetypes-fnt:before{content:"\E104"}.filetypes-eot:before{content:"\E105"}.filetypes-woff:before{content:"\E106"}.filetypes-zip:before{content:"\E107"}.filetypes-zipx:before{content:"\E108"}.filetypes-rar:before{content:"\E109"}.filetypes-targ:before{content:"\E110"}.filetypes-sitx:before{content:"\E111"}.filetypes-deb:before{content:"\E112"}.filetypes-e-7z:before{content:"\E113"}.filetypes-pkg:before{content:"\E114"}.filetypes-rpm:before{content:"\E115"}.filetypes-cbr:before{content:"\E116"}.filetypes-gz:before{content:"\E117"}.filetypes-dmg:before{content:"\E118"}.filetypes-cue:before{content:"\E119"}.filetypes-bin:before{content:"\E120"}.filetypes-iso:before{content:"\E121"}.filetypes-hdf:before{content:"\E122"}.filetypes-vcd:before{content:"\E123"}.filetypes-bak:before{content:"\E124"}.filetypes-tmp:before{content:"\E125"}.filetypes-ics:before{content:"\E126"}.filetypes-msi:before{content:"\E127"}.filetypes-cfg:before{content:"\E128"}.filetypes-ini:before{content:"\E129"}.filetypes-prf:before{content:"\E130"}.filetypes-json:before{content:"\E131"}.filetypes-site:before{content:"\E132"}.filetypes-xap:before{content:"\E133"}.filetypes-api:before{content:"\E134"}.filetypes-ico:before{content:"\E135"}.filetypes-webp:before{content:"\E136"}.filetypes-bpg:before{content:"\E137"}.filetypes-flac:before{content:"\E138"}.filetypes-ogg:before{content:"\E139"}.filetypes-unknown:before{content:"\E140"}