# PHPRemoteMailer
A script to pass json to a remote mailer system (another script). 

This is usefull if you have a number of devices/servers that are hidden away and they need to email updates from time to time. 

The index file shows what the sending device does, basically builds an array then turns this to json before passing it to the remote mailer script. The mailer script parses this and sends the email. 
