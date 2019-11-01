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
 * At etab3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtEtab3Trait {

    /**
     * At etab3.
     *
     * @var string
     */
    private $atEtab3;

    /**
     * Get the at etab3.
     *
     * @return string Returns the at etab3.
     */
    public function getAtEtab3() {
        return $this->atEtab3;
    }

    /**
     * Set the at etab3.
     *
     * @param string $atEtab3 The at etab3.
     */
    public function setAtEtab3($atEtab3) {
        $this->atEtab3 = $atEtab3;
        return $this;
    }
}
