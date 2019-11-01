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
 * Num note trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumNoteTrait {

    /**
     * Num note.
     *
     * @var string
     */
    private $numNote;

    /**
     * Get the num note.
     *
     * @return string Returns the num note.
     */
    public function getNumNote() {
        return $this->numNote;
    }

    /**
     * Set the num note.
     *
     * @param string $numNote The num note.
     */
    public function setNumNote($numNote) {
        $this->numNote = $numNote;
        return $this;
    }
}
