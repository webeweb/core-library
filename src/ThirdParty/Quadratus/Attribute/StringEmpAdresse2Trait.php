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
 * Emp adresse2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmpAdresse2Trait {

    /**
     * Emp adresse2.
     *
     * @var string
     */
    private $empAdresse2;

    /**
     * Get the emp adresse2.
     *
     * @return string Returns the emp adresse2.
     */
    public function getEmpAdresse2() {
        return $this->empAdresse2;
    }

    /**
     * Set the emp adresse2.
     *
     * @param string $empAdresse2 The emp adresse2.
     */
    public function setEmpAdresse2($empAdresse2) {
        $this->empAdresse2 = $empAdresse2;
        return $this;
    }
}
