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
 * Sommes periode fin2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeSommesPeriodeFin2Trait {

    /**
     * Sommes periode fin2.
     *
     * @var DateTime|null
     */
    private $sommesPeriodeFin2;

    /**
     * Get the sommes periode fin2.
     *
     * @return DateTime|null Returns the sommes periode fin2.
     */
    public function getSommesPeriodeFin2() {
        return $this->sommesPeriodeFin2;
    }

    /**
     * Set the sommes periode fin2.
     *
     * @param DateTime|null $sommesPeriodeFin2 The sommes periode fin2.
     */
    public function setSommesPeriodeFin2(DateTime $sommesPeriodeFin2 = null) {
        $this->sommesPeriodeFin2 = $sommesPeriodeFin2;
        return $this;
    }
}
