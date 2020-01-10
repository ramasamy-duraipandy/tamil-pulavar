// JavaScript Document
! function(e) {
    function t(o) {
        if (n[o]) return n[o].exports;
        var a = n[o] = {
            i: o,
            l: !1,
            exports: {}
        };
        return e[o].call(a.exports, a, a.exports, t), a.l = !0, a.exports
    }
    var n = {};
    return t.m = e, t.c = n, t.i = function(e) {
        return e
    }, t.d = function(e, n, o) {
        t.o(e, n) || Object.defineProperty(e, n, {
            configurable: !1,
            enumerable: !0,
            get: o
        })
    }, t.n = function(e) {
        var n = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return t.d(n, "a", n), n
    }, t.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, t.p = "", t(t.s = 5)
}([function(e, t, n) {
    "use strict";
    var o = {},
        a = document.querySelector(".app__snackbar"),
        i = null;
    o.show = function(e) {
        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 4e3;
        e && (i && i.remove(), i = document.createElement("div"), i.className = "app__snackbar-msg", i.textContent = e, a.appendChild(i), setTimeout(function() {
            i.remove()
        }, t))
    }, t.snackbar = o
}, function(e, t, n) {
    "use strict";
    var o = n(0),
        a = {};
    a.active = !1, a.webcam = null, a.canvas = null, a.ctx = null, a.decoder = null, a.setCanvas = function() {
        a.canvas = document.createElement("canvas"), a.ctx = a.canvas.getContext("2d")
    }, a.init = function() {
        function e() {
            a.canvas.width = window.innerWidth, a.canvas.height = window.innerHeight
        }

        function t(e) {
            navigator.mediaDevices.getUserMedia(e).then(function(e) {
                a.webcam.srcObject = e
            }).catch(function(e) {
                console.log("Error occurred ", e), n()
            })
        }

        function n() {
            document.querySelector(".app__overlay").style.display = "none", document.querySelector(".app__header-icon svg").style.fill = "#212121", o.snackbar.show("Unable to open the camera, provide permission to access the camera", 1e4)
        }
        var i = "",
            c = !1;
        window.iOS ? a.webcam = document.querySelector("img") : a.webcam = document.querySelector("video"), a.setCanvas(), a.decoder = new Worker(i + "decoder.min.js"), window.iOS ? e() : a.webcam.addEventListener("play", function(t) {
            c || (e(), c = !0)
        }, !1), window.iOS || navigator.mediaDevices.enumerateDevices().then(function(e) {
            var n = e.filter(function(e) {
                if (e.label.split(",")[1], "videoinput" == e.kind) return e
            });
            if (n.length > 1) {
                var o = {
                    video: {
                        mandatory: {
                            sourceId: n[1].deviceId ? n[1].deviceId : null
                        }
                    },
                    audio: !1
                };
                t(o)
            } else if (n.length) {
                var o = {
                    video: {
                        mandatory: {
                            sourceId: n[0].deviceId ? n[0].deviceId : null
                        }
                    },
                    audio: !1
                };
                t(o)
            } else t({
                video: !0
            })
        }).catch(function(e) {
            n(), console.error("Error occurred : ", e)
        })
    }, a.scan = function(e) {
        function t(t) {
            if (t.data.length > 0) {
                var o = t.data[0][2];
                a.active = !1, e(o)
            }
            setTimeout(n, 0)
        }

        function n() {
            if (a.active) try {
                a.ctx.drawImage(a.webcam, 0, 0, a.canvas.width, a.canvas.height);
                var e = a.ctx.getImageData(0, 0, a.canvas.width, a.canvas.height);
                e.data && a.decoder.postMessage(e)
            } catch (e) {
                "NS_ERROR_NOT_AVAILABLE" == e.name && setTimeout(n, 0)
            }
        }
        a.active = !0, a.setCanvas(), a.decoder.onmessage = t, n()
    }, e.exports = a
}, function(e, t) {}, function(e, t) {
    function n(e) {
        return o.test(e)
    }
    e.exports = n;
    var o = /^(?:\w+:)?\/\/([^\s\.]+\.\S{2}|localhost[\:?\d]*)\S*$/
}, function(e, t) {
    function n() {
        return "serviceWorker" in navigator && (window.fetch || "imageRendering" in document.documentElement.style) && ("https:" === window.location.protocol || "localhost" === window.location.hostname)
    }

    function o(e) {
        e || (e = {}), n() && navigator.serviceWorker.register("/sw.js")
    }

    function a(e, t) {}
    t.install = o, t.applyUpdate = a
}, function(e, t, n) {
    "use strict";

    function o(e) {
        return e && e.__esModule ? e : {
            default: e
        }
    }
    var a = n(1),
        i = o(a),
        c = n(0),
        r = n(2),
        l = (o(r), n(3)),
        d = o(l);
    "serviceWorker" in navigator && navigator.serviceWorker.ready.then(function(e) {
        localStorage.getItem("offline") || (localStorage.setItem("offline", !0), c.snackbar.show("App is ready for offline usage.", 5e3))
    }), n(4).install(), window.addEventListener("DOMContentLoaded", function() {
        function e() {
            window.appOverlay.style.borderStyle = "solid", w.style.display = "block"
        }

        function t() {
            l = document.createElement("img"), l.src = "", l.id = "frame"
        }

        function n() {
            console.log("Result: ", r), window.open(r, "_blank", "toolbar=0,location=0,menubar=0"), r = null, a()
        }

        function o() {
            window.iOS || (m.style.display = "block"), i.default.scan(function(e) {
                r = e, y.value = e, y.select(), m.style.display = "none", (0, d.default)(e) && (v.style.display = "inline-block"), u.classList.remove("app__dialog--hide"), p.classList.remove("app__dialog--hide")
            })
        }

        function a() {
            r = null, y.value = "", window.iOS && (l.src = "", l.className = ""), u.classList.add("app__dialog--hide"), p.classList.add("app__dialog--hide"), o()
        }

        function c() {
            h && h.remove();
            var e = document.createElement("input");
            e.setAttribute("type", "file"), e.setAttribute("capture", "camera"), e.id = "camera", w.textContent = "", w.style.color = "#212121", w.style.bottom = "-60px", g.style.fill = "#212121", window.appOverlay.style.borderStyle = "", s.style.color = "#212121", s.style.display = "block", t();
            var n = document.querySelector(".app__layout-content");
            n.appendChild(e), n.appendChild(l), s.addEventListener("click", function() {
                m.style.display = "none", document.querySelector("#camera").click()
            }), e.addEventListener("change", function(e) {
                e.target && e.target.files.length > 0 && (l.className = "app__overlay", l.src = URL.createObjectURL(e.target.files[0]), m.style.display = "block", window.appOverlay.style.borderColor = "#212121", o())
            })
        }
        window.iOS = ["iPad", "iPhone", "iPod"].indexOf(navigator.platform) >= 0;
        var r = null,
            l = null,
            s = document.querySelector(".app__select-photos"),
            u = document.querySelector(".app__dialog"),
            p = document.querySelector(".app__dialog-overlay"),
            v = document.querySelector(".app__dialog-open"),
            f = document.querySelector(".app__dialog-close"),
            m = document.querySelector(".custom-scanner"),
            y = document.querySelector("#result"),
            w = document.querySelector(".app__help-text"),
            g = document.querySelector(".app__header-icon svg"),
            h = document.querySelector("video");
        window.appOverlay = document.querySelector(".app__overlay"), window.addEventListener("load", function(t) {
            i.default.init(), setTimeout(function() {
                e(), window.iOS || o()
            }, 1e3)
        }), f.addEventListener("click", a, !1), v.addEventListener("click", n, !1), window.iOS && c()
    })
}]);