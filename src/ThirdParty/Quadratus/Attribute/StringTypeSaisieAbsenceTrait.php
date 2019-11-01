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
 * Type saisie absence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeSaisieAbsenceTrait {

    /**
     * Type saisie absence.
     *
     * @var string
     */
    private $typeSaisieAbsence;

    /**
     * Get the type saisie absence.
     *
     * @return string Returns the type saisie absence.
     */
    public function getTypeSaisieAbsence() {
        return $this->typeSaisieAbsence;
    }

    /**
     * Set the type saisie absence.
     *
     * @param string $typeSaisieAbsence The type saisie absence.
     */
    public function setTypeSaisieAbsence($typeSaisieAbsence) {
        $this->typeSaisieAbsence = $typeSaisieAbsence;
        return $this;
    }
}
