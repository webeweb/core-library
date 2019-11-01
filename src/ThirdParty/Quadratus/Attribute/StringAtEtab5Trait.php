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
 * At etab5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtEtab5Trait {

    /**
     * At etab5.
     *
     * @var string
     */
    private $atEtab5;

    /**
     * Get the at etab5.
     *
     * @return string Returns the at etab5.
     */
    public function getAtEtab5() {
        return $this->atEtab5;
    }

    /**
     * Set the at etab5.
     *
     * @param string $atEtab5 The at etab5.
     */
    public function setAtEtab5($atEtab5) {
        $this->atEtab5 = $atEtab5;
        return $this;
    }
}
