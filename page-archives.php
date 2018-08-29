<?php    
   /**  
    * Archives    
    * @package custom   
    */    
$this->need('header.php');?>   
<main id="main">

            <article class="post">
      
        			<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);   
            $year=0; $mon=0; $i=0; $j=0;   
            $output = '<div id="archives">';   
            while($archives->next()):   
            $year_tmp = date('Y',$archives->created);   
             $mon_tmp = date('m',$archives->created);   
             //var_dump($year_tmp);   
             $y=$year; $m=$mon;   
             if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';   
             if ($year != $year_tmp && $year > 0) $output .= '</ul>';   
             if ($year != $year_tmp) {   
                 $year = $year_tmp;   
                 $output .= '<div class="archivesRear">'. $year .'</div><ul class="al_mon_list">'; //输出年份   
             }   
             $output .= '<li>'.date('m/d',$archives->created).'<a href="'.$archives->permalink .'">'. $archives->title .'</a></li>'; //输出文章日期和标题   
        endwhile;   
        $output .= '</ul></li></ul></div>';   
        echo $output;   
        ?>
     
    		</article>

    </main>
<?php $this->need('footer.php'); ?>