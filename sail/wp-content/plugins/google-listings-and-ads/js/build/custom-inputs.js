!function(e){var t={};function n(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,o){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(o,r,function(t){return e[t]}.bind(null,r));return o},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=190)}({190:function(e,t,n){"use strict";n.r(t);const o=e=>{const t=e.parents("div.select-with-text-input").find(".custom-input");"_gla_custom_value"===e.val()?t.show():t.hide()};var r=e=>{const t=e("div.select-with-text-input select");t.each((function(t,n){o(e(n))})),t.on("change",(function(){o(e(this))}))};const c=e=>{const t=new RegExp("[^0-9]*","gi"),n=e.val(),o=n.replace(t,"");n!==o&&e.val(o)};var i=e=>{const t=e(".gla-input-integer[type=text]");t.on("change",(function(){c(e(this))})),t.on("keyup",(function(){c(e(this))}))};window.jQuery((function(e){const t=()=>{r(e),i(e)};e("#woocommerce-product-data").on("woocommerce_variations_loaded",t),e(document.body).on("woocommerce_variations_added",t),t()}))}});