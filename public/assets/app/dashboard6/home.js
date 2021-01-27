"use strict";function ownKeys(object,enumerableOnly){var keys=Object.keys(object);if(Object.getOwnPropertySymbols){var symbols=Object.getOwnPropertySymbols(object);if(enumerableOnly)symbols=symbols.filter(function(sym){return Object.getOwnPropertyDescriptor(object,sym).enumerable});keys.push.apply(keys,symbols)}return keys}function _objectSpread(target){for(var i=1;i<arguments.length;i++){var source=arguments[i]!=null?arguments[i]:{};if(i%2){ownKeys(Object(source),true).forEach(function(key){_defineProperty(target,key,source[key])})}else if(Object.getOwnPropertyDescriptors){Object.defineProperties(target,Object.getOwnPropertyDescriptors(source))}else{ownKeys(Object(source)).forEach(function(key){Object.defineProperty(target,key,Object.getOwnPropertyDescriptor(source,key))})}}return target}function _defineProperty(obj,key,value){if(key in obj){Object.defineProperty(obj,key,{value:value,enumerable:true,configurable:true,writable:true})}else{obj[key]=value}return obj}$(function(){var currency=new Intl.NumberFormat("en-US",{style:"currency",currency:"USD",minimumFractionDigits:0});var colors={blue:"#2196f3",green:"#4caf50",red:"#f44336",white:"#fff",black:"#424242"};var themeOptions={light:{theme:{mode:"light",palette:"palette1"}},dark:{theme:{mode:"dark",palette:"palette1"}}};var widgetChart1=new ApexCharts(document.querySelector("#widget-chart-1"),_objectSpread(_objectSpread({},themeOptions.light),{},{series:[{name:"Revenue",data:[3100,4e3,2800,5100,4200,10900,5600,8600,7e3]}],chart:{type:"area",height:300,sparkline:{enabled:true}},markers:{strokeColors:colors.white},stroke:{show:false},tooltip:{marker:{show:false},y:{formatter:function formatter(val){return currency.format(val)}}},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep"],crosshairs:{show:false}},responsive:[{breakpoint:576,options:{chart:{height:200}}}]}));var widgetChart5=new ApexCharts(document.querySelector("#widget-chart-5"),_objectSpread(_objectSpread({},themeOptions.light),{},{series:[{name:"Sales",data:[640,400,760,620,980,640]}],chart:{type:"area",height:300,toolbar:{show:false}},dataLabels:{enabled:false},fill:{opacity:0},stroke:{show:true,colors:[colors.blue],lineCap:"round"},markers:{colors:colors.white,strokeWidth:4,strokeColors:colors.blue},tooltip:{marker:{show:false},y:{formatter:function formatter(val){return"".concat(val," Products")}}},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun"]}}));var widgetChart6=new ApexCharts(document.querySelector("#widget-chart-6"),_objectSpread(_objectSpread({},themeOptions.light),{},{series:[{name:"Unique",data:[6400,4e3,7600,6200,9800,6400,8600,7e3]}],chart:{type:"area",height:300,sparkline:{enabled:true}},markers:{strokeColors:colors.white},fill:{type:"gradient",gradient:{shade:"light",type:"vertical",opacityFrom:1,opacityTo:0,stops:[0,100]}},tooltip:{marker:{show:false},y:{formatter:function formatter(val){return"".concat(val," Visited")}}},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug"],crosshairs:{show:false}}}));var widgetChart7=$(".widget-chart-7").map(function(){var color=$(this).data("chart-color");var label=$(this).data("chart-label");var series=$(this).data("chart-series").split(",").map(function(data){return Number(data)});var enabledCurrency=$(this).data("chart-currency");return new ApexCharts(this,_objectSpread(_objectSpread({},themeOptions.light),{},{series:[{name:label,data:series}],chart:{type:"area",height:200,sparkline:{enabled:true}},fill:{type:"solid",colors:[color],opacity:.1},stroke:{show:true,colors:[color]},markers:{colors:colors.white,strokeWidth:4,strokeColors:color},tooltip:{marker:{show:false},y:{formatter:function formatter(val){return Boolean(enabledCurrency)?currency.format(val):val}}},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun"],crosshairs:{show:false}}}))});var widgetChart9=$(".widget-chart-9").map(function(){var color=$(this).data("chart-color");var label=$(this).data("chart-label");var series=$(this).data("chart-series").split(",").map(function(data){return Number(data)});return new ApexCharts(this,_objectSpread(_objectSpread({},themeOptions.light),{},{series:[{name:label,data:series}],chart:{type:"area",height:150,sparkline:{enabled:true}},fill:{opacity:0},markers:{strokeColors:colors.white},stroke:{show:true,colors:[color],lineCap:"round"},tooltip:{marker:{show:false}},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun"],crosshairs:{show:false}}}))});widgetChart1.render();widgetChart5.render();widgetChart6.render();widgetChart7.each(function(){this.render()});widgetChart9.each(function(){this.render()});$("#theme-toggle").on("click",function(){var isDark=$("body").hasClass("theme-dark");if(isDark){widgetChart1.updateOptions(_objectSpread(_objectSpread({},themeOptions.dark),{},{markers:{strokeColors:colors.black}}));widgetChart5.updateOptions(_objectSpread(_objectSpread({},themeOptions.dark),{},{markers:{colors:colors.black}}));widgetChart6.updateOptions(_objectSpread(_objectSpread({},themeOptions.dark),{},{markers:{strokeColors:colors.black}}));widgetChart7.each(function(){this.updateOptions(_objectSpread(_objectSpread({},themeOptions.dark),{},{markers:{colors:colors.black}}))});widgetChart9.each(function(){this.updateOptions(_objectSpread(_objectSpread({},themeOptions.dark),{},{markers:{strokeColors:colors.black}}))})}else{widgetChart1.updateOptions(_objectSpread(_objectSpread({},themeOptions.light),{},{markers:{strokeColors:colors.white}}));widgetChart5.updateOptions(_objectSpread(_objectSpread({},themeOptions.light),{},{markers:{colors:colors.white}}));widgetChart6.updateOptions(_objectSpread(_objectSpread({},themeOptions.light),{},{markers:{strokeColors:colors.white}}));widgetChart7.each(function(){this.updateOptions(_objectSpread(_objectSpread({},themeOptions.light),{},{markers:{colors:colors.white}}))});widgetChart9.each(function(){this.updateOptions(_objectSpread(_objectSpread({},themeOptions.light),{},{markers:{strokeColors:colors.white}}))})}})});