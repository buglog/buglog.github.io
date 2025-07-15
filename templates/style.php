	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href= "https://fonts.googleapis.com/css?family=Crimson+Text:600">
	<link rel="stylesheet" href= "../../css/reset.css">
	<!-- just replace with "css/debug.css" to see squares. -->
	<link rel="stylesheet" href= "../../css/~debug.css">
	<!-- styling the grid with responsive page design. -->
	<link rel="stylesheet" href= "../../css/article.css">
	<link rel="stylesheet" href= "../../css/article-image.css">

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
		h3   { font: 300  0.9rem /*0.63rem */ "Helvetica"; margin-bottom:0rem; line-height:1.1; color:#FF00FD } /* LINKS */
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
		a:visited { background-color:#777; }
		
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
	.folder-links, .folder-link, .dot-separator { font: 300  0.8rem  "Helvetica"; margin-bottom:0rem; line-height:1.1; color:#FF00FD }

	.link-video { color: #000000ff }

.link-writing {
    color: #f15cffff;
}

.link-image {
    color: #74fa8bff;
}

.link-sculpture {
    color: #eb6e74ff;
}

.link-default {
    color: #7e7e7eff;
}

	/*.folder-link { font: 300  0.9rem  "Helvetica"; margin-bottom:0rem; line-height:1.1; color:#FF00FD }

	.dot-separator{ font: 300  0.9rem  "Helvetica"; margin-bottom:0rem; line-height:1.1; color:#FF00FD }*/
</style>

<style>
.folder-link {
    text-decoration: none;
    color: #333;
    padding: 0.3em 0.5em;
    border-radius: 0.3em;
    transition: background-color 0.3s ease;
}

/* Highlight colors per type */
.highlight-video {
    background-color: #ffb3b3; /* soft red */
}

.highlight-writing {
    background-color: #add8e6; /* light blue */
}

.highlight-image {
    background-color: #c3f3c3; /* light green */
}

.highlight-sculpture {
    background-color: #fce5b4; /* light orange/beige */
}

.filters {
    margin-bottom: 1em;
}

.filter-btn {
    margin-right: 0.5em;
    padding: 0.4em 0.8em;
    border: 1px solid #ccc;
    background-color: #f8f8f8;
    cursor: pointer;
    border-radius: 5px;
}

.filter-btn:hover {
    background-color: #e0e0e0;
}

.dot-separator {
    margin: 0 0.5em;
    color: #aaa;
}

</style>

