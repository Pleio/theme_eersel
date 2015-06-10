<?php

?>
/* <style> */
.elgg-icon {
  display: inline-block;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* makes the font 33% larger relative to the icon container */
.elgg-icon-lg {
  font-size: 1.33333em;
  line-height: 0.75em;
  vertical-align: -15%;
}

.elgg-icon-2x {
  font-size: 2em;
}

.elgg-icon-3x {
  font-size: 3em;
}

.elgg-icon-4x {
  font-size: 4em;
}

.elgg-icon-5x {
  font-size: 5em;
}

.elgg-icon-fw {
  width: 1.28571em;
  text-align: center;
}

.elgg-icon-ul {
  padding-left: 0;
  margin-left: 2.14286em;
  list-style-type: none;
}
.elgg-icon-ul > li {
  position: relative;
}

.elgg-icon-li {
  position: absolute;
  left: -2.14286em;
  width: 2.14286em;
  top: 0.14286em;
  text-align: center;
}
.elgg-icon-li.elgg-icon-lg {
  left: -1.85714em;
}

.elgg-icon-border {
  padding: .2em .25em .15em;
  border: solid 0.08em #eeeeee;
  border-radius: .1em;
}

.pull-right {
  float: right;
}

.pull-left {
  float: left;
}

.elgg-icon.pull-left {
  margin-right: .3em;
}
.elgg-icon.pull-right {
  margin-left: .3em;
}

.elgg-icon-spin {
  -webkit-animation: spin 2s infinite linear;
  -moz-animation: spin 2s infinite linear;
  -o-animation: spin 2s infinite linear;
  animation: spin 2s infinite linear;
}

@-moz-keyframes spin {
  0% {
    -moz-transform: rotate(0deg);
  }

  100% {
    -moz-transform: rotate(359deg);
  }
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }

  100% {
    -webkit-transform: rotate(359deg);
  }
}

@-o-keyframes spin {
  0% {
    -o-transform: rotate(0deg);
  }

  100% {
    -o-transform: rotate(359deg);
  }
}

@-ms-keyframes spin {
  0% {
    -ms-transform: rotate(0deg);
  }

  100% {
    -ms-transform: rotate(359deg);
  }
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(359deg);
  }
}

.elgg-icon-rotate-90 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=$rotation);
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}

.elgg-icon-rotate-180 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=$rotation);
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}

.elgg-icon-rotate-270 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=$rotation);
  -webkit-transform: rotate(270deg);
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -o-transform: rotate(270deg);
  transform: rotate(270deg);
}

.elgg-icon-flip-horizontal {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=$rotation);
  -webkit-transform: scale(-1, 1);
  -moz-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  -o-transform: scale(-1, 1);
  transform: scale(-1, 1);
}

.elgg-icon-flip-vertical {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=$rotation);
  -webkit-transform: scale(1, -1);
  -moz-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  -o-transform: scale(1, -1);
  transform: scale(1, -1);
}

.elgg-icon-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}

.elgg-icon-stack-1x, .elgg-icon-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}

.elgg-icon-stack-1x {
  line-height: inherit;
}

.elgg-icon-stack-2x {
  font-size: 2em;
}

.elgg-icon-inverse {
  color: white;
}

/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.elgg-icon-glass:before {
  content: "\f000";
}

.elgg-icon-music:before {
  content: "\f001";
}

.elgg-icon-search:before {
  content: "\f002";
}

.elgg-icon-envelope-o:before {
  content: "\f003";
}

.elgg-icon-heart:before {
  content: "\f004";
}

.elgg-icon-star:before {
  content: "\f005";
}

.elgg-icon-star-o:before {
  content: "\f006";
}

.elgg-icon-user:before {
  content: "\f007";
}

.elgg-icon-film:before {
  content: "\f008";
}

.elgg-icon-th-large:before {
  content: "\f009";
}

.elgg-icon-th:before {
  content: "\f00a";
}

.elgg-icon-th-list:before {
  content: "\f00b";
}

.elgg-icon-check:before {
  content: "\f00c";
}

.elgg-icon-times:before {
  content: "\f00d";
}

.elgg-icon-search-plus:before {
  content: "\f00e";
}

.elgg-icon-search-minus:before {
  content: "\f010";
}

.elgg-icon-power-off:before {
  content: "\f011";
}

.elgg-icon-signal:before {
  content: "\f012";
}

.elgg-icon-gear:before,
.elgg-icon-cog:before {
  content: "\f013";
}

.elgg-icon-trash-o:before {
  content: "\f014";
}

.elgg-icon-home:before {
  content: "\f015";
}

.elgg-icon-file-o:before {
  content: "\f016";
}

.elgg-icon-clock-o:before {
  content: "\f017";
}

.elgg-icon-road:before {
  content: "\f018";
}

.elgg-icon-download:before {
  content: "\f019";
}

.elgg-icon-arrow-circle-o-down:before {
  content: "\f01a";
}

.elgg-icon-arrow-circle-o-up:before {
  content: "\f01b";
}

.elgg-icon-inbox:before {
  content: "\f01c";
}

.elgg-icon-play-circle-o:before {
  content: "\f01d";
}

.elgg-icon-rotate-right:before,
.elgg-icon-repeat:before {
  content: "\f01e";
}

.elgg-icon-refresh:before {
  content: "\f021";
}

.elgg-icon-list-alt:before {
  content: "\f022";
}

