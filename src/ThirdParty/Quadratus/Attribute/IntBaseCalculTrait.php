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
 * Base calcul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntBaseCalculTrait {

    /**
     * Base calcul.
     *
     * @var int
     */
    private $baseCalcul;

    /**
     * Get the base calcul.
     *
     * @return int Returns the base calcul.
     */
    public function getBaseCalcul() {
        return $this->baseCalcul;
    }

    /**
     * Set the base calcul.
     *
     * @param int $baseCalcul The base calcul.
     */
    public function setBaseCalcul($baseCalcul) {
        $this->baseCalcul = $baseCalcul;
        return $this;
    }
}
