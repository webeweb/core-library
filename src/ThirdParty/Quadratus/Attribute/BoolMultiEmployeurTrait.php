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
 * Multi employeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMultiEmployeurTrait {

    /**
     * Multi employeur.
     *
     * @var bool
     */
    private $multiEmployeur;

    /**
     * Get the multi employeur.
     *
     * @return bool Returns the multi employeur.
     */
    public function getMultiEmployeur() {
        return $this->multiEmployeur;
    }

    /**
     * Set the multi employeur.
     *
     * @param bool $multiEmployeur The multi employeur.
     */
    public function setMultiEmployeur($multiEmployeur) {
        $this->multiEmployeur = $multiEmployeur;
        return $this;
    }
}
