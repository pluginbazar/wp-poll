<?php
/**
 * Template - Single Poll - Responses
 *
 * @package single-poll/responses
 * @author Pluginbazar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}  // if direct access

global $poll;

?>

<?php if ( ! $poll->ready_to_vote() ) : ?>
    <p class="wpp-responses display wpp-warning tt-hint tt--top" aria-label="<?php echo esc_attr__( 'Click to dismiss this notice !', 'wp-poll' ); ?>">
        <?php echo esc_html__( 'This poll has been finished and no longer available to vote !', 'wp-poll' ); ?></p>
<?php endif; ?>

<p class="wpp-responses"></p>
