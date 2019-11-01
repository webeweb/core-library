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
 * Dimanche p mfin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDimanchePMfinTrait {

    /**
     * Dimanche p mfin.
     *
     * @var DateTime|null
     */
    private $dimanchePMfin;

    /**
     * Get the dimanche p mfin.
     *
     * @return DateTime|null Returns the dimanche p mfin.
     */
    public function getDimanchePMfin() {
        return $this->dimanchePMfin;
    }

    /**
     * Set the dimanche p mfin.
     *
     * @param DateTime|null $dimanchePMfin The dimanche p mfin.
     */
    public function setDimanchePMfin(DateTime $dimanchePMfin = null) {
        $this->dimanchePMfin = $dimanchePMfin;
        return $this;
    }
}
