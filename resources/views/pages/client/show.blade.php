@extends('pages.adminMasterPage')

@section('CONTENT')
 <table class="table">
            <thead>
                <th>ID</th>
                <th>Submission</th>
                <th>Description</th>
                <th>User</th>
                <th>Likes</th>
                <th>Dislikes</th>
                
            </thead>
            <tbody>
			<?php
			foreach($data as $row)
			{
			?>
			<tr>
			<td><?php echo $row->id;?></td>
			<td><?php echo $row->title;?></td>
			<td><?php echo $row->description;?></td>


				<td><img src=" asset( <?php $variable ?>) "/> </td>
			<td>
			<a href= "<?php echo 'LIKE'. $row->id?>"> LIKE</a>
			<a href= "<?php echo 'DISLIKE'. $row->id?>"> DISLIKE</a>
			</td>
			</tr>
			<?php
			}
			?>
			</tbody>
        </table>
@stop
