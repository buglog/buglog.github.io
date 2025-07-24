	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href= "../../css/reset.css">
	<!-- just replace with "css/debug.css" to see squares. -->
	<link rel="stylesheet" href= "../../css/~debug.css">
	<!-- styling the grid with responsive page design. -->
	<link rel="stylesheet" href= "../../css/article.css">
	<link rel="stylesheet" href= "../../css/article-image.css">

	<style>
		html { font-size: 100%; }
		body { background-color: #fff2eb; }
		/* Larger font size for mobile devices */
		@media only screen and (max-width:767px) { html { font-size:200%; } body {background-color:#fff992;} }

		bg * { color: #fff2eb; }
		h2,p:not(:last-child) { margin-bottom: 0.8rem; }
		article {margin-top: 0.5rem;}

		/*article h1, article h2, article h3, article h4, article h5, article h6 { grid-column: auto; display: inline; }*/

		h1   { font: bold 0.9rem "Helvetica"; } 	/*DOLL•MATH*/
		h2   { font: bold 0.9rem "Helvetica"; margin-bottom: 0.0rem; } /* black, bold */
		h3   { font: 300  0.9rem /*0.63rem */ "Helvetica"; margin-bottom:0rem; line-height:1.1; color:#FF00FD } /* LINKS */
		h4   { font: 400  1.1rem "Helvetica"; background-color:dimgrey; color: springgreen; margin-bottom: 0.1rem; } /* green on black box- for little "examples" */
		h5   { font: 400  1.0rem "Helvetica"; background-color:blue; color:white; } /* White on blue-- the directory, links, whatever... */
		h6   { font: 400  1.5rem "Helvetica"; background-color:black; color:yellow; } /* Yellow on yellow- see how this pans out lol */ 
		
		time { font: 400  1.4rem  "Helvetica"; color:blue; margin-bottom:0.5rem;}
		p    { font: 300  0.63rem  "Helvetica"; margin-bottom:0rem; line-height:1.1;}
		time { font: bold  0.8rem "Helvetica"; margin-bottom: 1.0rem; color:#0006FF; }
		img  { margin-bottom: 0.0rem; margin-top:0.0rem;}
		a:hover {color:black; background-color:#EAFF1D;}
		/*a:visited { background-color:#777; }*/
		
		#p1 { font: 400 0.6rem "Helvetica"; line-height:1.1;}
   		#p2 { font: 400 1.0rem "Helvetica"; color:blue;}
    	.blueText { color: #FF00FD; background-color: black; }
    	div.ex1 { height:500px; overflow:scroll; }   
</style>

	<!-- Making Columns -->
<style>
	*{ box-sizing: border-box; }
	/* three equal columns */
	.column { float: left; width: 33.33%; padding: 0px; }
	/* two equal columns */
	.column2 { float: left; width: 50%; padding: 0px; }
	/* Clear floats after the columns */
	.row:after { content: ""; display: table; clear: both; }
</style>

<style>
	.folder-links, .dot-separator { font: 300  0.9rem  "Helvetica"; margin-bottom:0rem; line-height:1.1; color:#FF00FD }

	.folder-link { text-decoration: none; }

	.folder-link.clicked { color: #b1b1b1ff; }

	.folder-link.filtered.clicked { background-color: #b1b1b1ff; color: white; }
	/* filtered items */
	.filtered { background-color: rgba(255, 0, 125, 1); color: white; }

	button.filter-btn {
		font-size: 0.8rem;
    	border: 0;
		background-color: transparent;
    	cursor: pointer;
	}

	.filter-btn:hover { background-color: #e0e0e0; }

	.filter-btn.active { background-color: #333; color: white }
</style>

