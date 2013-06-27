<?php

namespace PhpGedcom\Record;

/**
 * Class NoteableTrait
 * @package PhpGedcom\Record
 */
trait NoteableTrait
{
    /**
     * Stores an array of Note References for this object.
     *
     * @var array
     * @of NoteRef
     */
    protected $note = array();

    /**
     * @param array $note
     * @return $this
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @param NoteRef $note
     * @return $this
     */
    public function addNote(NoteRef $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * @return array
     */
    public function getNote()
    {
        return $this->note;
    }
}