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
 * Nb appels en cours trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbAppelsEnCoursTrait {

    /**
     * Nb appels en cours.
     *
     * @var int
     */
    private $nbAppelsEnCours;

    /**
     * Get the nb appels en cours.
     *
     * @return int Returns the nb appels en cours.
     */
    public function getNbAppelsEnCours() {
        return $this->nbAppelsEnCours;
    }

    /**
     * Set the nb appels en cours.
     *
     * @param int $nbAppelsEnCours The nb appels en cours.
     */
    public function setNbAppelsEnCours($nbAppelsEnCours) {
        $this->nbAppelsEnCours = $nbAppelsEnCours;
        return $this;
    }
}
