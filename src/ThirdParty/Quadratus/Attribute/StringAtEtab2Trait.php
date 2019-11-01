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
 * At etab2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtEtab2Trait {

    /**
     * At etab2.
     *
     * @var string
     */
    private $atEtab2;

    /**
     * Get the at etab2.
     *
     * @return string Returns the at etab2.
     */
    public function getAtEtab2() {
        return $this->atEtab2;
    }

    /**
     * Set the at etab2.
     *
     * @param string $atEtab2 The at etab2.
     */
    public function setAtEtab2($atEtab2) {
        $this->atEtab2 = $atEtab2;
        return $this;
    }
}
