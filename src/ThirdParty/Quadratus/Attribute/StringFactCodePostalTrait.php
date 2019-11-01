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
 * Fact code postal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFactCodePostalTrait {

    /**
     * Fact code postal.
     *
     * @var string
     */
    private $factCodePostal;

    /**
     * Get the fact code postal.
     *
     * @return string Returns the fact code postal.
     */
    public function getFactCodePostal() {
        return $this->factCodePostal;
    }

    /**
     * Set the fact code postal.
     *
     * @param string $factCodePostal The fact code postal.
     */
    public function setFactCodePostal($factCodePostal) {
        $this->factCodePostal = $factCodePostal;
        return $this;
    }
}
