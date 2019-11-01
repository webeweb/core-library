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
 * Num evenement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumEvenementTrait {

    /**
     * Num evenement.
     *
     * @var int
     */
    private $numEvenement;

    /**
     * Get the num evenement.
     *
     * @return int Returns the num evenement.
     */
    public function getNumEvenement() {
        return $this->numEvenement;
    }

    /**
     * Set the num evenement.
     *
     * @param int $numEvenement The num evenement.
     */
    public function setNumEvenement($numEvenement) {
        $this->numEvenement = $numEvenement;
        return $this;
    }
}