.elgg-icon-lock:before {
  content: "\f023";
}

.elgg-icon-flag:before {
  content: "\f024";
}

.elgg-icon-headphones:before {
  content: "\f025";
}

.elgg-icon-volume-off:before {
  content: "\f026";
}

.elgg-icon-volume-down:before {
  content: "\f027";
}

.elgg-icon-volume-up:before {
  content: "\f028";
}

.elgg-icon-qrcode:before {
  content: "\f029";
}

.elgg-icon-barcode:before {
  content: "\f02a";
}

.elgg-icon-tag:before {
  content: "\f02c";
}

.elgg-icon-tags:before {
  content: "\f02c";
}

.elgg-icon-book:before {
  content: "\f02d";
}

.elgg-icon-bookmark:before {
  content: "\f02e";
}

.elgg-icon-print:before {
  content: "\f02f";
}

.elgg-icon-camera:before {
  content: "\f030";
}

.elgg-icon-font:before {
  content: "\f031";
}

.elgg-icon-bold:before {
  content: "\f032";
}

.elgg-icon-italic:before {
  content: "\f033";
}

.elgg-icon-text-height:before {
  content: "\f034";
}

.elgg-icon-text-width:before {
  content: "\f035";
}

.elgg-icon-align-left:before {
  content: "\f036";
}

.elgg-icon-align-center:before {
  content: "\f037";
}

.elgg-icon-align-right:before {
  content: "\f038";
}

.elgg-icon-align-justify:before {
  content: "\f039";
}

.elgg-icon-list:before {
  content: "\f03a";
}

.elgg-icon-dedent:before,
.elgg-icon-outdent:before {
  content: "\f03b";
}

.elgg-icon-indent:before {
  content: "\f03c";
}

.elgg-icon-video-camera:before {
  content: "\f03d";
}

.elgg-icon-picture-o:before {
  content: "\f03e";
}

.elgg-icon-pencil:before {
  content: "\f040";
}

.elgg-icon-map-marker:before {
  content: "\f041";
}

.elgg-icon-adjust:before {
  content: "\f042";
}

.elgg-icon-tint:before {
  content: "\f043";
}

.elgg-icon-edit:before,
.elgg-icon-pencil-square-o:before {
  content: "\f044";
}

.elgg-icon-share-square-o:before {
  content: "\f045";
}

.elgg-icon-check-square-o:before {
  content: "\f046";
}

.elgg-icon-arrows:before {
  content: "\f047";
}

.elgg-icon-step-backward:before {
  content: "\f048";
}

.elgg-icon-fast-backward:before {
  content: "\f049";
}

.elgg-icon-backward:before {
  content: "\f04a";
}

.elgg-icon-play:before {
  content: "\f04b";
}

.elgg-icon-pause:before {
  content: "\f04c";
}

.elgg-icon-stop:before {
  content: "\f04d";
}

.elgg-icon-forward:before {
  content: "\f04e";
}

.elgg-icon-fast-forward:before {
  content: "\f050";
}

.elgg-icon-step-forward:before {
  content: "\f051";
}

.elgg-icon-eject:before {
  content: "\f052";
}

.elgg-icon-chevron-left:before {
  content: "\f053";
}

.elgg-icon-chevron-right:before {
  content: "\f054";
}

.elgg-icon-plus-circle:before {
  content: "\f055";
}

.elgg-icon-minus-circle:before {
  content: "\f056";
}

.elgg-icon-times-circle:before {
  content: "\f057";
}

.elgg-icon-check-circle:before {
  content: "\f058";
}

.elgg-icon-question-circle:before {
  content: "\f059";
}

.elgg-icon-info-circle:before {
  content: "\f05a";
}

.elgg-icon-crosshairs:before {
  content: "\f05b";
}

.elgg-icon-times-circle-o:before {
  content: "\f05c";
}

.elgg-icon-check-circle-o:before {
  content: "\f05d";
}

.elgg-icon-ban:before {
  content: "\f05e";
}

.elgg-icon-arrow-left:before {
  content: "\f060";
}

.elgg-icon-arrow-right:before {
  content: "\f061";
}

.elgg-icon-arrow-up:before {
  content: "\f062";
}

.elgg-icon-arrow-down:before {
  content: "\f063";
}

.elgg-icon-mail-forward:before,
.elgg-icon-share:before {
  content: "\f064";
}

.elgg-icon-expand:before {
  content: "\f065";
}

.elgg-icon-compress:before {
  content: "\f066";
}

.elgg-icon-plus:before {
  content: "\f067";
}

.elgg-icon-minus:before {
  content: "\f068";
}

.elgg-icon-asterisk:before {
  content: "\f069";
}

.elgg-icon-exclamation-circle:before {
  content: "\f06a";
}

.elgg-icon-gift:before {
  content: "\f06b";
}

.elgg-icon-leaf:before {
  content: "\f06c";
}

.elgg-icon-fire:before {
  content: "\f06d";
}

.elgg-icon-eye:before {
  content: "\f06e";
}

.elgg-icon-eye-slash:before {
  content: "\f070";
}

.elgg-icon-warning:before,
.elgg-icon-exclamation-triangle:before {
  content: "\f071";
}

.elgg-icon-plane:before {
  content: "\f072";
}

.elgg-icon-calendar:before {
  content: "\f073";
}

.elgg-icon-random:before {
  content: "\f074";
}

