<div class="flex-container">
    
<?php 
if (count($results) == 1) {
echo "<span class='results'><br><br><h4>There is " . count($results) . " search result for: " . $userentry . "</h4></span>";
} elseif (count($results) > 0) {
echo "<span class='results'><br><br><h4>There are " . count($results) . " search results for: " . $userentry . "</h4></span>";
} else { echo "<center><span class='results'><h4><br>Sorry, there are no results matching your search.<br><h4></span></center>"; }
?>
<br>
    
<section class="main-section">    
    
    <div class="table-container-about" role="table" aria-label="">
        <div class="flex-table-about row" role="rowgroup"> 
       
  <?php foreach ($results as $blogpost) : ?>
     <!--  <div class="col-sm-4">-->   
     <div class="flex-row-about">
            <div class="card text-center">
                <a href='?controller=blog&action=read&blog_id=<?php echo $blogpost['blog_id']; ?>' class="whole-card-link">
                <img class="card-img-top" src="<?php echo $blogpost['main_image'] ?>" height="250" width="50%" >
                <div class="card-body">
                    <h3 class="card-title"><?php echo $blogpost['title'] ?></h3>
                    <p class="card-text"><?php $blogexcerpt = substr($blogpost['body'], 0, 90);
                    echo $blogexcerpt . "..." ?><br>
                    <a href='?controller=blog&action=read&blog_id=<?php echo $blogpost['blog_id']; ?>'>Read More</a></p> 
                </div>
                <div class="card-footer">
                    <p class="text-muted"><?php
                        $d = strtotime($blogpost['date_posted']);
                        echo "Posted on " . date("jS F Y", $d) . "<br>";
                        ?></p>
                </div></a>
                
            </div>
            <br>
            </div>
            <?php endforeach; ?>
           
        </div>
    </div>
  
</section>
</div>