<?php

abstract class plugin{
    abstract public function set_title($title);
    abstract public function set_content($content);

    public function show()
    {
        echo '<div class="plugin">
            <h1>' . $this->title . '</h1>
            <p>' . $this->content . '</p>
            </div>';
    }
}

class last_comments extends plugin{
    public function set_title($title)
    {
        $this->title = $title;
    }
    public function set_content($content)
    {
        $this->content = $content;
    }
}

class social_media extends plugin{
    public function set_title($title)
    {
        $this->title = $title;
    }
    public function set_content($content)
    {
        $this->content = $content;
    }
}

class plugin_test extends plugin{
    public function set_title($title)
    {
        $this->title = $title;
    }
    public function set_content($content)
    {
        $this->content = $content;
    }
}


$last_comments = new last_comments;
$last_comments->set_title('The latest comments');
$last_comments->set_content('The latest comments will be shown here.');



$social_media = new social_media;
$social_media->set_title('The social media links');
$social_media->set_content('The social media links will be shown here.');

$plugin_test = new plugin_test;
$plugin_test->set_title('My Website');
$plugin_test->set_content('<a href="https://ferzendervarli.com" target="_blank">Ferzender Varli</a>');


echo $last_comments->show();
echo '<br>';
echo $social_media->show();
echo '<br>';
echo $plugin_test->show();