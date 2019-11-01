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
 * Niveau noeud trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNiveauNoeudTrait {

    /**
     * Niveau noeud.
     *
     * @var int
     */
    private $niveauNoeud;

    /**
     * Get the niveau noeud.
     *
     * @return int Returns the niveau noeud.
     */
    public function getNiveauNoeud() {
        return $this->niveauNoeud;
    }

    /**
     * Set the niveau noeud.
     *
     * @param int $niveauNoeud The niveau noeud.
     */
    public function setNiveauNoeud($niveauNoeud) {
        $this->niveauNoeud = $niveauNoeud;
        return $this;
    }
}
