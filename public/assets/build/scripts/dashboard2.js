$(function(){var stickyBreakpoint=1025;var stickyConfig={topSpacing:0};var stickyHeaderDesktopElement="#sticky-header-desktop";var stickyHeaderMobileElement="#sticky-header-mobile";function stickyInit(target){if($(target).parent(".sticky-wrapper").length<1){$(target).sticky(stickyConfig)}}function stickyDestroy(target){$(target).unstick()}$(window).resize(function(){var viewport=$(this).width();if(viewport>=stickyBreakpoint){stickyInit(stickyHeaderDesktopElement);stickyDestroy(stickyHeaderMobileElement)}else{stickyInit(stickyHeaderMobileElement);stickyDestroy(stickyHeaderDesktopElement)}});if($(window).width()>=stickyBreakpoint){stickyInit(stickyHeaderDesktopElement)}else{stickyInit(stickyHeaderMobileElement)}$("#theme-toggle").on("click",function(){var isDark=$("body").hasClass("theme-dark");if(isDark){$("body").removeClass("theme-dark");$("body").addClass("theme-light");$(this).children("i").removeClass("fa-sun");$(this).children("i").addClass("fa-moon")}else{$("body").removeClass("theme-light");$("body").addClass("theme-dark");$(this).children("i").removeClass("fa-moon");$(this).children("i").addClass("fa-sun")}});$(".dropdown").on("show.bs.dropdown",function(){$('[data-toggle="simplebar"]').each(function(){new SimpleBar(this)})});var date=new Date;$("#copyright-year").html(date.getFullYear());$('[data-toggle="tooltip"]').tooltip()});
//# sourceMappingURL=dashboard2.js.map
