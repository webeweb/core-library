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
 * Tva cpt immos intra com trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptImmosIntraComTrait {

    /**
     * Tva cpt immos intra com.
     *
     * @var string
     */
    private $tvaCptImmosIntraCom;

    /**
     * Get the tva cpt immos intra com.
     *
     * @return string Returns the tva cpt immos intra com.
     */
    public function getTvaCptImmosIntraCom() {
        return $this->tvaCptImmosIntraCom;
    }

    /**
     * Set the tva cpt immos intra com.
     *
     * @param string $tvaCptImmosIntraCom The tva cpt immos intra com.
     */
    public function setTvaCptImmosIntraCom($tvaCptImmosIntraCom) {
        $this->tvaCptImmosIntraCom = $tvaCptImmosIntraCom;
        return $this;
    }
}
