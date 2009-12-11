<?php 
$showslow_root = '/path/to/showslow/root/';
$showslow_base = 'http://www.example.com/showslow/'; # don't forget the trailing slash

# Database connection information
$db = 'showslow';
$user = 'showslow';
$pass = '... database-password ...';
$host = 'localhost';

# change it if you want to allow other profiles including your custom profiles
$YSlow2AllowedProfiles = array('ydefault', 'yslow1');

# URL of timeplot installation
$TimePlotBase = 'http://api.simile-widgets.org/timeplot/1.1/';
#$TimePlotBase = '/timeplot/';

# to see if your users are visiting the tool, enable Google Analytics
# (for publicly hosted instances)
#$googleAnalyticsProfile = '';

# show Feedback button
$showFeedbackButton = true;

# how old should data be for deletion (in days)
# anything >0 will delete old data
# don't forget to add a cron job to run deleteolddata.php
$oldDataInterval = 0;

# Put description for ShowSlow instance into this variable - it'll be displayed on home page under the header.
$ShowSlowIntro = '<p>Show Slow is an open source tool that helps monitor various website performance metrics over time. It captures the results of <a href="http://developer.yahoo.com/yslow/">YSlow</a> and <a href="http://code.google.com/speed/page-speed/">Page Speed</a> rankings and graphs them, to help you understand how various changes to your site affect its performance.</p>

<p><a href="http://www.showslow.com/">www.ShowSlow.com</a> is a demonstration site that continuously measures the performance of a few reference web pages. It also allows for public metrics reporting.</p>

<p>If you want to make your measurements publicly available on this page, see the instructions in <a href="configure.php">Configuring YSlow / Page Speed</a>. If you want to keep your measurements private, <b><a href="http://code.google.com/p/showslow/source/checkout">download Show Slow</a></b> from the SVN repository and install it on your own server.</p>

<p>You can ask questions and discuss ShowSlow in our group <a href="http://groups.google.com/group/showslow">http://groups.google.com/group/showslow</a> or just leave feedback at <a href="http://showslow.uservoice.com">http://showslow.uservoice.com</a></p>
';
