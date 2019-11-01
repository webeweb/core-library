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
 * Code at per trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCodeAtPerTrait {

    /**
     * Code at per.
     *
     * @var int
     */
    private $codeAtPer;

    /**
     * Get the code at per.
     *
     * @return int Returns the code at per.
     */
    public function getCodeAtPer() {
        return $this->codeAtPer;
    }

    /**
     * Set the code at per.
     *
     * @param int $codeAtPer The code at per.
     */
    public function setCodeAtPer($codeAtPer) {
        $this->codeAtPer = $codeAtPer;
        return $this;
    }
}
