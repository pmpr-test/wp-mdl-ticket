/*! For license information please see conversation.CuKBYbUNV.js.LICENSE.txt */
(()=>{var e={791:(e,t,n)=>{"use strict";n.r(t)}},t={};function n(o){var r=t[o];if(void 0!==r)return r.exports;var i=t[o]={exports:{}};return e[o](i,i.exports,n),i.exports}n.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},(()=>{n(791);const e=PRHelper.getHTML(),t=PRHelper.getHook(),o=PRHelper.getRequest(),r=PRHelper.getSetting();function i(e){e&&(e.scrollTop=e.scrollHeight-e.clientHeight)}t.on("DOMContentLoaded",(function(){let n=e.getElement(".pr-ticket-conversation-list");i(n),t.on("submit",(function(t,l){t.preventDefault();let s=e.getElement("button[type=submit]",l);e.setElementActivity(s),o.ajax(r.getOption("ajax.submit_response")).onSuccess((t=>{n&&(e.getElement(".pr-ticket-conversation-empty",n)?e.replace(t,n):e.append(t,n),i(n)),PRBackendHelper.getForm().getEditor("response").setContent("")})).onError((e=>{PRBackendHelper.getModal().show({content:e,type:"warning"})})).onFinally((()=>{e.setElementActivity(s,!0)})).addNonce().send({text:PRBackendHelper.getForm().getEditorContent("response"),ticket_id:PRHelper.getServer().getParam("id")})}),"form#ticket_response")}))})()})();