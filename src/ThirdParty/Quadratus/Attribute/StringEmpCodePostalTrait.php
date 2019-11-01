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
 * Emp code postal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmpCodePostalTrait {

    /**
     * Emp code postal.
     *
     * @var string
     */
    private $empCodePostal;

    /**
     * Get the emp code postal.
     *
     * @return string Returns the emp code postal.
     */
    public function getEmpCodePostal() {
        return $this->empCodePostal;
    }

    /**
     * Set the emp code postal.
     *
     * @param string $empCodePostal The emp code postal.
     */
    public function setEmpCodePostal($empCodePostal) {
        $this->empCodePostal = $empCodePostal;
        return $this;
    }
}
