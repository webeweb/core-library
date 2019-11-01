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
 * Code col creat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeColCreatTrait {

    /**
     * Code col creat.
     *
     * @var string
     */
    private $codeColCreat;

    /**
     * Get the code col creat.
     *
     * @return string Returns the code col creat.
     */
    public function getCodeColCreat() {
        return $this->codeColCreat;
    }

    /**
     * Set the code col creat.
     *
     * @param string $codeColCreat The code col creat.
     */
    public function setCodeColCreat($codeColCreat) {
        $this->codeColCreat = $codeColCreat;
        return $this;
    }
}
