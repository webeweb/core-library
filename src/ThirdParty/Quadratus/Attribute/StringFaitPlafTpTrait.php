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
 * Fait plaf tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitPlafTpTrait {

    /**
     * Fait plaf tp.
     *
     * @var string
     */
    private $faitPlafTp;

    /**
     * Get the fait plaf tp.
     *
     * @return string Returns the fait plaf tp.
     */
    public function getFaitPlafTp() {
        return $this->faitPlafTp;
    }

    /**
     * Set the fait plaf tp.
     *
     * @param string $faitPlafTp The fait plaf tp.
     */
    public function setFaitPlafTp($faitPlafTp) {
        $this->faitPlafTp = $faitPlafTp;
        return $this;
    }
}
