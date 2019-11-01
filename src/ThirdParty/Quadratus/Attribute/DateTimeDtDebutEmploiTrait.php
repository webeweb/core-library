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
 * Dt debut emploi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDebutEmploiTrait {

    /**
     * Dt debut emploi.
     *
     * @var DateTime|null
     */
    private $dtDebutEmploi;

    /**
     * Get the dt debut emploi.
     *
     * @return DateTime|null Returns the dt debut emploi.
     */
    public function getDtDebutEmploi() {
        return $this->dtDebutEmploi;
    }

    /**
     * Set the dt debut emploi.
     *
     * @param DateTime|null $dtDebutEmploi The dt debut emploi.
     */
    public function setDtDebutEmploi(DateTime $dtDebutEmploi = null) {
        $this->dtDebutEmploi = $dtDebutEmploi;
        return $this;
    }
}
