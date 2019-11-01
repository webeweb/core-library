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
 * Grille anc3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGrilleAnc3Trait {

    /**
     * Grille anc3.
     *
     * @var string
     */
    private $grilleAnc3;

    /**
     * Get the grille anc3.
     *
     * @return string Returns the grille anc3.
     */
    public function getGrilleAnc3() {
        return $this->grilleAnc3;
    }

    /**
     * Set the grille anc3.
     *
     * @param string $grilleAnc3 The grille anc3.
     */
    public function setGrilleAnc3($grilleAnc3) {
        $this->grilleAnc3 = $grilleAnc3;
        return $this;
    }
}
