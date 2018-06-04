$(function () {
    $('.navbar-toggle').click(function () {
        $('.navbar-nav').toggleClass('slide-in');
        $('.side-body').toggleClass('body-slide-in');
        $('#search').removeClass('in').addClass('collapse').slideUp(200);

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').toggleClass('slide-in');
        
    });
   
   // Remove menu for searching
   $('#search-trigger').click(function () {
        $('.navbar-nav').removeClass('slide-in');
        $('.side-body').removeClass('body-slide-in');

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').removeClass('slide-in');

    });
});




 function loadname(img, previewName) {

     var isIE = (navigator.appName == "Microsoft Internet Explorer");
     var path = img.value;
     var ext = path.substring(path.lastIndexOf('.') + 1).toLowerCase();

     if (ext == "gif" || ext == "jpeg" || ext == "jpg" || ext == "png") {
         if (isIE) {
             $('#' + previewName).attr('src', path);
         } else {
             if (img.files[0]) {
                 var reader = new FileReader();
                 reader.onload = function (e) {
                     $('#' + previewName).attr('src', e.target.result);
                 }
                 reader.readAsDataURL(img.files[0]);
             }
         }

     } else {
         //incorrect file type  
     }
 }