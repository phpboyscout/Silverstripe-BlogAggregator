<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 22/03/14
 * Time: 22:00
 */

class BlogAggregator extends BlogTree
{
    private static $icon = "blog/images/blogtree-file.png";

    private static $description = "Aggregation of oll Blogs on the Site";

    private static $singular_name = 'Blog Aggregation Page';

    private static $plural_name = 'Blog Aggregation Pages';

    private static $hide_ancestor = 'BlogTree';

    public function loadDescendantBlogHolderIDListInto(&$idList) {
        $blogHolders = BlogHolder::get();
        if (count($blogHolders)) {
            foreach($blogHolders as $holder) {
                if(!in_array($holder->ID, $idList)) {
                    $idList[] = $holder->ID;
                }
            }
        }
    }
} 