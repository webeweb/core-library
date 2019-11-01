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
 * Dt fin preavis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtFinPreavisTrait {

    /**
     * Dt fin preavis.
     *
     * @var DateTime|null
     */
    private $dtFinPreavis;

    /**
     * Get the dt fin preavis.
     *
     * @return DateTime|null Returns the dt fin preavis.
     */
    public function getDtFinPreavis() {
        return $this->dtFinPreavis;
    }

    /**
     * Set the dt fin preavis.
     *
     * @param DateTime|null $dtFinPreavis The dt fin preavis.
     */
    public function setDtFinPreavis(DateTime $dtFinPreavis = null) {
        $this->dtFinPreavis = $dtFinPreavis;
        return $this;
    }
}
