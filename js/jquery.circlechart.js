!function(a){a.fn.extend({percentcircle:function(b){function g(){e.each(function(){var c=a(this),e=Math.round(c.data("percent")),g=3.6*e,i=b.animate?0:g,j=a(f.replace("{{percentage}}",e+"%"));j.css(d.cirContainer).find(".ab").css(d.cir).find(".cir").css(d.cirCover).find(".perc").css(d.percent),c.append(j),setTimeout(function(){h(g,parseInt(i),j.find(".ab"))},250)})}var c={animate:!0,diameter:100,guage:2,coverBg:"#fff",bgColor:"#efefef",fillColor:"#5c93c8",percentSize:"15px",percentWeight:"normal"},d={cirContainer:{width:c.diameter,height:c.diameter},cir:{position:"relative","text-align":"center",width:c.diameter,height:c.diameter,"border-radius":"100%","background-color":c.bgColor,"background-image":"linear-gradient(91deg, transparent 50%, "+c.bgColor+" 50%), linear-gradient(90deg, "+c.bgColor+" 50%, transparent 50%)"},cirCover:{position:"relative",top:c.guage,left:c.guage,"text-align":"center",width:c.diameter-2*c.guage,height:c.diameter-2*c.guage,"border-radius":"100%","background-color":c.coverBg},percent:{display:"block",width:c.diameter,height:c.diameter,"line-height":c.diameter+"px","vertical-align":"middle","font-size":c.percentSize,"font-weight":c.percentWeight,color:c.fillColor}},e=this,f='<div><div class="ab"><div class="cir"><span class="perc">{{percentage}}</span></div></div></div>',b=a.extend(c,b),h=function(a,c,d){var e=c;c<=a&&(e>=180?d.css("background-image","linear-gradient("+(90+e)+"deg, transparent 50%, "+b.fillColor+" 50%),linear-gradient(90deg, "+b.fillColor+" 50%, transparent 50%)"):d.css("background-image","linear-gradient("+(e-90)+"deg, transparent 50%, "+b.bgColor+" 50%),linear-gradient(90deg, "+b.fillColor+" 50%, transparent 50%)"),c++,setTimeout(function(){h(a,c,d)},1))};g()}})}(jQuery);