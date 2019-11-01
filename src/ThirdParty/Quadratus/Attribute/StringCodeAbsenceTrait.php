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
 * Code absence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAbsenceTrait {

    /**
     * Code absence.
     *
     * @var string
     */
    private $codeAbsence;

    /**
     * Get the code absence.
     *
     * @return string Returns the code absence.
     */
    public function getCodeAbsence() {
        return $this->codeAbsence;
    }

    /**
     * Set the code absence.
     *
     * @param string $codeAbsence The code absence.
     */
    public function setCodeAbsence($codeAbsence) {
        $this->codeAbsence = $codeAbsence;
        return $this;
    }
}
