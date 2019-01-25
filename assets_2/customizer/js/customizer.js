! function(t, e) {
    "use strict";
    var h = function(t, e) {
        this.rgb = [], this.alpha = this._default(e, 1);
        var r = this;
        Array.isArray(t) ? this.rgb = t : 6 <= (t = t.replace(/^#/, "")).length ? t.match(/.{2}/g).map(function(t, e) {
            r.rgb.push(parseInt(t, 16))
        }) : t.split("").map(function(t, e) {
            r.rgb.push(parseInt(t + t, 16))
        })
    };
    h.prototype.darken = function(t) {
        var e = this.toHSL();
        return e.l -= e.l * t / 100, e.l = this._clamp(e.l), this._hsla(e)
    }, h.prototype.fade = function(t) {
        var e = t / 100;
        return e = this._clamp(e), new h(this.rgb, e)
    }, h.prototype.lighten = function(t) {
        var e = this.toHSL();
        return e.l += e.l * t / 100, e.l = this._clamp(e.l), this._hsla(e)
    }, h.prototype.toCSS = function() {
        var e = this;
        return this.alpha < 1 ? "rgba(" + this.rgb.map(function(t) {
            return e._clamp(Math.round(t), 255)
        }).concat(this.alpha).join(",") + ")" : this.toHex(this.rgb)
    }, h.prototype.toHex = function(t) {
        var e = this;
        return "#" + t.map(function(t) {
            return ((t = e._clamp(Math.round(t), 255)) < 16 ? "0" : "") + t.toString(16)
        }).join("")
    }, h.prototype.toHSL = function() {
        var t, e, r = this.rgb[0] / 255,
            a = this.rgb[1] / 255,
            n = this.rgb[2] / 255,
            i = this.alpha,
            o = Math.max(r, a, n),
            s = Math.min(r, a, n),
            h = (o + s) / 2,
            c = o - s;
        if (o === s) t = e = 0;
        else {
            switch (e = .5 < h ? c / (2 - o - s) : c / (o + s), o) {
                case r:
                    t = (a - n) / c + (a < n ? 6 : 0);
                    break;
                case a:
                    t = (n - r) / c + 2;
                    break;
                case n:
                    t = (r - a) / c + 4
            }
            t /= 6
        }
        return {
            h: 360 * t,
            s: e,
            l: h,
            a: i
        }
    }, h.prototype._clamp = function(t, e) {
        return e = this._default(e, 1), Math.min(Math.max(t, 0), e)
    }, h.prototype._default = function(t, e) {
        return void 0 === t ? e : t
    }, h.prototype._hsla = function(t) {
        var e, r, a, n = t.h,
            i = t.s,
            o = t.l,
            s = t.a;
        return n = n % 360 / 360, i = this._clamp(i), o = this._clamp(o), s = this._clamp(s), e = 2 * o - (r = o <= .5 ? o * (i + 1) : o + i - o * i), a = [255 * this._hue(n + 1 / 3, e, r), 255 * this._hue(n, e, r), 255 * this._hue(n - 1 / 3, e, r)], new h(a, s)
    }, h.prototype._hue = function(t, e, r) {
        return 6 * (t = t < 0 ? t + 1 : 1 < t ? t - 1 : t) < 1 ? e + (r - e) * t * 6 : 2 * t < 1 ? r : 3 * t < 2 ? e + (r - e) * (2 / 3 - t) * 6 : e
    }, t.Color = h
}(window.WartaDemo = window.WartaDemo || {}, jQuery),
function(i, r) {
    "use strict";

    function t() {
        this.$container = r("#customizer"), this.$toggle = this.$container.find(".customizer-toggle"), this.$style = r('<style id="customizer-css">').appendTo(r("head")), this.cssTemplate = r("#customizer-css-template").html(), this.toggle(), this.color(), this.flatStyle(), this.boxedStyle(), this.imageLight()
    }
    t.prototype.toggle = function() {
        var e = this;
        this.$toggle.click(function() {
            var t = r(this);
            "0px" === e.$container.css("left") ? (e.$container.animate({
                left: -e.$container.outerWidth()
            }), t.attr("class", "fa fa-chevron-right")) : (e.$container.animate({
                left: 0
            }), t.attr("class", "fa fa-chevron-left"))
        })
    }, t.prototype.color = function() {
        var a = this,
            n = this.$container.find("[name=primary-color]");
        n.on("input change", function() {
            var t = n.val(),
                e = new i.Color(t.replace(/^#/, "")),
                r = a.cssTemplate.replace(/<primary>/g, t).replace(/<primary__fade80>/g, e.fade(80).toCSS()).replace(/<primary__lighten8>/g, e.lighten(8).toCSS()).replace(/<primary__lighten24>/g, e.lighten(24).toCSS()).replace(/<primary__darken5>/g, e.darken(5).toCSS()).replace(/<primary__darken5__darken12>/g, e.darken(5).darken(12).toCSS()).replace(/<primary__darken10>/g, e.darken(10).toCSS()).replace(/<primary__darken15>/g, e.darken(15).toCSS()).replace(/<primary__darken17>/g, e.darken(17).toCSS());
            a.$style.html(r)
        }), this.$container.trigger("http://wartahtmldemo.friskamax.com/customizer/js/fsm.container.hide")
    }, t.prototype.flatStyle = function() {
        this.$container.find("[name=flat]").change(function() {
            r("html").toggleClass("flat-style", this.checked)
        })
    }, t.prototype.boxedStyle = function() {
        this.$container.find("[name=boxed]").change(function() {
            r("html").toggleClass("boxed-style", this.checked), r.CarouselLarge.setContainerHeight()
        })
    }, t.prototype.imageLight = function() {
        this.$container.find("[name=light]").change(function() {
            r("html").toggleClass("no-image-light", !this.checked)
        })
    }, i.Customizer = t
}(window.WartaDemo = window.WartaDemo || {}, jQuery),
function(t, e) {
    "use strict";
    new t.Customizer, e("a[href=#]").on("click", function(t) {
        t.preventDefault()
    })
}(window.WartaDemo = window.WartaDemo || {}, jQuery);
