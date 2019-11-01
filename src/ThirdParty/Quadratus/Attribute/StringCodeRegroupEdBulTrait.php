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
 * Code regroup ed bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeRegroupEdBulTrait {

    /**
     * Code regroup ed bul.
     *
     * @var string
     */
    private $codeRegroupEdBul;

    /**
     * Get the code regroup ed bul.
     *
     * @return string Returns the code regroup ed bul.
     */
    public function getCodeRegroupEdBul() {
        return $this->codeRegroupEdBul;
    }

    /**
     * Set the code regroup ed bul.
     *
     * @param string $codeRegroupEdBul The code regroup ed bul.
     */
    public function setCodeRegroupEdBul($codeRegroupEdBul) {
        $this->codeRegroupEdBul = $codeRegroupEdBul;
        return $this;
    }
}
