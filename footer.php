<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package market
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'market' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'market' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'market' ), 'market', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
<!-- 
		<button id="scroll-top" class="scroll-top">
		<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg>
	<span class="screen-reader-text">Scroll To Top</span>
</button> -->

<!-- <button id="scroll-top" class="scroll-top">
<svg xmlns="http://www.w3.org/2000/svg" width="104" height="104" viewBox="0 0 104 104" fill="none">
  <path d="M47.6667 51.1334V65.0001C47.6667 66.2279 48.0827 67.2577 48.9147 68.0897C49.7467 68.9217 50.7751 69.3363 52 69.3334C53.2278 69.3334 54.2577 68.9174 55.0897 68.0854C55.9217 67.2534 56.3362 66.225 56.3334 65.0001V51.1334L60.2333 55.0334C61.0278 55.8279 62.0389 56.2251 63.2667 56.2251C64.4945 56.2251 65.5056 55.8279 66.3 55.0334C67.0945 54.239 67.4917 53.2279 67.4917 52.0001C67.4917 50.7723 67.0945 49.7612 66.3 48.9667L55.0333 37.7001C54.1667 36.8334 53.1556 36.4001 52 36.4001C50.8445 36.4001 49.8334 36.8334 48.9667 37.7001L37.7 48.9667C36.9056 49.7612 36.5084 50.7723 36.5084 52.0001C36.5084 53.2279 36.9056 54.239 37.7 55.0334C38.4945 55.8279 39.5056 56.2251 40.7333 56.2251C41.9611 56.2251 42.9722 55.8279 43.7667 55.0334L47.6667 51.1334ZM52 95.3334C46.0056 95.3334 40.3722 94.1952 35.1 91.9187C29.8278 89.6423 25.2417 86.5555 21.3417 82.6584C17.4417 78.7584 14.3549 74.1723 12.0814 68.9001C9.8078 63.6279 8.66958 57.9945 8.66669 52.0001C8.66669 46.0056 9.80491 40.3723 12.0814 35.1001C14.3578 29.8279 17.4446 25.2417 21.3417 21.3417C25.2417 17.4417 29.8278 14.355 35.1 12.0814C40.3722 9.80786 46.0056 8.66964 52 8.66675C57.9945 8.66675 63.6278 9.80497 68.9 12.0814C74.1722 14.3579 78.7584 17.4446 82.6583 21.3417C86.5583 25.2417 89.6466 29.8279 91.923 35.1001C94.1995 40.3723 95.3362 46.0056 95.3333 52.0001C95.3333 57.9945 94.1951 63.6279 91.9187 68.9001C89.6422 74.1723 86.5555 78.7584 82.6583 82.6584C78.7584 86.5584 74.1722 89.6466 68.9 91.9231C63.6278 94.1995 57.9945 95.3363 52 95.3334ZM52 86.6667C61.6778 86.6667 69.875 83.3084 76.5917 76.5917C83.3083 69.8751 86.6667 61.6779 86.6667 52.0001C86.6667 42.3223 83.3083 34.1251 76.5917 27.4084C69.875 20.6917 61.6778 17.3334 52 17.3334C42.3222 17.3334 34.125 20.6917 27.4084 27.4084C20.6917 34.1251 17.3334 42.3223 17.3334 52.0001C17.3334 61.6779 20.6917 69.8751 27.4084 76.5917C34.125 83.3084 42.3222 86.6667 52 86.6667Z" fill="black"/>
</svg>
	<span class="screen-reader-text">Scroll To Top</span>
</button> -->

<button id="scroll-top" class="scroll-top">
  <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 104 104" fill="none">
    <circle cx="52" cy="52" r="50"  fill="#FFCB00" />
    <path d="M47.6667 51.1334V65.0001C47.6667 66.2279 48.0827 67.2577 48.9147 68.0897C49.7467 68.9217 50.7751 69.3363 52 69.3334C53.2278 69.3334 54.2577 68.9174 55.0897 68.0854C55.9217 67.2534 56.3362 66.225 56.3334 65.0001V51.1334L60.2333 55.0334C61.0278 55.8279 62.0389 56.2251 63.2667 56.2251C64.4945 56.2251 65.5056 55.8279 66.3 55.0334C67.0945 54.239 67.4917 53.2279 67.4917 52.0001C67.4917 50.7723 67.0945 49.7612 66.3 48.9667L55.0333 37.7001C54.1667 36.8334 53.1556 36.4001 52 36.4001C50.8445 36.4001 49.8334 36.8334 48.9667 37.7001L37.7 48.9667C36.9056 49.7612 36.5084 50.7723 36.5084 52.0001C36.5084 53.2279 36.9056 54.239 37.7 55.0334C38.4945 55.8279 39.5056 56.2251 40.7333 56.2251C41.9611 56.2251 42.9722 55.8279 43.7667 55.0334L47.6667 51.1334ZM52 95.3334C46.0056 95.3334 40.3722 94.1952 35.1 91.9187C29.8278 89.6423 25.2417 86.5555 21.3417 82.6584C17.4417 78.7584 14.3549 74.1723 12.0814 68.9001C9.8078 63.6279 8.66958 57.9945 8.66669 52.0001C8.66669 46.0056 9.80491 40.3723 12.0814 35.1001C14.3578 29.8279 17.4446 25.2417 21.3417 21.3417C25.2417 17.4417 29.8278 14.355 35.1 12.0814C40.3722 9.80786 46.0056 8.66964 52 8.66675C57.9945 8.66675 63.6278 9.80497 68.9 12.0814C74.1722 14.3579 78.7584 17.4446 82.6583 21.3417C86.5583 25.2417 89.6466 29.8279 91.923 35.1001C94.1995 40.3723 95.3362 46.0056 95.3333 52.0001C95.3333 57.9945 94.1951 63.6279 91.9187 68.9001C89.6422 74.1723 86.5555 78.7584 82.6583 82.6584C78.7584 86.5584 74.1722 89.6466 68.9 91.9231C63.6278 94.1995 57.9945 95.3363 52 95.3334ZM52 86.6667C61.6778 86.6667 69.875 83.3084 76.5917 76.5917C83.3083 69.8751 86.6667 61.6779 86.6667 52.0001C86.6667 42.3223 83.3083 34.1251 76.5917 27.4084C69.875 20.6917 61.6778 17.3334 52 17.3334C42.3222 17.3334 34.125 20.6917 27.4084 27.4084C20.6917 34.1251 17.3334 42.3223 17.3334 52.0001C17.3334 61.6779 20.6917 69.8751 27.4084 76.5917C34.125 83.3084 42.3222 86.6667 52 86.6667Z" fill="black" />
  </svg>
  <span class="screen-reader-text">Scroll To Top</span>
</button>



	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
