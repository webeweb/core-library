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
 * Num lot lettre p trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotLettrePTrait {

    /**
     * Num lot lettre p.
     *
     * @var int
     */
    private $numLotLettreP;

    /**
     * Get the num lot lettre p.
     *
     * @return int Returns the num lot lettre p.
     */
    public function getNumLotLettreP() {
        return $this->numLotLettreP;
    }

    /**
     * Set the num lot lettre p.
     *
     * @param int $numLotLettreP The num lot lettre p.
     */
    public function setNumLotLettreP($numLotLettreP) {
        $this->numLotLettreP = $numLotLettreP;
        return $this;
    }
}
