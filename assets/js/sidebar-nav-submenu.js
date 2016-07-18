/*
 *|=======================================|
 *| [sidebar-nav-submenu.js]
 *|
 *| Holds the logic to toggle the sidebar
 *| submenus.
 *| 
 *| @package marcadordo
 *| @author Richard Blondet
 *|=======================================|
*/

/**
 * SidebarNav_SubMenu 
 *
 * @class SidebarNav_SubMenu
 * Singleton for sidebar menu
 * @param { Object }
 * @author Richard Blondet
 */
var SidebarNav_SubMenu = function( selectorElements ) {
	this.elements = selectorElements;
	var _this = this;

	/** Prevent Propagation for all submenu */
	[].forEach.call( document.querySelectorAll('.sidebar-nav-submenu li'), function( menuLinks ) {
		menuLinks.addEventListener('click', function(e) {
			e.stopPropagation();
		});
	});

	[].forEach.call( this.elements, function( el ) {
		el.onclick = function( e ) {
			
			/* Close all elements opened and only open the current clicked */
			[].forEach.call( _this.elements, function( el ) {
				if ( _this.isOpen( el, 'toggled' ) ) {
					_this.close( el, e );
				}
			});
			
			/** Find the element clicked */
			[].forEach.call( e.path, function( nodeEl ) {
				if( typeof nodeEl.attributes !== "undefined" && nodeEl.attributes.length > 0) {
					if( 'sidebar-nav-submenu' in nodeEl.attributes && typeof nodeEl.attributes['sidebar-nav-submenu'] === "object"  ) {
						e.preventDefault();
						if ( _this.isOpen( el, 'toggled' ) ) {
							_this.close( el, e );
						}
						else {
							_this.open( el, e );
						}
					}
				}
			});
		}
	});
};

/**
 * Handles the opening for submenus
 * @param  {DOM Node}
 * @param  {Event Type}
 * @param  {Function}
 * @return {Bool}
 */
SidebarNav_SubMenu.prototype.open = function( element, event, callback ) {
	var _this = this;

	if (element.classList) {
	  	element.classList.add( "toggled" );
	}
	else {
		el.className += ' ' +  "toggled";
	}
	if( typeof callback !== "undefined" && typeof callback === "function") {
		/** Trigger Callback when toggled */
		callback();
	}
	return true;
};

/**
 * Handles the closing for submenus
 * @param  {DOM Node}
 * @param  {Event Type}
 * @param  {Function}
 * @return {Bool}
 */
SidebarNav_SubMenu.prototype.close = function( element, event, callback ) {
	var _this = this;

	if (element.classList) {
		element.classList.remove("toggled");
	} else {
		element.className = element.className.replace(new RegExp('(^|\\b)' + "toggled".split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
	}
	if( typeof callback !== "undefined" && typeof callback === "function") {
		/** Trigger Callback when toggled */
		callback();
	}
	return true;
};

/**
 * Check whether the menu is opened
 * @return {Bool}
 */
SidebarNav_SubMenu.prototype.isOpen = function( element, classOpener ) {
	var bool;
	if ( element.classList ) {
		bool = element.classList.contains( classOpener );
	}
	else {
		bool = new RegExp('(^| )' + classOpener + '( |$)', 'gi').test(element.className);
	}
	return bool;
};