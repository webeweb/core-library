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
 * Dern tentative trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDernTentativeTrait {

    /**
     * Dern tentative.
     *
     * @var DateTime|null
     */
    private $dernTentative;

    /**
     * Get the dern tentative.
     *
     * @return DateTime|null Returns the dern tentative.
     */
    public function getDernTentative() {
        return $this->dernTentative;
    }

    /**
     * Set the dern tentative.
     *
     * @param DateTime|null $dernTentative The dern tentative.
     */
    public function setDernTentative(DateTime $dernTentative = null) {
        $this->dernTentative = $dernTentative;
        return $this;
    }
}
