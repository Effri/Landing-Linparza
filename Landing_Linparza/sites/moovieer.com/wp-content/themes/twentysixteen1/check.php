<?php
if ( is_user_logged_in() ) {
	wp_redirect https://moovieer.com/landingpage/;
}
else {
	wp_redirect https://moovieer.com/auth/;
}
?>