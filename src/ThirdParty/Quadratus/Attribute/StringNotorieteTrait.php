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
 * Notoriete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNotorieteTrait {

    /**
     * Notoriete.
     *
     * @var string
     */
    private $notoriete;

    /**
     * Get the notoriete.
     *
     * @return string Returns the notoriete.
     */
    public function getNotoriete() {
        return $this->notoriete;
    }

    /**
     * Set the notoriete.
     *
     * @param string $notoriete The notoriete.
     */
    public function setNotoriete($notoriete) {
        $this->notoriete = $notoriete;
        return $this;
    }
}
