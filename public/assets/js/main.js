!function(e){function r(t){if(o[t])return o[t].exports;var n=o[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,r),n.l=!0,n.exports}var o={};r.m=e,r.c=o,r.i=function(e){return e},r.d=function(e,o,t){r.o(e,o)||Object.defineProperty(e,o,{configurable:!1,enumerable:!0,get:t})},r.n=function(e){var o=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(o,"a",o),o},r.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},r.p="",r(r.s=2)}([function(e,r){$(document).ready(function(){function e(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||65===e.keyCode&&(!0===e.ctrlKey||!0===e.metaKey)||e.keyCode>=35&&e.keyCode<=40||(e.shiftKey||e.keyCode<48||e.keyCode>57)&&(e.keyCode<96||e.keyCode>105)&&e.preventDefault()}$("input#input_text, textarea#message").characterCounter(),$("#sector").material_select();var r=$("#cotiza-home"),o=$("#cotizapersonal"),t=$("#form-free");$("#employeehome").keydown(e),$("#phone").keydown(e),$("#contact_person_phone").keydown(e),$.validator.setDefaults({ignore:[]}),r.validate({errorElement:"span",errorClass:"not-valid",rules:{employeehome:{required:!0,digits:!0}},errorPlacement:function(e,r){"employeehome"==r.attr("name")&&e.insertAfter(r)}}),o.validate({errorElement:"span",errorClass:"not-valid",rules:{name:{required:!0},company:{required:!0},phone:{required:!0,digits:!0},email:{required:!0},cargo:{required:!0}},messages:{email:{required:"El correo electrónico es inválido."},phone:{required:"Por favor solo ingrese números."}},errorPlacement:function(e,r){r.attr("name"),e.insertAfter(r)}}),t.validate({errorElement:"span",rules:{number_ruc:{required:!0,digits:!0,maxlength:11},company:{required:!0},razon:{required:!0},sector:{required:!0},contact_person:{required:!0},contact_person_email:{required:!0},contact_person_phone:{required:!0,digits:!0},terms:{required:!0}},messages:{sector:{required:"Debe seleccionar un sector."},contact_person_email:{required:"El correo electrónico es inválido."},contact_person_phone:{required:"Por favor solo ingrese números."},terms:{required:"Debe aceptar terminos y condiciones."}},errorPlacement:function(e,r){r.attr("name"),e.insertAfter(r),"checkbox"===r.attr("type")&&e.insertAfter(r.parent(".terms-box")),r.parent(".select-box").length>0&&e.insertAfter(r.parent(".select-box"))}}),$("#cotiza-home-btn").on("click",function(e){e.preventDefault();var o=$("#employeehome").val(),t=$("#cotizaopt1"),n=$("#cotizaopt2");r.valid()&&o>=1&&o<=10?window.location.href=urlAfiliacion:r.valid()&&o>=11&&o<=300?($("#cotiza").css("height","auto"),t.css("display","block"),n.css("display","none")):r.valid()&&o>=301&&($("#cotiza").css("height","auto"),$("#employee").val(o),n.css("display","block"),t.css("display","none"))}),$("#cotiza-personal-btn").on("click",function(e){e.preventDefault(),o.valid()}),$("#btn-send-free").on("click",function(e){e.preventDefault(),t.valid()})})},function(e,r){},function(e,r,o){o(0),e.exports=o(1)}]);