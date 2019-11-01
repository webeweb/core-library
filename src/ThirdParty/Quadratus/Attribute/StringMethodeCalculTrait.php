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
 * Methode calcul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMethodeCalculTrait {

    /**
     * Methode calcul.
     *
     * @var string
     */
    private $methodeCalcul;

    /**
     * Get the methode calcul.
     *
     * @return string Returns the methode calcul.
     */
    public function getMethodeCalcul() {
        return $this->methodeCalcul;
    }

    /**
     * Set the methode calcul.
     *
     * @param string $methodeCalcul The methode calcul.
     */
    public function setMethodeCalcul($methodeCalcul) {
        $this->methodeCalcul = $methodeCalcul;
        return $this;
    }
}
