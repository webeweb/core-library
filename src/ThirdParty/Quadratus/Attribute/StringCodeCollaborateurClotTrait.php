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
 * Code collaborateur clot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollaborateurClotTrait {

    /**
     * Code collaborateur clot.
     *
     * @var string
     */
    private $codeCollaborateurClot;

    /**
     * Get the code collaborateur clot.
     *
     * @return string Returns the code collaborateur clot.
     */
    public function getCodeCollaborateurClot() {
        return $this->codeCollaborateurClot;
    }

    /**
     * Set the code collaborateur clot.
     *
     * @param string $codeCollaborateurClot The code collaborateur clot.
     */
    public function setCodeCollaborateurClot($codeCollaborateurClot) {
        $this->codeCollaborateurClot = $codeCollaborateurClot;
        return $this;
    }
}
