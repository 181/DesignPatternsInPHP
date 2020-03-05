<?php
namespace DesignPatterns\Behavioral\Memento;

use DesignPatterns\Behavioral\Memento\Editor;

$editor = new Editor();
$editor->type('This is the first sentence');
$editor->type('This is second');
// Save the state to restore to
$saved = $editor->save();

// type more
$editor->type('And this is third');

// output: content before saving
echo $editor->getContent();

// restoring to last saved state
$editor->restore($saved);

$editor->getContent(); // This is te first sentence. This is second.