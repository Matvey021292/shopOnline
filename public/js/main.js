var u = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this;

function v() {
    v = function () {
    }, u.Symbol || (u.Symbol = A)
}

var B = 0;

function A(t) {
    return "jscomp_symbol_" + (t || "") + B++
}

!function (t) {
    function i(n) {
        if (e[n]) return e[n].R;
        var o = e[n] = {ia: n, ea: !1, R: {}};
        return t[n].call(o.R, o, o.R, i), o.ea = !0, o.R
    }

    var e = {};
    i.u = t, i.h = e, i.c = function (t, e, n) {
        i.g(t, e) || Object.defineProperty(t, e, {enumerable: !0, get: n})
    }, i.r = function (t) {
        v(), v(), "undefined" != typeof Symbol && Symbol.toStringTag && (v(), Object.defineProperty(t, Symbol.toStringTag, {value: "Module"})), Object.defineProperty(t, "__esModule", {value: !0})
    }, i.m = function (t, e) {
        if (1 & e && (t = i(t)), 8 & e) return t;
        if (4 & e && "object" == typeof t && t && t.aa) return t;
        var n = Object.create(null);
        if (i.r(n), Object.defineProperty(n, "default", {
            enumerable: !0,
            value: t
        }), 2 & e && "string" != typeof t) for (var o in t) i.c(n, o, function (i) {
            return t[i]
        }.bind(null, o));
        return n
    }, i.i = function (t) {
        var e = t && t.aa ? function () {
            return t.default
        } : function () {
            return t
        };
        return i.c(e, "a", e), e
    }, i.g = function (t, i) {
        return Object.prototype.hasOwnProperty.call(t, i)
    }, i.o = "", i(i.w = 0)
}([function (t, i, e) {
    function n(t, i) {
        if (i = void 0 === i ? {} : i, this.h = t, this.g = this.g.bind(this), !a(this.h)) throw new TypeError("`new Drift` requires a DOM element as its first argument.");
        t = i.namespace || null;
        var e = i.showWhitespaceAtEdges || !1, n = i.containInline || !1, o = i.inlineOffsetX || 0,
            s = i.inlineOffsetY || 0, h = i.inlineContainer || document.body, r = i.sourceAttribute || "data-zoom",
            d = i.zoomFactor || 3, f = void 0 === i.paneContainer ? document.body : i.paneContainer,
            u = i.inlinePane || 375, p = i.handleTouch || !0, l = i.onShow || null, c = i.onHide || null,
            b = i.injectBaseStyles || !0, m = i.hoverDelay || 0, v = i.touchDelay || 0, y = i.hoverBoundingBox || !1,
            g = i.touchBoundingBox || !1;
        if (i = i.boundingBoxContainer || document.body, !0 !== u && !a(f)) throw new TypeError("`paneContainer` must be a DOM element when `inlinePane !== true`");
        if (!a(h)) throw new TypeError("`inlineContainer` must be a DOM element");
        this.a = {
            j: t,
            N: e,
            H: n,
            J: o,
            K: s,
            v: h,
            O: r,
            f: d,
            fa: f,
            da: u,
            A: p,
            M: l,
            L: c,
            ca: b,
            C: m,
            F: v,
            B: y,
            D: g,
            G: i
        }, this.a.ca && !document.querySelector(".drift-base-styles") && ((i = document.createElement("style")).type = "text/css", i.classList.add("drift-base-styles"), i.appendChild(document.createTextNode(".drift-bounding-box,.drift-zoom-pane{position:absolute;pointer-events:none}@keyframes noop{0%{zoom:1}}@-webkit-keyframes noop{0%{zoom:1}}.drift-zoom-pane.drift-open{display:block}.drift-zoom-pane.drift-closing,.drift-zoom-pane.drift-opening{animation:noop 1ms;-webkit-animation:noop 1ms}.drift-zoom-pane{overflow:hidden;width:100%;height:100%;top:0;left:0}.drift-zoom-pane-loader{display:none}.drift-zoom-pane img{position:absolute;display:block;max-width:none;max-height:none}")), (t = document.head).insertBefore(i, t.firstChild)), this.w(), this.u()
    }

    function o(t) {
        t = void 0 === t ? {} : t, this.h = this.h.bind(this), this.g = this.g.bind(this), this.m = this.m.bind(this), this.s = !1;
        var i = void 0 === t.I ? null : t.I, e = void 0 === t.f ? f() : t.f, n = void 0 === t.S ? f() : t.S,
            o = void 0 === t.j ? null : t.j, s = void 0 === t.N ? f() : t.N, h = void 0 === t.H ? f() : t.H;
        this.a = {
            I: i,
            f: e,
            S: n,
            j: o,
            N: s,
            H: h,
            J: void 0 === t.J ? 0 : t.J,
            K: void 0 === t.K ? 0 : t.K,
            v: void 0 === t.v ? document.body : t.v
        }, this.o = this.i("open"), this.X = this.i("opening"), this.u = this.i("closing"), this.w = this.i("inline"), this.W = this.i("loading"), this.ga()
    }

    function s(t) {
        t = void 0 === t ? {} : t, this.m = this.m.bind(this), this.h = this.h.bind(this), this.g = this.g.bind(this), this.c = this.c.bind(this);
        var i = t;
        t = void 0 === i.b ? f() : i.b;
        var e = void 0 === i.l ? f() : i.l, n = void 0 === i.O ? f() : i.O, o = void 0 === i.A ? f() : i.A,
            s = void 0 === i.M ? null : i.M, a = void 0 === i.L ? null : i.L, r = void 0 === i.C ? 0 : i.C,
            d = void 0 === i.F ? 0 : i.F, u = void 0 === i.B ? f() : i.B, p = void 0 === i.D ? f() : i.D,
            l = void 0 === i.j ? null : i.j, c = void 0 === i.f ? f() : i.f;
        i = void 0 === i.G ? f() : i.G, this.a = {
            b: t,
            l: e,
            O: n,
            A: o,
            M: s,
            L: a,
            C: r,
            F: d,
            B: u,
            D: p,
            j: l,
            f: c,
            G: i
        }, (this.a.B || this.a.D) && (this.o = new h({
            j: this.a.j,
            f: this.a.f,
            P: this.a.G
        })), this.enabled = !0, this.w()
    }

    function h(t) {
        this.s = !1;
        var i = void 0 === t.j ? null : t.j, e = void 0 === t.f ? f() : t.f;
        t = void 0 === t.P ? f() : t.P, this.a = {j: i, f: e, P: t}, this.c = this.g("open"), this.h()
    }

    function a(t) {
        return p ? t instanceof HTMLElement : t && "object" == typeof t && null !== t && 1 === t.nodeType && "string" == typeof t.nodeName
    }

    function r(t, i) {
        i.forEach(function (i) {
            t.classList.add(i)
        })
    }

    function d(t, i) {
        i.forEach(function (i) {
            t.classList.remove(i)
        })
    }

    function f() {
        throw Error("Missing parameter")
    }

    e.r(i);
    var p = "object" == typeof HTMLElement;
    h.prototype.g = function (t) {
        var i = ["drift-" + t], e = this.a.j;
        return e && i.push(e + "-" + t), i
    }, h.prototype.h = function () {
        this.b = document.createElement("div"), r(this.b, this.g("bounding-box"))
    }, h.prototype.show = function (t, i) {
        this.s = !0, this.a.P.appendChild(this.b);
        var e = this.b.style;
        e.width = Math.round(t / this.a.f) + "px", e.height = Math.round(i / this.a.f) + "px", r(this.b, this.c)
    }, h.prototype.U = function () {
        this.s && this.a.P.removeChild(this.b), this.s = !1, d(this.b, this.c)
    }, h.prototype.setPosition = function (t, i, e) {
        var n = window.pageXOffset, o = window.pageYOffset;
        t = e.left + t * e.width - this.b.clientWidth / 2 + n, i = e.top + i * e.height - this.b.clientHeight / 2 + o, t < e.left + n ? t = e.left + n : t + this.b.clientWidth > e.left + e.width + n && (t = e.left + e.width - this.b.clientWidth + n), i < e.top + o ? i = e.top + o : i + this.b.clientHeight > e.top + e.height + o && (i = e.top + e.height - this.b.clientHeight + o), this.b.style.left = t + "px", this.b.style.top = i + "px"
    }, s.prototype.w = function () {
        this.a.b.addEventListener("mouseenter", this.g, !1), this.a.b.addEventListener("mouseleave", this.h, !1), this.a.b.addEventListener("mousemove", this.c, !1), this.a.A && (this.a.b.addEventListener("touchstart", this.g, !1), this.a.b.addEventListener("touchend", this.h, !1), this.a.b.addEventListener("touchmove", this.c, !1))
    }, s.prototype.ba = function () {
        this.a.b.removeEventListener("mouseenter", this.g, !1), this.a.b.removeEventListener("mouseleave", this.h, !1), this.a.b.removeEventListener("mousemove", this.c, !1), this.a.A && (this.a.b.removeEventListener("touchstart", this.g, !1), this.a.b.removeEventListener("touchend", this.h, !1), this.a.b.removeEventListener("touchmove", this.c, !1))
    }, s.prototype.g = function (t) {
        t.preventDefault(), this.i = t, "mouseenter" == t.type && this.a.C ? this.u = setTimeout(this.m, this.a.C) : this.a.F ? this.u = setTimeout(this.m, this.a.F) : this.m()
    }, s.prototype.m = function () {
        if (this.enabled) {
            var t = this.a.M;
            t && "function" == typeof t && t(), this.a.l.show(this.a.b.getAttribute(this.a.O), this.a.b.clientWidth, this.a.b.clientHeight), this.i && ((t = this.i.touches) && this.a.D || !t && this.a.B) && this.o.show(this.a.l.b.clientWidth, this.a.l.b.clientHeight), this.c()
        }
    }, s.prototype.h = function (t) {
        t.preventDefault(), this.i = null, this.u && clearTimeout(this.u), this.o && this.o.U(), (t = this.a.L) && "function" == typeof t && t(), this.a.l.U()
    }, s.prototype.c = function (t) {
        if (t) t.preventDefault(), this.i = t; else {
            if (!this.i) return;
            t = this.i
        }
        if (t.touches) var i = (t = t.touches[0]).clientX, e = t.clientY; else i = t.clientX, e = t.clientY;
        i = (i - (t = this.a.b.getBoundingClientRect()).left) / this.a.b.clientWidth, e = (e - t.top) / this.a.b.clientHeight, this.o && this.o.setPosition(i, e, t), this.a.l.setPosition(i, e, t)
    }, u.Object.defineProperties(s.prototype, {
        s: {
            configurable: !0, enumerable: !0, get: function () {
                return this.a.l.s
            }
        }
    }), t = document.createElement("div").style;
    var l = "undefined" != typeof document && ("animation" in t || "webkitAnimation" in t);
    o.prototype.i = function (t) {
        var i = ["drift-" + t], e = this.a.j;
        return e && i.push(e + "-" + t), i
    }, o.prototype.ga = function () {
        this.b = document.createElement("div"), r(this.b, this.i("zoom-pane"));
        var t = document.createElement("div");
        r(t, this.i("zoom-pane-loader")), this.b.appendChild(t), this.c = document.createElement("img"), this.b.appendChild(this.c)
    }, o.prototype.V = function (t) {
        this.c.setAttribute("src", t)
    }, o.prototype.Y = function (t, i) {
        this.c.style.width = t * this.a.f + "px", this.c.style.height = i * this.a.f + "px"
    }, o.prototype.setPosition = function (t, i, e) {
        var n = this.c.offsetWidth, o = this.c.offsetHeight, s = this.b.offsetWidth, h = this.b.offsetHeight,
            a = s / 2 - n * t, r = h / 2 - o * i, d = s - n, f = h - o, u = 0 < d, p = 0 < f;
        o = u ? d / 2 : 0, n = p ? f / 2 : 0, d = u ? d / 2 : d, f = p ? f / 2 : f, this.b.parentElement === this.a.v && (p = window.pageXOffset, u = window.pageYOffset, t = e.left + t * e.width - s / 2 + this.a.J + p, i = e.top + i * e.height - h / 2 + this.a.K + u, this.a.H && (t < e.left + p ? t = e.left + p : t + s > e.left + e.width + p && (t = e.left + e.width - s + p), i < e.top + u ? i = e.top + u : i + h > e.top + e.height + u && (i = e.top + e.height - h + u)), this.b.style.left = t + "px", this.b.style.top = i + "px"), this.a.N || (a > o ? a = o : a < d && (a = d), r > n ? r = n : r < f && (r = f)), this.c.style.transform = "translate(" + a + "px, " + r + "px)", this.c.style.webkitTransform = "translate(" + a + "px, " + r + "px)"
    }, o.prototype.T = function () {
        this.b.removeEventListener("animationend", this.h, !1), this.b.removeEventListener("animationend", this.g, !1), this.b.removeEventListener("webkitAnimationEnd", this.h, !1), this.b.removeEventListener("webkitAnimationEnd", this.g, !1), d(this.b, this.o), d(this.b, this.u)
    }, o.prototype.show = function (t, i, e) {
        this.T(), this.s = !0, r(this.b, this.o), r(this.b, this.W), this.c.addEventListener("load", this.m, !1), this.V(t), this.Y(i, e), this.ha ? this.$() : this.Z(), l && (this.b.addEventListener("animationend", this.h, !1), this.b.addEventListener("webkitAnimationEnd", this.h, !1), r(this.b, this.X))
    }, o.prototype.$ = function () {
        this.a.v.appendChild(this.b), r(this.b, this.w)
    }, o.prototype.Z = function () {
        this.a.I.appendChild(this.b)
    }, o.prototype.U = function () {
        this.T(), this.s = !1, l ? (this.b.addEventListener("animationend", this.g, !1), this.b.addEventListener("webkitAnimationEnd", this.g, !1), r(this.b, this.u)) : (d(this.b, this.o), d(this.b, this.w))
    }, o.prototype.h = function () {
        this.b.removeEventListener("animationend", this.h, !1), this.b.removeEventListener("webkitAnimationEnd", this.h, !1), d(this.b, this.X)
    }, o.prototype.g = function () {
        this.b.removeEventListener("animationend", this.g, !1), this.b.removeEventListener("webkitAnimationEnd", this.g, !1), d(this.b, this.o), d(this.b, this.u), d(this.b, this.w), this.b.setAttribute("style", ""), this.b.parentElement === this.a.I ? this.a.I.removeChild(this.b) : this.b.parentElement === this.a.v && this.a.v.removeChild(this.b)
    }, o.prototype.m = function () {
        this.c.removeEventListener("load", this.m, !1), d(this.b, this.W)
    }, u.Object.defineProperties(o.prototype, {
        ha: {
            configurable: !0, enumerable: !0, get: function () {
                var t = this.a.S;
                return !0 === t || "number" == typeof t && window.innerWidth <= t
            }
        }
    }), n.prototype.w = function () {
        this.l = new o({
            I: this.a.fa,
            f: this.a.f,
            N: this.a.N,
            H: this.a.H,
            S: this.a.da,
            j: this.a.j,
            J: this.a.J,
            K: this.a.K,
            v: this.a.v
        })
    }, n.prototype.u = function () {
        this.c = new s({
            b: this.h,
            l: this.l,
            A: this.a.A,
            M: this.a.M,
            L: this.a.L,
            O: this.a.O,
            C: this.a.C,
            F: this.a.F,
            B: this.a.B,
            D: this.a.D,
            j: this.a.j,
            f: this.a.f,
            G: this.a.G
        })
    }, n.prototype.T = function (t) {
        this.l.V(t)
    }, n.prototype.i = function () {
        this.c.enabled = !1
    }, n.prototype.m = function () {
        this.c.enabled = !0
    }, n.prototype.g = function () {
        this.c.ba()
    }, u.Object.defineProperties(n.prototype, {
        s: {
            configurable: !0, enumerable: !0, get: function () {
                return this.l.s
            }
        }, f: {
            configurable: !0, enumerable: !0, get: function () {
                return this.a.f
            }, set: function (t) {
                this.a.f = t, this.l.a.f = t, this.c.a.f = t, this.o.a.f = t
            }
        }
    }), Object.defineProperty(n.prototype, "isShowing", {
        get: function () {
            return this.s
        }
    }), Object.defineProperty(n.prototype, "zoomFactor", {
        get: function () {
            return this.f
        }, set: function (t) {
            this.f = t
        }
    }), n.prototype.setZoomImageURL = n.prototype.T, n.prototype.disable = n.prototype.i, n.prototype.enable = n.prototype.m, n.prototype.destroy = n.prototype.g, window.Drift = n
}]);
//# sourceMappingURL=Drift.min.js.map

