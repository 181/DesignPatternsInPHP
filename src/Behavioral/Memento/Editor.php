<?php
namespace DesignPatterns\Behavioral\Memento;

use DesignPatterns\Behavioral\Memento\EditorMemento;

class Editor
{
    protected $content = '';
    
    public function type(string $words) {
        $this->content = $this->content . ' ' . $words; 
    }

    public function getContent() {
        return $this->content; 
    }

    public function save() {
        return new EditorMemento($this->content); 
    }

    public function restore(EditorMemento $editorMemento) {
        $this->content = $editorMemento->getContent(); 
    }
}