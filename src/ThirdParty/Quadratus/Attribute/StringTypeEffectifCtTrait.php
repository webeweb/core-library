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
 * Type effectif ct trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeEffectifCtTrait {

    /**
     * Type effectif ct.
     *
     * @var string
     */
    private $typeEffectifCt;

    /**
     * Get the type effectif ct.
     *
     * @return string Returns the type effectif ct.
     */
    public function getTypeEffectifCt() {
        return $this->typeEffectifCt;
    }

    /**
     * Set the type effectif ct.
     *
     * @param string $typeEffectifCt The type effectif ct.
     */
    public function setTypeEffectifCt($typeEffectifCt) {
        $this->typeEffectifCt = $typeEffectifCt;
        return $this;
    }
}
