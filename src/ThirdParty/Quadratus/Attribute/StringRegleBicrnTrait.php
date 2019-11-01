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
 * Regle bicrn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegleBicrnTrait {

    /**
     * Regle bicrn.
     *
     * @var string
     */
    private $regleBicrn;

    /**
     * Get the regle bicrn.
     *
     * @return string Returns the regle bicrn.
     */
    public function getRegleBicrn() {
        return $this->regleBicrn;
    }

    /**
     * Set the regle bicrn.
     *
     * @param string $regleBicrn The regle bicrn.
     */
    public function setRegleBicrn($regleBicrn) {
        $this->regleBicrn = $regleBicrn;
        return $this;
    }
}
