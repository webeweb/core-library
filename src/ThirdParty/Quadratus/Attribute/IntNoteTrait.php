<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Note trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoteTrait {

    /**
     * Note.
     *
     * @var int
     */
    private $note;

    /**
     * Get the note.
     *
     * @return int Returns the note.
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Set the note.
     *
     * @param int $note The note.
     */
    public function setNote($note) {
        $this->note = $note;
        return $this;
    }
}
