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
 * Mt encours autorise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtEncoursAutoriseTrait {

    /**
     * Mt encours autorise.
     *
     * @var float
     */
    private $mtEncoursAutorise;

    /**
     * Get the mt encours autorise.
     *
     * @return float Returns the mt encours autorise.
     */
    public function getMtEncoursAutorise() {
        return $this->mtEncoursAutorise;
    }

    /**
     * Set the mt encours autorise.
     *
     * @param float $mtEncoursAutorise The mt encours autorise.
     */
    public function setMtEncoursAutorise($mtEncoursAutorise) {
        $this->mtEncoursAutorise = $mtEncoursAutorise;
        return $this;
    }
}
