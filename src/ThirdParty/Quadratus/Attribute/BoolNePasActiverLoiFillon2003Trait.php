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
 * Ne pas activer loi fillon2003 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNePasActiverLoiFillon2003Trait {

    /**
     * Ne pas activer loi fillon2003.
     *
     * @var bool
     */
    private $nePasActiverLoiFillon2003;

    /**
     * Get the ne pas activer loi fillon2003.
     *
     * @return bool Returns the ne pas activer loi fillon2003.
     */
    public function getNePasActiverLoiFillon2003() {
        return $this->nePasActiverLoiFillon2003;
    }

    /**
     * Set the ne pas activer loi fillon2003.
     *
     * @param bool $nePasActiverLoiFillon2003 The ne pas activer loi fillon2003.
     */
    public function setNePasActiverLoiFillon2003($nePasActiverLoiFillon2003) {
        $this->nePasActiverLoiFillon2003 = $nePasActiverLoiFillon2003;
        return $this;
    }
}
