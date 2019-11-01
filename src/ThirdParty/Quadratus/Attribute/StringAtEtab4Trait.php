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
 * At etab4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtEtab4Trait {

    /**
     * At etab4.
     *
     * @var string
     */
    private $atEtab4;

    /**
     * Get the at etab4.
     *
     * @return string Returns the at etab4.
     */
    public function getAtEtab4() {
        return $this->atEtab4;
    }

    /**
     * Set the at etab4.
     *
     * @param string $atEtab4 The at etab4.
     */
    public function setAtEtab4($atEtab4) {
        $this->atEtab4 = $atEtab4;
        return $this;
    }
}
