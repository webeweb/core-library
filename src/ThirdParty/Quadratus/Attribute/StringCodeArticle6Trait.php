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
 * Code article6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeArticle6Trait {

    /**
     * Code article6.
     *
     * @var string
     */
    private $codeArticle6;

    /**
     * Get the code article6.
     *
     * @return string Returns the code article6.
     */
    public function getCodeArticle6() {
        return $this->codeArticle6;
    }

    /**
     * Set the code article6.
     *
     * @param string $codeArticle6 The code article6.
     */
    public function setCodeArticle6($codeArticle6) {
        $this->codeArticle6 = $codeArticle6;
        return $this;
    }
}
