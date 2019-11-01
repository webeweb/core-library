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
 * Soumis abattement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSoumisAbattementTrait {

    /**
     * Soumis abattement.
     *
     * @var bool
     */
    private $soumisAbattement;

    /**
     * Get the soumis abattement.
     *
     * @return bool Returns the soumis abattement.
     */
    public function getSoumisAbattement() {
        return $this->soumisAbattement;
    }

    /**
     * Set the soumis abattement.
     *
     * @param bool $soumisAbattement The soumis abattement.
     */
    public function setSoumisAbattement($soumisAbattement) {
        $this->soumisAbattement = $soumisAbattement;
        return $this;
    }
}