document.querySelectorAll('.drift-demo-trigger').forEach(function (i, e) {
    new Drift(i, {
        paneContainer: document.querySelector('.detail'),
        containInline: true,
        hoverBoundingBox: true
    });

});

var products = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
        wildcard: '%QUERY',
        url: path + 'search/typeahead?query=%QUERY',
    }
});

products.initialize();

$("#typeahead").typeahead({
    // hint: false,
    highlight: true
}, {
    name: 'products',
    display: 'title',
    limit: 10,
    source: products
});

$('#typeahead').bind('typeahead:select', function (ev, suggestion) {
    console.log(products);
    window.location = path + 'search/?s=' + encodeURIComponent(suggestion.title);
});

$(document).on('click', '.close-modal', function () {
    $('.modal').modal('hide');
})

// jQuery(document).ready(function () {
//     jQuery('ul.sf-menu').superfish({
//         animation: {height: 'show'},	// slide-down effect without fade-in
//         delay: 1200			// 1.2 second delay on mouseout
//     });
// });


/*!
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2006, 2014 Klaus Hartl
 * Released under the MIT license
 */
// (function (factory) {
//     if (typeof define === 'function' && define.amd) {
//         define(['jquery'], factory);
//     } else if (typeof exports === 'object') {
//         module.exports = factory(require('jquery'));
//     } else {
//         factory(jQuery);
//     }
// }(function ($) {
//
//     var pluses = /\+/g;
//
//     function encode(s) {
//         return config.raw ? s : encodeURIComponent(s);
//     }
//
//     function decode(s) {
//         return config.raw ? s : decodeURIComponent(s);
//     }
//
//     function stringifyCookieValue(value) {
//         return encode(config.json ? JSON.stringify(value) : String(value));
//     }
//
//     function parseCookieValue(s) {
//         if (s.indexOf('"') === 0) {
//             s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
//         }
//
//         try {
//             s = decodeURIComponent(s.replace(pluses, ' '));
//             return config.json ? JSON.parse(s) : s;
//         } catch (e) {
//         }
//     }
//
//     function read(s, converter) {
//         var value = config.raw ? s : parseCookieValue(s);
//         return $.isFunction(converter) ? converter(value) : value;
//     }
//
//     var config = $.cookie = function (key, value, options) {
//
//         if (arguments.length > 1 && !$.isFunction(value)) {
//             options = $.extend({}, config.defaults, options);
//
//             if (typeof options.expires === 'number') {
//                 var days = options.expires, t = options.expires = new Date();
//                 t.setMilliseconds(t.getMilliseconds() + days * 864e+5);
//             }
//
//             return (document.cookie = [
//                 encode(key), '=', stringifyCookieValue(value),
//                 options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
//                 options.path ? '; path=' + options.path : '',
//                 options.domain ? '; domain=' + options.domain : '',
//                 options.secure ? '; secure' : ''
//             ].join(''));
//         }
//
//         var result = key ? undefined : {},
//             cookies = document.cookie ? document.cookie.split('; ') : [],
//             i = 0,
//             l = cookies.length;
//
//         for (; i < l; i++) {
//             var parts = cookies[i].split('='),
//                 name = decode(parts.shift()),
//                 cookie = parts.join('=');
//
//             if (key === name) {
//                 result = read(cookie, value);
//                 break;
//             }
//
//             if (!key && (cookie = read(cookie)) !== undefined) {
//                 result[name] = cookie;
//             }
//         }
//
//         return result;
//     };
//
//     config.defaults = {};
//
//     $.removeCookie = function (key, options) {
//         $.cookie(key, '', $.extend({}, options, {expires: -1}));
//         return !$.cookie(key);
//     };
//
// }));

