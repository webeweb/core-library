<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Logger;

use DateTime;
use Psr\Log\AbstractLogger;

/**
 * Terminal logger.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Logger
 */
class TerminalLogger extends AbstractLogger {

    /**
     *{@inheritDoc}
     */
    public function log($level, $message, array $context = []) {
        echo vsprintf("[%s] %s: %s, %s\n", [
            (new DateTime())->format("Y-m-d h:i:s"),
            $level,
            $message,
            json_encode($context),
        ]);
    }
}