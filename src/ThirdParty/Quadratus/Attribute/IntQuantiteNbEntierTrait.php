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
 * Quantite nb entier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntQuantiteNbEntierTrait {

    /**
     * Quantite nb entier.
     *
     * @var int
     */
    private $quantiteNbEntier;

    /**
     * Get the quantite nb entier.
     *
     * @return int Returns the quantite nb entier.
     */
    public function getQuantiteNbEntier() {
        return $this->quantiteNbEntier;
    }

    /**
     * Set the quantite nb entier.
     *
     * @param int $quantiteNbEntier The quantite nb entier.
     */
    public function setQuantiteNbEntier($quantiteNbEntier) {
        $this->quantiteNbEntier = $quantiteNbEntier;
        return $this;
    }
}
