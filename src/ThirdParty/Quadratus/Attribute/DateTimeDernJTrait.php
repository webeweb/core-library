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
 * Dern j trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDernJTrait {

    /**
     * Dern j.
     *
     * @var DateTime|null
     */
    private $dernJ;

    /**
     * Get the dern j.
     *
     * @return DateTime|null Returns the dern j.
     */
    public function getDernJ() {
        return $this->dernJ;
    }

    /**
     * Set the dern j.
     *
     * @param DateTime|null $dernJ The dern j.
     */
    public function setDernJ(DateTime $dernJ = null) {
        $this->dernJ = $dernJ;
        return $this;
    }
}
