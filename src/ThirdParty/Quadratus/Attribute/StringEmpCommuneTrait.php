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
 * Emp commune trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEmpCommuneTrait {

    /**
     * Emp commune.
     *
     * @var string
     */
    private $empCommune;

    /**
     * Get the emp commune.
     *
     * @return string Returns the emp commune.
     */
    public function getEmpCommune() {
        return $this->empCommune;
    }

    /**
     * Set the emp commune.
     *
     * @param string $empCommune The emp commune.
     */
    public function setEmpCommune($empCommune) {
        $this->empCommune = $empCommune;
        return $this;
    }
}
