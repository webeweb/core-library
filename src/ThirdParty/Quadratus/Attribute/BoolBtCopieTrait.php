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
 * Bt copie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBtCopieTrait {

    /**
     * Bt copie.
     *
     * @var bool
     */
    private $btCopie;

    /**
     * Get the bt copie.
     *
     * @return bool Returns the bt copie.
     */
    public function getBtCopie() {
        return $this->btCopie;
    }

    /**
     * Set the bt copie.
     *
     * @param bool $btCopie The bt copie.
     */
    public function setBtCopie($btCopie) {
        $this->btCopie = $btCopie;
        return $this;
    }
}
