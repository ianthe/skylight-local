
    <?php

        // Set up some variables to easily refer to particular fields you've configured
        // in $config['skylight_searchresult_display']

        $title_field = $this->skylight_utilities->getField('Title');
        $author_field = $this->skylight_utilities->getField('Author');
        $date_field = $this->skylight_utilities->getField('Date Made');
        $type_field = $this->skylight_utilities->getField('Type');
        $bitstream_field = $this->skylight_utilities->getField('Bitstream');
        $thumbnail_field = $this->skylight_utilities->getField('Thumbnail');
        $abstract_field = $this->skylight_utilities->getField('Abstract');


        $base_parameters = preg_replace("/[?&]sort_by=[_a-zA-Z+%20. ]+/","",$base_parameters);
        if($base_parameters == "") {
            $sort = '?sort_by=';
        }
        else {
            $sort = '&sort_by=';
        }
    ?>
    <div class="listing-filter">
        <span class="no-results">
        <strong><?php echo $startrow ?>-<?php echo $endrow ?></strong> of
            <strong><?php echo $rows ?></strong> results
        </span>

        <span class="sort">
            <strong>Sort by</strong>
            <?php foreach($sort_options as $label => $field) {
                if($label == 'Relevancy')
                {
                    ?>
                    <em><a href="<?php echo $base_search.$base_parameters.$sort.$field.'+desc'?>"><?php echo $label ?></a></em>
                    <?php
                }
                else {
            ?>

                <em><?php echo $label ?></em>
                <?php if($label != "Date") { ?>
                <a href="<?php echo $base_search.$base_parameters.$sort.$field.'+asc' ?>">A-Z</a> |
                <a href="<?php echo $base_search.$base_parameters.$sort.$field.'+desc' ?>">Z-A</a>
            <?php } else { ?>
                <a href="<?php echo $base_search.$base_parameters.$sort.$field.'+desc' ?>">newest</a> |
                <a href="<?php echo $base_search.$base_parameters.$sort.$field.'+asc' ?>">oldest</a>
          <?php } } } ?>
            
        </span>

    </div>


    <ul class="listing">

       
    <?php foreach ($docs as $index => $doc) {
        ?>


        <?php
        $type = 'Unknown';

        if(isset($doc[$type_field])) {
                    $type = "media-" . strtolower(str_replace(' ','-',$doc[$type_field][0]));
                }

        ?>

    <li<?php if($index == 0) { echo ' class="first"'; } elseif($index == sizeof($docs) - 1) { echo ' class="last"'; } ?>>

        <div class = "iteminfo">
            <h3><a href="./record/<?php echo $doc['id']?>?highlight=<?php echo $query ?>"><?php echo $doc[$title_field][0]; ?></a></h3>
        <div class="tagdiv">


            <?php if(array_key_exists($author_field,$doc)) { ?>
                <?php

                $num_authors = 0;
                foreach ($doc[$author_field] as $author) {
                    // test author linking
                    // quick hack that only works if the filter key
                    // and recorddisplay key match and the delimiter is :

                    $orig_filter = urlencode($author);
                    $orig_filter = preg_replace('/ /','+',$orig_filter, -1);
                    $lower_orig_filter = strtolower($orig_filter);
                    echo '<a href="./search/*:*/Maker:%22'.$lower_orig_filter.'%7C%7C%7C'.$orig_filter.'%22">'.$author.'</a>';
                    $num_authors++;
                    if($num_authors < sizeof($doc[$author_field])) {
                        echo ' ';
                    }
                }

                ?>
            <?php } ?>


        <?php
        // TODO: Make highlighting configurable

        if(array_key_exists('highlights',$doc)) {
            ?> <p><?php
            foreach($doc['highlights'] as $highlight) {
                echo "...".$highlight."...".'<br/>';
            }
            ?></p><?php
        }
        else {
            if(array_key_exists($abstract_field, $doc)) {
                echo '<p>';
                $abstract =  $doc[$abstract_field][0];
                $abstract_words = explode(' ',$abstract);
                $shortened = '';
                $max = 40;
                $suffix = '...';
                if($max > sizeof($abstract_words)) {
                    $max = sizeof($abstract_words);
                    $suffix = '';
                }
                for ($i=0 ; $i<$max ; $i++){
                    $shortened .= $abstract_words[$i] . ' ';
                }
                echo $shortened.$suffix;
                echo '</p>';
            }
        }

        ?>


    </div> <!-- close tags div -->
    <div class = "thumbnail-image">
    <?php if(isset($doc[$bitstream_field])) {
        //SR clone text from bitstream helpers to get individual aspects of bitstream. Cannot call bitstream helpers from here.

        $i = 0;
        foreach ($doc[$bitstream_field] as $bitstream) {

            if(isset($doc[$thumbnail_field])) {
                $thumbnail = $doc[$thumbnail_field][0];
            }
            else {
                $thumbnail = $doc[$bitstream_field][0];
            }

            if($i == 0) {

                $segments = explode("##", $thumbnail);
                $filename = $segments[1];
                $handle = $segments[3];
                $seq = $segments[4];
                $handle_id = preg_replace('/^.*\//', '',$handle);
                $uri = './record/'.$handle_id.'/'.$seq.'/'.$filename;

                $thumbnailLink = '<a title = "' . $doc[$title_field][0] . '" class="fancybox" rel="group" href=' . $uri . '> ';
                $thumbnailLink .= '<img src = "'.$uri.'" class="search-thumbnail" title="'. $doc[$title_field][0] .'" /></a>';

                echo $thumbnailLink;
            }
            $i++;
        }
    }?>
</div>
        </div>
    </li>
        <?php }?>
    </ul>


    <div class="pagination">
        <span class="no-results">
            <strong><?php echo $startrow ?>-<?php echo $endrow ?></strong> of
            <strong><?php echo $rows ?></strong> results </span>
       <?php echo $pagelinks ?>
    </div>