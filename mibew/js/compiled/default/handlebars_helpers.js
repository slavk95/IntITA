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
!function(e,r){r.registerHelper("formatTime",function(e){var r=new Date(1e3*e),t=r.getHours().toString(),n=r.getMinutes().toString(),i=r.getSeconds().toString();return t=10>t?"0"+t:t,n=10>n?"0"+n:n,i=10>i?"0"+i:i,t+":"+n+":"+i}),r.registerHelper("urlReplace",function(e){return new r.SafeString(e.toString().replace(/((?:https?|ftp):\/\/\S*)/g,'<a href="$1" target="_blank">$1</a>'))}),r.registerHelper("l10n",function(){var r=e.Localization,t=Array.prototype.slice;return r.trans.apply(r,t.call(arguments))}),r.registerHelper("ifEven",function(e,r){return e%2===0?r.fn(this):r.inverse(this)}),r.registerHelper("ifOdd",function(e,r){return e%2!==0?r.fn(this):r.inverse(this)}),r.registerHelper("ifAny",function(){for(var e=arguments.length,r=arguments[e-1],t=[].slice.call(arguments,0,e-1),n=0,i=t.length;i>n;n++)if(t[n])return r.fn(this);return r.inverse(this)}),r.registerHelper("ifEqual",function(e,r,t){return e==r?t.fn(this):t.inverse(this)}),r.registerHelper("repeat",function(e,r){for(var t="",n=r.fn(this),i=0;e>i;i++)t+=n;return t}),r.registerHelper("replace",function(e,r,t){var n=e.toString().replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g,"\\$&"),i=new RegExp(n,"g");return t.fn(this).replace(i,r)}),r.registerHelper("cutString",function(e,r){return r.fn(this).substr(0,e)}),r.registerHelper("block",function(e,r){return this._blocksStorage&&this._blocksStorage.hasOwnProperty(e)?this._blocksStorage[e]:r.fn(this)}),r.registerHelper("extends",function(e,t){if(this._blocksStorage=this._blocksStorage||{},t.fn(this),!r.templates.hasOwnProperty(e))throw Error('Parent template "'+e+'" is not defined');return r.templates[e](this)}),r.registerHelper("override",function(e,r){return this._blocksStorage.hasOwnProperty(e)||(this._blocksStorage[e]=r.fn(this)),""}),r.registerHelper("ifOverridden",function(e,r){return this._blocksStorage&&this._blocksStorage.hasOwnProperty(e)?r.fn(this):r.inverse(this)}),r.registerHelper("unlessOverridden",function(e,r){return this._blocksStorage&&this._blocksStorage.hasOwnProperty(e)?r.inverse(this):r.fn(this)})}(Mibew,Handlebars);