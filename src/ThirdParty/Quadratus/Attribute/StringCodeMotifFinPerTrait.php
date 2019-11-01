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
 * Code motif fin per trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMotifFinPerTrait {

    /**
     * Code motif fin per.
     *
     * @var string
     */
    private $codeMotifFinPer;

    /**
     * Get the code motif fin per.
     *
     * @return string Returns the code motif fin per.
     */
    public function getCodeMotifFinPer() {
        return $this->codeMotifFinPer;
    }

    /**
     * Set the code motif fin per.
     *
     * @param string $codeMotifFinPer The code motif fin per.
     */
    public function setCodeMotifFinPer($codeMotifFinPer) {
        $this->codeMotifFinPer = $codeMotifFinPer;
        return $this;
    }
}
