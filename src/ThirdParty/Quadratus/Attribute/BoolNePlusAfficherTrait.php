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
 * Ne plus afficher trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNePlusAfficherTrait {

    /**
     * Ne plus afficher.
     *
     * @var bool
     */
    private $nePlusAfficher;

    /**
     * Get the ne plus afficher.
     *
     * @return bool Returns the ne plus afficher.
     */
    public function getNePlusAfficher() {
        return $this->nePlusAfficher;
    }

    /**
     * Set the ne plus afficher.
     *
     * @param bool $nePlusAfficher The ne plus afficher.
     */
    public function setNePlusAfficher($nePlusAfficher) {
        $this->nePlusAfficher = $nePlusAfficher;
        return $this;
    }
}
