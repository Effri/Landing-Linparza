<?php /* Template name: IMG */ ?>
<?php get_header(); ?>
<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true" tabindex="-1"]' ); ?>
<form id="featured_upload" method="post" action="#" enctype="multipart/form-data">
	<input type="file" name="my_image_upload" id="my_image_upload"  multiple="false" />
	<input type="hidden" name="post_id" id="post_id" value="55" />
	<?php wp_nonce_field( 'my_image_upload', 'my_image_upload_nonce' ); ?>
	<input id="submit_my_image_upload" name="submit_my_image_upload" type="submit" value="Upload" />
</form>
	<?php
// Проверим защиту nonce и что пользователь может редактировать этот пост.
if ( 
	isset( $_POST['my_image_upload_nonce'], $_POST['post_id'] ) 
	&& wp_verify_nonce( $_POST['my_image_upload_nonce'], 'my_image_upload' )
	&& current_user_can( 'edit_post', $_POST['post_id'] )
) {
	// все ок! Продолжаем.
	// Эти файлы должны быть подключены в лицевой части (фронт-энде).
	require_once( ABSPATH . 'wp-admin/includes/image.php' );
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	require_once( ABSPATH . 'wp-admin/includes/media.php' );

	// Позволим WordPress перехватить загрузку.
	// не забываем указать атрибут name поля input - 'my_image_upload'
	$attachment_id = media_handle_upload( 'my_image_upload', $_POST['post_id'] );

	if ( is_wp_error( $attachment_id ) ) {
		echo "Ошибка загрузки медиафайла.";
	} else {
		echo "Медиафайл был успешно загружен!";
	}

} else {
	echo "Проверка не пройдена. Невозможно загрузить файл.";
}
?>
<style>
    button, button[disabled]:hover, button[disabled]:focus, input[type="button"], input[type="button"][disabled]:hover, input[type="button"][disabled]:focus, input[type="reset"], input[type="reset"][disabled]:hover, input[type="reset"][disabled]:focus, input[type="submit"], input[type="submit"][disabled]:hover, input[type="submit"][disabled]:focus {
    background: #1a1a1a;
    border: 0;
    border-radius: 2px;
    color: #fff;
    font-weight: 700;
    letter-spacing: 0.046875em;
    line-height: 1;
    padding: 0.84375em 0.875em 0.78125em;
    text-transform: uppercase;
}
</style>
<?php get_footer(); ?>