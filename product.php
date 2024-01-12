<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="https://askproject.net/aerist/xmlrpc.php" />
    <title>Drones &#8211; Aerist</title>
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
    <link rel='stylesheet' id='elementor-post-479-css' href='https://askproject.net/aerist/wp-content/uploads/sites/88/elementor/css/post-479.css?ver=1695377527' media='all' />
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
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Manrope%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.4.2'
        media='all' />
    <!-- <link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://askproject.net/aerist/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' media='all' /> -->
    <link rel='stylesheet' id='font-awesome-css' href='./font-awesome.min.css' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='./solid.min.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css' href='./brands.min.css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/jquery-1.12.4-wp.js?ver=6.4.2" id="jquery-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/jquery-migrate-1.4.1-wp.js?ver=6.4.2" id="jquery-migrate-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/template-kit-export/public/assets/js/template-kit-export-public.min.js?ver=1.0.21" id="template-kit-export-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/sticky-header-effects-for-elementor/assets/js/she-header.js?ver=1.6.10" id="she-header-js"></script>
    <script id="dtk_ajax_load-js-extra">
        var ecs_ajax_params = {
            "ajaxurl": "https:\/\/askproject.net\/aerist\/wp-admin\/admin-ajax.php",
            "posts": "{\"page\":0,\"pagename\":\"drones\",\"error\":\"\",\"m\":\"\",\"p\":0,\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"name\":\"drones\",\"page_id\":0,\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"search_columns\":[],\"post_type\":[\"post\",\"page\",\"e-landing-page\"],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"update_menu_item_cache\":false,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}"
        };
    </script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/de_loop/ecs_ajax_pagination.js?ver=2.0.2" id="dtk_ajax_load-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/de_loop/ecs.js?ver=2.0.2" id="ecs-script-js"></script>
    <link rel="https://api.w.org/" href="https://askproject.net/aerist/wp-json/" />
    <link rel="alternate" type="application/json" href="https://askproject.net/aerist/wp-json/wp/v2/pages/479" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://askproject.net/aerist/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.4.2" />
    <link rel="canonical" href="https://askproject.net/aerist/drones/" />
    <link rel='shortlink' href='https://askproject.net/aerist/?p=479' />
    <link rel="alternate" type="application/json+oembed" href="https://askproject.net/aerist/wp-json/oembed/1.0/embed?url=https%3A%2F%2Faskproject.net%2Faerist%2Fdrones%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://askproject.net/aerist/wp-json/oembed/1.0/embed?url=https%3A%2F%2Faskproject.net%2Faerist%2Fdrones%2F&#038;format=xml" />
    <meta name="generator" content="Elementor 3.18.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-auto">
</head>

<body class="page-template page-template-elementor_header_footer page page-id-479 ehf-header ehf-footer ehf-template-hello-elementor ehf-stylesheet-hello-elementor elementor-default elementor-template-full-width elementor-kit-3 elementor-page elementor-page-479">
    <div id="page" class="hfeed site">

