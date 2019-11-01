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
 * Type effectif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeEffectifTrait {

    /**
     * Type effectif.
     *
     * @var string
     */
    private $typeEffectif;

    /**
     * Get the type effectif.
     *
     * @return string Returns the type effectif.
     */
    public function getTypeEffectif() {
        return $this->typeEffectif;
    }

    /**
     * Set the type effectif.
     *
     * @param string $typeEffectif The type effectif.
     */
    public function setTypeEffectif($typeEffectif) {
        $this->typeEffectif = $typeEffectif;
        return $this;
    }
}
