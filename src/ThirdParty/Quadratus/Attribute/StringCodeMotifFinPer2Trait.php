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
 * Code motif fin per2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMotifFinPer2Trait {

    /**
     * Code motif fin per2.
     *
     * @var string
     */
    private $codeMotifFinPer2;

    /**
     * Get the code motif fin per2.
     *
     * @return string Returns the code motif fin per2.
     */
    public function getCodeMotifFinPer2() {
        return $this->codeMotifFinPer2;
    }

    /**
     * Set the code motif fin per2.
     *
     * @param string $codeMotifFinPer2 The code motif fin per2.
     */
    public function setCodeMotifFinPer2($codeMotifFinPer2) {
        $this->codeMotifFinPer2 = $codeMotifFinPer2;
        return $this;
    }
}
