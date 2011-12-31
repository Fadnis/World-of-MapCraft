<?php
	#
	# path where we'll extract the BLP files
	#

	$blps = "/var/www/doats.net/tiles/out";


	#
	# path where we'll convert BLPs to PNGs, along with URL to it
	#

	$pngs = "/var/www/doats.net/tiles/pngs";
	$pngs_url = "/tiles/pngs";


	#
	# path to the preview maps
	#

	$maps = "/var/www/doats.net/tiles/maps";


	#
	# path to the built tilesets
	#

	$built = "/var/www/doats.net/tiles/built";
	$built_url = "/tiles/built";


	#
	# other stuff
	#

	$bg_url = "/tiles/purple-stripes.png";

	$blp_convertor = "/root/Kanma-BLPConverter-3abb6b9/build/bin/BLPConverter";

	$s3_cmd = "python /root/s3cmd-1.0.1/s3cmd";
	$s3_bucket = "s3://iamcal-misc/wow-tiles";