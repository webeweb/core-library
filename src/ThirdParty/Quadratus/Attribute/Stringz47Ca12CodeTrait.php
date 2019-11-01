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
 * z47 ca12 code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Stringz47Ca12CodeTrait {

    /**
     * z47 ca12 code.
     *
     * @var string
     */
    private $z47Ca12Code;

    /**
     * Get the z47 ca12 code.
     *
     * @return string Returns the z47 ca12 code.
     */
    public function getz47Ca12Code() {
        return $this->z47Ca12Code;
    }

    /**
     * Set the z47 ca12 code.
     *
     * @param string $z47Ca12Code The z47 ca12 code.
     */
    public function setz47Ca12Code($z47Ca12Code) {
        $this->z47Ca12Code = $z47Ca12Code;
        return $this;
    }
}
