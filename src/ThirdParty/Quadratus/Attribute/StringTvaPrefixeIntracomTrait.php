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
 * Tva prefixe intracom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaPrefixeIntracomTrait {

    /**
     * Tva prefixe intracom.
     *
     * @var string
     */
    private $tvaPrefixeIntracom;

    /**
     * Get the tva prefixe intracom.
     *
     * @return string Returns the tva prefixe intracom.
     */
    public function getTvaPrefixeIntracom() {
        return $this->tvaPrefixeIntracom;
    }

    /**
     * Set the tva prefixe intracom.
     *
     * @param string $tvaPrefixeIntracom The tva prefixe intracom.
     */
    public function setTvaPrefixeIntracom($tvaPrefixeIntracom) {
        $this->tvaPrefixeIntracom = $tvaPrefixeIntracom;
        return $this;
    }
}
