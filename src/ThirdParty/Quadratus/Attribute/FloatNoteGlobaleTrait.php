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
 * Note globale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNoteGlobaleTrait {

    /**
     * Note globale.
     *
     * @var float
     */
    private $noteGlobale;

    /**
     * Get the note globale.
     *
     * @return float Returns the note globale.
     */
    public function getNoteGlobale() {
        return $this->noteGlobale;
    }

    /**
     * Set the note globale.
     *
     * @param float $noteGlobale The note globale.
     */
    public function setNoteGlobale($noteGlobale) {
        $this->noteGlobale = $noteGlobale;
        return $this;
    }
}
