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
 * Note resultat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNoteResultatTrait {

    /**
     * Note resultat.
     *
     * @var float
     */
    private $noteResultat;

    /**
     * Get the note resultat.
     *
     * @return float Returns the note resultat.
     */
    public function getNoteResultat() {
        return $this->noteResultat;
    }

    /**
     * Set the note resultat.
     *
     * @param float $noteResultat The note resultat.
     */
    public function setNoteResultat($noteResultat) {
        $this->noteResultat = $noteResultat;
        return $this;
    }
}
