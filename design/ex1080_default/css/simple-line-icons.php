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
@font-face {
  font-family: 'simple-line-icons';
  src: url('../fonts/Simple-Line-Icons.eot?v=2.4.0');
  src: url('../fonts/Simple-Line-Icons.eot?v=2.4.0#iefix') format('embedded-opentype'), url('../fonts/Simple-Line-Icons.woff2?v=2.4.0') format('woff2'), url('../fonts/Simple-Line-Icons.ttf?v=2.4.0') format('truetype'), url('../fonts/Simple-Line-Icons.woff?v=2.4.0') format('woff'), url('../fonts/Simple-Line-Icons.svg?v=2.4.0#simple-line-icons') format('svg');
  font-weight: normal;
  font-style: normal;
}
/*
 Use the following CSS code if you want to have a class per icon.
 Instead of a list of all class selectors, you can use the generic [class*="icon-"] selector, but it's slower:
*/
.icon-user,
.icon-people,
.icon-user-female,
.icon-user-follow,
.icon-user-following,
.icon-user-unfollow,
.icon-login,
.icon-logout,
.icon-emotsmile,
.icon-phone,
.icon-call-end,
.icon-call-in,
.icon-call-out,
.icon-map,
.icon-location-pin,
.icon-direction,
.icon-directions,
.icon-compass,
.icon-layers,
.icon-menu,
.icon-list,
.icon-options-vertical,
.icon-options,
.icon-arrow-down,
.icon-arrow-left,
.icon-arrow-right,
.icon-arrow-up,
.icon-arrow-up-circle,
.icon-arrow-left-circle,
.icon-arrow-right-circle,
.icon-arrow-down-circle,
.icon-check,
.icon-clock,
.icon-plus,
.icon-minus,
.icon-close,
.icon-event,
.icon-exclamation,
.icon-organization,
.icon-trophy,
.icon-screen-smartphone,
.icon-screen-desktop,
.icon-plane,
.icon-notebook,
.icon-mustache,
.icon-mouse,
.icon-magnet,
.icon-energy,
.icon-disc,
.icon-cursor,
.icon-cursor-move,
.icon-crop,
.icon-chemistry,
.icon-speedometer,
.icon-shield,
.icon-screen-tablet,
.icon-magic-wand,
.icon-hourglass,
.icon-graduation,
.icon-ghost,
.icon-game-controller,
.icon-fire,
.icon-eyeglass,
.icon-envelope-open,
.icon-envelope-letter,
.icon-bell,
.icon-badge,
.icon-anchor,
.icon-wallet,
.icon-vector,
.icon-speech,
.icon-puzzle,
.icon-printer,
.icon-present,
.icon-playlist,
.icon-pin,
.icon-picture,
.icon-handbag,
.icon-globe-alt,
.icon-globe,
.icon-folder-alt,
.icon-folder,
.icon-film,
.icon-feed,
.icon-drop,
.icon-drawer,
.icon-docs,
.icon-doc,
.icon-diamond,
.icon-cup,
.icon-calculator,
.icon-bubbles,
.icon-briefcase,
.icon-book-open,
.icon-basket-loaded,
.icon-basket,
.icon-bag,
.icon-action-undo,
.icon-action-redo,
.icon-wrench,
.icon-umbrella,
.icon-trash,
.icon-tag,
.icon-support,
.icon-frame,
.icon-size-fullscreen,
.icon-size-actual,
.icon-shuffle,
.icon-share-alt,
.icon-share,
.icon-rocket,
.icon-question,
.icon-pie-chart,
.icon-pencil,
.icon-note,
.icon-loop,
.icon-home,
.icon-grid,
.icon-graph,
.icon-microphone,
.icon-music-tone-alt,
.icon-music-tone,
.icon-earphones-alt,
.icon-earphones,
.icon-equalizer,
.icon-like,
.icon-dislike,
.icon-control-start,
.icon-control-rewind,
.icon-control-play,
.icon-control-pause,
.icon-control-forward,
.icon-control-end,
.icon-volume-1,
.icon-volume-2,
.icon-volume-off,
.icon-calendar,
.icon-bulb,
.icon-chart,
.icon-ban,
.icon-bubble,
.icon-camrecorder,
.icon-camera,
.icon-cloud-download,
.icon-cloud-upload,
.icon-envelope,
.icon-eye,
.icon-flag,
.icon-heart,
.icon-info,
.icon-key,
.icon-link,
.icon-lock,
.icon-lock-open,
.icon-magnifier,
.icon-magnifier-add,
.icon-magnifier-remove,
.icon-paper-clip,
.icon-paper-plane,
.icon-power,
.icon-refresh,
.icon-reload,
.icon-settings,
.icon-star,
.icon-symbol-female,
.icon-symbol-male,
.icon-target,
.icon-credit-card,
.icon-paypal,
.icon-social-tumblr,
.icon-social-twitter,
.icon-social-facebook,
.icon-social-instagram,
.icon-social-linkedin,
.icon-social-pinterest,
.icon-social-github,
.icon-social-google,
.icon-social-reddit,
.icon-social-skype,
.icon-social-dribbble,
.icon-social-behance,
.icon-social-foursqare,
.icon-social-soundcloud,
.icon-social-spotify,
.icon-social-stumbleupon,
.icon-social-youtube,
.icon-social-dropbox,
.icon-social-vkontakte,
.icon-social-steam {
  font-family: 'simple-line-icons';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.icon-user:before {
  content: "\e005";
}
.icon-people:before {
  content: "\e001";
}
.icon-user-female:before {
  content: "\e000";
}
.icon-user-follow:before {
  content: "\e002";
}
.icon-user-following:before {
  content: "\e003";
}
.icon-user-unfollow:before {
  content: "\e004";
}
.icon-login:before {
  content: "\e066";
}
.icon-logout:before {
  content: "\e065";
}
.icon-emotsmile:before {
  content: "\e021";
}
.icon-phone:before {
  content: "\e600";
}
.icon-call-end:before {
  content: "\e048";
}
.icon-call-in:before {
  content: "\e047";
}
.icon-call-out:before {
  content: "\e046";
}
.icon-map:before {
  content: "\e033";
}
.icon-location-pin:before {
  content: "\e096";
}
.icon-direction:before {
  content: "\e042";
}
.icon-directions:before {
  content: "\e041";
}
.icon-compass:before {
  content: "\e045";
}
.icon-layers:before {
  content: "\e034";
}
.icon-menu:before {
  content: "\e601";
}
.icon-list:before {
  content: "\e067";
}
.icon-options-vertical:before {
  content: "\e602";
}
.icon-options:before {
  content: "\e603";
}
.icon-arrow-down:before {
  content: "\e604";
}
.icon-arrow-left:before {
  content: "\e605";
}
.icon-arrow-right:before {
  content: "\e606";
}
.icon-arrow-up:before {
  content: "\e607";
}
.icon-arrow-up-circle:before {
  content: "\e078";
}
.icon-arrow-left-circle:before {
  content: "\e07a";
}
.icon-arrow-right-circle:before {
  content: "\e079";
}
.icon-arrow-down-circle:before {
  content: "\e07b";
}
.icon-check:before {
  content: "\e080";
}
.icon-clock:before {
  content: "\e081";
}
.icon-plus:before {
  content: "\e095";
}
.icon-minus:before {
  content: "\e615";
}
.icon-close:before {
  content: "\e082";
}
.icon-event:before {
  content: "\e619";
}
.icon-exclamation:before {
  content: "\e617";
}
.icon-organization:before {
  content: "\e616";
}
.icon-trophy:before {
  content: "\e006";
}
.icon-screen-smartphone:before {
  content: "\e010";
}
.icon-screen-desktop:before {
  content: "\e011";
}
.icon-plane:before {
  content: "\e012";
}
.icon-notebook:before {
  content: "\e013";
}
.icon-mustache:before {
  content: "\e014";
}
.icon-mouse:before {
  content: "\e015";
}
.icon-magnet:before {
  content: "\e016";
}
.icon-energy:before {
  content: "\e020";
}
.icon-disc:before {
  content: "\e022";
}
.icon-cursor:before {
  content: "\e06e";
}
.icon-cursor-move:before {
  content: "\e023";
}
.icon-crop:before {
  content: "\e024";
}
.icon-chemistry:before {
  content: "\e026";
}
.icon-speedometer:before {
  content: "\e007";
}
.icon-shield:before {
  content: "\e00e";
}
.icon-screen-tablet:before {
  content: "\e00f";
}
.icon-magic-wand:before {
  content: "\e017";
}
.icon-hourglass:before {
  content: "\e018";
}
.icon-graduation:before {
  content: "\e019";
}
.icon-ghost:before {
  content: "\e01a";
}
.icon-game-controller:before {
  content: "\e01b";
}
.icon-fire:before {
  content: "\e01c";
}
.icon-eyeglass:before {
  content: "\e01d";
}
.icon-envelope-open:before {
  content: "\e01e";
}
.icon-envelope-letter:before {
  content: "\e01f";
}
.icon-bell:before {
  content: "\e027";
}
.icon-badge:before {
  content: "\e028";
}
.icon-anchor:before {
  content: "\e029";
}
.icon-wallet:before {
  content: "\e02a";
}
.icon-vector:before {
  content: "\e02b";
}
.icon-speech:before {
  content: "\e02c";
}
.icon-puzzle:before {
  content: "\e02d";
}
.icon-printer:before {
  content: "\e02e";
}
.icon-present:before {
  content: "\e02f";
}
.icon-playlist:before {
  content: "\e030";
}
.icon-pin:before {
  content: "\e031";
}
.icon-picture:before {
  content: "\e032";
}
.icon-handbag:before {
  content: "\e035";
}
.icon-globe-alt:before {
  content: "\e036";
}
.icon-globe:before {
  content: "\e037";
}
.icon-folder-alt:before {
  content: "\e039";
}
.icon-folder:before {
  content: "\e089";
}
.icon-film:before {
  content: "\e03a";
}
.icon-feed:before {
  content: "\e03b";
}
.icon-drop:before {
  content: "\e03e";
}
.icon-drawer:before {
  content: "\e03f";
}
.icon-docs:before {
  content: "\e040";
}
.icon-doc:before {
  content: "\e085";
}
.icon-diamond:before {
  content: "\e043";
}
.icon-cup:before {
  content: "\e044";
}
.icon-calculator:before {
  content: "\e049";
}
.icon-bubbles:before {
  content: "\e04a";
}
.icon-briefcase:before {
  content: "\e04b";
}
.icon-book-open:before {
  content: "\e04c";
}
.icon-basket-loaded:before {
  content: "\e04d";
}
.icon-basket:before {
  content: "\e04e";
}
.icon-bag:before {
  content: "\e04f";
}
.icon-action-undo:before {
  content: "\e050";
}
.icon-action-redo:before {
  content: "\e051";
}
.icon-wrench:before {
  content: "\e052";
}
.icon-umbrella:before {
  content: "\e053";
}
.icon-trash:before {
  content: "\e054";
}
.icon-tag:before {
  content: "\e055";
}
.icon-support:before {
  content: "\e056";
}
.icon-frame:before {
  content: "\e038";
}
.icon-size-fullscreen:before {
  content: "\e057";
}
.icon-size-actual:before {
  content: "\e058";
}
.icon-shuffle:before {
  content: "\e059";
}
.icon-share-alt:before {
  content: "\e05a";
}
.icon-share:before {
  content: "\e05b";
}
.icon-rocket:before {
  content: "\e05c";
}
.icon-question:before {
  content: "\e05d";
}
.icon-pie-chart:before {
  content: "\e05e";
}
.icon-pencil:before {
  content: "\e05f";
}
.icon-note:before {
  content: "\e060";
}
.icon-loop:before {
  content: "\e064";
}
.icon-home:before {
  content: "\e069";
}
.icon-grid:before {
  content: "\e06a";
}
.icon-graph:before {
  content: "\e06b";
}
.icon-microphone:before {
  content: "\e063";
}
.icon-music-tone-alt:before {
  content: "\e061";
}
.icon-music-tone:before {
  content: "\e062";
}
.icon-earphones-alt:before {
  content: "\e03c";
}
.icon-earphones:before {
  content: "\e03d";
}
.icon-equalizer:before {
  content: "\e06c";
}
.icon-like:before {
  content: "\e068";
}
.icon-dislike:before {
  content: "\e06d";
}
.icon-control-start:before {
  content: "\e06f";
}
.icon-control-rewind:before {
  content: "\e070";
}
.icon-control-play:before {
  content: "\e071";
}
.icon-control-pause:before {
  content: "\e072";
}
.icon-control-forward:before {
  content: "\e073";
}
.icon-control-end:before {
  content: "\e074";
}
.icon-volume-1:before {
  content: "\e09f";
}
.icon-volume-2:before {
  content: "\e0a0";
}
.icon-volume-off:before {
  content: "\e0a1";
}
.icon-calendar:before {
  content: "\e075";
}
.icon-bulb:before {
  content: "\e076";
}
.icon-chart:before {
  content: "\e077";
}
.icon-ban:before {
  content: "\e07c";
}
.icon-bubble:before {
  content: "\e07d";
}
.icon-camrecorder:before {
  content: "\e07e";
}
.icon-camera:before {
  content: "\e07f";
}
.icon-cloud-download:before {
  content: "\e083";
}
.icon-cloud-upload:before {
  content: "\e084";
}
.icon-envelope:before {
  content: "\e086";
}
.icon-eye:before {
  content: "\e087";
}
.icon-flag:before {
  content: "\e088";
}
.icon-heart:before {
  content: "\e08a";
}
.icon-info:before {
  content: "\e08b";
}
.icon-key:before {
  content: "\e08c";
}
.icon-link:before {
  content: "\e08d";
}
.icon-lock:before {
  content: "\e08e";
}
.icon-lock-open:before {
  content: "\e08f";
}
.icon-magnifier:before {
  content: "\e090";
}
.icon-magnifier-add:before {
  content: "\e091";
}
.icon-magnifier-remove:before {
  content: "\e092";
}
.icon-paper-clip:before {
  content: "\e093";
}
.icon-paper-plane:before {
  content: "\e094";
}
.icon-power:before {
  content: "\e097";
}
.icon-refresh:before {
  content: "\e098";
}
.icon-reload:before {
  content: "\e099";
}
.icon-settings:before {
  content: "\e09a";
}
.icon-star:before {
  content: "\e09b";
}
.icon-symbol-female:before {
  content: "\e09c";
}
.icon-symbol-male:before {
  content: "\e09d";
}
.icon-target:before {
  content: "\e09e";
}
.icon-credit-card:before {
  content: "\e025";
}
.icon-paypal:before {
  content: "\e608";
}
.icon-social-tumblr:before {
  content: "\e00a";
}
.icon-social-twitter:before {
  content: "\e009";
}
.icon-social-facebook:before {
  content: "\e00b";
}
.icon-social-instagram:before {
  content: "\e609";
}
.icon-social-linkedin:before {
  content: "\e60a";
}
.icon-social-pinterest:before {
  content: "\e60b";
}
.icon-social-github:before {
  content: "\e60c";
}
.icon-social-google:before {
  content: "\e60d";
}
.icon-social-reddit:before {
  content: "\e60e";
}
.icon-social-skype:before {
  content: "\e60f";
}
.icon-social-dribbble:before {
  content: "\e00d";
}
.icon-social-behance:before {
  content: "\e610";
}
.icon-social-foursqare:before {
  content: "\e611";
}
.icon-social-soundcloud:before {
  content: "\e612";
}
.icon-social-spotify:before {
  content: "\e613";
}
.icon-social-stumbleupon:before {
  content: "\e614";
}
.icon-social-youtube:before {
  content: "\e008";
}
.icon-social-dropbox:before {
  content: "\e00c";
}
.icon-social-vkontakte:before {
  content: "\e618";
}
.icon-social-steam:before {
  content: "\e620";
}
