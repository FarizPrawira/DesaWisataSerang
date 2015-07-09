Unik
<a href="{{URL::to('/')}}">Home</a>

@foreach ($results["content"] as $content)
	<table>
		<tr>
			<?php 
			$tanggal = strtotime($content->created_at);
			$tanggal = date('d F Y G:i', $tanggal);
			echo "<br>".$tanggal;
			?>	
		</tr>
		<tr>
			<td>Title</td>
			<td>:</td>
			<td>{{$content->title}}</td>
		</tr>
		<tr>
			<td>Isi</td>
			<td>:</td>
			<td>{{nl2br($content->description)}}</td>
		</tr>
		<tr>
			<td>Tipe</td>
			<td>:</td>
			<td>{{$content->type}}</td>
		</tr>
		@foreach ($results["photo"] as $photo)
		<?php if($photo->content_id == $content->id){
			echo "<img class='media-object' src=".URL::to($photo->path)." alt='img'>";
		} ?>
		@endforeach	
	</table>
	@endforeach

<?php echo $results["content"]->links(); ?>