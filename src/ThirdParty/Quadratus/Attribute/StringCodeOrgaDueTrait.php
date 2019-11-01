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
 * Code orga due trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOrgaDueTrait {

    /**
     * Code orga due.
     *
     * @var string
     */
    private $codeOrgaDue;

    /**
     * Get the code orga due.
     *
     * @return string Returns the code orga due.
     */
    public function getCodeOrgaDue() {
        return $this->codeOrgaDue;
    }

    /**
     * Set the code orga due.
     *
     * @param string $codeOrgaDue The code orga due.
     */
    public function setCodeOrgaDue($codeOrgaDue) {
        $this->codeOrgaDue = $codeOrgaDue;
        return $this;
    }
}
