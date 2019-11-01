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
 * Coll modif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCollModifTrait {

    /**
     * Coll modif.
     *
     * @var string
     */
    private $collModif;

    /**
     * Get the coll modif.
     *
     * @return string Returns the coll modif.
     */
    public function getCollModif() {
        return $this->collModif;
    }

    /**
     * Set the coll modif.
     *
     * @param string $collModif The coll modif.
     */
    public function setCollModif($collModif) {
        $this->collModif = $collModif;
        return $this;
    }
}
