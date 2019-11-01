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
 * Objet ref trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringObjetRefTrait {

    /**
     * Objet ref.
     *
     * @var string
     */
    private $objetRef;

    /**
     * Get the objet ref.
     *
     * @return string Returns the objet ref.
     */
    public function getObjetRef() {
        return $this->objetRef;
    }

    /**
     * Set the objet ref.
     *
     * @param string $objetRef The objet ref.
     */
    public function setObjetRef($objetRef) {
        $this->objetRef = $objetRef;
        return $this;
    }
}
