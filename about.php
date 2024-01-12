<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="https://askproject.net/aerist/xmlrpc.php" />
    <title>About &#8211; Aerist</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="alternate" type="application/rss+xml" title="Aerist &raquo; Feed" href="https://askproject.net/aerist/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Aerist &raquo; Comments Feed" href="https://askproject.net/aerist/comments/feed/" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/askproject.net\/aerist\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='sina-morphing-anim-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/sina-morphing.min.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='de-scroll-animation-css-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/de-scroll-animation.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='de-reveal-animation-css-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/de-reveal-animation.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='de-curtain-animation-revealer-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/revealer.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='de-reveal-curtain-animation-css-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/de-reveal-curtain-animation.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='de-reveal-letter-decolines-css-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/letter/decolines.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='de-reveal-letter-normalize-css-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/letter/normalize.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='de-reveal-letter-lettereffect-css-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/letter/lettereffect.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='de-reveal-letter-pater-css-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/letter/pater.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='de-staggering-animate-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/de_staggering/animate.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='de-staggering-css-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/de_staggering/de-staggering.css?ver=2.0.2' media='all' />
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */

        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='template-kit-export-css' href='https://askproject.net/aerist/wp-content/plugins/template-kit-export/public/assets/css/template-kit-export-public.min.css?ver=1.0.21' media='all' />
    <link rel='stylesheet' id='hfe-style-css' href='https://askproject.net/aerist/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.23' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='https://askproject.net/aerist/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.25.0' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='https://askproject.net/aerist/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.18.3' media='all' />
    <link rel='stylesheet' id='swiper-css' href='https://askproject.net/aerist/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css?ver=5.3.6' media='all' />
    <link rel='stylesheet' id='elementor-post-3-css' href='https://askproject.net/aerist/wp-content/uploads/sites/88/elementor/css/post-3.css?ver=1695330421' media='all' />
    <link rel='stylesheet' id='de-sticky-frontend-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/css/de-sticky-frontend.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='de-product-display-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/css/de-product-display.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='she-header-style-css' href='https://askproject.net/aerist/wp-content/plugins/sticky-header-effects-for-elementor/assets/css/she-header-style.css?ver=1.6.10' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='https://askproject.net/aerist/wp-content/uploads/sites/88/elementor/css/global.css?ver=1695330421' media='all' />
    <link rel='stylesheet' id='elementor-post-378-css' href='https://askproject.net/aerist/wp-content/uploads/sites/88/elementor/css/post-378.css?ver=1695330493' media='all' />
    <link rel='stylesheet' id='hfe-widgets-style-css' href='https://askproject.net/aerist/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.23' media='all' />
    <link rel='stylesheet' id='elementor-post-49-css' href='https://askproject.net/aerist/wp-content/uploads/sites/88/elementor/css/post-49.css?ver=1695330422' media='all' />
    <link rel='stylesheet' id='elementor-post-330-css' href='https://askproject.net/aerist/wp-content/uploads/sites/88/elementor/css/post-330.css?ver=1695330422' media='all' />
    <link rel='stylesheet' id='hello-elementor-css' href='https://askproject.net/aerist/wp-content/themes/hello-elementor/style.min.css?ver=3.0.0' media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css' href='https://askproject.net/aerist/wp-content/themes/hello-elementor/theme.min.css?ver=3.0.0' media='all' />
    <link rel='stylesheet' id='hello-elementor-header-footer-css' href='https://askproject.net/aerist/wp-content/themes/hello-elementor/header-footer.min.css?ver=3.0.0' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='https://askproject.net/aerist/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0' media='all' />
    <link rel='stylesheet' id='simple-line-icons-wl-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/css/simple-line-icons.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='htflexboxgrid-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/css/htflexboxgrid.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='slick-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/css/slick.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='dethemekit-widgets-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/css/dethemekit-widgets.css?ver=2.0.2' media='all' />
    <style id='dethemekit-widgets-inline-css'>
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover,
        .woocommerce a.button,
        .woocommerce a.button:hover,
        .woocommerce button.button,
        .woocommerce button.button:hover,
        .woocommerce a.remove:hover,
        .woocommerce a.button.wc-backward,
        .woocommerce a.button.wc-backward:hover {
            background-color: #D1DCD7
        }

        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .woocommerce #respond input#submit.alt:hover,
        .woocommerce a.button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover,
        .woocommerce a.button,
        .woocommerce a.button:hover,
        .woocommerce button.button,
        .woocommerce button.button:hover,
        .woocommerce a.button.wc-backward,
        .woocommerce button.button:disabled,
        .woocommerce button.button:disabled[disabled],
        .woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout a.wc-forward {
            color: #FFFFFF
        }

        .woocommerce a.remove {
            color: #D1DCD7 !important
        }

        .woocommerce .woocommerce-cart-form a.button,
        .woocommerce .woocommerce-cart-form button.button[type="submit"],
        .woocommerce .cart-collaterals a.checkout-button,
        .woocommerce .return-to-shop a.button.wc-backward {
            border: 1px solid
        }

        .woocommerce-info,
        .woocommerce-message,
        .woocommerce-error {
            border-top-color: #000000
        }

        .woocommerce-info::before,
        .woocommerce-message::before,
        .woocommerce-error::before {
            color: #000000 !important
        }

        Background {
            color: #E8EDEB !important
        }

            {
            color: #F9F7F5 !important
        }

            {
            color: #F9F7F5 !important
        }

        Background #2 {
            color: #1A1A1A !important
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #D1DCD7
        }

        body,
        a {
            color: #7A7A7A
        }
    </style>
    <link rel='stylesheet' id='dethemekit-de-carousel-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/css/dethemekit-de-carousel.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='elementor-icons-ekiticons-css' href='https://askproject.net/aerist/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css?ver=3.0.4' media='all' />
    <link rel='stylesheet' id='ekit-widget-styles-css' href='https://askproject.net/aerist/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=3.0.4' media='all' />
    <link rel='stylesheet' id='ekit-responsive-css' href='https://askproject.net/aerist/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css?ver=3.0.4' media='all' />
    <link rel='stylesheet' id='ecs-styles-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/css/de_loop/ecs-style.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Manrope%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.4.2' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://askproject.net/aerist/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='https://askproject.net/aerist/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css' href='https://askproject.net/aerist/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/jquery-1.12.4-wp.js?ver=6.4.2" id="jquery-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/jquery-migrate-1.4.1-wp.js?ver=6.4.2" id="jquery-migrate-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min.js?ver=1.0.21" id="template-kit-export-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/sticky-header-effects-for-elementor/assets/js/she-header.js?ver=1.6.10" id="she-header-js"></script>
    <script id="dtk_ajax_load-js-extra">
        var ecs_ajax_params = {
            "ajaxurl": "https:\/\/askproject.net\/aerist\/wp-admin\/admin-ajax.php",
            "posts": "{\"page\":0,\"pagename\":\"about\",\"error\":\"\",\"m\":\"\",\"p\":0,\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"name\":\"about\",\"page_id\":0,\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"search_columns\":[],\"post_type\":[\"post\",\"page\",\"e-landing-page\"],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"update_menu_item_cache\":false,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}"
        };
    </script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/de_loop/ecs_ajax_pagination.js?ver=2.0.2" id="dtk_ajax_load-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/de_loop/ecs.js?ver=2.0.2" id="ecs-script-js"></script>
    <link rel="https://api.w.org/" href="https://askproject.net/aerist/wp-json/" />
    <link rel="alternate" type="application/json" href="https://askproject.net/aerist/wp-json/wp/v2/pages/378" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://askproject.net/aerist/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.4.2" />
    <link rel="canonical" href="https://askproject.net/aerist/about/" />
    <link rel='shortlink' href='https://askproject.net/aerist/?p=378' />
    <link rel="alternate" type="application/json+oembed" href="https://askproject.net/aerist/wp-json/oembed/1.0/embed?url=https%3A%2F%2Faskproject.net%2Faerist%2Fabout%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://askproject.net/aerist/wp-json/oembed/1.0/embed?url=https%3A%2F%2Faskproject.net%2Faerist%2Fabout%2F&#038;format=xml" />
    <meta name="generator" content="Elementor 3.18.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-auto">
