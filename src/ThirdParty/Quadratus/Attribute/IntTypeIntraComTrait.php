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
 * Type intra com trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTypeIntraComTrait {

    /**
     * Type intra com.
     *
     * @var int
     */
    private $typeIntraCom;

    /**
     * Get the type intra com.
     *
     * @return int Returns the type intra com.
     */
    public function getTypeIntraCom() {
        return $this->typeIntraCom;
    }

    /**
     * Set the type intra com.
     *
     * @param int $typeIntraCom The type intra com.
     */
    public function setTypeIntraCom($typeIntraCom) {
        $this->typeIntraCom = $typeIntraCom;
        return $this;
    }
}
