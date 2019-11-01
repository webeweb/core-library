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
 * Type frequence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeFrequenceTrait {

    /**
     * Type frequence.
     *
     * @var string
     */
    private $typeFrequence;

    /**
     * Get the type frequence.
     *
     * @return string Returns the type frequence.
     */
    public function getTypeFrequence() {
        return $this->typeFrequence;
    }

    /**
     * Set the type frequence.
     *
     * @param string $typeFrequence The type frequence.
     */
    public function setTypeFrequence($typeFrequence) {
        $this->typeFrequence = $typeFrequence;
        return $this;
    }
}
