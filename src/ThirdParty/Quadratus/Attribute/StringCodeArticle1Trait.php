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
 * Code article1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeArticle1Trait {

    /**
     * Code article1.
     *
     * @var string
     */
    private $codeArticle1;

    /**
     * Get the code article1.
     *
     * @return string Returns the code article1.
     */
    public function getCodeArticle1() {
        return $this->codeArticle1;
    }

    /**
     * Set the code article1.
     *
     * @param string $codeArticle1 The code article1.
     */
    public function setCodeArticle1($codeArticle1) {
        $this->codeArticle1 = $codeArticle1;
        return $this;
    }
}
