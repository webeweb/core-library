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
 * Inscription rc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeInscriptionRcTrait {

    /**
     * Inscription rc.
     *
     * @var DateTime|null
     */
    private $inscriptionRc;

    /**
     * Get the inscription rc.
     *
     * @return DateTime|null Returns the inscription rc.
     */
    public function getInscriptionRc() {
        return $this->inscriptionRc;
    }

    /**
     * Set the inscription rc.
     *
     * @param DateTime|null $inscriptionRc The inscription rc.
     */
    public function setInscriptionRc(DateTime $inscriptionRc = null) {
        $this->inscriptionRc = $inscriptionRc;
        return $this;
    }
}
