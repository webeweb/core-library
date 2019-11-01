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
 * Code motif fin per5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMotifFinPer5Trait {

    /**
     * Code motif fin per5.
     *
     * @var string
     */
    private $codeMotifFinPer5;

    /**
     * Get the code motif fin per5.
     *
     * @return string Returns the code motif fin per5.
     */
    public function getCodeMotifFinPer5() {
        return $this->codeMotifFinPer5;
    }

    /**
     * Set the code motif fin per5.
     *
     * @param string $codeMotifFinPer5 The code motif fin per5.
     */
    public function setCodeMotifFinPer5($codeMotifFinPer5) {
        $this->codeMotifFinPer5 = $codeMotifFinPer5;
        return $this;
    }
}
