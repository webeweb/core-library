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
 * P cent partiel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPCentPartielTrait {

    /**
     * P cent partiel.
     *
     * @var int
     */
    private $pCentPartiel;

    /**
     * Get the p cent partiel.
     *
     * @return int Returns the p cent partiel.
     */
    public function getPCentPartiel() {
        return $this->pCentPartiel;
    }

    /**
     * Set the p cent partiel.
     *
     * @param int $pCentPartiel The p cent partiel.
     */
    public function setPCentPartiel($pCentPartiel) {
        $this->pCentPartiel = $pCentPartiel;
        return $this;
    }
}
