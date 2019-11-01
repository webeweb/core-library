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
 * Rdlpascii trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRdlpasciiTrait {

    /**
     * Rdlpascii.
     *
     * @var bool
     */
    private $rdlpascii;

    /**
     * Get the rdlpascii.
     *
     * @return bool Returns the rdlpascii.
     */
    public function getRdlpascii() {
        return $this->rdlpascii;
    }

    /**
     * Set the rdlpascii.
     *
     * @param bool $rdlpascii The rdlpascii.
     */
    public function setRdlpascii($rdlpascii) {
        $this->rdlpascii = $rdlpascii;
        return $this;
    }
}
