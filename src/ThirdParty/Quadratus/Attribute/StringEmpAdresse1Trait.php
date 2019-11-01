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
 * Emp adresse1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmpAdresse1Trait {

    /**
     * Emp adresse1.
     *
     * @var string
     */
    private $empAdresse1;

    /**
     * Get the emp adresse1.
     *
     * @return string Returns the emp adresse1.
     */
    public function getEmpAdresse1() {
        return $this->empAdresse1;
    }

    /**
     * Set the emp adresse1.
     *
     * @param string $empAdresse1 The emp adresse1.
     */
    public function setEmpAdresse1($empAdresse1) {
        $this->empAdresse1 = $empAdresse1;
        return $this;
    }
}
