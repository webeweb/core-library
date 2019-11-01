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
 * Tva dest attn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaDestAttnTrait {

    /**
     * Tva dest attn.
     *
     * @var string
     */
    private $tvaDestAttn;

    /**
     * Get the tva dest attn.
     *
     * @return string Returns the tva dest attn.
     */
    public function getTvaDestAttn() {
        return $this->tvaDestAttn;
    }

    /**
     * Set the tva dest attn.
     *
     * @param string $tvaDestAttn The tva dest attn.
     */
    public function setTvaDestAttn($tvaDestAttn) {
        $this->tvaDestAttn = $tvaDestAttn;
        return $this;
    }
}
