/* Code tidied up by ScrapBook */
.mw-ui-button { background-color: rgb(248, 249, 250); color: rgb(32, 33, 34); display: inline-block; box-sizing: border-box; border: 1px solid rgb(162, 169, 177); border-radius: 2px; cursor: pointer; vertical-align: middle; font-family: inherit; font-size: 1em; font-weight: bold; line-height: 1.28571em; text-align: center; -moz-appearance: none; }
.mw-ui-button:not(.mw-ui-icon-element) { min-height: 32px; min-width: 4em; max-width: 28.75em; margin: 0px; padding: 5px 12px; }
.mw-ui-button:not(:disabled) { transition: background-color 100ms ease 0s, color 100ms ease 0s, border-color 100ms ease 0s, box-shadow 100ms ease 0s; }
.mw-ui-button:visited:not(:disabled) { color: rgb(32, 33, 34); }
.mw-ui-button:hover:not(:disabled) { background-color: rgb(255, 255, 255); color: rgb(64, 66, 68); border-color: rgb(162, 169, 177); }
.mw-ui-button:focus:not(:disabled) { color: rgb(32, 33, 34); border-color: rgb(51, 102, 204); box-shadow: 0px 0px 0px 1px rgb(51, 102, 204) inset, 0px 0px 0px 2px rgb(255, 255, 255) inset; outline-width: 0px; }
.mw-ui-button:focus:not(:disabled)::-moz-focus-inner { border-color: transparent; padding: 0px; }
.mw-ui-button:active:not(:disabled), .mw-ui-button.is-on:not(:disabled) { background-color: rgb(200, 204, 209); color: rgb(0, 0, 0); border-color: rgb(114, 119, 125); box-shadow: none; }
.mw-ui-button:disabled { background-color: rgb(200, 204, 209); color: rgb(255, 255, 255); border-color: rgb(200, 204, 209); cursor: default; }
.mw-ui-button.mw-ui-icon-element:not(.mw-ui-icon-with-label-desktop) { color: transparent !important; }
.mw-ui-button.mw-ui-icon-element:not(.mw-ui-icon-with-label-desktop) span { display: block; position: absolute !important; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px none; padding: 0px; overflow: hidden; }
@media all and (max-width: 1000px) {
  .mw-ui-button.mw-ui-icon-element span { display: block; position: absolute !important; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px none; padding: 0px; overflow: hidden; }
}
.mw-ui-button.mw-ui-quiet, .mw-ui-button.mw-ui-quiet.mw-ui-progressive, .mw-ui-button.mw-ui-quiet.mw-ui-destructive { background-color: transparent; color: rgb(32, 33, 34); border-color: transparent; font-weight: bold; }
.mw-ui-button.mw-ui-quiet:not(.mw-ui-icon-element), .mw-ui-button.mw-ui-quiet.mw-ui-progressive:not(.mw-ui-icon-element), .mw-ui-button.mw-ui-quiet.mw-ui-destructive:not(.mw-ui-icon-element) { min-height: 32px; }
input[type="checkbox"]:hover + .mw-ui-button.mw-ui-quiet, input[type="checkbox"]:hover + .mw-ui-button.mw-ui-quiet.mw-ui-progressive, input[type="checkbox"]:hover + .mw-ui-button.mw-ui-quiet.mw-ui-destructive, .mw-ui-button.mw-ui-quiet:hover, .mw-ui-button.mw-ui-quiet.mw-ui-progressive:hover, .mw-ui-button.mw-ui-quiet.mw-ui-destructive:hover { background-color: rgba(0, 24, 73, 0.027); color: rgb(32, 33, 34); border-color: transparent; }
input[type="checkbox"]:focus + .mw-ui-button.mw-ui-quiet, input[type="checkbox"]:focus + .mw-ui-button.mw-ui-quiet.mw-ui-progressive, input[type="checkbox"]:focus + .mw-ui-button.mw-ui-quiet.mw-ui-destructive, .mw-ui-button.mw-ui-quiet:focus, .mw-ui-button.mw-ui-quiet.mw-ui-progressive:focus, .mw-ui-button.mw-ui-quiet.mw-ui-destructive:focus { color: rgb(32, 33, 34); border-color: rgb(51, 102, 204); box-shadow: 0px 0px 0px 1px rgb(51, 102, 204) inset, 0px 0px 0px 2px rgb(255, 255, 255) inset; }
input[type="checkbox"]:active + .mw-ui-button.mw-ui-quiet, input[type="checkbox"]:active + .mw-ui-button.mw-ui-quiet.mw-ui-progressive, input[type="checkbox"]:active + .mw-ui-button.mw-ui-quiet.mw-ui-destructive, .mw-ui-button.mw-ui-quiet:active, .mw-ui-button.mw-ui-quiet.mw-ui-progressive:active, .mw-ui-button.mw-ui-quiet.mw-ui-destructive:active { background-color: rgba(0, 36, 73, 0.082); color: rgb(0, 0, 0); border-color: rgb(114, 119, 125); box-shadow: none; }
.mw-ui-button.mw-ui-quiet:disabled, .mw-ui-button.mw-ui-quiet.mw-ui-progressive:disabled, .mw-ui-button.mw-ui-quiet.mw-ui-destructive:disabled, .mw-ui-button.mw-ui-quiet:disabled:hover, .mw-ui-button.mw-ui-quiet.mw-ui-progressive:disabled:hover, .mw-ui-button.mw-ui-quiet.mw-ui-destructive:disabled:hover, .mw-ui-button.mw-ui-quiet:disabled:active, .mw-ui-button.mw-ui-quiet.mw-ui-progressive:disabled:active, .mw-ui-button.mw-ui-quiet.mw-ui-destructive:disabled:active { background-color: transparent; color: rgb(114, 119, 125); border-color: transparent; }
a.mw-ui-button { text-decoration: none; }
a.mw-ui-button:hover, a.mw-ui-button:focus { text-decoration: none; }
.mw-ui-icon { font-size: initial; position: relative; display: inline-block; box-sizing: content-box !important; width: 1.25em; height: 1.25em; min-width: 1.25em; min-height: 1.25em; flex-basis: 1.25em; vertical-align: middle; line-height: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; -moz-appearance: none; background-color: transparent; margin: 0px; padding: 0px; }
.mw-ui-icon:not(.mw-ui-button) { border: 0px none; }
.mw-ui-icon::before { content: ""; display: block; width: 100%; height: 100%; min-width: 1.25em; min-height: 1.25em; background-repeat: no-repeat; background-size: 1.25em 1.25em; background-position: center center; }
.mw-ui-icon-element { border-radius: 2px; padding: 0.75em; transition: background-color 100ms ease 0s; color: transparent; }
.mw-ui-icon-element:focus, .mw-ui-icon-element:active, .mw-ui-icon-element:visited { color: transparent; }
.mw-ui-icon-element:active { background-color: rgba(0, 0, 0, 0.03); }
@media not all {
  .mw-ui-icon-element:hover:not(.disabled) { background-color: rgba(0, 0, 0, 0.03); }
}
.mw-ui-icon-before { width: auto; max-width: 100%; }
.mw-ui-icon-before::before { display: inline-block; font-size: initial; width: auto; min-width: 1.25em; min-height: 1.25em; margin-right: 8px; vertical-align: middle; }
.mw-ui-icon-before span { vertical-align: middle; }
@media all and (min-width: 1000px) {
}
.mw-ui-icon-wikimedia-ellipsis::before { background-image: linear-gradient(transparent, transparent), url("ellipsis.svg"); }
.mw-ui-icon-wikimedia-logIn::before { background-image: linear-gradient(transparent, transparent), url("logIn.svg"); }
.mw-ui-icon-wikimedia-search::before { background-image: linear-gradient(transparent, transparent), url("search_001.svg"); }
.mw-ui-icon-wikimedia-userAvatar::before { background-image: linear-gradient(transparent, transparent), url("userAvatar.svg"); }
body { margin: 0px; }
main { display: block; }
@supports (text-decoration:underline dotted) {
  abbr[title] { border-bottom: 0px none; text-decoration: underline dotted; }
}
pre, code, tt, kbd, samp { font-family: monospace,monospace; }
sub, sup { line-height: 1; }
img { border: 0px none; }
button, input, optgroup, select, textarea { margin: 0px; }
button::-moz-focus-inner, [type="button"]::-moz-focus-inner, [type="reset"]::-moz-focus-inner, [type="submit"]::-moz-focus-inner { border-style: none; padding: 0px; }
.toctogglecheckbox:checked ~ ul { display: none; }
@media screen {
  html, body { height: 100%; }
  :focus { outline-color: rgb(51, 102, 204); }
  html { font-size: 100%; }
  html, body { font-family: sans-serif; }
  ul { list-style-image: url("bullet-icon.svg"); }
  pre, .mw-code { line-height: 1.3; }
  .mw-jump-link:not(:focus) { display: block; position: absolute !important; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px none; padding: 0px; overflow: hidden; }
  .mw-body h1, .mw-body-content h1, .mw-body-content h2 { margin-bottom: 0.25em; padding: 0px; font-family: "Linux Libertine","Georgia","Times",serif; line-height: 1.3; }
  .mw-body h1:lang(ja), .mw-body-content h1:lang(ja), .mw-body-content h2:lang(ja), .mw-body h1:lang(he), .mw-body-content h1:lang(he), .mw-body-content h2:lang(he), .mw-body h1:lang(ko), .mw-body-content h1:lang(ko), .mw-body-content h2:lang(ko) { font-family: sans-serif; }
  .mw-body h1:lang(my), .mw-body-content h1:lang(my), .mw-body-content h2:lang(my) { line-height: normal; }
  .mw-body h1, .mw-body-content h1 { font-size: 1.8em; }
  .vector-body { font-size: calc(1em * 0.875); line-height: 1.6; }
  .vector-body h2 { margin-top: 1em; font-size: 1.5em; }
  .vector-body h3, .vector-body h4, .vector-body h5, .vector-body h6 { margin-top: 0.3em; margin-bottom: 0px; padding-bottom: 0px; line-height: 1.6; }
  .vector-body h3 { font-size: 1.2em; }
  .vector-body h3, .vector-body h4 { font-weight: bold; }
  .vector-body h4, .vector-body h5, .vector-body h6 { font-size: 100%; }
  .vector-body .toc h2 { font-family: sans-serif; font-size: 100%; }
  .vector-body p { margin: 0.5em 0px; }
  .mw-parser-output .external { background-image: url("external-link-ltr-icon.svg"); background-position: right center; background-repeat: no-repeat; padding-right: 13px; }
  .mw-body .mw-indicators { font-size: 0.875em; line-height: 1.6; position: relative; }
  #siteNotice { font-size: 0.8em; }
  .mw-portlet h3 { display: none; }
  .mw-portlet ul { list-style: outside none none; margin: 0px; }
  .vector-menu-tabs { background-position: left bottom; float: left; height: 2.5em; padding-left: 1px; }
  .vector-menu-tabs h3 { display: none; }
  .vector-menu-tabs ul { float: left; height: 100%; list-style: outside none none; margin: 0px; padding: 0px; }
  .vector-menu-tabs li { background-image: linear-gradient(to top, rgb(119, 193, 246) 0px, rgb(232, 242, 248) 1px, rgb(255, 255, 255) 100%); background-position: left bottom; background-repeat: repeat-x; float: left; display: block; height: 100%; margin: 0px; padding: 0px; line-height: 1.125em; white-space: nowrap; }
  .vector-menu-tabs li a { background-position: right bottom; color: rgb(6, 69, 173); box-sizing: border-box; display: block; float: left; height: 3.07692em; position: relative; padding-top: 1.25em; padding-left: 8px; padding-right: 8px; font-size: 0.8125em; cursor: pointer; }
  .vector-menu-tabs .selected { background: rgb(255, 255, 255) none repeat scroll 0% 0%; }
  .vector-menu-tabs .selected a, .vector-menu-tabs .selected a:visited { color: rgb(32, 33, 34); text-decoration: none; }
  @keyframes rotate {
0% { transform: rotate(0deg); }
100% { transform: rotate(360deg); }
}
  @keyframes rotate {
0% { transform: rotate(0deg); }
100% { transform: rotate(360deg); }
}
  .vector-menu-dropdown { direction: ltr; float: left; cursor: pointer; position: relative; line-height: 1.125em; }
  .vector-menu-dropdown h3 { color: rgb(84, 89, 93); position: relative; display: block; box-sizing: border-box; }
  .vector-menu-dropdown h3::after { content: ""; background-image: url("arrow-down.svg"); background-position: 100% 50%; background-repeat: no-repeat; position: absolute; top: 0.769231em; right: 8px; bottom: 0px; width: 1.23077em; opacity: 0.84; }
  .vector-menu-dropdown h3:hover, .vector-menu-dropdown h3:focus { color: rgb(32, 33, 34); }
  .vector-menu-dropdown h3:hover::after, .vector-menu-dropdown h3:focus::after { opacity: 1; }
  .vector-menu-dropdown .vector-menu-content { background-color: rgb(255, 255, 255); list-style: outside none none; min-width: 100%; position: absolute; top: 2.5em; left: -1px; margin: 0px; border-width: 0px 1px 1px; border-style: solid; border-color: rgb(162, 169, 177); -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; padding: 0px; box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.1); text-align: left; opacity: 0; visibility: hidden; transition: opacity 100ms ease 0s; z-index: 3; }
  .vector-menu-dropdown .vector-menu-checkbox-expanded, .vector-menu-dropdown .vector-menu-checkbox-collapsed { position: absolute !important; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px none; padding: 0px; overflow: hidden; display: none; }
  .vector-menu-dropdown .vector-menu-checkbox:checked + .vector-menu-heading .vector-menu-checkbox-expanded, .vector-menu-dropdown .vector-menu-checkbox:not(:checked) + .vector-menu-heading .vector-menu-checkbox-collapsed { display: inline; }
  .vector-menu-dropdown .vector-menu-checkbox:checked ~ .vector-menu-content { opacity: 1; visibility: visible; }
  .vector-menu-dropdown ul { list-style: outside none none; }
  #mw-head .vector-menu-dropdown h3 { background-position: right bottom; float: left; height: 3.07692em; margin: 0px -1px 0px 0px; padding-right: 1.84615em; }
  .vector-menu-tabs, .vector-menu-tabs a, #mw-head .vector-menu-dropdown h3 { background-image: linear-gradient(to bottom, rgba(167, 215, 249, 0) 0px, rgb(167, 215, 249) 100%); background-repeat: no-repeat; background-size: 1px 100%; }
  .vector-menu-checkbox { cursor: pointer; position: absolute; top: 0px; left: 0px; z-index: 1; opacity: 0; width: 100%; height: 100%; margin: 0px; padding: 0px; display: none; }
  :not(:checked) > .vector-menu-checkbox { display: block; }
  .mw-portlet-variants h3, .mw-portlet-cactions h3, .vector-menu-dropdown-noicon h3 { padding-top: 1.25em; padding-left: 8px; padding-right: 1.84615em; font-size: 0.8125em; font-weight: normal; }
  .mw-portlet-variants .vector-menu-checkbox:focus + h3, .mw-portlet-cactions .vector-menu-checkbox:focus + h3, .vector-menu-dropdown-noicon .vector-menu-checkbox:focus + h3 { outline: 1px dotted; }
  .vector-menu-portal { margin: 0px 0.6em 0px 0.7em; padding: 0.25em 0px; direction: ltr; }
  .vector-menu-portal h3 { display: block; background-image: linear-gradient(to right, rgba(200, 204, 209, 0) 0px, rgb(200, 204, 209) 33%, rgb(200, 204, 209) 66%, rgba(200, 204, 209, 0) 100%); background-position: center bottom; background-repeat: no-repeat; background-size: 100% 1px; color: rgb(84, 89, 93); margin: 0.5em 0px 0px 0.666667em; border: 0px none; padding: 0.25em 0px; font-size: 0.75em; font-weight: normal; cursor: default; }
  .vector-menu-portal .vector-menu-content { margin-left: 0.5em; padding-top: 0px; }
  .vector-menu-portal .vector-menu-content ul { list-style: outside none none; margin: 0px; padding-top: 0.3em; }
  .vector-menu-portal .vector-menu-content li { margin: 0px; padding: 0.25em 0px; font-size: 0.75em; line-height: 1.125em; overflow-wrap: break-word; }
  .vector-menu-portal .vector-menu-content li a { color: rgb(6, 69, 173); }
  .vector-menu-portal .vector-menu-content li a:visited { color: rgb(11, 0, 128); }
  #p-search h3 { display: block; position: absolute !important; clip: rect(1px, 1px, 1px, 1px); width: 1px; height: 1px; margin: -1px; border: 0px none; padding: 0px; overflow: hidden; }
  #simpleSearch { position: relative; height: 100%; }
  #searchInput { background-color: rgba(255, 255, 255, 0.5); color: rgb(0, 0, 0); width: 100%; height: 2.15385em; box-sizing: border-box; border: 1px solid rgb(162, 169, 177); border-radius: 2px; padding: 5px 2.15385em 5px 0.4em; box-shadow: 0px 0px 0px 1px transparent inset; font-family: inherit; font-size: 0.8125em; direction: ltr; transition: border-color 250ms ease 0s, box-shadow 250ms ease 0s; -moz-appearance: textfield; }
  #simpleSearch:hover #searchInput { border-color: rgb(114, 119, 125); }
  #searchInput:focus, #simpleSearch:hover #searchInput:focus { outline: 0px none; border-color: rgb(51, 102, 204); box-shadow: 0px 0px 0px 1px rgb(51, 102, 204) inset; }
  #searchInput::-moz-placeholder { color: rgb(114, 119, 125); opacity: 1; }
  #searchInput::placeholder { color: rgb(114, 119, 125); opacity: 1; }
  #searchButton, #mw-searchButton { background-color: transparent; position: absolute; top: 1px; bottom: 1px; right: 1px; min-width: 28px; width: 2.15385em; border: 0px none; padding: 0px; cursor: pointer; font-size: 0.8125em; direction: ltr; text-indent: -99999px; white-space: nowrap; overflow: hidden; z-index: 1; }
  #searchButton { background: rgba(0, 0, 0, 0) url("search.svg") no-repeat scroll center center / 1.23077em auto; opacity: 0.67; }
  .search-toggle { display: block; float: right; }
  .vector-search-box-collapses > div { display: none; }
  .mw-footer { direction: ltr; }
  .mw-footer ul { list-style: outside none none; margin: 0px; padding: 0px; }
  .mw-footer li { color: rgb(32, 33, 34); margin: 0px; padding: 0.5em 0px; font-size: 0.75em; }
  #footer-info li { line-height: 1.4; }
  #footer-places li { float: left; margin-right: 1em; line-height: 2; }
}
@media screen and (min-width: 1000px) {
  .search-toggle { display: none; }
}
@media screen and (min-width: 1000px) {
  .vector-search-box-collapses > div { display: block; }
}
@media print {
  .toc, body { padding: 10px; font-family: "Linux Libertine","Georgia","Times",serif; }
  .printfooter, .mw-footer, .thumb, table, ol, dl, ul, h3, h4, h5, h6 { font-family: sans-serif; }
  img { font-family: "Linux Libertine","Georgia","Times",serif; }
  .mw-body a:not(.image) { border-bottom: 1px solid rgb(170, 170, 170); }
  .firstHeading { font-size: 25pt; line-height: 28pt; margin-bottom: 20px; padding-bottom: 5px; }
  .firstHeading, h2 { overflow: hidden; border-bottom: 2px solid rgb(0, 0, 0); }
  h3, h4, h5, h6 { margin: 30px 0px 0px; }
  h2, h3, h4, h5, h6 { padding: 0px; position: relative; }
  h2 { font-size: 18pt; line-height: 24pt; margin-bottom: 0.25em; }
  h3 { font-size: 14pt; line-height: 20pt; }
  h4, h5, h6 { font-size: 12pt; line-height: 16pt; }
  p { font-size: 12pt; line-height: 16pt; margin-top: 5px; text-align: justify; }
  p::before { content: ""; display: block; width: 120pt; overflow: hidden; }
  ol, ul { margin: 10px 0px 0px 1.6em; padding: 0px; }
  ol li, ul li { padding: 2px 0px; font-size: 12pt; }
  .toc { page-break-before: avoid; page-break-after: avoid; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; border: 0px none; display: table; }
  .toc a { border: 0px none; font-weight: normal; }
  .toc > ul > li { margin-bottom: 4px; font-weight: bold; }
  .toc ul { margin: 0px; list-style: outside none none; }
  .toc ul ul { padding-left: 30px; }
  .toc li.toclevel-1 > a { font-size: 12pt; font-weight: bold; }
  #mw-navigation, .noprint, .mw-jump-link, .mw-portlet-lang, .toc .tocnumber { display: none; }
  .printfooter { margin-top: 10px; border-top: 3px solid rgb(0, 0, 0); padding-top: 10px; font-size: 10pt; clear: both; }
  .mw-footer { margin-top: 12px; border-top: 1px solid rgb(238, 238, 238); padding-top: 5px; }
  #footer-info { margin: 0px; padding: 0px; }
  #footer-info li { color: rgb(153, 153, 153); list-style: outside none none; display: block; padding-bottom: 10px; font-size: 10pt; }
  #footer-info li a { color: rgb(153, 153, 153) !important; }
  #footer-info-lastmod { color: rgb(0, 0, 0); font-size: 12pt; font-weight: bold; }
}
@media screen {
  body { background-color: rgb(248, 249, 250); color: rgb(32, 33, 34); overflow-y: scroll; }
  .mw-body, .parsoid-body { direction: ltr; padding: 1.25em 0.5em 1.5em; }
  .mw-body { border-top: 1px solid rgb(167, 215, 249); margin-top: -1px; padding: 1.25em 0.5em 1.5em; }
  .mw-body .firstHeading { overflow: visible; }
  .mw-header { min-height: 3.125em; margin: 0.625em 0px 0.3125em; padding: 0.125em 0px; display: flex; flex-wrap: nowrap; align-items: center; position: relative; z-index: 4; }
  #p-search { float: left; margin: 0px 0px 0px 2.85714em; z-index: 3; flex-grow: 1; }
  #p-search > #searchform, #p-search > div > #searchform, #p-search .wvui-typeahead-search { box-sizing: border-box; margin-left: 0px; }
  .mw-body, #mw-data-after-content, #left-navigation, .mw-footer { margin-left: 0px; }
  .mw-indicators { z-index: 1; }
  [id="bodyContent"], .vector-body { position: relative; z-index: 0; }
  #mw-navigation h2 { position: absolute; top: -9999px; }
  .mw-article-toolbar-container { max-width: 60em; margin-left: auto; margin-right: auto; }
  .mw-article-toolbar-container::after { clear: both; content: ""; display: block; }
  #left-navigation { float: left; }
  #right-navigation { float: right; }
  #right-navigation .vector-menu-content { left: auto; right: -1px; }
  #mw-sidebar-button { float: left; margin-left: -0.75em; margin-right: 0.75em; }
  #mw-panel { background-image: linear-gradient(to bottom, rgb(255, 255, 255) 0%, rgb(248, 249, 250) 10%, rgb(248, 249, 250) 90%, rgb(255, 255, 255) 100%); position: absolute; left: -1.875em; width: 11em; box-sizing: border-box; padding: 8px 0px 40px 0.8125em; z-index: 1; }
  #p-namespaces { background-image: none; padding-left: 0px; }
  .mw-footer { border-top: 1px solid rgb(162, 169, 177); padding: 0.75em; }
  .mw-page-container { max-width: 103.125em; min-height: 100%; margin-left: auto; margin-right: auto; padding: 0.05px 0.9375em; background-color: rgb(255, 255, 255); min-width: 27.5em; }
  .skin--responsive .mw-page-container { min-width: auto; }
  .mw-page-container-inner { position: relative; }
  .mw-workspace-container { max-width: 90em; margin-left: auto; margin-right: auto; position: relative; }
  .mw-workspace-container.mw-footer-container { position: static; }
  .mw-content-container { max-width: 60em; margin-left: auto; margin-right: auto; }
  .mw-footer-container { padding-top: 50px; padding-bottom: 82px; }
  #mw-sidebar-checkbox:not(:checked) ~ .mw-workspace-container .mw-sidebar { transform: translateX(-6.5625em); }
  @keyframes search-loader-progress-bar {
0% { background-size: 0px 2px; background-position: -10% 0px; }
30% { background-size: 30% 2px; background-position: -10% 0px; }
70% { background-size: 30% 2px; background-position: 110% 0px; }
100% { background-size: 0px 2px; background-position: 110% 0px; }
}
  #p-search { font-size: calc(1em * 0.875); }
  #searchInput, #searchButton, #mw-searchButton { font-size: inherit; }
  #searchInput { height: 2.28571em; }
  #searchButton, #mw-searchButton { background-size: 1.42857em auto; }
  .client-js .skin-vector-search-vue #searchInput { padding-left: 2.57143em; padding-right: 8px; }
  .client-js .skin-vector-search-vue #searchButton, .client-js .skin-vector-search-vue #mw-searchButton { pointer-events: none; right: auto; top: 0px; bottom: 0px; left: 1px; width: 2.57143em; }
  .client-js .skin-vector-search-vue .p-search--show-thumbnail #searchInput:focus, .client-js .skin-vector-search-vue .vector-search-box-show-thumbnail #searchInput:focus { position: relative; padding-left: calc(2.57143em + 24px); width: calc(100% + 24px); left: calc(-1 * 24px); }
  .client-js .skin-vector-search-vue .p-search--show-thumbnail #searchInput:focus ~ #searchButton, .client-js .skin-vector-search-vue .vector-search-box-show-thumbnail #searchInput:focus ~ #searchButton, .client-js .skin-vector-search-vue .p-search--show-thumbnail #searchInput:focus ~ #mw-searchButton, .client-js .skin-vector-search-vue .vector-search-box-show-thumbnail #searchInput:focus ~ #mw-searchButton { left: -11px; }
  #mw-panel { font-size: inherit; }
  #mw-panel nav:first-child { background-image: none; }
  #mw-panel nav:first-child h3 { display: none; }
  #mw-panel nav:first-child .vector-menu-content { margin-left: 0.5em; }
  .mw-checkbox-hack-checkbox { display: none; }
  .mw-checkbox-hack-button { display: inline-block; cursor: pointer; }
  #mw-sidebar-button::before { opacity: 0.67; background-image: url("data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2220%22 height=%2220%22 viewBox=%220 0 20 20%22%3E %3Ctitle%3E chevron %3C/title%3E %3Cpath d=%22m9 2 1.3 1.3L3.7 10l6.6 6.7L9 18l-8-8 8-8zm8.5 0L19 3.3 12.2 10l6.7 6.7-1.4 1.3-8-8 8-8z%22/%3E %3C/svg%3E"); }
  #mw-sidebar-checkbox:not(:checked) ~ .mw-header #mw-sidebar-button::before { background-image: url("data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%2220%22 height=%2220%22 viewBox=%220 0 20 20%22%3E %3Ctitle%3E menu %3C/title%3E %3Cpath d=%22M1 3v2h18V3zm0 8h18V9H1zm0 6h18v-2H1z%22/%3E %3C/svg%3E"); }
  #mw-sidebar-button:hover::before { opacity: 1; }
  #mw-sidebar-checkbox:not(:checked) ~ .mw-workspace-container .mw-sidebar { visibility: hidden; opacity: 0; transform: translateX(-100%); }
  .vector-animations-ready .mw-sidebar { transition: transform 100ms ease-out 0s, opacity 100ms ease-out 0s, visibility 100ms ease-out 0s; }
  .vector-animations-ready #mw-sidebar-button { transition: background-color 100ms ease 0s, border-color 100ms ease 0s, box-shadow 100ms ease 0s; }
  .vector-user-links { display: flex; align-items: center; position: relative; justify-content: flex-end; flex-shrink: 1; }
  .vector-user-links .vector-user-menu-more { font-size: 0.875em; }
  .vector-user-links .vector-user-menu-more .vector-menu-content-list { display: flex; align-items: center; }
  .vector-user-links .vector-user-menu-more .vector-menu-content-list li { margin: 0px; white-space: nowrap; }
  .vector-user-links .vector-user-menu-more .vector-menu-content-list li a { color: rgb(32, 33, 34); text-decoration: none; }
  .vector-user-links .vector-user-menu-more .vector-menu-content-list li.user-links-collapsible-item { display: none; }
  .vector-user-links .vector-user-menu-more .mw-ui-button { display: flex; align-items: center; }
  .vector-user-links .vector-user-menu.emptyPortlet { display: block; }
  .vector-user-links .vector-user-menu .vector-menu-heading.mw-ui-icon > span { color: transparent; }
  .vector-user-links .vector-user-menu .vector-menu-content { min-width: 200px; max-width: 21.875em; top: 100%; left: unset; right: 0px; border-top-width: 1px; border-radius: 2px; box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.25); }
  .vector-user-links .vector-user-menu li > a, .vector-user-links .vector-user-menu .vector-menu-content-item, .vector-user-links .vector-user-menu .mw-list-item > a { min-height: 2em; display: flex; align-items: center; padding: 0px 12px; color: rgb(32, 33, 34); text-decoration: none; }
  .vector-user-links .vector-user-menu li > a span, .vector-user-links .vector-user-menu .vector-menu-content-item span, .vector-user-links .vector-user-menu .mw-list-item > a span { font-size: 0.875em; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; line-height: initial; }
  .vector-user-links .vector-user-menu li > a:hover, .vector-user-links .vector-user-menu .vector-menu-content-item:hover, .vector-user-links .vector-user-menu .mw-list-item > a:hover { background-color: rgb(246, 246, 246); }
  .vector-user-links .vector-user-menu .vector-menu-content-item-login { border-bottom: 1px solid rgb(162, 169, 177); }
  .vector-user-links .vector-user-menu .vector-user-menu-anon-editor { padding: 4px 12px; color: rgb(84, 89, 93); font-size: 0.875em; }
  .vector-user-links .vector-user-menu .vector-user-menu-anon-editor p { margin: 0px; }
  .vector-user-links .vector-user-menu .vector-user-menu-anon-editor a::before { content: "("; color: rgb(84, 89, 93); }
  .vector-user-links .vector-user-menu .vector-user-menu-anon-editor a::after { content: ")"; color: rgb(84, 89, 93); }
  .vector-user-links .vector-user-menu-logged-out h3::before { height: 100%; }
  .vector-user-links .vector-user-menu-logged-out h3::after { content: none; }
}
@media screen and (min-width: 106.875em) {
  .mw-page-container { border-left: 1px solid rgb(248, 249, 250); border-right: 1px solid rgb(248, 249, 250); }
}
@media screen and (max-width: 86.75em) {
  .mw-checkbox-hack-checkbox:checked ~ .mw-workspace-container .mw-content-container, .mw-checkbox-hack-checkbox:checked ~ .mw-workspace-container .mw-article-toolbar-container { margin-left: 11.5em; }
  .vector-animations-ready .mw-sidebar { transition: none 0s ease 0s ; }
}
@media screen and (min-width: 93.75em) {
  #mw-panel { background: rgb(255, 255, 255) none repeat scroll 0% 0%; border-right: 1px solid rgb(248, 249, 250); }
}
@media screen and (min-width: 1000px) {
  #p-search { margin: 0px 12px 0px 2.85714em; width: 20vw; max-width: 100%; min-width: 25em; flex-basis: 10.7143em; flex-grow: 1; }
  #p-search > div > #searchform, #p-search .wvui-typeahead-search { max-width: 35.7143em; }
  .mw-page-container { padding-left: 1.875em; padding-right: 1.875em; }
}
@media screen and (max-width: 1000px) {
}
@media screen and (max-width: 720px) {
  .mw-checkbox-hack-checkbox:checked ~ .mw-workspace-container #mw-panel { width: 100%; position: relative; left: 0px; }
  .mw-checkbox-hack-checkbox:checked ~ .mw-workspace-container .mw-content-container, .mw-checkbox-hack-checkbox:checked ~ .mw-workspace-container .mw-article-toolbar-container { margin-left: 0px !important; }
}
@media screen and (max-width: 720px) {
  .vector-animations-ready .mw-sidebar { transition: none 0s ease 0s ; }
}
@media screen and (min-width: 720px) {
  .vector-user-links .vector-user-menu-more .vector-menu-content-list li.user-links-collapsible-item { display: block; }
}
@media screen and (min-width: 1200px) {
}
@media screen and (min-width: 720px) {
  .vector-user-links .vector-user-menu .vector-menu-content .user-links-collapsible-item { display: none; }
}
@media not all {
}
@media screen and (min-width: 1000px) {
}
@media screen and (max-width: 720px) {
}
@media all {
  .mw-logo { display: flex; height: 100%; align-items: center; }
  .mw-logo-container { float: left; max-width: 120px; }
  .mw-logo-wordmark { display: block; margin: 0px auto; font-size: 1.4em; }
}
@media all and (min-width: 720px) {
}
@media all and (min-width: 720px) {
  .mw-logo-container { max-width: none; }
}
@media print {
  .mw-page-container-inner { display: flex; flex-direction: column; align-items: flex-start; }
  .mw-page-container-inner > * { width: 100%; }
  #mw-sidebar-checkbox, .mw-header > :not(.mw-logo) { display: none; }
  .mw-header { order: 1; }
  .mw-workspace-container { order: 2; }
}
@media screen {
  a.mw-selflink { color: inherit; font-weight: bold; text-decoration: inherit; }
  a.mw-selflink:hover { cursor: inherit; text-decoration: inherit; }
  a.mw-selflink:active, a.mw-selflink:visited { color: inherit; }
  .mw-parser-output a.extiw, .mw-parser-output a.external { color: rgb(51, 102, 187); }
  .mw-parser-output a.extiw:visited, .mw-parser-output a.external:visited { color: rgb(102, 51, 102); }
  .mw-parser-output a.extiw:active, .mw-parser-output a.external:active { color: rgb(187, 102, 51); }
  .plainlinks a.external { background: rgba(0, 0, 0, 0) none repeat scroll 0% 0% !important; padding: 0px !important; }
  .mw-parser-output a.external, .link-https { background-image: url("external-ltr.svg"); background-position: right center; background-repeat: no-repeat; padding-right: 13px; }
  .mw-parser-output a.extiw, .mw-parser-output a.extiw:active { color: rgb(51, 102, 187); }
  .mw-parser-output a.external { color: rgb(51, 102, 187); }
  .mw-body-content::after { clear: both; content: ""; display: block; }
  .mw-body-content a.external.free { overflow-wrap: break-word; }
  #siteNotice { position: relative; text-align: center; margin: 0px; }
  #siteSub { display: none; }
  #contentSub, #contentSub2 { font-size: 84%; line-height: 1.2em; margin: 0px 0px 1.4em 1em; color: rgb(84, 89, 93); width: auto; }
  .emptyPortlet { display: none; }
  .printfooter, .client-nojs #t-print { display: none; }
  .mw-indicators { float: right; }
  #catlinks { text-align: left; }
  .catlinks { border: 1px solid rgb(162, 169, 177); background-color: rgb(248, 249, 250); padding: 5px; margin-top: 1em; clear: both; }
  .catlinks ul { display: inline; margin: 0px; padding: 0px; list-style: outside none none; }
  .catlinks li { display: inline-block; line-height: 1.25em; border-left: 1px solid rgb(162, 169, 177); margin: 0.125em 0px; padding: 0px 0.5em; }
  .catlinks li:first-child { padding-left: 0.25em; border-left: 0px none; }
  .mw-hidden-cats-hidden, .catlinks-allhidden { display: none; }
  a { text-decoration: none; color: rgb(6, 69, 173); background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; }
  a:not([href]) { cursor: pointer; }
  a:visited { color: rgb(11, 0, 128); }
  a:active { color: rgb(250, 167, 0); }
  a:hover, a:focus { text-decoration: underline; }
  a:lang(ar), a:lang(kk-arab), a:lang(mzn), a:lang(ps), a:lang(ur) { text-decoration: none; }
  img { border: 0px none; vertical-align: middle; }
  h1, h2, h3, h4, h5, h6 { color: rgb(0, 0, 0); margin: 0px; padding-top: 0.5em; padding-bottom: 0.17em; overflow: hidden; }
  h1, h2 { margin-bottom: 0.6em; border-bottom: 1px solid rgb(162, 169, 177); }
  h3, h4, h5 { margin-bottom: 0.3em; }
  h1 { font-size: 188%; font-weight: normal; }
  h2 { font-size: 150%; font-weight: normal; }
  h3 { font-size: 128%; }
  h4 { font-size: 116%; }
  h5 { font-size: 108%; }
  p { margin: 0.4em 0px 0.5em; }
  p img { margin: 0px; }
  ul { margin: 0.3em 0px 0px 1.6em; padding: 0px; }
  ol { margin: 0.3em 0px 0px 3.2em; padding: 0px; list-style-image: none; }
  li { margin-bottom: 0.1em; }
  dt { font-weight: bold; margin-bottom: 0.1em; }
  dl { margin-top: 0.2em; margin-bottom: 0.5em; }
  dd { margin-left: 1.6em; margin-bottom: 0.1em; }
  pre, code, tt, kbd, samp, .mw-code { font-family: monospace,monospace; }
  pre, code, .mw-code { background-color: rgb(248, 249, 250); color: rgb(0, 0, 0); border: 1px solid rgb(234, 236, 240); }
  code { border-radius: 2px; padding: 1px 4px; }
  pre, .mw-code { padding: 1em; white-space: pre-wrap; overflow-x: hidden; overflow-wrap: break-word; }
  form { border: 0px none; margin: 0px; }
  @counter-style meetei {
  system: numeric;
  symbols: "꯰" "꯱" "꯲" "꯳" "꯴" "꯵" "꯶" "꯷" "꯸" "꯹";
  suffix: ") ";
}
  @counter-style santali {
  system: numeric;
  symbols: "᱐" "᱑" "᱒" "᱓" "᱔" "᱕" "᱖" "᱗" "᱘" "᱙";
}
  ol:lang(azb) li, ol:lang(bcc) li, ol:lang(bgn) li, ol:lang(bqi) li, ol:lang(fa) li, ol:lang(glk) li, ol:lang(kk-arab) li, ol:lang(lrc) li, ol:lang(luz) li, ol:lang(mzn) li { list-style-type: persian; }
  ol:lang(ckb) li, ol:lang(sdh) li { list-style-type: arabic-indic; }
  ol:lang(hi) li, ol:lang(mai) li, ol:lang(mr) li, ol:lang(ne) li { list-style-type: devanagari; }
  ol:lang(as) li, ol:lang(bn) li { list-style-type: bengali; }
  ol:lang(mni) li { list-style-type: meetei; }
  ol:lang(or) li { list-style-type: oriya; }
  ol:lang(sat) li { list-style-type: santali; }
  .mw-content-ltr ul, .mw-content-rtl .mw-content-ltr ul { margin: 0.3em 0px 0px 1.6em; padding: 0px; }
  .mw-content-ltr ol, .mw-content-rtl .mw-content-ltr ol { margin: 0.3em 0px 0px 3.2em; padding: 0px; }
  .mw-content-ltr dd, .mw-content-rtl .mw-content-ltr dd { margin-left: 1.6em; margin-right: 0px; }
  h1:lang(anp), h1:lang(as), h1:lang(bh), h1:lang(bho), h1:lang(bn), h1:lang(gu), h1:lang(hi), h1:lang(kn), h1:lang(ks), h1:lang(ml), h1:lang(mr), h1:lang(my), h1:lang(mai), h1:lang(ne), h1:lang(new), h1:lang(or), h1:lang(pa), h1:lang(pi), h1:lang(sa), h1:lang(ta), h1:lang(te) { line-height: 1.6em !important; }
  h2:lang(anp), h3:lang(anp), h4:lang(anp), h5:lang(anp), h6:lang(anp), h2:lang(as), h3:lang(as), h4:lang(as), h5:lang(as), h6:lang(as), h2:lang(bho), h3:lang(bho), h4:lang(bho), h5:lang(bho), h6:lang(bho), h2:lang(bh), h3:lang(bh), h4:lang(bh), h5:lang(bh), h6:lang(bh), h2:lang(bn), h3:lang(bn), h4:lang(bn), h5:lang(bn), h6:lang(bn), h2:lang(gu), h3:lang(gu), h4:lang(gu), h5:lang(gu), h6:lang(gu), h2:lang(hi), h3:lang(hi), h4:lang(hi), h5:lang(hi), h6:lang(hi), h2:lang(kn), h3:lang(kn), h4:lang(kn), h5:lang(kn), h6:lang(kn), h2:lang(ks), h3:lang(ks), h4:lang(ks), h5:lang(ks), h6:lang(ks), h2:lang(ml), h3:lang(ml), h4:lang(ml), h5:lang(ml), h6:lang(ml), h2:lang(mr), h3:lang(mr), h4:lang(mr), h5:lang(mr), h6:lang(mr), h2:lang(my), h3:lang(my), h4:lang(my), h5:lang(my), h6:lang(my), h2:lang(mai), h3:lang(mai), h4:lang(mai), h5:lang(mai), h6:lang(mai), h2:lang(ne), h3:lang(ne), h4:lang(ne), h5:lang(ne), h6:lang(ne), h2:lang(new), h3:lang(new), h4:lang(new), h5:lang(new), h6:lang(new), h2:lang(or), h3:lang(or), h4:lang(or), h5:lang(or), h6:lang(or), h2:lang(pa), h3:lang(pa), h4:lang(pa), h5:lang(pa), h6:lang(pa), h2:lang(pi), h3:lang(pi), h4:lang(pi), h5:lang(pi), h6:lang(pi), h2:lang(sa), h3:lang(sa), h4:lang(sa), h5:lang(sa), h6:lang(sa), h2:lang(ta), h3:lang(ta), h4:lang(ta), h5:lang(ta), h6:lang(ta), h2:lang(te), h3:lang(te), h4:lang(te), h5:lang(te), h6:lang(te) { line-height: 1.4em; }
  h2:lang(th) { line-height: 1.6; }
  .toc, .toccolours { border: 1px solid rgb(162, 169, 177); background-color: rgb(248, 249, 250); padding: 5px; font-size: 95%; }
  .toc { display: table; padding: 7px; }
  .toc h2 { display: inline; border: 0px none; padding: 0px; font-size: 100%; font-weight: bold; }
  .toc .toctitle { text-align: center; }
  .toc ul { list-style: outside none none; margin: 0.3em 0px; padding: 0px; text-align: left; }
  .toc ul ul { margin: 0px 0px 0px 2em; }
  .tocnumber, .toctext { display: table-cell; text-decoration: inherit; }
  .tocnumber { color: rgb(32, 33, 34); padding-left: 0px; padding-right: 0.5em; }
  .mw-content-ltr .tocnumber { padding-left: 0px; padding-right: 0.5em; }
  .toctogglecheckbox { display: inline !important; position: absolute; opacity: 0; z-index: -1; }
  .toctogglespan { font-size: 94%; }
  .toctogglespan::before { content: " ["; }
  .toctogglespan::after { content: "]"; }
  .toctogglelabel { cursor: pointer; color: rgb(6, 69, 173); }
  .toctogglelabel:hover { text-decoration: underline; }
  .toctogglecheckbox:focus + .toctitle .toctogglelabel { text-decoration: underline; outline: 1px dotted; }
  .toctogglecheckbox:checked + .toctitle .toctogglelabel::after { content: "show"; }
  .toctogglecheckbox:not(:checked) + .toctitle .toctogglelabel::after { content: "hide"; }
  .toc .toctitle { direction: ltr; }
  .mw-content-ltr .toc ul, .mw-content-rtl .mw-content-ltr .toc ul { text-align: left; }
  .mw-content-ltr .toc ul ul, .mw-content-rtl .mw-content-ltr .toc ul ul { margin: 0px 0px 0px 2em; }
}
@media print {
  .mw-parser-output a.external {  }
  .mw-parser-output a.external.text::after, .mw-parser-output a.external.autonumber::after { content: " (" attr(href) ")"; word-break: break-all; overflow-wrap: break-word; }
  .mw-editsection, .mw-editsection-like, .mw-indicators, #siteNotice, .usermessage { display: none; }
  .printfooter { padding: 1em 0px; }
  .catlinks ul { display: inline; padding: 0px; list-style: outside none none; }
  .catlinks li { display: inline-block; line-height: 1.15; margin: 0.1em 0px; border-left: 1pt solid rgb(170, 170, 170); padding: 0px 0.4em; }
  .catlinks li:first-child { border-left: 0px none; padding-left: 0.2em; }
  .mw-hidden-catlinks, .catlinks { display: none; }
  a { background: rgba(0, 0, 0, 0) none repeat scroll 0% 0% !important; padding: 0px !important; }
  a, a.external, a.new, a.stub { color: inherit !important; text-decoration: inherit !important; }
  dt { font-weight: bold; }
  h1, h2, h3, h4, h5, h6 { font-weight: bold; page-break-after: avoid; page-break-before: avoid; }
  p { margin: 1em 0px; line-height: 1.2; }
  img, figure { page-break-inside: avoid; }
  img { border: 0px none; vertical-align: middle; }
  pre, .mw-code { background: rgb(255, 255, 255) none repeat scroll 0% 0%; color: rgb(0, 0, 0); border: 1pt dashed rgb(0, 0, 0); padding: 1em; font-size: 8pt; white-space: pre-wrap; overflow-x: hidden; overflow-wrap: break-word; }
  ul { list-style-type: square; }
  .toctogglecheckbox:checked + .toctitle { display: none; }
  .toc { background-color: rgb(249, 249, 249); border: 1pt solid rgb(170, 170, 170); padding: 5px; display: table; }
  .tocnumber, .toctext { display: table-cell; }
  .tocnumber { padding-left: 0px; padding-right: 0.5em; }
  .mw-content-ltr .tocnumber { padding-left: 0px; padding-right: 0.5em; }
}
#archnavbar { height: 40px !important; padding: 10px 15px !important; background: rgb(51, 51, 51) none repeat scroll 0% 0% !important; border-bottom: 5px solid rgb(0, 136, 204) !important; }
#archnavbarlogo { float: left !important; margin: 0px !important; padding: 0px !important; height: 40px !important; width: 190px !important; }
html > body #archnavbarlogo { background: rgba(0, 0, 0, 0) url("archlogo.svg") no-repeat scroll 0% 0% / 190px 40px !important; }
#archnavbarlogo p { margin: 0px !important; padding: 0px !important; text-indent: -9999px !important; }
#archnavbarlogo a { display: block !important; height: 40px !important; width: 190px !important; }
#archnavbar ul { display: inline !important; float: right !important; list-style: outside none none !important; margin: 0px !important; padding: 0px !important; }
#archnavbar ul li { float: left !important; font-size: 14px !important; font-family: sans-serif !important; line-height: 45px !important; padding-right: 15px !important; padding-left: 15px !important; }
#archnavbar ul#archnavbarlist li a { color: rgb(153, 153, 153); font-weight: bold !important; text-decoration: none !important; }
#archnavbar ul li a:hover { color: white !important; text-decoration: underline !important; }
#archnavbar ul li.anb-selected a { color: white !important; }
@media (max-width: 600px) {
  #anb-wiki { display: none; }
}
@media (max-width: 680px) {
  html > body #archnavbarlogo { width: 40px !important; margin-right: 5px !important; background: rgba(0, 0, 0, 0) url("archicon.svg") no-repeat scroll 0% 0% / 40px 40px !important; }
  #archnavbar ul { display: flex !important; justify-content: space-between; flex-wrap: nowrap; overflow: hidden; float: none !important; }
  #archnavbar ul li { padding: 0px !important; float: none !important; }
}
@media (max-width: 830px) {
  #anb-home, #anb-start { display: none; }
  html > body #archnavbarlogo { padding-right: 15px !important; }
  #archnavbar { padding-left: 5px !important; padding-right: 5px !important; }
  #archnavbar ul li { padding-left: 5px !important; padding-right: 5px !important; }
}
body { background: rgb(246, 249, 252) none repeat scroll 0% 0%; }
#content { background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 1px solid rgb(204, 204, 204); }
#content table, #content h1, #content h2, #content h3, #content h4, #content h5, #content pre, #content code, #content tt { color: rgb(34, 34, 34); }
#content ul { list-style-image: none; }
#content pre:not([class*="CodeMirror"]) { border: 1px solid rgb(187, 204, 221); overflow: auto; word-break: break-all; white-space: pre-wrap !important; }
#content pre:not([class*="CodeMirror"]), #content code, #content tt { background-color: rgb(235, 241, 245); font-family: monospace; }
#content code, #content tt { display: inline-block; padding: 0px 0.3em; border-width: 0px; border-radius: 0px; }
#footer { color: rgb(51, 51, 51); }
#toc, .toc, .mw-warning, .toccolours { background-color: rgb(249, 250, 255); border: 1px solid rgb(215, 223, 227); }
#bodyContent > div.mw-content-ltr a, #bodyContent > div.mw-content-rtl a, #wikiPreview > div.mw-content-ltr a, #wikiPreview > div.mw-content-rtl a { font-weight: bold; }
#bodyContent #toc a, #bodyContent .special li > a, #bodyContent .special li span a, #bodyContent #pagehistory a { font-weight: normal; }
#content a:not(.new), header.mw-header li:not(.new) a:not(.new), #mw-navigation li:not(.new) a:not(.new), #mw-panel li:not(.new) a:not(.new), #column-one li:not(.new) a:not(.new), #footer a:not(.new) { text-decoration: none; color: rgb(0, 119, 187) !important; }
#content a:hover:not(.new), header.mw-header li:not(.new) a:hover:not(.new), #mw-navigation li:not(.new) a:hover:not(.new), #mw-panel li:not(.new) a:hover:not(.new), #column-one li:not(.new) a:hover:not(.new), #footer a:hover:not(.new) { text-decoration: underline; background-color: transparent; color: rgb(153, 153, 153) !important; }
#content a:active, header.mw-header li:not(.new) a:active, #mw-navigation li:not(.new) a:active, #mw-panel li:not(.new) a:active, #column-one li:not(.new) a:active, #footer a:active, #content a:focus, header.mw-header li:not(.new) a:focus, #mw-navigation li:not(.new) a:focus, #mw-panel li:not(.new) a:focus, #column-one li:not(.new) a:focus, #footer a:focus, #content a:active:hover, header.mw-header li:not(.new) a:active:hover, #mw-navigation li:not(.new) a:active:hover, #mw-panel li:not(.new) a:active:hover, #column-one li:not(.new) a:active:hover, #footer a:active:hover, #content a:focus:hover, header.mw-header li:not(.new) a:focus:hover, #mw-navigation li:not(.new) a:focus:hover, #mw-panel li:not(.new) a:focus:hover, #column-one li:not(.new) a:focus:hover, #footer a:focus:hover { color: rgb(238, 153, 0) !important; }
#content a:visited:not(.new), #mw-panel li:not(.new) a:visited:not(.new), #p-navigation li:not(.new) a:visited:not(.new), #p-tb li:not(.new) a:visited:not(.new) { color: rgb(102, 102, 102) !important; }
.mw-body-content a.external, .mw-body-content a.extiw { background: rgba(0, 0, 0, 0) url("external-ltr.svg") no-repeat scroll right center; padding-right: 13px; }
#p-logo, .mw-logo { display: none; }
.mw-body h1, .mw-body-content h1, .mw-body-content h2 { font-family: sans-serif; }
nav.vector-menu-tabs { padding-left: 0px; }
nav.vector-menu-tabs ul, nav.vector-menu-tabs ul li { background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; }
nav.vector-menu-tabs li.selected { border-width: 1px; border-style: solid; border-color: rgb(204, 204, 204) rgb(204, 204, 204) rgb(255, 255, 255); -moz-border-top-colors: none; -moz-border-right-colors: none; -moz-border-bottom-colors: none; -moz-border-left-colors: none; border-image: none; background-color: rgb(255, 255, 255); }
nav.vector-menu-tabs li.selected a { background: rgba(0, 0, 0, 0) none repeat scroll 0% 0% !important; }
nav.vector-menu-tabs ul li { border: 1px none; }
body.skin-vector.skin--responsive nav.vector-menu-tabs li.selected { margin-top: -1px; border-bottom: medium none; }
body.skin-vector.skin--responsive li.selected:not(:first-child) { margin-left: -1px; }
body.skin-vector.skin--responsive div.mw-page-container { background-color: rgb(246, 249, 252); }
body.skin-vector.skin--responsive div#mw-panel { background-image: none; }
@media screen and (max-width: 720px) {
}