/*
 show Modals
*/
// jQuery(function ($) {
//     function initnewsLetterObj($obj) {
//         var pause = $obj.attr('data-pause');
//         setTimeout(function () {
//             $obj.modal('show');
//         }, pause);
//     };
//
//     $('#Modalnewsletter').on('click', '.checkbox-group', function () {
//         $.cookie('modalnewsletter', '1', {expires: 7});
//     });
//     $('#ModalVerifyAge').on('click', '.js-btn-close', function () {
//         $.cookie('modalverifyage', '2', {expires: 7});
//         console.log("click");
//         return false;
//     });
//     $('#ModalDiscount').on('click', '.js-reject-discount', function () {
//         $.cookie('modaldiscount', '3', {expires: 7});
//         console.log("click");
//         return false;
//     });
//     var $body = $('body'),
//         modalnewsletter = $.cookie('modalnewsletter'),
//         newsLetterObj = $('#Modalnewsletter'),
//         modalverifyage = $.cookie('modalverifyage'),
//         verifyageObj = $('#ModalVerifyAge'),
//         modaldiscount = $.cookie('modaldiscount'),
//         discountObj = $('#ModalDiscount');
//
//     if (modalnewsletter == 1) return;
//     if (newsLetterObj.length) {
//         initnewsLetterObj(newsLetterObj);
//         $body.addClass('modal-newsletter');
//         $('#Modalnewsletter').on('click', '.modal-header .close', function () {
//             $body.removeClass('modal-newsletter');
//         });
//     }
//     ;
//
//     if (modalverifyage == 2) return;
//     if (verifyageObj.length) {
//         initnewsLetterObj(verifyageObj);
//         verifyageObj.on('click', '.js-btn-close', function () {
//             verifyageObj.find('.modal-header .close').trigger('click');
//             return false;
//         });
//     }
//     ;
//
//     if (modaldiscount == 3) return;
//     if (discountObj.length) {
//         initnewsLetterObj(discountObj);
//         discountObj.on('click', '.js-reject-discount', function () {
//             discountObj.find('.modal-header .close').trigger('click');
//             return false;
//         });
//     }
//     ;
// });