.elgg-icon-comment:before {
  content: "\f075";
}

.elgg-icon-magnet:before {
  content: "\f076";
}

.elgg-icon-chevron-up:before {
  content: "\f077";
}

.elgg-icon-chevron-down:before {
  content: "\f078";
}

.elgg-icon-retweet:before {
  content: "\f079";
}

.elgg-icon-shopping-cart:before {
  content: "\f07a";
}

.elgg-icon-folder:before {
  content: "\f07b";
}

.elgg-icon-folder-open:before {
  content: "\f07c";
}

.elgg-icon-arrows-v:before {
  content: "\f07d";
}

.elgg-icon-arrows-h:before {
  content: "\f07e";
}

.elgg-icon-bar-chart-o:before {
  content: "\f080";
}

.elgg-icon-twitter-square:before {
  content: "\f081";
}

.elgg-icon-facebook-square:before {
  content: "\f082";
}

.elgg-icon-camera-retro:before {
  content: "\f083";
}

.elgg-icon-key:before {
  content: "\f084";
}

.elgg-icon-gears:before,
.elgg-icon-cogs:before {
  content: "\f085";
}

.elgg-icon-comments:before {
  content: "\f086";
}

.elgg-icon-thumbs-o-up:before {
  content: "\f087";
}

.elgg-icon-thumbs-o-down:before {
  content: "\f088";
}

.elgg-icon-star-half:before {
  content: "\f089";
}

.elgg-icon-heart-o:before {
  content: "\f08a";
}

.elgg-icon-sign-out:before {
  content: "\f08b";
}

.elgg-icon-linkedin-square:before {
  content: "\f08c";
}

.elgg-icon-thumb-tack:before {
  content: "\f08d";
}

.elgg-icon-external-link:before {
  content: "\f08e";
}

.elgg-icon-sign-in:before {
  content: "\f090";
}

.elgg-icon-trophy:before {
  content: "\f091";
}

.elgg-icon-github-square:before {
  content: "\f092";
}

.elgg-icon-upload:before {
  content: "\f093";
}

.elgg-icon-lemon-o:before {
  content: "\f094";
}

.elgg-icon-phone:before {
  content: "\f095";
}

.elgg-icon-square-o:before {
  content: "\f096";
}

.elgg-icon-bookmark-o:before {
  content: "\f097";
}

.elgg-icon-phone-square:before {
  content: "\f098";
}

.elgg-icon-twitter:before {
  content: "\f099";
}

.elgg-icon-facebook:before {
  content: "\f09a";
}

.elgg-icon-github:before {
  content: "\f09b";
}

.elgg-icon-unlock:before {
  content: "\f09c";
}

.elgg-icon-credit-card:before {
  content: "\f09d";
}

.elgg-icon-rss:before {
  content: "\f09e";
}

.elgg-icon-hdd-o:before {
  content: "\f0a0";
}

.elgg-icon-bullhorn:before {
  content: "\f0a1";
}

.elgg-icon-bell:before {
  content: "\f0f3";
}

.elgg-icon-certificate:before {
  content: "\f0a3";
}

.elgg-icon-hand-o-right:before {
  content: "\f0a4";
}

.elgg-icon-hand-o-left:before {
  content: "\f0a5";
}

.elgg-icon-hand-o-up:before {
  content: "\f0a6";
}

.elgg-icon-hand-o-down:before {
  content: "\f0a7";
}

.elgg-icon-arrow-circle-left:before {
  content: "\f0a8";
}

.elgg-icon-arrow-circle-right:before {
  content: "\f0a9";
}

.elgg-icon-arrow-circle-up:before {
  content: "\f0aa";
}

.elgg-icon-arrow-circle-down:before {
  content: "\f0ab";
}

.elgg-icon-globe:before {
  content: "\f0ac";
}

.elgg-icon-wrench:before {
  content: "\f0ad";
}

.elgg-icon-tasks:before {
  content: "\f0ae";
}

.elgg-icon-filter:before {
  content: "\f0b0";
}

.elgg-icon-briefcase:before {
  content: "\f0b1";
}

.elgg-icon-arrows-alt:before {
  content: "\f0b2";
}

.elgg-icon-group:before,
.elgg-icon-users:before {
  content: "\f0c0";
}

.elgg-icon-chain:before,
.elgg-icon-link:before {
  content: "\f0c1";
}

.elgg-icon-cloud:before {
  content: "\f0c2";
}

.elgg-icon-flask:before {
  content: "\f0c3";
}

.elgg-icon-cut:before,
.elgg-icon-scissors:before {
  content: "\f0c4";
}

.elgg-icon-copy:before,
.elgg-icon-files-o:before {
  content: "\f0c5";
}

.elgg-icon-paperclip:before {
  content: "\f0c6";
}

.elgg-icon-save:before,
.elgg-icon-floppy-o:before {
  content: "\f0c7";
}

.elgg-icon-square:before {
  content: "\f0c8";
}

.elgg-icon-bars:before {
  content: "\f0c9";
}

.elgg-icon-list-ul:before {
  content: "\f0ca";
}

.elgg-icon-list-ol:before {
  content: "\f0cb";
}

.elgg-icon-strikethrough:before {
  content: "\f0cc";
}

.elgg-icon-underline:before {
  content: "\f0cd";
}

.elgg-icon-table:before {
  content: "\f0ce";
}

