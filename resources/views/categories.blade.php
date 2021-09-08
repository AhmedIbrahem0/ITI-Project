
<x-layout>
<table class="table table-dark table-striped" >
<th>Title</th>
<th>Slug</th>
<th>Category</th>
<th>Body</th>

<?php
//      echo"<pre>";

// var_dump($category->posts);
// echo"</pre>";



foreach($category->posts as $item){
    
    echo"<tr>";
    
        echo"<td>";
        
        echo $item->title;
        echo"</td>";
        
        echo"<td>";
        
        echo $item->slug;
        echo"</td>";
        echo"<td>";
        
        echo $item->category->name;
        echo"</td>";
        echo"<td>";
        
        echo $item->body;
        echo"</td>";
    echo"<tr>";

}


?>
</table>

</x-layout>
