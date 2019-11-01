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
 * Code col trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeColTrait {

    /**
     * Code col.
     *
     * @var string
     */
    private $codeCol;

    /**
     * Get the code col.
     *
     * @return string Returns the code col.
     */
    public function getCodeCol() {
        return $this->codeCol;
    }

    /**
     * Set the code col.
     *
     * @param string $codeCol The code col.
     */
    public function setCodeCol($codeCol) {
        $this->codeCol = $codeCol;
        return $this;
    }
}
