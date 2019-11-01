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
 * Cddcdi evo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCddcdiEvoTrait {

    /**
     * Cddcdi evo.
     *
     * @var string
     */
    private $cddcdiEvo;

    /**
     * Get the cddcdi evo.
     *
     * @return string Returns the cddcdi evo.
     */
    public function getCddcdiEvo() {
        return $this->cddcdiEvo;
    }

    /**
     * Set the cddcdi evo.
     *
     * @param string $cddcdiEvo The cddcdi evo.
     */
    public function setCddcdiEvo($cddcdiEvo) {
        $this->cddcdiEvo = $cddcdiEvo;
        return $this;
    }
}
