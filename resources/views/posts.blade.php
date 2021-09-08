
<x-layout>
<?php
foreach($posts as $post){
  echo"<h2><a href='posts/{$post->id}'><p>{$post->title}</p></a></h2>";
  echo $post->body."<br>";
  echo "<a href='categories/{$post->category_id}'>"."<p>".$post->category->name.'</p>'."</a>";
  
}
?>
</x-layout>