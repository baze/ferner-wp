/* exported addEvent, removeEvent, getChildren, setAttributes, addClass, removeClass, hasClass, forEach *//**
 * Add Event
 * fn arg can be an object or a function, thanks to handleEvent
 * read more at: http://www.thecssninja.com/javascript/handleevent
 *
 * @param  {element}  element
 * @param  {event}    event
 * @param  {Function} fn
 * @param  {boolean}  bubbling
 */var addEvent=function(e,t,n,r){if("addEventListener"in e)try{e.addEventListener(t,n,r)}catch(i){if(typeof n!="object"||!n.handleEvent)throw i;e.addEventListener(t,function(e){n.handleEvent.call(n,e)},r)}else"attachEvent"in e&&(typeof n=="object"&&n.handleEvent?e.attachEvent("on"+t,function(){n.handleEvent.call(n)}):e.attachEvent("on"+t,n))},removeEvent=function(e,t,n,r){if("removeEventListener"in e)try{e.removeEventListener(t,n,r)}catch(i){if(typeof n!="object"||!n.handleEvent)throw i;e.removeEventListener(t,function(e){n.handleEvent.call(n,e)},r)}else"detachEvent"in e&&(typeof n=="object"&&n.handleEvent?e.detachEvent("on"+t,function(){n.handleEvent.call(n)}):e.detachEvent("on"+t,n))},getChildren=function(e){if(e.children.length<1)throw new Error("The Nav container has no containing elements");var t=[];for(var n=0;n<e.children.length;n++)e.children[n].nodeType===1&&t.push(e.children[n]);return t},setAttributes=function(e,t){for(var n in t)e.setAttribute(n,t[n])},addClass=function(e,t){if(!hasClass(e,t)){e.className+=" "+t;e.className=e.className.replace(/(^\s*)|(\s*$)/g,"")}},removeClass=function(e,t){var n=new RegExp("(\\s|^)"+t+"(\\s|$)");e.className=e.className.replace(n," ").replace(/(^\s*)|(\s*$)/g,"")},hasClass=function(e,t){return e.className&&(new RegExp("(\\s|^)"+t+"(\\s|$)")).test(e.className)},forEach=function(e,t,n){for(var r=0;r<e.length;r++)t.call(n,r,e[r])};