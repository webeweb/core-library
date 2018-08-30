<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Exception\SkiData;

/**
 * SkiData too long data exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Exception\SkiData
 */
class SkiDataTooLongDataException extends AbstractSkiDataException {

    /**
     * Constructor.
     *
     * @param string $value The value.
     * @param integer $length The length.
     */
    public function __construct($value, $length) {
        parent::__construct(sprintf("The data \"%s\" exceeds the length \"%d\" allowed", $value, $length));
    }

}
