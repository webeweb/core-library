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
 * Code collaborateur dest trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollaborateurDestTrait {

    /**
     * Code collaborateur dest.
     *
     * @var string
     */
    private $codeCollaborateurDest;

    /**
     * Get the code collaborateur dest.
     *
     * @return string Returns the code collaborateur dest.
     */
    public function getCodeCollaborateurDest() {
        return $this->codeCollaborateurDest;
    }

    /**
     * Set the code collaborateur dest.
     *
     * @param string $codeCollaborateurDest The code collaborateur dest.
     */
    public function setCodeCollaborateurDest($codeCollaborateurDest) {
        $this->codeCollaborateurDest = $codeCollaborateurDest;
        return $this;
    }
}
