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
 * Agirc evo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAgircEvoTrait {

    /**
     * Agirc evo.
     *
     * @var string
     */
    private $agircEvo;

    /**
     * Get the agirc evo.
     *
     * @return string Returns the agirc evo.
     */
    public function getAgircEvo() {
        return $this->agircEvo;
    }

    /**
     * Set the agirc evo.
     *
     * @param string $agircEvo The agirc evo.
     */
    public function setAgircEvo($agircEvo) {
        $this->agircEvo = $agircEvo;
        return $this;
    }
}
