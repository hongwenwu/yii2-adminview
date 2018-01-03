var bodyHeight = $(document.body).height();//body高度

var navbarHeight = $('.navbar').height();//导航高度

var menuHeight = $('.sidebar-nav').height();//菜单高度

var initHeight = bodyHeight-navbarHeight;//计算初始高度

var contentHeight = $('.content').height();//内容高度

if(menuHeight > initHeight)
{
	initHeight = menuHeight;
}

if(contentHeight > initHeight)
{
	initHeight = contentHeight+14;
}

$('.content').css({'height':initHeight+'px'});

$('.nav-header').click(function(){
	setTimeout("sidebarNavHeight("+initHeight+")",450);
});

function sidebarNavHeight(runHeight)
{
	var menuHeight = $('.sidebar-nav').height();//菜单高度
	
	var initHeight = bodyHeight-navbarHeight;//计算初始高度
	
	if(menuHeight < initHeight)
	{
		menuHeight = initHeight;
	}
	if(menuHeight < runHeight)
	{
		menuHeight = runHeight;
	}
	$('.content').css({'height':menuHeight+'px'});
}

$(document).ready(function(){
	$('.nav-header').each(function(){
		var target = $(this).data('target');
		if($(target).find('li').hasClass("active")){
			$(this).click();
		}
	});
});
