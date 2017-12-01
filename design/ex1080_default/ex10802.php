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
@charset "UTF-8";
@import url("css/font-awesome.min.php");
@import url("css/font-awesome.php");
@import url("css/simple-line-icons.php");
@import url("css/glyphicons.php");
@import url("css/glyphicons-filetypes.php");
@import url("css/glyphicons-social.php");

html {
  font-family: sans-serif;
  line-height: 1.15;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%; }

body {
  margin: 0; }

article,
aside,
footer,
header,
nav,
section {
  display: block; }

h1 {
  font-size: 2em;
  margin: 0.67em 0; }

figcaption,
figure,
main {
  display: block; }

figure {
  margin: 1em 40px; }

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible; }

pre {
  font-family: monospace, monospace;
  font-size: 1em; }

a {
  background-color: transparent;
  -webkit-text-decoration-skip: objects; }

a:active,
a:hover {
  outline-width: 0; }

abbr[title] {
  border-bottom: none;
  text-decoration: underline;
  text-decoration: underline dotted; }

b,
strong {
  font-weight: inherit; }

b,
strong {
  font-weight: bolder; }

code,
kbd,
samp {
  font-family: monospace, monospace;
  font-size: 1em; }

dfn {
  font-style: italic; }

mark {
  background-color: #ff0;
  color: rgb(35,35,35); }

small {
  font-size: 80%; }

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline; }

sub {
  bottom: -0.25em; }

sup {
  top: -0.5em; }

audio,
video {
  display: inline-block; }

audio:not([controls]) {
  display: none;
  height: 0; }

img {
  border-style: none; }

svg:not(:root) {
  overflow: hidden; }

button,
input,
optgroup,
select,
textarea {
  font-family: sans-serif;
  font-size: 100%;
  line-height: 1.15;
  margin: 0; }

button,
input {
  overflow: visible; }

button,
select {
  text-transform: none; }

button,
html [type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; }

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0; }

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
  outline: 1px dotted ButtonText; }

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em; }

legend {
  box-sizing: border-box;
  color: inherit;
  display: table;
  max-width: 100%;
  padding: 0;
  white-space: normal; }

progress {
  display: inline-block;
  vertical-align: baseline; }

textarea {
  overflow: auto; }

[type="checkbox"],
[type="radio"] {
  box-sizing: border-box;
  padding: 0; }

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto; }

[type="search"] {
  -webkit-appearance: textfield;
  outline-offset: -2px; }

[type="search"]::-webkit-search-cancel-button,
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

::-webkit-file-upload-button {
  -webkit-appearance: button;
  font: inherit; }

details,
menu {
  display: block; }

summary {
  display: list-item; }

canvas {
  display: inline-block; }

template {
  display: none; }

[hidden] {
  display: none; }

@media print {
  *,
  *::before,
  *::after,
  p::first-letter,
  div::first-letter,
  blockquote::first-letter,
  li::first-letter,
  p::first-line,
  div::first-line,
  blockquote::first-line,
  li::first-line {
    text-shadow: none !important;
    box-shadow: none !important; }
  a,
  a:visited {
    text-decoration: underline; }
  abbr[title]::after {
    content: " (" attr(title) ")"; }
  pre {
    white-space: pre-wrap !important; }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid; }
  thead {
    display: table-header-group; }
  tr,
  img {
    page-break-inside: avoid; }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3; }
  h2,
  h3 {
    page-break-after: avoid; }
  .navbar {
    display: none; }
  .badge {
    border: 1px solid #000; }
  .table {
    border-collapse: collapse !important; }
    .table td,
    .table th {
      background-color: #fff !important; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important; } }

html {
  box-sizing: border-box; }

*,
*::before,
*::after {
  box-sizing: inherit; }

@-ms-viewport {
  width: device-width; }

html {
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: transparent; }

body {
  font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  font-size: 0.875rem;
  font-weight: normal;
  line-height: 1.5;
  color: rgb(35,35,35);
    background-color: rgb(11,11,11);
    border: 1px solid rgb(35,35,35); }

[tabindex="-1"]:focus {
  outline: none !important; }

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: .5rem; }

p {
  margin-top: 0;
  margin-bottom: 1rem; }

abbr[title],
abbr[data-original-title] {
  cursor: help; }

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit; }

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem; }

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0; }

dt {
  font-weight: bold; }

dd {
  margin-bottom: .5rem;
  margin-left: 0; }

blockquote {
  margin: 0 0 1rem; }

a {
  color: #FFFFFF;
  text-decoration: none; }
  a:focus, a:hover {
    color: rgb(30,30,30);
    text-decoration: none; }

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none; }
  a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
    color: inherit;
    text-decoration: none; }
  a:not([href]):not([tabindex]):focus {
    outline: 0; }

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto; }

figure {
  margin: 0 0 1rem; }

img {
  vertical-align: middle; }

[role="button"] {
  cursor: pointer; }

a,
area,
button,
[role="button"],
input,
label,
select,
summary,
textarea {
  touch-action: manipulation; }

table {
  border-collapse: collapse;
  background-color: transparent; }

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: rgb(35,35,35);
  text-align: left;
  caption-side: bottom; }

th {
  text-align: left; }

label {
  display: inline-block;
  margin-bottom: .5rem; }

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color; }

input,
button,
select,
textarea {
  line-height: inherit; }

input[type="radio"]:disabled,
input[type="checkbox"]:disabled {
  cursor: not-allowed; }

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox; }

textarea {
  resize: vertical; }

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit; }

input[type="search"] {
  -webkit-appearance: none; }

output {
  display: inline-block; }

[hidden] {
  display: none !important; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-family: inherit;
  font-weight: 250;
  line-height: 1.0;
  color: inherit; }

h1, .h1 {
  font-size: 1.0rem; }

h2, .h2 {
  font-size: 2rem; }

h3, .h3 {
  font-size: 1.75rem; }

h4, .h4 {
  font-size: 1.5rem; }

h5, .h5 {
  font-size: 1.25rem; }

h6, .h6 {
  font-size: 1rem; }

.lead {
  font-size: 1.25rem;
  font-weight: 300; }

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.1; }

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.1; }

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.1; }

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.1; }

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1); }

small,
.small {
  font-size: 80%;
  font-weight: normal; }

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3; }

.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline-item {
  display: inline-block; }
  .list-inline-item:not(:last-child) {
    margin-right: 5px; }

.initialism {
  font-size: 90%;
  text-transform: uppercase; }

.blockquote {
  padding: 0.5rem 1rem;
  margin-bottom: 1rem;
  font-size: 1.09375rem;
  border: 1px solid rgb(35,35,35); }

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: rgb(35,35,35); }
  .blockquote-footer::before {
    content: "\2014 \00A0"; }

.blockquote-reverse {
  padding-right: 1rem;
  padding-left: 0;
  text-align: right;
  border: 1px solid rgb(35,35,35);
  border-left: 0; }

.blockquote-reverse .blockquote-footer::before {
  content: ""; }

.blockquote-reverse .blockquote-footer::after {
  content: "\00A0 \2014"; }

.img-fluid {
  max-width: 100%;
  height: auto; }

.img-thumbnail {
  padding: 0.25rem;
  background-color: rgb(11,11,11);
  border: 1px solid #ddd;
  transition: all 0.2s ease-in-out;
  max-width: 100%;
  height: auto; }

.figure {
  display: inline-block; }

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1; }

.figure-caption {
  font-size: 90%;
  color: rgb(35,35,35); }

code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

code {
  padding: 0.2rem 0.4rem;
  font-size: 90%;
  color: rgb(35,35,35);
  background-color: rgb(11,11,11); }
  a > code {
    padding: 0;
    color: inherit;
    background-color: inherit; }

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 90%;
  color: rgb(35,35,35);
  background-color: rgb(35,35,35); }
  kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: bold; }

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  font-size: 90%;
  color: rgb(35,35,35); }
  pre code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    background-color: transparent;
    border-radius: 0; }

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll; }

.container {
  position: relative;
  margin-left: auto;
  margin-right: auto;
  padding-right: 15px;
  padding-left: 15px; }
  @media (min-width: 576px) {
    .container {
      padding-right: 15px;
      padding-left: 15px; } }
  @media (min-width: 768px) {
    .container {
      padding-right: 15px;
      padding-left: 15px; } }
  @media (min-width: 992px) {
    .container {
      padding-right: 15px;
      padding-left: 15px; } }
  @media (min-width: 1200px) {
    .container {
      padding-right: 15px;
      padding-left: 15px; } }
  @media (min-width: 576px) {
    .container {
      width: 540px;
      max-width: 100%; } }
  @media (min-width: 768px) {
    .container {
      width: 720px;
      max-width: 100%; } }
  @media (min-width: 992px) {
    .container {
      width: 960px;
      max-width: 100%; } }
  @media (min-width: 1200px) {
    .container {
      width: 1140px;
      max-width: 100%; } }

.container-fluid {
  position: relative;
  margin-left: auto;
  margin-right: auto;
  padding-right: 15px;
  padding-left: 15px; }
  @media (min-width: 576px) {
    .container-fluid {
      padding-right: 15px;
      padding-left: 15px; } }
  @media (min-width: 768px) {
    .container-fluid {
      padding-right: 15px;
      padding-left: 15px; } }
  @media (min-width: 992px) {
    .container-fluid {
      padding-right: 15px;
      padding-left: 15px; } }
  @media (min-width: 1200px) {
    .container-fluid {
      padding-right: 15px;
      padding-left: 15px; } }

.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px; }
  @media (min-width: 576px) {
    .row {
      margin-right: -15px;
      margin-left: -15px; } }
  @media (min-width: 768px) {
    .row {
      margin-right: -15px;
      margin-left: -15px; } }
  @media (min-width: 992px) {
    .row {
      margin-right: -15px;
      margin-left: -15px; } }
  @media (min-width: 1200px) {
    .row {
      margin-right: -15px;
      margin-left: -15px; } }

.no-gutters {
  margin-right: 0;
  margin-left: 0; }
  .no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0; }

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px; }
  @media (min-width: 576px) {
    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl {
      padding-right: 15px;
      padding-left: 15px; } }
  @media (min-width: 768px) {
    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl {
      padding-right: 15px;
      padding-left: 15px; } }
  @media (min-width: 992px) {
    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl {
      padding-right: 15px;
      padding-left: 15px; } }
  @media (min-width: 1200px) {
    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl {
      padding-right: 15px;
      padding-left: 15px; } }

.col {
  flex-basis: 0;
  flex-grow: 1;
  max-width: 100%; }

.col-auto {
  flex: 0 0 auto;
  width: auto; }

.col-1 {
  flex: 0 0 8.33333%;
  max-width: 8.33333%; }

.col-2 {
  flex: 0 0 16.66667%;
  max-width: 16.66667%; }

.col-3 {
  flex: 0 0 25%;
  max-width: 25%; }

.col-4 {
  flex: 0 0 33.33333%;
  max-width: 33.33333%; }

.col-5 {
  flex: 0 0 41.66667%;
  max-width: 41.66667%; }

.col-6 {
  flex: 0 0 50%;
  max-width: 50%; }

.col-7 {
  flex: 0 0 58.33333%;
  max-width: 58.33333%; }

.col-8 {
  flex: 0 0 66.66667%;
  max-width: 66.66667%; }

.col-9 {
  flex: 0 0 75%;
  max-width: 75%; }

.col-10 {
  flex: 0 0 83.33333%;
  max-width: 83.33333%; }

.col-11 {
  flex: 0 0 91.66667%;
  max-width: 91.66667%; }

.col-12 {
  flex: 0 0 100%;
  max-width: 100%; }

.pull-0 {
  right: auto; }

.pull-1 {
  right: 8.33333%; }

.pull-2 {
  right: 16.66667%; }

.pull-3 {
  right: 25%; }

.pull-4 {
  right: 33.33333%; }

.pull-5 {
  right: 41.66667%; }

.pull-6 {
  right: 50%; }

.pull-7 {
  right: 58.33333%; }

.pull-8 {
  right: 66.66667%; }

.pull-9 {
  right: 75%; }

.pull-10 {
  right: 83.33333%; }

.pull-11 {
  right: 91.66667%; }

.pull-12 {
  right: 100%; }

.push-0 {
  left: auto; }

.push-1 {
  left: 8.33333%; }

.push-2 {
  left: 16.66667%; }

.push-3 {
  left: 25%; }

.push-4 {
  left: 33.33333%; }

.push-5 {
  left: 41.66667%; }

.push-6 {
  left: 50%; }

.push-7 {
  left: 58.33333%; }

.push-8 {
  left: 66.66667%; }

.push-9 {
  left: 75%; }

.push-10 {
  left: 83.33333%; }

.push-11 {
  left: 91.66667%; }

.push-12 {
  left: 100%; }

.offset-1 {
  margin-left: 8.33333%; }

.offset-2 {
  margin-left: 16.66667%; }

.offset-3 {
  margin-left: 25%; }

.offset-4 {
  margin-left: 33.33333%; }

.offset-5 {
  margin-left: 41.66667%; }

.offset-6 {
  margin-left: 50%; }

.offset-7 {
  margin-left: 58.33333%; }

.offset-8 {
  margin-left: 66.66667%; }

.offset-9 {
  margin-left: 75%; }

.offset-10 {
  margin-left: 83.33333%; }

.offset-11 {
  margin-left: 91.66667%; }

@media (min-width: 576px) {
  .col-sm {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto; }
  .col-sm-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-sm-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-sm-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-sm-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-sm-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-sm-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-sm-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-sm-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-sm-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-sm-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .pull-sm-0 {
    right: auto; }
  .pull-sm-1 {
    right: 8.33333%; }
  .pull-sm-2 {
    right: 16.66667%; }
  .pull-sm-3 {
    right: 25%; }
  .pull-sm-4 {
    right: 33.33333%; }
  .pull-sm-5 {
    right: 41.66667%; }
  .pull-sm-6 {
    right: 50%; }
  .pull-sm-7 {
    right: 58.33333%; }
  .pull-sm-8 {
    right: 66.66667%; }
  .pull-sm-9 {
    right: 75%; }
  .pull-sm-10 {
    right: 83.33333%; }
  .pull-sm-11 {
    right: 91.66667%; }
  .pull-sm-12 {
    right: 100%; }
  .push-sm-0 {
    left: auto; }
  .push-sm-1 {
    left: 8.33333%; }
  .push-sm-2 {
    left: 16.66667%; }
  .push-sm-3 {
    left: 25%; }
  .push-sm-4 {
    left: 33.33333%; }
  .push-sm-5 {
    left: 41.66667%; }
  .push-sm-6 {
    left: 50%; }
  .push-sm-7 {
    left: 58.33333%; }
  .push-sm-8 {
    left: 66.66667%; }
  .push-sm-9 {
    left: 75%; }
  .push-sm-10 {
    left: 83.33333%; }
  .push-sm-11 {
    left: 91.66667%; }
  .push-sm-12 {
    left: 100%; }
  .offset-sm-0 {
    margin-left: 0%; }
  .offset-sm-1 {
    margin-left: 8.33333%; }
  .offset-sm-2 {
    margin-left: 16.66667%; }
  .offset-sm-3 {
    margin-left: 25%; }
  .offset-sm-4 {
    margin-left: 33.33333%; }
  .offset-sm-5 {
    margin-left: 41.66667%; }
  .offset-sm-6 {
    margin-left: 50%; }
  .offset-sm-7 {
    margin-left: 58.33333%; }
  .offset-sm-8 {
    margin-left: 66.66667%; }
  .offset-sm-9 {
    margin-left: 75%; }
  .offset-sm-10 {
    margin-left: 83.33333%; }
  .offset-sm-11 {
    margin-left: 91.66667%; } }

@media (min-width: 768px) {
  .col-md {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto; }
  .col-md-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-md-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-md-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-md-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-md-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-md-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-md-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-md-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-md-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-md-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-md-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .pull-md-0 {
    right: auto; }
  .pull-md-1 {
    right: 8.33333%; }
  .pull-md-2 {
    right: 16.66667%; }
  .pull-md-3 {
    right: 25%; }
  .pull-md-4 {
    right: 33.33333%; }
  .pull-md-5 {
    right: 41.66667%; }
  .pull-md-6 {
    right: 50%; }
  .pull-md-7 {
    right: 58.33333%; }
  .pull-md-8 {
    right: 66.66667%; }
  .pull-md-9 {
    right: 75%; }
  .pull-md-10 {
    right: 83.33333%; }
  .pull-md-11 {
    right: 91.66667%; }
  .pull-md-12 {
    right: 100%; }
  .push-md-0 {
    left: auto; }
  .push-md-1 {
    left: 8.33333%; }
  .push-md-2 {
    left: 16.66667%; }
  .push-md-3 {
    left: 25%; }
  .push-md-4 {
    left: 33.33333%; }
  .push-md-5 {
    left: 41.66667%; }
  .push-md-6 {
    left: 50%; }
  .push-md-7 {
    left: 58.33333%; }
  .push-md-8 {
    left: 66.66667%; }
  .push-md-9 {
    left: 75%; }
  .push-md-10 {
    left: 83.33333%; }
  .push-md-11 {
    left: 91.66667%; }
  .push-md-12 {
    left: 100%; }
  .offset-md-0 {
    margin-left: 0%; }
  .offset-md-1 {
    margin-left: 8.33333%; }
  .offset-md-2 {
    margin-left: 16.66667%; }
  .offset-md-3 {
    margin-left: 25%; }
  .offset-md-4 {
    margin-left: 33.33333%; }
  .offset-md-5 {
    margin-left: 41.66667%; }
  .offset-md-6 {
    margin-left: 50%; }
  .offset-md-7 {
    margin-left: 58.33333%; }
  .offset-md-8 {
    margin-left: 66.66667%; }
  .offset-md-9 {
    margin-left: 75%; }
  .offset-md-10 {
    margin-left: 83.33333%; }
  .offset-md-11 {
    margin-left: 91.66667%; } }

@media (min-width: 992px) {
  .col-lg {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto; }
  .col-lg-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-lg-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-lg-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-lg-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-lg-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-lg-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-lg-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-lg-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-lg-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-lg-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .pull-lg-0 {
    right: auto; }
  .pull-lg-1 {
    right: 8.33333%; }
  .pull-lg-2 {
    right: 16.66667%; }
  .pull-lg-3 {
    right: 25%; }
  .pull-lg-4 {
    right: 33.33333%; }
  .pull-lg-5 {
    right: 41.66667%; }
  .pull-lg-6 {
    right: 50%; }
  .pull-lg-7 {
    right: 58.33333%; }
  .pull-lg-8 {
    right: 66.66667%; }
  .pull-lg-9 {
    right: 75%; }
  .pull-lg-10 {
    right: 83.33333%; }
  .pull-lg-11 {
    right: 91.66667%; }
  .pull-lg-12 {
    right: 100%; }
  .push-lg-0 {
    left: auto; }
  .push-lg-1 {
    left: 8.33333%; }
  .push-lg-2 {
    left: 16.66667%; }
  .push-lg-3 {
    left: 25%; }
  .push-lg-4 {
    left: 33.33333%; }
  .push-lg-5 {
    left: 41.66667%; }
  .push-lg-6 {
    left: 50%; }
  .push-lg-7 {
    left: 58.33333%; }
  .push-lg-8 {
    left: 66.66667%; }
  .push-lg-9 {
    left: 75%; }
  .push-lg-10 {
    left: 83.33333%; }
  .push-lg-11 {
    left: 91.66667%; }
  .push-lg-12 {
    left: 100%; }
  .offset-lg-0 {
    margin-left: 0%; }
  .offset-lg-1 {
    margin-left: 8.33333%; }
  .offset-lg-2 {
    margin-left: 16.66667%; }
  .offset-lg-3 {
    margin-left: 25%; }
  .offset-lg-4 {
    margin-left: 33.33333%; }
  .offset-lg-5 {
    margin-left: 41.66667%; }
  .offset-lg-6 {
    margin-left: 50%; }
  .offset-lg-7 {
    margin-left: 58.33333%; }
  .offset-lg-8 {
    margin-left: 66.66667%; }
  .offset-lg-9 {
    margin-left: 75%; }
  .offset-lg-10 {
    margin-left: 83.33333%; }
  .offset-lg-11 {
    margin-left: 91.66667%; } }

@media (min-width: 1200px) {
  .col-xl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%; }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto; }
  .col-xl-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-xl-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xl-3 {
    flex: 0 0 25%;
    max-width: 25%; }
  .col-xl-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-xl-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-xl-6 {
    flex: 0 0 50%;
    max-width: 50%; }
  .col-xl-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-xl-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-xl-9 {
    flex: 0 0 75%;
    max-width: 75%; }
  .col-xl-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-xl-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-xl-12 {
    flex: 0 0 100%;
    max-width: 100%; }
  .pull-xl-0 {
    right: auto; }
  .pull-xl-1 {
    right: 8.33333%; }
  .pull-xl-2 {
    right: 16.66667%; }
  .pull-xl-3 {
    right: 25%; }
  .pull-xl-4 {
    right: 33.33333%; }
  .pull-xl-5 {
    right: 41.66667%; }
  .pull-xl-6 {
    right: 50%; }
  .pull-xl-7 {
    right: 58.33333%; }
  .pull-xl-8 {
    right: 66.66667%; }
  .pull-xl-9 {
    right: 75%; }
  .pull-xl-10 {
    right: 83.33333%; }
  .pull-xl-11 {
    right: 91.66667%; }
  .pull-xl-12 {
    right: 100%; }
  .push-xl-0 {
    left: auto; }
  .push-xl-1 {
    left: 8.33333%; }
  .push-xl-2 {
    left: 16.66667%; }
  .push-xl-3 {
    left: 25%; }
  .push-xl-4 {
    left: 33.33333%; }
  .push-xl-5 {
    left: 41.66667%; }
  .push-xl-6 {
    left: 50%; }
  .push-xl-7 {
    left: 58.33333%; }
  .push-xl-8 {
    left: 66.66667%; }
  .push-xl-9 {
    left: 75%; }
  .push-xl-10 {
    left: 83.33333%; }
  .push-xl-11 {
    left: 91.66667%; }
  .push-xl-12 {
    left: 100%; }
  .offset-xl-0 {
    margin-left: 0%; }
  .offset-xl-1 {
    margin-left: 8.33333%; }
  .offset-xl-2 {
    margin-left: 16.66667%; }
  .offset-xl-3 {
    margin-left: 25%; }
  .offset-xl-4 {
    margin-left: 33.33333%; }
  .offset-xl-5 {
    margin-left: 41.66667%; }
  .offset-xl-6 {
    margin-left: 50%; }
  .offset-xl-7 {
    margin-left: 58.33333%; }
  .offset-xl-8 {
    margin-left: 66.66667%; }
  .offset-xl-9 {
    margin-left: 75%; }
  .offset-xl-10 {
    margin-left: 83.33333%; }
  .offset-xl-11 {
    margin-left: 91.66667%; } }

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem; }
  .table th,
  .table td {
    padding: 0.75rem;
    vertical-align: top;
      border: 1px solid rgb(35,35,35); }
  .table thead th {
    vertical-align: bottom;
    border: 1px solid rgb(35,35,35); }
  .table tbody + tbody {
    border: 1px solid rgb(35,35,35); }
  .table .table {
    background-color: rgb(11,11,11); }

.table-sm th,
.table-sm td {
  padding: 0.3rem; }

.table-bordered {
  border: 1px solid rgb(35,35,35); }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid rgb(35,35,35); }
  .table-bordered thead th,
  .table-bordered thead td {
    border-bottom-width: 2px; }

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgb(11,11,11); }

.table-hover tbody tr:hover {
  background-color: rgb(11,11,11); }

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgb(11,11,11); }

.table-hover .table-active:hover {
  background-color: #e9ecef; }
  .table-hover .table-active:hover > td,
  .table-hover .table-active:hover > th {
    background-color: #e9ecef; }

.table-success,
.table-success > th,
.table-success > td {
  background-color: #dff0d8; }

.table-hover .table-success:hover {
  background-color: #d0e9c6; }
  .table-hover .table-success:hover > td,
  .table-hover .table-success:hover > th {
    background-color: #d0e9c6; }

.table-info,
.table-info > th,
.table-info > td {
  background-color: #d9edf7; }

.table-hover .table-info:hover {
  background-color: #c4e3f3; }
  .table-hover .table-info:hover > td,
  .table-hover .table-info:hover > th {
    background-color: #c4e3f3; }

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #fcf8e3; }

.table-hover .table-warning:hover {
  background-color: #faf2cc; }
  .table-hover .table-warning:hover > td,
  .table-hover .table-warning:hover > th {
    background-color: #faf2cc; }

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f2dede; }

.table-hover .table-danger:hover {
  background-color: #ebcccc; }
  .table-hover .table-danger:hover > td,
  .table-hover .table-danger:hover > th {
    background-color: #ebcccc; }

.thead-inverse th {
  color: rgb(35,35,35);
  background-color: rgb(35,35,35); }

.thead-default th {
  color: #55595c;
  background-color: rgb(11,11,11); }

.table-inverse {
  color: rgb(35,35,35);
  background-color: rgb(35,35,35); }
  .table-inverse th,
  .table-inverse td,
  .table-inverse thead th {
    border-color: rgb(35,35,35); }
  .table-inverse.table-bordered {
    border: 0; }

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar; }
  .table-responsive.table-bordered {
    border: 0; }

.table-outline {
  border: 1px solid rgb(35,35,35); }
  .table-outline td {
    vertical-align: middle; }

.table-align-middle td {
  vertical-align: middle; }

.table-clear td {
  border: 0; }

.form-control, .daterangepicker .input-mini, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control.direction-up {
  display: block;
  width: 100%;
  padding: 0.5rem 0.75rem;
  font-size: 0.875rem;
  line-height: 1.25;
  color: #55595c;
  background-color: #fff;
  background-image: none;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s; }
  .form-control::-ms-expand, .daterangepicker .input-mini::-ms-expand, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control::-ms-expand, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control.direction-up::-ms-expand {
    background-color: transparent;
    border: 0; }
  .form-control:focus, .daterangepicker .input-mini:focus, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control:focus {
    color: #55595c;
    background-color: #fff;
    border-color: #8ad4ee;
    outline: none; }
  .form-control::placeholder, .daterangepicker .input-mini::placeholder, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control::placeholder, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control.direction-up::placeholder {
    color: #818a91;
    opacity: 1; }
  .form-control:disabled, .daterangepicker .input-mini:disabled, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control:disabled, .form-control[readonly], .daterangepicker [readonly].input-mini, .input-group > .ui-select-bootstrap > input[readonly].ui-select-search.form-control {
    background-color: rgb(11,11,11);
    opacity: 1; }
  .form-control:disabled, .daterangepicker .input-mini:disabled, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control:disabled {
    cursor: not-allowed; }

select.form-control:not([size]):not([multiple]), .daterangepicker select.input-mini:not([size]):not([multiple]) {
  height: calc(2.09375rem + 2px); }

select.form-control:focus::-ms-value, .daterangepicker select.input-mini:focus::-ms-value {
  color: #55595c;
  background-color: #fff; }


.form-control-file,
.form-control-range {
  display: block; }

.col-form-label {
  padding-top: calc(0.5rem - 1px * 2);
  padding-bottom: calc(0.5rem - 1px * 2);
  margin-bottom: 0; }

.col-form-label-lg {
  padding-top: calc(0.75rem - 1px * 2);
  padding-bottom: calc(0.75rem - 1px * 2);
  font-size: 1.25rem; }

.col-form-label-sm {
  padding-top: calc(0.25rem - 1px * 2);
  padding-bottom: calc(0.25rem - 1px * 2);
  font-size: 0.875rem; }

.col-form-legend {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  margin-bottom: 0;
  font-size: 0.875rem; }

.form-control-static {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  margin-bottom: 0;
  line-height: 1.25;
  border: solid transparent;
  border-width: 1px 0; }
  .form-control-static.form-control-sm, .input-group-sm > .form-control-static.form-control, .daterangepicker .input-group-sm > .form-control-static.input-mini, .input-group > .ui-select-bootstrap.input-group-sm > input.form-control-static.ui-select-search.form-control,
  .input-group-sm > .form-control-static.input-group-addon,
  .input-group-sm > .input-group-btn > .form-control-static.btn, .fc
  .input-group-sm > .input-group-btn > button.form-control-static, .form-control-static.form-control-lg, .input-group-lg > .form-control-static.form-control, .daterangepicker .input-group-lg > .form-control-static.input-mini, .input-group > .ui-select-bootstrap.input-group-lg > input.form-control-static.ui-select-search.form-control,
  .input-group-lg > .form-control-static.input-group-addon,
  .input-group-lg > .input-group-btn > .form-control-static.btn, .fc
  .input-group-lg > .input-group-btn > button.form-control-static {
    padding-right: 0;
    padding-left: 0; }

.form-control-sm, .input-group-sm > .form-control, .daterangepicker .input-group-sm > .input-mini, .input-group > .ui-select-bootstrap.input-group-sm > input.ui-select-search.form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn, .fc
.input-group-sm > .input-group-btn > button {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem; }

select.form-control-sm:not([size]):not([multiple]), .input-group-sm > select.form-control:not([size]):not([multiple]), .daterangepicker .input-group-sm > select.input-mini:not([size]):not([multiple]),
.input-group-sm > select.input-group-addon:not([size]):not([multiple]),
.input-group-sm > .input-group-btn > select.btn:not([size]):not([multiple]) {
  height: 1.8125rem; }

.form-control-lg, .input-group-lg > .form-control, .daterangepicker .input-group-lg > .input-mini, .input-group > .ui-select-bootstrap.input-group-lg > input.ui-select-search.form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn, .fc
.input-group-lg > .input-group-btn > button {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem; }

select.form-control-lg:not([size]):not([multiple]), .input-group-lg > select.form-control:not([size]):not([multiple]), .daterangepicker .input-group-lg > select.input-mini:not([size]):not([multiple]),
.input-group-lg > select.input-group-addon:not([size]):not([multiple]),
.input-group-lg > .input-group-btn > select.btn:not([size]):not([multiple]) {
  height: 3.16667rem; }

.form-group {
  margin-bottom: 1rem; }

.form-text {
  display: block;
  margin-top: 0.25rem; }

.form-check {
  position: relative;
  display: block;
  margin-bottom: 0.5rem; }
  .form-check.disabled .form-check-label {
    color: #FFFFFF;
    cursor: not-allowed; }

.form-check-label {
  padding-left: 1.25rem;
  margin-bottom: 0;
  cursor: pointer; }

.form-check-input {
  position: absolute;
  margin-top: 0.25rem;
  margin-left: -1.25rem; }
  .form-check-input:only-child {
    position: static; }

.form-check-inline {
  display: inline-block; }
  .form-check-inline .form-check-label {
    vertical-align: middle; }
  .form-check-inline + .form-check-inline {
    margin-left: 0.75rem; }

.form-control-feedback {
  margin-top: 0.25rem; }

.form-control-success,
.form-control-warning,
.form-control-danger {
  padding-right: 2.25rem;
  background-repeat: no-repeat;
  background-position: center right 0.52344rem;
  background-size: 1.04688rem 1.04688rem; }

.has-success .form-control-feedback,
.has-success .form-control-label,
.has-success .col-form-label,
.has-success .form-check-label,
.has-success .custom-control {
  color: #79c447; }

.has-success .form-control, .has-success .daterangepicker .input-mini, .daterangepicker .has-success .input-mini, .has-success .input-group > .ui-select-bootstrap > input.ui-select-search.form-control {
  border-color: #79c447; }

.has-success .input-group-addon {
  color: #79c447;
  border-color: #79c447;
  background-color: #e9f6e1; }

.has-success .form-control-success {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%2379c447' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E"); }

.has-warning .form-control-feedback,
.has-warning .form-control-label,
.has-warning .col-form-label,
.has-warning .form-check-label,
.has-warning .custom-control {
  color: #fabb3d; }

.has-warning .form-control, .has-warning .daterangepicker .input-mini, .daterangepicker .has-warning .input-mini, .has-warning .input-group > .ui-select-bootstrap > input.ui-select-search.form-control {
  border-color: #fabb3d; }

.has-warning .input-group-addon {
  color: #fabb3d;
  border-color: #fabb3d;
  background-color: white; }

.has-warning .form-control-warning {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fabb3d' d='M4.4 5.324h-.8v-2.46h.8zm0 1.42h-.8V5.89h.8zM3.76.63L.04 7.075c-.115.2.016.425.26.426h7.397c.242 0 .372-.226.258-.426C6.726 4.924 5.47 2.79 4.253.63c-.113-.174-.39-.174-.494 0z'/%3E%3C/svg%3E"); }

.has-danger .form-control-feedback,
.has-danger .form-control-label,
.has-danger .col-form-label,
.has-danger .form-check-label,
.has-danger .custom-control {
  color: #ff5454; }

.has-danger .form-control, .has-danger .daterangepicker .input-mini, .daterangepicker .has-danger .input-mini, .has-danger .input-group > .ui-select-bootstrap > input.ui-select-search.form-control {
  border-color: #ff5454; }

.has-danger .input-group-addon {
  color: #ff5454;
  border-color: #ff5454;
  background-color: white; }

.has-danger .form-control-danger {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23ff5454' viewBox='-2 -2 7 7'%3E%3Cpath stroke='%23d9534f' d='M0 0l3 3m0-3L0 3'/%3E%3Ccircle r='.5'/%3E%3Ccircle cx='3' r='.5'/%3E%3Ccircle cy='3' r='.5'/%3E%3Ccircle cx='3' cy='3' r='.5'/%3E%3C/svg%3E"); }

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center; }
  .form-inline .form-check {
    width: 100%; }
  @media (min-width: 576px) {
    .form-inline label {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 0; }
    .form-inline .form-group {
      display: flex;
      flex: 0 0 auto;
      flex-flow: row wrap;
      align-items: center;
      margin-bottom: 0; }
    .form-inline .form-control, .form-inline .daterangepicker .input-mini, .daterangepicker .form-inline .input-mini, .form-inline .input-group > .ui-select-bootstrap > input.ui-select-search.form-control {
      display: inline-block;
      width: auto;
      vertical-align: middle; }
    .form-inline .form-control-static {
      display: inline-block; }
    .form-inline .input-group {
      width: auto; }
    .form-inline .form-control-label {
      margin-bottom: 0;
      vertical-align: middle; }
    .form-inline .form-check {
      display: flex;
      align-items: center;
      justify-content: center;
      width: auto;
      margin-top: 0;
      margin-bottom: 0; }
    .form-inline .form-check-label {
      padding-left: 0; }
    .form-inline .form-check-input {
      position: relative;
      margin-top: 0;
      margin-right: 0.25rem;
      margin-left: 0; }
    .form-inline .custom-control {
      display: flex;
      align-items: center;
      justify-content: center;
      padding-left: 0; }
    .form-inline .custom-control-indicator {
      position: static;
      display: inline-block;
      margin-right: 0.25rem;
      vertical-align: text-bottom; }
    .form-inline .has-feedback .form-control-feedback {
      top: 0; } }

.btn, .fc button {
  display: inline-block;
  font-weight: normal;
  line-height: 1.25;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  user-select: none;
  border: 1px solid transparent;
  padding: 0.5rem 1rem;
  font-size: 0.875rem;
  transition: all 0.2s ease-in-out; }
  .btn:focus, .fc button:focus, .btn:hover, .fc button:hover {
    text-decoration: none; }
  .btn:focus, .fc button:focus, .btn.focus, .fc button.focus {
    outline: 0;
    box-shadow: 0 0 0 2px rgba(32, 168, 216, 0.25); }
  .btn.disabled, .fc button.disabled, .btn:disabled, .fc button:disabled {
    cursor: not-allowed;
    opacity: .65; }
  .btn:active, .fc button:active, .btn.active, .fc button.active {
    background-image: none; }

a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none; }

.btn-primary, .fc-today-button {
  color: #fff;
  background-color: #262626;
  border-color: #20a8d8; }
  .btn-primary:hover, .fc-today-button:hover {
    color: #fff;
    background-color: #1985ac;
    border-color: #187fa3; }
  .btn-primary:focus, .fc-today-button:focus, .btn-primary.focus, .focus.fc-today-button {
    box-shadow: 0 0 0 2px rgba(32, 168, 216, 0.5); }
  .btn-primary.disabled, .disabled.fc-today-button, .btn-primary:disabled, .fc-today-button:disabled {
    background-color: #20a8d8;
    border-color: #20a8d8; }
  .btn-primary:active, .fc-today-button:active, .btn-primary.active, .active.fc-today-button,
  .show > .btn-primary.dropdown-toggle,
  .show > .dropdown-toggle.fc-today-button {
    color: #fff;
    background-color: #1985ac;
    background-image: none;
    border-color: #262626; }

.btn-secondary, .fc button {
    color: #fff;
    background-color: #262626;
    border-color: #20a8d8; }
  .btn-secondary:hover, .fc button:hover {
    color: #2a2c36;
    background-color: #e6e6e6;
    border-color: #636b72; }
  .btn-secondary:focus, .fc button:focus, .btn-secondary.focus, .fc button.focus {
    box-shadow: 0 0 0 2px rgba(129, 138, 145, 0.5); }
  .btn-secondary.disabled, .fc button.disabled, .btn-secondary:disabled, .fc button:disabled {
    color: #fff;
    background-color: #262626;
    border-color: #20a8d8; }
  .btn-secondary:active, .fc button:active, .btn-secondary.active, .fc button.active,
  .show > .btn-secondary.dropdown-toggle, .fc
  .show > button.dropdown-toggle {
    color: #2a2c36;
    background-color: #e6e6e6;
    background-image: none;
    border-color: #636b72; }

.btn-info {
  color: #fff;
  background-color: #67c2ef;
  border-color: #67c2ef; }
  .btn-info:hover {
    color: #fff;
    background-color: #39afea;
    border-color: #30ace9; }
  .btn-info:focus, .btn-info.focus {
    box-shadow: 0 0 0 2px rgba(103, 194, 239, 0.5); }
  .btn-info.disabled, .btn-info:disabled {
    background-color: #67c2ef;
    border-color: #67c2ef; }
  .btn-info:active, .btn-info.active,
  .show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #39afea;
    background-image: none;
    border-color: #30ace9; }

.btn-success {
  color: #fff;
  background-color: #79c447;
  border-color: #79c447; }
  .btn-success:hover {
    color: #fff;
    background-color: #61a434;
    border-color: #5c9c32; }
  .btn-success:focus, .btn-success.focus {
    box-shadow: 0 0 0 2px rgba(121, 196, 71, 0.5); }
  .btn-success.disabled, .btn-success:disabled {
    background-color: #79c447;
    border-color: #79c447; }
  .btn-success:active, .btn-success.active,
  .show > .btn-success.dropdown-toggle {
    color: #fff;
    background-color: #61a434;
    background-image: none;
    border-color: #5c9c32; }

.btn-warning {
  color: #fff;
  background-color: #fabb3d;
  border-color: #fabb3d; }
  .btn-warning:hover {
    color: #fff;
    background-color: #f9aa0b;
    border-color: #f4a406; }
  .btn-warning:focus, .btn-warning.focus {
    box-shadow: 0 0 0 2px rgba(250, 187, 61, 0.5); }
  .btn-warning.disabled, .btn-warning:disabled {
    background-color: #fabb3d;
    border-color: #fabb3d; }
  .btn-warning:active, .btn-warning.active,
  .show > .btn-warning.dropdown-toggle {
    color: #fff;
    background-color: #f9aa0b;
    background-image: none;
    border-color: #f4a406; }

.btn-danger {
  color: #fff;
  background-color: #ff5454;
  border-color: #ff5454; }
  .btn-danger:hover {
    color: #fff;
    background-color: #ff2121;
    border-color: #ff1717; }
  .btn-danger:focus, .btn-danger.focus {
    box-shadow: 0 0 0 2px rgba(255, 84, 84, 0.5); }
  .btn-danger.disabled, .btn-danger:disabled {
    background-color: #ff5454;
    border-color: #ff5454; }
  .btn-danger:active, .btn-danger.active,
  .show > .btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #ff2121;
    background-image: none;
    border-color: #ff1717; }

.btn-outline-primary {
  color: #20a8d8;
  background-image: none;
  background-color: transparent;
  border-color: #20a8d8; }
  .btn-outline-primary:hover {
    color: #fff;
    background-color: #20a8d8;
    border-color: #20a8d8; }
  .btn-outline-primary:focus, .btn-outline-primary.focus {
    box-shadow: 0 0 0 2px rgba(32, 168, 216, 0.5); }
  .btn-outline-primary.disabled, .btn-outline-primary:disabled {
    color: #20a8d8;
    background-color: transparent; }
  .btn-outline-primary:active, .btn-outline-primary.active,
  .show > .btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #20a8d8;
    border-color: #20a8d8; }

.btn-outline-secondary {
  color: #818a91;
  background-image: none;
  background-color: transparent;
  border-color: #818a91; }
  .btn-outline-secondary:hover {
    color: #fff;
    background-color: #818a91;
    border-color: #818a91; }
  .btn-outline-secondary:focus, .btn-outline-secondary.focus {
    box-shadow: 0 0 0 2px rgba(129, 138, 145, 0.5); }
  .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
    color: #818a91;
    background-color: transparent; }
  .btn-outline-secondary:active, .btn-outline-secondary.active,
  .show > .btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #818a91;
    border-color: #818a91; }

.btn-outline-info {
  color: #67c2ef;
  background-image: none;
  background-color: transparent;
  border-color: #67c2ef; }
  .btn-outline-info:hover {
    color: #fff;
    background-color: #67c2ef;
    border-color: #67c2ef; }
  .btn-outline-info:focus, .btn-outline-info.focus {
    box-shadow: 0 0 0 2px rgba(103, 194, 239, 0.5); }
  .btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #67c2ef;
    background-color: transparent; }
  .btn-outline-info:active, .btn-outline-info.active,
  .show > .btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #67c2ef;
    border-color: #67c2ef; }

.btn-outline-success {
  color: #79c447;
  background-image: none;
  background-color: transparent;
  border-color: #79c447; }
  .btn-outline-success:hover {
    color: #fff;
    background-color: #79c447;
    border-color: #79c447; }
  .btn-outline-success:focus, .btn-outline-success.focus {
    box-shadow: 0 0 0 2px rgba(121, 196, 71, 0.5); }
  .btn-outline-success.disabled, .btn-outline-success:disabled {
    color: #79c447;
    background-color: transparent; }
  .btn-outline-success:active, .btn-outline-success.active,
  .show > .btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #79c447;
    border-color: #79c447; }

.btn-outline-warning {
  color: #fabb3d;
  background-image: none;
  background-color: transparent;
  border-color: #fabb3d; }
  .btn-outline-warning:hover {
    color: #fff;
    background-color: #fabb3d;
    border-color: #fabb3d; }
  .btn-outline-warning:focus, .btn-outline-warning.focus {
    box-shadow: 0 0 0 2px rgba(250, 187, 61, 0.5); }
  .btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #fabb3d;
    background-color: transparent; }
  .btn-outline-warning:active, .btn-outline-warning.active,
  .show > .btn-outline-warning.dropdown-toggle {
    color: #fff;
    background-color: #fabb3d;
    border-color: #fabb3d; }

.btn-outline-danger {
  color: #ff5454;
  background-image: none;
  background-color: transparent;
  border-color: #ff5454; }
  .btn-outline-danger:hover {
    color: #fff;
    background-color: #ff5454;
    border-color: #ff5454; }
  .btn-outline-danger:focus, .btn-outline-danger.focus {
    box-shadow: 0 0 0 2px rgba(255, 84, 84, 0.5); }
  .btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #ff5454;
    background-color: transparent; }
  .btn-outline-danger:active, .btn-outline-danger.active,
  .show > .btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #ff5454;
    border-color: #ff5454; }

.btn-link {
  font-weight: normal;
  color: #20a8d8;
  border-radius: 0; }
  .btn-link, .btn-link:active, .btn-link.active, .btn-link:disabled {
    background-color: transparent; }
  .btn-link, .btn-link:focus, .btn-link:active {
    border-color: transparent; }
  .btn-link:hover {
    border-color: transparent; }
  .btn-link:focus, .btn-link:hover {
    color: #167495;
    text-decoration: underline;
    background-color: transparent; }
  .btn-link:disabled {
    color: #818a91; }
    .btn-link:disabled:focus, .btn-link:disabled:hover {
      text-decoration: none; }

.btn-lg, .btn-group-lg > .btn, .fc .btn-group-lg > button {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem; }

.btn-sm, .btn-group-sm > .btn, .fc .btn-group-sm > button {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem; }

.btn-block {
  display: block;
  width: 100%; }

.btn-block + .btn-block {
  margin-top: 0.5rem; }

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%; }

.btn .badge, .fc button .badge {
  position: absolute;
  top: 2px;
  right: 6px;
  font-size: 9px; }

.fade {
  opacity: 0;
  transition: opacity 0.15s linear; }
  .fade.show {
    opacity: 1; }

.collapse {
  display: none; }
  .collapse.show {
    display: block; }

tr.collapse.show {
  display: table-row; }

tbody.collapse.show {
  display: table-row-group; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease; }

.dropup,
.dropdown {
  position: relative; }

.dropdown-toggle::after {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 0.3em;
  vertical-align: middle;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-left: 0.3em solid transparent; }

.dropdown-toggle:focus {
  outline: 0; }

.dropup .dropdown-toggle::after {
  border-top: 0;
  border-bottom: 0.3em solid; }

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0 0;
  margin: 0.125rem 0 0;
  font-size: 0.875rem;
  text-align: left;
  list-style: none;
  color: #FFFFFF;
  background: rgb(15,15,15);
  border-top: 1px solid rgb(35,35,35);
  border: 1px solid rgb(35,35,35);
  background-clip: padding-box; }

.dropdown-divider {
  height: 1px;
  margin: 0.5rem 0;
  overflow: hidden;
  background-color: rgb(11,11,11); }

.dropdown-item {
  display: block;
  width: 100%;
  padding: 3px 1.5rem;
  clear: both;
  font-weight: normal;
  color: #FFFFFF;
  text-align: inherit;
  white-space: nowrap;
  background: none;
  border: 0; }
  .dropdown-item:focus, .dropdown-item:hover {
    color: #1f2028;
    text-decoration: none;
    background: transparent; }
  .dropdown-item.active, .dropdown-item:active {
    color: #FFFFFF;
    text-decoration: none;
    background-color: #FFFFFF; }
  .dropdown-item.disabled, .dropdown-item:disabled {
    color: #FFFFFF;
    cursor: not-allowed;
    background-color: transparent; }

.show > .dropdown-menu {
  display: block; }

.show > a {
  outline: 0; }

.dropdown-menu-right {
  right: 0;
  left: auto; }

.dropdown-menu-left {
  right: auto;
  left: 0; }

.dropdown-header {
  display: block;
  padding: 0 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #FFFFFF;
  white-space: nowrap; }

.dropdown-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 990; }

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 0.125rem; }

.dropdown-item {
  position: relative;
	display: block;
    padding: 0.75rem 1rem;
    color: #FFFFFF;
    text-decoration: none;
    background: transparent; }
  .dropdown-item:last-child {
    border-bottom: 0; }
  .dropdown-item i {
    display: inline-block;
    width: 20px;
    margin-right: 10px;
    margin-left: -10px;
    color: #d1d4d7;
    text-align: center; }
  .dropdown-item .badge {
    position: absolute;
    right: 10px;
    margin-top: 2px; }

.dropdown-header {
      padding: 0.9rem 1rem;
      font-size: 11px;
      font-weight: 600;
      color: #FFFFFF;
      text-transform: uppercase;
      background: rgb(15,15,15);
      border-top: 1px solid rgb(35,35,35);
      border-bottom: 1px solid rgb(35,35,35); }
  .dropdown-header .btn, .dropdown-header .fc button, .fc .dropdown-header button {
    margin-top: -7px;
    color: #FFFFFF; }
    .dropdown-header .btn:hover, .dropdown-header .fc button:hover, .fc .dropdown-header button:hover {
      color: #FFFFFF; }
    .dropdown-header .btn.pull-right, .dropdown-header .fc button.pull-right, .fc .dropdown-header button.pull-right {
      margin-right: -20px; }

.dropdown-menu-lg {
  width: 250px; }

.btn-group, .fc-button-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle; }
  .btn-group > .btn, .fc-button-group > .btn, .fc .btn-group > button, .fc .fc-button-group > button,
  .btn-group-vertical > .btn, .fc
  .btn-group-vertical > button {
    position: relative;
    flex: 0 1 auto; }
    .btn-group > .btn:hover, .fc-button-group > .btn:hover, .fc .btn-group > button:hover, .fc .fc-button-group > button:hover,
    .btn-group-vertical > .btn:hover, .fc
    .btn-group-vertical > button:hover {
      z-index: 2; }
    .btn-group > .btn:focus, .fc-button-group > .btn:focus, .fc .btn-group > button:focus, .fc .fc-button-group > button:focus, .btn-group > .btn:active, .fc-button-group > .btn:active, .fc .btn-group > button:active, .fc .fc-button-group > button:active, .btn-group > .btn.active, .fc-button-group > .btn.active, .fc .btn-group > button.active, .fc .fc-button-group > button.active,
    .btn-group-vertical > .btn:focus, .fc
    .btn-group-vertical > button:focus,
    .btn-group-vertical > .btn:active, .fc
    .btn-group-vertical > button:active,
    .btn-group-vertical > .btn.active, .fc
    .btn-group-vertical > button.active {
      z-index: 2; }
  .btn-group .btn + .btn, .fc-button-group .btn + .btn, .btn-group .fc button + .btn, .fc .btn-group button + .btn, .fc-button-group .fc button + .btn, .fc .fc-button-group button + .btn, .btn-group .fc .btn + button, .fc .btn-group .btn + button, .fc-button-group .fc .btn + button, .fc .fc-button-group .btn + button, .btn-group .fc button + button, .fc .btn-group button + button, .fc-button-group .fc button + button, .fc .fc-button-group button + button,
  .btn-group .btn + .btn-group, .fc-button-group .btn + .btn-group,
  .btn-group .fc button + .btn-group, .fc
  .btn-group button + .btn-group, .fc-button-group .fc button + .btn-group, .fc .fc-button-group button + .btn-group,
  .btn-group .btn + .fc-button-group, .fc-button-group .btn + .fc-button-group,
  .btn-group .fc button + .fc-button-group, .fc
  .btn-group button + .fc-button-group, .fc-button-group .fc button + .fc-button-group, .fc .fc-button-group button + .fc-button-group,
  .btn-group .btn-group + .btn, .fc-button-group .btn-group + .btn,
  .btn-group .fc-button-group + .btn, .fc-button-group .fc-button-group + .btn,
  .btn-group .fc .btn-group + button, .fc
  .btn-group .btn-group + button, .fc-button-group .fc .btn-group + button, .fc .fc-button-group .btn-group + button,
  .btn-group .fc .fc-button-group + button, .fc
  .btn-group .fc-button-group + button, .fc-button-group .fc .fc-button-group + button, .fc .fc-button-group .fc-button-group + button,
  .btn-group .btn-group + .btn-group, .fc-button-group .btn-group + .btn-group,
  .btn-group .fc-button-group + .btn-group, .fc-button-group .fc-button-group + .btn-group,
  .btn-group .btn-group + .fc-button-group, .fc-button-group .btn-group + .fc-button-group,
  .btn-group .fc-button-group + .fc-button-group, .fc-button-group .fc-button-group + .fc-button-group,
  .btn-group-vertical .btn + .btn,
  .btn-group-vertical .fc button + .btn, .fc
  .btn-group-vertical button + .btn,
  .btn-group-vertical .fc .btn + button, .fc
  .btn-group-vertical .btn + button,
  .btn-group-vertical .fc button + button, .fc
  .btn-group-vertical button + button,
  .btn-group-vertical .btn + .btn-group,
  .btn-group-vertical .fc button + .btn-group, .fc
  .btn-group-vertical button + .btn-group,
  .btn-group-vertical .btn + .fc-button-group,
  .btn-group-vertical .fc button + .fc-button-group, .fc
  .btn-group-vertical button + .fc-button-group,
  .btn-group-vertical .btn-group + .btn,
  .btn-group-vertical .fc-button-group + .btn,
  .btn-group-vertical .fc .btn-group + button, .fc
  .btn-group-vertical .btn-group + button,
  .btn-group-vertical .fc .fc-button-group + button, .fc
  .btn-group-vertical .fc-button-group + button,
  .btn-group-vertical .btn-group + .btn-group,
  .btn-group-vertical .fc-button-group + .btn-group,
  .btn-group-vertical .btn-group + .fc-button-group,
  .btn-group-vertical .fc-button-group + .fc-button-group {
    margin-left: -1px; }

.btn-toolbar {
  display: flex;
  justify-content: flex-start; }
  .btn-toolbar .input-group {
    width: auto; }

.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle), .fc-button-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle), .fc .btn-group > button:not(:first-child):not(:last-child):not(.dropdown-toggle), .fc .fc-button-group > button:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0; }

.btn-group > .btn:first-child, .fc-button-group > .btn:first-child, .fc .btn-group > button:first-child, .fc .fc-button-group > button:first-child {
  margin-left: 0; }

.btn-group > .btn-group, .fc-button-group > .btn-group, .btn-group > .fc-button-group, .fc-button-group > .fc-button-group {
  float: left; }

.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn, .fc-button-group > .btn-group:not(:first-child):not(:last-child) > .btn, .btn-group > .fc-button-group:not(:first-child):not(:last-child) > .btn, .fc-button-group > .fc-button-group:not(:first-child):not(:last-child) > .btn, .fc .btn-group > .btn-group:not(:first-child):not(:last-child) > button, .fc .fc-button-group > .btn-group:not(:first-child):not(:last-child) > button, .fc .btn-group > .fc-button-group:not(:first-child):not(:last-child) > button, .fc .fc-button-group > .fc-button-group:not(:first-child):not(:last-child) > button {
  border-radius: 0; }

.btn-group .dropdown-toggle:active, .fc-button-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle, .open.fc-button-group .dropdown-toggle {
  outline: 0; }

.btn + .dropdown-toggle-split, .fc button + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem; }
  .btn + .dropdown-toggle-split::after, .fc button + .dropdown-toggle-split::after {
    margin-left: 0; }

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split, .fc .btn-group-sm > button + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem; }

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split, .fc .btn-group-lg > button + .dropdown-toggle-split {
  padding-right: 1.125rem;
  padding-left: 1.125rem; }

.btn-group-vertical {
  display: inline-flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center; }
  .btn-group-vertical .btn, .btn-group-vertical .fc button, .fc .btn-group-vertical button,
  .btn-group-vertical .btn-group,
  .btn-group-vertical .fc-button-group {
    width: 100%; }
  .btn-group-vertical > .btn + .btn, .fc .btn-group-vertical > button + .btn, .fc .btn-group-vertical > .btn + button, .fc .btn-group-vertical > button + button,
  .btn-group-vertical > .btn + .btn-group, .fc
  .btn-group-vertical > button + .btn-group,
  .btn-group-vertical > .btn + .fc-button-group, .fc
  .btn-group-vertical > button + .fc-button-group,
  .btn-group-vertical > .btn-group + .btn,
  .btn-group-vertical > .fc-button-group + .btn, .fc
  .btn-group-vertical > .btn-group + button, .fc
  .btn-group-vertical > .fc-button-group + button,
  .btn-group-vertical > .btn-group + .btn-group,
  .btn-group-vertical > .fc-button-group + .btn-group,
  .btn-group-vertical > .btn-group + .fc-button-group,
  .btn-group-vertical > .fc-button-group + .fc-button-group {
    margin-top: -1px;
    margin-left: 0; }

.btn-group-vertical > .btn:not(:first-child):not(:last-child), .fc .btn-group-vertical > button:not(:first-child):not(:last-child) {
  border-radius: 0; }

.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn, .btn-group-vertical > .fc-button-group:not(:first-child):not(:last-child) > .btn, .fc .btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > button, .fc .btn-group-vertical > .fc-button-group:not(:first-child):not(:last-child) > button {
  border-radius: 0; }

[data-toggle="buttons"] > .btn input[type="radio"], .fc [data-toggle="buttons"] > button input[type="radio"],
[data-toggle="buttons"] > .btn input[type="checkbox"], .fc
[data-toggle="buttons"] > button input[type="checkbox"],
[data-toggle="buttons"] > .btn-group > .btn input[type="radio"],
[data-toggle="buttons"] > .fc-button-group > .btn input[type="radio"], .fc
[data-toggle="buttons"] > .btn-group > button input[type="radio"], .fc
[data-toggle="buttons"] > .fc-button-group > button input[type="radio"],
[data-toggle="buttons"] > .btn-group > .btn input[type="checkbox"],
[data-toggle="buttons"] > .fc-button-group > .btn input[type="checkbox"], .fc
[data-toggle="buttons"] > .btn-group > button input[type="checkbox"], .fc
[data-toggle="buttons"] > .fc-button-group > button input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none; }

.input-group {
  position: relative;
  display: flex;
  width: 100%; }
  .input-group .form-control, .input-group .daterangepicker .input-mini, .daterangepicker .input-group .input-mini, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control.direction-up {
    position: relative;
    z-index: 2;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0; }
    .input-group .form-control:focus, .input-group .daterangepicker .input-mini:focus, .daterangepicker .input-group .input-mini:focus, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control:focus, .input-group .form-control:active, .input-group .daterangepicker .input-mini:active, .daterangepicker .input-group .input-mini:active, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control:active, .input-group .form-control:hover, .input-group .daterangepicker .input-mini:hover, .daterangepicker .input-group .input-mini:hover, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control:hover {
      z-index: 3; }

.input-group-addon,
.input-group-btn,
.input-group .form-control,
.input-group .daterangepicker .input-mini, .daterangepicker
.input-group .input-mini, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control.direction-up {
  display: flex;
  flex-direction: column;
  justify-content: center; }

.input-group-addon,
.input-group-btn {
  white-space: nowrap;
  vertical-align: middle; }

.input-group-addon {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  font-weight: normal;
  line-height: 1.25;
  color: #55595c;
  text-align: center;
  background-color: rgb(11,11,11);
  border: 1px solid rgba(0, 0, 0, 0.15); }
  .input-group-addon.form-control-sm, .daterangepicker .input-group-sm > .input-group-addon.input-mini, .input-group > .ui-select-bootstrap.input-group-sm > input.input-group-addon.ui-select-search.form-control,
  .input-group-sm > .input-group-addon,
  .input-group-sm > .input-group-btn > .input-group-addon.btn, .fc
  .input-group-sm > .input-group-btn > button.input-group-addon {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem; }
  .input-group-addon.form-control-lg, .daterangepicker .input-group-lg > .input-group-addon.input-mini, .input-group > .ui-select-bootstrap.input-group-lg > input.input-group-addon.ui-select-search.form-control,
  .input-group-lg > .input-group-addon,
  .input-group-lg > .input-group-btn > .input-group-addon.btn, .fc
  .input-group-lg > .input-group-btn > button.input-group-addon {
    padding: 0.75rem 1.5rem;
    font-size: 1.25rem; }
  .input-group-addon input[type="radio"],
  .input-group-addon input[type="checkbox"] {
    margin-top: 0; }

.input-group-addon:not(:last-child) {
  border-right: 0; }

.form-control + .input-group-addon:not(:first-child), .daterangepicker .input-mini + .input-group-addon:not(:first-child), .input-group > .ui-select-bootstrap > input.ui-select-search.form-control + .input-group-addon:not(:first-child) {
  border-left: 0; }

.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap; }
  .input-group-btn > .btn, .fc .input-group-btn > button {
    position: relative;
    flex: 1; }
    .input-group-btn > .btn + .btn, .fc .input-group-btn > button + .btn, .fc .input-group-btn > .btn + button, .fc .input-group-btn > button + button {
      margin-left: -1px; }
    .input-group-btn > .btn:focus, .fc .input-group-btn > button:focus, .input-group-btn > .btn:active, .fc .input-group-btn > button:active, .input-group-btn > .btn:hover, .fc .input-group-btn > button:hover {
      z-index: 3; }
  .input-group-btn:not(:last-child) > .btn, .fc .input-group-btn:not(:last-child) > button,
  .input-group-btn:not(:last-child) > .btn-group,
  .input-group-btn:not(:last-child) > .fc-button-group {
    margin-right: -1px; }
  .input-group-btn:not(:first-child) > .btn, .fc .input-group-btn:not(:first-child) > button,
  .input-group-btn:not(:first-child) > .btn-group,
  .input-group-btn:not(:first-child) > .fc-button-group {
    z-index: 2;
    margin-left: -1px; }
    .input-group-btn:not(:first-child) > .btn:focus, .fc .input-group-btn:not(:first-child) > button:focus, .input-group-btn:not(:first-child) > .btn:active, .fc .input-group-btn:not(:first-child) > button:active, .input-group-btn:not(:first-child) > .btn:hover, .fc .input-group-btn:not(:first-child) > button:hover,
    .input-group-btn:not(:first-child) > .btn-group:focus,
    .input-group-btn:not(:first-child) > .fc-button-group:focus,
    .input-group-btn:not(:first-child) > .btn-group:active,
    .input-group-btn:not(:first-child) > .fc-button-group:active,
    .input-group-btn:not(:first-child) > .btn-group:hover,
    .input-group-btn:not(:first-child) > .fc-button-group:hover {
      z-index: 3; }

.input-group-addon,
.input-group-btn {
  min-width: 40px;
  white-space: nowrap;
  vertical-align: middle; }

.nav {
  display: flex;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }

.nav-link, .navbar .dropdown-toggle {
  display: block;
  padding: 0.5em 1em; }
  .nav-link:focus, .navbar .dropdown-toggle:focus, .nav-link:hover, .navbar .dropdown-toggle:hover {
    text-decoration: none; }
  .nav-link.disabled, .navbar .disabled.dropdown-toggle {
    color: #FFFFFF;
    cursor: not-allowed; }

.nav-tabs {
  border-bottom: 1px solid #ddd; }
  .nav-tabs .nav-item {
    margin-bottom: -1px; }
  .nav-tabs .nav-link, .nav-tabs .navbar .dropdown-toggle, .navbar .nav-tabs .dropdown-toggle {
    border: 1px solid transparent; }
    .nav-tabs .nav-link:focus, .nav-tabs .navbar .dropdown-toggle:focus, .navbar .nav-tabs .dropdown-toggle:focus, .nav-tabs .nav-link:hover, .nav-tabs .navbar .dropdown-toggle:hover, .navbar .nav-tabs .dropdown-toggle:hover {
      border-color: #d1d4d7 #d1d4d7 #ddd; }
    .nav-tabs .nav-link.disabled, .nav-tabs .navbar .disabled.dropdown-toggle, .navbar .nav-tabs .disabled.dropdown-toggle {
      color: #FFFFFF;
      background-color: transparent;
      border-color: transparent; }
  .nav-tabs .nav-link.active, .nav-tabs .navbar .active.dropdown-toggle, .navbar .nav-tabs .active.dropdown-toggle,
  .nav-tabs .nav-item.show .nav-link,
  .nav-tabs .nav-item.show .navbar .dropdown-toggle, .navbar
  .nav-tabs .nav-item.show .dropdown-toggle {
    color: #55595c;
    background-color: #FFFFFF;
    border-color: #ddd #ddd #e4e5e6; }
  .nav-tabs .dropdown-menu {
    margin-top: -1px; }

.nav-pills .nav-link.active, .nav-pills .navbar .active.dropdown-toggle, .navbar .nav-pills .active.dropdown-toggle,
.nav-pills .nav-item.show .nav-link,
.nav-pills .nav-item.show .navbar .dropdown-toggle, .navbar
.nav-pills .nav-item.show .dropdown-toggle {
  color: #FFFFFF;
  cursor: default;
  background-color: radial-gradient(ellipse at center,#262626 0%,rgb(26,26,26) 100%); }

.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center; }

.nav-justified .nav-item {
  flex: 1 1 100%;
  text-align: center; }

.tab-content > .tab-pane {
  display: none; }

.tab-content > .active {
  display: block; }

.nav-tabs .nav-link, .nav-tabs .navbar .dropdown-toggle, .navbar .nav-tabs .dropdown-toggle {
  color: #55595c; }
  .nav-tabs .nav-link.active, .nav-tabs .navbar .active.dropdown-toggle, .navbar .nav-tabs .active.dropdown-toggle {
    color: #FFFFFF;
    background: #fff;
    border-color: #d1d4d7;
    border-bottom-color: #FFFFFF; }
    .nav-tabs .nav-link.active:focus, .nav-tabs .navbar .active.dropdown-toggle:focus, .navbar .nav-tabs .active.dropdown-toggle:focus {
      background: #fff;
      border-color: #d1d4d7;
      border-bottom-color: #FFFFFF; }

.tab-content {
  margin-top: -1px;
color: #FFFFFF;
    background: rgb(15,15,15);
    border-left: 1px solid rgb(35,35,35); }
  .tab-content .tab-pane {
    padding: 1rem 1rem; }

.card-block .tab-content {
  margin-top: 0;
  border: 0; }

.navbar {
  position: relative;
  display: flex;
  flex-direction: column;
  padding: 0.5rem 1rem;
 }

.navbar-brand {
  display: inline-block;
  padding-top: .25rem;
  padding-bottom: .25rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap; }
  .navbar-brand:focus, .navbar-brand:hover {
    text-decoration: none; }

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }
  .navbar-nav .nav-link, .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-nav .dropdown-toggle {
    padding-right: 0;
    padding-left: 0; }

.navbar-text {
  display: inline-block;
  padding-top: .425rem;
  padding-bottom: .425rem; }

.navbar-toggler {
  align-self: flex-start;
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background: transparent;
  border: 1px solid transparent; }
  .navbar-toggler:focus, .navbar-toggler:hover {
    text-decoration: none; }

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%; }

.navbar-toggler-left {
  position: absolute;
  left: 1rem; }

.navbar-toggler-right {
  position: absolute;
  right: 1rem; }

@media (max-width: 575px) {
  .navbar-toggleable .navbar-nav .dropdown-menu {
    position: static;
    float: none; }
  .navbar-toggleable > .container {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 576px) {
  .navbar-toggleable {
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center; }
    .navbar-toggleable .navbar-nav {
      flex-direction: row; }
      .navbar-toggleable .navbar-nav .nav-link, .navbar-toggleable .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-toggleable .navbar-nav .dropdown-toggle {
        padding-right: .5rem;
        padding-left: .5rem; }
    .navbar-toggleable > .container {
      display: flex;
      flex-wrap: nowrap;
      align-items: center; }
    .navbar-toggleable .navbar-collapse {
      display: flex !important;
      width: 100%; }
    .navbar-toggleable .navbar-toggler {
      display: none; } }

@media (max-width: 767px) {
  .navbar-toggleable-sm .navbar-nav .dropdown-menu {
    position: static;
    float: none; }
  .navbar-toggleable-sm > .container {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 768px) {
  .navbar-toggleable-sm {
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center; }
    .navbar-toggleable-sm .navbar-nav {
      flex-direction: row; }
      .navbar-toggleable-sm .navbar-nav .nav-link, .navbar-toggleable-sm .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-toggleable-sm .navbar-nav .dropdown-toggle {
        padding-right: .5rem;
        padding-left: .5rem; }
    .navbar-toggleable-sm > .container {
      display: flex;
      flex-wrap: nowrap;
      align-items: center; }
    .navbar-toggleable-sm .navbar-collapse {
      display: flex !important;
      width: 100%; }
    .navbar-toggleable-sm .navbar-toggler {
      display: none; } }

@media (max-width: 991px) {
  .navbar-toggleable-md .navbar-nav .dropdown-menu {
    position: static;
    float: none; }
  .navbar-toggleable-md > .container {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 992px) {
  .navbar-toggleable-md {
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center; }
    .navbar-toggleable-md .navbar-nav {
      flex-direction: row; }
      .navbar-toggleable-md .navbar-nav .nav-link, .navbar-toggleable-md .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-toggleable-md .navbar-nav .dropdown-toggle {
        padding-right: .5rem;
        padding-left: .5rem; }
    .navbar-toggleable-md > .container {
      display: flex;
      flex-wrap: nowrap;
      align-items: center; }
    .navbar-toggleable-md .navbar-collapse {
      display: flex !important;
      width: 100%; }
    .navbar-toggleable-md .navbar-toggler {
      display: none; } }

@media (max-width: 1199px) {
  .navbar-toggleable-lg .navbar-nav .dropdown-menu {
    position: static;
    float: none; }
  .navbar-toggleable-lg > .container {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 1200px) {
  .navbar-toggleable-lg {
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center; }
    .navbar-toggleable-lg .navbar-nav {
      flex-direction: row; }
      .navbar-toggleable-lg .navbar-nav .nav-link, .navbar-toggleable-lg .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-toggleable-lg .navbar-nav .dropdown-toggle {
        padding-right: .5rem;
        padding-left: .5rem; }
    .navbar-toggleable-lg > .container {
      display: flex;
      flex-wrap: nowrap;
      align-items: center; }
    .navbar-toggleable-lg .navbar-collapse {
      display: flex !important;
      width: 100%; }
    .navbar-toggleable-lg .navbar-toggler {
      display: none; } }

.navbar-toggleable-xl {
  flex-direction: row;
  flex-wrap: nowrap;
  align-items: center; }
  .navbar-toggleable-xl .navbar-nav .dropdown-menu {
    position: static;
    float: none; }
  .navbar-toggleable-xl > .container {
    padding-right: 0;
    padding-left: 0; }
  .navbar-toggleable-xl .navbar-nav {
    flex-direction: row; }
    .navbar-toggleable-xl .navbar-nav .nav-link, .navbar-toggleable-xl .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-toggleable-xl .navbar-nav .dropdown-toggle {
      padding-right: .5rem;
      padding-left: .5rem; }
  .navbar-toggleable-xl > .container {
    display: flex;
    flex-wrap: nowrap;
    align-items: center; }
  .navbar-toggleable-xl .navbar-collapse {
    display: flex !important;
    width: 100%; }
  .navbar-toggleable-xl .navbar-toggler {
    display: none; }

.navbar-light .navbar-brand,
.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.9); }
  .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover,
  .navbar-light .navbar-toggler:focus,
  .navbar-light .navbar-toggler:hover {
    color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-nav .nav-link, .navbar-light .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-light .navbar-nav .dropdown-toggle {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .navbar .dropdown-toggle:focus, .navbar .navbar-light .navbar-nav .dropdown-toggle:focus, .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .navbar .dropdown-toggle:hover, .navbar .navbar-light .navbar-nav .dropdown-toggle:hover {
    color: rgba(0, 0, 0, 0.7); }
  .navbar-light .navbar-nav .nav-link.disabled, .navbar-light .navbar-nav .navbar .disabled.dropdown-toggle, .navbar .navbar-light .navbar-nav .disabled.dropdown-toggle {
    color: rgba(0, 0, 0, 0.3); }

.navbar-light .navbar-nav .open > .nav-link, .navbar-light .navbar-nav .navbar .open > .dropdown-toggle, .navbar .navbar-light .navbar-nav .open > .dropdown-toggle,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .navbar .active > .dropdown-toggle, .navbar
.navbar-light .navbar-nav .active > .dropdown-toggle,
.navbar-light .navbar-nav .nav-link.open,
.navbar-light .navbar-nav .navbar .open.dropdown-toggle, .navbar
.navbar-light .navbar-nav .open.dropdown-toggle,
.navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .navbar .active.dropdown-toggle, .navbar
.navbar-light .navbar-nav .active.dropdown-toggle {
  color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-toggler {
  border-color: rgba(0, 0, 0, 0.1); }

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E"); }

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5); }

.navbar-inverse .navbar-brand,
.navbar-inverse .navbar-toggler {
  color: white; }
  .navbar-inverse .navbar-brand:focus, .navbar-inverse .navbar-brand:hover,
  .navbar-inverse .navbar-toggler:focus,
  .navbar-inverse .navbar-toggler:hover {
    color: white; }

.navbar-inverse .navbar-nav .nav-link, .navbar-inverse .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-inverse .navbar-nav .dropdown-toggle {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-inverse .navbar-nav .nav-link:focus, .navbar-inverse .navbar-nav .navbar .dropdown-toggle:focus, .navbar .navbar-inverse .navbar-nav .dropdown-toggle:focus, .navbar-inverse .navbar-nav .nav-link:hover, .navbar-inverse .navbar-nav .navbar .dropdown-toggle:hover, .navbar .navbar-inverse .navbar-nav .dropdown-toggle:hover {
    color: rgba(255, 255, 255, 0.75); }
  .navbar-inverse .navbar-nav .nav-link.disabled, .navbar-inverse .navbar-nav .navbar .disabled.dropdown-toggle, .navbar .navbar-inverse .navbar-nav .disabled.dropdown-toggle {
    color: rgba(255, 255, 255, 0.25); }

.navbar-inverse .navbar-nav .open > .nav-link, .navbar-inverse .navbar-nav .navbar .open > .dropdown-toggle, .navbar .navbar-inverse .navbar-nav .open > .dropdown-toggle,
.navbar-inverse .navbar-nav .active > .nav-link,
.navbar-inverse .navbar-nav .navbar .active > .dropdown-toggle, .navbar
.navbar-inverse .navbar-nav .active > .dropdown-toggle,
.navbar-inverse .navbar-nav .nav-link.open,
.navbar-inverse .navbar-nav .navbar .open.dropdown-toggle, .navbar
.navbar-inverse .navbar-nav .open.dropdown-toggle,
.navbar-inverse .navbar-nav .nav-link.active,
.navbar-inverse .navbar-nav .navbar .active.dropdown-toggle, .navbar
.navbar-inverse .navbar-nav .active.dropdown-toggle {
  color: white; }

.navbar-inverse .navbar-toggler {
  border-color: rgba(255, 255, 255, 0.1); }

.navbar-inverse .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E"); }

.navbar-inverse .navbar-text {
  color: rgba(255, 255, 255, 0.5); }

header.navbar {
  position: relative;
  flex-direction: row;
  height: 55px;
  padding: 0;
  color: #FFFFFF;
  background: rgb(15,15,15) url(../ex1080_default/img/mainnavbg.png) -30px center repeat-x;
  border-bottom: 1px solid rgb(35,35,35); }
  header.navbar .navbar-brand {
    display: inline-block;
    width: 200px;
    height: 55px;
    padding: 0.5rem 1rem;
    margin-right: 0;
    color: #FFFFFF;
  background: rgb(15,15,15) url(../ex1080_default/img/mainnavbg.png) -30px center repeat-x;
  border-bottom: 1px solid #390000; }
    background-position: center center;
    background-size: 70px auto;
 }
  header.navbar .navbar-nav {
    flex-direction: row;
    align-items: center; }
  header.navbar .nav-item {
    position: relative;
    min-width: 50px;
    margin: 0 !important;
    text-align: center; }
    header.navbar .nav-item .nav-link, header.navbar .nav-item .dropdown-toggle {
      padding-top: 0;
      padding-bottom: 0; }
      header.navbar .nav-item .nav-link .badge, header.navbar .nav-item .dropdown-toggle .badge {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -16px;
        margin-left: 0; }
      header.navbar .nav-item .nav-link > .img-avatar, header.navbar .nav-item .dropdown-toggle > .img-avatar {
        height: 35px;
        margin: 0 10px; }
  header.navbar .dropdown-menu {
    padding-bottom: 0;
    line-height: 1.5; }
  header.navbar .dropdown-item {
    min-width: 180px; }

.navbar-brand {
  color: rgba(0, 0, 0, 0.8); }
  .navbar-brand:focus, .navbar-brand:hover {
    color: rgba(0, 0, 0, 0.8); }

.navbar-nav .nav-link, .navbar-nav .navbar .dropdown-toggle, .navbar .navbar-nav .dropdown-toggle {
  color: #FFFFFF; }
  .navbar-nav .nav-link:focus, .navbar-nav .navbar .dropdown-toggle:focus, .navbar .navbar-nav .dropdown-toggle:focus, .navbar-nav .nav-link:hover, .navbar-nav .navbar .dropdown-toggle:hover, .navbar .navbar-nav .dropdown-toggle:hover {
    color: rgba(0, 0, 0, 0.6); }

.navbar-nav .open > .nav-link, .navbar-nav .navbar .open > .dropdown-toggle, .navbar .navbar-nav .open > .dropdown-toggle, .navbar-nav .open > .nav-link:focus, .navbar-nav .navbar .open > .dropdown-toggle:focus, .navbar .navbar-nav .open > .dropdown-toggle:focus, .navbar-nav .open > .nav-link:hover, .navbar-nav .navbar .open > .dropdown-toggle:hover, .navbar .navbar-nav .open > .dropdown-toggle:hover,
.navbar-nav .active > .nav-link,
.navbar-nav .navbar .active > .dropdown-toggle, .navbar
.navbar-nav .active > .dropdown-toggle,
.navbar-nav .active > .nav-link:focus,
.navbar-nav .navbar .active > .dropdown-toggle:focus, .navbar
.navbar-nav .active > .dropdown-toggle:focus,
.navbar-nav .active > .nav-link:hover,
.navbar-nav .navbar .active > .dropdown-toggle:hover, .navbar
.navbar-nav .active > .dropdown-toggle:hover,
.navbar-nav .nav-link.open,
.navbar-nav .navbar .open.dropdown-toggle, .navbar
.navbar-nav .open.dropdown-toggle,
.navbar-nav .nav-link.open:focus,
.navbar-nav .navbar .open.dropdown-toggle:focus, .navbar
.navbar-nav .open.dropdown-toggle:focus,
.navbar-nav .nav-link.open:hover,
.navbar-nav .navbar .open.dropdown-toggle:hover, .navbar
.navbar-nav .open.dropdown-toggle:hover,
.navbar-nav .nav-link.active,
.navbar-nav .navbar .active.dropdown-toggle, .navbar
.navbar-nav .active.dropdown-toggle,
.navbar-nav .nav-link.active:focus,
.navbar-nav .navbar .active.dropdown-toggle:focus, .navbar
.navbar-nav .active.dropdown-toggle:focus,
.navbar-nav .nav-link.active:hover,
.navbar-nav .navbar .active.dropdown-toggle:hover, .navbar
.navbar-nav .active.dropdown-toggle:hover {
  color: rgba(0, 0, 0, 0.8); }

.navbar-divider {
  background-color: rgba(0, 0, 0, 0.075); }

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  color: #FFFFFF;
  background: background: radial-gradient(ellipse at center,#262626 0%,rgb(26,26,26) 100%);
  border: 1px solid rgb(35,35,35); }

.card-block {
  flex: 1 1 auto;
  padding: 1.25rem; }

.card-title {
  margin-bottom: 0.75rem; }

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0; }

.card-text:last-child {
  margin-bottom: 0; }

.card-link:hover {
  text-decoration: none; }

.card-link + .card-link {
  margin-left: 1.25rem; }

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  color: #FFFFFF;
  background: rgb(15,15,15) url(../ex1080_default/img/mainnavbg.png) -30px center repeat-x;
  border-top: 1px solid rgb(35,35,35);
  border-bottom: 1px solid rgb(35,35,35); }

.card-footer {
  padding: 0.75rem 1.25rem; }

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0; }

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem; }

.card-primary {
  background-color: #FFFFFF;
  border-color: #FFFFFF; }
  .card-primary .card-header,
  .card-primary .card-footer {
    background-color: transparent; }

.card-success {
  background-color: #79c447;
  border-color: #79c447; }
  .card-success .card-header,
  .card-success .card-footer {
    background-color: transparent; }

.card-info {
  background-color: #67c2ef;
  border-color: #67c2ef; }
  .card-info .card-header,
  .card-info .card-footer {
    background-color: transparent; }

.card-warning {
  background-color: #fabb3d;
  border-color: #fabb3d; }
  .card-warning .card-header,
  .card-warning .card-footer {
    background-color: transparent; }

.card-danger {
  background-color: #ff5454;
  border-color: #ff5454; }
  .card-danger .card-header,
  .card-danger .card-footer {
    background-color: transparent; }

.card-outline-primary {
  background-color: transparent;
  border-color: #FFFFFF; }

.card-outline-secondary {
  background-color: transparent;
  border-color: #FFFFFF; }

.card-outline-info {
  background-color: transparent;
  border-color: #67c2ef; }

.card-outline-success {
  background-color: transparent;
  border-color: #79c447; }

.card-outline-warning {
  background-color: transparent;
  border-color: #fabb3d; }

.card-outline-danger {
  background-color: transparent;
  border-color: #ff5454; }

.card-inverse {
  color: rgba(255, 255, 255, 0.65); }
  .card-inverse .card-header,
  .card-inverse .card-footer {
    background-color: transparent;
    border-color: rgba(255, 255, 255, 0.2); }
  .card-inverse .card-header,
  .card-inverse .card-footer,
  .card-inverse .card-title,
  .card-inverse .card-blockquote {
    color: #FFFFFF; }
  .card-inverse .card-link,
  .card-inverse .card-text,
  .card-inverse .card-subtitle,
  .card-inverse .card-blockquote .blockquote-footer {
    color: rgba(255, 255, 255, 0.65); }
  .card-inverse .card-link:focus, .card-inverse .card-link:hover {
    color: #FFFFFF; }

.card-blockquote {
  padding: 0;
  margin-bottom: 0;
  border-left: 0; }

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem; }

@media (min-width: 576px) {
  .card-deck {
    display: flex;
    flex-flow: row wrap; }
    .card-deck .card {
      display: flex;
      flex: 1 0 0;
      flex-direction: column; }
      .card-deck .card:not(:first-child) {
        margin-left: 15px; }
      .card-deck .card:not(:last-child) {
        margin-right: 15px; } }

@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap; }
    .card-group .card {
      flex: 1 0 0; }
      .card-group .card + .card {
        margin-left: 0;
        border-left: 0; } }

@media (min-width: 576px) {
  .card-columns {
    column-count: 3;
    column-gap: 1.25rem; }
    .card-columns .card {
      display: inline-block;
      width: 100%;
      margin-bottom: 0.75rem; } }

.card {
  margin-bottom: 1.5rem; }

.card-header i.icon-bg {
  display: inline-block;
  padding: 0.75rem 1.25rem !important;
  margin-top: -0.75rem;
  margin-right: 1.25rem;
  margin-bottom: -0.75rem;
  margin-left: -1.25rem;
  line-height: inherit;
  color: #FFFFFF;
  vertical-align: bottom;
  background: transparent;
  border-right: 1px solid #d1d4d7; }

.card-header ul.nav.nav-tabs {
  margin-top: -0.75rem;
  margin-bottom: -0.75rem;
  border-bottom: 0; }
  .card-header ul.nav.nav-tabs li.nav-item {
    border-top: 0; }
    .card-header ul.nav.nav-tabs li.nav-item a.nav-link, .card-header ul.nav.nav-tabs li.nav-item .navbar a.dropdown-toggle, .navbar .card-header ul.nav.nav-tabs li.nav-item a.dropdown-toggle {
      padding: 0.75rem 0.625rem;
      color: #FFFFFF;
      border-top: 0; }
      .card-header ul.nav.nav-tabs li.nav-item a.nav-link.active, .card-header ul.nav.nav-tabs li.nav-item .navbar a.active.dropdown-toggle, .navbar .card-header ul.nav.nav-tabs li.nav-item a.active.dropdown-toggle {
        color: #FFFFFF;
        background: #fff; }

.card-header.card-header-inverse {
  color: #FFFFFF; }

.card-header.card-header-primary {
  margin: -1px -1px 0;
  background: rgb(35,35,35);
  border-bottom: 1px solid rgb(35,35,35); }

.card-header.card-header-secondary {
  margin: -1px -1px 0;
  background: #d1d4d7;
  border-bottom: 1px solid #d1d4d7; }

.card-header.card-header-success {
  margin: -1px -1px 0;
  background: #79c447;
  border-bottom: 1px solid #79c447; }

.card-header.card-header-info {
  margin: -1px -1px 0;
  background: #67c2ef;
  border-bottom: 1px solid #67c2ef; }

.card-header.card-header-warning {
  margin: -1px -1px 0;
  background: #fabb3d;
  border-bottom: 1px solid #fabb3d; }

.card-header.card-header-danger {
  margin: -1px -1px 0;
  background: #ff5454;
  border-bottom: 1px solid #ff5454; }

.card-header .btn, .card-header .fc button, .fc .card-header button {
  margin-top: -0.5rem; }

.card-header .btn-sm, .card-header .btn-group-sm > .btn, .card-header .fc .btn-group-sm > button, .fc .card-header .btn-group-sm > button {
  margin-top: -0.25rem; }

.card-header .btn-lg, .card-header .btn-group-lg > .btn, .card-header .fc .btn-group-lg > button, .fc .card-header .btn-group-lg > button {
  margin-top: -0.75rem; }

.card-footer ul {
  display: table;
  width: 100%;
  padding: 0;
  margin: 0;
  table-layout: fixed; }
  .card-footer ul li {
    display: table-cell;
    padding: 0 1.25rem;
    text-align: center; }
    .card-footer ul li progress {
      margin-top: 0.75rem;
      margin-bottom: 0; }

.card-primary {
  background-color: #FFFFFF; }
  .card-primary .card-header {
    border-color: #1d97c2; }
  .card-primary .card-header, .card-primary .card-footer {
    background-color: #1d97c2; }

.card-secondary {
  background-color: rgb(11,11,11); }
  .card-secondary .card-header {
    border-color: #c3c7cb; }
  .card-secondary .card-header, .card-secondary .card-footer {
    background-color: #c3c7cb; }

.card-success {
  background-color: #79c447; }
  .card-success .card-header {
    border-color: #6cb73b; }
  .card-success .card-header, .card-success .card-footer {
    background-color: #6cb73b; }

.card-info {
  background-color: #67c2ef; }
  .card-info .card-header {
    border-color: #50b9ed; }
  .card-info .card-header, .card-info .card-footer {
    background-color: #50b9ed; }

.card-warning {
  background-color: #fabb3d; }
  .card-warning .card-header {
    border-color: #f9b224; }
  .card-warning .card-header, .card-warning .card-footer {
    background-color: #f9b224; }

.card-danger {
  background-color: #ff5454; }
  .card-danger .card-header {
    border-color: #ff3b3b; }
  .card-danger .card-header, .card-danger .card-footer {
    background-color: #ff3b3b; }

.card-inverse {
  color: #FFFFFF; }
  .card-inverse .text-muted {
    color: rgba(255, 255, 255, 0.6) !important; }

[class*="card-outline-"] .card-block {
  background: #fff !important; }

[class*="card-outline-"].card-outline-top {
  border-top-width: 2px;
  border-right-color: #d1d4d7;
  border-bottom-color: #d1d4d7;
  border-left-color: #d1d4d7; }

.card-accent-primary {
  border-top-width: 2px;
  border-top-color: #FFFFFF; }

.card-accent-secondary {
  border-top-width: 2px;
  border-top-color: #FFFFFF; }

.card-accent-info {
  border-top-width: 2px;
  border-top-color: #67c2ef; }

.card-accent-success {
  border-top-width: 2px;
  border-top-color: #79c447; }

.card-accent-warning {
  border-top-width: 2px;
  border-top-color: #fabb3d; }

.card-accent-danger {
  border-top-width: 2px;
  border-top-color: #ff5454; }

.card-header > i {
  margin-right: 0.5rem; }

.card-header .card-actions {
  position: absolute;
  top: 0;
  right: 0; }
  .card-header .card-actions a, .card-header .card-actions button {
    display: block;
    float: left;
    width: 50px;
    padding: 0.75rem 0;
    margin: 0 !important;
    color: #FFFFFF;
    text-align: center;
    background: transparent;
    border: 0;
    border-left: 1px solid rgb(35,35,35);
    box-shadow: 0; }
    .card-header .card-actions a:hover, .card-header .card-actions button:hover {
      text-decoration: none; }
    .card-header .card-actions a [class^="icon-"], .card-header .card-actions a [class*=" icon-"], .card-header .card-actions button [class^="icon-"], .card-header .card-actions button [class*=" icon-"] {
      display: inline-block;
      vertical-align: middle; }
    .card-header .card-actions a i, .card-header .card-actions button i {
      display: inline-block;
      transition: .4s; }
    .card-header .card-actions a i.r180, .card-header .card-actions button i.r180 {
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg); }
  .card-header .card-actions .input-group {
    width: 230px;
    margin: 6px; }
    .card-header .card-actions .input-group .input-group-addon {
      background: #fff; }
    .card-header .card-actions .input-group input {
      border-left: 0; }

.card-full {
  margin-top: -1rem;
  margin-right: -15px;
  margin-left: -15px;
  border: 0;
  border-bottom: 1px solid #d1d4d7; }

@media (min-width: 576px) {
  .card-columns.cols-2 {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2; } }

.card.drag, .card .drag {
  cursor: move; }

.card-placeholder {
  background: rgba(0, 0, 0, 0.025);
  border: 1px dashed #818a91; }

.breadcrumb {
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #FFFFFF; }
  .breadcrumb::after {
    display: block;
    content: "";
    clear: both; }

.breadcrumb-item {
  float: left; }
  .breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    padding-left: 0.5rem;
    color: #FFFFFF;
    content: "/"; }
  .breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: underline; }
  .breadcrumb-item + .breadcrumb-item:hover::before {
    text-decoration: none; }
  .breadcrumb-item.active {
    color: #FFFFFF; }

.breadcrumb {
  position: relative;
  margin-bottom: 1.5rem;
  border-bottom: 1px solid #d1d4d7; }

.pagination {
  display: flex;
  padding-left: 0;
  list-style: none; }

.page-item:first-child .page-link, .pagination-datatables li:first-child .page-link, .pagination li:first-child .page-link, .page-item:first-child .pagination-datatables li a, .pagination-datatables li .page-item:first-child a, .pagination-datatables li:first-child a, .page-item:first-child .pagination li a, .pagination li .page-item:first-child a, .pagination li:first-child a {
  margin-left: 0; }

.page-item.active .page-link, .pagination-datatables li.active .page-link, .pagination li.active .page-link, .page-item.active .pagination-datatables li a, .pagination-datatables li .page-item.active a, .pagination-datatables li.active a, .page-item.active .pagination li a, .pagination li .page-item.active a, .pagination li.active a {
  z-index: 2;
  color: #FFFFFF;
  background-color: #FFFFFF;
  border-color: #FFFFFF; }

.page-item.disabled .page-link, .pagination-datatables li.disabled .page-link, .pagination li.disabled .page-link, .page-item.disabled .pagination-datatables li a, .pagination-datatables li .page-item.disabled a, .pagination-datatables li.disabled a, .page-item.disabled .pagination li a, .pagination li .page-item.disabled a, .pagination li.disabled a {
  color: #FFFFFF;
  pointer-events: none;
  cursor: not-allowed;
  background-color: #FFFFFF;
  border-color: #ddd; }

.page-link, .pagination-datatables li a, .pagination li a {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #FFFFFF;
  background-color: #FFFFFF;
  border: 1px solid #ddd; }
  .page-link:focus, .pagination-datatables li a:focus, .pagination li a:focus, .page-link:hover, .pagination-datatables li a:hover, .pagination li a:hover {
    color: #FFFFFF;
    text-decoration: none;
    background-color: rgb(11,11,11);
    border-color: #ddd; }

.pagination-lg .page-link, .pagination-lg .pagination-datatables li a, .pagination-datatables li .pagination-lg a, .pagination-lg .pagination li a, .pagination li .pagination-lg a {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem; }

.pagination-sm .page-link, .pagination-sm .pagination-datatables li a, .pagination-datatables li .pagination-sm a, .pagination-sm .pagination li a, .pagination li .pagination-sm a {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem; }

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #FFFFFF;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline; }
  .badge:empty {
    display: none; }

.btn .badge, .fc button .badge {
  position: relative;
  top: -1px; }

a.badge:focus, a.badge:hover {
  color: #FFFFFF;
  text-decoration: none;
  cursor: pointer; }

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em; }

.badge-default {
  background-color: #FFFFFF; }
  .badge-default[href]:focus, .badge-default[href]:hover {
    background-color: #687077; }

.badge-primary {
  background-color: #FFFFFF; }
  .badge-primary[href]:focus, .badge-primary[href]:hover {
    background-color: #1985ac; }

.badge-success {
  background-color: #79c447; }
  .badge-success[href]:focus, .badge-success[href]:hover {
    background-color: #61a434; }

.badge-info {
  background-color: #67c2ef; }
  .badge-info[href]:focus, .badge-info[href]:hover {
    background-color: #39afea; }

.badge-warning {
  background-color: #fabb3d; }
  .badge-warning[href]:focus, .badge-warning[href]:hover {
    background-color: #f9aa0b; }

.badge-danger {
  background-color: #ff5454; }
  .badge-danger[href]:focus, .badge-danger[href]:hover {
    background-color: #ff2121; }

.badge-seeds {
  background-color: #9966ff; }
  .badge-seeds[href]:focus, .badge-seeds[href]:hover {
    background-color: #ccb3ff; }

.badge-leechs {
  background-color: #00cc00; }
  .badge-leechs[href]:focus, .badge-leechs[href]:hover {
    background-color: #66ff66; }

.badge-ratio {
  background-color: #739900; }
  .badge-ratio[href]:focus, .badge-ratio[href]:hover {
    background-color: #99cc00; }

.badge-seedbonus {
  background-color: #009999; }
  .badge-seedbonus[href]:focus, .badge-seedbonus[href]:hover {
    background-color: #00b3b3; }

.badge-pill {
  border-radius: 10rem; }

.alert {
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent; }

.alert-heading {
  color: inherit; }

.alert-link {
  font-weight: bold; }

.alert-dismissible .close {
  position: relative;
  top: -0.75rem;
  right: -1.25rem;
  padding: 0.75rem 1.25rem;
  color: inherit; }

.alert-success {
  background-color: #dff0d8;
  border-color: #d0e9c6;
  color: #3c763d; }
  .alert-success hr {
    border-top-color: #c1e2b3; }
  .alert-success .alert-link {
    color: #2b542c; }

.alert-info {
  background-color: #d9edf7;
  border-color: #bcdff1;
  color: #31708f; }
  .alert-info hr {
    border-top-color: #a6d5ec; }
  .alert-info .alert-link {
    color: #245269; }

.alert-warning {
  background-color: #fcf8e3;
  border-color: #faf2cc;
  color: #8a6d3b; }
  .alert-warning hr {
    border-top-color: #f7ecb5; }
  .alert-warning .alert-link {
    color: #66512c; }

.alert-danger {
  background-color: #f2dede;
  border-color: #ebcccc;
  color: #a94442; }
  .alert-danger hr {
    border-top-color: #e4b9b9; }
  .alert-danger .alert-link {
    color: #843534; }

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

.progress {
  display: flex;
  overflow: hidden;
  font-size: 0.75rem;
  line-height: 1rem;
  text-align: center;
  background-color: rgb(11,11,11); }

.progress-bar {
  height: 1rem;
  color: #FFFFFF;
  background-color: #FFFFFF; }

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem; }

.progress-bar-animated {
  animation: progress-bar-stripes 1s linear infinite; }

.progress-xs {
  height: 4px; }

.progress-sm {
  height: 8px; }

.progress-white {
  background-color: rgba(255, 255, 255, 0.2) !important; }
  .progress-white .progress-bar {
    background-color: #FFFFFF; }

.media {
  display: flex;
  align-items: flex-start; }

.media-body {
  flex: 1; }

.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0; }

.list-group-item-action {
  width: 100%;
  color: #55595c;
  text-align: inherit; }
  .list-group-item-action .list-group-item-heading {
    color: #FFFFFF; }
  .list-group-item-action:focus, .list-group-item-action:hover {
    color: #55595c;
    text-decoration: none;
    background-color: rgb(11,11,11); }
  .list-group-item-action:active {
    color: #FFFFFF;
    background-color: rgb(11,11,11); }

.list-group-item {
  position: relative;
  display: flex;
  flex-flow: row wrap;
  align-items: center;
  padding: 0.75rem 1.25rem;
  margin-bottom: -1px;
  background-color: #FFFFFF;
  border: 1px solid rgba(0, 0, 0, 0.125); }
  .list-group-item:last-child {
    margin-bottom: 0; }
  .list-group-item:focus, .list-group-item:hover {
    text-decoration: none; }
  .list-group-item.disabled, .list-group-item:disabled {
    color: #FFFFFF;
    cursor: not-allowed;
    background-color: #FFFFFF; }
    .list-group-item.disabled .list-group-item-heading, .list-group-item:disabled .list-group-item-heading {
      color: inherit; }
    .list-group-item.disabled .list-group-item-text, .list-group-item:disabled .list-group-item-text {
      color: #FFFFFF; }
  .list-group-item.active {
    z-index: 2;
    color: #FFFFFF;
    background-color: #FFFFFF;
    border-color: #FFFFFF; }
    .list-group-item.active .list-group-item-heading,
    .list-group-item.active .list-group-item-heading > small,
    .list-group-item.active .list-group-item-heading > .small {
      color: inherit; }
    .list-group-item.active .list-group-item-text {
      color: #f9fdfe; }

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0; }

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0; }

.list-group-flush:last-child .list-group-item:last-child {
  border-bottom: 0; }

.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8; }

a.list-group-item-success,
button.list-group-item-success {
  color: #3c763d; }
  a.list-group-item-success .list-group-item-heading,
  button.list-group-item-success .list-group-item-heading {
    color: inherit; }
  a.list-group-item-success:focus, a.list-group-item-success:hover,
  button.list-group-item-success:focus,
  button.list-group-item-success:hover {
    color: #3c763d;
    background-color: #d0e9c6; }
  a.list-group-item-success.active,
  button.list-group-item-success.active {
    color: #FFFFFF;
    background-color: #3c763d;
    border-color: #3c763d; }

.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7; }

a.list-group-item-info,
button.list-group-item-info {
  color: #31708f; }
  a.list-group-item-info .list-group-item-heading,
  button.list-group-item-info .list-group-item-heading {
    color: inherit; }
  a.list-group-item-info:focus, a.list-group-item-info:hover,
  button.list-group-item-info:focus,
  button.list-group-item-info:hover {
    color: #31708f;
    background-color: #c4e3f3; }
  a.list-group-item-info.active,
  button.list-group-item-info.active {
    color: #FFFFFF;
    background-color: #31708f;
    border-color: #31708f; }

.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3; }

a.list-group-item-warning,
button.list-group-item-warning {
  color: #8a6d3b; }
  a.list-group-item-warning .list-group-item-heading,
  button.list-group-item-warning .list-group-item-heading {
    color: inherit; }
  a.list-group-item-warning:focus, a.list-group-item-warning:hover,
  button.list-group-item-warning:focus,
  button.list-group-item-warning:hover {
    color: #8a6d3b;
    background-color: #faf2cc; }
  a.list-group-item-warning.active,
  button.list-group-item-warning.active {
    color: #FFFFFF;
    background-color: #8a6d3b;
    border-color: #8a6d3b; }

.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede; }

a.list-group-item-danger,
button.list-group-item-danger {
  color: #a94442; }
  a.list-group-item-danger .list-group-item-heading,
  button.list-group-item-danger .list-group-item-heading {
    color: inherit; }
  a.list-group-item-danger:focus, a.list-group-item-danger:hover,
  button.list-group-item-danger:focus,
  button.list-group-item-danger:hover {
    color: #a94442;
    background-color: #ebcccc; }
  a.list-group-item-danger.active,
  button.list-group-item-danger.active {
    color: #FFFFFF;
    background-color: #a94442;
    border-color: #a94442; }

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden; }
  .embed-responsive::before {
    display: block;
    content: ""; }
  .embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0; }

.embed-responsive-21by9::before {
  padding-top: 42.85714%; }

.embed-responsive-16by9::before {
  padding-top: 56.25%; }

.embed-responsive-4by3::before {
  padding-top: 75%; }

.embed-responsive-1by1::before {
  padding-top: 100%; }

.close {
  float: right;
  font-size: 1.3125rem;
  font-weight: bold;
  line-height: 1;
  color: #FFFFFF;
  text-shadow: 0 1px 0 #fff;
  opacity: .5; }
  .close:focus, .close:hover {
    color: #FFFFFF;
    text-decoration: none;
    cursor: pointer;
    opacity: .75; }

button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none; }

.modal-open {
  overflow: hidden; }

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  outline: 0; }
  .modal.fade .modal-dialog {
    transition: transform 0.3s ease-out;
    transform: translate(0, -25%); }
  .modal.show .modal-dialog {
    transform: translate(0, 0); }

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px; }

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  background-color: #FFFFFF;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #FFFFFF; }
  .modal-backdrop.fade {
    opacity: 0; }
  .modal-backdrop.show {
    opacity: 0.5; }

.modal-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 15px;
  border-bottom: 1px solid #d1d4d7; }

.modal-title {
  margin-bottom: 0;
  line-height: 1.5; }

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 15px; }

.modal-footer {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding: 15px;
    border: 1px solid rgb(35,35,35); }
  .modal-footer > :not(:first-child) {
    margin-left: .25rem; }
  .modal-footer > :not(:last-child) {
    margin-right: .25rem; }

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll; }

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 30px auto; }
  .modal-sm {
    max-width: 300px; } }

@media (min-width: 992px) {
  .modal-lg {
    max-width: 800px; } }

.modal-primary .modal-content {
  border-color: #FFFFFF; }

.modal-primary .modal-header {
  color: #FFFFFF;
  background-color: #FFFFFF; }

.modal-secondary .modal-content {
  border-color: #d1d4d7; }

.modal-secondary .modal-header {
  color: #FFFFFF;
  background-color: rgb(11,11,11); }

.modal-success .modal-content {
  border-color: #79c447; }

.modal-success .modal-header {
  color: #FFFFFF;
  background-color: #79c447; }

.modal-info .modal-content {
  border-color: #67c2ef; }

.modal-info .modal-header {
  color: #FFFFFF;
  background-color: #67c2ef; }

.modal-warning .modal-content {
  border-color: #fabb3d; }

.modal-warning .modal-header {
  color: #FFFFFF;
  background-color: #fabb3d; }

.modal-danger .modal-content {
  border-color: #ff5454; }

.modal-danger .modal-header {
  color: #FFFFFF;
  background-color: #ff5454; }

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0; }
  .tooltip.show {
    opacity: 0.9; }
  .tooltip.tooltip-top, .tooltip.bs-tether-element-attached-bottom {
    padding: 5px 0;
    margin-top: -3px; }
    .tooltip.tooltip-top .tooltip-inner::before, .tooltip.bs-tether-element-attached-bottom .tooltip-inner::before {
      bottom: 0;
      left: 50%;
      margin-left: -5px;
      content: "";
      border-width: 5px 5px 0;
      border-top-color: #FFFFFF; }
  .tooltip.tooltip-right, .tooltip.bs-tether-element-attached-left {
    padding: 0 5px;
    margin-left: 3px; }
    .tooltip.tooltip-right .tooltip-inner::before, .tooltip.bs-tether-element-attached-left .tooltip-inner::before {
      top: 50%;
      left: 0;
      margin-top: -5px;
      content: "";
      border-width: 5px 5px 5px 0;
      border-right-color: #FFFFFF; }
  .tooltip.tooltip-bottom, .tooltip.bs-tether-element-attached-top {
    padding: 5px 0;
    margin-top: 3px; }
    .tooltip.tooltip-bottom .tooltip-inner::before, .tooltip.bs-tether-element-attached-top .tooltip-inner::before {
      top: 0;
      left: 50%;
      margin-left: -5px;
      content: "";
      border-width: 0 5px 5px;
      border-bottom-color: #FFFFFF; }
  .tooltip.tooltip-left, .tooltip.bs-tether-element-attached-right {
    padding: 0 5px;
    margin-left: -3px; }
    .tooltip.tooltip-left .tooltip-inner::before, .tooltip.bs-tether-element-attached-right .tooltip-inner::before {
      top: 50%;
      right: 0;
      margin-top: -5px;
      content: "";
      border-width: 5px 0 5px 5px;
      border-left-color: #FFFFFF; }

.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #FFFFFF;
  text-align: center;
  background-color: #FFFFFF; }
  .tooltip-inner::before {
    position: absolute;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid; }

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  padding: 1px;
  font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #FFFFFF;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2); }
  .popover.popover-top, .popover.bs-tether-element-attached-bottom {
    margin-top: -10px; }
    .popover.popover-top::before, .popover.popover-top::after, .popover.bs-tether-element-attached-bottom::before, .popover.bs-tether-element-attached-bottom::after {
      left: 50%;
      border-bottom-width: 0; }
    .popover.popover-top::before, .popover.bs-tether-element-attached-bottom::before {
      bottom: -11px;
      margin-left: -11px;
      border-top-color: rgba(0, 0, 0, 0.25); }
    .popover.popover-top::after, .popover.bs-tether-element-attached-bottom::after {
      bottom: -10px;
      margin-left: -10px;
      border-top-color: #FFFFFF; }
  .popover.popover-right, .popover.bs-tether-element-attached-left {
    margin-left: 10px; }
    .popover.popover-right::before, .popover.popover-right::after, .popover.bs-tether-element-attached-left::before, .popover.bs-tether-element-attached-left::after {
      top: 50%;
      border-left-width: 0; }
    .popover.popover-right::before, .popover.bs-tether-element-attached-left::before {
      left: -11px;
      margin-top: -11px;
      border-right-color: rgba(0, 0, 0, 0.25); }
    .popover.popover-right::after, .popover.bs-tether-element-attached-left::after {
      left: -10px;
      margin-top: -10px;
      border-right-color: #FFFFFF; }
  .popover.popover-bottom, .popover.bs-tether-element-attached-top {
    margin-top: 10px; }
    .popover.popover-bottom::before, .popover.popover-bottom::after, .popover.bs-tether-element-attached-top::before, .popover.bs-tether-element-attached-top::after {
      left: 50%;
      border-top-width: 0; }
    .popover.popover-bottom::before, .popover.bs-tether-element-attached-top::before {
      top: -11px;
      margin-left: -11px;
      border-bottom-color: rgba(0, 0, 0, 0.25); }
    .popover.popover-bottom::after, .popover.bs-tether-element-attached-top::after {
      top: -10px;
      margin-left: -10px;
      border-bottom-color: #f7f7f7; }
    .popover.popover-bottom .popover-title::before, .popover.bs-tether-element-attached-top .popover-title::before {
      position: absolute;
      top: 0;
      left: 50%;
      display: block;
      width: 20px;
      margin-left: -10px;
      content: "";
      border-bottom: 1px solid #f7f7f7; }
  .popover.popover-left, .popover.bs-tether-element-attached-right {
    margin-left: -10px; }
    .popover.popover-left::before, .popover.popover-left::after, .popover.bs-tether-element-attached-right::before, .popover.bs-tether-element-attached-right::after {
      top: 50%;
      border-right-width: 0; }
    .popover.popover-left::before, .popover.bs-tether-element-attached-right::before {
      right: -11px;
      margin-top: -11px;
      border-left-color: rgba(0, 0, 0, 0.25); }
    .popover.popover-left::after, .popover.bs-tether-element-attached-right::after {
      right: -10px;
      margin-top: -10px;
      border-left-color: #FFFFFF; }

.popover-title {
  padding: 8px 14px;
  margin-bottom: 0;
  font-size: 0.875rem;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb; }
  .popover-title:empty {
    display: none; }

.popover-content {
  padding: 9px 14px; }

.popover::before,
.popover::after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid; }

.popover::before {
  content: "";
  border-width: 11px; }

.popover::after {
  content: "";
  border-width: 10px; }

.carousel {
  position: relative; }

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden; }

.carousel-item {
  position: relative;
  display: none;
  width: 100%; }
  @media (-webkit-transform-3d) {
    .carousel-item {
      transition: transform 0.6s ease-in-out;
      backface-visibility: hidden;
      perspective: 1000px; } }
  @supports (transform: translate3d(0, 0, 0)) {
    .carousel-item {
      transition: transform 0.6s ease-in-out;
      backface-visibility: hidden;
      perspective: 1000px; } }

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: flex; }

.carousel-item-next,
.carousel-item-prev {
  position: absolute;
  top: 0; }

@media (-webkit-transform-3d) {
  .carousel-item-next.carousel-item-left,
  .carousel-item-prev.carousel-item-right {
    transform: translate3d(0, 0, 0); }
  .carousel-item-next,
  .active.carousel-item-right {
    transform: translate3d(100%, 0, 0); }
  .carousel-item-prev,
  .active.carousel-item-left {
    transform: translate3d(-100%, 0, 0); } }

@supports (transform: translate3d(0, 0, 0)) {
  .carousel-item-next.carousel-item-left,
  .carousel-item-prev.carousel-item-right {
    transform: translate3d(0, 0, 0); }
  .carousel-item-next,
  .active.carousel-item-right {
    transform: translate3d(100%, 0, 0); }
  .carousel-item-prev,
  .active.carousel-item-left {
    transform: translate3d(-100%, 0, 0); } }

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  color: #FFFFFF;
  text-align: center;
  opacity: 0.5; }
  .carousel-control-prev:focus, .carousel-control-prev:hover,
  .carousel-control-next:focus,
  .carousel-control-next:hover {
    color: #FFFFFF;
    text-decoration: none;
    outline: 0;
    opacity: .9; }

.carousel-control-prev {
  left: 0; }

.carousel-control-next {
  right: 0; }

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: transparent no-repeat center center;
  background-size: 100% 100%; }

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M4 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E"); }

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M1.5 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E"); }

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 10px;
  left: 0;
  z-index: 15;
  display: flex;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none; }
  .carousel-indicators li {
    position: relative;
    flex: 1 0 auto;
    max-width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: rgba(255, 255, 255, 0.5); }
    .carousel-indicators li::before {
      position: absolute;
      top: -10px;
      left: 0;
      display: inline-block;
      width: 100%;
      height: 10px;
      content: ""; }
    .carousel-indicators li::after {
      position: absolute;
      bottom: -10px;
      left: 0;
      display: inline-block;
      width: 100%;
      height: 10px;
      content: ""; }
  .carousel-indicators .active {
    background-color: #FFFFFF; }

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #FFFFFF;
  text-align: center; }

.align-baseline {
  vertical-align: baseline !important; }

.align-top {
  vertical-align: top !important; }

.align-middle {
  vertical-align: middle !important; }

.align-bottom {
  vertical-align: bottom !important; }

.align-text-bottom {
  vertical-align: text-bottom !important; }

.align-text-top {
  vertical-align: text-top !important; }

.bg-faded {
  background-color: #dcdddf; }

.bg-primary {
  color: #fff !important;
  background-color: rgb(35,35,35) !important; }

a.bg-primary:focus, a.bg-primary:hover {
  background-color: #1985ac; }

.bg-success {
  color: #fff !important;
  background-color: #79c447 !important; }

a.bg-success:focus, a.bg-success:hover {
  background-color: #61a434; }

.bg-info {
  color: #fff !important;
  background-color: #67c2ef !important; }

a.bg-info:focus, a.bg-info:hover {
  background-color: #39afea; }

.bg-warning {
  color: #fff !important;
  background-color: #fabb3d !important; }

a.bg-warning:focus, a.bg-warning:hover {
  background-color: #f9aa0b; }

.bg-danger {
  color: #fff !important;
  background-color: #ff5454 !important; }

a.bg-danger:focus, a.bg-danger:hover {
  background-color: #ff2121; }

.bg-inverse {
  color: #fff !important;
  background-color: #2a2c36 !important; }

a.bg-inverse:focus, a.bg-inverse:hover {
  background-color: #141519; }

.border-0 {
  border: 0 !important; }

.border-top-0 {
  border-top: 0 !important; }

.border-right-0 {
  border-right: 0 !important; }

.border-bottom-0 {
  border-bottom: 0 !important; }

.border-left-0 {
  border-left: 0 !important; }

.rounded-circle {
  border-radius: 50%; }

.rounded-0 {
  border-radius: 0; }

.clearfix::after {
  display: block;
  content: "";
  clear: both; }

.d-none {
  display: none !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-table {
  display: table !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex {
  display: flex !important; }

.d-inline-flex {
  display: inline-flex !important; }

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: flex !important; }
  .d-sm-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 768px) {
  .d-md-none {
    display: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: flex !important; }
  .d-md-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: flex !important; }
  .d-lg-inline-flex {
    display: inline-flex !important; } }

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: flex !important; }
  .d-xl-inline-flex {
    display: inline-flex !important; } }

.flex-first {
  order: -1; }

.flex-last {
  order: 1; }

.flex-unordered {
  order: 0; }

.flex-row {
  flex-direction: row !important; }

.flex-column {
  flex-direction: column !important; }

.flex-row-reverse {
  flex-direction: row-reverse !important; }

.flex-column-reverse {
  flex-direction: column-reverse !important; }

.flex-wrap {
  flex-wrap: wrap !important; }

.flex-nowrap {
  flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important; }

.justify-content-start {
  justify-content: flex-start !important; }

.justify-content-end {
  justify-content: flex-end !important; }

.justify-content-center {
  justify-content: center !important; }

.justify-content-between {
  justify-content: space-between !important; }

.justify-content-around {
  justify-content: space-around !important; }

.align-items-start {
  align-items: flex-start !important; }

.align-items-end {
  align-items: flex-end !important; }

.align-items-center {
  align-items: center !important; }

.align-items-baseline {
  align-items: baseline !important; }

.align-items-stretch {
  align-items: stretch !important; }

.align-content-start {
  align-content: flex-start !important; }

.align-content-end {
  align-content: flex-end !important; }

.align-content-center {
  align-content: center !important; }

.align-content-between {
  align-content: space-between !important; }

.align-content-around {
  align-content: space-around !important; }

.align-content-stretch {
  align-content: stretch !important; }

.align-self-auto {
  align-self: auto !important; }

.align-self-start {
  align-self: flex-start !important; }

.align-self-end {
  align-self: flex-end !important; }

.align-self-center {
  align-self: center !important; }

.align-self-baseline {
  align-self: baseline !important; }

.align-self-stretch {
  align-self: stretch !important; }

@media (min-width: 576px) {
  .flex-sm-first {
    order: -1; }
  .flex-sm-last {
    order: 1; }
  .flex-sm-unordered {
    order: 0; }
  .flex-sm-row {
    flex-direction: row !important; }
  .flex-sm-column {
    flex-direction: column !important; }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-sm-wrap {
    flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-sm-start {
    justify-content: flex-start !important; }
  .justify-content-sm-end {
    justify-content: flex-end !important; }
  .justify-content-sm-center {
    justify-content: center !important; }
  .justify-content-sm-between {
    justify-content: space-between !important; }
  .justify-content-sm-around {
    justify-content: space-around !important; }
  .align-items-sm-start {
    align-items: flex-start !important; }
  .align-items-sm-end {
    align-items: flex-end !important; }
  .align-items-sm-center {
    align-items: center !important; }
  .align-items-sm-baseline {
    align-items: baseline !important; }
  .align-items-sm-stretch {
    align-items: stretch !important; }
  .align-content-sm-start {
    align-content: flex-start !important; }
  .align-content-sm-end {
    align-content: flex-end !important; }
  .align-content-sm-center {
    align-content: center !important; }
  .align-content-sm-between {
    align-content: space-between !important; }
  .align-content-sm-around {
    align-content: space-around !important; }
  .align-content-sm-stretch {
    align-content: stretch !important; }
  .align-self-sm-auto {
    align-self: auto !important; }
  .align-self-sm-start {
    align-self: flex-start !important; }
  .align-self-sm-end {
    align-self: flex-end !important; }
  .align-self-sm-center {
    align-self: center !important; }
  .align-self-sm-baseline {
    align-self: baseline !important; }
  .align-self-sm-stretch {
    align-self: stretch !important; } }

@media (min-width: 768px) {
  .flex-md-first {
    order: -1; }
  .flex-md-last {
    order: 1; }
  .flex-md-unordered {
    order: 0; }
  .flex-md-row {
    flex-direction: row !important; }
  .flex-md-column {
    flex-direction: column !important; }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-md-wrap {
    flex-wrap: wrap !important; }
  .flex-md-nowrap {
    flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-md-start {
    justify-content: flex-start !important; }
  .justify-content-md-end {
    justify-content: flex-end !important; }
  .justify-content-md-center {
    justify-content: center !important; }
  .justify-content-md-between {
    justify-content: space-between !important; }
  .justify-content-md-around {
    justify-content: space-around !important; }
  .align-items-md-start {
    align-items: flex-start !important; }
  .align-items-md-end {
    align-items: flex-end !important; }
  .align-items-md-center {
    align-items: center !important; }
  .align-items-md-baseline {
    align-items: baseline !important; }
  .align-items-md-stretch {
    align-items: stretch !important; }
  .align-content-md-start {
    align-content: flex-start !important; }
  .align-content-md-end {
    align-content: flex-end !important; }
  .align-content-md-center {
    align-content: center !important; }
  .align-content-md-between {
    align-content: space-between !important; }
  .align-content-md-around {
    align-content: space-around !important; }
  .align-content-md-stretch {
    align-content: stretch !important; }
  .align-self-md-auto {
    align-self: auto !important; }
  .align-self-md-start {
    align-self: flex-start !important; }
  .align-self-md-end {
    align-self: flex-end !important; }
  .align-self-md-center {
    align-self: center !important; }
  .align-self-md-baseline {
    align-self: baseline !important; }
  .align-self-md-stretch {
    align-self: stretch !important; } }

@media (min-width: 992px) {
  .flex-lg-first {
    order: -1; }
  .flex-lg-last {
    order: 1; }
  .flex-lg-unordered {
    order: 0; }
  .flex-lg-row {
    flex-direction: row !important; }
  .flex-lg-column {
    flex-direction: column !important; }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-lg-wrap {
    flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-lg-start {
    justify-content: flex-start !important; }
  .justify-content-lg-end {
    justify-content: flex-end !important; }
  .justify-content-lg-center {
    justify-content: center !important; }
  .justify-content-lg-between {
    justify-content: space-between !important; }
  .justify-content-lg-around {
    justify-content: space-around !important; }
  .align-items-lg-start {
    align-items: flex-start !important; }
  .align-items-lg-end {
    align-items: flex-end !important; }
  .align-items-lg-center {
    align-items: center !important; }
  .align-items-lg-baseline {
    align-items: baseline !important; }
  .align-items-lg-stretch {
    align-items: stretch !important; }
  .align-content-lg-start {
    align-content: flex-start !important; }
  .align-content-lg-end {
    align-content: flex-end !important; }
  .align-content-lg-center {
    align-content: center !important; }
  .align-content-lg-between {
    align-content: space-between !important; }
  .align-content-lg-around {
    align-content: space-around !important; }
  .align-content-lg-stretch {
    align-content: stretch !important; }
  .align-self-lg-auto {
    align-self: auto !important; }
  .align-self-lg-start {
    align-self: flex-start !important; }
  .align-self-lg-end {
    align-self: flex-end !important; }
  .align-self-lg-center {
    align-self: center !important; }
  .align-self-lg-baseline {
    align-self: baseline !important; }
  .align-self-lg-stretch {
    align-self: stretch !important; } }

@media (min-width: 1200px) {
  .flex-xl-first {
    order: -1; }
  .flex-xl-last {
    order: 1; }
  .flex-xl-unordered {
    order: 0; }
  .flex-xl-row {
    flex-direction: row !important; }
  .flex-xl-column {
    flex-direction: column !important; }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important; }
  .flex-xl-wrap {
    flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important; }
  .justify-content-xl-start {
    justify-content: flex-start !important; }
  .justify-content-xl-end {
    justify-content: flex-end !important; }
  .justify-content-xl-center {
    justify-content: center !important; }
  .justify-content-xl-between {
    justify-content: space-between !important; }
  .justify-content-xl-around {
    justify-content: space-around !important; }
  .align-items-xl-start {
    align-items: flex-start !important; }
  .align-items-xl-end {
    align-items: flex-end !important; }
  .align-items-xl-center {
    align-items: center !important; }
  .align-items-xl-baseline {
    align-items: baseline !important; }
  .align-items-xl-stretch {
    align-items: stretch !important; }
  .align-content-xl-start {
    align-content: flex-start !important; }
  .align-content-xl-end {
    align-content: flex-end !important; }
  .align-content-xl-center {
    align-content: center !important; }
  .align-content-xl-between {
    align-content: space-between !important; }
  .align-content-xl-around {
    align-content: space-around !important; }
  .align-content-xl-stretch {
    align-content: stretch !important; }
  .align-self-xl-auto {
    align-self: auto !important; }
  .align-self-xl-start {
    align-self: flex-start !important; }
  .align-self-xl-end {
    align-self: flex-end !important; }
  .align-self-xl-center {
    align-self: center !important; }
  .align-self-xl-baseline {
    align-self: baseline !important; }
  .align-self-xl-stretch {
    align-self: stretch !important; } }

.float-left {
  float: left !important; }

.float-right {
  float: right !important; }

.float-none {
  float: none !important; }

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important; }
  .float-sm-right {
    float: right !important; }
  .float-sm-none {
    float: none !important; } }

@media (min-width: 768px) {
  .float-md-left {
    float: left !important; }
  .float-md-right {
    float: right !important; }
  .float-md-none {
    float: none !important; } }

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important; }
  .float-lg-right {
    float: right !important; }
  .float-lg-none {
    float: none !important; } }

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important; }
  .float-xl-right {
    float: right !important; }
  .float-xl-none {
    float: none !important; } }

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030; }

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030; }

.sticky-top {
  position: sticky;
  top: 0;
  z-index: 1030; }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto; }

.w-25 {
  width: 25% !important; }

.w-50 {
  width: 50% !important; }

.w-75 {
  width: 75% !important; }

.w-100 {
  width: 100% !important; }

.h-25 {
  height: 25% !important; }

.h-50 {
  height: 50% !important; }

.h-75 {
  height: 75% !important; }

.h-100 {
  height: 100% !important; }

.mw-100 {
  max-width: 100% !important; }

.mh-100 {
  max-height: 100% !important; }

.m-q {
  margin: 0.25rem 0.25rem !important; }

.mt-q {
  margin-top: 0.25rem !important; }

.mr-q {
  margin-right: 0.25rem !important; }

.mb-q {
  margin-bottom: 0.25rem !important; }

.ml-q {
  margin-left: 0.25rem !important; }

.mx-q {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important; }

.my-q {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important; }

.m-h {
  margin: 0.5rem 0.5rem !important; }

.mt-h {
  margin-top: 0.5rem !important; }

.mr-h {
  margin-right: 0.5rem !important; }

.mb-h {
  margin-bottom: 0.5rem !important; }

.ml-h {
  margin-left: 0.5rem !important; }

.mx-h {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important; }

.my-h {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important; }

.m-0 {
  margin: 0 0 !important; }

.mt-0 {
  margin-top: 0 !important; }

.mr-0 {
  margin-right: 0 !important; }

.mb-0 {
  margin-bottom: 0 !important; }

.ml-0 {
  margin-left: 0 !important; }

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important; }

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important; }

.m-1 {
  margin: 1rem 1rem !important; }

.mt-1 {
  margin-top: 1rem !important; }

.mr-1 {
  margin-right: 1rem !important; }

.mb-1 {
  margin-bottom: 1rem !important; }

.ml-1 {
  margin-left: 1rem !important; }

.mx-1 {
  margin-right: 1rem !important;
  margin-left: 1rem !important; }

.my-1 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important; }

.m-2 {
  margin: 1.5rem 1.5rem !important; }

.mt-2 {
  margin-top: 1.5rem !important; }

.mr-2 {
  margin-right: 1.5rem !important; }

.mb-2 {
  margin-bottom: 1.5rem !important; }

.ml-2 {
  margin-left: 1.5rem !important; }

.mx-2 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important; }

.my-2 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important; }

.m-3 {
  margin: 3rem 3rem !important; }

.mt-3 {
  margin-top: 3rem !important; }

.mr-3 {
  margin-right: 3rem !important; }

.mb-3 {
  margin-bottom: 3rem !important; }

.ml-3 {
  margin-left: 3rem !important; }

.mx-3 {
  margin-right: 3rem !important;
  margin-left: 3rem !important; }

.my-3 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important; }

.p-q {
  padding: 0.25rem 0.25rem !important; }

.pt-q {
  padding-top: 0.25rem !important; }

.pr-q {
  padding-right: 0.25rem !important; }

.pb-q {
  padding-bottom: 0.25rem !important; }

.pl-q {
  padding-left: 0.25rem !important; }

.px-q {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important; }

.py-q {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important; }

.p-h {
  padding: 0.5rem 0.5rem !important; }

.pt-h {
  padding-top: 0.5rem !important; }

.pr-h {
  padding-right: 0.5rem !important; }

.pb-h {
  padding-bottom: 0.5rem !important; }

.pl-h {
  padding-left: 0.5rem !important; }

.px-h {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important; }

.py-h {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important; }

.p-0 {
  padding: 0 0 !important; }

.pt-0 {
  padding-top: 0 !important; }

.pr-0 {
  padding-right: 0 !important; }

.pb-0 {
  padding-bottom: 0 !important; }

.pl-0 {
  padding-left: 0 !important; }

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important; }

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important; }

.p-1 {
  padding: 1rem 1rem !important; }

.pt-1 {
  padding-top: 1rem !important; }

.pr-1 {
  padding-right: 1rem !important; }

.pb-1 {
  padding-bottom: 1rem !important; }

.pl-1 {
  padding-left: 1rem !important; }

.px-1 {
  padding-right: 1rem !important;
  padding-left: 1rem !important; }

.py-1 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important; }

.p-2 {
  padding: 1.5rem 1.5rem !important; }

.pt-2 {
  padding-top: 1.5rem !important; }

.pr-2 {
  padding-right: 1.5rem !important; }

.pb-2 {
  padding-bottom: 1.5rem !important; }

.pl-2 {
  padding-left: 1.5rem !important; }

.px-2 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important; }

.py-2 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important; }

.p-3 {
  padding: 3rem 3rem !important; }

.pt-3 {
  padding-top: 3rem !important; }

.pr-3 {
  padding-right: 3rem !important; }

.pb-3 {
  padding-bottom: 3rem !important; }

.pl-3 {
  padding-left: 3rem !important; }

.px-3 {
  padding-right: 3rem !important;
  padding-left: 3rem !important; }

.py-3 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important; }

.m-auto {
  margin: auto !important; }

.mt-auto {
  margin-top: auto !important; }

.mr-auto {
  margin-right: auto !important; }

.mb-auto {
  margin-bottom: auto !important; }

.ml-auto {
  margin-left: auto !important; }

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important; }

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important; }

@media (min-width: 576px) {
  .m-sm-q {
    margin: 0.25rem 0.25rem !important; }
  .mt-sm-q {
    margin-top: 0.25rem !important; }
  .mr-sm-q {
    margin-right: 0.25rem !important; }
  .mb-sm-q {
    margin-bottom: 0.25rem !important; }
  .ml-sm-q {
    margin-left: 0.25rem !important; }
  .mx-sm-q {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .my-sm-q {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .m-sm-h {
    margin: 0.5rem 0.5rem !important; }
  .mt-sm-h {
    margin-top: 0.5rem !important; }
  .mr-sm-h {
    margin-right: 0.5rem !important; }
  .mb-sm-h {
    margin-bottom: 0.5rem !important; }
  .ml-sm-h {
    margin-left: 0.5rem !important; }
  .mx-sm-h {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .my-sm-h {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .m-sm-0 {
    margin: 0 0 !important; }
  .mt-sm-0 {
    margin-top: 0 !important; }
  .mr-sm-0 {
    margin-right: 0 !important; }
  .mb-sm-0 {
    margin-bottom: 0 !important; }
  .ml-sm-0 {
    margin-left: 0 !important; }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .m-sm-1 {
    margin: 1rem 1rem !important; }
  .mt-sm-1 {
    margin-top: 1rem !important; }
  .mr-sm-1 {
    margin-right: 1rem !important; }
  .mb-sm-1 {
    margin-bottom: 1rem !important; }
  .ml-sm-1 {
    margin-left: 1rem !important; }
  .mx-sm-1 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .my-sm-1 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .m-sm-2 {
    margin: 1.5rem 1.5rem !important; }
  .mt-sm-2 {
    margin-top: 1.5rem !important; }
  .mr-sm-2 {
    margin-right: 1.5rem !important; }
  .mb-sm-2 {
    margin-bottom: 1.5rem !important; }
  .ml-sm-2 {
    margin-left: 1.5rem !important; }
  .mx-sm-2 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .my-sm-2 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .m-sm-3 {
    margin: 3rem 3rem !important; }
  .mt-sm-3 {
    margin-top: 3rem !important; }
  .mr-sm-3 {
    margin-right: 3rem !important; }
  .mb-sm-3 {
    margin-bottom: 3rem !important; }
  .ml-sm-3 {
    margin-left: 3rem !important; }
  .mx-sm-3 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .my-sm-3 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .p-sm-q {
    padding: 0.25rem 0.25rem !important; }
  .pt-sm-q {
    padding-top: 0.25rem !important; }
  .pr-sm-q {
    padding-right: 0.25rem !important; }
  .pb-sm-q {
    padding-bottom: 0.25rem !important; }
  .pl-sm-q {
    padding-left: 0.25rem !important; }
  .px-sm-q {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .py-sm-q {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .p-sm-h {
    padding: 0.5rem 0.5rem !important; }
  .pt-sm-h {
    padding-top: 0.5rem !important; }
  .pr-sm-h {
    padding-right: 0.5rem !important; }
  .pb-sm-h {
    padding-bottom: 0.5rem !important; }
  .pl-sm-h {
    padding-left: 0.5rem !important; }
  .px-sm-h {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .py-sm-h {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .p-sm-0 {
    padding: 0 0 !important; }
  .pt-sm-0 {
    padding-top: 0 !important; }
  .pr-sm-0 {
    padding-right: 0 !important; }
  .pb-sm-0 {
    padding-bottom: 0 !important; }
  .pl-sm-0 {
    padding-left: 0 !important; }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .p-sm-1 {
    padding: 1rem 1rem !important; }
  .pt-sm-1 {
    padding-top: 1rem !important; }
  .pr-sm-1 {
    padding-right: 1rem !important; }
  .pb-sm-1 {
    padding-bottom: 1rem !important; }
  .pl-sm-1 {
    padding-left: 1rem !important; }
  .px-sm-1 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .py-sm-1 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .p-sm-2 {
    padding: 1.5rem 1.5rem !important; }
  .pt-sm-2 {
    padding-top: 1.5rem !important; }
  .pr-sm-2 {
    padding-right: 1.5rem !important; }
  .pb-sm-2 {
    padding-bottom: 1.5rem !important; }
  .pl-sm-2 {
    padding-left: 1.5rem !important; }
  .px-sm-2 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .py-sm-2 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .p-sm-3 {
    padding: 3rem 3rem !important; }
  .pt-sm-3 {
    padding-top: 3rem !important; }
  .pr-sm-3 {
    padding-right: 3rem !important; }
  .pb-sm-3 {
    padding-bottom: 3rem !important; }
  .pl-sm-3 {
    padding-left: 3rem !important; }
  .px-sm-3 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-sm-3 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mt-sm-auto {
    margin-top: auto !important; }
  .mr-sm-auto {
    margin-right: auto !important; }
  .mb-sm-auto {
    margin-bottom: auto !important; }
  .ml-sm-auto {
    margin-left: auto !important; }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; } }

@media (min-width: 768px) {
  .m-md-q {
    margin: 0.25rem 0.25rem !important; }
  .mt-md-q {
    margin-top: 0.25rem !important; }
  .mr-md-q {
    margin-right: 0.25rem !important; }
  .mb-md-q {
    margin-bottom: 0.25rem !important; }
  .ml-md-q {
    margin-left: 0.25rem !important; }
  .mx-md-q {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .my-md-q {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .m-md-h {
    margin: 0.5rem 0.5rem !important; }
  .mt-md-h {
    margin-top: 0.5rem !important; }
  .mr-md-h {
    margin-right: 0.5rem !important; }
  .mb-md-h {
    margin-bottom: 0.5rem !important; }
  .ml-md-h {
    margin-left: 0.5rem !important; }
  .mx-md-h {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .my-md-h {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .m-md-0 {
    margin: 0 0 !important; }
  .mt-md-0 {
    margin-top: 0 !important; }
  .mr-md-0 {
    margin-right: 0 !important; }
  .mb-md-0 {
    margin-bottom: 0 !important; }
  .ml-md-0 {
    margin-left: 0 !important; }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .m-md-1 {
    margin: 1rem 1rem !important; }
  .mt-md-1 {
    margin-top: 1rem !important; }
  .mr-md-1 {
    margin-right: 1rem !important; }
  .mb-md-1 {
    margin-bottom: 1rem !important; }
  .ml-md-1 {
    margin-left: 1rem !important; }
  .mx-md-1 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .my-md-1 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .m-md-2 {
    margin: 1.5rem 1.5rem !important; }
  .mt-md-2 {
    margin-top: 1.5rem !important; }
  .mr-md-2 {
    margin-right: 1.5rem !important; }
  .mb-md-2 {
    margin-bottom: 1.5rem !important; }
  .ml-md-2 {
    margin-left: 1.5rem !important; }
  .mx-md-2 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .my-md-2 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .m-md-3 {
    margin: 3rem 3rem !important; }
  .mt-md-3 {
    margin-top: 3rem !important; }
  .mr-md-3 {
    margin-right: 3rem !important; }
  .mb-md-3 {
    margin-bottom: 3rem !important; }
  .ml-md-3 {
    margin-left: 3rem !important; }
  .mx-md-3 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .my-md-3 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .p-md-q {
    padding: 0.25rem 0.25rem !important; }
  .pt-md-q {
    padding-top: 0.25rem !important; }
  .pr-md-q {
    padding-right: 0.25rem !important; }
  .pb-md-q {
    padding-bottom: 0.25rem !important; }
  .pl-md-q {
    padding-left: 0.25rem !important; }
  .px-md-q {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .py-md-q {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .p-md-h {
    padding: 0.5rem 0.5rem !important; }
  .pt-md-h {
    padding-top: 0.5rem !important; }
  .pr-md-h {
    padding-right: 0.5rem !important; }
  .pb-md-h {
    padding-bottom: 0.5rem !important; }
  .pl-md-h {
    padding-left: 0.5rem !important; }
  .px-md-h {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .py-md-h {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .p-md-0 {
    padding: 0 0 !important; }
  .pt-md-0 {
    padding-top: 0 !important; }
  .pr-md-0 {
    padding-right: 0 !important; }
  .pb-md-0 {
    padding-bottom: 0 !important; }
  .pl-md-0 {
    padding-left: 0 !important; }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .p-md-1 {
    padding: 1rem 1rem !important; }
  .pt-md-1 {
    padding-top: 1rem !important; }
  .pr-md-1 {
    padding-right: 1rem !important; }
  .pb-md-1 {
    padding-bottom: 1rem !important; }
  .pl-md-1 {
    padding-left: 1rem !important; }
  .px-md-1 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .py-md-1 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .p-md-2 {
    padding: 1.5rem 1.5rem !important; }
  .pt-md-2 {
    padding-top: 1.5rem !important; }
  .pr-md-2 {
    padding-right: 1.5rem !important; }
  .pb-md-2 {
    padding-bottom: 1.5rem !important; }
  .pl-md-2 {
    padding-left: 1.5rem !important; }
  .px-md-2 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .py-md-2 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .p-md-3 {
    padding: 3rem 3rem !important; }
  .pt-md-3 {
    padding-top: 3rem !important; }
  .pr-md-3 {
    padding-right: 3rem !important; }
  .pb-md-3 {
    padding-bottom: 3rem !important; }
  .pl-md-3 {
    padding-left: 3rem !important; }
  .px-md-3 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-md-3 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mt-md-auto {
    margin-top: auto !important; }
  .mr-md-auto {
    margin-right: auto !important; }
  .mb-md-auto {
    margin-bottom: auto !important; }
  .ml-md-auto {
    margin-left: auto !important; }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; } }

@media (min-width: 992px) {
  .m-lg-q {
    margin: 0.25rem 0.25rem !important; }
  .mt-lg-q {
    margin-top: 0.25rem !important; }
  .mr-lg-q {
    margin-right: 0.25rem !important; }
  .mb-lg-q {
    margin-bottom: 0.25rem !important; }
  .ml-lg-q {
    margin-left: 0.25rem !important; }
  .mx-lg-q {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .my-lg-q {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .m-lg-h {
    margin: 0.5rem 0.5rem !important; }
  .mt-lg-h {
    margin-top: 0.5rem !important; }
  .mr-lg-h {
    margin-right: 0.5rem !important; }
  .mb-lg-h {
    margin-bottom: 0.5rem !important; }
  .ml-lg-h {
    margin-left: 0.5rem !important; }
  .mx-lg-h {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .my-lg-h {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .m-lg-0 {
    margin: 0 0 !important; }
  .mt-lg-0 {
    margin-top: 0 !important; }
  .mr-lg-0 {
    margin-right: 0 !important; }
  .mb-lg-0 {
    margin-bottom: 0 !important; }
  .ml-lg-0 {
    margin-left: 0 !important; }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .m-lg-1 {
    margin: 1rem 1rem !important; }
  .mt-lg-1 {
    margin-top: 1rem !important; }
  .mr-lg-1 {
    margin-right: 1rem !important; }
  .mb-lg-1 {
    margin-bottom: 1rem !important; }
  .ml-lg-1 {
    margin-left: 1rem !important; }
  .mx-lg-1 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .my-lg-1 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .m-lg-2 {
    margin: 1.5rem 1.5rem !important; }
  .mt-lg-2 {
    margin-top: 1.5rem !important; }
  .mr-lg-2 {
    margin-right: 1.5rem !important; }
  .mb-lg-2 {
    margin-bottom: 1.5rem !important; }
  .ml-lg-2 {
    margin-left: 1.5rem !important; }
  .mx-lg-2 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .my-lg-2 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .m-lg-3 {
    margin: 3rem 3rem !important; }
  .mt-lg-3 {
    margin-top: 3rem !important; }
  .mr-lg-3 {
    margin-right: 3rem !important; }
  .mb-lg-3 {
    margin-bottom: 3rem !important; }
  .ml-lg-3 {
    margin-left: 3rem !important; }
  .mx-lg-3 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .my-lg-3 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .p-lg-q {
    padding: 0.25rem 0.25rem !important; }
  .pt-lg-q {
    padding-top: 0.25rem !important; }
  .pr-lg-q {
    padding-right: 0.25rem !important; }
  .pb-lg-q {
    padding-bottom: 0.25rem !important; }
  .pl-lg-q {
    padding-left: 0.25rem !important; }
  .px-lg-q {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .py-lg-q {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .p-lg-h {
    padding: 0.5rem 0.5rem !important; }
  .pt-lg-h {
    padding-top: 0.5rem !important; }
  .pr-lg-h {
    padding-right: 0.5rem !important; }
  .pb-lg-h {
    padding-bottom: 0.5rem !important; }
  .pl-lg-h {
    padding-left: 0.5rem !important; }
  .px-lg-h {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .py-lg-h {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .p-lg-0 {
    padding: 0 0 !important; }
  .pt-lg-0 {
    padding-top: 0 !important; }
  .pr-lg-0 {
    padding-right: 0 !important; }
  .pb-lg-0 {
    padding-bottom: 0 !important; }
  .pl-lg-0 {
    padding-left: 0 !important; }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .p-lg-1 {
    padding: 1rem 1rem !important; }
  .pt-lg-1 {
    padding-top: 1rem !important; }
  .pr-lg-1 {
    padding-right: 1rem !important; }
  .pb-lg-1 {
    padding-bottom: 1rem !important; }
  .pl-lg-1 {
    padding-left: 1rem !important; }
  .px-lg-1 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .py-lg-1 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .p-lg-2 {
    padding: 1.5rem 1.5rem !important; }
  .pt-lg-2 {
    padding-top: 1.5rem !important; }
  .pr-lg-2 {
    padding-right: 1.5rem !important; }
  .pb-lg-2 {
    padding-bottom: 1.5rem !important; }
  .pl-lg-2 {
    padding-left: 1.5rem !important; }
  .px-lg-2 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .py-lg-2 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .p-lg-3 {
    padding: 3rem 3rem !important; }
  .pt-lg-3 {
    padding-top: 3rem !important; }
  .pr-lg-3 {
    padding-right: 3rem !important; }
  .pb-lg-3 {
    padding-bottom: 3rem !important; }
  .pl-lg-3 {
    padding-left: 3rem !important; }
  .px-lg-3 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-lg-3 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mt-lg-auto {
    margin-top: auto !important; }
  .mr-lg-auto {
    margin-right: auto !important; }
  .mb-lg-auto {
    margin-bottom: auto !important; }
  .ml-lg-auto {
    margin-left: auto !important; }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; } }

@media (min-width: 1200px) {
  .m-xl-q {
    margin: 0.25rem 0.25rem !important; }
  .mt-xl-q {
    margin-top: 0.25rem !important; }
  .mr-xl-q {
    margin-right: 0.25rem !important; }
  .mb-xl-q {
    margin-bottom: 0.25rem !important; }
  .ml-xl-q {
    margin-left: 0.25rem !important; }
  .mx-xl-q {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .my-xl-q {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .m-xl-h {
    margin: 0.5rem 0.5rem !important; }
  .mt-xl-h {
    margin-top: 0.5rem !important; }
  .mr-xl-h {
    margin-right: 0.5rem !important; }
  .mb-xl-h {
    margin-bottom: 0.5rem !important; }
  .ml-xl-h {
    margin-left: 0.5rem !important; }
  .mx-xl-h {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .my-xl-h {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .m-xl-0 {
    margin: 0 0 !important; }
  .mt-xl-0 {
    margin-top: 0 !important; }
  .mr-xl-0 {
    margin-right: 0 !important; }
  .mb-xl-0 {
    margin-bottom: 0 !important; }
  .ml-xl-0 {
    margin-left: 0 !important; }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .m-xl-1 {
    margin: 1rem 1rem !important; }
  .mt-xl-1 {
    margin-top: 1rem !important; }
  .mr-xl-1 {
    margin-right: 1rem !important; }
  .mb-xl-1 {
    margin-bottom: 1rem !important; }
  .ml-xl-1 {
    margin-left: 1rem !important; }
  .mx-xl-1 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .my-xl-1 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .m-xl-2 {
    margin: 1.5rem 1.5rem !important; }
  .mt-xl-2 {
    margin-top: 1.5rem !important; }
  .mr-xl-2 {
    margin-right: 1.5rem !important; }
  .mb-xl-2 {
    margin-bottom: 1.5rem !important; }
  .ml-xl-2 {
    margin-left: 1.5rem !important; }
  .mx-xl-2 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .my-xl-2 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .m-xl-3 {
    margin: 3rem 3rem !important; }
  .mt-xl-3 {
    margin-top: 3rem !important; }
  .mr-xl-3 {
    margin-right: 3rem !important; }
  .mb-xl-3 {
    margin-bottom: 3rem !important; }
  .ml-xl-3 {
    margin-left: 3rem !important; }
  .mx-xl-3 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .my-xl-3 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .p-xl-q {
    padding: 0.25rem 0.25rem !important; }
  .pt-xl-q {
    padding-top: 0.25rem !important; }
  .pr-xl-q {
    padding-right: 0.25rem !important; }
  .pb-xl-q {
    padding-bottom: 0.25rem !important; }
  .pl-xl-q {
    padding-left: 0.25rem !important; }
  .px-xl-q {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .py-xl-q {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .p-xl-h {
    padding: 0.5rem 0.5rem !important; }
  .pt-xl-h {
    padding-top: 0.5rem !important; }
  .pr-xl-h {
    padding-right: 0.5rem !important; }
  .pb-xl-h {
    padding-bottom: 0.5rem !important; }
  .pl-xl-h {
    padding-left: 0.5rem !important; }
  .px-xl-h {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .py-xl-h {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .p-xl-0 {
    padding: 0 0 !important; }
  .pt-xl-0 {
    padding-top: 0 !important; }
  .pr-xl-0 {
    padding-right: 0 !important; }
  .pb-xl-0 {
    padding-bottom: 0 !important; }
  .pl-xl-0 {
    padding-left: 0 !important; }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .p-xl-1 {
    padding: 1rem 1rem !important; }
  .pt-xl-1 {
    padding-top: 1rem !important; }
  .pr-xl-1 {
    padding-right: 1rem !important; }
  .pb-xl-1 {
    padding-bottom: 1rem !important; }
  .pl-xl-1 {
    padding-left: 1rem !important; }
  .px-xl-1 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .py-xl-1 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .p-xl-2 {
    padding: 1.5rem 1.5rem !important; }
  .pt-xl-2 {
    padding-top: 1.5rem !important; }
  .pr-xl-2 {
    padding-right: 1.5rem !important; }
  .pb-xl-2 {
    padding-bottom: 1.5rem !important; }
  .pl-xl-2 {
    padding-left: 1.5rem !important; }
  .px-xl-2 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .py-xl-2 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .p-xl-3 {
    padding: 3rem 3rem !important; }
  .pt-xl-3 {
    padding-top: 3rem !important; }
  .pr-xl-3 {
    padding-right: 3rem !important; }
  .pb-xl-3 {
    padding-bottom: 3rem !important; }
  .pl-xl-3 {
    padding-left: 3rem !important; }
  .px-xl-3 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-xl-3 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mt-xl-auto {
    margin-top: auto !important; }
  .mr-xl-auto {
    margin-right: auto !important; }
  .mb-xl-auto {
    margin-bottom: auto !important; }
  .ml-xl-auto {
    margin-left: auto !important; }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; } }

.text-justify {
  text-align: justify !important; }

.text-nowrap {
  white-space: nowrap !important; }

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important; }
  .text-sm-right {
    text-align: right !important; }
  .text-sm-center {
    text-align: center !important; } }

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important; }
  .text-md-right {
    text-align: right !important; }
  .text-md-center {
    text-align: center !important; } }

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important; }
  .text-lg-right {
    text-align: right !important; }
  .text-lg-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important; }
  .text-xl-right {
    text-align: right !important; }
  .text-xl-center {
    text-align: center !important; } }

.text-lowercase {
  text-transform: lowercase !important; }

.text-uppercase {
  text-transform: uppercase !important; }

.text-capitalize {
  text-transform: capitalize !important; }

.font-weight-normal {
  font-weight: normal; }

.font-weight-bold {
  font-weight: bold; }

.font-italic {
  font-style: italic; }

.text-white {
  color: #fff !important; }

.text-muted {
  color: #818a91 !important; }

a.text-muted:focus, a.text-muted:hover {
  color: #687077 !important; }

.text-primary {
  color: rgb(35,35,35) !important; }

a.text-primary:focus, a.text-primary:hover {
  color: #1985ac !important; }

.text-success {
  color: #79c447 !important; }

a.text-success:focus, a.text-success:hover {
  color: #61a434 !important; }

.text-info {
  color: #67c2ef !important; }

a.text-info:focus, a.text-info:hover {
  color: #39afea !important; }

.text-warning {
  color: #fabb3d !important; }

a.text-warning:focus, a.text-warning:hover {
  color: #f9aa0b !important; }

.text-danger {
  color: #ff5454 !important; }

a.text-danger:focus, a.text-danger:hover {
  color: #ff2121 !important; }

.text-gray-dark {
  color: #2a2c36 !important; }

a.text-gray-dark:focus, a.text-gray-dark:hover {
  color: #141519 !important; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.invisible {
  visibility: hidden !important; }

.hidden-xs-up {
  display: none !important; }

@media (max-width: 575px) {
  .hidden-xs-down {
    display: none !important; } }

@media (min-width: 576px) {
  .hidden-sm-up {
    display: none !important; } }

@media (max-width: 767px) {
  .hidden-sm-down {
    display: none !important; } }

@media (min-width: 768px) {
  .hidden-md-up {
    display: none !important; } }

@media (max-width: 991px) {
  .hidden-md-down {
    display: none !important; } }

@media (min-width: 992px) {
  .hidden-lg-up {
    display: none !important; } }

@media (max-width: 1199px) {
  .hidden-lg-down {
    display: none !important; } }

@media (min-width: 1200px) {
  .hidden-xl-up {
    display: none !important; } }

.hidden-xl-down {
  display: none !important; }

.visible-print-block {
  display: none !important; }
  @media print {
    .visible-print-block {
      display: block !important; } }

.visible-print-inline {
  display: none !important; }
  @media print {
    .visible-print-inline {
      display: inline !important; } }

.visible-print-inline-block {
  display: none !important; }
  @media print {
    .visible-print-inline-block {
      display: inline-block !important; } }

@media print {
  .hidden-print {
    display: none !important; } }

/*
 *  Usage:
 *
      <div class="sk-rotating-plane"></div>
 *
 */
.sk-rotating-plane {
  width: 40px;
  height: 40px;
  background-color: #333;
  margin: 40px auto;
  animation: sk-rotatePlane 1.2s infinite ease-in-out; }

@keyframes sk-rotatePlane {
  0% {
    transform: perspective(120px) rotateX(0deg) rotateY(0deg); }
  50% {
    transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg); }
  100% {
    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg); } }

/*
 *  Usage:
 *
      <div class="sk-double-bounce">
        <div class="sk-child sk-double-bounce1"></div>
        <div class="sk-child sk-double-bounce2"></div>
      </div>
 *
 */
.sk-double-bounce {
  width: 40px;
  height: 40px;
  position: relative;
  margin: 40px auto; }
  .sk-double-bounce .sk-child {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: #333;
    opacity: 0.6;
    position: absolute;
    top: 0;
    left: 0;
    animation: sk-doubleBounce 2.0s infinite ease-in-out; }
  .sk-double-bounce .sk-double-bounce2 {
    animation-delay: -1.0s; }

@keyframes sk-doubleBounce {
  0%, 100% {
    transform: scale(0); }
  50% {
    transform: scale(1); } }

/*
 *  Usage:
 *
      <div class="sk-wave">
        <div class="sk-rect sk-rect1"></div>
        <div class="sk-rect sk-rect2"></div>
        <div class="sk-rect sk-rect3"></div>
        <div class="sk-rect sk-rect4"></div>
        <div class="sk-rect sk-rect5"></div>
      </div>
 *
 */
.sk-wave {
  margin: 40px auto;
  width: 50px;
  height: 40px;
  text-align: center;
  font-size: 10px; }
  .sk-wave .sk-rect {
    background-color: #333;
    height: 100%;
    width: 6px;
    display: inline-block;
    animation: sk-waveStretchDelay 1.2s infinite ease-in-out; }
  .sk-wave .sk-rect1 {
    animation-delay: -1.2s; }
  .sk-wave .sk-rect2 {
    animation-delay: -1.1s; }
  .sk-wave .sk-rect3 {
    animation-delay: -1s; }
  .sk-wave .sk-rect4 {
    animation-delay: -0.9s; }
  .sk-wave .sk-rect5 {
    animation-delay: -0.8s; }

@keyframes sk-waveStretchDelay {
  0%, 40%, 100% {
    transform: scaleY(0.4); }
  20% {
    transform: scaleY(1); } }

/*
 *  Usage:
 *
      <div class="sk-wandering-cubes">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
      </div>
 *
 */
.sk-wandering-cubes {
  margin: 40px auto;
  width: 40px;
  height: 40px;
  position: relative; }
  .sk-wandering-cubes .sk-cube {
    background-color: #333;
    width: 10px;
    height: 10px;
    position: absolute;
    top: 0;
    left: 0;
    animation: sk-wanderingCube 1.8s ease-in-out -1.8s infinite both; }
  .sk-wandering-cubes .sk-cube2 {
    animation-delay: -0.9s; }

@keyframes sk-wanderingCube {
  0% {
    transform: rotate(0deg); }
  25% {
    transform: translateX(30px) rotate(-90deg) scale(0.5); }
  50% {
    /* Hack to make FF rotate in the right direction */
    transform: translateX(30px) translateY(30px) rotate(-179deg); }
  50.1% {
    transform: translateX(30px) translateY(30px) rotate(-180deg); }
  75% {
    transform: translateX(0) translateY(30px) rotate(-270deg) scale(0.5); }
  100% {
    transform: rotate(-360deg); } }

/*
 *  Usage:
 *
      <div class="sk-spinner sk-spinner-pulse"></div>
 *
 */
.sk-spinner-pulse {
  width: 40px;
  height: 40px;
  margin: 40px auto;
  background-color: #333;
  border-radius: 100%;
  animation: sk-pulseScaleOut 1.0s infinite ease-in-out; }

@keyframes sk-pulseScaleOut {
  0% {
    transform: scale(0); }
  100% {
    transform: scale(1);
    opacity: 0; } }

/*
 *  Usage:
 *
      <div class="sk-chasing-dots">
        <div class="sk-child sk-dot1"></div>
        <div class="sk-child sk-dot2"></div>
      </div>
 *
 */
.sk-chasing-dots {
  margin: 40px auto;
  width: 40px;
  height: 40px;
  position: relative;
  text-align: center;
  animation: sk-chasingDotsRotate 2s infinite linear; }
  .sk-chasing-dots .sk-child {
    width: 60%;
    height: 60%;
    display: inline-block;
    position: absolute;
    top: 0;
    background-color: #333;
    border-radius: 100%;
    animation: sk-chasingDotsBounce 2s infinite ease-in-out; }
  .sk-chasing-dots .sk-dot2 {
    top: auto;
    bottom: 0;
    animation-delay: -1s; }

@keyframes sk-chasingDotsRotate {
  100% {
    transform: rotate(360deg); } }

@keyframes sk-chasingDotsBounce {
  0%, 100% {
    transform: scale(0); }
  50% {
    transform: scale(1); } }

/*
 *  Usage:
 *
      <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
      </div>
 *
 */
.sk-three-bounce {
  margin: 40px auto;
  width: 80px;
  text-align: center; }
  .sk-three-bounce .sk-child {
    width: 20px;
    height: 20px;
    background-color: #333;
    border-radius: 100%;
    display: inline-block;
    animation: sk-three-bounce 1.4s ease-in-out 0s infinite both; }
  .sk-three-bounce .sk-bounce1 {
    animation-delay: -0.32s; }
  .sk-three-bounce .sk-bounce2 {
    animation-delay: -0.16s; }

@keyframes sk-three-bounce {
  0%, 80%, 100% {
    transform: scale(0); }
  40% {
    transform: scale(1); } }

/*
 *  Usage:
 *
      <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
      </div>
 *
 */
.sk-circle {
  margin: 40px auto;
  width: 40px;
  height: 40px;
  position: relative; }
  .sk-circle .sk-child {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0; }
  .sk-circle .sk-child:before {
    content: '';
    display: block;
    margin: 0 auto;
    width: 15%;
    height: 15%;
    background-color: #333;
    border-radius: 100%;
    animation: sk-circleBounceDelay 1.2s infinite ease-in-out both; }
  .sk-circle .sk-circle2 {
    transform: rotate(30deg); }
  .sk-circle .sk-circle3 {
    transform: rotate(60deg); }
  .sk-circle .sk-circle4 {
    transform: rotate(90deg); }
  .sk-circle .sk-circle5 {
    transform: rotate(120deg); }
  .sk-circle .sk-circle6 {
    transform: rotate(150deg); }
  .sk-circle .sk-circle7 {
    transform: rotate(180deg); }
  .sk-circle .sk-circle8 {
    transform: rotate(210deg); }
  .sk-circle .sk-circle9 {
    transform: rotate(240deg); }
  .sk-circle .sk-circle10 {
    transform: rotate(270deg); }
  .sk-circle .sk-circle11 {
    transform: rotate(300deg); }
  .sk-circle .sk-circle12 {
    transform: rotate(330deg); }
  .sk-circle .sk-circle2:before {
    animation-delay: -1.1s; }
  .sk-circle .sk-circle3:before {
    animation-delay: -1s; }
  .sk-circle .sk-circle4:before {
    animation-delay: -0.9s; }
  .sk-circle .sk-circle5:before {
    animation-delay: -0.8s; }
  .sk-circle .sk-circle6:before {
    animation-delay: -0.7s; }
  .sk-circle .sk-circle7:before {
    animation-delay: -0.6s; }
  .sk-circle .sk-circle8:before {
    animation-delay: -0.5s; }
  .sk-circle .sk-circle9:before {
    animation-delay: -0.4s; }
  .sk-circle .sk-circle10:before {
    animation-delay: -0.3s; }
  .sk-circle .sk-circle11:before {
    animation-delay: -0.2s; }
  .sk-circle .sk-circle12:before {
    animation-delay: -0.1s; }

@keyframes sk-circleBounceDelay {
  0%, 80%, 100% {
    transform: scale(0); }
  40% {
    transform: scale(1); } }

/*
 *  Usage:
 *
      <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
      </div>
 *
 */
.sk-cube-grid {
  width: 40px;
  height: 40px;
  margin: 40px auto;
  /*
   * Spinner positions
   * 1 2 3
   * 4 5 6
   * 7 8 9
   */ }
  .sk-cube-grid .sk-cube {
    width: 33.33%;
    height: 33.33%;
    background-color: #333;
    float: left;
    animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out; }
  .sk-cube-grid .sk-cube1 {
    animation-delay: 0.2s; }
  .sk-cube-grid .sk-cube2 {
    animation-delay: 0.3s; }
  .sk-cube-grid .sk-cube3 {
    animation-delay: 0.4s; }
  .sk-cube-grid .sk-cube4 {
    animation-delay: 0.1s; }
  .sk-cube-grid .sk-cube5 {
    animation-delay: 0.2s; }
  .sk-cube-grid .sk-cube6 {
    animation-delay: 0.3s; }
  .sk-cube-grid .sk-cube7 {
    animation-delay: 0.0s; }
  .sk-cube-grid .sk-cube8 {
    animation-delay: 0.1s; }
  .sk-cube-grid .sk-cube9 {
    animation-delay: 0.2s; }

@keyframes sk-cubeGridScaleDelay {
  0%, 70%, 100% {
    transform: scale3D(1, 1, 1); }
  35% {
    transform: scale3D(0, 0, 1); } }

/*
 *  Usage:
 *
      <div class="sk-fading-circle">
        <div class="sk-circle1 sk-circle"></div>
        <div class="sk-circle2 sk-circle"></div>
        <div class="sk-circle3 sk-circle"></div>
        <div class="sk-circle4 sk-circle"></div>
        <div class="sk-circle5 sk-circle"></div>
        <div class="sk-circle6 sk-circle"></div>
        <div class="sk-circle7 sk-circle"></div>
        <div class="sk-circle8 sk-circle"></div>
        <div class="sk-circle9 sk-circle"></div>
        <div class="sk-circle10 sk-circle"></div>
        <div class="sk-circle11 sk-circle"></div>
        <div class="sk-circle12 sk-circle"></div>
      </div>
 *
 */
.sk-fading-circle {
  margin: 40px auto;
  width: 40px;
  height: 40px;
  position: relative; }
  .sk-fading-circle .sk-circle {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0; }
  .sk-fading-circle .sk-circle:before {
    content: '';
    display: block;
    margin: 0 auto;
    width: 15%;
    height: 15%;
    background-color: #333;
    border-radius: 100%;
    animation: sk-circleFadeDelay 1.2s infinite ease-in-out both; }
  .sk-fading-circle .sk-circle2 {
    transform: rotate(30deg); }
  .sk-fading-circle .sk-circle3 {
    transform: rotate(60deg); }
  .sk-fading-circle .sk-circle4 {
    transform: rotate(90deg); }
  .sk-fading-circle .sk-circle5 {
    transform: rotate(120deg); }
  .sk-fading-circle .sk-circle6 {
    transform: rotate(150deg); }
  .sk-fading-circle .sk-circle7 {
    transform: rotate(180deg); }
  .sk-fading-circle .sk-circle8 {
    transform: rotate(210deg); }
  .sk-fading-circle .sk-circle9 {
    transform: rotate(240deg); }
  .sk-fading-circle .sk-circle10 {
    transform: rotate(270deg); }
  .sk-fading-circle .sk-circle11 {
    transform: rotate(300deg); }
  .sk-fading-circle .sk-circle12 {
    transform: rotate(330deg); }
  .sk-fading-circle .sk-circle2:before {
    animation-delay: -1.1s; }
  .sk-fading-circle .sk-circle3:before {
    animation-delay: -1s; }
  .sk-fading-circle .sk-circle4:before {
    animation-delay: -0.9s; }
  .sk-fading-circle .sk-circle5:before {
    animation-delay: -0.8s; }
  .sk-fading-circle .sk-circle6:before {
    animation-delay: -0.7s; }
  .sk-fading-circle .sk-circle7:before {
    animation-delay: -0.6s; }
  .sk-fading-circle .sk-circle8:before {
    animation-delay: -0.5s; }
  .sk-fading-circle .sk-circle9:before {
    animation-delay: -0.4s; }
  .sk-fading-circle .sk-circle10:before {
    animation-delay: -0.3s; }
  .sk-fading-circle .sk-circle11:before {
    animation-delay: -0.2s; }
  .sk-fading-circle .sk-circle12:before {
    animation-delay: -0.1s; }

@keyframes sk-circleFadeDelay {
  0%, 39%, 100% {
    opacity: 0; }
  40% {
    opacity: 1; } }

/*
 *  Usage:
 *
      <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>
 *
 */
.sk-folding-cube {
  margin: 40px auto;
  width: 40px;
  height: 40px;
  position: relative;
  transform: rotateZ(45deg); }
  .sk-folding-cube .sk-cube {
    float: left;
    width: 50%;
    height: 50%;
    position: relative;
    transform: scale(1.1); }
  .sk-folding-cube .sk-cube:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #333;
    animation: sk-foldCubeAngle 2.4s infinite linear both;
    transform-origin: 100% 100%; }
  .sk-folding-cube .sk-cube2 {
    transform: scale(1.1) rotateZ(90deg); }
  .sk-folding-cube .sk-cube3 {
    transform: scale(1.1) rotateZ(180deg); }
  .sk-folding-cube .sk-cube4 {
    transform: scale(1.1) rotateZ(270deg); }
  .sk-folding-cube .sk-cube2:before {
    animation-delay: 0.3s; }
  .sk-folding-cube .sk-cube3:before {
    animation-delay: 0.6s; }
  .sk-folding-cube .sk-cube4:before {
    animation-delay: 0.9s; }

@keyframes sk-foldCubeAngle {
  0%, 10% {
    transform: perspective(140px) rotateX(-180deg);
    opacity: 0; }
  25%, 75% {
    transform: perspective(140px) rotateX(0deg);
    opacity: 1; }
  90%, 100% {
    transform: perspective(140px) rotateY(180deg);
    opacity: 0; } }

.chart-legend,
.bar-legend,
.line-legend,
.pie-legend,
.radar-legend,
.polararea-legend,
.doughnut-legend {
  list-style-type: none;
  margin-top: 5px;
  text-align: center;
  -webkit-padding-start: 0;
  -moz-padding-start: 0;
  padding-left: 0; }

.chart-legend li,
.bar-legend li,
.line-legend li,
.pie-legend li,
.radar-legend li,
.polararea-legend li,
.doughnut-legend li {
  display: inline-block;
  white-space: nowrap;
  position: relative;
  margin-bottom: 4px;
  padding: 2px 8px 2px 28px;
  font-size: smaller;
  cursor: default; }

.chart-legend li span,
.bar-legend li span,
.line-legend li span,
.pie-legend li span,
.radar-legend li span,
.polararea-legend li span,
.doughnut-legend li span {
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  width: 20px;
  height: 20px; }

/*!
* Ladda
* http://lab.hakim.se/ladda
* MIT licensed
*
* Copyright (C) 2016 Hakim El Hattab, http://hakim.se
*/
/*************************************
* CONFIG
*/
/*************************************
* MIXINS
*/
/*************************************
* BUTTON BASE
*/
.ladda-button {
  position: relative; }

/* Spinner animation */
.ladda-button .ladda-spinner {
  position: absolute;
  z-index: 2;
  display: inline-block;
  width: 32px;
  height: 32px;
  top: 50%;
  margin-top: 0;
  opacity: 0;
  pointer-events: none; }

/* Button label */
.ladda-button .ladda-label {
  position: relative;
  z-index: 3; }

/* Progress bar */
.ladda-button .ladda-progress {
  position: absolute;
  width: 0;
  height: 100%;
  left: 0;
  top: 0;
  background: rgba(0, 0, 0, 0.2);
  visibility: hidden;
  opacity: 0;
  -webkit-transition: 0.1s linear all !important;
  -moz-transition: 0.1s linear all !important;
  -ms-transition: 0.1s linear all !important;
  -o-transition: 0.1s linear all !important;
  transition: 0.1s linear all !important; }

.ladda-button[data-loading] .ladda-progress {
  opacity: 1;
  visibility: visible; }

/*************************************
* EASING
*/
.ladda-button,
.ladda-button .ladda-spinner,
.ladda-button .ladda-label {
  -webkit-transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all !important;
  -moz-transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all !important;
  -ms-transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all !important;
  -o-transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all !important;
  transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275) all !important; }

.ladda-button[data-style=zoom-in],
.ladda-button[data-style=zoom-in] .ladda-spinner,
.ladda-button[data-style=zoom-in] .ladda-label,
.ladda-button[data-style=zoom-out],
.ladda-button[data-style=zoom-out] .ladda-spinner,
.ladda-button[data-style=zoom-out] .ladda-label {
  -webkit-transition: 0.3s ease all !important;
  -moz-transition: 0.3s ease all !important;
  -ms-transition: 0.3s ease all !important;
  -o-transition: 0.3s ease all !important;
  transition: 0.3s ease all !important; }

/*************************************
* EXPAND LEFT
*/
.ladda-button[data-style=expand-right] .ladda-spinner {
  right: -6px; }

.ladda-button[data-style=expand-right][data-size="s"] .ladda-spinner,
.ladda-button[data-style=expand-right][data-size="xs"] .ladda-spinner {
  right: -12px; }

.ladda-button[data-style=expand-right][data-loading] {
  padding-right: 56px; }
  .ladda-button[data-style=expand-right][data-loading] .ladda-spinner {
    opacity: 1; }
  .ladda-button[data-style=expand-right][data-loading][data-size="s"], .ladda-button[data-style=expand-right][data-loading][data-size="xs"] {
    padding-right: 40px; }

/*************************************
* EXPAND RIGHT
*/
.ladda-button[data-style=expand-left] .ladda-spinner {
  left: 26px; }

.ladda-button[data-style=expand-left][data-size="s"] .ladda-spinner,
.ladda-button[data-style=expand-left][data-size="xs"] .ladda-spinner {
  left: 4px; }

.ladda-button[data-style=expand-left][data-loading] {
  padding-left: 56px; }
  .ladda-button[data-style=expand-left][data-loading] .ladda-spinner {
    opacity: 1; }
  .ladda-button[data-style=expand-left][data-loading][data-size="s"], .ladda-button[data-style=expand-left][data-loading][data-size="xs"] {
    padding-left: 40px; }

/*************************************
* EXPAND UP
*/
.ladda-button[data-style=expand-up] {
  overflow: hidden; }
  .ladda-button[data-style=expand-up] .ladda-spinner {
    top: -32px;
    left: 50%;
    margin-left: 0; }
  .ladda-button[data-style=expand-up][data-loading] {
    padding-top: 54px; }
    .ladda-button[data-style=expand-up][data-loading] .ladda-spinner {
      opacity: 1;
      top: 26px;
      margin-top: 0; }
    .ladda-button[data-style=expand-up][data-loading][data-size="s"], .ladda-button[data-style=expand-up][data-loading][data-size="xs"] {
      padding-top: 32px; }
      .ladda-button[data-style=expand-up][data-loading][data-size="s"] .ladda-spinner, .ladda-button[data-style=expand-up][data-loading][data-size="xs"] .ladda-spinner {
        top: 4px; }

/*************************************
* EXPAND DOWN
*/
.ladda-button[data-style=expand-down] {
  overflow: hidden; }
  .ladda-button[data-style=expand-down] .ladda-spinner {
    top: 62px;
    left: 50%;
    margin-left: 0; }
  .ladda-button[data-style=expand-down][data-size="s"] .ladda-spinner,
  .ladda-button[data-style=expand-down][data-size="xs"] .ladda-spinner {
    top: 40px; }
  .ladda-button[data-style=expand-down][data-loading] {
    padding-bottom: 54px; }
    .ladda-button[data-style=expand-down][data-loading] .ladda-spinner {
      opacity: 1; }
    .ladda-button[data-style=expand-down][data-loading][data-size="s"], .ladda-button[data-style=expand-down][data-loading][data-size="xs"] {
      padding-bottom: 32px; }

/*************************************
* SLIDE LEFT
*/
.ladda-button[data-style=slide-left] {
  overflow: hidden; }
  .ladda-button[data-style=slide-left] .ladda-label {
    position: relative; }
  .ladda-button[data-style=slide-left] .ladda-spinner {
    left: 100%;
    margin-left: 0; }
  .ladda-button[data-style=slide-left][data-loading] .ladda-label {
    opacity: 0;
    left: -100%; }
  .ladda-button[data-style=slide-left][data-loading] .ladda-spinner {
    opacity: 1;
    left: 50%; }

/*************************************
* SLIDE RIGHT
*/
.ladda-button[data-style=slide-right] {
  overflow: hidden; }
  .ladda-button[data-style=slide-right] .ladda-label {
    position: relative; }
  .ladda-button[data-style=slide-right] .ladda-spinner {
    right: 100%;
    margin-left: 0;
    left: 16px; }
  .ladda-button[data-style=slide-right][data-loading] .ladda-label {
    opacity: 0;
    left: 100%; }
  .ladda-button[data-style=slide-right][data-loading] .ladda-spinner {
    opacity: 1;
    left: 50%; }

/*************************************
* SLIDE UP
*/
.ladda-button[data-style=slide-up] {
  overflow: hidden; }
  .ladda-button[data-style=slide-up] .ladda-label {
    position: relative; }
  .ladda-button[data-style=slide-up] .ladda-spinner {
    left: 50%;
    margin-left: 0;
    margin-top: 1em; }
  .ladda-button[data-style=slide-up][data-loading] .ladda-label {
    opacity: 0;
    top: -1em; }
  .ladda-button[data-style=slide-up][data-loading] .ladda-spinner {
    opacity: 1;
    margin-top: 0; }

/*************************************
* SLIDE DOWN
*/
.ladda-button[data-style=slide-down] {
  overflow: hidden; }
  .ladda-button[data-style=slide-down] .ladda-label {
    position: relative; }
  .ladda-button[data-style=slide-down] .ladda-spinner {
    left: 50%;
    margin-left: 0;
    margin-top: -2em; }
  .ladda-button[data-style=slide-down][data-loading] .ladda-label {
    opacity: 0;
    top: 1em; }
  .ladda-button[data-style=slide-down][data-loading] .ladda-spinner {
    opacity: 1;
    margin-top: 0; }

/*************************************
* ZOOM-OUT
*/
.ladda-button[data-style=zoom-out] {
  overflow: hidden; }

.ladda-button[data-style=zoom-out] .ladda-spinner {
  left: 50%;
  margin-left: 32px;
  -webkit-transform: scale(2.5);
  -moz-transform: scale(2.5);
  -ms-transform: scale(2.5);
  -o-transform: scale(2.5);
  transform: scale(2.5); }

.ladda-button[data-style=zoom-out] .ladda-label {
  position: relative;
  display: inline-block; }

.ladda-button[data-style=zoom-out][data-loading] .ladda-label {
  opacity: 0;
  -webkit-transform: scale(0.5);
  -moz-transform: scale(0.5);
  -ms-transform: scale(0.5);
  -o-transform: scale(0.5);
  transform: scale(0.5); }

.ladda-button[data-style=zoom-out][data-loading] .ladda-spinner {
  opacity: 1;
  margin-left: 0;
  -webkit-transform: none;
  -moz-transform: none;
  -ms-transform: none;
  -o-transform: none;
  transform: none; }

/*************************************
* ZOOM-IN
*/
.ladda-button[data-style=zoom-in] {
  overflow: hidden; }

.ladda-button[data-style=zoom-in] .ladda-spinner {
  left: 50%;
  margin-left: -16px;
  -webkit-transform: scale(0.2);
  -moz-transform: scale(0.2);
  -ms-transform: scale(0.2);
  -o-transform: scale(0.2);
  transform: scale(0.2); }

.ladda-button[data-style=zoom-in] .ladda-label {
  position: relative;
  display: inline-block; }

.ladda-button[data-style=zoom-in][data-loading] .ladda-label {
  opacity: 0;
  -webkit-transform: scale(2.2);
  -moz-transform: scale(2.2);
  -ms-transform: scale(2.2);
  -o-transform: scale(2.2);
  transform: scale(2.2); }

.ladda-button[data-style=zoom-in][data-loading] .ladda-spinner {
  opacity: 1;
  margin-left: 0;
  -webkit-transform: none;
  -moz-transform: none;
  -ms-transform: none;
  -o-transform: none;
  transform: none; }

/*************************************
* CONTRACT
*/
.ladda-button[data-style=contract] {
  overflow: hidden;
  width: 100px; }

.ladda-button[data-style=contract] .ladda-spinner {
  left: 50%;
  margin-left: 0; }

.ladda-button[data-style=contract][data-loading] {
  border-radius: 50%;
  width: 52px; }

.ladda-button[data-style=contract][data-loading] .ladda-label {
  opacity: 0; }

.ladda-button[data-style=contract][data-loading] .ladda-spinner {
  opacity: 1; }

/*************************************
* OVERLAY
*/
.ladda-button[data-style=contract-overlay] {
  overflow: hidden;
  width: 100px;
  box-shadow: 0px 0px 0px 2000px transparent; }

.ladda-button[data-style=contract-overlay] .ladda-spinner {
  left: 50%;
  margin-left: 0; }

.ladda-button[data-style=contract-overlay][data-loading] {
  border-radius: 50%;
  width: 52px;
  /*outline: 10000px solid rgba( 0, 0, 0, 0.5 );*/
  box-shadow: 0px 0px 0px 2000px rgba(0, 0, 0, 0.8); }

.ladda-button[data-style=contract-overlay][data-loading] .ladda-label {
  opacity: 0; }

.ladda-button[data-style=contract-overlay][data-loading] .ladda-spinner {
  opacity: 1; }

.toast-title {
  font-weight: bold; }

.toast-message {
  -ms-word-wrap: break-word;
  word-wrap: break-word; }

.toast-message a,
.toast-message label {
  color: #ffffff; }

.toast-message a:hover {
  color: #cccccc;
  text-decoration: none; }

.toast-close-button {
  position: relative;
  right: -0.3em;
  top: -0.3em;
  float: right;
  font-size: 20px;
  font-weight: bold;
  color: #ffffff;
  -webkit-text-shadow: 0 1px 0 #ffffff;
  text-shadow: 0 1px 0 #ffffff;
  opacity: 0.8;
  -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
  filter: alpha(opacity=80); }

.toast-close-button:hover,
.toast-close-button:focus {
  color: #000000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.4;
  -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
  filter: alpha(opacity=40); }

/*Additional properties for button version
iOS requires the button element instead of an anchor tag.
If you want the anchor version, it requires `href="#"`.*/
button.toast-close-button {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none; }

.toast-top-center {
  top: 0;
  right: 0;
  width: 100%; }

.toast-bottom-center {
  bottom: 0;
  right: 0;
  width: 100%; }

.toast-top-full-width {
  top: 0;
  right: 0;
  width: 100%; }

.toast-bottom-full-width {
  bottom: 0;
  right: 0;
  width: 100%; }

.toast-top-left {
  top: 12px;
  left: 12px; }

.toast-top-right {
  top: 12px;
  right: 12px; }

.toast-bottom-right {
  right: 12px;
  bottom: 12px; }

.toast-bottom-left {
  bottom: 12px;
  left: 12px; }

#toast-container {
  position: fixed;
  z-index: 999999;
  /*overrides*/ }

#toast-container * {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }

#toast-container .toast {
  position: relative;
  overflow: hidden;
  margin: 0 0 6px;
  padding: 15px 15px 15px 50px;
  width: 300px;
  background-position: 15px center;
  background-repeat: no-repeat;
  color: #ffffff;
  opacity: 0.9;
  -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=90);
  filter: alpha(opacity=90); }

#toast-container .toast:hover {
  opacity: 1;
  -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
  filter: alpha(opacity=100);
  cursor: pointer; }

#toast-container .toast {
  background-image: none !important; }

#toast-container .toast:before {
  position: relative;
  font-family: simple-line-icons;
  font-size: 24px;
  line-height: 18px;
  float: left;
  margin: 13px 0 0 -35px; }

#toast-container .toast-warning:before {
  content: "\e01c"; }

#toast-container .toast-error:before {
  content: "\e082"; }

#toast-container .toast-info:before {
  content: "\e08b"; }

#toast-container .toast-success:before {
  content: "\e080"; }

#toast-container.toast-top-center > div,
#toast-container.toast-bottom-center > div {
  width: 300px;
  margin: auto; }

#toast-container.toast-top-full-width > div,
#toast-container.toast-bottom-full-width > div {
  width: 96%;
  margin: auto; }

.toast {
  background-color: #FFFFFF; }

.toast-success {
  background-color: #79c447; }

.toast-error {
  background-color: #ff5454; }

.toast-info {
    background-color: rgb(11,11,11);
    border: 1px solid rgb(35,35,35); }

.toast-info:hover {
    background-color: #1985ac;
    border: 1px solid rgb(35,35,35); }

.toast-info:active {
    background-color: rgb(11,11,11);
    border: 1px solid rgb(35,35,35); }

.toast-info:visited {
    background-color: rgb(11,11,11);
    border: 1px solid rgb(35,35,35); }

.toast-warning {
  background-color: #fabb3d; }

progress-bar,
.toast-progress {
  position: absolute;
  left: 0;
  bottom: 0;
  height: 4px;
  background-color: #000000;
  opacity: .2;
  -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=20);
  filter: alpha(opacity=20); }

/*Animations*/
div[toast],
.toast {
  opacity: 1 !important; }

div[toast].ng-enter,
.toast.ng-enter {
  opacity: 0 !important;
  transition: opacity .3s linear; }

div[toast].ng-enter.ng-enter-active,
.toast.ng-enter.ng-enter-active {
  opacity: 1 !important; }

div[toast].ng-leave,
.toast.ng-leave {
  opacity: 1;
  transition: opacity .3s linear; }

div[toast].ng-leave.ng-leave-active,
.toast.ng-leave.ng-leave-active {
  opacity: 0 !important; }

/*Responsive Design*/
@media all and (max-width: 240px) {
  #toast-container > div {
    padding: 8px 8px 8px 50px;
    width: 11em; }
  #toast-container .toast-close-button {
    right: -0.2em;
    top: -0.2em; } }

@media all and (min-width: 241px) and (max-width: 480px) {
  #toast-container > div {
    padding: 8px 8px 8px 50px;
    width: 18em; }
  #toast-container .toast-close-button {
    right: -0.2em;
    top: -0.2em; } }

@media all and (min-width: 481px) and (max-width: 768px) {
  #toast-container > div {
    padding: 15px 15px 15px 50px;
    width: 25em; } }

.toaster-icon.icon-info {
  display: none; }

/*!
* angular-datatables - v0.5.0
* https://github.com/l-lin/angular-datatables
* License: MIT
*/
div.dataTables_length label {
  font-weight: normal;
  float: left;
  text-align: left; }

div.dataTables_length select {
  width: 75px; }

div.dataTables_filter label {
  font-weight: normal;
  float: right; }

div.dataTables_filter input {
  width: 16em; }

div.dataTables_info {
  padding-top: 8px; }

div.dataTables_paginate {
  float: right;
  margin: 0; }

div.dataTables_paginate ul.pagination {
  margin: 2px; }

table.table {
  clear: both;
  max-width: none !important; }

table.table thead .sorting,
table.table thead .sorting_asc,
table.table thead .sorting_desc,
table.table thead .sorting_asc_disabled,
table.table thead .sorting_desc_disabled {
  cursor: pointer;
  background: none; }

table.table thead .sorting:before {
  content: ' ';
  position: relative;
  left: -5px; }

table.table thead .sorting_desc:before {
  content: "\2193";
  padding-right: 5px; }

table.table thead .sorting_asc:before {
  content: "\2191";
  padding-right: 5px; }

.dataTables_scrollBody table.table thead .sorting:before,
.dataTables_scrollBody table.table thead .sorting_desc:before,
.dataTables_scrollBody table.table thead .sorting_asc:before {
  content: '';
  padding-right: 0; }

table.dataTable th:active {
  outline: none; }

.dataTables_wrapper.form-inline {
  display: inline; }

.dataTables_wrapper .row {
  margin-top: 20px; }

/* Scrolling */
div.dataTables_scrollHead table {
  margin-bottom: 0 !important;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0; }

div.dataTables_scrollHead table thead tr:last-child th:first-child, div.dataTables_scrollHead table thead tr:last-child td:first-child {
  border-bottom-left-radius: 0 !important;
  border-bottom-right-radius: 0 !important; }

div.dataTables_scrollBody table {
  border-top: none;
  margin-bottom: 0 !important; }

div.dataTables_scrollBody tbody tr:first-child th, div.dataTables_scrollBody tbody tr:first-child td {
  border-top: none; }

div.dataTables_scrollFoot table {
  border-top: none; }

/*
* TableTools styles
*/
/*
.table tbody tr.active td, .table tbody tr.active th {
background-color: #08C;
color: white;
}
.table tbody tr.active:hover td, .table tbody tr.active:hover th {
background-color: #0075b0 !important;
}
.table-striped tbody tr.active:nth-child(odd) td, .table-striped tbody tr.active:nth-child(odd) th {
background-color: #017ebc;
}
*/
table.DTTT_selectable tbody tr {
  cursor: pointer; }

div.DTTT .btn, div.DTTT .fc button, .fc div.DTTT button {
  color: #333 !important; }

div.DTTT .btn:hover, div.DTTT .fc button:hover, .fc div.DTTT button:hover {
  text-decoration: none !important; }

ul.DTTT_dropdown.dropdown-menu {
  z-index: 2003; }

ul.DTTT_dropdown.dropdown-menu a {
  color: #333 !important; }

ul.DTTT_dropdown.dropdown-menu li {
  position: relative; }

ul.DTTT_dropdown.dropdown-menu li:hover a {
  background-color: #0088cc;
  color: white !important; }

div.DTTT_collection_background {
  z-index: 2002; }

/* TableTools information display */
div.DTTT_print_info.modal {
  height: 150px;
  margin-top: -75px;
  text-align: center; }

div.DTTT_print_info h6 {
  font-weight: normal;
  font-size: 28px;
  line-height: 28px;
  margin: 1em; }

div.DTTT_print_info p {
  font-size: 14px;
  line-height: 20px; }

/*
* FixedColumns styles
*/
div.DTFC_LeftHeadWrapper table, div.DTFC_LeftFootWrapper table, div.DTFC_RightHeadWrapper table, div.DTFC_RightFootWrapper table, table.DTFC_Cloned tr.even {
  background-color: white; }

div.DTFC_RightHeadWrapper table, div.DTFC_LeftHeadWrapper table {
  margin-bottom: 0 !important;
  border-top-right-radius: 0 !important;
  border-bottom-left-radius: 0 !important;
  border-bottom-right-radius: 0 !important; }

div.DTFC_RightHeadWrapper table thead tr:last-child th:first-child, div.DTFC_RightHeadWrapper table thead tr:last-child td:first-child, div.DTFC_LeftHeadWrapper table thead tr:last-child th:first-child, div.DTFC_LeftHeadWrapper table thead tr:last-child td:first-child {
  border-bottom-left-radius: 0 !important;
  border-bottom-right-radius: 0 !important; }

div.DTFC_RightBodyWrapper table, div.DTFC_LeftBodyWrapper table {
  border-top: none;
  margin-bottom: 0 !important; }

div.DTFC_RightBodyWrapper tbody tr:first-child th, div.DTFC_RightBodyWrapper tbody tr:first-child td, div.DTFC_LeftBodyWrapper tbody tr:first-child th, div.DTFC_LeftBodyWrapper tbody tr:first-child td {
  border-top: none; }

div.DTFC_RightFootWrapper table, div.DTFC_LeftFootWrapper table {
  border-top: none; }

/*
* ColVis
*/
ul.ColVis_collection {
  width: auto !important; }

/*
* Server side processing
*/
.dataTables_wrapper {
  position: relative; }

.dataTables_wrapper .dataTables_processing {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  height: 40px;
  margin-left: -50%;
  margin-top: -25px;
  padding-top: 20px;
  text-align: center;
  font-size: 1.2em;
  background-color: white;
  background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(25%, rgba(255, 255, 255, 0.9)), color-stop(75%, rgba(255, 255, 255, 0.9)), color-stop(100%, rgba(255, 255, 255, 0)));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
  /* Chrome10+,Safari5.1+ */
  background: -moz-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
  /* FF3.6+ */
  background: -ms-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
  /* IE10+ */
  background: -o-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
  /* Opera 11.10+ */
  background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);
  /* W3C */ }

.dataTables_wrapper .dataTables_processing {
  color: #333333; }

/**
* A stylesheet for use with Bootstrap 3.x
* @author: Dan Grossman http://www.dangrossman.info/
* @copyright: Copyright (c) 2012-2015 Dan Grossman. All rights reserved.
* @license: Licensed under the MIT license. See http://www.opensource.org/licenses/mit-license.php
* @website: https://www.improvely.com/
*/
/* Container Appearance */
.daterangepicker {
  position: absolute;
  background: #fff;
  top: 100px;
  left: 20px;
  padding: 4px;
  margin-top: 1px;
  width: 278px; }

.daterangepicker.opensleft:before {
  position: absolute;
  top: -7px;
  right: 9px;
  display: inline-block;
  border-right: 7px solid transparent;
  border-bottom: 7px solid #d1d4d7;
  border-left: 7px solid transparent;
  border-bottom-color: #d1d4d7;
  content: ''; }

.daterangepicker.opensleft:after {
  position: absolute;
  top: -6px;
  right: 10px;
  display: inline-block;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #fff;
  border-left: 6px solid transparent;
  content: ''; }

.daterangepicker.openscenter:before {
  position: absolute;
  top: -7px;
  left: 0;
  right: 0;
  width: 0;
  margin-left: auto;
  margin-right: auto;
  display: inline-block;
  border-right: 7px solid transparent;
  border-bottom: 7px solid #d1d4d7;
  border-left: 7px solid transparent;
  border-bottom-color: #d1d4d7;
  content: ''; }

.daterangepicker.openscenter:after {
  position: absolute;
  top: -6px;
  left: 0;
  right: 0;
  width: 0;
  margin-left: auto;
  margin-right: auto;
  display: inline-block;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #fff;
  border-left: 6px solid transparent;
  content: ''; }

.daterangepicker.opensright:before {
  position: absolute;
  top: -7px;
  left: 9px;
  display: inline-block;
  border-right: 7px solid transparent;
  border-bottom: 7px solid #d1d4d7;
  border-left: 7px solid transparent;
  border-bottom-color: #d1d4d7;
  content: ''; }

.daterangepicker.opensright:after {
  position: absolute;
  top: -6px;
  left: 10px;
  display: inline-block;
  border-right: 6px solid transparent;
  border-bottom: 6px solid #fff;
  border-left: 6px solid transparent;
  content: ''; }

.daterangepicker.dropup {
  margin-top: -5px; }

.daterangepicker.dropup:before {
  top: initial;
  bottom: -7px;
  border-bottom: initial;
  border-top: 7px solid #d1d4d7; }

.daterangepicker.dropup:after {
  top: initial;
  bottom: -6px;
  border-bottom: initial;
  border-top: 6px solid #fff; }

.daterangepicker.dropdown-menu {
  max-width: none;
  z-index: 3000; }

.daterangepicker.single .ranges, .daterangepicker.single .calendar {
  float: none; }

.daterangepicker .calendar {
  display: none;
  max-width: 270px;
  margin: 4px; }

.daterangepicker.show-calendar .calendar {
  display: block; }

.daterangepicker .calendar.single .calendar-table {
  border: none; }

/* Calendars */
.daterangepicker .calendar th, .daterangepicker .calendar td {
  white-space: nowrap;
  text-align: center;
  min-width: 32px;
  line-height: 30px; }

.daterangepicker .calendar-table {
  border: 1px solid #ddd;
  padding: 4px;
  background: #fff; }

.daterangepicker table {
  width: 100%;
  margin: 0; }

.daterangepicker table thead {
  background: #f8f9fa; }

.daterangepicker td, .daterangepicker th {
  text-align: center;
  width: 20px;
  height: 20px;
  white-space: nowrap;
  cursor: pointer; }

.daterangepicker td.off, .daterangepicker td.off.in-range, .daterangepicker td.off.start-date, .daterangepicker td.off.end-date {
  color: #d1d4d7;
  background: #fff; }

.daterangepicker td.disabled, .daterangepicker option.disabled {
  color: #d1d4d7;
  cursor: not-allowed;
  text-decoration: line-through; }

.daterangepicker td.available:hover, .daterangepicker th.available:hover {
  background: #f8f9fa; }

.daterangepicker td.in-range {
  background: #ccecf8;
  border-radius: 0; }

.daterangepicker td.active, .daterangepicker td.active:hover {
  background-color: #FFFFFF;
  border-color: #FFFFFF;
  color: #FFFFFF; }

.daterangepicker td.week, .daterangepicker th.week {
  font-size: 80%;
  color: #ccc; }

.daterangepicker select.monthselect, .daterangepicker select.yearselect {
  font-size: 12px;
  padding: 1px;
  height: auto;
  margin: 0;
  cursor: default; }

.daterangepicker select.monthselect {
  margin-right: 2%;
  width: 56%; }

.daterangepicker select.yearselect {
  width: 40%; }

.daterangepicker select.hourselect, .daterangepicker select.minuteselect, .daterangepicker select.secondselect, .daterangepicker select.ampmselect {
  width: 50px;
  margin-bottom: 0; }

.daterangepicker th.month {
  width: auto; }

/* Text Input Above Each Calendar */
.daterangepicker .input-mini {
  margin-bottom: 5px;
  padding-left: 28px; }

.daterangepicker .input-mini.active {
  border: 1px solid rgb(35,35,35); }

.daterangepicker .daterangepicker_input i {
  position: absolute;
  left: 8px;
  top: 10px;
  color: #d1d4d7; }

.daterangepicker .daterangepicker_input {
  position: relative; }

/* Time Picker */
.daterangepicker .calendar-time {
  text-align: center;
  margin: 5px auto;
  line-height: 30px;
  position: relative;
  padding-left: 28px; }

.daterangepicker .calendar-time select.disabled {
  color: #ccc;
  cursor: not-allowed; }

/* Predefined Ranges */
.daterangepicker .ranges {
  font-size: 11px;
  float: none;
  margin: 4px;
  text-align: left; }

.daterangepicker .ranges ul {
  list-style: none;
  margin: 0 auto;
  padding: 0;
  width: 100%; }

.daterangepicker .ranges li {
  font-size: 13px;
  background: #f8f9fa;
  border: 1px solid rgb(35,35,35);
  padding: 7px 10px;
  margin-bottom: 5px;
  cursor: pointer; }

.daterangepicker .ranges li.active, .daterangepicker .ranges li:hover {
  background: rgb(35,35,35);
  border-color: #FFFFFF;
  color: #FFFFFF; }

/*  Larger Screen Styling */
@media (min-width: 564px) {
  .daterangepicker {
    width: auto; }
  .daterangepicker .ranges ul {
    width: 160px; }
  .daterangepicker.single .ranges ul {
    width: 100%; }
  .daterangepicker .calendar.left .calendar-table {
    border-right: none;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0; }
  .daterangepicker .calendar.right .calendar-table {
    border-left: none;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0; }
  .daterangepicker .calendar.left {
    clear: left;
    margin-right: 0; }
  .daterangepicker.single .calendar.left {
    clear: none; }
  .daterangepicker.single .ranges,
  .daterangepicker.single .calendar {
    float: left; }
  .daterangepicker .calendar.right {
    margin-left: 0; }
  .daterangepicker .left .daterangepicker_input {
    padding-right: 12px; }
  .daterangepicker .calendar.left .calendar-table {
    padding-right: 12px; }
  .daterangepicker .ranges,
  .daterangepicker .calendar {
    float: left; } }

@media (min-width: 730px) {
  .daterangepicker .ranges {
    width: auto;
    float: left; }
  .daterangepicker .calendar.left {
    clear: none; } }

/*!
 * FullCalendar v2.4.0 Stylesheet
 * Docs & License: http://fullcalendar.io/
 * (c) 2015 Adam Shaw
 */
.fc {
  direction: ltr;
  text-align: left; }

.fc-rtl {
  text-align: right; }

body .fc {
  /* extra precedence to overcome jqui */
  font-size: 1em; }

/* Colors
--------------------------------------------------------------------------------------------------*/
.fc-unthemed th,
.fc-unthemed td,
.fc-unthemed thead,
.fc-unthemed tbody,
.fc-unthemed .fc-divider,
.fc-unthemed .fc-row,
.fc-unthemed .fc-popover {
  border-color: #d1d4d7; }

.fc-unthemed .fc-popover {
  background-color: #FFFFFF; }

.fc-unthemed .fc-divider,
.fc-unthemed .fc-popover .fc-header {
  background: #eee; }

.fc-unthemed .fc-popover .fc-header .fc-close {
  color: #666; }

.fc-unthemed .fc-today {
  background: #fcf8e3; }

.fc-highlight {
  /* when user is selecting cells */
  background: #bce8f1;
  opacity: .3;
  filter: alpha(opacity=30);
  /* for IE */ }

.fc-bgevent {
  /* default look for background events */
  background: #8fdf82;
  opacity: .3;
  filter: alpha(opacity=30);
  /* for IE */ }

.fc-nonbusiness {
  /* default look for non-business-hours areas */
  /* will inherit .fc-bgevent's styles */
  background: #d7d7d7; }

/* Icons (inline elements with styled text that mock arrow icons)
--------------------------------------------------------------------------------------------------*/
.fc-icon {
  font-family: "FontAwesome"; }

/*
Acceptable font-family overrides for individual icons:
	"Arial", sans-serif
	"Times New Roman", serif

NOTE: use percentage font sizes or else old IE chokes
*/
.fc-icon:after {
  position: relative; }

.fc-icon-left-single-arrow:after {
  content: "\f104";
  font-weight: bold; }

.fc-icon-right-single-arrow:after {
  content: "\f105";
  font-weight: bold; }

.fc-icon-left-double-arrow:after {
  content: "\f100"; }

.fc-icon-right-double-arrow:after {
  content: "\f101"; }

.fc-icon-left-triangle:after {
  content: "\25C4";
  font-size: 125%;
  top: 3%;
  left: -2%; }

.fc-icon-right-triangle:after {
  content: "\25BA";
  font-size: 125%;
  top: 3%;
  left: 2%; }

.fc-icon-down-triangle:after {
  content: "\25BC";
  font-size: 125%;
  top: 2%; }

.fc-icon-x:after {
  content: "\000D7";
  font-size: 200%;
  top: 6%; }

/* Buttons (styled <button> tags, normalized to work cross-browser)
--------------------------------------------------------------------------------------------------*/
/* Firefox has an annoying inner border */
.fc button::-moz-focus-inner {
  margin: 0;
  padding: 0; }

.fc-state-default {
  /* non-theme */
  border: 1px solid; }

.fc-state-default.fc-corner-left {
  /* non-theme */ }

.fc-state-default.fc-corner-right {
  /* non-theme */ }

/* icons in buttons */
.fc button .fc-icon {
  /* non-theme */
  position: relative;
  top: -0.05em;
  /* seems to be a good adjustment across browsers */
  margin: 0 .2em;
  vertical-align: middle; }

/*
  button states
  borrowed from twitter bootstrap (http://twitter.github.com/bootstrap/)
*/
.fc-state-hover,
.fc-state-down,
.fc-state-active,
.fc-state-disabled {
  color: #333333;
  background-color: #e6e6e6; }

.fc-state-hover {
  color: #333333;
  text-decoration: none;
  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
  -moz-transition: background-position 0.1s linear;
  -o-transition: background-position 0.1s linear;
  transition: background-position 0.1s linear; }

.fc-state-down,
.fc-state-active {
  background-color: #cccccc;
  background-image: none;
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05); }

.fc-state-disabled {
  cursor: default;
  background-image: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  box-shadow: none; }

/* Buttons Groups
--------------------------------------------------------------------------------------------------*/
/*
every button that is not first in a button group should scootch over one pixel and cover the
previous button's border...
*/
.fc .fc-button-group > * {
  /* extra precedence b/c buttons have margin set to zero */
  float: left;
  margin: 0 0 0 -1px; }

.fc .fc-button-group > :first-child {
  /* same */
  margin-left: 0; }

/* Popover
--------------------------------------------------------------------------------------------------*/
.fc-popover {
  position: absolute;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15); }

.fc-popover .fc-header {
  /* TODO: be more consistent with fc-head/fc-body */
  padding: 2px 4px; }

.fc-popover .fc-header .fc-title {
  margin: 0 2px; }

.fc-popover .fc-header .fc-close {
  cursor: pointer; }

.fc-ltr .fc-popover .fc-header .fc-title,
.fc-rtl .fc-popover .fc-header .fc-close {
  float: left; }

.fc-rtl .fc-popover .fc-header .fc-title,
.fc-ltr .fc-popover .fc-header .fc-close {
  float: right; }

/* unthemed */
.fc-unthemed .fc-popover {
  border-width: 1px;
  border-style: solid; }

.fc-unthemed .fc-popover .fc-header .fc-close {
  font-size: .9em;
  margin-top: 2px; }

/* jqui themed */
.fc-popover > .ui-widget-header + .ui-widget-content {
  border-top: 0;
  /* where they meet, let the header have the border */ }

/* Misc Reusable Components
--------------------------------------------------------------------------------------------------*/
.fc-divider {
  border-style: solid;
  border-width: 1px; }

hr.fc-divider {
  height: 0;
  margin: 0;
  padding: 0 0 2px;
  /* height is unreliable across browsers, so use padding */
  border-width: 1px 0; }

.fc-clear {
  clear: both; }

.fc-bg,
.fc-bgevent-skeleton,
.fc-highlight-skeleton,
.fc-helper-skeleton {
  /* these element should always cling to top-left/right corners */
  position: absolute;
  top: 0;
  left: 0;
  right: 0; }

.fc-bg {
  bottom: 0;
  /* strech bg to bottom edge */ }

.fc-bg table {
  height: 100%;
  /* strech bg to bottom edge */ }

/* Tables
--------------------------------------------------------------------------------------------------*/
.fc table {
  width: 100%;
  table-layout: fixed;
  border-collapse: collapse;
  border-spacing: 0;
  font-size: 1em;
  /* normalize cross-browser */ }

.fc th {
  text-align: center; }

.fc th,
.fc td {
  border-style: solid;
  border-width: 1px;
  padding: 0;
  vertical-align: top; }

.fc td.fc-today {
  border-style: double;
  /* overcome neighboring borders */ }

/* Fake Table Rows
--------------------------------------------------------------------------------------------------*/
.fc .fc-row {
  /* extra precedence to overcome themes w/ .ui-widget-content forcing a 1px border */
  /* no visible border by default. but make available if need be (scrollbar width compensation) */
  border-style: solid;
  border-width: 0; }

.fc-row table {
  /* don't put left/right border on anything within a fake row.
	   the outer tbody will worry about this */
  border-left: 0 hidden transparent;
  border-right: 0 hidden transparent;
  /* no bottom borders on rows */
  border-bottom: 0 hidden transparent; }

.fc-row:first-child table {
  border-top: 0 hidden transparent;
  /* no top border on first row */ }

/* Day Row (used within the header and the DayGrid)
--------------------------------------------------------------------------------------------------*/
.fc-row {
  position: relative; }

.fc-row .fc-bg {
  z-index: 1; }

/* highlighting cells & background event skeleton */
.fc-row .fc-bgevent-skeleton,
.fc-row .fc-highlight-skeleton {
  bottom: 0;
  /* stretch skeleton to bottom of row */ }

.fc-row .fc-bgevent-skeleton table,
.fc-row .fc-highlight-skeleton table {
  height: 100%;
  /* stretch skeleton to bottom of row */ }

.fc-row .fc-highlight-skeleton td,
.fc-row .fc-bgevent-skeleton td {
  border-color: transparent; }

.fc-row .fc-bgevent-skeleton {
  z-index: 2; }

.fc-row .fc-highlight-skeleton {
  z-index: 3; }

/*
row content (which contains day/week numbers and events) as well as "helper" (which contains
temporary rendered events).
*/
.fc-row .fc-content-skeleton {
  position: relative;
  z-index: 4;
  padding-bottom: 2px;
  /* matches the space above the events */ }

.fc-row .fc-helper-skeleton {
  z-index: 5; }

.fc-row .fc-content-skeleton td,
.fc-row .fc-helper-skeleton td {
  /* see-through to the background below */
  background: none;
  /* in case <td>s are globally styled */
  border-color: transparent;
  /* don't put a border between events and/or the day number */
  border-bottom: 0; }

.fc-row .fc-content-skeleton tbody td,
.fc-row .fc-helper-skeleton tbody td {
  /* don't put a border between event cells */
  border-top: 0; }

/* Scrolling Container
--------------------------------------------------------------------------------------------------*/
.fc-scroller {
  /* this class goes on elements for guaranteed vertical scrollbars */
  overflow-y: scroll;
  overflow-x: hidden; }

.fc-scroller > * {
  /* we expect an immediate inner element */
  position: relative;
  /* re-scope all positions */
  width: 100%;
  /* hack to force re-sizing this inner element when scrollbars appear/disappear */
  overflow: hidden;
  /* don't let negative margins or absolute positioning create further scroll */ }

/* Global Event Styles
--------------------------------------------------------------------------------------------------*/
.fc-event {
  position: relative;
  /* for resize handle and other inner positioning */
  display: block;
  /* make the <a> tag block */
  font-size: .85em;
  line-height: 1.3;
  border: 1px solid rgb(35,35,35);
  /* default BORDER color */
  background-color: #FFFFFF;
  /* default BACKGROUND color */
  font-weight: normal;
  /* undo jqui's ui-widget-header bold */ }

/* overpower some of bootstrap's and jqui's styles on <a> tags */
.fc-event,
.fc-event:hover,
.ui-widget .fc-event {
  color: #FFFFFF;
  /* default TEXT color */
  text-decoration: none;
  /* if <a> has an href */ }

.fc-event[href],
.fc-event.fc-draggable {
  cursor: pointer;
  /* give events with links and draggable events a hand mouse pointer */ }

.fc-not-allowed,
.fc-not-allowed .fc-event {
  /* to override an event's custom cursor */
  cursor: not-allowed; }

.fc-event .fc-bg {
  /* the generic .fc-bg already does position */
  z-index: 1;
  background: #fff;
  opacity: .25;
  filter: alpha(opacity=25);
  /* for IE */ }

.fc-event .fc-content {
  position: relative;
  z-index: 2; }

.fc-event .fc-resizer {
  position: absolute;
  z-index: 3; }

/* Horizontal Events
--------------------------------------------------------------------------------------------------*/
/* events that are continuing to/from another week. kill rounded corners and butt up against edge */
.fc-ltr .fc-h-event.fc-not-start,
.fc-rtl .fc-h-event.fc-not-end {
  margin-left: 0;
  border-left-width: 0;
  padding-left: 1px;
  /* replace the border with padding */
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.fc-ltr .fc-h-event.fc-not-end,
.fc-rtl .fc-h-event.fc-not-start {
  margin-right: 0;
  border-right-width: 0;
  padding-right: 1px;
  /* replace the border with padding */
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

/* resizer */
.fc-h-event .fc-resizer {
  /* positioned it to overcome the event's borders */
  top: -1px;
  bottom: -1px;
  left: -1px;
  right: -1px;
  width: 5px; }

/* left resizer  */
.fc-ltr .fc-h-event .fc-start-resizer,
.fc-ltr .fc-h-event .fc-start-resizer:before,
.fc-ltr .fc-h-event .fc-start-resizer:after,
.fc-rtl .fc-h-event .fc-end-resizer,
.fc-rtl .fc-h-event .fc-end-resizer:before,
.fc-rtl .fc-h-event .fc-end-resizer:after {
  right: auto;
  /* ignore the right and only use the left */
  cursor: w-resize; }

/* right resizer */
.fc-ltr .fc-h-event .fc-end-resizer,
.fc-ltr .fc-h-event .fc-end-resizer:before,
.fc-ltr .fc-h-event .fc-end-resizer:after,
.fc-rtl .fc-h-event .fc-start-resizer,
.fc-rtl .fc-h-event .fc-start-resizer:before,
.fc-rtl .fc-h-event .fc-start-resizer:after {
  left: auto;
  /* ignore the left and only use the right */
  cursor: e-resize; }

/* DayGrid events
----------------------------------------------------------------------------------------------------
We use the full "fc-day-grid-event" class instead of using descendants because the event won't
be a descendant of the grid when it is being dragged.
*/
.fc-day-grid-event {
  margin: 1px 2px 0;
  /* spacing between events and edges */
  padding: 0 1px; }

.fc-day-grid-event .fc-content {
  /* force events to be one-line tall */
  white-space: nowrap;
  overflow: hidden; }

.fc-day-grid-event .fc-time {
  font-weight: bold; }

.fc-day-grid-event .fc-resizer {
  /* enlarge the default hit area */
  left: -3px;
  right: -3px;
  width: 7px; }

/* Event Limiting
--------------------------------------------------------------------------------------------------*/
/* "more" link that represents hidden events */
a.fc-more {
  margin: 1px 3px;
  font-size: .85em;
  cursor: pointer;
  text-decoration: none; }

a.fc-more:hover {
  text-decoration: underline; }

.fc-limited {
  /* rows and cells that are hidden because of a "more" link */
  display: none; }

/* popover that appears when "more" link is clicked */
.fc-day-grid .fc-row {
  z-index: 1;
  /* make the "more" popover one higher than this */ }

.fc-more-popover {
  z-index: 2;
  width: 220px; }

.fc-more-popover .fc-event-container {
  padding: 10px; }

/* Toolbar
--------------------------------------------------------------------------------------------------*/
.fc-toolbar {
  text-align: center;
  margin-bottom: 1em; }

.fc-toolbar .fc-left {
  float: left; }

.fc-toolbar .fc-right {
  float: right; }

.fc-toolbar .fc-center {
  display: inline-block; }

/* the things within each left/right/center section */
.fc .fc-toolbar > * > * {
  /* extra precedence to override button border margins */
  float: left;
  margin-left: .75em; }

/* the first thing within each left/center/right section */
.fc .fc-toolbar > * > :first-child {
  /* extra precedence to override button border margins */
  margin-left: 0; }

/* title text */
.fc-toolbar h2 {
  margin: 0; }

/* button layering (for border precedence) */
.fc-toolbar button {
  position: relative; }

.fc-toolbar .fc-state-hover,
.fc-toolbar .ui-state-hover {
  z-index: 2; }

.fc-toolbar .fc-state-down {
  z-index: 3; }

.fc-toolbar .fc-state-active,
.fc-toolbar .ui-state-active {
  z-index: 4; }

.fc-toolbar button:focus {
  z-index: 5; }

/* View Structure
--------------------------------------------------------------------------------------------------*/
/* undo twitter bootstrap's box-sizing rules. normalizes positioning techniques */
/* don't do this for the toolbar because we'll want bootstrap to style those buttons as some pt */
.fc-view-container *,
.fc-view-container *:before,
.fc-view-container *:after {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box; }

.fc-view,
.fc-view > table {
  /* so dragged elements can be above the view's main element */
  position: relative;
  z-index: 1; }

/* BasicView
--------------------------------------------------------------------------------------------------*/
/* day row structure */
.fc-basicWeek-view .fc-content-skeleton,
.fc-basicDay-view .fc-content-skeleton {
  /* we are sure there are no day numbers in these views, so... */
  padding-top: 1px;
  /* add a pixel to make sure there are 2px padding above events */
  padding-bottom: 1em;
  /* ensure a space at bottom of cell for user selecting/clicking */ }

.fc-basic-view .fc-body .fc-row {
  min-height: 4em;
  /* ensure that all rows are at least this tall */ }

/* a "rigid" row will take up a constant amount of height because content-skeleton is absolute */
.fc-row.fc-rigid {
  overflow: hidden; }

.fc-row.fc-rigid .fc-content-skeleton {
  position: absolute;
  top: 0;
  left: 0;
  right: 0; }

/* week and day number styling */
.fc-basic-view .fc-week-number,
.fc-basic-view .fc-day-number {
  padding: 0 2px; }

.fc-basic-view td.fc-week-number span,
.fc-basic-view td.fc-day-number {
  padding-top: 2px;
  padding-bottom: 2px; }

.fc-basic-view .fc-week-number {
  text-align: center; }

.fc-basic-view .fc-week-number span {
  /* work around the way we do column resizing and ensure a minimum width */
  display: inline-block;
  min-width: 1.25em; }

.fc-ltr .fc-basic-view .fc-day-number {
  text-align: right; }

.fc-rtl .fc-basic-view .fc-day-number {
  text-align: left; }

.fc-day-number.fc-other-month {
  opacity: 0.3;
  filter: alpha(opacity=30);
  /* for IE */
  /* opacity with small font can sometimes look too faded
	   might want to set the 'color' property instead
	   making day-numbers bold also fixes the problem */ }

/* AgendaView all-day area
--------------------------------------------------------------------------------------------------*/
.fc-agenda-view .fc-day-grid {
  position: relative;
  z-index: 2;
  /* so the "more.." popover will be over the time grid */ }

.fc-agenda-view .fc-day-grid .fc-row {
  min-height: 3em;
  /* all-day section will never get shorter than this */ }

.fc-agenda-view .fc-day-grid .fc-row .fc-content-skeleton {
  padding-top: 1px;
  /* add a pixel to make sure there are 2px padding above events */
  padding-bottom: 1em;
  /* give space underneath events for clicking/selecting days */ }

/* TimeGrid axis running down the side (for both the all-day area and the slot area)
--------------------------------------------------------------------------------------------------*/
.fc .fc-axis {
  /* .fc to overcome default cell styles */
  vertical-align: middle;
  padding: 0 4px;
  white-space: nowrap; }

.fc-ltr .fc-axis {
  text-align: right; }

.fc-rtl .fc-axis {
  text-align: left; }

.ui-widget td.fc-axis {
  font-weight: normal;
  /* overcome jqui theme making it bold */ }

/* TimeGrid Structure
--------------------------------------------------------------------------------------------------*/
.fc-time-grid-container,
.fc-time-grid {
  /* so slats/bg/content/etc positions get scoped within here */
  position: relative;
  z-index: 1; }

.fc-time-grid {
  min-height: 100%;
  /* so if height setting is 'auto', .fc-bg stretches to fill height */ }

.fc-time-grid table {
  /* don't put outer borders on slats/bg/content/etc */
  border: 0 hidden transparent; }

.fc-time-grid > .fc-bg {
  z-index: 1; }

.fc-time-grid .fc-slats,
.fc-time-grid > hr {
  /* the <hr> AgendaView injects when grid is shorter than scroller */
  position: relative;
  z-index: 2; }

.fc-time-grid .fc-bgevent-skeleton,
.fc-time-grid .fc-content-skeleton {
  position: absolute;
  top: 0;
  left: 0;
  right: 0; }

.fc-time-grid .fc-bgevent-skeleton {
  z-index: 3; }

.fc-time-grid .fc-highlight-skeleton {
  z-index: 4; }

.fc-time-grid .fc-content-skeleton {
  z-index: 5; }

.fc-time-grid .fc-helper-skeleton {
  z-index: 6; }

/* TimeGrid Slats (lines that run horizontally)
--------------------------------------------------------------------------------------------------*/
.fc-time-grid .fc-slats td {
  height: 1.5em;
  border-bottom: 0;
  /* each cell is responsible for its top border */ }

.fc-time-grid .fc-slats .fc-minor td {
  border-top-style: dotted; }

.fc-time-grid .fc-slats .ui-widget-content {
  /* for jqui theme */
  background: none;
  /* see through to fc-bg */ }

/* TimeGrid Highlighting Slots
--------------------------------------------------------------------------------------------------*/
.fc-time-grid .fc-highlight-container {
  /* a div within a cell within the fc-highlight-skeleton */
  position: relative;
  /* scopes the left/right of the fc-highlight to be in the column */ }

.fc-time-grid .fc-highlight {
  position: absolute;
  left: 0;
  right: 0;
  /* top and bottom will be in by JS */ }

/* TimeGrid Event Containment
--------------------------------------------------------------------------------------------------*/
.fc-time-grid .fc-event-container,
.fc-time-grid .fc-bgevent-container {
  /* a div within a cell within the fc-bgevent-skeleton */
  position: relative; }

.fc-ltr .fc-time-grid .fc-event-container {
  /* space on the sides of events for LTR (default) */
  margin: 0 2.5% 0 2px; }

.fc-rtl .fc-time-grid .fc-event-container {
  /* space on the sides of events for RTL */
  margin: 0 2px 0 2.5%; }

.fc-time-grid .fc-event,
.fc-time-grid .fc-bgevent {
  position: absolute;
  z-index: 1;
  /* scope inner z-index's */ }

.fc-time-grid .fc-bgevent {
  /* background events always span full width */
  left: 0;
  right: 0; }

/* Generic Vertical Event
--------------------------------------------------------------------------------------------------*/
.fc-v-event.fc-not-start {
  /* events that are continuing from another day */
  /* replace space made by the top border with padding */
  border-top-width: 0;
  padding-top: 1px;
  /* remove top rounded corners */
  border-top-left-radius: 0;
  border-top-right-radius: 0; }

.fc-v-event.fc-not-end {
  /* replace space made by the top border with padding */
  border-bottom-width: 0;
  padding-bottom: 1px;
  /* remove bottom rounded corners */
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0; }

/* TimeGrid Event Styling
----------------------------------------------------------------------------------------------------
We use the full "fc-time-grid-event" class instead of using descendants because the event won't
be a descendant of the grid when it is being dragged.
*/
.fc-time-grid-event {
  overflow: hidden;
  /* don't let the bg flow over rounded corners */ }

.fc-time-grid-event .fc-time,
.fc-time-grid-event .fc-title {
  padding: 0 1px; }

.fc-time-grid-event .fc-time {
  font-size: .85em;
  white-space: nowrap; }

/* short mode, where time and title are on the same line */
.fc-time-grid-event.fc-short .fc-content {
  /* don't wrap to second line (now that contents will be inline) */
  white-space: nowrap; }

.fc-time-grid-event.fc-short .fc-time,
.fc-time-grid-event.fc-short .fc-title {
  /* put the time and title on the same line */
  display: inline-block;
  vertical-align: top; }

.fc-time-grid-event.fc-short .fc-time span {
  display: none;
  /* don't display the full time text... */ }

.fc-time-grid-event.fc-short .fc-time:before {
  content: attr(data-start);
  /* ...instead, display only the start time */ }

.fc-time-grid-event.fc-short .fc-time:after {
  content: "\000A0-\000A0";
  /* seperate with a dash, wrapped in nbsp's */ }

.fc-time-grid-event.fc-short .fc-title {
  font-size: .85em;
  /* make the title text the same size as the time */
  padding: 0;
  /* undo padding from above */ }

/* resizer */
.fc-time-grid-event .fc-resizer {
  left: 0;
  right: 0;
  bottom: 0;
  height: 8px;
  overflow: hidden;
  line-height: 8px;
  font-size: 11px;
  font-family: monospace;
  text-align: center;
  cursor: s-resize; }

.fc-time-grid-event .fc-resizer:after {
  content: "="; }

.gaugejs-wrap {
  position: relative;
  margin: 0 auto; }
  .gaugejs-wrap canvas.gaugejs {
    width: 100% !important;
    height: auto !important; }
  .gaugejs-wrap i {
    position: absolute;
    top: 50%;
    left: 0;
    z-index: 1000;
    display: block;
    width: 100%;
    margin-top: -15px;
    font-size: 30px;
    text-align: center; }

.gaugejs-wrap.type-2 .value {
  display: block;
  margin-top: -85px; }

.gaugejs-wrap.type-2 label {
  display: block;
  margin-top: -10px;
  font-size: 10px;
  font-weight: 600;
  color: #FFFFFF;
  text-transform: uppercase; }

.gaugejs-wrap.sparkline {
  position: relative; }
  .gaugejs-wrap.sparkline .value {
    position: absolute;
    top: 50%;
    display: block;
    width: 100%;
    margin-top: -5px;
    font-size: 10px;
    line-height: 10px;
    text-align: center; }

/* Ion.RangeSlider
// css version 2.0.3
// © 2013-2014 Denis Ineshin | IonDen.com
// ===================================================================================================================*/
/* =====================================================================================================================
// RangeSlider */
.irs {
  position: relative;
  display: block;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }

.irs-line {
  position: relative;
  display: block;
  overflow: hidden;
  outline: none !important; }

.irs-line-left, .irs-line-mid, .irs-line-right {
  position: absolute;
  display: block;
  top: 0; }

.irs-line-left {
  left: 0;
  width: 11%; }

.irs-line-mid {
  left: 9%;
  width: 82%; }

.irs-line-right {
  right: 0;
  width: 11%; }

.irs-bar {
  position: absolute;
  display: block;
  left: 0;
  width: 0; }

.irs-bar-edge {
  position: absolute;
  display: block;
  top: 0;
  left: 0; }

.irs-shadow {
  position: absolute;
  display: none;
  left: 0;
  width: 0; }

.irs-slider {
  position: absolute;
  display: block;
  cursor: default;
  z-index: 1; }

.irs-slider.type_last {
  z-index: 2; }

.irs-min {
  position: absolute;
  display: block;
  left: 0;
  cursor: default; }

.irs-max {
  position: absolute;
  display: block;
  right: 0;
  cursor: default; }

.irs-from, .irs-to, .irs-single {
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  cursor: default;
  white-space: nowrap; }

.irs-grid {
  position: absolute;
  display: none;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 20px; }

.irs-with-grid .irs-grid {
  display: block; }

.irs-grid-pol {
  position: absolute;
  top: 0;
  left: 0;
  width: 1px;
  height: 8px;
  background: #000; }

.irs-grid-pol.small {
  height: 4px; }

.irs-grid-text {
  position: absolute;
  bottom: 0;
  left: 0;
  white-space: nowrap;
  text-align: center;
  font-size: 9px;
  line-height: 9px;
  padding: 0 3px;
  color: #FFFFFF; }

.irs-disable-mask {
  position: absolute;
  display: block;
  top: 0;
  left: -1%;
  width: 102%;
  height: 100%;
  cursor: default;
  background: transparent;
  z-index: 2; }

.lt-ie9 .irs-disable-mask {
  background: #000;
  filter: alpha(opacity=0);
  cursor: not-allowed; }

.irs-disabled {
  opacity: 0.4; }

.irs-hidden-input {
  position: absolute !important;
  display: block !important;
  top: 0 !important;
  left: 0 !important;
  width: 0 !important;
  height: 0 !important;
  font-size: 0 !important;
  line-height: 0 !important;
  padding: 0 !important;
  margin: 0 !important;
  outline: none !important;
  z-index: -9999 !important;
  background: none !important;
  border-style: solid !important;
  border-color: transparent !important; }

/* Ion.RangeSlider, Modern Skin
// css version 2.0.3
// © Denis Ineshin, 2014    https://github.com/IonDen
// ===================================================================================================================*/
/* =====================================================================================================================
// Skin details */
.irs-line-mid,
.irs-line-left,
.irs-line-right,
.irs-bar,
.irs-bar-edge,
.irs-slider {
  background: url(../img/sprite-skin-modern.png) repeat-x; }

.irs {
  height: 50px; }

.irs-with-grid {
  height: 70px; }

.irs-line {
  height: 6px;
  top: 25px; }

.irs-line-left {
  height: 6px;
  background: #d1d4d7; }

.irs-line-mid {
  height: 6px;
  background: #d1d4d7; }

.irs-line-right {
  height: 6px;
  background: #d1d4d7; }

.irs-bar {
  height: 6px;
  top: 25px;
  background: rgb(35,35,35); }

.irs-bar-edge {
  top: 25px;
  height: 6px;
  width: 7px;
  background: rgb(35,35,35); }

.irs-shadow {
  height: 5px;
  top: 25px;
  background: #000;
  opacity: 0.25; }

.lt-ie9 .irs-shadow {
  filter: alpha(opacity=25); }

.irs-slider {
  width: 11px;
  height: 18px;
  top: 31px;
  background-position: 0 -120px; }

.irs-slider.state_hover, .irs-slider:hover {
  background-position: 0 -150px; }

.irs-min, .irs-max {
  color: #55595c;
  font-size: 10px;
  line-height: 1.333;
  text-shadow: none;
  top: 0;
  padding: 2px 5px;
  background: #d1d4d7; }

.irs-from, .irs-to, .irs-single {
  color: #FFFFFF;
  font-size: 10px;
  line-height: 1.333;
  text-shadow: none;
  padding: 2px 5px;
  background: #d1d4d7; }

.irs-from:after, .irs-to:after, .irs-single:after {
  position: absolute;
  display: block;
  content: "";
  bottom: -6px;
  left: 50%;
  width: 0;
  height: 0;
  margin-left: -3px;
  overflow: hidden;
  border: 3px solid transparent;
  border-top-color: #d1d4d7; }

.irs-grid {
  height: 34px; }

.irs-grid-pol {
  background: #d1d4d7; }

.irs-grid-text {
  bottom: 12px;
  color: #d1d4d7; }

/*
Version: 3.5.4 Timestamp: Sun Aug 30 13:30:32 EDT 2015
*/
.select2-container {
  margin: 0;
  position: relative;
  display: inline-block;
  vertical-align: middle; }

.select2-container,
.select2-drop,
.select2-search,
.select2-search input {
  /*
  Force border-box so that % widths fit the parent
  container without overlap because of margin/padding.
  More Info : http://www.quirksmode.org/css/box.html
  */
  -webkit-box-sizing: border-box;
  /* webkit */
  -moz-box-sizing: border-box;
  /* firefox */
  box-sizing: border-box;
  /* css3 */ }

.select2-container .select2-choice {
  display: block;
  height: 26px;
  padding: 0 0 0 8px;
  overflow: hidden;
  position: relative;
  border: 1px solid #aaa;
  white-space: nowrap;
  line-height: 26px;
  color: #444;
  text-decoration: none;
  border-radius: 4px;
  background-clip: padding-box;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: #FFFFFF;
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #eee), color-stop(0.5, #fff));
  background-image: -webkit-linear-gradient(center bottom, #eee 0%, #fff 50%);
  background-image: -moz-linear-gradient(center bottom, #eee 0%, #fff 50%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr = '#ffffff', endColorstr = '#eeeeee', GradientType = 0);
  background-image: linear-gradient(to top, #eee 0%, #fff 50%); }

html[dir="rtl"] .select2-container .select2-choice {
  padding: 0 8px 0 0; }

.select2-container.select2-drop-above .select2-choice {
  border-bottom-color: #aaa;
  border-radius: 0 0 4px 4px;
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #eee), color-stop(0.9, #fff));
  background-image: -webkit-linear-gradient(center bottom, #eee 0%, #fff 90%);
  background-image: -moz-linear-gradient(center bottom, #eee 0%, #fff 90%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#eeeeee', GradientType=0);
  background-image: linear-gradient(to bottom, #eee 0%, #fff 90%); }

.select2-container.select2-allowclear .select2-choice .select2-chosen {
  margin-right: 42px; }

.select2-container .select2-choice > .select2-chosen {
  margin-right: 26px;
  display: block;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  float: none;
  width: auto; }

html[dir="rtl"] .select2-container .select2-choice > .select2-chosen {
  margin-left: 26px;
  margin-right: 0; }

.select2-container .select2-choice abbr {
  display: none;
  width: 12px;
  height: 12px;
  position: absolute;
  right: 24px;
  top: 8px;
  font-size: 1px;
  text-decoration: none;
  border: 0;
  background: url("../img/select2.png") right top no-repeat;
  cursor: pointer;
  outline: 0; }

.select2-container.select2-allowclear .select2-choice abbr {
  display: inline-block; }

.select2-container .select2-choice abbr:hover {
  background-position: right -11px;
  cursor: pointer; }

.select2-drop-mask {
  border: 0;
  margin: 0;
  padding: 0;
  position: fixed;
  left: 0;
  top: 0;
  min-height: 100%;
  min-width: 100%;
  height: auto;
  width: auto;
  opacity: 0;
  z-index: 9998;
  /* styles required for IE to work */
  background-color: #FFFFFF;
  filter: alpha(opacity=0); }

.select2-drop {
  width: 100%;
  margin-top: -1px;
  position: absolute;
  z-index: 9999;
  top: 100%;
  background: #fff;
  color: #FFFFFF;
  border: 1px solid #aaa;
  border-top: 0;
  border-radius: 0 0 4px 4px;
  -webkit-box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 4px 5px rgba(0, 0, 0, 0.15); }

.select2-drop.select2-drop-above {
  margin-top: 1px;
  border-top: 1px solid #aaa;
  border-bottom: 0;
  border-radius: 4px 4px 0 0;
  -webkit-box-shadow: 0 -4px 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 -4px 5px rgba(0, 0, 0, 0.15); }

.select2-drop-active {
  border: 1px solid #5897fb;
  border-top: none; }

.select2-drop.select2-drop-above.select2-drop-active {
  border-top: 1px solid #5897fb; }

.select2-drop-auto-width {
  border-top: 1px solid #aaa;
  width: auto; }

.select2-container .select2-choice .select2-arrow {
  display: inline-block;
  width: 18px;
  height: 100%;
  position: absolute;
  right: 0;
  top: 0;
  border-left: 1px solid #aaa;
  border-radius: 0 4px 4px 0;
  background-clip: padding-box;
  background: #ccc;
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #ccc), color-stop(0.6, #eee));
  background-image: -webkit-linear-gradient(center bottom, #ccc 0%, #eee 60%);
  background-image: -moz-linear-gradient(center bottom, #ccc 0%, #eee 60%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr = '#eeeeee', endColorstr = '#cccccc', GradientType = 0);
  background-image: linear-gradient(to top, #ccc 0%, #eee 60%); }

html[dir="rtl"] .select2-container .select2-choice .select2-arrow {
  left: 0;
  right: auto;
  border-left: none;
  border-right: 1px solid #aaa;
  border-radius: 4px 0 0 4px; }

.select2-container .select2-choice .select2-arrow b {
  display: block;
  width: 100%;
  height: 100%;
  background: url("../img/select2.png") no-repeat 0 1px; }

html[dir="rtl"] .select2-container .select2-choice .select2-arrow b {
  background-position: 2px 1px; }

.select2-search {
  display: inline-block;
  width: 100%;
  min-height: 26px;
  margin: 0;
  padding: 4px 4px 0 4px;
  position: relative;
  z-index: 10000;
  white-space: nowrap; }

.select2-search input {
  width: 100%;
  height: auto !important;
  min-height: 26px;
  padding: 4px 20px 4px 5px;
  margin: 0;
  outline: 0;
  font-family: sans-serif;
  font-size: 1em;
  border: 1px solid #aaa;
  border-radius: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
  background: #fff url("../img/select2.png") no-repeat 100% -22px;
  background: url("../img/select2.png") no-repeat 100% -22px, -webkit-gradient(linear, left bottom, left top, color-stop(0.85, #fff), color-stop(0.99, #eee));
  background: url("../img/select2.png") no-repeat 100% -22px, -webkit-linear-gradient(center bottom, #fff 85%, #eee 99%);
  background: url("../img/select2.png") no-repeat 100% -22px, -moz-linear-gradient(center bottom, #fff 85%, #eee 99%);
  background: url("../img/select2.png") no-repeat 100% -22px, linear-gradient(to bottom, #fff 85%, #eee 99%) 0 0; }

html[dir="rtl"] .select2-search input {
  padding: 4px 5px 4px 20px;
  background: #fff url("../img/select2.png") no-repeat -37px -22px;
  background: url("../img/select2.png") no-repeat -37px -22px, -webkit-gradient(linear, left bottom, left top, color-stop(0.85, #fff), color-stop(0.99, #eee));
  background: url("../img/select2.png") no-repeat -37px -22px, -webkit-linear-gradient(center bottom, #fff 85%, #eee 99%);
  background: url("../img/select2.png") no-repeat -37px -22px, -moz-linear-gradient(center bottom, #fff 85%, #eee 99%);
  background: url("../img/select2.png") no-repeat -37px -22px, linear-gradient(to bottom, #fff 85%, #eee 99%) 0 0; }

.select2-search input.select2-active {
  background: #fff url("../img/select2-spinner.gif") no-repeat 100%;
  background: url("../img/select2-spinner.gif") no-repeat 100%, -webkit-gradient(linear, left bottom, left top, color-stop(0.85, #fff), color-stop(0.99, #eee));
  background: url("../img/select2-spinner.gif") no-repeat 100%, -webkit-linear-gradient(center bottom, #fff 85%, #eee 99%);
  background: url("../img/select2-spinner.gif") no-repeat 100%, -moz-linear-gradient(center bottom, #fff 85%, #eee 99%);
  background: url("../img/select2-spinner.gif") no-repeat 100%, linear-gradient(to bottom, #fff 85%, #eee 99%) 0 0; }

.select2-container-active .select2-choice,
.select2-container-active .select2-choices {
  border: 1px solid #5897fb;
  outline: none;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); }

.select2-dropdown-open .select2-choice {
  border-bottom-color: transparent;
  -webkit-box-shadow: 0 1px 0 #fff inset;
  box-shadow: 0 1px 0 #fff inset;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  background-color: #eee;
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #fff), color-stop(0.5, #eee));
  background-image: -webkit-linear-gradient(center bottom, #fff 0%, #eee 50%);
  background-image: -moz-linear-gradient(center bottom, #fff 0%, #eee 50%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#eeeeee', endColorstr='#ffffff', GradientType=0);
  background-image: linear-gradient(to top, #fff 0%, #eee 50%); }

.select2-dropdown-open.select2-drop-above .select2-choice,
.select2-dropdown-open.select2-drop-above .select2-choices {
  border: 1px solid #5897fb;
  border-top-color: transparent;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #fff), color-stop(0.5, #eee));
  background-image: -webkit-linear-gradient(center top, #fff 0%, #eee 50%);
  background-image: -moz-linear-gradient(center top, #fff 0%, #eee 50%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#eeeeee', endColorstr='#ffffff', GradientType=0);
  background-image: linear-gradient(to bottom, #fff 0%, #eee 50%); }

.select2-dropdown-open .select2-choice .select2-arrow {
  background: transparent;
  border-left: none;
  filter: none; }

html[dir="rtl"] .select2-dropdown-open .select2-choice .select2-arrow {
  border-right: none; }

.select2-dropdown-open .select2-choice .select2-arrow b {
  background-position: -18px 1px; }

html[dir="rtl"] .select2-dropdown-open .select2-choice .select2-arrow b {
  background-position: -16px 1px; }

.select2-hidden-accessible {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px; }

/* results */
.select2-results {
  max-height: 200px;
  padding: 0 0 0 4px;
  margin: 4px 4px 4px 0;
  position: relative;
  overflow-x: hidden;
  overflow-y: auto;
  -webkit-tap-highlight-color: transparent; }

html[dir="rtl"] .select2-results {
  padding: 0 4px 0 0;
  margin: 4px 0 4px 4px; }

.select2-results ul.select2-result-sub {
  margin: 0;
  padding-left: 0; }

.select2-results li {
  list-style: none;
  display: list-item;
  background-image: none; }

.select2-results li.select2-result-with-children > .select2-result-label {
  font-weight: bold; }

.select2-results .select2-result-label {
  padding: 3px 7px 4px;
  margin: 0;
  cursor: pointer;
  min-height: 1em;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }

.select2-results-dept-1 .select2-result-label {
  padding-left: 20px; }

.select2-results-dept-2 .select2-result-label {
  padding-left: 40px; }

.select2-results-dept-3 .select2-result-label {
  padding-left: 60px; }

.select2-results-dept-4 .select2-result-label {
  padding-left: 80px; }

.select2-results-dept-5 .select2-result-label {
  padding-left: 100px; }

.select2-results-dept-6 .select2-result-label {
  padding-left: 110px; }

.select2-results-dept-7 .select2-result-label {
  padding-left: 120px; }

.select2-results .select2-highlighted {
  background: #3875d7;
  color: #FFFFFF; }

.select2-results li em {
  background: #feffde;
  font-style: normal; }

.select2-results .select2-highlighted em {
  background: transparent; }

.select2-results .select2-highlighted ul {
  background: #fff;
  color: #FFFFFF; }

.select2-results .select2-no-results,
.select2-results .select2-searching,
.select2-results .select2-ajax-error,
.select2-results .select2-selection-limit {
  background: #f4f4f4;
  display: list-item;
  padding-left: 5px; }

/*
disabled look for disabled choices in the results dropdown
*/
.select2-results .select2-disabled.select2-highlighted {
  color: #666;
  background: #f4f4f4;
  display: list-item;
  cursor: default; }

.select2-results .select2-disabled {
  background: #f4f4f4;
  display: list-item;
  cursor: default; }

.select2-results .select2-selected {
  display: none; }

.select2-more-results.select2-active {
  background: #f4f4f4 url("../img/select2-spinner.gif") no-repeat 100%; }

.select2-results .select2-ajax-error {
  background: rgba(255, 50, 50, 0.2); }

.select2-more-results {
  background: #f4f4f4;
  display: list-item; }

/* disabled styles */
.select2-container.select2-container-disabled .select2-choice {
  background-color: #f4f4f4;
  background-image: none;
  border: 1px solid #ddd;
  cursor: default; }

.select2-container.select2-container-disabled .select2-choice .select2-arrow {
  background-color: #f4f4f4;
  background-image: none;
  border-left: 0; }

.select2-container.select2-container-disabled .select2-choice abbr {
  display: none; }

/* multiselect */
.select2-container-multi .select2-choices {
  height: auto !important;
  height: 1%;
  margin: 0;
  padding: 0 5px 0 0;
  position: relative;
  border: 1px solid #aaa;
  cursor: text;
  overflow: hidden;
  background-color: #FFFFFF;
  background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, color-stop(1%, #eee), color-stop(15%, #fff));
  background-image: -webkit-linear-gradient(top, #eee 1%, #fff 15%);
  background-image: -moz-linear-gradient(top, #eee 1%, #fff 15%);
  background-image: linear-gradient(to bottom, #eee 1%, #fff 15%); }

html[dir="rtl"] .select2-container-multi .select2-choices {
  padding: 0 0 0 5px; }

.select2-locked {
  padding: 3px 5px 3px 5px !important; }

.select2-container-multi .select2-choices {
  min-height: 26px; }

.select2-container-multi.select2-container-active .select2-choices {
  border: 1px solid #5897fb;
  outline: none;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); }

.select2-container-multi .select2-choices li {
  float: left;
  list-style: none; }

html[dir="rtl"] .select2-container-multi .select2-choices li {
  float: right; }

.select2-container-multi .select2-choices .select2-search-field {
  margin: 0;
  padding: 0;
  white-space: nowrap; }

.select2-container-multi .select2-choices .select2-search-field input {
  padding: 5px;
  margin: 1px 0;
  font-family: sans-serif;
  font-size: 100%;
  color: #666;
  outline: 0;
  border: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
  background: transparent !important; }

.select2-container-multi .select2-choices .select2-search-field input.select2-active {
  background: #fff url("../img/select2-spinner.gif") no-repeat 100% !important; }

.select2-default {
  color: #999 !important; }

.select2-container-multi .select2-choices .select2-search-choice {
  padding: 3px 5px 3px 18px;
  margin: 3px 0 3px 5px;
  position: relative;
  line-height: 13px;
  color: #333;
  cursor: default;
  border: 1px solid #aaaaaa;
  border-radius: 3px;
  -webkit-box-shadow: 0 0 2px #fff inset, 0 1px 0 rgba(0, 0, 0, 0.05);
  box-shadow: 0 0 2px #fff inset, 0 1px 0 rgba(0, 0, 0, 0.05);
  background-clip: padding-box;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: #e4e4e4;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#eeeeee', endColorstr='#f4f4f4', GradientType=0);
  background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, color-stop(20%, #f4f4f4), color-stop(50%, #f0f0f0), color-stop(52%, #e8e8e8), color-stop(100%, #eee));
  background-image: -webkit-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
  background-image: -moz-linear-gradient(top, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%);
  background-image: linear-gradient(to bottom, #f4f4f4 20%, #f0f0f0 50%, #e8e8e8 52%, #eee 100%); }

html[dir="rtl"] .select2-container-multi .select2-choices .select2-search-choice {
  margin: 3px 5px 3px 0;
  padding: 3px 18px 3px 5px; }

.select2-container-multi .select2-choices .select2-search-choice .select2-chosen {
  cursor: default; }

.select2-container-multi .select2-choices .select2-search-choice-focus {
  background: #d4d4d4; }

.select2-search-choice-close {
  display: block;
  width: 12px;
  height: 13px;
  position: absolute;
  right: 3px;
  top: 4px;
  font-size: 1px;
  outline: none;
  background: url("../img/select2.png") right top no-repeat; }

html[dir="rtl"] .select2-search-choice-close {
  right: auto;
  left: 3px; }

.select2-container-multi .select2-search-choice-close {
  left: 3px; }

html[dir="rtl"] .select2-container-multi .select2-search-choice-close {
  left: auto;
  right: 2px; }

.select2-container-multi .select2-choices .select2-search-choice .select2-search-choice-close:hover {
  background-position: right -11px; }

.select2-container-multi .select2-choices .select2-search-choice-focus .select2-search-choice-close {
  background-position: right -11px; }

/* disabled styles */
.select2-container-multi.select2-container-disabled .select2-choices {
  background-color: #f4f4f4;
  background-image: none;
  border: 1px solid #ddd;
  cursor: default; }

.select2-container-multi.select2-container-disabled .select2-choices .select2-search-choice {
  padding: 3px 5px 3px 5px;
  border: 1px solid #ddd;
  background-image: none;
  background-color: #f4f4f4; }

.select2-container-multi.select2-container-disabled .select2-choices .select2-search-choice .select2-search-choice-close {
  display: none;
  background: none; }

/* end multiselect */
.select2-result-selectable .select2-match,
.select2-result-unselectable .select2-match {
  text-decoration: underline; }

.select2-offscreen, .select2-offscreen:focus {
  clip: rect(0 0 0 0) !important;
  width: 1px !important;
  height: 1px !important;
  border: 0 !important;
  margin: 0 !important;
  padding: 0 !important;
  overflow: hidden !important;
  position: absolute !important;
  outline: 0 !important;
  left: 0px !important;
  top: 0px !important; }

.select2-display-none {
  display: none; }

.select2-measure-scrollbar {
  position: absolute;
  top: -10000px;
  left: -10000px;
  width: 100px;
  height: 100px;
  overflow: scroll; }

/* Retina-ize icons */
@media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-resolution: 2dppx) {
  .select2-search input,
  .select2-search-choice-close,
  .select2-container .select2-choice abbr,
  .select2-container .select2-choice .select2-arrow b {
    background-image: url("../img/select2x2.png") !important;
    background-repeat: no-repeat !important;
    background-size: 60px 40px !important; }
  .select2-search input {
    background-position: 100% -21px !important; } }

/*! Select2 Bootstrap 3 CSS v1.4.6 | MIT License | github.com/t0m/select2-bootstrap-css */
/**
* Reset Bootstrap 3 .form-control styles which - if applied to the
* original <select>-element the Select2-plugin may be run against -
* are copied to the .select2-container.
*
* 1. Overwrite .select2-container's original display:inline-block
*    with Bootstrap 3's default for .form-control, display:block;
*    courtesy of @juristr (@see https://github.com/fk/select2-bootstrap-css/pull/1)
*/
.select2-container.form-control, .daterangepicker .select2-container.input-mini, .input-group > .ui-select-bootstrap > input.select2-container.ui-select-search.form-control {
  background: transparent;
  box-shadow: none;
  display: block;
  /* 1 */
  margin: 0;
  padding: 0; }

/**
* Adjust Select2 inputs to fit Bootstrap 3 default .form-control appearance.
*/
.select2-container .select2-choices .select2-search-field input,
.select2-container .select2-choice,
.select2-container .select2-choices {
  background: none;
  padding: 0;
  border-color: #cccccc;
  border-radius: 4px;
  color: #555555;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  background-color: white;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false); }

.select2-search input {
  border-color: #cccccc;
  border-radius: 4px;
  color: #555555;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  background-color: white;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); }

.select2-container .select2-choices .select2-search-field input {
  -webkit-box-shadow: none;
  box-shadow: none; }

/**
* Adjust Select2 input heights to match the Bootstrap default.
*/
.select2-container .select2-choice {
  height: 34px;
  line-height: 1.42857; }

/**
* Address Multi Select2's height which - depending on how many elements have been selected -
* may grown higher than their initial size.
*/
.select2-container.select2-container-multi.form-control, .daterangepicker .select2-container.select2-container-multi.input-mini, .input-group > .ui-select-bootstrap > input.select2-container.select2-container-multi.ui-select-search.form-control {
  height: auto; }

/**
* Address Bootstrap 3 control sizing classes
* @see http://getbootstrap.com/css/#forms-control-sizes
*/
.select2-container.input-sm .select2-choice,
.input-group-sm .select2-container .select2-choice {
  height: 30px;
  line-height: 1.5;
  border-radius: 3px; }

.select2-container.input-lg .select2-choice,
.input-group-lg .select2-container .select2-choice {
  height: 46px;
  line-height: 1.33333;
  border-radius: 6px; }

.select2-container-multi .select2-choices .select2-search-field input {
  height: 32px; }

.select2-container-multi.input-sm .select2-choices .select2-search-field input,
.input-group-sm .select2-container-multi .select2-choices .select2-search-field input {
  height: 28px; }

.select2-container-multi.input-lg .select2-choices .select2-search-field input,
.input-group-lg .select2-container-multi .select2-choices .select2-search-field input {
  height: 44px; }

/**
* Adjust height and line-height for .select2-search-field amd multi-select Select2 widgets.
*
* 1. Class repetition to address missing .select2-chosen in Select2 < 3.3.2.
*/
.select2-container-multi .select2-choices .select2-search-field input {
  margin: 0; }

.input-sm .select2-chosen,
.input-group-sm .select2-chosen,
.input-sm .select2-choice > span:first-child,
.input-group-sm .select2-choice > span:first-child,
.input-sm .select2-choices .select2-search-field input,
.input-group-sm .select2-choices .select2-search-field input {
  padding: 5px 10px; }

.input-lg .select2-chosen,
.input-group-lg .select2-chosen,
.input-lg .select2-choice > span:first-child,
.input-group-lg .select2-choice > span:first-child,
.input-lg .select2-choices .select2-search-field input,
.input-group-lg .select2-choices .select2-search-field input {
  padding: 10px 16px; }

.select2-container-multi .select2-choices .select2-search-choice {
  margin-top: 5px;
  margin-bottom: 3px; }

.select2-container-multi.input-sm .select2-choices .select2-search-choice,
.input-group-sm .select2-container-multi .select2-choices .select2-search-choice {
  margin-top: 3px;
  margin-bottom: 2px; }

.select2-container-multi.input-lg .select2-choices .select2-search-choice,
.input-group-lg .select2-container-multi .select2-choices .select2-search-choice {
  line-height: 24px; }

/**
* Adjust the single Select2's dropdown arrow button appearance.
*
* 1. For Select2 v.3.3.2.
*/
.select2-container .select2-choice .select2-arrow,
.select2-container .select2-choice div {
  border-left: none;
  background: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false); }

.select2-dropdown-open .select2-choice .select2-arrow,
.select2-dropdown-open .select2-choice div {
  border-left-color: transparent;
  background: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false); }

/**
* Adjust the dropdown arrow button icon position for the single-select Select2 elements
* to make it line up vertically now that we increased the height of .select2-container.
*
* 1. Class repetition to address missing .select2-chosen in Select2 v.3.3.2.
*/
.select2-container .select2-choice .select2-arrow b,
.select2-container .select2-choice div b {
  background-position: 0 3px; }

.select2-dropdown-open .select2-choice .select2-arrow b,
.select2-dropdown-open .select2-choice div b {
  background-position: -18px 3px; }

.select2-container.input-sm .select2-choice .select2-arrow b,
.input-group-sm .select2-container .select2-choice .select2-arrow b,
.select2-container.input-sm .select2-choice div b,
.input-group-sm .select2-container .select2-choice div b {
  background-position: 0 1px; }

.select2-dropdown-open.input-sm .select2-choice .select2-arrow b,
.input-group-sm .select2-dropdown-open .select2-choice .select2-arrow b,
.select2-dropdown-open.input-sm .select2-choice div b,
.input-group-sm .select2-dropdown-open .select2-choice div b {
  background-position: -18px 1px; }

.select2-container.input-lg .select2-choice .select2-arrow b,
.input-group-lg .select2-container .select2-choice .select2-arrow b,
.select2-container.input-lg .select2-choice div b,
.input-group-lg .select2-container .select2-choice div b {
  background-position: 0 9px; }

.select2-dropdown-open.input-lg .select2-choice .select2-arrow b,
.input-group-lg .select2-dropdown-open .select2-choice .select2-arrow b,
.select2-dropdown-open.input-lg .select2-choice div b,
.input-group-lg .select2-dropdown-open .select2-choice div b {
  background-position: -18px 9px; }

/**
* Address Bootstrap's validation states and change Select2's border colors and focus states.
* Apply .has-warning, .has-danger or .has-succes to #select2-drop to match Bootstraps' colors.
*/
.has-warning .select2-choice,
.has-warning .select2-choices {
  border-color: #8a6d3b; }

.has-warning .select2-container-active .select2-choice,
.has-warning .select2-container-multi.select2-container-active .select2-choices {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b; }

.has-warning.select2-drop-active {
  border-color: #66512c; }

.has-warning.select2-drop-active.select2-drop.select2-drop-above {
  border-top-color: #66512c; }

.has-error .select2-choice,
.has-error .select2-choices {
  border-color: #a94442; }

.has-error .select2-container-active .select2-choice,
.has-error .select2-container-multi.select2-container-active .select2-choices {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483; }

.has-error.select2-drop-active {
  border-color: #843534; }

.has-error.select2-drop-active.select2-drop.select2-drop-above {
  border-top-color: #843534; }

.has-success .select2-choice,
.has-success .select2-choices {
  border-color: #3c763d; }

.has-success .select2-container-active .select2-choice,
.has-success .select2-container-multi.select2-container-active .select2-choices {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168; }

.has-success.select2-drop-active {
  border-color: #2b542c; }

.has-success.select2-drop-active.select2-drop.select2-drop-above {
  border-top-color: #2b542c; }

/**
* Make Select2's active-styles - applied to .select2-container when the widget receives focus -
* fit Bootstrap 3's .form-element:focus appearance.
*/
.select2-container-active .select2-choice,
.select2-container-multi.select2-container-active .select2-choices {
  border-color: #66afe9;
  outline: none;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
  -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s; }

.select2-drop-active {
  border-color: #66afe9; }

.select2-drop-auto-width,
.select2-drop.select2-drop-above.select2-drop-active {
  border-top-color: #66afe9; }

/**
* Select2 widgets in Bootstrap Input Groups
*
* When Select2 widgets are combined with other elements using Bootstrap 3's
* "Input Group" component, we don't want specific edges of the Select2 container
* to have a border-radius.
*
* In Bootstrap 2, input groups required a markup where these style adjustments
* could be bound to a CSS-class identifying if the additional elements are appended,
* prepended or both.
*
* Bootstrap 3 doesn't rely on these classes anymore, so we have to use our own.
* Use .select2-bootstrap-prepend and .select2-bootstrap-append on a Bootstrap 3 .input-group
* to let the contained Select2 widget know which edges should not be rounded as they are
* directly followed by another element.
*
* @see http://getbootstrap.com/components/#input-groups
*/
.input-group.select2-bootstrap-prepend [class^="select2-choice"] {
  border-bottom-left-radius: 0 !important;
  border-top-left-radius: 0 !important; }

.input-group.select2-bootstrap-append [class^="select2-choice"] {
  border-bottom-right-radius: 0 !important;
  border-top-right-radius: 0 !important; }

.select2-dropdown-open [class^="select2-choice"] {
  border-bottom-right-radius: 0 !important;
  border-bottom-left-radius: 0 !important; }

.select2-dropdown-open.select2-drop-above [class^="select2-choice"] {
  border-top-right-radius: 0 !important;
  border-top-left-radius: 0 !important;
  border-bottom-right-radius: 4px !important;
  border-bottom-left-radius: 4px !important;
  background: white;
  filter: none; }

.input-group.select2-bootstrap-prepend .select2-dropdown-open.select2-drop-above [class^="select2-choice"] {
  border-bottom-left-radius: 0 !important;
  border-top-left-radius: 0 !important; }

.input-group.select2-bootstrap-append .select2-dropdown-open.select2-drop-above [class^="select2-choice"] {
  border-bottom-right-radius: 0 !important;
  border-top-right-radius: 0 !important; }

.input-group.input-group-sm.select2-bootstrap-prepend .select2-dropdown-open.select2-drop-above [class^="select2-choice"] {
  border-bottom-right-radius: 3px !important; }

.input-group.input-group-lg.select2-bootstrap-prepend .select2-dropdown-open.select2-drop-above [class^="select2-choice"] {
  border-bottom-right-radius: 6px !important; }

.input-group.input-group-sm.select2-bootstrap-append .select2-dropdown-open.select2-drop-above [class^="select2-choice"] {
  border-bottom-left-radius: 3px !important; }

.input-group.input-group-lg.select2-bootstrap-append .select2-dropdown-open.select2-drop-above [class^="select2-choice"] {
  border-bottom-left-radius: 6px !important; }

/**
* Adjust Select2's choices hover and selected styles to match Bootstrap 3's default dropdown styles.
*/
.select2-results .select2-highlighted {
  color: white;
  background-color: #FFFFFF; }

/**
* Adjust alignment of Bootstrap 3 buttons in Bootstrap 3 Input Groups to address
* Multi Select2's height which - depending on how many elements have been selected -
* may grown higher than their initial size.
*/
.select2-bootstrap-append .select2-container-multiple,
.select2-bootstrap-append .input-group-btn,
.select2-bootstrap-append .input-group-btn .btn,
.select2-bootstrap-append .input-group-btn .fc button, .fc
.select2-bootstrap-append .input-group-btn button,
.select2-bootstrap-prepend .select2-container-multiple,
.select2-bootstrap-prepend .input-group-btn,
.select2-bootstrap-prepend .input-group-btn .btn,
.select2-bootstrap-prepend .input-group-btn .fc button, .fc
.select2-bootstrap-prepend .input-group-btn button {
  vertical-align: top; }

/**
* Make Multi Select2's choices match Bootstrap 3's default button styles.
*/
.select2-container-multi .select2-choices .select2-search-choice {
  color: #555555;
  background: white;
  border-color: #cccccc;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  -webkit-box-shadow: none;
  box-shadow: none; }

.select2-container-multi .select2-choices .select2-search-choice-focus {
  background: #ebebeb;
  border-color: #adadad;
  color: #333333;
  -webkit-box-shadow: none;
  box-shadow: none; }

/**
* Address Multi Select2's choice close-button vertical alignment.
*/
.select2-search-choice-close {
  margin-top: -7px;
  top: 50%; }

/**
* Adjust the single Select2's clear button position (used to reset the select box
* back to the placeholder value and visible once a selection is made
* activated by Select2's "allowClear" option).
*/
.select2-container .select2-choice abbr {
  top: 50%; }

/**
* Adjust "no results" and "selection limit" messages to make use
* of Bootstrap 3's default "Alert" style.
*
* @see http://getbootstrap.com/components/#alerts-default
*/
.select2-results .select2-no-results,
.select2-results .select2-searching,
.select2-results .select2-selection-limit {
  background-color: #fcf8e3;
  color: #8a6d3b; }

/**
* Address disabled Select2 styles.
*
* 1. For Select2 v.3.3.2.
* 2. Revert border-left:0 inherited from Select2's CSS to prevent the arrow
*    from jumping when switching from disabled to enabled state and vice versa.
*/
.select2-container.select2-container-disabled .select2-choice,
.select2-container.select2-container-disabled .select2-choices {
  cursor: not-allowed;
  background-color: #eeeeee;
  border-color: #cccccc; }

.select2-container.select2-container-disabled .select2-choice .select2-arrow,
.select2-container.select2-container-disabled .select2-choice div,
.select2-container.select2-container-disabled .select2-choices .select2-arrow,
.select2-container.select2-container-disabled .select2-choices div {
  background-color: transparent;
  border-left: 1px solid transparent;
  /* 2 */ }

/**
* Address Select2's loading indicator position - which should not stick
* to the right edge of Select2's search input.
*
* 1. in .select2-search input
* 2. in Multi Select2's .select2-search-field input
* 3. in the status-message of infinite-scroll with remote data (@see http://ivaynberg.github.io/select2/#infinite)
*
* These styles alter Select2's default background-position of 100%
* and supply the new background-position syntax to browsers which support it:
*
* 1. Android, Safari < 6/Mobile, IE<9: change to a relative background-position of 99%
* 2. Chrome 25+, Firefox 13+, IE 9+, Opera 10.5+: use the new CSS3-background-position syntax
*
* @see http://www.w3.org/TR/css3-background/#background-position
*
* @todo Since both Select2 and Bootstrap 3 only support IE8 and above,
* we could use the :after-pseudo-element to display the loading indicator.
* Alternatively, we could supply an altered loading indicator image which already
* contains an offset to the right.
*/
.select2-search input.select2-active,
.select2-container-multi .select2-choices .select2-search-field input.select2-active,
.select2-more-results.select2-active {
  background-position: 99%;
  /* 4 */
  background-position: right 4px center;
  /* 5 */ }

/**
* To support Select2 pre v3.4.2 in combination with Bootstrap v3.2.0,
* ensure that .select2-offscreen width, height and position can not be overwritten.
*
* This adresses changes in Bootstrap somewhere after the initial v3.0.0 which -
* in combination with Select2's pre-v3.4.2 CSS missing the "!important" after
* the following rules - allow Bootstrap to overwrite the latter, which results in
* the original <select> element Select2 is replacing not be properly being hidden
* when used in a "Bootstrap Input Group with Addon".
**/
.select2-offscreen,
.select2-offscreen:focus {
  width: 1px !important;
  height: 1px !important;
  position: absolute !important; }

/*!
* ui-select
* http://github.com/angular-ui/ui-select
* Version: 0.13.1 - 2015-09-30T05:39:26.659Z
* License: MIT
*/
/* Style when highlighting a search. */
.ui-select-highlight {
  font-weight: bold; }

.ui-select-offscreen {
  clip: rect(0 0 0 0) !important;
  width: 1px !important;
  height: 1px !important;
  border: 0 !important;
  margin: 0 !important;
  padding: 0 !important;
  overflow: hidden !important;
  position: absolute !important;
  outline: 0 !important;
  left: 0px !important;
  top: 0px !important; }

.ui-select-choices-row:hover {
  background-color: #f5f5f5; }

/* Select2 theme */
/* Mark invalid Select2 */
.ng-dirty.ng-invalid > a.select2-choice {
  border-color: #D44950; }

.select2-result-single {
  padding-left: 0; }

.select2-locked > .select2-search-choice-close {
  display: none; }

.select-locked > .ui-select-match-close {
  display: none; }

body > .select2-container.open {
  z-index: 9999;
  /* The z-index Select2 applies to the select2-drop */ }

/* Handle up direction Select2 */
.ui-select-container[theme="select2"].direction-up .ui-select-match {
  border-radius: 4px;
  /* FIXME hardcoded value :-/ */
  border-top-left-radius: 0;
  border-top-right-radius: 0; }

.ui-select-container[theme="select2"].direction-up .ui-select-dropdown {
  border-radius: 4px;
  /* FIXME hardcoded value :-/ */
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  border-top-width: 1px;
  /* FIXME hardcoded value :-/ */
  border-top-style: solid;
  box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.25);
  margin-top: -4px;
  /* FIXME hardcoded value :-/ */ }

.ui-select-container[theme="select2"].direction-up .ui-select-dropdown .select2-search {
  margin-top: 4px;
  /* FIXME hardcoded value :-/ */ }

.ui-select-container[theme="select2"].direction-up.select2-dropdown-open .ui-select-match {
  border-bottom-color: #5897fb; }

/* Bootstrap theme */
/* Helper class to show styles when focus */
.btn-default-focus {
  border-color: #FFFFFF; }

.btn-default {
  border-color: #d1d4d7;
  outline: 0;
  padding-left: 12px; }

.ui-select-bootstrap .ui-select-toggle {
  position: relative; }

.ui-select-bootstrap .ui-select-toggle > .caret {
  position: absolute;
  height: 10px;
  top: 50%;
  right: 10px;
  margin-top: -2px; }

/* Fix Bootstrap dropdown position when inside a input-group */
.input-group > .ui-select-bootstrap.dropdown {
  /* Instead of relative */
  position: static; }

.daterangepicker .input-group > .ui-select-bootstrap > input.ui-select-search.input-mini, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control, .input-group > .ui-select-bootstrap > input.ui-select-search.form-control.direction-up {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.daterangepicker .input-group > .ui-select-bootstrap > input.ui-select-search.direction-up.input-mini, .input-group > .ui-select-bootstrap > input.ui-select-search.direction-up.form-control {
  border-top-right-radius: 0 !important;
  border-bottom-right-radius: 0; }

.ui-select-bootstrap > .ui-select-match > .btn, .fc .ui-select-bootstrap > .ui-select-match > button {
  /* Instead of center because of .btn */
  text-align: left !important; }

.ui-select-bootstrap > .ui-select-match > .caret {
  position: absolute;
  top: 45%;
  right: 15px; }

/* See Scrollable Menu with Bootstrap 3 http://stackoverflow.com/questions/19227496 */
.ui-select-bootstrap > .ui-select-choices {
  width: 100%;
  height: auto;
  max-height: 200px;
  overflow-x: hidden;
  margin-top: -1px; }

body > .ui-select-bootstrap.open {
  z-index: 1000;
  /* Standard Bootstrap dropdown z-index */ }

.ui-select-multiple.ui-select-bootstrap {
  height: auto;
  padding: 3px 3px 0 3px; }

.ui-select-multiple.ui-select-bootstrap input.ui-select-search {
  background-color: transparent !important;
  /* To prevent double background when disabled */
  border: none;
  outline: none;
  height: 1.666666em;
  margin-bottom: 3px; }

.ui-select-multiple.ui-select-bootstrap .ui-select-match .close {
  font-size: 1.6em;
  line-height: 0.75; }

.ui-select-multiple.ui-select-bootstrap .ui-select-match-item {
  outline: 0;
  margin: 0 3px 3px 0; }

.ui-select-multiple .ui-select-match-item {
  position: relative; }

.ui-select-multiple .ui-select-match-item.dropping-before:before {
  content: "";
  position: absolute;
  top: 0;
  right: 100%;
  height: 100%;
  margin-right: 2px;
  border-left: 1px solid #428bca; }

.ui-select-multiple .ui-select-match-item.dropping-after:after {
  content: "";
  position: absolute;
  top: 0;
  left: 100%;
  height: 100%;
  margin-left: 2px;
  border-right: 1px solid #428bca; }

.ui-select-bootstrap .ui-select-choices-row > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: 400;
  line-height: 1.42857143;
  color: #333;
  white-space: nowrap; }

.ui-select-bootstrap .ui-select-choices-row > a:hover, .ui-select-bootstrap .ui-select-choices-row > a:focus {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5; }

.ui-select-bootstrap .ui-select-choices-row.active > a {
  color: #FFFFFF;
  text-decoration: none;
  outline: 0;
  background-color: #428bca; }

.ui-select-bootstrap .ui-select-choices-row.disabled > a,
.ui-select-bootstrap .ui-select-choices-row.active.disabled > a {
  color: #777;
  cursor: not-allowed;
  background-color: #FFFFFF; }

/* fix hide/show angular animation */
.ui-select-match.ng-hide-add,
.ui-select-search.ng-hide-add {
  display: none !important; }

/* Mark invalid Bootstrap */
.ui-select-bootstrap.ng-dirty.ng-invalid > button.btn.ui-select-match, .fc .ui-select-bootstrap.ng-dirty.ng-invalid > button.ui-select-match {
  border-color: #D44950; }

/* Handle up direction Bootstrap */
.ui-select-container[theme="bootstrap"].direction-up .ui-select-dropdown {
  box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.25); }

.ui-select-container {
  width: 100% !important; }
  .ui-select-container .ui-select-match .ui-select-toggle {
    outline: 0; }

select {
    color: #fff;
    background-color: #262626;
    border-color: #20a8d8;
  background-size: 24px 20px !important;
  background-position: right center !important;
  border-radius: 0px !important;
  border: 1px solid #d1d4d7 !important;
  color: #888;
  border: none;
  outline: none;
  display: inline-block;
  -webkit-appearance: none;
  -ms-appearance: none;
  appearance: none;
  cursor: pointer; }

.select2-container.form-control, .daterangepicker .select2-container.input-mini, .input-group > .ui-select-bootstrap > input.select2-container.ui-select-search.form-control {
  background: transparent;
  box-shadow: none;
  display: block;
  /* 1 */
  margin: 0;
  padding: 0;
  line-height: 1px !important; }

.select2-container .select2-choice {
  height: 32px;
  padding: 6px 0 0 12px;
  border: none; }

.select2-container .select2-choice .select2-arrow {
  right: 0px;
  top: 0px;
  background: #f8f9fa;
  border: none; }

.select2-container-active .select2-choice,
.select2-container-active .select2-choices {
  box-shadow: none; }

.select2-drop {
  color: #FFFFFF;
  border: 1px solid rgb(35,35,35);
  border-radius: 0;
  box-shadow: none; }

.select2-container.select2-dropdown-open {
  border-color: #d1d4d7 !important;
  border-radius: 0; }

.select2-container-multi .select2-choices {
  box-shadow: none;
  border-radius: 0 !important;
  border: 0;
  background: white; }

.select2-default {
  color: #09090b !important;
  padding-left: 12px !important; }

.select2-container-multi .select2-choices .select2-search-choice {
  padding: 3px 5px 4px 18px;
  margin: 5px 0 3px 5px;
  border: 1px solid rgb(35,35,35);
  border-radius: 0;
  box-shadow: none;
  background-color: rgb(11,11,11);
  filter: none;
  background-image: none;
  font-size: 11px; }

.select2-container-multi .select2-choices .select2-search-field input {
  color: #FFFFFF; }

.select2-container-active .select2-choice,
.select2-container-multi.select2-container-active .select2-choices {
  border-color: rgb(35,35,35) !important;
  box-shadow: none; }

.select2-search-choice-close {
  background: url("../img/select2.png") right top no-repeat; }

@media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min-resolution: 2dppx) {
  .select2-search input,
  .select2-search-choice-close,
  .select2-container .select2-choice abbr,
  .select2-container .select2-choice .select2-arrow b {
    background-image: url("../img/select2x2.png") !important; } }

.cal-month-view .cal-header {
  text-align: center;
  font-weight: bolder; }

.cal-month-view .cal-cell-row:hover {
  background-color: rgb(11,11,11); }

.cal-month-view .cal-header .cal-cell {
  padding: 5px 0;
  overflow: hidden;
  text-overflow: ellipsis;
  display: block;
  white-space: nowrap; }

.cal-month-view .cal-cell-row .cal-cell:hover,
.cal-month-view .cal-cell.cal-has-events.cal-open {
  background-color: rgb(11,11,11); }

.cal-month-view .cal-days {
  border: 1px solid rgb(35,35,35);
  border-bottom: 0; }

.cal-month-view .cal-cell-top {
  min-height: 62px; }

.cal-month-view .cal-cell-row {
  display: flex; }

.cal-month-view .cal-cell {
  float: left;
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: stretch; }

.cal-month-view .cal-day-cell {
  min-height: 100px; }

.cal-month-view .cal-day-cell:not(:last-child) {
  border-right: 1px solid #d1d4d7; }

.cal-month-view .cal-days .cal-cell-row {
  border-bottom: 1px solid #d1d4d7; }

.cal-month-view .cal-day-badge {
  margin-top: 18px;
  margin-left: 10px;
  background-color: #ff5454;
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: 700;
  line-height: 1;
  color: white;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  border-radius: 10px; }

.cal-month-view .cal-day-number {
  font-size: 1.2em;
  font-weight: 400;
  opacity: 0.5;
  margin-top: 15px;
  margin-right: 15px;
  float: right;
  margin-bottom: 10px; }

.cal-month-view .cal-events {
  flex: 1;
  align-items: flex-end;
  margin: 3px;
  line-height: 10px;
  display: flex;
  flex-wrap: wrap; }

.cal-month-view .cal-event {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  display: inline-block;
  margin: 2px; }

.cal-month-view .cal-day-cell.cal-in-month.cal-has-events {
  cursor: pointer; }

.cal-month-view .cal-day-cell.cal-out-month .cal-day-number {
  opacity: 0.1;
  cursor: default; }

.cal-month-view .cal-day-cell.cal-weekend .cal-day-number {
  color: darkred; }

.cal-month-view .cal-day-cell.cal-today {
  background-color: e8fde7; }

.cal-month-view .cal-day-cell.cal-today .cal-day-number {
  font-size: 1.9em; }

.cal-month-view .cal-open-day-events {
  padding: 15px;
  color: white;
  background-color: #55595c; }

.cal-month-view .cal-open-day-events .cal-event {
  position: relative;
  top: 2px; }

.cal-month-view .cal-event-title {
  color: white; }

.cal-month-view .cal-out-month .cal-day-badge,
.cal-month-view .cal-out-month .cal-event {
  opacity: 0.3; }

.cal-week-view .cal-day-headers {
  display: flex;
  margin-bottom: 3px;
  border: 1px solid rgb(35,35,35);
  margin-left: 2px;
  margin-right: 2px; }

.cal-week-view .cal-day-headers .cal-header {
  flex: 1;
  text-align: center;
  padding: 5px; }

.cal-week-view .cal-day-headers .cal-header:not(:last-child) {
  border-right: 1px solid #d1d4d7; }

.cal-week-view .cal-day-headers .cal-header:hover {
  background-color: rgb(11,11,11); }

.cal-week-view .cal-day-headers span {
  font-weight: 400;
  opacity: 0.5; }

.cal-week-view .cal-event-container {
  display: inline-block; }

.cal-week-view .cal-event {
  padding: 0 10px;
  font-size: 12px;
  margin-left: 2px;
  margin-right: 2px;
  height: 30px;
  line-height: 30px; }

.cal-week-view .cal-event.cal-starts-within-week {
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px; }

.cal-week-view .cal-event.cal-ends-within-week {
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px; }

.cal-week-view .cal-header.cal-today {
  background-color: #bfe3a8; }

.cal-week-view .cal-header.cal-weekend span {
  color: #ff5454; }

.cal-week-view .cal-event,
.cal-week-view .cal-header {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; }

.cal-day-view .cal-hour-rows {
  width: 100%;
  border: solid 1px #d1d4d7;
  overflow-x: scroll;
  position: relative; }

.cal-day-view .cal-hour:nth-child(odd) {
  background-color: rgb(11,11,11); }

.cal-day-view .cal-hour-segment {
  height: 30px; }

.cal-day-view .cal-hour:not(:last-child) .cal-hour-segment,
.cal-day-view .cal-hour:last-child :not(:last-child) .cal-hour-segment {
  border-bottom: thin dashed #d1d4d7; }

.cal-day-view .cal-time {
  font-weight: bold;
  padding-top: 5px;
  width: 70px;
  text-align: center; }

.cal-day-view .cal-hour-segment:hover {
  background-color: rgb(11,11,11); }

.cal-day-view .cal-event {
  position: absolute;
  border: solid 1px;
  padding: 5px;
  font-size: 12px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; }

.cal-day-view .cal-event.cal-starts-within-day {
  border-top-left-radius: 5px;
  border-top-right-radius: 5px; }

.cal-day-view .cal-event.cal-ends-within-day {
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px; }

.cal-day-view .cal-all-day-event {
  padding: 8px;
  border: solid 1px; }

.gu-mirror {
  position: fixed !important;
  margin: 0 !important;
  z-index: 9999 !important;
  opacity: 0.8;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
  filter: alpha(opacity=80); }

.gu-hide {
  display: none !important; }

.gu-unselectable {
  -webkit-user-select: none !important;
  -moz-user-select: none !important;
  -ms-user-select: none !important;
  user-select: none !important; }

.gu-transit {
  opacity: 0.2;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=20)";
  filter: alpha(opacity=20); }

/**
 * React Select
 * ============
 * Created by Jed Watson and Joss Mackison for KeystoneJS, http://www.keystonejs.com/
 * https://twitter.com/jedwatson https://twitter.com/jossmackison https://twitter.com/keystonejs
 * MIT License: https://github.com/JedWatson/react-select
*/
@keyframes Select-animation-spin {
  to {
    transform: rotate(1turn); } }

@-webkit-keyframes Select-animation-spin {
  to {
    -webkit-transform: rotate(1turn); } }

.Select {
  position: relative; }
  .Select,
  .Select div,
  .Select input,
  .Select span {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box; }
  .Select.is-disabled > .Select-control {
    background-color: #f9f9f9; }
    .Select.is-disabled > .Select-control:hover {
      box-shadow: none; }
  .Select.is-disabled .Select-arrow-zone {
    cursor: default;
    pointer-events: none; }

.Select-control {
  background-color: #FFFFFF;
  border-color: rgba(13, 13, 13, 0.15) rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.15);
  border-radius: 0;
  border: 1px solid rgba(0, 0, 0, 0.15);
  color: #55595c;
  cursor: default;
  display: table;
  border-spacing: 0;
  border-collapse: separate;
  height: 36px;
  outline: none;
  overflow: hidden;
  position: relative;
  width: 100%; }
  .Select-control:hover {
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.06); }
  .Select-control .Select-input:focus {
    outline: none; }

.is-searchable.is-open > .Select-control {
  cursor: text; }

.is-open > .Select-control {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  background: #fff;
  border-color: rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.15) rgba(13, 13, 13, 0.15); }
  .is-open > .Select-control .Select-arrow {
    top: -2px;
    border-color: transparent transparent #999;
    border-width: 0 5px 5px; }

.is-searchable.is-focused:not(.is-open) > .Select-control {
  cursor: text; }

.is-focused:not(.is-open) > .Select-control {
  border-color: #08c #0099e6 #0099e6;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 5px -1px fade(#08c, 50%); }

.Select-placeholder,
.Select--single > .Select-control .Select-value {
  bottom: 0;
  color: #aaa;
  left: 0;
  line-height: 34px;
  padding-left: 10px;
  padding-right: 10px;
  position: absolute;
  right: 0;
  top: 0;
  max-width: 100%;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; }

.has-value.Select--single > .Select-control .Select-value .Select-value-label,
.has-value.is-pseudo-focused.Select--single > .Select-control .Select-value .Select-value-label {
  color: #55595c; }

.has-value.Select--single > .Select-control .Select-value a.Select-value-label,
.has-value.is-pseudo-focused.Select--single > .Select-control .Select-value a.Select-value-label {
  cursor: pointer;
  text-decoration: none; }
  .has-value.Select--single > .Select-control .Select-value a.Select-value-label:hover, .has-value.Select--single > .Select-control .Select-value a.Select-value-label:focus,
  .has-value.is-pseudo-focused.Select--single > .Select-control .Select-value a.Select-value-label:hover,
  .has-value.is-pseudo-focused.Select--single > .Select-control .Select-value a.Select-value-label:focus {
    color: #08c;
    outline: none;
    text-decoration: underline; }

.Select-input {
  height: 34px;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle; }
  .Select-input > input {
    background: none transparent;
    border: 0 none;
    box-shadow: none;
    cursor: default;
    display: inline-block;
    font-family: inherit;
    font-size: inherit;
    margin: 0;
    outline: none;
    line-height: 14px;
    /* For IE 8 compatibility */
    padding: 8px 0 12px;
    /* For IE 8 compatibility */
    -webkit-appearance: none; }
    .is-focused .Select-input > input {
      cursor: text; }

.has-value.is-pseudo-focused .Select-input {
  opacity: 0; }

.Select-control:not(.is-searchable) > .Select-input {
  outline: none; }

.Select-loading-zone {
  cursor: pointer;
  display: table-cell;
  position: relative;
  text-align: center;
  vertical-align: middle;
  width: 16px; }

.Select-loading {
  -webkit-animation: Select-animation-spin 400ms infinite linear;
  -o-animation: Select-animation-spin 400ms infinite linear;
  animation: Select-animation-spin 400ms infinite linear;
  width: 16px;
  height: 16px;
  box-sizing: border-box;
  border-radius: 50%;
  border: 2px solid rgba(0, 0, 0, 0.15);
  border-right-color: #55595c;
  display: inline-block;
  position: relative;
  vertical-align: middle; }

.Select-clear-zone {
  -webkit-animation: Select-animation-fadeIn 200ms;
  -o-animation: Select-animation-fadeIn 200ms;
  animation: Select-animation-fadeIn 200ms;
  color: #999;
  cursor: pointer;
  display: table-cell;
  position: relative;
  text-align: center;
  vertical-align: middle;
  width: 17px; }
  .Select-clear-zone:hover {
    color: #D0021B; }

.Select-clear {
  display: inline-block;
  font-size: 18px;
  line-height: 1; }

.Select--multi .Select-clear-zone {
  width: 17px; }

.Select--multi .Select-multi-value-wrapper {
  display: inline-block; }

.Select .Select-aria-only {
  display: inline-block;
  height: 1px;
  width: 1px;
  margin: -1px;
  clip: rect(0, 0, 0, 0);
  overflow: hidden; }

.Select-arrow-zone {
  cursor: pointer;
  display: table-cell;
  position: relative;
  text-align: center;
  vertical-align: middle;
  width: 25px;
  padding-right: 5px; }

.Select-arrow {
  border-color: #999 transparent transparent;
  border-style: solid;
  border-width: 5px 5px 2.5px;
  display: inline-block;
  height: 0;
  width: 0;
  position: relative; }

.is-open .Select-arrow,
.Select-arrow-zone:hover > .Select-arrow {
  border-top-color: #666; }

@-webkit-keyframes Select-animation-fadeIn {
  from {
    opacity: 0; }
  to {
    opacity: 1; } }

@keyframes Select-animation-fadeIn {
  from {
    opacity: 0; }
  to {
    opacity: 1; } }

.Select-menu-outer {
  border-radius: 0;
  background-color: #FFFFFF;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-top-color: rgba(236, 236, 236, 0.575);
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.06);
  box-sizing: border-box;
  margin-top: -1px;
  max-height: 200px;
  position: absolute;
  top: 100%;
  width: 100%;
  z-index: 1000;
  -webkit-overflow-scrolling: touch; }

.Select-menu {
  max-height: 198px;
  overflow-y: auto; }

.Select-option {
  box-sizing: border-box;
  background-color: #FFFFFF;
  color: #878c90;
  cursor: pointer;
  display: block;
  padding: 8px 10px; }
  .Select-option:last-child {
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px; }
  .Select-option.is-selected {
    background-color: #f5faff;
    color: #55595c; }
  .Select-option.is-focused {
    background-color: #f2f9fc;
    color: #55595c; }
  .Select-option.is-disabled {
    color: #f1f2f2;
    cursor: default; }

.Select-noresults {
  box-sizing: border-box;
  color: #bcbfc1;
  cursor: default;
  display: block;
  padding: 8px 10px; }

.Select--multi .Select-input {
  vertical-align: middle;
  margin-left: 10px;
  padding: 0; }

.Select--multi.has-value .Select-input {
  margin-left: 5px; }

.Select--multi .Select-value {
  background-color: #f2f9fc;
  border-radius: 0;
  border: 1px solid #c9e6f2;
  color: #08c;
  display: inline-block;
  font-size: 0.9em;
  margin-left: 5px;
  margin-top: 5px;
  vertical-align: top; }

.Select--multi .Select-value-icon,
.Select--multi .Select-value-label {
  display: inline-block;
  vertical-align: middle; }

.Select--multi .Select-value-label {
  border-bottom-right-radius: 2px;
  border-top-right-radius: 2px;
  cursor: default;
  padding: 2px 5px; }

.Select--multi a.Select-value-label {
  color: #08c;
  cursor: pointer;
  text-decoration: none; }
  .Select--multi a.Select-value-label:hover {
    text-decoration: underline; }

.Select--multi .Select-value-icon {
  cursor: pointer;
  border-bottom-left-radius: 2px;
  border-top-left-radius: 2px;
  border-right: 1px solid #c9e6f2;
  padding: 1px 5px 3px; }
  .Select--multi .Select-value-icon:hover, .Select--multi .Select-value-icon:focus {
    background-color: #ddeff7;
    color: #0077b3; }
  .Select--multi .Select-value-icon:active {
    background-color: #c9e6f2; }

.Select--multi.is-disabled .Select-value {
  background-color: #fcfcfc;
  border: 1px solid #e3e3e3;
  color: #333; }

.Select--multi.is-disabled .Select-value-icon {
  cursor: not-allowed;
  border-right: 1px solid #e3e3e3; }
  .Select--multi.is-disabled .Select-value-icon:hover, .Select--multi.is-disabled .Select-value-icon:focus, .Select--multi.is-disabled .Select-value-icon:active {
    background-color: #fcfcfc; }

@keyframes Select-animation-spin {
  to {
    transform: rotate(1turn); } }

@-webkit-keyframes Select-animation-spin {
  to {
    -webkit-transform: rotate(1turn); } }

body {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased; }

.font-xs {
  font-size: .75rem !important; }

.font-sm {
  font-size: .85rem !important; }

.font-lg {
  font-size: 1rem !important; }

.font-xl {
  font-size: 1.25rem !important; }

.font-2xl {
  font-size: 1.5rem !important; }

.font-3xl {
  font-size: 1.75rem !important; }

.font-4xl {
  font-size: 2rem !important; }

.font-5xl {
  font-size: 2.5rem !important; }

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both; }

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite; }

.animated.hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s; }

@-webkit-keyframes fadeIn {
  from {
    opacity: 0; }
  to {
    opacity: 1; } }

@keyframes fadeIn {
  from {
    opacity: 0; }
  to {
    opacity: 1; } }

.fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn; }

.row.row-equal {
  padding-right: 7.5px;
  padding-left: 7.5px;
  margin-right: -15px;
  margin-left: -15px; }
  .row.row-equal [class*="col-"] {
    padding-right: 7.5px;
    padding-left: 7.5px; }

.main .container-fluid {
  padding: 0 30px;
  background-color: rgb(11,11,11); }

@media all and (-ms-high-contrast: none) {
  html {
    display: flex;
    flex-direction: column; } }

.app,
app-dashboard,
app-root {
  display: flex;
  flex-direction: column;
  min-height: 100vh; }

.app-header {
  flex: 0 0 55px; }

.app-footer {
  flex: 0 0 50px; }

.app-body {
  display: flex;
  flex-grow: 1;
  flex-direction: row;
  overflow-x: hidden; }
  .app-body .main {
    flex: 1; }
  .app-body .sidebar {
    flex: 0 0 200px;
    order: -1; }
  .app-body .aside-menu {
    flex: 0 0 250px; }

.header-fixed .app-header {
  position: fixed;
  z-index: 1000;
  width: 100%; }

.header-fixed .app-body {
  margin-top: 55px; }

.sidebar-hidden .sidebar {
  margin-left: -200px; }

.sidebar-fixed .sidebar {
  position: fixed;
  height: 100%; }
  .sidebar-fixed .sidebar .sidebar-nav {
    height: calc(100vh - 55px); }

.sidebar-fixed .main, .sidebar-fixed .app-footer {
  margin-left: 200px; }

.sidebar-fixed.sidebar-hidden .main, .sidebar-fixed.sidebar-hidden .app-footer {
  margin-left: 0; }

.sidebar-off-canvas .sidebar {
  position: fixed;
  z-index: 999;
  height: 100%; }
  .sidebar-off-canvas .sidebar .sidebar-nav {
    height: calc(100vh - 55px); }

.sidebar-compact .sidebar {
  flex: 0 0 50px; }

.sidebar-compact.sidebar-hidden .sidebar {
  margin-left: -50px; }

.sidebar-compact.sidebar-fixed .main, .sidebar-compact.sidebar-fixed .app-footer {
  margin-left: 50px; }

.sidebar-compact.sidebar-fixed.sidebar-hidden .main, .sidebar-compact.sidebar-fixed.sidebar-hidden .app-footer {
  margin-left: 0; }

.aside-menu-hidden .aside-menu {
  margin-right: -250px; }

.aside-menu-fixed .aside-menu {
  position: fixed;
  right: 0;
  height: 100%; }
  .aside-menu-fixed .aside-menu .tab-content {
    height: calc(100vh - 2.375rem - 55px); }

.aside-menu-fixed .main, .aside-menu-fixed .app-footer {
  margin-right: 250px; }

.aside-menu-fixed.aside-menu-hidden .main, .aside-menu-fixed.aside-menu-hidden .app-footer {
  margin-right: 0; }

.aside-menu-off-canvas .aside-menu {
  position: fixed;
  right: 0;
  z-index: 999;
  height: 100%; }
  .aside-menu-off-canvas .aside-menu .tab-content {
    height: calc(100vh - 2.375rem - 55px); }

.footer-fixed .app-footer {
  position: fixed;
  bottom: 0;
  z-index: 1000;
  width: 100%; }

.footer-fixed .app-body {
  margin-bottom: 50px; }

.app-header,
.app-footer,
.sidebar,
.main,
.aside-menu {
  transition-duration: 0.25s, 0.25s;
  transition-property: margin-left, margin-right; }

@media (max-width: 991px) {
  .app-header {
    position: fixed !important;
    z-index: 1000;
    width: 100%; }
    .app-header .navbar-toggler {
      position: absolute;
      top: 0;
      left: 0;
      width: 70px;
      height: inherit; }
    .app-header .navbar-toggler {
      color: #FFFFFF; }
    .app-header .navbar-brand {
      width: 100% !important;
      margin: 0 auto !important; }
    .app-header .navbar-nav {
      position: absolute;
      top: 0;
      right: 15px;
      height: inherit; }
  .app-body {
    margin-top: 55px; }
  .sidebar {
    position: fixed;
    width: 200px;
    height: 100%;
    margin-left: -200px; }
    .sidebar .sidebar-nav,
    .sidebar .nav {
      width: 200px !important; }
  .main, .app-footer {
    margin-left: 0 !important; }
  .aside-menu {
    margin-right: -250px; }
  .sidebar-mobile-show .sidebar {
    width: 200px;
    margin-left: 0; }
    .sidebar-mobile-show .sidebar .sidebar-nav {
      height: calc(100vh - 55px); }
  .sidebar-mobile-show .main {
    margin-right: -200px !important;
    margin-left: 200px !important; } }

.sidebar {
  padding: 0;
  color: #FFFFFF;
  background: rgb(15,15,15);
  border-right: 1px solid rgb(35,35,35); }
  .sidebar .sidebar-close {
    position: absolute;
    right: 0;
    display: none;
    padding: 0 1rem;
    font-size: 24px;
    font-weight: 800;
    line-height: 55px;
    color: #FFFFFF;
    background: 0;
    border: 0;
    opacity: .8; }
    .sidebar .sidebar-close:hover {
      opacity: 1; }
  .sidebar .sidebar-nav {
    position: relative;
    overflow-x: hidden;
    overflow-y: auto;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    width: 199px; }
    .sidebar .sidebar-nav::-webkit-scrollbar {
      position: absolute;
      width: 10px;
      margin-left: -10px;
      -webkit-appearance: none; }
    .sidebar .sidebar-nav::-webkit-scrollbar-track {
      background-color: white;
      border-right: 1px solid #f2f2f2;
      border-left: 1px solid #f2f2f2; }
    .sidebar .sidebar-nav::-webkit-scrollbar-thumb {
      height: 50px;
      background-color: #e6e6e6;
      background-clip: content-box;
      border-color: transparent;
      border-style: solid;
      border-width: 1px 2px; }
  .sidebar .nav {
    width: 199px;
    flex-direction: column !important; }
    .sidebar .nav .nav-title {
      padding: 0.9rem 1rem;
      font-size: 11px;
      font-weight: 600;
    color: #FFFFFF;
    background: rgb(15,15,15) url(../ex1080_default/img/mainnavbg.png) -30px center repeat-x;
    border-top: 1px solid rgb(35,35,35);
    border-bottom: 1px solid rgb(35,35,35);
      text-transform: uppercase; }
    .sidebar .nav .divider {
      height: 10px; }
    .sidebar .nav .nav-item {
      position: relative;
      margin: 0;
      transition: background .3s ease-in-out;
      border-top: 1px solid rgb(35,35,35);
      border-bottom: 1px solid rgb(35,35,35); }
      .sidebar .nav .nav-item ul {
        max-height: 0;
        padding: 0;
        margin: 0;
        overflow-y: hidden;
        transition: max-height .3s ease-in-out; }
        .sidebar .nav .nav-item ul li {
          padding: 0;
          list-style: none; }
      .sidebar .nav .nav-item .nav-link, .sidebar .nav .nav-item .navbar .dropdown-toggle, .navbar .sidebar .nav .nav-item .dropdown-toggle {
        display: block;
        padding: 0.75rem 1rem;
        color: #FFFFFF;
        text-decoration: none;
        background: transparent; }
        .sidebar .nav .nav-item .nav-link:hover, .sidebar .nav .nav-item .navbar .dropdown-toggle:hover, .navbar .sidebar .nav .nav-item .dropdown-toggle:hover {
          color: #fff !important;
          background: rgb(35,35,35) !important; }
          .sidebar .nav .nav-item .nav-link:hover i, .sidebar .nav .nav-item .navbar .dropdown-toggle:hover i, .navbar .sidebar .nav .nav-item .dropdown-toggle:hover i {
            color: #fff !important; }
        .sidebar .nav .nav-item .nav-link.active, .sidebar .nav .nav-item .navbar .active.dropdown-toggle, .navbar .sidebar .nav .nav-item .active.dropdown-toggle {
          color: #fff !important;
          background: rgb(35,35,35); }
          .sidebar .nav .nav-item .nav-link.active i, .sidebar .nav .nav-item .navbar .active.dropdown-toggle i, .navbar .sidebar .nav .nav-item .active.dropdown-toggle i {
            color: #FFFFFF; }
        .sidebar .nav .nav-item .nav-link [class^="icon-"], .sidebar .nav .nav-item .navbar .dropdown-toggle [class^="icon-"], .navbar .sidebar .nav .nav-item .dropdown-toggle [class^="icon-"], .sidebar .nav .nav-item .nav-link [class*=" icon-"], .sidebar .nav .nav-item .navbar .dropdown-toggle [class*=" icon-"], .navbar .sidebar .nav .nav-item .dropdown-toggle [class*=" icon-"] {
          display: inline-block;
          margin-top: -4px;
          vertical-align: middle; }
        .sidebar .nav .nav-item .nav-link i, .sidebar .nav .nav-item .navbar .dropdown-toggle i, .navbar .sidebar .nav .nav-item .dropdown-toggle i {
          width: 20px;
          margin: 0 0.5rem 0 0;
          font-size: 14px;
          color: #FFFFFF;
          text-align: center; }
        .sidebar .nav .nav-item .nav-link .badge, .sidebar .nav .nav-item .navbar .dropdown-toggle .badge, .navbar .sidebar .nav .nav-item .dropdown-toggle .badge {
          float: right;
          margin-top: 2px; }
        .sidebar .nav .nav-item .nav-link.nav-dropdown-toggle::before, .sidebar .nav .nav-item .navbar .nav-dropdown-toggle.dropdown-toggle::before, .navbar .sidebar .nav .nav-item .nav-dropdown-toggle.dropdown-toggle::before {
          position: absolute;
          top: 0.96875rem;
          right: 1rem;
          display: block;
          width: 0.875rem;
          height: 0.875rem;
          padding: 0;
          font-size: 0.875rem;
          line-height: 0.65625rem;
          text-align: center;
          content: "\2039";
          transition: .3s; }
      .sidebar .nav .nav-item.nav-dropdown.open {
        background: #e9ecef; }
        .sidebar .nav .nav-item.nav-dropdown.open > ul, .sidebar .nav .nav-item.nav-dropdown.open > ol {
          max-height: 1000px; }
        .sidebar .nav .nav-item.nav-dropdown.open a.nav-link, .sidebar .nav .nav-item.nav-dropdown.open .navbar a.dropdown-toggle, .navbar .sidebar .nav .nav-item.nav-dropdown.open a.dropdown-toggle {
          color: #FFFFFF;
          border-left: 0 !important; }
        .sidebar .nav .nav-item.nav-dropdown.open > .nav-link.nav-dropdown-toggle::before, .sidebar .nav .navbar .nav-item.nav-dropdown.open > .nav-dropdown-toggle.dropdown-toggle::before, .navbar .sidebar .nav .nav-item.nav-dropdown.open > .nav-dropdown-toggle.dropdown-toggle::before {
          -webkit-transform: rotate(-90deg);
          transform: rotate(-90deg); }
        .sidebar .nav .nav-item.nav-dropdown.open .nav-dropdown.open {
          border-left: 0; }
      .sidebar .nav .nav-item.nav-dropdown.nt {
        transition: 0s !important; }
        .sidebar .nav .nav-item.nav-dropdown.nt > ul, .sidebar .nav .nav-item.nav-dropdown.nt > ol {
          transition: 0s !important; }
        .sidebar .nav .nav-item.nav-dropdown.nt a.nav-link.nav-dropdown-toggle::before, .sidebar .nav .nav-item.nav-dropdown.nt .navbar a.nav-dropdown-toggle.dropdown-toggle::before, .navbar .sidebar .nav .nav-item.nav-dropdown.nt a.nav-dropdown-toggle.dropdown-toggle::before {
          transition: 0s !important; }
      .sidebar .nav .nav-item a.nav-label {
        display: block;
        padding: 0.09375rem 1rem;
        color: #FFFFFF; }
        .sidebar .nav .nav-item a.nav-label:hover {
          color: #FFFFFF;
          text-decoration: none; }
        .sidebar .nav .nav-item a.nav-label i {
          width: 20px;
          margin: -3px 0.5rem 0 0;
          font-size: 10px;
          color: #FFFFFF;
          text-align: center;
          vertical-align: middle; }

@media (min-width: 576px) {
  body.sidebar-compact .hidden-cn {
    display: none; }
  body.sidebar-compact .sidebar {
    z-index: 999;
    width: 50px; }
    body.sidebar-compact .sidebar .sidebar-nav {
      overflow: visible; }
    body.sidebar-compact .sidebar ul.nav li.nav-title, body.sidebar-compact .sidebar ul.nav li.divider {
      display: none; }
    body.sidebar-compact .sidebar ul.nav li.nav-item {
      width: 50px;
      overflow: hidden;
      border-left: 0 !important; }
      body.sidebar-compact .sidebar ul.nav li.nav-item ul {
        background: #fff; }
      body.sidebar-compact .sidebar ul.nav li.nav-item a.nav-link, body.sidebar-compact .sidebar ul.nav li.nav-item .navbar a.dropdown-toggle, .navbar body.sidebar-compact .sidebar ul.nav li.nav-item a.dropdown-toggle {
        position: relative;
        padding: 0 15px 0 0;
        margin: 0;
        line-height: 50px;
        white-space: nowrap;
        border-left: 0 !important; }
        body.sidebar-compact .sidebar ul.nav li.nav-item a.nav-link.nav-dropdown-toggle::before, body.sidebar-compact .sidebar ul.nav li.nav-item .navbar a.nav-dropdown-toggle.dropdown-toggle::before, .navbar body.sidebar-compact .sidebar ul.nav li.nav-item a.nav-dropdown-toggle.dropdown-toggle::before {
          display: none; }
        body.sidebar-compact .sidebar ul.nav li.nav-item a.nav-link i, body.sidebar-compact .sidebar ul.nav li.nav-item .navbar a.dropdown-toggle i, .navbar body.sidebar-compact .sidebar ul.nav li.nav-item a.dropdown-toggle i {
          display: block;
          float: left;
          width: 50px;
          height: 50px;
          padding: 0;
          margin: 0 !important;
          font-size: 18px;
          line-height: 50px; }
        body.sidebar-compact .sidebar ul.nav li.nav-item a.nav-link .badge, body.sidebar-compact .sidebar ul.nav li.nav-item .navbar a.dropdown-toggle .badge, .navbar body.sidebar-compact .sidebar ul.nav li.nav-item a.dropdown-toggle .badge {
          position: absolute;
          top: 14px;
          right: 15px;
          display: none; }
        body.sidebar-compact .sidebar ul.nav li.nav-item a.nav-link:hover, body.sidebar-compact .sidebar ul.nav li.nav-item .navbar a.dropdown-toggle:hover, .navbar body.sidebar-compact .sidebar ul.nav li.nav-item a.dropdown-toggle:hover {
          width: 200px; }
          body.sidebar-compact .sidebar ul.nav li.nav-item a.nav-link:hover .badge, body.sidebar-compact .sidebar ul.nav li.nav-item .navbar a.dropdown-toggle:hover .badge, .navbar body.sidebar-compact .sidebar ul.nav li.nav-item a.dropdown-toggle:hover .badge {
            display: inline; }
      body.sidebar-compact .sidebar ul.nav li.nav-item ul {
        position: absolute;
        top: 50px;
        left: 50px; }
        body.sidebar-compact .sidebar ul.nav li.nav-item ul li {
          position: relative;
          padding: 0; }
          body.sidebar-compact .sidebar ul.nav li.nav-item ul li a.nav-link, body.sidebar-compact .sidebar ul.nav li.nav-item ul li .navbar a.dropdown-toggle, .navbar body.sidebar-compact .sidebar ul.nav li.nav-item ul li a.dropdown-toggle {
            width: 150px; }
          body.sidebar-compact .sidebar ul.nav li.nav-item ul li ul, body.sidebar-compact .sidebar ul.nav li.nav-item ul li ol {
            position: absolute;
            top: 0;
            left: 100%; }
      body.sidebar-compact .sidebar ul.nav li.nav-item.nav-dropdown.open {
        background: rgb(35,35,35); }
        body.sidebar-compact .sidebar ul.nav li.nav-item.nav-dropdown.open > a.nav-link i, body.sidebar-compact .sidebar ul.nav .navbar li.nav-item.nav-dropdown.open > a.dropdown-toggle i, .navbar body.sidebar-compact .sidebar ul.nav li.nav-item.nav-dropdown.open > a.dropdown-toggle i {
          color: #FFFFFF; }
        body.sidebar-compact .sidebar ul.nav li.nav-item.nav-dropdown.open > ul, body.sidebar-compact .sidebar ul.nav li.nav-item.nav-dropdown.open > ol {
          display: none; }
      body.sidebar-compact .sidebar ul.nav li.nav-item:hover {
        width: 250px;
        overflow: visible;
        background: rgb(35,35,35);
        transition: 0s; }
        body.sidebar-compact .sidebar ul.nav li.nav-item:hover > a.nav-link, body.sidebar-compact .sidebar ul.nav .navbar li.nav-item:hover > a.dropdown-toggle, .navbar body.sidebar-compact .sidebar ul.nav li.nav-item:hover > a.dropdown-toggle {
          width: 250px; }
        body.sidebar-compact .sidebar ul.nav li.nav-item:hover > ul, body.sidebar-compact .sidebar ul.nav li.nav-item:hover > ol {
          display: inline;
          max-height: 10000px;
          transition: 0s; }
          body.sidebar-compact .sidebar ul.nav li.nav-item:hover > ul li, body.sidebar-compact .sidebar ul.nav li.nav-item:hover > ol li {
            width: 200px; }
            body.sidebar-compact .sidebar ul.nav li.nav-item:hover > ul li a.nav-link, body.sidebar-compact .sidebar ul.nav li.nav-item:hover > ul li .navbar a.dropdown-toggle, .navbar body.sidebar-compact .sidebar ul.nav li.nav-item:hover > ul li a.dropdown-toggle, body.sidebar-compact .sidebar ul.nav li.nav-item:hover > ol li a.nav-link, body.sidebar-compact .sidebar ul.nav li.nav-item:hover > ol li .navbar a.dropdown-toggle, .navbar body.sidebar-compact .sidebar ul.nav li.nav-item:hover > ol li a.dropdown-toggle {
              width: 200px; }
        body.sidebar-compact .sidebar ul.nav li.nav-item:hover.nav-dropdown.open > ul, body.sidebar-compact .sidebar ul.nav li.nav-item:hover.nav-dropdown.open > ol {
          display: inline; } }

nav.top-nav {
  position: absolute;
  top: 55px;
  left: 0;
  z-index: 999;
  display: inline !important;
  width: 100%;
  height: 40px;
  background: #fff;
  border-bottom: 1px solid #d1d4d7; }
  nav.top-nav ul.nav {
    white-space: nowrap; }
    nav.top-nav ul.nav li.nav-item {
      position: relative;
      display: inline-block;
      margin: 0; }
      nav.top-nav ul.nav li.nav-item ul {
        display: none;
        padding: 0;
        margin: 0;
        white-space: normal;
        background: #fff;
        border: 1px solid rgb(35,35,35); }
        nav.top-nav ul.nav li.nav-item ul li {
          padding: 0;
          list-style: none; }
      nav.top-nav ul.nav li.nav-item a.nav-link, nav.top-nav ul.nav li.nav-item .navbar a.dropdown-toggle, .navbar nav.top-nav ul.nav li.nav-item a.dropdown-toggle {
        display: block;
        padding: 0 15px;
        font-size: 12px;
        font-weight: 400;
        line-height: 40px;
        color: #FFFFFF;
        text-decoration: none;
        text-transform: uppercase; }
        nav.top-nav ul.nav li.nav-item a.nav-link i, nav.top-nav ul.nav li.nav-item .navbar a.dropdown-toggle i, .navbar nav.top-nav ul.nav li.nav-item a.dropdown-toggle i {
          display: block;
          float: left;
          width: 20px;
          margin: 0 10px 0 0;
          font-size: 14px;
          line-height: 39px;
          text-align: center; }
        nav.top-nav ul.nav li.nav-item a.nav-link .tag, nav.top-nav ul.nav li.nav-item .navbar a.dropdown-toggle .tag, .navbar nav.top-nav ul.nav li.nav-item a.dropdown-toggle .tag {
          float: right;
          margin-top: 13px;
          margin-left: 10px; }
        nav.top-nav ul.nav li.nav-item a.nav-link:hover, nav.top-nav ul.nav li.nav-item .navbar a.dropdown-toggle:hover, .navbar nav.top-nav ul.nav li.nav-item a.dropdown-toggle:hover {
          color: #FFFFFF;
          background: rgb(35,35,35); }
        nav.top-nav ul.nav li.nav-item a.nav-link.active, nav.top-nav ul.nav li.nav-item .navbar a.active.dropdown-toggle, .navbar nav.top-nav ul.nav li.nav-item a.active.dropdown-toggle {
          color: #FFFFFF;
          background: rgb(35,35,35); }
      nav.top-nav ul.nav li.nav-item ul {
        position: absolute;
        top: 39px;
        left: 0; }
        nav.top-nav ul.nav li.nav-item ul li {
          position: relative;
          padding: 0; }
          nav.top-nav ul.nav li.nav-item ul li a.nav-link, nav.top-nav ul.nav li.nav-item ul li .navbar a.dropdown-toggle, .navbar nav.top-nav ul.nav li.nav-item ul li a.dropdown-toggle {
            min-width: 200px; }
          nav.top-nav ul.nav li.nav-item ul li ul {
            position: absolute;
            top: 0;
            left: 100%; }
      nav.top-nav ul.nav li.nav-item.nav-more ul {
        right: 0;
        left: auto; }
        nav.top-nav ul.nav li.nav-item.nav-more ul li ul {
          right: 100%;
          left: auto; }
      nav.top-nav ul.nav li.nav-item:hover > ul {
        display: inline; }

.aside-menu {
  z-index: 999;
  width: 250px;
	color: #FFFFFF;
    background: rgb(15,15,15);
    border-left: 1px solid rgb(35,35,35); }
  .aside-menu .nav-tabs {
    border-color: #d1d4d7; }
    .aside-menu .nav-tabs .nav-link, .aside-menu .nav-tabs .navbar .dropdown-toggle, .navbar .aside-menu .nav-tabs .dropdown-toggle {
      padding: 0.75rem 1rem;
      color: #FFFFFF;
      border-top: 0; }
      .aside-menu .nav-tabs .nav-link.active, .aside-menu .nav-tabs .navbar .active.dropdown-toggle, .navbar .aside-menu .nav-tabs .active.dropdown-toggle {
        color: #FFFFFF;
        border-right-color: 1px solid rgb(35,35,35);
        border-left-color: 1px solid rgb(35,35,35); }
    .aside-menu .nav-tabs .nav-item:first-child .nav-link, .aside-menu .nav-tabs .nav-item:first-child .navbar .dropdown-toggle, .navbar .aside-menu .nav-tabs .nav-item:first-child .dropdown-toggle {
      border-left: 0; }
  .aside-menu .tab-content {
    position: relative;
    overflow-x: hidden;
    overflow-y: auto;
    border: 0;
      border: 1px solid rgb(35,35,35);
    -ms-overflow-style: -ms-autohiding-scrollbar; }
    .aside-menu .tab-content::-webkit-scrollbar {
      width: 10px;
      margin-left: -10px;
      -webkit-appearance: none; }
    .aside-menu .tab-content::-webkit-scrollbar-track {
      background-color: white;
      border-right: 1px solid #f2f2f2;
      border-left: 1px solid #f2f2f2; }
    .aside-menu .tab-content::-webkit-scrollbar-thumb {
      height: 50px;
      background-color: #e6e6e6;
      background-clip: content-box;
      border-color: transparent;
      border-style: solid;
      border-width: 1px 2px; }
    .aside-menu .tab-content .tab-pane {
      padding: 0; }

#loading-bar,
#loading-bar-spinner {
  -webkit-pointer-events: none;
  pointer-events: none;
  -moz-transition: 350ms linear all;
  -o-transition: 350ms linear all;
  -webkit-transition: 350ms linear all;
  transition: 350ms linear all; }

#loading-bar.ng-enter,
#loading-bar.ng-leave.ng-leave-active,
#loading-bar-spinner.ng-enter,
#loading-bar-spinner.ng-leave.ng-leave-active {
  opacity: 0; }

#loading-bar.ng-enter.ng-enter-active,
#loading-bar.ng-leave,
#loading-bar-spinner.ng-enter.ng-enter-active,
#loading-bar-spinner.ng-leave {
  opacity: 1; }

#loading-bar .bar {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 20002;
  width: 100%;
  height: 2px;
  background: rgb(35,35,35);
  border-top-right-radius: 1px;
  border-bottom-right-radius: 1px;
  -moz-transition: width 350ms;
  -o-transition: width 350ms;
  -webkit-transition: width 350ms;
  transition: width 350ms; }

#loading-bar .peg {
  position: absolute;
  top: 0;
  right: 0;
  width: 70px;
  height: 2px;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  -moz-box-shadow: #29d 1px 0 6px 1px;
  -ms-box-shadow: #29d 1px 0 6px 1px;
  -webkit-box-shadow: #29d 1px 0 6px 1px;
  box-shadow: #29d 1px 0 6px 1px;
  opacity: .45; }

#loading-bar-spinner {
  position: fixed;
  top: 10px;
  left: 10px;
  z-index: 10002;
  display: block; }

#loading-bar-spinner .spinner-icon {
  width: 14px;
  height: 14px;
  border: solid 2px transparent;
  border-top-color: #29d;
  border-left-color: #29d;
  border-radius: 50%;
  -moz-animation: loading-bar-spinner 400ms linear infinite;
  -ms-animation: loading-bar-spinner 400ms linear infinite;
  -o-animation: loading-bar-spinner 400ms linear infinite;
  -webkit-animation: loading-bar-spinner 400ms linear infinite;
  animation: loading-bar-spinner 400ms linear infinite; }

@-webkit-keyframes loading-bar-spinner {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@-moz-keyframes loading-bar-spinner {
  0% {
    -moz-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -moz-transform: rotate(360deg);
    transform: rotate(360deg); } }

@-o-keyframes loading-bar-spinner {
  0% {
    -o-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -o-transform: rotate(360deg);
    transform: rotate(360deg); } }

@-ms-keyframes loading-bar-spinner {
  0% {
    -ms-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -ms-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes loading-bar-spinner {
  0% {
    transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    transform: rotate(360deg);
    transform: rotate(360deg); } }

.pace {
  -webkit-pointer-events: none;
  pointer-events: none;
  -moz-user-select: none;
  -webkit-user-select: none;
  user-select: none; }

.pace-inactive {
  display: none; }

.pace .pace-progress {
  position: fixed;
  top: 0;
  right: 100%;
  z-index: 2000;
  width: 100%;
  height: 2px;
  background: #20a8d8; }

.social-box {
  min-height: 160px;
  margin-bottom: 1.5rem;
  text-align: center;
  background: #fff;
  border: 1px solid rgb(35,35,35); }
  .social-box i {
    display: block;
    margin: -1px -1px 0;
    font-size: 40px;
    line-height: 90px;
    background: #d1d4d7; }
  .social-box .chart-wrapper {
    height: 90px;
    margin: -90px 0 0; }
    .social-box .chart-wrapper canvas {
      width: 100% !important;
      height: 90px !important; }
  .social-box ul {
    padding: 10px 0;
    list-style: none; }
    .social-box ul li {
      display: block;
      float: left;
      width: 50%; }
      .social-box ul li:first-child {
        border-right: 1px solid #d1d4d7; }
      .social-box ul li strong {
        display: block;
        font-size: 20px; }
      .social-box ul li span {
        font-size: 10px;
        font-weight: 500;
        color: #d1d4d7;
        text-transform: uppercase; }
  .social-box.facebook i {
    color: #FFFFFF;
    background: #3b5998; }
  .social-box.twitter i {
    color: #FFFFFF;
    background: #00aced; }
  .social-box.linkedin i {
    color: #FFFFFF;
    background: #4875b4; }
  .social-box.google-plus i {
    color: #FFFFFF;
    background: #bb4b39; }

.horizontal-bars {
  padding: 0;
  margin: 0;
  list-style: none; }
  .horizontal-bars li {
    position: relative;
    height: 40px;
    line-height: 40px;
    vertical-align: middle; }
    .horizontal-bars li .title {
      width: 100px;
      font-size: 12px;
      font-weight: 600;
      color: #FFFFFF;
      vertical-align: middle; }
    .horizontal-bars li .bars {
      position: absolute;
      top: 15px;
      width: 100%;
      padding-left: 100px; }
      .horizontal-bars li .bars .progress:first-child {
        margin-bottom: 2px; }
    .horizontal-bars li.legend {
      text-align: center; }
      .horizontal-bars li.legend .badge {
        display: inline-block;
        width: 8px;
        height: 8px;
        padding: 0; }
    .horizontal-bars li.divider {
      height: 40px; }
      .horizontal-bars li.divider i {
        margin: 0 !important; }
  .horizontal-bars.type-2 li {
    overflow: hidden; }
    .horizontal-bars.type-2 li i {
      display: inline-block;
      margin-right: 1rem;
      margin-left: 5px;
      font-size: 18px;
      line-height: 40px; }
    .horizontal-bars.type-2 li .title {
      display: inline-block;
      width: auto;
      margin-top: -9px;
      font-size: 0.875rem;
      font-weight: normal;
      line-height: 40px;
      color: #FFFFFF; }
    .horizontal-bars.type-2 li .value {
      float: right;
      font-weight: 600; }
    .horizontal-bars.type-2 li .bars {
      position: absolute;
      top: auto;
      bottom: 0;
      padding: 0; }

ul.icons-list {
  padding: 0;
  margin: 0;
  list-style: none; }
  ul.icons-list li {
    position: relative;
    height: 40px;
    vertical-align: middle; }
    ul.icons-list li i {
      display: block;
      float: left;
      width: 35px !important;
      height: 35px !important;
      margin: 2px;
      line-height: 35px !important;
      text-align: center; }
    ul.icons-list li .desc {
      height: 40px;
      margin-left: 50px;
      border-bottom: 1px solid #d1d4d7; }
      ul.icons-list li .desc .title {
        padding: 2px 0 0;
        margin: 0; }
      ul.icons-list li .desc small {
        display: block;
        margin-top: -4px;
        color: #FFFFFF; }
    ul.icons-list li .value {
      position: absolute;
      top: 2px;
      right: 45px;
      text-align: right; }
      ul.icons-list li .value strong {
        display: block;
        margin-top: -3px; }
    ul.icons-list li .actions {
      position: absolute;
      top: -4px;
      right: 10px;
      width: 40px;
      height: 40px;
      line-height: 40px;
      text-align: center; }
      ul.icons-list li .actions i {
        float: none;
        width: auto;
        height: auto;
        padding: 0;
        margin: 0;
        line-height: normal; }
    ul.icons-list li.divider {
      height: 40px; }
      ul.icons-list li.divider i {
        width: auto;
        height: auto;
        margin: 2px 0 0;
        font-size: 18px; }

.app-footer {
  min-height: 50px;
  padding: 0 1rem;
  line-height: 50px;
  color: #FFFFFF;
  background: rgb(15,15,15) url(../ex1080_default/img/mainnavbg.png) -30px center repeat-x;
  border-top: 1px solid rgb(35,35,35) }

.btn-transparent {
  color: #FFFFFF;
  background-color: transparent;
  border-color: transparent; }
  .btn-transparent:hover {
    color: #FFFFFF;
    background-color: transparent;
    border-color: transparent; }
  .btn-transparent:focus, .btn-transparent.focus {
    box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.5); }
  .btn-transparent.disabled, .btn-transparent:disabled {
    background-color: transparent;
    border-color: transparent; }
  .btn-transparent:active, .btn-transparent.active,
  .show > .btn-transparent.dropdown-toggle {
    color: #FFFFFF;
    background-color: transparent;
    background-image: none;
    border-color: transparent; }

.btn [class^="icon-"], .fc button [class^="icon-"], .btn [class*=" icon-"], .fc button [class*=" icon-"] {
  display: inline-block;
  margin-top: -2px;
  vertical-align: middle; }

.btn-facebook,
.btn-twitter,
.btn-linkedin,
.btn-flickr,
.btn-tumblr,
.btn-xing,
.btn-github,
.btn-html5,
.btn-openid,
.btn-stack-overflow,
.btn-youtube,
.btn-css3,
.btn-dribbble,
.btn-google-plus,
.btn-instagram,
.btn-pinterest,
.btn-vk,
.btn-yahoo,
.btn-behance,
.btn-dropbox,
.btn-reddit,
.btn-spotify,
.btn-vine,
.btn-foursquare,
.btn-vimeo {
  position: relative;
  overflow: hidden;
  color: #fff !important;
  text-align: center;
  padding: 0.5rem 1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border: 0; }
  .btn-facebook::before,
  .btn-twitter::before,
  .btn-linkedin::before,
  .btn-flickr::before,
  .btn-tumblr::before,
  .btn-xing::before,
  .btn-github::before,
  .btn-html5::before,
  .btn-openid::before,
  .btn-stack-overflow::before,
  .btn-youtube::before,
  .btn-css3::before,
  .btn-dribbble::before,
  .btn-google-plus::before,
  .btn-instagram::before,
  .btn-pinterest::before,
  .btn-vk::before,
  .btn-yahoo::before,
  .btn-behance::before,
  .btn-dropbox::before,
  .btn-reddit::before,
  .btn-spotify::before,
  .btn-vine::before,
  .btn-foursquare::before,
  .btn-vimeo::before {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    font-family: 'FontAwesome';
    font-style: normal;
    font-weight: normal;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased; }
  .btn-facebook:hover,
  .btn-twitter:hover,
  .btn-linkedin:hover,
  .btn-flickr:hover,
  .btn-tumblr:hover,
  .btn-xing:hover,
  .btn-github:hover,
  .btn-html5:hover,
  .btn-openid:hover,
  .btn-stack-overflow:hover,
  .btn-youtube:hover,
  .btn-css3:hover,
  .btn-dribbble:hover,
  .btn-google-plus:hover,
  .btn-instagram:hover,
  .btn-pinterest:hover,
  .btn-vk:hover,
  .btn-yahoo:hover,
  .btn-behance:hover,
  .btn-dropbox:hover,
  .btn-reddit:hover,
  .btn-spotify:hover,
  .btn-vine:hover,
  .btn-foursquare:hover,
  .btn-vimeo:hover {
    color: #FFFFFF; }
  .btn-facebook.icon span,
  .btn-twitter.icon span,
  .btn-linkedin.icon span,
  .btn-flickr.icon span,
  .btn-tumblr.icon span,
  .btn-xing.icon span,
  .btn-github.icon span,
  .btn-html5.icon span,
  .btn-openid.icon span,
  .btn-stack-overflow.icon span,
  .btn-youtube.icon span,
  .btn-css3.icon span,
  .btn-dribbble.icon span,
  .btn-google-plus.icon span,
  .btn-instagram.icon span,
  .btn-pinterest.icon span,
  .btn-vk.icon span,
  .btn-yahoo.icon span,
  .btn-behance.icon span,
  .btn-dropbox.icon span,
  .btn-reddit.icon span,
  .btn-spotify.icon span,
  .btn-vine.icon span,
  .btn-foursquare.icon span,
  .btn-vimeo.icon span {
    display: none; }
  .btn-facebook.text::before,
  .btn-twitter.text::before,
  .btn-linkedin.text::before,
  .btn-flickr.text::before,
  .btn-tumblr.text::before,
  .btn-xing.text::before,
  .btn-github.text::before,
  .btn-html5.text::before,
  .btn-openid.text::before,
  .btn-stack-overflow.text::before,
  .btn-youtube.text::before,
  .btn-css3.text::before,
  .btn-dribbble.text::before,
  .btn-google-plus.text::before,
  .btn-instagram.text::before,
  .btn-pinterest.text::before,
  .btn-vk.text::before,
  .btn-yahoo.text::before,
  .btn-behance.text::before,
  .btn-dropbox.text::before,
  .btn-reddit.text::before,
  .btn-spotify.text::before,
  .btn-vine.text::before,
  .btn-foursquare.text::before,
  .btn-vimeo.text::before {
    display: none; }
  .btn-facebook.text span,
  .btn-twitter.text span,
  .btn-linkedin.text span,
  .btn-flickr.text span,
  .btn-tumblr.text span,
  .btn-xing.text span,
  .btn-github.text span,
  .btn-html5.text span,
  .btn-openid.text span,
  .btn-stack-overflow.text span,
  .btn-youtube.text span,
  .btn-css3.text span,
  .btn-dribbble.text span,
  .btn-google-plus.text span,
  .btn-instagram.text span,
  .btn-pinterest.text span,
  .btn-vk.text span,
  .btn-yahoo.text span,
  .btn-behance.text span,
  .btn-dropbox.text span,
  .btn-reddit.text span,
  .btn-spotify.text span,
  .btn-vine.text span,
  .btn-foursquare.text span,
  .btn-vimeo.text span {
    margin-left: 0 !important; }
  .btn-facebook::before,
  .btn-twitter::before,
  .btn-linkedin::before,
  .btn-flickr::before,
  .btn-tumblr::before,
  .btn-xing::before,
  .btn-github::before,
  .btn-html5::before,
  .btn-openid::before,
  .btn-stack-overflow::before,
  .btn-youtube::before,
  .btn-css3::before,
  .btn-dribbble::before,
  .btn-google-plus::before,
  .btn-instagram::before,
  .btn-pinterest::before,
  .btn-vk::before,
  .btn-yahoo::before,
  .btn-behance::before,
  .btn-dropbox::before,
  .btn-reddit::before,
  .btn-spotify::before,
  .btn-vine::before,
  .btn-foursquare::before,
  .btn-vimeo::before {
    width: 2.3125rem;
    height: 2.3125rem;
    padding: 0.5rem 0;
    font-size: 0.875rem;
    line-height: 1.5; }
  .btn-facebook span,
  .btn-twitter span,
  .btn-linkedin span,
  .btn-flickr span,
  .btn-tumblr span,
  .btn-xing span,
  .btn-github span,
  .btn-html5 span,
  .btn-openid span,
  .btn-stack-overflow span,
  .btn-youtube span,
  .btn-css3 span,
  .btn-dribbble span,
  .btn-google-plus span,
  .btn-instagram span,
  .btn-pinterest span,
  .btn-vk span,
  .btn-yahoo span,
  .btn-behance span,
  .btn-dropbox span,
  .btn-reddit span,
  .btn-spotify span,
  .btn-vine span,
  .btn-foursquare span,
  .btn-vimeo span {
    margin-left: 2.3125rem; }
  .btn-facebook.icon,
  .btn-twitter.icon,
  .btn-linkedin.icon,
  .btn-flickr.icon,
  .btn-tumblr.icon,
  .btn-xing.icon,
  .btn-github.icon,
  .btn-html5.icon,
  .btn-openid.icon,
  .btn-stack-overflow.icon,
  .btn-youtube.icon,
  .btn-css3.icon,
  .btn-dribbble.icon,
  .btn-google-plus.icon,
  .btn-instagram.icon,
  .btn-pinterest.icon,
  .btn-vk.icon,
  .btn-yahoo.icon,
  .btn-behance.icon,
  .btn-dropbox.icon,
  .btn-reddit.icon,
  .btn-spotify.icon,
  .btn-vine.icon,
  .btn-foursquare.icon,
  .btn-vimeo.icon {
    width: 2.3125rem;
    height: 2.3125rem; }
  .btn-facebook.btn-lg, .btn-group-lg > .btn-facebook.btn, .fc .btn-group-lg > button.btn-facebook,
  .btn-twitter.btn-lg,
  .btn-group-lg > .btn-twitter.btn,
  .fc .btn-group-lg > button.btn-twitter,
  .btn-linkedin.btn-lg,
  .btn-group-lg > .btn-linkedin.btn,
  .fc .btn-group-lg > button.btn-linkedin,
  .btn-flickr.btn-lg,
  .btn-group-lg > .btn-flickr.btn,
  .fc .btn-group-lg > button.btn-flickr,
  .btn-tumblr.btn-lg,
  .btn-group-lg > .btn-tumblr.btn,
  .fc .btn-group-lg > button.btn-tumblr,
  .btn-xing.btn-lg,
  .btn-group-lg > .btn-xing.btn,
  .fc .btn-group-lg > button.btn-xing,
  .btn-github.btn-lg,
  .btn-group-lg > .btn-github.btn,
  .fc .btn-group-lg > button.btn-github,
  .btn-html5.btn-lg,
  .btn-group-lg > .btn-html5.btn,
  .fc .btn-group-lg > button.btn-html5,
  .btn-openid.btn-lg,
  .btn-group-lg > .btn-openid.btn,
  .fc .btn-group-lg > button.btn-openid,
  .btn-stack-overflow.btn-lg,
  .btn-group-lg > .btn-stack-overflow.btn,
  .fc .btn-group-lg > button.btn-stack-overflow,
  .btn-youtube.btn-lg,
  .btn-group-lg > .btn-youtube.btn,
  .fc .btn-group-lg > button.btn-youtube,
  .btn-css3.btn-lg,
  .btn-group-lg > .btn-css3.btn,
  .fc .btn-group-lg > button.btn-css3,
  .btn-dribbble.btn-lg,
  .btn-group-lg > .btn-dribbble.btn,
  .fc .btn-group-lg > button.btn-dribbble,
  .btn-google-plus.btn-lg,
  .btn-group-lg > .btn-google-plus.btn,
  .fc .btn-group-lg > button.btn-google-plus,
  .btn-instagram.btn-lg,
  .btn-group-lg > .btn-instagram.btn,
  .fc .btn-group-lg > button.btn-instagram,
  .btn-pinterest.btn-lg,
  .btn-group-lg > .btn-pinterest.btn,
  .fc .btn-group-lg > button.btn-pinterest,
  .btn-vk.btn-lg,
  .btn-group-lg > .btn-vk.btn,
  .fc .btn-group-lg > button.btn-vk,
  .btn-yahoo.btn-lg,
  .btn-group-lg > .btn-yahoo.btn,
  .fc .btn-group-lg > button.btn-yahoo,
  .btn-behance.btn-lg,
  .btn-group-lg > .btn-behance.btn,
  .fc .btn-group-lg > button.btn-behance,
  .btn-dropbox.btn-lg,
  .btn-group-lg > .btn-dropbox.btn,
  .fc .btn-group-lg > button.btn-dropbox,
  .btn-reddit.btn-lg,
  .btn-group-lg > .btn-reddit.btn,
  .fc .btn-group-lg > button.btn-reddit,
  .btn-spotify.btn-lg,
  .btn-group-lg > .btn-spotify.btn,
  .fc .btn-group-lg > button.btn-spotify,
  .btn-vine.btn-lg,
  .btn-group-lg > .btn-vine.btn,
  .fc .btn-group-lg > button.btn-vine,
  .btn-foursquare.btn-lg,
  .btn-group-lg > .btn-foursquare.btn,
  .fc .btn-group-lg > button.btn-foursquare,
  .btn-vimeo.btn-lg,
  .btn-group-lg > .btn-vimeo.btn,
  .fc .btn-group-lg > button.btn-vimeo {
    padding: 0.75rem 1.5rem;
    font-size: 1.25rem;
    line-height: 1.33333;
    border: 0; }
    .btn-facebook.btn-lg::before, .btn-group-lg > .btn-facebook.btn::before, .fc .btn-group-lg > button.btn-facebook::before,
    .btn-twitter.btn-lg::before,
    .btn-group-lg > .btn-twitter.btn::before,
    .fc .btn-group-lg > button.btn-twitter::before,
    .btn-linkedin.btn-lg::before,
    .btn-group-lg > .btn-linkedin.btn::before,
    .fc .btn-group-lg > button.btn-linkedin::before,
    .btn-flickr.btn-lg::before,
    .btn-group-lg > .btn-flickr.btn::before,
    .fc .btn-group-lg > button.btn-flickr::before,
    .btn-tumblr.btn-lg::before,
    .btn-group-lg > .btn-tumblr.btn::before,
    .fc .btn-group-lg > button.btn-tumblr::before,
    .btn-xing.btn-lg::before,
    .btn-group-lg > .btn-xing.btn::before,
    .fc .btn-group-lg > button.btn-xing::before,
    .btn-github.btn-lg::before,
    .btn-group-lg > .btn-github.btn::before,
    .fc .btn-group-lg > button.btn-github::before,
    .btn-html5.btn-lg::before,
    .btn-group-lg > .btn-html5.btn::before,
    .fc .btn-group-lg > button.btn-html5::before,
    .btn-openid.btn-lg::before,
    .btn-group-lg > .btn-openid.btn::before,
    .fc .btn-group-lg > button.btn-openid::before,
    .btn-stack-overflow.btn-lg::before,
    .btn-group-lg > .btn-stack-overflow.btn::before,
    .fc .btn-group-lg > button.btn-stack-overflow::before,
    .btn-youtube.btn-lg::before,
    .btn-group-lg > .btn-youtube.btn::before,
    .fc .btn-group-lg > button.btn-youtube::before,
    .btn-css3.btn-lg::before,
    .btn-group-lg > .btn-css3.btn::before,
    .fc .btn-group-lg > button.btn-css3::before,
    .btn-dribbble.btn-lg::before,
    .btn-group-lg > .btn-dribbble.btn::before,
    .fc .btn-group-lg > button.btn-dribbble::before,
    .btn-google-plus.btn-lg::before,
    .btn-group-lg > .btn-google-plus.btn::before,
    .fc .btn-group-lg > button.btn-google-plus::before,
    .btn-instagram.btn-lg::before,
    .btn-group-lg > .btn-instagram.btn::before,
    .fc .btn-group-lg > button.btn-instagram::before,
    .btn-pinterest.btn-lg::before,
    .btn-group-lg > .btn-pinterest.btn::before,
    .fc .btn-group-lg > button.btn-pinterest::before,
    .btn-vk.btn-lg::before,
    .btn-group-lg > .btn-vk.btn::before,
    .fc .btn-group-lg > button.btn-vk::before,
    .btn-yahoo.btn-lg::before,
    .btn-group-lg > .btn-yahoo.btn::before,
    .fc .btn-group-lg > button.btn-yahoo::before,
    .btn-behance.btn-lg::before,
    .btn-group-lg > .btn-behance.btn::before,
    .fc .btn-group-lg > button.btn-behance::before,
    .btn-dropbox.btn-lg::before,
    .btn-group-lg > .btn-dropbox.btn::before,
    .fc .btn-group-lg > button.btn-dropbox::before,
    .btn-reddit.btn-lg::before,
    .btn-group-lg > .btn-reddit.btn::before,
    .fc .btn-group-lg > button.btn-reddit::before,
    .btn-spotify.btn-lg::before,
    .btn-group-lg > .btn-spotify.btn::before,
    .fc .btn-group-lg > button.btn-spotify::before,
    .btn-vine.btn-lg::before,
    .btn-group-lg > .btn-vine.btn::before,
    .fc .btn-group-lg > button.btn-vine::before,
    .btn-foursquare.btn-lg::before,
    .btn-group-lg > .btn-foursquare.btn::before,
    .fc .btn-group-lg > button.btn-foursquare::before,
    .btn-vimeo.btn-lg::before,
    .btn-group-lg > .btn-vimeo.btn::before,
    .fc .btn-group-lg > button.btn-vimeo::before {
      width: 3.16667rem;
      height: 3.16667rem;
      padding: 0.75rem 0;
      font-size: 1.25rem;
      line-height: 1.33333; }
    .btn-facebook.btn-lg span, .btn-group-lg > .btn-facebook.btn span, .fc .btn-group-lg > button.btn-facebook span,
    .btn-twitter.btn-lg span, .btn-group-lg > .btn-twitter.btn span, .fc .btn-group-lg > button.btn-twitter span,
    .btn-linkedin.btn-lg span, .btn-group-lg > .btn-linkedin.btn span, .fc .btn-group-lg > button.btn-linkedin span,
    .btn-flickr.btn-lg span, .btn-group-lg > .btn-flickr.btn span, .fc .btn-group-lg > button.btn-flickr span,
    .btn-tumblr.btn-lg span, .btn-group-lg > .btn-tumblr.btn span, .fc .btn-group-lg > button.btn-tumblr span,
    .btn-xing.btn-lg span, .btn-group-lg > .btn-xing.btn span, .fc .btn-group-lg > button.btn-xing span,
    .btn-github.btn-lg span, .btn-group-lg > .btn-github.btn span, .fc .btn-group-lg > button.btn-github span,
    .btn-html5.btn-lg span, .btn-group-lg > .btn-html5.btn span, .fc .btn-group-lg > button.btn-html5 span,
    .btn-openid.btn-lg span, .btn-group-lg > .btn-openid.btn span, .fc .btn-group-lg > button.btn-openid span,
    .btn-stack-overflow.btn-lg span, .btn-group-lg > .btn-stack-overflow.btn span, .fc .btn-group-lg > button.btn-stack-overflow span,
    .btn-youtube.btn-lg span, .btn-group-lg > .btn-youtube.btn span, .fc .btn-group-lg > button.btn-youtube span,
    .btn-css3.btn-lg span, .btn-group-lg > .btn-css3.btn span, .fc .btn-group-lg > button.btn-css3 span,
    .btn-dribbble.btn-lg span, .btn-group-lg > .btn-dribbble.btn span, .fc .btn-group-lg > button.btn-dribbble span,
    .btn-google-plus.btn-lg span, .btn-group-lg > .btn-google-plus.btn span, .fc .btn-group-lg > button.btn-google-plus span,
    .btn-instagram.btn-lg span, .btn-group-lg > .btn-instagram.btn span, .fc .btn-group-lg > button.btn-instagram span,
    .btn-pinterest.btn-lg span, .btn-group-lg > .btn-pinterest.btn span, .fc .btn-group-lg > button.btn-pinterest span,
    .btn-vk.btn-lg span, .btn-group-lg > .btn-vk.btn span, .fc .btn-group-lg > button.btn-vk span,
    .btn-yahoo.btn-lg span, .btn-group-lg > .btn-yahoo.btn span, .fc .btn-group-lg > button.btn-yahoo span,
    .btn-behance.btn-lg span, .btn-group-lg > .btn-behance.btn span, .fc .btn-group-lg > button.btn-behance span,
    .btn-dropbox.btn-lg span, .btn-group-lg > .btn-dropbox.btn span, .fc .btn-group-lg > button.btn-dropbox span,
    .btn-reddit.btn-lg span, .btn-group-lg > .btn-reddit.btn span, .fc .btn-group-lg > button.btn-reddit span,
    .btn-spotify.btn-lg span, .btn-group-lg > .btn-spotify.btn span, .fc .btn-group-lg > button.btn-spotify span,
    .btn-vine.btn-lg span, .btn-group-lg > .btn-vine.btn span, .fc .btn-group-lg > button.btn-vine span,
    .btn-foursquare.btn-lg span, .btn-group-lg > .btn-foursquare.btn span, .fc .btn-group-lg > button.btn-foursquare span,
    .btn-vimeo.btn-lg span, .btn-group-lg > .btn-vimeo.btn span, .fc .btn-group-lg > button.btn-vimeo span {
      margin-left: 3.16667rem; }
    .btn-facebook.btn-lg.icon, .btn-group-lg > .btn-facebook.icon.btn, .fc .btn-group-lg > button.btn-facebook.icon,
    .btn-twitter.btn-lg.icon,
    .btn-group-lg > .btn-twitter.icon.btn,
    .fc .btn-group-lg > button.btn-twitter.icon,
    .btn-linkedin.btn-lg.icon,
    .btn-group-lg > .btn-linkedin.icon.btn,
    .fc .btn-group-lg > button.btn-linkedin.icon,
    .btn-flickr.btn-lg.icon,
    .btn-group-lg > .btn-flickr.icon.btn,
    .fc .btn-group-lg > button.btn-flickr.icon,
    .btn-tumblr.btn-lg.icon,
    .btn-group-lg > .btn-tumblr.icon.btn,
    .fc .btn-group-lg > button.btn-tumblr.icon,
    .btn-xing.btn-lg.icon,
    .btn-group-lg > .btn-xing.icon.btn,
    .fc .btn-group-lg > button.btn-xing.icon,
    .btn-github.btn-lg.icon,
    .btn-group-lg > .btn-github.icon.btn,
    .fc .btn-group-lg > button.btn-github.icon,
    .btn-html5.btn-lg.icon,
    .btn-group-lg > .btn-html5.icon.btn,
    .fc .btn-group-lg > button.btn-html5.icon,
    .btn-openid.btn-lg.icon,
    .btn-group-lg > .btn-openid.icon.btn,
    .fc .btn-group-lg > button.btn-openid.icon,
    .btn-stack-overflow.btn-lg.icon,
    .btn-group-lg > .btn-stack-overflow.icon.btn,
    .fc .btn-group-lg > button.btn-stack-overflow.icon,
    .btn-youtube.btn-lg.icon,
    .btn-group-lg > .btn-youtube.icon.btn,
    .fc .btn-group-lg > button.btn-youtube.icon,
    .btn-css3.btn-lg.icon,
    .btn-group-lg > .btn-css3.icon.btn,
    .fc .btn-group-lg > button.btn-css3.icon,
    .btn-dribbble.btn-lg.icon,
    .btn-group-lg > .btn-dribbble.icon.btn,
    .fc .btn-group-lg > button.btn-dribbble.icon,
    .btn-google-plus.btn-lg.icon,
    .btn-group-lg > .btn-google-plus.icon.btn,
    .fc .btn-group-lg > button.btn-google-plus.icon,
    .btn-instagram.btn-lg.icon,
    .btn-group-lg > .btn-instagram.icon.btn,
    .fc .btn-group-lg > button.btn-instagram.icon,
    .btn-pinterest.btn-lg.icon,
    .btn-group-lg > .btn-pinterest.icon.btn,
    .fc .btn-group-lg > button.btn-pinterest.icon,
    .btn-vk.btn-lg.icon,
    .btn-group-lg > .btn-vk.icon.btn,
    .fc .btn-group-lg > button.btn-vk.icon,
    .btn-yahoo.btn-lg.icon,
    .btn-group-lg > .btn-yahoo.icon.btn,
    .fc .btn-group-lg > button.btn-yahoo.icon,
    .btn-behance.btn-lg.icon,
    .btn-group-lg > .btn-behance.icon.btn,
    .fc .btn-group-lg > button.btn-behance.icon,
    .btn-dropbox.btn-lg.icon,
    .btn-group-lg > .btn-dropbox.icon.btn,
    .fc .btn-group-lg > button.btn-dropbox.icon,
    .btn-reddit.btn-lg.icon,
    .btn-group-lg > .btn-reddit.icon.btn,
    .fc .btn-group-lg > button.btn-reddit.icon,
    .btn-spotify.btn-lg.icon,
    .btn-group-lg > .btn-spotify.icon.btn,
    .fc .btn-group-lg > button.btn-spotify.icon,
    .btn-vine.btn-lg.icon,
    .btn-group-lg > .btn-vine.icon.btn,
    .fc .btn-group-lg > button.btn-vine.icon,
    .btn-foursquare.btn-lg.icon,
    .btn-group-lg > .btn-foursquare.icon.btn,
    .fc .btn-group-lg > button.btn-foursquare.icon,
    .btn-vimeo.btn-lg.icon,
    .btn-group-lg > .btn-vimeo.icon.btn,
    .fc .btn-group-lg > button.btn-vimeo.icon {
      width: 3.16667rem;
      height: 3.16667rem; }
  .btn-facebook.btn-sm, .btn-group-sm > .btn-facebook.btn, .fc .btn-group-sm > button.btn-facebook,
  .btn-twitter.btn-sm,
  .btn-group-sm > .btn-twitter.btn,
  .fc .btn-group-sm > button.btn-twitter,
  .btn-linkedin.btn-sm,
  .btn-group-sm > .btn-linkedin.btn,
  .fc .btn-group-sm > button.btn-linkedin,
  .btn-flickr.btn-sm,
  .btn-group-sm > .btn-flickr.btn,
  .fc .btn-group-sm > button.btn-flickr,
  .btn-tumblr.btn-sm,
  .btn-group-sm > .btn-tumblr.btn,
  .fc .btn-group-sm > button.btn-tumblr,
  .btn-xing.btn-sm,
  .btn-group-sm > .btn-xing.btn,
  .fc .btn-group-sm > button.btn-xing,
  .btn-github.btn-sm,
  .btn-group-sm > .btn-github.btn,
  .fc .btn-group-sm > button.btn-github,
  .btn-html5.btn-sm,
  .btn-group-sm > .btn-html5.btn,
  .fc .btn-group-sm > button.btn-html5,
  .btn-openid.btn-sm,
  .btn-group-sm > .btn-openid.btn,
  .fc .btn-group-sm > button.btn-openid,
  .btn-stack-overflow.btn-sm,
  .btn-group-sm > .btn-stack-overflow.btn,
  .fc .btn-group-sm > button.btn-stack-overflow,
  .btn-youtube.btn-sm,
  .btn-group-sm > .btn-youtube.btn,
  .fc .btn-group-sm > button.btn-youtube,
  .btn-css3.btn-sm,
  .btn-group-sm > .btn-css3.btn,
  .fc .btn-group-sm > button.btn-css3,
  .btn-dribbble.btn-sm,
  .btn-group-sm > .btn-dribbble.btn,
  .fc .btn-group-sm > button.btn-dribbble,
  .btn-google-plus.btn-sm,
  .btn-group-sm > .btn-google-plus.btn,
  .fc .btn-group-sm > button.btn-google-plus,
  .btn-instagram.btn-sm,
  .btn-group-sm > .btn-instagram.btn,
  .fc .btn-group-sm > button.btn-instagram,
  .btn-pinterest.btn-sm,
  .btn-group-sm > .btn-pinterest.btn,
  .fc .btn-group-sm > button.btn-pinterest,
  .btn-vk.btn-sm,
  .btn-group-sm > .btn-vk.btn,
  .fc .btn-group-sm > button.btn-vk,
  .btn-yahoo.btn-sm,
  .btn-group-sm > .btn-yahoo.btn,
  .fc .btn-group-sm > button.btn-yahoo,
  .btn-behance.btn-sm,
  .btn-group-sm > .btn-behance.btn,
  .fc .btn-group-sm > button.btn-behance,
  .btn-dropbox.btn-sm,
  .btn-group-sm > .btn-dropbox.btn,
  .fc .btn-group-sm > button.btn-dropbox,
  .btn-reddit.btn-sm,
  .btn-group-sm > .btn-reddit.btn,
  .fc .btn-group-sm > button.btn-reddit,
  .btn-spotify.btn-sm,
  .btn-group-sm > .btn-spotify.btn,
  .fc .btn-group-sm > button.btn-spotify,
  .btn-vine.btn-sm,
  .btn-group-sm > .btn-vine.btn,
  .fc .btn-group-sm > button.btn-vine,
  .btn-foursquare.btn-sm,
  .btn-group-sm > .btn-foursquare.btn,
  .fc .btn-group-sm > button.btn-foursquare,
  .btn-vimeo.btn-sm,
  .btn-group-sm > .btn-vimeo.btn,
  .fc .btn-group-sm > button.btn-vimeo {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border: 0; }
    .btn-facebook.btn-sm::before, .btn-group-sm > .btn-facebook.btn::before, .fc .btn-group-sm > button.btn-facebook::before,
    .btn-twitter.btn-sm::before,
    .btn-group-sm > .btn-twitter.btn::before,
    .fc .btn-group-sm > button.btn-twitter::before,
    .btn-linkedin.btn-sm::before,
    .btn-group-sm > .btn-linkedin.btn::before,
    .fc .btn-group-sm > button.btn-linkedin::before,
    .btn-flickr.btn-sm::before,
    .btn-group-sm > .btn-flickr.btn::before,
    .fc .btn-group-sm > button.btn-flickr::before,
    .btn-tumblr.btn-sm::before,
    .btn-group-sm > .btn-tumblr.btn::before,
    .fc .btn-group-sm > button.btn-tumblr::before,
    .btn-xing.btn-sm::before,
    .btn-group-sm > .btn-xing.btn::before,
    .fc .btn-group-sm > button.btn-xing::before,
    .btn-github.btn-sm::before,
    .btn-group-sm > .btn-github.btn::before,
    .fc .btn-group-sm > button.btn-github::before,
    .btn-html5.btn-sm::before,
    .btn-group-sm > .btn-html5.btn::before,
    .fc .btn-group-sm > button.btn-html5::before,
    .btn-openid.btn-sm::before,
    .btn-group-sm > .btn-openid.btn::before,
    .fc .btn-group-sm > button.btn-openid::before,
    .btn-stack-overflow.btn-sm::before,
    .btn-group-sm > .btn-stack-overflow.btn::before,
    .fc .btn-group-sm > button.btn-stack-overflow::before,
    .btn-youtube.btn-sm::before,
    .btn-group-sm > .btn-youtube.btn::before,
    .fc .btn-group-sm > button.btn-youtube::before,
    .btn-css3.btn-sm::before,
    .btn-group-sm > .btn-css3.btn::before,
    .fc .btn-group-sm > button.btn-css3::before,
    .btn-dribbble.btn-sm::before,
    .btn-group-sm > .btn-dribbble.btn::before,
    .fc .btn-group-sm > button.btn-dribbble::before,
    .btn-google-plus.btn-sm::before,
    .btn-group-sm > .btn-google-plus.btn::before,
    .fc .btn-group-sm > button.btn-google-plus::before,
    .btn-instagram.btn-sm::before,
    .btn-group-sm > .btn-instagram.btn::before,
    .fc .btn-group-sm > button.btn-instagram::before,
    .btn-pinterest.btn-sm::before,
    .btn-group-sm > .btn-pinterest.btn::before,
    .fc .btn-group-sm > button.btn-pinterest::before,
    .btn-vk.btn-sm::before,
    .btn-group-sm > .btn-vk.btn::before,
    .fc .btn-group-sm > button.btn-vk::before,
    .btn-yahoo.btn-sm::before,
    .btn-group-sm > .btn-yahoo.btn::before,
    .fc .btn-group-sm > button.btn-yahoo::before,
    .btn-behance.btn-sm::before,
    .btn-group-sm > .btn-behance.btn::before,
    .fc .btn-group-sm > button.btn-behance::before,
    .btn-dropbox.btn-sm::before,
    .btn-group-sm > .btn-dropbox.btn::before,
    .fc .btn-group-sm > button.btn-dropbox::before,
    .btn-reddit.btn-sm::before,
    .btn-group-sm > .btn-reddit.btn::before,
    .fc .btn-group-sm > button.btn-reddit::before,
    .btn-spotify.btn-sm::before,
    .btn-group-sm > .btn-spotify.btn::before,
    .fc .btn-group-sm > button.btn-spotify::before,
    .btn-vine.btn-sm::before,
    .btn-group-sm > .btn-vine.btn::before,
    .fc .btn-group-sm > button.btn-vine::before,
    .btn-foursquare.btn-sm::before,
    .btn-group-sm > .btn-foursquare.btn::before,
    .fc .btn-group-sm > button.btn-foursquare::before,
    .btn-vimeo.btn-sm::before,
    .btn-group-sm > .btn-vimeo.btn::before,
    .fc .btn-group-sm > button.btn-vimeo::before {
      width: 1.8125rem;
      height: 1.8125rem;
      padding: 0.25rem 0;
      font-size: 0.875rem;
      line-height: 1.5; }
    .btn-facebook.btn-sm span, .btn-group-sm > .btn-facebook.btn span, .fc .btn-group-sm > button.btn-facebook span,
    .btn-twitter.btn-sm span, .btn-group-sm > .btn-twitter.btn span, .fc .btn-group-sm > button.btn-twitter span,
    .btn-linkedin.btn-sm span, .btn-group-sm > .btn-linkedin.btn span, .fc .btn-group-sm > button.btn-linkedin span,
    .btn-flickr.btn-sm span, .btn-group-sm > .btn-flickr.btn span, .fc .btn-group-sm > button.btn-flickr span,
    .btn-tumblr.btn-sm span, .btn-group-sm > .btn-tumblr.btn span, .fc .btn-group-sm > button.btn-tumblr span,
    .btn-xing.btn-sm span, .btn-group-sm > .btn-xing.btn span, .fc .btn-group-sm > button.btn-xing span,
    .btn-github.btn-sm span, .btn-group-sm > .btn-github.btn span, .fc .btn-group-sm > button.btn-github span,
    .btn-html5.btn-sm span, .btn-group-sm > .btn-html5.btn span, .fc .btn-group-sm > button.btn-html5 span,
    .btn-openid.btn-sm span, .btn-group-sm > .btn-openid.btn span, .fc .btn-group-sm > button.btn-openid span,
    .btn-stack-overflow.btn-sm span, .btn-group-sm > .btn-stack-overflow.btn span, .fc .btn-group-sm > button.btn-stack-overflow span,
    .btn-youtube.btn-sm span, .btn-group-sm > .btn-youtube.btn span, .fc .btn-group-sm > button.btn-youtube span,
    .btn-css3.btn-sm span, .btn-group-sm > .btn-css3.btn span, .fc .btn-group-sm > button.btn-css3 span,
    .btn-dribbble.btn-sm span, .btn-group-sm > .btn-dribbble.btn span, .fc .btn-group-sm > button.btn-dribbble span,
    .btn-google-plus.btn-sm span, .btn-group-sm > .btn-google-plus.btn span, .fc .btn-group-sm > button.btn-google-plus span,
    .btn-instagram.btn-sm span, .btn-group-sm > .btn-instagram.btn span, .fc .btn-group-sm > button.btn-instagram span,
    .btn-pinterest.btn-sm span, .btn-group-sm > .btn-pinterest.btn span, .fc .btn-group-sm > button.btn-pinterest span,
    .btn-vk.btn-sm span, .btn-group-sm > .btn-vk.btn span, .fc .btn-group-sm > button.btn-vk span,
    .btn-yahoo.btn-sm span, .btn-group-sm > .btn-yahoo.btn span, .fc .btn-group-sm > button.btn-yahoo span,
    .btn-behance.btn-sm span, .btn-group-sm > .btn-behance.btn span, .fc .btn-group-sm > button.btn-behance span,
    .btn-dropbox.btn-sm span, .btn-group-sm > .btn-dropbox.btn span, .fc .btn-group-sm > button.btn-dropbox span,
    .btn-reddit.btn-sm span, .btn-group-sm > .btn-reddit.btn span, .fc .btn-group-sm > button.btn-reddit span,
    .btn-spotify.btn-sm span, .btn-group-sm > .btn-spotify.btn span, .fc .btn-group-sm > button.btn-spotify span,
    .btn-vine.btn-sm span, .btn-group-sm > .btn-vine.btn span, .fc .btn-group-sm > button.btn-vine span,
    .btn-foursquare.btn-sm span, .btn-group-sm > .btn-foursquare.btn span, .fc .btn-group-sm > button.btn-foursquare span,
    .btn-vimeo.btn-sm span, .btn-group-sm > .btn-vimeo.btn span, .fc .btn-group-sm > button.btn-vimeo span {
      margin-left: 1.8125rem; }
    .btn-facebook.btn-sm.icon, .btn-group-sm > .btn-facebook.icon.btn, .fc .btn-group-sm > button.btn-facebook.icon,
    .btn-twitter.btn-sm.icon,
    .btn-group-sm > .btn-twitter.icon.btn,
    .fc .btn-group-sm > button.btn-twitter.icon,
    .btn-linkedin.btn-sm.icon,
    .btn-group-sm > .btn-linkedin.icon.btn,
    .fc .btn-group-sm > button.btn-linkedin.icon,
    .btn-flickr.btn-sm.icon,
    .btn-group-sm > .btn-flickr.icon.btn,
    .fc .btn-group-sm > button.btn-flickr.icon,
    .btn-tumblr.btn-sm.icon,
    .btn-group-sm > .btn-tumblr.icon.btn,
    .fc .btn-group-sm > button.btn-tumblr.icon,
    .btn-xing.btn-sm.icon,
    .btn-group-sm > .btn-xing.icon.btn,
    .fc .btn-group-sm > button.btn-xing.icon,
    .btn-github.btn-sm.icon,
    .btn-group-sm > .btn-github.icon.btn,
    .fc .btn-group-sm > button.btn-github.icon,
    .btn-html5.btn-sm.icon,
    .btn-group-sm > .btn-html5.icon.btn,
    .fc .btn-group-sm > button.btn-html5.icon,
    .btn-openid.btn-sm.icon,
    .btn-group-sm > .btn-openid.icon.btn,
    .fc .btn-group-sm > button.btn-openid.icon,
    .btn-stack-overflow.btn-sm.icon,
    .btn-group-sm > .btn-stack-overflow.icon.btn,
    .fc .btn-group-sm > button.btn-stack-overflow.icon,
    .btn-youtube.btn-sm.icon,
    .btn-group-sm > .btn-youtube.icon.btn,
    .fc .btn-group-sm > button.btn-youtube.icon,
    .btn-css3.btn-sm.icon,
    .btn-group-sm > .btn-css3.icon.btn,
    .fc .btn-group-sm > button.btn-css3.icon,
    .btn-dribbble.btn-sm.icon,
    .btn-group-sm > .btn-dribbble.icon.btn,
    .fc .btn-group-sm > button.btn-dribbble.icon,
    .btn-google-plus.btn-sm.icon,
    .btn-group-sm > .btn-google-plus.icon.btn,
    .fc .btn-group-sm > button.btn-google-plus.icon,
    .btn-instagram.btn-sm.icon,
    .btn-group-sm > .btn-instagram.icon.btn,
    .fc .btn-group-sm > button.btn-instagram.icon,
    .btn-pinterest.btn-sm.icon,
    .btn-group-sm > .btn-pinterest.icon.btn,
    .fc .btn-group-sm > button.btn-pinterest.icon,
    .btn-vk.btn-sm.icon,
    .btn-group-sm > .btn-vk.icon.btn,
    .fc .btn-group-sm > button.btn-vk.icon,
    .btn-yahoo.btn-sm.icon,
    .btn-group-sm > .btn-yahoo.icon.btn,
    .fc .btn-group-sm > button.btn-yahoo.icon,
    .btn-behance.btn-sm.icon,
    .btn-group-sm > .btn-behance.icon.btn,
    .fc .btn-group-sm > button.btn-behance.icon,
    .btn-dropbox.btn-sm.icon,
    .btn-group-sm > .btn-dropbox.icon.btn,
    .fc .btn-group-sm > button.btn-dropbox.icon,
    .btn-reddit.btn-sm.icon,
    .btn-group-sm > .btn-reddit.icon.btn,
    .fc .btn-group-sm > button.btn-reddit.icon,
    .btn-spotify.btn-sm.icon,
    .btn-group-sm > .btn-spotify.icon.btn,
    .fc .btn-group-sm > button.btn-spotify.icon,
    .btn-vine.btn-sm.icon,
    .btn-group-sm > .btn-vine.icon.btn,
    .fc .btn-group-sm > button.btn-vine.icon,
    .btn-foursquare.btn-sm.icon,
    .btn-group-sm > .btn-foursquare.icon.btn,
    .fc .btn-group-sm > button.btn-foursquare.icon,
    .btn-vimeo.btn-sm.icon,
    .btn-group-sm > .btn-vimeo.icon.btn,
    .fc .btn-group-sm > button.btn-vimeo.icon {
      width: 1.8125rem;
      height: 1.8125rem; }

.btn-facebook {
  background: #3b5998; }
  .btn-facebook::before {
    content: "\f09a";
    background: #344e86; }
  .btn-facebook:hover {
    background: #344e86; }
    .btn-facebook:hover::before {
      background: #2d4373; }

.btn-twitter {
  background: #00aced; }
  .btn-twitter::before {
    content: "\f099";
    background: #0099d4; }
  .btn-twitter:hover {
    background: #0099d4; }
    .btn-twitter:hover::before {
      background: #0087ba; }

.btn-linkedin {
  background: #4875b4; }
  .btn-linkedin::before {
    content: "\f0e1";
    background: #4169a2; }
  .btn-linkedin:hover {
    background: #4169a2; }
    .btn-linkedin:hover::before {
      background: #395d90; }

.btn-flickr {
  background: #ff0084; }
  .btn-flickr::before {
    content: "\f16e";
    background: #e60077; }
  .btn-flickr:hover {
    background: #e60077; }
    .btn-flickr:hover::before {
      background: #cc006a; }

.btn-tumblr {
  background: #32506d; }
  .btn-tumblr::before {
    content: "\f173";
    background: #2a435c; }
  .btn-tumblr:hover {
    background: #2a435c; }
    .btn-tumblr:hover::before {
      background: #22364a; }

.btn-xing {
  background: #026466; }
  .btn-xing::before {
    content: "\f168";
    background: #024b4d; }
  .btn-xing:hover {
    background: #024b4d; }
    .btn-xing:hover::before {
      background: #013334; }

.btn-github {
  background: #4183c4; }
  .btn-github::before {
    content: "\f09b";
    background: #3876b4; }
  .btn-github:hover {
    background: #3876b4; }
    .btn-github:hover::before {
      background: #3269a0; }

.btn-html5 {
  background: #e34f26; }
  .btn-html5::before {
    content: "\f13b";
    background: #d4431b; }
  .btn-html5:hover {
    background: #d4431b; }
    .btn-html5:hover::before {
      background: #be3c18; }

.btn-openid {
  background: #f78c40; }
  .btn-openid::before {
    content: "\f19b";
    background: #f67d28; }
  .btn-openid:hover {
    background: #f67d28; }
    .btn-openid:hover::before {
      background: #f56f0f; }

.btn-stack-overflow {
  background: #fe7a15; }
  .btn-stack-overflow::before {
    content: "\f16c";
    background: #f86c01; }
  .btn-stack-overflow:hover {
    background: #f86c01; }
    .btn-stack-overflow:hover::before {
      background: #df6101; }

.btn-css3 {
  background: #0170ba; }
  .btn-css3::before {
    content: "\f13c";
    background: #0161a1; }
  .btn-css3:hover {
    background: #0161a1; }
    .btn-css3:hover::before {
      background: #015187; }

.btn-youtube {
  background: #b00; }
  .btn-youtube::before {
    content: "\f167";
    background: #a20000; }
  .btn-youtube:hover {
    background: #a20000; }
    .btn-youtube:hover::before {
      background: #880000; }

.btn-dribbble {
  background: #ea4c89; }
  .btn-dribbble::before {
    content: "\f17d";
    background: #e7357a; }
  .btn-dribbble:hover {
    background: #e7357a; }
    .btn-dribbble:hover::before {
      background: #e51e6b; }

.btn-google-plus {
  background: #bb4b39; }
  .btn-google-plus::before {
    content: "\f0d5";
    background: #a74333; }
  .btn-google-plus:hover {
    background: #a74333; }
    .btn-google-plus:hover::before {
      background: #943b2d; }

.btn-instagram {
  background: #517fa4; }
  .btn-instagram::before {
    content: "\f16d";
    background: #497293; }
  .btn-instagram:hover {
    background: #497293; }
    .btn-instagram:hover::before {
      background: #406582; }

.btn-pinterest {
  background: #cb2027; }
  .btn-pinterest::before {
    content: "\f0d2";
    background: #b51d23; }
  .btn-pinterest:hover {
    background: #b51d23; }
    .btn-pinterest:hover::before {
      background: #9f191f; }

.btn-vk {
  background: #45668e; }
  .btn-vk::before {
    content: "\f189";
    background: #3d5a7d; }
  .btn-vk:hover {
    background: #3d5a7d; }
    .btn-vk:hover::before {
      background: #344d6c; }

.btn-yahoo {
  background: #400191; }
  .btn-yahoo::before {
    content: "\f19e";
    background: #350178; }
  .btn-yahoo:hover {
    background: #350178; }
    .btn-yahoo:hover::before {
      background: #2a015e; }

.btn-behance {
  background: #1769ff; }
  .btn-behance::before {
    content: "\f1b4";
    background: #0059fd; }
  .btn-behance:hover {
    background: #0059fd; }
    .btn-behance:hover::before {
      background: #0050e3; }

.btn-dropbox {
  background: #007ee5; }
  .btn-dropbox::before {
    content: "\f16b";
    background: #0070cc; }
  .btn-dropbox:hover {
    background: #0070cc; }
    .btn-dropbox:hover::before {
      background: #0062b2; }

.btn-reddit {
  background: #ff4500; }
  .btn-reddit::before {
    content: "\f1a1";
    background: #e63e00; }
  .btn-reddit:hover {
    background: #e63e00; }
    .btn-reddit:hover::before {
      background: #cc3700; }

.btn-spotify {
  background: #7ab800; }
  .btn-spotify::before {
    content: "\f1bc";
    background: #699f00; }
  .btn-spotify:hover {
    background: #699f00; }
    .btn-spotify:hover::before {
      background: #588500; }

.btn-vine {
  background: #00bf8f; }
  .btn-vine::before {
    content: "\f1ca";
    background: #00a67c; }
  .btn-vine:hover {
    background: #00a67c; }
    .btn-vine:hover::before {
      background: #008c69; }

.btn-foursquare {
  background: #1073af; }
  .btn-foursquare::before {
    content: "\f180";
    background: #0e6498; }
  .btn-foursquare:hover {
    background: #0e6498; }
    .btn-foursquare:hover::before {
      background: #0c5480; }

.btn-vimeo {
  background: #aad450; }
  .btn-vimeo::before {
    content: "\f194";
    background: #a0cf3c; }
  .btn-vimeo:hover {
    background: #a0cf3c; }
    .btn-vimeo:hover::before {
      background: #93c130; }

hr.transparent {
  border-top: 1px solid transparent; }

.breadcrumb-menu {
  position: absolute;
  top: 0;
  right: 1rem; }
  .breadcrumb-menu::before {
    display: none; }
  .breadcrumb-menu .btn, .breadcrumb-menu .fc button, .fc .breadcrumb-menu button {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem; }
  .breadcrumb-menu .btn.btn-secondary, .breadcrumb-menu .fc button, .fc .breadcrumb-menu button {
    color: #FFFFFF;
    border: 0; }
    .breadcrumb-menu .btn.btn-secondary:hover, .breadcrumb-menu .fc button:hover, .fc .breadcrumb-menu button:hover, .breadcrumb-menu .btn.btn-secondary.active, .breadcrumb-menu .fc button.active, .fc .breadcrumb-menu button.active {
      color: #FFFFFF;
      background: transparent; }
  .breadcrumb-menu .open .btn.btn-secondary, .breadcrumb-menu .open .fc button, .fc .breadcrumb-menu .open button {
    color: #FFFFFF;
    background: transparent; }
  .breadcrumb-menu .dropdown-menu {
    min-width: 180px;
    line-height: 1.5; }

.img-avatar {
  border-radius: 50em; }

.avatar {
  position: relative;
  display: inline-block;
  width: 36px; }
  .avatar .img-avatar {
    width: 36px;
    height: 36px; }
  .avatar .avatar-status {
    position: absolute;
    right: 0;
    bottom: 0;
    display: block;
    width: 10px;
    height: 10px;
    border: 1px solid #fff;
    border-radius: 50em; }

.avatar.avatar-xs {
  position: relative;
  display: inline-block;
  width: 20px; }
  .avatar.avatar-xs .img-avatar {
    width: 20px;
    height: 20px; }
  .avatar.avatar-xs .avatar-status {
    position: absolute;
    right: 0;
    bottom: 0;
    display: block;
    width: 8px;
    height: 8px;
    border: 1px solid #fff;
    border-radius: 50em; }

.avatar.avatar-sm {
  position: relative;
  display: inline-block;
  width: 24px; }
  .avatar.avatar-sm .img-avatar {
    width: 24px;
    height: 24px; }
  .avatar.avatar-sm .avatar-status {
    position: absolute;
    right: 0;
    bottom: 0;
    display: block;
    width: 8px;
    height: 8px;
    border: 1px solid #fff;
    border-radius: 50em; }

.avatar.avatar-lg {
  position: relative;
  display: inline-block;
  width: 72px; }
  .avatar.avatar-lg .img-avatar {
    width: 72px;
    height: 72px; }
  .avatar.avatar-lg .avatar-status {
    position: absolute;
    right: 0;
    bottom: 0;
    display: block;
    width: 12px;
    height: 12px;
    border: 1px solid #fff;
    border-radius: 50em; }

.avatars-stack .avatar.avatar-xs {
  margin-right: -10px; }

.avatars-stack .avatar {
  margin-right: -15px;
  transition-duration: 0.25s, 0.25s;
  transition-property: margin-left, margin-right; }
  .avatars-stack .avatar:hover {
    margin-right: 0 !important; }

.callout {
  position: relative;
  padding: 0 1rem;
  margin: 1rem 0;
  border: 0 solid #d1d4d7;
  border-left-width: .25rem; }
  .callout .chart-wrapper {
    position: absolute;
    top: 18px;
    left: 45%;
    float: right;
    width: 100px; }

.callout-bordered {
  border: 1px solid rgb(35,35,35);
  border-left-width: .25rem; }

.callout code {
  border-radius: .25rem; }

.callout h4 {
  margin-top: 0;
  margin-bottom: .25rem; }

.callout p:last-child {
  margin-bottom: 0; }

.callout + .callout {
  margin-top: -0.25rem; }

.callout-default {
  border-left-color: #FFFFFF; }
  .callout-default h4 {
    color: #FFFFFF; }

.callout-primary {
  border-left-color: #FFFFFF; }
  .callout-primary h4 {
    color: #FFFFFF; }

.callout-info {
  border-left-color: #67c2ef; }
  .callout-info h4 {
    color: #67c2ef; }

.callout-warning {
  border-left-color: #fabb3d; }
  .callout-warning h4 {
    color: #fabb3d; }

.callout-danger {
  border-left-color: #ff5454; }
  .callout-danger h4 {
    color: #ff5454; }

.callout-success {
  border-left-color: #79c447; }
  .callout-success h4 {
    color: #79c447; }

.switch.switch-default {
  position: relative;
  display: inline-block;
  vertical-align: top;
  width: 40px;
  height: 24px;
  background-color: transparent;
  cursor: pointer; }
  .switch.switch-default .switch-input {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0; }
  .switch.switch-default .switch-label {
    position: relative;
    display: block;
    height: inherit;
    font-size: 10px;
    font-weight: 600;
    text-transform: uppercase;
    background-color: #FFFFFF;
    border: 1px solid rgb(35,35,35);
    border-radius: 2px;
    -moz-transition: .15s ease-out;
    -o-transition: .15s ease-out;
    -webkit-transition: .15s ease-out;
    transition: .15s ease-out;
    -moz-transition-property: opacity background;
    -o-transition-property: opacity background;
    -webkit-transition-property: opacity background;
    transition-property: opacity background; }
  .switch.switch-default .switch-input:checked ~ .switch-label::before {
    opacity: 0; }
  .switch.switch-default .switch-input:checked ~ .switch-label::after {
    opacity: 1; }
  .switch.switch-default .switch-handle {
    position: absolute;
    top: 2px;
    left: 2px;
    width: 20px;
    height: 20px;
    background: #fff;
    border: 1px solid rgb(35,35,35);
    border-radius: 1px;
    -moz-transition: left .15s ease-out;
    -o-transition: left .15s ease-out;
    -webkit-transition: left .15s ease-out;
    transition: left .15s ease-out; }
  .switch.switch-default .switch-input:checked ~ .switch-handle {
    left: 18px; }
  .switch.switch-default.switch-lg {
    width: 48px;
    height: 28px; }
    .switch.switch-default.switch-lg .switch-label {
      font-size: 12px; }
    .switch.switch-default.switch-lg .switch-handle {
      width: 24px;
      height: 24px; }
    .switch.switch-default.switch-lg .switch-input:checked ~ .switch-handle {
      left: 22px; }
  .switch.switch-default.switch-sm {
    width: 32px;
    height: 20px; }
    .switch.switch-default.switch-sm .switch-label {
      font-size: 8px; }
    .switch.switch-default.switch-sm .switch-handle {
      width: 16px;
      height: 16px; }
    .switch.switch-default.switch-sm .switch-input:checked ~ .switch-handle {
      left: 14px; }
  .switch.switch-default.switch-xs {
    width: 24px;
    height: 16px; }
    .switch.switch-default.switch-xs .switch-label {
      font-size: 7px; }
    .switch.switch-default.switch-xs .switch-handle {
      width: 12px;
      height: 12px; }
    .switch.switch-default.switch-xs .switch-input:checked ~ .switch-handle {
      left: 10px; }

.switch.switch-text {
  position: relative;
  display: inline-block;
  vertical-align: top;
  width: 48px;
  height: 24px;
  background-color: transparent;
  cursor: pointer; }
  .switch.switch-text .switch-input {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0; }
  .switch.switch-text .switch-label {
    position: relative;
    display: block;
    height: inherit;
    font-size: 10px;
    font-weight: 600;
    text-transform: uppercase;
    background-color: #FFFFFF;
    border: 1px solid rgb(35,35,35);
    border-radius: 2px;
    -moz-transition: .15s ease-out;
    -o-transition: .15s ease-out;
    -webkit-transition: .15s ease-out;
    transition: .15s ease-out;
    -moz-transition-property: opacity background;
    -o-transition-property: opacity background;
    -webkit-transition-property: opacity background;
    transition-property: opacity background; }
  .switch.switch-text .switch-label::before,
  .switch.switch-text .switch-label::after {
    position: absolute;
    top: 50%;
    width: 50%;
    margin-top: -.5em;
    line-height: 1;
    text-align: center;
    -moz-transition: inherit;
    -o-transition: inherit;
    -webkit-transition: inherit;
    transition: inherit; }
  .switch.switch-text .switch-label::before {
    right: 1px;
    color: #d1d4d7;
    content: attr(data-off); }
  .switch.switch-text .switch-label::after {
    left: 1px;
    color: #FFFFFF;
    content: attr(data-on);
    opacity: 0; }
  .switch.switch-text .switch-input:checked ~ .switch-label::before {
    opacity: 0; }
  .switch.switch-text .switch-input:checked ~ .switch-label::after {
    opacity: 1; }
  .switch.switch-text .switch-handle {
    position: absolute;
    top: 2px;
    left: 2px;
    width: 20px;
    height: 20px;
    background: #fff;
    border: 1px solid rgb(35,35,35);
    border-radius: 1px;
    -moz-transition: left .15s ease-out;
    -o-transition: left .15s ease-out;
    -webkit-transition: left .15s ease-out;
    transition: left .15s ease-out; }
  .switch.switch-text .switch-input:checked ~ .switch-handle {
    left: 26px; }
  .switch.switch-text.switch-lg {
    width: 56px;
    height: 28px; }
    .switch.switch-text.switch-lg .switch-label {
      font-size: 12px; }
    .switch.switch-text.switch-lg .switch-handle {
      width: 24px;
      height: 24px; }
    .switch.switch-text.switch-lg .switch-input:checked ~ .switch-handle {
      left: 30px; }
  .switch.switch-text.switch-sm {
    width: 40px;
    height: 20px; }
    .switch.switch-text.switch-sm .switch-label {
      font-size: 8px; }
    .switch.switch-text.switch-sm .switch-handle {
      width: 16px;
      height: 16px; }
    .switch.switch-text.switch-sm .switch-input:checked ~ .switch-handle {
      left: 22px; }
  .switch.switch-text.switch-xs {
    width: 32px;
    height: 16px; }
    .switch.switch-text.switch-xs .switch-label {
      font-size: 7px; }
    .switch.switch-text.switch-xs .switch-handle {
      width: 12px;
      height: 12px; }
    .switch.switch-text.switch-xs .switch-input:checked ~ .switch-handle {
      left: 18px; }

.switch.switch-icon {
  position: relative;
  display: inline-block;
  vertical-align: top;
  width: 48px;
  height: 24px;
  background-color: transparent;
  cursor: pointer; }
  .switch.switch-icon .switch-input {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0; }
  .switch.switch-icon .switch-label {
    position: relative;
    display: block;
    height: inherit;
    font-family: FontAwesome;
    font-size: 10px;
    font-weight: 600;
    text-transform: uppercase;
    background-color: #FFFFFF;
    border: 1px solid rgb(35,35,35);
    border-radius: 2px;
    -moz-transition: .15s ease-out;
    -o-transition: .15s ease-out;
    -webkit-transition: .15s ease-out;
    transition: .15s ease-out;
    -moz-transition-property: opacity background;
    -o-transition-property: opacity background;
    -webkit-transition-property: opacity background;
    transition-property: opacity background; }
  .switch.switch-icon .switch-label::before,
  .switch.switch-icon .switch-label::after {
    position: absolute;
    top: 50%;
    width: 50%;
    margin-top: -.5em;
    line-height: 1;
    text-align: center;
    -moz-transition: inherit;
    -o-transition: inherit;
    -webkit-transition: inherit;
    transition: inherit; }
  .switch.switch-icon .switch-label::before {
    right: 1px;
    color: #d1d4d7;
    content: attr(data-off); }
  .switch.switch-icon .switch-label::after {
    left: 1px;
    color: #FFFFFF;
    content: attr(data-on);
    opacity: 0; }
  .switch.switch-icon .switch-input:checked ~ .switch-label::before {
    opacity: 0; }
  .switch.switch-icon .switch-input:checked ~ .switch-label::after {
    opacity: 1; }
  .switch.switch-icon .switch-handle {
    position: absolute;
    top: 2px;
    left: 2px;
    width: 20px;
    height: 20px;
    background: #fff;
    border: 1px solid rgb(35,35,35);
    border-radius: 1px;
    -moz-transition: left .15s ease-out;
    -o-transition: left .15s ease-out;
    -webkit-transition: left .15s ease-out;
    transition: left .15s ease-out; }
  .switch.switch-icon .switch-input:checked ~ .switch-handle {
    left: 26px; }
  .switch.switch-icon.switch-lg {
    width: 56px;
    height: 28px; }
    .switch.switch-icon.switch-lg .switch-label {
      font-size: 12px; }
    .switch.switch-icon.switch-lg .switch-handle {
      width: 24px;
      height: 24px; }
    .switch.switch-icon.switch-lg .switch-input:checked ~ .switch-handle {
      left: 30px; }
  .switch.switch-icon.switch-sm {
    width: 40px;
    height: 20px; }
    .switch.switch-icon.switch-sm .switch-label {
      font-size: 8px; }
    .switch.switch-icon.switch-sm .switch-handle {
      width: 16px;
      height: 16px; }
    .switch.switch-icon.switch-sm .switch-input:checked ~ .switch-handle {
      left: 22px; }
  .switch.switch-icon.switch-xs {
    width: 32px;
    height: 16px; }
    .switch.switch-icon.switch-xs .switch-label {
      font-size: 7px; }
    .switch.switch-icon.switch-xs .switch-handle {
      width: 12px;
      height: 12px; }
    .switch.switch-icon.switch-xs .switch-input:checked ~ .switch-handle {
      left: 18px; }

.switch.switch-3d {
  position: relative;
  display: inline-block;
  vertical-align: top;
  width: 40px;
  height: 24px;
  background-color: transparent;
  cursor: pointer; }
  .switch.switch-3d .switch-input {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0; }
  .switch.switch-3d .switch-label {
    position: relative;
    display: block;
    height: inherit;
    font-size: 10px;
    font-weight: 600;
    text-transform: uppercase;
    background-color: rgb(11,11,11);
    border: 1px solid rgb(35,35,35);
    border-radius: 2px;
    -moz-transition: .15s ease-out;
    -o-transition: .15s ease-out;
    -webkit-transition: .15s ease-out;
    transition: .15s ease-out;
    -moz-transition-property: opacity background;
    -o-transition-property: opacity background;
    -webkit-transition-property: opacity background;
    transition-property: opacity background; }
  .switch.switch-3d .switch-input:checked ~ .switch-label::before {
    opacity: 0; }
  .switch.switch-3d .switch-input:checked ~ .switch-label::after {
    opacity: 1; }
  .switch.switch-3d .switch-handle {
    position: absolute;
    top: 0;
    left: 0;
    width: 24px;
    height: 24px;
    background: #fff;
    border: 1px solid rgb(35,35,35);
    border-radius: 1px;
    -moz-transition: left .15s ease-out;
    -o-transition: left .15s ease-out;
    -webkit-transition: left .15s ease-out;
    transition: left .15s ease-out;
    border: 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); }
  .switch.switch-3d .switch-input:checked ~ .switch-handle {
    left: 16px; }
  .switch.switch-3d.switch-lg {
    width: 48px;
    height: 28px; }
    .switch.switch-3d.switch-lg .switch-label {
      font-size: 12px; }
    .switch.switch-3d.switch-lg .switch-handle {
      width: 28px;
      height: 28px; }
    .switch.switch-3d.switch-lg .switch-input:checked ~ .switch-handle {
      left: 20px; }
  .switch.switch-3d.switch-sm {
    width: 32px;
    height: 20px; }
    .switch.switch-3d.switch-sm .switch-label {
      font-size: 8px; }
    .switch.switch-3d.switch-sm .switch-handle {
      width: 20px;
      height: 20px; }
    .switch.switch-3d.switch-sm .switch-input:checked ~ .switch-handle {
      left: 12px; }
  .switch.switch-3d.switch-xs {
    width: 24px;
    height: 16px; }
    .switch.switch-3d.switch-xs .switch-label {
      font-size: 7px; }
    .switch.switch-3d.switch-xs .switch-handle {
      width: 16px;
      height: 16px; }
    .switch.switch-3d.switch-xs .switch-input:checked ~ .switch-handle {
      left: 8px; }

.switch-pill .switch-label, .switch.switch-3d .switch-label,
.switch-pill .switch-handle, .switch.switch-3d .switch-handle {
  border-radius: 50em !important; }

.switch-pill .switch-label::before, .switch.switch-3d .switch-label::before {
  right: 2px !important; }

.switch-pill .switch-label::after, .switch.switch-3d .switch-label::after {
  left: 2px !important; }

.switch-primary > .switch-input:checked ~ .switch-label {
  background: rgb(35,35,35) !important;
  border-color: #1985ac; }

.switch-primary > .switch-input:checked ~ .switch-handle {
  border-color: #1985ac; }

.switch-primary-outline > .switch-input:checked ~ .switch-label {
  background: #fff !important;
  border-color: #FFFFFF; }
  .switch-primary-outline > .switch-input:checked ~ .switch-label::after {
    color: #FFFFFF; }

.switch-primary-outline > .switch-input:checked ~ .switch-handle {
  border-color: #FFFFFF; }

.switch-primary-outline-alt > .switch-input:checked ~ .switch-label {
  background: #fff !important;
  border-color: #FFFFFF; }
  .switch-primary-outline-alt > .switch-input:checked ~ .switch-label::after {
    color: #FFFFFF; }

.switch-primary-outline-alt > .switch-input:checked ~ .switch-handle {
  background: rgb(35,35,35) !important;
  border-color: #FFFFFF; }

.switch-secondary > .switch-input:checked ~ .switch-label {
  background: #d1d4d7 !important;
  border-color: #b6bbbf; }

.switch-secondary > .switch-input:checked ~ .switch-handle {
  border-color: #b6bbbf; }

.switch-secondary-outline > .switch-input:checked ~ .switch-label {
  background: #fff !important;
  border-color: #d1d4d7; }
  .switch-secondary-outline > .switch-input:checked ~ .switch-label::after {
    color: #d1d4d7; }

.switch-secondary-outline > .switch-input:checked ~ .switch-handle {
  border-color: #d1d4d7; }

.switch-secondary-outline-alt > .switch-input:checked ~ .switch-label {
  background: #fff !important;
  border-color: #d1d4d7; }
  .switch-secondary-outline-alt > .switch-input:checked ~ .switch-label::after {
    color: #d1d4d7; }

.switch-secondary-outline-alt > .switch-input:checked ~ .switch-handle {
  background: #d1d4d7 !important;
  border-color: #d1d4d7; }

.switch-success > .switch-input:checked ~ .switch-label {
  background: #79c447 !important;
  border-color: #61a434; }

.switch-success > .switch-input:checked ~ .switch-handle {
  border-color: #61a434; }

.switch-success-outline > .switch-input:checked ~ .switch-label {
  background: #fff !important;
  border-color: #79c447; }
  .switch-success-outline > .switch-input:checked ~ .switch-label::after {
    color: #79c447; }

.switch-success-outline > .switch-input:checked ~ .switch-handle {
  border-color: #79c447; }

.switch-success-outline-alt > .switch-input:checked ~ .switch-label {
  background: #fff !important;
  border-color: #79c447; }
  .switch-success-outline-alt > .switch-input:checked ~ .switch-label::after {
    color: #79c447; }

.switch-success-outline-alt > .switch-input:checked ~ .switch-handle {
  background: #79c447 !important;
  border-color: #79c447; }

.switch-info > .switch-input:checked ~ .switch-label {
  background: #67c2ef !important;
  border-color: #39afea; }

.switch-info > .switch-input:checked ~ .switch-handle {
  border-color: #39afea; }

.switch-info-outline > .switch-input:checked ~ .switch-label {
  background: #fff !important;
  border-color: #67c2ef; }
  .switch-info-outline > .switch-input:checked ~ .switch-label::after {
    color: #67c2ef; }

.switch-info-outline > .switch-input:checked ~ .switch-handle {
  border-color: #67c2ef; }

.switch-info-outline-alt > .switch-input:checked ~ .switch-label {
  background: #fff !important;
  border-color: #67c2ef; }
  .switch-info-outline-alt > .switch-input:checked ~ .switch-label::after {
    color: #67c2ef; }

.switch-info-outline-alt > .switch-input:checked ~ .switch-handle {
  background: #67c2ef !important;
  border-color: #67c2ef; }

.switch-warning > .switch-input:checked ~ .switch-label {
  background: #fabb3d !important;
  border-color: #f9aa0b; }

.switch-warning > .switch-input:checked ~ .switch-handle {
  border-color: #f9aa0b; }

.switch-warning-outline > .switch-input:checked ~ .switch-label {
  background: #fff !important;
  border-color: #fabb3d; }
  .switch-warning-outline > .switch-input:checked ~ .switch-label::after {
    color: #fabb3d; }

.switch-warning-outline > .switch-input:checked ~ .switch-handle {
  border-color: #fabb3d; }

.switch-warning-outline-alt > .switch-input:checked ~ .switch-label {
  background: #fff !important;
  border-color: #fabb3d; }
  .switch-warning-outline-alt > .switch-input:checked ~ .switch-label::after {
    color: #fabb3d; }

.switch-warning-outline-alt > .switch-input:checked ~ .switch-handle {
  background: #fabb3d !important;
  border-color: #fabb3d; }

.switch-danger > .switch-input:checked ~ .switch-label {
  background: #ff5454 !important;
  border-color: #ff2121; }

.switch-danger > .switch-input:checked ~ .switch-handle {
  border-color: #ff2121; }

.switch-danger-outline > .switch-input:checked ~ .switch-label {
  background: #fff !important;
  border-color: #ff5454; }
  .switch-danger-outline > .switch-input:checked ~ .switch-label::after {
    color: #ff5454; }

.switch-danger-outline > .switch-input:checked ~ .switch-handle {
  border-color: #ff5454; }

.switch-danger-outline-alt > .switch-input:checked ~ .switch-label {
  background: #fff !important;
  border-color: #ff5454; }
  .switch-danger-outline-alt > .switch-input:checked ~ .switch-label::after {
    color: #ff5454; }

.switch-danger-outline-alt > .switch-input:checked ~ .switch-handle {
  background: #ff5454 !important;
  border-color: #ff5454; }

.chart-wrapper canvas {
  width: 100% !important; }

base-chart.chart {
  display: block !important; }

.b-a-0 {
  border: 0 !important; }

.b-t-0 {
  border-top: 0 !important; }

.b-r-0 {
  border-right: 0 !important; }

.b-b-0 {
  border-bottom: 0 !important; }

.b-l-0 {
  border-left: 0 !important; }

.b-a-1 {
  border: 1px solid #d1d4d7 !important; }

.b-t-1 {
  border-top: 1px solid #d1d4d7 !important; }

.b-r-1 {
  border-right: 1px solid #d1d4d7 !important; }

.b-b-1 {
  border-bottom: 1px solid #d1d4d7 !important; }

.b-l-1 {
  border-left: 1px solid #d1d4d7 !important; }

.b-a-2 {
  border: 2px solid #d1d4d7 !important; }

.b-t-2 {
  border-top: 2px solid #d1d4d7 !important; }

.b-r-2 {
  border-right: 2px solid #d1d4d7 !important; }

.b-b-2 {
  border-bottom: 2px solid #d1d4d7 !important; }

.b-l-2 {
  border-left: 2px solid #d1d4d7 !important; }

.label-pill {
  border-radius: 1rem !important; }

.open > .dropdown-menu {
  display: block; }

.open > a {
  outline: 0; }

.navbar .dropdown-toggle .img-avatar {
  height: 35px;
  margin: 0 10px; }

.email-app {
  display: flex;
  flex: 1;
  flex-direction: row;
  overflow-x: hidden; }
  .email-app nav {
    flex: 0 0 200px;
    order: -1;
    padding: 15px;
    border-right: 1px solid #d1d4d7; }
    .email-app nav .btn-block {
      margin-bottom: 15px; }
    .email-app nav ul.nav {
      flex-direction: column; }
      .email-app nav ul.nav li.nav-item {
        margin: 0;
        position: relative; }
        .email-app nav ul.nav li.nav-item a.nav-link, .email-app nav ul.nav li.nav-item .navbar a.dropdown-toggle, .navbar .email-app nav ul.nav li.nav-item a.dropdown-toggle {
          font-size: 12px;
          font-weight: 400;
          text-transform: uppercase;
          text-decoration: none;
          display: block;
          padding: 0 10px; }
          .email-app nav ul.nav li.nav-item a.nav-link i, .email-app nav ul.nav li.nav-item .navbar a.dropdown-toggle i, .navbar .email-app nav ul.nav li.nav-item a.dropdown-toggle i {
            width: 20px;
            text-align: center;
            margin: 0 10px 0 0;
            font-size: 14px; }
          .email-app nav ul.nav li.nav-item a.nav-link .tag, .email-app nav ul.nav li.nav-item .navbar a.dropdown-toggle .tag, .navbar .email-app nav ul.nav li.nav-item a.dropdown-toggle .tag {
            float: right;
            margin-top: 16px;
            margin-left: 10px; }
        .email-app nav ul.nav li.nav-item a.nav-link, .email-app nav ul.nav li.nav-item .navbar a.dropdown-toggle, .navbar .email-app nav ul.nav li.nav-item a.dropdown-toggle {
          line-height: 40px;
          color: #FFFFFF;
          border-bottom: 1px solid #d1d4d7; }
  .email-app main {
    flex: 1;
    padding: 15px; }
    .email-app main .toolbar {
      margin: -15px -15px 15px -15px;
      padding: 15px;
      border-bottom: 1px solid #d1d4d7; }
    .email-app main ul.messages-list {
      list-style: none;
      margin: 15px -15px 0 -15px;
      padding: 15px 15px 0 15px; }
      .email-app main ul.messages-list li {
        cursor: pointer;
        margin-bottom: 10px;
        padding: 10px; }
        .email-app main ul.messages-list li a {
          color: black; }
          .email-app main ul.messages-list li a:hover {
            text-decoration: none; }
        .email-app main ul.messages-list li.unread .header, .email-app main ul.messages-list li.unread .title {
          font-weight: bold; }
        .email-app main ul.messages-list li:hover {
          border: 1px solid rgb(35,35,35);
          padding: 9px; }
          .email-app main ul.messages-list li:hover .action {
            color: #FFFFFF; }
        .email-app main ul.messages-list li .header {
          margin: 0 0 5px 0; }
          .email-app main ul.messages-list li .header .from {
            width: 49.9%;
            white-space: nowrap;
            overflow: hidden !important;
            text-overflow: ellipsis; }
          .email-app main ul.messages-list li .header .date {
            width: 50%;
            text-align: right;
            float: right; }
        .email-app main ul.messages-list li .title {
          margin: 0 0 5px 0;
          white-space: nowrap;
          overflow: hidden !important;
          text-overflow: ellipsis; }
        .email-app main ul.messages-list li .description {
          font-size: 12px;
          padding-left: 29px; }
        .email-app main ul.messages-list li .action {
          display: inline-block;
          width: 16px;
          text-align: center;
          margin-right: 10px;
          color: #FFFFFF; }
          .email-app main ul.messages-list li .action .fa-check-square-o {
            margin: 0 -1px 0 1px; }
          .email-app main ul.messages-list li .action .fa-square {
            float: left;
            margin-top: -16px;
            margin-left: 4px;
            font-size: 11px;
            color: white; }
          .email-app main ul.messages-list li .action .fa-star.bg {
            float: left;
            margin-top: -16px;
            margin-left: 3px;
            font-size: 12px;
            color: white; }
    .email-app main .message .message-title {
      margin-top: 30px;
      padding-top: 10px;
      font-weight: bold;
      font-size: 14px; }
    .email-app main .message .header {
      margin: 20px 0 30px 0;
      padding: 10px 0 10px 0;
        border: 1px solid rgb(35,35,35);
      border-bottom: 1px solid #d1d4d7; }
      .email-app main .message .header .avatar {
        height: 34px;
        width: 34px;
        float: left;
        margin-right: 10px; }
      .email-app main .message .header i {
        margin-top: 1px; }
      .email-app main .message .header .from {
        display: inline-block;
        width: 50%;
        font-size: 12px;
        margin-top: -2px;
        color: #FFFFFF; }
        .email-app main .message .header .from span {
          display: block;
          font-size: 14px;
          font-weight: bold; }
      .email-app main .message .header .date {
        display: inline-block;
        width: 29%;
        text-align: right;
        float: right;
        font-size: 12px;
        margin-top: 18px; }
    .email-app main .message .attachments {
      border-top: 3px solid #f8f9fa;
      border-bottom: 3px solid #f8f9fa;
      padding: 10px 0px;
      margin-bottom: 20px;
      font-size: 12px; }
      .email-app main .message .attachments ul {
        list-style: none;
        margin: 0 0 0 -40px; }
        .email-app main .message .attachments ul li {
          margin: 10px 0; }
          .email-app main .message .attachments ul li .tag {
            padding: 2px 4px; }
          .email-app main .message .attachments ul li span.quickMenu {
            float: right;
            text-align: right; }
            .email-app main .message .attachments ul li span.quickMenu .fa {
              padding: 5px 0 5px 25px;
              font-size: 14px;
              margin: -2px 0px 0px 5px;
              color: #FFFFFF; }

        div.menue {
             width:20px;
        }
        
        div.menue div.title {
            color:#000000;
        }
        
        div.menue div.menue-container {
            display:none;
	background-color: #111111;
	border: 2px solid #000000;
	box-shadow:0px 0px 6px #000000;
	-o-border-radius:3px 3px 3px 3px;
	-icab-border-radius:3px 3px 3px 3px;
	-khtml-border-radius:3px 3px 3px 3px;
	-moz-border-radius:3px 3px 3px 3px;
	-webkit-border-radius:3px 3px 3px 3px;
	border-radius:3px 3px 3px 3px;
            padding:5px;
        }
        
        div.menue div.title:hover div.menue-container {
            display:block;
            width:190px;
            position:absolute;
		background-color: #111111;
	border: 2px solid #000000;
	box-shadow:0px 0px 6px #000000;
	-o-border-radius:3px 3px 3px 3px;
	-icab-border-radius:3px 3px 3px 3px;
	-khtml-border-radius:3px 3px 3px 3px;
	-moz-border-radius:3px 3px 3px 3px;
	-webkit-border-radius:3px 3px 3px 3px;
	border-radius:3px 3px 3px 3px;
            margin-left:-1px;
        }
        
        div.menue div.title:hover div.headline {
            border-bottom: solid 1px #ddd;
        }
        
        div.menue div.title div.headline {
            cursor:pointer;
            padding: 2px 5px;
            font-weight:bold;
            color:#FFFFFF;
	background-color: #111111;
	border: 2px solid #000000;
	box-shadow:0px 0px 6px #000000;
	-o-border-radius:3px 3px 3px 3px;
	-icab-border-radius:3px 3px 3px 3px;
	-khtml-border-radius:3px 3px 3px 3px;
	-moz-border-radius:3px 3px 3px 3px;
	-webkit-border-radius:3px 3px 3px 3px;
	border-radius:3px 3px 3px 3px;
        }
        
        div.menue div.menue-item {
            padding:3px;
            margin: 3px;
	background-color: #111111;
	border: 2px solid #000000;
	box-shadow:0px 0px 6px #000000;
	-o-border-radius:3px 3px 3px 3px;
	-icab-border-radius:3px 3px 3px 3px;
	-khtml-border-radius:3px 3px 3px 3px;
	-moz-border-radius:3px 3px 3px 3px;
	-webkit-border-radius:3px 3px 3px 3px;
	border-radius:3px 3px 3px 3px;
            cursor:pointer;
            color:#FFFFFF;
        }

        div.menue div.menue-item:hover {
            padding:3px;
            margin: 3px;
	background-color: #111111;
	border: 2px solid #000000;
	box-shadow:0px 0px 6px #000000;
	-o-border-radius:3px 3px 3px 3px;
	-icab-border-radius:3px 3px 3px 3px;
	-khtml-border-radius:3px 3px 3px 3px;
	-moz-border-radius:3px 3px 3px 3px;
	-webkit-border-radius:3px 3px 3px 3px;
	border-radius:3px 3px 3px 3px;
            cursor:pointer;
            color:#FFFFFF;
            text-decoration: none;
        }

a.x264_tfiles_tps {
  position: relative;
  display: inline;
}
a.x264_tfiles_tps span {
  position: absolute;
  width:140px;
  color: #FFFFFF;
  text-shadow: 1px 1px 1px #800000;
  background: #000000;
  border: 2px solid #424242;
  height: 35px;
  line-height: 35px;
  text-align: center;
  visibility: hidden;
  border-radius: 9px;
  box-shadow: 1px 1px 1px #800000;
}
a.x264_tfiles_tps span:before {
  content: '';
  position: absolute;
  top: 50%;
  left: 100%;
  margin-top: -12px;
  width: 0; height: 0;
  border-left: 12px solid #424242;
  border-top: 12px solid transparent;
  border-bottom: 12px solid transparent;
}
a.x264_tfiles_tps span:after {
  content: '';
  position: absolute;
  top: 50%;
  left: 100%;
  margin-top: -8px;
  width: 0; height: 0;
  border-left: 8px solid #000000;
  border-top: 8px solid transparent;
  border-bottom: 8px solid transparent;
}
a:hover.x264_tfiles_tps span {
  visibility: visible;
  opacity: 0.8;
  right: 100%;
  top: 50%;
  margin-top: -17.5px;
  margin-right: 15px;
  z-index: 999;
}

.x264_tfiles_tname {
	border:1px inset 0 0 6px rgba(19, 19, 19, 1);
	background-color: rgba(20,20,20,1);
	text-align:center;
	margin-left: auto;
	margin-right: auto;
	padding:10px;
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	border:none 5px #49c1f4;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
	border-bottom-left-radius: 15px;
	border-bottom-right-radius: 15px;
	border-top: 1px solid #000;
	border-left: 1px solid #000;
	border-right: 1px solid #000;
	border-bottom: 1px solid #000;
	-webkit-transition: opacity 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
	-moz-transition: opacity 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
	-o-transition: opacity 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
	transition: opacity 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
}

#gesamt {
	width: 910px;
	margin:auto;
}
#anzeigelinks{
	width: 90px;
	margin-top:10px;
	float:left;
}

.in_em_info{
	width:275px;
	margin:2px 0 0 95px;
	float:left;	
}
.in_em_info_name{
	font-size:14px;
	font-weight:bold;
	margin:3px 0 0 0;
	text-align:left;
}
.in_em_info_name_b{
	font-size:12px;
	font-weight:bold;
	margin:3px 0 0 0;
	text-align:left;
}
.in_em_info_cat{
	position:absolute;
	margin:7px 0 0 5px;
}
.in_em_info_name_b span{
    display:block;
	width:100px;
	float:left;
}
.splitter {
        line-height: 24px;
        text-align: center;
    }

  ul#maintab li {text-decoration: underline;
    list-style: none;
    display: inline;
  }

  ul#maintab a, ul#maintab span {
    text-decoration: none;
	font-weight: bold;
  }

  ul#maintab div {
     clear: left;
  }


title {
  content: attr(title);
  padding: 4px 8px;
  color: #333;
  position: absolute;
  left: 0;
  top: 100%;
  z-index: 20;
  white-space: nowrap;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  -moz-box-shadow: 0px 0px 4px #222;
  -webkit-box-shadow: 0px 0px 4px #222;
  box-shadow: 0px 0px 4px #222;
  background-image: -moz-linear-gradient(top, #eeeeee, #cccccc);
  background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #eeeeee),color-stop(1, #cccccc));
  background-image: -webkit-linear-gradient(top, #eeeeee, #cccccc);
  background-image: -moz-linear-gradient(top, #eeeeee, #cccccc);
  background-image: -ms-linear-gradient(top, #eeeeee, #cccccc);
  background-image: -o-linear-gradient(top, #eeeeee, #cccccc);
}

.stepcarousel{
position: relative; /*leave this value alone*/
overflow: scroll; /*leave this value alone*/
width: 878px; /*Width of Carousel Viewer itself*/
height: 185px; /*Height should enough to fit largest content's height*/
	margin-left: auto;
	margin-right: auto;
}

.stepcarousel .belt{
position: absolute; /*leave this value alone*/
	margin-left: auto;
	margin-right: auto;
}

.stepcarousel .panel{
	margin-left: auto;
	margin-right: auto;
overflow: hidden; /*clip content that go outside dimensions of holding panel DIV*/
margin: 10px; /*margin around each panel*/
width: 135px; /*Width of each panel holding each content. If removed, widths should be individually defined on each content DIV then. */
}  

#mygallery {
	margin-left: auto;
	margin-right: auto;
	overflow: hidden;
}

#x264_ajax_tfiles_info_but {
	border:1px inset 0 0 6px rgba(19, 19, 19, 1);
	background-color: rgba(20,20,20,1);
	text-align:center;
	margin-left: auto;
	margin-right: auto;
	padding:10px;
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	border:none 5px #49c1f4;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
	border-bottom-left-radius: 15px;
	border-bottom-right-radius: 15px;
	border-top: 1px solid #000;
	border-left: 1px solid #000;
	border-right: 1px solid #000;
	border-bottom: 1px solid #000;
}

.to_ajax_tfiles_link {
	position:absolute;
	width: 100px;
	height: 135px;
	top: 5px;
	border:1px inset 0 0 6px rgba(19, 19, 19, 1);
	background-color: rgba(20,20,20,1);
	text-align:center;
	margin-left: auto;
	margin-right: auto;
	padding:10px;
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	border:none 5px #49c1f4;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
	border-bottom-left-radius: 15px;
	border-bottom-right-radius: 15px;
	border-top: 1px solid #000;
	border-left: 1px solid #000;
	border-right: 1px solid #000;
	border-bottom: 1px solid #000;
}

#x264_ajax_tfiles_info_pop{
	display:none;
	position:absolute;
	top: 25px;
	width:282px;
	height:240px;
	margin:10px 0 0 105px;
	padding:10px;
	background-color:rgba(20,20,20,1);
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	z-index:100;
}

.x264_wrapper_ajax_tfiles{
	height:170px;

	text-align:left;
	margin:auto;

	z-index: 1;
}

.x264_ajax_buttom {
	width: 200px;
	background-color: rgb(19,19,19);
	display: block;
	color: #ccc;
	font-weight: bold;
	text-decoration: none;
	text-align: center;
	margin: 0 auto 8px auto;
	border: inherit 6px #000000;
	-moz-border-radius-topleft: 0px;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-bottomleft: 0px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-top-left-radius: 0px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-bottom-left-radius: 0px;
	-webkit-border-bottom-right-radius: 5px;
	border-top-left-radius: 0px;
	border-top-right-radius: 5px;
	border-bottom-left-radius: 0px;
	border-bottom-right-radius: 5px;
	-moz-box-shadow: 0px 1px 9px #000000;
	-webkit-box-shadow: 0px 1px 9px #000000;
	box-shadow: 0px 1px 9px #000000;
}

.x264_ajax_tfiles_inp{
	width:440px;
	background-color: rgb(19,19,19);
	display:block;
	color:#ccc;
	font-weight:bold;
	text-decoration: none;
	text-align:center;
	margin:0 auto 8px auto;
    border:inherit 6px #000000;
    -moz-border-radius-topleft: 0px;
    -moz-border-radius-topright:5px;
    -moz-border-radius-bottomleft:0px;
    -moz-border-radius-bottomright:5px;
    -webkit-border-top-left-radius:0px;
    -webkit-border-top-right-radius:5px;
    -webkit-border-bottom-left-radius:0px;
    -webkit-border-bottom-right-radius:5px;
    border-top-left-radius:0px;
    border-top-right-radius:5px;
    border-bottom-left-radius:0px;
    border-bottom-right-radius:5px;
    -moz-box-shadow: 0px 1px 9px #000000;
    -webkit-box-shadow: 0px 1px 9px #000000;
    box-shadow: 0px 1px 9px #000000;	
}

.x264_ajax_tfiles_br{
	height:15px;
}

#aktuell_overall{
	position:fixed;
	margin:195px 0 0 32px;
}
.to_img_link{
	width:88px;
	height:89px;
	margin-left: auto;
	margin-right: auto;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
}
/*Button oben mit slide nach unten und etwas nach au�en*/
ul.top-ul, ul.top-ul ul {padding:0; margin:0; list-style:none; width:100px; font-family:arial, sans-serif;
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}
/*Button oben*/
ul.top-ul{width:0px; height:0px; position:relative; z-index:100;}
/*Button oben*/
ul.top-ul li.top-li {width:0px; height:0px; float:left; position:relative;}
ul.top-ul li.top-li a.top-a {
	display:block; 
	position:absolute; 
	margin:36px 0 0 -25px; 
	text-decoration:none;
	background-image:url(../images/new_ups.png);
	display:block;
	width:24px;
	height:105px;
}
/*breite ohne inhalt*/
ul.top-ul li.top-li div.drop {height:0; overflow:hidden; left:-1px; top:20px; width:970px; position:absolute; z-index:500;
-o-transition: height 1s ease-in-out;
-moz-transition: height 1s ease-in-out;
-webkit-transition: height 1s ease-in-out;
}

/*hintergrund von oben nach unten*/
ul.top-ul li.top-li div.drop em {
	display:block; width:960px; margin-left:3px;height:210px; opacity:0.9;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;

}

/*men� slider nach unten top:-1000px; = geschwindigkeit von oben border:1px dotted blue;*/
ul.top-ul li.top-li div.drop ul.drop-ul {
	position:absolute;
	left:15px; 
	top:-120px;
	margin-top:10px;
	border:1px inset 0 0 6px rgba(0,0,0,0.8); 
	padding-bottom:10px;
-o-transition: 1s ease-in-out;
-moz-transition: 1s ease-in-out;
-webkit-transition: all 1s ease-in-out;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
}

/* men� wo canon steht*/
ul.top-ul li.top-li div.drop ul.drop-ul li.drop-li {
	position:relative; width:100px; height:100px; float:left; z-index:100;}
/* men� wo canon steht der link noch nicht zu sehen*/
ul.top-ul li.top-li div.drop ul.drop-ul li.drop-li a.drop-a {
	display:block; width:100px; float:left; text-decoration:none; line-height:16px;}
/* men� wo canon steht das bild noch nicht zu sehen*/
ul.top-ul li.top-li div.drop ul.drop-ul li.drop-li a.drop-a img {
	display:block; 
	border:0; 
	position:absolute; 
	margin:20px 0 0 20px; 
	z-index:-1; 
	opacity:1;
-o-transition: 0.4s ease-in-out;
-moz-transition: 0.4s ease-in-out;
-webkit-transition: all 0.4s ease-in-out;
}
/* men� wo canon steht*/
ul.top-ul li.top-li div.drop ul.drop-ul li.drop-li a b {
	display:block; 
	width:100px;height:60px; 
	padding-top:90px; 
	text-align:center; 
	cursor:pointer; 
	font-weight:normal; 
	opacity:0; 
-o-transition: 0.4s ease-in-out;
-moz-transition: 0.4s ease-in-out;
-webkit-transition: all 0.4s ease-in-out;
}
/* men� wo canon steht*/
ul.top-ul li.top-li:hover div.drop ul.drop-ul li.drop-li:hover > a img {opacity:0.5;}
/* men� wo canon steht*/
ul.top-ul li.top-li:hover div.drop ul.drop-ul li.drop-li:hover > a b {opacity:1;}
/* men� wo canon steht*/
ul.top-ul li.top-li:hover div.drop {height:212px;} /*check*/
/* men� wo canon steht*/
ul.top-ul li.top-li:hover div.drop:hover {height:212px;} /*check*/
/* men� wo canon steht*/
ul.top-ul li.top-li:hover div.drop ul.drop-ul {top:0;}
/* border:1px dotted blue;########################################*/
ul.top-ul li.top-li div.drop ul.drop-ul div.fly {position:absolute; left:100px; top:-1px; width:0; height:113px; overflow:hidden;
-o-transition: width 1s ease-in-out;
-moz-transition: width 1s ease-in-out;
-webkit-transition: width 1s ease-in-out;
}
/* border:1px dotted blue;##############################################*/
ul.top-ul li.top-li div.drop ul.drop-ul div.fly ul.fly-ul {
	position:absolute; 
	left:-920px; 
	top:10px; 
	width:820px; 
	height:90px; 
	padding-right:10px;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
-o-transition: 1s ease-in-out;
-moz-transition: 1s ease-in-out;
-webkit-transition: all 1s ease-in-out;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
}
/* border:1px dotted blue;*/

ul.top-ul li.top-li div.drop ul.drop-ul div.fly ul.fly-ul li.fly-li {
	float:left; 
	position:relative; 
	height:90px; 
	z-index:100;
}
/* border:1px dotted blue;*/
ul.top-ul li.top-li div.drop ul.drop-ul div.fly ul.fly-ul li.fly-li a.fly-a {
	display:block; 
	width:56px; 
	height:80px;
	float:left; 
	text-decoration:none; 
	margin:5px 0 0 5px;
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
}
/* border:1px dotted blue;*/
ul.top-ul li.top-li div.drop ul.drop-ul div.fly ul.fly-ul li.fly-li a.fly-a img {
	display:block; 
	border:0; 
	position:absolute;
	z-index:-1; 
	opacity:1;
-o-transition: 0.4s ease-in-out;
-moz-transition: 0.4s ease-in-out;
-webkit-transition: all 0.4s ease-in-out;
}
/* border:1px dotted blue;*/
ul.top-ul li.top-li div.drop ul.drop-ul div.fly ul.fly-ul li.fly-li a.fly-a b {
	display:block; 
	height:65px; 
	text-align:center; 
	font-size:12px; 
	padding-top:35px; 
	opacity:0;
-o-transition: 0.4s ease-in-out;
-moz-transition: 0.4s ease-in-out;
-webkit-transition: all 0.4s ease-in-out;
}
/* border:1px dotted blue;*/
ul.top-ul li.top-li:hover div.drop ul.drop-ul li.drop-li:hover div.fly {width:915px;}
/* border:1px dotted blue;*/
ul.top-ul li.top-li:hover div.drop ul.drop-ul li.drop-li:hover div.fly ul.fly-ul {left:0;}
/* border:1px dotted blue;*/
ul.top-ul li.top-li:hover div.drop ul.drop-ul li.drop-li:hover div.fly ul.fly-ul li:hover > a img {opacity:0.5;}
/* border:1px dotted blue;*/
ul.top-ul li.top-li:hover div.drop ul.drop-ul li.drop-li:hover div.fly ul.fly-ul li:hover > a b {opacity:1;}

#in_em_1, #in_em_2, #in_em_3, #in_em_4, #in_em_5, #in_em_6, #in_em_7, #in_em_8, #in_em_9, #in_em_10, #in_em_11, #in_em_12, #in_em_13{
	display:none;
	position:absolute;
	margin:102px 0 0 102px;
	width:820px;
	height:240px;
}
.in_em_info{
	width:320px;
	height:180px;
	margin:2px 0 0 95px;
	margin-left: auto;
	margin-right: auto;	
}
.in_em_info2{
	width:320px;
	height:180px;
	margin:2px 0 0 95px;
	float:right;	
}
.in_em_info_name{
	font-size:14px;
	font-weight:bold;
	margin:3px 0 0 0;
}
.in_em_info_name_b{
	font-size:12px;
	font-weight:bold;
	margin:3px 0 0 0;
}
.in_em_info_cat{
	position:absolute;
	margin:7px 0 0 5px;
}
.in_em_info_name_b span{
    display:block;
	width:100px;
	float:left;
}
.send_fly{
	margin:15px 0 0 4px;
}

#kat_haupt_wrap, #kat_cat_wrap, #kat_cat_wrapp{
border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	padding:20px;
	width:700px;
	margin:auto;
}
#kat_set_color_wrap{
	position:absolute;
	margin:0 0 0 600px;
}
#style_hand_kat{
	position:absolute;
	width:24px;
	height:24px;
	margin:-15px 0 0 580px;
	cursor:pointer;
}
.kat_cat_pic_name{
	margin:2px 0 0 0;
	text-align:center;
	font-weight:bold;
	font-size:13px;
	color: #000000;
	line-height:16px;
	text-shadow: 1px 1px 0px #eee;
	height:16px;
}
.kat_cat_pic_name_b{
	text-align:center;
	font-size:10px;
	line-height:120px;
	text-shadow: 1px 1px 0px #000;
	height:120px;
	color:#fff;
}
.kat_er_wrap{
	margin:4px 0 0 14px;
	width:100px;
	height:40px;
	font-weight:bold;
	line-height:38px;
	float:left;
}
.back_cat_wrap{
	float:left;
}
.kat_cat_pic{
	position:absolute;
	background-image:url(../images/cat_pic.png);
	background-repeat:no-repeat;
	width:120px;
	height:185px;
	margin-left: auto;
	margin-right: auto;
}
.back_cat_pic{
	position:absolute;
	width:73px;
	height:35px;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	margin:2px 0 0 3px;
}
#back_cat_pic_change{
	position:absolute;
	width:73px;
	height:35px;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	margin:2px 0 0 3px;
}
.kat_h_wr{
	width:100px;
	margin:10px 0 0 14px;
	float:left;
}
.kat_sort_button{
	background-image:url(../images/cat_pic.png);
	width:80px;
	height:40px;
	display:block;
	float:left;
	text-align:center;
	line-height:35px;
	margin:0 0 0 14px;
	text-shadow: 1px 1px 0px #000;
}
#popup_noch_to{
    position:absolute;
    margin:300px 0 0 200px;
	width:256px;
	height:200px;
border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
    padding:10px;
	text-align:center;
	z-index:100;
}
.cat_xxx_fil{
	width:250px;
	height:24px;
	line-height:24px;
	padding-left:10px;
	margin-top:5px;
	font-weight:bold;
border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}

#imdb_info_wrap{
	width:455px;
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	border:1px solid #111;
	margin:10px 0 0 10px;
	float:left;
	padding:10px;
}
.imdb_rows{
	width:455px;
	float:left;
	margin:0 0 5px 0;
}
.imdb_rows_label{
	width:100px;
	float:left;
	opacity:0.4;
	font-weight:bold;
}
#imdb_star{
	background-image:url(../../giga-star.png);
	width:66px;
	height:59px;
	text-align:center;
	font-size:15px;
	font-weight:bold;
	line-height:64px;
	color:#000;
	float:left;
}

.x264_tfiles_wrapper_go{
	background: radial-gradient(ellipse at center, #262626 0%,rgb(26,26,26) 100%);
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}
.x264_tfiles_wrapper_catpic{
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;	
	position: absolute;
	float:left;	
}
.x264_tfiles_wrapper_size {
	float: left;
	width: 150px;
	height: 18px;
	display: block;
	color: #ccc;
	font-weight: bold;
	font-size: 12px;
	line-height: 17px;
	padding: 0 0 0 10px;
	margin: 4px 0 0 90px;
	margin-bottom:10px;
	-o-border-radius: 6px 6px 6px 6px;
	-icab-border-radius: 6px 6px 6px 6px;
	-khtml-border-radius: 6px 6px 6px 6px;
	-webkit-border-radius: 6px 6px 6px 6px;
	border-radius: 6px 6px 6px 6px;
	overflow: hidden;
	text-shadow: 1px 1px 2px #000;
	border: 1px solid #000000;
	-o-box-shadow: 0px 2px 6px #000;
	-icab-box-shadow: 0px 2px 6px #000;
	-khtml-box-shadow: 0px 2px 6px #000;
	-webkit-box-shadow: 0px 2px 6px #000;
	box-shadow: 0px 2px 6px #000;
}
.x264_tfiles_wrapper_files {
	float: left;
	width: 250px;
	height: 18px;
	display: block;
	color: #ccc;
	font-weight: bold;
	font-size: 12px;
	line-height: 17px;
	padding: 0 0 0 10px;
	margin: 4px 0 0 90px;
	margin-bottom:10px;
	-o-border-radius: 6px 6px 6px 6px;
	-icab-border-radius: 6px 6px 6px 6px;
	-khtml-border-radius: 6px 6px 6px 6px;
	-webkit-border-radius: 6px 6px 6px 6px;
	border-radius: 6px 6px 6px 6px;
	overflow: hidden;
	text-shadow: 1px 1px 2px #000;
	border: 1px solid #000000;
	-o-box-shadow: 0px 2px 6px #000;
	-icab-box-shadow: 0px 2px 6px #000;
	-khtml-box-shadow: 0px 2px 6px #000;
	-webkit-box-shadow: 0px 2px 6px #000;
	box-shadow: 0px 2px 6px #000;
}
.x264_tfiles_wrapper_info {
	float: left;
	width: 150px;
	height: 18px;
	display: block;
	color: #ccc;
	font-weight: bold;
	font-size: 12px;
	line-height: 17px;
	padding: 0 0 0 10px;
	margin: 4px 0 0 90px;
	-o-border-radius: 6px 6px 6px 6px;
	-icab-border-radius: 6px 6px 6px 6px;
	-khtml-border-radius: 6px 6px 6px 6px;
	-webkit-border-radius: 6px 6px 6px 6px;
	border-radius: 6px 6px 6px 6px;
	overflow: hidden;
	text-shadow: 1px 1px 2px #000;
	border: 1px solid #000000;
	-o-box-shadow: 0px 2px 6px #000;
	-icab-box-shadow: 0px 2px 6px #000;
	-khtml-box-shadow: 0px 2px 6px #000;
	-webkit-box-shadow: 0px 2px 6px #000;
	box-shadow: 0px 2px 6px #000;	
}
.x264_tfiles_wrapper_sl {
	float: right;
	width: 150px;
	height: 18px;
	display: block;
	color: #ccc;
	font-weight: bold;
	font-size: 12px;
	line-height: 17px;
	padding: 0 0 0 10px;
	margin: 4px 0 0 90px;
	-o-border-radius: 6px 6px 6px 6px;
	-icab-border-radius: 6px 6px 6px 6px;
	-khtml-border-radius: 6px 6px 6px 6px;
	-webkit-border-radius: 6px 6px 6px 6px;
	border-radius: 6px 6px 6px 6px;
	overflow: hidden;
	text-shadow: 1px 1px 2px #000;
	border: 1px solid #000000;
	-o-box-shadow: 0px 2px 6px #000;
	-icab-box-shadow: 0px 2px 6px #000;
	-khtml-box-shadow: 0px 2px 6px #000;
	-webkit-box-shadow: 0px 2px 6px #000;
	box-shadow: 0px 2px 6px #000;	
}
.x264_tfiles_wrapper_name {
	color: #ccc;
	float: left;
	width: 600px;
	height: 18px;
	display: block;
	font-weight: bold;
	font-size: 12px;
	line-height: 17px;
	padding: 0 0 0 10px;
	margin: 4px 0 0 90px;
	-o-border-radius: 6px 6px 6px 6px;
	-icab-border-radius: 6px 6px 6px 6px;
	-khtml-border-radius: 6px 6px 6px 6px;
	-webkit-border-radius: 6px 6px 6px 6px;
	border-radius: 6px 6px 6px 6px;
	overflow: hidden;
	text-shadow: 1px 1px 2px #000;
	border: 1px solid #000000;
	-o-box-shadow: 0px 2px 6px #000;
	-icab-box-shadow: 0px 2px 6px #000;
	-khtml-box-shadow: 0px 2px 6px #000;
	-webkit-box-shadow: 0px 2px 6px #000;
	box-shadow: 0px 2px 6px #000;
}

#x264_wrap_details_name {
	color: #ccc;
	width: 840px;
	height: 32px;
	float: left;
	margin: 0 0 10px 4px;
	line-height: 32px;
	text-align: center;
	overflow: hidden;
	-o-box-shadow: 0px 0px 3px #000;
	-icab-box-shadow: 0px 0px 3px #000;
	-khtml-box-shadow: 0px 0px 3px #000;
	-webkit-box-shadow: 0px 0px 3px #000;
	box-shadow: 0px 0px 3px #000;
	border: 1px solid #404040;
}

.x264_wrap_details {
	color: #ccc;
	width:96,5%;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	text-align:left;
	margin:auto;
	margin-bottom:20px;
	padding:10px;
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	border:none 5px #000000;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
	border-bottom-left-radius: 15px;
	border-bottom-right-radius: 15px;
	z-index: 1;
}

#x264_details_menu_sys {
	padding:0; 
	list-style:none;
	margin-left:auto;
	margin-right:auto; 
	height:30px;
}
#x264_details_menu_sys li {float:left;}
#x264_details_menu_sys li a {
	display:block; 
	border: 1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	height:30px; line-height:30px;
	text-decoration: none;
	font-size:12px;
	font-family:verdana, arial, sans-serif;
	text-align:center;
	overflow:hidden;
	position:relative;
	z-index:10;
	margin-right:-1px;
}
#x264_details_menu_sys li a b {
	display:block; 
	height:100px; 
	width:100%; 
	position:absolute; 
	left:0; 
	border: 1px inset 0 0 6px rgba(0,0,0,0.8); 
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset; 
	z-index:-1;
}
#x264_details_menu_sys li a:hover {}
#x264_details_menu_sys li a:hover b {top:-30px;}
#x264_details_menu_sys li a.current b {top:-30px;}

.x264_wrap_details_a {
	float: left;	
}

.x264_wrap_details_b {	
	float: right;
}

#x264_wrap_details_cover {
	width: 250px;
	float: left;
	margin: 10px 0 0 10px;
	padding: 10px;
	border: 1px solid #404040;
	-o-box-shadow: 0px 0px 5px #000;
	-icab-box-shadow: 0px 0px 5px #000;
	-khtml-box-shadow: 0px 0px 5px #000;
	-webkit-box-shadow: 0px 0px 5px #000;
	box-shadow: 0px 0px 5px #000;
}

.x264_wrap_details_download {
	width: 250px;
	float: left;
	margin: 10px 0 0 10px;
	padding: 10px;
	border: 1px solid #404040;
	-o-box-shadow: 0px 0px 5px #000;
	-icab-box-shadow: 0px 0px 5px #000;
	-khtml-box-shadow: 0px 0px 5px #000;
	-webkit-box-shadow: 0px 0px 5px #000;
	box-shadow: 0px 0px 5px #000;
}

.x264_wrap_details_edit {
	width: 250px;
	float: left;
	margin: 10px 0 0 10px;
	padding: 10px;
	border: 1px solid #404040;
	-o-box-shadow: 0px 0px 5px #000;
	-icab-box-shadow: 0px 0px 5px #000;
	-khtml-box-shadow: 0px 0px 5px #000;
	-webkit-box-shadow: 0px 0px 5px #000;
	box-shadow: 0px 0px 5px #000;
}

.x264_wrap_details_hashwert {
	width: 250px;
	float: left;
	margin: 10px 0 0 10px;
	padding: 10px;
	border: 1px solid #404040;
	-o-box-shadow: 0px 0px 5px #000;
	-icab-box-shadow: 0px 0px 5px #000;
	-khtml-box-shadow: 0px 0px 5px #000;
	-webkit-box-shadow: 0px 0px 5px #000;
	box-shadow: 0px 0px 5px #000;
}

#x264_wrap_details_right {
	width: 95.5%;
	height: 99%;
	float: left;
	margin: 10px 0 0 10px;
	padding: 10px;
	border: 1px solid #404040;
	-o-box-shadow: 0px 0px 5px #000;
	-icab-box-shadow: 0px 0px 5px #000;
	-khtml-box-shadow: 0px 0px 5px #000;
	-webkit-box-shadow: 0px 0px 5px #000;
	box-shadow: 0px 0px 5px #000;
}

#x264_wrap_details_left {
	width: 95.5%;
	height: 99%;
	float: left;
	margin: 10px 0 0 10px;
	padding: 10px;
	border: 1px solid #404040;
	-o-box-shadow: 0px 0px 5px #000;
	-icab-box-shadow: 0px 0px 5px #000;
	-khtml-box-shadow: 0px 0px 5px #000;
	-webkit-box-shadow: 0px 0px 5px #000;
	box-shadow: 0px 0px 5px #000;
}

#x264_wrap_details_info {
	width: 250px;
	height: 390px;
	float: left;
	margin: 10px 0 0 10px;
	padding: 10px;
	border: 1px solid #404040;
	-o-box-shadow: 0px 0px 5px #000;
	-icab-box-shadow: 0px 0px 5px #000;
	-khtml-box-shadow: 0px 0px 5px #000;
	-webkit-box-shadow: 0px 0px 5px #000;
	box-shadow: 0px 0px 5px #000;
}

#nfo_header_pop {
    display: none;
    position: absolute;
    width: 682px;
    height: 105px;
    margin: 10px 0 0 105px;
    padding: 10px;
    border: 1px inset 0 0 6px rgba(0,0,0,0.8);
    -webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
    box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
    z-index: 100;
}



.pagenav {
    float        : right;
    padding-right: 10px;
    display      : block;
}

.pagenav_table{
    border    : 0px;
    text-align: center;
    width     : 900px;
}

.pagenav_top {
    margin-top: 5px;
}

.pagenav span {
    display: block;
    float  : left;
    clear  : right;
}

.pagenav span a {
    font           : normal 13px Tahoma, Calibri, Verdana, Geneva, sans-serif;
    border         : 1px solid #CEDFEB;
    height         : 15.99px;
    padding        : 2px 4px;
    margin-left    : 1px;
    background     : #EEF9E4 none;
    text-decoration: none;
    color          : #417394;
}

.pagenav span a:hover {
    border: 1px solid #417394;
}

.pagenav span.prev_next a,
.pagenav span.first_last a {
    position: relative;
    top     : -2px;
}

.pagenav span.prev_next a img,
.pagenav span.first_last a img {
    position: relative;
    display : inline;
    top     : 3px;
}

.pagenav span.selected a {
    background : #759FBB;
    color      : #FFFFFF;
    border     : 1px solid #417394;
    height     : 15.99px;
    font-weight: bold;
    padding    : 2px 4px;
    margin-left: 1px;
}

.pagenav .separator {
    background: #EEF9E4 none;
    border    : 1px solid #CEDFEB;
    height    : 15.99px;
    color     : #417394;
    padding   : 2px;
    top       : -3px;
    position  : relative;
}

#x264_uspr_left{
	width:29%;
	float:left;
	padding:20px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 10px;
    margin-right: 10px;
    border: inherit 6px #000000;
    -moz-box-shadow: 0px 1px 9px #000000;
    -webkit-box-shadow: 0px 1px 9px #000000;
    box-shadow: 0px 1px 9px #000000;
}
#x264_uspr_right{
	width:63%;
	float:left;
	margin:0 0 0 20px;
	padding:20px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 10px;
    margin-right: 10px;	
    -moz-box-shadow: 0px 1px 9px #000000;
    -webkit-box-shadow: 0px 1px 9px #000000;
    box-shadow: 0px 1px 9px #000000;
}
.x264_uspr_left{
	width:260px;
	float:left;
	padding:20px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 10px;
    margin-right: 10px;	
    -moz-box-shadow: 0px 1px 9px #000000;
    -webkit-box-shadow: 0px 1px 9px #000000;
    box-shadow: 0px 1px 9px #000000;
}
.x264_uspr_right{
	width:555px;
	float:left;
	margin:0 0 0 20px;
	padding:20px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 10px;
    margin-right: 10px;	
    -moz-box-shadow: 0px 1px 9px #000000;
    -webkit-box-shadow: 0px 1px 9px #000000;
    box-shadow: 0px 1px 9px #000000;
}
.coder_left{
	width:75px;
	border:1px solid #404040;
	float:left;padding:10px;
	-o-box-shadow:inset 0px 0px 4px #000;
	-icab-box-shadow:inset 0px 0px 4px #000;
	-khtml-box-shadow:inset 0px 0px 4px #000;
	-webkit-box-shadow:inset 0px 0px 4px #000;
	box-shadow:inset 0px 0px 4px #000;
	-o-border-radius:18px 18px 18px 18px;
	-icab-border-radius:18px 18px 18px 18px;
	-khtml-border-radius:18px 18px 18px 18px;
	-webkit-border-radius:18px 18px 18px 18px;
	border-radius:18px 18px 18px 18px;
}
.coder_right{
	width:725px;
	border:1px solid #404040;
	float:left;margin:0 0 0 20px;
	padding:20px;
	-o-box-shadow:inset 0px 0px 4px #000;
	-icab-box-shadow:inset 0px 0px 4px #000;
	-khtml-box-shadow:inset 0px 0px 4px #000;
	-webkit-box-shadow:inset 0px 0px 4px #000;
	box-shadow:inset 0px 0px 4px #000;
	-o-border-radius:18px 18px 18px 18px;
	-icab-border-radius:18px 18px 18px 18px;
	-khtml-border-radius:18px 18px 18px 18px;
	-webkit-border-radius:18px 18px 18px 18px;
	border-radius:18px 18px 18px 18px;
}
.new_class_input_coder{
	width:124px;
	height:22px;
	border:1px solid #404040;
	color:#cccccc;
	padding:2px;
	float:left;
	-o-box-shadow:inset 0px 0px 4px #000;
	-icab-box-shadow:inset 0px 0px 4px #000;
	-khtml-box-shadow:inset 0px 0px 4px #000;
	-webkit-box-shadow:inset 0px 0px 4px #000;
	box-shadow:inset 0px 0px 4px #000;
	-o-border-radius:8px 8px 8px 8px;
	-icab-border-radius:8px 8px 8px 8px;
	-khtml-border-radius:8px 8px 8px 8px;
	-webkit-border-radius:8px 8px 8px 8px;
	border-radius:8px 8px 8px 8px;
}
.x264_uspr_break{
	border:1px solid #000000;
	padding:1px;
	margin:9px 0 9px 0;
	-o-box-shadow:0px 0px 2px #000;
	-icab-box-shadow:0px 0px 2px #000;
	-khtml-box-shadow:0px 0px 2px #000;
	-webkit-box-shadow:0px 0px 2px #000;
	box-shadow:0px 0px 2px #000;
	-o-border-radius:5px 5px 5px 5px;
	-icab-border-radius:5px 5px 5px 5px;
	-khtml-border-radius:5px 5px 5px 5px;
	-webkit-border-radius:5px 5px 5px 5px;
	border-radius:5px 5px 5px 5px;
}

.x264_uspr_right_label{
	margin:0 0 8px 0;
	height:24px;
	line-height:24px;
	padding-left:7px;
    color: #ccc;
    font-weight: bold;
    text-decoration: none;
    border: inherit 6px #000000;
    -moz-border-radius-topleft: 0px;
    -moz-border-radius-topright: 5px;
    -moz-border-radius-bottomleft: 0px;
    -moz-border-radius-bottomright: 5px;
    -webkit-border-top-left-radius: 0px;
    -webkit-border-top-right-radius: 5px;
    -webkit-border-bottom-left-radius: 0px;
    -webkit-border-bottom-right-radius: 5px;
    border-top-left-radius: 0px;
    border-top-right-radius: 5px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 5px;
    -moz-box-shadow: 0px 1px 9px #000000;
    -webkit-box-shadow: 0px 1px 9px #000000;
    box-shadow: 0px 1px 9px #000000;
}
.x264_uspr_right_label label{
	float:left;
	width:150px;
}
#x264_uspr_right_flag{
	-o-box-shadow:0px 0px 4px #000;
	-icab-box-shadow:0px 0px 4px #000;
	-khtml-box-shadow:0px 0px 4px #000;
	-webkit-box-shadow:0px 0px 4px #000;
	box-shadow:0px 0px 4px #000;
	margin:-8px 0 0 0;
}
#x264_uspr_ava{
	width:225px;
	height:225px;
	margin:5px 0 0 5px;
    border: inherit 6px #000000;
    -moz-box-shadow: 0px 1px 9px #000000;
    -webkit-box-shadow: 0px 1px 9px #000000;
    box-shadow: 0px 1px 9px #000000;
	text-align:center;
}
#x264_uspr_frinds{
	width:250px;
	margin:5px 0 0 5px;
}
#x264_uspr_navi{
	height:25px;
	margin:7px 0 0 0;
}
#x264_uspr_sig_wrap{
	margin:0 0 0 0;
	padding:7px;
	overflow:hidden;
	padding:2px;
    color: #ccc;
    font-weight: bold;
    text-decoration: none;
    border: inherit 6px #000000;
    -moz-border-radius-topleft: 0px;
    -moz-border-radius-topright: 5px;
    -moz-border-radius-bottomleft: 0px;
    -moz-border-radius-bottomright: 5px;
    -webkit-border-top-left-radius: 0px;
    -webkit-border-top-right-radius: 5px;
    -webkit-border-bottom-left-radius: 0px;
    -webkit-border-bottom-right-radius: 5px;
    border-top-left-radius: 0px;
    border-top-right-radius: 5px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 5px;
    -moz-box-shadow: 0px 1px 9px #000000;
    -webkit-box-shadow: 0px 1px 9px #000000;
    box-shadow: 0px 1px 9px #000000;
}
.stand_inp_but_uspr{
	color:#ffb700;
	display:block;
	padding:0 5px 0 5px;
	cursor:pointer;
	border:1px solid #404040;
	float:right;
	font-size:10px;
	margin:3px 10px 0 0;
	-o-box-shadow:0px 0px 4px #000;
	-icab-box-shadow:0px 0px 4px #000;
	-khtml-box-shadow:0px 0px 4px #000;
	-webkit-box-shadow:0px 0px 4px #000;
	box-shadow:0px 0px 4px #000;
	-o-border-radius:10px 10px 10px 10px;
	-icab-border-radius:10px 10px 10px 10px;
	-khtml-border-radius:10px 10px 10px 10px;
	-webkit-border-radius:10px 10px 10px 10px;
	border-radius:10px 10px 10px 10px;
}
.stand_inp_but_uspr:hover{
	-o-box-shadow:0px 0px 2px #000;
	-icab-box-shadow:0px 0px 2px #000;
	-khtml-box-shadow:0px 0px 2px #000;
	-webkit-box-shadow:0px 0px 2px #000;
	box-shadow:0px 0px 2px #000;
}
.text_area_uspr{
	border:1px solid #404040;
	color:#cccccc;
	padding:5px;
	width:380px;
	height:160px;
	float:left;
	margin:4px 0 3px 0;
	-o-box-shadow:inset 0px 0px 4px #000;
	-icab-box-shadow:inset 0px 0px 4px #000;
	-khtml-box-shadow:inset 0px 0px 4px #000;
	-webkit-box-shadow:inset 0px 0px 4px #000;
	box-shadow:inset 0px 0px 4px #000;
}
a.stand_button_uspr{
	width:230px;
	height:18px;
	padding:2px 10px 2px 10px;
	-o-box-shadow:inset 0px 0px 2px #000;
	-icab-box-shadow:inset 0px 0px 2px #000;
	-khtml-box-shadow:inset 0px 0px 2px #000;
	-webkit-box-shadow:inset 0px 0px 2px #000;
	box-shadow:inset 0px 0px 2px #000;
	-o-border-radius:10px 10px 10px 10px;
	-icab-border-radius:10px 10px 10px 10px;
	-khtml-border-radius:10px 10px 10px 10px;
	-webkit-border-radius:10px 10px 10px 10px;
	border-radius:10px 10px 10px 10px;
	text-decoration:none;
	border:1px solid #404040;
	float:left;
	margin:0 0 2px 5px;
	line-height:18px;
}
a.stand_button_uspr:hover{
	-o-box-shadow:0px 0px 0px #000;
	-icab-box-shadow:0px 0px 0px #000;
	-khtml-box-shadow:0px 0px 0px #000;
	-webkit-box-shadow:0px 0px 0px #000;
	box-shadow:0px 0px 0px #000;
}
.in_x264_uspr_standb_a{
	text-align:left;
}
.in_x264_uspr_standb_b{
	float:right;
	text-align:right;
}
#x264_uspr_com_show{
	width:390px;
	height:200px;
	border:1px solid #404040;
	float:left;
	margin:4px 0 0 0;
	line-height:14px;
	-o-box-shadow:inset 0px 0px 5px #000;
	-icab-box-shadow:inset 0px 0px 5px #000;
	-khtml-box-shadow:inset 0px 0px 5px #000;
	-webkit-box-shadow:inset 0px 0px 5px #000;
	box-shadow:inset 0px 0px 5px #000;
	overflow:auto;
}
#x264_uspr_bad_good{
	position:absolute;
	font-weight:bold;
	margin:-29px 0 0 0;
	height:18px;
	line-height:17px;
	width:544px;
	float:left;
	padding:0 0 0 10px;
	-o-border-radius:10px 10px 10px 10px;
	-icab-border-radius:10px 10px 10px 10px;
	-khtml-border-radius:10px 10px 10px 10px;
	-webkit-border-radius:10px 10px 10px 10px;
	border-radius:10px 10px 10px 10px;
	-o-box-shadow:0px 0px 5px #000;
	-icab-box-shadow:0px 0px 5px #000;
	-khtml-box-shadow:0px 0px 5px #000;
	-webkit-box-shadow:0px 0px 5px #000;
	box-shadow:0px 0px 5px #000;
}
#x264_uspr_good{
	position:absolute;
	font-weight:bold;
	margin:-9px 0 0 350px;
	height:18px;
	line-height:17px;
	width:233px;
	padding:0 0 0 10px;
	-o-border-radius:10px 10px 10px 10px;
	-icab-border-radius:10px 10px 10px 10px;
	-khtml-border-radius:10px 10px 10px 10px;
	-webkit-border-radius:10px 10px 10px 10px;
	border-radius:10px 10px 10px 10px;
	-o-box-shadow:0px 0px 5px #000;
	-icab-box-shadow:0px 0px 5px #000;
	-khtml-box-shadow:0px 0px 5px #000;
	-webkit-box-shadow:0px 0px 5px #000;
	box-shadow:0px 0px 5px #000;
}
.x264_uspr_comment_wrap{
	width:353px;
	border-bottom:1px solid #404040;
	margin:5px 0 0 5px;
	padding:0 0 5px 5px;
}
#popup_ende{
	position:absolute;
	display:none;
	margin:-10px 0 0 -10px;
	width:256px;
	height:450px;
	border:2px solid #ffb700;
	padding:10px;
	text-align:center;
	z-index:100;
	-o-border-radius:10px 10px 10px 10px;
	-icab-border-radius:10px 10px 10px 10px;
	-khtml-border-radius:10px 10px 10px 10px;
	-webkit-border-radius:10px 10px 10px 10px;
	border-radius:10px 10px 10px 10px;
	-o-box-shadow:0px 0px 3px #000;
	-icab-box-shadow:0px 0px 3px #000;
	-khtml-box-shadow:0px 0px 3px #000;
	-webkit-box-shadow:0px 0px 3px #000;
	box-shadow:0px 0px 3px #000;
}
#x264_uspr_acc_deak{
	position:absolute;
	background-image:url(../acct-deakt.png);
	width:250px;
	height:250px;
	margin:95px 0 0 145px;
	cursor:pointer;
}
#x264_uspr_acc_deak_save{
	position:absolute;
	background-image:url(../acct-deakt_save.png);
	width:250px;
	height:250px;
	margin:95px 0 0 145px;
	cursor:pointer;
}
.gelbe_div{
	width:20px;
	height:27px;
	float:left;
	border:1px solid #404040;
	margin:2px 2px 0 0;
}
.set_karte{
	background-image:url(../set_kart.png);
	display:block;
	width:20px;
	height:27px;
}
#pop_karte{
	position:absolute;
	margin:-230px 0 0 -7px;
	display:none;
	width:256px;
	height:200px;
	border:2px solid #ffb700;
	padding:10px;
	text-align:center;
	z-index:100;
	-o-border-radius:10px 10px 10px 10px;
	-icab-border-radius:10px 10px 10px 10px;
	-khtml-border-radius:10px 10px 10px 10px;
	-webkit-border-radius:10px 10px 10px 10px;
	border-radius:10px 10px 10px 10px;
	-o-box-shadow:0px 0px 3px #000;
	-icab-box-shadow:0px 0px 3px #000;
	-khtml-box-shadow:0px 0px 3px #000;
	-webkit-box-shadow:0px 0px 3px #000;
	box-shadow:0px 0px 3px #000;
}
#pop_karte_dell{
	position:absolute;
	margin:-230px 0 0 -7px;
	display:none;
	width:256px;
	height:200px;
	border:2px solid #ffb700;
	padding:10px;
	text-align:center;
	z-index:100;
	-o-border-radius:10px 10px 10px 10px;
	-icab-border-radius:10px 10px 10px 10px;
	-khtml-border-radius:10px 10px 10px 10px;
	-webkit-border-radius:10px 10px 10px 10px;
	border-radius:10px 10px 10px 10px;
	-o-box-shadow:0px 0px 3px #000;
	-icab-box-shadow:0px 0px 3px #000;
	-khtml-box-shadow:0px 0px 3px #000;
	-webkit-box-shadow:0px 0px 3px #000;
	box-shadow:0px 0px 3px #000;
}
#pop_doppelacc{
	position:absolute;
	margin:-100px 0 0 -10px;
	display:none;
	width:256px;
	height:200px;
	border:2px solid #ffb700;
	padding:10px;
	text-align:center;
	z-index:100;
	-o-border-radius:10px 10px 10px 10px;
	-icab-border-radius:10px 10px 10px 10px;
	-khtml-border-radius:10px 10px 10px 10px;
	-webkit-border-radius:10px 10px 10px 10px;
	border-radius:10px 10px 10px 10px;
	-o-box-shadow:0px 0px 3px #000;
	-icab-box-shadow:0px 0px 3px #000;
	-khtml-box-shadow:0px 0px 3px #000;
	-webkit-box-shadow:0px 0px 3px #000;
	box-shadow:0px 0px 3px #000;
}
#pop_onlyup{
	position:absolute;
	margin:-100px 0 0 -10px;
	display:none;
	width:256px;
	height:200px;
	border:2px solid #ffb700;
	padding:10px;
	text-align:center;
	z-index:100;
	-o-border-radius:10px 10px 10px 10px;
	-icab-border-radius:10px 10px 10px 10px;
	-khtml-border-radius:10px 10px 10px 10px;
	-webkit-border-radius:10px 10px 10px 10px;
	border-radius:10px 10px 10px 10px;
	-o-box-shadow:0px 0px 3px #000;
	-icab-box-shadow:0px 0px 3px #000;
	-khtml-box-shadow:0px 0px 3px #000;
	-webkit-box-shadow:0px 0px 3px #000;
	box-shadow:0px 0px 3px #000;
}
#pop_usersl{
	position:absolute;
	margin:-100px 0 0 -10px;
	display:none;
	width:256px;
	height:200px;
	border:2px solid #ffb700;
	padding:10px;
	text-align:center;
	z-index:100;
	-o-border-radius:10px 10px 10px 10px;
	-icab-border-radius:10px 10px 10px 10px;
	-khtml-border-radius:10px 10px 10px 10px;
	-webkit-border-radius:10px 10px 10px 10px;
	border-radius:10px 10px 10px 10px;
	-o-box-shadow:0px 0px 3px #000;
	-icab-box-shadow:0px 0px 3px #000;
	-khtml-box-shadow:0px 0px 3px #000;
	-webkit-box-shadow:0px 0px 3px #000;
	box-shadow:0px 0px 3px #000;
}
.big_g_karte{
	width:120px;
	height:160px;
	margin:20px 0 0 0;
	background-image:url(../gelbe_karte.png);
	float:left;
}
#x264_uspr_what_see_rest{
	display:none;
}
#peer2peer{
	background-image:url(../peer2peer.png);
	position:absolute;
	width:473px;
	height:160px;
	margin:100px 0 0 220px;
}
.stl_to{
	width:908px;
	height:22px;
	line-height:22px;
	padding:0 0 0 10px;
	border:1px solid #404040;
	-o-border-radius:5px 5px 5px 5px;
	-icab-border-radius:5px 5px 5px 5px;
	-khtml-border-radius:5px 5px 5px 5px;
	-webkit-border-radius:5px 5px 5px 5px;
	border-radius:5px 5px 5px 5px;
	-o-box-shadow:0px 0px 5px #000;
	-icab-box-shadow:0px 0px 5px #000;
	-khtml-box-shadow:0px 0px 5px #000;
	-webkit-box-shadow:0px 0px 5px #000;
	box-shadow:0px 0px 5px #000;
	margin:5px 0 0 0;
	font-weight:bold;
	font-size:13px;
}
.stl_erg{
	width:912px;
	height:20px;
	line-height:20px;
	margin:3px 0 0 0;
	padding:0 0 0 5px;
	border:1px solid #404040;
}
.didp_wrap{
	padding:5px;
	border:1px solid #404040;
	-o-border-radius:5px 5px 5px 5px;
	-icab-border-radius:5px 5px 5px 5px;
	-khtml-border-radius:5px 5px 5px 5px;
	-webkit-border-radius:5px 5px 5px 5px;
	border-radius:5px 5px 5px 5px;
	-o-box-shadow:0px 0px 5px #000;
	-icab-box-shadow:0px 0px 5px #000;
	-khtml-box-shadow:0px 0px 5px #000;
	-webkit-box-shadow:0px 0px 5px #000;
	box-shadow:0px 0px 5px #000;
	width:900px;
	margin:0 0 8px 0;
}
.didp_days{
	height:10px;
	border:1px solid #404040;
	float:left;
}
.didp_ratio{
	height:10px;
	width:898px;
	-o-border-radius:5px 5px 5px 5px;
	-icab-border-radius:5px 5px 5px 5px;
	-khtml-border-radius:5px 5px 5px 5px;
	-webkit-border-radius:5px 5px 5px 5px;
	border-radius:5px 5px 5px 5px;
	-o-box-shadow:inset 0px 0px 3px #000;
	-icab-box-shadow:inset 0px 0px 3px #000;
	-khtml-box-shadow:inset 0px 0px 3px #000;
	-webkit-box-shadow:inset 0px 0px 3px #000;
	box-shadow:inset 0px 0px 3px #000;
	border:1px solid #404040;
}
.didp_in_ra{
	height:10px;
	-o-border-radius:5px 5px 5px 5px;
	-icab-border-radius:5px 5px 5px 5px;
	-khtml-border-radius:5px 5px 5px 5px;
	-webkit-border-radius:5px 5px 5px 5px;
	border-radius:5px 5px 5px 5px;
	-o-box-shadow:inset 0px 0px 3px #000;
	-icab-box-shadow:inset 0px 0px 3px #000;
	-khtml-box-shadow:inset 0px 0px 3px #000;
	-webkit-box-shadow:inset 0px 0px 3px #000;
	box-shadow:inset 0px 0px 3px #000;
	background-image:url(../energy-pflicht.jpg;
}
.didp_warn_ab{
	position:absolute;
	width:240px;
	text-align:right;
	color:yellow;
	font-weight:bold;
	text-decoration:blink;
	margin:0 0 0 660px;
}




#loader {
    bottom: 0;
    height: 175px;
    left: 0;
    margin: auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 175px;
}
#loader {
    bottom: 0;
    height: 175px;
    left: 0;
    margin: auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 175px;
}
#loader .dot {
    bottom: 0;
    height: 100%;
    left: 0;
    margin: auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 87.5px;
}
#loader .dot::before {
    border-radius: 100%;
    content: "";
    height: 87.5px;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform: scale(0);
    width: 87.5px;
}
#loader .dot:nth-child(7n+1) {
    transform: rotate(45deg);
}
#loader .dot:nth-child(7n+1)::before {
    animation: 0.8s linear 0.1s normal none infinite running load;
    background: #00ff80 none repeat scroll 0 0;
}
#loader .dot:nth-child(7n+2) {
    transform: rotate(90deg);
}
#loader .dot:nth-child(7n+2)::before {
    animation: 0.8s linear 0.2s normal none infinite running load;
    background: #00ffea none repeat scroll 0 0;
}
#loader .dot:nth-child(7n+3) {
    transform: rotate(135deg);
}
#loader .dot:nth-child(7n+3)::before {
    animation: 0.8s linear 0.3s normal none infinite running load;
    background: #00aaff none repeat scroll 0 0;
}
#loader .dot:nth-child(7n+4) {
    transform: rotate(180deg);
}
#loader .dot:nth-child(7n+4)::before {
    animation: 0.8s linear 0.4s normal none infinite running load;
    background: #0040ff none repeat scroll 0 0;
}
#loader .dot:nth-child(7n+5) {
    transform: rotate(225deg);
}
#loader .dot:nth-child(7n+5)::before {
    animation: 0.8s linear 0.5s normal none infinite running load;
    background: #2a00ff none repeat scroll 0 0;
}
#loader .dot:nth-child(7n+6) {
    transform: rotate(270deg);
}
#loader .dot:nth-child(7n+6)::before {
    animation: 0.8s linear 0.6s normal none infinite running load;
    background: #9500ff none repeat scroll 0 0;
}
#loader .dot:nth-child(7n+7) {
    transform: rotate(315deg);
}
#loader .dot:nth-child(7n+7)::before {
    animation: 0.8s linear 0.7s normal none infinite running load;
    background: magenta none repeat scroll 0 0;
}
#loader .dot:nth-child(7n+8) {
    transform: rotate(360deg);
}
#loader .dot:nth-child(7n+8)::before {
    animation: 0.8s linear 0.8s normal none infinite running load;
    background: #ff0095 none repeat scroll 0 0;
}
#loader .lading {
    background-image: url("../images/loading.gif");
    background-position: 50% 50%;
    background-repeat: no-repeat;
    bottom: -40px;
    height: 20px;
    left: 0;
    position: absolute;
    right: 0;
    width: 180px;
}
@keyframes load {
100% {
    opacity: 0;
    transform: scale(1);
}
}
@keyframes load {
100% {
    opacity: 0;
    transform: scale(1);
}
}

#img_no{
	width:500px;
	text-align:center;
	margin:auto;
	padding:150px 0 200px 0;
	font-size:15px;
	font-weight:bold;
}
#img_form{
	display:none;
	position:absolute;
	width:702px;
	height:125px;
	margin:10px 0 0 105px;
	background-color:rgba(20,20,20,1);
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	z-index:100;
}
#img_info_pop{
	display:none;
	position:absolute;
	width:682px;
	height:105px;
	margin:10px 0 0 105px;
	padding:10px;
	background-color:rgba(20,20,20,1);
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	z-index:100;
}
#img_info{
	width:654px;
	height:22px;
	line-height:22px;
	float:left;
	margin:10px 0 5px 20px;
	padding:0 0 0 10px;
	background-color:rgba(20,20,20,1);
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}

#img_big_wrap{
	width:25%;
	height:60%;	
	padding-bottom:14px;
	margin-top:10px;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}

.img_big_wrap{
	width:913px;
	height:386px;
	padding-bottom:14px;
	margin-top:10px;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}
.img_wrap{
	width:165px;
	height:165px;
	float:left;
	margin:14px 0 0 14px;
	text-align:center;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}
#img_upload{
	float:right;
	width:110px;
	margin:2px 0 0 0;
	text-align:right;
}
#img_info_but{
	float:left;
	width:180px;
	margin:2px 0 0 0;
	text-align:left;
}
#img_size_view_w{	
	width:920px;
	margin:50px 0 0 2px;
}
#img_size_view_ww{
	width:302px;
	height:17px;
	float:left;
	padding:2px 0 0 2px;
	background-color:rgba(20,20,20,1);
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}
#img_size_view{
	background-image:url(../loadbarbg.png);
	width:300px;
	height:15px;	
	background-color:rgba(20,20,20,1);
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}
#img_size_view_b{
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
}
.img_but_wrap{
	position:absolute;
	width:60px;
	height:20px;
	margin:2px 0 0 2px;
	background-color:rgba(20,20,20,1);
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}
.img_info_bottom{
	width:161px;
	height:15px;
	position:absolute;
	margin:142px 0 0 -1px;
	line-height:13px;
	text-align:center;
	font-size:10px;
	padding-left:4px;
	cursor:help;
	background-color:rgba(20,20,20,1);
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
}
.img_del_but{
	background-image:url(../del_16.png);
	width:16px;
	height:16px;
	float:left;
	display:block;
	margin:2px 0 0 2px;
}
.img_edit_but{
	background-image:url(../edit_16.png);
	width:16px;
	height:16px;
	display:block;
	float:left;
	margin:2px 0 0 2px;
}
.img_info_but{
	background-image:url(../img-info.png);
	width:16px;
	height:16px;
	display:block;
	float:left;
	margin:2px 0 0 2px;
}
#img_big_picture{
	display:none;
	position:fixed;
	width:680px;
	height:545px;
	padding:20px;
	margin:-50px 0 0 130px;
	background-color:rgba(20,20,20,1);
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	z-index:3000;
}
#img_big_pic_a{
	width:200px;
	height:200px;
	text-align:center;
	float:left;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}
#img_big_pic_b{
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}
#img_big_pic_edit{
	position:absolute;
	margin:22px 0 0 90px;
	width:400px;
	height:400px;
	text-align:center;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}
#trans_flip{
	background-image:url(../flip-horizontal.png);
	width:48px;
	height:48px;
	display:block;
	position:absolute;
	margin:25px 0 0 10px;
}
#trans_flop{
	background-image:url(../flip-vertical.png);
	width:48px;
	height:48px;
	display:block;
	position:absolute;
	margin:125px 0 0 10px;
}
#trans_gray{
	background-image:url(../trans-color-icon.png);
	width:48px;
	height:48px;
	display:block;
	position:absolute;
	margin:250px 0 0 10px;
}

#trans_gray_b{
	background-image:url(../trans-color-back-icon.png);
	width:48px;
	height:48px;
	display:block;
	position:absolute;
	margin:375px 0 0 10px;
}

#trans_save{
	background-image:url(../save-mail.png);
	width:48px;
	height:48px;
	display:block;
	position:absolute;
	margin:375px 0 0 520px;
}
#trans_save_kopie{
	background-image:url(../save-kopie.png);
	width:48px;
	height:48px;
	display:block;
	position:absolute;
	margin:250px 0 0 520px;
}
#trans_save_info{
	position:absolute;
	margin:435px 0 0 90px;
	font-weight:bold;
	color:green;
}
#trans_save_info_a{
	position:absolute;
	margin:435px 0 0 90px;
	font-weight:bold;
	color:green;
}
#trans_save_info_b{
	position:absolute;
	margin:435px 0 0 90px;
	font-weight:bold;
	color:red;
}
#trans_loader{
	background-image:url(../ajax-loader.gif );
	width:126px;
	height:22px;
	position:absolute;
	margin:200px 0 0 230px;
}

a.x264_tfiles_tps {
  position: relative;
  display: inline;
}
a.x264_tfiles_tps span {
  position: absolute;
  width:140px;
  color: #FFFFFF;
  text-shadow: 1px 1px 1px #800000;
  background: #000000;
  border: 2px solid #424242;
  height: 35px;
  line-height: 35px;
  text-align: center;
  visibility: hidden;
  border-radius: 9px;
  box-shadow: 1px 1px 1px #800000;
}
a.x264_tfiles_tps span:before {
  content: '';
  position: absolute;
  top: 50%;
  left: 100%;
  margin-top: -12px;
  width: 0; height: 0;
  border-left: 12px solid #424242;
  border-top: 12px solid transparent;
  border-bottom: 12px solid transparent;
}
a.x264_tfiles_tps span:after {
  content: '';
  position: absolute;
  top: 50%;
  left: 100%;
  margin-top: -8px;
  width: 0; height: 0;
  border-left: 8px solid #000000;
  border-top: 8px solid transparent;
  border-bottom: 8px solid transparent;
}
a:hover.x264_tfiles_tps span {
  visibility: visible;
  opacity: 0.8;
  right: 100%;
  top: 50%;
  margin-top: -17.5px;
  margin-right: 15px;
  z-index: 999;
}

.x264_tfiles_tname {
	border:1px inset 0 0 6px rgba(19, 19, 19, 1);
	background-color: rgba(20,20,20,1);
	text-align:center;
	margin-left: auto;
	margin-right: auto;
	padding:10px;
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	border:none 5px #49c1f4;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
	border-bottom-left-radius: 15px;
	border-bottom-right-radius: 15px;
	border-top: 1px solid #000;
	border-left: 1px solid #000;
	border-right: 1px solid #000;
	border-bottom: 1px solid #000;
	-webkit-transition: opacity 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
	-moz-transition: opacity 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
	-o-transition: opacity 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
	transition: opacity 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
}

#gesamt {
	width: 910px;
	margin:auto;
}
#anzeigelinks{
	width: 90px;
	margin-top:10px;
	float:left;
}

.in_em_info{
	width:275px;
	margin:2px 0 0 95px;
	float:left;	
}
.in_em_info_name{
	font-size:14px;
	font-weight:bold;
	margin:3px 0 0 0;
	text-align:left;
}
.in_em_info_name_b{
	font-size:12px;
	font-weight:bold;
	margin:3px 0 0 0;
	text-align:left;
}
.in_em_info_cat{
	position:absolute;
	margin:7px 0 0 5px;
}
.in_em_info_name_b span{
    display:block;
	width:100px;
	float:left;
}
.splitter {
        line-height: 24px;
        text-align: center;
    }

  ul#maintab li {text-decoration: underline;
    list-style: none;
    display: inline;
  }

  ul#maintab a, ul#maintab span {
    text-decoration: none;
	font-weight: bold;
  }

  ul#maintab div {
     clear: left;
  }


title {
  content: attr(title);
  padding: 4px 8px;
  color: #333;
  position: absolute;
  left: 0;
  top: 100%;
  z-index: 20;
  white-space: nowrap;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  -moz-box-shadow: 0px 0px 4px #222;
  -webkit-box-shadow: 0px 0px 4px #222;
  box-shadow: 0px 0px 4px #222;
  background-image: -moz-linear-gradient(top, #eeeeee, #cccccc);
  background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #eeeeee),color-stop(1, #cccccc));
  background-image: -webkit-linear-gradient(top, #eeeeee, #cccccc);
  background-image: -moz-linear-gradient(top, #eeeeee, #cccccc);
  background-image: -ms-linear-gradient(top, #eeeeee, #cccccc);
  background-image: -o-linear-gradient(top, #eeeeee, #cccccc);
}

.stepcarousel{
position: relative; /*leave this value alone*/
overflow: scroll; /*leave this value alone*/
width: 878px; /*Width of Carousel Viewer itself*/
height: 185px; /*Height should enough to fit largest content's height*/
	margin-left: auto;
	margin-right: auto;
}

.stepcarousel .belt{
position: absolute; /*leave this value alone*/
	margin-left: auto;
	margin-right: auto;
}

.stepcarousel .panel{
	margin-left: auto;
	margin-right: auto;
overflow: hidden; /*clip content that go outside dimensions of holding panel DIV*/
margin: 10px; /*margin around each panel*/
width: 135px; /*Width of each panel holding each content. If removed, widths should be individually defined on each content DIV then. */
}  

#mygallery {
	margin-left: auto;
	margin-right: auto;
	overflow: hidden;
}

#x264_ajax_tfiles_info_but {
	border:1px inset 0 0 6px rgba(19, 19, 19, 1);
	background-color: rgba(20,20,20,1);
	text-align:center;
	margin-left: auto;
	margin-right: auto;
	padding:10px;
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	border:none 5px #49c1f4;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
	border-bottom-left-radius: 15px;
	border-bottom-right-radius: 15px;
	border-top: 1px solid #000;
	border-left: 1px solid #000;
	border-right: 1px solid #000;
	border-bottom: 1px solid #000;
}

.to_ajax_tfiles_link {
	position:absolute;
	width: 100px;
	height: 135px;
	top: 5px;
	border:1px inset 0 0 6px rgba(19, 19, 19, 1);
	background-color: rgba(20,20,20,1);
	text-align:center;
	margin-left: auto;
	margin-right: auto;
	padding:10px;
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	border:none 5px #49c1f4;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
	border-bottom-left-radius: 15px;
	border-bottom-right-radius: 15px;
	border-top: 1px solid #000;
	border-left: 1px solid #000;
	border-right: 1px solid #000;
	border-bottom: 1px solid #000;
}

#x264_ajax_tfiles_info_pop{
	display:none;
	position:absolute;
	top: 25px;
	width:282px;
	height:240px;
	margin:10px 0 0 105px;
	padding:10px;
	background-color:rgba(20,20,20,1);
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	z-index:100;
}

.x264_wrapper_ajax_tfiles{
	height:170px;

	text-align:left;
	margin:auto;

	z-index: 1;
}

.x264_ajax_buttom {
	width: 200px;
	background-color: rgb(19,19,19);
	display: block;
	color: #ccc;
	font-weight: bold;
	text-decoration: none;
	text-align: center;
	margin: 0 auto 8px auto;
	border: inherit 6px #000000;
	-moz-border-radius-topleft: 0px;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-bottomleft: 0px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-top-left-radius: 0px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-bottom-left-radius: 0px;
	-webkit-border-bottom-right-radius: 5px;
	border-top-left-radius: 0px;
	border-top-right-radius: 5px;
	border-bottom-left-radius: 0px;
	border-bottom-right-radius: 5px;
	-moz-box-shadow: 0px 1px 9px #000000;
	-webkit-box-shadow: 0px 1px 9px #000000;
	box-shadow: 0px 1px 9px #000000;
}

.x264_ajax_tfiles_inp{
	width:440px;
	background-color: rgb(19,19,19);
	display:block;
	color:#ccc;
	font-weight:bold;
	text-decoration: none;
	text-align:center;
	margin:0 auto 8px auto;
    border:inherit 6px #000000;
    -moz-border-radius-topleft: 0px;
    -moz-border-radius-topright:5px;
    -moz-border-radius-bottomleft:0px;
    -moz-border-radius-bottomright:5px;
    -webkit-border-top-left-radius:0px;
    -webkit-border-top-right-radius:5px;
    -webkit-border-bottom-left-radius:0px;
    -webkit-border-bottom-right-radius:5px;
    border-top-left-radius:0px;
    border-top-right-radius:5px;
    border-bottom-left-radius:0px;
    border-bottom-right-radius:5px;
    -moz-box-shadow: 0px 1px 9px #000000;
    -webkit-box-shadow: 0px 1px 9px #000000;
    box-shadow: 0px 1px 9px #000000;	
}

.x264_ajax_tfiles_br{
	height:15px;
}

#aktuell_overall{
	position:fixed;
	margin:195px 0 0 32px;
}
.to_img_link{
	width:88px;
	height:89px;
	margin-left: auto;
	margin-right: auto;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
}
/*Button oben mit slide nach unten und etwas nach au�en*/
ul.top-ul, ul.top-ul ul {padding:0; margin:0; list-style:none; width:100px; font-family:arial, sans-serif;
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}
/*Button oben*/
ul.top-ul{width:0px; height:0px; position:relative; z-index:100;}
/*Button oben*/
ul.top-ul li.top-li {width:0px; height:0px; float:left; position:relative;}
ul.top-ul li.top-li a.top-a {
	display:block; 
	position:absolute; 
	margin:36px 0 0 -25px; 
	text-decoration:none;
	background-image:url(../images/new_ups.png);
	display:block;
	width:24px;
	height:105px;
}
/*breite ohne inhalt*/
ul.top-ul li.top-li div.drop {height:0; overflow:hidden; left:-1px; top:20px; width:970px; position:absolute; z-index:500;
-o-transition: height 1s ease-in-out;
-moz-transition: height 1s ease-in-out;
-webkit-transition: height 1s ease-in-out;
}

/*hintergrund von oben nach unten*/
ul.top-ul li.top-li div.drop em {
	display:block; width:960px; margin-left:3px;height:210px; opacity:0.9;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;

}

/*men� slider nach unten top:-1000px; = geschwindigkeit von oben border:1px dotted blue;*/
ul.top-ul li.top-li div.drop ul.drop-ul {
	position:absolute;
	left:15px; 
	top:-120px;
	margin-top:10px;
	border:1px inset 0 0 6px rgba(0,0,0,0.8); 
	padding-bottom:10px;
-o-transition: 1s ease-in-out;
-moz-transition: 1s ease-in-out;
-webkit-transition: all 1s ease-in-out;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
}

/* men� wo canon steht*/
ul.top-ul li.top-li div.drop ul.drop-ul li.drop-li {
	position:relative; width:100px; height:100px; float:left; z-index:100;}
/* men� wo canon steht der link noch nicht zu sehen*/
ul.top-ul li.top-li div.drop ul.drop-ul li.drop-li a.drop-a {
	display:block; width:100px; float:left; text-decoration:none; line-height:16px;}
/* men� wo canon steht das bild noch nicht zu sehen*/
ul.top-ul li.top-li div.drop ul.drop-ul li.drop-li a.drop-a img {
	display:block; 
	border:0; 
	position:absolute; 
	margin:20px 0 0 20px; 
	z-index:-1; 
	opacity:1;
-o-transition: 0.4s ease-in-out;
-moz-transition: 0.4s ease-in-out;
-webkit-transition: all 0.4s ease-in-out;
}
/* men� wo canon steht*/
ul.top-ul li.top-li div.drop ul.drop-ul li.drop-li a b {
	display:block; 
	width:100px;height:60px; 
	padding-top:90px; 
	text-align:center; 
	cursor:pointer; 
	font-weight:normal; 
	opacity:0; 
-o-transition: 0.4s ease-in-out;
-moz-transition: 0.4s ease-in-out;
-webkit-transition: all 0.4s ease-in-out;
}
/* men� wo canon steht*/
ul.top-ul li.top-li:hover div.drop ul.drop-ul li.drop-li:hover > a img {opacity:0.5;}
/* men� wo canon steht*/
ul.top-ul li.top-li:hover div.drop ul.drop-ul li.drop-li:hover > a b {opacity:1;}
/* men� wo canon steht*/
ul.top-ul li.top-li:hover div.drop {height:212px;} /*check*/
/* men� wo canon steht*/
ul.top-ul li.top-li:hover div.drop:hover {height:212px;} /*check*/
/* men� wo canon steht*/
ul.top-ul li.top-li:hover div.drop ul.drop-ul {top:0;}
/* border:1px dotted blue;########################################*/
ul.top-ul li.top-li div.drop ul.drop-ul div.fly {position:absolute; left:100px; top:-1px; width:0; height:113px; overflow:hidden;
-o-transition: width 1s ease-in-out;
-moz-transition: width 1s ease-in-out;
-webkit-transition: width 1s ease-in-out;
}
/* border:1px dotted blue;##############################################*/
ul.top-ul li.top-li div.drop ul.drop-ul div.fly ul.fly-ul {
	position:absolute; 
	left:-920px; 
	top:10px; 
	width:820px; 
	height:90px; 
	padding-right:10px;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
-o-transition: 1s ease-in-out;
-moz-transition: 1s ease-in-out;
-webkit-transition: all 1s ease-in-out;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
}
/* border:1px dotted blue;*/

ul.top-ul li.top-li div.drop ul.drop-ul div.fly ul.fly-ul li.fly-li {
	float:left; 
	position:relative; 
	height:90px; 
	z-index:100;
}
/* border:1px dotted blue;*/
ul.top-ul li.top-li div.drop ul.drop-ul div.fly ul.fly-ul li.fly-li a.fly-a {
	display:block; 
	width:56px; 
	height:80px;
	float:left; 
	text-decoration:none; 
	margin:5px 0 0 5px;
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
}
/* border:1px dotted blue;*/
ul.top-ul li.top-li div.drop ul.drop-ul div.fly ul.fly-ul li.fly-li a.fly-a img {
	display:block; 
	border:0; 
	position:absolute;
	z-index:-1; 
	opacity:1;
-o-transition: 0.4s ease-in-out;
-moz-transition: 0.4s ease-in-out;
-webkit-transition: all 0.4s ease-in-out;
}
/* border:1px dotted blue;*/
ul.top-ul li.top-li div.drop ul.drop-ul div.fly ul.fly-ul li.fly-li a.fly-a b {
	display:block; 
	height:65px; 
	text-align:center; 
	font-size:12px; 
	padding-top:35px; 
	opacity:0;
-o-transition: 0.4s ease-in-out;
-moz-transition: 0.4s ease-in-out;
-webkit-transition: all 0.4s ease-in-out;
}
/* border:1px dotted blue;*/
ul.top-ul li.top-li:hover div.drop ul.drop-ul li.drop-li:hover div.fly {width:915px;}
/* border:1px dotted blue;*/
ul.top-ul li.top-li:hover div.drop ul.drop-ul li.drop-li:hover div.fly ul.fly-ul {left:0;}
/* border:1px dotted blue;*/
ul.top-ul li.top-li:hover div.drop ul.drop-ul li.drop-li:hover div.fly ul.fly-ul li:hover > a img {opacity:0.5;}
/* border:1px dotted blue;*/
ul.top-ul li.top-li:hover div.drop ul.drop-ul li.drop-li:hover div.fly ul.fly-ul li:hover > a b {opacity:1;}

#in_em_1, #in_em_2, #in_em_3, #in_em_4, #in_em_5, #in_em_6, #in_em_7, #in_em_8, #in_em_9, #in_em_10, #in_em_11, #in_em_12, #in_em_13{
	display:none;
	position:absolute;
	margin:102px 0 0 102px;
	width:820px;
	height:240px;
}
.in_em_info{
	width:320px;
	height:180px;
	margin:2px 0 0 95px;
	margin-left: auto;
	margin-right: auto;	
}
.in_em_info2{
	width:320px;
	height:180px;
	margin:2px 0 0 95px;
	float:right;	
}
.in_em_info_name{
	font-size:14px;
	font-weight:bold;
	margin:3px 0 0 0;
}
.in_em_info_name_b{
	font-size:12px;
	font-weight:bold;
	margin:3px 0 0 0;
}
.in_em_info_cat{
	position:absolute;
	margin:7px 0 0 5px;
}
.in_em_info_name_b span{
    display:block;
	width:100px;
	float:left;
}
.send_fly{
	margin:15px 0 0 4px;
}

#kat_haupt_wrap, #kat_cat_wrap, #kat_cat_wrapp{
border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	padding:20px;
	width:700px;
	margin:auto;
}
#kat_set_color_wrap{
	position:absolute;
	margin:0 0 0 600px;
}
#style_hand_kat{
	position:absolute;
	width:24px;
	height:24px;
	margin:-15px 0 0 580px;
	cursor:pointer;
}
.kat_cat_pic_name{
	margin:2px 0 0 0;
	text-align:center;
	font-weight:bold;
	font-size:13px;
	color: #000000;
	line-height:16px;
	text-shadow: 1px 1px 0px #eee;
	height:16px;
}
.kat_cat_pic_name_b{
	text-align:center;
	font-size:10px;
	line-height:120px;
	text-shadow: 1px 1px 0px #000;
	height:120px;
	color:#fff;
}
.kat_er_wrap{
	margin:4px 0 0 14px;
	width:100px;
	height:40px;
	font-weight:bold;
	line-height:38px;
	float:left;
}
.back_cat_wrap{
	float:left;
}
.kat_cat_pic{
	position:absolute;
	background-image:url(../images/cat_pic.png);
	background-repeat:no-repeat;
	width:120px;
	height:185px;
	margin-left: auto;
	margin-right: auto;
}
.back_cat_pic{
	position:absolute;
	width:73px;
	height:35px;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	margin:2px 0 0 3px;
}
#back_cat_pic_change{
	position:absolute;
	width:73px;
	height:35px;
	border:1px inset 0 0 6px rgba(0,0,0,0.8);
	margin:2px 0 0 3px;
}
.kat_h_wr{
	width:100px;
	margin:10px 0 0 14px;
	float:left;
}
.kat_sort_button{
	background-image:url(../images/cat_pic.png);
	width:80px;
	height:40px;
	display:block;
	float:left;
	text-align:center;
	line-height:35px;
	margin:0 0 0 14px;
	text-shadow: 1px 1px 0px #000;
}
#popup_noch_to{
    position:absolute;
    margin:300px 0 0 200px;
	width:256px;
	height:200px;
border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
    padding:10px;
	text-align:center;
	z-index:100;
}
.cat_xxx_fil{
	width:250px;
	height:24px;
	line-height:24px;
	padding-left:10px;
	margin-top:5px;
	font-weight:bold;
border:1px inset 0 0 6px rgba(0,0,0,0.8);
	-webkit-box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
	box-shadow: 0 0 6px 2px rgba(0,0,0,0.5) inset;
}

