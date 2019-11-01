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
 * Grille anc1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGrilleAnc1Trait {

    /**
     * Grille anc1.
     *
     * @var string
     */
    private $grilleAnc1;

    /**
     * Get the grille anc1.
     *
     * @return string Returns the grille anc1.
     */
    public function getGrilleAnc1() {
        return $this->grilleAnc1;
    }

    /**
     * Set the grille anc1.
     *
     * @param string $grilleAnc1 The grille anc1.
     */
    public function setGrilleAnc1($grilleAnc1) {
        $this->grilleAnc1 = $grilleAnc1;
        return $this;
    }
}
