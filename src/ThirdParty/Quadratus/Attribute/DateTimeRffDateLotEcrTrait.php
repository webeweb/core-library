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
 * Rff date lot ecr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeRffDateLotEcrTrait {

    /**
     * Rff date lot ecr.
     *
     * @var DateTime|null
     */
    private $rffDateLotEcr;

    /**
     * Get the rff date lot ecr.
     *
     * @return DateTime|null Returns the rff date lot ecr.
     */
    public function getRffDateLotEcr() {
        return $this->rffDateLotEcr;
    }

    /**
     * Set the rff date lot ecr.
     *
     * @param DateTime|null $rffDateLotEcr The rff date lot ecr.
     */
    public function setRffDateLotEcr(DateTime $rffDateLotEcr = null) {
        $this->rffDateLotEcr = $rffDateLotEcr;
        return $this;
    }
}
