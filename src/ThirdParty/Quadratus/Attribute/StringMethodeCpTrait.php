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
 * Methode cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMethodeCpTrait {

    /**
     * Methode cp.
     *
     * @var string
     */
    private $methodeCp;

    /**
     * Get the methode cp.
     *
     * @return string Returns the methode cp.
     */
    public function getMethodeCp() {
        return $this->methodeCp;
    }

    /**
     * Set the methode cp.
     *
     * @param string $methodeCp The methode cp.
     */
    public function setMethodeCp($methodeCp) {
        $this->methodeCp = $methodeCp;
        return $this;
    }
}
