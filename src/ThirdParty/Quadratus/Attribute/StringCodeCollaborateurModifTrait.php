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
 * Code collaborateur modif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollaborateurModifTrait {

    /**
     * Code collaborateur modif.
     *
     * @var string
     */
    private $codeCollaborateurModif;

    /**
     * Get the code collaborateur modif.
     *
     * @return string Returns the code collaborateur modif.
     */
    public function getCodeCollaborateurModif() {
        return $this->codeCollaborateurModif;
    }

    /**
     * Set the code collaborateur modif.
     *
     * @param string $codeCollaborateurModif The code collaborateur modif.
     */
    public function setCodeCollaborateurModif($codeCollaborateurModif) {
        $this->codeCollaborateurModif = $codeCollaborateurModif;
        return $this;
    }
}
