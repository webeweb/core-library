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
 * Regle calcul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegleCalculTrait {

    /**
     * Regle calcul.
     *
     * @var string
     */
    private $regleCalcul;

    /**
     * Get the regle calcul.
     *
     * @return string Returns the regle calcul.
     */
    public function getRegleCalcul() {
        return $this->regleCalcul;
    }

    /**
     * Set the regle calcul.
     *
     * @param string $regleCalcul The regle calcul.
     */
    public function setRegleCalcul($regleCalcul) {
        $this->regleCalcul = $regleCalcul;
        return $this;
    }
}