.elgg-icon-magic:before {
  content: "\f0d0";
}

.elgg-icon-truck:before {
  content: "\f0d1";
}

.elgg-icon-pinterest:before {
  content: "\f0d2";
}

.elgg-icon-pinterest-square:before {
  content: "\f0d3";
}

.elgg-icon-google-plus-square:before {
  content: "\f0d4";
}

.elgg-icon-google-plus:before {
  content: "\f0d5";
}

.elgg-icon-money:before {
  content: "\f0d6";
}

.elgg-icon-caret-down:before {
  content: "\f0d7";
}

.elgg-icon-caret-up:before {
  content: "\f0d8";
}

.elgg-icon-caret-left:before {
  content: "\f0d9";
}

.elgg-icon-caret-right:before {
  content: "\f0da";
}

.elgg-icon-columns:before {
  content: "\f0db";
}

.elgg-icon-unsorted:before,
.elgg-icon-sort:before {
  content: "\f0dc";
}

.elgg-icon-sort-down:before,
.elgg-icon-sort-asc:before {
  content: "\f0dd";
}

.elgg-icon-sort-up:before,
.elgg-icon-sort-desc:before {
  content: "\f0de";
}

.elgg-icon-envelope:before {
  content: "\f0e0";
}

.elgg-icon-linkedin:before {
  content: "\f0e1";
}

.elgg-icon-rotate-left:before,
.elgg-icon-undo:before {
  content: "\f0e2";
}

.elgg-icon-legal:before,
.elgg-icon-gavel:before {
  content: "\f0e3";
}

.elgg-icon-dashboard:before,
.elgg-icon-tachometer:before {
  content: "\f0e4";
}

.elgg-icon-comment-o:before {
  content: "\f0e5";
}

.elgg-icon-comments-o:before {
  content: "\f0e6";
}

.elgg-icon-flash:before,
.elgg-icon-bolt:before {
  content: "\f0e7";
}

.elgg-icon-sitemap:before {
  content: "\f0e8";
}

.elgg-icon-umbrella:before {
  content: "\f0e9";
}

.elgg-icon-paste:before,
.elgg-icon-clipboard:before {
  content: "\f0ea";
}

.elgg-icon-lightbulb-o:before {
  content: "\f0eb";
}

.elgg-icon-exchange:before {
  content: "\f0ec";
}

.elgg-icon-cloud-download:before {
  content: "\f0ed";
}

.elgg-icon-cloud-upload:before {
  content: "\f0ee";
}

.elgg-icon-user-md:before {
  content: "\f0f0";
}

.elgg-icon-stethoscope:before {
  content: "\f0f1";
}

.elgg-icon-suitcase:before {
  content: "\f0f2";
}

.elgg-icon-bell-o:before {
  content: "\f0a2";
}

.elgg-icon-coffee:before {
  content: "\f0f4";
}

.elgg-icon-cutlery:before {
  content: "\f0f5";
}

.elgg-icon-file-text-o:before {
  content: "\f0f6";
}

.elgg-icon-building-o:before {
  content: "\f0f7";
}

.elgg-icon-hospital-o:before {
  content: "\f0f8";
}

.elgg-icon-ambulance:before {
  content: "\f0f9";
}

.elgg-icon-medkit:before {
  content: "\f0fa";
}

.elgg-icon-fighter-jet:before {
  content: "\f0fb";
}

.elgg-icon-beer:before {
  content: "\f0fc";
}

.elgg-icon-h-square:before {
  content: "\f0fd";
}

.elgg-icon-plus-square:before {
  content: "\f0fe";
}

.elgg-icon-angle-double-left:before {
  content: "\f100";
}

.elgg-icon-angle-double-right:before {
  content: "\f101";
}

.elgg-icon-angle-double-up:before {
  content: "\f102";
}

.elgg-icon-angle-double-down:before {
  content: "\f103";
}

.elgg-icon-angle-left:before {
  content: "\f104";
}

.elgg-icon-angle-right:before {
  content: "\f105";
}

.elgg-icon-angle-up:before {
  content: "\f106";
}

.elgg-icon-angle-down:before {
  content: "\f107";
}

.elgg-icon-desktop:before {
  content: "\f108";
}

.elgg-icon-laptop:before {
  content: "\f109";
}

.elgg-icon-tablet:before {
  content: "\f10a";
}

.elgg-icon-mobile-phone:before,
.elgg-icon-mobile:before {
  content: "\f10b";
}

.elgg-icon-circle-o:before {
  content: "\f10c";
}

.elgg-icon-quote-left:before {
  content: "\f10d";
}

.elgg-icon-quote-right:before {
  content: "\f10e";
}

.elgg-icon-spinner:before {
  content: "\f110";
}

.elgg-icon-circle:before {
  content: "\f111";
}

.elgg-icon-mail-reply:before,
.elgg-icon-reply:before {
  content: "\f112";
}

.elgg-icon-github-alt:before {
  content: "\f113";
}

.elgg-icon-folder-o:before {
  content: "\f114";
}

.elgg-icon-folder-open-o:before {
  content: "\f115";
}

.elgg-icon-smile-o:before {
  content: "\f118";
}

.elgg-icon-frown-o:before {
  content: "\f119";
}

.elgg-icon-meh-o:before {
  content: "\f11a";
}

.elgg-icon-gamepad:before {
  content: "\f11b";
}

