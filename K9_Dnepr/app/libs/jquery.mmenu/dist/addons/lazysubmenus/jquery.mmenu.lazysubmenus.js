!function(n){var e,i="lazySubmenus";n.mmenu.addons[i]={setup:function(){var l=this.opts[i];this.conf[i];n.mmenu.glbl,"boolean"==typeof l&&(l={load:l}),"object"!=typeof l&&(l={}),(l=this.opts[i]=n.extend(!0,{},n.mmenu.defaults[i],l)).load&&(this.bind("initMenu:after",function(){this.$pnls.find("li").children(this.conf.panelNodetype).not("."+e.inset).not("."+e.nolistview).not("."+e.nopanel).addClass(e.panel+"_lazysubmenu "+e.nolistview+" "+e.nopanel)}),this.bind("initPanels:before",function(n){n=n||this.$pnls.children(this.conf.panelNodetype),this.__findAddBack(n,"."+e.panel+"_lazysubmenu").not("."+e.panel+"_lazysubmenu ."+e.panel+"_lazysubmenu").removeClass(e.panel+"_lazysubmenu "+e.nolistview+" "+e.nopanel)}),this.bind("initOpened:before",function(){var n=this.$pnls.find("."+this.conf.classNames.selected).parents("."+e.panel+"_lazysubmenu");n.length&&(n.removeClass(e.panel+"_lazysubmenu "+e.nolistview+" "+e.nopanel),this.initPanels(n.last()))}),this.bind("openPanel:before",function(n){var i=this.__findAddBack(n,"."+e.panel+"_lazysubmenu").not("."+e.panel+"_lazysubmenu ."+e.panel+"_lazysubmenu");i.length&&this.initPanels(i)}))},add:function(){e=n.mmenu._c,n.mmenu._d,n.mmenu._e},clickAnchor:function(n,e){}},n.mmenu.defaults[i]={load:!1},n.mmenu.configuration[i]={}}(jQuery);