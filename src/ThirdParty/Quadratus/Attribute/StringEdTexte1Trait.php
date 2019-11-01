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
 * Ed texte1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdTexte1Trait {

    /**
     * Ed texte1.
     *
     * @var string
     */
    private $edTexte1;

    /**
     * Get the ed texte1.
     *
     * @return string Returns the ed texte1.
     */
    public function getEdTexte1() {
        return $this->edTexte1;
    }

    /**
     * Set the ed texte1.
     *
     * @param string $edTexte1 The ed texte1.
     */
    public function setEdTexte1($edTexte1) {
        $this->edTexte1 = $edTexte1;
        return $this;
    }
}