var listColor = $('.options-color');

$(listColor).each(function (i) {
    if ($(listColor[i]).attr('data-title')) {
        $(listColor[i]).css('background-color', $(listColor[i]).attr('data-title'))
    }
})
$(listColor).click(function () {
    var modeId = $(this).attr('data-mode'),
        color = $(this).attr('data-title'),
        price = $(this).attr('data-price'),
        basePrice = $('#base-price').text();
    if (price) {
        $('#base-price').text(price)
    } else {
        $('#base-price').text(basePrice)
    }
    console.log(price);
})


// cart
$(document).on('click', '.add-to-cart-link', function (e) {
    e.preventDefault();
    // $(this).find('.fa-plus').replaceWith('<i class="fas fa-shopping-cart text-dark" aria-hidden="true"></i>');
    var id = $(this).attr('data-id'),
        qty = $('.tt-input-counter input').val() ? $('.tt-input-counter input').val() : 1,
        mod = $('.tt-options-swatch .active a').attr('data-mode'),
        $this = $(this);
    $.ajax({
        url: '/cart/add',
        data: {id: id, qty: qty, mod: mod},
        type: 'GET',
        beforeSend: function (e) {
            $this.find('.add-cart-text').css('transform', 'scale(0)');
            setTimeout(function () {
                $this.find('.add-cart-text').html('<span class="spinner-border" role="status"></span>');
                $this.find('.add-cart-text').css('transform', 'scale(1)');
            }, 250);
        },
        success: function (data) {
            setTimeout(function () {
                $this.addClass('blue').removeClass('btn-indigo');
                $this.find('.add-cart-text').css('transform', 'scale(0)');
            }, 1000);
            setTimeout(function () {
                $this.find('.add-cart-text').html('Добавлено');
                $this.find('.add-cart-text').css('transform', 'scale(1)');
            }, 1200);
            setTimeout(function () {
                showCart(data);
                showToast('Ок', 'Товар добавлен в корзину');
            }, 1600)
        },
        error: function () {
            showToast('Ошибка!', ' Попробуйте, позже');
        }
    });
});

