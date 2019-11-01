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
 * Code article9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeArticle9Trait {

    /**
     * Code article9.
     *
     * @var string
     */
    private $codeArticle9;

    /**
     * Get the code article9.
     *
     * @return string Returns the code article9.
     */
    public function getCodeArticle9() {
        return $this->codeArticle9;
    }

    /**
     * Set the code article9.
     *
     * @param string $codeArticle9 The code article9.
     */
    public function setCodeArticle9($codeArticle9) {
        $this->codeArticle9 = $codeArticle9;
        return $this;
    }
}
