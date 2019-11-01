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
 * Collectif1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollectif1Trait {

    /**
     * Collectif1.
     *
     * @var string
     */
    private $collectif1;

    /**
     * Get the collectif1.
     *
     * @return string Returns the collectif1.
     */
    public function getCollectif1() {
        return $this->collectif1;
    }

    /**
     * Set the collectif1.
     *
     * @param string $collectif1 The collectif1.
     */
    public function setCollectif1($collectif1) {
        $this->collectif1 = $collectif1;
        return $this;
    }
}