.elgg-icon-keyboard-o:before {
  content: "\f11c";
}

.elgg-icon-flag-o:before {
  content: "\f11d";
}

.elgg-icon-flag-checkered:before {
  content: "\f11e";
}

.elgg-icon-terminal:before {
  content: "\f120";
}

.elgg-icon-code:before {
  content: "\f121";
}

.elgg-icon-reply-all:before {
  content: "\f122";
}

.elgg-icon-mail-reply-all:before {
  content: "\f122";
}

.elgg-icon-star-half-empty:before,
.elgg-icon-star-half-full:before,
.elgg-icon-star-half-o:before {
  content: "\f123";
}

.elgg-icon-location-arrow:before {
  content: "\f124";
}

.elgg-icon-crop:before {
  content: "\f125";
}

.elgg-icon-code-fork:before {
  content: "\f126";
}

.elgg-icon-unlink:before,
.elgg-icon-chain-broken:before {
  content: "\f127";
}

.elgg-icon-question:before {
  content: "\f128";
}

.elgg-icon-info:before {
  content: "\f129";
}

.elgg-icon-exclamation:before {
  content: "\f12a";
}

.elgg-icon-superscript:before {
  content: "\f12b";
}

.elgg-icon-subscript:before {
  content: "\f12c";
}

.elgg-icon-eraser:before {
  content: "\f12d";
}

.elgg-icon-puzzle-piece:before {
  content: "\f12e";
}

.elgg-icon-microphone:before {
  content: "\f130";
}

.elgg-icon-microphone-slash:before {
  content: "\f131";
}

.elgg-icon-shield:before {
  content: "\f132";
}

.elgg-icon-calendar-o:before {
  content: "\f133";
}

.elgg-icon-fire-extinguisher:before {
  content: "\f134";
}

.elgg-icon-rocket:before {
  content: "\f135";
}

.elgg-icon-maxcdn:before {
  content: "\f136";
}

.elgg-icon-chevron-circle-left:before {
  content: "\f137";
}

.elgg-icon-chevron-circle-right:before {
  content: "\f138";
}

.elgg-icon-chevron-circle-up:before {
  content: "\f139";
}

.elgg-icon-chevron-circle-down:before {
  content: "\f13a";
}

.elgg-icon-html5:before {
  content: "\f13b";
}

.elgg-icon-css3:before {
  content: "\f13c";
}

.elgg-icon-anchor:before {
  content: "\f13d";
}

.elgg-icon-unlock-alt:before {
  content: "\f13e";
}

.elgg-icon-bullseye:before {
  content: "\f140";
}

.elgg-icon-ellipsis-h:before {
  content: "\f141";
}

.elgg-icon-ellipsis-v:before {
  content: "\f142";
}

.elgg-icon-rss-square:before {
  content: "\f143";
}

.elgg-icon-play-circle:before {
  content: "\f144";
}

.elgg-icon-ticket:before {
  content: "\f145";
}

.elgg-icon-minus-square:before {
  content: "\f146";
}

.elgg-icon-minus-square-o:before {
  content: "\f147";
}

.elgg-icon-level-up:before {
  content: "\f148";
}

.elgg-icon-level-down:before {
  content: "\f149";
}

.elgg-icon-check-square:before {
  content: "\f14a";
}

.elgg-icon-pencil-square:before {
  content: "\f14b";
}

.elgg-icon-external-link-square:before {
  content: "\f14c";
}

.elgg-icon-share-square:before {
  content: "\f14d";
}

.elgg-icon-compass:before {
  content: "\f14e";
}

.elgg-icon-toggle-down:before,
.elgg-icon-caret-square-o-down:before {
  content: "\f150";
}

.elgg-icon-toggle-up:before,
.elgg-icon-caret-square-o-up:before {
  content: "\f151";
}

.elgg-icon-toggle-right:before,
.elgg-icon-caret-square-o-right:before {
  content: "\f152";
}

.elgg-icon-euro:before,
.elgg-icon-eur:before {
  content: "\f153";
}

.elgg-icon-gbp:before {
  content: "\f154";
}

.elgg-icon-dollar:before,
.elgg-icon-usd:before {
  content: "\f155";
}

.elgg-icon-rupee:before,
.elgg-icon-inr:before {
  content: "\f156";
}

.elgg-icon-cny:before,
.elgg-icon-rmb:before,
.elgg-icon-yen:before,
.elgg-icon-jpy:before {
  content: "\f157";
}

.elgg-icon-ruble:before,
.elgg-icon-rouble:before,
.elgg-icon-rub:before {
  content: "\f158";
}

.elgg-icon-won:before,
.elgg-icon-krw:before {
  content: "\f159";
}

.elgg-icon-bitcoin:before,
.elgg-icon-btc:before {
  content: "\f15a";
}

.elgg-icon-file:before {
  content: "\f15b";
}

.elgg-icon-file-text:before {
  content: "\f15c";
}

.elgg-icon-sort-alpha-asc:before {
  content: "\f15d";
}

.elgg-icon-sort-alpha-desc:before {
  content: "\f15e";
}

.elgg-icon-sort-amount-asc:before {
  content: "\f160";
}

.elgg-icon-sort-amount-desc:before {
  content: "\f161";
}

.elgg-icon-sort-numeric-asc:before {
  content: "\f162";
}

.elgg-icon-sort-numeric-desc:before {
  content: "\f163";
}

