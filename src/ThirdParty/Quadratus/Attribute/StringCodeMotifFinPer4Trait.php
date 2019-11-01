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
 * Code motif fin per4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMotifFinPer4Trait {

    /**
     * Code motif fin per4.
     *
     * @var string
     */
    private $codeMotifFinPer4;

    /**
     * Get the code motif fin per4.
     *
     * @return string Returns the code motif fin per4.
     */
    public function getCodeMotifFinPer4() {
        return $this->codeMotifFinPer4;
    }

    /**
     * Set the code motif fin per4.
     *
     * @param string $codeMotifFinPer4 The code motif fin per4.
     */
    public function setCodeMotifFinPer4($codeMotifFinPer4) {
        $this->codeMotifFinPer4 = $codeMotifFinPer4;
        return $this;
    }
}
