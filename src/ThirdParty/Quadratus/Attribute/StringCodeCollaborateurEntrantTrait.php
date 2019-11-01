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
 * Code collaborateur entrant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollaborateurEntrantTrait {

    /**
     * Code collaborateur entrant.
     *
     * @var string
     */
    private $codeCollaborateurEntrant;

    /**
     * Get the code collaborateur entrant.
     *
     * @return string Returns the code collaborateur entrant.
     */
    public function getCodeCollaborateurEntrant() {
        return $this->codeCollaborateurEntrant;
    }

    /**
     * Set the code collaborateur entrant.
     *
     * @param string $codeCollaborateurEntrant The code collaborateur entrant.
     */
    public function setCodeCollaborateurEntrant($codeCollaborateurEntrant) {
        $this->codeCollaborateurEntrant = $codeCollaborateurEntrant;
        return $this;
    }
}
