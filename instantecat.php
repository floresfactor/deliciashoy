 							

<?php

require_once ("head.php");
$resInst = $crud->allDescDate("news");

?>

    <div class="block">
		<h2 class="list-title">Al Instante</h2>
				<ul class="article-list">
					<li><a href="post.html"><?php echo $resInst['0']['titulo'];  ?></a><span class="meta-date"><?php $crud->getHour($resInst['0']['date']); ?></span></li>
					<li><a href="post.html"><?php echo $resInst['1']['titulo'];  ?></a><span class="meta-date"><?php $crud->getHour($resInst['1']['date']); ?></span></li>
					<li><a href="post.html"><?php echo $resInst['2']['titulo'];  ?></a><span class="meta-date"><?php $crud->getHour($resInst['2']['date']); ?></span></li>
					<li><a href="post.html"><?php echo $resInst['3']['titulo'];  ?></a><span class="meta-date"><?php $crud->getHour($resInst['3']['date']); ?></span></li>
					<li><a href="post.html"><?php echo $resInst['4']['titulo'];  ?></a><span class="meta-date"><?php $crud->getHour($resInst['4']['date']); ?></span></li>
					<li><a href="post.html"><?php echo $resInst['5']['titulo'];  ?></a><span class="meta-date"><?php $crud->getHour($resInst['5']['date']); ?></span></li>
					<li><a href="post.html"><?php echo $resInst['6']['titulo'];  ?></a><span class="meta-date"><?php $crud->getHour($resInst['5']['date']); ?></span></li>
					<li><a href="post.html"><?php echo $resInst['7']['titulo'];  ?></a><span class="meta-date"><?php $crud->getHour($resInst['5']['date']); ?></span></li>
					<li><a href="post.html"><?php echo $resInst['8']['titulo'];  ?></a><span class="meta-date"><?php $crud->getHour($resInst['4']['date']); ?></span></li>
					<li><a href="post.html"><?php echo $resInst['9']['titulo'];  ?></a><span class="meta-date"><?php $crud->getHour($resInst['5']['date']); ?></span></li>
					<li><a href="post.html"><?php echo $resInst['10']['titulo'];  ?></a><span class="meta-date"><?php $crud->getHour($resInst['5']['date']); ?></span></li>
					<li><a href="post.html"><?php echo $resInst['11']['titulo'];  ?></a><span class="meta-date"><?php $crud->getHour($resInst['5']['date']); ?></span></li>
					
					<!--<a href="blog.html" class="more">Read More</a>-->

										</ul>
									</div>