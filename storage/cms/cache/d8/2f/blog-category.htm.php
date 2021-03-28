<?php 
class Cms6060d9c527c4b666333650_6fa638d9fd4071624337c5bab1840aedClass extends Cms\Classes\PageCode
{
public function onEnd()
{
// Optional - set the page title to the category name
if ($this->category)
$this->page->title = $this->category->name;
}
}
