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
 * Contrat en cours trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolContratEnCoursTrait {

    /**
     * Contrat en cours.
     *
     * @var bool
     */
    private $contratEnCours;

    /**
     * Get the contrat en cours.
     *
     * @return bool Returns the contrat en cours.
     */
    public function getContratEnCours() {
        return $this->contratEnCours;
    }

    /**
     * Set the contrat en cours.
     *
     * @param bool $contratEnCours The contrat en cours.
     */
    public function setContratEnCours($contratEnCours) {
        $this->contratEnCours = $contratEnCours;
        return $this;
    }
}