function showCart(data) {
    if ($.trim(data) === '<h3>Корзина пуста</h3>') {
        $('#modalAddToCartProduct .modal-content').html(data).addClass('text-danger');
    } else {
        $('#modalAddToCartProduct .modal-content').html(data);
        $('#modalAddToCartProduct').modal('show');
    }


    if ($('#modalAddToCartProduct .count-price--cart').text()) {
        if ($('.tt-badge-cart').length) {
            $('.tt-badge-cart').text($('#modalAddToCartProduct .count-price--cart').text());
        } else {
            $('.ss_notification_box .dropdown-toggle').append('<span class="tt-badge-cart"></span>')
            $('.tt-badge-cart').text($('#modalAddToCartProduct .count-price--cart').text());
        }

    } else {
        $('.tt-badge-cart').text(0);
    }
    counterStart('.count-price--cart');
    counterStart('.qty_sum');
    var arrElem = $('.cart_page_totl span');
    for (var i = 0; i < arrElem.length; i++) {
        counterStart(arrElem[i]);
    }

}

function getCart() {
    $.ajax({
        url: '/cart/show',
        type: 'GET',
        success: function (data) {
            showCart(data);
        },
        error: function () {
            alert('Ошибка! Попробуйте, позже');
        }
    });
}


$('body').on('click', '.tt-btn-close', function () {
    var id = $(this).attr('data-id'),
        container = $('.right-modal'),
        link = $(this).parents('.cart-container').find('.btn-link').html(),
        img = $(this).parents('.cart-container').find('.img-wrap').html(),
        price = $(this).parents('.cart-container').find('.cart_page_price').html();
    ($(container).hasClass('remove')) ? $(container).removeClass('remove') : $(container).addClass('remove');
    $(container).find('.img-wrap').html(img);
    $(container).find('.btn-link').html(link);
    $(container).find('.cart_page_price').html(price);
    $('.btn-ok').attr('data-id', id);

})
$(document).on('click', '.btn-ok', function (e) {
    e.preventDefault();
    var id = $(this).attr('data-id');
    $.ajax({
        url: '/cart/delete',
        type: 'GET',
        data: {id: id},
        success: function (data) {
            showCart(data);
        },
        error: function (data) {
            console.log(err)
        }
    })
})


