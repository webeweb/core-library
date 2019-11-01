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
 * Type absence h sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAbsenceHSupTrait {

    /**
     * Type absence h sup.
     *
     * @var string
     */
    private $typeAbsenceHSup;

    /**
     * Get the type absence h sup.
     *
     * @return string Returns the type absence h sup.
     */
    public function getTypeAbsenceHSup() {
        return $this->typeAbsenceHSup;
    }

    /**
     * Set the type absence h sup.
     *
     * @param string $typeAbsenceHSup The type absence h sup.
     */
    public function setTypeAbsenceHSup($typeAbsenceHSup) {
        $this->typeAbsenceHSup = $typeAbsenceHSup;
        return $this;
    }
}
