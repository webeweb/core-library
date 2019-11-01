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
 * Emp tel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmpTelTrait {

    /**
     * Emp tel.
     *
     * @var string
     */
    private $empTel;

    /**
     * Get the emp tel.
     *
     * @return string Returns the emp tel.
     */
    public function getEmpTel() {
        return $this->empTel;
    }

    /**
     * Set the emp tel.
     *
     * @param string $empTel The emp tel.
     */
    public function setEmpTel($empTel) {
        $this->empTel = $empTel;
        return $this;
    }
}
