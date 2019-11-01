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
 * Reprise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeRepriseTrait {

    /**
     * Reprise.
     *
     * @var DateTime|null
     */
    private $reprise;

    /**
     * Get the reprise.
     *
     * @return DateTime|null Returns the reprise.
     */
    public function getReprise() {
        return $this->reprise;
    }

    /**
     * Set the reprise.
     *
     * @param DateTime|null $reprise The reprise.
     */
    public function setReprise(DateTime $reprise = null) {
        $this->reprise = $reprise;
        return $this;
    }
}
