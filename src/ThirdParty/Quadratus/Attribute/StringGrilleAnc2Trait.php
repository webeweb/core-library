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
 * Grille anc2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGrilleAnc2Trait {

    /**
     * Grille anc2.
     *
     * @var string
     */
    private $grilleAnc2;

    /**
     * Get the grille anc2.
     *
     * @return string Returns the grille anc2.
     */
    public function getGrilleAnc2() {
        return $this->grilleAnc2;
    }

    /**
     * Set the grille anc2.
     *
     * @param string $grilleAnc2 The grille anc2.
     */
    public function setGrilleAnc2($grilleAnc2) {
        $this->grilleAnc2 = $grilleAnc2;
        return $this;
    }
}
