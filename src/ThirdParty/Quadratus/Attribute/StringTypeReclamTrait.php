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
 * Type reclam trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeReclamTrait {

    /**
     * Type reclam.
     *
     * @var string
     */
    private $typeReclam;

    /**
     * Get the type reclam.
     *
     * @return string Returns the type reclam.
     */
    public function getTypeReclam() {
        return $this->typeReclam;
    }

    /**
     * Set the type reclam.
     *
     * @param string $typeReclam The type reclam.
     */
    public function setTypeReclam($typeReclam) {
        $this->typeReclam = $typeReclam;
        return $this;
    }
}
