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
 * reference1 devis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringreference1DevisTrait {

    /**
     * reference1 devis.
     *
     * @var string
     */
    private $reference1Devis;

    /**
     * Get the reference1 devis.
     *
     * @return string Returns the reference1 devis.
     */
    public function getreference1Devis() {
        return $this->reference1Devis;
    }

    /**
     * Set the reference1 devis.
     *
     * @param string $reference1Devis The reference1 devis.
     */
    public function setreference1Devis($reference1Devis) {
        $this->reference1Devis = $reference1Devis;
        return $this;
    }
}
