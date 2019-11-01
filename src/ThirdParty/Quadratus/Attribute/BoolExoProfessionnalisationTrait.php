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
 * Exo professionnalisation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExoProfessionnalisationTrait {

    /**
     * Exo professionnalisation.
     *
     * @var bool
     */
    private $exoProfessionnalisation;

    /**
     * Get the exo professionnalisation.
     *
     * @return bool Returns the exo professionnalisation.
     */
    public function getExoProfessionnalisation() {
        return $this->exoProfessionnalisation;
    }

    /**
     * Set the exo professionnalisation.
     *
     * @param bool $exoProfessionnalisation The exo professionnalisation.
     */
    public function setExoProfessionnalisation($exoProfessionnalisation) {
        $this->exoProfessionnalisation = $exoProfessionnalisation;
        return $this;
    }
}
