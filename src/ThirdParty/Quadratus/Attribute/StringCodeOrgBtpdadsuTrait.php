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
 * Code org btpdadsu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOrgBtpdadsuTrait {

    /**
     * Code org btpdadsu.
     *
     * @var string
     */
    private $codeOrgBtpdadsu;

    /**
     * Get the code org btpdadsu.
     *
     * @return string Returns the code org btpdadsu.
     */
    public function getCodeOrgBtpdadsu() {
        return $this->codeOrgBtpdadsu;
    }

    /**
     * Set the code org btpdadsu.
     *
     * @param string $codeOrgBtpdadsu The code org btpdadsu.
     */
    public function setCodeOrgBtpdadsu($codeOrgBtpdadsu) {
        $this->codeOrgBtpdadsu = $codeOrgBtpdadsu;
        return $this;
    }
}
