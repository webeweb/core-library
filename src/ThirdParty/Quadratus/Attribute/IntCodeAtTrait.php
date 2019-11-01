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
 * Code at trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCodeAtTrait {

    /**
     * Code at.
     *
     * @var int
     */
    private $codeAt;

    /**
     * Get the code at.
     *
     * @return int Returns the code at.
     */
    public function getCodeAt() {
        return $this->codeAt;
    }

    /**
     * Set the code at.
     *
     * @param int $codeAt The code at.
     */
    public function setCodeAt($codeAt) {
        $this->codeAt = $codeAt;
        return $this;
    }
}
