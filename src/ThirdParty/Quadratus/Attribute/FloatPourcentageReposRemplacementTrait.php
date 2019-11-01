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
 * Pourcentage repos remplacement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentageReposRemplacementTrait {

    /**
     * Pourcentage repos remplacement.
     *
     * @var float
     */
    private $pourcentageReposRemplacement;

    /**
     * Get the pourcentage repos remplacement.
     *
     * @return float Returns the pourcentage repos remplacement.
     */
    public function getPourcentageReposRemplacement() {
        return $this->pourcentageReposRemplacement;
    }

    /**
     * Set the pourcentage repos remplacement.
     *
     * @param float $pourcentageReposRemplacement The pourcentage repos remplacement.
     */
    public function setPourcentageReposRemplacement($pourcentageReposRemplacement) {
        $this->pourcentageReposRemplacement = $pourcentageReposRemplacement;
        return $this;
    }
}
