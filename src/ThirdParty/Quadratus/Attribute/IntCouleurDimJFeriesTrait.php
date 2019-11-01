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
 * Couleur dim j feries trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCouleurDimJFeriesTrait {

    /**
     * Couleur dim j feries.
     *
     * @var int
     */
    private $couleurDimJFeries;

    /**
     * Get the couleur dim j feries.
     *
     * @return int Returns the couleur dim j feries.
     */
    public function getCouleurDimJFeries() {
        return $this->couleurDimJFeries;
    }

    /**
     * Set the couleur dim j feries.
     *
     * @param int $couleurDimJFeries The couleur dim j feries.
     */
    public function setCouleurDimJFeries($couleurDimJFeries) {
        $this->couleurDimJFeries = $couleurDimJFeries;
        return $this;
    }
}