.elgg-icon-thumbs-up:before {
  content: "\f164";
}

.elgg-icon-thumbs-down:before {
  content: "\f165";
}

.elgg-icon-youtube-square:before {
  content: "\f166";
}

.elgg-icon-youtube:before {
  content: "\f167";
}

.elgg-icon-xing:before {
  content: "\f168";
}

.elgg-icon-xing-square:before {
  content: "\f169";
}

.elgg-icon-youtube-play:before {
  content: "\f16a";
}

.elgg-icon-dropbox:before {
  content: "\f16b";
}

.elgg-icon-stack-overflow:before {
  content: "\f16c";
}

.elgg-icon-instagram:before {
  content: "\f16d";
}

.elgg-icon-flickr:before {
  content: "\f16e";
}

.elgg-icon-adn:before {
  content: "\f170";
}

.elgg-icon-bitbucket:before {
  content: "\f171";
}

.elgg-icon-bitbucket-square:before {
  content: "\f172";
}

.elgg-icon-tumblr:before {
  content: "\f173";
}

.elgg-icon-tumblr-square:before {
  content: "\f174";
}

.elgg-icon-long-arrow-down:before {
  content: "\f175";
}

.elgg-icon-long-arrow-up:before {
  content: "\f176";
}

.elgg-icon-long-arrow-left:before {
  content: "\f177";
}

.elgg-icon-long-arrow-right:before {
  content: "\f178";
}

.elgg-icon-apple:before {
  content: "\f179";
}

.elgg-icon-windows:before {
  content: "\f17a";
}

.elgg-icon-android:before {
  content: "\f17b";
}

.elgg-icon-linux:before {
  content: "\f17c";
}

.elgg-icon-dribbble:before {
  content: "\f17d";
}

.elgg-icon-skype:before {
  content: "\f17e";
}

.elgg-icon-foursquare:before {
  content: "\f180";
}

.elgg-icon-trello:before {
  content: "\f181";
}

.elgg-icon-female:before {
  content: "\f182";
}

.elgg-icon-male:before {
  content: "\f183";
}

.elgg-icon-gittip:before {
  content: "\f184";
}

.elgg-icon-sun-o:before {
  content: "\f185";
}

.elgg-icon-moon-o:before {
  content: "\f186";
}

.elgg-icon-archive:before {
  content: "\f187";
}

.elgg-icon-bug:before {
  content: "\f188";
}

.elgg-icon-vk:before {
  content: "\f189";
}

.elgg-icon-weibo:before {
  content: "\f18a";
}

.elgg-icon-renren:before {
  content: "\f18b";
}

.elgg-icon-pagelines:before {
  content: "\f18c";
}

.elgg-icon-stack-exchange:before {
  content: "\f18d";
}

.elgg-icon-arrow-circle-o-right:before {
  content: "\f18e";
}

.elgg-icon-arrow-circle-o-left:before {
  content: "\f190";
}

.elgg-icon-toggle-left:before,
.elgg-icon-caret-square-o-left:before {
  content: "\f191";
}

.elgg-icon-dot-circle-o:before {
  content: "\f192";
}

.elgg-icon-wheelchair:before {
  content: "\f193";
}

.elgg-icon-vimeo-square:before {
  content: "\f194";
}

.elgg-icon-turkish-lira:before,
.elgg-icon-try:before {
  content: "\f195";
}

.elgg-icon-plus-square-o:before {
  content: "\f196";
}

/* ***************************************
				ICONS
*************************************** */
.elgg-icon-arrow-left:before {
  content: "\f060";
}

.elgg-icon-arrow-right:before {
  content: "\f061";
}

.elgg-icon-arrow-two-head:before {
  content: "\f07e";
}

.elgg-icon-attention:before {
  content: "\f071";
}

.elgg-icon-calendar:before {
  content: "\f073";
}

.elgg-icon-cell-phone:before {
  content: "\f095";
}

.elgg-icon-checkmark:before {
  content: "\f00c";
}

.elgg-icon-clip:before {
  content: "\f0c6";
}

.elgg-icon-cursor-drag-arrow:before {
  content: "\f00d";
}

.elgg-icon-delete-alt:before {
  content: "\f057";
}

.elgg-icon-delete:before {
  content: "\f00d";
}

.elgg-icon-download:before {
  content: "\f019";
}

.elgg-icon-eye:before {
  content: "\f06e";
}

.elgg-icon-facebook:before {
  content: "\f09a";
}

.elgg-icon-grid:before {
  content: "\f00a";
}

.elgg-icon-home:before {
  content: "\f015";
}

.elgg-icon-info:before {
  content: "\f129";
}

.elgg-icon-link:before {
  content: "\f0c1";
}

.elgg-icon-list:before {
  content: "\f00b";
}

.elgg-icon-lock-closed:before {
  content: "\f023";
}

.elgg-icon-lock-open:before {
  content: "\f09c";
}

.elgg-icon-mail-alt:before {
  content: "\f003";
}

.elgg-icon-mail:before {
  content: "\f0e0";
}

.elgg-icon-photo:before {
  content: "\f03e";
}

.elgg-icon-print-alt:before {
  content: "\f02f";
}

.elgg-icon-print:before {
  content: "\f02f";
}

.elgg-icon-push-pin-alt:before {
  content: "\f02e";
}

.elgg-icon-push-pin:before {
  content: "\f08d";
}

