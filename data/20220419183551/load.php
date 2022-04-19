/* Code tidied up by ScrapBook */
.dw-img-modal { display: none; position: fixed; z-index: 20; padding-top: 100px; left: 0px; top: 0px; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.96); }
.dw-img-modal-content { margin: auto; display: block; width: auto; height: auto; }
#dw-img-modal-caption { margin: auto; display: block; width: 80%; text-align: center; color: rgb(204, 204, 204); padding: 10px 0px; height: 150px; }
#dw-img-modal-wrapper { margin: 0px auto; }
@keyframes fadeIn {
0% { opacity: 0; }
100% { opacity: 1; }
}
@keyframes fadeIn {
0% { opacity: 0; }
100% { opacity: 1; }
}
.dw-img-modal-content, #dw-img-modal-caption { animation-name: fadeIn; animation-duration: 1s; animation-fill-mode: both; }
.dw-img-modal-close { position: absolute; top: 15px; right: 35px; color: rgb(241, 241, 241); font-size: 40px; font-weight: bold; transition: all 0.3s ease 0s; }
.dw-img-modal-close:hover, .dw-img-modal-close:focus { color: rgb(187, 187, 187); text-decoration: none; cursor: pointer; }
@media only screen and (max-width: 700px) {
  .dw-img-modal-content { width: 100%; }
}
@media print {
  .noprint, div#jump-to-nav, .mw-jump, div.top, div#column-one, .mw-editsection, .mw-editsection-like, #footer-places, .mw-hidden-catlinks, .usermessage, .patrollink, .ns-0 .mw-redirectedfrom, div.magnify, #mw-navigation, #siteNotice, div#f-poweredbyico, div#f-copyrightico, li#about, li#disclaimer, li#mobileview, li#privacy { display: none; }
  body { background: rgb(255, 255, 255) none repeat scroll 0% 0%; color: rgb(0, 0, 0); margin: 0px; padding: 0px; }
  h1, h2, h3, h4, h5, h6 { font-weight: bold; page-break-after: avoid; }
  ul { list-style-type: square; }
  p { margin: 1em 0px; line-height: 1.2em; }
  img, .wikitable, .thumb { page-break-inside: avoid; }
  img { border: 0px none; vertical-align: middle; }
  .mw-body { background: rgb(255, 255, 255) none repeat scroll 0% 0%; color: rgb(0, 0, 0); border: 0px none ! important; padding: 0px ! important; margin: 0px ! important; direction: ltr; }
  a { background: transparent none repeat scroll 0% 0% ! important; padding: 0px ! important; }
  .mw-body a.external.text::after, .mw-body a.external.autonumber::after { content: " (" attr(href) ")"; overflow-wrap: break-word; }
  a, a.external, a.new, a.stub { color: rgb(0, 0, 0) ! important; text-decoration: none ! important; }
  a, a.external, a.new, a.stub { color: inherit ! important; text-decoration: inherit ! important; }
  .catlinks ul { display: inline; padding: 0px; list-style: outside none none; }
  .catlinks li { display: inline-block; line-height: 1.15em; padding: 0px 0.4em; border-left: 1pt solid rgb(170, 170, 170); margin: 0.1em 0px; }
  .catlinks li:first-child { padding-left: 0.2em; border-left: 0px none; }
  .printfooter { padding: 1em 0px; }
}
@media screen {
  .mw-content-ltr { direction: ltr; }
  .sitedir-ltr textarea, .sitedir-ltr input { direction: ltr; }
  @supports (text-decoration:underline dotted) {
  abbr[title], .explain[title] { border-bottom: medium none; text-decoration: underline dotted; }
}
  #catlinks { text-align: left; }
  .catlinks ul { display: inline; margin: 0px; padding: 0px; list-style: outside none none; }
  .catlinks li { display: inline-block; line-height: 1.25em; border-left: 1px solid rgb(170, 170, 170); margin: 0.125em 0px; padding: 0px 0.5em; }
  .catlinks li:first-child { padding-left: 0.25em; border-left: medium none; }
  .plainlinks a.external { background: transparent none repeat scroll 0% 0% ! important; padding: 0px ! important; }
  .visualClear { clear: both; }
  .mw-content-ltr ul, .mw-content-rtl .mw-content-ltr ul { margin: 0.3em 0px 0px 1.6em; padding: 0px; }
  h1:lang(anp), h1:lang(as), h1:lang(bh), h1:lang(bho), h1:lang(bn), h1:lang(gu), h1:lang(hi), h1:lang(kn), h1:lang(ks), h1:lang(ml), h1:lang(mr), h1:lang(my), h1:lang(mai), h1:lang(ne), h1:lang(new), h1:lang(or), h1:lang(pa), h1:lang(pi), h1:lang(sa), h1:lang(ta), h1:lang(te) { line-height: 1.6em ! important; }
  h2:lang(anp), h3:lang(anp), h4:lang(anp), h5:lang(anp), h6:lang(anp), h2:lang(as), h3:lang(as), h4:lang(as), h5:lang(as), h6:lang(as), h2:lang(bho), h3:lang(bho), h4:lang(bho), h5:lang(bho), h6:lang(bho), h2:lang(bh), h3:lang(bh), h4:lang(bh), h5:lang(bh), h6:lang(bh), h2:lang(bn), h3:lang(bn), h4:lang(bn), h5:lang(bn), h6:lang(bn), h2:lang(gu), h3:lang(gu), h4:lang(gu), h5:lang(gu), h6:lang(gu), h2:lang(hi), h3:lang(hi), h4:lang(hi), h5:lang(hi), h6:lang(hi), h2:lang(kn), h3:lang(kn), h4:lang(kn), h5:lang(kn), h6:lang(kn), h2:lang(ks), h3:lang(ks), h4:lang(ks), h5:lang(ks), h6:lang(ks), h2:lang(ml), h3:lang(ml), h4:lang(ml), h5:lang(ml), h6:lang(ml), h2:lang(mr), h3:lang(mr), h4:lang(mr), h5:lang(mr), h6:lang(mr), h2:lang(my), h3:lang(my), h4:lang(my), h5:lang(my), h6:lang(my), h2:lang(mai), h3:lang(mai), h4:lang(mai), h5:lang(mai), h6:lang(mai), h2:lang(ne), h3:lang(ne), h4:lang(ne), h5:lang(ne), h6:lang(ne), h2:lang(new), h3:lang(new), h4:lang(new), h5:lang(new), h6:lang(new), h2:lang(or), h3:lang(or), h4:lang(or), h5:lang(or), h6:lang(or), h2:lang(pa), h3:lang(pa), h4:lang(pa), h5:lang(pa), h6:lang(pa), h2:lang(pi), h3:lang(pi), h4:lang(pi), h5:lang(pi), h6:lang(pi), h2:lang(sa), h3:lang(sa), h4:lang(sa), h5:lang(sa), h6:lang(sa), h2:lang(ta), h3:lang(ta), h4:lang(ta), h5:lang(ta), h6:lang(ta), h2:lang(te), h3:lang(te), h4:lang(te), h5:lang(te), h6:lang(te) { line-height: 1.2em; }
  .printfooter { display: none; }
  .mw-editsection, #jump-to-nav { -moz-user-select: none; }
  .mw-editsection, .mw-editsection-like { font-size: small; font-weight: normal; margin-left: 1em; vertical-align: baseline; line-height: 1em; display: inline-block; }
  .mw-content-ltr .mw-editsection, .mw-content-rtl .mw-content-ltr .mw-editsection { margin-left: 1em; }
}
@media screen {
  a { text-decoration: none; color: rgb(6, 69, 173); background: transparent none repeat scroll 0% 0%; }
  a:visited { color: rgb(11, 0, 128); }
  a:active { color: rgb(250, 167, 0); }
  a:hover, a:focus { text-decoration: underline; }
  a:lang(ar), a:lang(kk-arab), a:lang(mzn), a:lang(ps), a:lang(ur) { text-decoration: none; }
  .mw-body a.extiw, .mw-body a.extiw:active { color: rgb(51, 102, 187); }
  .mw-body a.extiw:visited { color: rgb(102, 51, 102); }
  .mw-body a.extiw:active { color: rgb(187, 102, 51); }
  .mw-body a.external { color: rgb(51, 102, 187); }
  .mw-body a.external:visited { color: rgb(102, 51, 102); }
  .mw-body a.external:active { color: rgb(187, 102, 51); }
  img { border: medium none; vertical-align: middle; }
  h1, h2, h3, h4, h5, h6 { color: black; background: transparent none repeat scroll 0% 0%; font-weight: normal; margin: 0px; overflow: hidden; padding-top: 0.5em; padding-bottom: 0.17em; border-bottom: 1px solid rgb(170, 170, 170); }
  h1 { font-size: 188%; }
  h2 { font-size: 150%; }
  h3, h4, h5, h6 { border-bottom: medium none; font-weight: bold; }
  h3 { font-size: 128%; }
  h1, h2 { margin-bottom: 0.6em; }
  h3, h4, h5 { margin-bottom: 0.3em; }
  p { margin: 0.4em 0px 0.5em; }
  ul { list-style-type: square; margin: 0.3em 0px 0px 1.6em; padding: 0px; }
  li { margin-bottom: 0.1em; }
  table { font-size: 100%; }
  form { border: medium none; margin: 0px; }
}
@media screen {
  .mw-body a.external, .link-https { background-color: transparent; background-repeat: no-repeat; background-attachment: scroll; background-clip: border-box; background-origin: padding-box; background-position: right center; background-size: auto auto; background-image: linear-gradient(transparent, transparent), url("data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%20standalone%3D%22no%22%3F%3E%0A%3Csvg%20xmlns%3Ardf%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2F02%2F22-rdf-syntax-ns%23%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20height%3D%2213%22%20width%3D%2213%22%20version%3D%221.1%22%20xmlns%3Acc%3D%22http%3A%2F%2Fcreativecommons.org%2Fns%23%22%20xmlns%3Adc%3D%22http%3A%2F%2Fpurl.org%2Fdc%2Felements%2F1.1%2F%22%3E%0A%3Cg%20transform%3D%22translate%28-36.467808%2C-258.39005%29%22%3E%0A%3Cpath%20style%3D%22opacity%3A1%3Bfill%3A%233366bb%3B%22%20d%3D%22m41.47%2C259.4%2C7%2C0%2C0%2C7-2-2-3%2C2%2C0-1%2C3-2.25%2C1%2C1%2C0-3.75-3.75%2C0%2C1%2C1-2.25%2C3-1%2C0%2C2-3z%22%2F%3E%0A%3Cpath%20style%3D%22opacity%3A1%3Bfill%3A%233366bb%3B%22%20d%3D%22m43.47%2C261.4-5%2C0%2C0%2C8%2C8%2C0%2C0-5-1%2C0%2C0%2C4-6%2C0%2C0-6%2C4%2C0z%22%2F%3E%0A%3Cpath%20style%3D%22opacity%3A1%3Bfill%3A%2315a5ea%3B%22%20d%3D%22m40.55%2C263.9c0-0.6213%2C0.6213-0.6213%2C0.6213-0.6213%2C1.864%2C0.6213%2C3.107%2C1.864%2C3.728%2C3.728%2C0%2C0%2C0%2C0.6213-0.6213%2C0.6213-1.243-1.864-1.864-2.485-3.728-3.728z%22%2F%3E%0A%3C%2Fg%3E%0A%3C%2Fsvg%3E%0A"); padding-right: 15px; }
  .mw-body a.extiw, .mw-body a.extiw:active { color: rgb(51, 102, 187); }
  .mw-body a.external { color: rgb(51, 102, 187); }
}
@media screen {
  .page { font: x-small sans-serif; }
  .page article { font-size: 127%; line-height: 1.5em; }
  .visualClear { clear: both; }
  table { font-size: 100%; }
  a { text-decoration: none; color: rgb(0, 43, 184); background: transparent none repeat scroll 0% 0%; }
  a:visited { color: rgb(90, 54, 150); }
  a:active { color: rgb(250, 167, 0); }
  a:hover { text-decoration: underline; }
  li.new a, a.new { color: rgb(186, 0, 0) ! important; }
  li.new a:visited, a.new:visited { color: rgb(165, 88, 88); }
  img { border: medium none; vertical-align: middle; }
  p { margin: 0.4em 0px 0.5em; line-height: 1.5em; }
  h1, h2, h3, h4, h5, h6 { background: transparent none repeat scroll 0% 0%; font-weight: normal; margin: 0px; padding-top: 0.5em; padding-bottom: 0.17em; border-bottom: 1px solid rgb(170, 170, 170); overflow: hidden; }
  h1 { font-size: 188%; }
  h2 { font-size: 150%; }
  h3, h4, h5, h6 { border-bottom: medium none; font-weight: bold; }
  h3 { font-size: 132%; }
  ul { line-height: 1.5em; list-style-type: square; margin: 0.3em 0px 0px 1.5em; padding: 0px; list-style-image: url("bullet.gif"); }
  li { margin-bottom: 0.1em; }
  form { border: medium none; margin: 0px; }
  .mw-indicators { float: right; line-height: 1.5em; font-size: 95%; }
  #siteSub { display: none; }
  .body_content h1, .body_content h2 { margin-bottom: 0.6em; }
  .firstHeading { margin-bottom: 0.1em; overflow: visible; }
  #catlinks { border: 1px solid rgb(170, 170, 170); background-color: rgb(249, 249, 249); color: black; padding: 10px 5px; margin-top: 1em; clear: both; }
  .body_content a.extiw, .body_content a.extiw:active { color: rgb(51, 102, 187); background: transparent none repeat scroll 0% 0%; padding: 0px; }
  a.external { color: rgb(51, 102, 187); }
  .body_content .plainlinks a { background: transparent none repeat scroll 0% 0% ! important; padding: 0px ! important; }
  .printfooter { display: none; }
  .reset div, .reset dl, .reset dt, .reset dd, .reset ul, .reset ol, .reset li, .reset h1, .reset h2, .reset h3, .reset h4, .reset h5, .reset h6, .reset pre, .reset code, .reset form, .reset fieldset, .reset legend, .reset input, .reset textarea, .reset p, .reset blockquote, .reset th, .reset td { margin: 0px; padding: 0px; line-height: normal; }
  .reset table { border-collapse: collapse; border-spacing: 0px; }
  .reset fieldset, .reset img { border: 0px none; }
  .reset address, .reset caption, .reset cite, .reset code, .reset dfn, .reset em, .reset strong, .reset th, .reset var { font-style: normal; font-weight: normal; }
  .reset li { list-style: outside none none; }
  .reset h1, .reset h2, .reset h3, .reset h4, .reset h5, .reset h6 { font-size: 100%; font-weight: normal; border: 0px none; }
  .reset input, .reset textarea, .reset select { font-family: inherit; font-size: inherit; font-weight: inherit; }
  a.wikia-button, span.wikia-button a, input.wikia-button[type="submit"], input.wikia-button[type="reset"], input.wikia-button[type="button"], button.wikia-button { background-color: rgb(0, 153, 51); background-image: linear-gradient(to bottom, rgb(0, 153, 51) 0%, rgb(0, 103, 34) 100%); border: 1px solid rgb(190, 221, 190); color: rgb(255, 255, 255); cursor: pointer; display: inline-block; font: bold 12px/17px "Lucida Grande",sans-serif; height: 17px; margin: 0px; padding: 0px 7px; text-decoration: none; white-space: nowrap; border-radius: 7px; box-shadow: 0px 1px 0px rgb(44, 128, 44), 0px -1px 0px rgb(44, 128, 44), 1px 0px 0px rgb(44, 128, 44), -1px 0px 0px rgb(44, 128, 44); }
  a.wikia-button:visited, span.wikia-button a:visited { color: rgb(255, 255, 255); }
  a.wikia-button:hover, span.wikia-button a:hover, input.wikia-button[type="submit"]:hover, input.wikia-button[type="reset"]:hover, input.wikia-button[type="button"]:hover, button.wikia-button:hover { text-decoration: none; text-shadow: 0px 1px 1px rgb(0, 0, 0); }
  a.wikia-button:active, span.wikia-button a:active, input.wikia-button[type="submit"]:active, input.wikia-button[type="reset"]:active, input.wikia-button[type="button"]:active, button.wikia-button:active { color: rgb(255, 255, 255); background-image: linear-gradient(to bottom, rgb(0, 103, 34) 0%, rgb(0, 153, 51) 100%); }
  .sprite, .sprite-small { background-image: url("monaco-sprite.png"); }
  .sprite { height: 16px; width: 16px; }
  .sprite, .sprite-small { position: relative; vertical-align: middle; }
  .sprite { top: -2px; }
  .sprite.edit { background-position: 0px -106px; }
  .sprite.photo { background-position: -32px -106px; }
  .sprite.history { background-position: 0px -122px; }
  .sprite.pagelink { background-position: -16px -122px; }
  .sprite.copyright { background-position: 16px -122px; }
  .sprite.move { background-position: -32px -122px; }
  .sprite.random { background-position: -64px -138px; }
  .sprite.user { background-position: 0px -154px; }
  .sprite.recent { background-position: 0px -170px; }
  .sprite.search { background-position: -32px -170px; }
  .sprite.refresh { background-position: -48px -170px; }
  .sprite.mobile { background-position: -16px -186px; }
  body { font-family: arial,sans-serif; font-size: 10pt; margin: 0px; }
  article, aside, canvas, details, figcaption, figure, footer, header, hgroup, menu, nav, section, summary { display: block; }
  .color1, .yui-panel .hd { background-color: rgb(51, 102, 204); color: white; }
  .color1 a { color: white; }
  .color2 { background-color: rgb(245, 245, 245); }
  #skiplinks a.skiplink { display: block; position: absolute; top: -500px; left: 5px; width: 206px; text-align: center; }
  #skiplinks a.skiplink:active, #skiplinks a.skiplink:focus { top: 190px; z-index: 1; }
  .monaco_shrinkwrap { position: relative; width: 100%; margin: 0px auto; }
  #monaco_shrinkwrap_main { top: 0px; }
  #background_accent1 { background-repeat: no-repeat; margin-right: 481px; position: absolute; right: 50%; z-index: 2; }
  #background_accent2 { background-repeat: no-repeat; background-position: 481px 0px; left: 50%; position: absolute; width: 50%; z-index: 2; }
  .clearfix::after { content: "."; display: block; height: 0px; clear: both; visibility: hidden; }
  .clearfix { display: inline-block; }
  .clearfix { display: block; }
  #wikia_header { border-bottom: 1px solid rgb(153, 153, 153); height: 50px; position: absolute; left: 0px; right: 0px; }
  #userData { line-height: 32px; position: absolute; right: 5px; top: 0px; }
  #userData span { font-size: 9pt; margin-right: 5px; }
  #background_strip { background: white none repeat scroll 0% 0%; border-bottom: 1px solid rgb(153, 153, 153); height: 155px; position: absolute; left: 0px; right: 0px; top: 51px; }
  #wiki_logo { background-repeat: no-repeat; background-position: center center; height: 155px; text-indent: -1000px; z-index: 3; margin-bottom: 7px; }
  #wiki_logo a { display: block; height: 155px; text-decoration: none; }
  #page_wrapper { position: absolute; left: 0px; right: 0px; top: 31px; }
  #monaco_shrinkwrap_main.with_left_sidebar #page_wrapper { left: 211px; }
  .page { background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 1px solid rgb(170, 170, 170); height: 1%; margin: 0px 5px 5px; position: relative; overflow: visible; }
  .page_bar { background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.06) 0%, transparent 33%, transparent 42%, rgba(0, 0, 0, 0.1) 100%); background-position: left top; background-repeat: repeat-x; color: white; font-family: tahoma,sans-serif; font-size: 11pt; margin: 2px 2px 0px; padding: 0px 5px; }
  .page_bar .page_buttons li { float: left; margin-right: 12px; line-height: 32px; position: relative; }
  .page_bar .page_buttons img { top: -1px; }
  .page_bar .page_buttons a { background: transparent none repeat scroll 0% 0%; margin-left: 2px; position: relative; text-decoration: none; }
  .page_bar .page_buttons a:hover { text-decoration: underline; }
  .page_bar .page_tabs, .page .compact_page_tabs { float: right; font-family: arial,sans-serif; }
  .page_bar .page_tabs li, .page .compact_page_tabs li { background-color: rgb(238, 238, 238); color: rgb(0, 0, 0); cursor: pointer; float: left; position: relative; padding: 0px 8px; height: 27px; line-height: 27px; margin-left: 3px; margin-top: 5px; }
  .page_bar .page_tabs li.selected { background-color: white; color: rgb(0, 0, 0); font-weight: bold; }
  .page_bar .page_tabs a, .page .compact_page_tabs a { background: transparent none repeat scroll 0% 0%; color: rgb(0, 0, 0); text-decoration: none; }
  .page_bar .page_tabs a:hover, .page .compact_page_tabs a:hover { text-decoration: underline; }
  .page article { padding: 10px; position: relative; overflow: visible; }
  #article { min-height: 200px; }
  .article_footer { border-top: 1px dashed rgb(204, 204, 204); font-size: 9pt; margin: 0px; overflow: hidden; padding: 0px; }
  .article_footer table { border-collapse: collapse; width: 100%; }
  .article_footer td { padding: 10px; vertical-align: top; }
  .article_footer td.col2 { border-left: 1px dashed rgb(204, 204, 204); width: 50%; }
  .article_footer ul.actions { margin: 0px; padding: 0px; }
  .article_footer ul.actions li { line-height: 1.5em; padding: 2px 0px; position: relative; clear: both; margin-right: 25px; overflow: hidden ! important; }
  .article_footer ul.actions li div { display: inline; position: relative; }
  #fe_history { float: left; width: 12em; }
  #fe_permalink { float: left; width: 12em; }
  #fe_randompage { float: left; width: 12em; }
  #fe_recent { float: left; clear: none ! important; }
  #fe_whatlinkshere { float: left; clear: none ! important; }
  #fe_mobile { float: left; clear: none ! important; }
  .body_content a.external { background: transparent url("monaco-sprite.png") no-repeat scroll right top; padding-right: 13px; }
  .sidebar { position: absolute; top: 51px; width: 206px; z-index: 995; }
  .left_sidebar { left: 5px; }
  .sidebox { background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 1px solid rgb(170, 170, 170); color: rgb(0, 0, 0); margin-bottom: 5px ! important; padding: 2px ! important; }
  .sidebox .sidebox_title { font-family: tahoma,arial,sans-serif; font-size: 9pt; font-weight: bold; line-height: 1.2em; padding: 3px; }
  .sidebox .sidebox_contents { font-size: 9pt; padding: 7px; margin: 0px; }
  .sidebox li { padding: 0.15em 0px; }
  .widget form label { display: inline; }
  #search_box { background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.06) 0%, transparent 33%, transparent 42%, rgba(0, 0, 0, 0.1) 100%); background-position: left top; background-repeat: repeat-x; padding: 4px; position: relative; }
  #searchform { background-color: rgb(255, 255, 255); background-image: linear-gradient(to bottom, rgb(191, 191, 191) 0%, rgb(255, 255, 255) 100%); border: 1px solid rgb(0, 51, 153); border-radius: 5px; }
  #searchInput { background: transparent none repeat scroll 0% 0%; border: 0px none; color: rgb(0, 0, 0); font-size: 9pt; height: 22px; line-height: 22px; margin: 0px; padding: 0px 3px; width: 164px; }
  #searchInput:focus { box-shadow: none; }
  #searchInput:-moz-placeholder { color: gray; }
  #search-button { border-left: 1px solid rgb(204, 204, 204); height: 16px; margin: 0px; position: absolute; right: 8px; top: 8px; width: 16px; }
  .hover-navigation * { overflow: visible; }
  .hover-navigation .sub-menu { margin: 0px ! important; }
  .sub-menu { background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 1px solid rgb(212, 223, 215); padding: 5px 0px; position: absolute; top: 0px; width: 200px; left: -1000%; z-index: 0; }
  .hover-navigation .menu-item.open > .sub-menu, .hover-navigation .menu-item:hover > .sub-menu { display: block; left: 100%; z-index: 1000; }
  .hover-navigation .menu-item { border-bottom: 1px solid rgb(238, 238, 238); display: block; font-family: Tahoma,arial,sans-serif; font-weight: bold; height: 1%; padding: 0px; position: relative; }
  .hover-navigation a { color: rgb(51, 51, 51); display: block; height: 1%; padding: 3px 5px; text-decoration: none; overflow: hidden; }
  .hover-navigation .menu-item:hover > a, .hover-navigation .menu-item > a:active, .hover-navigation .navigation-hover > a { background-color: rgb(224, 239, 255); }
  .hover-navigation em { font-family: arial,sans-serif; font-size: 16pt; font-weight: bold; line-height: 20px; position: absolute; right: 3px; top: 0px; }
  #link_box_table { font-size: 8pt; font-weight: bold; width: 100%; }
  #link_box_table td { padding: 1px 4px; vertical-align: top; overflow: hidden; }
  #link_box_table a { background: transparent none repeat scroll 0% 0%; }
  #link_box_dynamic .link_box_dynamic_item::first-line { line-height: 16px; }
  #link_box_dynamic .link_box_dynamic_item { padding: 3px 0px; position: relative; }
  #positioned_elements { visibility: hidden; }
  #widget_sidebar { z-index: 20; }
}
@media print {
  body { background-color: rgb(255, 255, 255) ! important; background-image: none ! important; color: rgb(0, 0, 0) ! important; padding: 0px; margin: 0px; }
  #wikia_page { padding: 0px; margin: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0% ! important; min-height: 0px; border: medium none ! important; position: static; overflow: visible; }
  #article { padding: 0px; margin: 0px; overflow: visible; position: static; }
  #wikia_header, #background_strip, #widget_sidebar, #page_bar, #articleFooter, #monaco_footer, .wikia_ad, .wikia_spotlight, .wikia_ad_placeholder, #user_masthead_since, #user_masthead_tabs, #user_masthead_scorecard, .blog-comm-input, .blog-comm-order { display: none ! important; }
}
