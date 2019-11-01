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
 * Prem date entree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePremDateEntreeTrait {

    /**
     * Prem date entree.
     *
     * @var DateTime|null
     */
    private $premDateEntree;

    /**
     * Get the prem date entree.
     *
     * @return DateTime|null Returns the prem date entree.
     */
    public function getPremDateEntree() {
        return $this->premDateEntree;
    }

    /**
     * Set the prem date entree.
     *
     * @param DateTime|null $premDateEntree The prem date entree.
     */
    public function setPremDateEntree(DateTime $premDateEntree = null) {
        $this->premDateEntree = $premDateEntree;
        return $this;
    }
}
