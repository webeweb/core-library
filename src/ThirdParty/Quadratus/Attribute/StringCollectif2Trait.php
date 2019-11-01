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
 * Collectif2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollectif2Trait {

    /**
     * Collectif2.
     *
     * @var string
     */
    private $collectif2;

    /**
     * Get the collectif2.
     *
     * @return string Returns the collectif2.
     */
    public function getCollectif2() {
        return $this->collectif2;
    }

    /**
     * Set the collectif2.
     *
     * @param string $collectif2 The collectif2.
     */
    public function setCollectif2($collectif2) {
        $this->collectif2 = $collectif2;
        return $this;
    }
}
