(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[34],{257:function(e,t,c){"use strict";var n=c(11),o=c.n(n),a=c(0),s=c(4),l=c.n(s);c(258),t.a=e=>{let{children:t,className:c,headingLevel:n,...s}=e;const r=l()("wc-block-components-title",c),d="h"+n;return Object(a.createElement)(d,o()({className:r},s),t)}},258:function(e,t){},263:function(e,t){},287:function(e,t,c){"use strict";var n=c(0),o=c(4),a=c.n(o),s=c(257);c(263);const l=e=>{let{title:t,stepHeadingContent:c}=e;return Object(n.createElement)("div",{className:"wc-block-components-checkout-step__heading"},Object(n.createElement)(s.a,{"aria-hidden":"true",className:"wc-block-components-checkout-step__title",headingLevel:"2"},t),!!c&&Object(n.createElement)("span",{className:"wc-block-components-checkout-step__heading-content"},c))};t.a=e=>{let{id:t,className:c,title:o,legend:s,description:r,children:d,disabled:b=!1,showStepNumber:i=!0,stepHeadingContent:u=(()=>{})}=e;const p=s||o?"fieldset":"div";return Object(n.createElement)(p,{className:a()(c,"wc-block-components-checkout-step",{"wc-block-components-checkout-step--with-step-number":i,"wc-block-components-checkout-step--disabled":b}),id:t,disabled:b},!(!s&&!o)&&Object(n.createElement)("legend",{className:"screen-reader-text"},s||o),!!o&&Object(n.createElement)(l,{title:o,stepHeadingContent:u()}),Object(n.createElement)("div",{className:"wc-block-components-checkout-step__container"},!!r&&Object(n.createElement)("p",{className:"wc-block-components-checkout-step__description"},r),Object(n.createElement)("div",{className:"wc-block-components-checkout-step__content"},d)))}},382:function(e,t){},383:function(e,t){},438:function(e,t,c){"use strict";c.r(t);var n=c(0),o=c(4),a=c.n(o),s=c(1),l=c(287),r=c(34),d=c(64),b=c(10);c(383);const i=e=>{let{className:t="",disabled:c=!1,onTextChange:o,placeholder:s,value:l=""}=e;return Object(n.createElement)("textarea",{className:a()("wc-block-components-textarea",t),disabled:c,onChange:e=>{o(e.target.value)},placeholder:s,rows:2,value:l})};c(382);var u=e=>{let{disabled:t,onChange:c,placeholder:o,value:a}=e;const[l,r]=Object(n.useState)(!1),[d,u]=Object(n.useState)("");return Object(n.createElement)("div",{className:"wc-block-checkout__add-note"},Object(n.createElement)(b.CheckboxControl,{disabled:t,label:Object(s.__)("Add a note to your order","woo-gutenberg-products-block"),checked:l,onChange:e=>{r(e),e?a!==d&&c(d):(c(""),u(a))}}),l&&Object(n.createElement)(i,{disabled:t,onTextChange:c,placeholder:o,value:a}))};t.default=e=>{let{className:t}=e;const{needsShipping:c}=Object(d.a)(),{isProcessing:o,orderNotes:b,dispatchActions:i}=Object(r.b)(),{setOrderNotes:p}=i;return Object(n.createElement)(l.a,{id:"order-notes",showStepNumber:!1,className:a()("wc-block-checkout__order-notes",t),disabled:o},Object(n.createElement)(u,{disabled:o,onChange:p,placeholder:c?Object(s.__)("Notes about your order, e.g. special notes for delivery.","woo-gutenberg-products-block"):Object(s.__)("Notes about your order.","woo-gutenberg-products-block"),value:b}))}}}]);