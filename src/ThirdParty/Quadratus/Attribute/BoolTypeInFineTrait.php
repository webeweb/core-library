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
 * Type in fine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTypeInFineTrait {

    /**
     * Type in fine.
     *
     * @var bool
     */
    private $typeInFine;

    /**
     * Get the type in fine.
     *
     * @return bool Returns the type in fine.
     */
    public function getTypeInFine() {
        return $this->typeInFine;
    }

    /**
     * Set the type in fine.
     *
     * @param bool $typeInFine The type in fine.
     */
    public function setTypeInFine($typeInFine) {
        $this->typeInFine = $typeInFine;
        return $this;
    }
}
