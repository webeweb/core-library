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
 * Type publication trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypePublicationTrait {

    /**
     * Type publication.
     *
     * @var string
     */
    private $typePublication;

    /**
     * Get the type publication.
     *
     * @return string Returns the type publication.
     */
    public function getTypePublication() {
        return $this->typePublication;
    }

    /**
     * Set the type publication.
     *
     * @param string $typePublication The type publication.
     */
    public function setTypePublication($typePublication) {
        $this->typePublication = $typePublication;
        return $this;
    }
}
