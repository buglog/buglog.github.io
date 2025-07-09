	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href= "https://fonts.googleapis.com/css?family=Crimson+Text:600">
	<link rel="stylesheet" href= "css/reset.css">
	<!-- just replace with "css/debug.css" to see squares. -->
	<link rel="stylesheet" href= "css/~debug.css">
	<!-- styling the grid with responsive page design. -->
	<link rel="stylesheet" href= "css/article.css">
	<link rel="stylesheet" href= "css/article-image.css">

	<!-- Choosing the colors, fonts and sizes of the html elements we're gonna use. -->
	<style>

		html { font-size: 100%; }
		body { background-color: #fff2eb; /* Replace with your desired color */ }
		/* Larger font size for mobile devices */
		/* FIX! vv */
		@media only screen and (max-width:767px) { html { font-size:200%; } body {background-color:blue;} }

		bg * { color: #fff2eb; }
		h2,p:not(:last-child) { margin-bottom: 0.8rem; }
		article {margin-top: 0.5rem;}
		h1   { font: bold 0.9rem "Helvetica"; } 	/*DOLL•MATH*/
		h2   { font: bold 0.9rem "Helvetica"; margin-bottom: 0.0rem; } /* black, bold */
		h3   { font: 300  0.63rem  "Helvetica"; margin-bottom:0rem; line-height:1.1; color:#FF00FD } /* LINKS */
		h4   { font: 400  1.1rem "Helvetica"; background-color:dimgrey; color: springgreen; margin-bottom: 0.1rem; } /* green on black box- for little "examples" */
		h5   { font: 400  1.0rem "Helvetica"; background-color:blue; color:white; } /* White on blue-- the directory, links, whatever... */
		h6   { font: 400  1.5rem "Helvetica"; background-color:black; color:yellow; } /* Yellow on yellow- see how this pans out lol */ 
		
		time { font: 400  1.4rem  "Helvetica"; color:blue; margin-bottom:0.5rem;}
		p    { font: 300  0.63rem  "Helvetica"; margin-bottom:0rem; line-height:1.1;}
		time { font: bold  0.8rem "Helvetica"; margin-bottom: 1.0rem; color:#0006FF; }
		/* { margin-bottom: 2.0rem; } */
		img  { margin-bottom: 0.0rem; margin-top:0.0rem;}
		/* when you hover over a link, it turns purple with green bg */
		/* a { box-shadow: inset 0 -0.28em black } */
		a:hover {color:black; background-color:#EAFF1D;}
		a:visited { color: purple; }
		
		#p1 { font: 400 0.6rem "Helvetica"; line-height:1.1;}
   		#p2 { font: 400 1.0rem "Helvetica"; color:blue;}
    .blueText
    {
      color: #FF00FD; background-color: black;
    }
    
    div.ex1 {
		height:500px;
		overflow:scroll;
	}   
</style>

	<!-- Making Columns -->
<style>
		*{
		box-sizing: border-box;
		}
	/* Create three equal columns that floats next to each other */
	.column {
  		float: left;
  		width: 33.33%;
  		padding: 0px;
  		/*height: 300px;  Should be removed. Only for demonstration */
		}
	.column2 {
  		float: left;
  		width: 50%;
  		padding: 0px;
  		/*height: 300px;  Should be removed. Only for demonstration */
		}
	/* Clear floats after the columns */
	.row:after {
	  	content: "";
	  	display: table;
	  	clear: both;
		}
</style>

<style>
	.folder-links {
  margin: 20px 0;
}

.folder-link {
  color: blue;
  text-decoration: none;
}

.dot-separator {
  margin: 0 5px;
  color: gray;
}
	</style>
