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
 * Contrat particulier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContratParticulierTrait {

    /**
     * Contrat particulier.
     *
     * @var string
     */
    private $contratParticulier;

    /**
     * Get the contrat particulier.
     *
     * @return string Returns the contrat particulier.
     */
    public function getContratParticulier() {
        return $this->contratParticulier;
    }

    /**
     * Set the contrat particulier.
     *
     * @param string $contratParticulier The contrat particulier.
     */
    public function setContratParticulier($contratParticulier) {
        $this->contratParticulier = $contratParticulier;
        return $this;
    }
}
