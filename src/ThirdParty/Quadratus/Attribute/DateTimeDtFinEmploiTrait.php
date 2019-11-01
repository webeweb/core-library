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
 * Dt fin emploi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtFinEmploiTrait {

    /**
     * Dt fin emploi.
     *
     * @var DateTime|null
     */
    private $dtFinEmploi;

    /**
     * Get the dt fin emploi.
     *
     * @return DateTime|null Returns the dt fin emploi.
     */
    public function getDtFinEmploi() {
        return $this->dtFinEmploi;
    }

    /**
     * Set the dt fin emploi.
     *
     * @param DateTime|null $dtFinEmploi The dt fin emploi.
     */
    public function setDtFinEmploi(DateTime $dtFinEmploi = null) {
        $this->dtFinEmploi = $dtFinEmploi;
        return $this;
    }
}
