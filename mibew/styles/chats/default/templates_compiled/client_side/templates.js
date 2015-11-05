/*!
 * This file is a part of Mibew Messenger.
 *
 * Copyright 2005-2015 the original author or authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
!function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates._logo=Handlebars.template({1:function(a,e,n,l){var s;return null!=(s=e["if"].call(a,null!=(s=null!=a?a.page:a)?s.mibewHost:s,{name:"if",hash:{},fn:this.program(2,l,0),inverse:this.program(4,l,0),data:l}))?s:""},2:function(a){var e,n=this.lambda,l=this.escapeExpression;return"                <a onclick=\"window.open('"+l(n(null!=(e=null!=a?a.page:a)?e.mibewHost:e,a))+'\');return false;" href="'+l(n(null!=(e=null!=a?a.page:a)?e.mibewHost:e,a))+'">\n                    <img src="'+l(n(null!=(e=null!=(e=null!=a?a.page:a)?e.company:e)?e.chatLogoURL:e,a))+'" alt=""/>\n                </a>\n'},4:function(a){var e;return'                <img src="'+this.escapeExpression(this.lambda(null!=(e=null!=(e=null!=a?a.page:a)?e.company:e)?e.chatLogoURL:e,a))+'" alt=""/>\n'},6:function(a,e,n,l){var s;return null!=(s=e["if"].call(a,null!=(s=null!=a?a.page:a)?s.mibewHost:s,{name:"if",hash:{},fn:this.program(7,l,0),inverse:this.program(9,l,0),data:l}))?s:""},7:function(a){var e,n=this.lambda,l=this.escapeExpression;return"                <a onclick=\"window.open('"+l(n(null!=(e=null!=a?a.page:a)?e.mibewHost:e,a))+'\');return false;" href="'+l(n(null!=(e=null!=a?a.page:a)?e.mibewHost:e,a))+'">\n                    <img src="'+l(n(null!=(e=null!=a?a.page:a)?e.stylePath:e,a))+'/images/default-logo.png" alt=""/>\n                </a>\n'},9:function(a){var e;return'                <img src="'+this.escapeExpression(this.lambda(null!=(e=null!=a?a.page:a)?e.stylePath:e,a))+'/images/default-logo.png" alt=""/>\n'},compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s;return'<div id="logo-wrapper">\n    <div id="logo">\n'+(null!=(s=e["if"].call(a,null!=(s=null!=(s=null!=a?a.page:a)?s.company:s)?s.chatLogoURL:s,{name:"if",hash:{},fn:this.program(1,l,0),inverse:this.program(6,l,0),data:l}))?s:"")+'        &nbsp;\n        <div id="page-title">'+this.escapeExpression(this.lambda(null!=(s=null!=a?a.page:a)?s.title:s,a))+'</div>\n        <div class="clear">&nbsp;</div>\n    </div>\n</div>'},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates.default_control=Handlebars.template({compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s;return"<strong>"+this.escapeExpression((s=null!=(s=e.title||(null!=a?a.title:a))?s:e.helperMissing,"function"==typeof s?s.call(a,{name:"title",hash:{},data:l}):s))+"</strong>"},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates.message=Handlebars.template({1:function(a,e,n,l){var s,t=e.helperMissing,i="function",r=this.escapeExpression;return"<span class='name-"+r((s=null!=(s=e.kindName||(null!=a?a.kindName:a))?s:t,typeof s===i?s.call(a,{name:"kindName",hash:{},data:l}):s))+"'>"+r((s=null!=(s=e.name||(null!=a?a.name:a))?s:t,typeof s===i?s.call(a,{name:"name",hash:{},data:l}):s))+"</span>: "},3:function(a,e,n,l){return this.escapeExpression((e.urlReplace||a&&a.urlReplace||e.helperMissing).call(a,null!=a?a.message:a,{name:"urlReplace",hash:{},data:l}))},compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s,t,i=e.helperMissing,r=this.escapeExpression;return"<span>"+r((e.formatTime||a&&a.formatTime||i).call(a,null!=a?a.created:a,{name:"formatTime",hash:{},data:l}))+"</span>\n"+(null!=(s=e["if"].call(a,null!=a?a.name:a,{name:"if",hash:{},fn:this.program(1,l,0),inverse:this.noop,data:l}))?s:"")+"\n<span class='message-"+r((t=null!=(t=e.kindName||(null!=a?a.kindName:a))?t:i,"function"==typeof t?t.call(a,{name:"kindName",hash:{},data:l}):t))+"'>"+(null!=(s=(e.replace||a&&a.replace||i).call(a,"\\n","<br/>",{name:"replace",hash:{},fn:this.program(3,l,0),inverse:this.noop,data:l}))?s:"")+"</span><br/>"},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/avatar"]=Handlebars.template({1:function(a,e,n,l){var s;return'<img src="'+this.escapeExpression((s=null!=(s=e.imageLink||(null!=a?a.imageLink:a))?s:e.helperMissing,"function"==typeof s?s.call(a,{name:"imageLink",hash:{},data:l}):s))+'" border="0" alt="" />'},3:function(){return'<div class="default-avatar"></div>'},compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s;return null!=(s=e["if"].call(a,null!=a?a.imageLink:a,{name:"if",hash:{},fn:this.program(1,l,0),inverse:this.program(3,l,0),data:l}))?s:""},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/layout"]=Handlebars.template({1:function(){return'        <div id="avatar-region"></div>\n'},compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s;return(null!=(s=this.invokePartial(n._logo,a,{name:"_logo",data:l,helpers:e,partials:n}))?s:"")+'\n<div id="chat-header">\n    <div class="background-center"><div class="background-left"><div class="background-right">\n        <div id="controls-region"></div>\n    </div></div></div>\n</div>\n\n<div id="chat">\n    <div class="background-left"><div class="background-right"><div class="background-shady-center"><div class="background-shady-left"><div class="background-shady-right">\n'+(null!=(s=e.unless.call(a,null!=(s=null!=a?a.user:a)?s.isAgent:s,{name:"unless",hash:{},fn:this.program(1,l,0),inverse:this.noop,data:l}))?s:"")+'        <div id="messages-region"></div>\n        <div id="status-region"></div>\n    </div></div></div></div></div>\n</div>\n\n<div id="message-form-region"></div>\n\n<div id="footer">'+this.escapeExpression((e.l10n||a&&a.l10n||e.helperMissing).call(a,"Powered by:",{name:"l10n",hash:{},data:l}))+' <a id="poweredby-link" href="http://mibew.org" title="Mibew Community" target="_blank">mibew.org</a></div>'},usePartial:!0,useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/message"]=Handlebars.template({1:function(a,e,n,l){var s,t=e.helperMissing,i="function",r=this.escapeExpression;return"<span class='name-"+r((s=null!=(s=e.kindName||(null!=a?a.kindName:a))?s:t,typeof s===i?s.call(a,{name:"kindName",hash:{},data:l}):s))+"'>"+r((s=null!=(s=e.name||(null!=a?a.name:a))?s:t,typeof s===i?s.call(a,{name:"name",hash:{},data:l}):s))+"</span>: "},3:function(a,e,n,l){return this.escapeExpression((e.urlReplace||a&&a.urlReplace||e.helperMissing).call(a,null!=a?a.message:a,{name:"urlReplace",hash:{},data:l}))},compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s,t,i=e.helperMissing,r=this.escapeExpression;return"<span>"+r((e.formatTime||a&&a.formatTime||i).call(a,null!=a?a.created:a,{name:"formatTime",hash:{},data:l}))+"</span> \n"+(null!=(s=e["if"].call(a,null!=a?a.name:a,{name:"if",hash:{},fn:this.program(1,l,0),inverse:this.noop,data:l}))?s:"")+"\n<span class='message-"+r((t=null!=(t=e.kindName||(null!=a?a.kindName:a))?t:i,"function"==typeof t?t.call(a,{name:"kindName",hash:{},data:l}):t))+"'>"+(null!=(s=(e.replace||a&&a.replace||i).call(a,"\\n","<br/>",{name:"replace",hash:{},fn:this.program(3,l,0),inverse:this.noop,data:l}))?s:"")+"</span><br/>"},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/message_form"]=Handlebars.template({1:function(){return'    <div class="background-center"><div class="background-left"><div class="background-right">\n        <textarea id="message-input" class="message" tabindex="0" rows="4" cols="10"></textarea>\n    </div></div></div>\n'},3:function(a,e,n,l){var s,t=e.helperMissing;return'    <div id="post-message">\n        <div id="predefined-wrapper">\n'+(null!=(s=e["if"].call(a,null!=(s=null!=a?a.user:a)?s.isAgent:s,{name:"if",hash:{},fn:this.program(4,l,0),inverse:this.noop,data:l}))?s:"")+'        </div>\n        <a href="javascript:void(0)" id="send-message" title="'+this.escapeExpression((e.l10n||a&&a.l10n||t).call(a,"Send message",{name:"l10n",hash:{},data:l}))+'">'+(null!=(s=(e.l10n||a&&a.l10n||t).call(a,"Send ({0})",null!=a?a.sendShortcut:a,{name:"l10n",hash:{},data:l}))?s:"")+"</a>\n    </div>\n"},4:function(a,e,n,l){var s;return'                <select id="predefined" size="1" class="answer">\n                    <option>'+this.escapeExpression((e.l10n||a&&a.l10n||e.helperMissing).call(a,"Select answer...",{name:"l10n",hash:{},data:l}))+"</option>\n"+(null!=(s=e.each.call(a,null!=a?a.predefinedAnswers:a,{name:"each",hash:{},fn:this.program(5,l,0),inverse:this.noop,data:l}))?s:"")+"                </select>\n"},5:function(a){return"                    <option>"+this.escapeExpression(this.lambda(null!=a?a["short"]:a,a))+"</option>\n"},compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s;return'<div id="message">\n'+(null!=(s=e["if"].call(a,null!=(s=null!=a?a.user:a)?s.canPost:s,{name:"if",hash:{},fn:this.program(1,l,0),inverse:this.noop,data:l}))?s:"")+'</div>\n\n<div id="send">\n'+(null!=(s=e["if"].call(a,null!=(s=null!=a?a.user:a)?s.canPost:s,{name:"if",hash:{},fn:this.program(3,l,0),inverse:this.noop,data:l}))?s:"")+'</div>\n<div class="clear"></div>'},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["invitation/layout"]=Handlebars.template({compiler:[6,">= 2.0.0-beta.1"],main:function(){return'<div id="invitation-messages-region"></div>'},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["leave_message/description"]=Handlebars.template({compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s,t=e.helperMissing,i=this.escapeExpression;return'<div class="buttons">\n    <a href="javascript:Mibew.Utils.closeChatPopup();" title="'+i((e.l10n||a&&a.l10n||t).call(a,"Close",{name:"l10n",hash:{},data:l}))+'">\n        <img class="tpl-image image-close-window" src="'+i(this.lambda(null!=(s=null!=a?a.page:a)?s.stylePath:s,a))+'/images/free.gif" alt="'+i((e.l10n||a&&a.l10n||t).call(a,"Close",{name:"l10n",hash:{},data:l}))+'" />\n    </a>\n</div>\n<div class="info-message">'+(null!=(s=(e.l10n||a&&a.l10n||t).call(a,"Sorry. None of the support team is available at the moment. <br/>Please leave a message and someone will get back to you shortly.",{name:"l10n",hash:{},data:l}))?s:"")+"</div>"},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["leave_message/form"]=Handlebars.template({1:function(a,e,n,l){var s;return null!=(s=e["if"].call(a,null!=a?a.groupId:a,{name:"if",hash:{},fn:this.program(2,l,0),inverse:this.noop,data:l}))?s:""},2:function(a,e,n,l){var s;return'<input type="hidden" name="group" value="'+this.escapeExpression((s=null!=(s=e.groupId||(null!=a?a.groupId:a))?s:e.helperMissing,"function"==typeof s?s.call(a,{name:"groupId",hash:{},data:l}):s))+'"/>'},4:function(a,e,n,l){var s,t=e.helperMissing,i=this.escapeExpression;return'        <tr>\n            <td class="text"><strong>'+i((e.l10n||a&&a.l10n||t).call(a,"Choose Department:",{name:"l10n",hash:{},data:l}))+'</strong></td>\n            <td>\n                <select name="group" style="min-width:200px;">\n'+(null!=(s=e.each.call(a,null!=a?a.groups:a,{name:"each",hash:{},fn:this.program(5,l,0),inverse:this.noop,data:l}))?s:"")+'                </select>\n            </td>\n        </tr>\n        <tr>\n            <td class="text"><strong>'+i((e.l10n||a&&a.l10n||t).call(a,"Department description:",{name:"l10n",hash:{},data:l}))+'</strong></td>\n            <td class="text" id="group-description">\n                '+(null!=(s=e.each.call(a,null!=a?a.groups:a,{name:"each",hash:{},fn:this.program(8,l,0),inverse:this.noop,data:l}))?s:"")+"\n            </td>\n        </tr>\n"},5:function(a,e,n,l){var s,t=this.lambda,i=this.escapeExpression;return'                        <option value="'+i(t(null!=a?a.id:a,a))+'" '+(null!=(s=e["if"].call(a,null!=a?a.selected:a,{name:"if",hash:{},fn:this.program(6,l,0),inverse:this.noop,data:l}))?s:"")+">"+i(t(null!=a?a.name:a,a))+"</option>\n"},6:function(){return'selected="selected"'},8:function(a,e,n,l){var s;return null!=(s=e["if"].call(a,null!=a?a.selected:a,{name:"if",hash:{},fn:this.program(9,l,0),inverse:this.noop,data:l}))?s:""},9:function(a){return this.escapeExpression(this.lambda(null!=a?a.description:a,a))},11:function(){return'        <tr>\n            <td><img id="captcha-img" src="captcha"/></td>\n            <td><input type="text" name="captcha" size="50" maxlength="15" value="" class="username"/></td>\n        </tr>\n'},compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s,t,i=this.lambda,r=this.escapeExpression,o=e.helperMissing,d="function";return'<form name="leaveMessageForm" method="post" action="">\n    <input type="hidden" name="style" value="'+r(i(null!=(s=null!=a?a.page:a)?s.style:s,a))+'"/>\n    <input type="hidden" name="info" value="'+r((t=null!=(t=e.info||(null!=a?a.info:a))?t:o,typeof t===d?t.call(a,{name:"info",hash:{},data:l}):t))+'"/>\n    <input type="hidden" name="referrer" value="'+r((t=null!=(t=e.referrer||(null!=a?a.referrer:a))?t:o,typeof t===d?t.call(a,{name:"referrer",hash:{},data:l}):t))+'"/>\n    '+(null!=(s=e.unless.call(a,null!=a?a.groups:a,{name:"unless",hash:{},fn:this.program(1,l,0),inverse:this.noop,data:l}))?s:"")+'\n\n    <div class="errors"></div>\n\n    <table cellspacing="1" cellpadding="5" border="0" class="form">\n        <tr>\n            <td><strong>'+r((e.l10n||a&&a.l10n||o).call(a,"Your email",{name:"l10n",hash:{},data:l}))+':</strong></td>\n            <td><input disabled type="text" name="email" size="50" value="'+r((t=null!=(t=e.email||(null!=a?a.email:a))?t:o,typeof t===d?t.call(a,{name:"email",hash:{},data:l}):t))+'" class="username"/></td>\n        </tr>\n        <tr>\n            <td><strong>'+r((e.l10n||a&&a.l10n||o).call(a,"Your name",{name:"l10n",hash:{},data:l}))+':</strong></td>\n            <td><input type="text" disabled name="name" size="50" value="'+r((t=null!=(t=e.name||(null!=a?a.name:a))?t:o,typeof t===d?t.call(a,{name:"name",hash:{},data:l}):t))+'" class="username"/></td>\n        </tr>\n'+(null!=(s=e["if"].call(a,null!=a?a.groups:a,{name:"if",hash:{},fn:this.program(4,l,0),inverse:this.noop,data:l}))?s:"")+"        <tr>\n            <td><strong>"+r((e.l10n||a&&a.l10n||o).call(a,"Message",{name:"l10n",hash:{},data:l}))+':</strong></td>\n            <td valign="top">\n                <textarea name="message" tabindex="0" cols="40" rows="5">'+r((t=null!=(t=e.message||(null!=a?a.message:a))?t:o,typeof t===d?t.call(a,{name:"message",hash:{},data:l}):t))+"</textarea>\n            </td>\n        </tr>\n"+(null!=(s=e["if"].call(a,null!=a?a.showCaptcha:a,{name:"if",hash:{},fn:this.program(11,l,0),inverse:this.noop,data:l}))?s:"")+'    </table>\n    <a href="javascript:void(0);" class="but" id="send-message">'+r((e.l10n||a&&a.l10n||o).call(a,"Send",{name:"l10n",hash:{},data:l}))+'</a>\n    <div class="clear">&nbsp;</div>\n</form>\n<div id="ajax-loader"><img src="'+r(i(null!=(s=null!=a?a.page:a)?s.stylePath:s,a))+'/images/ajax-loader.gif" alt="Loading..." /></div>'},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["leave_message/layout"]=Handlebars.template({compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s;return(null!=(s=this.invokePartial(n._logo,a,{name:"_logo",data:l,helpers:e,partials:n}))?s:"")+'\n<div id="headers">\n    <div class="headers-inwards-wrapper-common"><div class="headers-inwards-wrapper-left"><div class="headers-inwards-wrapper-right"><div class="headers-inwards-wrapper-top"><div class="headers-inwards-wrapper-top-left"><div class="headers-inwards-wrapper-top-right"><div class="headers-inwards-wrapper-bottom-left"><div class="headers-inwards-wrapper-bottom-right" id="description-region">\n    </div></div></div></div></div></div></div></div>\n</div>\n\n<div id="content-wrapper"></div>'},usePartial:!0,useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["leave_message/sent_description"]=Handlebars.template({compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s,t=e.helperMissing,i=this.escapeExpression;return'<div class="buttons">\n        <a href="javascript:Mibew.Utils.closeChatPopup();" title="'+i((e.l10n||a&&a.l10n||t).call(a,"Close...",{name:"l10n",hash:{},data:l}))+'">\n            <img class="tpl-image image-close-window" src="'+i(this.lambda(null!=(s=null!=a?a.page:a)?s.stylePath:s,a))+'/images/free.gif" alt="'+i((e.l10n||a&&a.l10n||t).call(a,"Close...",{name:"l10n",hash:{},data:l}))+'" />\n        </a>\n</div>\n<div class="info-message">'+i((e.l10n||a&&a.l10n||t).call(a,"Thank you for your message. We'll answer your query by email as soon as possible.",{name:"l10n",hash:{},data:l}))+"</div>"},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["survey/form"]=Handlebars.template({1:function(a,e,n,l){var s;return'<input type="hidden" name="email" value="'+this.escapeExpression((s=null!=(s=e.email||(null!=a?a.email:a))?s:e.helperMissing,"function"==typeof s?s.call(a,{name:"email",hash:{},data:l}):s))+'"/>'},3:function(a,e,n,l){var s;return null!=(s=e["if"].call(a,null!=a?a.groupId:a,{name:"if",hash:{},fn:this.program(4,l,0),inverse:this.noop,data:l}))?s:""},4:function(a,e,n,l){var s;return'<input type="hidden" name="group" value="'+this.escapeExpression((s=null!=(s=e.groupId||(null!=a?a.groupId:a))?s:e.helperMissing,"function"==typeof s?s.call(a,{name:"groupId",hash:{},data:l}):s))+'"/>'},6:function(a,e,n,l){var s;return'<input type="hidden" name="message" value="'+this.escapeExpression((s=null!=(s=e.message||(null!=a?a.message:a))?s:e.helperMissing,"function"==typeof s?s.call(a,{name:"message",hash:{},data:l}):s))+'"/>'},8:function(a,e,n,l){var s,t=e.helperMissing,i=this.escapeExpression;return"        <tr>\n            <td><strong>"+i((e.l10n||a&&a.l10n||t).call(a,"Choose Department:",{name:"l10n",hash:{},data:l}))+'</strong></td>\n            <td>\n                <select name="group">\n'+(null!=(s=e.each.call(a,null!=a?a.groups:a,{name:"each",hash:{},fn:this.program(9,l,0),inverse:this.noop,data:l}))?s:"")+"                </select>\n            </td>\n        </tr>\n        <tr>\n            <td><strong>"+i((e.l10n||a&&a.l10n||t).call(a,"Department description:",{name:"l10n",hash:{},data:l}))+'</strong></td>\n            <td id="group-description">'+(null!=(s=e.each.call(a,null!=a?a.groups:a,{name:"each",hash:{},fn:this.program(14,l,0),inverse:this.noop,data:l}))?s:"")+"</td>\n        </tr>\n"},9:function(a,e,n,l){var s,t=this.lambda,i=this.escapeExpression;return'                        <option value="'+i(t(null!=a?a.id:a,a))+'" '+(null!=(s=e["if"].call(a,null!=a?a.selected:a,{name:"if",hash:{},fn:this.program(10,l,0),inverse:this.noop,data:l}))?s:"")+">"+i(t(null!=a?a.name:a,a))+(null!=(s=e.unless.call(a,null!=a?a.online:a,{name:"unless",hash:{},fn:this.program(12,l,0),inverse:this.noop,data:l}))?s:"")+"</option>\n"},10:function(){return'selected="selected"'},12:function(){return" (offline)"},14:function(a,e,n,l){var s;return null!=(s=e["if"].call(a,null!=a?a.selected:a,{name:"if",hash:{},fn:this.program(15,l,0),inverse:this.noop,data:l}))?s:""},15:function(a){return this.escapeExpression(this.lambda(null!=a?a.description:a,a))},17:function(){return'disabled="disabled"'},19:function(a,e,n,l){var s,t=e.helperMissing,i=this.escapeExpression;return"        <tr>\n            <td><strong>"+i((e.l10n||a&&a.l10n||t).call(a,"Email:",{name:"l10n",hash:{},data:l}))+'</strong></td>\n            <td><input type="text" disabled name="email" size="50" value="'+i((s=null!=(s=e.email||(null!=a?a.email:a))?s:t,"function"==typeof s?s.call(a,{name:"email",hash:{},data:l}):s))+'" class="username"/></td>\n        </tr>\n'},21:function(a,e,n,l){var s,t=e.helperMissing,i=this.escapeExpression;return"        <tr>\n            <td><strong>"+i((e.l10n||a&&a.l10n||t).call(a,"Initial Question:",{name:"l10n",hash:{},data:l}))+'</strong></td>\n            <td valign="top"><textarea name="message" tabindex="0" cols="45" rows="2">'+i((s=null!=(s=e.message||(null!=a?a.message:a))?s:t,"function"==typeof s?s.call(a,{name:"message",hash:{},data:l}):s))+"</textarea></td>\n        </tr>\n"},compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s,t,i=this.lambda,r=this.escapeExpression,o=e.helperMissing,d="function";return'<form name="surveyForm" method="post" action="">\n    <input type="hidden" name="style" value="'+r(i(null!=(s=null!=a?a.page:a)?s.style:s,a))+'"/>\n    <input type="hidden" name="info" value="'+r((t=null!=(t=e.info||(null!=a?a.info:a))?t:o,typeof t===d?t.call(a,{name:"info",hash:{},data:l}):t))+'"/>\n    <input type="hidden" name="referrer" value="'+r((t=null!=(t=e.referrer||(null!=a?a.referrer:a))?t:o,typeof t===d?t.call(a,{name:"referrer",hash:{},data:l}):t))+'"/>\n    <input type="hidden" name="survey" value="on"/>\n    '+(null!=(s=e.unless.call(a,null!=a?a.showEmail:a,{name:"unless",hash:{},fn:this.program(1,l,0),inverse:this.noop,data:l}))?s:"")+"\n    "+(null!=(s=e.unless.call(a,null!=a?a.groups:a,{name:"unless",hash:{},fn:this.program(3,l,0),inverse:this.noop,data:l}))?s:"")+"\n    "+(null!=(s=e.unless.call(a,null!=a?a.showMessage:a,{name:"unless",hash:{},fn:this.program(6,l,0),inverse:this.noop,data:l}))?s:"")+'\n\n    <div class="errors"></div>\n\n    <table class="form">\n'+(null!=(s=e["if"].call(a,null!=a?a.groups:a,{name:"if",hash:{},fn:this.program(8,l,0),inverse:this.noop,data:l}))?s:"")+"        <tr>\n            <td><strong>"+r((e.l10n||a&&a.l10n||o).call(a,"Name:",{name:"l10n",hash:{},data:l}))+'</strong></td>\n            <td><input type="text" disabled name="name" size="50" value="'+r((t=null!=(t=e.name||(null!=a?a.name:a))?t:o,typeof t===d?t.call(a,{name:"name",hash:{},data:l}):t))+'" class="username" '+(null!=(s=e.unless.call(a,null!=a?a.canChangeName:a,{name:"unless",hash:{},fn:this.program(17,l,0),inverse:this.noop,data:l}))?s:"")+"/></td>\n        </tr>\n"+(null!=(s=e["if"].call(a,null!=a?a.showEmail:a,{name:"if",hash:{},fn:this.program(19,l,0),inverse:this.noop,data:l}))?s:"")+(null!=(s=e["if"].call(a,null!=a?a.showMessage:a,{name:"if",hash:{},fn:this.program(21,l,0),inverse:this.noop,data:l}))?s:"")+'    </table>\n    <a href="javascript:void(0);" class="but" id="submit-survey">'+r((e.l10n||a&&a.l10n||o).call(a,"Start Chat",{name:"l10n",hash:{},data:l}))+'</a>\n    <div class="clear">&nbsp;</div>\n</form>\n<div id="ajax-loader"><img src="'+r(i(null!=(s=null!=a?a.page:a)?s.stylePath:s,a))+'/images/ajax-loader.gif" alt="Loading..." /></div>'},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["survey/layout"]=Handlebars.template({compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s,t=e.helperMissing,i=this.escapeExpression;return(null!=(s=this.invokePartial(n._logo,a,{name:"_logo",data:l,helpers:e,partials:n}))?s:"")+'\n<div id="headers">\n    <div class="headers-inwards-wrapper-common"><div class="headers-inwards-wrapper-left"><div class="headers-inwards-wrapper-right"><div class="headers-inwards-wrapper-top"><div class="headers-inwards-wrapper-top-left"><div class="headers-inwards-wrapper-top-right"><div class="headers-inwards-wrapper-bottom-left"><div class="headers-inwards-wrapper-bottom-right">\n        <div class="buttons">\n            <a href="javascript:Mibew.Utils.closeChatPopup();" title="'+i((e.l10n||a&&a.l10n||t).call(a,"Close",{name:"l10n",hash:{},data:l}))+'"><img class="tpl-image image-close-window" src="'+i(this.lambda(null!=(s=null!=a?a.page:a)?s.stylePath:s,a))+'/images/free.gif" alt="'+i((e.l10n||a&&a.l10n||t).call(a,"Close",{name:"l10n",hash:{},data:l}))+'" /></a>\n        </div>\n        <div class="info-message">'+i((e.l10n||a&&a.l10n||t).call(a,"Thank you for contacting us. Please fill out the form below and click the Start Chat button.",{name:"l10n",hash:{},data:l}))+'</div>\n    </div></div></div></div></div></div></div></div>\n</div>\n\n<div id="content-wrapper"></div>'},usePartial:!0,useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/controls/close"]=Handlebars.template({compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){return'<div class="tpl-image" title="'+this.escapeExpression((e.l10n||a&&a.l10n||e.helperMissing).call(a,"Close chat",{name:"l10n",hash:{},data:l}))+'"></div>'},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/controls/history"]=Handlebars.template({compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){return'<div class="tpl-image" title="'+this.escapeExpression((e.l10n||a&&a.l10n||e.helperMissing).call(a,"Visit history",{name:"l10n",hash:{},data:l}))+'"></div>'},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/controls/redirect"]=Handlebars.template({1:function(a,e,n,l){return'<div class="tpl-image" title="'+this.escapeExpression((e.l10n||a&&a.l10n||e.helperMissing).call(a,"Redirect visitor to another operator",{name:"l10n",hash:{},data:l}))+'"></div>\n'},compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s;return null!=(s=e["if"].call(a,null!=(s=null!=a?a.user:a)?s.canPost:s,{name:"if",hash:{},fn:this.program(1,l,0),inverse:this.noop,data:l}))?s:""},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/controls/refresh"]=Handlebars.template({compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){return'<div class="tpl-image" title="'+this.escapeExpression((e.l10n||a&&a.l10n||e.helperMissing).call(a,"Refresh",{name:"l10n",hash:{},data:l}))+'"></div>'},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/controls/secure_mode"]=Handlebars.template({compiler:[6,">= 2.0.0-beta.1"],main:function(){return'<div class="tpl-image" title="SSL"></div>'},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/controls/send_mail"]=Handlebars.template({compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){return'<div class="tpl-image" title="'+this.escapeExpression((e.l10n||a&&a.l10n||e.helperMissing).call(a,"Send chat history by e-mail",{name:"l10n",hash:{},data:l}))+'"></div>'},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/controls/sound"]=Handlebars.template({1:function(a,e,n,l){return'    <div class="tpl-image sound-control-on" title="'+this.escapeExpression((e.l10n||a&&a.l10n||e.helperMissing).call(a,"Turn off sound",{name:"l10n",hash:{},data:l}))+'"></div>\n'},3:function(a,e,n,l){return'    <div class="tpl-image sound-control-off" title="'+this.escapeExpression((e.l10n||a&&a.l10n||e.helperMissing).call(a,"Turn on sound",{name:"l10n",hash:{},data:l}))+'"></div>\n'},compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s;return null!=(s=e["if"].call(a,null!=a?a.enabled:a,{name:"if",hash:{},fn:this.program(1,l,0),inverse:this.program(3,l,0),data:l}))?s:""},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/controls/user_name"]=Handlebars.template({1:function(a,e,n,l){var s;return'    <span class="user-name-control-prefix">'+this.escapeExpression((e.l10n||a&&a.l10n||e.helperMissing).call(a,"You are",{name:"l10n",hash:{},data:l}))+"</span>\n"+(null!=(s=e["if"].call(a,null!=a?a.nameInput:a,{name:"if",hash:{},fn:this.program(2,l,0),inverse:this.program(4,l,0),data:l}))?s:"")},2:function(a,e,n,l){var s,t=this.escapeExpression;return'        <div class="user-name-control-input-background"><input id="user-name-control-input" maxlength="20" type="text" size="12" value="'+t(this.lambda(null!=(s=null!=a?a.user:a)?s.name:s,a))+'" class="username" /></div>\n        <a href="javascript:void(0)" class="user-name-control-set tpl-image" title="'+t((e.l10n||a&&a.l10n||e.helperMissing).call(a,"Change name",{name:"l10n",hash:{},data:l}))+'"></a>\n'},4:function(a,e,n,l){var s,t=e.helperMissing,i=this.escapeExpression;return'        <a href="javascript:void(0)" title="'+i((e.l10n||a&&a.l10n||t).call(a,"Change name",{name:"l10n",hash:{},data:l}))+'">'+i(this.lambda(null!=(s=null!=a?a.user:a)?s.name:s,a))+'</a>\n        <a class="user-name-control-change tpl-image" title="'+i((e.l10n||a&&a.l10n||t).call(a,"Change name",{name:"l10n",hash:{},data:l}))+'"></a>\n'},6:function(a,e,n,l){var s,t=this.escapeExpression;return t((e.l10n||a&&a.l10n||e.helperMissing).call(a,"You are",{name:"l10n",hash:{},data:l}))+"&nbsp;"+t(this.lambda(null!=(s=null!=a?a.user:a)?s.name:s,a))+"\n"},compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s;return null!=(s=e["if"].call(a,null!=(s=null!=a?a.user:a)?s.canChangeName:s,{name:"if",hash:{},fn:this.program(1,l,0),inverse:this.program(6,l,0),data:l}))?s:""},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/status/base"]=Handlebars.template({compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s;return this.escapeExpression((s=null!=(s=e.title||(null!=a?a.title:a))?s:e.helperMissing,"function"==typeof s?s.call(a,{name:"title",hash:{},data:l}):s))},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/status/message"]=Handlebars.template({compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){var s;return this.escapeExpression((s=null!=(s=e.message||(null!=a?a.message:a))?s:e.helperMissing,"function"==typeof s?s.call(a,{name:"message",hash:{},data:l}):s))},useData:!0})}(),function(){Handlebars.templates=Handlebars.templates||{};Handlebars.templates["chat/status/typing"]=Handlebars.template({compiler:[6,">= 2.0.0-beta.1"],main:function(a,e,n,l){return this.escapeExpression((e.l10n||a&&a.l10n||e.helperMissing).call(a,"Remote user is typing...",{name:"l10n",hash:{},data:l}))},useData:!0})}();