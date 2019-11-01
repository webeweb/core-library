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
 * Sel lst restri art def trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSelLstRestriArtDefTrait {

    /**
     * Sel lst restri art def.
     *
     * @var string
     */
    private $selLstRestriArtDef;

    /**
     * Get the sel lst restri art def.
     *
     * @return string Returns the sel lst restri art def.
     */
    public function getSelLstRestriArtDef() {
        return $this->selLstRestriArtDef;
    }

    /**
     * Set the sel lst restri art def.
     *
     * @param string $selLstRestriArtDef The sel lst restri art def.
     */
    public function setSelLstRestriArtDef($selLstRestriArtDef) {
        $this->selLstRestriArtDef = $selLstRestriArtDef;
        return $this;
    }
}
