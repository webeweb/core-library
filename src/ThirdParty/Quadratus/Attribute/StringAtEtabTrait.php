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
 * At etab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtEtabTrait {

    /**
     * At etab.
     *
     * @var string
     */
    private $atEtab;

    /**
     * Get the at etab.
     *
     * @return string Returns the at etab.
     */
    public function getAtEtab() {
        return $this->atEtab;
    }

    /**
     * Set the at etab.
     *
     * @param string $atEtab The at etab.
     */
    public function setAtEtab($atEtab) {
        $this->atEtab = $atEtab;
        return $this;
    }
}
