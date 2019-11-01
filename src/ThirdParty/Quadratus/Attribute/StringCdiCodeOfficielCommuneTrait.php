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
 * Cdi code officiel commune trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCdiCodeOfficielCommuneTrait {

    /**
     * Cdi code officiel commune.
     *
     * @var string
     */
    private $cdiCodeOfficielCommune;

    /**
     * Get the cdi code officiel commune.
     *
     * @return string Returns the cdi code officiel commune.
     */
    public function getCdiCodeOfficielCommune() {
        return $this->cdiCodeOfficielCommune;
    }

    /**
     * Set the cdi code officiel commune.
     *
     * @param string $cdiCodeOfficielCommune The cdi code officiel commune.
     */
    public function setCdiCodeOfficielCommune($cdiCodeOfficielCommune) {
        $this->cdiCodeOfficielCommune = $cdiCodeOfficielCommune;
        return $this;
    }
}
