/*
 * banner轮播组件
 * 2015-06-26 14:00
 * params:cfg
 * */

function Banner() {
    this.cfg = {
        id: '',
        btnListId:'',
        btnListClass: 'select',
        thisShow: 1,
        time: 3000,
        callback: null,
        timer: null,
        ban: null,
        banList: null,
        btnList: null,
        nextbtn:'',
        prevbtn:''
    };
    var $this = this;
    this.onStart = function () {
        $this.cfg.banList.stop(true, true).fadeOut(800).eq($this.cfg.thisShow).stop(true, true).fadeIn(800);
        if ($this.cfg.btnListId) {
            $this.cfg.btnList.removeClass($this.cfg.btnListClass).eq($this.cfg.thisShow).addClass($this.cfg.btnListClass);
        }
        if ($this.cfg.thisShow >= $this.cfg.banList.length - 1) {
            $this.cfg.thisShow = 0;
        } else {
            $this.cfg.thisShow = $this.cfg.thisShow + 1;
        }
    },
	this.stop = function () {
	    if ($this.cfg.timer) {
	        clearInterval($this.cfg.timer);
	    }
	},
	this.start = function () {
	    $this.cfg.timer = setInterval($this.onStart, $this.cfg.time);
	}
}

Banner.prototype = {
    init: function (cfg) {
        var $this = this;
        $this.cfg = $.extend($this.cfg, cfg);
        $this.cfg.ban = $($this.cfg.id);
        $this.cfg.banList = $this.cfg.ban.find('li');
        $this.cfg.banList.hide().eq(0).show();
        $this.cfg.btnList = $($this.cfg.btnListId).find('li');
        $this.cfg.thisShow = 1;
        $this.stop();
        $this.start();
            //一张以上生成分页按钮，只有一张时停止切换
        var bansize = $this.cfg.banList.length;
        if (bansize > 1) {
            //自动生成分页按钮
            /*
	    	for(var i = 0; i < bansize; i++){
	    	 	if(i == (bansize-1)){			
	    	 		btnList.append('<li class="nobg"><span></span></li>');
	    	 	}else{
		    		btnList.append('<li><span></span></li>');
		    	}
		    }*/
            $this.cfg.btnList.removeClass($this.cfg.btnListClass).eq(0).addClass($this.cfg.btnListClass);
            $this.cfg.btnList.each(function (index) {
                $(this).off('click').on('click', function (e) {
                    $this.cfg.btnList.removeClass($this.cfg.btnListClass).eq(index).addClass($this.cfg.btnListClass);
                    $this.cfg.thisShow = index;
                    $this.stop();
                    $this.onStart();
                    $this.start();
                    e.stopPropagation();
                });
            });
        } else {
            $this.stop();
        }
        //下一张
        if($this.cfg.nextbtn){
        	$($this.cfg.nextbtn).off('click').on('click', function (e) {
                $this.stop();
                $this.onStart();
                $this.start();
                e.stopPropagation();
            });
        }
        //上一张
        if($this.cfg.prevbtn){
        	$($this.cfg.prevbtn).off('click').on('click', function (e) {
		        if ($this.cfg.thisShow < 0) {
		            $this.cfg.thisShow = 0;
		        } else {
		            $this.cfg.thisShow = $this.cfg.thisShow - 2;
		        }
                $this.stop();
                $this.onStart();
                $this.start();
                e.stopPropagation();
            });
        }
        return this;
    }
}