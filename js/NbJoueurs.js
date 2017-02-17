(function() {
	tab = [].slice.call( document.querySelectorAll( 'select.cs-select' ) );
		new SelectFx(tab[0], {
			stickyPlaceholder: false,
			onChange: function(val){
				var img = document.createElement('img');
				img.src = 'img/'+val+'.png';
				img.onload = function() {
					document.querySelectorAll('span.cs-placeholder')[0].style.backgroundImage = 'url(img/'+val+'.png)';
				};
			}
		});
})();

(function() {
	tab = [].slice.call( document.querySelectorAll( 'select.cs-select' ) );
		new SelectFx(tab[1], {
			stickyPlaceholder: false,
			onChange: function(val){
				var img = document.createElement('img');
				img.src = 'img/'+val+'.png';
				img.onload = function() {
					document.querySelectorAll('span.cs-placeholder')[1].style.backgroundImage = 'url(img/'+val+'.png)';
				};
			}
		});
})();
