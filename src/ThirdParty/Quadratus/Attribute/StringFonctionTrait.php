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
 * Fonction trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFonctionTrait {

    /**
     * Fonction.
     *
     * @var string
     */
    private $fonction;

    /**
     * Get the fonction.
     *
     * @return string Returns the fonction.
     */
    public function getFonction() {
        return $this->fonction;
    }

    /**
     * Set the fonction.
     *
     * @param string $fonction The fonction.
     */
    public function setFonction($fonction) {
        $this->fonction = $fonction;
        return $this;
    }
}
