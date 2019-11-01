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
 * z45 ca12 code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz45Ca12CodeTrait {

    /**
     * z45 ca12 code.
     *
     * @var string
     */
    private $z45Ca12Code;

    /**
     * Get the z45 ca12 code.
     *
     * @return string Returns the z45 ca12 code.
     */
    public function getz45Ca12Code() {
        return $this->z45Ca12Code;
    }

    /**
     * Set the z45 ca12 code.
     *
     * @param string $z45Ca12Code The z45 ca12 code.
     */
    public function setz45Ca12Code($z45Ca12Code) {
        $this->z45Ca12Code = $z45Ca12Code;
        return $this;
    }
}