<?php 
require "header.php";
?>

        <div data-elementor-type="wp-page" data-elementor-id="479" class="elementor elementor-479">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-0f501b7 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="0f501b7" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-11351cd" data-id="11351cd" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-0b6c022 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading" data-id="0b6c022" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
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
                                    <h2 class="elementor-heading-title elementor-size-default">Our Drones</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-25316c7 elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-icon-list" data-id="25316c7"
                                data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <link rel="stylesheet" href="https://askproject.net/aerist/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-text">Home</span>
                                        </li>
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="icon icon-right-arrow"></i>						</span>
                                            <span class="elementor-icon-list-text">Drones</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-c5ea957 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c5ea957" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-150aed7" data-id="150aed7" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-58f2c11 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="58f2c11" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="text-editor.default">
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
                                    <p>Our Drones</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4a0b5e0 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading" data-id="4a0b5e0" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Clicking The images with perfection</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-e97be58 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e97be58" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f119c78" data-id="f119c78" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1af1440 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="1af1440" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Our Drones</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-39b8dfa de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading" data-id="39b8dfa" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Shooting Star V7</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-578c90e de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="578c90e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus.</p>
                                </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-874ac9d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="874ac9d" data-element_type="section"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:600}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7fcb9d5" data-id="7fcb9d5" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ef61722 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="ef61722" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>5.0 Miles</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ba0a785 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="ba0a785" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Maximum fly range</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-49a2923 elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="49a2923" data-element_type="widget" data-widget_type="divider.default">
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
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-923586c" data-id="923586c" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5698ab1 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="5698ab1" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>45 Minutes</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4fb4fb1 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="4fb4fb1" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Maximum flight time</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-9086471 elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="9086471" data-element_type="widget" data-widget_type="divider.default">
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
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-fca41a4 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="fca41a4" data-element_type="section"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:700}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-bf95c15" data-id="bf95c15" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a3642a2 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="a3642a2" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>4K UHD Video</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-44189ab de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="44189ab" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Latest IBIS tech</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e09f200 elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="e09f200" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
						</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2e73a11" data-id="2e73a11" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-60d6a15 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="60d6a15" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>20 feet</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-c874fd0 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="c874fd0" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Obstacles new sensor</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a24a461 elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="a24a461" data-element_type="widget" data-widget_type="divider.default">
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
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fca6992" data-id="fca6992" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-element elementor-element-5006e61 de_scroll_animation_no elementor-widget elementor-widget-image" data-id="5006e61" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" width="800" height="450" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/predator-drone-1024x576.png" class="attachment-large size-large wp-image-230" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/predator-drone-1024x576.png 1024w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/predator-drone-300x169.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/predator-drone-768x432.png 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/predator-drone-800x450.png 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/predator-drone.png 1200w"
                                        sizes="(max-width: 800px) 100vw, 800px" /> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-60d05fb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="60d05fb" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d919a8b" data-id="d919a8b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-element elementor-element-7e6f6fd de_scroll_animation_no elementor-widget elementor-widget-image" data-id="7e6f6fd" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="800" height="416" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/Drone2-1024x533.png" class="attachment-large size-large wp-image-70" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/Drone2-1024x533.png 1024w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/Drone2-300x156.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/Drone2-768x400.png 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/Drone2-1536x800.png 1536w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/Drone2-800x416.png 800w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/Drone2.png 1800w"
                                        sizes="(max-width: 800px) 100vw, 800px" /> </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3ae7000" data-id="3ae7000" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-554dee1 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="554dee1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Our Drones</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a8f49f8 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading" data-id="a8f49f8" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Phantom Sky 112</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1ca4dfc de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="1ca4dfc" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus.</p>
                                </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-70300f8 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="70300f8" data-element_type="section"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:600}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ad1fa58" data-id="ad1fa58" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-0abc4ba de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="0abc4ba" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>5.0 Miles</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-491c47d de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="491c47d" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Maximum fly range</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7a62fc7 elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="7a62fc7" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
						</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e57b55a" data-id="e57b55a" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-84e7703 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="84e7703" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>45 Minutes</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-bf46c7b de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="bf46c7b" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Maximum flight time</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-990beb4 elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="990beb4" data-element_type="widget" data-widget_type="divider.default">
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
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-95362f6 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="95362f6" data-element_type="section"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:700}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-20f8505" data-id="20f8505" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-3de6d91 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="3de6d91" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>4K UHD Video</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1438801 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="1438801" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Latest IBIS tech</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-57921cf elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="57921cf" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
						</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b10363e" data-id="b10363e" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a835b09 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="a835b09" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>20 feet</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ceeb39a de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="ceeb39a" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Obstacles new sensor</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4ac59c5 elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="4ac59c5" data-element_type="widget" data-widget_type="divider.default">
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
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-1f6f766 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1f6f766" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7622087" data-id="7622087" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-57f6767 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="57f6767" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Our Drones</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-76b7eca de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading" data-id="76b7eca" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Blue Shark 2.5</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4458d2c de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="4458d2c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus.</p>
                                </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-abcee73 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="abcee73" data-element_type="section"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:600}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ee7f400" data-id="ee7f400" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-e05c5b4 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="e05c5b4" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>5.0 Miles</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-f9f653e de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="f9f653e" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Maximum fly range</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-6a934ce elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="6a934ce" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
						</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a4bb106" data-id="a4bb106" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-be86bae de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="be86bae" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>45 Minutes</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-547bd89 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="547bd89" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Maximum flight time</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1bd817e elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="1bd817e" data-element_type="widget" data-widget_type="divider.default">
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
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-b6783ff elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="b6783ff" data-element_type="section"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:700}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-781155a" data-id="781155a" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-69b0c74 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="69b0c74" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>4K UHD Video</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-0113682 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="0113682" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Latest IBIS tech</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-878401d elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="878401d" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
						</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0d0d671" data-id="0d0d671" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-6a1a792 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="6a1a792" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>20 feet</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-02b1058 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="02b1058" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Obstacles new sensor</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-bc6fafa elementor-widget-divider--view-line de_scroll_animation_no elementor-widget elementor-widget-divider" data-id="bc6fafa" data-element_type="widget" data-widget_type="divider.default">
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
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-22a4a93" data-id="22a4a93" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-element elementor-element-fbea98c de_scroll_animation_no elementor-widget elementor-widget-image" data-id="fbea98c" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img loading="lazy" decoding="async" width="695" height="619" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/dji-spark.png" class="attachment-large size-large wp-image-231" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/dji-spark.png 695w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/dji-spark-300x267.png 300w"
                                        sizes="(max-width: 695px) 100vw, 695px" /> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-section elementor-top-section elementor-element elementor-element-1806d80 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1806d80" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aaf0c64" data-id="aaf0c64" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-65c8d5a de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="65c8d5a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>Our Equipments</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4208691 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading" data-id="4208691" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Additional Equipments</h2>
                                </div>
                            </div>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-0a62a65 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0a62a65" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bd6fe32 elementor-invisible" data-id="bd6fe32" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:400}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-f54be0b de_scroll_animation_no elementor-widget elementor-widget-image" data-id="f54be0b" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="601" height="601" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/controller.png" class="attachment-large size-large wp-image-490" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/controller.png 601w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/controller-300x300.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/controller-150x150.png 150w"
                                                        sizes="(max-width: 601px) 100vw, 601px" /> </div>
                                            </div>
                                            <div class="elementor-element elementor-element-38435a5 de_scroll_animation_no elementor-widget elementor-widget-heading" data-id="38435a5" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Professional Controller</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1d41c1b de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="1d41c1b" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tellus, luctus nec ullamcorper mattis.</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-002cded elementor-align-left de_scroll_animation_no elementor-widget elementor-widget-button" data-id="002cded" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon elementor-align-icon-right">
				<i aria-hidden="true" class="icon icon-right-arrow"></i>			</span>
						<span class="elementor-button-text">Read more</span>
		</span>
					</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4a94c3f elementor-invisible" data-id="4a94c3f" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:500}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-725c47b de_scroll_animation_no elementor-widget elementor-widget-image" data-id="725c47b" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="621" height="621" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/lens-1.png" class="attachment-large size-large wp-image-488" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/lens-1.png 621w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/lens-1-300x300.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/lens-1-150x150.png 150w"
                                                        sizes="(max-width: 621px) 100vw, 621px" /> </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7a495e1 de_scroll_animation_no elementor-widget elementor-widget-heading" data-id="7a495e1" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Additional Lens</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-b86f1e6 de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="b86f1e6" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tellus, luctus nec ullamcorper mattis.</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ddc700e elementor-align-left de_scroll_animation_no elementor-widget elementor-widget-button" data-id="ddc700e" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon elementor-align-icon-right">
				<i aria-hidden="true" class="icon icon-right-arrow"></i>			</span>
						<span class="elementor-button-text">Read more</span>
		</span>
					</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a82fc96 elementor-invisible" data-id="a82fc96" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:600}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-22904f2 de_scroll_animation_no elementor-widget elementor-widget-image" data-id="22904f2" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img loading="lazy" decoding="async" width="800" height="800" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/macbook-1.png" class="attachment-large size-large wp-image-489" alt="" srcset="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/macbook-1.png 1017w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/macbook-1-300x300.png 300w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/macbook-1-150x150.png 150w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/macbook-1-768x768.png 768w, https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/macbook-1-800x800.png 800w"
                                                        sizes="(max-width: 800px) 100vw, 800px" /> </div>
                                            </div>
                                            <div class="elementor-element elementor-element-53c66de de_scroll_animation_no elementor-widget elementor-widget-heading" data-id="53c66de" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Editing Tools</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-032e96e de_scroll_animation_no elementor-widget elementor-widget-text-editor" data-id="032e96e" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tellus, luctus nec ullamcorper mattis.</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3f64618 elementor-align-left de_scroll_animation_no elementor-widget elementor-widget-button" data-id="3f64618" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon elementor-align-icon-right">
				<i aria-hidden="true" class="icon icon-right-arrow"></i>			</span>
						<span class="elementor-button-text">Read more</span>
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
            <section class="elementor-section elementor-top-section elementor-element elementor-element-67225bd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="67225bd" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c2bcc30" data-id="c2bcc30" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-ab7d8c1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ab7d8c1" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-fe55ff2" data-id="fe55ff2" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-243d42e de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor" data-id="243d42e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Our Projects</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-46199b3 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading" data-id="46199b3" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">Capture Memories With Us</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c39fbd4" data-id="c39fbd4" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-00bcdeb elementor-align-right elementor-mobile-align-center de_scroll_animation_no elementor-widget elementor-widget-button" data-id="00bcdeb" data-element_type="widget" data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm" href="#">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon elementor-align-icon-right">
				<i aria-hidden="true" class="icon icon-right-arrow"></i>			</span>
						<span class="elementor-button-text">All Project</span>
		</span>
					</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-5dc6460 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-dethemekit-img-gallery" data-id="5dc6460" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}"
                                data-widget_type="dethemekit-img-gallery.default">
                                <div class="elementor-widget-container">

                                    <div id="dethemekit-img-gallery-5dc6460" class="dethemekit-img-gallery dethemekit-img-gallery-masonry zoomin">

                                        <div class="dethemekit-gallery-container" data-settings="{&quot;img_size&quot;:&quot;masonry&quot;,&quot;filter&quot;:&quot;&quot;,&quot;theme&quot;:&quot;pp_default&quot;,&quot;active_cat&quot;:&quot;*&quot;,&quot;ltr_mode&quot;:true,&quot;shuffle&quot;:false,&quot;sort_by&quot;:&quot;original-order&quot;,&quot;skin&quot;:&quot;style3&quot;,&quot;light_box&quot;:&quot;yes&quot;,&quot;lightbox_type&quot;:&quot;default&quot;,&quot;overlay&quot;:false}">

                                            <div class="dethemekit-gallery-item elementor-repeater-item-e329ec7 category-1">
                                                <div class="pa-gallery-img style3" onclick="">
                                                    <div class="pa-gallery-img-container">

                                                        <img decoding="async" class="pa-gallery-image" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/drone-in-the-air-29CNFKZZ.jpg" alt="drone-in-the-air-29CNFKZZ">
                                                        <div class="pa-gallery-icons-wrapper">
                                                            <div class="pa-gallery-icons-inner-container">

                                                                <a class="pa-gallery-magnific-image" href="http://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/drone-in-the-air-29CNFKZZ.jpg" data-rel="prettyPhoto[dethemekit-grid-5dc6460]">
						<span>
							<i aria-hidden="true" class="fas fa-search"></i>						</span>
					</a>
                                                                <a class="pa-gallery-img-link" href="#" target="" rel="">
						<span>
							<i aria-hidden="true" class="fas fa-link"></i>						</span>
					</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dethemekit-gallery-item elementor-repeater-item-75d69f4 category-2">
                                                <div class="pa-gallery-img style3" onclick="">
                                                    <div class="pa-gallery-img-container">

                                                        <img decoding="async" class="pa-gallery-image" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/chuttersnap-u-Qgv9qY48Q-unsplash.jpg" alt="chuttersnap-u-Qgv9qY48Q-unsplash">
                                                        <div class="pa-gallery-icons-wrapper">
                                                            <div class="pa-gallery-icons-inner-container">

                                                                <a class="pa-gallery-magnific-image" href="http://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/chuttersnap-u-Qgv9qY48Q-unsplash.jpg" data-rel="prettyPhoto[dethemekit-grid-5dc6460]">
						<span>
							<i aria-hidden="true" class="fas fa-search"></i>						</span>
					</a>
                                                                <a class="pa-gallery-img-link" href="#" target="" rel="">
						<span>
							<i aria-hidden="true" class="fas fa-link"></i>						</span>
					</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dethemekit-gallery-item elementor-repeater-item-fbd6f73 category-2">
                                                <div class="pa-gallery-img style3" onclick="">
                                                    <div class="pa-gallery-img-container">

                                                        <img decoding="async" class="pa-gallery-image" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/jeremy-bishop-7JPerNWjEAE-unsplash.jpg" alt="jeremy-bishop-7JPerNWjEAE-unsplash">
                                                        <div class="pa-gallery-icons-wrapper">
                                                            <div class="pa-gallery-icons-inner-container">

                                                                <a class="pa-gallery-magnific-image" href="http://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/jeremy-bishop-7JPerNWjEAE-unsplash.jpg" data-rel="prettyPhoto[dethemekit-grid-5dc6460]">
						<span>
							<i aria-hidden="true" class="fas fa-search"></i>						</span>
					</a>
                                                                <a class="pa-gallery-img-link" href="#" target="" rel="">
						<span>
							<i aria-hidden="true" class="fas fa-link"></i>						</span>
					</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dethemekit-gallery-item elementor-repeater-item-3346b0f category-1">
                                                <div class="pa-gallery-img style3" onclick="">
                                                    <div class="pa-gallery-img-container">

                                                        <img decoding="async" class="pa-gallery-image" src="https://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/man-operating-drone-using-remote-controller-7QWJHS4.jpg" alt="Close up man operating drone using remote controller. Man using drone at sunset for photos and video making">
                                                        <div class="pa-gallery-icons-wrapper">
                                                            <div class="pa-gallery-icons-inner-container">

                                                                <a class="pa-gallery-magnific-image" href="http://askproject.net/aerist/wp-content/uploads/sites/88/2022/07/man-operating-drone-using-remote-controller-7QWJHS4.jpg" data-rel="prettyPhoto[dethemekit-grid-5dc6460]">
						<span>
							<i aria-hidden="true" class="fas fa-search"></i>						</span>
					</a>
                                                                <a class="pa-gallery-img-link" href="#" target="" rel="">
						<span>
							<i aria-hidden="true" class="fas fa-link"></i>						</span>
					</a>
                                                            </div>
                                                        </div>
                                                    </div>
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

        <?php
        require "footer.php";
        ?>
    </div>
    <!-- #page -->
    <link rel='stylesheet' id='pa-prettyphoto-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/frontend/min-css/prettyphoto.min.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='dethemekit-addons-css' href='https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/frontend/min-css/dethemekit-addons.min.css?ver=2.0.2' media='all' />
    <link rel='stylesheet' id='e-animations-css' href='https://askproject.net/aerist/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.18.3' media='all' />
    <script src="https://askproject.net/aerist/wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=3.0.0" id="hello-theme-frontend-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js?ver=3.0.4" id="elementskit-framework-js-frontend-js"></script>
    <script id="elementskit-framework-js-frontend-js-after">
        var elementskit = {
            resturl: 'https://askproject.net/aerist/wp-json/elementskit/v1/',
        }
    </script>
    <script src="https://askproject.net/aerist/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js?ver=3.0.4" id="ekit-widget-scripts-js"></script>
    <script src="https://askproject.net/aerist/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/frontend/min-js/prettyPhoto.min.js?ver=2.0.2" id="prettyPhoto-js-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/frontend/min-js/isotope.min.js?ver=2.0.2" id="isotope-js-js"></script>
    <script id="dethemekit-addons-js-js-extra">
        var DethemeKitSettings = {
            "ajaxurl": "https:\/\/askproject.net\/aerist\/wp-admin\/admin-ajax.php",
            "nonce": "8fe7934d03"
        };
    </script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/frontend/min-js/dethemekit-addons.min.js?ver=2.0.2" id="dethemekit-addons-js-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/header-footer-elementor/inc/js/frontend.js?ver=1.6.23" id="hfe-frontend-js-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/lib/ResizeSensor.min.js?ver=1.7.0" id="de-resize-sensor-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/lib/sticky-sidebar/sticky-sidebar.min.js?ver=3.3.1" id="de-sticky-sidebar-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/dethemekit-for-elementor/assets/js/lib/jsticky/jquery.jsticky.js?ver=1.1.0" id="jsticky-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.18.3" id="elementor-webpack-runtime-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.18.3" id="elementor-frontend-modules-js"></script>
    <script src="https://askproject.net/aerist/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
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
                "id": 479,
                "title": "Drones%20%E2%80%93%20Aerist",
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


<!-- Page supported by LiteSpeed Cache 6.0.0.1 on 2024-01-10 18:24:54 -->