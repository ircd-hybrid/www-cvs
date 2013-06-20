<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php

list($fname) = @glob('snapshot/ircd-hybrid-TRUNK-*ChangeLog');
$delta = -1;

if ($fname)
    if (($fd = @fopen($fname, 'r')))
    {
	list($date, $time) = explode(' ', fgets($fd, 128));
	$delta = (time() - (strtotime("$date $time")+4*3600));
	fclose($fd);

	$units = array(86400 => 'day', 3600 => 'hour', 60 => 'minute',
	    1 => 'second');
	foreach ($units as $div => $unit)
	    if ($delta >= $div)
	    {
		$delta /= $div;
		settype($delta, 'integer');
		$delta = ($delta == 1 ? "$delta $unit" : "$delta {$unit}s");
		break;
	    }
    }

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head xml:lang="en">
    <meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
    <meta http-equiv="Content-Language" content="en_US" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="Expires" content="0" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta name="Author" content="$Id: index.php,v 1.61 2013/06/20 12:40:27 michael Exp $" />
    <meta name="Copyright" content="Copyright 2005-2013, IRCD-Hybrid Team" />
    <meta name="Description" content="IRCD-Hybrid, a high performance irc daemon" />
    <meta name="Googlebot" content="index, follow, archive" />
    <meta name="keywords" content="IRC Software, IRC Server, ircd, hybrid, tcm" />
    <meta name="MSSmartTagsPreventParsing" content="true" />
    <meta name="Robots" content="index, follow, archive, noimageindex" />
    <meta name="Revisit-After" content="15 days" />

    <title xml:lang="en">: IRCD-Hybrid -- High Performance Internet Relay Chat :</title>
    
    <style type="text/css" media="screen" xml:lang="en">
    /*<![CDATA[*/
    @import url(stylesheets/ircd-hybrid.css);
    /*]]>*/
    </style>
</head>

<body xml:lang="en">

<div class="container" xml:lang="en">
    <div class="titleblock" xml:lang="en">
        <h1 xml:lang="en">IRCD-Hybrid</h1>
        <p xml:lang="en">&ldquo;A lightweight, high-performance internet relay chat daemon.&rdquo;</p>
    </div>
    
    <div>
        <ul class="navbar" xml:lang="en">
            <li xml:lang="en"><a href="index.php" class="nav">Home</a></li>
            <li xml:lang="en"><a href="downloads.html" class="nav">Downloads</a></li>
            <li xml:lang="en"><a href="support.html" class="nav">Support</a></li>
            <li xml:lang="en"><a href="team.html" class="nav">Team</a></li>
        </ul>
    </div>
   
    <div class="content" xml:lang="en">
        <p xml:lang="en">Welcome to the official site of the IRCD-Hybrid Project! Here you'll be able to find everything you'll need to get started in hosting your own IRC server as well as support.</p>
        <p xml:lang="en">We hope that you enjoy IRCD-Hybrid and continue to use it for many years to come.</p>
        <p xml:lang="en">In case you're also looking for an IRC services package, we strongly recommend the Anope IRC Services.</p>
        <p xml:lang="en"><br />
	    &raquo; <a href="downloads.html">Latest STABLE release of ircd-hybrid:&nbsp; 8.1.2</a><br />
<!--            &raquo; <a href="downloads.html">Latest BETA release of ircd-hybrid:&nbsp; 8.1.0rc1</a><br /> -->
	    &raquo; <a href="<?php echo $fname; ?>">Latest commit to TRUNK &mdash; <?php if ($delta >= 0) echo "$delta ago"; else echo "unknown"; ?></a><br />
	</p>
    </div>
   
    <div class="footer" xml:lang="en">
        <div class="right" xml:lang="en">
            <p xml:lang="en">Copyright &copy; 1997-2013 IRCD-Hybrid Development Team</p>
            <p xml:lang="en"><a href="http://validator.w3.org/check?uri=referer">Valid XHTML 1.1 Strict</a></p>
        </div>
       
        <p xml:lang="en">Questions and/or Comments: <a href="mailto:&#098;&#117;&#103;&#115;&#064;&#105;&#114;&#099;&#100;&#045;&#104;&#121;&#098;&#114;&#105;&#100;&#046;&#111;&#114;&#103;" xml:lang="en">&#098;&#117;&#103;&#115;&#064;&#105;&#114;&#099;&#100;&#045;&#104;&#121;&#098;&#114;&#105;&#100;&#046;&#111;&#114;&#103;</a></p>
        <p xml:lang="en">$Id: index.php,v 1.61 2013/06/20 12:40:27 michael Exp $</p>
   </div>
</div>

</body>
</html>
