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
 * Coll creation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollCreationTrait {

    /**
     * Coll creation.
     *
     * @var string
     */
    private $collCreation;

    /**
     * Get the coll creation.
     *
     * @return string Returns the coll creation.
     */
    public function getCollCreation() {
        return $this->collCreation;
    }

    /**
     * Set the coll creation.
     *
     * @param string $collCreation The coll creation.
     */
    public function setCollCreation($collCreation) {
        $this->collCreation = $collCreation;
        return $this;
    }
}