</head>

<body class="page-template page-template-elementor_header_footer page page-id-378 ehf-header ehf-footer ehf-template-hello-elementor ehf-stylesheet-hello-elementor elementor-default elementor-template-full-width elementor-kit-3 elementor-page elementor-page-378">
    <div id="page" class="hfeed site">

        <?php
        require "header.php";
        ?>

        <div data-elementor-type="wp-page" data-elementor-id="378" class="elementor elementor-378">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-fd81466 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="fd81466" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-481a8ae" data-id="481a8ae" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-01ad8ea de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading" data-id="01ad8ea" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <style>
                                        /*! elementor - v3.18.0 - 20-12-2023 */

                                        .elementor-heading-title {
                                            padding: 0;
                                            margin: 0;
                                            line-height: 1
                                        }

                                        .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                            color: inherit;
                                            font-size: inherit;
                                            line-height: inherit
                                        }

                                        .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                            font-size: 15px
                                        }

                                        .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                            font-size: 19px
                                        }

                                        .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                            font-size: 29px
                                        }

                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                            font-size: 39px
                                        }

                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                            font-size: 59px
                                        }
                                    </style>
                                    <h2 class="elementor-heading-title elementor-size-default">About Us</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-fe7bd84 elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-icon-list" data-id="fe7bd84" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <link rel="stylesheet" href="https://askproject.net/aerist/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-text">Home</span>
                                        </li>
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="icon icon-right-arrow"></i> </span>
                                            <span class="elementor-icon-list-text">About</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-723e989 elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="723e989" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9841d0" data-id="f9841d0" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-element elementor-element-cb6a5c0 de_scroll_animation_no elementor-widget elementor-widget-image" data-id="cb6a5c0" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" width="800" height="1000" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/alfons-taekema-C_zhKgEZy3U-unsplash-819x1024.jpg" class="attachment-large size-large wp-image-398" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/alfons-taekema-C_zhKgEZy3U-unsplash-819x1024.jpg 819w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/alfons-taekema-C_zhKgEZy3U-unsplash-240x300.jpg 240w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/alfons-taekema-C_zhKgEZy3U-unsplash-768x960.jpg 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/alfons-taekema-C_zhKgEZy3U-unsplash-800x1000.jpg 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/alfons-taekema-C_zhKgEZy3U-unsplash.jpg 1200w" sizes="(max-width: 800px) 100vw, 800px" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f334f5d" data-id="f334f5d" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5ed159a de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="5ed159a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <style>
                                        /*! elementor - v3.18.0 - 20-12-2023 */

                                        .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                            background-color: #69727d;
                                            color: #fff
                                        }

                                        .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                            color: #69727d;
                                            border: 3px solid;
                                            background-color: transparent
                                        }

                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                            margin-top: 8px
                                        }

                                        .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                            width: 1em;
                                            height: 1em
                                        }

                                        .elementor-widget-text-editor .elementor-drop-cap {
                                            float: left;
                                            text-align: center;
                                            line-height: 1;
                                            font-size: 50px
                                        }

                                        .elementor-widget-text-editor .elementor-drop-cap-letter {
                                            display: inline-block
                                        }
                                    </style>
                                    <p>About Us</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-321cb1e de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading" data-id="321cb1e" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:200,&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Passion to Capture From The Sky</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-f9f1472 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="f9f1472" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p><em><strong>&#8220;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&#8221;</strong></em></p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b70c74f de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="b70c74f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Suspendisse imperdiet dignissim neque at fringilla. Mauris iaculis ante quam, aliquet elementum felis placerat eu. Nunc id mauris in sapien vestibulum vulputate sed nec ipsum. Phasellus ultricies ultrices magna.</p>
                                </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-c967cfe elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="c967cfe" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:600}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7f0fb17" data-id="7f0fb17" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-954b644 de_scroll_animation_no elementor-widget elementor-widget-elementskit-funfact" data-id="954b644" data-element_type="widget" data-widget_type="elementskit-funfact.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <div class="elementskit-funfact text-left     ">

                                                            <div class="elementskit-funfact-inner position_top">
                                                                <div class="funfact-icon"> <i></i>


                                                                </div>

                                                                <div class="funfact-content">
                                                                    <div class="number-percentage-wraper">
                                                                        <span class="number-percentage" data-value="25" data-animation-duration="3500" data-style="static">0</span> +
                                                                    </div>

                                                                    <h3 class="funfact-title">Years Experience</h3>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-72cecb3" data-id="72cecb3" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5e56857 de_scroll_animation_no elementor-widget elementor-widget-elementskit-funfact" data-id="5e56857" data-element_type="widget" data-widget_type="elementskit-funfact.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <div class="elementskit-funfact text-left     ">

                                                            <div class="elementskit-funfact-inner position_top">
                                                                <div class="funfact-icon"> <i></i>


                                                                </div>

                                                                <div class="funfact-content">
                                                                    <div class="number-percentage-wraper">
                                                                        <span class="number-percentage" data-value="375" data-animation-duration="3500" data-style="static">0</span> +
                                                                    </div>

                                                                    <h3 class="funfact-title">Completed Projects</h3>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-ba2705b elementor-align-left de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-button" data-id="ba2705b" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:700,&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon elementor-align-icon-right">
                                                    <i aria-hidden="true" class="icon icon-right-arrow"></i> </span>
                                                <span class="elementor-button-text">Read More</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-c063b0a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c063b0a" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1d50bb8" data-id="1d50bb8" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-1a3b818 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1a3b818" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4912389" data-id="4912389" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-94cb978 elementor-widget__width-auto de_scroll_animation_no elementor-widget elementor-widget-image" data-id="94cb978" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="800" height="480" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_1-1024x614.png" class="attachment-large size-large wp-image-435" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_1-1024x614.png 1024w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_1-300x180.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_1-768x461.png 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_1-800x480.png 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_1.png 1500w" sizes="(max-width: 800px) 100vw, 800px" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-0fe083a elementor-widget__width-auto de_scroll_animation_no elementor-widget elementor-widget-image" data-id="0fe083a" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="800" height="480" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_2-1024x614.png" class="attachment-large size-large wp-image-434" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_2-1024x614.png 1024w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_2-300x180.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_2-768x461.png 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_2-800x480.png 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_2.png 1500w" sizes="(max-width: 800px) 100vw, 800px" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-714d23d elementor-widget__width-auto de_scroll_animation_no elementor-widget elementor-widget-image" data-id="714d23d" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="800" height="480" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_3-1024x614.png" class="attachment-large size-large wp-image-433" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_3-1024x614.png 1024w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_3-300x180.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_3-768x461.png 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_3-800x480.png 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_3.png 1500w" sizes="(max-width: 800px) 100vw, 800px" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-91788dd elementor-widget__width-auto de_scroll_animation_no elementor-widget elementor-widget-image" data-id="91788dd" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="800" height="480" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_4-1024x614.png" class="attachment-large size-large wp-image-432" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_4-1024x614.png 1024w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_4-300x180.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_4-768x461.png 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_4-800x480.png 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_4.png 1500w" sizes="(max-width: 800px) 100vw, 800px" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ade9b71 elementor-widget__width-auto elementor-hidden-mobile de_scroll_animation_no elementor-widget elementor-widget-image" data-id="ade9b71" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="800" height="480" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_5-1024x614.png" class="attachment-large size-large wp-image-431" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_5-1024x614.png 1024w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_5-300x180.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_5-768x461.png 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_5-800x480.png 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_5.png 1500w" sizes="(max-width: 800px) 100vw, 800px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-692645c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="692645c" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a81f2ed" data-id="a81f2ed" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-00ec218 elementor-widget__width-auto de_scroll_animation_no elementor-widget elementor-widget-image" data-id="00ec218" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="800" height="480" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_6-1024x614.png" class="attachment-large size-large wp-image-430" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_6-1024x614.png 1024w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_6-300x180.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_6-768x461.png 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_6-800x480.png 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_6.png 1500w" sizes="(max-width: 800px) 100vw, 800px" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7ae4c3a elementor-widget__width-auto de_scroll_animation_no elementor-widget elementor-widget-image" data-id="7ae4c3a" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="800" height="480" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_7-1024x614.png" class="attachment-large size-large wp-image-429" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_7-1024x614.png 1024w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_7-300x180.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_7-768x461.png 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_7-800x480.png 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_7.png 1500w" sizes="(max-width: 800px) 100vw, 800px" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-27c3fab elementor-widget__width-auto de_scroll_animation_no elementor-widget elementor-widget-image" data-id="27c3fab" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="800" height="480" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_8-1024x614.png" class="attachment-large size-large wp-image-428" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_8-1024x614.png 1024w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_8-300x180.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_8-768x461.png 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_8-800x480.png 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_8.png 1500w" sizes="(max-width: 800px) 100vw, 800px" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-0c8c34a elementor-widget__width-auto de_scroll_animation_no elementor-widget elementor-widget-image" data-id="0c8c34a" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="800" height="480" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_1-1024x614.png" class="attachment-large size-large wp-image-435" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_1-1024x614.png 1024w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_1-300x180.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_1-768x461.png 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_1-800x480.png 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/client_1.png 1500w" sizes="(max-width: 800px) 100vw, 800px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-e44e95f elementor-reverse-tablet elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e44e95f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c0dc7f1" data-id="c0dc7f1" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-a962c07 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="a962c07" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Vision &amp; Mission</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-771608b de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading" data-id="771608b" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:200,&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Drone Service Beyond Your Imagination</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3977bf2 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-elementskit-header-info" data-id="3977bf2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="elementskit-header-info.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                        <ul class="ekit-header-info">
                                            <li>
                                                <a>
                                                    <i aria-hidden="true" class="fas fa-square-full"></i> Our Vision </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-69ee9ab de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="69ee9ab" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam accumsan augue ut imperdiet semper.</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d44dfe8 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-elementskit-header-info" data-id="d44dfe8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="elementskit-header-info.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                        <ul class="ekit-header-info">
                                            <li>
                                                <a>
                                                    <i aria-hidden="true" class="fas fa-square-full"></i> Our Mission </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-316b088 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="316b088" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Duis tempus nunc dui, id semper elit laoreet finibus. Phasellus placerat orci a mi viverra sagittis. Phasellus augue dolor, egestas in lorem.</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-e52863c elementor-align-left de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-button" data-id="e52863c" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:800,&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon elementor-align-icon-right">
                                                    <i aria-hidden="true" class="icon icon-right-arrow"></i> </span>
                                                <span class="elementor-button-text">Get in Touch</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-d5d967b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d5d967b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1b041b3" data-id="1b041b3" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-e7aecc5 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="e7aecc5" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Our Team</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-efec7c2 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading" data-id="efec7c2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Meet Our Expert Pilots</h2>
                                </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-68d5e2c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="68d5e2c" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:400}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-f2f67ae elementor-invisible" data-id="f2f67ae" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:400}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-d937aa8 de_scroll_animation_no elementor-widget elementor-widget-elementskit-team" data-id="d937aa8" data-element_type="widget" data-widget_type="elementskit-team.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <div class="profile-image-card elementor-animation- ekit-team-img ekit-team-style-overlay text-center">

                                                            <img loading="lazy" decoding="async" width="800" height="1000" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/confident-young-man-standing-with-arms-crossed-aga-7UX3CJB.jpg" class="attachment-large size-large wp-image-245" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/confident-young-man-standing-with-arms-crossed-aga-7UX3CJB.jpg 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/confident-young-man-standing-with-arms-crossed-aga-7UX3CJB-240x300.jpg 240w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/confident-young-man-standing-with-arms-crossed-aga-7UX3CJB-768x960.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" />
                                                            <div class="hover-area">
                                                                <div class="profile-body">
                                                                    <h2 class="profile-title">
                                                                    </h2>
                                                                    <p class="profile-designation"></p>
                                                                </div>
                                                                <div class="profile-footer">
                                                                    <ul class="ekit-team-social-list">
                                                                        <li class="elementor-repeater-item-16ae698">
                                                                            <a href="https://facebook.com" aria-label="Facebook">
                                                                                <i aria-hidden="true" class="icon icon-facebook"></i> </a>
                                                                        </li>
                                                                        <li class="elementor-repeater-item-b891013">
                                                                            <a href="https://facebook.com" aria-label="Twitter">
                                                                                <i aria-hidden="true" class="icon icon-twitter"></i> </a>
                                                                        </li>
                                                                        <li class="elementor-repeater-item-910cfc7">
                                                                            <a href="https://facebook.com" aria-label="Pinterest">
                                                                                <i aria-hidden="true" class="icon icon-pinterest"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-38ab062 de_scroll_animation_no elementor-widget elementor-widget-heading" data-id="38ab062" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Adam Leonard</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-aa9dd89 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="aa9dd89" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Drone Pilot</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-49174bb elementor-invisible" data-id="49174bb" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:500}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ad16ee9 de_scroll_animation_no elementor-widget elementor-widget-elementskit-team" data-id="ad16ee9" data-element_type="widget" data-widget_type="elementskit-team.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <div class="profile-image-card elementor-animation- ekit-team-img ekit-team-style-overlay text-center">

                                                            <img loading="lazy" decoding="async" width="800" height="1000" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/waist-up-portrait-of-serious-good-looking-blonde-f-HTPDLV5.jpg" class="attachment-large size-large wp-image-244" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/waist-up-portrait-of-serious-good-looking-blonde-f-HTPDLV5.jpg 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/waist-up-portrait-of-serious-good-looking-blonde-f-HTPDLV5-240x300.jpg 240w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/waist-up-portrait-of-serious-good-looking-blonde-f-HTPDLV5-768x960.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" />
                                                            <div class="hover-area">
                                                                <div class="profile-body">
                                                                    <h2 class="profile-title">
                                                                    </h2>
                                                                    <p class="profile-designation"></p>
                                                                </div>
                                                                <div class="profile-footer">
                                                                    <ul class="ekit-team-social-list">
                                                                        <li class="elementor-repeater-item-16ae698">
                                                                            <a href="https://facebook.com" aria-label="Facebook">
                                                                                <i aria-hidden="true" class="icon icon-facebook"></i> </a>
                                                                        </li>
                                                                        <li class="elementor-repeater-item-b891013">
                                                                            <a href="https://facebook.com" aria-label="Twitter">
                                                                                <i aria-hidden="true" class="icon icon-twitter"></i> </a>
                                                                        </li>
                                                                        <li class="elementor-repeater-item-910cfc7">
                                                                            <a href="https://facebook.com" aria-label="Pinterest">
                                                                                <i aria-hidden="true" class="icon icon-pinterest"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-b9911ab de_scroll_animation_no elementor-widget elementor-widget-heading" data-id="b9911ab" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Jane Wilson</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-02740e2 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="02740e2" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Drone Pilot</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9a752c4 elementor-invisible" data-id="9a752c4" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:600}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-c5304cb de_scroll_animation_no elementor-widget elementor-widget-elementskit-team" data-id="c5304cb" data-element_type="widget" data-widget_type="elementskit-team.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <div class="profile-image-card elementor-animation- ekit-team-img ekit-team-style-overlay text-center">

                                                            <img loading="lazy" decoding="async" width="800" height="1000" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/portrait-of-cheerful-fashionable-hipster-guy-in-el-VAYRGDJ.jpg" class="attachment-large size-large wp-image-242" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/portrait-of-cheerful-fashionable-hipster-guy-in-el-VAYRGDJ.jpg 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/portrait-of-cheerful-fashionable-hipster-guy-in-el-VAYRGDJ-240x300.jpg 240w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/portrait-of-cheerful-fashionable-hipster-guy-in-el-VAYRGDJ-768x960.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" />
                                                            <div class="hover-area">
                                                                <div class="profile-body">
                                                                    <h2 class="profile-title">
                                                                    </h2>
                                                                    <p class="profile-designation"></p>
                                                                </div>
                                                                <div class="profile-footer">
                                                                    <ul class="ekit-team-social-list">
                                                                        <li class="elementor-repeater-item-16ae698">
                                                                            <a href="https://facebook.com" aria-label="Facebook">
                                                                                <i aria-hidden="true" class="icon icon-facebook"></i> </a>
                                                                        </li>
                                                                        <li class="elementor-repeater-item-b891013">
                                                                            <a href="https://facebook.com" aria-label="Twitter">
                                                                                <i aria-hidden="true" class="icon icon-twitter"></i> </a>
                                                                        </li>
                                                                        <li class="elementor-repeater-item-910cfc7">
                                                                            <a href="https://facebook.com" aria-label="Pinterest">
                                                                                <i aria-hidden="true" class="icon icon-pinterest"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-9e3adb8 de_scroll_animation_no elementor-widget elementor-widget-heading" data-id="9e3adb8" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Mark Smiths</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-eabc716 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="eabc716" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Drone Pilot</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a88de7b elementor-invisible" data-id="a88de7b" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:700}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-91af8da de_scroll_animation_no elementor-widget elementor-widget-elementskit-team" data-id="91af8da" data-element_type="widget" data-widget_type="elementskit-team.default">
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <div class="profile-image-card elementor-animation- ekit-team-img ekit-team-style-overlay text-center">

                                                            <img loading="lazy" decoding="async" width="800" height="1000" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/horizontal-shot-of-handsome-thoughtful-stylish-mal-WLGC95L.jpg" class="attachment-large size-large wp-image-239" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/horizontal-shot-of-handsome-thoughtful-stylish-mal-WLGC95L.jpg 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/horizontal-shot-of-handsome-thoughtful-stylish-mal-WLGC95L-240x300.jpg 240w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/horizontal-shot-of-handsome-thoughtful-stylish-mal-WLGC95L-768x960.jpg 768w" sizes="(max-width: 800px) 100vw, 800px" />
                                                            <div class="hover-area">
                                                                <div class="profile-body">
                                                                    <h2 class="profile-title">
                                                                    </h2>
                                                                    <p class="profile-designation"></p>
                                                                </div>
                                                                <div class="profile-footer">
                                                                    <ul class="ekit-team-social-list">
                                                                        <li class="elementor-repeater-item-16ae698">
                                                                            <a href="https://facebook.com" aria-label="Facebook">
                                                                                <i aria-hidden="true" class="icon icon-facebook"></i> </a>
                                                                        </li>
                                                                        <li class="elementor-repeater-item-b891013">
                                                                            <a href="https://facebook.com" aria-label="Twitter">
                                                                                <i aria-hidden="true" class="icon icon-twitter"></i> </a>
                                                                        </li>
                                                                        <li class="elementor-repeater-item-910cfc7">
                                                                            <a href="https://facebook.com" aria-label="Pinterest">
                                                                                <i aria-hidden="true" class="icon icon-pinterest"></i> </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4e4760e de_scroll_animation_no elementor-widget elementor-widget-heading" data-id="4e4760e" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Jhon Tennet</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-47ca693 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="47ca693" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Drone Pilot</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-13d9b6e elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="13d9b6e" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fff17b2" data-id="fff17b2" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-f18fb05 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-elementskit-accordion" data-id="f18fb05" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="elementskit-accordion.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                        <div class="elementskit-accordion accoedion-primary" id="accordion-659d9d2e60cc5">


                                            <div class="elementskit-card active">
                                                <div class="elementskit-card-header" id="primaryHeading-0-f18fb05">
                                                    <a href="#collapse-4e70e3b659d9d2e60cc5" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-4e70e3b659d9d2e60cc5" aria-expanded="true" aria-controls="Collapse-4e70e3b659d9d2e60cc5">

                                                        <span class="ekit-accordion-title">How much does one drone footage cost?</span>


                                                        <div class="ekit_accordion_icon_group">
                                                            <div class="ekit_accordion_normal_icon">
                                                                <!-- Normal Icon -->
                                                                <i aria-hidden="true" class="icon-open icon-right icon icon-down-arrow1"></i>
                                                            </div>

                                                            <div class="ekit_accordion_active_icon">
                                                                <!-- Active Icon -->
                                                                <i aria-hidden="true" class="icon-closed icon-right icon icon-left-arrows"></i>
                                                            </div>

                                                        </div>


                                                    </a>
                                                </div>

                                                <div id="Collapse-4e70e3b659d9d2e60cc5" class=" show collapse" aria-labelledby="primaryHeading-0-f18fb05" data-parent="#accordion-659d9d2e60cc5">

                                                    <div class="elementskit-card-body ekit-accordion--content">
                                                        <p>Nam iaculis semper pretium. Suspendisse sodales magna in lectus vehicula sollicitudin. Aliquam diam ipsum, ultrices sit amet augue non, cursus suscipit augue.</p>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- .elementskit-card END -->


                                            <div class="elementskit-card ">
                                                <div class="elementskit-card-header" id="primaryHeading-1-f18fb05">
                                                    <a href="#collapse-c4f2acf659d9d2e60cc5" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-c4f2acf659d9d2e60cc5" aria-expanded="false" aria-controls="Collapse-c4f2acf659d9d2e60cc5">

                                                        <span class="ekit-accordion-title">What is the max length of footage you can take?</span>


                                                        <div class="ekit_accordion_icon_group">
                                                            <div class="ekit_accordion_normal_icon">
                                                                <!-- Normal Icon -->
                                                                <i aria-hidden="true" class="icon-open icon-right icon icon-down-arrow1"></i>
                                                            </div>

                                                            <div class="ekit_accordion_active_icon">
                                                                <!-- Active Icon -->
                                                                <i aria-hidden="true" class="icon-closed icon-right icon icon-left-arrows"></i>
                                                            </div>

                                                        </div>


                                                    </a>
                                                </div>

                                                <div id="Collapse-c4f2acf659d9d2e60cc5" class=" collapse" aria-labelledby="primaryHeading-1-f18fb05" data-parent="#accordion-659d9d2e60cc5">

                                                    <div class="elementskit-card-body ekit-accordion--content">
                                                        <p>Nam iaculis semper pretium. Suspendisse sodales magna in lectus vehicula sollicitudin. Aliquam diam ipsum, ultrices sit amet augue non, cursus suscipit augue.</p>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- .elementskit-card END -->


                                            <div class="elementskit-card ">
                                                <div class="elementskit-card-header" id="primaryHeading-2-f18fb05">
                                                    <a href="#collapse-150e6f3659d9d2e60cc5" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-150e6f3659d9d2e60cc5" aria-expanded="false" aria-controls="Collapse-150e6f3659d9d2e60cc5">

                                                        <span class="ekit-accordion-title">What types of drones do you usually use?</span>


                                                        <div class="ekit_accordion_icon_group">
                                                            <div class="ekit_accordion_normal_icon">
                                                                <!-- Normal Icon -->
                                                                <i aria-hidden="true" class="icon-open icon-right icon icon-down-arrow1"></i>
                                                            </div>

                                                            <div class="ekit_accordion_active_icon">
                                                                <!-- Active Icon -->
                                                                <i aria-hidden="true" class="icon-closed icon-right icon icon-left-arrows"></i>
                                                            </div>

                                                        </div>


                                                    </a>
                                                </div>

                                                <div id="Collapse-150e6f3659d9d2e60cc5" class=" collapse" aria-labelledby="primaryHeading-2-f18fb05" data-parent="#accordion-659d9d2e60cc5">

                                                    <div class="elementskit-card-body ekit-accordion--content">
                                                        <p>Nam iaculis semper pretium. Suspendisse sodales magna in lectus vehicula sollicitudin. Aliquam diam ipsum, ultrices sit amet augue non, cursus suscipit augue.</p>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- .elementskit-card END -->


                                            <div class="elementskit-card ">
                                                <div class="elementskit-card-header" id="primaryHeading-3-f18fb05">
                                                    <a href="#collapse-03f7efa659d9d2e60cc5" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-03f7efa659d9d2e60cc5" aria-expanded="false" aria-controls="Collapse-03f7efa659d9d2e60cc5">

                                                        <span class="ekit-accordion-title">What payment methods are available?</span>


                                                        <div class="ekit_accordion_icon_group">
                                                            <div class="ekit_accordion_normal_icon">
                                                                <!-- Normal Icon -->
                                                                <i aria-hidden="true" class="icon-open icon-right icon icon-down-arrow1"></i>
                                                            </div>

                                                            <div class="ekit_accordion_active_icon">
                                                                <!-- Active Icon -->
                                                                <i aria-hidden="true" class="icon-closed icon-right icon icon-left-arrows"></i>
                                                            </div>

                                                        </div>


                                                    </a>
                                                </div>

                                                <div id="Collapse-03f7efa659d9d2e60cc5" class=" collapse" aria-labelledby="primaryHeading-3-f18fb05" data-parent="#accordion-659d9d2e60cc5">

                                                    <div class="elementskit-card-body ekit-accordion--content">
                                                        <p>Nam iaculis semper pretium. Suspendisse sodales magna in lectus vehicula sollicitudin. Aliquam diam ipsum, ultrices sit amet augue non, cursus suscipit augue.</p>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- .elementskit-card END -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ed11460" data-id="ed11460" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-c89f3d7 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="c89f3d7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>FAQs</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3440bb9 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading" data-id="3440bb9" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:200,&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Frequently Asked Questions</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3729400 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="3729400" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Mauris iaculis ante quam, aliquet elementum felis placerat eu. Nunc id mauris in sapien vestibulum vulputate sed nec ipsum.</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d9f9abf elementor-align-left elementor-mobile-align-center de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-button" data-id="d9f9abf" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:600,&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Contact Us</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-d2ab70c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d2ab70c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-97ec38c" data-id="97ec38c" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-b3dd61e de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="b3dd61e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Our Drones</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6c9c8a9 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading" data-id="6c9c8a9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">We Use the Latest Drone Technology</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-95c76e9 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="95c76e9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus.</p>
                                </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-23043db elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="23043db" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:600}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e26c52a" data-id="e26c52a" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-e019de4 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="e019de4" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>5.0 Miles</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a44c074 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="a44c074" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Maximum fly range</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a2a3e3c elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="a2a3e3c" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <style>
                                                        /*! elementor - v3.18.0 - 20-12-2023 */

                                                        .elementor-widget-divider {
                                                            --divider-border-style: none;
                                                            --divider-border-width: 1px;
                                                            --divider-color: #0c0d0e;
                                                            --divider-icon-size: 20px;
                                                            --divider-element-spacing: 10px;
                                                            --divider-pattern-height: 24px;
                                                            --divider-pattern-size: 20px;
                                                            --divider-pattern-url: none;
                                                            --divider-pattern-repeat: repeat-x
                                                        }

                                                        .elementor-widget-divider .elementor-divider {
                                                            display: flex
                                                        }

                                                        .elementor-widget-divider .elementor-divider__text {
                                                            font-size: 15px;
                                                            line-height: 1;
                                                            max-width: 95%
                                                        }

                                                        .elementor-widget-divider .elementor-divider__element {
                                                            margin: 0 var(--divider-element-spacing);
                                                            flex-shrink: 0
                                                        }

                                                        .elementor-widget-divider .elementor-icon {
                                                            font-size: var(--divider-icon-size)
                                                        }

                                                        .elementor-widget-divider .elementor-divider-separator {
                                                            display: flex;
                                                            margin: 0;
                                                            direction: ltr
                                                        }

                                                        .elementor-widget-divider--view-line_icon .elementor-divider-separator,
                                                        .elementor-widget-divider--view-line_text .elementor-divider-separator {
                                                            align-items: center
                                                        }

                                                        .elementor-widget-divider--view-line_icon .elementor-divider-separator:after,
                                                        .elementor-widget-divider--view-line_icon .elementor-divider-separator:before,
                                                        .elementor-widget-divider--view-line_text .elementor-divider-separator:after,
                                                        .elementor-widget-divider--view-line_text .elementor-divider-separator:before {
                                                            display: block;
                                                            content: "";
                                                            border-bottom: 0;
                                                            flex-grow: 1;
                                                            border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                        }

                                                        .elementor-widget-divider--element-align-left .elementor-divider .elementor-divider-separator>.elementor-divider__svg:first-of-type {
                                                            flex-grow: 0;
                                                            flex-shrink: 100
                                                        }

                                                        .elementor-widget-divider--element-align-left .elementor-divider-separator:before {
                                                            content: none
                                                        }

                                                        .elementor-widget-divider--element-align-left .elementor-divider__element {
                                                            margin-left: 0
                                                        }

                                                        .elementor-widget-divider--element-align-right .elementor-divider .elementor-divider-separator>.elementor-divider__svg:last-of-type {
                                                            flex-grow: 0;
                                                            flex-shrink: 100
                                                        }

                                                        .elementor-widget-divider--element-align-right .elementor-divider-separator:after {
                                                            content: none
                                                        }

                                                        .elementor-widget-divider--element-align-right .elementor-divider__element {
                                                            margin-right: 0
                                                        }

                                                        .elementor-widget-divider:not(.elementor-widget-divider--view-line_text):not(.elementor-widget-divider--view-line_icon) .elementor-divider-separator {
                                                            border-top: var(--divider-border-width) var(--divider-border-style) var(--divider-color)
                                                        }

                                                        .elementor-widget-divider--separator-type-pattern {
                                                            --divider-border-style: none
                                                        }

                                                        .elementor-widget-divider--separator-type-pattern.elementor-widget-divider--view-line .elementor-divider-separator,
                                                        .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:after,
                                                        .elementor-widget-divider--separator-type-pattern:not(.elementor-widget-divider--view-line) .elementor-divider-separator:before,
                                                        .elementor-widget-divider--separator-type-pattern:not([class*=elementor-widget-divider--view]) .elementor-divider-separator {
                                                            width: 100%;
                                                            min-height: var(--divider-pattern-height);
                                                            -webkit-mask-size: var(--divider-pattern-size) 100%;
                                                            mask-size: var(--divider-pattern-size) 100%;
                                                            -webkit-mask-repeat: var(--divider-pattern-repeat);
                                                            mask-repeat: var(--divider-pattern-repeat);
                                                            background-color: var(--divider-color);
                                                            -webkit-mask-image: var(--divider-pattern-url);
                                                            mask-image: var(--divider-pattern-url)
                                                        }

                                                        .elementor-widget-divider--no-spacing {
                                                            --divider-pattern-size: auto
                                                        }

                                                        .elementor-widget-divider--bg-round {
                                                            --divider-pattern-repeat: round
                                                        }

                                                        .rtl .elementor-widget-divider .elementor-divider__text {
                                                            direction: rtl
                                                        }

                                                        .e-con-inner>.elementor-widget-divider,
                                                        .e-con>.elementor-widget-divider {
                                                            width: var(--container-widget-width, 100%);
                                                            --flex-grow: var(--container-widget-flex-grow)
                                                        }
                                                    </style>
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3f1b3e7" data-id="3f1b3e7" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-cbc3eea de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="cbc3eea" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>45 Minutes</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5fbc135 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="5fbc135" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Maximum flight time</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-027dc52 elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="027dc52" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-833dadb elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="833dadb" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:700}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9a457e3" data-id="9a457e3" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-d339f79 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="d339f79" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>4K UHD Video</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f76fa77 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="f76fa77" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Latest IBIS tech</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-8fbd6b5 elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="8fbd6b5" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2f26e6a" data-id="2f26e6a" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-65c9118 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="65c9118" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>20 feet</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-706db87 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="706db87" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Obstacles new sensor</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-32413e4 elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="32413e4" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-97297fa" data-id="97297fa" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-element elementor-element-9fb7647 de_scroll_animation_no elementor-widget elementor-widget-image" data-id="9fb7647" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="800" height="450" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/predator-drone-1024x576.png" class="attachment-large size-large wp-image-230" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/predator-drone-1024x576.png 1024w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/predator-drone-300x169.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/predator-drone-768x432.png 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/predator-drone-800x450.png 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/predator-drone.png 1200w" sizes="(max-width: 800px) 100vw, 800px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-6fb8973 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6fb8973" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-eff00e1" data-id="eff00e1" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-bf73367 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="bf73367" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Blog &amp; News</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ee63b17 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading" data-id="ee63b17" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Recent Post & Article</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-8eedfbb de_scroll_animation_no elementor-widget elementor-widget-elementskit-blog-posts" data-id="8eedfbb" data-element_type="widget" data-widget_type="elementskit-blog-posts.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                        <div id="post-items--8eedfbb" class="row post-items">
                                            <div class="col-lg-4 col-md-6">

                                                <div class="elementskit-post-image-card">
                                                    <div class="elementskit-entry-header">
                                                        <a href="https://askproject.net/aerist/2022/07/08/drones-are-start-causing-airport-chaos/" class="elementskit-entry-thumb">
                                                            <img decoding="async" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/william-bayreuther-OChqotwBQNM-unsplash-1024x683.jpg" alt="Drones tech are start causing airport chaos">
                                                        </a>
                                                        <!-- .elementskit-entry-thumb END -->


                                                    </div>
                                                    <!-- .elementskit-entry-header END -->

                                                    <div class="elementskit-post-body ">

                                                        <div class="post-meta-list">
                                                            <span class="meta-date">


                                                                <span class="meta-date-text">
                                                                    July 8, 2022 </span>
                                                            </span>
                                                        </div>


                                                        <h2 class="entry-title">
                                                            <a href="https://askproject.net/aerist/2022/07/08/drones-are-start-causing-airport-chaos/">
                                                                Drones tech are start causing airport chaos </a>
                                                        </h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit ligula diam,&hellip;</p>
                                                        <div class="btn-wraper">

                                                            <a href="https://askproject.net/aerist/2022/07/08/drones-are-start-causing-airport-chaos/" class="elementskit-btn  whitespace--normal">
                                                                Read More </a>
                                                        </div>
                                                    </div>
                                                    <!-- .elementskit-post-body END -->
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6">

                                                <div class="elementskit-post-image-card">
                                                    <div class="elementskit-entry-header">
                                                        <a href="https://askproject.net/aerist/2022/07/08/us-plans-to-launch-swarms-of-attack-drones/" class="elementskit-entry-thumb">
                                                            <img decoding="async" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/jezael-melgoza-wCAa_rIG-Dc-unsplash-1024x683.jpg" alt="US plans to launch swarms of attack drones">
                                                        </a>
                                                        <!-- .elementskit-entry-thumb END -->


                                                    </div>
                                                    <!-- .elementskit-entry-header END -->

                                                    <div class="elementskit-post-body ">

                                                        <div class="post-meta-list">
                                                            <span class="meta-date">


                                                                <span class="meta-date-text">
                                                                    July 8, 2022 </span>
                                                            </span>
                                                        </div>


                                                        <h2 class="entry-title">
                                                            <a href="https://askproject.net/aerist/2022/07/08/us-plans-to-launch-swarms-of-attack-drones/">
                                                                US plans to launch swarms of attack drones </a>
                                                        </h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit ligula diam,&hellip;</p>
                                                        <div class="btn-wraper">

                                                            <a href="https://askproject.net/aerist/2022/07/08/us-plans-to-launch-swarms-of-attack-drones/" class="elementskit-btn  whitespace--normal">
                                                                Read More </a>
                                                        </div>
                                                    </div>
                                                    <!-- .elementskit-post-body END -->
                                                </div>

                                            </div>
                                            <div class="col-lg-4 col-md-6">

                                                <div class="elementskit-post-image-card">
                                                    <div class="elementskit-entry-header">
                                                        <a href="https://askproject.net/aerist/2022/07/08/way-to-stop-drones-disrupting-more-airports/" class="elementskit-entry-thumb">
                                                            <img decoding="async" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/ryoji-iwata-vWfKaO0k9pc-unsplash-1024x683.jpg" alt="Way to stop drones disrupting more airports">
                                                        </a>
                                                        <!-- .elementskit-entry-thumb END -->


                                                    </div>
                                                    <!-- .elementskit-entry-header END -->

                                                    <div class="elementskit-post-body ">

                                                        <div class="post-meta-list">
                                                            <span class="meta-date">


                                                                <span class="meta-date-text">
                                                                    July 8, 2022 </span>
                                                            </span>
                                                        </div>


                                                        <h2 class="entry-title">
                                                            <a href="https://askproject.net/aerist/2022/07/08/way-to-stop-drones-disrupting-more-airports/">
                                                                Way to stop drones disrupting more airports </a>
                                                        </h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit ligula diam,&hellip;</p>
                                                        <div class="btn-wraper">

                                                            <a href="https://askproject.net/aerist/2022/07/08/way-to-stop-drones-disrupting-more-airports/" class="elementskit-btn  whitespace--normal">
                                                                Read More </a>
                                                        </div>
                                                    </div>
                                                    <!-- .elementskit-post-body END -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
            <div class='footer-width-fixer'>
                <div data-elementor-type="wp-post" data-elementor-id="330" class="elementor elementor-330">
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-342f50b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="342f50b" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-836b8e8" data-id="836b8e8" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-62bf7ba elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="62bf7ba" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-74f6832" data-id="74f6832" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-816c752 de_scroll_animation_no elementor-widget elementor-widget-heading" data-id="816c752" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h3 class="elementor-heading-title elementor-size-default">What are you waiting for? Contact us right now and get a free quote for your project​</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c4dc786" data-id="c4dc786" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-a37f7bc elementor-align-left elementor-widget__width-auto de_scroll_animation_no elementor-widget elementor-widget-button" data-id="a37f7bc" data-element_type="widget" data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-icon elementor-align-icon-right">
                                                                            <i aria-hidden="true" class="icon icon-right-arrow"></i> </span>
                                                                        <span class="elementor-button-text">Free Quote</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-4b35aa5 elementor-align-left elementor-widget__width-auto de_scroll_animation_no elementor-widget elementor-widget-button" data-id="4b35aa5" data-element_type="widget" data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-icon elementor-align-icon-right">
                                                                            <i aria-hidden="true" class="fas fa-phone"></i> </span>
                                                                        <span class="elementor-button-text">Contact Us</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-cd0c75d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cd0c75d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5c9c9dc" data-id="5c9c9dc" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-8345e62 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8345e62" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3c5291c elementor-invisible" data-id="3c5291c" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-d3b020d de_scroll_animation_no elementor-widget elementor-widget-image" data-id="d3b020d" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img loading="lazy" width="800" height="210" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/logo_Asset-1-1024x269.png" class="attachment-large size-large wp-image-61" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/logo_Asset-1-1024x269.png 1024w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/logo_Asset-1-300x79.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/logo_Asset-1-768x202.png 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/logo_Asset-1-1536x404.png 1536w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/logo_Asset-1-2048x538.png 2048w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/logo_Asset-1-800x210.png 800w" sizes="(max-width: 800px) 100vw, 800px" />
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-5c54b96 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="5c54b96" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus.</p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-dec728a elementor-shape-square e-grid-align-left e-grid-align-mobile-center e-grid-align-tablet-center elementor-grid-0 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-social-icons" data-id="dec728a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:800}" data-widget_type="social-icons.default">
                                                        <div class="elementor-widget-container">
                                                            <style>
                                                                /*! elementor - v3.18.0 - 20-12-2023 */

                                                                .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                                                                .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                                                                .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                                                    line-height: 1;
                                                                    font-size: 0
                                                                }

                                                                .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                                                    display: inline-grid
                                                                }

                                                                .elementor-widget-social-icons .elementor-grid {
                                                                    grid-column-gap: var(--grid-column-gap, 5px);
                                                                    grid-row-gap: var(--grid-row-gap, 5px);
                                                                    grid-template-columns: var(--grid-template-columns);
                                                                    justify-content: var(--justify-content, center);
                                                                    justify-items: var(--justify-content, center)
                                                                }

                                                                .elementor-icon.elementor-social-icon {
                                                                    font-size: var(--icon-size, 25px);
                                                                    line-height: var(--icon-size, 25px);
                                                                    width: calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em));
                                                                    height: calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em))
                                                                }

                                                                .elementor-social-icon {
                                                                    --e-social-icon-icon-color: #fff;
                                                                    display: inline-flex;
                                                                    background-color: #69727d;
                                                                    align-items: center;
                                                                    justify-content: center;
                                                                    text-align: center;
                                                                    cursor: pointer
                                                                }

                                                                .elementor-social-icon i {
                                                                    color: var(--e-social-icon-icon-color)
                                                                }

                                                                .elementor-social-icon svg {
                                                                    fill: var(--e-social-icon-icon-color)
                                                                }

                                                                .elementor-social-icon:last-child {
                                                                    margin: 0
                                                                }

                                                                .elementor-social-icon:hover {
                                                                    opacity: .9;
                                                                    color: #fff
                                                                }

                                                                .elementor-social-icon-android {
                                                                    background-color: #a4c639
                                                                }

                                                                .elementor-social-icon-apple {
                                                                    background-color: #999
                                                                }

                                                                .elementor-social-icon-behance {
                                                                    background-color: #1769ff
                                                                }

                                                                .elementor-social-icon-bitbucket {
                                                                    background-color: #205081
                                                                }

                                                                .elementor-social-icon-codepen {
                                                                    background-color: #000
                                                                }

                                                                .elementor-social-icon-delicious {
                                                                    background-color: #39f
                                                                }

                                                                .elementor-social-icon-deviantart {
                                                                    background-color: #05cc47
                                                                }

                                                                .elementor-social-icon-digg {
                                                                    background-color: #005be2
                                                                }

                                                                .elementor-social-icon-dribbble {
                                                                    background-color: #ea4c89
                                                                }

                                                                .elementor-social-icon-elementor {
                                                                    background-color: #d30c5c
                                                                }

                                                                .elementor-social-icon-envelope {
                                                                    background-color: #ea4335
                                                                }

                                                                .elementor-social-icon-facebook,
                                                                .elementor-social-icon-facebook-f {
                                                                    background-color: #3b5998
                                                                }

                                                                .elementor-social-icon-flickr {
                                                                    background-color: #0063dc
                                                                }

                                                                .elementor-social-icon-foursquare {
                                                                    background-color: #2d5be3
                                                                }

                                                                .elementor-social-icon-free-code-camp,
                                                                .elementor-social-icon-freecodecamp {
                                                                    background-color: #006400
                                                                }

                                                                .elementor-social-icon-github {
                                                                    background-color: #333
                                                                }

                                                                .elementor-social-icon-gitlab {
                                                                    background-color: #e24329
                                                                }

                                                                .elementor-social-icon-globe {
                                                                    background-color: #69727d
                                                                }

                                                                .elementor-social-icon-google-plus,
                                                                .elementor-social-icon-google-plus-g {
                                                                    background-color: #dd4b39
                                                                }

                                                                .elementor-social-icon-houzz {
                                                                    background-color: #7ac142
                                                                }

                                                                .elementor-social-icon-instagram {
                                                                    background-color: #262626
                                                                }

                                                                .elementor-social-icon-jsfiddle {
                                                                    background-color: #487aa2
                                                                }

                                                                .elementor-social-icon-link {
                                                                    background-color: #818a91
                                                                }

                                                                .elementor-social-icon-linkedin,
                                                                .elementor-social-icon-linkedin-in {
                                                                    background-color: #0077b5
                                                                }

                                                                .elementor-social-icon-medium {
                                                                    background-color: #00ab6b
                                                                }

                                                                .elementor-social-icon-meetup {
                                                                    background-color: #ec1c40
                                                                }

                                                                .elementor-social-icon-mixcloud {
                                                                    background-color: #273a4b
                                                                }

                                                                .elementor-social-icon-odnoklassniki {
                                                                    background-color: #f4731c
                                                                }

                                                                .elementor-social-icon-pinterest {
                                                                    background-color: #bd081c
                                                                }

                                                                .elementor-social-icon-product-hunt {
                                                                    background-color: #da552f
                                                                }

                                                                .elementor-social-icon-reddit {
                                                                    background-color: #ff4500
                                                                }

                                                                .elementor-social-icon-rss {
                                                                    background-color: #f26522
                                                                }

                                                                .elementor-social-icon-shopping-cart {
                                                                    background-color: #4caf50
                                                                }

                                                                .elementor-social-icon-skype {
                                                                    background-color: #00aff0
                                                                }

                                                                .elementor-social-icon-slideshare {
                                                                    background-color: #0077b5
                                                                }

                                                                .elementor-social-icon-snapchat {
                                                                    background-color: #fffc00
                                                                }

                                                                .elementor-social-icon-soundcloud {
                                                                    background-color: #f80
                                                                }

                                                                .elementor-social-icon-spotify {
                                                                    background-color: #2ebd59
                                                                }

                                                                .elementor-social-icon-stack-overflow {
                                                                    background-color: #fe7a15
                                                                }

                                                                .elementor-social-icon-steam {
                                                                    background-color: #00adee
                                                                }

                                                                .elementor-social-icon-stumbleupon {
                                                                    background-color: #eb4924
                                                                }

                                                                .elementor-social-icon-telegram {
                                                                    background-color: #2ca5e0
                                                                }

                                                                .elementor-social-icon-thumb-tack {
                                                                    background-color: #1aa1d8
                                                                }

                                                                .elementor-social-icon-tripadvisor {
                                                                    background-color: #589442
                                                                }

                                                                .elementor-social-icon-tumblr {
                                                                    background-color: #35465c
                                                                }

                                                                .elementor-social-icon-twitch {
                                                                    background-color: #6441a5
                                                                }

                                                                .elementor-social-icon-twitter {
                                                                    background-color: #1da1f2
                                                                }

                                                                .elementor-social-icon-viber {
                                                                    background-color: #665cac
                                                                }

                                                                .elementor-social-icon-vimeo {
                                                                    background-color: #1ab7ea
                                                                }

                                                                .elementor-social-icon-vk {
                                                                    background-color: #45668e
                                                                }

                                                                .elementor-social-icon-weibo {
                                                                    background-color: #dd2430
                                                                }

                                                                .elementor-social-icon-weixin {
                                                                    background-color: #31a918
                                                                }

                                                                .elementor-social-icon-whatsapp {
                                                                    background-color: #25d366
                                                                }

                                                                .elementor-social-icon-wordpress {
                                                                    background-color: #21759b
                                                                }

                                                                .elementor-social-icon-xing {
                                                                    background-color: #026466
                                                                }

                                                                .elementor-social-icon-yelp {
                                                                    background-color: #af0606
                                                                }

                                                                .elementor-social-icon-youtube {
                                                                    background-color: #cd201f
                                                                }

                                                                .elementor-social-icon-500px {
                                                                    background-color: #0099e5
                                                                }

                                                                .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                                                    border-radius: 10%
                                                                }

                                                                .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                                                    border-radius: 50%
                                                                }
                                                            </style>
                                                            <div class="elementor-social-icons-wrapper elementor-grid">
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-82f6b9f" target="_blank">
                                                                        <span class="elementor-screen-only">Twitter</span>
                                                                        <i class="fab fa-twitter"></i> </a>
                                                                </span>
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-9062cc9" target="_blank">
                                                                        <span class="elementor-screen-only">Facebook</span>
                                                                        <i class="fab fa-facebook"></i> </a>
                                                                </span>
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-repeater-item-3380254" target="_blank">
                                                                        <span class="elementor-screen-only">Linkedin-in</span>
                                                                        <i class="fab fa-linkedin-in"></i> </a>
                                                                </span>
                                                                <span class="elementor-grid-item">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-6ca5e19" target="_blank">
                                                                        <span class="elementor-screen-only">Youtube</span>
                                                                        <i class="fab fa-youtube"></i> </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-998c923 elementor-invisible" data-id="998c923" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-2f327ad de_scroll_animation_no elementor-widget elementor-widget-heading" data-id="2f327ad" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h4 class="elementor-heading-title elementor-size-default">Contact</h4>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-2ca9b13 elementor-icon-list--layout-traditional elementor-list-item-link-full_width de_scroll_animation_no elementor-widget elementor-widget-icon-list" data-id="2ca9b13" data-element_type="widget" data-widget_type="icon-list.default">
                                                        <div class="elementor-widget-container">
                                                            <ul class="elementor-icon-list-items">
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-text">aerist@mails.com</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-text">+1 (234) 567 890</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-text">457 Morningview Lane, <br> New York USA</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-text">Mon - Fri : 09.00 - 18.00</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e32e15c elementor-invisible" data-id="e32e15c" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:400}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-6bd61f4 de_scroll_animation_no elementor-widget elementor-widget-heading" data-id="6bd61f4" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h4 class="elementor-heading-title elementor-size-default">Explore</h4>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-3a7b756 hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child de_scroll_animation_no elementor-widget elementor-widget-navigation-menu" data-id="3a7b756" data-element_type="widget" data-settings="{&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3.2,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="navigation-menu.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical" data-layout="vertical">
                                                                <div role="button" class="hfe-nav-menu__toggle elementor-clickable">
                                                                    <span class="screen-reader-text">Menu</span>
                                                                    <div class="hfe-nav-menu-icon">
                                                                    </div>
                                                                </div>
                                                                <nav class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow" data-toggle-icon="" data-close-icon="" data-full-width="">
                                                                    <ul id="menu-1-3a7b756" class="hfe-nav-menu">
                                                                        <li id="menu-item-641" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="https://askproject.net/aerist/home/" class="hfe-menu-item">Home</a></li>
                                                                        <li id="menu-item-639" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-378 current_page_item parent hfe-creative-menu"><a href="https://askproject.net/aerist/about/" class="hfe-menu-item">About</a></li>
                                                                        <li id="menu-item-642" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="https://askproject.net/aerist/projects/" class="hfe-menu-item">Projects</a></li>
                                                                        <li id="menu-item-643" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="https://askproject.net/aerist/services/" class="hfe-menu-item">Services</a></li>
                                                                        <li id="menu-item-640" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="https://askproject.net/aerist/blog/" class="hfe-menu-item">Blog</a></li>
                                                                    </ul>
                                                                </nav>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-281576f elementor-invisible" data-id="281576f" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:600}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-805b812 de_scroll_animation_no elementor-widget elementor-widget-heading" data-id="805b812" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h4 class="elementor-heading-title elementor-size-default">Support</h4>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-9d53586 elementor-icon-list--layout-traditional elementor-list-item-link-full_width de_scroll_animation_no elementor-widget elementor-widget-icon-list" data-id="9d53586" data-element_type="widget" data-widget_type="icon-list.default">
                                                        <div class="elementor-widget-container">
                                                            <ul class="elementor-icon-list-items">
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-text">Support Desk</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-text">Career</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-text">FAQs</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="#">

                                                                        <span class="elementor-icon-list-text">Contact</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <span class="elementor-icon-list-text">Call Center</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-da59f78 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="da59f78" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-11ad7ca" data-id="11ad7ca" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-9d0f26a de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="9d0f26a" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Copyright © 2022 ASK Project</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-46b7dd9" data-id="46b7dd9" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-36d899d elementor-widget__width-auto de_scroll_animation_no elementor-widget elementor-widget-button" data-id="36d899d" data-element_type="widget" data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-text">Privacy Policy</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-2dd0fcb elementor-widget__width-auto de_scroll_animation_no elementor-widget elementor-widget-button" data-id="2dd0fcb" data-element_type="widget" data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-text">Terms & Services</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </footer>
    </div>
    <!-- #page -->
    <link rel='stylesheet' id='odometer-css' href='https://askproject.net/aerist/wp-content/plugins/elementskit-lite/widgets/init/assets/css/odometer-theme-default.css?ver=3.0.4' media='all' />
    <link rel='stylesheet' id='e-animations-css' href='https://askproject.net/aerist/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.18.3' media='all' />
    <script src="https://askproject.net/aerist/wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=3.0.0" id="hello-theme-frontend-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js?ver=3.0.4" id="elementskit-framework-js-frontend-js"></script>
    <script id="elementskit-framework-js-frontend-js-after">
        var elementskit = {
            resturl: 'https://askproject.net/aerist/wp-json/elementskit/v1/',
        }
    </script>
    <script src="https://askproject.net/aerist/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js?ver=3.0.4" id="ekit-widget-scripts-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/elementskit-lite/widgets/init/assets/js/odometer.min.js?ver=3.0.4" id="odometer-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/header-footer-elementor/inc/js/frontend.js?ver=1.6.23" id="hfe-frontend-js-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/lib/ResizeSensor.min.js?ver=1.7.0" id="de-resize-sensor-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/lib/sticky-sidebar/sticky-sidebar.min.js?ver=3.3.1" id="de-sticky-sidebar-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/lib/jsticky/jquery.jsticky.js?ver=1.1.0" id="jsticky-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.18.3" id="elementor-webpack-runtime-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.18.3" id="elementor-frontend-modules-js"></script>
    <script src="https://askproject.net/aerist/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.18.3",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "additional_custom_breakpoints": true,
                "hello-theme-header-footer": true,
                "block_editor_assets_optimize": true,
                "landing-pages": true,
                "e_image_loading_optimization": true,
                "e_global_styleguide": true
            },
            "urls": {
                "assets": "https:\/\/askproject.net\/aerist\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper-container",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description",
                "hello_header_logo_type": "title",
                "hello_header_menu_layout": "horizontal",
                "hello_footer_logo_type": "logo"
            },
            "post": {
                "id": 378,
                "title": "About%20%E2%80%93%20Aerist",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src="https://askproject.net/aerist/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.18.3" id="elementor-frontend-js"></script>
    <script id="de-sticky-frontend-js-extra">
        var DeStickySettings = {
            "elements_data": {
                "sections": [],
                "columns": []
            }
        };
    </script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/de-sticky-frontend.js?ver=2.0.2" id="de-sticky-frontend-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/de-active-icon-box.js?ver=2.0.2" id="de-active-icon-box-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/de-active-column.js?ver=2.0.2" id="de-active-column-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.min.js?ver=3.0.4" id="animate-circle-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js?ver=3.0.4" id="elementskit-elementor-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/anime.min.js?ver=6.4.2" id="dethemekit-anime-js-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/scrollMonitor.js?ver=6.4.2" id="de-scroll-animation-scrollmonitor-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/de_scroll_animation.preview.js?ver=6.4.2" id="de-scroll-animation-preview-js-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/intersectionobserver.js?ver=6.4.2" id="de-reveal-animation-intersection-observer-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/letter/charming.min.js?ver=6.4.2" id="de-reveal-letter-charming-js-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/letter/lineMaker.js?ver=6.4.2" id="de-reveal-letter-lineMaker-js-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/letter/imagesloaded.pkgd.min.js?ver=6.4.2" id="de-reveal-letter-imagesloaded-js-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/letter/textfx.js?ver=6.4.2" id="de-reveal-letter-textfx-js-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/main.js?ver=6.4.2" id="de-curtain-animation-main-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/de_reveal_animation.preview.js?ver=6.4.2" id="de-reveal-animation-preview-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/de_staggering/de_staggering.js?ver=6.4.2" id="de-staggering-js"></script>
    <script src="https://askproject.net/aerist/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
    <script id="wp-util-js-extra">
        var _wpUtilSettings = {
            "ajax": {
                "url": "\/aerist\/wp-admin\/admin-ajax.php"
            }
        };
    </script>
    <script src="https://askproject.net/aerist/wp-includes/js/wp-util.min.js?ver=6.4.2" id="wp-util-js"></script>
    <script id="wpforms-elementor-js-extra">
        var wpformsElementorVars = {
            "captcha_provider": "recaptcha",
            "recaptcha_type": "v2"
        };
    </script>
    <script src="https://askproject.net/aerist/wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.min.js?ver=1.8.5.4" id="wpforms-elementor-js"></script>
</body>

</html>


<!-- Page supported by LiteSpeed Cache 6.0.0.1 on 2024-01-09 19:23:26 -->