$(document).on('click', '.btn-no', function (e) {
    $('.right-modal').removeClass('remove');
})

function clearCart() {
    $.ajax({
        url: '/cart/clear',
        type: 'GET',
        success: function (data) {
            showCart(data);
        }
    })
}


$(document).on('click', '.input-group-number button', function (e) {
    e.preventDefault();
    var current = $(this).siblings('input').val() * 1,
        total_sum = $(e.target).parents('.cart-container').find('.cart_page_totl span'),
        id = $(this).parents('.cart-container').attr('data-id'),
        qty = $(this).siblings('input').val() ? $(this).siblings('input').val() : 1;
    if ($(this).hasClass('input-group-number-minus')) {
        if (current > 1) {
            $(this).siblings('input').val(current - 1);
            $.ajax({
                url: '/cart/replace',
                data: {id: id, qty: +qty - 1},
                type: 'POST',
                success: function (e) {
                    showCartData(e, total_sum);
                }
            })
        }
    } else {
        $(this).siblings('input').val(current + 1);
        $.ajax({
            url: '/cart/replace',
            data: {id: id, qty: +qty + 1},
            type: 'POST',
            success: function (e) {
                showCartData(e, total_sum);
            }
        })
    }
})

function showCartData(e, sum) {
    var data = JSON.parse(e);
    if (data) {
        $('.count-price--cart').text(data['cart_qty']);
        counterUpdate('.qty_sum', data['cart_sum']);
        counterUpdate($(sum)[0], data['current_price']);
        $('.tt-badge-cart').text(data['cart_qty']);
        $('.cd-cart em').text(data['cart_qty']);
    }
}


function counterUpdate(elem, count) {
    var options = {
        useEasing: true,
        useGrouping: true,
        separator: ',',
        decimal: '.',
    };
    var demo = new CountUp(elem, 0, count, 0, 2.5, options);
    if (!demo.error) {
        demo.update(count);
    } else {
    }
}

function counterStart(elem) {
    var options = {
        useEasing: true,
        useGrouping: true,
        separator: ',',
        decimal: '.',
    };
    var demo = new CountUp(elem, 0, $(elem).text(), 0, 2.5, options);
    if (!demo.error) {
        demo.start();
    } else {
    }
}

var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function (html) {
    var switchery = new Switchery(html, {size: 'small'});
});

$('body').on('change', '.aside input', function () {
    var checked = $('.aside input:checked'),
        data = '';
    checked.each(function () {
        data += this.value + ',';
    });
    if (data) {
        $.ajax({
            url: location.href,
            data: {filter: data},
            type: 'GET',
            beforeSend: function () {
                $('.preloader').fadeIn(300, function () {
                    $('.tt-product-listing').hide();
                });
            },
            success: function (res) {
                $('.preloader').delay(500).fadeOut('slow', function () {
                    $('.tt-product-listing').html(res).fadeIn();
                    var url = location.search.replace(/filter(.+?)(&|$)/g, ''); //$2
                    var newURL = location.pathname + url + (location.search ? "&" : "?") + "filter=" + data;
                    newURL = newURL.replace('&&', '&');
                    newURL = newURL.replace('?&', '?');
                    history.pushState({}, '', newURL);
                });
            },
            error: function () {
                alert('РћС€РёР±РєР°!');
            }
        });
    } else {
        window.location = location.pathname;
    }
})

$('.collapse').collapse();

$('.sort-dropdown').on('change', function (e) {
    var data = $(this).val();

    $.ajax({
        url: location.href,
        data: {sort: data},
        type: "GET",
        beforeSend: function () {
            $('.preloader').fadeIn(300, function () {
                $('.tt-product-listing').hide();
            });
        },
        success: function (res) {
            $('.preloader').delay(500).fadeOut('slow', function () {
                $('.tt-product-listing').html(res).fadeIn();
                var url = location.search.replace(/sort(.+?)(&|$)/g, ''); //$2
                var newURL = location.pathname + url + (location.search ? "&" : "?") + "sort=" + data;
                newURL = newURL.replace('&&', '&');
                newURL = newURL.replace('?&', '?');
                history.pushState({}, '', newURL);
            })
        }
    })
})

$('a[data-toggle="pill"]').on('click', function (e) {
    e.preventDefault();
    var data = $(this).attr('href').replace('#', '');
    $('.preloader').fadeIn(300, function () {
        $('.tt-product-listing').hide();
    });
    $('.preloader').delay(500).fadeOut('slow', function () {
        $('.tt-product-listing').fadeIn();
        var url = location.search.replace(/list(.+?)(&|$)/g, ''); //$2
        var newURL = location.pathname + url + (location.search ? "&" : "?") + "list=" + data;
        newURL = newURL.replace('&&', '&');
        newURL = newURL.replace('?&', '?');
        history.pushState({}, '', newURL);
    })
})

function changeQty(increase) {
    var qty = parseInt($('.select_number').find("input").val());
    if (!isNaN(qty)) {
        qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
        $('.select_number').find("input").val(qty);
    } else {
        $('.select_number').find("input").val(1);
    }
}

$(document).ready(function () {
    $('.mdb-select').materialSelect();
});

function goToByScroll(id) {
    $('html,body').animate({
        scrollTop: $("#" + id).offset().top
    }, 'slow');
}

//------- Progress Bar ---------//

