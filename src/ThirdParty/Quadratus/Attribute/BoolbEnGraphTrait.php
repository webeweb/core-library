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
 * b en graph trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolbEnGraphTrait {

    /**
     * b en graph.
     *
     * @var bool
     */
    private $bEnGraph;

    /**
     * Get the b en graph.
     *
     * @return bool Returns the b en graph.
     */
    public function getbEnGraph() {
        return $this->bEnGraph;
    }

    /**
     * Set the b en graph.
     *
     * @param bool $bEnGraph The b en graph.
     */
    public function setbEnGraph($bEnGraph) {
        $this->bEnGraph = $bEnGraph;
        return $this;
    }
}
