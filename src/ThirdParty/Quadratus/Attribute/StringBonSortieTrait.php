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
 * Bon sortie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBonSortieTrait {

    /**
     * Bon sortie.
     *
     * @var string
     */
    private $bonSortie;

    /**
     * Get the bon sortie.
     *
     * @return string Returns the bon sortie.
     */
    public function getBonSortie() {
        return $this->bonSortie;
    }

    /**
     * Set the bon sortie.
     *
     * @param string $bonSortie The bon sortie.
     */
    public function setBonSortie($bonSortie) {
        $this->bonSortie = $bonSortie;
        return $this;
    }
}
