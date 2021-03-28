<?php 
class Cms6060d9cf9f82e798229673_d42ef0b2f15280efe482d881c08ed3f4Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if (isset($this->post))
    $this->page->title = $this->post->title;
    $this->page->description = str_limit($this->post->summary, 60, "...");
}
}
