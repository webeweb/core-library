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
 * Etbl fax trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblFaxTrait {

    /**
     * Etbl fax.
     *
     * @var string
     */
    private $etblFax;

    /**
     * Get the etbl fax.
     *
     * @return string Returns the etbl fax.
     */
    public function getEtblFax() {
        return $this->etblFax;
    }

    /**
     * Set the etbl fax.
     *
     * @param string $etblFax The etbl fax.
     */
    public function setEtblFax($etblFax) {
        $this->etblFax = $etblFax;
        return $this;
    }
}
