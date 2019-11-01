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
 * Ed texte2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdTexte2Trait {

    /**
     * Ed texte2.
     *
     * @var string
     */
    private $edTexte2;

    /**
     * Get the ed texte2.
     *
     * @return string Returns the ed texte2.
     */
    public function getEdTexte2() {
        return $this->edTexte2;
    }

    /**
     * Set the ed texte2.
     *
     * @param string $edTexte2 The ed texte2.
     */
    public function setEdTexte2($edTexte2) {
        $this->edTexte2 = $edTexte2;
        return $this;
    }
}
