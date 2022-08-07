jQuery( document ).ready(function() {
    var OSName="unknown"; 
    if (navigator.appVersion.indexOf("Win")!=-1) OSName="windows";
    if (navigator.appVersion.indexOf("Mac")!=-1) OSName="mac";
    if (navigator.appVersion.indexOf("X11")!=-1) OSName="unix";
    if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";
    jQuery("body").addClass(OSName);
});
  
jQuery(window).on("load", function() {
    AOS.init({
      duration: 1400,
      once: true,
      anchorPlacement: 'top-bottom'
    });
});