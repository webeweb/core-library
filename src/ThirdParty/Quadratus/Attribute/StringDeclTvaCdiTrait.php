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
 * Decl tva cdi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDeclTvaCdiTrait {

    /**
     * Decl tva cdi.
     *
     * @var string
     */
    private $declTvaCdi;

    /**
     * Get the decl tva cdi.
     *
     * @return string Returns the decl tva cdi.
     */
    public function getDeclTvaCdi() {
        return $this->declTvaCdi;
    }

    /**
     * Set the decl tva cdi.
     *
     * @param string $declTvaCdi The decl tva cdi.
     */
    public function setDeclTvaCdi($declTvaCdi) {
        $this->declTvaCdi = $declTvaCdi;
        return $this;
    }
}
