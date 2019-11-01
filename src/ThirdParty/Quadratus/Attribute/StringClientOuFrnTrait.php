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
 * Client ou frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClientOuFrnTrait {

    /**
     * Client ou frn.
     *
     * @var string
     */
    private $clientOuFrn;

    /**
     * Get the client ou frn.
     *
     * @return string Returns the client ou frn.
     */
    public function getClientOuFrn() {
        return $this->clientOuFrn;
    }

    /**
     * Set the client ou frn.
     *
     * @param string $clientOuFrn The client ou frn.
     */
    public function setClientOuFrn($clientOuFrn) {
        $this->clientOuFrn = $clientOuFrn;
        return $this;
    }
}
