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
 * Parc code remorque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringParcCodeRemorqueTrait {

    /**
     * Parc code remorque.
     *
     * @var string
     */
    private $parcCodeRemorque;

    /**
     * Get the parc code remorque.
     *
     * @return string Returns the parc code remorque.
     */
    public function getParcCodeRemorque() {
        return $this->parcCodeRemorque;
    }

    /**
     * Set the parc code remorque.
     *
     * @param string $parcCodeRemorque The parc code remorque.
     */
    public function setParcCodeRemorque($parcCodeRemorque) {
        $this->parcCodeRemorque = $parcCodeRemorque;
        return $this;
    }
}
