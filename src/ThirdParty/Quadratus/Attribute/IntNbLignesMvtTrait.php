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
 * Nb lignes mvt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbLignesMvtTrait {

    /**
     * Nb lignes mvt.
     *
     * @var int
     */
    private $nbLignesMvt;

    /**
     * Get the nb lignes mvt.
     *
     * @return int Returns the nb lignes mvt.
     */
    public function getNbLignesMvt() {
        return $this->nbLignesMvt;
    }

    /**
     * Set the nb lignes mvt.
     *
     * @param int $nbLignesMvt The nb lignes mvt.
     */
    public function setNbLignesMvt($nbLignesMvt) {
        $this->nbLignesMvt = $nbLignesMvt;
        return $this;
    }
}
