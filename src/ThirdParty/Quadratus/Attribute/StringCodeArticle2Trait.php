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
 * Code article2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeArticle2Trait {

    /**
     * Code article2.
     *
     * @var string
     */
    private $codeArticle2;

    /**
     * Get the code article2.
     *
     * @return string Returns the code article2.
     */
    public function getCodeArticle2() {
        return $this->codeArticle2;
    }

    /**
     * Set the code article2.
     *
     * @param string $codeArticle2 The code article2.
     */
    public function setCodeArticle2($codeArticle2) {
        $this->codeArticle2 = $codeArticle2;
        return $this;
    }
}
