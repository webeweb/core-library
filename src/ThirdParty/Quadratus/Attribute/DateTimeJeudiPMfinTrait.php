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
 * Jeudi p mfin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeJeudiPMfinTrait {

    /**
     * Jeudi p mfin.
     *
     * @var DateTime|null
     */
    private $jeudiPMfin;

    /**
     * Get the jeudi p mfin.
     *
     * @return DateTime|null Returns the jeudi p mfin.
     */
    public function getJeudiPMfin() {
        return $this->jeudiPMfin;
    }

    /**
     * Set the jeudi p mfin.
     *
     * @param DateTime|null $jeudiPMfin The jeudi p mfin.
     */
    public function setJeudiPMfin(DateTime $jeudiPMfin = null) {
        $this->jeudiPMfin = $jeudiPMfin;
        return $this;
    }
}
