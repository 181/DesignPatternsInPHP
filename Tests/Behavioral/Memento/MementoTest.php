<?php
namespace DesignPatterns\Tests\Behavioral\Memento;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\Memento\Editor;

class MementoTest extends TestCase
{
    protected $editor;
    protected $memento;

    public function setUp() {
        $this->editor = new Editor();
        $this->editor->type('first sentence');
        $this->editor->type('second sentence');

        $this->memento = $this->editor->save();
    }
    
    /** @test*/
    public function content_can_be_saved_to_editor_memento() {
         $this->assertEquals($this->memento->getContent(), $this->editor->getContent());
    }

    /** @test*/
    public function content_can_be_restored_from_memento() {
        $expected = $this->editor->getContent();
        $this->editor->type('third sentence');

        $this->assertNotEquals($expected, $this->editor->getContent());

        $this->editor->restore($this->memento);
        $this->assertEquals($expected, $this->editor->getContent());
    }
}