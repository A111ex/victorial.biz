(function(b) {
    var a = {init: function(c) {
            var d = {show: function(f, e) {
                }, hide: function(f, e) {
                }};
            if (c) {
                b.extend(d, c)
            }
            return this.each(function() {
                var i = b(this);
                var f = i.offset().top;
                var h = b(window).height() / 2;
                var e = function() {
                };
                b("a[href^=#]", i).on("click", function() {
                    var j = b(this);
                    if (!j.is(".cur")) {
                        var n = j.attr("href");
                        var o = b(n);
                        var k = o.offset().top;
                        var p = b(window).scrollTop();
                        var l = k - p;
                        if (l < 0) {
                            l = l * -1
                        }

                        if (o.length) {
                            function m() {
                                b(window).trigger("scroll")
                            }}

                        TweenLite.to(b("html,body"), 1, {scrollTop: k - 231, onComplete: m, ease: Power4.easeInOut});

                    }
                    return false;
                });
                var g = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel";
                if (document.attachEvent) {
                    document.attachEvent("on" + g, function(j) {
                        b("html, body").stop(true)
                    })
                } else {
                    if (document.addEventListener) {
                        document.addEventListener(g, function(j) {
                            b("html, body").stop(true)
                        }, false)
                    }
                }
                b(window).on("scroll", function(j) {
                    clearTimeout(e);
                    var k = b(window).scrollTop();
                    if (k > f) {
                        i.addClass("landingFix")
                    } else {
                        i.removeClass("landingFix")
                    }
                    e = setTimeout(function() {
                        b(".landingItem").each(function() {
                            var m = b(this);
                            var q = m.height();
                            var p = m.offset().top - h;
                            var o = m.attr("id");
                            var n = b('a[href="#' + o + '"]', i);
                            var l;
                            if (k > p && k < (p + q)) {
                                if (!n.is(".cur")) {
                                    n.addClass("cur");
                                    if (d.show !== undefined) {
                                        d.show(n, m)
                                    }
                                }
                            } else {
                                if (n.is(".cur")) {
                                    n.removeClass("cur");
                                    if (d.hide !== undefined) {
                                        d.hide(n, m)
                                    }
                                }
                            }
                        })
                    }, 100)
                });
                b(window).trigger("scroll")
            })
        }};
    b.fn.liLanding = function(c) {
        if (a[c]) {
            return a[c].apply(this, Array.prototype.slice.call(arguments, 1))
        } else {
            if (typeof c === "object" || !c) {
                return a.init.apply(this, arguments)
            } else {
                b.error("Метод " + c + " в jQuery.liLanding не существует")
            }
        }
    }
})(jQuery);