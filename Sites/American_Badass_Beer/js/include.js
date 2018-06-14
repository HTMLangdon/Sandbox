
	var functionVar = "bingdingbangbongpingpongwingwong!";

	function include (filename)
	{
		if(!filename)
		{
			console.log("");
			console.log("-=");
			console.log("******ERROR: filename for include function not specified. exiting script.");
			console.log("=-");

			return;
		}
		
		var d = this.window.document;
		var isXML = d.documentElement.nodeName !== 'HTML' || !d.write; // Latter is for silly comprehensiveness

		//set - by following conditional
		var js = null;

		if(d.createElementNS && isXML)
		{
			js = d.createElementNS('http://www.w3.org/1999/xhtml', 'script');
		}
		else
		{
			js = d.createElement('script');
		}

		js.setAttribute('type', 'text/javascript');
		js.setAttribute('src', filename);
		js.setAttribute('defer', 'defer');

		if(d.getElementsByTagNameNS && isXML) 
		{
			if(d.getElementsByTagNameNS('http://www.w3.org/1999/xhtml', 'head')[0])
			{
				d.getElementsByTagNameNS('http://www.w3.org/1999/xhtml', 'head')[0].appendChild(js) 
			}
			else
			{
				d.documentElement.insertBefore(js, d.documentElement.firstChild) // in case of XUL
			}
		}
		else
		{
			d.getElementsByTagName('head')[0].appendChild(js);
		}

		// save include state for reference by include_once
		var cur_file = {};
		cur_file[this.window.location.href] = 1;
		// BEGIN REDUNDANT
		this.php_js = this.php_js || {};
		// END REDUNDANT

		if (!this.php_js.includes)
		{
			this.php_js.includes = cur_file;
		}
		if (!this.php_js.includes[filename])
		{
			this.php_js.includes[filename] = 1;
		}
		else
		{
			this.php_js.includes[filename]++;
		}

		return this.php_js.includes[filename];
	}

