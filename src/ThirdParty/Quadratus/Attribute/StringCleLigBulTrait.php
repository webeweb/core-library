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
 * Cle lig bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleLigBulTrait {

    /**
     * Cle lig bul.
     *
     * @var string
     */
    private $cleLigBul;

    /**
     * Get the cle lig bul.
     *
     * @return string Returns the cle lig bul.
     */
    public function getCleLigBul() {
        return $this->cleLigBul;
    }

    /**
     * Set the cle lig bul.
     *
     * @param string $cleLigBul The cle lig bul.
     */
    public function setCleLigBul($cleLigBul) {
        $this->cleLigBul = $cleLigBul;
        return $this;
    }
}
