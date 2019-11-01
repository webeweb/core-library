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
 * Etbl commune trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblCommuneTrait {

    /**
     * Etbl commune.
     *
     * @var string
     */
    private $etblCommune;

    /**
     * Get the etbl commune.
     *
     * @return string Returns the etbl commune.
     */
    public function getEtblCommune() {
        return $this->etblCommune;
    }

    /**
     * Set the etbl commune.
     *
     * @param string $etblCommune The etbl commune.
     */
    public function setEtblCommune($etblCommune) {
        $this->etblCommune = $etblCommune;
        return $this;
    }
}
