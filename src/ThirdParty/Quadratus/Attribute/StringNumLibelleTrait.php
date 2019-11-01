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
 * Num libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumLibelleTrait {

    /**
     * Num libelle.
     *
     * @var string
     */
    private $numLibelle;

    /**
     * Get the num libelle.
     *
     * @return string Returns the num libelle.
     */
    public function getNumLibelle() {
        return $this->numLibelle;
    }

    /**
     * Set the num libelle.
     *
     * @param string $numLibelle The num libelle.
     */
    public function setNumLibelle($numLibelle) {
        $this->numLibelle = $numLibelle;
        return $this;
    }
}
