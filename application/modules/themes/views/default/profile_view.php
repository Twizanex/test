<style>


@import '<?php echo theme_url();?>/assets/icons/fontawesome/assets/css/font-awesome.min.css';
@import '<?php echo theme_url();?>/assets/icons/glyphicons/assets/css/glyphicons_regular.css';
@import '<?php echo theme_url();?>/assets/icons/glyphicons/assets/css/glyphicons_social.css';
@import '<?php echo theme_url();?>/assets/icons/glyphicons/assets/css/glyphicons_filetypes.css';
@import url(http://fonts.googleapis.com/css?family=Roboto:400,300,700);
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700);
@import '<?php echo theme_url();?>/assets/plugins/forms_elements_bootstrap-datepicker/css/bootstrap-datepicker.css';

@import '<?php echo theme_url();?>/assets/plugins/forms_elements_uniform/css/uniform.default.css';
/* --- LOADING [css.bootstrap.min] from assets/library/bootstrap/css/bootstrap.min.css */
/* --- LOADING [css.font-awesome.min] from assets/library/icons/fontawesome/assets/css/font-awesome.min.css */
/* --- LOADING [css.glyphicons_regular] from assets/library/icons/glyphicons/assets/css/glyphicons_regular.css */
/* --- LOADING [css.glyphicons_social] from assets/library/icons/glyphicons/assets/css/glyphicons_social.css */
/* --- LOADING [css.glyphicons_filetypes] from assets/library/icons/glyphicons/assets/css/glyphicons_filetypes.css */
/* --- LOADING [less.variables] from assets/components/core/variables.less */
/* --- LOADING [less.mixins] from assets/components/core/mixins.less */
/* --- LOADING [less.scaffolding] from assets/components/core/scaffolding.less */

