!function(e){function o(t){if(r[t])return r[t].exports;var n=r[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,o),n.l=!0,n.exports}var r={};o.m=e,o.c=r,o.i=function(e){return e},o.d=function(e,r,t){o.o(e,r)||Object.defineProperty(e,r,{configurable:!1,enumerable:!0,get:t})},o.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(r,"a",r),r},o.o=function(e,o){return Object.prototype.hasOwnProperty.call(e,o)},o.p="",o(o.s=2)}([function(e,o){$(document).ready(function(){function e(e){e.preventDefault();var o,r,t=$(this).attr("href");return r=$(t),o=($(r).offset()||0).top-50,$("html, body").animate({scrollTop:o},800),!1}function o(){var e=$("#nav-bar");e.toggleClass("scrolled",$(this).scrollTop()>e.height())}function r(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||65===e.keyCode&&(!0===e.ctrlKey||!0===e.metaKey)||e.keyCode>=35&&e.keyCode<=40||(e.shiftKey||e.keyCode<48||e.keyCode>57)&&(e.keyCode<96||e.keyCode>105)&&e.preventDefault()}$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),$("input#input_text, textarea#message").characterCounter(),$("#sector").material_select(),$(".nav-barra").sideNav({edge:"right",closeOnClick:!0,draggable:!0}),$(".login").dropdown({constrainWidth:!0,belowOrigin:!0,alignment:"left"}),$(".nav-perfil").dropdown({constrainWidth:!1,belowOrigin:!0,alignment:"right"}),$("#go-products-home").on("click",e),$(window).on("hashchange",function(e){var o=window.location.hash,r=o.substr(1);o.length&&$("html, body").animate({scrollTop:$('.go-to-section[data-section-name="'+r+'"]').offset().top-50})}),$(window).on("load",function(){$(window).trigger("hashchange")}),$(".go-cotiza").on("click",function(){$("html, body").animate({scrollTop:$('.go-to-section[data-section-name="cotiza"]').offset().top-50})}),$(".go-products").on("click",function(){$("html, body").animate({scrollTop:$('.go-to-section[data-section-name="productos"]').offset().top-50})}),$(document).scroll(o);var t=$("#cotiza-home"),n=$("#cotizapersonal"),a=$("#form-free"),i=$("#form-contact");$("#employeehome").keydown(r),$("#phone").keydown(r),$("#contact_person_phone").keydown(r),$("#phone_contact").keydown(r),$("#employee_number").keydown(r),$("#employee_contact").keydown(r),$.validator.setDefaults({ignore:[]}),t.validate({errorElement:"p",errorClass:"error",rules:{employeehome:{required:!0,digits:!0}},errorPlacement:function(e,o){"employeehome"==o.attr("name")&&e.insertAfter(o)}}),n.validate({errorElement:"span",errorClass:"error",rules:{name:{required:!0},company:{required:!0},phone:{required:!0,digits:!0},email:{required:!0},cargo:{required:!0}},messages:{email:{required:"El correo electrónico es inválido."},phone:{required:"Por favor solo ingrese números."}},errorPlacement:function(e,o){o.attr("name"),e.insertAfter(o)}}),a.validate({errorElement:"span",rules:{number_ruc:{required:!0,digits:!0,maxlength:11},company:{required:!0},razon:{required:!0},sector:{required:!0},contact_person:{required:!0},contact_person_email:{required:!0},contact_person_phone:{required:!0,digits:!0},terms:{required:!0}},messages:{sector:{required:"Debe seleccionar un sector."},contact_person_email:{required:"El correo electrónico es inválido."},contact_person_phone:{required:"Por favor solo ingrese números."},terms:{required:"Debe aceptar terminos y condiciones."}},errorPlacement:function(e,o){o.attr("name"),e.insertAfter(o),"checkbox"===o.attr("type")&&e.insertAfter(o.parent(".terms-box")),o.parent(".select-box").length>0&&e.insertAfter(o.parent(".select-box"))}}),i.validate({errorElement:"span",errorClass:"error",rules:{name_contact:{required:!0},company_contact:{required:!0},phone_contact:{required:!0},email_contact:{required:!0},cargo_contact:{required:!0},employee_contact:{required:!0}},messages:{email_contact:{required:"El correo electrónico es inválido."},phone_contact:{required:"Por favor solo ingrese números."}},errorPlacement:function(e,o){o.attr("name"),e.insertAfter(o)}}),$("#cotiza-home-btn").on("click",function(e){e.preventDefault();var o=$("#employeehome").val(),r=$("#cotizaopt1"),n=$("#cotizaopt2");t.valid()&&o>=1&&o<=10?window.location.href=urlAfiliacion:t.valid()&&o>=11&&o<=300?(r.css("display","block"),n.css("display","none"),$("html, body").animate({scrollTop:$(r).offset().top-50})):t.valid()&&o>=301&&($("#employee").val(o),n.css("display","block"),r.css("display","none"),$("html, body").animate({scrollTop:$(n).offset().top-50}))}),$("#cotiza-personal-btn").on("click",function(e){e.preventDefault(),n.valid()}),$("#btn-send-free").on("click",function(e){e.preventDefault(),a.valid()}),$("#btn-send-contact").on("click",function(e){e.preventDefault(),i.valid()})})},function(e,o){},function(e,o,r){r(0),e.exports=r(1)}]);