<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Argument;

use Error;
use Exception;
use ReflectionClass;
use ReflectionException;
use WBW\Library\Core\Exception\Argument\ObjectArgumentException;
use WBW\Library\Core\Exception\Reflection\ClassNotFoundException;
use WBW\Library\Core\Exception\Reflection\MethodNotFoundException;
use WBW\Library\Core\Exception\Reflection\SyntaxErrorException;
use WBW\Library\Core\FileSystem\FileHelper;

/**
 * Object helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Argument
 */
class ObjectHelper {

    /**
     * Get a class directory.
     *
     * @param mixed $object The class name or object.
     * @return string Returns the class directory.
     */
    public static function getDirectory($object) {
        $filename = (new ReflectionClass($object))->getFileName();
        return dirname($filename);
    }

    /**
     * Get the hooks.
     *
     * @param string $classpath The class path.
     * @param string $namespace The namespace.
     * @param string $classname The class name.
     * @param string $extends The class extend.
     * @param string $method The class method.
     * @return array Returns the hooks array.
     * @throws ClassNotFoundException Throws a hook class not found if the classname is not found.
     */
    public static function getHooks($classpath, $namespace, $classname = null, $extends = null, $method = null) {

        //
        $hooks = [];

        // Get the filenames.
        $filenames = FileHelper::getFileNames($classpath, ".php");

        // Handle each filenames.
        foreach ($filenames as $filename) {

            // Check the class name.
            if (null !== $classname && 0 === preg_match($classname, $filename)) {
                continue;
            }

            // Import the class.
            try {
                require_once $classpath . "/" . $filename;
            } catch (Error $ex) {
                throw new SyntaxErrorException($classpath . "/" . $filename);
            }

            // Init. the complete class name.
            $completeClassname = $namespace . basename($filename, ".php");

            try {
                $rc = new ReflectionClass($completeClassname);
            } catch (Exception $ex) {
                throw new ClassNotFoundException($completeClassname, $ex);
            }

            // Check the extends.
            if (false === (null === $extends || true === $rc->isSubclassOf($extends))) {
                continue;
            }

            // Initialize the hook.
            $hook = [];

            $hook["classpath"] = $classpath;
            $hook["namespace"] = $namespace;
            $hook["filename"]  = $filename;
            $hook["class"]     = $rc;
            $hook["method"]    = null;

            $hooks[] = $hook;

            // Check the method.
            if (null === $method) {
                continue;
            }

            try {
                $rm = $rc->getMethod($method);

                $hooks[count($hooks) - 1]["method"] = $rm;
            } catch (ReflectionException $ex) {
                throw new MethodNotFoundException($method, $ex);
            }
        }

        // Returns the hooks.
        return $hooks;
    }

    /**
     * Get the class name.
     *
     * @param mixed $object The class name or object.
     * @return string Returns the class name.
     * @throws ReflectionException Throws a Reflection exception if an error occurs.
     */
    public static function getName($object) {
        return (new ReflectionClass($object))->name;
    }

    /**
     * Get the short class name.
     *
     * @param mixed $object The class name or object.
     * @return string Returns the short class name.
     * @throws ReflectionException Throws a Reflection exception if an error occurs.
     */
    public static function getShortName($object) {
        return (new ReflectionClass($object))->getShortName();
    }

    /**
     * Determines if a value is an object.
     *
     * @param mixed $value The value.
     * @throws ObjectArgumentException Throws an Object argument exception if the value is not of expected type.
     */
    public static function isObject($value) {
        if (false === is_object($value)) {
            throw new ObjectArgumentException($value);
        }
    }

    /**
     * URL decode a short name.
     *
     * @param string $string The string.
     * @return string Returns the URL decoded short name.
     */
    public static function urlDecodeShortName($string) {
        return ucfirst(preg_replace_callback("/(\-[a-z]{1})/", function($matches) {
                return strtoupper(str_replace("-", "", $matches[0]));
            }, $string));
    }

    /**
     * URL encode a short name.
     *
     * @param mixed $object The object.
     * @return string Returns the URL encoded short name.
     * @throws ReflectionException Throws a Reflection exception if an error occurs.
     */
    public static function urlEncodeShortName($object) {
        $classname = static::getShortName($object);
        $explode   = preg_replace("/([a-z]{1})([A-Z]{1})/", "$1-$2", $classname);
        return strtolower($explode);
    }

}
