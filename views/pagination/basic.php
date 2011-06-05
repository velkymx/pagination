<p class="pagination">

	<?php if ($_first_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->url($_first_page)) ?>" rel="first"><?php echo __('First') ?></a>
	<?php else: ?>
		<?php echo __('First') ?>
	<?php endif ?>

	<?php if ($_previous_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->url($_previous_page)) ?>" rel="prev"><?php echo __('Previous') ?></a>
	<?php else: ?>
		<?php echo __('Previous') ?>
	<?php endif ?>

	<?php for ($i = 1; $i <= $_total_pages; $i++): ?>

		<?php if ($i == $_current_page): ?>
			<strong><?php echo $i ?></strong>
		<?php else: ?>
			<a href="<?php echo HTML::chars($page->url($i)) ?>"><?php echo $i ?></a>
		<?php endif ?>

	<?php endfor ?>

	<?php if ($_next_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->url($_next_page)) ?>" rel="next"><?php echo __('Next') ?></a>
	<?php else: ?>
		<?php echo __('Next') ?>
	<?php endif ?>

	<?php if ($_last_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->url($_last_page)) ?>" rel="last"><?php echo __('Last') ?></a>
	<?php else: ?>
		<?php echo __('Last') ?>
	<?php endif ?>

</p><!-- .pagination -->