.elgg-icon-redo:before {
  content: "\f01e";
}

.elgg-icon-refresh:before {
  content: "\f021";
}

.elgg-icon-round-arrow-left:before {
  content: "\f190";
}

.elgg-icon-round-arrow-right:before {
  content: "\f18e";
}

.elgg-icon-round-checkmark:before {
  content: "\f046";
}

.elgg-icon-round-minus:before {
  content: "\f056";
}

.elgg-icon-round-plus:before {
  content: "\f055";
}

.elgg-icon-rss:before {
  content: "\f09e";
}

.elgg-icon-search-focus:before {
  content: "\f002";
}

.elgg-icon-search:before {
  content: "\f002";
}

.elgg-icon-settings-alt:before {
  content: "\f085";
}

.elgg-icon-settings:before {
  content: "\f013";
}

.elgg-icon-share:before {
  content: "\f064";
}

.elgg-icon-shop-cart:before {
  content: "\f07a";
}

.elgg-icon-speech-bubble-alt:before {
  content: "\f086";
}

.elgg-icon-speech-bubble:before {
  content: "\f075";
}

.elgg-icon-star-alt:before {
  content: "\f005";
}

.elgg-icon-star-empty:before {
  content: "\f006";
}

.elgg-icon-star:before {
  content: "\f005";
}

.elgg-icon-tag:before {
  content: "\f02b";
}

.elgg-icon-thumbs-down-alt:before {
  content: "\f088";
}

.elgg-icon-thumbs-down:before {
  content: "\f165";
}

.elgg-icon-thumbs-up-alt:before {
  content: "\f087";
}

.elgg-icon-thumbs-up:before {
  content: "\f164";
}

.elgg-icon-trash:before {
  content: "\f014";
}

.elgg-icon-twitter:before {
  content: "\f099";
}

.elgg-icon-undo:before {
  content: "\f0e2";
}

.elgg-icon-user:before {
  content: "\f007";
}

.elgg-icon-users:before {
  content: "\f0c0";
}

.elgg-icon-video:before {
  content: "\f008";
}

.elgg-icon-report-this {
	background: none !important;
}

.elgg-icon-report-this:before {
  content: "\f188";
}

.elgg-ajax-loader {
  background: white url('../../../../graphics/ajax_loader_bw.gif') no-repeat center center;
  min-height: 31px;
  min-width: 31px;
  margin: 1.875rem auto;
  height: 100%;
  width: 100%;
}

/* ***************************************
			AVATAR ICONS
*************************************** */
.elgg-menu-topbar .elgg-menu-item-profile img {
	border: 2px solid white;
	
	-webkit-border-radius: 6px !important;
	-moz-border-radius: 6px !important;
	border-radius: 6px !important;
	
	-ms-transform: rotate(4deg); /* IE 9 */
    -webkit-transform: rotate(4deg); /* Chrome, Safari, Opera */
    transform: rotate(4deg);
}
.elgg-avatar img {
	border: 2px solid white;
	
	-webkit-border-radius: 6px !important;
	-moz-border-radius: 6px !important;
	border-radius: 6px !important;
	
	-ms-transform: rotate(-4deg); /* IE 9 */
    -webkit-transform: rotate(-4deg); /* Chrome, Safari, Opera */
    transform: rotate(-4deg);
	
}
.elgg-avatar-tiny {
  position: relative;
  display: inline-block;
  width: 25px;
  height: auto;
  max-width: 100%;
  display: block;
  border: none;
}
.elgg-avatar-tiny a > img {
  width: 100%;
  height: auto;
  -webkit-border-radius: 0;
  border-radius: 0;
  -webkit-background-clip: border;
  -moz-background-clip: border;
  background-clip: border;
  -webkit-background-size: contain;
  -moz-background-size: contain;
  -o-background-size: contain;
  background-size: contain;
  z-index: 1;
}
.elgg-avatar-tiny > .elgg-icon-hover-menu {
  display: block;
  position: absolute;
  right: 0;
  bottom: 0;
  margin: 0;
  cursor: pointer;
  width: 0.625rem;
  height: 0.625rem;
  z-index: 2;
}
.elgg-avatar-tiny > .elgg-icon-hover-menu + * {
  padding: 0;
}
.elgg-avatar-tiny > .elgg-icon-hover-menu:before {
  content: "";
  position: absolute;
  right: 0;
  bottom: 0;
  width: 0px;
  height: 0px;
  border-style: solid;
  border-width: 0 0 0.8125rem 0.8125rem;
  border-color: transparent transparent white transparent;
  z-index: 3;
}
.elgg-avatar-tiny > .elgg-icon-hover-menu:after {
  content: "";
  position: absolute;
  right: 0;
  bottom: 0;
  margin: 0;
  width: 0px;
  height: 0px;
  border-style: solid;
  border-width: 0 0 0.625rem 0.625rem;
  border-color: transparent transparent #2a77bf transparent;
  z-index: 4;
}
@media only screen and (min-width: 40.063em) {
  .elgg-avatar-tiny > .elgg-icon-hover-menu {
    display: none;
  }
}

