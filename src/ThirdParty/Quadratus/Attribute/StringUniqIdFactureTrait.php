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
 * Uniq id facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUniqIdFactureTrait {

    /**
     * Uniq id facture.
     *
     * @var string
     */
    private $uniqIdFacture;

    /**
     * Get the uniq id facture.
     *
     * @return string Returns the uniq id facture.
     */
    public function getUniqIdFacture() {
        return $this->uniqIdFacture;
    }

    /**
     * Set the uniq id facture.
     *
     * @param string $uniqIdFacture The uniq id facture.
     */
    public function setUniqIdFacture($uniqIdFacture) {
        $this->uniqIdFacture = $uniqIdFacture;
        return $this;
    }
}
