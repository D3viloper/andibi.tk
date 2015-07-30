var ____prototype_ae_IE9JumpList = ____prototype_ae_IE9JumpList || {};

(function( jumplist ) {
	if ( !navigator.userAgent.toLowerCase().match(/msie (9|10)(\.?[0-9]*)*/) ) {
		return;
	}
	
	var options = {

		// Basic site information	
		siteName: 'ANDIBI.TK', // Site Name
		applicationName: 'ANDIBI.TK', // Site Name 
		startURL: '', // Homepage URL 
		shortcutIcon: 'https%3a//buildmypinnedsite.blob.core.windows.net/files/JumpList/30e4607b4c854128bfe3860f53d0ac4d/Main-andibitk.ico', // Main Site Icon
		tooltip: '',

		// Dynamic jumplist tasks & notifications
		rssFeedURL: 'http://www.buildmypinnedsite.com/RSSFeed?feed=https%3a//github.com/Brawl345/andibi.tk/commits/master.atom',
		categoryTitle: 'Letzte \u00c4nderungen', // Task group name
		defaultTaskIcon: 'https%3a//buildmypinnedsite.blob.core.windows.net/files/JumpList/fd57d75842884df99398f52a5b9da04e/GenericTask-githubcom.ico', // Generic task icon
		
		navButtonColor: false,
		
		// Jumplist tasks { name: Task Label, action: Task URL, icon: Task Icon }
		staticTasks: [{ name: 'User-Agent \x26 IP',  action: 'http%3a//andibi.tk/ua.php', icon: 'https%3a//buildmypinnedsite.blob.core.windows.net/files/JumpList/6b8fea6924f04d3eaa4f7d52bdb04122/Task3-andibitk.ico', target: 'tab' },{ name: 'Letzte Commits',  action: 'https%3a//github.com/Brawl345/andibi.tk/commits/master', icon: 'https%3a//buildmypinnedsite.blob.core.windows.net/files/JumpList/42c9ed5fe99c40dab28f2835d5182df6/Task4-andibitk.ico', target: 'tab' },{ name: 'Datalist-Test',  action: 'http%3a//andibi.tk/datalisttest.php', icon: 'https%3a//buildmypinnedsite.blob.core.windows.net/files/JumpList/4222d6f7347843bfa9ee5ba6b87ac9e2/Task2-andibitk.ico', target: 'tab' },{ name: '\u00dcber',  action: 'http%3a//andibi.tk/about.php', icon: 'https%3a//buildmypinnedsite.blob.core.windows.net/files/JumpList/4f557e0c417d48a0a6e323a9d91f460b/Task0-andibitk.ico', target: 'tab' },{ name: 'Kontakt',  action: 'http%3a//andibi.tk/contact.php', icon: 'https%3a//buildmypinnedsite.blob.core.windows.net/files/JumpList/a56a569ee89c45daa83a1acee9bab628/Task1-andibitk.ico', target: 'tab' }],
		
		// Drag and drop site pinning bar		
		prompt: false, // Add a site pinning bar on top of my site pages
		barSiteName: 'ANDIBI.TK' // Site name as it should appear on the pinning bar
	};
	
	var lib = {
		dom: {
			meta: function(name, content) {
				var meta = document.createElement('meta');
				meta.setAttribute('name', name);
				meta.setAttribute('content', content);		
				return meta;
			},
			link: function(rel, href) {
				var link = document.createElement('link');
				link.setAttribute('rel', rel);
				link.setAttribute('href', href);
				return link;
			},
			div: function() {
				return document.createElement('div');
			}
		},
		net: {
			getJSONP: function( URL ) {
				var script = document.createElement('script');
				script.type = 'text/javascript';
				script.src = URL + ( URL.indexOf('?') != -1 ? '&' : '?' ) + Date.now();
				var head = document.getElementsByTagName('head')[0];
				head.insertBefore(script, head.firstChild);
			}
		}
	};
	
	jumplist.parseRSSFeed = function parseRSSFeed( news ) {
		try {
			if ( window.external.msIsSiteMode() ) {
				window.external.msSiteModeClearJumpList();
				window.external.msSiteModeCreateJumpList( options.categoryTitle );
				
				try {
					// RSS feeds
					if ( news.rss && news.rss.channel && news.rss.channel.item ) {
						for ( var items = news.rss.channel.item.slice(0, 10), numItems = items.length, i = numItems-1, task, pubDate, taskTitle = ''; i >= 0; i-- ) {
							task = items[i];
							pubDate = Date.parse( task.pubDate );
							taskTitle = task.title ? ( typeof task.title == 'string' ? task.title : task.title['#cdata-section'] || '' ) : '';
							window.external.msSiteModeAddJumpListItem( taskTitle, task.link, decodeURIComponent(options.defaultTaskIcon) );
						}
					} else if ( news.feed && news.feed.entry ) { // Atom feeds
						for ( var items = news.feed.entry.slice(0, 10), numItems = items.length, i = numItems-1, task, pubDate, taskTitle = '', link = {}; i >= 0; i-- ) {
							task = items[i];
							pubDate = Date.parse( task.published );
							taskTitle = task.title ? ( typeof task.title == 'string' ? task.title : (task.title['#cdata-section'] ? task.title['#cdata-section'] : task.title['#text'] || '')) : '';

							if ( task.link ) {
								if ( typeof task.link == 'string') {
									link['@href'] = task.link || '#';
								} else if ( Object.prototype.toString.call( task.link ) === '[object Array]') {
									link = task.link[0];
								} else {
									link = task.link;
								}
							}

							window.external.msSiteModeAddJumpListItem( taskTitle, link['@href'] || '#', decodeURIComponent(options.defaultTaskIcon) );
						
						}
					}

				} catch ( ex ) {			
				}

				window.external.msSiteModeShowJumpList();
			} else {
			}
		}
		catch ( ex ) {
		}
	}
	
	// Init code
	document.addEventListener('DOMContentLoaded', function() {
		
		try { 
			document.getElementsByTagName('body')[0].onfocus = function() {
				window.external.msSiteModeClearIconOverlay();
			};
		} catch(err) {
		}
		
		var head = document.getElementsByTagName('head');
		
		if ( !head ) {
			return;
		}
		
		head = head[0];
		
		var links = document.getElementsByTagName('link'), remove = [];
		
		for ( var i = 0, rel; i < links.length; i++ ) {
			rel = links[i].getAttribute('rel');
			if ( !rel ) {
				continue;
			}
			rel = rel.toLowerCase().replace(/^\s+|\s+$/g, '').replace(/\s+/g, ' ');
			if ( rel == 'icon' || rel == 'shortcut icon' ) {
				remove.push( links[i] );
			}
		}
		
		for ( i = 0; i < remove.length; i++ ) {
			head.removeChild( remove[i] );
		}
		
		if ( options.shortcutIcon ) {
			head.appendChild( lib.dom.link('shortcut icon', decodeURIComponent(options.shortcutIcon)) );
		}
		
		head.appendChild( lib.dom.meta('application-name', options.applicationName) );
		head.appendChild( lib.dom.meta('msapplication-tooltip', options.tooltip) );
		
		if ( options.navButtonColor ) {
			head.appendChild( lib.dom.meta('msapplication-navbutton-color', options.navButtonColor) );
		}
		
		if ( options.startURL ) {
			head.appendChild( lib.dom.meta('msapplication-starturl', decodeURIComponent(options.startURL)) );
		}
	
		for ( var i = 0, task; i < options.staticTasks.length; i++ ) {
			task = options.staticTasks[i];
			head.appendChild( lib.dom.meta('msapplication-task', 'name=' + task.name + ';action-uri=' + decodeURIComponent(task.action) + ';icon-uri=' + decodeURIComponent(task.icon) + ';window-type=' + task.target ) );
		}
		if ( options.prompt && !window.external.msIsSiteMode() && sessionStorage.getItem('hideIE9SitePinningBar') != '1' ) {
			var bar = lib.dom.div();
			var barHTML = '<div style="border: 1px solid #E1E1E1; padding: 5px 9px 2px 9px; background: #fff url(http://www.buildmypinnedsite.com/PinImages/Bar/bar-background.png) repeat-x scroll 0 100%;"><table cellspacing="0" cellpadding="0" style="width: 100%; border: 0 none; border-collapse: collapse;"><tbody><tr><td><div style="background: transparent url(' + decodeURIComponent(options.shortcutIcon.replace(/\.ico$/, ".png")) + ') no-repeat scroll 0 3px; background-size: 20px 20px; width: 260px; padding-left: 26px; min-height: 30px; font-weight: bold; font-size:14px;">Experience ' + (options.barSiteName || options.siteName) + '  as a Pinned Site</div></td><td><div style="display: inline-block;padding-right: 40px; position: relative;text-align: right;"><strong style="font-weight: bold; font-size: 18px;">Drag this icon to your taskbar <img src="http://www.buildmypinnedsite.com/PinImages/Bar/arrow-icon.png" /></strong><div style="color:#797c85; font-size: 12px;">or, <a href="#" onclick="window.external.msAddSiteMode(); return false" style="color: #6CABBA; text-decoration: underline;">click here</a> to add this site to your start menu </div><div style="position: absolute; right:-120px; top: -13px; width: 164px; height: 143px; background: transparent url(http://www.buildmypinnedsite.com/PinImages/Bar/drag-icon-placeholder.png) no-repeat scroll 0 0;"><img class="msPinSite" style="position: absolute; top:17px; left:16px;cursor: move; width: 32px; height: 32px;" src="' + decodeURIComponent(options.shortcutIcon.replace(/\.ico$/, ".png")) + '" /></div></div></td><td><div style="position: relative; float: right; width: 80px; min-height: 30px; padding-left: 23px; padding-right: 30px; background: transparent url(http://www.buildmypinnedsite.com/PinImages/Bar/info-icon.png) no-repeat scroll 0 6px;"><a style="font-size: 12px; color: #6CABBA; text-decoration: underline;" href="http://www.beautyoftheweb.com/#/productguide/clean/seamless-with-windows-7" target="_blank">Learn about Site Pinning</a><div onclick="document.getElementById(\'___ie9sitepinning__bar_container\').style.display=\'none\';window.sessionStorage.setItem(\'hideIE9SitePinningBar\', \'1\')" style="background: transparent url(http://www.buildmypinnedsite.com/PinImages/Bar/close-button.png) no-repeat scroll 0 0;position: absolute;top: 0; right: 0;display: block; width: 18px; height: 18px; cursor: pointer; float: right;"></div></div></td></tbody></table></div>';
			bar.setAttribute('style', "position: absolute; top: 0; left: 20px; width: 95%; margin:0; padding:0; border: 0 none; border-bottom:1px solid #707070; color: #1c1f26; background: transparent none no-repeat scroll 0 0; font-family: 'Segoe UI', Arial, tahoma, sans-serif; line-height: 18px; box-shadow: 0 1px 5px rgba(140,140,140,0.7);");
			bar.id = '___ie9sitepinning__bar_container';
			bar.innerHTML = barHTML;
			document.getElementsByTagName('body')[0].appendChild( bar );
		}
		
		jumplist.poll = function() {
			lib.net.getJSONP( decodeURIComponent(options.rssFeedURL), jumplist.parseRSSFeed );
		};
		
		window.setTimeout( jumplist.poll, 30 );
	});
})( ____prototype_ae_IE9JumpList );