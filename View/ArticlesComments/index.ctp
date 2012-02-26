<div class="articlesComments index">
	<h2><?php echo __('Articles Comments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('article_id');?></th>
			<th><?php echo $this->Paginator->sort('comment_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($articlesComments as $articlesComment): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($articlesComment['Article']['title'], array('controller' => 'articles', 'action' => 'view', $articlesComment['Article']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($articlesComment['Comment']['id'], array('controller' => 'comments', 'action' => 'view', $articlesComment['Comment']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $articlesComment['ArticlesComment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $articlesComment['ArticlesComment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $articlesComment['ArticlesComment']['id']), null, __('Are you sure you want to delete # %s?', $articlesComment['ArticlesComment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Articles Comment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
