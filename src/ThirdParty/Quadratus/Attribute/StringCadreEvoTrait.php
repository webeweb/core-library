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
 * Cadre evo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCadreEvoTrait {

    /**
     * Cadre evo.
     *
     * @var string
     */
    private $cadreEvo;

    /**
     * Get the cadre evo.
     *
     * @return string Returns the cadre evo.
     */
    public function getCadreEvo() {
        return $this->cadreEvo;
    }

    /**
     * Set the cadre evo.
     *
     * @param string $cadreEvo The cadre evo.
     */
    public function setCadreEvo($cadreEvo) {
        $this->cadreEvo = $cadreEvo;
        return $this;
    }
}
