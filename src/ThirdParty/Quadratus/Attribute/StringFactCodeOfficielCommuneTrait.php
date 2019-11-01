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
 * Fact code officiel commune trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFactCodeOfficielCommuneTrait {

    /**
     * Fact code officiel commune.
     *
     * @var string
     */
    private $factCodeOfficielCommune;

    /**
     * Get the fact code officiel commune.
     *
     * @return string Returns the fact code officiel commune.
     */
    public function getFactCodeOfficielCommune() {
        return $this->factCodeOfficielCommune;
    }

    /**
     * Set the fact code officiel commune.
     *
     * @param string $factCodeOfficielCommune The fact code officiel commune.
     */
    public function setFactCodeOfficielCommune($factCodeOfficielCommune) {
        $this->factCodeOfficielCommune = $factCodeOfficielCommune;
        return $this;
    }
}
