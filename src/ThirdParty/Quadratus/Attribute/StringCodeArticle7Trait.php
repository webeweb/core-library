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
 * Code article7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeArticle7Trait {

    /**
     * Code article7.
     *
     * @var string
     */
    private $codeArticle7;

    /**
     * Get the code article7.
     *
     * @return string Returns the code article7.
     */
    public function getCodeArticle7() {
        return $this->codeArticle7;
    }

    /**
     * Set the code article7.
     *
     * @param string $codeArticle7 The code article7.
     */
    public function setCodeArticle7($codeArticle7) {
        $this->codeArticle7 = $codeArticle7;
        return $this;
    }
}
