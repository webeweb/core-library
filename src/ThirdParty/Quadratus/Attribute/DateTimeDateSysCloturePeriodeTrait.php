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
 * Date sys cloture periode trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSysCloturePeriodeTrait {

    /**
     * Date sys cloture periode.
     *
     * @var DateTime|null
     */
    private $dateSysCloturePeriode;

    /**
     * Get the date sys cloture periode.
     *
     * @return DateTime|null Returns the date sys cloture periode.
     */
    public function getDateSysCloturePeriode() {
        return $this->dateSysCloturePeriode;
    }

    /**
     * Set the date sys cloture periode.
     *
     * @param DateTime|null $dateSysCloturePeriode The date sys cloture periode.
     */
    public function setDateSysCloturePeriode(DateTime $dateSysCloturePeriode = null) {
        $this->dateSysCloturePeriode = $dateSysCloturePeriode;
        return $this;
    }
}
