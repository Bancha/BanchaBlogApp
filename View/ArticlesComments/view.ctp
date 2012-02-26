<div class="articlesComments view">
<h2><?php  echo __('Articles Comment');?></h2>
	<dl>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articlesComment['Article']['title'], array('controller' => 'articles', 'action' => 'view', $articlesComment['Article']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articlesComment['Comment']['id'], array('controller' => 'comments', 'action' => 'view', $articlesComment['Comment']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Articles Comment'), array('action' => 'edit', $articlesComment['ArticlesComment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Articles Comment'), array('action' => 'delete', $articlesComment['ArticlesComment']['id']), null, __('Are you sure you want to delete # %s?', $articlesComment['ArticlesComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articles Comment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
