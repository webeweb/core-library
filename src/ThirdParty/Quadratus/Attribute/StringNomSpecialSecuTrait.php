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
 * Nom special secu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomSpecialSecuTrait {

    /**
     * Nom special secu.
     *
     * @var string
     */
    private $nomSpecialSecu;

    /**
     * Get the nom special secu.
     *
     * @return string Returns the nom special secu.
     */
    public function getNomSpecialSecu() {
        return $this->nomSpecialSecu;
    }

    /**
     * Set the nom special secu.
     *
     * @param string $nomSpecialSecu The nom special secu.
     */
    public function setNomSpecialSecu($nomSpecialSecu) {
        $this->nomSpecialSecu = $nomSpecialSecu;
        return $this;
    }
}
