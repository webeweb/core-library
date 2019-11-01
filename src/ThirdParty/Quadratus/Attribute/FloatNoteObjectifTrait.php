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
 * Note objectif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNoteObjectifTrait {

    /**
     * Note objectif.
     *
     * @var float
     */
    private $noteObjectif;

    /**
     * Get the note objectif.
     *
     * @return float Returns the note objectif.
     */
    public function getNoteObjectif() {
        return $this->noteObjectif;
    }

    /**
     * Set the note objectif.
     *
     * @param float $noteObjectif The note objectif.
     */
    public function setNoteObjectif($noteObjectif) {
        $this->noteObjectif = $noteObjectif;
        return $this;
    }
}
