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
 * Type absence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAbsenceTrait {

    /**
     * Type absence.
     *
     * @var string
     */
    private $typeAbsence;

    /**
     * Get the type absence.
     *
     * @return string Returns the type absence.
     */
    public function getTypeAbsence() {
        return $this->typeAbsence;
    }

    /**
     * Set the type absence.
     *
     * @param string $typeAbsence The type absence.
     */
    public function setTypeAbsence($typeAbsence) {
        $this->typeAbsence = $typeAbsence;
        return $this;
    }
}