$('.progress_section').on('inview', function (event, visible, visiblePartX, visiblePartY) {
    if (visible) {
        $.each($('div.progress-bar'), function () {
            $(this).css('width', $(this).attr('aria-valuenow') + '%');
        });
        $(this).off('inview');
    }
});
$(document).ready(function () {

    /* 1. Visualizing things on Hover - See next part for action on click */
    $('.stars li').on('mouseover', function () {
        var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

        // Now highlight all the stars that's not after the current hovered star
        $(this).parent().children('li.star').each(function (e) {
            if (e < onStar) {
                $(this).addClass('hover');
            }
            else {
                $(this).removeClass('hover');
            }
        });

    }).on('mouseout', function () {
        $(this).parent().children('li.star').each(function (e) {
            $(this).removeClass('hover');
        });
    });


    /* 2. Action to perform on click */
    $('.stars li').on('click', function () {
        var onStar = parseInt($(this).data('value'), 10); // The star currently selected
        var stars = $(this).parent().children('li.star');

        for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
        }

        for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
        }

        // JUST RESPONSE (Not needed)
        var ratingValue = parseInt($('.stars li.selected').last().data('value'), 10);
        var msg = "";
        if (ratingValue > 1) {
            msg = "Thanks! You rated this " + ratingValue + " stars.";
        }
        else {
            msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
        }
        responseMessage(msg);

    });


});


function responseMessage(msg) {
    $('.success-box').fadeIn(200);
    $('.success-box div.text-message').html("<span>" + msg + "</span>");
}

// Toast оповещение

function showToast(title, message) {
    iziToast.success({
        title: title,
        message: message,
        theme: 'dark',
        position: 'topLeft',
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        progressBarColor: '#fd0028',
        layout: 2,
    });
}


// Добавление/Обновление счетчика желания

function counterReplace(res, elem) {
    if (res > 0) {
        if (!$(elem).find('span').length) {
            $(elem).append('<span>' + res + '</span>')
        } else {
            $(elem).find('span').html(res);
        }
    } else {
        $(elem).find('span').remove();
    }
}

// Ajax запрос на обновление и удаления счетчика желания

function sendAjaxSession(url, data, statusOk, StatusError, elemReplace) {
    $.ajax({
        url: url,
        data: data,
        method: "POST",
        beforeSend:function(){

        },
        success: function (e) {
            counterReplace(e, elemReplace);
            showToast('Ок', statusOk);
        },
        error: function (e) {
            showToast('Ошибка', StatusError);
        }
    })
}

$('.ss_notification_box  a').on('click', function (e) {
    if (!$(this).attr('data-target')) {
        $('#modalAddToCartProduct').modal('hide');
        var modal = $(this).attr('data-open-modal');
        if (!$(modal).hasClass('open-nav')) {
            showBgOverflow()
            $('.open-nav').removeClass('open-nav');
            $(modal).addClass('open-nav');
        } else {
            $(modal).removeClass('open-nav');
            hideBgOverflow()

        }
    } else {
        hideBgOverflow()
        $('.open-nav').removeClass('open-nav');
    }


})
$('.like-count').on('click', function (e) {
    e.preventDefault();
    $.ajax({
        url: '/main/like-container',
        method: 'POST',
        success: function (e) {

            $('.fixed-nav-product--like .overflow-container').html(e);
        },
        error: function (e) {
            console.log(e)
        }
    })
});

$('.compare-count').on('click', function (e) {
    e.preventDefault();
    $.ajax({
        url: '/main/compare-container',
        method: 'POST',
        success: function (e) {
            $('.fixed-nav-product--compare .overflow-container').html(e);
        },
        error: function (e) {
            console.log(e)
        }
    })
});


function hideFixedModal() {
    $('.open-nav').removeClass('open-nav')
}

$(document).on('click', '.add-product--like', function (e) {
    e.preventDefault();
    hideFixedModal();
    let id = $(this).data('id');
    if ($(this).hasClass('blue')) {
        $(this).removeClass('blue').addClass('red');
        sendAjaxSession('/main/add-like', {id: id}, 'Товар добавлен в список желания', 'Товар не добавлен в список желания', '.like-count');
    } else {
        $(this).removeClass('red').addClass('blue');
        sendAjaxSession('/main/remove-like', {id: id}, 'Товар удален со списка желания', 'Товар не удален со списка желания', '.like-count');
    }

});

$(document).on('click', '.add-to-compare', function (e) {
    e.preventDefault();
    let id = $(this).data('id'), $this = $(this);
    $this.parents('.ss_featured_products_box').find('.add-to-compare').addClass('disabled');
    $this.html('<span class="spinner-border" role="status"></span>');
    setTimeout(function () {
        $this.parents('.ss_featured_products_box').find('.add-to-compare').html('<i class="fa fa-check text-danger d-inline  mr-1" aria-hidden="true"></i>Товар добавлен в список');
        sendAjaxSession('/main/add-compare', {id: id}, 'Товар добавлен в список сравнения', 'Товар не добавлен в список сравнения', '.compare-count')
    },2000)

});


