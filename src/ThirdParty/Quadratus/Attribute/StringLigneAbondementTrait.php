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
 * Ligne abondement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLigneAbondementTrait {

    /**
     * Ligne abondement.
     *
     * @var string
     */
    private $ligneAbondement;

    /**
     * Get the ligne abondement.
     *
     * @return string Returns the ligne abondement.
     */
    public function getLigneAbondement() {
        return $this->ligneAbondement;
    }

    /**
     * Set the ligne abondement.
     *
     * @param string $ligneAbondement The ligne abondement.
     */
    public function setLigneAbondement($ligneAbondement) {
        $this->ligneAbondement = $ligneAbondement;
        return $this;
    }
}