.elgg-avatar-small {
  position: relative;
  display: inline-block;
  width: 40px;
  height: auto;
  max-width: 100%;
  display: block;
  border: none;
}
.elgg-avatar-small a > img {
  width: 100%;
  height: auto;
  -webkit-border-radius: 0;
  border-radius: 0;
  -webkit-background-clip: border;
  -moz-background-clip: border;
  background-clip: border;
  -webkit-background-size: contain;
  -moz-background-size: contain;
  -o-background-size: contain;
  background-size: contain;
  z-index: 1;
}
.elgg-avatar-small > .elgg-icon-hover-menu {
  display: block;
  position: absolute;
  right: 0;
  bottom: 0;
  margin: 0;
  cursor: pointer;
  width: 0.75rem;
  height: 0.75rem;
  z-index: 2;
}
.elgg-avatar-small > .elgg-icon-hover-menu + * {
  padding: 0;
}
.elgg-avatar-small > .elgg-icon-hover-menu:before {
  content: "";
  position: absolute;
  right: 0;
  bottom: 0;
  width: 0px;
  height: 0px;
  border-style: solid;
  border-width: 0 0 0.9375rem 0.9375rem;
  border-color: transparent transparent white transparent;
  z-index: 3;
}
.elgg-avatar-small > .elgg-icon-hover-menu:after {
  content: "";
  position: absolute;
  right: 0;
  bottom: 0;
  margin: 0;
  width: 0px;
  height: 0px;
  border-style: solid;
  border-width: 0 0 0.75rem 0.75rem;
  border-color: transparent transparent #2a77bf transparent;
  z-index: 4;
}
@media only screen and (min-width: 40.063em) {
  .elgg-avatar-small > .elgg-icon-hover-menu {
    display: none;
  }
}

.elgg-avatar-medium {
  position: relative;
  display: inline-block;
  width: 100px;
  height: auto;
  max-width: 100%;
  display: block;
  border: none;
}
.elgg-avatar-medium a > img {
  width: 100%;
  height: auto;
  -webkit-border-radius: 0;
  border-radius: 0;
  -webkit-background-clip: border;
  -moz-background-clip: border;
  background-clip: border;
  -webkit-background-size: contain;
  -moz-background-size: contain;
  -o-background-size: contain;
  background-size: contain;
  z-index: 1;
}
.elgg-avatar-medium > .elgg-icon-hover-menu {
  display: block;
  position: absolute;
  right: 0;
  bottom: 0;
  margin: 0;
  cursor: pointer;
  width: 0.9375rem;
  height: 0.9375rem;
  z-index: 2;
}
.elgg-avatar-medium > .elgg-icon-hover-menu + * {
  padding: 0;
}
.elgg-avatar-medium > .elgg-icon-hover-menu:before {
  content: "";
  position: absolute;
  right: 0;
  bottom: 0;
  width: 0px;
  height: 0px;
  border-style: solid;
  border-width: 0 0 1.125rem 1.125rem;
  border-color: transparent transparent white transparent;
  z-index: 3;
}
.elgg-avatar-medium > .elgg-icon-hover-menu:after {
  content: "";
  position: absolute;
  right: 0;
  bottom: 0;
  margin: 0;
  width: 0px;
  height: 0px;
  border-style: solid;
  border-width: 0 0 0.9375rem 0.9375rem;
  border-color: transparent transparent #2a77bf transparent;
  z-index: 4;
}
@media only screen and (min-width: 40.063em) {
  .elgg-avatar-medium > .elgg-icon-hover-menu {
    display: none;
  }
}

.elgg-avatar-large {
  position: relative;
  display: inline-block;
  width: 200px;
  height: auto;
  max-width: 100%;
  display: block;
  border: none;
}
.elgg-avatar-large a > img {
  width: 100%;
  height: auto;
  -webkit-border-radius: 0;
  border-radius: 0;
  -webkit-background-clip: border;
  -moz-background-clip: border;
  background-clip: border;
  -webkit-background-size: contain;
  -moz-background-size: contain;
  -o-background-size: contain;
  background-size: contain;
  z-index: 1;
}
.elgg-avatar-large > .elgg-icon-hover-menu {
  display: block;
  position: absolute;
  right: 0;
  bottom: 0;
  margin: 0;
  cursor: pointer;
  width: 0.9375rem;
  height: 0.9375rem;
  z-index: 2;
}
.elgg-avatar-large > .elgg-icon-hover-menu + * {
  padding: 0;
}
.elgg-avatar-large > .elgg-icon-hover-menu:before {
  content: "";
  position: absolute;
  right: 0;
  bottom: 0;
  width: 0px;
  height: 0px;
  border-style: solid;
  border-width: 0 0 1.125rem 1.125rem;
  border-color: transparent transparent white transparent;
  z-index: 3;
}
.elgg-avatar-large > .elgg-icon-hover-menu:after {
  content: "";
  position: absolute;
  right: 0;
  bottom: 0;
  margin: 0;
  width: 0px;
  height: 0px;
  border-style: solid;
  border-width: 0 0 0.9375rem 0.9375rem;
  border-color: transparent transparent #2a77bf transparent;
  z-index: 4;
}
@media only screen and (min-width: 40.063em) {
  .elgg-avatar-large > .elgg-icon-hover-menu {
    display: none;
  }
}

/* ***************************************
			DISTINCT CASES
*************************************** */
.elgg-icon-push-pin-alt + a,
.elgg-icon-tag + a {
  margin-left: 10px;
}

.elgg-menu-entity .elgg-icon:hover,
.elgg-menu-river .elgg-icon:hover {
	color: #<?php echo THEME_COLOR_5;?>;
}
