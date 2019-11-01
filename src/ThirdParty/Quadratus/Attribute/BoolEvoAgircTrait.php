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
 * Evo agirc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEvoAgircTrait {

    /**
     * Evo agirc.
     *
     * @var bool
     */
    private $evoAgirc;

    /**
     * Get the evo agirc.
     *
     * @return bool Returns the evo agirc.
     */
    public function getEvoAgirc() {
        return $this->evoAgirc;
    }

    /**
     * Set the evo agirc.
     *
     * @param bool $evoAgirc The evo agirc.
     */
    public function setEvoAgirc($evoAgirc) {
        $this->evoAgirc = $evoAgirc;
        return $this;
    }
}
