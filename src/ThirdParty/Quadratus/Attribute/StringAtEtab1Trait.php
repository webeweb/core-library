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
 * At etab1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtEtab1Trait {

    /**
     * At etab1.
     *
     * @var string
     */
    private $atEtab1;

    /**
     * Get the at etab1.
     *
     * @return string Returns the at etab1.
     */
    public function getAtEtab1() {
        return $this->atEtab1;
    }

    /**
     * Set the at etab1.
     *
     * @param string $atEtab1 The at etab1.
     */
    public function setAtEtab1($atEtab1) {
        $this->atEtab1 = $atEtab1;
        return $this;
    }
}
