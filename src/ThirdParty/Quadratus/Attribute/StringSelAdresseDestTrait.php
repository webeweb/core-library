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

/**
 * Sel adresse dest trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSelAdresseDestTrait {

    /**
     * Sel adresse dest.
     *
     * @var string
     */
    private $selAdresseDest;

    /**
     * Get the sel adresse dest.
     *
     * @return string Returns the sel adresse dest.
     */
    public function getSelAdresseDest() {
        return $this->selAdresseDest;
    }

    /**
     * Set the sel adresse dest.
     *
     * @param string $selAdresseDest The sel adresse dest.
     */
    public function setSelAdresseDest($selAdresseDest) {
        $this->selAdresseDest = $selAdresseDest;
        return $this;
    }
}
