<?php

$data = <<<EOD
<!DOCTYPE rss PUBLIC "-//Netscape Communications//DTD RSS 0.91//EN" 
"http://my.netscape.com/publish/formats/rss-0.91.dtd">
<rss version="0.91">
	<channel>
		<title>Feed with DOCTYPE</title>
	</channel>
</rss>
EOD;

$expected = 'Feed with DOCTYPE';

?>