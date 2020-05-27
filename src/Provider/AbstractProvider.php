<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Provider;

use Psr\Log\LoggerInterface;
use WBW\Library\Core\Model\Attribute\BooleanDebugTrait;

/**
 * Abstract provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Provider
 * @abstract
 */
abstract class AbstractProvider {

    use BooleanDebugTrait;

    /**
     * Logger.
     *
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Constructor.
     *
     * @param LoggerInterface|null $logger The logger.
     */
    protected function __construct(LoggerInterface $logger = null) {
        $this->setLogger($logger);
    }

    /**
     * Get the logger.
     *
     * @return LoggerInterface Returns the logger.
     */
    public function getLogger() {
        return $this->logger;
    }

    /**
     * Log an info.
     *
     * @param string $message The message.
     * @param array $context The context.
     * @return AbstractProvider Returns this provider.
     */
    protected function logInfo($message, array $context) {
        if (null !== $this->getLogger()) {
            $this->getLogger()->info($message, $context);
        }
        return $this;
    }

    /**
     * Set the logger.
     *
     * @param LoggerInterface $logger The logger.
     * @return AbstractProvider Returns this provider.
     */
    protected function setLogger(LoggerInterface $logger = null) {
        $this->logger = $logger;
        return $this;
    }

}