$(document).on('click', '.btn-show-fast-prev', function () {
    var id = $(this).data('id'),
        parents = $(this).parents('.ss_featured_products_box'),
        prevContainer = $('.modal .prev-container'),
        img = $(parents).find('.ss_featured_products_box_img').html(),
        text = $(parents).find('.ss_feat_prod_cont_heading_wrapper').html(),
        star = $(parents).find('.rating-stars').html(),
        href = $(this).data('href'),
        modalcontainer = $('#modalPoll');
    $(modalcontainer).find('.ss_featured_products_box_img').html(img);
    $(modalcontainer).find('.ss_feat_prod_cont_heading_wrapper').html(text);
    $(modalcontainer).find('.rating-stars').html(star);
    $(modalcontainer).find('.rating-stars').html(star);
    $(modalcontainer).find('.add-to-cart-link').attr('href', href).attr('data-id', id);

    $.ajax({
        url: '/main/fast-show',
        data: {id: id},
        method: "POST",
        success: function (e) {
            $('.modal-lader-container').delay(500).fadeOut('slow', function () {
                var data = JSON.parse(e);
                showDescription(data, prevContainer)
            })

        }
    })
})
$(document).click(function () {
    setTimeout(function () {
        if (!$('#modalPoll').hasClass('show')) {
            $('.modal-lader-container').fadeIn(200);
        }
    }, 200)
})

function showDescription(data, parent) {
    $(parent).html('');
    if (data.length > 0) {
        for (var i = 0; i < data.length; i++) {
            var elem = '<li></li>';
            var string = '<strong></strong>';
            var span = '<span></span>';
            parent.append($(elem).append($(string).append(data[i]["title"])).append($(span).append(data[i]["description"])));
        }
    } else {
        parent.html('<li class="text-danger">Описание отсутствует</li>')
    }
}

$(document).on('click', '.star', function () {
    if (!$(this).hasClass('disable_rating')) {
        var count = $(this).attr('data-value'),
            id = $(this).parents('.ss_featured_products_box').find('.add-to-cart-link').data('id');
        $this = $(this);
        $parent = $this.parents('.stars');
        var res;
        $.ajax({
            url: '/main/add-star',
            data: {count: count, id: id},
            method: "POST",
            beforeSend: function (e) {
                $parent.html('');
            },
            success: function (e) {
                for (var i = 1; i <= 5; i++) {
                    if (i <= e) {
                        $parent.append('<li class=\'star selected disable_rating\'  title=\'Poor\' data-value=' + i + '><i class=\'fa fa-star fa-fw\'></i></li>')
                    } else {
                        $parent.append('<li class=\'star disable_rating\'  title=\'Poor\' data-value=' + i + '><i class=\'fa fa-star fa-fw\'></i></li>');
                    }
                    $parent.attr('data-toggle', 'tooltip');
                    $parent.attr('data-placement', 'right');
                    $parent.attr('title', 'Вы уже постаилил оценку')
                }
            },
            error: function (e) {

            }
        })
    }
});

$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

$(document).click(function () {
    setTimeout(function () {
        $('[data-toggle="tooltip"]').tooltip()
    }, 200)
});

var loc = window.location.href;
$('#customer_login').submit(function (e) {
    e.preventDefault();
    var login = $('#customer_login input[name="login"]').val();
    var password = $('#customer_login input[name="password"]').val();

    $.ajax({
        url: 'user/login',
        method: 'POST',
        data: {'login': login, 'password': password},
        success: function (e) {
            if (e == 200) {
                iziToast.success({
                    title: 'OK',
                    position: 'topRight',
                    theme: 'light',
                    message: 'Вы успешно авторизованы',
                });
                setTimeout(function () {
                    window.location = loc;
                }, 400)
            } else {
                iziToast.error({
                    id: 'error',
                    title: 'Error',
                    message: 'Логин или пароль введен не верно',
                    position: 'topRight',
                    transitionIn: 'fadeInDown'
                });
            }
        },
    })
})

$('#customer_register').submit(function (e) {
    e.preventDefault();
    var login = $('#customer_register input[name="login"]').val();
    var name = $('#customer_register input[name="name"]').val();
    var password = $('#customer_register input[name="password"]').val();
    var email = $('#customer_register input[name="email"]').val();
    var phone = $('#customer_register input[name="phone"]').val();
    var loc = window.location.href;
    $.ajax({
        url: 'user/signup',
        method: "POST",
        data: {'login': login, 'name': name, 'password': password, 'email': email, 'phone': phone},
        success: function (e) {
            if (e == 200) {
                iziToast.success({
                    title: 'OK',
                    position: 'topRight',
                    theme: 'light',
                    message: 'Пользователь зарегистрирован',
                });
                setTimeout(function () {
                    window.location = loc;
                }, 400)
            } else {
                iziToast.error({
                    title: 'OK',
                    position: 'topRight',
                    theme: 'light',
                    message: e,
                });
            }
        }
    })
})


$(document).click(function () {
    setTimeout(function () {
        if ($('.cart-modal div').hasClass('cart-empty')) {
            $('.cart-modal .modal-dialog').css('max-width', '440px')
        } else {
            $('.cart-modal .modal-dialog').css('max-width', '')
        }
    }, 100)
});

$('.overflow-bg').click(function () {
    $('.open-nav').removeClass('open-nav');
    hideBgOverflow();

})

$('.btn-auth-close').on('click', function () {
    hideBgOverflow();
    $('.open-nav').removeClass('open-nav');
})

function showBgOverflow() {
    $('.overflow-bg').addClass('bg-show')
}

function hideBgOverflow() {
    $('.overflow-bg').removeClass('bg-show')
}

$(document).ready(function () {
    $('.third-button').on('click', function (e) {
        e.preventDefault();
        // $('.animated-icon3').toggleClass('open');
        // $('.custom-navbar').toggleClass('open-nav');
    });

});


