<?php $video = App\Video::findOrFail(1);?>

<div class="widget">
	<div class="title"><h4>ভিডিও</h4></div>
	<iframe width="250" height="180" src="{{ $video->link }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	<p>{{ $video->info }}</p>
</div>
