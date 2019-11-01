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

use DateTime;

/**
 * Inscription rm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeInscriptionRmTrait {

    /**
     * Inscription rm.
     *
     * @var DateTime|null
     */
    private $inscriptionRm;

    /**
     * Get the inscription rm.
     *
     * @return DateTime|null Returns the inscription rm.
     */
    public function getInscriptionRm() {
        return $this->inscriptionRm;
    }

    /**
     * Set the inscription rm.
     *
     * @param DateTime|null $inscriptionRm The inscription rm.
     */
    public function setInscriptionRm(DateTime $inscriptionRm = null) {
        $this->inscriptionRm = $inscriptionRm;
        return $this;
    }
}
