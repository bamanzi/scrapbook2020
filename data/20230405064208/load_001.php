/* Code tidied up by ScrapBook */
pre, .mw-code { white-space: pre; }
span.archwiki-template-pkg, span.archwiki-template-man { font-family: monospace,monospace; }
div.archwiki-template-box { padding: 5px; border: thin solid black; margin: 0.5em 0px; overflow: hidden; }
div.archwiki-template-box.archwiki-template-box-tip { background-color: rgb(221, 255, 221); border-color: rgb(187, 221, 187); }
@media screen and (min-width: 721px) {
}
.mw-body-content h2 { font-size: 150%; }
.mw-body-content h3 { font-size: 128%; }
body { counter-reset: h2-section h3-section h4-section h5-section h6-section; }
h2 > .mw-headline { counter-increment: h2-section; }
h3 > .mw-headline { counter-increment: h3-section; }
h2 > .mw-headline::before { content: counter(h2-section, decimal); }
h3 > .mw-headline::before { content: counter(h2-section, decimal) "." counter(h3-section, decimal); }
h2 > .mw-headline::before, h3 > .mw-headline::before, h4 > .mw-headline::before, h5 > .mw-headline::before, h6 > .mw-headline::before { color: rgb(107, 62, 38); font-style: italic; margin-right: 1ex; }
.skin-vector-2022 .sidebar-toc .sidebar-toc-numb { display: inline; padding-right: 0.5em; }
body:not(.page-Main_page) #bodyContent { display: flex; flex-direction: column; }
body:not(.page-Main_page) #catlinks { order: -1; margin: 0.5em 0px 1em; }
body:not(.page-Main_page) p:first-child, .archwiki-template-meta-related-articles-start + p { margin-top: 0px; }
@keyframes pacman-jaw-top {
0%, 100% { transform: rotate(-45deg); }
50% { transform: rotate(-80deg); }
}
@keyframes pacman-jaw-bottom {
0%, 100% { transform: rotate(-45deg); }
50% { transform: rotate(0deg); }
}
@keyframes pacman-food-translation {
0% { transform: translateX(60%); }
100% { transform: translateX(-40%); }
}
@media screen {
}
