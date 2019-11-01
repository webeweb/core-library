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
 * Effectif inscrit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEffectifInscritTrait {

    /**
     * Effectif inscrit.
     *
     * @var int
     */
    private $effectifInscrit;

    /**
     * Get the effectif inscrit.
     *
     * @return int Returns the effectif inscrit.
     */
    public function getEffectifInscrit() {
        return $this->effectifInscrit;
    }

    /**
     * Set the effectif inscrit.
     *
     * @param int $effectifInscrit The effectif inscrit.
     */
    public function setEffectifInscrit($effectifInscrit) {
        $this->effectifInscrit = $effectifInscrit;
        return $this;
    }
}
