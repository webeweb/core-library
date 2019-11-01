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
 * Code motif fin per3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMotifFinPer3Trait {

    /**
     * Code motif fin per3.
     *
     * @var string
     */
    private $codeMotifFinPer3;

    /**
     * Get the code motif fin per3.
     *
     * @return string Returns the code motif fin per3.
     */
    public function getCodeMotifFinPer3() {
        return $this->codeMotifFinPer3;
    }

    /**
     * Set the code motif fin per3.
     *
     * @param string $codeMotifFinPer3 The code motif fin per3.
     */
    public function setCodeMotifFinPer3($codeMotifFinPer3) {
        $this->codeMotifFinPer3 = $codeMotifFinPer3;
        return $this;
    }
}
