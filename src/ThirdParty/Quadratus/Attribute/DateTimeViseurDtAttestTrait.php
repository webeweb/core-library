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
 * Viseur dt attest trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeViseurDtAttestTrait {

    /**
     * Viseur dt attest.
     *
     * @var DateTime|null
     */
    private $viseurDtAttest;

    /**
     * Get the viseur dt attest.
     *
     * @return DateTime|null Returns the viseur dt attest.
     */
    public function getViseurDtAttest() {
        return $this->viseurDtAttest;
    }

    /**
     * Set the viseur dt attest.
     *
     * @param DateTime|null $viseurDtAttest The viseur dt attest.
     */
    public function setViseurDtAttest(DateTime $viseurDtAttest = null) {
        $this->viseurDtAttest = $viseurDtAttest;
        return $this;
    }
}