a:hover {
  color: #333333;
}
a:hover,
a:hover .text-underline {
  text-decoration: none;
}
a {
  color: #4193d0;
  outline: 0 !important;
}
a.text-inverse {
  color: #424242;
  outline: 0 !important;
}
a.text-inverse:hover {
  color: #eb6a5a;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: 'Roboto', sans-serif;
  margin: 0 0 5px;
  font-weight: 700;
  color: #4d4d4d;
}
h1.glyphicons,
h2.glyphicons,
h3.glyphicons,
h4.glyphicons,
h5.glyphicons,
h6.glyphicons {
  color: #424242;
}
h1 span,
h2 span,
h3 span,
h4 span,
h5 span,
h6 span {
  color: #858585;
  font-weight: 300;
  /*padding: 0 5px;*/
  /*font-style: italic;*/
}
h4,
.h4 {
  font-size: 17px;
}
h1 span,
h2 span,
h3 span {
  font-size: 50%;
  text-transform: none;
  padding: 0;
  position: relative;
  top: -3px;
  font-weight: 300;
}
h1 {
  line-height: 40px;
  font-weight: 300;
}
h2,
h3 {
  line-height: 34px;
}
h2 {
  font-size: 26px;
}
.text-muted {
  color: #cacaca;
}
.header-line {
  margin: 20px -15px 20px -15px;
}
.thumbnail {
  margin: 0;
}
.heading-buttons h1,
.heading-buttons h2,
.heading-buttons h3,
.heading-buttons h4,
.heading-buttons h5,
.heading-buttons h6 {
  display: inline-block;
  margin: 0 10px;
}
.heading-buttons h1.glyphicons,
.heading-buttons h2.glyphicons,
.heading-buttons h3.glyphicons,
.heading-buttons h4.glyphicons,
.heading-buttons h5.glyphicons,
.heading-buttons h6.glyphicons {
  display: inline-block;
}
.heading-buttons .buttons {
  margin-top: 5px;
  margin-right: 10px;
  text-align: right;
}
.heading-buttons .btn + .btn {
  margin-left: 10px;
}
.heading-buttons > .btn-group-xs,
.heading-buttons > .btn-xs,
.heading-buttons > .dropdown {
  margin-top: 8px;
}
.heading-buttons > .btn-group-sm,
.heading-buttons > .btn-sm {
  margin-top: 4px;
}
p {
  margin: 0 0 10px;
  line-height: normal;
}
.lead {
  margin: 0 0 10px;
}
img {
  -webkit-border-radius: 5px 5px 5px 5px;
  -moz-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  padding: 1px;
  border: 1px solid #efefef;
}
.img-clean,
.img-clean:hover {
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0;
  border: none;
  padding: 0;
}
.ie .img-responsive {
  max-width: 100%;
  height: auto;
  width: auto;
}
ul.fa-ul {
  line-height: 20px;
}
ul.fa-ul .fa-li {
  top: 4px;
}
ul.icons {
  text-align: left;
  padding: 0;
}
ul.icons li {
  display: block;
  padding: 0 0 0 25px;
  line-height: 22px;
  color: #525252;
}
ul.icons li i:before {
  color: #525252;
  font-size: 17px;
  left: 0;
  top: 4px;
}
ul.list-unstyled {
  list-style: none;
  padding: 0;
  margin: 0;
}
ul.list-unstyled .list-unstyled {
  padding-left: 40px;
}
ul.friends-list li a {
  display: block;
  font-weight: 300;
  color: #424242;
  padding: 10px;
}
ul.friends-list li a.glyphicons {
  padding-left: 40px;
}
ul.friends-list li a.glyphicons i:before {
  top: 8px;
  left: 10px;
  color: #ccc;
  border: 1px solid #ccc;
  -webkit-border-radius: 20px 20px 20px 20px;
  -moz-border-radius: 20px 20px 20px 20px;
  border-radius: 20px 20px 20px 20px;
  font-size: 16px;
  padding: 2px;
}
ul.friends-list li a img {
  width: 35px;
}
ul.friends-list li:hover {
  background-color: #efefef;
}
ul.friends-list li:data-content {
  width: 100px;
}
ul.friends-list li.active {
  background-color: #efefef;
}
ul.friends-list li.active a.glyphicons i:before {
  color: #eb6a5a;
  border: 1px solid #eb6a5a;
}
input,
button,
select,
textarea {
  font-family: 'Open Sans', sans-serif;
}
pre.prettyprint {
  word-break: normal;
  word-wrap: normal;
  white-space: pre;
  background-color: #f8f8f8;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(50%, #f8f8f8), color-stop(50%, #eeeeee));
  background-image: -webkit-linear-gradient(#f8f8f8 50%, #eeeeee 50%);
  background-image: -moz-linear-gradient(#f8f8f8 50%, #eeeeee 50%);
  background-image: -o-linear-gradient(#f8f8f8 50%, #eeeeee 50%);
  background-image: linear-gradient(#f8f8f8 50%, #eeeeee 50%);
  -moz-background-size: 38px 38px;
  background-size: 38px 38px;
  border: 1px solid #ebebeb;
  display: block;
  line-height: 19px;
  margin-bottom: 10px;
  overflow: visible;
  overflow-y: hidden;
  padding: 0 0 0 4px;
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0;
}
pre.prettyprint .glyphicons {
  padding: 0 0 0 20px;
}
pre.prettyprint .glyphicons i:before {
  font-size: 17px;
  top: 1px;
}
blockquote p {
  font-size: 12px;
}
.separator {
  padding: 10px 0 3px 0;
  display: block;
}
.separator.primary {
  padding: 0;
  border-top: 2px solid #eb6a5a;
}
.separator.bottom {
  padding: 0 0 10px;
}
.separator.top {
  padding: 10px 0 0;
}
hr {
  border-top-color: #efefef;
  border-bottom: none;
  margin: 0;
}
hr.separator {
  padding: 0;
}
hr.separator.top {
  margin: 5px 0 0;
}
hr.separator.bottom {
  margin: 0 0 5px;
}
@media print {
  html,
  body {
    height: auto !important;
    min-height: none !important;
  }
  @page {
    size: auto;
    margin: 10mm 10mm 10mm 10mm;
  }
  #wrapper {
    overflow-y: hidden !important;
  }
  #content {
    margin: 0 !important;
    padding: 0 !important;
    overflow: none;
  }
  .breadcrumb,
  #tlyPageGuideWrapper,
  .filter-bar {
    display: none !important;
  }
  .table td,
  .table th {
    vertical-align: middle;
  }
  .table th {
    padding: 3px;
    text-align: center;
  }
  .table img {
    float: left;
  }
}
.map_canvas img {
  max-width: none !important;
}
.streetview {
  width: 100%;
  height: 300px;
}
.ui-dialog-vevent .dtstart {
  display: none;
}
.ui-dialog-vevent .website {
  margin: 0 0 1em;
}
h1 [class*="icon-"],
h2 [class*="icon-"],
h3 [class*="icon-"],
h4 [class*="icon-"],
h5 [class*="icon-"],
h6 [class*="icon-"] {
  font-size: 80%;
  vertical-align: middle;
  margin-top: -3px;
}
/* --- LOADING [less.helpers] from assets/components/core/helpers.less */
.scripts-async .container-fluid {
  visibility: hidden;
}
.innerLR {
  padding-left: 10px;
  padding-right: 10px;
  position: relative;
}
.innerTB {
  padding-top: 10px;
  padding-bottom: 10px;
  position: relative;
}
.innerAll {
  padding: 10px;
  position: relative;
}
.innerL {
  padding-left: 10px;
  position: relative;
}
.innerR {
  padding-right: 10px;
  position: relative;
}
.innerT {
  padding-top: 10px;
  position: relative;
}
.innerB {
  padding-bottom: 10px;
  position: relative;
}
.container-fluid {
  padding-left: 0;
  padding-right: 0;
}
.center {
  text-align: center !important;
}
.margin-none {
  margin: 0 !important;
}
.margin-top-none {
  margin-top: 0 !important;
}
.margin-bottom-none {
  margin-bottom: 0 !important;
}
.margin-left-none {
  margin-left: 0 !important;
}
.margin-right-none {
  margin-right: 0 !important;
}
.padding-none {
  padding: 0 !important;
}
.padding-top-none {
  padding-top: 0 !important;
}
.padding-bottom-none {
  padding-bottom: 0 !important;
}
.padding-left-none {
  padding-left: 0 !important;
}
.padding-right-none {
  padding-right: 0 !important;
}
.padding-none-TB {
  padding-bottom: 0 !important;
  padding-top: 0 !important;
}
.padding-none-LR {
  padding-left: 0 !important;
  padding-right: 0 !important;
}
.border-none {
  border: none !important;
}
.border-top-none {
  border-top: none !important;
}
.border-bottom-none {
  border-bottom: none !important;
}
.border-left-none {
  border-left: none !important;
}
.border-right-none {
  border-right: none !important;
}
.box-shadow-none {
  box-shadow: none !important;
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
}
.bg-container {
  background: #eaeaea !important;
}
.bg-gray {
  background: #f9f9f9 !important;
}
.bg-gray-dark {
  background: #f2f2f2 !important;
}
.bg-none {
  background: none !important;
}
.bg-white {
  background: #fff !important;
}
.bg-success {
  background: #8bbf61 !important;
  color: #fff;
}
.bg-info {
  background: #4193d0 !important;
  color: #fff;
}
.bg-info-dark {
  background: #2c79b2 !important;
}
.bg-inverse {
  background: #424242 !important;
  color: #fff;
}
.bg-inverse-faded {
  background: rgba(66, 66, 66, 0.5) !important;
}
.bg-primary {
  background: #eb6a5a !important;
  color: #fff;
}
.bg-primary-light {
  background: #fdf2f0 !important;
}
.bg-primary-light *:not(.btn) {
  border-color: #f4b0a7 !important;
}
.bg-primary-light[class*="border-"],
.bg-primary-light.box-generic {
  border-color: #faddd9 !important;
}
.bg-primary-light .caret {
  border-left-color: transparent !important;
  border-bottom-color: transparent !important;
  border-top-color: transparent !important;
  border-right-color: #f4b0a7 !important;
}
.bg-warning {
  background: #ab7a4b;
}
.bg-lightred {
  background: #E15258;
}
.bg-mustard {
  background: #D4D172;
}
.bg-purple {
  background: #9D8AC7;
}
.bg-gray-hover:hover {
  background: #f7f7f7;
}
.relativeWrap {
  position: relative;
}
.display-block {
  display: block !important;
}
.display-block-inline {
  display: inline-block !important;
}
.block {
  display: block;
}
.inline-block {
  display: inline-block;
}
.text-white {
  color: #fff;
}
.text-info {
  color: #4193d0;
}
.text-primary {
  color: #eb6a5a !important;
}
.text-success {
  color: #8bbf61;
}
.text-regular {
  color: #444 !important;
}
.text-faded {
  color: #d7d7d7 !important;
}
.text-muted-dark {
  color: #a2a2a2;
}
.text-muted-darker {
  color: #898989;
}
.text-weight-regular {
  font-weight: normal !important;
}
.text-weight-normal {
  font-weight: 400;
}
.text-condensed {
  letter-spacing: -2px;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-lowercase {
  text-transform: lowercase;
}
.text-right {
  text-align: right !important;
}
.text-center {
  text-align: center !important;
}
.text-small {
  font-size: 12px;
}
.text-larger {
  font-size: 14px;
}
.text-medium {
  font-size: 30px;
  line-height: 30px;
}
.text-large {
  font-size: 35px !important;
  line-height: 40px !important;
}
.text-xlarge {
  font-size: 50px;
  line-height: 50px;
}
.text-xxlarge {
  font-size: 70px;
  line-height: 70px;
}
.text-underline {
  text-decoration: underline;
}
.inline-block {
  display: inline-block !important;
}
.overflow-y-auto {
  position: relative;
  overflow: hidden;
  overflow-y: auto;
}
.applyNiceScroll {
  overflow-y: auto;
}
.overflow-hidden {
  position: relative;
  overflow: hidden;
}
.containerBg {
  background: #eaeaea;
}
.whiteBg {
  background: #fff;
}
.hide2 {
  display: none;
}
.border-top {
  border-top: 1px solid #efefef;
}
.border-right {
  border-right: 1px solid #efefef;
}
.border-bottom {
  border-bottom: 1px solid #efefef !important;
}
.border-left {
  border-left: 1px solid #efefef;
}
.half.innerAll {
  padding: 5px !important;
}
.half.innerLR {
  padding-left: 5px !important;
  padding-right: 5px !important;
}
.half.innerTB {
  padding-top: 5px !important;
  padding-bottom: 5px !important;
}
.half.innerT {
  padding-top: 5px !important;
}
.half.innerB {
  padding-bottom: 5px !important;
}
.half.innerL {
  padding-left: 5px !important;
}
.half.innerR {
  padding-right: 5px !important;
}
.inner-2x.innerAll {
  padding: 20px !important;
}
.inner-2x.innerTB {
  padding-top: 20px !important;
  padding-bottom: 20px !important;
}
.inner-2x.innerLR {
  padding-left: 20px !important;
  padding-right: 20px !important;
}
.inner-2x.padding-bottom-none {
  padding-bottom: 0 !important;
}
.inner-2x.padding-right-none {
  padding-right: 0 !important;
}
.overflow-hidden {
  overflow: hidden !important;
}
.overflow-x {
  overflow-x: auto;
}
.unscrollable {
  overflow: hidden !important;
}
.fixed-bottom {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
}
.height-auto {
  height: auto !important;
}
div.row,
ul.row {
  margin: 0 -5px;
}
.row-merge {
  margin: 0 !important;
}
div[class*="col-xs-"],
div[class*="col-sm-"],
div[class*="col-md-"],
div[class*="col-lg-"],
li[class*="col-xs-"],
li[class*="col-sm-"],
li[class*="col-md-"],
li[class*="col-lg-"] {
  padding: 0 5px;
}
.widget .row-merge {
  margin: 0;
}
.row-merge {
  position: relative;
}
.row-merge > [class*="col-"] {
  padding: 0;
}
.row-merge > [class*="col-"] ~ [class*="col-"] {
  position: static;
}
.row-merge > [class*="col-"] ~ [class*="col-"]:after {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 1px;
  background: #efefef;
  content: "";
}
.row-merge.border-top,
.row-merge ~ .row-merge {
  border-top: 1px solid #efefef;
}
.row-merge.border-bottom {
  border-bottom: 1px solid #efefef;
}
.row-merge .fill-column:before {
  position: absolute;
  top: 0;
  bottom: 0;
  width: inherit;
  background: #f4f4f4;
  content: "";
}
@media (min-width: 768px) and (max-width: 991px) {
  .row-merge > [class*="col-sm-12"] ~ [class*="col-sm-12"] {
    position: relative;
  }
  .row-merge > [class*="col-sm-12"] ~ [class*="col-sm-12"]:after {
    position: absolute;
    top: 0;
    bottom: auto;
    left: 0;
    right: 0;
    width: auto;
    height: 1px;
    background: #efefef;
    content: "";
  }
}
.row-icons {
  padding: 10px 0;
  margin: 0;
}
.row-icons [class*="col"] {
  margin-bottom: 10px;
  padding: 0;
}
.row-icons [class*="col"] a {
  line-height: 24px;
  display: inline-block;
  color: #1d1d1b;
}
.row-icons [class*="col"][class*="glyphicons"] {
  padding-left: 50px;
}
.row-icons [class*="col"][class*="glyphicons"] i:before {
  left: 10px;
  top: 10px;
}
.row-icons [class*="col"] i.fa {
  vertical-align: middle;
  margin: 0 10px;
}
.row-icons [class*="col"] i,
.row-icons [class*="col"] i:before {
  color: #eb6a5a;
  font-size: 24px;
}
.row-icons [class*="col"] span {
  padding-left: 5px;
}
.ui-tooltip {
  display: none !important;
}
.rounded-none {
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0;
}
.rounded-left {
  -webkit-border-radius: 5px 0px 0px 5px;
  -moz-border-radius: 5px 0px 0px 5px;
  border-radius: 5px 0px 0px 5px;
}
.rounded-right {
  -webkit-border-radius: 0px 5px 5px 0px;
  -moz-border-radius: 0px 5px 5px 0px;
  border-radius: 0px 5px 5px 0px;
}
.notebook {
  min-height: 60px;
  line-height: 30px;
  background: -webkit-linear-gradient(bottom, #f0f0f0 0%, #ffffff 5%) 0 0;
  background: -moz-linear-gradient(bottom, #f0f0f0 0%, #ffffff 5%) 0 0;
  background: linear-gradient(bottom, #f0f0f0 0%, #ffffff 5%) 0 0;
  -webkit-background-size: 100% 30px;
  -moz-background-size: 100% 30px;
  -ms-background-size: 100% 30px;
  background-size: 100% 30px;
}
.notebook ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
.notebook ul li {
  line-height: 30px;
}
.bg-success .notebook {
  background: -webkit-linear-gradient(bottom, rgba(255, 255, 255, 0.3) 0%, #8bbf61 5%) 0 0;
  background: -moz-linear-gradient(bottom, rgba(255, 255, 255, 0.3) 0%, #8bbf61 5%) 0 0;
  background: linear-gradient(bottom, rgba(255, 255, 255, 0.3) 0%, #8bbf61 5%) 0 0;
  -webkit-background-size: 100% 30px;
  -moz-background-size: 100% 30px;
  -ms-background-size: 100% 30px;
  color: #fff;
}
.bg-inverse .notebook {
  background: -webkit-linear-gradient(bottom, rgba(255, 255, 255, 0.3) 0%, #424242 5%) 0 0;
  background: -moz-linear-gradient(bottom, rgba(255, 255, 255, 0.3) 0%, #424242 5%) 0 0;
  background: linear-gradient(bottom, rgba(255, 255, 255, 0.3) 0%, #424242 5%) 0 0;
  -webkit-background-size: 100% 30px;
  -moz-background-size: 100% 30px;
  -ms-background-size: 100% 30px;
  color: #fff;
}
.bg-primary .notebook {
  background: -webkit-linear-gradient(bottom, rgba(255, 255, 255, 0.3) 0%, #eb6a5a 5%) 0 0;
  background: -moz-linear-gradient(bottom, rgba(255, 255, 255, 0.3) 0%, #eb6a5a 5%) 0 0;
  background: linear-gradient(bottom, rgba(255, 255, 255, 0.3) 0%, #eb6a5a 5%) 0 0;
  -webkit-background-size: 100% 30px;
  -moz-background-size: 100% 30px;
  -ms-background-size: 100% 30px;
  color: #fff;
}
.bg-gray .notebook {
  background: -webkit-linear-gradient(bottom, #f0f0f0 0%, #f9f9f9 5%) 0 0;
  background: -moz-linear-gradient(bottom, #f0f0f0 0%, #f9f9f9 5%) 0 0;
  background: linear-gradient(bottom, #f0f0f0 0%, #f9f9f9 5%) 0 0;
  -webkit-background-size: 100% 30px;
  -moz-background-size: 100% 30px;
  -ms-background-size: 100% 30px;
  background-size: 100% 30px;
}
/* --- LOADING [css.bootstrap-datepicker] from assets/plugins/forms_elements_bootstrap-datepicker/css/bootstrap-datepicker.css */
/* --- LOADING [less.bootstrap-datepicker] from assets/components/forms_elements_bootstrap-datepicker/bootstrap-datepicker.less */
.datepicker.datepicker-inline {
  width: 100%;
  padding: 0;
  margin: 0 0 10px;
}
.datepicker table {
  width: 100%;
}
.datepicker table tr td.active,
.datepicker table tr td.active:hover,
.datepicker table tr td.active.disabled,
.datepicker table tr td.active.disabled:hover {
  background-image: none !important;
  filter: none !important;
  background: #eb6a5a !important;
}
.datepicker table tr td span.active,
.datepicker table tr td span.active:hover,
.datepicker table tr td span.active.disabled,
.datepicker table tr td span.active.disabled:hover {
  background-image: none !important;
  filter: none !important;
  background: #eb6a5a !important;
}
.datepicker td,
.datepicker th {
  width: 35px;
  height: 30px;
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0;
}
.datepicker thead th.dow {
  background: #eb6a5a;
  color: #fff;
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0;
}
.widget .datepicker.datepicker-inline {
  margin: 0;
}
/* --- LOADING [less.wysihtml5] from assets/components/forms_editors_wysihtml5/wysihtml5.less */
.bootstrap-wysihtml5-insert-link-modal,
.bootstrap-wysihtml5-insert-image-modal {
  overflow: visible;
  z-index: 1060;
  position: absolute;
}
/* --- LOADING [css.bootstrap-wysihtml5-0.0.2] from assets/plugins/forms_editors_wysihtml5/css/bootstrap-wysihtml5-0.0.2.css */
/* --- LOADING [less.widgets] from assets/components/core/widgets.less */
.widget {
  background: #ffffff;
  margin: 0 auto 10px;
  position: relative;
  border: 1px solid #efefef;
}
.widget .tab-content {
  padding: 0;
}
.widget .widget-head {
  background: #f7f7f7;
  border-bottom: 1px solid #efefef;
  height: 35px;
  line-height: 35px;
  position: relative;
  padding: 0 10px 0 0;
  overflow: hidden;
}
.widget .widget-head.progress {
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0;
  margin: 0;
  padding: 0;
  height: 25px;
  line-height: 25px;
}
.widget .widget-head.progress .progress-bar {
  height: 25px;
  line-height: 25px;
  background: #eb6a5a;
}
.widget .widget-head > .glyphicons,
.widget .widget-head ul .glyphicons {
  height: 30px;
  width: 30px;
  padding: 0;
}
.widget .widget-head > .glyphicons i:before,
.widget .widget-head ul .glyphicons i:before {
  width: 30px;
  height: 30px;
  line-height: 23px;
  text-align: center;
  font-size: 16px;
  color: rgba(255, 255, 255, 0.5);
}
.widget .widget-head .heading {
  margin: 0;
  font-size: 14px;
  height: 35px;
  line-height: 35px;
  padding: 0 10px;
  font-weight: 700;
  float: left;
}
.widget .widget-head .heading.glyphicons {
  width: auto;
  display: block;
  padding: 0 0 0 35px;
}
.widget .widget-head .heading.glyphicons i:before {
  padding: 0;
  margin: 0;
  left: 0;
  top: 0;
  height: 35px;
  line-height: 35px;
  text-align: center;
  width: 35px;
  color: #525252;
  font-size: 16px;
  font-weight: normal;
  text-shadow: none;
}
.widget .widget-head a {
  text-shadow: none;
}
.widget .widget-head .dropdown-menu li > a:hover,
.widget .widget-head .dropdown-menu li > a:focus,
.widget .widget-head .dropdown-submenu:hover > a {
  background-color: #eb6a5a;
  background-image: -moz-linear-gradient(top, #eb6a5a, #d24343);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#eb6a5a), to(#d24343));
  background-image: -webkit-linear-gradient(top, #eb6a5a, #d24343);
  background-image: -o-linear-gradient(top, #eb6a5a, #d24343);
  background-image: linear-gradient(to bottom, #eb6a5a, #d24343);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffda4c4c', endColorstr='#ffd24343', GradientType=0);
}
.widget .details {
  font-size: 8pt;
  color: #525252;
}
.widget .widget-body {
  padding: 10px;
}
.widget .widget-body form {
  margin: 0;
}
.widget .widget-body > pre:last-child,
.widget .widget-body > p:last-child {
  margin: 0;
}
.widget .widget-body.list {
  color: #525252;
  padding: 0;
}
.widget .widget-body.list ul {
  margin: 0;
  padding: 0;
}
.widget .widget-body.list .count {
  font-size: 15pt;
  font-weight: 400;
}
.widget .widget-body.list ul {
  margin: 0;
  list-style: none;
}
.widget .widget-body.list ul li {
  padding: 0 10px;
  height: 39px;
  border-bottom: 1px solid #efefef;
  position: relative;
  line-height: 39px;
  text-align: left;
  text-shadow: 0 1px 0 #ffffff;
  clear: both;
}
.widget .widget-body.list ul li .badge {
  position: absolute;
  right: 8px;
  top: 10px;
}
.widget .widget-body.list ul li:first-child {
  border-top: none;
}
.widget .widget-body.list ul li:last-child {
  border-bottom: none;
}
.widget .widget-body.list ul li .count {
  float: right;
  color: #525252;
}
.widget .widget-body.list ul li .sparkline {
  position: relative;
  top: 5px;
  margin-left: 5px;
}
.widget .widget-body.list ul li a {
  color: #525252;
  font-weight: bold;
}
.widget .widget-body.list.products li {
  height: 60px;
  line-height: 60px;
}
.widget .widget-body.list.products .img {
  float: left;
  display: inline-block;
  text-align: center;
  background: #272729;
  margin: 6px 8px 0 0;
  cursor: pointer;
}
.widget .widget-body.list.products .title {
  line-height: normal;
  display: inline-block;
  padding: 13px 0 0;
  text-transform: uppercase;
}
.widget .widget-body.list.products .title strong {
  font-family: "Open Sans", sans-serif;
  text-transform: none;
}
.widget .widget-body.list.fluid ul li {
  height: auto;
  line-height: normal;
  padding: 10px;
}
.widget .widget-body.list.list-2 ul li {
  border-bottom: 1px solid #d8d9da;
  border-top: none;
  background: #f8f8f8;
}
.widget .widget-body.list.list-2 ul li.active {
  border-color: #dddddd;
  background: #fff;
}
.widget .widget-body.list.list-2 ul li.active i:before {
  font-weight: normal;
  background: #eb6a5a;
  color: #fff;
  text-shadow: none;
}
.widget .widget-body.list.list-2 ul li.active a {
  color: #eb6a5a;
}
.widget .widget-body.list.list-2 ul li:last-child {
  border-bottom: none;
}
.widget .widget-body.list.list-2 ul li a {
  display: block;
  color: #222;
  padding: 0 0 0 30px;
}
.widget .widget-body.list.list-2 ul li a i:before {
  color: #555;
  width: 20px;
  height: 17px;
  font-size: 14px;
  border: 1px solid #ccc;
  background: #dddddd;
  top: 9px;
  left: 0;
  text-align: center;
  vertical-align: middle;
  padding-top: 3px;
  text-shadow: 0 1px 0 #fff;
}
.widget .widget-body.list.list-2 ul li.hasSubmenu {
  height: auto;
}
.widget .widget-body.list.list-2 ul li.hasSubmenu ul {
  padding: 0 0 10px;
}
.widget .widget-body.list.list-2 ul li.hasSubmenu ul li {
  height: auto;
  line-height: normal;
  background: none;
  border: none;
  line-height: 20px;
}
.widget .widget-body.list.list-2 ul li.hasSubmenu ul li a {
  color: #333;
  padding: 0 0 0 20px;
}
.widget .widget-body.list.list-2 ul li.hasSubmenu ul li.active a {
  font-weight: bold;
}
.widget .widget-footer {
  background: #fafafa;
  height: 25px;
  line-height: 25px;
  border-top: 1px solid #ebebeb;
}
.widget .widget-footer .glyphicons {
  width: 25px;
  height: 25px;
  line-height: 25px;
  padding: 0;
  float: right;
}
.widget .widget-footer .glyphicons i:before {
  font-size: 16px;
  color: #c3c3c3;
  text-align: center;
  width: 20px;
  height: 25px;
  line-height: 25px;
  text-shadow: 0 1px 0 #ffffff;
}
.widget .widget-footer .glyphicons:hover i:before {
  color: rgba(0, 0, 0, 0.5);
}
.widget.margin-bottom-none {
  margin-bottom: 0;
}
.widget.widget-profile .widget-head {
  padding-top: 15px;
  height: auto;
  text-align: center;
  color: #fff;
  font-weight: bold;
}
.widget.widget-profile .widget-head a.pull-right {
  position: absolute;
  right: 10px;
  font-size: 18px;
  color: #f19387;
  display: inline;
}
.widget.widget-profile .widget-head a.pull-right:hover {
  color: #fff;
}
.widget.widget-profile .widget-head a {
  color: #fff;
}
.widget.widget-gray {
  background: #f5f5f5;
}
.widget.widget-gray .widget-head {
  background: #e9e9e9;
  border-color: #d1d2d3;
  box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0.6), inset -1px -1px 1px rgba(0, 0, 0, 0);
  -moz-box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0.6), inset -1px -1px 1px rgba(0, 0, 0, 0);
  -webkit-box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0.6), inset -1px -1px 1px rgba(0, 0, 0, 0);
}
.widget.widget-gray .widget-head .heading {
  color: #555555;
  text-shadow: 0 1px 0 #fff;
}
.widget.widget-gray .widget-head .heading.glyphicons i:before {
  background: none;
  color: #555;
  border-color: rgba(0, 0, 0, 0.1);
}
.widget.widget-icon {
  display: block;
  padding: 10px;
  margin-bottom: 0;
}
.widget.widget-icon i,
.widget.widget-icon span {
  color: #fff;
}
.widget.widget-icon .heading {
  color: #fff;
}
.widget.widget-icon.inverse {
  background: #424242;
}
.widget.widget-icon.primary {
  background: #eb6a5a;
}
.widget.widget-icon.success {
  background: #8bbf61;
}
.widget.widget-2:before,
.widget.widget-2:after {
  display: none;
}
.widget.widget-2 .widget-head {
  background: #e2e2e4;
  box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0.6), inset -1px -1px 1px rgba(0, 0, 0, 0);
  -moz-box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0.6), inset -1px -1px 1px rgba(0, 0, 0, 0);
  -webkit-box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0.6), inset -1px -1px 1px rgba(0, 0, 0, 0);
  height: 36px;
  line-height: 36px;
  border-color: #d1d2d3;
}
.widget.widget-2 .widget-head .heading {
  line-height: 36px;
  color: #555555;
  text-shadow: 0 1px 0 #fff;
  font-size: 12pt;
}
.widget.widget-2 .widget-head .heading i:before {
  color: #555555;
  background: none;
  border: none;
  left: 3px;
  top: 2px;
}
.widget.widget-2 .widget-body {
  border: 1px solid #d1d2d3;
  border-top: 0;
  background: #f5f5f5;
}
.widget.widget-2.primary .widget-head {
  background: #eb6a5a;
  border-color: #eb6a5a;
  box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0.6), inset -1px -1px 1px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0.6), inset -1px -1px 1px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0.6), inset -1px -1px 1px rgba(0, 0, 0, 0.1);
}
.widget.widget-2.primary .widget-head .heading {
  color: #fff;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.5);
}
.widget.widget-2.primary .widget-head .heading i:before {
  color: #fff;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.5);
}
.widget.widget-3:before,
.widget.widget-3:after {
  display: none;
}
.widget.widget-3 .widget-head {
  height: 36px;
  line-height: 36px;
}
.widget.widget-3 .widget-head .heading {
  display: block;
  text-align: center;
  float: none;
  line-height: 36px;
  height: 36px;
  text-transform: uppercase;
  font-size: 12pt;
}
.widget.widget-3 .widget-head .heading i:before {
  background: none;
  border: none;
  left: 3px;
  top: 5px;
  font-size: 20px;
  color: #45484d;
}
.widget.widget-3 .widget-head .heading .glyphicons {
  vertical-align: middle;
  width: 35px;
  height: 36px;
  padding: 0;
}
.widget.widget-3 .widget-body {
  border-bottom: 1px solid #efefef;
}
.widget.widget-3 .widget-body.large {
  font-size: 26pt;
  font-weight: bold;
  text-align: center;
  padding: 25px 0;
  vertical-align: middle;
  line-height: normal;
}
.widget.widget-3 .widget-body.large.cancellations span {
  line-height: 20px;
  text-align: left;
  font-size: 17pt;
  display: inline-block;
  text-shadow: none;
}
.widget.widget-3 .widget-body.large.cancellations span span {
  display: block;
}
.widget.widget-3 .widget-body.large.cancellations span span:first-child {
  color: #eb6a5a;
  text-transform: uppercase;
  font-size: 13pt;
}
.widget.widget-3 .widget-body.large.dashboard {
  padding: 15px 0;
}
.widget.widget-3 .widget-footer {
  background: #fafafa;
  border-top: none;
}
.widget.widget-3 .widget-footer a {
  float: none;
  color: #dddddd;
  width: auto;
  padding: 0 10px 0 30px;
  border-right: 1px solid #efefef;
  text-decoration: none;
}
.widget.widget-3 .widget-footer a i:before {
  color: #dddddd;
  left: 5px;
}
.widget.widget-3 .widget-footer a:hover {
  color: #eb6a5a;
}
.widget.widget-3 .widget-footer a:hover i:before {
  color: #eb6a5a;
}
.widget.widget-3 .widget-footer.align-center {
  text-align: center;
}
.widget.widget-3 .widget-footer.align-center a:first-child {
  border-left: 1px solid #efefef;
}
.widget.widget-3 .widget-footer.align-right {
  text-align: right;
}
.widget.widget-3 .widget-footer.align-right a:first-child {
  border-left: 1px solid #efefef;
}
.widget.widget-3 .widget-footer.align-right a:last-child {
  border-right: none;
}
.widget.widget-4 {
  border: none;
  background: none;
}
.widget.widget-4 .widget-head {
  background: none;
  padding: 10px;
  border: none;
}
.widget.widget-4 .widget-head .heading {
  color: #544f49;
  text-shadow: none;
  padding: 0;
  margin: 0;
}
.widget.widget-4 .widget-body {
  padding: 0 10px 10px;
  border: none;
}
.widget.widget-4 .widget-body.list ul li {
  padding: 0;
}
.widget.widget-heading-simple {
  border: none;
  background: none;
}
.widget.widget-heading-simple > .widget-head {
  border: none;
  background: none;
  background-image: none !important;
  filter: none !important;
  padding: 0 0 5px;
  height: 25px;
  line-height: 25px;
}
.widget.widget-heading-simple > .widget-head .heading {
  padding: 0;
  height: 25px;
  line-height: 25px;
}
.widget.widget-heading-simple > .widget-head .heading.glyphicons {
  padding: 0 0 0 25px;
}
.widget.widget-heading-simple > .widget-head .heading.glyphicons i:before {
  text-align: left;
  width: 25px;
  height: 25px;
  line-height: 25px;
}
.widget.widget-heading-simple > .widget-body {
  border: 1px solid #efefef;
}
.widget.widget-body-simple {
  -webkit-border-radius: 0 !important;
  -moz-border-radius: 0 !important;
  border-radius: 0 !important;
}
.widget.widget-body-simple > .widget-body {
  background: none;
  border: none;
  padding: 0;
  -webkit-border-radius: 0 !important;
  -moz-border-radius: 0 !important;
  border-radius: 0 !important;
}
.widget.widget-body-white > .widget-body {
  background: #ffffff;
}
.widget.widget-body-gray > .widget-body {
  background: #f4f4f4;
}
.widget.widget-body-primary > .widget-body {
  background: #eb6a5a;
}
.widget.widget-body-primary > .widget-body * {
  color: #fff;
  text-shadow: none;
}
.widget.widget-body-inverse > .widget-body {
  background: #424242;
}
.widget.widget-body-inverse > .widget-body *,
.widget.widget-body-inverse > .widget-body i:before {
  color: #fff;
  text-shadow: none;
}
.widget.widget-body-default > .widget-body {
  background: #e2e2e2;
}
.widget.widget-body-default > .widget-body *,
.widget.widget-body-default > .widget-body i:before {
  color: #fff;
  text-shadow: none;
}
.widget.widget-body-multiple {
  box-shadow: none !important;
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
}
.widget.widget-body-multiple > .widget-body {
  margin-bottom: 5px;
}
.widget.widget-body-multiple > .widget-body:last-of-type {
  margin-bottom: 0;
}
div.glyphicons {
  padding: 0 0 0 47px;
}
div.glyphicons i:before {
  color: #e2e2e2;
  font-size: 32px;
}
div.glyphicons.glyphicon-large {
  padding: 0 0 0 75px;
}
div.glyphicons.glyphicon-large i:before {
  font-size: 50px;
  left: 0;
}
div.glyphicons.glyphicon-large.group-column {
  padding: 0 0 0 85px;
}
div.glyphicons.glyphicon-large.group-column i:before {
  font-size: 45px;
  left: 12px;
}
div.glyphicons.glyphicon-xlarge {
  padding: 0 0 0 85px;
}
div.glyphicons.glyphicon-xlarge i {
  padding: 0 0 10px;
}
div.glyphicons.glyphicon-xlarge i:before {
  font-size: 70px;
}
div.glyphicons.glyphicon-top {
  padding: 0;
  text-align: center;
}
div.glyphicons.glyphicon-top i {
  display: block;
  position: relative;
  padding: 5px 0 10px;
}
div.glyphicons.glyphicon-top i:before {
  position: relative;
  left: auto;
  top: auto;
}
div.glyphicons.glyphicon-primary i:before {
  color: #eb6a5a;
}
div.glyphicons.glyphicon-regular i:before {
  color: #7c7c7c;
}
@media (max-width: 979px) and (min-width: 768px) {
  div.glyphicons.hidden-tablet-partial {
    padding: 0;
  }
}
.widget-body-primary div.glyphicons i:before {
  color: #fff;
}
.social-large {
  height: 97px;
}
.social-large a {
  display: block;
  height: 77px;
  float: left;
  padding: 10px 19px;
  color: #d5d5d5;
  background: #ffffff;
  font-weight: bold;
  text-align: center;
  border-right: 1px solid #e5e5e5;
  text-decoration: none;
}
.social-large a i {
  display: block;
  position: relative;
  padding: 0 0 8px;
}
.social-large a i:before {
  display: block;
  text-align: center;
  top: auto;
  left: auto;
  position: relative;
  font-size: 50px;
  color: #d5d5d5;
}
.social-large a.active,
.social-large a:hover {
  color: #fff;
  background: #eb6a5a;
}
.social-large a.active i:before,
.social-large a:hover i:before {
  color: #fff;
}
.social-large a:last-child {
  border: none;
}
.social-large.social-large-2 a {
  display: inline-block;
  font-weight: 400;
  float: none;
  border: none;
  background: none;
  color: #444444;
}
.social-large.social-large-2 a i:before {
  color: #444444;
}
.social-large.social-large-2 a.active,
.social-large.social-large-2 a:hover {
  color: #eb6a5a;
}
.social-large.social-large-2 a.active i:before,
.social-large.social-large-2 a:hover i:before {
  color: #eb6a5a;
}
/* --- LOADING [less.buttons] from assets/components/ui_buttons/buttons.less */
.btn {
  text-shadow: none;
  box-shadow: none !important;
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
}
.btn.active,
.btn:active {
  outline: 0;
  background-color: #fff;
}
.btn:hover.text-primary {
  background-color: #eb6a5a;
}
.btn:hover.text-primary .fa {
  color: #fff;
}
.btn-block {
  width: 100%;
  min-height: 30px;
}
.btn-group .btn + .btn:not(.btn-block) {
  margin-left: -1px;
}
.btn-default {
  background: #fff;
  border-color: #e7e7e7;
  color: #797979;
}
.btn-default.filled {
  background: #efefef;
}
.btn-default.filled i {
  color: #ccc;
}
.btn-group.open .btn-default.dropdown-toggle,
.btn-default.disabled,
.btn-default[disabled],
.btn-default:hover,
.btn-default:focus {
  background: #fafafa;
  border-color: #cecece;
}
.btn-default:active,
.btn-default.active {
  background: #e8e8e8;
  color: #797979;
  text-shadow: none;
}
.btn-default .caret {
  border-top-color: rgba(0, 0, 0, 0.5);
}
.btn-warning {
  background: #ab7a4b;
  border-color: #ab7a4b;
  color: #ffffff;
}
.btn-warning.btn-stroke {
  background: none;
  color: #ab7a4b;
}
.btn-group.open .btn-warning.dropdown-toggle,
.btn-warning.disabled,
.btn-warning[disabled],
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active {
  background: none;
  color: #ab7a4b;
}
.btn-warning.btn-stroke:hover,
.btn-warning.btn-stroke:focus,
.btn-warning.btn-stroke:active,
.btn-warning.btn-stroke.active {
  background: #ab7a4b;
  color: #fff;
}
.btn-warning .caret {
  border-top-color: rgba(255, 255, 255, 0.7);
  border-bottom-color: rgba(255, 255, 255, 0.7);
}
.btn-info {
  background: #4193d0;
  border-color: #4193d0;
  color: #ffffff;
}
.btn-info.btn-stroke {
  background: none;
  color: #4193d0;
}
.btn-group.open .btn-info.dropdown-toggle,
.btn-info.disabled,
.btn-info[disabled],
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active {
  background: none;
  color: #4193d0;
}
.btn-info.btn-stroke:hover,
.btn-info.btn-stroke:focus,
.btn-info.btn-stroke:active,
.btn-info.btn-stroke.active {
  background: #4193d0;
  color: #fff;
}
.btn-info .caret {
  border-top-color: rgba(255, 255, 255, 0.7);
  border-bottom-color: rgba(255, 255, 255, 0.7);
}
.btn-danger {
  background: #bd362f;
  border-color: #bd362f;
  color: #ffffff;
}
.btn-danger.btn-stroke {
  background: none;
  color: #bd362f;
}
.btn-group.open .btn-danger.dropdown-toggle,
.btn-danger.disabled,
.btn-danger[disabled],
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active {
  background: none;
  color: #bd362f;
}
.btn-danger.btn-stroke:hover,
.btn-danger.btn-stroke:focus,
.btn-danger.btn-stroke:active,
.btn-danger.btn-stroke.active {
  background: #bd362f;
  color: #fff;
}
.btn-danger .caret {
  border-top-color: rgba(255, 255, 255, 0.7);
  border-bottom-color: rgba(255, 255, 255, 0.7);
}
.btn-primary {
  background: #eb6a5a;
  border-color: #eb6a5a;
  color: #ffffff;
}
.btn-primary.btn-stroke {
  background: none;
  color: #eb6a5a;
}
.btn-group.open .btn-primary.dropdown-toggle,
.btn-primary.disabled,
.btn-primary[disabled],
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active {
  background: none;
  color: #eb6a5a;
  border-color: #eb6a5a;
}
.btn-primary.btn-stroke:hover,
.btn-primary.btn-stroke:focus,
.btn-primary.btn-stroke:active,
.btn-primary.btn-stroke.active {
  background: #eb6a5a;
  color: #fff;
}
.btn-primary .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}
.btn-inverse {
  background: #424242;
  border-color: #424242;
  color: #ffffff;
}
.btn-inverse.btn-stroke {
  background: none;
  color: #424242;
}
.btn-group.open .btn-inverse.dropdown-toggle,
.btn-inverse.disabled,
.btn-inverse[disabled],
.btn-inverse:hover,
.btn-inverse:focus,
.btn-inverse:active,
.btn-inverse.active {
  background: none;
  color: #424242;
}
.btn-inverse.btn-stroke:hover,
.btn-inverse.btn-stroke:focus,
.btn-inverse.btn-stroke:active,
.btn-inverse.btn-stroke.active {
  background: #424242;
  color: #fff;
}
.btn-inverse .caret {
  border-top-color: #fff;
  border-bottom-color: #fff;
}
.btn-success {
  background: #8bbf61;
  border-color: #8bbf61;
  color: #ffffff;
}
.btn-success.btn-stroke {
  background: none;
  color: #8bbf61;
}
.btn-group.open .btn-success.dropdown-toggle,
.btn-success.disabled,
.btn-success[disabled],
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active {
  background: none;
  color: #8bbf61;
}
.btn-success.btn-stroke:hover,
.btn-success.btn-stroke:focus,
.btn-success.btn-stroke:active,
.btn-success.btn-stroke.active {
  background: #8bbf61;
  color: #fff;
}
.btn-success .caret {
  border-top-color: #fff;
  border-bottom-color: #fff;
}
.btn-group .btn-primary:not(.dropdown-toggle),
.btn-group .btn-primary:not('[data-toggle*=""]') {
  margin-right: 2px;
}
.btn-group.dropup .btn {
  padding: 7px 12px;
}
.btn-group-vertical.block {
  display: block;
}
.btn-group.btn-group-block {
  display: block;
}
@media (min-width: 992px) and (max-width: 1200px) {
  .btn-group.btn-group-block .btn.col-md-12 {
    margin: 0;
  }
  .btn-group.btn-group-block .btn.col-md-12:first-of-type {
    -webkit-border-radius: 3px 3px 0 0;
    -moz-border-radius: 3px 3px 0 0;
    border-radius: 3px 3px 0 0;
  }
  .btn-group.btn-group-block .btn.col-md-12:last-of-type {
    -webkit-border-radius: 0 0 3px 3px;
    -moz-border-radius: 0 0 3px 3px;
    border-radius: 0 0 3px 3px;
  }
}
.btn-icon-stacked {
  text-align: left;
  padding: 10px 10px 10px 45px;
  position: relative;
}
.btn-icon-stacked i {
  display: block;
  position: absolute;
  left: 15px;
  top: 12px;
}
.btn-icon-stacked span {
  display: block;
  font-size: 13px;
  line-height: normal;
}
.btn-circle {
  -webkit-border-radius: 50% 50% 50% 50%;
  -moz-border-radius: 50% 50% 50% 50%;
  border-radius: 50% 50% 50% 50%;
}
.btn-circle.btn {
  padding-left: 0;
  padding-right: 0;
  width: 34px;
}
.btn-circle.btn-lg {
  width: 100px;
  height: 100px;
}
.glyphicons.standard,
.glyphicons-social.standard {
  width: 24px;
  height: 24px;
  padding: 0;
}
.glyphicons.standard i,
.glyphicons-social.standard i {
  display: block;
  height: 24px;
}
.glyphicons.standard i:before,
.glyphicons-social.standard i:before {
  color: #64625f;
  position: relative;
  top: auto;
  left: auto;
}
.glyphicons.standard:not(.disabled):hover i:before,
.glyphicons-social.standard:not(.disabled):hover i:before {
  color: #797979;
}
.glyphicons.standard.btn,
.glyphicons-social.standard.btn {
  padding: 4px;
}
.glyphicons.standard.btn.btn-small,
.glyphicons-social.standard.btn.btn-small {
  padding: 2px 5px;
  width: auto;
  height: auto;
}
.glyphicons.standard.btn.btn-small i:before,
.glyphicons-social.standard.btn.btn-small i:before {
  top: auto;
  line-height: 22px;
}
.glyphicons.btn-action,
.glyphicons-social.btn-action {
  width: 25px;
  height: 25px;
  padding: 0;
  border-width: 1px;
  border-style: solid;
  vertical-align: middle;
}
.glyphicons.btn-action i:before,
.glyphicons-social.btn-action i:before {
  font-size: 14px;
  top: 5px;
  left: 5px;
  text-shadow: 0 1px 0 #fff;
  color: #fff;
}
.glyphicons.btn-action.btn-default i:before,
.glyphicons-social.btn-action.btn-default i:before {
  color: #7c7c7c;
}
.glyphicons.btn-action.single,
.glyphicons-social.btn-action.single {
  box-shadow: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  border: none;
  /*background: none;*/
  margin-right: 10px;
}
.glyphicons.btn-icon,
.glyphicons-social.btn-icon {
  text-align: left;
  padding: 5px 7px 5px 40px;
}
.glyphicons.btn-icon i,
.glyphicons-social.btn-icon i {
  float: left;
}
.glyphicons.btn-icon i:before,
.glyphicons-social.btn-icon i:before {
  font-size: 15px;
  top: 0;
  left: 0;
  width: 33px;
  height: 23px;
  -webkit-border-radius: 3px 0px 0px 3px;
  -moz-border-radius: 3px 0px 0px 3px;
  border-radius: 3px 0px 0px 3px;
  vertical-align: middle;
  padding: 7px 0 0;
  text-align: center;
}
.glyphicons.btn-icon.right,
.glyphicons-social.btn-icon.right {
  text-align: left;
  padding: 5px 0 5px 7px;
}
.glyphicons.btn-icon.right i:before,
.glyphicons-social.btn-icon.right i:before {
  -webkit-border-radius: 0 3px 3px 0;
  -moz-border-radius: 0 3px 3px 0;
  border-radius: 0 3px 3px 0;
  right: 0;
  left: auto;
  text-align: center;
}
.glyphicons.btn-large,
.glyphicons-social.btn-large {
  padding: 10px 10px 10px 40px;
  font-weight: 700;
}
.glyphicons.btn-large i:before,
.glyphicons-social.btn-large i:before {
  top: 12px;
  left: 12px;
  font-size: 17px;
}
.glyphicons.btn-large.btn-icon i:before,
.glyphicons-social.btn-large.btn-icon i:before {
  top: 0;
  left: 0;
  height: 28px;
  padding: 12px 0 0;
}
.glyphicons.btn-small,
.glyphicons-social.btn-small {
  padding: 2px 10px 2px 35px;
}
.glyphicons.btn-small i:before,
.glyphicons-social.btn-small i:before {
  padding: 5px 0 0;
  width: 28px;
  height: 19px;
  font-size: 14px;
}
.glyphicons.btn-mini,
.glyphicons-social.btn-mini {
  padding: 1px 6px 1px 33px;
}
.glyphicons.btn-mini i:before,
.glyphicons-social.btn-mini i:before {
  padding: 5px 0 0;
  width: 26px;
  height: 17px;
  font-size: 13px;
}
.glyphicons.orange i:before,
.glyphicons-social.orange i:before {
  color: #EDB459;
}
.glyphicons.btn-default i:before,
.glyphicons-social.btn-default i:before {
  color: #9e9e9e;
  text-shadow: none;
}
.glyphicons.single,
.glyphicons-social.single {
  color: #eb6a5a;
  padding: 0 0 0 20px;
}
.glyphicons.single i:before,
.glyphicons-social.single i:before {
  font-size: 13px;
  top: 4px;
  color: #eb6a5a;
}
.glyphicons.single + .single,
.glyphicons-social.single + .single {
  margin-left: 8px;
}
.glyphicons.single.regular,
.glyphicons-social.single.regular {
  color: #525252;
}
.glyphicons.single.regular i:before,
.glyphicons-social.single.regular i:before {
  color: #525252;
}
.glyphicons.primary i:before,
.glyphicons-social.primary i:before {
  color: #eb6a5a;
}
.glyphicons.text-error,
.glyphicons-social.text-error {
  color: #eb6a5a;
}
.glyphicons.text-error i:before,
.glyphicons-social.text-error i:before {
  color: #eb6a5a;
}
.glyphicons.text-info,
.glyphicons-social.text-info {
  color: #5d92b3;
}
.glyphicons.text-info i:before,
.glyphicons-social.text-info i:before {
  color: #5d92b3;
}
.glyphicons.text-success,
.glyphicons-social.text-success {
  color: #719d46;
}
.glyphicons.text-success i:before,
.glyphicons-social.text-success i:before {
  color: #719d46;
}
/* --- LOADING [css.uniform.default] from assets/plugins/forms_elements_uniform/css/uniform.default.css */
/* --- LOADING [less.uniformjs] from assets/components/forms_elements_uniform/uniformjs.less */
.uniformjs .radio .disabled input[type="radio"],
.uniformjs .checkbox .disabled input[type="checkbox"] {
  margin-left: 0;
}
.uniformjs .radio,
.uniformjs .checkbox {
  padding-left: 0;
}
.uniformjs .radio {
  height: auto;
}
.uniformjs label.radio {
  margin-bottom: 0;
}
.uniformjs label.radio.inline {
  margin: 0;
}
.uniformjs .radio span {
  margin: 2px 0 0;
}
.uniformjs .checkbox span {
  margin: -2px 0 0;
}
/* --- LOADING [less.tables] from assets/components/tables/tables.less */
.table {
  margin: 0 0 10px;
  position: relative;
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0;
}
.table.table-white {
  background: #fff;
}
.table.table-invoice thead > tr > th,
.table.table-invoice tbody > tr > th,
.table.table-invoice tfoot > tr > th,
.table.table-invoice thead > tr > td,
.table.table-invoice tbody > tr > td,
.table.table-invoice tfoot > tr > td {
  border-top: none;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  border-top-color: #efefef;
  padding: 9px;
}
.table > thead > tr > th {
  border-bottom: 1px solid #efefef;
}
.table td.center,
.table th.center {
  text-align: center;
}
.table td.right,
.table th.right {
  text-align: right;
}
.table-condensed {
  font-size: 10pt;
}
.table-condensed th,
.table-condensed td {
  padding: 4px 10px;
}
.table-borderless th,
.table-borderless td {
  border: none;
}
.table-striped tbody tr:nth-child(odd) td,
.table-striped tbody tr:nth-child(odd) th {
  background-color: #fff;
}
.table-striped tbody tr:nth-child(even) td,
.table-striped tbody tr:nth-child(even) th {
  background-color: #f7f7f7;
}
.table-bordered {
  border-color: #efefef;
  /* Reset rounded corners
    thead:first-child tr:first-child>th:first-child,
    tbody:first-child tr:first-child>td:first-child,
    tbody:first-child tr:first-child>th:first-child,
    thead:first-child tr:first-child>th:last-child,
    tbody:first-child tr:first-child>td:last-child,
    tbody:first-child tr:first-child>th:last-child,
    thead:last-child tr:last-child>th:first-child,
    tbody:last-child tr:last-child>td:first-child,
    tbody:last-child tr:last-child>th:first-child,
    tfoot:last-child tr:last-child>td:first-child,
    tfoot:last-child tr:last-child>th:first-child {
        .rounded();
    }
    */
  -webkit-border-radius: 5px 5px 5px 5px;
  -moz-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}
.table-bordered th,
.table-bordered td {
  border-color: #efefef;
}
.table-fill td {
  background: #F8F8F8;
}
.table .progress:last-child,
.table .alert:last-child {
  margin: 0;
}
.table .shortRight {
  width: 25%;
  text-align: right;
  direction: rtl;
  text-indent: 10px;
}
.table-large-spacing td {
  padding: 20px 15px;
}
.table .thead td {
  padding: 8px;
  font-weight: bold;
}
.table-vertical-center td,
.table-vertical-center th {
  vertical-align: middle !important;
}
.table-thead-simple thead th {
  background: none;
  border-left: none;
  border-right: none;
  border-top: none;
  border-bottom: 1px solid #efefef;
  color: #525252;
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0;
  text-shadow: none;
  text-transform: none;
  box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0), inset -1px -1px 1px rgba(0, 0, 0, 0);
  -moz-box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0), inset -1px -1px 1px rgba(0, 0, 0, 0);
  -webkit-box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0), inset -1px -1px 1px rgba(0, 0, 0, 0);
}
.table-thead-simple.table-thead-border-none {
  border-top: none;
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0;
}
.table-thead-simple.table-thead-border-none thead th {
  border-bottom: none;
}
.table-thead-simple.table-thead-border-none thead:first-child tr:first-child > th:last-child,
.table-thead-simple.table-thead-border-none tbody:first-child tr:first-child > td:last-child,
.table-thead-simple.table-thead-border-none tbody:first-child tr:first-child > th:last-child {
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0;
}
.table-primary {
  border-color: #efefef;
  border-top: none;
}
.table-primary thead th {
  border-color: #eb6a5a;
  background-color: #eb6a5a;
  color: #fff;
  font-size: 14px;
}
.table-primary tbody td {
  color: #525252;
  background: #fafafa;
  border-width: 0px;
}
.table-primary tbody td.important {
  color: #eb6a5a;
  font-weight: 700;
}
.table-primary tbody td.actions {
  padding-right: 1px;
}
.table-primary.table-bordered tbody td {
  border-color: #efefef;
  border-width: 1px;
}
.table-primary tbody tr:nth-child(odd) td,
.table-primary tbody tr:nth-child(odd) th {
  background: #ffffff;
}
.table-primary tbody tr.selectable td {
  cursor: pointer;
}
.table-primary tbody tr.selected td,
.table-primary tbody tr.selectable:hover td {
  background: rgba(235, 106, 90, 0.1);
}
/* --- LOADING [less.my-account-advanced] from assets/components/admin_profile/my-account-advanced.less */
.table-projects .stats span {
  display: block;
  text-transform: uppercase;
  padding: 2px 0;
}
.table-projects .stats span.count {
  font-size: 18pt;
  font-weight: normal;
  color: #eb6a5a;
}
/* --- LOADING [less.tabs] from assets/components/ui_tabs/tabs.less */
.widget.widget-tabs {
  border-color: #efefef;
}
.widget.widget-tabs .tab-content {
  padding: 0;
}
.widget.widget-tabs > .widget-head {
  background: #ffffff;
  border-color: #efefef;
  overflow: visible;
}
.widget.widget-tabs > .widget-head ul {
  position: relative;
  overflow: visible;
  list-style: none;
  height: 35px;
  margin: 0;
  padding: 0;
  display: inline-block;
}
.widget.widget-tabs > .widget-head ul li {
  height: 35px;
  line-height: 35px;
  float: left;
  display: block;
  border-right: 1px solid #efefef;
}
.widget.widget-tabs > .widget-head ul li a {
  width: auto;
  height: 35px;
  display: block;
  padding: 0 15px;
  position: relative;
  overflow: hidden;
  color: #999;
  text-decoration: none;
  font-weight: 600;
}
.widget.widget-tabs > .widget-head ul li a i:before {
  left: 5px;
  top: 5px;
  color: #eaeaea;
}
.widget.widget-tabs > .widget-head ul li a.glyphicons {
  padding: 0 15px 0 35px;
}
.widget.widget-tabs > .widget-head ul li a .label.pull-right {
  margin-top: 9px;
}
.widget.widget-tabs > .widget-head ul li.active {
  height: 36px;
  background: #fff;
  color: #505050;
}
.widget.widget-tabs > .widget-head ul li.active a {
  color: #505050;
}
.widget.widget-tabs > .widget-head ul li.active a i:before {
  color: #505050;
}
.widget.widget-tabs > .widget-head ul li.active:first-child {
  -webkit-border-radius: 5px 0 0 0;
  -moz-border-radius: 5px 0 0 0;
  border-radius: 5px 0 0 0;
}
.widget.widget-tabs > .widget-body.large {
  padding: 25px;
}
@media (max-width: 991px) {
  .widget.widget-tabs.widget-tabs-responsive > .widget-head {
    height: auto;
    padding: 0;
  }
  .widget.widget-tabs.widget-tabs-responsive > .widget-head ul {
    display: block;
    height: auto;
  }
  .widget.widget-tabs.widget-tabs-responsive > .widget-head ul li {
    display: block;
    float: none;
    border-right: none;
    border-bottom: 1px solid #efefef;
  }
  .widget.widget-tabs.widget-tabs-responsive > .widget-head ul li:last-of-type {
    border-bottom: none;
  }
}
.widget.widget-tabs-double > .widget-head {
  height: 50px;
}
.widget.widget-tabs-double > .widget-head ul {
  height: 50px;
}
.widget.widget-tabs-double > .widget-head ul li,
.widget.widget-tabs-double > .widget-head ul li.active {
  height: 50px;
  line-height: 25px;
}
.widget.widget-tabs-double > .widget-head ul li a,
.widget.widget-tabs-double > .widget-head ul li.active a {
  height: 50px;
  padding: 5px 0 0;
}
.widget.widget-tabs-double > .widget-head ul li a span,
.widget.widget-tabs-double > .widget-head ul li.active a span {
  display: block;
  line-height: 15px;
}
.widget.widget-tabs-double > .widget-head ul li a.glyphicons,
.widget.widget-tabs-double > .widget-head ul li.active a.glyphicons {
  padding: 10px 15px 0 42px;
}
.widget.widget-tabs-double > .widget-head ul li a.glyphicons i:before,
.widget.widget-tabs-double > .widget-head ul li.active a.glyphicons i:before {
  left: 6px;
  top: 9px;
  font-size: 20px;
}
@media (max-width: 991px) {
  .widget.widget-tabs-double > .widget-head {
    height: auto;
  }
  .widget.widget-tabs-double > .widget-head ul {
    height: auto;
  }
  .widget.widget-tabs-double > .widget-head ul li {
    display: block;
    float: none;
  }
}
.widget.widget-tabs-double-2 {
  border: none;
}
.widget.widget-tabs-double-2 > .widget-head {
  border: 1px solid #efefef;
  border-bottom: none;
  height: 70px;
}
.widget.widget-tabs-double-2 > .widget-head.border-bottom {
  border-bottom: 1px solid #efefef;
}
.widget.widget-tabs-double-2 > .widget-head ul {
  height: 70px;
}
.widget.widget-tabs-double-2 > .widget-head ul li {
  height: 70px;
  line-height: 20px;
}
.widget.widget-tabs-double-2 > .widget-head ul li a {
  height: 70px;
  padding: 5px 0 0;
  text-decoration: none;
  text-align: center;
}
.widget.widget-tabs-double-2 > .widget-head ul li a span {
  display: block;
  line-height: 30px;
}
.widget.widget-tabs-double-2 > .widget-head ul li a.glyphicons {
  padding: 0 15px;
}
.widget.widget-tabs-double-2 > .widget-head ul li a.glyphicons i {
  display: block;
  height: 37px;
  padding: 13px 0 0;
  line-height: 24px;
  text-align: center;
}
.widget.widget-tabs-double-2 > .widget-head ul li a.glyphicons i:before {
  left: auto;
  top: auto;
  font-size: 24px;
  position: relative;
}
.widget.widget-tabs-double-2 > .widget-head ul li.active {
  height: 70px;
  background: #ffffff;
}
.widget.widget-tabs-double-2 > .widget-head ul li.active a {
  color: #eb6a5a;
}
.widget.widget-tabs-double-2 > .widget-head ul li.active a i:before {
  color: #eb6a5a;
}
.widget.widget-tabs-double-2 > .widget-head ul li:hover {
  background: #ffffff;
  height: 70px;
}
.widget.widget-tabs-double-2 > .widget-head ul li:hover a {
  color: #eb6a5a;
}
.widget.widget-tabs-double-2 > .widget-head ul li:hover a i:before {
  color: #eb6a5a;
}
.widget.widget-tabs-double-2 > .widget-body {
  padding: 0;
}
.widget.widget-tabs-double-2 .widget-body-regular {
  padding: 10px;
  border: 1px solid #efefef;
}
.widget.widget-tabs-double-2 .widget-body-regular p:last-child {
  margin: 0;
}
@media (max-width: 991px) {
  .widget.widget-tabs-double-2 > .widget-head {
    height: auto;
  }
  .widget.widget-tabs-double-2 > .widget-head ul {
    height: auto;
  }
  .widget.widget-tabs-double-2 > .widget-head ul li {
    display: block;
    float: none;
  }
}
.widget.widget-tabs-social-account {
  border: none;
}
.widget.widget-tabs-social-account > .widget-head {
  border-bottom: none;
  height: 70px;
}
.widget.widget-tabs-social-account > .widget-head ul {
  height: 70px;
}
.widget.widget-tabs-social-account > .widget-head ul li {
  height: 70px;
  line-height: 20px;
}
.widget.widget-tabs-social-account > .widget-head ul li:first-child.active {
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0;
}
.widget.widget-tabs-social-account > .widget-head ul li a {
  height: 70px;
  padding: 5px 0 0;
  text-decoration: none;
  text-align: center;
  font-weight: bold;
}
.widget.widget-tabs-social-account > .widget-head ul li a span {
  display: block;
  line-height: 30px;
}
.widget.widget-tabs-social-account > .widget-head ul li a.glyphicons {
  padding: 0 15px;
}
.widget.widget-tabs-social-account > .widget-head ul li a.glyphicons i {
  display: block;
  height: 37px;
  padding: 13px 0 0;
  line-height: 24px;
  text-align: center;
}
.widget.widget-tabs-social-account > .widget-head ul li a.glyphicons i:before {
  color: #ccc;
  left: auto;
  top: auto;
  font-size: 24px;
  position: relative;
}
.widget.widget-tabs-social-account > .widget-head ul li.active {
  height: 70px;
  background: #eb6a5a;
}
.widget.widget-tabs-social-account > .widget-head ul li.active a {
  color: #fff;
}
.widget.widget-tabs-social-account > .widget-head ul li.active a i:before {
  color: #fff;
}
.widget.widget-tabs-social-account > .widget-head ul li:hover {
  height: 70px;
  background: #eb6a5a;
}
.widget.widget-tabs-social-account > .widget-head ul li:hover a {
  color: #fff;
}
.widget.widget-tabs-social-account > .widget-head ul li:hover a i:before {
  color: #fff;
}
.widget.widget-tabs-social-account > .widget-body {
  padding: 0;
}
.widget.widget-tabs-social-account .widget-body-regular {
  padding: 10px;
  border: 1px solid #efefef;
}
.widget.widget-tabs-social-account .widget-body-regular p:last-child {
  margin: 0;
}
.widget.widget-tabs-vertical .widget-head {
  border: none;
  height: auto;
  padding: 0;
}
.widget.widget-tabs-vertical .widget-head ul {
  display: block;
  height: auto;
}
.widget.widget-tabs-vertical .widget-head ul li {
  float: none;
  display: block;
  border-right: none;
  border-bottom: 1px solid #efefef;
}
.widget.widget-tabs-vertical .widget-head ul li:last-child {
  border: none;
}
.widget.widget-tabs-vertical .widget-body {
  padding: 0;
}
.widget.widget-tabs-vertical .widget-body .tab-content {
  padding: 12px 15px;
}
.widget.widget-wizard-pills .widget-head {
  height: 80px;
  padding: 10px 0;
}
.widget.widget-wizard-pills .widget-head ul {
  height: 60px;
}
.widget.widget-wizard-pills .widget-head ul li {
  height: 60px;
  line-height: 60px;
  color: #525252;
  padding: 0 0 0 10px;
  border: none;
  position: relative;
}
.widget.widget-wizard-pills .widget-head ul li.status {
  height: 45px;
  padding: 15px 15px 0;
  font-weight: 700;
}
.widget.widget-wizard-pills .widget-head ul li.status span.r {
  display: block;
  line-height: 15px;
}
.widget.widget-wizard-pills .widget-head ul li a {
  height: 58px;
  line-height: 60px;
  padding: 0;
  width: 58px;
  text-align: center;
  background: #efefef;
  border: 1px solid #efefef;
  color: #c8c8c8;
  font-weight: 700;
  font-size: 16pt;
  -webkit-border-radius: 5px 5px 5px 5px;
  -moz-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  position: relative;
  z-index: 2;
}
.widget.widget-wizard-pills .widget-head ul li.active {
  height: 60px;
  background: none;
}
.widget.widget-wizard-pills .widget-head ul li.active a {
  width: 60px;
  height: 58px;
  background: #ffffff;
}
.widget.widget-wizard-pills .widget-head ul li.primary a {
  width: 60px;
  height: 58px;
  background: #eb6a5a;
  border: none;
  color: #fff;
}
.widget.widget-wizard-pills .widget-head ul li:not(:first-child):before {
  position: absolute;
  background: #efefef;
  height: 1px;
  left: 0;
  right: 0;
  top: 29px;
  display: block;
  content: "";
  z-index: 1;
}
.widget.widget-wizard-pills .widget-head ul li.no-padding {
  padding: 0;
}
@media (max-width: 991px) {
  .widget.widget-wizard-pills .widget-head ul li,
  .widget.widget-wizard-pills .widget-head ul li.active {
    padding: 10px;
    height: auto;
  }
  .widget.widget-wizard-pills .widget-head ul li a,
  .widget.widget-wizard-pills .widget-head ul li.active a {
    width: auto;
  }
  .widget.widget-wizard-pills .widget-head ul li:before,
  .widget.widget-wizard-pills .widget-head ul li.active:before {
    display: none !important;
  }
  .widget.widget-wizard-pills .widget-head ul li.active a {
    background: #eb6a5a;
    color: #fff;
  }
  .widget.widget-wizard-pills .widget-head ul li.status {
    padding: 15px;
    height: auto;
  }
}
.widget.widget-tabs-2 {
  border-bottom: 1px solid #efefef;
}
.widget.widget-tabs-2.border-bottom-none {
  border-bottom: none;
}
.widget.widget-tabs-2 > .widget-head {
  background: #fff;
  border: none;
  border-bottom: 1px solid #efefef;
  padding: 0 10px;
}
.widget.widget-tabs-2 > .widget-head ul {
  border-color: #efefef;
}
.widget.widget-tabs-2 > .widget-head ul li {
  border: none;
}
.widget.widget-tabs-2 > .widget-head ul li.active {
  background-color: #f7f7f7;
}
.widget.widget-tabs-2 > .widget-head ul li a {
  border: 1px solid #dddddd;
  border-bottom: none;
  border-right: none;
  color: #222;
  text-transform: uppercase;
  font-weight: 700;
}
.widget.widget-tabs-2 > .widget-head ul li:first-child a {
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0;
}
.widget.widget-tabs-2 > .widget-body {
  background: #fff;
  border: none;
  padding: 15px;
}
.widget.tabs-right .widget-head ul {
  float: right;
}
.widget.widget-tabs-icons-only-2 > .widget-head ul li a.glyphicons {
  width: 38px;
  padding: 0;
}
.widget.widget-tabs-icons-only-2 > .widget-head ul li a.glyphicons i {
  width: 38px;
  display: block;
  line-height: 35px;
}
.widget.widget-tabs-icons-only-2 > .widget-head ul li a.glyphicons i:before {
  width: 38px;
  text-align: center;
  left: auto;
  top: auto;
  position: relative;
  display: block;
  line-height: 35px;
  color: #cbcbcb;
}
.widget.widget-tabs-icons-only-2 > .widget-head ul li.active a.glyphicons i:before {
  color: #505050;
}
.widget.widget-tabs-icons-only .widget-body {
  padding: 0;
}
.widget.widget-tabs-icons-only .widget-body p:last-child {
  margin: 0;
}
.widget.widget-tabs-icons-only .widget-head {
  padding: 0 0 10px;
}
.widget.widget-tabs-icons-only .widget-head ul {
  display: block;
  overflow: hidden;
  position: relative;
  list-style: none;
  margin: 0;
  height: 30px;
  line-height: 30px;
  padding: 0;
}
.widget.widget-tabs-icons-only .widget-head ul li {
  color: #dadada;
  float: left;
  display: block;
  padding: 0 10px 0 0;
  font-size: 8pt;
  line-height: 30px;
}
.widget.widget-tabs-icons-only .widget-head ul li.glyphicons {
  width: 36px;
  height: 30px;
  padding: 0 3px;
  text-align: center;
  cursor: pointer;
}
.widget.widget-tabs-icons-only .widget-head ul li.glyphicons i {
  background: #e5e5e5;
  display: block;
  -webkit-border-radius: 2px 2px 2px 2px;
  -moz-border-radius: 2px 2px 2px 2px;
  border-radius: 2px 2px 2px 2px;
  height: 30px;
  position: relative;
}
.widget.widget-tabs-icons-only .widget-head ul li.glyphicons i:before {
  position: relative;
  top: 0;
  left: 0;
  color: #64625f;
  font-size: 17px;
  line-height: 30px;
}
.widget.widget-tabs-icons-only .widget-head ul li.glyphicons:hover i {
  background: #dedede;
}
.widget.widget-tabs-icons-only .widget-head ul li.glyphicons.active i {
  background: #64625f;
}
.widget.widget-tabs-icons-only .widget-head ul li.glyphicons.active i:before {
  color: #fff;
}
.widget.widget-tabs-icons-only .widget-head ul li.glyphicons:last-child {
  padding: 0;
}
@media (max-width: 991px) {
  .widget.widget-tabs-icons-only > .widget-head {
    height: auto;
  }
  .widget.widget-tabs-icons-only > .widget-head ul {
    height: auto;
    float: left !important;
  }
}
.tabsbar {
  height: 62px;
  border: 1px solid #efefef;
  position: relative;
  overflow: hidden;
  margin: 0 0 10px;
}
.tabsbar ul {
  list-style: none;
  margin: 0;
  padding: 0;
  height: 60px;
}
.tabsbar ul li {
  float: left;
  display: block;
  height: 60px;
  border-right: 1px solid #efefef;
  background: #fdfdfd;
  padding: 3px;
}
.tabsbar ul li.glyphicons a i {
  display: inline-block;
  float: left;
  width: 39px;
  height: 54px;
}
.tabsbar ul li.glyphicons a i:before {
  color: #525252;
  position: relative;
  top: auto;
  left: auto;
  line-height: 54px;
  text-align: center;
}
.tabsbar ul li a {
  display: block;
  height: 54px;
  line-height: 54px;
  background: #fdfdfd;
  padding: 0 15px;
  color: #525252;
  text-decoration: none;
}
.tabsbar ul li a.glyphicons i {
  display: inline-block;
  float: left;
  width: 39px;
  height: 54px;
}
.tabsbar ul li a.glyphicons i:before {
  color: #525252;
  position: relative;
  top: auto;
  left: auto;
  line-height: 54px;
  text-align: center;
}
.tabsbar ul li.active a {
  background: #eb6a5a;
  color: #fff;
}
.tabsbar ul li.active a i:before {
  color: #fff;
}
.tabsbar.tabsbar-2 {
  height: 39px;
}
.tabsbar.tabsbar-2 ul {
  height: 39px;
}
.tabsbar.tabsbar-2 ul li {
  height: 39px;
  padding: 0;
  background: none;
  border: none;
}
.tabsbar.tabsbar-2 ul li.glyphicons a i {
  height: 39px;
  width: 33px;
  top: 0;
}
.tabsbar.tabsbar-2 ul li.glyphicons a i:before {
  line-height: 39px;
  font-size: 20px;
}
.tabsbar.tabsbar-2 ul li a {
  height: 39px;
  line-height: 39px;
  background: none;
}
.tabsbar.tabsbar-2 ul li a i {
  vertical-align: middle;
  position: relative;
  top: -2px;
  font-size: 20px;
}
.tabsbar.tabsbar-2 ul li a.glyphicons i {
  height: 39px;
  width: 33px;
  top: 0;
}
.tabsbar.tabsbar-2 ul li a.glyphicons i:before {
  line-height: 39px;
  font-size: 20px;
}
.tabsbar.tabsbar-2 ul li.active {
  background: #eb6a5a;
}
.tabsbar.tabsbar-2 ul li.active a {
  color: #fff;
  font-weight: 600;
}
.tabsbar.tabsbar-2 ul li.active a i:before {
  color: #fff;
}
.tabsbar.tabsbar-2 ul li:not(.active):hover a {
  color: #eb6a5a;
}
.tabsbar.tabsbar-2 ul li:not(.active):hover a i:before {
  color: #eb6a5a;
}
.tabsbar.tabsbar-2.active-fill ul li.active a {
  background: #eb6a5a;
  color: #fff;
}
.tabsbar.tabsbar-2.active-fill ul li.active a i:before {
  color: #fff;
}
@media (max-width: 991px) {
  .tabsbar,
  .tabsbar.tabsbar-2 {
    height: auto;
  }
  .tabsbar ul,
  .tabsbar.tabsbar-2 ul {
    height: auto;
  }
  .tabsbar ul li,
  .tabsbar.tabsbar-2 ul li {
    display: block;
    float: none;
    border-right: none;
    border-bottom: 1px solid #efefef;
  }
  .tabsbar ul li:last-of-type,
  .tabsbar.tabsbar-2 ul li:last-of-type {
    border-bottom: none;
  }
  .tabsbar ul li:after,
  .tabsbar.tabsbar-2 ul li:after {
    display: none;
  }
}
.
.tab-content {
  overflow: visible;
  padding: 0;
}
/* --- LOADING [less.forms] from assets/components/ui_forms/forms.less */
input[type="text"]:focus,
input[type="text"]:active,
input[type="text"]:hover {
  background-color: #f7f7f7;
}
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus {
  border-color: #efefef;
  box-shadow: none !important;
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
}
select,
textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input {
  font-size: 13px;
  box-shadow: none !important;
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  -webkit-border-radius: 0 0 0 0;
  -moz-border-radius: 0 0 0 0;
  border-radius: 0 0 0 0;
  border-color: #efefef;
}
.uniformjs .radio .disabled input[type="radio"],
.uniformjs .checkbox .disabled input[type="checkbox"] {
  margin-left: 0;
}
.uniformjs .radio,
.uniformjs .checkbox {
  padding-left: 0;
}
.uniformjs .radio {
  height: auto;
}
.radio.inline + .radio.inline,
.checkbox.inline + .checkbox.inline {
  margin-left: 3px;
}
.uniformjs label.radio {
  margin-bottom: 0;
}
.uniformjs label.radio.inline {
  margin: 0;
}
.checkbox.inline {
  padding-bottom: 1px;
}
.uniformjs .radio span {
  margin: 2px 0 0;
}
.uniformjs .checkbox span {
  margin: -2px 0 0;
}
label,
input,
button,
select,
textarea {
  font-size: 13px;
}
.input-full input {
  width: 83%;
  height: 17px;
}
legend {
  line-height: normal;
  height: auto;
  font-size: 18px;
  margin: 0 0 6px;
  text-align: left;
  padding: 0;
  border: 0;
  color: #797979;
}
.strong {
  font-weight: bold;
}
input[type=text],
input[type=password],
select,
textarea {
  border-color: #efefef;
  color: #A7A7A7;
}
.control-label.center {
  text-align: center;
}
.form-actions {
  background: none;
  border: none;
  margin: 0;
}
.form-horizontal .form-actions {
  margin-top: 0;
  padding: 0;
}
.form-horizontal .control-group:last-child {
  margin: 0;
}
.input-prepend .add-on,
.input-append .add-on {
  background: #fff;
  border-color: #efefef;
}
.input-prepend .add-on i:before,
.input-append .add-on i:before {
  color: #D0D1D1;
}
.input-prepend .add-on icon,
.input-append .add-on icon {
  margin-top: 0;
}
.input-prepend .add-on.glyphicons,
.input-append .add-on.glyphicons {
  background: #fff;
}
.input-prepend .add-on.glyphicons i:before,
.input-append .add-on.glyphicons i:before {
  font-size: 14px;
  left: 7px;
  top: 7px;
  color: #D0D1D1;
}
.input-append .add-on.glyphicons i:before {
  left: 6px;
}
.input-group .input-group-addon {
  background: #fff;
  border-color: #efefef;
}
.form-control {
  border-color: #efefef;
  box-shadow: none;
}
.friends-search {
  border-bottom: 1px solid #efefef;
}
.friends-search .form-control {
  border: none;
  font-style: italic;
  color: #000;
}
.friends-search .btn {
  border: none;
  background: none;
  color: #ccc;
}
.friends-search .btn:active {
  color: #ccc;
  color: #eb6a5a;
}
</style>

<div class="row">
    <!-- Gallery , DETAILES DESCRIPTION-->
     <div class="col-md-3 ">
        <?php render_widgets('profile_menu');?>
    </div>
    <div class="col-md-9">
        <div class="detail-title"><i class="fa fa-home fa-4"></i>&nbsp;<?php echo lang_key('DBC_ALL_AGENTS');?></div>

        <div class="agent-container" id="panel">
           



           <!-- Widget -->
<div class="widget widget-tabs widget-tabs-double-2 border-bottom-none">

    <!-- Widget heading -->
    <div class="widget-head">
        <ul>
            <li class="active"><a class="glyphicons display" href="#overview" data-toggle="tab"><i></i>Overview</a></li>
            <li><a class="glyphicons edit" href="#edit-account" data-toggle="tab"><i></i>Edit account</a></li>
            <li><a class="glyphicons luggage" href="#projects" data-toggle="tab"><i></i>Projects</a></li>
        </ul>
    </div>
    <!-- // Widget heading END -->
    
    <div class="widget-body">
    
        <form class="form-horizontal">
            <div class="tab-content">
            
                <div class="tab-pane active widget-body-regular padding-none" id="overview">
                
                    <div class="innerL row row-merge">
                        <div class="col-md-3 center innerL innerTB">
                        
                            <div class="innerR innerT">
                                <!-- Profile Photo -->
                                <a href="" class="thumb"><img src="../assets/images/avatar-large.jpg" alt="Profile" class="img-responsive" /></a>
                                <div class="separator bottom"></div>
                                <!-- // Profile Photo END -->
                                
                                <!-- Social Icons -->
                                <a href="" class="glyphicons glyphicons-social standard primary facebook"><i></i></a>
                                <a href="" class="glyphicons glyphicons-social standard twitter"><i></i></a>
                                <a href="" class="glyphicons glyphicons-social standard linked_in"><i></i></a>
                                <div class="clearfix separator bottom"></div>
                                <!-- // Social Icons END -->
                                
                                <!-- Twitter Section -->
                                <h5 class="glyphicons single twitter"><i></i> Latest from Twitter</h5>
                                <section class="twitter-feed">
                                    <div class="tweet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc lorem, rutrum non porta. <span class="label label-inverse">01/11/2012</span></div>
                                </section>
                                <!-- Twitter Section END -->
                                
                            </div>
                            
                        </div>
                        <div class="col-md-9 containerBg innerTB">
                        
                            <div class="innerLR">
                                <div class="row innerTB">
                                    <div class="col-md-7">
                                    
                                        <!-- About -->
                                        <div class="widget widget-heading-simple widget-body-white margin-none">
                                            <div class="widget-head"><h4 class="heading glyphicons user"><i></i>Mr.Awesome</h4></div>
                                            <div class="widget-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas convallis porta purus, pulvinar mattis nulla tempus ut. Curabitur quis dui orci. Ut nisi dolor, dignissim a aliquet quis, vulputate id dui. Proin ultrices ultrices ligula, dictum varius turpis faucibus non. Curabitur faucibus ultrices nunc, nec aliquet leo tempor cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                        <!-- // About END -->
                                    
                                    </div>
                                    <div class="col-md-5">
                                
                                        <!-- Bio -->
                                        <div class="widget widget-heading-simple widget-body-white margin-none">
                                            <div class="widget-head"><h4 class="heading glyphicons calendar"><i></i>Bio <span>Personal information</span></h4></div>
                                            <div class="widget-body">
                                                <ul class="unstyled icons margin-none">
                                                    <li class="glyphicons birthday_cake"><i></i> <span class="label label-default">10</span> <span class="label label-default">July</span> <span class="label label-default">1986</span></li>
                                                    <li class="glyphicons tie"><i></i> Working at <a href="http://www.mosaicpro.biz">MosaicPro</a></li>
                                                    <li class="glyphicons certificate"><i></i> Adobe Photoshop Certification</li>
                                                    <li class="glyphicons microphone"><i></i> English :: French :: Italian :: Romanian :: Polish</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- // Bio END -->
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                    
                                        <!-- Latest Orders/List Widget -->
                                        <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">
                                        
                                            <!-- Widget Heading -->
                                            <div class="widget-head">
                                                <h4 class="heading glyphicons shopping_cart"><i></i>Last orders</h4>
                                                <a href="" class="details pull-right">view all</a>
                                            </div>
                                            <!-- // Widget Heading -->
                                            
                                            <div class="widget-body list products">
                                                <ul>
                                                    
                                                    <!-- List item -->
                                                    <li>
                                                        <span class="img">photo</span>
                                                        <span class="title">10 items<br/><strong>&euro;5,900.00</strong></span>
                                                        <span class="count"></span>
                                                    </li>
                                                    <!-- // List item END -->
                                                    
                                                                                                        <!-- List item -->
                                                    <li>
                                                        <span class="img">photo</span>
                                                        <span class="title">Product name<br/><strong>&euro;2,900</strong></span>
                                                        <span class="count"></span>
                                                    </li>
                                                    <!-- // List item END -->
                                                                                                        <!-- List item -->
                                                    <li>
                                                        <span class="img">photo</span>
                                                        <span class="title">Product name<br/><strong>&euro;2,900</strong></span>
                                                        <span class="count"></span>
                                                    </li>
                                                    <!-- // List item END -->
                                                                                                        
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- // Latest Orders/List Widget END -->
                                        
                                        <div class="alert alert-primary">
                                            <a class="close" data-dismiss="alert">&times;</a>
                                            <p>Integer quis tempor mi. Donec venenatis dui in neque fringilla at iaculis libero ullamcorper. In velit sem, sodales id hendrerit ac, fringilla et est. Pellentesque at justo urna, eu pharetra tortor. Aenean aliquam, tellus vel suscipit luctus.</p>
                                        </div>
                                    
                                    </div>
                                    <div class="col-md-5">
                                        
                                        <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">
            
                                            <!-- Widget Heading -->
                                            <div class="widget-head">
                                                <h4 class="heading glyphicons history"><i></i>Activity</h4>
                                                <a href="" class="details pull-right">view all</a>
                                            </div>
                                            <!-- // Widget Heading END -->
                                            
                                            <div class="widget-body list">
                                                <ul>
                                                
                                                    <!-- List item -->
                                                    <li>
                                                        <span>Sales today</span>
                                                        <span class="count">&euro;5,900</span>
                                                    </li>
                                                    <!-- // List item END -->
                                                    
                                                                                                        <!-- List item -->
                                                    <li>
                                                        <span>Some other stats</span>
                                                        <span class="count">30,095</span>
                                                    </li>
                                                    <!-- // List item END -->
                                                                                                        <!-- List item -->
                                                    <li>
                                                        <span>Some other stats</span>
                                                        <span class="count">22,320</span>
                                                    </li>
                                                    <!-- // List item END -->
                                                                                                        
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">
            
                                            <!-- Widget Heading -->
                                            <div class="widget-head">
                                                <h4 class="heading glyphicons history"><i></i>Widget</h4>
                                            </div>
                                            <!-- // Widget Heading END -->
                                            
                                            <div class="widget-body">
                                                Curabitur quis dui orci. Ut nisi dolor, dignissim a aliquet quis, vulputate id dui. Proin ultrices ultrices ligula, dictum varius turpis faucibus non. Curabitur faucibus ultrices nunc, nec aliquet leo tempor cursus.
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
                </div>
            
                <!-- Tab content -->
                <div class="tab-pane widget-body-regular containerBg" id="edit-account">
                
                    <div class="widget widget-tabs widget-tabs-vertical row row-merge margin-none widget-body-white">

                        <!-- Widget heading -->
                        <div class="widget-head col-md-3">
                            <ul>
                                <li class="active"><a class="glyphicons pencil" href="#account-details" data-toggle="tab"><i></i>Account details</a></li>
                                <li><a class="glyphicons settings" href="#account-settings" data-toggle="tab"><i></i>Account settings</a></li>
                                <li><a class="glyphicons eye_open" href="#privacy-settings" data-toggle="tab"><i></i>Privacy settings</a></li>
                            </ul>
                        </div>
                        <!-- // Widget heading END -->
                        
                        <div class="widget-body col-md-9">
                        
                            <div class="tab-content">
                            <div class="tab-pane active" id="account-details">
                        
                            <!-- Row -->
                            <div class="row">
                            
                                <!-- Column -->
                                <div class="col-md-6">
                                
                                    <!-- Group -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">First name</label>
                                        <div class="col-md-8">
                                            <input type="text" value="John" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- // Group END -->
                                    
                                    <!-- Group -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Last name</label>
                                        <div class="col-md-8">
                                            <input type="text" value="Doe" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- // Group END -->
                                    
                                    <!-- Group -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Date of birth</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <input type="text" id="datepicker1" class="form-control" value="13/06/1988" />
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // Group END -->
                                    
                                </div>
                                <!-- // Column END -->
                                
                                <!-- Column -->
                                <div class="col-md-6">
                                
                                    <!-- Group -->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Gender</label>
                                        <div class="col-md-10">
                                            <select class="form-control">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- // Group END -->
                                    
                                    <!-- Group -->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Age</label>
                                        <div class="col-md-10">
                                            <input type="text" value="25" class="form-control" />
                                        </div>
                                    </div>
                                    <!-- // Group END -->
                                    
                                </div>
                                <!-- // Column END -->
                                
                            </div>
                            <!-- // Row END -->
                            
                            <div class="separator line bottom"></div>
                            
                            <!-- Group -->
                            <div class="control-group">
                                <label class="control-label">About me</label>
                                <div class="controls-uno">
                                    <textarea id="mustHaveId" class="wysihtml5 form-control" rows="5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</textarea>
                                </div>
                            </div>
                            <!-- // Group END -->
                            
                            <!-- Form actions -->
                            <div class="separator top">
                                <button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Save changes</button>
                                <button type="button" class="btn btn-icon btn-default glyphicons circle_remove"><i></i>Cancel</button>
                            </div>
                            <!-- // Form actions END -->
                            
                            </div>
                            <div class="tab-pane" id="account-settings">
                            
                                <!-- Row -->
                                <div class="row">
                                
                                    <!-- Column -->
                                    <div class="col-md-3">
                                        <strong>Change password</strong>
                                        <p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <!-- // Column END -->
                                    
                                    <!-- Column -->
                                    <div class="col-md-9">
                                        <label for="inputUsername">Username</label>
                                        <div class="input-group">
                                            <input type="text" id="inputUsername" class="form-control" value="john.doe2012" disabled="disabled" />
                                            <span class="input-group-addon" data-toggle="tooltip" data-placement="top" data-container="body" data-original-title="Username can't be changed"><i class="fa fa-question-sign"></i></span>
                                        </div>
                                        <div class="separator"></div>
                                                
                                        <label for="inputPasswordOld">Old password</label>
                                        <div class="input-group">
                                            <input type="password" id="inputPasswordOld" class="form-control" value="" placeholder="Leave empty for no change" />
                                            <span class="input-group-addon" data-toggle="tooltip" data-placement="top" data-container="body" data-original-title="Leave empty if you don't wish to change the password"><i class="fa fa-question-sign"></i></span>
                                        </div>
                                        <div class="separator"></div>
                                        
                                        <label for="inputPasswordNew">New password</label>
                                        <input type="password" id="inputPasswordNew" class="form-control" value="" placeholder="Leave empty for no change" />
                                        <div class="separator"></div>
                                        
                                        <label for="inputPasswordNew2">Repeat new password</label>
                                        <input type="password" id="inputPasswordNew2" class="form-control" value="" placeholder="Leave empty for no change" />
                                        <div class="separator"></div>
                                    </div>
                                    <!-- // Column END -->
                                    
                                </div>
                                <!-- // Row END -->
                                
                                <div class="separator line bottom"></div>
                                
                                <!-- Row -->
                                <div class="row">
                                
                                    <!-- Column -->
                                    <div class="col-md-3">
                                        <strong>Contact details</strong>
                                        <p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <!-- // Column END -->
                                    
                                    <!-- Column -->
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="inputPhone">Phone</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                    <input type="text" id="inputPhone" class="form-control" placeholder="01234567897" />
                                                </div>
                                                <div class="separator"></div>
                                                    
                                                <label for="inputEmail">E-mail</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input type="text" id="inputEmail" class="form-control" placeholder="contact@mosaicpro.biz" />
                                                </div>
                                                <div class="separator"></div>
                                                    
                                                <label for="inputWebsite">Website</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                                    <input type="text" id="inputWebsite" class="form-control" placeholder="http://www.mosaicpro.biz" />
                                                </div>
                                                <div class="separator"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputFacebook">Facebook</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                                    <input type="text" id="inputFacebook" class="form-control" placeholder="mosaicpro" />
                                                </div>
                                                <div class="separator"></div>
                                                
                                                <label for="inputTwitter">Twitter</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                                    <input type="text" id="inputTwitter" class="form-control" placeholder="mosaicpro" />
                                                </div>
                                                <div class="separator"></div>
                                                
                                                <label for="inputSkype">Skype ID</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-skype"></i></span>
                                                    <input type="text" id="inputSkype" class="form-control" placeholder="mosaicpro" />
                                                </div>
                                                <div class="separator"></div>
                                                
                                                <label for="inputgplus">Google</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-google-plus-sign"></i></span>
                                                    <input type="text" id="inputgplus" class="form-control" placeholder="google ID" />
                                                </div>
                                                <div class="separator"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- // Column END -->
                                    
                                </div>
                                <!-- // Row END -->
                                
                                <!-- Form actions -->
                                <div class="form-actions" style="margin: 0;">
                                    <button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Save changes</button>
                                </div>
                                <!-- // Form actions END -->
                            
                            </div>
                            <div class="tab-pane" id="privacy-settings">
                                <div class="uniformjs">
                                    <label class="checkbox"><input type="checkbox" checked="checked" /> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                                    <label class="checkbox"><input type="checkbox" /> Vivamus et risus vel metus feugiat semper at sed odio.</label>
                                    <label class="checkbox"><input type="checkbox" /> Aenean bibendum faucibus tellus, et facilisis justo imperdiet vel.</label>
                                    <div class="separator top"></div>

                                    <div class="alert alert-primary">
                                        <a class="close" data-dismiss="alert">&times;</a>
                                        <p>Integer quis tempor mi. Donec venenatis dui in neque fringilla at iaculis libero ullamcorper. In velit sem, sodales id hendrerit ac, fringilla et est. Pellentesque at justo urna, eu pharetra tortor. Aenean aliquam, tellus vel suscipit luctus, risus enim ornare tellus, ac ultrices nisi enim sed magna.</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        
                        </div>
                    </div>
                    
                </div>
                <!-- // Tab content END -->
                
                <!-- Tab content -->
                <div class="tab-pane widget-body-regular" id="projects">
                
                    <div class="well">
                        <button type="button" class="btn btn-primary btn-icon glyphicons circle_plus pull-right"><i></i>Add project</button>
                        <p class="lead margin-none"><strong>1024</strong> sales this week</p>
                        <div class="clearfix"></div>
                    </div>
                    
                    <table class="table table-striped table-vertical-center table-projects table-bordered">
                        <thead>
                            <tr>
                                <th colspan="2">Project</th>
                                <th width="120" class="center"></th>
                                <th width="120" class="center"></th>
                                <th width="160" class="center"></th>
                                <th width="120" class="center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="80" class="center"><span class="thumb"><img src="http://2.s3.envato.com/files/50444644/80-avatar.jpg" alt="" /></span></td>
                                <td class="important">Smashing - Premium Admin Template</td>
                                <td class="center stats"><span>Sales today</span><span class="count">153</span></td>
                                <td class="center stats"><span>Sales total</span><span class="count">1,365</span></td>
                                <td class="center stats"><span>Earnings</span><span class="count">&dollar;25,356.00</span></td>
                                <td class="center"><button type="button" class="btn btn-default">Manage</button></td>
                            </tr>
                            <tr>
                                <td width="80" class="center"><span class="thumb"><img src="http://0.s3.envato.com/files/52347478/admin-avatar-12.jpg" alt="" /></span></td>
                                <td class="important">AdminPlus - Premium Bootstrap Admin Template</td>
                                <td class="center stats"><span>Sales today</span><span class="count">153</span></td>
                                <td class="center stats"><span>Sales total</span><span class="count">1,365</span></td>
                                <td class="center stats"><span>Earnings</span><span class="count">&dollar;25,356.00</span></td>
                                <td class="center"><button type="button" class="btn btn-default">Manage</button></td>
                            </tr>
                            <tr>
                                <td width="80" class="center"><span class="thumb"><img src="http://2.s3.envato.com/files/50868169/avatar80.jpg" alt="" /></span></td>
                                <td class="important">AIR - Responsive Bootstrap Admin Template</td>
                                <td class="center stats"><span>Sales today</span><span class="count">153</span></td>
                                <td class="center stats"><span>Sales total</span><span class="count">1,365</span></td>
                                <td class="center stats"><span>Earnings</span><span class="count">&dollar;25,356.00</span></td>
                                <td class="center"><button type="button" class="btn btn-default">Manage</button></td>
                            </tr>
                            <tr>
                                <td width="80" class="center"><span class="thumb"><img src="http://3.s3.envato.com/files/47008628/boot-admin-80_v13.jpg" alt="" /></span></td>
                                <td class="important">BootAdmin - All-In-One Admin Responsive Template</td>
                                <td class="center stats"><span>Sales today</span><span class="count">153</span></td>
                                <td class="center stats"><span>Sales total</span><span class="count">1,365</span></td>
                                <td class="center stats"><span>Earnings</span><span class="count">&dollar;25,356.00</span></td>
                                <td class="center"><button type="button" class="btn btn-default">Manage</button></td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <!-- // Tab content END -->
            </div>
        </form>
    </div>
</div>
<!-- // Widget END -->






        </div>
    </div> <!-- col-md-9 -->


    <!--DETAILS SUMMARY-->
   
</div>

          <script src="<?php echo theme_url();?>/assets/plugins/forms_editors_wysihtml5/js/wysihtml5-0.3.0_rc2.min.js"></script>
          <script src="<?php echo theme_url();?>/assets/plugins/forms_elements_bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo theme_url();?>/assets/plugins/forms_elements_bootstrap-datepicker/bootstrap-datepicker.init.js"></script>
<script src="<?php echo theme_url();?>/assets/plugins/forms_elements_uniform/js/jquery.uniform.min.js"></script>
<script src="<?php echo theme_url();?>/assets/plugins/forms_elements_uniform/uniform.init.js"></script>