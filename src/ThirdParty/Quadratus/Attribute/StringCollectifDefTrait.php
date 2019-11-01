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
 * Collectif def trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollectifDefTrait {

    /**
     * Collectif def.
     *
     * @var string
     */
    private $collectifDef;

    /**
     * Get the collectif def.
     *
     * @return string Returns the collectif def.
     */
    public function getCollectifDef() {
        return $this->collectifDef;
    }

    /**
     * Set the collectif def.
     *
     * @param string $collectifDef The collectif def.
     */
    public function setCollectifDef($collectifDef) {
        $this->collectifDef = $collectifDef;
        return $this;
    }
}
