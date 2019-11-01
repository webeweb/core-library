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
 * Tri employe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTriEmployeTrait {

    /**
     * Tri employe.
     *
     * @var string
     */
    private $triEmploye;

    /**
     * Get the tri employe.
     *
     * @return string Returns the tri employe.
     */
    public function getTriEmploye() {
        return $this->triEmploye;
    }

    /**
     * Set the tri employe.
     *
     * @param string $triEmploye The tri employe.
     */
    public function setTriEmploye($triEmploye) {
        $this->triEmploye = $triEmploye;
        return $this;
    }
}
