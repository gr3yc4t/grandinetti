function escapeRegExp(str){
	return str.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
}

function replaceAll(find, replace, str){
	return str.replace(new RegExp(escapeRegExp(find), 'g'), replace);
}

if (typeof String.prototype.startsWith != 'function') {
  String.prototype.startsWith = function (str){
    return this.slice(0, str.length) == str;
  };
}

if (typeof String.prototype.endsWith != 'function') {
  String.prototype.endsWith = function (str){
    return this.slice(-str.length) == str;
  };
}

function today(){
	var td = new Date();
	var dd = td.getDate();
	var mm = td.getMonth()+1; //January is 0!

	var yyyy = td.getFullYear();
	if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} td = dd+'/'+mm+'/'+yyyy;
	return td;
}


(function($){
    $.fn.extend({
        numberize: function(){
            return this.each(function(){
				$(this).keydown(function(event) {
					// Allow: backspace, delete, tab, escape, and enter
					if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
						 // Allow: Ctrl+A
						(event.keyCode == 65 && event.ctrlKey === true) ||
						 // Allow: home, end, left, right
						(event.keyCode >= 35 && event.keyCode <= 39)) {
							 // let it happen, don't do anything
							 return;
					}
					else {
						// Ensure that it is a number and stop the keypress
						if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
							event.preventDefault();
						}
					}
				});
            });
        },
		fixDraw: function(){
			return this.each(function(){
				this.style.display='none';
				this.offsetHeight;
				this.style.display='block';
			});
		}
	});
})(jQuery);