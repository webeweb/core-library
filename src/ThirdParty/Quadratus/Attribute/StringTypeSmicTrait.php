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
 * Type smic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeSmicTrait {

    /**
     * Type smic.
     *
     * @var string
     */
    private $typeSmic;

    /**
     * Get the type smic.
     *
     * @return string Returns the type smic.
     */
    public function getTypeSmic() {
        return $this->typeSmic;
    }

    /**
     * Set the type smic.
     *
     * @param string $typeSmic The type smic.
     */
    public function setTypeSmic($typeSmic) {
        $this->typeSmic = $typeSmic;
        return $this;
    }
}
