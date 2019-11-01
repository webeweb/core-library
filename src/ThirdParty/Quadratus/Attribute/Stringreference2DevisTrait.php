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
 * reference2 devis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringreference2DevisTrait {

    /**
     * reference2 devis.
     *
     * @var string
     */
    private $reference2Devis;

    /**
     * Get the reference2 devis.
     *
     * @return string Returns the reference2 devis.
     */
    public function getreference2Devis() {
        return $this->reference2Devis;
    }

    /**
     * Set the reference2 devis.
     *
     * @param string $reference2Devis The reference2 devis.
     */
    public function setreference2Devis($reference2Devis) {
        $this->reference2Devis = $reference2Devis;
        return $this;
    }
}
